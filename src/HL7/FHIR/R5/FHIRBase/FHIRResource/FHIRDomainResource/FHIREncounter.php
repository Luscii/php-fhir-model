<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterReason;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREncounterStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 * Encounter is primarily used to record information about the actual activities
 * that occurred, where Appointment is used to record planned activities.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIREncounter
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIREncounter extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CLASS = 'class';
    const FIELD_PRIORITY = 'priority';
    const FIELD_TYPE = 'type';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBJECT_STATUS = 'subjectStatus';
    const FIELD_EPISODE_OF_CARE = 'episodeOfCare';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_CARE_TEAM = 'careTeam';
    const FIELD_PART_OF = 'partOf';
    const FIELD_SERVICE_PROVIDER = 'serviceProvider';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_APPOINTMENT = 'appointment';
    const FIELD_VIRTUAL_SERVICE = 'virtualService';
    const FIELD_ACTUAL_PERIOD = 'actualPeriod';
    const FIELD_PLANNED_START_DATE = 'plannedStartDate';
    const FIELD_PLANNED_START_DATE_EXT = '_plannedStartDate';
    const FIELD_PLANNED_END_DATE = 'plannedEndDate';
    const FIELD_PLANNED_END_DATE_EXT = '_plannedEndDate';
    const FIELD_LENGTH = 'length';
    const FIELD_REASON = 'reason';
    const FIELD_DIAGNOSIS = 'diagnosis';
    const FIELD_ACCOUNT = 'account';
    const FIELD_DIET_PREFERENCE = 'dietPreference';
    const FIELD_SPECIAL_ARRANGEMENT = 'specialArrangement';
    const FIELD_SPECIAL_COURTESY = 'specialCourtesy';
    const FIELD_ADMISSION = 'admission';
    const FIELD_LOCATION = 'location';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the encounter (not the state of the patient within the
     * encounter - that is subjectState).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREncounterStatus
     */
    protected null|FHIREncounterStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $class = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the urgency of the encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $priority = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $type = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $serviceType = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group related to this encounter. In some use-cases the patient
     * MAY not be present, such as a case meeting about a patient between several
     * practitioners or a careteam.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subjectStatus value can be used to track the patient's status within the
     * encounter. It details whether the patient has arrived or departed, has been
     * triaged or is currently in a waiting status.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $subjectStatus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $episodeOfCare = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The group(s) of individuals, organizations that are allocated to participate in
     * this encounter. The participants backbone will record the actuals of when these
     * individuals participated during the encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $careTeam = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Encounter of which this encounter is a part of (administratively or in
     * time).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $partOf = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is primarily responsible for this Encounter's services.
     * This MAY be the same as the organization on the Patient record, however it could
     * be different, such as if the actor performing the services was from an external
     * organization (which may be billed seperately) for an external consultation.
     * Refer to the colonoscopy example on the Encounter examples tab.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $serviceProvider = null;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of people responsible for providing the service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
     */
    protected null|array $participant = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $appointment = [];
    /**
     * Virtual Service Contact Details.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail[]
     */
    protected null|array $virtualService = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual start and end time of the encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $actualPeriod = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $plannedStartDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $plannedEndDate = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actual quantity of time the encounter lasted. This excludes the time during
     * leaves of absence. When missing it is the time in between the start and end
     * values.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $length = null;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of medical reasons that are expected to be addressed during the episode
     * of care.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterReason[]
     */
    protected null|array $reason = [];
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis[]
     */
    protected null|array $diagnosis = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $account = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $dietPreference = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any special requests that have been made for this encounter, such as the
     * provision of specific equipment or other things.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $specialArrangement = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies that may be provided to the patient during the encounter
     * (VIP, board member, professional courtesy).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $specialCourtesy = [];
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * Details about the stay during which a healthcare service is provided. This does
     * not describe the event of admitting the patient, but rather any information that
     * is relevant from the time of admittance until the time of discharge.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission
     */
    protected null|FHIREncounterAdmission $admission = null;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
     */
    protected null|array $location = [];

    /**
     * Validation map for fields in type Encounter
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIREncounter Constructor
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREncounterStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIREncounterStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIREncounterStatus([FHIREncounterStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIREncounterStatus($ext));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            if (is_array($data[self::FIELD_CLASS])) {
                foreach($data[self::FIELD_CLASS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClass($v);
                    } else {
                        $this->addClass(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->addClass($data[self::FIELD_CLASS]);
            } else {
                $this->addClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
            }
        }
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
        if (isset($data[self::FIELD_SERVICE_TYPE])) {
            if (is_array($data[self::FIELD_SERVICE_TYPE])) {
                foreach($data[self::FIELD_SERVICE_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addServiceType($v);
                    } else {
                        $this->addServiceType(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRCodeableReference) {
                $this->addServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->addServiceType(new FHIRCodeableReference($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_STATUS])) {
            if ($data[self::FIELD_SUBJECT_STATUS] instanceof FHIRCodeableConcept) {
                $this->setSubjectStatus($data[self::FIELD_SUBJECT_STATUS]);
            } else {
                $this->setSubjectStatus(new FHIRCodeableConcept($data[self::FIELD_SUBJECT_STATUS]));
            }
        }
        if (isset($data[self::FIELD_EPISODE_OF_CARE])) {
            if (is_array($data[self::FIELD_EPISODE_OF_CARE])) {
                foreach($data[self::FIELD_EPISODE_OF_CARE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEpisodeOfCare($v);
                    } else {
                        $this->addEpisodeOfCare(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_EPISODE_OF_CARE] instanceof FHIRReference) {
                $this->addEpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]);
            } else {
                $this->addEpisodeOfCare(new FHIRReference($data[self::FIELD_EPISODE_OF_CARE]));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_CARE_TEAM])) {
            if (is_array($data[self::FIELD_CARE_TEAM])) {
                foreach($data[self::FIELD_CARE_TEAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addCareTeam($v);
                    } else {
                        $this->addCareTeam(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CARE_TEAM] instanceof FHIRReference) {
                $this->addCareTeam($data[self::FIELD_CARE_TEAM]);
            } else {
                $this->addCareTeam(new FHIRReference($data[self::FIELD_CARE_TEAM]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->setPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->setPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_PROVIDER])) {
            if ($data[self::FIELD_SERVICE_PROVIDER] instanceof FHIRReference) {
                $this->setServiceProvider($data[self::FIELD_SERVICE_PROVIDER]);
            } else {
                $this->setServiceProvider(new FHIRReference($data[self::FIELD_SERVICE_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIREncounterParticipant($v));
                    }
                }
            } elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIREncounterParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIREncounterParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_APPOINTMENT])) {
            if (is_array($data[self::FIELD_APPOINTMENT])) {
                foreach($data[self::FIELD_APPOINTMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAppointment($v);
                    } else {
                        $this->addAppointment(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_APPOINTMENT] instanceof FHIRReference) {
                $this->addAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->addAppointment(new FHIRReference($data[self::FIELD_APPOINTMENT]));
            }
        }
        if (isset($data[self::FIELD_VIRTUAL_SERVICE])) {
            if (is_array($data[self::FIELD_VIRTUAL_SERVICE])) {
                foreach($data[self::FIELD_VIRTUAL_SERVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRVirtualServiceDetail) {
                        $this->addVirtualService($v);
                    } else {
                        $this->addVirtualService(new FHIRVirtualServiceDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_VIRTUAL_SERVICE] instanceof FHIRVirtualServiceDetail) {
                $this->addVirtualService($data[self::FIELD_VIRTUAL_SERVICE]);
            } else {
                $this->addVirtualService(new FHIRVirtualServiceDetail($data[self::FIELD_VIRTUAL_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_ACTUAL_PERIOD])) {
            if ($data[self::FIELD_ACTUAL_PERIOD] instanceof FHIRPeriod) {
                $this->setActualPeriod($data[self::FIELD_ACTUAL_PERIOD]);
            } else {
                $this->setActualPeriod(new FHIRPeriod($data[self::FIELD_ACTUAL_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PLANNED_START_DATE]) || isset($data[self::FIELD_PLANNED_START_DATE_EXT])) {
            $value = $data[self::FIELD_PLANNED_START_DATE] ?? null;
            $ext = (isset($data[self::FIELD_PLANNED_START_DATE_EXT]) && is_array($data[self::FIELD_PLANNED_START_DATE_EXT])) ? $data[self::FIELD_PLANNED_START_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPlannedStartDate($value);
                } else if (is_array($value)) {
                    $this->setPlannedStartDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPlannedStartDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPlannedStartDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_PLANNED_END_DATE]) || isset($data[self::FIELD_PLANNED_END_DATE_EXT])) {
            $value = $data[self::FIELD_PLANNED_END_DATE] ?? null;
            $ext = (isset($data[self::FIELD_PLANNED_END_DATE_EXT]) && is_array($data[self::FIELD_PLANNED_END_DATE_EXT])) ? $data[self::FIELD_PLANNED_END_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPlannedEndDate($value);
                } else if (is_array($value)) {
                    $this->setPlannedEndDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPlannedEndDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPlannedEndDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_LENGTH])) {
            if ($data[self::FIELD_LENGTH] instanceof FHIRDuration) {
                $this->setLength($data[self::FIELD_LENGTH]);
            } else {
                $this->setLength(new FHIRDuration($data[self::FIELD_LENGTH]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterReason) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIREncounterReason($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON] instanceof FHIREncounterReason) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIREncounterReason($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_DIAGNOSIS])) {
                foreach($data[self::FIELD_DIAGNOSIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterDiagnosis) {
                        $this->addDiagnosis($v);
                    } else {
                        $this->addDiagnosis(new FHIREncounterDiagnosis($v));
                    }
                }
            } elseif ($data[self::FIELD_DIAGNOSIS] instanceof FHIREncounterDiagnosis) {
                $this->addDiagnosis($data[self::FIELD_DIAGNOSIS]);
            } else {
                $this->addDiagnosis(new FHIREncounterDiagnosis($data[self::FIELD_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_ACCOUNT])) {
            if (is_array($data[self::FIELD_ACCOUNT])) {
                foreach($data[self::FIELD_ACCOUNT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAccount($v);
                    } else {
                        $this->addAccount(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ACCOUNT] instanceof FHIRReference) {
                $this->addAccount($data[self::FIELD_ACCOUNT]);
            } else {
                $this->addAccount(new FHIRReference($data[self::FIELD_ACCOUNT]));
            }
        }
        if (isset($data[self::FIELD_DIET_PREFERENCE])) {
            if (is_array($data[self::FIELD_DIET_PREFERENCE])) {
                foreach($data[self::FIELD_DIET_PREFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addDietPreference($v);
                    } else {
                        $this->addDietPreference(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_DIET_PREFERENCE] instanceof FHIRCodeableConcept) {
                $this->addDietPreference($data[self::FIELD_DIET_PREFERENCE]);
            } else {
                $this->addDietPreference(new FHIRCodeableConcept($data[self::FIELD_DIET_PREFERENCE]));
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
        if (isset($data[self::FIELD_ADMISSION])) {
            if ($data[self::FIELD_ADMISSION] instanceof FHIREncounterAdmission) {
                $this->setAdmission($data[self::FIELD_ADMISSION]);
            } else {
                $this->setAdmission(new FHIREncounterAdmission($data[self::FIELD_ADMISSION]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if (is_array($data[self::FIELD_LOCATION])) {
                foreach($data[self::FIELD_LOCATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREncounterLocation) {
                        $this->addLocation($v);
                    } else {
                        $this->addLocation(new FHIREncounterLocation($v));
                    }
                }
            } elseif ($data[self::FIELD_LOCATION] instanceof FHIREncounterLocation) {
                $this->addLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->addLocation(new FHIREncounterLocation($data[self::FIELD_LOCATION]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this encounter is known.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the encounter (not the state of the patient within the
     * encounter - that is subjectState).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREncounterStatus
     */
    public function getStatus(): null|FHIREncounterStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the encounter (not the state of the patient within the
     * encounter - that is subjectState).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREncounterStatus $status
     * @return static
     */
    public function setStatus(null|FHIREncounterStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIREncounterStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClass(): null|array
    {
        return $this->class;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $class
     * @return static
     */
    public function addClass(null|FHIRCodeableConcept $class = null): self
    {
        if (null === $class) {
            $class = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->class[] = $class;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Concepts representing classification of patient encounter such as ambulatory
     * (outpatient), inpatient, emergency, home health or others due to local
     * variations.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $class
     * @return static
     */
    public function setClass(array $class = []): self
    {
        if ([] !== $this->class) {
            $this->_trackValuesRemoved(count($this->class));
            $this->class = [];
        }
        if ([] === $class) {
            return $this;
        }
        foreach($class as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClass($v);
            } else {
                $this->addClass(new FHIRCodeableConcept($v));
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
     * Indicates the urgency of the encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPriority(): null|FHIRCodeableConcept
    {
        return $this->priority;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the urgency of the encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $priority
     * @return static
     */
    public function setPriority(null|FHIRCodeableConcept $priority = null): self
    {
        if (null === $priority) {
            $priority = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->priority, $priority);
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
     * nursing, rehabilitation).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $type
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getServiceType(): null|array
    {
        return $this->serviceType;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $serviceType
     * @return static
     */
    public function addServiceType(null|FHIRCodeableReference $serviceType = null): self
    {
        if (null === $serviceType) {
            $serviceType = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $serviceType
     * @return static
     */
    public function setServiceType(array $serviceType = []): self
    {
        if ([] !== $this->serviceType) {
            $this->_trackValuesRemoved(count($this->serviceType));
            $this->serviceType = [];
        }
        if ([] === $serviceType) {
            return $this;
        }
        foreach($serviceType as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addServiceType($v);
            } else {
                $this->addServiceType(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group related to this encounter. In some use-cases the patient
     * MAY not be present, such as a case meeting about a patient between several
     * practitioners or a careteam.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group related to this encounter. In some use-cases the patient
     * MAY not be present, such as a case meeting about a patient between several
     * practitioners or a careteam.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subjectStatus value can be used to track the patient's status within the
     * encounter. It details whether the patient has arrived or departed, has been
     * triaged or is currently in a waiting status.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSubjectStatus(): null|FHIRCodeableConcept
    {
        return $this->subjectStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subjectStatus value can be used to track the patient's status within the
     * encounter. It details whether the patient has arrived or departed, has been
     * triaged or is currently in a waiting status.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subjectStatus
     * @return static
     */
    public function setSubjectStatus(null|FHIRCodeableConcept $subjectStatus = null): self
    {
        if (null === $subjectStatus) {
            $subjectStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->subjectStatus, $subjectStatus);
        $this->subjectStatus = $subjectStatus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getEpisodeOfCare(): null|array
    {
        return $this->episodeOfCare;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $episodeOfCare
     * @return static
     */
    public function addEpisodeOfCare(null|FHIRReference $episodeOfCare = null): self
    {
        if (null === $episodeOfCare) {
            $episodeOfCare = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->episodeOfCare[] = $episodeOfCare;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a specific encounter should be classified as a part of a specific
     * episode(s) of care this field should be used. This association can facilitate
     * grouping of related encounters together for a specific purpose, such as
     * government reporting, issue tracking, association via a common problem. The
     * association is recorded on the encounter as these are typically created after
     * the episode of care and grouped on entry rather than editing the episode of care
     * to append another encounter to it (the episode of care could span years).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $episodeOfCare
     * @return static
     */
    public function setEpisodeOfCare(array $episodeOfCare = []): self
    {
        if ([] !== $this->episodeOfCare) {
            $this->_trackValuesRemoved(count($this->episodeOfCare));
            $this->episodeOfCare = [];
        }
        if ([] === $episodeOfCare) {
            return $this;
        }
        foreach($episodeOfCare as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEpisodeOfCare($v);
            } else {
                $this->addEpisodeOfCare(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure
     * request).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = []): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The group(s) of individuals, organizations that are allocated to participate in
     * this encounter. The participants backbone will record the actuals of when these
     * individuals participated during the encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getCareTeam(): null|array
    {
        return $this->careTeam;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The group(s) of individuals, organizations that are allocated to participate in
     * this encounter. The participants backbone will record the actuals of when these
     * individuals participated during the encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $careTeam
     * @return static
     */
    public function addCareTeam(null|FHIRReference $careTeam = null): self
    {
        if (null === $careTeam) {
            $careTeam = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The group(s) of individuals, organizations that are allocated to participate in
     * this encounter. The participants backbone will record the actuals of when these
     * individuals participated during the encounter.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $careTeam
     * @return static
     */
    public function setCareTeam(array $careTeam = []): self
    {
        if ([] !== $this->careTeam) {
            $this->_trackValuesRemoved(count($this->careTeam));
            $this->careTeam = [];
        }
        if ([] === $careTeam) {
            return $this;
        }
        foreach($careTeam as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCareTeam($v);
            } else {
                $this->addCareTeam(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Encounter of which this encounter is a part of (administratively or in
     * time).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPartOf(): null|FHIRReference
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Encounter of which this encounter is a part of (administratively or in
     * time).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $partOf
     * @return static
     */
    public function setPartOf(null|FHIRReference $partOf = null): self
    {
        if (null === $partOf) {
            $partOf = new FHIRReference();
        }
        $this->_trackValueSet($this->partOf, $partOf);
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is primarily responsible for this Encounter's services.
     * This MAY be the same as the organization on the Patient record, however it could
     * be different, such as if the actor performing the services was from an external
     * organization (which may be billed seperately) for an external consultation.
     * Refer to the colonoscopy example on the Encounter examples tab.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getServiceProvider(): null|FHIRReference
    {
        return $this->serviceProvider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is primarily responsible for this Encounter's services.
     * This MAY be the same as the organization on the Patient record, however it could
     * be different, such as if the actor performing the services was from an external
     * organization (which may be billed seperately) for an external consultation.
     * Refer to the colonoscopy example on the Encounter examples tab.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $serviceProvider
     * @return static
     */
    public function setServiceProvider(null|FHIRReference $serviceProvider = null): self
    {
        if (null === $serviceProvider) {
            $serviceProvider = new FHIRReference();
        }
        $this->_trackValueSet($this->serviceProvider, $serviceProvider);
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of people responsible for providing the service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant(): null|array
    {
        return $this->participant;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of people responsible for providing the service.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant $participant
     * @return static
     */
    public function addParticipant(null|FHIREncounterParticipant $participant = null): self
    {
        if (null === $participant) {
            $participant = new FHIREncounterParticipant();
        }
        $this->_trackValueAdded();
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of people responsible for providing the service.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[] $participant
     * @return static
     */
    public function setParticipant(array $participant = []): self
    {
        if ([] !== $this->participant) {
            $this->_trackValuesRemoved(count($this->participant));
            $this->participant = [];
        }
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIREncounterParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIREncounterParticipant($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAppointment(): null|array
    {
        return $this->appointment;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $appointment
     * @return static
     */
    public function addAppointment(null|FHIRReference $appointment = null): self
    {
        if (null === $appointment) {
            $appointment = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->appointment[] = $appointment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The appointment that scheduled this encounter.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $appointment
     * @return static
     */
    public function setAppointment(array $appointment = []): self
    {
        if ([] !== $this->appointment) {
            $this->_trackValuesRemoved(count($this->appointment));
            $this->appointment = [];
        }
        if ([] === $appointment) {
            return $this;
        }
        foreach($appointment as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAppointment($v);
            } else {
                $this->addAppointment(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Virtual Service Contact Details.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail[]
     */
    public function getVirtualService(): null|array
    {
        return $this->virtualService;
    }

    /**
     * Virtual Service Contact Details.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail $virtualService
     * @return static
     */
    public function addVirtualService(null|FHIRVirtualServiceDetail $virtualService = null): self
    {
        if (null === $virtualService) {
            $virtualService = new FHIRVirtualServiceDetail();
        }
        $this->_trackValueAdded();
        $this->virtualService[] = $virtualService;
        return $this;
    }

    /**
     * Virtual Service Contact Details.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail[] $virtualService
     * @return static
     */
    public function setVirtualService(array $virtualService = []): self
    {
        if ([] !== $this->virtualService) {
            $this->_trackValuesRemoved(count($this->virtualService));
            $this->virtualService = [];
        }
        if ([] === $virtualService) {
            return $this;
        }
        foreach($virtualService as $v) {
            if ($v instanceof FHIRVirtualServiceDetail) {
                $this->addVirtualService($v);
            } else {
                $this->addVirtualService(new FHIRVirtualServiceDetail($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual start and end time of the encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getActualPeriod(): null|FHIRPeriod
    {
        return $this->actualPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual start and end time of the encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $actualPeriod
     * @return static
     */
    public function setActualPeriod(null|FHIRPeriod $actualPeriod = null): self
    {
        if (null === $actualPeriod) {
            $actualPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->actualPeriod, $actualPeriod);
        $this->actualPeriod = $actualPeriod;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getPlannedStartDate(): null|FHIRDateTime
    {
        return $this->plannedStartDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $plannedStartDate
     * @return static
     */
    public function setPlannedStartDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $plannedStartDate = null): self
    {
        if (null !== $plannedStartDate && !($plannedStartDate instanceof FHIRDateTime)) {
            $plannedStartDate = new FHIRDateTime($plannedStartDate);
        }
        $this->_trackValueSet($this->plannedStartDate, $plannedStartDate);
        $this->plannedStartDate = $plannedStartDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getPlannedEndDate(): null|FHIRDateTime
    {
        return $this->plannedEndDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $plannedEndDate
     * @return static
     */
    public function setPlannedEndDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $plannedEndDate = null): self
    {
        if (null !== $plannedEndDate && !($plannedEndDate instanceof FHIRDateTime)) {
            $plannedEndDate = new FHIRDateTime($plannedEndDate);
        }
        $this->_trackValueSet($this->plannedEndDate, $plannedEndDate);
        $this->plannedEndDate = $plannedEndDate;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actual quantity of time the encounter lasted. This excludes the time during
     * leaves of absence. When missing it is the time in between the start and end
     * values.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getLength(): null|FHIRDuration
    {
        return $this->length;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actual quantity of time the encounter lasted. This excludes the time during
     * leaves of absence. When missing it is the time in between the start and end
     * values.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $length
     * @return static
     */
    public function setLength(null|FHIRDuration $length = null): self
    {
        if (null === $length) {
            $length = new FHIRDuration();
        }
        $this->_trackValueSet($this->length, $length);
        $this->length = $length;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of medical reasons that are expected to be addressed during the episode
     * of care.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterReason[]
     */
    public function getReason(): null|array
    {
        return $this->reason;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of medical reasons that are expected to be addressed during the episode
     * of care.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterReason $reason
     * @return static
     */
    public function addReason(null|FHIREncounterReason $reason = null): self
    {
        if (null === $reason) {
            $reason = new FHIREncounterReason();
        }
        $this->_trackValueAdded();
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of medical reasons that are expected to be addressed during the episode
     * of care.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterReason[] $reason
     * @return static
     */
    public function setReason(array $reason = []): self
    {
        if ([] !== $this->reason) {
            $this->_trackValuesRemoved(count($this->reason));
            $this->reason = [];
        }
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIREncounterReason) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIREncounterReason($v));
            }
        }
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis[]
     */
    public function getDiagnosis(): null|array
    {
        return $this->diagnosis;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis $diagnosis
     * @return static
     */
    public function addDiagnosis(null|FHIREncounterDiagnosis $diagnosis = null): self
    {
        if (null === $diagnosis) {
            $diagnosis = new FHIREncounterDiagnosis();
        }
        $this->_trackValueAdded();
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis[] $diagnosis
     * @return static
     */
    public function setDiagnosis(array $diagnosis = []): self
    {
        if ([] !== $this->diagnosis) {
            $this->_trackValuesRemoved(count($this->diagnosis));
            $this->diagnosis = [];
        }
        if ([] === $diagnosis) {
            return $this;
        }
        foreach($diagnosis as $v) {
            if ($v instanceof FHIREncounterDiagnosis) {
                $this->addDiagnosis($v);
            } else {
                $this->addDiagnosis(new FHIREncounterDiagnosis($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAccount(): null|array
    {
        return $this->account;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $account
     * @return static
     */
    public function addAccount(null|FHIRReference $account = null): self
    {
        if (null === $account) {
            $account = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->account[] = $account;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $account
     * @return static
     */
    public function setAccount(array $account = []): self
    {
        if ([] !== $this->account) {
            $this->_trackValuesRemoved(count($this->account));
            $this->account = [];
        }
        if ([] === $account) {
            return $this;
        }
        foreach($account as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAccount($v);
            } else {
                $this->addAccount(new FHIRReference($v));
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
     * Diet preferences reported by the patient.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getDietPreference(): null|array
    {
        return $this->dietPreference;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $dietPreference
     * @return static
     */
    public function addDietPreference(null|FHIRCodeableConcept $dietPreference = null): self
    {
        if (null === $dietPreference) {
            $dietPreference = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $dietPreference
     * @return static
     */
    public function setDietPreference(array $dietPreference = []): self
    {
        if ([] !== $this->dietPreference) {
            $this->_trackValuesRemoved(count($this->dietPreference));
            $this->dietPreference = [];
        }
        if ([] === $dietPreference) {
            return $this;
        }
        foreach($dietPreference as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addDietPreference($v);
            } else {
                $this->addDietPreference(new FHIRCodeableConcept($v));
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
     * Any special requests that have been made for this encounter, such as the
     * provision of specific equipment or other things.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * Any special requests that have been made for this encounter, such as the
     * provision of specific equipment or other things.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $specialArrangement
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
     * Any special requests that have been made for this encounter, such as the
     * provision of specific equipment or other things.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $specialArrangement
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies that may be provided to the patient during the encounter
     * (VIP, board member, professional courtesy).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * Special courtesies that may be provided to the patient during the encounter
     * (VIP, board member, professional courtesy).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $specialCourtesy
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
     * Special courtesies that may be provided to the patient during the encounter
     * (VIP, board member, professional courtesy).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $specialCourtesy
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
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * Details about the stay during which a healthcare service is provided. This does
     * not describe the event of admitting the patient, but rather any information that
     * is relevant from the time of admittance until the time of discharge.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission
     */
    public function getAdmission(): null|FHIREncounterAdmission
    {
        return $this->admission;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * Details about the stay during which a healthcare service is provided. This does
     * not describe the event of admitting the patient, but rather any information that
     * is relevant from the time of admittance until the time of discharge.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission $admission
     * @return static
     */
    public function setAdmission(null|FHIREncounterAdmission $admission = null): self
    {
        if (null === $admission) {
            $admission = new FHIREncounterAdmission();
        }
        $this->_trackValueSet($this->admission, $admission);
        $this->admission = $admission;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
     */
    public function getLocation(): null|array
    {
        return $this->location;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation $location
     * @return static
     */
    public function addLocation(null|FHIREncounterLocation $location = null): self
    {
        if (null === $location) {
            $location = new FHIREncounterLocation();
        }
        $this->_trackValueAdded();
        $this->location[] = $location;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * Encounter is primarily used to record information about the actual activities
     * that occurred, where Appointment is used to record planned activities.
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[] $location
     * @return static
     */
    public function setLocation(array $location = []): self
    {
        if ([] !== $this->location) {
            $this->_trackValuesRemoved(count($this->location));
            $this->location = [];
        }
        if ([] === $location) {
            return $this;
        }
        foreach($location as $v) {
            if ($v instanceof FHIREncounterLocation) {
                $this->addLocation($v);
            } else {
                $this->addLocation(new FHIREncounterLocation($v));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClass())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubjectStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EPISODE_OF_CARE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CARE_TEAM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPartOf())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART_OF] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServiceProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_PROVIDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAppointment())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_APPOINTMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getVirtualService())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VIRTUAL_SERVICE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getActualPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTUAL_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlannedStartDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLANNED_START_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlannedEndDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLANNED_END_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LENGTH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DIAGNOSIS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAccount())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACCOUNT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDietPreference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DIET_PREFERENCE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_COURTESY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAdmission())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMISSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_TYPE])) {
            $v = $this->getServiceType();
            foreach($validationRules[self::FIELD_SERVICE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SERVICE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_TYPE])) {
                        $errs[self::FIELD_SERVICE_TYPE] = [];
                    }
                    $errs[self::FIELD_SERVICE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_STATUS])) {
            $v = $this->getSubjectStatus();
            foreach($validationRules[self::FIELD_SUBJECT_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SUBJECT_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_STATUS])) {
                        $errs[self::FIELD_SUBJECT_STATUS] = [];
                    }
                    $errs[self::FIELD_SUBJECT_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EPISODE_OF_CARE])) {
            $v = $this->getEpisodeOfCare();
            foreach($validationRules[self::FIELD_EPISODE_OF_CARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_EPISODE_OF_CARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EPISODE_OF_CARE])) {
                        $errs[self::FIELD_EPISODE_OF_CARE] = [];
                    }
                    $errs[self::FIELD_EPISODE_OF_CARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARE_TEAM])) {
            $v = $this->getCareTeam();
            foreach($validationRules[self::FIELD_CARE_TEAM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_CARE_TEAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARE_TEAM])) {
                        $errs[self::FIELD_CARE_TEAM] = [];
                    }
                    $errs[self::FIELD_CARE_TEAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_PROVIDER])) {
            $v = $this->getServiceProvider();
            foreach($validationRules[self::FIELD_SERVICE_PROVIDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SERVICE_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_PROVIDER])) {
                        $errs[self::FIELD_SERVICE_PROVIDER] = [];
                    }
                    $errs[self::FIELD_SERVICE_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPOINTMENT])) {
            $v = $this->getAppointment();
            foreach($validationRules[self::FIELD_APPOINTMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_APPOINTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPOINTMENT])) {
                        $errs[self::FIELD_APPOINTMENT] = [];
                    }
                    $errs[self::FIELD_APPOINTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VIRTUAL_SERVICE])) {
            $v = $this->getVirtualService();
            foreach($validationRules[self::FIELD_VIRTUAL_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_VIRTUAL_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VIRTUAL_SERVICE])) {
                        $errs[self::FIELD_VIRTUAL_SERVICE] = [];
                    }
                    $errs[self::FIELD_VIRTUAL_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTUAL_PERIOD])) {
            $v = $this->getActualPeriod();
            foreach($validationRules[self::FIELD_ACTUAL_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_ACTUAL_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTUAL_PERIOD])) {
                        $errs[self::FIELD_ACTUAL_PERIOD] = [];
                    }
                    $errs[self::FIELD_ACTUAL_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLANNED_START_DATE])) {
            $v = $this->getPlannedStartDate();
            foreach($validationRules[self::FIELD_PLANNED_START_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PLANNED_START_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLANNED_START_DATE])) {
                        $errs[self::FIELD_PLANNED_START_DATE] = [];
                    }
                    $errs[self::FIELD_PLANNED_START_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLANNED_END_DATE])) {
            $v = $this->getPlannedEndDate();
            foreach($validationRules[self::FIELD_PLANNED_END_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_PLANNED_END_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLANNED_END_DATE])) {
                        $errs[self::FIELD_PLANNED_END_DATE] = [];
                    }
                    $errs[self::FIELD_PLANNED_END_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS])) {
            $v = $this->getDiagnosis();
            foreach($validationRules[self::FIELD_DIAGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS])) {
                        $errs[self::FIELD_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCOUNT])) {
            $v = $this->getAccount();
            foreach($validationRules[self::FIELD_ACCOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_ACCOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCOUNT])) {
                        $errs[self::FIELD_ACCOUNT] = [];
                    }
                    $errs[self::FIELD_ACCOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIET_PREFERENCE])) {
            $v = $this->getDietPreference();
            foreach($validationRules[self::FIELD_DIET_PREFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_DIET_PREFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIET_PREFERENCE])) {
                        $errs[self::FIELD_DIET_PREFERENCE] = [];
                    }
                    $errs[self::FIELD_DIET_PREFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_ARRANGEMENT])) {
            $v = $this->getSpecialArrangement();
            foreach($validationRules[self::FIELD_SPECIAL_ARRANGEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SPECIAL_ARRANGEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_ARRANGEMENT])) {
                        $errs[self::FIELD_SPECIAL_ARRANGEMENT] = [];
                    }
                    $errs[self::FIELD_SPECIAL_ARRANGEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_COURTESY])) {
            $v = $this->getSpecialCourtesy();
            foreach($validationRules[self::FIELD_SPECIAL_COURTESY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_SPECIAL_COURTESY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_COURTESY])) {
                        $errs[self::FIELD_SPECIAL_COURTESY] = [];
                    }
                    $errs[self::FIELD_SPECIAL_COURTESY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMISSION])) {
            $v = $this->getAdmission();
            foreach($validationRules[self::FIELD_ADMISSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_ADMISSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMISSION])) {
                        $errs[self::FIELD_ADMISSION] = [];
                    }
                    $errs[self::FIELD_ADMISSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ENCOUNTER, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounter $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounter
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
        } else if (!($type instanceof FHIREncounter)) {
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
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIREncounterStatus::xmlUnserialize($n));
            } elseif (self::FIELD_CLASS === $n->nodeName) {
                $type->addClass(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRIORITY === $n->nodeName) {
                $type->setPriority(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE_TYPE === $n->nodeName) {
                $type->addServiceType(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT_STATUS === $n->nodeName) {
                $type->setSubjectStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_EPISODE_OF_CARE === $n->nodeName) {
                $type->addEpisodeOfCare(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_BASED_ON === $n->nodeName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CARE_TEAM === $n->nodeName) {
                $type->addCareTeam(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PART_OF === $n->nodeName) {
                $type->setPartOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE_PROVIDER === $n->nodeName) {
                $type->setServiceProvider(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PARTICIPANT === $n->nodeName) {
                $type->addParticipant(FHIREncounterParticipant::xmlUnserialize($n));
            } elseif (self::FIELD_APPOINTMENT === $n->nodeName) {
                $type->addAppointment(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_VIRTUAL_SERVICE === $n->nodeName) {
                $type->addVirtualService(FHIRVirtualServiceDetail::xmlUnserialize($n));
            } elseif (self::FIELD_ACTUAL_PERIOD === $n->nodeName) {
                $type->setActualPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_PLANNED_START_DATE === $n->nodeName) {
                $type->setPlannedStartDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_PLANNED_END_DATE === $n->nodeName) {
                $type->setPlannedEndDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_LENGTH === $n->nodeName) {
                $type->setLength(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_REASON === $n->nodeName) {
                $type->addReason(FHIREncounterReason::xmlUnserialize($n));
            } elseif (self::FIELD_DIAGNOSIS === $n->nodeName) {
                $type->addDiagnosis(FHIREncounterDiagnosis::xmlUnserialize($n));
            } elseif (self::FIELD_ACCOUNT === $n->nodeName) {
                $type->addAccount(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DIET_PREFERENCE === $n->nodeName) {
                $type->addDietPreference(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_ARRANGEMENT === $n->nodeName) {
                $type->addSpecialArrangement(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_COURTESY === $n->nodeName) {
                $type->addSpecialCourtesy(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ADMISSION === $n->nodeName) {
                $type->setAdmission(FHIREncounterAdmission::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION === $n->nodeName) {
                $type->addLocation(FHIREncounterLocation::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_PLANNED_START_DATE);
        if (null !== $n) {
            $pt = $type->getPlannedStartDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPlannedStartDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PLANNED_END_DATE);
        if (null !== $n) {
            $pt = $type->getPlannedEndDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPlannedEndDate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Encounter'), $libxmlOpts);
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
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getClass())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLASS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRIORITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
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
        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubjectStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EPISODE_OF_CARE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_BASED_ON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CARE_TEAM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPartOf())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PART_OF);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getServiceProvider())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE_PROVIDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PARTICIPANT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAppointment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_APPOINTMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getVirtualService())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VIRTUAL_SERVICE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getActualPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ACTUAL_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPlannedStartDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PLANNED_START_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPlannedEndDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PLANNED_END_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DIAGNOSIS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAccount())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACCOUNT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDietPreference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DIET_PREFERENCE);
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
        if (null !== ($v = $this->getAdmission())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADMISSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREncounterStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getClass())) {
            $out->{self::FIELD_CLASS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLASS}[] = $v;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $out->{self::FIELD_PRIORITY} = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $out->{self::FIELD_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getServiceType())) {
            $out->{self::FIELD_SERVICE_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SERVICE_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getSubjectStatus())) {
            $out->{self::FIELD_SUBJECT_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getEpisodeOfCare())) {
            $out->{self::FIELD_EPISODE_OF_CARE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_EPISODE_OF_CARE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            $out->{self::FIELD_CARE_TEAM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CARE_TEAM}[] = $v;
            }
        }
        if (null !== ($v = $this->getPartOf())) {
            $out->{self::FIELD_PART_OF} = $v;
        }
        if (null !== ($v = $this->getServiceProvider())) {
            $out->{self::FIELD_SERVICE_PROVIDER} = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $out->{self::FIELD_PARTICIPANT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PARTICIPANT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAppointment())) {
            $out->{self::FIELD_APPOINTMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_APPOINTMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getVirtualService())) {
            $out->{self::FIELD_VIRTUAL_SERVICE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VIRTUAL_SERVICE}[] = $v;
            }
        }
        if (null !== ($v = $this->getActualPeriod())) {
            $out->{self::FIELD_ACTUAL_PERIOD} = $v;
        }
        if (null !== ($v = $this->getPlannedStartDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PLANNED_START_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PLANNED_START_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPlannedEndDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PLANNED_END_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PLANNED_END_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLength())) {
            $out->{self::FIELD_LENGTH} = $v;
        }
        if ([] !== ($vs = $this->getReason())) {
            $out->{self::FIELD_REASON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            $out->{self::FIELD_DIAGNOSIS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DIAGNOSIS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAccount())) {
            $out->{self::FIELD_ACCOUNT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ACCOUNT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDietPreference())) {
            $out->{self::FIELD_DIET_PREFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DIET_PREFERENCE}[] = $v;
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
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            $out->{self::FIELD_SPECIAL_COURTESY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIAL_COURTESY}[] = $v;
            }
        }
        if (null !== ($v = $this->getAdmission())) {
            $out->{self::FIELD_ADMISSION} = $v;
        }
        if ([] !== ($vs = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LOCATION}[] = $v;
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