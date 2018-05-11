{
    "name": "phpunit/php-code-coverage",
    "description": "Library that provides collection, processing, and rendering functionality for PHP code coverage information.",
    "type": "library",
    "keywords": [
        "coverage",
        "testing",
        "xunit"
    ],
    "homepage": "https://github.com/sebastianbergmann/php-code-coverage",
    "license": "BSD-3-Clause",
    "authors": [
        {
            "name": "Sebastian Bergmann",
            "email": "sb@sebastian-bergmann.de",
            "role": "lead"
        }
    ],
    "support": {
        "issues": "https://github.com/sebastianbergmann/php-code-coverage/issues",
        "irc": "irc://irc.freenode.net/phpunit"
    },
    "require": {
        "php": ">=5.3.3",
        "phpunit/php-file-iterator": "~1.3",
        "phpunit/php-token-stream": "~1.3",
        "phpunit/php-text-template": "~1.2",
        "sebastian/environment": "^1.3.2",
        "sebastian/version": "~1.0"
    },
    "require-dev": {
        "phpunit/phpunit": "~4",
        "ext-xdebug": ">=2.1.4"
    },
    "suggest": {
        "ext-dom": "*",
        "ext-xdebug": ">=2.2.1",
        "ext-xmlwriter": "*"
    },
    "autoload": {
        "classmap": [
            "src/"
        ]
    },
    "extra": {
        "branch-alias": {
            "dev-master": "2.2.x-dev"
        }
    }
}
