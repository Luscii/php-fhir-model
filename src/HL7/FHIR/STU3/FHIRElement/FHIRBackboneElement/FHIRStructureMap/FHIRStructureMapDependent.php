<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRId;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRIdPrimitive;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapDependent
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapDependent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_DEPENDENT;

    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VARIABLE_EXT = '_variable';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name of a rule or group to apply.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable to pass to the rule or group.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $variable = [];

    /**
     * Validation map for fields in type StructureMap.Dependent
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_VARIABLE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRStructureMapDependent Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_VARIABLE]) || isset($data[self::FIELD_VARIABLE_EXT])) {
            $value = $data[self::FIELD_VARIABLE] ?? null;
            $ext = (isset($data[self::FIELD_VARIABLE_EXT]) && is_array($data[self::FIELD_VARIABLE_EXT])) ? $data[self::FIELD_VARIABLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addVariable($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addVariable($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addVariable(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addVariable(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addVariable(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addVariable(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addVariable(new FHIRString($iext));
                }
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name of a rule or group to apply.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public function getName(): null|FHIRId
    {
        return $this->name;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name of a rule or group to apply.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRIdPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRId $name
     * @return static
     */
    public function setName(null|string|FHIRIdPrimitive|FHIRId $name = null): self
    {
        if (null !== $name && !($name instanceof FHIRId)) {
            $name = new FHIRId($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable to pass to the rule or group.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getVariable(): null|array
    {
        return $this->variable;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable to pass to the rule or group.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $variable
     * @return static
     */
    public function addVariable(null|string|FHIRStringPrimitive|FHIRString $variable = null): self
    {
        if (null !== $variable && !($variable instanceof FHIRString)) {
            $variable = new FHIRString($variable);
        }
        $this->_trackValueAdded();
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable to pass to the rule or group.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $variable
     * @return static
     */
    public function setVariable(array $variable = []): self
    {
        if ([] !== $this->variable) {
            $this->_trackValuesRemoved(count($this->variable));
            $this->variable = [];
        }
        if ([] === $variable) {
            return $this;
        }
        foreach($variable as $v) {
            if ($v instanceof FHIRString) {
                $this->addVariable($v);
            } else {
                $this->addVariable(new FHIRString($v));
            }
        }
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVariable())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VARIABLE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_DEPENDENT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIABLE])) {
            $v = $this->getVariable();
            foreach($validationRules[self::FIELD_VARIABLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_DEPENDENT, self::FIELD_VARIABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIABLE])) {
                        $errs[self::FIELD_VARIABLE] = [];
                    }
                    $errs[self::FIELD_VARIABLE][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent
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
        } else if (!($type instanceof FHIRStructureMapDependent)) {
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
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_VARIABLE === $n->nodeName) {
                $type->addVariable(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VARIABLE);
        if (null !== $n) {
            $type->addVariable($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('StructureMapDependent'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getVariable())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VARIABLE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getVariable())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_VARIABLE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VARIABLE_EXT} = $exts;
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