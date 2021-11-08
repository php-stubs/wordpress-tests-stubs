#!/usr/bin/env bash

set -e

Do_release()
{
    local VERSION="$1"
    local SED_EXP

    echo "Releasing ${VERSION} version ..."

    if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
        echo "Tag exists!"
        echo
        return 0;
    fi

    # Get new version
    wget -q -O- "https://api.github.com/repos/WordPress/wordpress-develop/tarball/refs/tags/${VERSION}" \
        | tar -x -z --directory=source/ --strip-components=3 --wildcards "*/tests/phpunit/includes/"

    # Generate stubs
    echo "Generating stubs ..."
    ./generate.sh

    # Tag version
    git commit --all -m "Generate stubs for WordPress Tests ${VERSION}"
    git tag "v${VERSION}"
exit
}

TESTS_JSON="$(wget -q -O- "https://api.github.com/repos/WordPress/wordpress-develop/tags?per_page=100&page=2")"

while read -r TAG; do
    Do_release "${TAG}"
done < <(jq -r '[.[].name] | reverse[]' <<<"${TESTS_JSON}" | grep -A 1000 -F -x '4.7.0')
