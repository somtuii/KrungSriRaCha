language: php

php:
  - 5.3
  - 5.4
  - 5.5
  - 5.6
  - 7.0
  - hhvm

matrix:
  allow_failures:
    - php: 7.0
  fast_finish: true
