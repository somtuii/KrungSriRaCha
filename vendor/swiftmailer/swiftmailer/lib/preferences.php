<?xml version="1.0" encoding="UTF-8"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <xs:annotation>
    <xs:documentation source="https://phpunit.de/manual/4.8/en/appendixes.configuration.html">
      This Schema file defines the rules by which the XML configuration file of PHPUnit 4.8 may be structured.
    </xs:documentation>
    <xs:appinfo source="http://www.phpunit.de/manual/current/en/appendixes.configuration.html"/>
  </xs:annotation>
  <xs:element name="phpunit" type="phpUnitType">
    <xs:annotation>
      <xs:documentation>Root Element</xs:documentation>
    </xs:annotation>
  </xs:element>
  <xs:complexType name="filtersType">
    <xs:choice>
      <xs:sequence>
        <xs:element name="blacklist" type="filterType"/>
        <xs:element name="whitelist" type="whiteListType" minOccurs="0"/>
      </xs:sequence>
      <xs:sequence>
        <xs:element name="whitelist" type="whiteListType"/>
      </xs:sequence>
    </xs:choice>
  </xs:complexType>
  <xs:complexType name="filterType">
    <xs:sequence>
      <xs:group ref="pathGroup"/>
      <xs:element name="exclude" maxOccurs="unbounded" minOccurs="0">
        <xs:complexType>
          <xs:group ref="pathGroup"/>
        </xs:complexType>
      </xs:element>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="whiteListType">
    <xs:complexContent>
      <xs:extension base="filterType">
        <xs:attribute name="addUncoveredFilesFromWhitelist" default="false" type="xs:boolean"/>
        <xs:attribute name="processUncoveredFilesFromWhitelist" default="true" type="xs:boolean"/>
      </xs:extension>
    </xs:complexContent>
  </xs:complexType>
  <xs:complexType name="groupsType">
    <xs:choice>
      <xs:sequence>
        <xs:element name="include" type="groupType"/>
        <xs:element name="exclude" type="groupType" minOccurs="0"/>
      </xs:sequence>
      <xs:sequence>
        <xs:element name="exclude" type="groupType"/>
      </xs:sequence>
    </xs:choice>
  </xs:complexType>
  <xs:complexType name="groupType">
    <xs:sequence>
      <xs:element name="group" type="xs:string" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="listenersType">
    <xs:sequence>
      <xs:element name="listener" type="objectType" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="objectType">
    <xs:sequence>
      <xs:element name="arguments" minOccurs="0">
        <xs:complexType>
          <xs:group ref="argumentsGroup"/>
        </xs:complexType>
      </xs:element>
    </xs:sequence>
    <xs:attribute name="class" type="xs:string" use="required"/>
    <xs:attribute name="file" type="xs:anyURI"/>
  </xs:complexType>
  <xs:complexType name="arrayType">
    <xs:sequence>
      <xs:element name="element" type="argumentType" minOccurs="0" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="argumentType">
    <xs:group ref="argumentChoice"/>
    <xs:attribute name="key" use="required"/>
  </xs:complexType>
  <xs:group name="argumentsGroup">
    <xs:sequence>
      <xs:element name="array" type="arrayType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="integer" type="xs:integer" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="string" type="xs:string" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="double" type="xs:double" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="null" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="object" type="objectType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="file" type="xs:anyURI" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="directory" type="xs:anyURI" minOccurs="0" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:group>
  <xs:group name="argumentChoice">
    <xs:choice>
      <xs:element name="array" type="arrayType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="integer" type="xs:integer" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="string" type="xs:string" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="double" type="xs:double" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="null" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="object" type="objectType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="file" type="xs:anyURI" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="directory" type="xs:anyURI" minOccurs="0" maxOccurs="unbounded"/>
    </xs:choice>
  </xs:group>
  <xs:complexType name="loggersType">
    <xs:sequence>
      <xs:element name="log" type="loggerType" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="loggerType">
    <xs:attribute name="type">
      <xs:simpleType>
        <xs:restriction base="xs:string">
          <xs:enumeration value="coverage-html"/>
          <xs:enumeration value="coverage-text"/>
          <xs:enumeration value="coverage-clover"/>
          <xs:enumeration value="coverage-crap4j"/>
          <xs:enumeration value="json"/>
          <xs:enumeration value="plain"/>
          <xs:enumeration value="tap"/>
          <xs:enumeration value="junit"/>
          <xs:enumeration value="testdox-html"/>
          <xs:enumeration value="testdox-text"/>
        </xs:restriction>
      </xs:simpleType>
    </xs:attribute>
    <xs:attribute name="target" type="xs:anyURI"/>
    <xs:attribute name="lowUpperBound" type="xs:nonNegativeInteger" default="35"/>
    <xs:attribute name="highLowerBound" type="xs:nonNegativeInteger" default="70"/>
    <xs:attribute name="logIncompleteSkipped" type="xs:boolean" default="false"/>
    <xs:attribute name="showUncoveredFiles" type="xs:boolean" default="false"/>
    <xs:attribute name="threshold" type="xs:nonNegativeInteger" default="30"/>
  </xs:complexType>
  <xs:group name="pathGroup">
    <xs:sequence>
      <xs:element name="directory" type="directoryFilterType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="file" type="fileFilterType" minOccurs="0" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:group>
  <xs:complexType name="directoryFilterType">
    <xs:simpleContent>
      <xs:extension base="xs:anyURI">
        <xs:attribute type="xs:string" name="suffix" default="Test.php"/>
        <xs:attributeGroup ref="phpVersionGroup"/>
      </xs:extension>
    </xs:simpleContent>
  </xs:complexType>
  <xs:complexType name="fileFilterType">
    <xs:simpleContent>
      <xs:extension base="xs:anyURI">
        <xs:attributeGroup ref="phpVersionGroup"/>
      </xs:extension>
    </xs:simpleContent>
  </xs:complexType>
  <xs:attributeGroup name="phpVersionGroup">
    <xs:attribute name="phpVersion" type="xs:string" default="5.3.0"/>
    <xs:attribute name="phpVersionOperator" type="xs:string" default="&gt;="/>
  </xs:attributeGroup>
  <xs:complexType name="phpType">
    <xs:sequence>
      <xs:element name="includePath" type="xs:anyURI" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="ini" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="const" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="var" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="env" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="post" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="get" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="cookie" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="server" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="files" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
      <xs:element name="request" type="namedValueType" minOccurs="0" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="namedValueType">
    <xs:attribute name="name" use="required" type="xs:string"/>
    <xs:attribute name="value" use="required" type="xs:anySimpleType"/>
  </xs:complexType>
  <xs:complexType name="phpUnitType">
    <xs:annotation>
      <xs:documentation>The main type specifying the document structure</xs:documentation>
    </xs:annotation>
    <xs:group ref="configGroup"/>
    <xs:attributeGroup ref="configAttributeGroup"/>
  </xs:complexType>
  <xs:attributeGroup name="configAttributeGroup">
    <xs:attribute name="backupGlobals" type="xs:boolean" default="true"/>
    <xs:attribute name="backupStaticAttributes" type="xs:boolean" default="false"/>
    <xs:attribute name="bootstrap" type="xs:anyURI"/>
    <xs:attribute name="cacheTokens" type="xs:boolean"/>
    <xs:attribute name="colors" type="xs:boolean" default="false"/>
    <xs:attribute name="columns" type="xs:integer" default="80"/>
    <xs:attribute name="convertErrorsToExceptions" type="xs:boolean" default="true"/>
    <xs:attribute name="convertNoticesToExceptions" type="xs:boolean" default="true"/>
    <xs:attribute name="convertWarningsToExceptions" type="xs:boolean" default="true"/>
    <xs:attribute name="forceCoversAnnotation" type="xs:boolean" default="false"/>
    <xs:attribute name="mapTestClassNameToCoveredClassName" type="xs:boolean" default="false"/>
    <xs:attribute name="printerClass" type="xs:string" default="PHPUnit_TextUI_ResultPrinter"/>
    <xs:attribute name="printerFile" type="xs:anyURI"/>
    <xs:attribute name="processIsolation" type="xs:boolean" default="false"/>
    <xs:attribute name="stopOnError" type="xs:boolean" default="false"/>
    <xs:attribute name="stopOnFailure" type="xs:boolean" default="false"/>
    <xs:attribute name="stopOnIncomplete" type="xs:boolean" default="false"/>
    <xs:attribute name="stopOnRisky" type="xs:boolean" default="false"/>
    <xs:attribute name="stopOnSkipped" type="xs:boolean" default="false"/>
    <xs:attribute name="beStrictAboutTestsThatDoNotTestAnything" type="xs:boolean" default="false"/>
    <xs:attribute name="beStrictAboutOutputDuringTests" type="xs:boolean" default="false"/>
    <xs:attribute name="beStrictAboutTestSize" type="xs:boolean" default="false"/>
    <xs:attribute name="beStrictAboutTodoAnnotatedTests" type="xs:boolean" default="false"/>
    <xs:attribute name="beStrictAboutChangesToGlobalState" type="xs:boolean" default="false"/>
    <xs:attribute name="checkForUnintentionallyCoveredCode" type="xs:boolean" default="false"/>
    <xs:attribute name="strict" type="xs:boolean" default="false"/>
    <xs:attribute name="testSuiteLoaderClass" type="xs:string" default="PHPUnit_Runner_StandardTestSuiteLoader"/>
    <xs:attribute name="testSuiteLoaderFile" type="xs:anyURI"/>
    <xs:attribute name="timeoutForSmallTests" type="xs:integer" default="1"/>
    <xs:attribute name="timeoutForMediumTests" type="xs:integer" default="10"/>
    <xs:attribute name="timeoutForLargeTests" type="xs:integer" default="60"/>
    <xs:attribute name="verbose" type="xs:boolean" default="false"/>
    <xs:attribute name="stderr" type="xs:boolean" default="false"/>
  </xs:attributeGroup>
  <xs:group name="configGroup">
    <xs:all>
      <xs:element ref="testSuiteFacet" minOccurs="0"/>
      <xs:element name="groups" type="groupsType" minOccurs="0"/>
      <xs:element name="filter" type="filtersType" minOccurs="0"/>
      <xs:element name="logging" type="loggersType" minOccurs="0"/>
      <xs:element name="listeners" type="listenersType" minOccurs="0"/>
      <xs:element name="php" type="phpType" minOccurs="0"/>
      <xs:element name="selenium" type="seleniumType" minOccurs="0"/>
    </xs:all>
  </xs:group>
  <xs:complexType name="seleniumType">
    <xs:sequence>
      <xs:element name="browser" type="browserType"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="browserType">
    <xs:attribute name="name" type="xs:string"/>
    <xs:attribute name="browser" type="xs:string"/>
    <xs:attribute name="host" type="xs:anyURI"/>
    <xs:attribute name="port" type="xs:nonNegativeInteger"/>
    <xs:attribute name="timeout" type="xs:nonNegativeInteger"/>
  </xs:complexType>
  <xs:element name="testSuiteFacet" abstract="true"/>
  <xs:element name="testsuite" type="testSuiteType" substitutionGroup="testSuiteFacet"/>
  <xs:element name="testsuites" type="testSuitesType" substitutionGroup="testSuiteFacet"/>
  <xs:complexType name="testSuitesType">
    <xs:sequence>
      <xs:element name="testsuite" type="testSuiteType" maxOccurs="unbounded"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="testSuiteType">
    <xs:sequence>
      <xs:group ref="pathGroup"/>
      <xs:element name="exclude" type="xs:anyURI" minOccurs="0" maxOccurs="unbounded"/>
    </xs:sequence>
    <xs:attribute name="name" type="xs:string" use="required"/>
  </xs:complexType>
</xs:schema>
