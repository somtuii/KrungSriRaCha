imports:
  - javascript
  - php

tools:
  php_code_sniffer:
    filter:
      excluded-paths: [ spec/*, integration/*, features/* ]
    config:
      standard: PSR2

  php_analyzer:
    filter:
      excluded-paths: [ spec/*, integration/* ]

  php_sim:
    filter:
      excluded-paths: [ spec/*, integration/* ]

build_failure_conditions:
    - 'issues.label("coding-style").exists'

filter:
  excluded_paths:
    - docs/*
    - vendor/*
