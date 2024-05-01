<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

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
use HL7\FHIR\R4\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRPositiveIntPrimitive;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to
 * a published schedule with optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;

    const FIELD_VACCINE_CODE = 'vaccineCode';
    const FIELD_TARGET_DISEASE = 'targetDisease';
    const FIELD_CONTRAINDICATED_VACCINE_CODE = 'contraindicatedVaccineCode';
    const FIELD_FORECAST_STATUS = 'forecastStatus';
    const FIELD_FORECAST_REASON = 'forecastReason';
    const FIELD_DATE_CRITERION = 'dateCriterion';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_DOSE_NUMBER_POSITIVE_INT = 'doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_POSITIVE_INT_EXT = '_doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_STRING = 'doseNumberString';
    const FIELD_DOSE_NUMBER_STRING_EXT = '_doseNumberString';
    const FIELD_SERIES_DOSES_POSITIVE_INT = 'seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_POSITIVE_INT_EXT = '_seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_STRING = 'seriesDosesString';
    const FIELD_SERIES_DOSES_STRING_EXT = '_seriesDosesString';
    const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $vaccineCode = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $targetDisease = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $contraindicatedVaccineCode = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $forecastStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $forecastReason = [];
    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    protected null|array $dateCriterion = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $series = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $doseNumberPositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $doseNumberString = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $seriesDosesPositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $seriesDosesString = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $supportingImmunization = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $supportingPatientInformation = [];

    /**
     * Validation map for fields in type ImmunizationRecommendation.Recommendation
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_VACCINE_CODE])) {
            if (is_array($data[self::FIELD_VACCINE_CODE])) {
                foreach($data[self::FIELD_VACCINE_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addVaccineCode($v);
                    } else {
                        $this->addVaccineCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->addVaccineCode($data[self::FIELD_VACCINE_CODE]);
            } else {
                $this->addVaccineCode(new FHIRCodeableConcept($data[self::FIELD_VACCINE_CODE]));
            }
        }
        if (isset($data[self::FIELD_TARGET_DISEASE])) {
            if ($data[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $this->setTargetDisease($data[self::FIELD_TARGET_DISEASE]);
            } else {
                $this->setTargetDisease(new FHIRCodeableConcept($data[self::FIELD_TARGET_DISEASE]));
            }
        }
        if (isset($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
            if (is_array($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                foreach($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addContraindicatedVaccineCode($v);
                    } else {
                        $this->addContraindicatedVaccineCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->addContraindicatedVaccineCode($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE]);
            } else {
                $this->addContraindicatedVaccineCode(new FHIRCodeableConcept($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE]));
            }
        }
        if (isset($data[self::FIELD_FORECAST_STATUS])) {
            if ($data[self::FIELD_FORECAST_STATUS] instanceof FHIRCodeableConcept) {
                $this->setForecastStatus($data[self::FIELD_FORECAST_STATUS]);
            } else {
                $this->setForecastStatus(new FHIRCodeableConcept($data[self::FIELD_FORECAST_STATUS]));
            }
        }
        if (isset($data[self::FIELD_FORECAST_REASON])) {
            if (is_array($data[self::FIELD_FORECAST_REASON])) {
                foreach($data[self::FIELD_FORECAST_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addForecastReason($v);
                    } else {
                        $this->addForecastReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_FORECAST_REASON] instanceof FHIRCodeableConcept) {
                $this->addForecastReason($data[self::FIELD_FORECAST_REASON]);
            } else {
                $this->addForecastReason(new FHIRCodeableConcept($data[self::FIELD_FORECAST_REASON]));
            }
        }
        if (isset($data[self::FIELD_DATE_CRITERION])) {
            if (is_array($data[self::FIELD_DATE_CRITERION])) {
                foreach($data[self::FIELD_DATE_CRITERION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                        $this->addDateCriterion($v);
                    } else {
                        $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
                    }
                }
            } elseif ($data[self::FIELD_DATE_CRITERION] instanceof FHIRImmunizationRecommendationDateCriterion) {
                $this->addDateCriterion($data[self::FIELD_DATE_CRITERION]);
            } else {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($data[self::FIELD_DATE_CRITERION]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SERIES]) || isset($data[self::FIELD_SERIES_EXT])) {
            $value = $data[self::FIELD_SERIES] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT])) ? $data[self::FIELD_SERIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeries($value);
                } else if (is_array($value)) {
                    $this->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeries(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]) || isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT])) {
            $value = $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT])) ? $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDoseNumberPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setDoseNumberPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumberPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_STRING]) || isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT])) {
            $value = $data[self::FIELD_DOSE_NUMBER_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_STRING_EXT])) ? $data[self::FIELD_DOSE_NUMBER_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDoseNumberString($value);
                } else if (is_array($value)) {
                    $this->setDoseNumberString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumberString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseNumberString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT]) || isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT])) {
            $value = $data[self::FIELD_SERIES_DOSES_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT])) ? $data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSeriesDosesPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setSeriesDosesPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDosesPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_STRING]) || isset($data[self::FIELD_SERIES_DOSES_STRING_EXT])) {
            $value = $data[self::FIELD_SERIES_DOSES_STRING] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_DOSES_STRING_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_STRING_EXT])) ? $data[self::FIELD_SERIES_DOSES_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeriesDosesString($value);
                } else if (is_array($value)) {
                    $this->setSeriesDosesString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDosesString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeriesDosesString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                foreach($data[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingImmunization($v);
                    } else {
                        $this->addSupportingImmunization(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_IMMUNIZATION] instanceof FHIRReference) {
                $this->addSupportingImmunization($data[self::FIELD_SUPPORTING_IMMUNIZATION]);
            } else {
                $this->addSupportingImmunization(new FHIRReference($data[self::FIELD_SUPPORTING_IMMUNIZATION]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingPatientInformation($v);
                    } else {
                        $this->addSupportingPatientInformation(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingPatientInformation($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]);
            } else {
                $this->addSupportingPatientInformation(new FHIRReference($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]));
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
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getVaccineCode(): null|array
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return static
     */
    public function addVaccineCode(null|FHIRCodeableConcept $vaccineCode = null): self
    {
        if (null === $vaccineCode) {
            $vaccineCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->vaccineCode[] = $vaccineCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $vaccineCode
     * @return static
     */
    public function setVaccineCode(array $vaccineCode = []): self
    {
        if ([] !== $this->vaccineCode) {
            $this->_trackValuesRemoved(count($this->vaccineCode));
            $this->vaccineCode = [];
        }
        if ([] === $vaccineCode) {
            return $this;
        }
        foreach($vaccineCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addVaccineCode($v);
            } else {
                $this->addVaccineCode(new FHIRCodeableConcept($v));
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
     * The targeted disease for the recommendation.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease(): null|FHIRCodeableConcept
    {
        return $this->targetDisease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return static
     */
    public function setTargetDisease(null|FHIRCodeableConcept $targetDisease = null): self
    {
        if (null === $targetDisease) {
            $targetDisease = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->targetDisease, $targetDisease);
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContraindicatedVaccineCode(): null|array
    {
        return $this->contraindicatedVaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $contraindicatedVaccineCode
     * @return static
     */
    public function addContraindicatedVaccineCode(null|FHIRCodeableConcept $contraindicatedVaccineCode = null): self
    {
        if (null === $contraindicatedVaccineCode) {
            $contraindicatedVaccineCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->contraindicatedVaccineCode[] = $contraindicatedVaccineCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $contraindicatedVaccineCode
     * @return static
     */
    public function setContraindicatedVaccineCode(array $contraindicatedVaccineCode = []): self
    {
        if ([] !== $this->contraindicatedVaccineCode) {
            $this->_trackValuesRemoved(count($this->contraindicatedVaccineCode));
            $this->contraindicatedVaccineCode = [];
        }
        if ([] === $contraindicatedVaccineCode) {
            return $this;
        }
        foreach($contraindicatedVaccineCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addContraindicatedVaccineCode($v);
            } else {
                $this->addContraindicatedVaccineCode(new FHIRCodeableConcept($v));
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
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus(): null|FHIRCodeableConcept
    {
        return $this->forecastStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return static
     */
    public function setForecastStatus(null|FHIRCodeableConcept $forecastStatus = null): self
    {
        if (null === $forecastStatus) {
            $forecastStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->forecastStatus, $forecastStatus);
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getForecastReason(): null|array
    {
        return $this->forecastReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $forecastReason
     * @return static
     */
    public function addForecastReason(null|FHIRCodeableConcept $forecastReason = null): self
    {
        if (null === $forecastReason) {
            $forecastReason = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->forecastReason[] = $forecastReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $forecastReason
     * @return static
     */
    public function setForecastReason(array $forecastReason = []): self
    {
        if ([] !== $this->forecastReason) {
            $this->_trackValuesRemoved(count($this->forecastReason));
            $this->forecastReason = [];
        }
        if ([] === $forecastReason) {
            return $this;
        }
        foreach($forecastReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addForecastReason($v);
            } else {
                $this->addForecastReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion(): null|array
    {
        return $this->dateCriterion;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
     * @return static
     */
    public function addDateCriterion(null|FHIRImmunizationRecommendationDateCriterion $dateCriterion = null): self
    {
        if (null === $dateCriterion) {
            $dateCriterion = new FHIRImmunizationRecommendationDateCriterion();
        }
        $this->_trackValueAdded();
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
     * @return static
     */
    public function setDateCriterion(array $dateCriterion = []): self
    {
        if ([] !== $this->dateCriterion) {
            $this->_trackValuesRemoved(count($this->dateCriterion));
            $this->dateCriterion = [];
        }
        if ([] === $dateCriterion) {
            return $this;
        }
        foreach($dateCriterion as $v) {
            if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                $this->addDateCriterion($v);
            } else {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $series
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series = null): self
    {
        if (null !== $series && !($series instanceof FHIRString)) {
            $series = new FHIRString($series);
        }
        $this->_trackValueSet($this->series, $series);
        $this->series = $series;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt(): null|FHIRPositiveInt
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRPositiveIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @return static
     */
    public function setDoseNumberPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $doseNumberPositiveInt = null): self
    {
        if (null !== $doseNumberPositiveInt && !($doseNumberPositiveInt instanceof FHIRPositiveInt)) {
            $doseNumberPositiveInt = new FHIRPositiveInt($doseNumberPositiveInt);
        }
        $this->_trackValueSet($this->doseNumberPositiveInt, $doseNumberPositiveInt);
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDoseNumberString(): null|FHIRString
    {
        return $this->doseNumberString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $doseNumberString
     * @return static
     */
    public function setDoseNumberString(null|string|FHIRStringPrimitive|FHIRString $doseNumberString = null): self
    {
        if (null !== $doseNumberString && !($doseNumberString instanceof FHIRString)) {
            $doseNumberString = new FHIRString($doseNumberString);
        }
        $this->_trackValueSet($this->doseNumberString, $doseNumberString);
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt(): null|FHIRPositiveInt
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRPositiveIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @return static
     */
    public function setSeriesDosesPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $seriesDosesPositiveInt = null): self
    {
        if (null !== $seriesDosesPositiveInt && !($seriesDosesPositiveInt instanceof FHIRPositiveInt)) {
            $seriesDosesPositiveInt = new FHIRPositiveInt($seriesDosesPositiveInt);
        }
        $this->_trackValueSet($this->seriesDosesPositiveInt, $seriesDosesPositiveInt);
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getSeriesDosesString(): null|FHIRString
    {
        return $this->seriesDosesString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $seriesDosesString
     * @return static
     */
    public function setSeriesDosesString(null|string|FHIRStringPrimitive|FHIRString $seriesDosesString = null): self
    {
        if (null !== $seriesDosesString && !($seriesDosesString instanceof FHIRString)) {
            $seriesDosesString = new FHIRString($seriesDosesString);
        }
        $this->_trackValueSet($this->seriesDosesString, $seriesDosesString);
        $this->seriesDosesString = $seriesDosesString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingImmunization(): null|array
    {
        return $this->supportingImmunization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $supportingImmunization
     * @return static
     */
    public function addSupportingImmunization(null|FHIRReference $supportingImmunization = null): self
    {
        if (null === $supportingImmunization) {
            $supportingImmunization = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $supportingImmunization
     * @return static
     */
    public function setSupportingImmunization(array $supportingImmunization = []): self
    {
        if ([] !== $this->supportingImmunization) {
            $this->_trackValuesRemoved(count($this->supportingImmunization));
            $this->supportingImmunization = [];
        }
        if ([] === $supportingImmunization) {
            return $this;
        }
        foreach($supportingImmunization as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingImmunization($v);
            } else {
                $this->addSupportingImmunization(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingPatientInformation(): null|array
    {
        return $this->supportingPatientInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $supportingPatientInformation
     * @return static
     */
    public function addSupportingPatientInformation(null|FHIRReference $supportingPatientInformation = null): self
    {
        if (null === $supportingPatientInformation) {
            $supportingPatientInformation = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supportingPatientInformation[] = $supportingPatientInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $supportingPatientInformation
     * @return static
     */
    public function setSupportingPatientInformation(array $supportingPatientInformation = []): self
    {
        if ([] !== $this->supportingPatientInformation) {
            $this->_trackValuesRemoved(count($this->supportingPatientInformation));
            $this->supportingPatientInformation = [];
        }
        if ([] === $supportingPatientInformation) {
            return $this;
        }
        foreach($supportingPatientInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingPatientInformation($v);
            } else {
                $this->addSupportingPatientInformation(new FHIRReference($v));
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
        if ([] !== ($vs = $this->getVaccineCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VACCINE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTargetDisease())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_DISEASE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRAINDICATED_VACCINE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORECAST_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FORECAST_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_CRITERION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeries())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_IMMUNIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_PATIENT_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
            $v = $this->getVaccineCode();
            foreach($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_CODE])) {
                        $errs[self::FIELD_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_VACCINE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_DISEASE])) {
            $v = $this->getTargetDisease();
            foreach($validationRules[self::FIELD_TARGET_DISEASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_TARGET_DISEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_DISEASE])) {
                        $errs[self::FIELD_TARGET_DISEASE] = [];
                    }
                    $errs[self::FIELD_TARGET_DISEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
            $v = $this->getContraindicatedVaccineCode();
            foreach($validationRules[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_CONTRAINDICATED_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                        $errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORECAST_STATUS])) {
            $v = $this->getForecastStatus();
            foreach($validationRules[self::FIELD_FORECAST_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_FORECAST_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORECAST_STATUS])) {
                        $errs[self::FIELD_FORECAST_STATUS] = [];
                    }
                    $errs[self::FIELD_FORECAST_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORECAST_REASON])) {
            $v = $this->getForecastReason();
            foreach($validationRules[self::FIELD_FORECAST_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_FORECAST_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORECAST_REASON])) {
                        $errs[self::FIELD_FORECAST_REASON] = [];
                    }
                    $errs[self::FIELD_FORECAST_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_CRITERION])) {
            $v = $this->getDateCriterion();
            foreach($validationRules[self::FIELD_DATE_CRITERION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DATE_CRITERION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_CRITERION])) {
                        $errs[self::FIELD_DATE_CRITERION] = [];
                    }
                    $errs[self::FIELD_DATE_CRITERION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $v = $this->getDoseNumberPositiveInt();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DOSE_NUMBER_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
                        $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_STRING])) {
            $v = $this->getDoseNumberString();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DOSE_NUMBER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_STRING])) {
                        $errs[self::FIELD_DOSE_NUMBER_STRING] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $v = $this->getSeriesDosesPositiveInt();
            foreach($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SERIES_DOSES_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
                        $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_STRING])) {
            $v = $this->getSeriesDosesString();
            foreach($validationRules[self::FIELD_SERIES_DOSES_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SERIES_DOSES_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES_STRING])) {
                        $errs[self::FIELD_SERIES_DOSES_STRING] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_IMMUNIZATION])) {
            $v = $this->getSupportingImmunization();
            foreach($validationRules[self::FIELD_SUPPORTING_IMMUNIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SUPPORTING_IMMUNIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                        $errs[self::FIELD_SUPPORTING_IMMUNIZATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_IMMUNIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
            $v = $this->getSupportingPatientInformation();
            foreach($validationRules[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SUPPORTING_PATIENT_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                        $errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
        } else if (!($type instanceof FHIRImmunizationRecommendationRecommendation)) {
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
            if (self::FIELD_VACCINE_CODE === $n->nodeName) {
                $type->addVaccineCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_DISEASE === $n->nodeName) {
                $type->setTargetDisease(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRAINDICATED_VACCINE_CODE === $n->nodeName) {
                $type->addContraindicatedVaccineCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FORECAST_STATUS === $n->nodeName) {
                $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FORECAST_REASON === $n->nodeName) {
                $type->addForecastReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DATE_CRITERION === $n->nodeName) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SERIES === $n->nodeName) {
                $type->setSeries(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_NUMBER_POSITIVE_INT === $n->nodeName) {
                $type->setDoseNumberPositiveInt(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_NUMBER_STRING === $n->nodeName) {
                $type->setDoseNumberString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SERIES_DOSES_POSITIVE_INT === $n->nodeName) {
                $type->setSeriesDosesPositiveInt(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_SERIES_DOSES_STRING === $n->nodeName) {
                $type->setSeriesDosesString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTING_IMMUNIZATION === $n->nodeName) {
                $type->addSupportingImmunization(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTING_PATIENT_INFORMATION === $n->nodeName) {
                $type->addSupportingPatientInformation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SERIES);
        if (null !== $n) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSeries($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DOSE_NUMBER_POSITIVE_INT);
        if (null !== $n) {
            $pt = $type->getDoseNumberPositiveInt();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDoseNumberPositiveInt($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DOSE_NUMBER_STRING);
        if (null !== $n) {
            $pt = $type->getDoseNumberString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDoseNumberString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SERIES_DOSES_POSITIVE_INT);
        if (null !== $n) {
            $pt = $type->getSeriesDosesPositiveInt();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSeriesDosesPositiveInt($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SERIES_DOSES_STRING);
        if (null !== $n) {
            $pt = $type->getSeriesDosesString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSeriesDosesString($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ImmunizationRecommendationRecommendation'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getVaccineCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VACCINE_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_DISEASE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTRAINDICATED_VACCINE_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FORECAST_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FORECAST_REASON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DATE_CRITERION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeries())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERIES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_NUMBER_POSITIVE_INT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_NUMBER_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERIES_DOSES_POSITIVE_INT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERIES_DOSES_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTING_IMMUNIZATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTING_PATIENT_INFORMATION);
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
        if ([] !== ($vs = $this->getVaccineCode())) {
            $out->{self::FIELD_VACCINE_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VACCINE_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $out->{self::FIELD_TARGET_DISEASE} = $v;
        }
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            $out->{self::FIELD_CONTRAINDICATED_VACCINE_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTRAINDICATED_VACCINE_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $out->{self::FIELD_FORECAST_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            $out->{self::FIELD_FORECAST_REASON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FORECAST_REASON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            $out->{self::FIELD_DATE_CRITERION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DATE_CRITERION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeries())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOSE_NUMBER_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOSE_NUMBER_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOSE_NUMBER_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES_DOSES_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES_DOSES_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_DOSES_STRING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            $out->{self::FIELD_SUPPORTING_IMMUNIZATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPORTING_IMMUNIZATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            $out->{self::FIELD_SUPPORTING_PATIENT_INFORMATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPORTING_PATIENT_INFORMATION}[] = $v;
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