<?php declare(strict_types=1);

namespace HL7\FHIR\R4;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 23rd, 2023 13:30+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2023 Daniel Carbone (daniel.p.carbone@gmail.com)
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

/**
 * XHTML type used in special cases
 *
 * Class FHIRXHTML
 * @package \HL7\FHIR\R4
 */
class FHIRXHTML implements PHPFHIRTypeInterface
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_XHTML;

    /** @var null|\DOMNode */
    private ?\DOMNode $_data = null;
    /** @var null|string */
    private ?string $_elementName = null;
    /** @var string */
    private string $_xmlns = '';

    /** @var array */
    private static array $_validationRules = [];

    /**
     * XHTML Constructor
     * @param null|string|\SimpleXMLElement|\DOMNode $data
     */
    public function __construct($data = null)
    {
        $this->_setData($data);
    }

    /**
     * The name of the FHIR element this raw type represents
     *
     * @param string $elementName
     * @return \HL7\FHIR\R4\FHIRXHTML
     */
    public function _setElementName(string $elementName): FHIRXHTML
    {
        $this->_elementName = $elementName;
        return $this;
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLNamespace(): string
    {
        return $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace(string $xmlNamespace): object
    {
        $this->_xmlns = trim((string)$xmlNamespace);
        return $this;
    }


    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<XHTML{$xmlns}></XHTML>";
    }

    /**
     * @return null|\DOMNode
     */
    public function _getData(): ?\DOMNode
    {
        return $this->_data;
    }

    /**
     * @param null|string|\SimpleXMLElement|\DOMNode $data
     * @return \HL7\FHIR\R4\FHIRXHTML
     */
    public function _setData($data): FHIRXHTML
    {
        if (null === $data) {
            $this->_data = null;
            return $this;
        }
        if (is_string($data)) {
            $dom = new \DOMDocument();
            $dom->loadHTML($data);
            $this->_data = $dom->documentElement;
            return $this;
        }
        if ($data instanceof \SimpleXMLElement) {
            $dom = new \DOMDocument();
            $dom->appendChild($dom->importNode(dom_import_simplexml($data), true));
            $this->_data = $dom->documentElement;
            return $this;
        }
        if ($data instanceof \DOMDocument) {
            $dom = new \DOMDocument();
            $dom->appendChild($dom->importNode($data->documentElement, true));
            $this->_data = $dom->documentElement;
            return $this;
        }
        if ($data instanceof \DOMNode) {
            $dom = new \DOMDocument();
            $dom->appendChild($dom->importNode($data, true));
            $this->_data = $dom->documentElement;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$data must be one of: null, valid XHTML string, or instance of \\SimpleXMLElement or \\DOMNode, saw "%s"',
            gettype($data)
        ));
    }


    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = [];
        $validationRules = $this->_getValidationRules();
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\R4\FHIRXHTML $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\R4\FHIRXHTML
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRXHTML::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRXHTML::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRXHTML(null);
        } elseif (!is_object($type) || !($type instanceof FHIRXHTML)) {
            throw new \RuntimeException(sprintf(
                'FHIRXHTML::xmlUnserialize - $type must be instance of \HL7\FHIR\R4\FHIRXHTML or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        $type->_setData($element);
        return $type;
    }

     /**
     * @param \DOMElement|null $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        $data = $this->_getData();
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null === $element) {
            $dom = new \DOMDocument();
            if (!empty($xmlns)) {
                $xmlns = " xmlns=\"{$xmlns}\"";
            }
            if (null === $data) {
                $dom->loadXML("<XHTML{$xmlns}></XHTML>", $libxmlOpts);
                return $dom->documentElement;
            }
            $dom->appendChild($dom->importNode($data, true));
            return $dom->documentElement;
        }
        if (null === $data) {
            return $element;
        }
        if (!empty($xmlns)) {
            $element->setAttribute('xmlns', $xmlns);
        }
        $element->appendChild($element->ownerDocument->importNode($data, true));
        return $element;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $data = $this->_getData();
        if (null === $data) {
            return null;
        }
        return $data->ownerDocument->saveXML($data);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $data = $this->_getData();
        if (null === $data) {
            return '';
        }
        return $data->ownerDocument->saveXML($data);
    }
}