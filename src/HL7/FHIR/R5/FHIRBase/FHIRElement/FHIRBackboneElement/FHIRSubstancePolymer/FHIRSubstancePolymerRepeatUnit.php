<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRIntegerPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Properties of a substance specific to it being a polymer.
 *
 * Class FHIRSubstancePolymerRepeatUnit
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeatUnit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT;

    const FIELD_UNIT = 'unit';
    const FIELD_UNIT_EXT = '_unit';
    const FIELD_ORIENTATION = 'orientation';
    const FIELD_AMOUNT = 'amount';
    const FIELD_AMOUNT_EXT = '_amount';
    const FIELD_DEGREE_OF_POLYMERISATION = 'degreeOfPolymerisation';
    const FIELD_STRUCTURAL_REPRESENTATION = 'structuralRepresentation';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $unit = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $orientation = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $amount = null;
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    protected null|array $degreeOfPolymerisation = [];
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    protected null|array $structuralRepresentation = [];

    /**
     * Validation map for fields in type SubstancePolymer.RepeatUnit
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstancePolymerRepeatUnit Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_UNIT]) || isset($data[self::FIELD_UNIT_EXT])) {
            $value = $data[self::FIELD_UNIT] ?? null;
            $ext = (isset($data[self::FIELD_UNIT_EXT]) && is_array($data[self::FIELD_UNIT_EXT])) ? $data[self::FIELD_UNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setUnit($value);
                } else if (is_array($value)) {
                    $this->setUnit(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setUnit(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUnit(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ORIENTATION])) {
            if ($data[self::FIELD_ORIENTATION] instanceof FHIRCodeableConcept) {
                $this->setOrientation($data[self::FIELD_ORIENTATION]);
            } else {
                $this->setOrientation(new FHIRCodeableConcept($data[self::FIELD_ORIENTATION]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT]) || isset($data[self::FIELD_AMOUNT_EXT])) {
            $value = $data[self::FIELD_AMOUNT] ?? null;
            $ext = (isset($data[self::FIELD_AMOUNT_EXT]) && is_array($data[self::FIELD_AMOUNT_EXT])) ? $data[self::FIELD_AMOUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAmount($value);
                } else if (is_array($value)) {
                    $this->setAmount(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAmount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAmount(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DEGREE_OF_POLYMERISATION])) {
            if (is_array($data[self::FIELD_DEGREE_OF_POLYMERISATION])) {
                foreach($data[self::FIELD_DEGREE_OF_POLYMERISATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                        $this->addDegreeOfPolymerisation($v);
                    } else {
                        $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($v));
                    }
                }
            } elseif ($data[self::FIELD_DEGREE_OF_POLYMERISATION] instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                $this->addDegreeOfPolymerisation($data[self::FIELD_DEGREE_OF_POLYMERISATION]);
            } else {
                $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($data[self::FIELD_DEGREE_OF_POLYMERISATION]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURAL_REPRESENTATION])) {
            if (is_array($data[self::FIELD_STRUCTURAL_REPRESENTATION])) {
                foreach($data[self::FIELD_STRUCTURAL_REPRESENTATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerStructuralRepresentation) {
                        $this->addStructuralRepresentation($v);
                    } else {
                        $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($v));
                    }
                }
            } elseif ($data[self::FIELD_STRUCTURAL_REPRESENTATION] instanceof FHIRSubstancePolymerStructuralRepresentation) {
                $this->addStructuralRepresentation($data[self::FIELD_STRUCTURAL_REPRESENTATION]);
            } else {
                $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($data[self::FIELD_STRUCTURAL_REPRESENTATION]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getUnit(): null|FHIRString
    {
        return $this->unit;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $unit
     * @return static
     */
    public function setUnit(null|string|FHIRStringPrimitive|FHIRString $unit = null): self
    {
        if (null !== $unit && !($unit instanceof FHIRString)) {
            $unit = new FHIRString($unit);
        }
        $this->_trackValueSet($this->unit, $unit);
        $this->unit = $unit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOrientation(): null|FHIRCodeableConcept
    {
        return $this->orientation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $orientation
     * @return static
     */
    public function setOrientation(null|FHIRCodeableConcept $orientation = null): self
    {
        if (null === $orientation) {
            $orientation = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->orientation, $orientation);
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getAmount(): null|FHIRInteger
    {
        return $this->amount;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRIntegerPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger $amount
     * @return static
     */
    public function setAmount(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $amount = null): self
    {
        if (null !== $amount && !($amount instanceof FHIRInteger)) {
            $amount = new FHIRInteger($amount);
        }
        $this->_trackValueSet($this->amount, $amount);
        $this->amount = $amount;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public function getDegreeOfPolymerisation(): null|array
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation
     * @return static
     */
    public function addDegreeOfPolymerisation(null|FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation = null): self
    {
        if (null === $degreeOfPolymerisation) {
            $degreeOfPolymerisation = new FHIRSubstancePolymerDegreeOfPolymerisation();
        }
        $this->_trackValueAdded();
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[] $degreeOfPolymerisation
     * @return static
     */
    public function setDegreeOfPolymerisation(array $degreeOfPolymerisation = []): self
    {
        if ([] !== $this->degreeOfPolymerisation) {
            $this->_trackValuesRemoved(count($this->degreeOfPolymerisation));
            $this->degreeOfPolymerisation = [];
        }
        if ([] === $degreeOfPolymerisation) {
            return $this;
        }
        foreach($degreeOfPolymerisation as $v) {
            if ($v instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                $this->addDegreeOfPolymerisation($v);
            } else {
                $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($v));
            }
        }
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public function getStructuralRepresentation(): null|array
    {
        return $this->structuralRepresentation;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation
     * @return static
     */
    public function addStructuralRepresentation(null|FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation = null): self
    {
        if (null === $structuralRepresentation) {
            $structuralRepresentation = new FHIRSubstancePolymerStructuralRepresentation();
        }
        $this->_trackValueAdded();
        $this->structuralRepresentation[] = $structuralRepresentation;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[] $structuralRepresentation
     * @return static
     */
    public function setStructuralRepresentation(array $structuralRepresentation = []): self
    {
        if ([] !== $this->structuralRepresentation) {
            $this->_trackValuesRemoved(count($this->structuralRepresentation));
            $this->structuralRepresentation = [];
        }
        if ([] === $structuralRepresentation) {
            return $this;
        }
        foreach($structuralRepresentation as $v) {
            if ($v instanceof FHIRSubstancePolymerStructuralRepresentation) {
                $this->addStructuralRepresentation($v);
            } else {
                $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($v));
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
        if (null !== ($v = $this->getUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrientation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEGREE_OF_POLYMERISATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STRUCTURAL_REPRESENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT])) {
            $v = $this->getUnit();
            foreach($validationRules[self::FIELD_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT])) {
                        $errs[self::FIELD_UNIT] = [];
                    }
                    $errs[self::FIELD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIENTATION])) {
            $v = $this->getOrientation();
            foreach($validationRules[self::FIELD_ORIENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_ORIENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIENTATION])) {
                        $errs[self::FIELD_ORIENTATION] = [];
                    }
                    $errs[self::FIELD_ORIENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEGREE_OF_POLYMERISATION])) {
            $v = $this->getDegreeOfPolymerisation();
            foreach($validationRules[self::FIELD_DEGREE_OF_POLYMERISATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_DEGREE_OF_POLYMERISATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEGREE_OF_POLYMERISATION])) {
                        $errs[self::FIELD_DEGREE_OF_POLYMERISATION] = [];
                    }
                    $errs[self::FIELD_DEGREE_OF_POLYMERISATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURAL_REPRESENTATION])) {
            $v = $this->getStructuralRepresentation();
            foreach($validationRules[self::FIELD_STRUCTURAL_REPRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_STRUCTURAL_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURAL_REPRESENTATION])) {
                        $errs[self::FIELD_STRUCTURAL_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_STRUCTURAL_REPRESENTATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
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
        } else if (!($type instanceof FHIRSubstancePolymerRepeatUnit)) {
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
            if (self::FIELD_UNIT === $n->nodeName) {
                $type->setUnit(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ORIENTATION === $n->nodeName) {
                $type->setOrientation(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_AMOUNT === $n->nodeName) {
                $type->setAmount(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_DEGREE_OF_POLYMERISATION === $n->nodeName) {
                $type->addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation::xmlUnserialize($n));
            } elseif (self::FIELD_STRUCTURAL_REPRESENTATION === $n->nodeName) {
                $type->addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_UNIT);
        if (null !== $n) {
            $pt = $type->getUnit();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUnit($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AMOUNT);
        if (null !== $n) {
            $pt = $type->getAmount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAmount($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstancePolymerRepeatUnit'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getUnit())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UNIT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrientation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORIENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAmount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEGREE_OF_POLYMERISATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURAL_REPRESENTATION);
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
        if (null !== ($v = $this->getUnit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UNIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UNIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOrientation())) {
            $out->{self::FIELD_ORIENTATION} = $v;
        }
        if (null !== ($v = $this->getAmount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AMOUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AMOUNT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            $out->{self::FIELD_DEGREE_OF_POLYMERISATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEGREE_OF_POLYMERISATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            $out->{self::FIELD_STRUCTURAL_REPRESENTATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_STRUCTURAL_REPRESENTATION}[] = $v;
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