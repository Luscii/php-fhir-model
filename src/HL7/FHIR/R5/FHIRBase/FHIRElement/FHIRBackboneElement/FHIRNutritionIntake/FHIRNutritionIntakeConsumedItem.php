<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionIntake;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A record of food or fluid that is being consumed by a patient. A NutritionIntake
 * may indicate that the patient may be consuming the food or fluid now or has
 * consumed the food or fluid in the past. The source of this information can be
 * the patient, significant other (such as a family member or spouse), or a
 * clinician. A common scenario where this information is captured is during the
 * history taking process during a patient visit or stay or through an app that
 * tracks food or fluids consumed. The consumption information may come from
 * sources such as the patient's memory, from a nutrition label, or from a
 * clinician documenting observed intake.
 *
 * Class FHIRNutritionIntakeConsumedItem
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionIntake
 */
class FHIRNutritionIntakeConsumedItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM;

    const FIELD_TYPE = 'type';
    const FIELD_NUTRITION_PRODUCT = 'nutritionProduct';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_AMOUNT = 'amount';
    const FIELD_RATE = 'rate';
    const FIELD_NOT_CONSUMED = 'notConsumed';
    const FIELD_NOT_CONSUMED_EXT = '_notConsumed';
    const FIELD_NOT_CONSUMED_REASON = 'notConsumedReason';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what a category of item that was consumed: e.g., food, fluid, enteral,
     * etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food or fluid product that was consumed. This is potentially a
     * link to a resource representing the details of the food product (TBD) or a
     * simple attribute carrying a code that identifies the food from a known list of
     * foods.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $nutritionProduct = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Scheduled frequency of consumption.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    protected null|FHIRTiming $schedule = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity of the specified food.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $amount = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rate at which enteral feeding was administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $rate = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator when a patient is in a setting where it is helpful to know if food was
     * not consumed, such as it was refused, held (as in tube feedings), or otherwise
     * not provided. If a consumption is being recorded from an app, such as
     * MyFitnessPal, this indicator will likely not be used.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $notConsumed = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document the reason the food or fluid was not consumed, such as refused, held,
     * etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $notConsumedReason = null;

    /**
     * Validation map for fields in type NutritionIntake.ConsumedItem
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRNutritionIntakeConsumedItem Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_NUTRITION_PRODUCT])) {
            if ($data[self::FIELD_NUTRITION_PRODUCT] instanceof FHIRCodeableReference) {
                $this->setNutritionProduct($data[self::FIELD_NUTRITION_PRODUCT]);
            } else {
                $this->setNutritionProduct(new FHIRCodeableReference($data[self::FIELD_NUTRITION_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULE])) {
            if ($data[self::FIELD_SCHEDULE] instanceof FHIRTiming) {
                $this->setSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->setSchedule(new FHIRTiming($data[self::FIELD_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT])) {
            if ($data[self::FIELD_AMOUNT] instanceof FHIRQuantity) {
                $this->setAmount($data[self::FIELD_AMOUNT]);
            } else {
                $this->setAmount(new FHIRQuantity($data[self::FIELD_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_RATE])) {
            if ($data[self::FIELD_RATE] instanceof FHIRQuantity) {
                $this->setRate($data[self::FIELD_RATE]);
            } else {
                $this->setRate(new FHIRQuantity($data[self::FIELD_RATE]));
            }
        }
        if (isset($data[self::FIELD_NOT_CONSUMED]) || isset($data[self::FIELD_NOT_CONSUMED_EXT])) {
            $value = $data[self::FIELD_NOT_CONSUMED] ?? null;
            $ext = (isset($data[self::FIELD_NOT_CONSUMED_EXT]) && is_array($data[self::FIELD_NOT_CONSUMED_EXT])) ? $data[self::FIELD_NOT_CONSUMED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNotConsumed($value);
                } else if (is_array($value)) {
                    $this->setNotConsumed(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNotConsumed(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotConsumed(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_NOT_CONSUMED_REASON])) {
            if ($data[self::FIELD_NOT_CONSUMED_REASON] instanceof FHIRCodeableConcept) {
                $this->setNotConsumedReason($data[self::FIELD_NOT_CONSUMED_REASON]);
            } else {
                $this->setNotConsumedReason(new FHIRCodeableConcept($data[self::FIELD_NOT_CONSUMED_REASON]));
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
     * Indicates what a category of item that was consumed: e.g., food, fluid, enteral,
     * etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what a category of item that was consumed: e.g., food, fluid, enteral,
     * etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food or fluid product that was consumed. This is potentially a
     * link to a resource representing the details of the food product (TBD) or a
     * simple attribute carrying a code that identifies the food from a known list of
     * foods.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getNutritionProduct(): null|FHIRCodeableReference
    {
        return $this->nutritionProduct;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food or fluid product that was consumed. This is potentially a
     * link to a resource representing the details of the food product (TBD) or a
     * simple attribute carrying a code that identifies the food from a known list of
     * foods.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $nutritionProduct
     * @return static
     */
    public function setNutritionProduct(null|FHIRCodeableReference $nutritionProduct = null): self
    {
        if (null === $nutritionProduct) {
            $nutritionProduct = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->nutritionProduct, $nutritionProduct);
        $this->nutritionProduct = $nutritionProduct;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Scheduled frequency of consumption.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getSchedule(): null|FHIRTiming
    {
        return $this->schedule;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Scheduled frequency of consumption.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $schedule
     * @return static
     */
    public function setSchedule(null|FHIRTiming $schedule = null): self
    {
        if (null === $schedule) {
            $schedule = new FHIRTiming();
        }
        $this->_trackValueSet($this->schedule, $schedule);
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity of the specified food.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getAmount(): null|FHIRQuantity
    {
        return $this->amount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity of the specified food.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $amount
     * @return static
     */
    public function setAmount(null|FHIRQuantity $amount = null): self
    {
        if (null === $amount) {
            $amount = new FHIRQuantity();
        }
        $this->_trackValueSet($this->amount, $amount);
        $this->amount = $amount;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rate at which enteral feeding was administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getRate(): null|FHIRQuantity
    {
        return $this->rate;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rate at which enteral feeding was administered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $rate
     * @return static
     */
    public function setRate(null|FHIRQuantity $rate = null): self
    {
        if (null === $rate) {
            $rate = new FHIRQuantity();
        }
        $this->_trackValueSet($this->rate, $rate);
        $this->rate = $rate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator when a patient is in a setting where it is helpful to know if food was
     * not consumed, such as it was refused, held (as in tube feedings), or otherwise
     * not provided. If a consumption is being recorded from an app, such as
     * MyFitnessPal, this indicator will likely not be used.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getNotConsumed(): null|FHIRBoolean
    {
        return $this->notConsumed;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator when a patient is in a setting where it is helpful to know if food was
     * not consumed, such as it was refused, held (as in tube feedings), or otherwise
     * not provided. If a consumption is being recorded from an app, such as
     * MyFitnessPal, this indicator will likely not be used.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $notConsumed
     * @return static
     */
    public function setNotConsumed(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notConsumed = null): self
    {
        if (null !== $notConsumed && !($notConsumed instanceof FHIRBoolean)) {
            $notConsumed = new FHIRBoolean($notConsumed);
        }
        $this->_trackValueSet($this->notConsumed, $notConsumed);
        $this->notConsumed = $notConsumed;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document the reason the food or fluid was not consumed, such as refused, held,
     * etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getNotConsumedReason(): null|FHIRCodeableConcept
    {
        return $this->notConsumedReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document the reason the food or fluid was not consumed, such as refused, held,
     * etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $notConsumedReason
     * @return static
     */
    public function setNotConsumedReason(null|FHIRCodeableConcept $notConsumedReason = null): self
    {
        if (null === $notConsumedReason) {
            $notConsumedReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->notConsumedReason, $notConsumedReason);
        $this->notConsumedReason = $notConsumedReason;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNutritionProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUTRITION_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotConsumed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_CONSUMED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotConsumedReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_CONSUMED_REASON] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUTRITION_PRODUCT])) {
            $v = $this->getNutritionProduct();
            foreach($validationRules[self::FIELD_NUTRITION_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_NUTRITION_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUTRITION_PRODUCT])) {
                        $errs[self::FIELD_NUTRITION_PRODUCT] = [];
                    }
                    $errs[self::FIELD_NUTRITION_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCHEDULE])) {
            $v = $this->getSchedule();
            foreach($validationRules[self::FIELD_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCHEDULE])) {
                        $errs[self::FIELD_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE])) {
            $v = $this->getRate();
            foreach($validationRules[self::FIELD_RATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_RATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE])) {
                        $errs[self::FIELD_RATE] = [];
                    }
                    $errs[self::FIELD_RATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_CONSUMED])) {
            $v = $this->getNotConsumed();
            foreach($validationRules[self::FIELD_NOT_CONSUMED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_NOT_CONSUMED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_CONSUMED])) {
                        $errs[self::FIELD_NOT_CONSUMED] = [];
                    }
                    $errs[self::FIELD_NOT_CONSUMED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_CONSUMED_REASON])) {
            $v = $this->getNotConsumedReason();
            foreach($validationRules[self::FIELD_NOT_CONSUMED_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_INTAKE_DOT_CONSUMED_ITEM, self::FIELD_NOT_CONSUMED_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_CONSUMED_REASON])) {
                        $errs[self::FIELD_NOT_CONSUMED_REASON] = [];
                    }
                    $errs[self::FIELD_NOT_CONSUMED_REASON][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionIntake\FHIRNutritionIntakeConsumedItem $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionIntake\FHIRNutritionIntakeConsumedItem
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
        } else if (!($type instanceof FHIRNutritionIntakeConsumedItem)) {
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
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_NUTRITION_PRODUCT === $n->nodeName) {
                $type->setNutritionProduct(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_SCHEDULE === $n->nodeName) {
                $type->setSchedule(FHIRTiming::xmlUnserialize($n));
            } elseif (self::FIELD_AMOUNT === $n->nodeName) {
                $type->setAmount(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_RATE === $n->nodeName) {
                $type->setRate(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_NOT_CONSUMED === $n->nodeName) {
                $type->setNotConsumed(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_NOT_CONSUMED_REASON === $n->nodeName) {
                $type->setNotConsumedReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOT_CONSUMED);
        if (null !== $n) {
            $pt = $type->getNotConsumed();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNotConsumed($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('NutritionIntakeConsumedItem'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNutritionProduct())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUTRITION_PRODUCT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSchedule())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SCHEDULE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAmount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNotConsumed())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOT_CONSUMED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNotConsumedReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOT_CONSUMED_REASON);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getNutritionProduct())) {
            $out->{self::FIELD_NUTRITION_PRODUCT} = $v;
        }
        if (null !== ($v = $this->getSchedule())) {
            $out->{self::FIELD_SCHEDULE} = $v;
        }
        if (null !== ($v = $this->getAmount())) {
            $out->{self::FIELD_AMOUNT} = $v;
        }
        if (null !== ($v = $this->getRate())) {
            $out->{self::FIELD_RATE} = $v;
        }
        if (null !== ($v = $this->getNotConsumed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOT_CONSUMED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOT_CONSUMED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNotConsumedReason())) {
            $out->{self::FIELD_NOT_CONSUMED_REASON} = $v;
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