<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="http://schema.phpunit.de/4.2/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         backupGlobals="false"
         verbose="true">
  <testsuite name="Diff">
    <directory suffix="Test.php">tests</directory>
  </testsuite>

  <filter>
    <whitelist processUncoveredFilesFromWhitelist="true">
      <directory suffix=".php">src</directory>
    </whitelist>
  </filter>
</phpunit>

