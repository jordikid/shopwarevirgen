#!/usr/bin/env bash

composer dump-autoload
php "`dirname \"$0\"`"/phpstan-config-generator.php
php ../../../dev-ops/analyze/vendor/bin/phpstan analyze --configuration phpstan.neon src tests
php ../../../dev-ops/analyze/vendor/bin/psalm --config=psalm.xml --show-info=false --threads=$(nproc)
