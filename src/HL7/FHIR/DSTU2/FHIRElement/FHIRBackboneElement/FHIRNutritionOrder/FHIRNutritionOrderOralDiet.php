<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

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
use HL7\FHIR\DSTU2\FHIRElement\FHIRString;
use HL7\FHIR\DSTU2\FHIRElement\FHIRTiming;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRStringPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderOralDiet
 * @package \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderOralDiet extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET;

    const FIELD_TYPE = 'type';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_NUTRIENT = 'nutrient';
    const FIELD_TEXTURE = 'texture';
    const FIELD_FLUID_CONSISTENCY_TYPE = 'fluidConsistencyType';
    const FIELD_INSTRUCTION = 'instruction';
    const FIELD_INSTRUCTION_EXT = '_instruction';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $type = [];
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming[]
     */
    protected null|array $schedule = [];
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications required for
     * the oral diet.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient[]
     */
    protected null|array $nutrient = [];
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture[]
     */
    protected null|array $texture = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $fluidConsistencyType = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text or additional instructions or information pertaining to the oral diet.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $instruction = null;

    /**
     * Validation map for fields in type NutritionOrder.OralDiet
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRNutritionOrderOralDiet Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULE])) {
            if (is_array($data[self::FIELD_SCHEDULE])) {
                foreach($data[self::FIELD_SCHEDULE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTiming) {
                        $this->addSchedule($v);
                    } else {
                        $this->addSchedule(new FHIRTiming($v));
                    }
                }
            } elseif ($data[self::FIELD_SCHEDULE] instanceof FHIRTiming) {
                $this->addSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->addSchedule(new FHIRTiming($data[self::FIELD_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_NUTRIENT])) {
            if (is_array($data[self::FIELD_NUTRIENT])) {
                foreach($data[self::FIELD_NUTRIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRNutritionOrderNutrient) {
                        $this->addNutrient($v);
                    } else {
                        $this->addNutrient(new FHIRNutritionOrderNutrient($v));
                    }
                }
            } elseif ($data[self::FIELD_NUTRIENT] instanceof FHIRNutritionOrderNutrient) {
                $this->addNutrient($data[self::FIELD_NUTRIENT]);
            } else {
                $this->addNutrient(new FHIRNutritionOrderNutrient($data[self::FIELD_NUTRIENT]));
            }
        }
        if (isset($data[self::FIELD_TEXTURE])) {
            if (is_array($data[self::FIELD_TEXTURE])) {
                foreach($data[self::FIELD_TEXTURE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRNutritionOrderTexture) {
                        $this->addTexture($v);
                    } else {
                        $this->addTexture(new FHIRNutritionOrderTexture($v));
                    }
                }
            } elseif ($data[self::FIELD_TEXTURE] instanceof FHIRNutritionOrderTexture) {
                $this->addTexture($data[self::FIELD_TEXTURE]);
            } else {
                $this->addTexture(new FHIRNutritionOrderTexture($data[self::FIELD_TEXTURE]));
            }
        }
        if (isset($data[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
            if (is_array($data[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
                foreach($data[self::FIELD_FLUID_CONSISTENCY_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFluidConsistencyType($v);
                    } else {
                        $this->addFluidConsistencyType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_FLUID_CONSISTENCY_TYPE] instanceof FHIRCodeableConcept) {
                $this->addFluidConsistencyType($data[self::FIELD_FLUID_CONSISTENCY_TYPE]);
            } else {
                $this->addFluidConsistencyType(new FHIRCodeableConcept($data[self::FIELD_FLUID_CONSISTENCY_TYPE]));
            }
        }
        if (isset($data[self::FIELD_INSTRUCTION]) || isset($data[self::FIELD_INSTRUCTION_EXT])) {
            $value = $data[self::FIELD_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_INSTRUCTION_EXT]) && is_array($data[self::FIELD_INSTRUCTION_EXT])) ? $data[self::FIELD_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setInstruction($value);
                } else if (is_array($value)) {
                    $this->setInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInstruction(new FHIRString($ext));
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
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType(): null|array
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[] $type
     * @return static
     */
    public function setType(array $type = []): self
    {
        if ([] !== $this->type) {
            $this->_trackValuesRemoved(count($this->type));
            $this->type = [];
        }
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming[]
     */
    public function getSchedule(): null|array
    {
        return $this->schedule;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $schedule
     * @return static
     */
    public function addSchedule(null|FHIRTiming $schedule = null): self
    {
        if (null === $schedule) {
            $schedule = new FHIRTiming();
        }
        $this->_trackValueAdded();
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRTiming[] $schedule
     * @return static
     */
    public function setSchedule(array $schedule = []): self
    {
        if ([] !== $this->schedule) {
            $this->_trackValuesRemoved(count($this->schedule));
            $this->schedule = [];
        }
        if ([] === $schedule) {
            return $this;
        }
        foreach($schedule as $v) {
            if ($v instanceof FHIRTiming) {
                $this->addSchedule($v);
            } else {
                $this->addSchedule(new FHIRTiming($v));
            }
        }
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications required for
     * the oral diet.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient[]
     */
    public function getNutrient(): null|array
    {
        return $this->nutrient;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications required for
     * the oral diet.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient $nutrient
     * @return static
     */
    public function addNutrient(null|FHIRNutritionOrderNutrient $nutrient = null): self
    {
        if (null === $nutrient) {
            $nutrient = new FHIRNutritionOrderNutrient();
        }
        $this->_trackValueAdded();
        $this->nutrient[] = $nutrient;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications required for
     * the oral diet.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient[] $nutrient
     * @return static
     */
    public function setNutrient(array $nutrient = []): self
    {
        if ([] !== $this->nutrient) {
            $this->_trackValuesRemoved(count($this->nutrient));
            $this->nutrient = [];
        }
        if ([] === $nutrient) {
            return $this;
        }
        foreach($nutrient as $v) {
            if ($v instanceof FHIRNutritionOrderNutrient) {
                $this->addNutrient($v);
            } else {
                $this->addNutrient(new FHIRNutritionOrderNutrient($v));
            }
        }
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture[]
     */
    public function getTexture(): null|array
    {
        return $this->texture;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture $texture
     * @return static
     */
    public function addTexture(null|FHIRNutritionOrderTexture $texture = null): self
    {
        if (null === $texture) {
            $texture = new FHIRNutritionOrderTexture();
        }
        $this->_trackValueAdded();
        $this->texture[] = $texture;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture[] $texture
     * @return static
     */
    public function setTexture(array $texture = []): self
    {
        if ([] !== $this->texture) {
            $this->_trackValuesRemoved(count($this->texture));
            $this->texture = [];
        }
        if ([] === $texture) {
            return $this;
        }
        foreach($texture as $v) {
            if ($v instanceof FHIRNutritionOrderTexture) {
                $this->addTexture($v);
            } else {
                $this->addTexture(new FHIRNutritionOrderTexture($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFluidConsistencyType(): null|array
    {
        return $this->fluidConsistencyType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $fluidConsistencyType
     * @return static
     */
    public function addFluidConsistencyType(null|FHIRCodeableConcept $fluidConsistencyType = null): self
    {
        if (null === $fluidConsistencyType) {
            $fluidConsistencyType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->fluidConsistencyType[] = $fluidConsistencyType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[] $fluidConsistencyType
     * @return static
     */
    public function setFluidConsistencyType(array $fluidConsistencyType = []): self
    {
        if ([] !== $this->fluidConsistencyType) {
            $this->_trackValuesRemoved(count($this->fluidConsistencyType));
            $this->fluidConsistencyType = [];
        }
        if ([] === $fluidConsistencyType) {
            return $this;
        }
        foreach($fluidConsistencyType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addFluidConsistencyType($v);
            } else {
                $this->addFluidConsistencyType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text or additional instructions or information pertaining to the oral diet.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getInstruction(): null|FHIRString
    {
        return $this->instruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text or additional instructions or information pertaining to the oral diet.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $instruction
     * @return static
     */
    public function setInstruction(null|string|FHIRStringPrimitive|FHIRString $instruction = null): self
    {
        if (null !== $instruction && !($instruction instanceof FHIRString)) {
            $instruction = new FHIRString($instruction);
        }
        $this->_trackValueSet($this->instruction, $instruction);
        $this->instruction = $instruction;
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
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSchedule())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCHEDULE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNutrient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUTRIENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTexture())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEXTURE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFluidConsistencyType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FLUID_CONSISTENCY_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTRUCTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCHEDULE])) {
            $v = $this->getSchedule();
            foreach($validationRules[self::FIELD_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCHEDULE])) {
                        $errs[self::FIELD_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUTRIENT])) {
            $v = $this->getNutrient();
            foreach($validationRules[self::FIELD_NUTRIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_NUTRIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUTRIENT])) {
                        $errs[self::FIELD_NUTRIENT] = [];
                    }
                    $errs[self::FIELD_NUTRIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXTURE])) {
            $v = $this->getTexture();
            foreach($validationRules[self::FIELD_TEXTURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_TEXTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXTURE])) {
                        $errs[self::FIELD_TEXTURE] = [];
                    }
                    $errs[self::FIELD_TEXTURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
            $v = $this->getFluidConsistencyType();
            foreach($validationRules[self::FIELD_FLUID_CONSISTENCY_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_FLUID_CONSISTENCY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
                        $errs[self::FIELD_FLUID_CONSISTENCY_TYPE] = [];
                    }
                    $errs[self::FIELD_FLUID_CONSISTENCY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTRUCTION])) {
            $v = $this->getInstruction();
            foreach($validationRules[self::FIELD_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTRUCTION])) {
                        $errs[self::FIELD_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_INSTRUCTION][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
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
        } else if (!($type instanceof FHIRNutritionOrderOralDiet)) {
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
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SCHEDULE === $n->nodeName) {
                $type->addSchedule(FHIRTiming::xmlUnserialize($n));
            } elseif (self::FIELD_NUTRIENT === $n->nodeName) {
                $type->addNutrient(FHIRNutritionOrderNutrient::xmlUnserialize($n));
            } elseif (self::FIELD_TEXTURE === $n->nodeName) {
                $type->addTexture(FHIRNutritionOrderTexture::xmlUnserialize($n));
            } elseif (self::FIELD_FLUID_CONSISTENCY_TYPE === $n->nodeName) {
                $type->addFluidConsistencyType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INSTRUCTION === $n->nodeName) {
                $type->setInstruction(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INSTRUCTION);
        if (null !== $n) {
            $pt = $type->getInstruction();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInstruction($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('NutritionOrderOralDiet'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSchedule())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SCHEDULE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNutrient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NUTRIENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTexture())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TEXTURE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getFluidConsistencyType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FLUID_CONSISTENCY_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getInstruction())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSTRUCTION);
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
        if ([] !== ($vs = $this->getType())) {
            $out->{self::FIELD_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSchedule())) {
            $out->{self::FIELD_SCHEDULE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SCHEDULE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNutrient())) {
            $out->{self::FIELD_NUTRIENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NUTRIENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTexture())) {
            $out->{self::FIELD_TEXTURE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TEXTURE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFluidConsistencyType())) {
            $out->{self::FIELD_FLUID_CONSISTENCY_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FLUID_CONSISTENCY_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INSTRUCTION_EXT} = $ext;
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