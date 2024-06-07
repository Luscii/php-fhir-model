<?php

namespace HL7\FHIR\R4\PHPFHIRTests\Integration\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 08:29+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R4\FHIRResource\FHIRBundle;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use HL7\FHIR\R4\PHPFHIRDebugClient;
use HL7\FHIR\R4\PHPFHIRTypeEnum;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;

/**
 * Class FHIRFamilyMemberHistoryTest
 * @package \HL7\FHIR\R4\PHPFHIRTests\Integration\FHIRResource\FHIRDomainResource
 */
class FHIRFamilyMemberHistoryTest extends TestCase
{
    /** @var \HL7\FHIR\R4\PHPFHIRDebugClient */
    private PHPFHIRDebugClient $client;

    /** @var array */
    private array $_fetchedResources = [];

    protected function setUp(): void
    {
        $this->client = new PHPFHIRDebugClient('https://hapi.fhir.org/baseR4');
    }

    /**
     * @param string $format Either xml or json
     * @return string
     */
    protected function fetchResource(string $format): string
    {
        if (isset($this->_fetchedResources[$format])) {
            return $this->_fetchedResources[$format];
        }
        $rc = $this->client->get(sprintf('/%s', PHPFHIRTypeEnum::FAMILY_MEMBER_HISTORY->value), ['_count' => '1', '_format' => $format]);
        $this->assertEmpty($rc->err, sprintf('curl error seen: %s', $rc->err));
        if (404 === $rc->code) {
            $this->markTestSkipped(sprintf('Endpoint "%s" has no resources of type "%s"', $this->client->_getBaseUrl(), PHPFHIRTypeEnum::FAMILY_MEMBER_HISTORY->value));
        } else if (500 === $rc->code) {
            $this->markTestSkipped(sprintf('Endpoint "%s" is experiencing issues', $this->client->_getBaseUrl()));
        } else {
            $this->assertEquals(200, $rc->code, 'Expected 200 OK');
        }
        $this->assertIsString($rc->resp);
        $this->_fetchedResources[$format] = $rc->resp;
        $fname = sprintf('%s%sFamilyMemberHistory-v4.0.1-source.%s', PHPFHIR_OUTPUT_TMP_DIR, DIRECTORY_SEPARATOR, $format);
        file_put_contents($fname, $rc->resp);
        return $rc->resp;
    }

    /**
     * @param string $sourceJSON
     * @param bool $asArray
     * @return mixed
     */
    protected function decodeJson(string $sourceJSON, bool $asArray): mixed
    {
        $this->assertJson($sourceJSON);
        $decoded = json_decode($sourceJSON, $asArray);
        if (JSON_ERROR_NONE !== json_last_error()) {
            $this->fail(sprintf(
                'Error decoded JSON: %s; Raw: %s',
                function_exists('json_last_error_msg') ? json_last_error_msg() : ('Code: '.json_last_error()),
                $sourceJSON
            ));
        }
        return $decoded;
    }

    public function testXML(): void
    {
        $sourceXML = $this->fetchResource('xml');
        try {
            $bundle = FHIRBundle::xmlUnserialize($sourceXML);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from XML: %s; Returned XML: %s',
                    $e->getMessage(),
                    $sourceXML
                ),
                $e->getCode(),
                $e
            );
        }
        $this->assertInstanceOf(FHIRBundle::class, $bundle);
        $entry = $bundle->getEntry();
        if (0 === count($entry)) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "https://hapi.fhir.org/baseR4" does not have any "FamilyMemberHistory" entries to test against (returned xml: %s)',
                $sourceXML
            ));
        }
        $this->assertCount(1, $entry);
        $resource = $entry[0]->getResource();
        $resourceXmlWriter = $resource->xmlSerialize();
        $resourceXml = $resourceXmlWriter->outputMemory();
        try {
            $type = FHIRFamilyMemberHistory::xmlUnserialize($resourceXml);
        } catch (\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "FamilyMemberHistory" from XML: %s; XML: %s',
                    $e->getMessage(),
                    $resourceXml
                ),
                $e->getCode(),
                $e
            );
        }
        $this->assertInstanceOf(FHIRFamilyMemberHistory::class, $type);
        $typeXmlWriter = $type->xmlSerialize();
        $this->assertEquals($resourceXml, $typeXmlWriter->outputMemory());
        $bundleXmlWriter = $bundle->xmlSerialize();
        $this->assertXmlStringEqualsXmlString($sourceXML, $bundleXmlWriter->outputMemory());
    }

    public function testJSON(): void
    {
        $sourceJSON = $this->fetchResource('json');
        $decoded = $this->decodeJson($sourceJSON, true);
        try {
            $bundle = new FHIRBundle($decoded);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from JSON: %s; Returned JSON: %s',
                    $e->getMessage(),
                    $sourceJSON
                ),
                $e->getCode(),
                $e
            );
        }
        $entry = $bundle->getEntry();
        if (0 === count($entry)) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "https://hapi.fhir.org/baseR4" does not have any FamilyMemberHistory" entries to test against (returned json: %s)',
                $sourceJSON
            ));
        }

        $reEncoded = json_encode($bundle);
        try {
            $this->assertEquals($decoded, $this->decodeJson($reEncoded, true));
        } catch (\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    "json_encode output of \"FHIRFamilyMemberHistory\" does not match input: %s\nSource:\n%s\nRe-encoded:\n%s\n",
                    $e->getMessage(),
                    $sourceJSON,
                    $reEncoded
                ),
                $e->getCode(),
                $e
            );
        }
    }

    public function testValidationXML(): void
    {
        $sourceXML = $this->fetchResource('xml');
        try {
            $bundle = FHIRBundle::xmlUnserialize($sourceXML);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from XML: %s; Returned XML: %s',
                    $e->getMessage(),
                    $sourceXML
                ),
                $e->getCode(),
                $e
            );
        }
        $entry = $bundle->getEntry();
        if (0 === count($entry)) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "https://hapi.fhir.org/baseR4" does not have any FamilyMemberHistory" entries to test against (returned XML: %s)',
                $sourceXML
            ));
        }
        $errs = $bundle->_getValidationErrors();
        try {
            $this->assertCount(0, $errs);
        } catch (\Exception $e) {
            $this->markTestSkipped(sprintf('Validation errors seen: %s', json_encode($errs, JSON_PRETTY_PRINT)));
        }
    }

    public function testValidationJSON(): void
    {
        $sourceJSON = $this->fetchResource('json');
        $decoded = $this->decodeJson($sourceJSON, true);
        try {
            $bundle = new FHIRBundle($decoded);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from JSON: %s; Returned JSON: %s',
                    $e->getMessage(),
                    $sourceJSON
                ),
                $e->getCode(),
                $e
            );
        }
        $entry = $bundle->getEntry();
        if (0 === count($entry)) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "https://hapi.fhir.org/baseR4" does not have any FamilyMemberHistory" entries to test against (returned json: %s)',
                $sourceJSON
            ));
        }
        $errs = $bundle->_getValidationErrors();
        try {
            $this->assertCount(0, $errs);
        } catch (\Exception $e) {
            $this->markTestSkipped(sprintf('Validation errors seen: %s', json_encode($errs, JSON_PRETTY_PRINT)));
        }
    }
}
