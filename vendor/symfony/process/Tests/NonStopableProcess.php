{
    "name": "symfony/dom-crawler",
    "type": "library",
    "description": "Symfony DomCrawler Component",
    "keywords": [],
    "homepage": "https://symfony.com",
    "license": "MIT",
    "authors": [
        {
            "name": "Fabien Potencier",
            "email": "fabien@symfony.com"
        },
        {
            "name": "Symfony Community",
            "homepage": "https://symfony.com/contributors"
        }
    ],
    "require": {
        "php": ">=5.3.9"
    },
    "require-dev": {
        "symfony/css-selector": "~2.3"
    },
    "suggest": {
        "symfony/css-selector": ""
    },
    "autoload": {
        "psr-4": { "Symfony\\Component\\DomCrawler\\": "" },
        "exclude-from-classmap": [
            "/Tests/"
        ]
    },
    "minimum-stability": "dev",
    "extra": {
        "branch-alias": {
            "dev-master": "2.7-dev"
        }
    }
}
