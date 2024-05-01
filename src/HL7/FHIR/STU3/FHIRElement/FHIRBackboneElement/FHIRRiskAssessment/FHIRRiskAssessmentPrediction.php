<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment;

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

use HL7\FHIR\STU3\FHIRDecimalPrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRDecimal;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRPeriod;
use HL7\FHIR\STU3\FHIRElement\FHIRRange;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as
 * the likelihood of each outcome.
 *
 * Class FHIRRiskAssessmentPrediction
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION;

    const FIELD_OUTCOME = 'outcome';
    const FIELD_PROBABILITY_DECIMAL = 'probabilityDecimal';
    const FIELD_PROBABILITY_DECIMAL_EXT = '_probabilityDecimal';
    const FIELD_PROBABILITY_RANGE = 'probabilityRange';
    const FIELD_QUALITATIVE_RISK = 'qualitativeRisk';
    const FIELD_RELATIVE_RISK = 'relativeRisk';
    const FIELD_RELATIVE_RISK_EXT = '_relativeRisk';
    const FIELD_WHEN_PERIOD = 'whenPeriod';
    const FIELD_WHEN_RANGE = 'whenRange';
    const FIELD_RATIONALE = 'rationale';
    const FIELD_RATIONALE_EXT = '_rationale';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $outcome = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $probabilityDecimal = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $probabilityRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe), expressed as a
     * qualitative value (e.g. low, medium, high).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $qualitativeRisk = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $relativeRisk = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $whenPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $whenRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $rationale = null;

    /**
     * Validation map for fields in type RiskAssessment.Prediction
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRRiskAssessmentPrediction Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PROBABILITY_DECIMAL]) || isset($data[self::FIELD_PROBABILITY_DECIMAL_EXT])) {
            $value = $data[self::FIELD_PROBABILITY_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_PROBABILITY_DECIMAL_EXT]) && is_array($data[self::FIELD_PROBABILITY_DECIMAL_EXT])) ? $data[self::FIELD_PROBABILITY_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setProbabilityDecimal($value);
                } else if (is_array($value)) {
                    $this->setProbabilityDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setProbabilityDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProbabilityDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PROBABILITY_RANGE])) {
            if ($data[self::FIELD_PROBABILITY_RANGE] instanceof FHIRRange) {
                $this->setProbabilityRange($data[self::FIELD_PROBABILITY_RANGE]);
            } else {
                $this->setProbabilityRange(new FHIRRange($data[self::FIELD_PROBABILITY_RANGE]));
            }
        }
        if (isset($data[self::FIELD_QUALITATIVE_RISK])) {
            if ($data[self::FIELD_QUALITATIVE_RISK] instanceof FHIRCodeableConcept) {
                $this->setQualitativeRisk($data[self::FIELD_QUALITATIVE_RISK]);
            } else {
                $this->setQualitativeRisk(new FHIRCodeableConcept($data[self::FIELD_QUALITATIVE_RISK]));
            }
        }
        if (isset($data[self::FIELD_RELATIVE_RISK]) || isset($data[self::FIELD_RELATIVE_RISK_EXT])) {
            $value = $data[self::FIELD_RELATIVE_RISK] ?? null;
            $ext = (isset($data[self::FIELD_RELATIVE_RISK_EXT]) && is_array($data[self::FIELD_RELATIVE_RISK_EXT])) ? $data[self::FIELD_RELATIVE_RISK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setRelativeRisk($value);
                } else if (is_array($value)) {
                    $this->setRelativeRisk(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setRelativeRisk(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRelativeRisk(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN_PERIOD])) {
            if ($data[self::FIELD_WHEN_PERIOD] instanceof FHIRPeriod) {
                $this->setWhenPeriod($data[self::FIELD_WHEN_PERIOD]);
            } else {
                $this->setWhenPeriod(new FHIRPeriod($data[self::FIELD_WHEN_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_WHEN_RANGE])) {
            if ($data[self::FIELD_WHEN_RANGE] instanceof FHIRRange) {
                $this->setWhenRange($data[self::FIELD_WHEN_RANGE]);
            } else {
                $this->setWhenRange(new FHIRRange($data[self::FIELD_WHEN_RANGE]));
            }
        }
        if (isset($data[self::FIELD_RATIONALE]) || isset($data[self::FIELD_RATIONALE_EXT])) {
            $value = $data[self::FIELD_RATIONALE] ?? null;
            $ext = (isset($data[self::FIELD_RATIONALE_EXT]) && is_array($data[self::FIELD_RATIONALE_EXT])) ? $data[self::FIELD_RATIONALE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRationale($value);
                } else if (is_array($value)) {
                    $this->setRationale(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRationale(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRationale(new FHIRString($ext));
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
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal(): null|FHIRDecimal
    {
        return $this->probabilityDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|string|float|int|\HL7\FHIR\STU3\FHIRDecimalPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDecimal $probabilityDecimal
     * @return static
     */
    public function setProbabilityDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $probabilityDecimal = null): self
    {
        if (null !== $probabilityDecimal && !($probabilityDecimal instanceof FHIRDecimal)) {
            $probabilityDecimal = new FHIRDecimal($probabilityDecimal);
        }
        $this->_trackValueSet($this->probabilityDecimal, $probabilityDecimal);
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    public function getProbabilityRange(): null|FHIRRange
    {
        return $this->probabilityRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRange $probabilityRange
     * @return static
     */
    public function setProbabilityRange(null|FHIRRange $probabilityRange = null): self
    {
        if (null === $probabilityRange) {
            $probabilityRange = new FHIRRange();
        }
        $this->_trackValueSet($this->probabilityRange, $probabilityRange);
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe), expressed as a
     * qualitative value (e.g. low, medium, high).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getQualitativeRisk(): null|FHIRCodeableConcept
    {
        return $this->qualitativeRisk;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe), expressed as a
     * qualitative value (e.g. low, medium, high).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $qualitativeRisk
     * @return static
     */
    public function setQualitativeRisk(null|FHIRCodeableConcept $qualitativeRisk = null): self
    {
        if (null === $qualitativeRisk) {
            $qualitativeRisk = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->qualitativeRisk, $qualitativeRisk);
        $this->qualitativeRisk = $qualitativeRisk;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk(): null|FHIRDecimal
    {
        return $this->relativeRisk;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @param null|string|float|int|\HL7\FHIR\STU3\FHIRDecimalPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDecimal $relativeRisk
     * @return static
     */
    public function setRelativeRisk(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $relativeRisk = null): self
    {
        if (null !== $relativeRisk && !($relativeRisk instanceof FHIRDecimal)) {
            $relativeRisk = new FHIRDecimal($relativeRisk);
        }
        $this->_trackValueSet($this->relativeRisk, $relativeRisk);
        $this->relativeRisk = $relativeRisk;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod(): null|FHIRPeriod
    {
        return $this->whenPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $whenPeriod
     * @return static
     */
    public function setWhenPeriod(null|FHIRPeriod $whenPeriod = null): self
    {
        if (null === $whenPeriod) {
            $whenPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->whenPeriod, $whenPeriod);
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    public function getWhenRange(): null|FHIRRange
    {
        return $this->whenRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRange $whenRange
     * @return static
     */
    public function setWhenRange(null|FHIRRange $whenRange = null): self
    {
        if (null === $whenRange) {
            $whenRange = new FHIRRange();
        }
        $this->_trackValueSet($this->whenRange, $whenRange);
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getRationale(): null|FHIRString
    {
        return $this->rationale;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $rationale
     * @return static
     */
    public function setRationale(null|string|FHIRStringPrimitive|FHIRString $rationale = null): self
    {
        if (null !== $rationale && !($rationale instanceof FHIRString)) {
            $rationale = new FHIRString($rationale);
        }
        $this->_trackValueSet($this->rationale, $rationale);
        $this->rationale = $rationale;
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
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROBABILITY_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROBABILITY_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUALITATIVE_RISK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIVE_RISK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRationale())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATIONALE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROBABILITY_DECIMAL])) {
            $v = $this->getProbabilityDecimal();
            foreach($validationRules[self::FIELD_PROBABILITY_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_PROBABILITY_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_DECIMAL])) {
                        $errs[self::FIELD_PROBABILITY_DECIMAL] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROBABILITY_RANGE])) {
            $v = $this->getProbabilityRange();
            foreach($validationRules[self::FIELD_PROBABILITY_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_PROBABILITY_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_RANGE])) {
                        $errs[self::FIELD_PROBABILITY_RANGE] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALITATIVE_RISK])) {
            $v = $this->getQualitativeRisk();
            foreach($validationRules[self::FIELD_QUALITATIVE_RISK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_QUALITATIVE_RISK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALITATIVE_RISK])) {
                        $errs[self::FIELD_QUALITATIVE_RISK] = [];
                    }
                    $errs[self::FIELD_QUALITATIVE_RISK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIVE_RISK])) {
            $v = $this->getRelativeRisk();
            foreach($validationRules[self::FIELD_RELATIVE_RISK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_RELATIVE_RISK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIVE_RISK])) {
                        $errs[self::FIELD_RELATIVE_RISK] = [];
                    }
                    $errs[self::FIELD_RELATIVE_RISK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_PERIOD])) {
            $v = $this->getWhenPeriod();
            foreach($validationRules[self::FIELD_WHEN_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_WHEN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_PERIOD])) {
                        $errs[self::FIELD_WHEN_PERIOD] = [];
                    }
                    $errs[self::FIELD_WHEN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_RANGE])) {
            $v = $this->getWhenRange();
            foreach($validationRules[self::FIELD_WHEN_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_WHEN_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_RANGE])) {
                        $errs[self::FIELD_WHEN_RANGE] = [];
                    }
                    $errs[self::FIELD_WHEN_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATIONALE])) {
            $v = $this->getRationale();
            foreach($validationRules[self::FIELD_RATIONALE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_RATIONALE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATIONALE])) {
                        $errs[self::FIELD_RATIONALE] = [];
                    }
                    $errs[self::FIELD_RATIONALE][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
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
        } else if (!($type instanceof FHIRRiskAssessmentPrediction)) {
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
            if (self::FIELD_OUTCOME === $n->nodeName) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PROBABILITY_DECIMAL === $n->nodeName) {
                $type->setProbabilityDecimal(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_PROBABILITY_RANGE === $n->nodeName) {
                $type->setProbabilityRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_QUALITATIVE_RISK === $n->nodeName) {
                $type->setQualitativeRisk(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_RELATIVE_RISK === $n->nodeName) {
                $type->setRelativeRisk(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_WHEN_PERIOD === $n->nodeName) {
                $type->setWhenPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_WHEN_RANGE === $n->nodeName) {
                $type->setWhenRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_RATIONALE === $n->nodeName) {
                $type->setRationale(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PROBABILITY_DECIMAL);
        if (null !== $n) {
            $pt = $type->getProbabilityDecimal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setProbabilityDecimal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RELATIVE_RISK);
        if (null !== $n) {
            $pt = $type->getRelativeRisk();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRelativeRisk($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RATIONALE);
        if (null !== $n) {
            $pt = $type->getRationale();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRationale($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('RiskAssessmentPrediction'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getOutcome())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OUTCOME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROBABILITY_DECIMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROBABILITY_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUALITATIVE_RISK);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RELATIVE_RISK);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHEN_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhenRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHEN_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRationale())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RATIONALE);
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
        if (null !== ($v = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = $v;
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROBABILITY_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROBABILITY_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $out->{self::FIELD_PROBABILITY_RANGE} = $v;
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            $out->{self::FIELD_QUALITATIVE_RISK} = $v;
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RELATIVE_RISK} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RELATIVE_RISK_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $out->{self::FIELD_WHEN_PERIOD} = $v;
        }
        if (null !== ($v = $this->getWhenRange())) {
            $out->{self::FIELD_WHEN_RANGE} = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RATIONALE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RATIONALE_EXT} = $ext;
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