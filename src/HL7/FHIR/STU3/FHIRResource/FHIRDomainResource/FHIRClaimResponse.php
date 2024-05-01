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
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote;
use HL7\FHIR\STU3\FHIRElement\FHIRCode;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRCoding;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes;
use HL7\FHIR\STU3\FHIRElement\FHIRId;
use HL7\FHIR\STU3\FHIRElement\FHIRIdentifier;
use HL7\FHIR\STU3\FHIRElement\FHIRMeta;
use HL7\FHIR\STU3\FHIRElement\FHIRNarrative;
use HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRElement\FHIRUri;
use HL7\FHIR\STU3\FHIRIdPrimitive;
use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\FHIRUriPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRContainedTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeMap;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRClaimResponse
 * @package \HL7\FHIR\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRClaimResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PATIENT = 'patient';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_INSURER = 'insurer';
    const FIELD_REQUEST_PROVIDER = 'requestProvider';
    const FIELD_REQUEST_ORGANIZATION = 'requestOrganization';
    const FIELD_REQUEST = 'request';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_DISPOSITION = 'disposition';
    const FIELD_DISPOSITION_EXT = '_disposition';
    const FIELD_PAYEE_TYPE = 'payeeType';
    const FIELD_ITEM = 'item';
    const FIELD_ADD_ITEM = 'addItem';
    const FIELD_ERROR = 'error';
    const FIELD_TOTAL_COST = 'totalCost';
    const FIELD_UNALLOC_DEDUCTABLE = 'unallocDeductable';
    const FIELD_TOTAL_BENEFIT = 'totalBenefit';
    const FIELD_PAYMENT = 'payment';
    const FIELD_RESERVED = 'reserved';
    const FIELD_FORM = 'form';
    const FIELD_PROCESS_NOTE = 'processNote';
    const FIELD_COMMUNICATION_REQUEST = 'communicationRequest';
    const FIELD_INSURANCE = 'insurance';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected null|FHIRFinancialResourceStatusCodes $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $created = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $insurer = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $requestProvider = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $requestOrganization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $request = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing outcome errror, partial or complete processing.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $outcome = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $disposition = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $payeeType = null;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    protected null|array $item = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    protected null|array $addItem = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    protected null|array $error = [];
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total cost of the services reported.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $totalCost = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $unallocDeductable = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $totalBenefit = null;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Payment details for the claim if the claim has been paid.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    protected null|FHIRClaimResponsePayment $payment = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $reserved = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $form = null;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote[]
     */
    protected null|array $processNote = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $communicationRequest = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance[]
     */
    protected null|array $insurance = [];

    /**
     * Validation map for fields in type ClaimResponse
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRClaimResponse Constructor
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
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
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
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_PROVIDER])) {
            if ($data[self::FIELD_REQUEST_PROVIDER] instanceof FHIRReference) {
                $this->setRequestProvider($data[self::FIELD_REQUEST_PROVIDER]);
            } else {
                $this->setRequestProvider(new FHIRReference($data[self::FIELD_REQUEST_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_ORGANIZATION])) {
            if ($data[self::FIELD_REQUEST_ORGANIZATION] instanceof FHIRReference) {
                $this->setRequestOrganization($data[self::FIELD_REQUEST_ORGANIZATION]);
            } else {
                $this->setRequestOrganization(new FHIRReference($data[self::FIELD_REQUEST_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
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
        if (isset($data[self::FIELD_PAYEE_TYPE])) {
            if ($data[self::FIELD_PAYEE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPayeeType($data[self::FIELD_PAYEE_TYPE]);
            } else {
                $this->setPayeeType(new FHIRCodeableConcept($data[self::FIELD_PAYEE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRClaimResponseItem($v));
                    }
                }
            } elseif ($data[self::FIELD_ITEM] instanceof FHIRClaimResponseItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRClaimResponseItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_ADD_ITEM])) {
            if (is_array($data[self::FIELD_ADD_ITEM])) {
                foreach($data[self::FIELD_ADD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseAddItem) {
                        $this->addAddItem($v);
                    } else {
                        $this->addAddItem(new FHIRClaimResponseAddItem($v));
                    }
                }
            } elseif ($data[self::FIELD_ADD_ITEM] instanceof FHIRClaimResponseAddItem) {
                $this->addAddItem($data[self::FIELD_ADD_ITEM]);
            } else {
                $this->addAddItem(new FHIRClaimResponseAddItem($data[self::FIELD_ADD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_ERROR])) {
            if (is_array($data[self::FIELD_ERROR])) {
                foreach($data[self::FIELD_ERROR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseError) {
                        $this->addError($v);
                    } else {
                        $this->addError(new FHIRClaimResponseError($v));
                    }
                }
            } elseif ($data[self::FIELD_ERROR] instanceof FHIRClaimResponseError) {
                $this->addError($data[self::FIELD_ERROR]);
            } else {
                $this->addError(new FHIRClaimResponseError($data[self::FIELD_ERROR]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_COST])) {
            if ($data[self::FIELD_TOTAL_COST] instanceof FHIRMoney) {
                $this->setTotalCost($data[self::FIELD_TOTAL_COST]);
            } else {
                $this->setTotalCost(new FHIRMoney($data[self::FIELD_TOTAL_COST]));
            }
        }
        if (isset($data[self::FIELD_UNALLOC_DEDUCTABLE])) {
            if ($data[self::FIELD_UNALLOC_DEDUCTABLE] instanceof FHIRMoney) {
                $this->setUnallocDeductable($data[self::FIELD_UNALLOC_DEDUCTABLE]);
            } else {
                $this->setUnallocDeductable(new FHIRMoney($data[self::FIELD_UNALLOC_DEDUCTABLE]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_BENEFIT])) {
            if ($data[self::FIELD_TOTAL_BENEFIT] instanceof FHIRMoney) {
                $this->setTotalBenefit($data[self::FIELD_TOTAL_BENEFIT]);
            } else {
                $this->setTotalBenefit(new FHIRMoney($data[self::FIELD_TOTAL_BENEFIT]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT])) {
            if ($data[self::FIELD_PAYMENT] instanceof FHIRClaimResponsePayment) {
                $this->setPayment($data[self::FIELD_PAYMENT]);
            } else {
                $this->setPayment(new FHIRClaimResponsePayment($data[self::FIELD_PAYMENT]));
            }
        }
        if (isset($data[self::FIELD_RESERVED])) {
            if ($data[self::FIELD_RESERVED] instanceof FHIRCoding) {
                $this->setReserved($data[self::FIELD_RESERVED]);
            } else {
                $this->setReserved(new FHIRCoding($data[self::FIELD_RESERVED]));
            }
        }
        if (isset($data[self::FIELD_FORM])) {
            if ($data[self::FIELD_FORM] instanceof FHIRCodeableConcept) {
                $this->setForm($data[self::FIELD_FORM]);
            } else {
                $this->setForm(new FHIRCodeableConcept($data[self::FIELD_FORM]));
            }
        }
        if (isset($data[self::FIELD_PROCESS_NOTE])) {
            if (is_array($data[self::FIELD_PROCESS_NOTE])) {
                foreach($data[self::FIELD_PROCESS_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseProcessNote) {
                        $this->addProcessNote($v);
                    } else {
                        $this->addProcessNote(new FHIRClaimResponseProcessNote($v));
                    }
                }
            } elseif ($data[self::FIELD_PROCESS_NOTE] instanceof FHIRClaimResponseProcessNote) {
                $this->addProcessNote($data[self::FIELD_PROCESS_NOTE]);
            } else {
                $this->addProcessNote(new FHIRClaimResponseProcessNote($data[self::FIELD_PROCESS_NOTE]));
            }
        }
        if (isset($data[self::FIELD_COMMUNICATION_REQUEST])) {
            if (is_array($data[self::FIELD_COMMUNICATION_REQUEST])) {
                foreach($data[self::FIELD_COMMUNICATION_REQUEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addCommunicationRequest($v);
                    } else {
                        $this->addCommunicationRequest(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COMMUNICATION_REQUEST] instanceof FHIRReference) {
                $this->addCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]);
            } else {
                $this->addCommunicationRequest(new FHIRReference($data[self::FIELD_COMMUNICATION_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRClaimResponseInsurance($v));
                    }
                }
            } elseif ($data[self::FIELD_INSURANCE] instanceof FHIRClaimResponseInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRClaimResponseInsurance($data[self::FIELD_INSURANCE]));
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
     * The Response business identifier.
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
     * The Response business identifier.
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
     * The Response business identifier.
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
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
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
     * Patient Resource.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $patient
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
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
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $created
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
     * The Insurer who produced this adjudicated response.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
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
     * The Insurer who produced this adjudicated response.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $insurer
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getRequestProvider(): null|FHIRReference
    {
        return $this->requestProvider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $requestProvider
     * @return static
     */
    public function setRequestProvider(null|FHIRReference $requestProvider = null): self
    {
        if (null === $requestProvider) {
            $requestProvider = new FHIRReference();
        }
        $this->_trackValueSet($this->requestProvider, $requestProvider);
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getRequestOrganization(): null|FHIRReference
    {
        return $this->requestOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $requestOrganization
     * @return static
     */
    public function setRequestOrganization(null|FHIRReference $requestOrganization = null): self
    {
        if (null === $requestOrganization) {
            $requestOrganization = new FHIRReference();
        }
        $this->_trackValueSet($this->requestOrganization, $requestOrganization);
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
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
     * Original request resource referrence.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $request
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing outcome errror, partial or complete processing.
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
     * Processing outcome errror, partial or complete processing.
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDisposition(): null|FHIRString
    {
        return $this->disposition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $disposition
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getPayeeType(): null|FHIRCodeableConcept
    {
        return $this->payeeType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $payeeType
     * @return static
     */
    public function setPayeeType(null|FHIRCodeableConcept $payeeType = null): self
    {
        if (null === $payeeType) {
            $payeeType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->payeeType, $payeeType);
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem(): null|array
    {
        return $this->item;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $item
     * @return static
     */
    public function addItem(null|FHIRClaimResponseItem $item = null): self
    {
        if (null === $item) {
            $item = new FHIRClaimResponseItem();
        }
        $this->_trackValueAdded();
        $this->item[] = $item;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[] $item
     * @return static
     */
    public function setItem(array $item = []): self
    {
        if ([] !== $this->item) {
            $this->_trackValuesRemoved(count($this->item));
            $this->item = [];
        }
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRClaimResponseItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRClaimResponseItem($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem(): null|array
    {
        return $this->addItem;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $addItem
     * @return static
     */
    public function addAddItem(null|FHIRClaimResponseAddItem $addItem = null): self
    {
        if (null === $addItem) {
            $addItem = new FHIRClaimResponseAddItem();
        }
        $this->_trackValueAdded();
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[] $addItem
     * @return static
     */
    public function setAddItem(array $addItem = []): self
    {
        if ([] !== $this->addItem) {
            $this->_trackValuesRemoved(count($this->addItem));
            $this->addItem = [];
        }
        if ([] === $addItem) {
            return $this;
        }
        foreach($addItem as $v) {
            if ($v instanceof FHIRClaimResponseAddItem) {
                $this->addAddItem($v);
            } else {
                $this->addAddItem(new FHIRClaimResponseAddItem($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError(): null|array
    {
        return $this->error;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $error
     * @return static
     */
    public function addError(null|FHIRClaimResponseError $error = null): self
    {
        if (null === $error) {
            $error = new FHIRClaimResponseError();
        }
        $this->_trackValueAdded();
        $this->error[] = $error;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[] $error
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
            if ($v instanceof FHIRClaimResponseError) {
                $this->addError($v);
            } else {
                $this->addError(new FHIRClaimResponseError($v));
            }
        }
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total cost of the services reported.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost(): null|FHIRMoney
    {
        return $this->totalCost;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total cost of the services reported.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @return static
     */
    public function setTotalCost(null|FHIRMoney $totalCost = null): self
    {
        if (null === $totalCost) {
            $totalCost = new FHIRMoney();
        }
        $this->_trackValueSet($this->totalCost, $totalCost);
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable(): null|FHIRMoney
    {
        return $this->unallocDeductable;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @return static
     */
    public function setUnallocDeductable(null|FHIRMoney $unallocDeductable = null): self
    {
        if (null === $unallocDeductable) {
            $unallocDeductable = new FHIRMoney();
        }
        $this->_trackValueSet($this->unallocDeductable, $unallocDeductable);
        $this->unallocDeductable = $unallocDeductable;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit(): null|FHIRMoney
    {
        return $this->totalBenefit;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @return static
     */
    public function setTotalBenefit(null|FHIRMoney $totalBenefit = null): self
    {
        if (null === $totalBenefit) {
            $totalBenefit = new FHIRMoney();
        }
        $this->_trackValueSet($this->totalBenefit, $totalBenefit);
        $this->totalBenefit = $totalBenefit;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Payment details for the claim if the claim has been paid.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    public function getPayment(): null|FHIRClaimResponsePayment
    {
        return $this->payment;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Payment details for the claim if the claim has been paid.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment $payment
     * @return static
     */
    public function setPayment(null|FHIRClaimResponsePayment $payment = null): self
    {
        if (null === $payment) {
            $payment = new FHIRClaimResponsePayment();
        }
        $this->_trackValueSet($this->payment, $payment);
        $this->payment = $payment;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getReserved(): null|FHIRCoding
    {
        return $this->reserved;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCoding $reserved
     * @return static
     */
    public function setReserved(null|FHIRCoding $reserved = null): self
    {
        if (null === $reserved) {
            $reserved = new FHIRCoding();
        }
        $this->_trackValueSet($this->reserved, $reserved);
        $this->reserved = $reserved;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
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
     * The form to be used for printing the content.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $form
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
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote[]
     */
    public function getProcessNote(): null|array
    {
        return $this->processNote;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote $processNote
     * @return static
     */
    public function addProcessNote(null|FHIRClaimResponseProcessNote $processNote = null): self
    {
        if (null === $processNote) {
            $processNote = new FHIRClaimResponseProcessNote();
        }
        $this->_trackValueAdded();
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote[] $processNote
     * @return static
     */
    public function setProcessNote(array $processNote = []): self
    {
        if ([] !== $this->processNote) {
            $this->_trackValuesRemoved(count($this->processNote));
            $this->processNote = [];
        }
        if ([] === $processNote) {
            return $this;
        }
        foreach($processNote as $v) {
            if ($v instanceof FHIRClaimResponseProcessNote) {
                $this->addProcessNote($v);
            } else {
                $this->addProcessNote(new FHIRClaimResponseProcessNote($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getCommunicationRequest(): null|array
    {
        return $this->communicationRequest;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $communicationRequest
     * @return static
     */
    public function addCommunicationRequest(null|FHIRReference $communicationRequest = null): self
    {
        if (null === $communicationRequest) {
            $communicationRequest = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->communicationRequest[] = $communicationRequest;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $communicationRequest
     * @return static
     */
    public function setCommunicationRequest(array $communicationRequest = []): self
    {
        if ([] !== $this->communicationRequest) {
            $this->_trackValuesRemoved(count($this->communicationRequest));
            $this->communicationRequest = [];
        }
        if ([] === $communicationRequest) {
            return $this;
        }
        foreach($communicationRequest as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCommunicationRequest($v);
            } else {
                $this->addCommunicationRequest(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance[]
     */
    public function getInsurance(): null|array
    {
        return $this->insurance;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance $insurance
     * @return static
     */
    public function addInsurance(null|FHIRClaimResponseInsurance $insurance = null): self
    {
        if (null === $insurance) {
            $insurance = new FHIRClaimResponseInsurance();
        }
        $this->_trackValueAdded();
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance[] $insurance
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
            if ($v instanceof FHIRClaimResponseInsurance) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRClaimResponseInsurance($v));
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSURER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_ORGANIZATION] = $fieldErrs;
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
        if (null !== ($v = $this->getPayeeType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYEE_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAddItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ERROR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTotalCost())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL_COST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnallocDeductable())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNALLOC_DEDUCTABLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTotalBenefit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL_BENEFIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPayment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReserved())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESERVED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCESS_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMMUNICATION_REQUEST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSURANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURER])) {
            $v = $this->getInsurer();
            foreach($validationRules[self::FIELD_INSURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_INSURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURER])) {
                        $errs[self::FIELD_INSURER] = [];
                    }
                    $errs[self::FIELD_INSURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_PROVIDER])) {
            $v = $this->getRequestProvider();
            foreach($validationRules[self::FIELD_REQUEST_PROVIDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_REQUEST_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_PROVIDER])) {
                        $errs[self::FIELD_REQUEST_PROVIDER] = [];
                    }
                    $errs[self::FIELD_REQUEST_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_ORGANIZATION])) {
            $v = $this->getRequestOrganization();
            foreach($validationRules[self::FIELD_REQUEST_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_REQUEST_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_ORGANIZATION])) {
                        $errs[self::FIELD_REQUEST_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_REQUEST_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_REQUEST, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_OUTCOME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_DISPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPOSITION])) {
                        $errs[self::FIELD_DISPOSITION] = [];
                    }
                    $errs[self::FIELD_DISPOSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYEE_TYPE])) {
            $v = $this->getPayeeType();
            foreach($validationRules[self::FIELD_PAYEE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_PAYEE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYEE_TYPE])) {
                        $errs[self::FIELD_PAYEE_TYPE] = [];
                    }
                    $errs[self::FIELD_PAYEE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADD_ITEM])) {
            $v = $this->getAddItem();
            foreach($validationRules[self::FIELD_ADD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_ADD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADD_ITEM])) {
                        $errs[self::FIELD_ADD_ITEM] = [];
                    }
                    $errs[self::FIELD_ADD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ERROR])) {
            $v = $this->getError();
            foreach($validationRules[self::FIELD_ERROR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_ERROR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ERROR])) {
                        $errs[self::FIELD_ERROR] = [];
                    }
                    $errs[self::FIELD_ERROR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL_COST])) {
            $v = $this->getTotalCost();
            foreach($validationRules[self::FIELD_TOTAL_COST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_TOTAL_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL_COST])) {
                        $errs[self::FIELD_TOTAL_COST] = [];
                    }
                    $errs[self::FIELD_TOTAL_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNALLOC_DEDUCTABLE])) {
            $v = $this->getUnallocDeductable();
            foreach($validationRules[self::FIELD_UNALLOC_DEDUCTABLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_UNALLOC_DEDUCTABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNALLOC_DEDUCTABLE])) {
                        $errs[self::FIELD_UNALLOC_DEDUCTABLE] = [];
                    }
                    $errs[self::FIELD_UNALLOC_DEDUCTABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL_BENEFIT])) {
            $v = $this->getTotalBenefit();
            foreach($validationRules[self::FIELD_TOTAL_BENEFIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_TOTAL_BENEFIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL_BENEFIT])) {
                        $errs[self::FIELD_TOTAL_BENEFIT] = [];
                    }
                    $errs[self::FIELD_TOTAL_BENEFIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT])) {
            $v = $this->getPayment();
            foreach($validationRules[self::FIELD_PAYMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_PAYMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT])) {
                        $errs[self::FIELD_PAYMENT] = [];
                    }
                    $errs[self::FIELD_PAYMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESERVED])) {
            $v = $this->getReserved();
            foreach($validationRules[self::FIELD_RESERVED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_RESERVED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESERVED])) {
                        $errs[self::FIELD_RESERVED] = [];
                    }
                    $errs[self::FIELD_RESERVED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM])) {
            $v = $this->getForm();
            foreach($validationRules[self::FIELD_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM])) {
                        $errs[self::FIELD_FORM] = [];
                    }
                    $errs[self::FIELD_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESS_NOTE])) {
            $v = $this->getProcessNote();
            foreach($validationRules[self::FIELD_PROCESS_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_PROCESS_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESS_NOTE])) {
                        $errs[self::FIELD_PROCESS_NOTE] = [];
                    }
                    $errs[self::FIELD_PROCESS_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMUNICATION_REQUEST])) {
            $v = $this->getCommunicationRequest();
            foreach($validationRules[self::FIELD_COMMUNICATION_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_COMMUNICATION_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMUNICATION_REQUEST])) {
                        $errs[self::FIELD_COMMUNICATION_REQUEST] = [];
                    }
                    $errs[self::FIELD_COMMUNICATION_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE])) {
            $v = $this->getInsurance();
            foreach($validationRules[self::FIELD_INSURANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE, self::FIELD_INSURANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE])) {
                        $errs[self::FIELD_INSURANCE] = [];
                    }
                    $errs[self::FIELD_INSURANCE][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
        } else if (!($type instanceof FHIRClaimResponse)) {
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
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CREATED === $n->nodeName) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_INSURER === $n->nodeName) {
                $type->setInsurer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST_PROVIDER === $n->nodeName) {
                $type->setRequestProvider(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST_ORGANIZATION === $n->nodeName) {
                $type->setRequestOrganization(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST === $n->nodeName) {
                $type->setRequest(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OUTCOME === $n->nodeName) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DISPOSITION === $n->nodeName) {
                $type->setDisposition(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PAYEE_TYPE === $n->nodeName) {
                $type->setPayeeType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ITEM === $n->nodeName) {
                $type->addItem(FHIRClaimResponseItem::xmlUnserialize($n));
            } elseif (self::FIELD_ADD_ITEM === $n->nodeName) {
                $type->addAddItem(FHIRClaimResponseAddItem::xmlUnserialize($n));
            } elseif (self::FIELD_ERROR === $n->nodeName) {
                $type->addError(FHIRClaimResponseError::xmlUnserialize($n));
            } elseif (self::FIELD_TOTAL_COST === $n->nodeName) {
                $type->setTotalCost(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_UNALLOC_DEDUCTABLE === $n->nodeName) {
                $type->setUnallocDeductable(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_TOTAL_BENEFIT === $n->nodeName) {
                $type->setTotalBenefit(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_PAYMENT === $n->nodeName) {
                $type->setPayment(FHIRClaimResponsePayment::xmlUnserialize($n));
            } elseif (self::FIELD_RESERVED === $n->nodeName) {
                $type->setReserved(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_FORM === $n->nodeName) {
                $type->setForm(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PROCESS_NOTE === $n->nodeName) {
                $type->addProcessNote(FHIRClaimResponseProcessNote::xmlUnserialize($n));
            } elseif (self::FIELD_COMMUNICATION_REQUEST === $n->nodeName) {
                $type->addCommunicationRequest(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INSURANCE === $n->nodeName) {
                $type->addInsurance(FHIRClaimResponseInsurance::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ClaimResponse'), $libxmlOpts);
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
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCreated())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CREATED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInsurer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSURER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST_PROVIDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequestOrganization())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST_ORGANIZATION);
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
        if (null !== ($v = $this->getPayeeType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAYEE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ITEM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAddItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADD_ITEM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if (null !== ($v = $this->getTotalCost())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TOTAL_COST);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUnallocDeductable())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UNALLOC_DEDUCTABLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTotalBenefit())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TOTAL_BENEFIT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPayment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAYMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReserved())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESERVED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getForm())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FORM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROCESS_NOTE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMMUNICATION_REQUEST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
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
        if (null !== ($v = $this->getInsurer())) {
            $out->{self::FIELD_INSURER} = $v;
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $out->{self::FIELD_REQUEST_PROVIDER} = $v;
        }
        if (null !== ($v = $this->getRequestOrganization())) {
            $out->{self::FIELD_REQUEST_ORGANIZATION} = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = $v;
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
        if (null !== ($v = $this->getPayeeType())) {
            $out->{self::FIELD_PAYEE_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getItem())) {
            $out->{self::FIELD_ITEM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ITEM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAddItem())) {
            $out->{self::FIELD_ADD_ITEM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ADD_ITEM}[] = $v;
            }
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
        if (null !== ($v = $this->getTotalCost())) {
            $out->{self::FIELD_TOTAL_COST} = $v;
        }
        if (null !== ($v = $this->getUnallocDeductable())) {
            $out->{self::FIELD_UNALLOC_DEDUCTABLE} = $v;
        }
        if (null !== ($v = $this->getTotalBenefit())) {
            $out->{self::FIELD_TOTAL_BENEFIT} = $v;
        }
        if (null !== ($v = $this->getPayment())) {
            $out->{self::FIELD_PAYMENT} = $v;
        }
        if (null !== ($v = $this->getReserved())) {
            $out->{self::FIELD_RESERVED} = $v;
        }
        if (null !== ($v = $this->getForm())) {
            $out->{self::FIELD_FORM} = $v;
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            $out->{self::FIELD_PROCESS_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROCESS_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            $out->{self::FIELD_COMMUNICATION_REQUEST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMMUNICATION_REQUEST}[] = $v;
            }
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