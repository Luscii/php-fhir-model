<?php

namespace FHIR\Tests\Integration\R4;

use HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRTask;
use HL7\FHIR\R4\PHPFHIRResponseParser;
use PHPUnit\Framework\TestCase;

class FHIRTaskTest extends TestCase
{
    private PHPFHIRResponseParser $parser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->parser = new PHPFHIRResponseParser();
    }

    public function testThatTaskCanContainArbitrarilyAddedAttributes()
    {
        // This tests validates that a FHIR message can contain more than we
        // expect, without breaking a flow that just picks from the resource
        // what it needs.

        $json = '{ "resourceType": "Task", "id": "123", "meta": { "profile": [ "http://hl7.org/fhir/StructureDefinition/Task" ] }, "nonexisting-attribute": "some-value", "for": { "reference": "Patient/456", "nonexisting-attribute-again": "some-value-again" } }';
        $taskResource = $this->parser->parse($json);
        $this->assertInstanceOf(FHIRTask::class, $taskResource);

        $id = $taskResource->getId();
        $this->assertNotNull($id);
        $idValue = $id->getValue();
        $this->assertNotNull($idValue);
        $this->assertEquals('123', $idValue->getValue());

        $for = $taskResource->getFor();
        $this->assertNotNull($for);

        $reference = $for->getReference();
        $this->assertNotNull($reference);

        $referenceValue = $reference->getValue();
        $this->assertNotNull($referenceValue);

        $this->assertEquals('Patient/456', $referenceValue->getValue());
    }
}
