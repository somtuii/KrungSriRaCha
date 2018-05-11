<?xml version="1.0" encoding="UTF-8"?>
<phpunit backupGlobals="false"
         backupStaticAttributes="false"
         bootstrap="vendor/autoload.php"
         beStrictAboutOutputDuringTests="true"
         beStrictAboutTestsThatDoNotTestAnything="true"
         beStrictAboutTodoAnnotatedTests="true"
         checkForUnintentionallyCoveredCode="true"
         verbose="true">
 <testsuites>
  <testsuite name="Environment">
   <directory>tests</directory>
  </testsuite>
 </testsuites>
 <filter>
  <whitelist addUncoveredFilesFromWhitelist="true">
   <directory>src</directory>
  </whitelist>
 </filter>
</phpunit>
