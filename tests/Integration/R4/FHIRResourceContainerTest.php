<?php

namespace FHIR\Tests\Integration\R4;

use HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPatient;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRTask;
use HL7\FHIR\R4\PHPFHIRResponseParser;
use PHPUnit\Framework\TestCase;

class FHIRResourceContainerTest extends TestCase
{
    private PHPFHIRResponseParser $parser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->parser = new PHPFHIRResponseParser();
    }

    public function testThatResourceContainerIsParsed()
    {
        // Assert fix for https://github.com/dcarbone/php-fhir/issues/35
        $json = '{"resourceType":"Task","id":"some-task-id","contained":[{"resourceType":"Patient","identifier":[{"system":"http://fhir.nl/fhir/NamingSystem/bsn","value":"198254544"}],"name":[{"family":"Noniem","given":["Albert"]}],"telecom":[{"system":"email","value":"test@example.com","use":"home"}],"gender":"male","birthDate":"1983-02-14"}],"status":"requested","intent":"plan","code":{"coding":[{"system":"Somenamespace...","code":"1.2.3.4"}],"text":"Sample code"},"authoredOn":"2018-06-05T17:34:11.02+00:00"}';
        /** @var FHIRTask $taskResource */
        $taskResource = $this->parser->parse($json);
        /** @var FHIRPatient $contained */
        $contained = $taskResource->getContained()[0];
        $this->assertEquals('198254544', $contained->getIdentifier()[0]->getValue()->getValue());
    }
}
