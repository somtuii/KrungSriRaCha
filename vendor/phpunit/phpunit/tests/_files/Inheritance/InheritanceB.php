language: php

php:
  - 5.3.3
  - 5.3
  - 5.4
  - 5.5
  - 5.6
  - hhvm

script:
  - phpunit --bootstrap src/Timer.php tests

notifications:
  email: false
  webhooks:
    urls:
      - https://webhooks.gitter.im/e/6668f52f3dd4e3f81960
    on_success: always
    on_failure: always
    on_start: false

