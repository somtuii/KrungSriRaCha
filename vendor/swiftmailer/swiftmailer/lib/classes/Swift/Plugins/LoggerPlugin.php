{
    "name": "phpunit/phpunit-mock-objects",
    "description": "Mock Object library for PHPUnit",
    "type": "library",
    "keywords": [
        "xunit",
        "mock"
    ],
    "homepage": "https://github.com/sebastianbergmann/phpunit-mock-objects/",
    "license": "BSD-3-Clause",
    "authors": [
        {
            "name": "Sebastian Bergmann",
            "email": "sb@sebastian-bergmann.de",
            "role": "lead"
        }
    ],
    "support": {
        "issues": "https://github.com/sebastianbergmann/phpunit-mock-objects/issues",
        "irc": "irc://irc.freenode.net/phpunit"
    },
    "require": {
        "php": ">=5.3.3",
        "phpunit/php-text-template": "~1.2",
        "doctrine/instantiator": "^1.0.2",
        "sebastian/exporter": "~1.2"
    },
    "require-dev": {
        "phpunit/phpunit": "~4.4"
    },
    "suggest": {
        "ext-soap": "*"
    },
    "autoload": {
        "classmap": [
            "src/"
        ]
    },
    "autoload-dev": {
        "classmap": [
            "tests/_fixture/"
        ]
    },
    "extra": {
        "branch-alias": {
            "dev-master": "2.3.x-dev"
        }
    }
}

