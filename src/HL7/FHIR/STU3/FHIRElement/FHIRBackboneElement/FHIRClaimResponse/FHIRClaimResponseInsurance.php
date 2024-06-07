<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 08:28+0000
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

use HL7\FHIR\STU3\FHIRBooleanPrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRBoolean;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRPositiveIntPrimitive;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConfigKeyEnum;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlLocationEnum;
use HL7\FHIR\STU3\PHPFHIRXmlWriter;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseInsurance
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseInsurance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_FOCAL = 'focal';
    const FIELD_FOCAL_EXT = '_focal';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_BUSINESS_ARRANGEMENT = 'businessArrangement';
    const FIELD_BUSINESS_ARRANGEMENT_EXT = '_businessArrangement';
    const FIELD_PRE_AUTH_REF = 'preAuthRef';
    const FIELD_PRE_AUTH_REF_EXT = '_preAuthRef';
    const FIELD_CLAIM_RESPONSE = 'claimResponse';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line item.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $sequence = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instance number of the Coverage which is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $focal = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $coverage = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $businessArrangement = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $preAuthRef = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $claimResponse = null;

    /**
     * Validation map for fields in type ClaimResponse.Insurance
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRClaimResponseInsurance Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SEQUENCE, $data) || array_key_exists(self::FIELD_SEQUENCE_EXT, $data)) {
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
            } else {
                $this->setSequence(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_FOCAL, $data) || array_key_exists(self::FIELD_FOCAL_EXT, $data)) {
            $value = $data[self::FIELD_FOCAL] ?? null;
            $ext = (isset($data[self::FIELD_FOCAL_EXT]) && is_array($data[self::FIELD_FOCAL_EXT])) ? $data[self::FIELD_FOCAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFocal($value);
                } else if (is_array($value)) {
                    $this->setFocal(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFocal(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFocal(new FHIRBoolean($ext));
            } else {
                $this->setFocal(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_COVERAGE, $data)) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRReference($data[self::FIELD_COVERAGE]));
            }
        }
        if (array_key_exists(self::FIELD_BUSINESS_ARRANGEMENT, $data) || array_key_exists(self::FIELD_BUSINESS_ARRANGEMENT_EXT, $data)) {
            $value = $data[self::FIELD_BUSINESS_ARRANGEMENT] ?? null;
            $ext = (isset($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT]) && is_array($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT])) ? $data[self::FIELD_BUSINESS_ARRANGEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBusinessArrangement($value);
                } else if (is_array($value)) {
                    $this->setBusinessArrangement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBusinessArrangement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBusinessArrangement(new FHIRString($ext));
            } else {
                $this->setBusinessArrangement(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PRE_AUTH_REF, $data) || array_key_exists(self::FIELD_PRE_AUTH_REF_EXT, $data)) {
            $value = $data[self::FIELD_PRE_AUTH_REF] ?? null;
            $ext = (isset($data[self::FIELD_PRE_AUTH_REF_EXT]) && is_array($data[self::FIELD_PRE_AUTH_REF_EXT])) ? $data[self::FIELD_PRE_AUTH_REF_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addPreAuthRef($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addPreAuthRef($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPreAuthRef(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPreAuthRef(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPreAuthRef(new FHIRString($iext));
                }
            } else {
                $this->addPreAuthRef(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CLAIM_RESPONSE, $data)) {
            if ($data[self::FIELD_CLAIM_RESPONSE] instanceof FHIRReference) {
                $this->setClaimResponse($data[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $this->setClaimResponse(new FHIRReference($data[self::FIELD_CLAIM_RESPONSE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line item.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
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
     * A service line item.
     *
     * @param null|string|int|float|\HL7\FHIR\STU3\FHIRPositiveIntPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $sequence
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SEQUENCE])) {
            $this->_primitiveXmlLocations[self::FIELD_SEQUENCE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SEQUENCE][0] = $xmlLocation;
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instance number of the Coverage which is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getFocal(): null|FHIRBoolean
    {
        return $this->focal;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instance number of the Coverage which is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $focal
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFocal(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $focal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $focal && !($focal instanceof FHIRBoolean)) {
            $focal = new FHIRBoolean($focal);
        }
        $this->_trackValueSet($this->focal, $focal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FOCAL])) {
            $this->_primitiveXmlLocations[self::FIELD_FOCAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FOCAL][0] = $xmlLocation;
        $this->focal = $focal;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getCoverage(): null|FHIRReference
    {
        return $this->coverage;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $coverage
     * @return static
     */
    public function setCoverage(null|FHIRReference $coverage = null): self
    {
        if (null === $coverage) {
            $coverage = new FHIRReference();
        }
        $this->_trackValueSet($this->coverage, $coverage);
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getBusinessArrangement(): null|FHIRString
    {
        return $this->businessArrangement;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $businessArrangement
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setBusinessArrangement(null|string|FHIRStringPrimitive|FHIRString $businessArrangement = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $businessArrangement && !($businessArrangement instanceof FHIRString)) {
            $businessArrangement = new FHIRString($businessArrangement);
        }
        $this->_trackValueSet($this->businessArrangement, $businessArrangement);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_BUSINESS_ARRANGEMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_BUSINESS_ARRANGEMENT][0] = $xmlLocation;
        $this->businessArrangement = $businessArrangement;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef(): null|array
    {
        return $this->preAuthRef;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $preAuthRef
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addPreAuthRef(null|string|FHIRStringPrimitive|FHIRString $preAuthRef = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $preAuthRef && !($preAuthRef instanceof FHIRString)) {
            $preAuthRef = new FHIRString($preAuthRef);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PRE_AUTH_REF])) {
            $this->_primitiveXmlLocations[self::FIELD_PRE_AUTH_REF] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PRE_AUTH_REF][] = $xmlLocation;
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $preAuthRef
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPreAuthRef(array $preAuthRef = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_PRE_AUTH_REF]);
        if ([] !== $this->preAuthRef) {
            $this->_trackValuesRemoved(count($this->preAuthRef));
            $this->preAuthRef = [];
        }
        if ([] === $preAuthRef) {
            return $this;
        }
        foreach($preAuthRef as $v) {
            if ($v instanceof FHIRString) {
                $this->addPreAuthRef($v, $xmlLocation);
            } else {
                $this->addPreAuthRef(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getClaimResponse(): null|FHIRReference
    {
        return $this->claimResponse;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $claimResponse
     * @return static
     */
    public function setClaimResponse(null|FHIRReference $claimResponse = null): self
    {
        if (null === $claimResponse) {
            $claimResponse = new FHIRReference();
        }
        $this->_trackValueSet($this->claimResponse, $claimResponse);
        $this->claimResponse = $claimResponse;
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
        if (null !== ($v = $this->getFocal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBusinessArrangement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BUSINESS_ARRANGEMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRE_AUTH_REF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getClaimResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLAIM_RESPONSE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCAL])) {
            $v = $this->getFocal();
            foreach($validationRules[self::FIELD_FOCAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE, self::FIELD_FOCAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCAL])) {
                        $errs[self::FIELD_FOCAL] = [];
                    }
                    $errs[self::FIELD_FOCAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE])) {
            $v = $this->getCoverage();
            foreach($validationRules[self::FIELD_COVERAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE, self::FIELD_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE])) {
                        $errs[self::FIELD_COVERAGE] = [];
                    }
                    $errs[self::FIELD_COVERAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $v = $this->getBusinessArrangement();
            foreach($validationRules[self::FIELD_BUSINESS_ARRANGEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE, self::FIELD_BUSINESS_ARRANGEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BUSINESS_ARRANGEMENT])) {
                        $errs[self::FIELD_BUSINESS_ARRANGEMENT] = [];
                    }
                    $errs[self::FIELD_BUSINESS_ARRANGEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRE_AUTH_REF])) {
            $v = $this->getPreAuthRef();
            foreach($validationRules[self::FIELD_PRE_AUTH_REF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE, self::FIELD_PRE_AUTH_REF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_AUTH_REF])) {
                        $errs[self::FIELD_PRE_AUTH_REF] = [];
                    }
                    $errs[self::FIELD_PRE_AUTH_REF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLAIM_RESPONSE])) {
            $v = $this->getClaimResponse();
            foreach($validationRules[self::FIELD_CLAIM_RESPONSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE, self::FIELD_CLAIM_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLAIM_RESPONSE])) {
                        $errs[self::FIELD_CLAIM_RESPONSE] = [];
                    }
                    $errs[self::FIELD_CLAIM_RESPONSE][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRClaimResponseInsurance)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_SEQUENCE === $childName) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FOCAL === $childName) {
                $type->setFocal(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COVERAGE === $childName) {
                $type->setCoverage(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BUSINESS_ARRANGEMENT === $childName) {
                $type->setBusinessArrangement(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PRE_AUTH_REF === $childName) {
                $type->addPreAuthRef(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CLAIM_RESPONSE === $childName) {
                $type->setClaimResponse(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FOCAL])) {
            $pt = $type->getFocal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FOCAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFocal((string)$attributes[self::FIELD_FOCAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $pt = $type->getBusinessArrangement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_BUSINESS_ARRANGEMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setBusinessArrangement((string)$attributes[self::FIELD_BUSINESS_ARRANGEMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PRE_AUTH_REF])) {
            $type->addPreAuthRef((string)$attributes[self::FIELD_PRE_AUTH_REF], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\HL7\FHIR\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \HL7\FHIR\STU3\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ClaimResponseInsurance', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FOCAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFocal())) {
            $xw->writeAttribute(self::FIELD_FOCAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_BUSINESS_ARRANGEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getBusinessArrangement())) {
            $xw->writeAttribute(self::FIELD_BUSINESS_ARRANGEMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PRE_AUTH_REF] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getPreAuthRef())) {
            $xw->writeAttribute(self::FIELD_PRE_AUTH_REF, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getPreAuthRef()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_PRE_AUTH_REF, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FOCAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFocal())) {
            $xw->startElement(self::FIELD_FOCAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCoverage())) {
            $xw->startElement(self::FIELD_COVERAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_BUSINESS_ARRANGEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getBusinessArrangement())) {
            $xw->startElement(self::FIELD_BUSINESS_ARRANGEMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PRE_AUTH_REF] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getPreAuthRef())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_PRE_AUTH_REF);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $xw->startElement(self::FIELD_CLAIM_RESPONSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
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
        if (null !== ($v = $this->getFocal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FOCAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FOCAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            $out->{self::FIELD_COVERAGE} = $v;
        }
        if (null !== ($v = $this->getBusinessArrangement())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BUSINESS_ARRANGEMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BUSINESS_ARRANGEMENT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PRE_AUTH_REF} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRE_AUTH_REF_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $out->{self::FIELD_CLAIM_RESPONSE} = $v;
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