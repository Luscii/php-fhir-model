<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRInteger;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRIntegerPrimitive;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * Todo.
 *
 * Class FHIRSubstancePolymerRepeat
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeat extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT;

    const FIELD_NUMBER_OF_UNITS = 'numberOfUnits';
    const FIELD_NUMBER_OF_UNITS_EXT = '_numberOfUnits';
    const FIELD_AVERAGE_MOLECULAR_FORMULA = 'averageMolecularFormula';
    const FIELD_AVERAGE_MOLECULAR_FORMULA_EXT = '_averageMolecularFormula';
    const FIELD_REPEAT_UNIT_AMOUNT_TYPE = 'repeatUnitAmountType';
    const FIELD_REPEAT_UNIT = 'repeatUnit';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $numberOfUnits = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $averageMolecularFormula = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $repeatUnitAmountType = null;
    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    protected null|array $repeatUnit = [];

    /**
     * Validation map for fields in type SubstancePolymer.Repeat
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstancePolymerRepeat Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NUMBER_OF_UNITS]) || isset($data[self::FIELD_NUMBER_OF_UNITS_EXT])) {
            $value = $data[self::FIELD_NUMBER_OF_UNITS] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_OF_UNITS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_UNITS_EXT])) ? $data[self::FIELD_NUMBER_OF_UNITS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfUnits($value);
                } else if (is_array($value)) {
                    $this->setNumberOfUnits(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfUnits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumberOfUnits(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA]) || isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT])) {
            $value = $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA] ?? null;
            $ext = (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT])) ? $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAverageMolecularFormula($value);
                } else if (is_array($value)) {
                    $this->setAverageMolecularFormula(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAverageMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAverageMolecularFormula(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE])) {
            if ($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRepeatUnitAmountType($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]);
            } else {
                $this->setRepeatUnitAmountType(new FHIRCodeableConcept($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_REPEAT_UNIT])) {
            if (is_array($data[self::FIELD_REPEAT_UNIT])) {
                foreach($data[self::FIELD_REPEAT_UNIT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerRepeatUnit) {
                        $this->addRepeatUnit($v);
                    } else {
                        $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($v));
                    }
                }
            } elseif ($data[self::FIELD_REPEAT_UNIT] instanceof FHIRSubstancePolymerRepeatUnit) {
                $this->addRepeatUnit($data[self::FIELD_REPEAT_UNIT]);
            } else {
                $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($data[self::FIELD_REPEAT_UNIT]));
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getNumberOfUnits(): null|FHIRInteger
    {
        return $this->numberOfUnits;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $numberOfUnits
     * @return static
     */
    public function setNumberOfUnits(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfUnits = null): self
    {
        if (null !== $numberOfUnits && !($numberOfUnits instanceof FHIRInteger)) {
            $numberOfUnits = new FHIRInteger($numberOfUnits);
        }
        $this->_trackValueSet($this->numberOfUnits, $numberOfUnits);
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getAverageMolecularFormula(): null|FHIRString
    {
        return $this->averageMolecularFormula;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $averageMolecularFormula
     * @return static
     */
    public function setAverageMolecularFormula(null|string|FHIRStringPrimitive|FHIRString $averageMolecularFormula = null): self
    {
        if (null !== $averageMolecularFormula && !($averageMolecularFormula instanceof FHIRString)) {
            $averageMolecularFormula = new FHIRString($averageMolecularFormula);
        }
        $this->_trackValueSet($this->averageMolecularFormula, $averageMolecularFormula);
        $this->averageMolecularFormula = $averageMolecularFormula;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRepeatUnitAmountType(): null|FHIRCodeableConcept
    {
        return $this->repeatUnitAmountType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $repeatUnitAmountType
     * @return static
     */
    public function setRepeatUnitAmountType(null|FHIRCodeableConcept $repeatUnitAmountType = null): self
    {
        if (null === $repeatUnitAmountType) {
            $repeatUnitAmountType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->repeatUnitAmountType, $repeatUnitAmountType);
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    public function getRepeatUnit(): null|array
    {
        return $this->repeatUnit;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $repeatUnit
     * @return static
     */
    public function addRepeatUnit(null|FHIRSubstancePolymerRepeatUnit $repeatUnit = null): self
    {
        if (null === $repeatUnit) {
            $repeatUnit = new FHIRSubstancePolymerRepeatUnit();
        }
        $this->_trackValueAdded();
        $this->repeatUnit[] = $repeatUnit;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[] $repeatUnit
     * @return static
     */
    public function setRepeatUnit(array $repeatUnit = []): self
    {
        if ([] !== $this->repeatUnit) {
            $this->_trackValuesRemoved(count($this->repeatUnit));
            $this->repeatUnit = [];
        }
        if ([] === $repeatUnit) {
            return $this;
        }
        foreach($repeatUnit as $v) {
            if ($v instanceof FHIRSubstancePolymerRepeatUnit) {
                $this->addRepeatUnit($v);
            } else {
                $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($v));
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
        if (null !== ($v = $this->getNumberOfUnits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_UNITS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPEAT_UNIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_UNITS])) {
            $v = $this->getNumberOfUnits();
            foreach($validationRules[self::FIELD_NUMBER_OF_UNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_NUMBER_OF_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_UNITS])) {
                        $errs[self::FIELD_NUMBER_OF_UNITS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_UNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $v = $this->getAverageMolecularFormula();
            foreach($validationRules[self::FIELD_AVERAGE_MOLECULAR_FORMULA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_AVERAGE_MOLECULAR_FORMULA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
                        $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = [];
                    }
                    $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE])) {
            $v = $this->getRepeatUnitAmountType();
            foreach($validationRules[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_REPEAT_UNIT_AMOUNT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE])) {
                        $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = [];
                    }
                    $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT_UNIT])) {
            $v = $this->getRepeatUnit();
            foreach($validationRules[self::FIELD_REPEAT_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_REPEAT_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT_UNIT])) {
                        $errs[self::FIELD_REPEAT_UNIT] = [];
                    }
                    $errs[self::FIELD_REPEAT_UNIT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
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
        } else if (!($type instanceof FHIRSubstancePolymerRepeat)) {
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
            if (self::FIELD_NUMBER_OF_UNITS === $n->nodeName) {
                $type->setNumberOfUnits(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_AVERAGE_MOLECULAR_FORMULA === $n->nodeName) {
                $type->setAverageMolecularFormula(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REPEAT_UNIT_AMOUNT_TYPE === $n->nodeName) {
                $type->setRepeatUnitAmountType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REPEAT_UNIT === $n->nodeName) {
                $type->addRepeatUnit(FHIRSubstancePolymerRepeatUnit::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_UNITS);
        if (null !== $n) {
            $pt = $type->getNumberOfUnits();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNumberOfUnits($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AVERAGE_MOLECULAR_FORMULA);
        if (null !== $n) {
            $pt = $type->getAverageMolecularFormula();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAverageMolecularFormula($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstancePolymerRepeat'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getNumberOfUnits())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_OF_UNITS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AVERAGE_MOLECULAR_FORMULA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPEAT_UNIT_AMOUNT_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REPEAT_UNIT);
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
        if (null !== ($v = $this->getNumberOfUnits())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER_OF_UNITS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_OF_UNITS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVERAGE_MOLECULAR_FORMULA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $out->{self::FIELD_REPEAT_UNIT_AMOUNT_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            $out->{self::FIELD_REPEAT_UNIT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REPEAT_UNIT}[] = $v;
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