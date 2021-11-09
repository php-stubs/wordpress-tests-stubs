# WordPress Core Test Suite Stubs

This package provides stub declarations for [the WordPress Core Test Suite](https://make.wordpress.org/core/handbook/testing/automated-testing/phpunit/) functions, classes and interfaces.

These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://github.com/phpstan/phpstan), when writing tests for WordPress plugins, themes, and core.

Stubs are generated directly from the [source](https://github.com/wordpress/wordpress-develop) using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

### Requirements

- PHP >=7.1

### Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/wordpress-tests-stubs
```

Alternatively you may download `wordpress-tests-stubs.php` directly.

### Usage in PHPStan

Include all stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        - %rootDir%/../../php-stubs/wordpress-stubs/wordpress-stubs.php
        - %rootDir%/../../php-stubs/wordpress-tests-stubs/wordpress-tests-stubs.php
```
