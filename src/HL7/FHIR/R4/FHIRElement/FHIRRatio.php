<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement;

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

use HL7\FHIR\R4\FHIRElement;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;

/**
 * A relationship of two Quantity values - expressed as a numerator and a
 * denominator.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRRatio
 * @package \HL7\FHIR\R4\FHIRElement
 */
class FHIRRatio extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RATIO;
    const FIELD_NUMERATOR = 'numerator';
    const FIELD_DENOMINATOR = 'denominator';

    /** @var string */
    private $_xmlns = '';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the numerator.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity
     */
    protected ?FHIRQuantity $numerator = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the denominator.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity
     */
    protected ?FHIRQuantity $denominator = null;

    /**
     * Validation map for fields in type Ratio
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRRatio Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRatio::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NUMERATOR])) {
            if ($data[self::FIELD_NUMERATOR] instanceof FHIRQuantity) {
                $this->setNumerator($data[self::FIELD_NUMERATOR]);
            } else {
                $this->setNumerator(new FHIRQuantity($data[self::FIELD_NUMERATOR]));
            }
        }
        if (isset($data[self::FIELD_DENOMINATOR])) {
            if ($data[self::FIELD_DENOMINATOR] instanceof FHIRQuantity) {
                $this->setDenominator($data[self::FIELD_DENOMINATOR]);
            } else {
                $this->setDenominator(new FHIRQuantity($data[self::FIELD_DENOMINATOR]));
            }
        }
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
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Ratio{$xmlns}></Ratio>";
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the numerator.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity
     */
    public function getNumerator(): ?FHIRQuantity
    {
        return $this->numerator;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the numerator.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity $numerator
     * @return static
     */
    public function setNumerator(?FHIRQuantity $numerator = null): object
    {
        $this->_trackValueSet($this->numerator, $numerator);
        $this->numerator = $numerator;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the denominator.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity
     */
    public function getDenominator(): ?FHIRQuantity
    {
        return $this->denominator;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the denominator.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity $denominator
     * @return static
     */
    public function setDenominator(?FHIRQuantity $denominator = null): object
    {
        $this->_trackValueSet($this->denominator, $denominator);
        $this->denominator = $denominator;
        return $this;
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
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getNumerator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMERATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDenominator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DENOMINATOR] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NUMERATOR])) {
            $v = $this->getNumerator();
            foreach($validationRules[self::FIELD_NUMERATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RATIO, self::FIELD_NUMERATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMERATOR])) {
                        $errs[self::FIELD_NUMERATOR] = [];
                    }
                    $errs[self::FIELD_NUMERATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DENOMINATOR])) {
            $v = $this->getDenominator();
            foreach($validationRules[self::FIELD_DENOMINATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RATIO, self::FIELD_DENOMINATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DENOMINATOR])) {
                        $errs[self::FIELD_DENOMINATOR] = [];
                    }
                    $errs[self::FIELD_DENOMINATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRRatio $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRRatio
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
                throw new \DomainException(sprintf('FHIRRatio::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRatio::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRRatio(null);
        } elseif (!is_object($type) || !($type instanceof FHIRRatio)) {
            throw new \RuntimeException(sprintf(
                'FHIRRatio::xmlUnserialize - $type must be instance of \HL7\FHIR\R4\FHIRElement\FHIRRatio or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_NUMERATOR === $n->nodeName) {
                $type->setNumerator(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_DENOMINATOR === $n->nodeName) {
                $type->setDenominator(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getNumerator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUMERATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDenominator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DENOMINATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getNumerator())) {
            $out->{self::FIELD_NUMERATOR} = $v;
        }
        if (null !== ($v = $this->getDenominator())) {
            $out->{self::FIELD_DENOMINATOR} = $v;
        }

        return $out;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}