<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRDecimalPrimitive;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A provider issued list of professional services and products which have been
 * provided, or are to be provided, to a patient which is sent to an insurer for
 * reimbursement.
 *
 * Class FHIRClaimItem
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_TRACE_NUMBER = 'traceNumber';
    const FIELD_CARE_TEAM_SEQUENCE = 'careTeamSequence';
    const FIELD_CARE_TEAM_SEQUENCE_EXT = '_careTeamSequence';
    const FIELD_DIAGNOSIS_SEQUENCE = 'diagnosisSequence';
    const FIELD_DIAGNOSIS_SEQUENCE_EXT = '_diagnosisSequence';
    const FIELD_PROCEDURE_SEQUENCE = 'procedureSequence';
    const FIELD_PROCEDURE_SEQUENCE_EXT = '_procedureSequence';
    const FIELD_INFORMATION_SEQUENCE = 'informationSequence';
    const FIELD_INFORMATION_SEQUENCE_EXT = '_informationSequence';
    const FIELD_REVENUE = 'revenue';
    const FIELD_CATEGORY = 'category';
    const FIELD_PRODUCT_OR_SERVICE = 'productOrService';
    const FIELD_PRODUCT_OR_SERVICE_END = 'productOrServiceEnd';
    const FIELD_REQUEST = 'request';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_PROGRAM_CODE = 'programCode';
    const FIELD_SERVICED_DATE = 'servicedDate';
    const FIELD_SERVICED_DATE_EXT = '_servicedDate';
    const FIELD_SERVICED_PERIOD = 'servicedPeriod';
    const FIELD_LOCATION_CODEABLE_CONCEPT = 'locationCodeableConcept';
    const FIELD_LOCATION_ADDRESS = 'locationAddress';
    const FIELD_LOCATION_REFERENCE = 'locationReference';
    const FIELD_PATIENT_PAID = 'patientPaid';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_UNIT_PRICE = 'unitPrice';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_TAX = 'tax';
    const FIELD_NET = 'net';
    const FIELD_UDI = 'udi';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_DETAIL = 'detail';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify item entries.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $sequence = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $traceNumber = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $careTeamSequence = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $diagnosisSequence = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $procedureSequence = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $informationSequence = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $revenue = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $category = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related item
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item. This element may be the start of a range of .productOrService
     * codes used in conjunction with .productOrServiceEnd or it may be a solo element
     * where .productOrServiceEnd is not used.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $productOrService = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the end of a range of product, service, drug or other billing
     * codes for the item. This element is not used when the .productOrService is a
     * group code. This value may only be present when a .productOfService code has
     * been provided to convey the start of the range. Typically this value may be used
     * only with preauthorizations and not with claims.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $productOrServiceEnd = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $request = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $modifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $programCode = [];
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $servicedDate = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $servicedPeriod = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $locationCodeableConcept = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress
     */
    protected null|FHIRAddress $locationAddress = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $locationReference = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount paid by the patient, in total at the claim claim level or
     * specifically for the item and detail level, to the provider for goods and
     * services.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    protected null|FHIRMoney $patientPaid = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    protected null|FHIRMoney $unitPrice = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $factor = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total of taxes applicable for this product or service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    protected null|FHIRMoney $tax = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the group (if a grouper) or the line item. Net =
     * unit price * quantity * factor.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    protected null|FHIRMoney $net = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $udi = [];
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Physical location where the service is performed or applies.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimBodySite[]
     */
    protected null|array $bodySite = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $encounter = [];
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[]
     */
    protected null|array $detail = [];

    /**
     * Validation map for fields in type Claim.Item
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRClaimItem Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_TRACE_NUMBER])) {
            if (is_array($data[self::FIELD_TRACE_NUMBER])) {
                foreach($data[self::FIELD_TRACE_NUMBER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addTraceNumber($v);
                    } else {
                        $this->addTraceNumber(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_TRACE_NUMBER] instanceof FHIRIdentifier) {
                $this->addTraceNumber($data[self::FIELD_TRACE_NUMBER]);
            } else {
                $this->addTraceNumber(new FHIRIdentifier($data[self::FIELD_TRACE_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_CARE_TEAM_SEQUENCE]) || isset($data[self::FIELD_CARE_TEAM_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_CARE_TEAM_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_CARE_TEAM_SEQUENCE_EXT]) && is_array($data[self::FIELD_CARE_TEAM_SEQUENCE_EXT])) ? $data[self::FIELD_CARE_TEAM_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addCareTeamSequence($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addCareTeamSequence($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addCareTeamSequence(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addCareTeamSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addCareTeamSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addCareTeamSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addCareTeamSequence(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS_SEQUENCE]) || isset($data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_DIAGNOSIS_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT]) && is_array($data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT])) ? $data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addDiagnosisSequence($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addDiagnosisSequence($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDiagnosisSequence(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addDiagnosisSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDiagnosisSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addDiagnosisSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDiagnosisSequence(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PROCEDURE_SEQUENCE]) || isset($data[self::FIELD_PROCEDURE_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_PROCEDURE_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_PROCEDURE_SEQUENCE_EXT]) && is_array($data[self::FIELD_PROCEDURE_SEQUENCE_EXT])) ? $data[self::FIELD_PROCEDURE_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addProcedureSequence($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addProcedureSequence($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProcedureSequence(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addProcedureSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProcedureSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addProcedureSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProcedureSequence(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_INFORMATION_SEQUENCE]) || isset($data[self::FIELD_INFORMATION_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_INFORMATION_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_INFORMATION_SEQUENCE_EXT]) && is_array($data[self::FIELD_INFORMATION_SEQUENCE_EXT])) ? $data[self::FIELD_INFORMATION_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addInformationSequence($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addInformationSequence($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInformationSequence(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addInformationSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInformationSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addInformationSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInformationSequence(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REVENUE])) {
            if ($data[self::FIELD_REVENUE] instanceof FHIRCodeableConcept) {
                $this->setRevenue($data[self::FIELD_REVENUE]);
            } else {
                $this->setRevenue(new FHIRCodeableConcept($data[self::FIELD_REVENUE]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_OR_SERVICE])) {
            if ($data[self::FIELD_PRODUCT_OR_SERVICE] instanceof FHIRCodeableConcept) {
                $this->setProductOrService($data[self::FIELD_PRODUCT_OR_SERVICE]);
            } else {
                $this->setProductOrService(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_OR_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_OR_SERVICE_END])) {
            if ($data[self::FIELD_PRODUCT_OR_SERVICE_END] instanceof FHIRCodeableConcept) {
                $this->setProductOrServiceEnd($data[self::FIELD_PRODUCT_OR_SERVICE_END]);
            } else {
                $this->setProductOrServiceEnd(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_OR_SERVICE_END]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if (is_array($data[self::FIELD_REQUEST])) {
                foreach($data[self::FIELD_REQUEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRequest($v);
                    } else {
                        $this->addRequest(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->addRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->addRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_MODIFIER])) {
            if (is_array($data[self::FIELD_MODIFIER])) {
                foreach($data[self::FIELD_MODIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addModifier($v);
                    } else {
                        $this->addModifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_MODIFIER] instanceof FHIRCodeableConcept) {
                $this->addModifier($data[self::FIELD_MODIFIER]);
            } else {
                $this->addModifier(new FHIRCodeableConcept($data[self::FIELD_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_PROGRAM_CODE])) {
            if (is_array($data[self::FIELD_PROGRAM_CODE])) {
                foreach($data[self::FIELD_PROGRAM_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProgramCode($v);
                    } else {
                        $this->addProgramCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PROGRAM_CODE] instanceof FHIRCodeableConcept) {
                $this->addProgramCode($data[self::FIELD_PROGRAM_CODE]);
            } else {
                $this->addProgramCode(new FHIRCodeableConcept($data[self::FIELD_PROGRAM_CODE]));
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
        if (isset($data[self::FIELD_LOCATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_LOCATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setLocationCodeableConcept($data[self::FIELD_LOCATION_CODEABLE_CONCEPT]);
            } else {
                $this->setLocationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_LOCATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_LOCATION_ADDRESS])) {
            if ($data[self::FIELD_LOCATION_ADDRESS] instanceof FHIRAddress) {
                $this->setLocationAddress($data[self::FIELD_LOCATION_ADDRESS]);
            } else {
                $this->setLocationAddress(new FHIRAddress($data[self::FIELD_LOCATION_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_LOCATION_REFERENCE])) {
            if ($data[self::FIELD_LOCATION_REFERENCE] instanceof FHIRReference) {
                $this->setLocationReference($data[self::FIELD_LOCATION_REFERENCE]);
            } else {
                $this->setLocationReference(new FHIRReference($data[self::FIELD_LOCATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_PAID])) {
            if ($data[self::FIELD_PATIENT_PAID] instanceof FHIRMoney) {
                $this->setPatientPaid($data[self::FIELD_PATIENT_PAID]);
            } else {
                $this->setPatientPaid(new FHIRMoney($data[self::FIELD_PATIENT_PAID]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_UNIT_PRICE])) {
            if ($data[self::FIELD_UNIT_PRICE] instanceof FHIRMoney) {
                $this->setUnitPrice($data[self::FIELD_UNIT_PRICE]);
            } else {
                $this->setUnitPrice(new FHIRMoney($data[self::FIELD_UNIT_PRICE]));
            }
        }
        if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
            $value = $data[self::FIELD_FACTOR] ?? null;
            $ext = (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) ? $data[self::FIELD_FACTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_TAX])) {
            if ($data[self::FIELD_TAX] instanceof FHIRMoney) {
                $this->setTax($data[self::FIELD_TAX]);
            } else {
                $this->setTax(new FHIRMoney($data[self::FIELD_TAX]));
            }
        }
        if (isset($data[self::FIELD_NET])) {
            if ($data[self::FIELD_NET] instanceof FHIRMoney) {
                $this->setNet($data[self::FIELD_NET]);
            } else {
                $this->setNet(new FHIRMoney($data[self::FIELD_NET]));
            }
        }
        if (isset($data[self::FIELD_UDI])) {
            if (is_array($data[self::FIELD_UDI])) {
                foreach($data[self::FIELD_UDI] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addUdi($v);
                    } else {
                        $this->addUdi(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_UDI] instanceof FHIRReference) {
                $this->addUdi($data[self::FIELD_UDI]);
            } else {
                $this->addUdi(new FHIRReference($data[self::FIELD_UDI]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimBodySite) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRClaimBodySite($v));
                    }
                }
            } elseif ($data[self::FIELD_BODY_SITE] instanceof FHIRClaimBodySite) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRClaimBodySite($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if (is_array($data[self::FIELD_ENCOUNTER])) {
                foreach($data[self::FIELD_ENCOUNTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEncounter($v);
                    } else {
                        $this->addEncounter(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->addEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->addEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimDetail) {
                        $this->addDetail($v);
                    } else {
                        $this->addDetail(new FHIRClaimDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_DETAIL] instanceof FHIRClaimDetail) {
                $this->addDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->addDetail(new FHIRClaimDetail($data[self::FIELD_DETAIL]));
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify item entries.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getSequence(): null|FHIRPositiveInt
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify item entries.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $sequence
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getTraceNumber(): null|array
    {
        return $this->traceNumber;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $traceNumber
     * @return static
     */
    public function addTraceNumber(null|FHIRIdentifier $traceNumber = null): self
    {
        if (null === $traceNumber) {
            $traceNumber = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $traceNumber
     * @return static
     */
    public function setTraceNumber(array $traceNumber = []): self
    {
        if ([] !== $this->traceNumber) {
            $this->_trackValuesRemoved(count($this->traceNumber));
            $this->traceNumber = [];
        }
        if ([] === $traceNumber) {
            return $this;
        }
        foreach($traceNumber as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addTraceNumber($v);
            } else {
                $this->addTraceNumber(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getCareTeamSequence(): null|array
    {
        return $this->careTeamSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $careTeamSequence
     * @return static
     */
    public function addCareTeamSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $careTeamSequence = null): self
    {
        if (null !== $careTeamSequence && !($careTeamSequence instanceof FHIRPositiveInt)) {
            $careTeamSequence = new FHIRPositiveInt($careTeamSequence);
        }
        $this->_trackValueAdded();
        $this->careTeamSequence[] = $careTeamSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $careTeamSequence
     * @return static
     */
    public function setCareTeamSequence(array $careTeamSequence = []): self
    {
        if ([] !== $this->careTeamSequence) {
            $this->_trackValuesRemoved(count($this->careTeamSequence));
            $this->careTeamSequence = [];
        }
        if ([] === $careTeamSequence) {
            return $this;
        }
        foreach($careTeamSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addCareTeamSequence($v);
            } else {
                $this->addCareTeamSequence(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getDiagnosisSequence(): null|array
    {
        return $this->diagnosisSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $diagnosisSequence
     * @return static
     */
    public function addDiagnosisSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $diagnosisSequence = null): self
    {
        if (null !== $diagnosisSequence && !($diagnosisSequence instanceof FHIRPositiveInt)) {
            $diagnosisSequence = new FHIRPositiveInt($diagnosisSequence);
        }
        $this->_trackValueAdded();
        $this->diagnosisSequence[] = $diagnosisSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $diagnosisSequence
     * @return static
     */
    public function setDiagnosisSequence(array $diagnosisSequence = []): self
    {
        if ([] !== $this->diagnosisSequence) {
            $this->_trackValuesRemoved(count($this->diagnosisSequence));
            $this->diagnosisSequence = [];
        }
        if ([] === $diagnosisSequence) {
            return $this;
        }
        foreach($diagnosisSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addDiagnosisSequence($v);
            } else {
                $this->addDiagnosisSequence(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getProcedureSequence(): null|array
    {
        return $this->procedureSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $procedureSequence
     * @return static
     */
    public function addProcedureSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $procedureSequence = null): self
    {
        if (null !== $procedureSequence && !($procedureSequence instanceof FHIRPositiveInt)) {
            $procedureSequence = new FHIRPositiveInt($procedureSequence);
        }
        $this->_trackValueAdded();
        $this->procedureSequence[] = $procedureSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $procedureSequence
     * @return static
     */
    public function setProcedureSequence(array $procedureSequence = []): self
    {
        if ([] !== $this->procedureSequence) {
            $this->_trackValuesRemoved(count($this->procedureSequence));
            $this->procedureSequence = [];
        }
        if ([] === $procedureSequence) {
            return $this;
        }
        foreach($procedureSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addProcedureSequence($v);
            } else {
                $this->addProcedureSequence(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getInformationSequence(): null|array
    {
        return $this->informationSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $informationSequence
     * @return static
     */
    public function addInformationSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $informationSequence = null): self
    {
        if (null !== $informationSequence && !($informationSequence instanceof FHIRPositiveInt)) {
            $informationSequence = new FHIRPositiveInt($informationSequence);
        }
        $this->_trackValueAdded();
        $this->informationSequence[] = $informationSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $informationSequence
     * @return static
     */
    public function setInformationSequence(array $informationSequence = []): self
    {
        if ([] !== $this->informationSequence) {
            $this->_trackValuesRemoved(count($this->informationSequence));
            $this->informationSequence = [];
        }
        if ([] === $informationSequence) {
            return $this;
        }
        foreach($informationSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addInformationSequence($v);
            } else {
                $this->addInformationSequence(new FHIRPositiveInt($v));
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
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRevenue(): null|FHIRCodeableConcept
    {
        return $this->revenue;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $revenue
     * @return static
     */
    public function setRevenue(null|FHIRCodeableConcept $revenue = null): self
    {
        if (null === $revenue) {
            $revenue = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->revenue, $revenue);
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related item
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item. This element may be the start of a range of .productOrService
     * codes used in conjunction with .productOrServiceEnd or it may be a solo element
     * where .productOrServiceEnd is not used.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProductOrService(): null|FHIRCodeableConcept
    {
        return $this->productOrService;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related item
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item. This element may be the start of a range of .productOrService
     * codes used in conjunction with .productOrServiceEnd or it may be a solo element
     * where .productOrServiceEnd is not used.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrService
     * @return static
     */
    public function setProductOrService(null|FHIRCodeableConcept $productOrService = null): self
    {
        if (null === $productOrService) {
            $productOrService = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->productOrService, $productOrService);
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the end of a range of product, service, drug or other billing
     * codes for the item. This element is not used when the .productOrService is a
     * group code. This value may only be present when a .productOfService code has
     * been provided to convey the start of the range. Typically this value may be used
     * only with preauthorizations and not with claims.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProductOrServiceEnd(): null|FHIRCodeableConcept
    {
        return $this->productOrServiceEnd;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the end of a range of product, service, drug or other billing
     * codes for the item. This element is not used when the .productOrService is a
     * group code. This value may only be present when a .productOfService code has
     * been provided to convey the start of the range. Typically this value may be used
     * only with preauthorizations and not with claims.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrServiceEnd
     * @return static
     */
    public function setProductOrServiceEnd(null|FHIRCodeableConcept $productOrServiceEnd = null): self
    {
        if (null === $productOrServiceEnd) {
            $productOrServiceEnd = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->productOrServiceEnd, $productOrServiceEnd);
        $this->productOrServiceEnd = $productOrServiceEnd;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getRequest(): null|array
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $request
     * @return static
     */
    public function addRequest(null|FHIRReference $request = null): self
    {
        if (null === $request) {
            $request = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->request[] = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $request
     * @return static
     */
    public function setRequest(array $request = []): self
    {
        if ([] !== $this->request) {
            $this->_trackValuesRemoved(count($this->request));
            $this->request = [];
        }
        if ([] === $request) {
            return $this;
        }
        foreach($request as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRequest($v);
            } else {
                $this->addRequest(new FHIRReference($v));
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
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getModifier(): null|array
    {
        return $this->modifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $modifier
     * @return static
     */
    public function addModifier(null|FHIRCodeableConcept $modifier = null): self
    {
        if (null === $modifier) {
            $modifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $modifier
     * @return static
     */
    public function setModifier(array $modifier = []): self
    {
        if ([] !== $this->modifier) {
            $this->_trackValuesRemoved(count($this->modifier));
            $this->modifier = [];
        }
        if ([] === $modifier) {
            return $this;
        }
        foreach($modifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addModifier($v);
            } else {
                $this->addModifier(new FHIRCodeableConcept($v));
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
     * Identifies the program under which this may be recovered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getProgramCode(): null|array
    {
        return $this->programCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $programCode
     * @return static
     */
    public function addProgramCode(null|FHIRCodeableConcept $programCode = null): self
    {
        if (null === $programCode) {
            $programCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $programCode
     * @return static
     */
    public function setProgramCode(array $programCode = []): self
    {
        if ([] !== $this->programCode) {
            $this->_trackValuesRemoved(count($this->programCode));
            $this->programCode = [];
        }
        if ([] === $programCode) {
            return $this;
        }
        foreach($programCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProgramCode($v);
            } else {
                $this->addProgramCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getServicedDate(): null|FHIRDate
    {
        return $this->servicedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $servicedDate
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
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
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
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $servicedPeriod
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLocationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->locationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $locationCodeableConcept
     * @return static
     */
    public function setLocationCodeableConcept(null|FHIRCodeableConcept $locationCodeableConcept = null): self
    {
        if (null === $locationCodeableConcept) {
            $locationCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->locationCodeableConcept, $locationCodeableConcept);
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress
     */
    public function getLocationAddress(): null|FHIRAddress
    {
        return $this->locationAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $locationAddress
     * @return static
     */
    public function setLocationAddress(null|FHIRAddress $locationAddress = null): self
    {
        if (null === $locationAddress) {
            $locationAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->locationAddress, $locationAddress);
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocationReference(): null|FHIRReference
    {
        return $this->locationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $locationReference
     * @return static
     */
    public function setLocationReference(null|FHIRReference $locationReference = null): self
    {
        if (null === $locationReference) {
            $locationReference = new FHIRReference();
        }
        $this->_trackValueSet($this->locationReference, $locationReference);
        $this->locationReference = $locationReference;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount paid by the patient, in total at the claim claim level or
     * specifically for the item and detail level, to the provider for goods and
     * services.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getPatientPaid(): null|FHIRMoney
    {
        return $this->patientPaid;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount paid by the patient, in total at the claim claim level or
     * specifically for the item and detail level, to the provider for goods and
     * services.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $patientPaid
     * @return static
     */
    public function setPatientPaid(null|FHIRMoney $patientPaid = null): self
    {
        if (null === $patientPaid) {
            $patientPaid = new FHIRMoney();
        }
        $this->_trackValueSet($this->patientPaid, $patientPaid);
        $this->patientPaid = $patientPaid;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity = null): self
    {
        if (null === $quantity) {
            $quantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getUnitPrice(): null|FHIRMoney
    {
        return $this->unitPrice;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $unitPrice
     * @return static
     */
    public function setUnitPrice(null|FHIRMoney $unitPrice = null): self
    {
        if (null === $unitPrice) {
            $unitPrice = new FHIRMoney();
        }
        $this->_trackValueSet($this->unitPrice, $unitPrice);
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor = null): self
    {
        if (null !== $factor && !($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal($factor);
        }
        $this->_trackValueSet($this->factor, $factor);
        $this->factor = $factor;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total of taxes applicable for this product or service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getTax(): null|FHIRMoney
    {
        return $this->tax;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total of taxes applicable for this product or service.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $tax
     * @return static
     */
    public function setTax(null|FHIRMoney $tax = null): self
    {
        if (null === $tax) {
            $tax = new FHIRMoney();
        }
        $this->_trackValueSet($this->tax, $tax);
        $this->tax = $tax;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the group (if a grouper) or the line item. Net =
     * unit price * quantity * factor.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getNet(): null|FHIRMoney
    {
        return $this->net;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the group (if a grouper) or the line item. Net =
     * unit price * quantity * factor.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $net
     * @return static
     */
    public function setNet(null|FHIRMoney $net = null): self
    {
        if (null === $net) {
            $net = new FHIRMoney();
        }
        $this->_trackValueSet($this->net, $net);
        $this->net = $net;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getUdi(): null|array
    {
        return $this->udi;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $udi
     * @return static
     */
    public function addUdi(null|FHIRReference $udi = null): self
    {
        if (null === $udi) {
            $udi = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $udi
     * @return static
     */
    public function setUdi(array $udi = []): self
    {
        if ([] !== $this->udi) {
            $this->_trackValuesRemoved(count($this->udi));
            $this->udi = [];
        }
        if ([] === $udi) {
            return $this;
        }
        foreach($udi as $v) {
            if ($v instanceof FHIRReference) {
                $this->addUdi($v);
            } else {
                $this->addUdi(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Physical location where the service is performed or applies.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimBodySite[]
     */
    public function getBodySite(): null|array
    {
        return $this->bodySite;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Physical location where the service is performed or applies.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimBodySite $bodySite
     * @return static
     */
    public function addBodySite(null|FHIRClaimBodySite $bodySite = null): self
    {
        if (null === $bodySite) {
            $bodySite = new FHIRClaimBodySite();
        }
        $this->_trackValueAdded();
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Physical location where the service is performed or applies.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimBodySite[] $bodySite
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
            if ($v instanceof FHIRClaimBodySite) {
                $this->addBodySite($v);
            } else {
                $this->addBodySite(new FHIRClaimBodySite($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getEncounter(): null|array
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function addEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $encounter
     * @return static
     */
    public function setEncounter(array $encounter = []): self
    {
        if ([] !== $this->encounter) {
            $this->_trackValuesRemoved(count($this->encounter));
            $this->encounter = [];
        }
        if ([] === $encounter) {
            return $this;
        }
        foreach($encounter as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEncounter($v);
            } else {
                $this->addEncounter(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[]
     */
    public function getDetail(): null|array
    {
        return $this->detail;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail $detail
     * @return static
     */
    public function addDetail(null|FHIRClaimDetail $detail = null): self
    {
        if (null === $detail) {
            $detail = new FHIRClaimDetail();
        }
        $this->_trackValueAdded();
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[] $detail
     * @return static
     */
    public function setDetail(array $detail = []): self
    {
        if ([] !== $this->detail) {
            $this->_trackValuesRemoved(count($this->detail));
            $this->detail = [];
        }
        if ([] === $detail) {
            return $this;
        }
        foreach($detail as $v) {
            if ($v instanceof FHIRClaimDetail) {
                $this->addDetail($v);
            } else {
                $this->addDetail(new FHIRClaimDetail($v));
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
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTraceNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TRACE_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCareTeamSequence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CARE_TEAM_SEQUENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDiagnosisSequence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DIAGNOSIS_SEQUENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProcedureSequence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCEDURE_SEQUENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInformationSequence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INFORMATION_SEQUENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRevenue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REVENUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductOrService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_OR_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductOrServiceEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_OR_SERVICE_END] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUEST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProgramCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGRAM_CODE, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getLocationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocationAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatientPaid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT_PAID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_PRICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUdi())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UDI, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getEncounter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENCOUNTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRACE_NUMBER])) {
            $v = $this->getTraceNumber();
            foreach($validationRules[self::FIELD_TRACE_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_TRACE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRACE_NUMBER])) {
                        $errs[self::FIELD_TRACE_NUMBER] = [];
                    }
                    $errs[self::FIELD_TRACE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARE_TEAM_SEQUENCE])) {
            $v = $this->getCareTeamSequence();
            foreach($validationRules[self::FIELD_CARE_TEAM_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_CARE_TEAM_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARE_TEAM_SEQUENCE])) {
                        $errs[self::FIELD_CARE_TEAM_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_CARE_TEAM_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS_SEQUENCE])) {
            $v = $this->getDiagnosisSequence();
            foreach($validationRules[self::FIELD_DIAGNOSIS_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_DIAGNOSIS_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS_SEQUENCE])) {
                        $errs[self::FIELD_DIAGNOSIS_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCEDURE_SEQUENCE])) {
            $v = $this->getProcedureSequence();
            foreach($validationRules[self::FIELD_PROCEDURE_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PROCEDURE_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCEDURE_SEQUENCE])) {
                        $errs[self::FIELD_PROCEDURE_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_PROCEDURE_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION_SEQUENCE])) {
            $v = $this->getInformationSequence();
            foreach($validationRules[self::FIELD_INFORMATION_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_INFORMATION_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION_SEQUENCE])) {
                        $errs[self::FIELD_INFORMATION_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_INFORMATION_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REVENUE])) {
            $v = $this->getRevenue();
            foreach($validationRules[self::FIELD_REVENUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_REVENUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REVENUE])) {
                        $errs[self::FIELD_REVENUE] = [];
                    }
                    $errs[self::FIELD_REVENUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_OR_SERVICE])) {
            $v = $this->getProductOrService();
            foreach($validationRules[self::FIELD_PRODUCT_OR_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PRODUCT_OR_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_OR_SERVICE])) {
                        $errs[self::FIELD_PRODUCT_OR_SERVICE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_OR_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_OR_SERVICE_END])) {
            $v = $this->getProductOrServiceEnd();
            foreach($validationRules[self::FIELD_PRODUCT_OR_SERVICE_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PRODUCT_OR_SERVICE_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_OR_SERVICE_END])) {
                        $errs[self::FIELD_PRODUCT_OR_SERVICE_END] = [];
                    }
                    $errs[self::FIELD_PRODUCT_OR_SERVICE_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGRAM_CODE])) {
            $v = $this->getProgramCode();
            foreach($validationRules[self::FIELD_PROGRAM_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PROGRAM_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGRAM_CODE])) {
                        $errs[self::FIELD_PROGRAM_CODE] = [];
                    }
                    $errs[self::FIELD_PROGRAM_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICED_DATE])) {
            $v = $this->getServicedDate();
            foreach($validationRules[self::FIELD_SERVICED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SERVICED_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SERVICED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICED_PERIOD])) {
                        $errs[self::FIELD_SERVICED_PERIOD] = [];
                    }
                    $errs[self::FIELD_SERVICED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION_CODEABLE_CONCEPT])) {
            $v = $this->getLocationCodeableConcept();
            foreach($validationRules[self::FIELD_LOCATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_LOCATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_LOCATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_LOCATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION_ADDRESS])) {
            $v = $this->getLocationAddress();
            foreach($validationRules[self::FIELD_LOCATION_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_LOCATION_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION_ADDRESS])) {
                        $errs[self::FIELD_LOCATION_ADDRESS] = [];
                    }
                    $errs[self::FIELD_LOCATION_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION_REFERENCE])) {
            $v = $this->getLocationReference();
            foreach($validationRules[self::FIELD_LOCATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_LOCATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION_REFERENCE])) {
                        $errs[self::FIELD_LOCATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_LOCATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_PAID])) {
            $v = $this->getPatientPaid();
            foreach($validationRules[self::FIELD_PATIENT_PAID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PATIENT_PAID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_PAID])) {
                        $errs[self::FIELD_PATIENT_PAID] = [];
                    }
                    $errs[self::FIELD_PATIENT_PAID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_PRICE])) {
            $v = $this->getUnitPrice();
            foreach($validationRules[self::FIELD_UNIT_PRICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_UNIT_PRICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_PRICE])) {
                        $errs[self::FIELD_UNIT_PRICE] = [];
                    }
                    $errs[self::FIELD_UNIT_PRICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TAX])) {
            $v = $this->getTax();
            foreach($validationRules[self::FIELD_TAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_TAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TAX])) {
                        $errs[self::FIELD_TAX] = [];
                    }
                    $errs[self::FIELD_TAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NET])) {
            $v = $this->getNet();
            foreach($validationRules[self::FIELD_NET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_NET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NET])) {
                        $errs[self::FIELD_NET] = [];
                    }
                    $errs[self::FIELD_NET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UDI])) {
            $v = $this->getUdi();
            foreach($validationRules[self::FIELD_UDI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_UDI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UDI])) {
                        $errs[self::FIELD_UDI] = [];
                    }
                    $errs[self::FIELD_UDI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
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
        } else if (!($type instanceof FHIRClaimItem)) {
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
            if (self::FIELD_SEQUENCE === $n->nodeName) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_TRACE_NUMBER === $n->nodeName) {
                $type->addTraceNumber(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_CARE_TEAM_SEQUENCE === $n->nodeName) {
                $type->addCareTeamSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_DIAGNOSIS_SEQUENCE === $n->nodeName) {
                $type->addDiagnosisSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_PROCEDURE_SEQUENCE === $n->nodeName) {
                $type->addProcedureSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_INFORMATION_SEQUENCE === $n->nodeName) {
                $type->addInformationSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_REVENUE === $n->nodeName) {
                $type->setRevenue(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCT_OR_SERVICE === $n->nodeName) {
                $type->setProductOrService(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCT_OR_SERVICE_END === $n->nodeName) {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST === $n->nodeName) {
                $type->addRequest(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER === $n->nodeName) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PROGRAM_CODE === $n->nodeName) {
                $type->addProgramCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICED_DATE === $n->nodeName) {
                $type->setServicedDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICED_PERIOD === $n->nodeName) {
                $type->setServicedPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setLocationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION_ADDRESS === $n->nodeName) {
                $type->setLocationAddress(FHIRAddress::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION_REFERENCE === $n->nodeName) {
                $type->setLocationReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT_PAID === $n->nodeName) {
                $type->setPatientPaid(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_UNIT_PRICE === $n->nodeName) {
                $type->setUnitPrice(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_FACTOR === $n->nodeName) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_TAX === $n->nodeName) {
                $type->setTax(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_NET === $n->nodeName) {
                $type->setNet(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_UDI === $n->nodeName) {
                $type->addUdi(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_BODY_SITE === $n->nodeName) {
                $type->addBodySite(FHIRClaimBodySite::xmlUnserialize($n));
            } elseif (self::FIELD_ENCOUNTER === $n->nodeName) {
                $type->addEncounter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL === $n->nodeName) {
                $type->addDetail(FHIRClaimDetail::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSequence($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CARE_TEAM_SEQUENCE);
        if (null !== $n) {
            $type->addCareTeamSequence($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DIAGNOSIS_SEQUENCE);
        if (null !== $n) {
            $type->addDiagnosisSequence($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PROCEDURE_SEQUENCE);
        if (null !== $n) {
            $type->addProcedureSequence($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INFORMATION_SEQUENCE);
        if (null !== $n) {
            $type->addInformationSequence($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_FACTOR);
        if (null !== $n) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFactor($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ClaimItem'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getTraceNumber())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TRACE_NUMBER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCareTeamSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CARE_TEAM_SEQUENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDiagnosisSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DIAGNOSIS_SEQUENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProcedureSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROCEDURE_SEQUENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getInformationSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INFORMATION_SEQUENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getRevenue())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REVENUE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProductOrService())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_OR_SERVICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProductOrServiceEnd())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_OR_SERVICE_END);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MODIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProgramCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROGRAM_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if (null !== ($v = $this->getLocationCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLocationAddress())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION_ADDRESS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLocationReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPatientPaid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT_PAID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UNIT_PRICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFactor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FACTOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTax())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TAX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNet())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NET);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getUdi())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_UDI);
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
        if ([] !== ($vs = $this->getEncounter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENCOUNTER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL);
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
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getTraceNumber())) {
            $out->{self::FIELD_TRACE_NUMBER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TRACE_NUMBER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCareTeamSequence())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_CARE_TEAM_SEQUENCE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CARE_TEAM_SEQUENCE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getDiagnosisSequence())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_DIAGNOSIS_SEQUENCE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIAGNOSIS_SEQUENCE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getProcedureSequence())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PROCEDURE_SEQUENCE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROCEDURE_SEQUENCE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getInformationSequence())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_INFORMATION_SEQUENCE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INFORMATION_SEQUENCE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getRevenue())) {
            $out->{self::FIELD_REVENUE} = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getProductOrService())) {
            $out->{self::FIELD_PRODUCT_OR_SERVICE} = $v;
        }
        if (null !== ($v = $this->getProductOrServiceEnd())) {
            $out->{self::FIELD_PRODUCT_OR_SERVICE_END} = $v;
        }
        if ([] !== ($vs = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REQUEST}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            $out->{self::FIELD_MODIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MODIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProgramCode())) {
            $out->{self::FIELD_PROGRAM_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROGRAM_CODE}[] = $v;
            }
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
        if (null !== ($v = $this->getLocationCodeableConcept())) {
            $out->{self::FIELD_LOCATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getLocationAddress())) {
            $out->{self::FIELD_LOCATION_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getLocationReference())) {
            $out->{self::FIELD_LOCATION_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getPatientPaid())) {
            $out->{self::FIELD_PATIENT_PAID} = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $out->{self::FIELD_UNIT_PRICE} = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FACTOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FACTOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTax())) {
            $out->{self::FIELD_TAX} = $v;
        }
        if (null !== ($v = $this->getNet())) {
            $out->{self::FIELD_NET} = $v;
        }
        if ([] !== ($vs = $this->getUdi())) {
            $out->{self::FIELD_UDI} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_UDI}[] = $v;
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
        if ([] !== ($vs = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENCOUNTER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            $out->{self::FIELD_DETAIL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DETAIL}[] = $v;
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