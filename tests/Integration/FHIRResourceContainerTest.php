<?php

namespace FHIR\Tests\Integration;

use HL7\FHIR\STU3\FHIRDomainResource\FHIRTask;
use HL7\FHIR\STU3\PHPFHIRResponseParser;
use PHPUnit\Framework\TestCase;

class FHIRResourceContainerTest extends TestCase
{
    /**
     * @var PHPFHIRResponseParser
     */
    private $parser;

    protected function setUp()
    {
        parent::setUp();
        $this->parser = new PHPFHIRResponseParser(false);
    }

    public function testThatResourceContainerIsParsed()
    {
        // Assert fix for https://github.com/dcarbone/php-fhir/issues/35
        $json = '{"resourceType":"Task","id":"some-task-id","contained":[{"resourceType":"Patient","identifier":[{"system":"http://fhir.nl/fhir/NamingSystem/bsn","value":"198254544"}],"name":[{"family":"Noniem","given":["Albert"]}],"telecom":[{"system":"email","value":"test@example.com","use":"home"}],"gender":"male","birthDate":"1983-02-14"}],"status":"requested","intent":"plan","code":{"coding":[{"system":"Somenamespace...","code":"1.2.3.4"}],"text":"Sample code"},"authoredOn":"2018-06-05T17:34:11.02+00:00"}';
        /** @var FHIRTask $taskResource */
        $taskResource = $this->parser->parse($json);
        $this->assertEquals('198254544', $taskResource->contained[0]->Patient->identifier[0]->value->value);
    }
}
