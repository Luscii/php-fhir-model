<?php

namespace FHIR\Tests\Integration\R4;

use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRFlag;
use PHPUnit\Framework\TestCase;

class StrangeAttributesJsonTest extends TestCase
{
    public function testThatItProducesWellFormattedJsonUrls(): void
    {
        // Regression test for a bug where the identifier.system was actually put in _identifier.system.
        // Bug is similar to https://github.com/dcarbone/php-fhir/issues/28

        $subject = new FHIRReference();
        $subjectIdentifier = new FHIRIdentifier();
        $subjectIdentifier->setSystem(new FHIRUri('https://www.example.com'));
        $subjectIdentifier->setValue(new FHIRString('Sample subject identifier value'));
        $subject->setIdentifier($subjectIdentifier);

        $flag = new FHIRFlag();
        $flag->setSubject($subject);

        $expected = '{"subject":{"identifier":{"system":"https:\/\/www.example.com","value":"Sample subject identifier value"}},"resourceType":"Flag"}';
        $actual = json_encode($flag);

        $this->assertEquals($expected, $actual);
    }
}
