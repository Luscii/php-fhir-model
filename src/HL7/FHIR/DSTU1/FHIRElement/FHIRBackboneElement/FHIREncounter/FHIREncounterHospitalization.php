<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use HL7\FHIR\DSTU1\FHIRBooleanPrimitive;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod;
use HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 *
 * Class FHIREncounterHospitalization
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter
 */
class FHIREncounterHospitalization extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION;

    const FIELD_PRE_ADMISSION_IDENTIFIER = 'preAdmissionIdentifier';
    const FIELD_ORIGIN = 'origin';
    const FIELD_ADMIT_SOURCE = 'admitSource';
    const FIELD_PERIOD = 'period';
    const FIELD_ACCOMODATION = 'accomodation';
    const FIELD_DIET = 'diet';
    const FIELD_SPECIAL_COURTESY = 'specialCourtesy';
    const FIELD_SPECIAL_ARRANGEMENT = 'specialArrangement';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DISCHARGE_DISPOSITION = 'dischargeDisposition';
    const FIELD_DISCHARGE_DIAGNOSIS = 'dischargeDiagnosis';
    const FIELD_RE_ADMISSION = 'reAdmission';
    const FIELD_RE_ADMISSION_EXT = '_reAdmission';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $preAdmissionIdentifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $origin = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $admitSource = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation[]
     */
    protected null|array $accomodation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $diet = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $specialCourtesy = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $specialArrangement = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $destination = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $dischargeDisposition = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $dischargeDiagnosis = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $reAdmission = null;

    /**
     * Validation map for fields in type Encounter.Hospitalization
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIREncounterHospitalization Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
            if ($data[self::FIELD_PRE_ADMISSION_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setPreAdmissionIdentifier($data[self::FIELD_PRE_ADMISSION_IDENTIFIER]);
            } else {
                $this->setPreAdmissionIdentifier(new FHIRIdentifier($data[self::FIELD_PRE_ADMISSION_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ORIGIN])) {
            if ($data[self::FIELD_ORIGIN] instanceof FHIRResourceReference) {
                $this->setOrigin($data[self::FIELD_ORIGIN]);
            } else {
                $this->setOrigin(new FHIRResourceReference($data[self::FIELD_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_ADMIT_SOURCE])) {
            if ($data[self::FIELD_ADMIT_SOURCE] instanceof FHIRCodeableConcept) {
                $this->setAdmitSource($data[self::FIELD_ADMIT_SOURCE]);
            } else {
                $this->setAdmitSource(new FHIRCodeableConcept($data[self::FIELD_ADMIT_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ACCOMODATION])) {
            if (is_array($data[self::FIELD_ACCOMODATION])) {
                foreach($data[self::FIELD_ACCOMODATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterAccomodation) {
                        $this->addAccomodation($v);
                    } else {
                        $this->addAccomodation(new FHIREncounterAccomodation($v));
                    }
                }
            } elseif ($data[self::FIELD_ACCOMODATION] instanceof FHIREncounterAccomodation) {
                $this->addAccomodation($data[self::FIELD_ACCOMODATION]);
            } else {
                $this->addAccomodation(new FHIREncounterAccomodation($data[self::FIELD_ACCOMODATION]));
            }
        }
        if (isset($data[self::FIELD_DIET])) {
            if ($data[self::FIELD_DIET] instanceof FHIRCodeableConcept) {
                $this->setDiet($data[self::FIELD_DIET]);
            } else {
                $this->setDiet(new FHIRCodeableConcept($data[self::FIELD_DIET]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_COURTESY])) {
            if (is_array($data[self::FIELD_SPECIAL_COURTESY])) {
                foreach($data[self::FIELD_SPECIAL_COURTESY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialCourtesy($v);
                    } else {
                        $this->addSpecialCourtesy(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_COURTESY] instanceof FHIRCodeableConcept) {
                $this->addSpecialCourtesy($data[self::FIELD_SPECIAL_COURTESY]);
            } else {
                $this->addSpecialCourtesy(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_COURTESY]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_ARRANGEMENT])) {
            if (is_array($data[self::FIELD_SPECIAL_ARRANGEMENT])) {
                foreach($data[self::FIELD_SPECIAL_ARRANGEMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialArrangement($v);
                    } else {
                        $this->addSpecialArrangement(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_ARRANGEMENT] instanceof FHIRCodeableConcept) {
                $this->addSpecialArrangement($data[self::FIELD_SPECIAL_ARRANGEMENT]);
            } else {
                $this->addSpecialArrangement(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_ARRANGEMENT]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if ($data[self::FIELD_DESTINATION] instanceof FHIRResourceReference) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->setDestination(new FHIRResourceReference($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_DISCHARGE_DISPOSITION])) {
            if ($data[self::FIELD_DISCHARGE_DISPOSITION] instanceof FHIRCodeableConcept) {
                $this->setDischargeDisposition($data[self::FIELD_DISCHARGE_DISPOSITION]);
            } else {
                $this->setDischargeDisposition(new FHIRCodeableConcept($data[self::FIELD_DISCHARGE_DISPOSITION]));
            }
        }
        if (isset($data[self::FIELD_DISCHARGE_DIAGNOSIS])) {
            if ($data[self::FIELD_DISCHARGE_DIAGNOSIS] instanceof FHIRResourceReference) {
                $this->setDischargeDiagnosis($data[self::FIELD_DISCHARGE_DIAGNOSIS]);
            } else {
                $this->setDischargeDiagnosis(new FHIRResourceReference($data[self::FIELD_DISCHARGE_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_RE_ADMISSION]) || isset($data[self::FIELD_RE_ADMISSION_EXT])) {
            $value = $data[self::FIELD_RE_ADMISSION] ?? null;
            $ext = (isset($data[self::FIELD_RE_ADMISSION_EXT]) && is_array($data[self::FIELD_RE_ADMISSION_EXT])) ? $data[self::FIELD_RE_ADMISSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReAdmission($value);
                } else if (is_array($value)) {
                    $this->setReAdmission(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReAdmission(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReAdmission(new FHIRBoolean($ext));
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier(): null|FHIRIdentifier
    {
        return $this->preAdmissionIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return static
     */
    public function setPreAdmissionIdentifier(null|FHIRIdentifier $preAdmissionIdentifier = null): self
    {
        if (null === $preAdmissionIdentifier) {
            $preAdmissionIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->preAdmissionIdentifier, $preAdmissionIdentifier);
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getOrigin(): null|FHIRResourceReference
    {
        return $this->origin;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $origin
     * @return static
     */
    public function setOrigin(null|FHIRResourceReference $origin = null): self
    {
        if (null === $origin) {
            $origin = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->origin, $origin);
        $this->origin = $origin;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource(): null|FHIRCodeableConcept
    {
        return $this->admitSource;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $admitSource
     * @return static
     */
    public function setAdmitSource(null|FHIRCodeableConcept $admitSource = null): self
    {
        if (null === $admitSource) {
            $admitSource = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->admitSource, $admitSource);
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation[]
     */
    public function getAccomodation(): null|array
    {
        return $this->accomodation;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation $accomodation
     * @return static
     */
    public function addAccomodation(null|FHIREncounterAccomodation $accomodation = null): self
    {
        if (null === $accomodation) {
            $accomodation = new FHIREncounterAccomodation();
        }
        $this->_trackValueAdded();
        $this->accomodation[] = $accomodation;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation[] $accomodation
     * @return static
     */
    public function setAccomodation(array $accomodation = []): self
    {
        if ([] !== $this->accomodation) {
            $this->_trackValuesRemoved(count($this->accomodation));
            $this->accomodation = [];
        }
        if ([] === $accomodation) {
            return $this;
        }
        foreach($accomodation as $v) {
            if ($v instanceof FHIREncounterAccomodation) {
                $this->addAccomodation($v);
            } else {
                $this->addAccomodation(new FHIREncounterAccomodation($v));
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
     * Dietary restrictions for the patient.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDiet(): null|FHIRCodeableConcept
    {
        return $this->diet;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $diet
     * @return static
     */
    public function setDiet(null|FHIRCodeableConcept $diet = null): self
    {
        if (null === $diet) {
            $diet = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->diet, $diet);
        $this->diet = $diet;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy(): null|array
    {
        return $this->specialCourtesy;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return static
     */
    public function addSpecialCourtesy(null|FHIRCodeableConcept $specialCourtesy = null): self
    {
        if (null === $specialCourtesy) {
            $specialCourtesy = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[] $specialCourtesy
     * @return static
     */
    public function setSpecialCourtesy(array $specialCourtesy = []): self
    {
        if ([] !== $this->specialCourtesy) {
            $this->_trackValuesRemoved(count($this->specialCourtesy));
            $this->specialCourtesy = [];
        }
        if ([] === $specialCourtesy) {
            return $this;
        }
        foreach($specialCourtesy as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialCourtesy($v);
            } else {
                $this->addSpecialCourtesy(new FHIRCodeableConcept($v));
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
     * Wheelchair, translator, stretcher, etc.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialArrangement(): null|array
    {
        return $this->specialArrangement;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return static
     */
    public function addSpecialArrangement(null|FHIRCodeableConcept $specialArrangement = null): self
    {
        if (null === $specialArrangement) {
            $specialArrangement = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[] $specialArrangement
     * @return static
     */
    public function setSpecialArrangement(array $specialArrangement = []): self
    {
        if ([] !== $this->specialArrangement) {
            $this->_trackValuesRemoved(count($this->specialArrangement));
            $this->specialArrangement = [];
        }
        if ([] === $specialArrangement) {
            return $this;
        }
        foreach($specialArrangement as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialArrangement($v);
            } else {
                $this->addSpecialArrangement(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getDestination(): null|FHIRResourceReference
    {
        return $this->destination;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $destination
     * @return static
     */
    public function setDestination(null|FHIRResourceReference $destination = null): self
    {
        if (null === $destination) {
            $destination = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->destination, $destination);
        $this->destination = $destination;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition(): null|FHIRCodeableConcept
    {
        return $this->dischargeDisposition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return static
     */
    public function setDischargeDisposition(null|FHIRCodeableConcept $dischargeDisposition = null): self
    {
        if (null === $dischargeDisposition) {
            $dischargeDisposition = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->dischargeDisposition, $dischargeDisposition);
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getDischargeDiagnosis(): null|FHIRResourceReference
    {
        return $this->dischargeDiagnosis;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $dischargeDiagnosis
     * @return static
     */
    public function setDischargeDiagnosis(null|FHIRResourceReference $dischargeDiagnosis = null): self
    {
        if (null === $dischargeDiagnosis) {
            $dischargeDiagnosis = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->dischargeDiagnosis, $dischargeDiagnosis);
        $this->dischargeDiagnosis = $dischargeDiagnosis;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getReAdmission(): null|FHIRBoolean
    {
        return $this->reAdmission;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @param null|string|bool|\HL7\FHIR\DSTU1\FHIRBooleanPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean $reAdmission
     * @return static
     */
    public function setReAdmission(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reAdmission = null): self
    {
        if (null !== $reAdmission && !($reAdmission instanceof FHIRBoolean)) {
            $reAdmission = new FHIRBoolean($reAdmission);
        }
        $this->_trackValueSet($this->reAdmission, $reAdmission);
        $this->reAdmission = $reAdmission;
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
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRE_ADMISSION_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrigin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdmitSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMIT_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAccomodation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACCOMODATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDiet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_COURTESY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecialArrangement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_ARRANGEMENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESTINATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDischargeDisposition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISCHARGE_DISPOSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDischargeDiagnosis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISCHARGE_DIAGNOSIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReAdmission())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RE_ADMISSION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
            $v = $this->getPreAdmissionIdentifier();
            foreach($validationRules[self::FIELD_PRE_ADMISSION_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_PRE_ADMISSION_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
                        $errs[self::FIELD_PRE_ADMISSION_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_PRE_ADMISSION_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGIN])) {
                        $errs[self::FIELD_ORIGIN] = [];
                    }
                    $errs[self::FIELD_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMIT_SOURCE])) {
            $v = $this->getAdmitSource();
            foreach($validationRules[self::FIELD_ADMIT_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_ADMIT_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMIT_SOURCE])) {
                        $errs[self::FIELD_ADMIT_SOURCE] = [];
                    }
                    $errs[self::FIELD_ADMIT_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCOMODATION])) {
            $v = $this->getAccomodation();
            foreach($validationRules[self::FIELD_ACCOMODATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_ACCOMODATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCOMODATION])) {
                        $errs[self::FIELD_ACCOMODATION] = [];
                    }
                    $errs[self::FIELD_ACCOMODATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIET])) {
            $v = $this->getDiet();
            foreach($validationRules[self::FIELD_DIET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_DIET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIET])) {
                        $errs[self::FIELD_DIET] = [];
                    }
                    $errs[self::FIELD_DIET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_COURTESY])) {
            $v = $this->getSpecialCourtesy();
            foreach($validationRules[self::FIELD_SPECIAL_COURTESY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_SPECIAL_COURTESY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_COURTESY])) {
                        $errs[self::FIELD_SPECIAL_COURTESY] = [];
                    }
                    $errs[self::FIELD_SPECIAL_COURTESY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_ARRANGEMENT])) {
            $v = $this->getSpecialArrangement();
            foreach($validationRules[self::FIELD_SPECIAL_ARRANGEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_SPECIAL_ARRANGEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_ARRANGEMENT])) {
                        $errs[self::FIELD_SPECIAL_ARRANGEMENT] = [];
                    }
                    $errs[self::FIELD_SPECIAL_ARRANGEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESTINATION])) {
            $v = $this->getDestination();
            foreach($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESTINATION])) {
                        $errs[self::FIELD_DESTINATION] = [];
                    }
                    $errs[self::FIELD_DESTINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISCHARGE_DISPOSITION])) {
            $v = $this->getDischargeDisposition();
            foreach($validationRules[self::FIELD_DISCHARGE_DISPOSITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_DISCHARGE_DISPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCHARGE_DISPOSITION])) {
                        $errs[self::FIELD_DISCHARGE_DISPOSITION] = [];
                    }
                    $errs[self::FIELD_DISCHARGE_DISPOSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISCHARGE_DIAGNOSIS])) {
            $v = $this->getDischargeDiagnosis();
            foreach($validationRules[self::FIELD_DISCHARGE_DIAGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_DISCHARGE_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCHARGE_DIAGNOSIS])) {
                        $errs[self::FIELD_DISCHARGE_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_DISCHARGE_DIAGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RE_ADMISSION])) {
            $v = $this->getReAdmission();
            foreach($validationRules[self::FIELD_RE_ADMISSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION, self::FIELD_RE_ADMISSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RE_ADMISSION])) {
                        $errs[self::FIELD_RE_ADMISSION] = [];
                    }
                    $errs[self::FIELD_RE_ADMISSION][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
        } else if (!($type instanceof FHIREncounterHospitalization)) {
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
            if (self::FIELD_PRE_ADMISSION_IDENTIFIER === $n->nodeName) {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_ORIGIN === $n->nodeName) {
                $type->setOrigin(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_ADMIT_SOURCE === $n->nodeName) {
                $type->setAdmitSource(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_ACCOMODATION === $n->nodeName) {
                $type->addAccomodation(FHIREncounterAccomodation::xmlUnserialize($n));
            } elseif (self::FIELD_DIET === $n->nodeName) {
                $type->setDiet(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_COURTESY === $n->nodeName) {
                $type->addSpecialCourtesy(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_ARRANGEMENT === $n->nodeName) {
                $type->addSpecialArrangement(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DESTINATION === $n->nodeName) {
                $type->setDestination(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISCHARGE_DISPOSITION === $n->nodeName) {
                $type->setDischargeDisposition(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DISCHARGE_DIAGNOSIS === $n->nodeName) {
                $type->setDischargeDiagnosis(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_RE_ADMISSION === $n->nodeName) {
                $type->setReAdmission(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RE_ADMISSION);
        if (null !== $n) {
            $pt = $type->getReAdmission();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReAdmission($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('EncounterHospitalization'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRE_ADMISSION_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrigin())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORIGIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAdmitSource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADMIT_SOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAccomodation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACCOMODATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDiet())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIET);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIAL_COURTESY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSpecialArrangement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIAL_ARRANGEMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDestination())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESTINATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDischargeDisposition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISCHARGE_DISPOSITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDischargeDiagnosis())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISCHARGE_DIAGNOSIS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReAdmission())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RE_ADMISSION);
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
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $out->{self::FIELD_PRE_ADMISSION_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $out->{self::FIELD_ORIGIN} = $v;
        }
        if (null !== ($v = $this->getAdmitSource())) {
            $out->{self::FIELD_ADMIT_SOURCE} = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getAccomodation())) {
            $out->{self::FIELD_ACCOMODATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ACCOMODATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDiet())) {
            $out->{self::FIELD_DIET} = $v;
        }
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            $out->{self::FIELD_SPECIAL_COURTESY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIAL_COURTESY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecialArrangement())) {
            $out->{self::FIELD_SPECIAL_ARRANGEMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIAL_ARRANGEMENT}[] = $v;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            $out->{self::FIELD_DESTINATION} = $v;
        }
        if (null !== ($v = $this->getDischargeDisposition())) {
            $out->{self::FIELD_DISCHARGE_DISPOSITION} = $v;
        }
        if (null !== ($v = $this->getDischargeDiagnosis())) {
            $out->{self::FIELD_DISCHARGE_DIAGNOSIS} = $v;
        }
        if (null !== ($v = $this->getReAdmission())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RE_ADMISSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RE_ADMISSION_EXT} = $ext;
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