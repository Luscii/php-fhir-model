<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 1st, 2024 06:49+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */


/**
 * Class PHPFHIRResponseParser
 * @package \HL7\FHIR\DSTU1
 */
class PHPFHIRResponseParser
{
    private const XML_START = ['<'];
    private const JSON_START = ['{', '['];

    /** @var \HL7\FHIR\DSTU1\PHPFHIRConfig $config */
    private PHPFHIRConfig $config;

    /**
     * PHPFHIRResponseParser Constructor
     * @param null|\HL7\FHIR\DSTU1\PHPFHIRConfig $config
     */
    public function __construct(null|PHPFHIRConfig $config = null)
    {
        if (null === $config) {
            $config = new PHPFHIRConfig;
        }
        $this->config = $config;
    }

    /**
     * @return \HL7\FHIR\DSTU1\PHPFHIRConfig
     */
    public function getConfig(): PHPFHIRConfig
    {
        return $this->config;
    }

    /**
     * Attempts to parse the provided input into FHIR objects.
     *
     * @param null|string|array|\stdClass|\SimpleXMLElement|\DOMDocument $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parse(null|string|array|\stdClass|\SimpleXMLElement|\DOMDocument $input): null|PHPFHIRTypeInterface
    {
        if (null === $input) {
            return null;
        } else if (is_string($input)) {
            return $this->parseString($input);
        } else if (is_array($input)) {
            return $this->parseArray($input);
        } else {
            return $this->parseObject($input);
        }
    }

    /**
     * @param array $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseArray(array $input): null|PHPFHIRTypeInterface
    {
        if ([] === $input) {
            return null;
        }
        if (isset($input[PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE])) {
            $className = PHPFHIRTypeMap::getTypeClass($input[PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE]);
            if (null === $className) {
                throw new \UnexpectedValueException(sprintf(
                    'Provided input has "%s" value of "%s", but it does not map to any known type.  Other keys: ["%s"]',
                    PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE,
                    $input[PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE],
                    implode('","', array_keys($input))
                ));
            }
            return new $className($input);
        }
        throw new \DomainException(sprintf(
            'Unable to determine FHIR Type from provided array: missing "%s" key.  Available keys: ["%s"]',
            PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE,
            implode('","', array_keys($input))
        ));
    }

    /**
     * @param \stdClass $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseStdClass(\stdClass $input): null|PHPFHIRTypeInterface
    {
        return $this->parseArray((array)$input);
    }

    /**
     * @param \SimpleXMLElement $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseSimpleXMLElement(\SimpleXMLElement $input): null|PHPFHIRTypeInterface
    {
        return $this->parseDOMDocument(dom_import_simplexml($input)->ownerDocument);
    }

    /**
     * @param \DOMDocument $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseDOMDocument(\DOMDocument $input): null|PHPFHIRTypeInterface
    {
        $elementName = $input->documentElement->nodeName;
        /** @var \HL7\FHIR\DSTU1\PHPFHIRTypeInterface $fhirType */
        $fhirType = PHPFHIRTypeMap::getTypeClass($elementName);
        if (null === $fhirType) {
            throw new \UnexpectedValueException(sprintf(
                'Unable to locate FHIR type for root XML element "%s". Input seen: %s',
                $elementName,
                $this->getPrintableStringInput($input->saveXML())
            ));
        }
        return $fhirType::xmlUnserialize($input->documentElement, $this->config);
    }

    /**
     * @param \stdClass|\SimpleXMLElement|\DOMDocument $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseObject(\stdClass|\SimpleXMLElement|\DOMDocument $input): null|PHPFHIRTypeInterface
    {
        if ($input instanceof \stdClass) {
            return $this->parseStdClass($input);
        } elseif ($input instanceof \SimpleXMLElement) {
            return $this->parseSimpleXMLElement($input);
        } else {
            return $this->parseDOMDocument($input);
        }
    }

    /**
     * @param string $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseXml(string $input): null|PHPFHIRTypeInterface
    {
        libxml_use_internal_errors(true);
        $dom = $this->config->newDOMDocment();
        $dom->loadXML($input, $this->config->getLibxmlOpts());
        $err = libxml_get_last_error();
        libxml_use_internal_errors(false);
        if (false === $err) {
            return $this->parseDOMDocument($dom);
        }
        throw new \DomainException(sprintf(
            'Unable to parse provided input as XML.  Error: %s; Input: %s',
            $err ? $err->message : 'Unknown',
            $this->getPrintableStringInput($input)
        ));
    }

    /**
     * @param string $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseJson(string $input): null|PHPFHIRTypeInterface
    {
        $decoded = json_decode($input, true);
        $err = json_last_error();
        if (JSON_ERROR_NONE !== $err) {
            throw new \DomainException(sprintf(
                'Unable to parse provided input as JSON.  Error: %s; Input: %s',
                json_last_error_msg(),
               $this->getPrintableStringInput($input)
            ));
        }

        return $this->parseArray($decoded);
    }

    /**
     * @param string $input
     * @return null|\HL7\FHIR\DSTU1\PHPFHIRTypeInterface
     */
    public function parseString(string $input): null|PHPFHIRTypeInterface
    {
        $input = trim($input);
        if ('' === $input) {
            return null;
        }
        $chr = $input[0];
        if (in_array(self::XML_START, $chr, true)) {
            return $this->parseXml($input);
        } elseif (in_array(self::JSON_START, $chr, true)) {
            return $this->parseJson($input);
        }
        throw new \UnexpectedValueException(sprintf(
            'Input string must be either XML or JSON encoded object.  Provided: %s',
           $this->getPrintableStringInput($input)
        ));
    }

    /**
     * @param string $input
     * @return string
     */
    protected function getPrintableStringInput(string $input): string
    {
        if (strlen($input) > 100) {
            return sprintf('%s[...]', substr($input, 0, 100));
        }
        return $input;
    }
}
