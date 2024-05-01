<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R4\FHIRCodePrimitive;
use HL7\FHIR\R4\FHIRDatePrimitive;
use HL7\FHIR\R4\FHIRDateTimePrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRDate;
use HL7\FHIR\R4\FHIRElement\FHIRDateTime;
use HL7\FHIR\R4\FHIRElement\FHIREligibilityResponsePurpose;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRFinancialResourceStatusCodes;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRPeriod;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRElement\FHIRRemittanceOutcome;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRIdPrimitive;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\FHIRUriPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeMap;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * CoverageEligibilityRequest resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCoverageEligibilityResponse
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCoverageEligibilityResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_PATIENT = 'patient';
    const FIELD_SERVICED_DATE = 'servicedDate';
    const FIELD_SERVICED_DATE_EXT = '_servicedDate';
    const FIELD_SERVICED_PERIOD = 'servicedPeriod';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_REQUESTOR = 'requestor';
    const FIELD_REQUEST = 'request';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_DISPOSITION = 'disposition';
    const FIELD_DISPOSITION_EXT = '_disposition';
    const FIELD_INSURER = 'insurer';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_PRE_AUTH_REF = 'preAuthRef';
    const FIELD_PRE_AUTH_REF_EXT = '_preAuthRef';
    const FIELD_FORM = 'form';
    const FIELD_ERROR = 'error';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected null|FHIRFinancialResourceStatusCodes $status = null;
    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIREligibilityResponsePurpose[]
     */
    protected null|array $purpose = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who is the beneficiary of the supplied coverage and for whom
     * eligibility is sought.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $servicedDate = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $servicedPeriod = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this resource was created.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $created = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the request.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $requestor = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the original request resource.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $request = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of the request processing.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRRemittanceOutcome
     */
    protected null|FHIRRemittanceOutcome $outcome = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $disposition = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who issued the coverage in question and is the author of the
     * response.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $insurer = null;
    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance[]
     */
    protected null|array $insurance = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference from the Insurer to which these services pertain to be used on
     * further communication and as proof that the request occurred.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $preAuthRef = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $form = null;
    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Errors encountered during the processing of the request.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError[]
     */
    protected null|array $error = [];

    /**
     * Validation map for fields in type CoverageEligibilityResponse
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_PURPOSE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCoverageEligibilityResponse Constructor
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
                if ($value instanceof FHIRFinancialResourceStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_PURPOSE]) || isset($data[self::FIELD_PURPOSE_EXT])) {
            $value = $data[self::FIELD_PURPOSE] ?? null;
            $ext = (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT])) ? $data[self::FIELD_PURPOSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREligibilityResponsePurpose) {
                    $this->addPurpose($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIREligibilityResponsePurpose) {
                            $this->addPurpose($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPurpose(new FHIREligibilityResponsePurpose(array_merge($v, $iext)));
                            } else {
                                $this->addPurpose(new FHIREligibilityResponsePurpose([FHIREligibilityResponsePurpose::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPurpose(new FHIREligibilityResponsePurpose(array_merge($ext, $value)));
                } else {
                    $this->addPurpose(new FHIREligibilityResponsePurpose([FHIREligibilityResponsePurpose::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPurpose(new FHIREligibilityResponsePurpose($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_SERVICED_DATE]) || isset($data[self::FIELD_SERVICED_DATE_EXT])) {
            $value = $data[self::FIELD_SERVICED_DATE] ?? null;
            $ext = (isset($data[self::FIELD_SERVICED_DATE_EXT]) && is_array($data[self::FIELD_SERVICED_DATE_EXT])) ? $data[self::FIELD_SERVICED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setServicedDate($value);
                } else if (is_array($value)) {
                    $this->setServicedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setServicedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setServicedDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_SERVICED_PERIOD])) {
            if ($data[self::FIELD_SERVICED_PERIOD] instanceof FHIRPeriod) {
                $this->setServicedPeriod($data[self::FIELD_SERVICED_PERIOD]);
            } else {
                $this->setServicedPeriod(new FHIRPeriod($data[self::FIELD_SERVICED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_CREATED]) || isset($data[self::FIELD_CREATED_EXT])) {
            $value = $data[self::FIELD_CREATED] ?? null;
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])) ? $data[self::FIELD_CREATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreated($value);
                } else if (is_array($value)) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCreated(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_REQUESTOR])) {
            if ($data[self::FIELD_REQUESTOR] instanceof FHIRReference) {
                $this->setRequestor($data[self::FIELD_REQUESTOR]);
            } else {
                $this->setRequestor(new FHIRReference($data[self::FIELD_REQUESTOR]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME]) || isset($data[self::FIELD_OUTCOME_EXT])) {
            $value = $data[self::FIELD_OUTCOME] ?? null;
            $ext = (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT])) ? $data[self::FIELD_OUTCOME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRemittanceOutcome) {
                    $this->setOutcome($value);
                } else if (is_array($value)) {
                    $this->setOutcome(new FHIRRemittanceOutcome(array_merge($ext, $value)));
                } else {
                    $this->setOutcome(new FHIRRemittanceOutcome([FHIRRemittanceOutcome::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOutcome(new FHIRRemittanceOutcome($ext));
            }
        }
        if (isset($data[self::FIELD_DISPOSITION]) || isset($data[self::FIELD_DISPOSITION_EXT])) {
            $value = $data[self::FIELD_DISPOSITION] ?? null;
            $ext = (isset($data[self::FIELD_DISPOSITION_EXT]) && is_array($data[self::FIELD_DISPOSITION_EXT])) ? $data[self::FIELD_DISPOSITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDisposition($value);
                } else if (is_array($value)) {
                    $this->setDisposition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDisposition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDisposition(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoverageEligibilityResponseInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRCoverageEligibilityResponseInsurance($v));
                    }
                }
            } elseif ($data[self::FIELD_INSURANCE] instanceof FHIRCoverageEligibilityResponseInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRCoverageEligibilityResponseInsurance($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_PRE_AUTH_REF]) || isset($data[self::FIELD_PRE_AUTH_REF_EXT])) {
            $value = $data[self::FIELD_PRE_AUTH_REF] ?? null;
            $ext = (isset($data[self::FIELD_PRE_AUTH_REF_EXT]) && is_array($data[self::FIELD_PRE_AUTH_REF_EXT])) ? $data[self::FIELD_PRE_AUTH_REF_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPreAuthRef($value);
                } else if (is_array($value)) {
                    $this->setPreAuthRef(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPreAuthRef(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FORM])) {
            if ($data[self::FIELD_FORM] instanceof FHIRCodeableConcept) {
                $this->setForm($data[self::FIELD_FORM]);
            } else {
                $this->setForm(new FHIRCodeableConcept($data[self::FIELD_FORM]));
            }
        }
        if (isset($data[self::FIELD_ERROR])) {
            if (is_array($data[self::FIELD_ERROR])) {
                foreach($data[self::FIELD_ERROR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoverageEligibilityResponseError) {
                        $this->addError($v);
                    } else {
                        $this->addError(new FHIRCoverageEligibilityResponseError($v));
                    }
                }
            } elseif ($data[self::FIELD_ERROR] instanceof FHIRCoverageEligibilityResponseError) {
                $this->addError($data[self::FIELD_ERROR]);
            } else {
                $this->addError(new FHIRCoverageEligibilityResponseError($data[self::FIELD_ERROR]));
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
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
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
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
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
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus(): null|FHIRFinancialResourceStatusCodes
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRFinancialResourceStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRFinancialResourceStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIREligibilityResponsePurpose[]
     */
    public function getPurpose(): null|array
    {
        return $this->purpose;
    }

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIREligibilityResponsePurpose $purpose
     * @return static
     */
    public function addPurpose(null|FHIREligibilityResponsePurpose $purpose = null): self
    {
        if (null === $purpose) {
            $purpose = new FHIREligibilityResponsePurpose();
        }
        $this->_trackValueAdded();
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIREligibilityResponsePurpose[] $purpose
     * @return static
     */
    public function setPurpose(array $purpose = []): self
    {
        if ([] !== $this->purpose) {
            $this->_trackValuesRemoved(count($this->purpose));
            $this->purpose = [];
        }
        if ([] === $purpose) {
            return $this;
        }
        foreach($purpose as $v) {
            if ($v instanceof FHIREligibilityResponsePurpose) {
                $this->addPurpose($v);
            } else {
                $this->addPurpose(new FHIREligibilityResponsePurpose($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who is the beneficiary of the supplied coverage and for whom
     * eligibility is sought.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
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
     * The party who is the beneficiary of the supplied coverage and for whom
     * eligibility is sought.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $patient
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDate
     */
    public function getServicedDate(): null|FHIRDate
    {
        return $this->servicedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R4\FHIRDatePrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDate $servicedDate
     * @return static
     */
    public function setServicedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $servicedDate = null): self
    {
        if (null !== $servicedDate && !($servicedDate instanceof FHIRDate)) {
            $servicedDate = new FHIRDate($servicedDate);
        }
        $this->_trackValueSet($this->servicedDate, $servicedDate);
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod(): null|FHIRPeriod
    {
        return $this->servicedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRPeriod $servicedPeriod
     * @return static
     */
    public function setServicedPeriod(null|FHIRPeriod $servicedPeriod = null): self
    {
        if (null === $servicedPeriod) {
            $servicedPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->servicedPeriod, $servicedPeriod);
        $this->servicedPeriod = $servicedPeriod;
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
     * The date this resource was created.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this resource was created.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R4\FHIRDateTimePrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null): self
    {
        if (null !== $created && !($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime($created);
        }
        $this->_trackValueSet($this->created, $created);
        $this->created = $created;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the request.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getRequestor(): null|FHIRReference
    {
        return $this->requestor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the request.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $requestor
     * @return static
     */
    public function setRequestor(null|FHIRReference $requestor = null): self
    {
        if (null === $requestor) {
            $requestor = new FHIRReference();
        }
        $this->_trackValueSet($this->requestor, $requestor);
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the original request resource.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getRequest(): null|FHIRReference
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the original request resource.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $request
     * @return static
     */
    public function setRequest(null|FHIRReference $request = null): self
    {
        if (null === $request) {
            $request = new FHIRReference();
        }
        $this->_trackValueSet($this->request, $request);
        $this->request = $request;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of the request processing.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRRemittanceOutcome
     */
    public function getOutcome(): null|FHIRRemittanceOutcome
    {
        return $this->outcome;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of the request processing.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRRemittanceOutcome $outcome
     * @return static
     */
    public function setOutcome(null|FHIRRemittanceOutcome $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRRemittanceOutcome();
        }
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDisposition(): null|FHIRString
    {
        return $this->disposition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $disposition
     * @return static
     */
    public function setDisposition(null|string|FHIRStringPrimitive|FHIRString $disposition = null): self
    {
        if (null !== $disposition && !($disposition instanceof FHIRString)) {
            $disposition = new FHIRString($disposition);
        }
        $this->_trackValueSet($this->disposition, $disposition);
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who issued the coverage in question and is the author of the
     * response.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getInsurer(): null|FHIRReference
    {
        return $this->insurer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who issued the coverage in question and is the author of the
     * response.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $insurer
     * @return static
     */
    public function setInsurer(null|FHIRReference $insurer = null): self
    {
        if (null === $insurer) {
            $insurer = new FHIRReference();
        }
        $this->_trackValueSet($this->insurer, $insurer);
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance[]
     */
    public function getInsurance(): null|array
    {
        return $this->insurance;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance $insurance
     * @return static
     */
    public function addInsurance(null|FHIRCoverageEligibilityResponseInsurance $insurance = null): self
    {
        if (null === $insurance) {
            $insurance = new FHIRCoverageEligibilityResponseInsurance();
        }
        $this->_trackValueAdded();
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance[] $insurance
     * @return static
     */
    public function setInsurance(array $insurance = []): self
    {
        if ([] !== $this->insurance) {
            $this->_trackValuesRemoved(count($this->insurance));
            $this->insurance = [];
        }
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIRCoverageEligibilityResponseInsurance) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRCoverageEligibilityResponseInsurance($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference from the Insurer to which these services pertain to be used on
     * further communication and as proof that the request occurred.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getPreAuthRef(): null|FHIRString
    {
        return $this->preAuthRef;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference from the Insurer to which these services pertain to be used on
     * further communication and as proof that the request occurred.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $preAuthRef
     * @return static
     */
    public function setPreAuthRef(null|string|FHIRStringPrimitive|FHIRString $preAuthRef = null): self
    {
        if (null !== $preAuthRef && !($preAuthRef instanceof FHIRString)) {
            $preAuthRef = new FHIRString($preAuthRef);
        }
        $this->_trackValueSet($this->preAuthRef, $preAuthRef);
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getForm(): null|FHIRCodeableConcept
    {
        return $this->form;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $form
     * @return static
     */
    public function setForm(null|FHIRCodeableConcept $form = null): self
    {
        if (null === $form) {
            $form = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->form, $form);
        $this->form = $form;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Errors encountered during the processing of the request.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError[]
     */
    public function getError(): null|array
    {
        return $this->error;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Errors encountered during the processing of the request.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError $error
     * @return static
     */
    public function addError(null|FHIRCoverageEligibilityResponseError $error = null): self
    {
        if (null === $error) {
            $error = new FHIRCoverageEligibilityResponseError();
        }
        $this->_trackValueAdded();
        $this->error[] = $error;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Errors encountered during the processing of the request.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError[] $error
     * @return static
     */
    public function setError(array $error = []): self
    {
        if ([] !== $this->error) {
            $this->_trackValuesRemoved(count($this->error));
            $this->error = [];
        }
        if ([] === $error) {
            return $this;
        }
        foreach($error as $v) {
            if ($v instanceof FHIRCoverageEligibilityResponseError) {
                $this->addError($v);
            } else {
                $this->addError(new FHIRCoverageEligibilityResponseError($v));
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
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PURPOSE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServicedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICED_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPOSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSURER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSURANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPreAuthRef())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRE_AUTH_REF] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ERROR, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICED_DATE])) {
            $v = $this->getServicedDate();
            foreach($validationRules[self::FIELD_SERVICED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_SERVICED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICED_DATE])) {
                        $errs[self::FIELD_SERVICED_DATE] = [];
                    }
                    $errs[self::FIELD_SERVICED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICED_PERIOD])) {
            $v = $this->getServicedPeriod();
            foreach($validationRules[self::FIELD_SERVICED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_SERVICED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICED_PERIOD])) {
                        $errs[self::FIELD_SERVICED_PERIOD] = [];
                    }
                    $errs[self::FIELD_SERVICED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTOR])) {
            $v = $this->getRequestor();
            foreach($validationRules[self::FIELD_REQUESTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_REQUESTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTOR])) {
                        $errs[self::FIELD_REQUESTOR] = [];
                    }
                    $errs[self::FIELD_REQUESTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPOSITION])) {
            $v = $this->getDisposition();
            foreach($validationRules[self::FIELD_DISPOSITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_DISPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPOSITION])) {
                        $errs[self::FIELD_DISPOSITION] = [];
                    }
                    $errs[self::FIELD_DISPOSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURER])) {
            $v = $this->getInsurer();
            foreach($validationRules[self::FIELD_INSURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_INSURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURER])) {
                        $errs[self::FIELD_INSURER] = [];
                    }
                    $errs[self::FIELD_INSURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE])) {
            $v = $this->getInsurance();
            foreach($validationRules[self::FIELD_INSURANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_INSURANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE])) {
                        $errs[self::FIELD_INSURANCE] = [];
                    }
                    $errs[self::FIELD_INSURANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRE_AUTH_REF])) {
            $v = $this->getPreAuthRef();
            foreach($validationRules[self::FIELD_PRE_AUTH_REF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_PRE_AUTH_REF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_AUTH_REF])) {
                        $errs[self::FIELD_PRE_AUTH_REF] = [];
                    }
                    $errs[self::FIELD_PRE_AUTH_REF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM])) {
            $v = $this->getForm();
            foreach($validationRules[self::FIELD_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM])) {
                        $errs[self::FIELD_FORM] = [];
                    }
                    $errs[self::FIELD_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ERROR])) {
            $v = $this->getError();
            foreach($validationRules[self::FIELD_ERROR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE, self::FIELD_ERROR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ERROR])) {
                        $errs[self::FIELD_ERROR] = [];
                    }
                    $errs[self::FIELD_ERROR][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse
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
        } else if (!($type instanceof FHIRCoverageEligibilityResponse)) {
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
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_PURPOSE === $n->nodeName) {
                $type->addPurpose(FHIREligibilityResponsePurpose::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICED_DATE === $n->nodeName) {
                $type->setServicedDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICED_PERIOD === $n->nodeName) {
                $type->setServicedPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_CREATED === $n->nodeName) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_REQUESTOR === $n->nodeName) {
                $type->setRequestor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST === $n->nodeName) {
                $type->setRequest(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OUTCOME === $n->nodeName) {
                $type->setOutcome(FHIRRemittanceOutcome::xmlUnserialize($n));
            } elseif (self::FIELD_DISPOSITION === $n->nodeName) {
                $type->setDisposition(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_INSURER === $n->nodeName) {
                $type->setInsurer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INSURANCE === $n->nodeName) {
                $type->addInsurance(FHIRCoverageEligibilityResponseInsurance::xmlUnserialize($n));
            } elseif (self::FIELD_PRE_AUTH_REF === $n->nodeName) {
                $type->setPreAuthRef(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FORM === $n->nodeName) {
                $type->setForm(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ERROR === $n->nodeName) {
                $type->addError(FHIRCoverageEligibilityResponseError::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_SERVICED_DATE);
        if (null !== $n) {
            $pt = $type->getServicedDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setServicedDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CREATED);
        if (null !== $n) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCreated($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DISPOSITION);
        if (null !== $n) {
            $pt = $type->getDisposition();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDisposition($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PRE_AUTH_REF);
        if (null !== $n) {
            $pt = $type->getPreAuthRef();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPreAuthRef($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CoverageEligibilityResponse'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PURPOSE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getServicedDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICED_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICED_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCreated())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CREATED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequestor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUESTOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequest())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOutcome())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OUTCOME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDisposition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISPOSITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInsurer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSURER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INSURANCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPreAuthRef())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRE_AUTH_REF);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getForm())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FORM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ERROR);
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
            unset($ext->{FHIRFinancialResourceStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPurpose())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIREligibilityResponsePurpose::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PURPOSE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PURPOSE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getServicedDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERVICED_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERVICED_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $out->{self::FIELD_SERVICED_PERIOD} = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CREATED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CREATED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequestor())) {
            $out->{self::FIELD_REQUESTOR} = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OUTCOME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRemittanceOutcome::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OUTCOME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DISPOSITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DISPOSITION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            $out->{self::FIELD_INSURER} = $v;
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $out->{self::FIELD_INSURANCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INSURANCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPreAuthRef())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRE_AUTH_REF} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRE_AUTH_REF_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getForm())) {
            $out->{self::FIELD_FORM} = $v;
        }
        if ([] !== ($vs = $this->getError())) {
            $out->{self::FIELD_ERROR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ERROR}[] = $v;
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