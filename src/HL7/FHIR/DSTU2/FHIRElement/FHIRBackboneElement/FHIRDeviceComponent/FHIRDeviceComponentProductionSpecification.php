<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU2\FHIRElement\FHIRString;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRStringPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * Describes the characteristics, operational status and capabilities of a
 * medical-related component of a medical device.
 *
 * Class FHIRDeviceComponentProductionSpecification
 * @package \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent
 */
class FHIRDeviceComponentProductionSpecification extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION;

    const FIELD_SPEC_TYPE = 'specType';
    const FIELD_COMPONENT_ID = 'componentId';
    const FIELD_PRODUCTION_SPEC = 'productionSpec';
    const FIELD_PRODUCTION_SPEC_EXT = '_productionSpec';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specification type, such as, serial number, part number, hardware
     * revision, software revision, etc.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $specType = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the internal component unique identification. This is a provision for
     * manufacture specific standard components using a private OID. 11073-10101 has a
     * partition for private OID semantic that the manufacture can make use of.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $componentId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the printable string defining the component.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $productionSpec = null;

    /**
     * Validation map for fields in type DeviceComponent.ProductionSpecification
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDeviceComponentProductionSpecification Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SPEC_TYPE])) {
            if ($data[self::FIELD_SPEC_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSpecType($data[self::FIELD_SPEC_TYPE]);
            } else {
                $this->setSpecType(new FHIRCodeableConcept($data[self::FIELD_SPEC_TYPE]));
            }
        }
        if (isset($data[self::FIELD_COMPONENT_ID])) {
            if ($data[self::FIELD_COMPONENT_ID] instanceof FHIRIdentifier) {
                $this->setComponentId($data[self::FIELD_COMPONENT_ID]);
            } else {
                $this->setComponentId(new FHIRIdentifier($data[self::FIELD_COMPONENT_ID]));
            }
        }
        if (isset($data[self::FIELD_PRODUCTION_SPEC]) || isset($data[self::FIELD_PRODUCTION_SPEC_EXT])) {
            $value = $data[self::FIELD_PRODUCTION_SPEC] ?? null;
            $ext = (isset($data[self::FIELD_PRODUCTION_SPEC_EXT]) && is_array($data[self::FIELD_PRODUCTION_SPEC_EXT])) ? $data[self::FIELD_PRODUCTION_SPEC_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setProductionSpec($value);
                } else if (is_array($value)) {
                    $this->setProductionSpec(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setProductionSpec(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProductionSpec(new FHIRString($ext));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specification type, such as, serial number, part number, hardware
     * revision, software revision, etc.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecType(): null|FHIRCodeableConcept
    {
        return $this->specType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specification type, such as, serial number, part number, hardware
     * revision, software revision, etc.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $specType
     * @return static
     */
    public function setSpecType(null|FHIRCodeableConcept $specType = null): self
    {
        if (null === $specType) {
            $specType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->specType, $specType);
        $this->specType = $specType;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the internal component unique identification. This is a provision for
     * manufacture specific standard components using a private OID. 11073-10101 has a
     * partition for private OID semantic that the manufacture can make use of.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getComponentId(): null|FHIRIdentifier
    {
        return $this->componentId;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the internal component unique identification. This is a provision for
     * manufacture specific standard components using a private OID. 11073-10101 has a
     * partition for private OID semantic that the manufacture can make use of.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $componentId
     * @return static
     */
    public function setComponentId(null|FHIRIdentifier $componentId = null): self
    {
        if (null === $componentId) {
            $componentId = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->componentId, $componentId);
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the printable string defining the component.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getProductionSpec(): null|FHIRString
    {
        return $this->productionSpec;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the printable string defining the component.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $productionSpec
     * @return static
     */
    public function setProductionSpec(null|string|FHIRStringPrimitive|FHIRString $productionSpec = null): self
    {
        if (null !== $productionSpec && !($productionSpec instanceof FHIRString)) {
            $productionSpec = new FHIRString($productionSpec);
        }
        $this->_trackValueSet($this->productionSpec, $productionSpec);
        $this->productionSpec = $productionSpec;
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
        return self::_VALIDATION_RULES;
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
        if (null !== ($v = $this->getSpecType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPEC_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComponentId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPONENT_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductionSpec())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCTION_SPEC] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SPEC_TYPE])) {
            $v = $this->getSpecType();
            foreach($validationRules[self::FIELD_SPEC_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION, self::FIELD_SPEC_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPEC_TYPE])) {
                        $errs[self::FIELD_SPEC_TYPE] = [];
                    }
                    $errs[self::FIELD_SPEC_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPONENT_ID])) {
            $v = $this->getComponentId();
            foreach($validationRules[self::FIELD_COMPONENT_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION, self::FIELD_COMPONENT_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPONENT_ID])) {
                        $errs[self::FIELD_COMPONENT_ID] = [];
                    }
                    $errs[self::FIELD_COMPONENT_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCTION_SPEC])) {
            $v = $this->getProductionSpec();
            foreach($validationRules[self::FIELD_PRODUCTION_SPEC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION, self::FIELD_PRODUCTION_SPEC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCTION_SPEC])) {
                        $errs[self::FIELD_PRODUCTION_SPEC] = [];
                    }
                    $errs[self::FIELD_PRODUCTION_SPEC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification
     */
    public static function xmlUnserialize(null|string|\DOMElement $element, null|PHPFHIRXmlSerializableInterface $type = null, null|int|PHPFHIRXmlSerializableConfigInterface $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $libxmlOpts = $config;
            $config = new PHPFHIRConfig();
        } else if (null === $config) {
            $libxmlOpts = PHPFHIRXmlSerializableConfigInterface::DEFAULT_LIBXML_OPTS;
            $config = new PHPFHIRConfig();
        } else {
            $libxmlOpts = $config->getLibxmlOpts();
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = $config->newDOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf(
                    '%s::xmlUnserialize - String provided is not parseable as XML: %s',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))
                ));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRDeviceComponentProductionSpecification)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && '' !== ($ens = (string)$element->namespaceURI)) {
            $type->_setFHIRXMLNamespace($ens);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_SPEC_TYPE === $n->nodeName) {
                $type->setSpecType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_COMPONENT_ID === $n->nodeName) {
                $type->setComponentId(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCTION_SPEC === $n->nodeName) {
                $type->setProductionSpec(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PRODUCTION_SPEC);
        if (null !== $n) {
            $pt = $type->getProductionSpec();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setProductionSpec($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DOMElement
     * @throws \DOMException
     */
    public function xmlSerialize(\DOMElement $element = null, null|int|PHPFHIRXmlSerializableConfigInterface $config = null): \DOMElement
    {
        if (is_int($config)) {
            $libxmlOpts = $config;
            $config = new PHPFHIRConfig();
        } else if (null === $config) {
            $libxmlOpts = PHPFHIRXmlSerializableConfigInterface::DEFAULT_LIBXML_OPTS;
            $config = new PHPFHIRConfig();
        } else {
            $libxmlOpts = $config->getLibxmlOpts();
        }
        if (null === $element) {
            $dom = $config->newDOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DeviceComponentProductionSpecification'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSpecType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SPEC_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getComponentId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPONENT_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProductionSpec())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCTION_SPEC);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getSpecType())) {
            $out->{self::FIELD_SPEC_TYPE} = $v;
        }
        if (null !== ($v = $this->getComponentId())) {
            $out->{self::FIELD_COMPONENT_ID} = $v;
        }
        if (null !== ($v = $this->getProductionSpec())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRODUCTION_SPEC} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRODUCTION_SPEC_EXT} = $ext;
            }
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