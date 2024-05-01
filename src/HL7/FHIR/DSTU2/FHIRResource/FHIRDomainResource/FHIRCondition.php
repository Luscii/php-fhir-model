<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\DSTU2\FHIRBooleanPrimitive;
use HL7\FHIR\DSTU2\FHIRCodePrimitive;
use HL7\FHIR\DSTU2\FHIRDatePrimitive;
use HL7\FHIR\DSTU2\FHIRDateTimePrimitive;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCode;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDate;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRId;
use HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU2\FHIRElement\FHIRMeta;
use HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative;
use HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod;
use HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge;
use HL7\FHIR\DSTU2\FHIRElement\FHIRRange;
use HL7\FHIR\DSTU2\FHIRElement\FHIRReference;
use HL7\FHIR\DSTU2\FHIRElement\FHIRString;
use HL7\FHIR\DSTU2\FHIRElement\FHIRUri;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;
use HL7\FHIR\DSTU2\FHIRStringPrimitive;
use HL7\FHIR\DSTU2\FHIRUriPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRContainedTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeMap;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * Use to record detailed information about conditions, problems or diagnoses
 * recognized by a clinician. There are many uses including: recording a diagnosis
 * during an encounter; populating a problem list or a summary statement, such as a
 * discharge summary.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCondition
 * @package \HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRCondition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONDITION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_PATIENT = 'patient';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_ASSERTER = 'asserter';
    const FIELD_DATE_RECORDED = 'dateRecorded';
    const FIELD_DATE_RECORDED_EXT = '_dateRecorded';
    const FIELD_CODE = 'code';
    const FIELD_CATEGORY = 'category';
    const FIELD_CLINICAL_STATUS = 'clinicalStatus';
    const FIELD_CLINICAL_STATUS_EXT = '_clinicalStatus';
    const FIELD_VERIFICATION_STATUS = 'verificationStatus';
    const FIELD_VERIFICATION_STATUS_EXT = '_verificationStatus';
    const FIELD_SEVERITY = 'severity';
    const FIELD_ONSET_DATE_TIME = 'onsetDateTime';
    const FIELD_ONSET_DATE_TIME_EXT = '_onsetDateTime';
    const FIELD_ONSET_QUANTITY = 'onsetQuantity';
    const FIELD_ONSET_PERIOD = 'onsetPeriod';
    const FIELD_ONSET_RANGE = 'onsetRange';
    const FIELD_ONSET_STRING = 'onsetString';
    const FIELD_ONSET_STRING_EXT = '_onsetString';
    const FIELD_ABATEMENT_DATE_TIME = 'abatementDateTime';
    const FIELD_ABATEMENT_DATE_TIME_EXT = '_abatementDateTime';
    const FIELD_ABATEMENT_QUANTITY = 'abatementQuantity';
    const FIELD_ABATEMENT_BOOLEAN = 'abatementBoolean';
    const FIELD_ABATEMENT_BOOLEAN_EXT = '_abatementBoolean';
    const FIELD_ABATEMENT_PERIOD = 'abatementPeriod';
    const FIELD_ABATEMENT_RANGE = 'abatementRange';
    const FIELD_ABATEMENT_STRING = 'abatementString';
    const FIELD_ABATEMENT_STRING_EXT = '_abatementString';
    const FIELD_STAGE = 'stage';
    const FIELD_EVIDENCE = 'evidence';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $asserter = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A date, when the Condition statement was documented.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $dateRecorded = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $category = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $clinicalStatus = null;
    /**
     * The verification status to support or decline the clinical status of the
     * condition or diagnosis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus
     */
    protected null|FHIRConditionVerificationStatus $verificationStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $severity = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $onsetDateTime = null;
    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $onsetQuantity = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $onsetPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $onsetRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $onsetString = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $abatementDateTime = null;
    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $abatementQuantity = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $abatementBoolean = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $abatementPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $abatementRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $abatementString = null;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    protected null|FHIRConditionStage $stage = null;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    protected null|array $evidence = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $bodySite = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $notes = null;

    /**
     * Validation map for fields in type Condition
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCondition Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_ASSERTER])) {
            if ($data[self::FIELD_ASSERTER] instanceof FHIRReference) {
                $this->setAsserter($data[self::FIELD_ASSERTER]);
            } else {
                $this->setAsserter(new FHIRReference($data[self::FIELD_ASSERTER]));
            }
        }
        if (isset($data[self::FIELD_DATE_RECORDED]) || isset($data[self::FIELD_DATE_RECORDED_EXT])) {
            $value = $data[self::FIELD_DATE_RECORDED] ?? null;
            $ext = (isset($data[self::FIELD_DATE_RECORDED_EXT]) && is_array($data[self::FIELD_DATE_RECORDED_EXT])) ? $data[self::FIELD_DATE_RECORDED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDateRecorded($value);
                } else if (is_array($value)) {
                    $this->setDateRecorded(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDateRecorded(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDateRecorded(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_STATUS]) || isset($data[self::FIELD_CLINICAL_STATUS_EXT])) {
            $value = $data[self::FIELD_CLINICAL_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_CLINICAL_STATUS_EXT]) && is_array($data[self::FIELD_CLINICAL_STATUS_EXT])) ? $data[self::FIELD_CLINICAL_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setClinicalStatus($value);
                } else if (is_array($value)) {
                    $this->setClinicalStatus(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setClinicalStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setClinicalStatus(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_VERIFICATION_STATUS]) || isset($data[self::FIELD_VERIFICATION_STATUS_EXT])) {
            $value = $data[self::FIELD_VERIFICATION_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_VERIFICATION_STATUS_EXT]) && is_array($data[self::FIELD_VERIFICATION_STATUS_EXT])) ? $data[self::FIELD_VERIFICATION_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConditionVerificationStatus) {
                    $this->setVerificationStatus($value);
                } else if (is_array($value)) {
                    $this->setVerificationStatus(new FHIRConditionVerificationStatus(array_merge($ext, $value)));
                } else {
                    $this->setVerificationStatus(new FHIRConditionVerificationStatus([FHIRConditionVerificationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVerificationStatus(new FHIRConditionVerificationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SEVERITY])) {
            if ($data[self::FIELD_SEVERITY] instanceof FHIRCodeableConcept) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } else {
                $this->setSeverity(new FHIRCodeableConcept($data[self::FIELD_SEVERITY]));
            }
        }
        if (isset($data[self::FIELD_ONSET_DATE_TIME]) || isset($data[self::FIELD_ONSET_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_ONSET_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_ONSET_DATE_TIME_EXT]) && is_array($data[self::FIELD_ONSET_DATE_TIME_EXT])) ? $data[self::FIELD_ONSET_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOnsetDateTime($value);
                } else if (is_array($value)) {
                    $this->setOnsetDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOnsetDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOnsetDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ONSET_QUANTITY])) {
            if ($data[self::FIELD_ONSET_QUANTITY] instanceof FHIRAge) {
                $this->setOnsetQuantity($data[self::FIELD_ONSET_QUANTITY]);
            } else {
                $this->setOnsetQuantity(new FHIRAge($data[self::FIELD_ONSET_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_ONSET_PERIOD])) {
            if ($data[self::FIELD_ONSET_PERIOD] instanceof FHIRPeriod) {
                $this->setOnsetPeriod($data[self::FIELD_ONSET_PERIOD]);
            } else {
                $this->setOnsetPeriod(new FHIRPeriod($data[self::FIELD_ONSET_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ONSET_RANGE])) {
            if ($data[self::FIELD_ONSET_RANGE] instanceof FHIRRange) {
                $this->setOnsetRange($data[self::FIELD_ONSET_RANGE]);
            } else {
                $this->setOnsetRange(new FHIRRange($data[self::FIELD_ONSET_RANGE]));
            }
        }
        if (isset($data[self::FIELD_ONSET_STRING]) || isset($data[self::FIELD_ONSET_STRING_EXT])) {
            $value = $data[self::FIELD_ONSET_STRING] ?? null;
            $ext = (isset($data[self::FIELD_ONSET_STRING_EXT]) && is_array($data[self::FIELD_ONSET_STRING_EXT])) ? $data[self::FIELD_ONSET_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOnsetString($value);
                } else if (is_array($value)) {
                    $this->setOnsetString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOnsetString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOnsetString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_DATE_TIME]) || isset($data[self::FIELD_ABATEMENT_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_ABATEMENT_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_ABATEMENT_DATE_TIME_EXT]) && is_array($data[self::FIELD_ABATEMENT_DATE_TIME_EXT])) ? $data[self::FIELD_ABATEMENT_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAbatementDateTime($value);
                } else if (is_array($value)) {
                    $this->setAbatementDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAbatementDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAbatementDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_QUANTITY])) {
            if ($data[self::FIELD_ABATEMENT_QUANTITY] instanceof FHIRAge) {
                $this->setAbatementQuantity($data[self::FIELD_ABATEMENT_QUANTITY]);
            } else {
                $this->setAbatementQuantity(new FHIRAge($data[self::FIELD_ABATEMENT_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_BOOLEAN]) || isset($data[self::FIELD_ABATEMENT_BOOLEAN_EXT])) {
            $value = $data[self::FIELD_ABATEMENT_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_ABATEMENT_BOOLEAN_EXT]) && is_array($data[self::FIELD_ABATEMENT_BOOLEAN_EXT])) ? $data[self::FIELD_ABATEMENT_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAbatementBoolean($value);
                } else if (is_array($value)) {
                    $this->setAbatementBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAbatementBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAbatementBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_PERIOD])) {
            if ($data[self::FIELD_ABATEMENT_PERIOD] instanceof FHIRPeriod) {
                $this->setAbatementPeriod($data[self::FIELD_ABATEMENT_PERIOD]);
            } else {
                $this->setAbatementPeriod(new FHIRPeriod($data[self::FIELD_ABATEMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_RANGE])) {
            if ($data[self::FIELD_ABATEMENT_RANGE] instanceof FHIRRange) {
                $this->setAbatementRange($data[self::FIELD_ABATEMENT_RANGE]);
            } else {
                $this->setAbatementRange(new FHIRRange($data[self::FIELD_ABATEMENT_RANGE]));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_STRING]) || isset($data[self::FIELD_ABATEMENT_STRING_EXT])) {
            $value = $data[self::FIELD_ABATEMENT_STRING] ?? null;
            $ext = (isset($data[self::FIELD_ABATEMENT_STRING_EXT]) && is_array($data[self::FIELD_ABATEMENT_STRING_EXT])) ? $data[self::FIELD_ABATEMENT_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAbatementString($value);
                } else if (is_array($value)) {
                    $this->setAbatementString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAbatementString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAbatementString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STAGE])) {
            if ($data[self::FIELD_STAGE] instanceof FHIRConditionStage) {
                $this->setStage($data[self::FIELD_STAGE]);
            } else {
                $this->setStage(new FHIRConditionStage($data[self::FIELD_STAGE]));
            }
        }
        if (isset($data[self::FIELD_EVIDENCE])) {
            if (is_array($data[self::FIELD_EVIDENCE])) {
                foreach($data[self::FIELD_EVIDENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConditionEvidence) {
                        $this->addEvidence($v);
                    } else {
                        $this->addEvidence(new FHIRConditionEvidence($v));
                    }
                }
            } elseif ($data[self::FIELD_EVIDENCE] instanceof FHIRConditionEvidence) {
                $this->addEvidence($data[self::FIELD_EVIDENCE]);
            } else {
                $this->addEvidence(new FHIRConditionEvidence($data[self::FIELD_EVIDENCE]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            $value = $data[self::FIELD_NOTES] ?? null;
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) ? $data[self::FIELD_NOTES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAsserter(): null|FHIRReference
    {
        return $this->asserter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $asserter
     * @return static
     */
    public function setAsserter(null|FHIRReference $asserter = null): self
    {
        if (null === $asserter) {
            $asserter = new FHIRReference();
        }
        $this->_trackValueSet($this->asserter, $asserter);
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A date, when the Condition statement was documented.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getDateRecorded(): null|FHIRDate
    {
        return $this->dateRecorded;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A date, when the Condition statement was documented.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRDatePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $dateRecorded
     * @return static
     */
    public function setDateRecorded(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dateRecorded = null): self
    {
        if (null !== $dateRecorded && !($dateRecorded instanceof FHIRDate)) {
            $dateRecorded = new FHIRDate($dateRecorded);
        }
        $this->_trackValueSet($this->dateRecorded, $dateRecorded);
        $this->dateRecorded = $dateRecorded;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->category, $category);
        $this->category = $category;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getClinicalStatus(): null|FHIRCode
    {
        return $this->clinicalStatus;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRCodePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $clinicalStatus
     * @return static
     */
    public function setClinicalStatus(null|string|FHIRCodePrimitive|FHIRCode $clinicalStatus = null): self
    {
        if (null !== $clinicalStatus && !($clinicalStatus instanceof FHIRCode)) {
            $clinicalStatus = new FHIRCode($clinicalStatus);
        }
        $this->_trackValueSet($this->clinicalStatus, $clinicalStatus);
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * The verification status to support or decline the clinical status of the
     * condition or diagnosis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus
     */
    public function getVerificationStatus(): null|FHIRConditionVerificationStatus
    {
        return $this->verificationStatus;
    }

    /**
     * The verification status to support or decline the clinical status of the
     * condition or diagnosis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus $verificationStatus
     * @return static
     */
    public function setVerificationStatus(null|FHIRConditionVerificationStatus $verificationStatus = null): self
    {
        if (null === $verificationStatus) {
            $verificationStatus = new FHIRConditionVerificationStatus();
        }
        $this->_trackValueSet($this->verificationStatus, $verificationStatus);
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity(): null|FHIRCodeableConcept
    {
        return $this->severity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $severity
     * @return static
     */
    public function setSeverity(null|FHIRCodeableConcept $severity = null): self
    {
        if (null === $severity) {
            $severity = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->severity, $severity);
        $this->severity = $severity;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime(): null|FHIRDateTime
    {
        return $this->onsetDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRDateTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $onsetDateTime
     * @return static
     */
    public function setOnsetDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onsetDateTime = null): self
    {
        if (null !== $onsetDateTime && !($onsetDateTime instanceof FHIRDateTime)) {
            $onsetDateTime = new FHIRDateTime($onsetDateTime);
        }
        $this->_trackValueSet($this->onsetDateTime, $onsetDateTime);
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetQuantity(): null|FHIRAge
    {
        return $this->onsetQuantity;
    }

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $onsetQuantity
     * @return static
     */
    public function setOnsetQuantity(null|FHIRAge $onsetQuantity = null): self
    {
        if (null === $onsetQuantity) {
            $onsetQuantity = new FHIRAge();
        }
        $this->_trackValueSet($this->onsetQuantity, $onsetQuantity);
        $this->onsetQuantity = $onsetQuantity;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod(): null|FHIRPeriod
    {
        return $this->onsetPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $onsetPeriod
     * @return static
     */
    public function setOnsetPeriod(null|FHIRPeriod $onsetPeriod = null): self
    {
        if (null === $onsetPeriod) {
            $onsetPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->onsetPeriod, $onsetPeriod);
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getOnsetRange(): null|FHIRRange
    {
        return $this->onsetRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $onsetRange
     * @return static
     */
    public function setOnsetRange(null|FHIRRange $onsetRange = null): self
    {
        if (null === $onsetRange) {
            $onsetRange = new FHIRRange();
        }
        $this->_trackValueSet($this->onsetRange, $onsetRange);
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getOnsetString(): null|FHIRString
    {
        return $this->onsetString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $onsetString
     * @return static
     */
    public function setOnsetString(null|string|FHIRStringPrimitive|FHIRString $onsetString = null): self
    {
        if (null !== $onsetString && !($onsetString instanceof FHIRString)) {
            $onsetString = new FHIRString($onsetString);
        }
        $this->_trackValueSet($this->onsetString, $onsetString);
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime(): null|FHIRDateTime
    {
        return $this->abatementDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRDateTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $abatementDateTime
     * @return static
     */
    public function setAbatementDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $abatementDateTime = null): self
    {
        if (null !== $abatementDateTime && !($abatementDateTime instanceof FHIRDateTime)) {
            $abatementDateTime = new FHIRDateTime($abatementDateTime);
        }
        $this->_trackValueSet($this->abatementDateTime, $abatementDateTime);
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementQuantity(): null|FHIRAge
    {
        return $this->abatementQuantity;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $abatementQuantity
     * @return static
     */
    public function setAbatementQuantity(null|FHIRAge $abatementQuantity = null): self
    {
        if (null === $abatementQuantity) {
            $abatementQuantity = new FHIRAge();
        }
        $this->_trackValueSet($this->abatementQuantity, $abatementQuantity);
        $this->abatementQuantity = $abatementQuantity;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean(): null|FHIRBoolean
    {
        return $this->abatementBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|string|bool|\HL7\FHIR\DSTU2\FHIRBooleanPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $abatementBoolean
     * @return static
     */
    public function setAbatementBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abatementBoolean = null): self
    {
        if (null !== $abatementBoolean && !($abatementBoolean instanceof FHIRBoolean)) {
            $abatementBoolean = new FHIRBoolean($abatementBoolean);
        }
        $this->_trackValueSet($this->abatementBoolean, $abatementBoolean);
        $this->abatementBoolean = $abatementBoolean;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod(): null|FHIRPeriod
    {
        return $this->abatementPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $abatementPeriod
     * @return static
     */
    public function setAbatementPeriod(null|FHIRPeriod $abatementPeriod = null): self
    {
        if (null === $abatementPeriod) {
            $abatementPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->abatementPeriod, $abatementPeriod);
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getAbatementRange(): null|FHIRRange
    {
        return $this->abatementRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $abatementRange
     * @return static
     */
    public function setAbatementRange(null|FHIRRange $abatementRange = null): self
    {
        if (null === $abatementRange) {
            $abatementRange = new FHIRRange();
        }
        $this->_trackValueSet($this->abatementRange, $abatementRange);
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getAbatementString(): null|FHIRString
    {
        return $this->abatementString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $abatementString
     * @return static
     */
    public function setAbatementString(null|string|FHIRStringPrimitive|FHIRString $abatementString = null): self
    {
        if (null !== $abatementString && !($abatementString instanceof FHIRString)) {
            $abatementString = new FHIRString($abatementString);
        }
        $this->_trackValueSet($this->abatementString, $abatementString);
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function getStage(): null|FHIRConditionStage
    {
        return $this->stage;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
     * @return static
     */
    public function setStage(null|FHIRConditionStage $stage = null): self
    {
        if (null === $stage) {
            $stage = new FHIRConditionStage();
        }
        $this->_trackValueSet($this->stage, $stage);
        $this->stage = $stage;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence(): null|array
    {
        return $this->evidence;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence $evidence
     * @return static
     */
    public function addEvidence(null|FHIRConditionEvidence $evidence = null): self
    {
        if (null === $evidence) {
            $evidence = new FHIRConditionEvidence();
        }
        $this->_trackValueAdded();
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] $evidence
     * @return static
     */
    public function setEvidence(array $evidence = []): self
    {
        if ([] !== $this->evidence) {
            $this->_trackValuesRemoved(count($this->evidence));
            $this->evidence = [];
        }
        if ([] === $evidence) {
            return $this;
        }
        foreach($evidence as $v) {
            if ($v instanceof FHIRConditionEvidence) {
                $this->addEvidence($v);
            } else {
                $this->addEvidence(new FHIRConditionEvidence($v));
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
     * The anatomical location where this condition manifests itself.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite(): null|array
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(null|FHIRCodeableConcept $bodySite = null): self
    {
        if (null === $bodySite) {
            $bodySite = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @return static
     */
    public function setBodySite(array $bodySite = []): self
    {
        if ([] !== $this->bodySite) {
            $this->_trackValuesRemoved(count($this->bodySite));
            $this->bodySite = [];
        }
        if ([] === $bodySite) {
            return $this;
        }
        foreach($bodySite as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addBodySite($v);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getNotes(): null|FHIRString
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $notes
     * @return static
     */
    public function setNotes(null|string|FHIRStringPrimitive|FHIRString $notes = null): self
    {
        if (null !== $notes && !($notes instanceof FHIRString)) {
            $notes = new FHIRString($notes);
        }
        $this->_trackValueSet($this->notes, $notes);
        $this->notes = $notes;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSERTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateRecorded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_RECORDED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLINICAL_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STAGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EVIDENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BODY_SITE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTER])) {
            $v = $this->getAsserter();
            foreach($validationRules[self::FIELD_ASSERTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ASSERTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTER])) {
                        $errs[self::FIELD_ASSERTER] = [];
                    }
                    $errs[self::FIELD_ASSERTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_RECORDED])) {
            $v = $this->getDateRecorded();
            foreach($validationRules[self::FIELD_DATE_RECORDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_DATE_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_RECORDED])) {
                        $errs[self::FIELD_DATE_RECORDED] = [];
                    }
                    $errs[self::FIELD_DATE_RECORDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_STATUS])) {
            $v = $this->getClinicalStatus();
            foreach($validationRules[self::FIELD_CLINICAL_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CLINICAL_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_STATUS])) {
                        $errs[self::FIELD_CLINICAL_STATUS] = [];
                    }
                    $errs[self::FIELD_CLINICAL_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFICATION_STATUS])) {
            $v = $this->getVerificationStatus();
            foreach($validationRules[self::FIELD_VERIFICATION_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_VERIFICATION_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION_STATUS])) {
                        $errs[self::FIELD_VERIFICATION_STATUS] = [];
                    }
                    $errs[self::FIELD_VERIFICATION_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_DATE_TIME])) {
            $v = $this->getOnsetDateTime();
            foreach($validationRules[self::FIELD_ONSET_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_DATE_TIME])) {
                        $errs[self::FIELD_ONSET_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ONSET_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_QUANTITY])) {
            $v = $this->getOnsetQuantity();
            foreach($validationRules[self::FIELD_ONSET_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_QUANTITY])) {
                        $errs[self::FIELD_ONSET_QUANTITY] = [];
                    }
                    $errs[self::FIELD_ONSET_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_PERIOD])) {
            $v = $this->getOnsetPeriod();
            foreach($validationRules[self::FIELD_ONSET_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_PERIOD])) {
                        $errs[self::FIELD_ONSET_PERIOD] = [];
                    }
                    $errs[self::FIELD_ONSET_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_RANGE])) {
            $v = $this->getOnsetRange();
            foreach($validationRules[self::FIELD_ONSET_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_RANGE])) {
                        $errs[self::FIELD_ONSET_RANGE] = [];
                    }
                    $errs[self::FIELD_ONSET_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_STRING])) {
            $v = $this->getOnsetString();
            foreach($validationRules[self::FIELD_ONSET_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_STRING])) {
                        $errs[self::FIELD_ONSET_STRING] = [];
                    }
                    $errs[self::FIELD_ONSET_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_DATE_TIME])) {
            $v = $this->getAbatementDateTime();
            foreach($validationRules[self::FIELD_ABATEMENT_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_DATE_TIME])) {
                        $errs[self::FIELD_ABATEMENT_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_QUANTITY])) {
            $v = $this->getAbatementQuantity();
            foreach($validationRules[self::FIELD_ABATEMENT_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_QUANTITY])) {
                        $errs[self::FIELD_ABATEMENT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_BOOLEAN])) {
            $v = $this->getAbatementBoolean();
            foreach($validationRules[self::FIELD_ABATEMENT_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_BOOLEAN])) {
                        $errs[self::FIELD_ABATEMENT_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_PERIOD])) {
            $v = $this->getAbatementPeriod();
            foreach($validationRules[self::FIELD_ABATEMENT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_PERIOD])) {
                        $errs[self::FIELD_ABATEMENT_PERIOD] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_RANGE])) {
            $v = $this->getAbatementRange();
            foreach($validationRules[self::FIELD_ABATEMENT_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_RANGE])) {
                        $errs[self::FIELD_ABATEMENT_RANGE] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_STRING])) {
            $v = $this->getAbatementString();
            foreach($validationRules[self::FIELD_ABATEMENT_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_STRING])) {
                        $errs[self::FIELD_ABATEMENT_STRING] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STAGE])) {
            $v = $this->getStage();
            foreach($validationRules[self::FIELD_STAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_STAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STAGE])) {
                        $errs[self::FIELD_STAGE] = [];
                    }
                    $errs[self::FIELD_STAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVIDENCE])) {
            $v = $this->getEvidence();
            foreach($validationRules[self::FIELD_EVIDENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_EVIDENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVIDENCE])) {
                        $errs[self::FIELD_EVIDENCE] = [];
                    }
                    $errs[self::FIELD_EVIDENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCondition $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCondition
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
        } else if (!($type instanceof FHIRCondition)) {
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ENCOUNTER === $n->nodeName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ASSERTER === $n->nodeName) {
                $type->setAsserter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DATE_RECORDED === $n->nodeName) {
                $type->setDateRecorded(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CLINICAL_STATUS === $n->nodeName) {
                $type->setClinicalStatus(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_VERIFICATION_STATUS === $n->nodeName) {
                $type->setVerificationStatus(FHIRConditionVerificationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_SEVERITY === $n->nodeName) {
                $type->setSeverity(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ONSET_DATE_TIME === $n->nodeName) {
                $type->setOnsetDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_ONSET_QUANTITY === $n->nodeName) {
                $type->setOnsetQuantity(FHIRAge::xmlUnserialize($n));
            } elseif (self::FIELD_ONSET_PERIOD === $n->nodeName) {
                $type->setOnsetPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_ONSET_RANGE === $n->nodeName) {
                $type->setOnsetRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_ONSET_STRING === $n->nodeName) {
                $type->setOnsetString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ABATEMENT_DATE_TIME === $n->nodeName) {
                $type->setAbatementDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_ABATEMENT_QUANTITY === $n->nodeName) {
                $type->setAbatementQuantity(FHIRAge::xmlUnserialize($n));
            } elseif (self::FIELD_ABATEMENT_BOOLEAN === $n->nodeName) {
                $type->setAbatementBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_ABATEMENT_PERIOD === $n->nodeName) {
                $type->setAbatementPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_ABATEMENT_RANGE === $n->nodeName) {
                $type->setAbatementRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_ABATEMENT_STRING === $n->nodeName) {
                $type->setAbatementString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STAGE === $n->nodeName) {
                $type->setStage(FHIRConditionStage::xmlUnserialize($n));
            } elseif (self::FIELD_EVIDENCE === $n->nodeName) {
                $type->addEvidence(FHIRConditionEvidence::xmlUnserialize($n));
            } elseif (self::FIELD_BODY_SITE === $n->nodeName) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_NOTES === $n->nodeName) {
                $type->setNotes(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATE_RECORDED);
        if (null !== $n) {
            $pt = $type->getDateRecorded();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDateRecorded($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CLINICAL_STATUS);
        if (null !== $n) {
            $pt = $type->getClinicalStatus();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setClinicalStatus($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ONSET_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getOnsetDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOnsetDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ONSET_STRING);
        if (null !== $n) {
            $pt = $type->getOnsetString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOnsetString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ABATEMENT_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getAbatementDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAbatementDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ABATEMENT_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getAbatementBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAbatementBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ABATEMENT_STRING);
        if (null !== $n) {
            $pt = $type->getAbatementString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAbatementString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOTES);
        if (null !== $n) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNotes($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Condition'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEncounter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENCOUNTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAsserter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ASSERTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDateRecorded())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE_RECORDED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CLINICAL_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERIFICATION_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeverity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEVERITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ONSET_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOnsetQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ONSET_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ONSET_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ONSET_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOnsetString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ONSET_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbatementDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABATEMENT_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbatementQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABATEMENT_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABATEMENT_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABATEMENT_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABATEMENT_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbatementString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABATEMENT_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EVIDENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_BODY_SITE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOTES);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getAsserter())) {
            $out->{self::FIELD_ASSERTER} = $v;
        }
        if (null !== ($v = $this->getDateRecorded())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE_RECORDED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_RECORDED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CLINICAL_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CLINICAL_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERIFICATION_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConditionVerificationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERIFICATION_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $out->{self::FIELD_SEVERITY} = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ONSET_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ONSET_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOnsetQuantity())) {
            $out->{self::FIELD_ONSET_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $out->{self::FIELD_ONSET_PERIOD} = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $out->{self::FIELD_ONSET_RANGE} = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ONSET_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ONSET_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAbatementDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ABATEMENT_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ABATEMENT_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAbatementQuantity())) {
            $out->{self::FIELD_ABATEMENT_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ABATEMENT_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ABATEMENT_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $out->{self::FIELD_ABATEMENT_PERIOD} = $v;
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $out->{self::FIELD_ABATEMENT_RANGE} = $v;
        }
        if (null !== ($v = $this->getAbatementString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ABATEMENT_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ABATEMENT_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStage())) {
            $out->{self::FIELD_STAGE} = $v;
        }
        if ([] !== ($vs = $this->getEvidence())) {
            $out->{self::FIELD_EVIDENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_EVIDENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            $out->{self::FIELD_BODY_SITE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_BODY_SITE}[] = $v;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOTES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOTES_EXT} = $ext;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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