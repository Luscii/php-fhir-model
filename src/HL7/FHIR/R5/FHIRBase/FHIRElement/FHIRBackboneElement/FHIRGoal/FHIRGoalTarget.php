<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRIntegerPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Describes the intended objective(s) for a patient, group or organization care,
 * for example, weight loss, restoring an activity of daily living, obtaining herd
 * immunity via immunization, meeting a process improvement objective, etc.
 *
 * Class FHIRGoalTarget
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal
 */
class FHIRGoalTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET;

    const FIELD_MEASURE = 'measure';
    const FIELD_DETAIL_QUANTITY = 'detailQuantity';
    const FIELD_DETAIL_RANGE = 'detailRange';
    const FIELD_DETAIL_CODEABLE_CONCEPT = 'detailCodeableConcept';
    const FIELD_DETAIL_STRING = 'detailString';
    const FIELD_DETAIL_STRING_EXT = '_detailString';
    const FIELD_DETAIL_BOOLEAN = 'detailBoolean';
    const FIELD_DETAIL_BOOLEAN_EXT = '_detailBoolean';
    const FIELD_DETAIL_INTEGER = 'detailInteger';
    const FIELD_DETAIL_INTEGER_EXT = '_detailInteger';
    const FIELD_DETAIL_RATIO = 'detailRatio';
    const FIELD_DUE_DATE = 'dueDate';
    const FIELD_DUE_DATE_EXT = '_dueDate';
    const FIELD_DUE_DURATION = 'dueDuration';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $measure = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $detailQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $detailRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $detailCodeableConcept = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $detailString = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $detailBoolean = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $detailInteger = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $detailRatio = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $dueDate = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $dueDuration = null;

    /**
     * Validation map for fields in type Goal.Target
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRGoalTarget Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MEASURE])) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRCodeableConcept($data[self::FIELD_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_QUANTITY])) {
            if ($data[self::FIELD_DETAIL_QUANTITY] instanceof FHIRQuantity) {
                $this->setDetailQuantity($data[self::FIELD_DETAIL_QUANTITY]);
            } else {
                $this->setDetailQuantity(new FHIRQuantity($data[self::FIELD_DETAIL_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_RANGE])) {
            if ($data[self::FIELD_DETAIL_RANGE] instanceof FHIRRange) {
                $this->setDetailRange($data[self::FIELD_DETAIL_RANGE]);
            } else {
                $this->setDetailRange(new FHIRRange($data[self::FIELD_DETAIL_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DETAIL_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDetailCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]);
            } else {
                $this->setDetailCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_STRING]) || isset($data[self::FIELD_DETAIL_STRING_EXT])) {
            $value = $data[self::FIELD_DETAIL_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_STRING_EXT]) && is_array($data[self::FIELD_DETAIL_STRING_EXT])) ? $data[self::FIELD_DETAIL_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetailString($value);
                } else if (is_array($value)) {
                    $this->setDetailString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetailString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DETAIL_BOOLEAN]) || isset($data[self::FIELD_DETAIL_BOOLEAN_EXT])) {
            $value = $data[self::FIELD_DETAIL_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_BOOLEAN_EXT]) && is_array($data[self::FIELD_DETAIL_BOOLEAN_EXT])) ? $data[self::FIELD_DETAIL_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDetailBoolean($value);
                } else if (is_array($value)) {
                    $this->setDetailBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDetailBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DETAIL_INTEGER]) || isset($data[self::FIELD_DETAIL_INTEGER_EXT])) {
            $value = $data[self::FIELD_DETAIL_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_INTEGER_EXT]) && is_array($data[self::FIELD_DETAIL_INTEGER_EXT])) ? $data[self::FIELD_DETAIL_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDetailInteger($value);
                } else if (is_array($value)) {
                    $this->setDetailInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDetailInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DETAIL_RATIO])) {
            if ($data[self::FIELD_DETAIL_RATIO] instanceof FHIRRatio) {
                $this->setDetailRatio($data[self::FIELD_DETAIL_RATIO]);
            } else {
                $this->setDetailRatio(new FHIRRatio($data[self::FIELD_DETAIL_RATIO]));
            }
        }
        if (isset($data[self::FIELD_DUE_DATE]) || isset($data[self::FIELD_DUE_DATE_EXT])) {
            $value = $data[self::FIELD_DUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DUE_DATE_EXT]) && is_array($data[self::FIELD_DUE_DATE_EXT])) ? $data[self::FIELD_DUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDueDate($value);
                } else if (is_array($value)) {
                    $this->setDueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_DUE_DURATION])) {
            if ($data[self::FIELD_DUE_DURATION] instanceof FHIRDuration) {
                $this->setDueDuration($data[self::FIELD_DUE_DURATION]);
            } else {
                $this->setDueDuration(new FHIRDuration($data[self::FIELD_DUE_DURATION]));
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
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMeasure(): null|FHIRCodeableConcept
    {
        return $this->measure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measure
     * @return static
     */
    public function setMeasure(null|FHIRCodeableConcept $measure = null): self
    {
        if (null === $measure) {
            $measure = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->measure, $measure);
        $this->measure = $measure;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDetailQuantity(): null|FHIRQuantity
    {
        return $this->detailQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $detailQuantity
     * @return static
     */
    public function setDetailQuantity(null|FHIRQuantity $detailQuantity = null): self
    {
        if (null === $detailQuantity) {
            $detailQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->detailQuantity, $detailQuantity);
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDetailRange(): null|FHIRRange
    {
        return $this->detailRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $detailRange
     * @return static
     */
    public function setDetailRange(null|FHIRRange $detailRange = null): self
    {
        if (null === $detailRange) {
            $detailRange = new FHIRRange();
        }
        $this->_trackValueSet($this->detailRange, $detailRange);
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->detailCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $detailCodeableConcept
     * @return static
     */
    public function setDetailCodeableConcept(null|FHIRCodeableConcept $detailCodeableConcept = null): self
    {
        if (null === $detailCodeableConcept) {
            $detailCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->detailCodeableConcept, $detailCodeableConcept);
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDetailString(): null|FHIRString
    {
        return $this->detailString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $detailString
     * @return static
     */
    public function setDetailString(null|string|FHIRStringPrimitive|FHIRString $detailString = null): self
    {
        if (null !== $detailString && !($detailString instanceof FHIRString)) {
            $detailString = new FHIRString($detailString);
        }
        $this->_trackValueSet($this->detailString, $detailString);
        $this->detailString = $detailString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getDetailBoolean(): null|FHIRBoolean
    {
        return $this->detailBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $detailBoolean
     * @return static
     */
    public function setDetailBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $detailBoolean = null): self
    {
        if (null !== $detailBoolean && !($detailBoolean instanceof FHIRBoolean)) {
            $detailBoolean = new FHIRBoolean($detailBoolean);
        }
        $this->_trackValueSet($this->detailBoolean, $detailBoolean);
        $this->detailBoolean = $detailBoolean;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getDetailInteger(): null|FHIRInteger
    {
        return $this->detailInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRIntegerPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger $detailInteger
     * @return static
     */
    public function setDetailInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $detailInteger = null): self
    {
        if (null !== $detailInteger && !($detailInteger instanceof FHIRInteger)) {
            $detailInteger = new FHIRInteger($detailInteger);
        }
        $this->_trackValueSet($this->detailInteger, $detailInteger);
        $this->detailInteger = $detailInteger;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getDetailRatio(): null|FHIRRatio
    {
        return $this->detailRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $detailRatio
     * @return static
     */
    public function setDetailRatio(null|FHIRRatio $detailRatio = null): self
    {
        if (null === $detailRatio) {
            $detailRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->detailRatio, $detailRatio);
        $this->detailRatio = $detailRatio;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getDueDate(): null|FHIRDate
    {
        return $this->dueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $dueDate
     * @return static
     */
    public function setDueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dueDate = null): self
    {
        if (null !== $dueDate && !($dueDate instanceof FHIRDate)) {
            $dueDate = new FHIRDate($dueDate);
        }
        $this->_trackValueSet($this->dueDate, $dueDate);
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getDueDuration(): null|FHIRDuration
    {
        return $this->dueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $dueDuration
     * @return static
     */
    public function setDueDuration(null|FHIRDuration $dueDuration = null): self
    {
        if (null === $dueDuration) {
            $dueDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->dueDuration, $dueDuration);
        $this->dueDuration = $dueDuration;
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
        if (null !== ($v = $this->getMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DUE_DURATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE])) {
            $v = $this->getMeasure();
            foreach($validationRules[self::FIELD_MEASURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE])) {
                        $errs[self::FIELD_MEASURE] = [];
                    }
                    $errs[self::FIELD_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_QUANTITY])) {
            $v = $this->getDetailQuantity();
            foreach($validationRules[self::FIELD_DETAIL_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_QUANTITY])) {
                        $errs[self::FIELD_DETAIL_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DETAIL_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_RANGE])) {
            $v = $this->getDetailRange();
            foreach($validationRules[self::FIELD_DETAIL_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_RANGE])) {
                        $errs[self::FIELD_DETAIL_RANGE] = [];
                    }
                    $errs[self::FIELD_DETAIL_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
            $v = $this->getDetailCodeableConcept();
            foreach($validationRules[self::FIELD_DETAIL_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_STRING])) {
            $v = $this->getDetailString();
            foreach($validationRules[self::FIELD_DETAIL_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_STRING])) {
                        $errs[self::FIELD_DETAIL_STRING] = [];
                    }
                    $errs[self::FIELD_DETAIL_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_BOOLEAN])) {
            $v = $this->getDetailBoolean();
            foreach($validationRules[self::FIELD_DETAIL_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_BOOLEAN])) {
                        $errs[self::FIELD_DETAIL_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DETAIL_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_INTEGER])) {
            $v = $this->getDetailInteger();
            foreach($validationRules[self::FIELD_DETAIL_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_INTEGER])) {
                        $errs[self::FIELD_DETAIL_INTEGER] = [];
                    }
                    $errs[self::FIELD_DETAIL_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_RATIO])) {
            $v = $this->getDetailRatio();
            foreach($validationRules[self::FIELD_DETAIL_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_RATIO])) {
                        $errs[self::FIELD_DETAIL_RATIO] = [];
                    }
                    $errs[self::FIELD_DETAIL_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DUE_DATE])) {
            $v = $this->getDueDate();
            foreach($validationRules[self::FIELD_DUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DUE_DATE])) {
                        $errs[self::FIELD_DUE_DATE] = [];
                    }
                    $errs[self::FIELD_DUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DUE_DURATION])) {
            $v = $this->getDueDuration();
            foreach($validationRules[self::FIELD_DUE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DUE_DURATION])) {
                        $errs[self::FIELD_DUE_DURATION] = [];
                    }
                    $errs[self::FIELD_DUE_DURATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
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
        } else if (!($type instanceof FHIRGoalTarget)) {
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
            if (self::FIELD_MEASURE === $n->nodeName) {
                $type->setMeasure(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_QUANTITY === $n->nodeName) {
                $type->setDetailQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_RANGE === $n->nodeName) {
                $type->setDetailRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setDetailCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_STRING === $n->nodeName) {
                $type->setDetailString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_BOOLEAN === $n->nodeName) {
                $type->setDetailBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_INTEGER === $n->nodeName) {
                $type->setDetailInteger(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL_RATIO === $n->nodeName) {
                $type->setDetailRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_DUE_DATE === $n->nodeName) {
                $type->setDueDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_DUE_DURATION === $n->nodeName) {
                $type->setDueDuration(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DETAIL_STRING);
        if (null !== $n) {
            $pt = $type->getDetailString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDetailString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DETAIL_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getDetailBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDetailBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DETAIL_INTEGER);
        if (null !== $n) {
            $pt = $type->getDetailInteger();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDetailInteger($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DUE_DATE);
        if (null !== $n) {
            $pt = $type->getDueDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDueDate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('GoalTarget'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getMeasure())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MEASURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailInteger())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_INTEGER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetailRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDueDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DUE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDueDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DUE_DURATION);
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
        if (null !== ($v = $this->getMeasure())) {
            $out->{self::FIELD_MEASURE} = $v;
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $out->{self::FIELD_DETAIL_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDetailRange())) {
            $out->{self::FIELD_DETAIL_RANGE} = $v;
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $out->{self::FIELD_DETAIL_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDetailString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailRatio())) {
            $out->{self::FIELD_DETAIL_RATIO} = $v;
        }
        if (null !== ($v = $this->getDueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDueDuration())) {
            $out->{self::FIELD_DUE_DURATION} = $v;
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