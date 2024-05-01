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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRKind;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
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
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services. Includes both insurance and self-payment.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCoverage
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRCoverage extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_PAYMENT_BY = 'paymentBy';
    const FIELD_TYPE = 'type';
    const FIELD_POLICY_HOLDER = 'policyHolder';
    const FIELD_SUBSCRIBER = 'subscriber';
    const FIELD_SUBSCRIBER_ID = 'subscriberId';
    const FIELD_BENEFICIARY = 'beneficiary';
    const FIELD_DEPENDENT = 'dependent';
    const FIELD_DEPENDENT_EXT = '_dependent';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_PERIOD = 'period';
    const FIELD_INSURER = 'insurer';
    const FIELD_CLASS = 'class';
    const FIELD_ORDER = 'order';
    const FIELD_ORDER_EXT = '_order';
    const FIELD_NETWORK = 'network';
    const FIELD_NETWORK_EXT = '_network';
    const FIELD_COST_TO_BENEFICIARY = 'costToBeneficiary';
    const FIELD_SUBROGATION = 'subrogation';
    const FIELD_SUBROGATION_EXT = '_subrogation';
    const FIELD_CONTRACT = 'contract';
    const FIELD_INSURANCE_PLAN = 'insurancePlan';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier of the coverage as issued by the insurer.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected null|FHIRFinancialResourceStatusCodes $status = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRKind
     */
    protected null|FHIRKind $kind = null;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy[]
     */
    protected null|array $paymentBy = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $policyHolder = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subscriber = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $subscriberId = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $beneficiary = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A designator for a dependent under the coverage.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $dependent = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $relationship = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter, payor, insurance company.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $insurer = null;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[]
     */
    protected null|array $class = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care. For example; a patient might have (0) auto
     * insurance (1) their own health insurance and (2) spouse's health insurance. When
     * claiming for treatments which were not the result of an auto accident then only
     * coverages (1) and (2) above would be applicatble and would apply in the order
     * specified in parenthesis.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $order = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $network = null;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
     */
    protected null|array $costToBeneficiary = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $subrogation = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $contract = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurance plan details, benefits and costs, which constitute this insurance
     * coverage.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $insurancePlan = null;

    /**
     * Validation map for fields in type Coverage
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCoverage Constructor
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
        if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
            $value = $data[self::FIELD_KIND] ?? null;
            $ext = (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])) ? $data[self::FIELD_KIND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRKind) {
                    $this->setKind($value);
                } else if (is_array($value)) {
                    $this->setKind(new FHIRKind(array_merge($ext, $value)));
                } else {
                    $this->setKind(new FHIRKind([FHIRKind::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setKind(new FHIRKind($ext));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_BY])) {
            if (is_array($data[self::FIELD_PAYMENT_BY])) {
                foreach($data[self::FIELD_PAYMENT_BY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoveragePaymentBy) {
                        $this->addPaymentBy($v);
                    } else {
                        $this->addPaymentBy(new FHIRCoveragePaymentBy($v));
                    }
                }
            } elseif ($data[self::FIELD_PAYMENT_BY] instanceof FHIRCoveragePaymentBy) {
                $this->addPaymentBy($data[self::FIELD_PAYMENT_BY]);
            } else {
                $this->addPaymentBy(new FHIRCoveragePaymentBy($data[self::FIELD_PAYMENT_BY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_POLICY_HOLDER])) {
            if ($data[self::FIELD_POLICY_HOLDER] instanceof FHIRReference) {
                $this->setPolicyHolder($data[self::FIELD_POLICY_HOLDER]);
            } else {
                $this->setPolicyHolder(new FHIRReference($data[self::FIELD_POLICY_HOLDER]));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIBER])) {
            if ($data[self::FIELD_SUBSCRIBER] instanceof FHIRReference) {
                $this->setSubscriber($data[self::FIELD_SUBSCRIBER]);
            } else {
                $this->setSubscriber(new FHIRReference($data[self::FIELD_SUBSCRIBER]));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIBER_ID])) {
            if (is_array($data[self::FIELD_SUBSCRIBER_ID])) {
                foreach($data[self::FIELD_SUBSCRIBER_ID] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addSubscriberId($v);
                    } else {
                        $this->addSubscriberId(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBSCRIBER_ID] instanceof FHIRIdentifier) {
                $this->addSubscriberId($data[self::FIELD_SUBSCRIBER_ID]);
            } else {
                $this->addSubscriberId(new FHIRIdentifier($data[self::FIELD_SUBSCRIBER_ID]));
            }
        }
        if (isset($data[self::FIELD_BENEFICIARY])) {
            if ($data[self::FIELD_BENEFICIARY] instanceof FHIRReference) {
                $this->setBeneficiary($data[self::FIELD_BENEFICIARY]);
            } else {
                $this->setBeneficiary(new FHIRReference($data[self::FIELD_BENEFICIARY]));
            }
        }
        if (isset($data[self::FIELD_DEPENDENT]) || isset($data[self::FIELD_DEPENDENT_EXT])) {
            $value = $data[self::FIELD_DEPENDENT] ?? null;
            $ext = (isset($data[self::FIELD_DEPENDENT_EXT]) && is_array($data[self::FIELD_DEPENDENT_EXT])) ? $data[self::FIELD_DEPENDENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDependent($value);
                } else if (is_array($value)) {
                    $this->setDependent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDependent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDependent(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            if (is_array($data[self::FIELD_CLASS])) {
                foreach($data[self::FIELD_CLASS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoverageClass) {
                        $this->addClass($v);
                    } else {
                        $this->addClass(new FHIRCoverageClass($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASS] instanceof FHIRCoverageClass) {
                $this->addClass($data[self::FIELD_CLASS]);
            } else {
                $this->addClass(new FHIRCoverageClass($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_ORDER]) || isset($data[self::FIELD_ORDER_EXT])) {
            $value = $data[self::FIELD_ORDER] ?? null;
            $ext = (isset($data[self::FIELD_ORDER_EXT]) && is_array($data[self::FIELD_ORDER_EXT])) ? $data[self::FIELD_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setOrder($value);
                } else if (is_array($value)) {
                    $this->setOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOrder(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_NETWORK]) || isset($data[self::FIELD_NETWORK_EXT])) {
            $value = $data[self::FIELD_NETWORK] ?? null;
            $ext = (isset($data[self::FIELD_NETWORK_EXT]) && is_array($data[self::FIELD_NETWORK_EXT])) ? $data[self::FIELD_NETWORK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNetwork($value);
                } else if (is_array($value)) {
                    $this->setNetwork(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNetwork(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNetwork(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COST_TO_BENEFICIARY])) {
            if (is_array($data[self::FIELD_COST_TO_BENEFICIARY])) {
                foreach($data[self::FIELD_COST_TO_BENEFICIARY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoverageCostToBeneficiary) {
                        $this->addCostToBeneficiary($v);
                    } else {
                        $this->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($v));
                    }
                }
            } elseif ($data[self::FIELD_COST_TO_BENEFICIARY] instanceof FHIRCoverageCostToBeneficiary) {
                $this->addCostToBeneficiary($data[self::FIELD_COST_TO_BENEFICIARY]);
            } else {
                $this->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($data[self::FIELD_COST_TO_BENEFICIARY]));
            }
        }
        if (isset($data[self::FIELD_SUBROGATION]) || isset($data[self::FIELD_SUBROGATION_EXT])) {
            $value = $data[self::FIELD_SUBROGATION] ?? null;
            $ext = (isset($data[self::FIELD_SUBROGATION_EXT]) && is_array($data[self::FIELD_SUBROGATION_EXT])) ? $data[self::FIELD_SUBROGATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setSubrogation($value);
                } else if (is_array($value)) {
                    $this->setSubrogation(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setSubrogation(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubrogation(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONTRACT])) {
            if (is_array($data[self::FIELD_CONTRACT])) {
                foreach($data[self::FIELD_CONTRACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addContract($v);
                    } else {
                        $this->addContract(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRACT] instanceof FHIRReference) {
                $this->addContract($data[self::FIELD_CONTRACT]);
            } else {
                $this->addContract(new FHIRReference($data[self::FIELD_CONTRACT]));
            }
        }
        if (isset($data[self::FIELD_INSURANCE_PLAN])) {
            if ($data[self::FIELD_INSURANCE_PLAN] instanceof FHIRReference) {
                $this->setInsurancePlan($data[self::FIELD_INSURANCE_PLAN]);
            } else {
                $this->setInsurancePlan(new FHIRReference($data[self::FIELD_INSURANCE_PLAN]));
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
     * The identifier of the coverage as issued by the insurer.
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
     * The identifier of the coverage as issued by the insurer.
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
     * The identifier of the coverage as issued by the insurer.
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
     * The status of the resource instance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus(): null|FHIRFinancialResourceStatusCodes
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRKind
     */
    public function getKind(): null|FHIRKind
    {
        return $this->kind;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRKind $kind
     * @return static
     */
    public function setKind(null|FHIRKind $kind = null): self
    {
        if (null === $kind) {
            $kind = new FHIRKind();
        }
        $this->_trackValueSet($this->kind, $kind);
        $this->kind = $kind;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy[]
     */
    public function getPaymentBy(): null|array
    {
        return $this->paymentBy;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy $paymentBy
     * @return static
     */
    public function addPaymentBy(null|FHIRCoveragePaymentBy $paymentBy = null): self
    {
        if (null === $paymentBy) {
            $paymentBy = new FHIRCoveragePaymentBy();
        }
        $this->_trackValueAdded();
        $this->paymentBy[] = $paymentBy;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy[] $paymentBy
     * @return static
     */
    public function setPaymentBy(array $paymentBy = []): self
    {
        if ([] !== $this->paymentBy) {
            $this->_trackValuesRemoved(count($this->paymentBy));
            $this->paymentBy = [];
        }
        if ([] === $paymentBy) {
            return $this;
        }
        foreach($paymentBy as $v) {
            if ($v instanceof FHIRCoveragePaymentBy) {
                $this->addPaymentBy($v);
            } else {
                $this->addPaymentBy(new FHIRCoveragePaymentBy($v));
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
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPolicyHolder(): null|FHIRReference
    {
        return $this->policyHolder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $policyHolder
     * @return static
     */
    public function setPolicyHolder(null|FHIRReference $policyHolder = null): self
    {
        if (null === $policyHolder) {
            $policyHolder = new FHIRReference();
        }
        $this->_trackValueSet($this->policyHolder, $policyHolder);
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubscriber(): null|FHIRReference
    {
        return $this->subscriber;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subscriber
     * @return static
     */
    public function setSubscriber(null|FHIRReference $subscriber = null): self
    {
        if (null === $subscriber) {
            $subscriber = new FHIRReference();
        }
        $this->_trackValueSet($this->subscriber, $subscriber);
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getSubscriberId(): null|array
    {
        return $this->subscriberId;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $subscriberId
     * @return static
     */
    public function addSubscriberId(null|FHIRIdentifier $subscriberId = null): self
    {
        if (null === $subscriberId) {
            $subscriberId = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->subscriberId[] = $subscriberId;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $subscriberId
     * @return static
     */
    public function setSubscriberId(array $subscriberId = []): self
    {
        if ([] !== $this->subscriberId) {
            $this->_trackValuesRemoved(count($this->subscriberId));
            $this->subscriberId = [];
        }
        if ([] === $subscriberId) {
            return $this;
        }
        foreach($subscriberId as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addSubscriberId($v);
            } else {
                $this->addSubscriberId(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getBeneficiary(): null|FHIRReference
    {
        return $this->beneficiary;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $beneficiary
     * @return static
     */
    public function setBeneficiary(null|FHIRReference $beneficiary = null): self
    {
        if (null === $beneficiary) {
            $beneficiary = new FHIRReference();
        }
        $this->_trackValueSet($this->beneficiary, $beneficiary);
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A designator for a dependent under the coverage.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDependent(): null|FHIRString
    {
        return $this->dependent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A designator for a dependent under the coverage.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $dependent
     * @return static
     */
    public function setDependent(null|string|FHIRStringPrimitive|FHIRString $dependent = null): self
    {
        if (null !== $dependent && !($dependent instanceof FHIRString)) {
            $dependent = new FHIRString($dependent);
        }
        $this->_trackValueSet($this->dependent, $dependent);
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship = null): self
    {
        if (null === $relationship) {
            $relationship = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->relationship, $relationship);
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
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
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter, payor, insurance company.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * The program or plan underwriter, payor, insurance company.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurer
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
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[]
     */
    public function getClass(): null|array
    {
        return $this->class;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass $class
     * @return static
     */
    public function addClass(null|FHIRCoverageClass $class = null): self
    {
        if (null === $class) {
            $class = new FHIRCoverageClass();
        }
        $this->_trackValueAdded();
        $this->class[] = $class;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[] $class
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
            if ($v instanceof FHIRCoverageClass) {
                $this->addClass($v);
            } else {
                $this->addClass(new FHIRCoverageClass($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care. For example; a patient might have (0) auto
     * insurance (1) their own health insurance and (2) spouse's health insurance. When
     * claiming for treatments which were not the result of an auto accident then only
     * coverages (1) and (2) above would be applicatble and would apply in the order
     * specified in parenthesis.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getOrder(): null|FHIRPositiveInt
    {
        return $this->order;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care. For example; a patient might have (0) auto
     * insurance (1) their own health insurance and (2) spouse's health insurance. When
     * claiming for treatments which were not the result of an auto accident then only
     * coverages (1) and (2) above would be applicatble and would apply in the order
     * specified in parenthesis.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $order
     * @return static
     */
    public function setOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $order = null): self
    {
        if (null !== $order && !($order instanceof FHIRPositiveInt)) {
            $order = new FHIRPositiveInt($order);
        }
        $this->_trackValueSet($this->order, $order);
        $this->order = $order;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getNetwork(): null|FHIRString
    {
        return $this->network;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $network
     * @return static
     */
    public function setNetwork(null|string|FHIRStringPrimitive|FHIRString $network = null): self
    {
        if (null !== $network && !($network instanceof FHIRString)) {
            $network = new FHIRString($network);
        }
        $this->_trackValueSet($this->network, $network);
        $this->network = $network;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
     */
    public function getCostToBeneficiary(): null|array
    {
        return $this->costToBeneficiary;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary $costToBeneficiary
     * @return static
     */
    public function addCostToBeneficiary(null|FHIRCoverageCostToBeneficiary $costToBeneficiary = null): self
    {
        if (null === $costToBeneficiary) {
            $costToBeneficiary = new FHIRCoverageCostToBeneficiary();
        }
        $this->_trackValueAdded();
        $this->costToBeneficiary[] = $costToBeneficiary;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[] $costToBeneficiary
     * @return static
     */
    public function setCostToBeneficiary(array $costToBeneficiary = []): self
    {
        if ([] !== $this->costToBeneficiary) {
            $this->_trackValuesRemoved(count($this->costToBeneficiary));
            $this->costToBeneficiary = [];
        }
        if ([] === $costToBeneficiary) {
            return $this;
        }
        foreach($costToBeneficiary as $v) {
            if ($v instanceof FHIRCoverageCostToBeneficiary) {
                $this->addCostToBeneficiary($v);
            } else {
                $this->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSubrogation(): null|FHIRBoolean
    {
        return $this->subrogation;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $subrogation
     * @return static
     */
    public function setSubrogation(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $subrogation = null): self
    {
        if (null !== $subrogation && !($subrogation instanceof FHIRBoolean)) {
            $subrogation = new FHIRBoolean($subrogation);
        }
        $this->_trackValueSet($this->subrogation, $subrogation);
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getContract(): null|array
    {
        return $this->contract;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contract
     * @return static
     */
    public function addContract(null|FHIRReference $contract = null): self
    {
        if (null === $contract) {
            $contract = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $contract
     * @return static
     */
    public function setContract(array $contract = []): self
    {
        if ([] !== $this->contract) {
            $this->_trackValuesRemoved(count($this->contract));
            $this->contract = [];
        }
        if ([] === $contract) {
            return $this;
        }
        foreach($contract as $v) {
            if ($v instanceof FHIRReference) {
                $this->addContract($v);
            } else {
                $this->addContract(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurance plan details, benefits and costs, which constitute this insurance
     * coverage.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getInsurancePlan(): null|FHIRReference
    {
        return $this->insurancePlan;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurance plan details, benefits and costs, which constitute this insurance
     * coverage.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurancePlan
     * @return static
     */
    public function setInsurancePlan(null|FHIRReference $insurancePlan = null): self
    {
        if (null === $insurancePlan) {
            $insurancePlan = new FHIRReference();
        }
        $this->_trackValueSet($this->insurancePlan, $insurancePlan);
        $this->insurancePlan = $insurancePlan;
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
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPaymentBy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PAYMENT_BY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPolicyHolder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLICY_HOLDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubscriber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIBER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubscriberId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBSCRIBER_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBeneficiary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BENEFICIARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDependent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEPENDENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSURER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClass())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NETWORK] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCostToBeneficiary())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COST_TO_BENEFICIARY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubrogation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBROGATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContract())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInsurancePlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSURANCE_PLAN] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_BY])) {
            $v = $this->getPaymentBy();
            foreach($validationRules[self::FIELD_PAYMENT_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_PAYMENT_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_BY])) {
                        $errs[self::FIELD_PAYMENT_BY] = [];
                    }
                    $errs[self::FIELD_PAYMENT_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_HOLDER])) {
            $v = $this->getPolicyHolder();
            foreach($validationRules[self::FIELD_POLICY_HOLDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_POLICY_HOLDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_HOLDER])) {
                        $errs[self::FIELD_POLICY_HOLDER] = [];
                    }
                    $errs[self::FIELD_POLICY_HOLDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER])) {
            $v = $this->getSubscriber();
            foreach($validationRules[self::FIELD_SUBSCRIBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBSCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER])) {
                        $errs[self::FIELD_SUBSCRIBER] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER_ID])) {
            $v = $this->getSubscriberId();
            foreach($validationRules[self::FIELD_SUBSCRIBER_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBSCRIBER_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER_ID])) {
                        $errs[self::FIELD_SUBSCRIBER_ID] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BENEFICIARY])) {
            $v = $this->getBeneficiary();
            foreach($validationRules[self::FIELD_BENEFICIARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_BENEFICIARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFICIARY])) {
                        $errs[self::FIELD_BENEFICIARY] = [];
                    }
                    $errs[self::FIELD_BENEFICIARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDENT])) {
            $v = $this->getDependent();
            foreach($validationRules[self::FIELD_DEPENDENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_DEPENDENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDENT])) {
                        $errs[self::FIELD_DEPENDENT] = [];
                    }
                    $errs[self::FIELD_DEPENDENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURER])) {
            $v = $this->getInsurer();
            foreach($validationRules[self::FIELD_INSURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_INSURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURER])) {
                        $errs[self::FIELD_INSURER] = [];
                    }
                    $errs[self::FIELD_INSURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER])) {
            $v = $this->getOrder();
            foreach($validationRules[self::FIELD_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER])) {
                        $errs[self::FIELD_ORDER] = [];
                    }
                    $errs[self::FIELD_ORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST_TO_BENEFICIARY])) {
            $v = $this->getCostToBeneficiary();
            foreach($validationRules[self::FIELD_COST_TO_BENEFICIARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_COST_TO_BENEFICIARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST_TO_BENEFICIARY])) {
                        $errs[self::FIELD_COST_TO_BENEFICIARY] = [];
                    }
                    $errs[self::FIELD_COST_TO_BENEFICIARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBROGATION])) {
            $v = $this->getSubrogation();
            foreach($validationRules[self::FIELD_SUBROGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBROGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBROGATION])) {
                        $errs[self::FIELD_SUBROGATION] = [];
                    }
                    $errs[self::FIELD_SUBROGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRACT])) {
            $v = $this->getContract();
            foreach($validationRules[self::FIELD_CONTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_CONTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRACT])) {
                        $errs[self::FIELD_CONTRACT] = [];
                    }
                    $errs[self::FIELD_CONTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE_PLAN])) {
            $v = $this->getInsurancePlan();
            foreach($validationRules[self::FIELD_INSURANCE_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_INSURANCE_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE_PLAN])) {
                        $errs[self::FIELD_INSURANCE_PLAN] = [];
                    }
                    $errs[self::FIELD_INSURANCE_PLAN][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
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
        } else if (!($type instanceof FHIRCoverage)) {
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
            } elseif (self::FIELD_KIND === $n->nodeName) {
                $type->setKind(FHIRKind::xmlUnserialize($n));
            } elseif (self::FIELD_PAYMENT_BY === $n->nodeName) {
                $type->addPaymentBy(FHIRCoveragePaymentBy::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_POLICY_HOLDER === $n->nodeName) {
                $type->setPolicyHolder(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUBSCRIBER === $n->nodeName) {
                $type->setSubscriber(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUBSCRIBER_ID === $n->nodeName) {
                $type->addSubscriberId(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_BENEFICIARY === $n->nodeName) {
                $type->setBeneficiary(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DEPENDENT === $n->nodeName) {
                $type->setDependent(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RELATIONSHIP === $n->nodeName) {
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_INSURER === $n->nodeName) {
                $type->setInsurer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CLASS === $n->nodeName) {
                $type->addClass(FHIRCoverageClass::xmlUnserialize($n));
            } elseif (self::FIELD_ORDER === $n->nodeName) {
                $type->setOrder(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_NETWORK === $n->nodeName) {
                $type->setNetwork(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COST_TO_BENEFICIARY === $n->nodeName) {
                $type->addCostToBeneficiary(FHIRCoverageCostToBeneficiary::xmlUnserialize($n));
            } elseif (self::FIELD_SUBROGATION === $n->nodeName) {
                $type->setSubrogation(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRACT === $n->nodeName) {
                $type->addContract(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INSURANCE_PLAN === $n->nodeName) {
                $type->setInsurancePlan(FHIRReference::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DEPENDENT);
        if (null !== $n) {
            $pt = $type->getDependent();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDependent($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ORDER);
        if (null !== $n) {
            $pt = $type->getOrder();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOrder($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NETWORK);
        if (null !== $n) {
            $pt = $type->getNetwork();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNetwork($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUBROGATION);
        if (null !== $n) {
            $pt = $type->getSubrogation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubrogation($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Coverage'), $libxmlOpts);
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
        if (null !== ($v = $this->getKind())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_KIND);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPaymentBy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PAYMENT_BY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPolicyHolder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_POLICY_HOLDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubscriber())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBSCRIBER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubscriberId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUBSCRIBER_ID);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getBeneficiary())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BENEFICIARY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDependent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEPENDENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRelationship())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RELATIONSHIP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInsurer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSURER);
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
        if (null !== ($v = $this->getOrder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNetwork())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NETWORK);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCostToBeneficiary())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COST_TO_BENEFICIARY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getSubrogation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBROGATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContract())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTRACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getInsurancePlan())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSURANCE_PLAN);
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
        if (null !== ($v = $this->getKind())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_KIND} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRKind::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_KIND_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPaymentBy())) {
            $out->{self::FIELD_PAYMENT_BY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PAYMENT_BY}[] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getPolicyHolder())) {
            $out->{self::FIELD_POLICY_HOLDER} = $v;
        }
        if (null !== ($v = $this->getSubscriber())) {
            $out->{self::FIELD_SUBSCRIBER} = $v;
        }
        if ([] !== ($vs = $this->getSubscriberId())) {
            $out->{self::FIELD_SUBSCRIBER_ID} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUBSCRIBER_ID}[] = $v;
            }
        }
        if (null !== ($v = $this->getBeneficiary())) {
            $out->{self::FIELD_BENEFICIARY} = $v;
        }
        if (null !== ($v = $this->getDependent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEPENDENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEPENDENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $out->{self::FIELD_RELATIONSHIP} = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
        }
        if (null !== ($v = $this->getInsurer())) {
            $out->{self::FIELD_INSURER} = $v;
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
        if (null !== ($v = $this->getOrder())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ORDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORDER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NETWORK} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NETWORK_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCostToBeneficiary())) {
            $out->{self::FIELD_COST_TO_BENEFICIARY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COST_TO_BENEFICIARY}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubrogation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUBROGATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUBROGATION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getContract())) {
            $out->{self::FIELD_CONTRACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTRACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getInsurancePlan())) {
            $out->{self::FIELD_INSURANCE_PLAN} = $v;
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