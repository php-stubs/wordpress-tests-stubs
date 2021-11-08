#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for WordPress Tests.\n * @see https://wordpress.org\n * @see https://github.com/php-stubs/wordpress-tests-stubs\n */'

FILE="wordpress-tests-stubs.php"

set -e

test -f "$FILE"
test -d "source/includes"

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"
