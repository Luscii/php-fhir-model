<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\STU3\FHIRCodePrimitive;
use HL7\FHIR\STU3\FHIRDateTimePrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRAnnotation;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestRequester;
use HL7\FHIR\STU3\FHIRElement\FHIRCode;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRId;
use HL7\FHIR\STU3\FHIRElement\FHIRIdentifier;
use HL7\FHIR\STU3\FHIRElement\FHIRMeta;
use HL7\FHIR\STU3\FHIRElement\FHIRNarrative;
use HL7\FHIR\STU3\FHIRElement\FHIRPeriod;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority;
use HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus;
use HL7\FHIR\STU3\FHIRElement\FHIRTiming;
use HL7\FHIR\STU3\FHIRElement\FHIRUri;
use HL7\FHIR\STU3\FHIRIdPrimitive;
use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;
use HL7\FHIR\STU3\FHIRUriPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRContainedTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeMap;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Represents a request for a patient to employ a medical device. The device may be
 * an implantable device, or an external assistive device, such as a walker.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDeviceRequest
 * @package \HL7\FHIR\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_DEFINITION = 'definition';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_PRIOR_REQUEST = 'priorRequest';
    const FIELD_GROUP_IDENTIFIER = 'groupIdentifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_INTENT = 'intent';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_CODE_REFERENCE = 'codeReference';
    const FIELD_CODE_CODEABLE_CONCEPT = 'codeCodeableConcept';
    const FIELD_SUBJECT = 'subject';
    const FIELD_CONTEXT = 'context';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_AUTHORED_ON = 'authoredOn';
    const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    const FIELD_REQUESTER = 'requester';
    const FIELD_PERFORMER_TYPE = 'performerType';
    const FIELD_PERFORMER = 'performer';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';
    const FIELD_NOTE = 'note';
    const FIELD_RELEVANT_HISTORY = 'relevantHistory';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Protocol or definition followed by this request. For example: The proposed act
     * must be performed if the indicated conditions occur, e.g.., shortness of breath,
     * SpO2 less than x%.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $definition = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan/proposal/order fulfilled by this request.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $priorRequest = [];
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Composite request this is part of.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $groupIdentifier = null;
    /**
     * The status of the communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the request.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus
     */
    protected null|FHIRRequestStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $intent = null;
    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the {{title}} should be addressed with respect to other
     * requests.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority
     */
    protected null|FHIRRequestPriority $priority = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $codeReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $codeCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $context = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $occurrenceDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $occurrencePeriod = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRTiming
     */
    protected null|FHIRTiming $occurrenceTiming = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request transitioned to being actionable.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $authoredOn = null;
    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestRequester
     */
    protected null|FHIRDeviceRequestRequester $requester = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Desired type of performer for doing the diagnostic testing.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $performerType = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired perfomer for doing the diagnostic testing.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $performer = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonCode = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $reasonReference = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional clinical information about the patient that may influence the request
     * fulfilment. For example, this may includes body where on the subject's the
     * device will be used ( i.e. the target site).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $supportingInfo = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $relevantHistory = [];

    /**
     * Validation map for fields in type DeviceRequest
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDeviceRequest Constructor
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
        if (isset($data[self::FIELD_DEFINITION])) {
            if (is_array($data[self::FIELD_DEFINITION])) {
                foreach($data[self::FIELD_DEFINITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDefinition($v);
                    } else {
                        $this->addDefinition(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->addDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->addDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
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
        if (isset($data[self::FIELD_PRIOR_REQUEST])) {
            if (is_array($data[self::FIELD_PRIOR_REQUEST])) {
                foreach($data[self::FIELD_PRIOR_REQUEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPriorRequest($v);
                    } else {
                        $this->addPriorRequest(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PRIOR_REQUEST] instanceof FHIRReference) {
                $this->addPriorRequest($data[self::FIELD_PRIOR_REQUEST]);
            } else {
                $this->addPriorRequest(new FHIRReference($data[self::FIELD_PRIOR_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_GROUP_IDENTIFIER])) {
            if ($data[self::FIELD_GROUP_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setGroupIdentifier($data[self::FIELD_GROUP_IDENTIFIER]);
            } else {
                $this->setGroupIdentifier(new FHIRIdentifier($data[self::FIELD_GROUP_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRRequestStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRRequestStatus([FHIRRequestStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRRequestStatus($ext));
            }
        }
        if (isset($data[self::FIELD_INTENT])) {
            if ($data[self::FIELD_INTENT] instanceof FHIRCodeableConcept) {
                $this->setIntent($data[self::FIELD_INTENT]);
            } else {
                $this->setIntent(new FHIRCodeableConcept($data[self::FIELD_INTENT]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY]) || isset($data[self::FIELD_PRIORITY_EXT])) {
            $value = $data[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) ? $data[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            }
        }
        if (isset($data[self::FIELD_CODE_REFERENCE])) {
            if ($data[self::FIELD_CODE_REFERENCE] instanceof FHIRReference) {
                $this->setCodeReference($data[self::FIELD_CODE_REFERENCE]);
            } else {
                $this->setCodeReference(new FHIRReference($data[self::FIELD_CODE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_CODE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_CODE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setCodeCodeableConcept($data[self::FIELD_CODE_CODEABLE_CONCEPT]);
            } else {
                $this->setCodeCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_CODE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
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
        if (isset($data[self::FIELD_OCCURRENCE_TIMING])) {
            if ($data[self::FIELD_OCCURRENCE_TIMING] instanceof FHIRTiming) {
                $this->setOccurrenceTiming($data[self::FIELD_OCCURRENCE_TIMING]);
            } else {
                $this->setOccurrenceTiming(new FHIRTiming($data[self::FIELD_OCCURRENCE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_AUTHORED_ON]) || isset($data[self::FIELD_AUTHORED_ON_EXT])) {
            $value = $data[self::FIELD_AUTHORED_ON] ?? null;
            $ext = (isset($data[self::FIELD_AUTHORED_ON_EXT]) && is_array($data[self::FIELD_AUTHORED_ON_EXT])) ? $data[self::FIELD_AUTHORED_ON_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAuthoredOn($value);
                } else if (is_array($value)) {
                    $this->setAuthoredOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAuthoredOn(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRDeviceRequestRequester) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRDeviceRequestRequester($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER_TYPE])) {
            if ($data[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPerformerType($data[self::FIELD_PERFORMER_TYPE]);
            } else {
                $this->setPerformerType(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
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
        if (isset($data[self::FIELD_RELEVANT_HISTORY])) {
            if (is_array($data[self::FIELD_RELEVANT_HISTORY])) {
                foreach($data[self::FIELD_RELEVANT_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRelevantHistory($v);
                    } else {
                        $this->addRelevantHistory(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RELEVANT_HISTORY] instanceof FHIRReference) {
                $this->addRelevantHistory($data[self::FIELD_RELEVANT_HISTORY]);
            } else {
                $this->addRelevantHistory(new FHIRReference($data[self::FIELD_RELEVANT_HISTORY]));
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
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
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
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
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
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[] $identifier
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
     * Protocol or definition followed by this request. For example: The proposed act
     * must be performed if the indicated conditions occur, e.g.., shortness of breath,
     * SpO2 less than x%.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDefinition(): null|array
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Protocol or definition followed by this request. For example: The proposed act
     * must be performed if the indicated conditions occur, e.g.., shortness of breath,
     * SpO2 less than x%.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function addDefinition(null|FHIRReference $definition = null): self
    {
        if (null === $definition) {
            $definition = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Protocol or definition followed by this request. For example: The proposed act
     * must be performed if the indicated conditions occur, e.g.., shortness of breath,
     * SpO2 less than x%.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $definition
     * @return static
     */
    public function setDefinition(array $definition = []): self
    {
        if ([] !== $this->definition) {
            $this->_trackValuesRemoved(count($this->definition));
            $this->definition = [];
        }
        if ([] === $definition) {
            return $this;
        }
        foreach($definition as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDefinition($v);
            } else {
                $this->addDefinition(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan/proposal/order fulfilled by this request.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
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
     * Plan/proposal/order fulfilled by this request.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $basedOn
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
     * Plan/proposal/order fulfilled by this request.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $basedOn
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
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getPriorRequest(): null|array
    {
        return $this->priorRequest;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $priorRequest
     * @return static
     */
    public function addPriorRequest(null|FHIRReference $priorRequest = null): self
    {
        if (null === $priorRequest) {
            $priorRequest = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->priorRequest[] = $priorRequest;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $priorRequest
     * @return static
     */
    public function setPriorRequest(array $priorRequest = []): self
    {
        if ([] !== $this->priorRequest) {
            $this->_trackValuesRemoved(count($this->priorRequest));
            $this->priorRequest = [];
        }
        if ([] === $priorRequest) {
            return $this;
        }
        foreach($priorRequest as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPriorRequest($v);
            } else {
                $this->addPriorRequest(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Composite request this is part of.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier(): null|FHIRIdentifier
    {
        return $this->groupIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Composite request this is part of.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return static
     */
    public function setGroupIdentifier(null|FHIRIdentifier $groupIdentifier = null): self
    {
        if (null === $groupIdentifier) {
            $groupIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->groupIdentifier, $groupIdentifier);
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * The status of the communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the request.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus
     */
    public function getStatus(): null|FHIRRequestStatus
    {
        return $this->status;
    }

    /**
     * The status of the communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the request.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus $status
     * @return static
     */
    public function setStatus(null|FHIRRequestStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRRequestStatus();
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
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getIntent(): null|FHIRCodeableConcept
    {
        return $this->intent;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $intent
     * @return static
     */
    public function setIntent(null|FHIRCodeableConcept $intent = null): self
    {
        if (null === $intent) {
            $intent = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->intent, $intent);
        $this->intent = $intent;
        return $this;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the {{title}} should be addressed with respect to other
     * requests.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the {{title}} should be addressed with respect to other
     * requests.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(null|FHIRRequestPriority $priority = null): self
    {
        if (null === $priority) {
            $priority = new FHIRRequestPriority();
        }
        $this->_trackValueSet($this->priority, $priority);
        $this->priority = $priority;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getCodeReference(): null|FHIRReference
    {
        return $this->codeReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $codeReference
     * @return static
     */
    public function setCodeReference(null|FHIRReference $codeReference = null): self
    {
        if (null === $codeReference) {
            $codeReference = new FHIRReference();
        }
        $this->_trackValueSet($this->codeReference, $codeReference);
        $this->codeReference = $codeReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCodeCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->codeCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $codeCodeableConcept
     * @return static
     */
    public function setCodeCodeableConcept(null|FHIRCodeableConcept $codeCodeableConcept = null): self
    {
        if (null === $codeCodeableConcept) {
            $codeCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->codeCodeableConcept, $codeCodeableConcept);
        $this->codeCodeableConcept = $codeCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
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
     * The patient who will use the device.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $subject
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
     * An encounter that provides additional context in which this request is made.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getContext(): null|FHIRReference
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(null|FHIRReference $context = null): self
    {
        if (null === $context) {
            $context = new FHIRReference();
        }
        $this->_trackValueSet($this->context, $context);
        $this->context = $context;
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
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
    {
        return $this->occurrenceDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $occurrenceDateTime
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
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
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
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $occurrencePeriod
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
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRTiming
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
     * The timing schedule for the use of the device. The Schedule data type allows
     * many different expressions, for example. "Every 8 hours"; "Three times a day";
     * "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17
     * Oct 2013 and 1 Nov 2013".
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRTiming $occurrenceTiming
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
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request transitioned to being actionable.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn(): null|FHIRDateTime
    {
        return $this->authoredOn;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request transitioned to being actionable.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $authoredOn
     * @return static
     */
    public function setAuthoredOn(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $authoredOn = null): self
    {
        if (null !== $authoredOn && !($authoredOn instanceof FHIRDateTime)) {
            $authoredOn = new FHIRDateTime($authoredOn);
        }
        $this->_trackValueSet($this->authoredOn, $authoredOn);
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestRequester
     */
    public function getRequester(): null|FHIRDeviceRequestRequester
    {
        return $this->requester;
    }

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestRequester $requester
     * @return static
     */
    public function setRequester(null|FHIRDeviceRequestRequester $requester = null): self
    {
        if (null === $requester) {
            $requester = new FHIRDeviceRequestRequester();
        }
        $this->_trackValueSet($this->requester, $requester);
        $this->requester = $requester;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Desired type of performer for doing the diagnostic testing.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType(): null|FHIRCodeableConcept
    {
        return $this->performerType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Desired type of performer for doing the diagnostic testing.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $performerType
     * @return static
     */
    public function setPerformerType(null|FHIRCodeableConcept $performerType = null): self
    {
        if (null === $performerType) {
            $performerType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->performerType, $performerType);
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired perfomer for doing the diagnostic testing.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPerformer(): null|FHIRReference
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired perfomer for doing the diagnostic testing.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRReference $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRReference();
        }
        $this->_trackValueSet($this->performer, $performer);
        $this->performer = $performer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): null|array
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(null|FHIRCodeableConcept $reasonCode = null): self
    {
        if (null === $reasonCode) {
            $reasonCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = []): self
    {
        if ([] !== $this->reasonCode) {
            $this->_trackValuesRemoved(count($this->reasonCode));
            $this->reasonCode = [];
        }
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): null|array
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(null|FHIRReference $reasonReference = null): self
    {
        if (null === $reasonReference) {
            $reasonReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = []): self
    {
        if ([] !== $this->reasonReference) {
            $this->_trackValuesRemoved(count($this->reasonReference));
            $this->reasonReference = [];
        }
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional clinical information about the patient that may influence the request
     * fulfilment. For example, this may includes body where on the subject's the
     * device will be used ( i.e. the target site).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
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
     * Additional clinical information about the patient that may influence the request
     * fulfilment. For example, this may includes body where on the subject's the
     * device will be used ( i.e. the target site).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $supportingInfo
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
     * Additional clinical information about the patient that may influence the request
     * fulfilment. For example, this may includes body where on the subject's the
     * device will be used ( i.e. the target site).
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $supportingInfo
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
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
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
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
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[] $note
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory(): null|array
    {
        return $this->relevantHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $relevantHistory
     * @return static
     */
    public function addRelevantHistory(null|FHIRReference $relevantHistory = null): self
    {
        if (null === $relevantHistory) {
            $relevantHistory = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $relevantHistory
     * @return static
     */
    public function setRelevantHistory(array $relevantHistory = []): self
    {
        if ([] !== $this->relevantHistory) {
            $this->_trackValuesRemoved(count($this->relevantHistory));
            $this->relevantHistory = [];
        }
        if ([] === $relevantHistory) {
            return $this;
        }
        foreach($relevantHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRelevantHistory($v);
            } else {
                $this->addRelevantHistory(new FHIRReference($v));
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
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEFINITION, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getPriorRequest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRIOR_REQUEST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCodeReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCodeCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
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
        if (null !== ($v = $this->getOccurrenceTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORED_ON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformerType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELEVANT_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIOR_REQUEST])) {
            $v = $this->getPriorRequest();
            foreach($validationRules[self::FIELD_PRIOR_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_PRIOR_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIOR_REQUEST])) {
                        $errs[self::FIELD_PRIOR_REQUEST] = [];
                    }
                    $errs[self::FIELD_PRIOR_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_IDENTIFIER])) {
            $v = $this->getGroupIdentifier();
            foreach($validationRules[self::FIELD_GROUP_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_GROUP_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_IDENTIFIER])) {
                        $errs[self::FIELD_GROUP_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_GROUP_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENT])) {
            $v = $this->getIntent();
            foreach($validationRules[self::FIELD_INTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENT])) {
                        $errs[self::FIELD_INTENT] = [];
                    }
                    $errs[self::FIELD_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_REFERENCE])) {
            $v = $this->getCodeReference();
            foreach($validationRules[self::FIELD_CODE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_CODE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_REFERENCE])) {
                        $errs[self::FIELD_CODE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CODE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_CODEABLE_CONCEPT])) {
            $v = $this->getCodeCodeableConcept();
            foreach($validationRules[self::FIELD_CODE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_CODE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_CODE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CODE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_PERIOD])) {
                        $errs[self::FIELD_OCCURRENCE_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_TIMING])) {
            $v = $this->getOccurrenceTiming();
            foreach($validationRules[self::FIELD_OCCURRENCE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_TIMING])) {
                        $errs[self::FIELD_OCCURRENCE_TIMING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORED_ON])) {
            $v = $this->getAuthoredOn();
            foreach($validationRules[self::FIELD_AUTHORED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORED_ON])) {
                        $errs[self::FIELD_AUTHORED_ON] = [];
                    }
                    $errs[self::FIELD_AUTHORED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_TYPE])) {
            $v = $this->getPerformerType();
            foreach($validationRules[self::FIELD_PERFORMER_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_TYPE])) {
                        $errs[self::FIELD_PERFORMER_TYPE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELEVANT_HISTORY])) {
            $v = $this->getRelevantHistory();
            foreach($validationRules[self::FIELD_RELEVANT_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST, self::FIELD_RELEVANT_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELEVANT_HISTORY])) {
                        $errs[self::FIELD_RELEVANT_HISTORY] = [];
                    }
                    $errs[self::FIELD_RELEVANT_HISTORY][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
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
        } else if (!($type instanceof FHIRDeviceRequest)) {
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
            } elseif (self::FIELD_DEFINITION === $n->nodeName) {
                $type->addDefinition(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_BASED_ON === $n->nodeName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PRIOR_REQUEST === $n->nodeName) {
                $type->addPriorRequest(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_GROUP_IDENTIFIER === $n->nodeName) {
                $type->setGroupIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRRequestStatus::xmlUnserialize($n));
            } elseif (self::FIELD_INTENT === $n->nodeName) {
                $type->setIntent(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRIORITY === $n->nodeName) {
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($n));
            } elseif (self::FIELD_CODE_REFERENCE === $n->nodeName) {
                $type->setCodeReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CODE_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setCodeCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTEXT === $n->nodeName) {
                $type->setContext(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_DATE_TIME === $n->nodeName) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_PERIOD === $n->nodeName) {
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_TIMING === $n->nodeName) {
                $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHORED_ON === $n->nodeName) {
                $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_REQUESTER === $n->nodeName) {
                $type->setRequester(FHIRDeviceRequestRequester::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER_TYPE === $n->nodeName) {
                $type->setPerformerType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER === $n->nodeName) {
                $type->setPerformer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_CODE === $n->nodeName) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_REFERENCE === $n->nodeName) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTING_INFO === $n->nodeName) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_RELEVANT_HISTORY === $n->nodeName) {
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AUTHORED_ON);
        if (null !== $n) {
            $pt = $type->getAuthoredOn();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAuthoredOn($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DeviceRequest'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
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
        if ([] !== ($vs = $this->getPriorRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRIOR_REQUEST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GROUP_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIntent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPriority())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRIORITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCodeReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCodeCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContext())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTEXT);
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
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_TIMING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AUTHORED_ON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequester())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUESTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPerformerType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPerformer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_REFERENCE);
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
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELEVANT_HISTORY);
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
        if ([] !== ($vs = $this->getDefinition())) {
            $out->{self::FIELD_DEFINITION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEFINITION}[] = $v;
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
        if ([] !== ($vs = $this->getPriorRequest())) {
            $out->{self::FIELD_PRIOR_REQUEST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRIOR_REQUEST}[] = $v;
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $out->{self::FIELD_GROUP_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRequestStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $out->{self::FIELD_INTENT} = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRIORITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRequestPriority::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRIORITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCodeReference())) {
            $out->{self::FIELD_CODE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getCodeCodeableConcept())) {
            $out->{self::FIELD_CODE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = $v;
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
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $out->{self::FIELD_OCCURRENCE_TIMING} = $v;
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AUTHORED_ON} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AUTHORED_ON_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            $out->{self::FIELD_REQUESTER} = $v;
        }
        if (null !== ($v = $this->getPerformerType())) {
            $out->{self::FIELD_PERFORMER_TYPE} = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = $v;
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $out->{self::FIELD_REASON_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $out->{self::FIELD_REASON_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_REFERENCE}[] = $v;
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
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            $out->{self::FIELD_RELEVANT_HISTORY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELEVANT_HISTORY}[] = $v;
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