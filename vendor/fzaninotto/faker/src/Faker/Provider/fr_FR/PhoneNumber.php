{
    "name":              "doctrine/instantiator",
    "description":       "A small, lightweight utility to instantiate objects in PHP without invoking their constructors",
    "type":              "library",
    "license":           "MIT",
    "homepage":          "https://github.com/doctrine/instantiator",
    "keywords":          [
        "instantiate",
        "constructor"
    ],
    "authors": [
        {
            "name":     "Marco Pivetta",
            "email":    "ocramius@gmail.com",
            "homepage": "http://ocramius.github.com/"
        }
    ],
    "require": {
        "php": ">=5.3,<8.0-DEV"
    },
    "require-dev": {
        "ext-phar":                  "*",
        "ext-pdo":                   "*",
        "phpunit/phpunit":           "~4.0",
        "squizlabs/php_codesniffer": "~2.0",
        "athletic/athletic":         "~0.1.8"
    },
    "autoload": {
        "psr-4": {
            "Doctrine\\Instantiator\\": "src/Doctrine/Instantiator/"
        }
    },
    "autoload-dev": {
        "psr-0": {
            "DoctrineTest\\InstantiatorPerformance\\": "tests",
            "DoctrineTest\\InstantiatorTest\\": "tests",
            "DoctrineTest\\InstantiatorTestAsset\\": "tests"
        }
    },
    "extra": {
        "branch-alias": {
            "dev-master": "1.0.x-dev"
        }
    }
}
