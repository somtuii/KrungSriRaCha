language: php

php:
  - 5.3
  - 5.4
  - 5.5
  - 5.6
  - 7.0
  - hhvm
  - hhvm-nightly

matrix:
  allow_failures:
    - php: hhvm
    - php: hhvm-nightly

sudo: false

cache:
  directories:
    - $HOME/.composer/cache

before_install:
  - composer self-update

install:
  - travis_retry ./travis/install.sh

before_script:
  - ./travis/before_script.sh

script:
  - ./travis/script.sh

after_script:
  - ./travis/after_script.sh
notifications:
  email:
    - padraic.brady@gmail.com
    - dave@atstsolutions.co.uk
  irc: "irc.freenode.org#mockery"
