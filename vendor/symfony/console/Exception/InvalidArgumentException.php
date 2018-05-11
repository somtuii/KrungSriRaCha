<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="http://schema.phpunit.de/4.1/phpunit.xsd"
         bootstrap="tests/bootstrap.php"
         backupGlobals="false"
         verbose="true">
  <testsuite name="Comparator">
    <directory suffix="Test.php">tests</directory>
  </testsuite>

  <logging>
    <log type="coverage-html" target="build/coverage"/>
  </logging>

  <filter>
    <whitelist processUncoveredFilesFromWhitelist="true">
      <directory suffix=".php">src</directory>
    </whitelist>
  </filter>
</phpunit>

