{
    "name": "illuminate/console",
    "description": "The Illuminate Console package.",
    "license": "MIT",
    "homepage": "http://laravel.com",
    "support": {
        "issues": "https://github.com/laravel/framework/issues",
        "source": "https://github.com/laravel/framework"
    },
    "authors": [
        {
            "name": "Taylor Otwell",
            "email": "taylorotwell@gmail.com"
        }
    ],
    "require": {
        "php": ">=5.5.9",
        "illuminate/contracts": "5.1.*",
        "illuminate/support": "5.1.*",
        "symfony/console": "2.7.*",
        "nesbot/carbon": "~1.19"
    },
    "autoload": {
        "psr-4": {
            "Illuminate\\Console\\": ""
        }
    },
    "extra": {
        "branch-alias": {
            "dev-master": "5.1-dev"
        }
    },
    "suggest": {
        "guzzlehttp/guzzle": "Required to use the thenPing method on schedules (~5.3|~6.0).",
        "mtdowling/cron-expression": "Required to use scheduling component (~1.0).",
        "symfony/process": "Required to use scheduling component (2.7.*)."
    },
    "minimum-stability": "dev"
}
