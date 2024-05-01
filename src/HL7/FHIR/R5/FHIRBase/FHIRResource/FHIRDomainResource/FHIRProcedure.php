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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREventStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * An action that is or was performed on or for a patient, practitioner, device,
 * organization, or location. For example, this can be a physical intervention on a
 * patient like an operation, or less invasive like long term services, counseling,
 * or hypnotherapy. This can be a quality or safety inspection for a location,
 * organization, or device. This can be an accreditation procedure on a
 * practitioner for licensing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcedure
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRProcedure extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCEDURE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_PART_OF = 'partOf';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_SUBJECT = 'subject';
    const FIELD_FOCUS = 'focus';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_STRING = 'occurrenceString';
    const FIELD_OCCURRENCE_STRING_EXT = '_occurrenceString';
    const FIELD_OCCURRENCE_AGE = 'occurrenceAge';
    const FIELD_OCCURRENCE_RANGE = 'occurrenceRange';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_RECORDED = 'recorded';
    const FIELD_RECORDED_EXT = '_recorded';
    const FIELD_RECORDER = 'recorder';
    const FIELD_REPORTED_BOOLEAN = 'reportedBoolean';
    const FIELD_REPORTED_BOOLEAN_EXT = '_reportedBoolean';
    const FIELD_REPORTED_REFERENCE = 'reportedReference';
    const FIELD_PERFORMER = 'performer';
    const FIELD_LOCATION = 'location';
    const FIELD_REASON = 'reason';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_REPORT = 'report';
    const FIELD_COMPLICATION = 'complication';
    const FIELD_FOLLOW_UP = 'followUp';
    const FIELD_NOTE = 'note';
    const FIELD_FOCAL_DEVICE = 'focalDevice';
    const FIELD_USED = 'used';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
     * server to server.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    protected null|array $instantiatesCanonical = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri[]
     */
    protected null|array $instantiatesUri = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $partOf = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally, this will be the
     * in-progress or completed state.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREventStatus
     */
    protected null|FHIREventStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $statusReason = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $category = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * On whom or on what the procedure was performed. This is usually an individual
     * human, but can also be performed on animals, groups of humans or animals,
     * organizations or practitioners (for licensing), locations or devices (for safety
     * inspections or regulatory authorizations). If the actual focus of the procedure
     * is different from the subject, the focus element specifies the actual focus of
     * the procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is the target of the procedure when it is not the subject of record only. If
     * focus is not present, then subject is the focus. If focus is present and the
     * subject is one of the targets of the procedure, include subject as a focus as
     * well. If focus is present and the subject is not included in focus, it implies
     * that the procedure was only targeted on the focus. For example, when a caregiver
     * is given education for a patient, the caregiver would be the focus and the
     * procedure record is associated with the subject (e.g. patient). For example, use
     * focus when recording the target of the education, training, or counseling is the
     * parent or relative of a patient.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $focus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this Procedure was created or performed or to which
     * the creation of this record is tightly associated.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $occurrenceDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $occurrencePeriod = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $occurrenceString = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $occurrenceAge = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $occurrenceRange = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    protected null|FHIRTiming $occurrenceTiming = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the occurrence of the procedure was first captured in the record
     * regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $recorded = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $recorder = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $reportedBoolean = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $reportedReference = null;
    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    protected null|array $performer = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $reason = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $bodySite = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure
     * being performed?
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $outcome = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $report = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $complication = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $followUp = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments about the procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    protected null|array $focalDevice = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $used = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $supportingInfo = [];

    /**
     * Validation map for fields in type Procedure
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRProcedure Constructor
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
        if (isset($data[self::FIELD_INSTANTIATES_CANONICAL]) || isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT])) {
            $value = $data[self::FIELD_INSTANTIATES_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]) && is_array($data[self::FIELD_INSTANTIATES_CANONICAL_EXT])) ? $data[self::FIELD_INSTANTIATES_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addInstantiatesCanonical($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addInstantiatesCanonical($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInstantiatesCanonical(new FHIRCanonical($iext));
                }
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_URI]) || isset($data[self::FIELD_INSTANTIATES_URI_EXT])) {
            $value = $data[self::FIELD_INSTANTIATES_URI] ?? null;
            $ext = (isset($data[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($data[self::FIELD_INSTANTIATES_URI_EXT])) ? $data[self::FIELD_INSTANTIATES_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addInstantiatesUri($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addInstantiatesUri($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInstantiatesUri(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInstantiatesUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInstantiatesUri(new FHIRUri($iext));
                }
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
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREventStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIREventStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIREventStatus([FHIREventStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIREventStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            if ($data[self::FIELD_FOCUS] instanceof FHIRReference) {
                $this->setFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->setFocus(new FHIRReference($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_OCCURRENCE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) ? $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_PERIOD])) {
            if ($data[self::FIELD_OCCURRENCE_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurrencePeriod($data[self::FIELD_OCCURRENCE_PERIOD]);
            } else {
                $this->setOccurrencePeriod(new FHIRPeriod($data[self::FIELD_OCCURRENCE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_STRING]) || isset($data[self::FIELD_OCCURRENCE_STRING_EXT])) {
            $value = $data[self::FIELD_OCCURRENCE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_STRING_EXT]) && is_array($data[self::FIELD_OCCURRENCE_STRING_EXT])) ? $data[self::FIELD_OCCURRENCE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOccurrenceString($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_AGE])) {
            if ($data[self::FIELD_OCCURRENCE_AGE] instanceof FHIRAge) {
                $this->setOccurrenceAge($data[self::FIELD_OCCURRENCE_AGE]);
            } else {
                $this->setOccurrenceAge(new FHIRAge($data[self::FIELD_OCCURRENCE_AGE]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_RANGE])) {
            if ($data[self::FIELD_OCCURRENCE_RANGE] instanceof FHIRRange) {
                $this->setOccurrenceRange($data[self::FIELD_OCCURRENCE_RANGE]);
            } else {
                $this->setOccurrenceRange(new FHIRRange($data[self::FIELD_OCCURRENCE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_TIMING])) {
            if ($data[self::FIELD_OCCURRENCE_TIMING] instanceof FHIRTiming) {
                $this->setOccurrenceTiming($data[self::FIELD_OCCURRENCE_TIMING]);
            } else {
                $this->setOccurrenceTiming(new FHIRTiming($data[self::FIELD_OCCURRENCE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_RECORDED]) || isset($data[self::FIELD_RECORDED_EXT])) {
            $value = $data[self::FIELD_RECORDED] ?? null;
            $ext = (isset($data[self::FIELD_RECORDED_EXT]) && is_array($data[self::FIELD_RECORDED_EXT])) ? $data[self::FIELD_RECORDED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecorded($value);
                } else if (is_array($value)) {
                    $this->setRecorded(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecorded(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRecorded(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (isset($data[self::FIELD_REPORTED_BOOLEAN]) || isset($data[self::FIELD_REPORTED_BOOLEAN_EXT])) {
            $value = $data[self::FIELD_REPORTED_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_REPORTED_BOOLEAN_EXT]) && is_array($data[self::FIELD_REPORTED_BOOLEAN_EXT])) ? $data[self::FIELD_REPORTED_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReportedBoolean($value);
                } else if (is_array($value)) {
                    $this->setReportedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReportedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReportedBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REPORTED_REFERENCE])) {
            if ($data[self::FIELD_REPORTED_REFERENCE] instanceof FHIRReference) {
                $this->setReportedReference($data[self::FIELD_REPORTED_REFERENCE]);
            } else {
                $this->setReportedReference(new FHIRReference($data[self::FIELD_REPORTED_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRProcedurePerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRProcedurePerformer($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER] instanceof FHIRProcedurePerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRProcedurePerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON] instanceof FHIRCodeableReference) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableReference($data[self::FIELD_REASON]));
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
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_REPORT])) {
            if (is_array($data[self::FIELD_REPORT])) {
                foreach($data[self::FIELD_REPORT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReport($v);
                    } else {
                        $this->addReport(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REPORT] instanceof FHIRReference) {
                $this->addReport($data[self::FIELD_REPORT]);
            } else {
                $this->addReport(new FHIRReference($data[self::FIELD_REPORT]));
            }
        }
        if (isset($data[self::FIELD_COMPLICATION])) {
            if (is_array($data[self::FIELD_COMPLICATION])) {
                foreach($data[self::FIELD_COMPLICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addComplication($v);
                    } else {
                        $this->addComplication(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPLICATION] instanceof FHIRCodeableReference) {
                $this->addComplication($data[self::FIELD_COMPLICATION]);
            } else {
                $this->addComplication(new FHIRCodeableReference($data[self::FIELD_COMPLICATION]));
            }
        }
        if (isset($data[self::FIELD_FOLLOW_UP])) {
            if (is_array($data[self::FIELD_FOLLOW_UP])) {
                foreach($data[self::FIELD_FOLLOW_UP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFollowUp($v);
                    } else {
                        $this->addFollowUp(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_FOLLOW_UP] instanceof FHIRCodeableConcept) {
                $this->addFollowUp($data[self::FIELD_FOLLOW_UP]);
            } else {
                $this->addFollowUp(new FHIRCodeableConcept($data[self::FIELD_FOLLOW_UP]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_FOCAL_DEVICE])) {
            if (is_array($data[self::FIELD_FOCAL_DEVICE])) {
                foreach($data[self::FIELD_FOCAL_DEVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRProcedureFocalDevice) {
                        $this->addFocalDevice($v);
                    } else {
                        $this->addFocalDevice(new FHIRProcedureFocalDevice($v));
                    }
                }
            } elseif ($data[self::FIELD_FOCAL_DEVICE] instanceof FHIRProcedureFocalDevice) {
                $this->addFocalDevice($data[self::FIELD_FOCAL_DEVICE]);
            } else {
                $this->addFocalDevice(new FHIRProcedureFocalDevice($data[self::FIELD_FOCAL_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_USED])) {
            if (is_array($data[self::FIELD_USED])) {
                foreach($data[self::FIELD_USED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addUsed($v);
                    } else {
                        $this->addUsed(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_USED] instanceof FHIRCodeableReference) {
                $this->addUsed($data[self::FIELD_USED]);
            } else {
                $this->addUsed(new FHIRCodeableReference($data[self::FIELD_USED]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFO])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRReference) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRReference($data[self::FIELD_SUPPORTING_INFO]));
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
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
     * server to server.
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
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
     * server to server.
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
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
     * server to server.
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical(): null|array
    {
        return $this->instantiatesCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return static
     */
    public function addInstantiatesCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $instantiatesCanonical = null): self
    {
        if (null !== $instantiatesCanonical && !($instantiatesCanonical instanceof FHIRCanonical)) {
            $instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        }
        $this->_trackValueAdded();
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @return static
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = []): self
    {
        if ([] !== $this->instantiatesCanonical) {
            $this->_trackValuesRemoved(count($this->instantiatesCanonical));
            $this->instantiatesCanonical = [];
        }
        if ([] === $instantiatesCanonical) {
            return $this;
        }
        foreach($instantiatesCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($v);
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri(): null|array
    {
        return $this->instantiatesUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $instantiatesUri
     * @return static
     */
    public function addInstantiatesUri(null|string|FHIRUriPrimitive|FHIRUri $instantiatesUri = null): self
    {
        if (null !== $instantiatesUri && !($instantiatesUri instanceof FHIRUri)) {
            $instantiatesUri = new FHIRUri($instantiatesUri);
        }
        $this->_trackValueAdded();
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri[] $instantiatesUri
     * @return static
     */
    public function setInstantiatesUri(array $instantiatesUri = []): self
    {
        if ([] !== $this->instantiatesUri) {
            $this->_trackValuesRemoved(count($this->instantiatesUri));
            $this->instantiatesUri = [];
        }
        if ([] === $instantiatesUri) {
            return $this;
        }
        foreach($instantiatesUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addInstantiatesUri($v);
            } else {
                $this->addInstantiatesUri(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
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
     * A reference to a resource that contains details of the request for this
     * procedure.
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
     * A reference to a resource that contains details of the request for this
     * procedure.
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
     * A larger event of which this particular procedure is a component or step.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getPartOf(): null|array
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(null|FHIRReference $partOf = null): self
    {
        if (null === $partOf) {
            $partOf = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $partOf
     * @return static
     */
    public function setPartOf(array $partOf = []): self
    {
        if ([] !== $this->partOf) {
            $this->_trackValuesRemoved(count($this->partOf));
            $this->partOf = [];
        }
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally, this will be the
     * in-progress or completed state.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREventStatus
     */
    public function getStatus(): null|FHIREventStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally, this will be the
     * in-progress or completed state.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIREventStatus $status
     * @return static
     */
    public function setStatus(null|FHIREventStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIREventStatus();
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
     * Captures the reason for the current state of the procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatusReason(): null|FHIRCodeableConcept
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the procedure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(null|FHIRCodeableConcept $statusReason = null): self
    {
        if (null === $statusReason) {
            $statusReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->statusReason, $statusReason);
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): null|array
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = []): self
    {
        if ([] !== $this->category) {
            $this->_trackValuesRemoved(count($this->category));
            $this->category = [];
        }
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
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
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * On whom or on what the procedure was performed. This is usually an individual
     * human, but can also be performed on animals, groups of humans or animals,
     * organizations or practitioners (for licensing), locations or devices (for safety
     * inspections or regulatory authorizations). If the actual focus of the procedure
     * is different from the subject, the focus element specifies the actual focus of
     * the procedure.
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
     * On whom or on what the procedure was performed. This is usually an individual
     * human, but can also be performed on animals, groups of humans or animals,
     * organizations or practitioners (for licensing), locations or devices (for safety
     * inspections or regulatory authorizations). If the actual focus of the procedure
     * is different from the subject, the focus element specifies the actual focus of
     * the procedure.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is the target of the procedure when it is not the subject of record only. If
     * focus is not present, then subject is the focus. If focus is present and the
     * subject is one of the targets of the procedure, include subject as a focus as
     * well. If focus is present and the subject is not included in focus, it implies
     * that the procedure was only targeted on the focus. For example, when a caregiver
     * is given education for a patient, the caregiver would be the focus and the
     * procedure record is associated with the subject (e.g. patient). For example, use
     * focus when recording the target of the education, training, or counseling is the
     * parent or relative of a patient.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is the target of the procedure when it is not the subject of record only. If
     * focus is not present, then subject is the focus. If focus is present and the
     * subject is one of the targets of the procedure, include subject as a focus as
     * well. If focus is present and the subject is not included in focus, it implies
     * that the procedure was only targeted on the focus. For example, when a caregiver
     * is given education for a patient, the caregiver would be the focus and the
     * procedure record is associated with the subject (e.g. patient). For example, use
     * focus when recording the target of the education, training, or counseling is the
     * parent or relative of a patient.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus = null): self
    {
        if (null === $focus) {
            $focus = new FHIRReference();
        }
        $this->_trackValueSet($this->focus, $focus);
        $this->focus = $focus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this Procedure was created or performed or to which
     * the creation of this record is tightly associated.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * The Encounter during which this Procedure was created or performed or to which
     * the creation of this record is tightly associated.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
    {
        return $this->occurrenceDateTime;
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return static
     */
    public function setOccurrenceDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null): self
    {
        if (null !== $occurrenceDateTime && !($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        $this->_trackValueSet($this->occurrenceDateTime, $occurrenceDateTime);
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getOccurrencePeriod(): null|FHIRPeriod
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurrencePeriod
     * @return static
     */
    public function setOccurrencePeriod(null|FHIRPeriod $occurrencePeriod = null): self
    {
        if (null === $occurrencePeriod) {
            $occurrencePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->occurrencePeriod, $occurrencePeriod);
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getOccurrenceString(): null|FHIRString
    {
        return $this->occurrenceString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $occurrenceString
     * @return static
     */
    public function setOccurrenceString(null|string|FHIRStringPrimitive|FHIRString $occurrenceString = null): self
    {
        if (null !== $occurrenceString && !($occurrenceString instanceof FHIRString)) {
            $occurrenceString = new FHIRString($occurrenceString);
        }
        $this->_trackValueSet($this->occurrenceString, $occurrenceString);
        $this->occurrenceString = $occurrenceString;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    public function getOccurrenceAge(): null|FHIRAge
    {
        return $this->occurrenceAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $occurrenceAge
     * @return static
     */
    public function setOccurrenceAge(null|FHIRAge $occurrenceAge = null): self
    {
        if (null === $occurrenceAge) {
            $occurrenceAge = new FHIRAge();
        }
        $this->_trackValueSet($this->occurrenceAge, $occurrenceAge);
        $this->occurrenceAge = $occurrenceAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getOccurrenceRange(): null|FHIRRange
    {
        return $this->occurrenceRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $occurrenceRange
     * @return static
     */
    public function setOccurrenceRange(null|FHIRRange $occurrenceRange = null): self
    {
        if (null === $occurrenceRange) {
            $occurrenceRange = new FHIRRange();
        }
        $this->_trackValueSet($this->occurrenceRange, $occurrenceRange);
        $this->occurrenceRange = $occurrenceRange;
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getOccurrenceTiming(): null|FHIRTiming
    {
        return $this->occurrenceTiming;
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $occurrenceTiming
     * @return static
     */
    public function setOccurrenceTiming(null|FHIRTiming $occurrenceTiming = null): self
    {
        if (null === $occurrenceTiming) {
            $occurrenceTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->occurrenceTiming, $occurrenceTiming);
        $this->occurrenceTiming = $occurrenceTiming;
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
     * The date the occurrence of the procedure was first captured in the record
     * regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getRecorded(): null|FHIRDateTime
    {
        return $this->recorded;
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
     * The date the occurrence of the procedure was first captured in the record
     * regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $recorded
     * @return static
     */
    public function setRecorded(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recorded = null): self
    {
        if (null !== $recorded && !($recorded instanceof FHIRDateTime)) {
            $recorded = new FHIRDateTime($recorded);
        }
        $this->_trackValueSet($this->recorded, $recorded);
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getRecorder(): null|FHIRReference
    {
        return $this->recorder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $recorder
     * @return static
     */
    public function setRecorder(null|FHIRReference $recorder = null): self
    {
        if (null === $recorder) {
            $recorder = new FHIRReference();
        }
        $this->_trackValueSet($this->recorder, $recorder);
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getReportedBoolean(): null|FHIRBoolean
    {
        return $this->reportedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $reportedBoolean
     * @return static
     */
    public function setReportedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reportedBoolean = null): self
    {
        if (null !== $reportedBoolean && !($reportedBoolean instanceof FHIRBoolean)) {
            $reportedBoolean = new FHIRBoolean($reportedBoolean);
        }
        $this->_trackValueSet($this->reportedBoolean, $reportedBoolean);
        $this->reportedBoolean = $reportedBoolean;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReportedReference(): null|FHIRReference
    {
        return $this->reportedReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reportedReference
     * @return static
     */
    public function setReportedReference(null|FHIRReference $reportedReference = null): self
    {
        if (null === $reportedReference) {
            $reportedReference = new FHIRReference();
        }
        $this->_trackValueSet($this->reportedReference, $reportedReference);
        $this->reportedReference = $reportedReference;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public function getPerformer(): null|array
    {
        return $this->performer;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer $performer
     * @return static
     */
    public function addPerformer(null|FHIRProcedurePerformer $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRProcedurePerformer();
        }
        $this->_trackValueAdded();
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[] $performer
     * @return static
     */
    public function setPerformer(array $performer = []): self
    {
        if ([] !== $this->performer) {
            $this->_trackValuesRemoved(count($this->performer));
            $this->performer = [];
        }
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRProcedurePerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRProcedurePerformer($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
        $this->location = $location;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getReason(): null|array
    {
        return $this->reason;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $reason
     * @return static
     */
    public function addReason(null|FHIRCodeableReference $reason = null): self
    {
        if (null === $reason) {
            $reason = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $reason
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
            if ($v instanceof FHIRCodeableReference) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableReference($v));
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
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $bodySite
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
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $bodySite
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure
     * being performed?
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The outcome of the procedure - did it resolve the reasons for the procedure
     * being performed?
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getReport(): null|array
    {
        return $this->report;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $report
     * @return static
     */
    public function addReport(null|FHIRReference $report = null): self
    {
        if (null === $report) {
            $report = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->report[] = $report;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $report
     * @return static
     */
    public function setReport(array $report = []): self
    {
        if ([] !== $this->report) {
            $this->_trackValuesRemoved(count($this->report));
            $this->report = [];
        }
        if ([] === $report) {
            return $this;
        }
        foreach($report as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReport($v);
            } else {
                $this->addReport(new FHIRReference($v));
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
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getComplication(): null|array
    {
        return $this->complication;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $complication
     * @return static
     */
    public function addComplication(null|FHIRCodeableReference $complication = null): self
    {
        if (null === $complication) {
            $complication = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $complication
     * @return static
     */
    public function setComplication(array $complication = []): self
    {
        if ([] !== $this->complication) {
            $this->_trackValuesRemoved(count($this->complication));
            $this->complication = [];
        }
        if ([] === $complication) {
            return $this;
        }
        foreach($complication as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addComplication($v);
            } else {
                $this->addComplication(new FHIRCodeableReference($v));
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
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getFollowUp(): null|array
    {
        return $this->followUp;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $followUp
     * @return static
     */
    public function addFollowUp(null|FHIRCodeableConcept $followUp = null): self
    {
        if (null === $followUp) {
            $followUp = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $followUp
     * @return static
     */
    public function setFollowUp(array $followUp = []): self
    {
        if ([] !== $this->followUp) {
            $this->_trackValuesRemoved(count($this->followUp));
            $this->followUp = [];
        }
        if ([] === $followUp) {
            return $this;
        }
        foreach($followUp as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addFollowUp($v);
            } else {
                $this->addFollowUp(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments about the procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments about the procedure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments about the procedure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = []): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public function getFocalDevice(): null|array
    {
        return $this->focalDevice;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice $focalDevice
     * @return static
     */
    public function addFocalDevice(null|FHIRProcedureFocalDevice $focalDevice = null): self
    {
        if (null === $focalDevice) {
            $focalDevice = new FHIRProcedureFocalDevice();
        }
        $this->_trackValueAdded();
        $this->focalDevice[] = $focalDevice;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[] $focalDevice
     * @return static
     */
    public function setFocalDevice(array $focalDevice = []): self
    {
        if ([] !== $this->focalDevice) {
            $this->_trackValuesRemoved(count($this->focalDevice));
            $this->focalDevice = [];
        }
        if ([] === $focalDevice) {
            return $this;
        }
        foreach($focalDevice as $v) {
            if ($v instanceof FHIRProcedureFocalDevice) {
                $this->addFocalDevice($v);
            } else {
                $this->addFocalDevice(new FHIRProcedureFocalDevice($v));
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
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getUsed(): null|array
    {
        return $this->used;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $used
     * @return static
     */
    public function addUsed(null|FHIRCodeableReference $used = null): self
    {
        if (null === $used) {
            $used = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->used[] = $used;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $used
     * @return static
     */
    public function setUsed(array $used = []): self
    {
        if ([] !== $this->used) {
            $this->_trackValuesRemoved(count($this->used));
            $this->used = [];
        }
        if ([] === $used) {
            return $this;
        }
        foreach($used as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addUsed($v);
            } else {
                $this->addUsed(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSupportingInfo(): null|array
    {
        return $this->supportingInfo;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supportingInfo
     * @return static
     */
    public function addSupportingInfo(null|FHIRReference $supportingInfo = null): self
    {
        if (null === $supportingInfo) {
            $supportingInfo = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $supportingInfo
     * @return static
     */
    public function setSupportingInfo(array $supportingInfo = []): self
    {
        if ([] !== $this->supportingInfo) {
            $this->_trackValuesRemoved(count($this->supportingInfo));
            $this->supportingInfo = [];
        }
        if ([] === $supportingInfo) {
            return $this;
        }
        foreach($supportingInfo as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInfo($v);
            } else {
                $this->addSupportingInfo(new FHIRReference($v));
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
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANTIATES_CANONICAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANTIATES_URI, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportedBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportedReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTED_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReport())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPORT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPLICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFollowUp())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FOLLOW_UP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFocalDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FOCAL_DEVICE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getUsed())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USED, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_CANONICAL])) {
            $v = $this->getInstantiatesCanonical();
            foreach($validationRules[self::FIELD_INSTANTIATES_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_INSTANTIATES_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_CANONICAL])) {
                        $errs[self::FIELD_INSTANTIATES_CANONICAL] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_URI])) {
            $v = $this->getInstantiatesUri();
            foreach($validationRules[self::FIELD_INSTANTIATES_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_INSTANTIATES_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_URI])) {
                        $errs[self::FIELD_INSTANTIATES_URI] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCUS])) {
            $v = $this->getFocus();
            foreach($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_FOCUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS])) {
                        $errs[self::FIELD_FOCUS] = [];
                    }
                    $errs[self::FIELD_FOCUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_PERIOD])) {
            $v = $this->getOccurrencePeriod();
            foreach($validationRules[self::FIELD_OCCURRENCE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_PERIOD])) {
                        $errs[self::FIELD_OCCURRENCE_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_STRING])) {
            $v = $this->getOccurrenceString();
            foreach($validationRules[self::FIELD_OCCURRENCE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OCCURRENCE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_STRING])) {
                        $errs[self::FIELD_OCCURRENCE_STRING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_AGE])) {
            $v = $this->getOccurrenceAge();
            foreach($validationRules[self::FIELD_OCCURRENCE_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OCCURRENCE_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_AGE])) {
                        $errs[self::FIELD_OCCURRENCE_AGE] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_RANGE])) {
            $v = $this->getOccurrenceRange();
            foreach($validationRules[self::FIELD_OCCURRENCE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OCCURRENCE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_RANGE])) {
                        $errs[self::FIELD_OCCURRENCE_RANGE] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_TIMING])) {
            $v = $this->getOccurrenceTiming();
            foreach($validationRules[self::FIELD_OCCURRENCE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_TIMING])) {
                        $errs[self::FIELD_OCCURRENCE_TIMING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED])) {
            $v = $this->getRecorded();
            foreach($validationRules[self::FIELD_RECORDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED])) {
                        $errs[self::FIELD_RECORDED] = [];
                    }
                    $errs[self::FIELD_RECORDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDER])) {
            $v = $this->getRecorder();
            foreach($validationRules[self::FIELD_RECORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTED_BOOLEAN])) {
            $v = $this->getReportedBoolean();
            foreach($validationRules[self::FIELD_REPORTED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REPORTED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTED_BOOLEAN])) {
                        $errs[self::FIELD_REPORTED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_REPORTED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTED_REFERENCE])) {
            $v = $this->getReportedReference();
            foreach($validationRules[self::FIELD_REPORTED_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REPORTED_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTED_REFERENCE])) {
                        $errs[self::FIELD_REPORTED_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REPORTED_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORT])) {
            $v = $this->getReport();
            foreach($validationRules[self::FIELD_REPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORT])) {
                        $errs[self::FIELD_REPORT] = [];
                    }
                    $errs[self::FIELD_REPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPLICATION])) {
            $v = $this->getComplication();
            foreach($validationRules[self::FIELD_COMPLICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_COMPLICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPLICATION])) {
                        $errs[self::FIELD_COMPLICATION] = [];
                    }
                    $errs[self::FIELD_COMPLICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOLLOW_UP])) {
            $v = $this->getFollowUp();
            foreach($validationRules[self::FIELD_FOLLOW_UP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_FOLLOW_UP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOLLOW_UP])) {
                        $errs[self::FIELD_FOLLOW_UP] = [];
                    }
                    $errs[self::FIELD_FOLLOW_UP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCAL_DEVICE])) {
            $v = $this->getFocalDevice();
            foreach($validationRules[self::FIELD_FOCAL_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_FOCAL_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCAL_DEVICE])) {
                        $errs[self::FIELD_FOCAL_DEVICE] = [];
                    }
                    $errs[self::FIELD_FOCAL_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED])) {
            $v = $this->getUsed();
            foreach($validationRules[self::FIELD_USED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_USED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED])) {
                        $errs[self::FIELD_USED] = [];
                    }
                    $errs[self::FIELD_USED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure
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
        } else if (!($type instanceof FHIRProcedure)) {
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
            } elseif (self::FIELD_INSTANTIATES_CANONICAL === $n->nodeName) {
                $type->addInstantiatesCanonical(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_INSTANTIATES_URI === $n->nodeName) {
                $type->addInstantiatesUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_BASED_ON === $n->nodeName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PART_OF === $n->nodeName) {
                $type->addPartOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIREventStatus::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS_REASON === $n->nodeName) {
                $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_FOCUS === $n->nodeName) {
                $type->setFocus(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ENCOUNTER === $n->nodeName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_DATE_TIME === $n->nodeName) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_PERIOD === $n->nodeName) {
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_STRING === $n->nodeName) {
                $type->setOccurrenceString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_AGE === $n->nodeName) {
                $type->setOccurrenceAge(FHIRAge::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_RANGE === $n->nodeName) {
                $type->setOccurrenceRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_TIMING === $n->nodeName) {
                $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($n));
            } elseif (self::FIELD_RECORDED === $n->nodeName) {
                $type->setRecorded(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_RECORDER === $n->nodeName) {
                $type->setRecorder(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REPORTED_BOOLEAN === $n->nodeName) {
                $type->setReportedBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REPORTED_REFERENCE === $n->nodeName) {
                $type->setReportedReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER === $n->nodeName) {
                $type->addPerformer(FHIRProcedurePerformer::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION === $n->nodeName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REASON === $n->nodeName) {
                $type->addReason(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_BODY_SITE === $n->nodeName) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_OUTCOME === $n->nodeName) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REPORT === $n->nodeName) {
                $type->addReport(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_COMPLICATION === $n->nodeName) {
                $type->addComplication(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_FOLLOW_UP === $n->nodeName) {
                $type->addFollowUp(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_FOCAL_DEVICE === $n->nodeName) {
                $type->addFocalDevice(FHIRProcedureFocalDevice::xmlUnserialize($n));
            } elseif (self::FIELD_USED === $n->nodeName) {
                $type->addUsed(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTING_INFO === $n->nodeName) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_INSTANTIATES_CANONICAL);
        if (null !== $n) {
            $type->addInstantiatesCanonical($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INSTANTIATES_URI);
        if (null !== $n) {
            $type->addInstantiatesUri($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_STRING);
        if (null !== $n) {
            $pt = $type->getOccurrenceString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RECORDED);
        if (null !== $n) {
            $pt = $type->getRecorded();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRecorded($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REPORTED_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getReportedBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReportedBoolean($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Procedure'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INSTANTIATES_CANONICAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INSTANTIATES_URI);
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
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PART_OF);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatusReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFocus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FOCUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEncounter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENCOUNTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceAge())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_AGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_TIMING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRecorded())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RECORDED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRecorder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RECORDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReportedBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPORTED_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReportedReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPORTED_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
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
        if (null !== ($v = $this->getOutcome())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OUTCOME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReport())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REPORT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMPLICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getFollowUp())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FOLLOW_UP);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getFocalDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FOCAL_DEVICE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getUsed())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_USED);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTING_INFO);
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
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCanonical::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_INSTANTIATES_CANONICAL} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INSTANTIATES_CANONICAL_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUri::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_INSTANTIATES_URI} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INSTANTIATES_URI_EXT} = $exts;
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
        if ([] !== ($vs = $this->getPartOf())) {
            $out->{self::FIELD_PART_OF} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PART_OF}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREventStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $out->{self::FIELD_STATUS_REASON} = $v;
        }
        if ([] !== ($vs = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CATEGORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $out->{self::FIELD_FOCUS} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $out->{self::FIELD_OCCURRENCE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrenceAge())) {
            $out->{self::FIELD_OCCURRENCE_AGE} = $v;
        }
        if (null !== ($v = $this->getOccurrenceRange())) {
            $out->{self::FIELD_OCCURRENCE_RANGE} = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $out->{self::FIELD_OCCURRENCE_TIMING} = $v;
        }
        if (null !== ($v = $this->getRecorded())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RECORDED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RECORDED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $out->{self::FIELD_RECORDER} = $v;
        }
        if (null !== ($v = $this->getReportedBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REPORTED_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REPORTED_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReportedReference())) {
            $out->{self::FIELD_REPORTED_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PERFORMER}[] = $v;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
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
        if ([] !== ($vs = $this->getBodySite())) {
            $out->{self::FIELD_BODY_SITE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_BODY_SITE}[] = $v;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = $v;
        }
        if ([] !== ($vs = $this->getReport())) {
            $out->{self::FIELD_REPORT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REPORT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            $out->{self::FIELD_COMPLICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMPLICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFollowUp())) {
            $out->{self::FIELD_FOLLOW_UP} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FOLLOW_UP}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFocalDevice())) {
            $out->{self::FIELD_FOCAL_DEVICE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FOCAL_DEVICE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getUsed())) {
            $out->{self::FIELD_USED} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_USED}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $out->{self::FIELD_SUPPORTING_INFO} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPORTING_INFO}[] = $v;
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