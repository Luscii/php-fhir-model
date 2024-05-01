<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseDetail
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseDetail extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL;

    const FIELD_DETAIL_SEQUENCE = 'detailSequence';
    const FIELD_DETAIL_SEQUENCE_EXT = '_detailSequence';
    const FIELD_TRACE_NUMBER = 'traceNumber';
    const FIELD_NOTE_NUMBER = 'noteNumber';
    const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    const FIELD_REVIEW_OUTCOME = 'reviewOutcome';
    const FIELD_ADJUDICATION = 'adjudication';
    const FIELD_SUB_DETAIL = 'subDetail';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim detail entry.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $detailSequence = null;
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
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $noteNumber = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome
     */
    protected null|FHIRClaimResponseReviewOutcome $reviewOutcome = null;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    protected null|array $adjudication = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail[]
     */
    protected null|array $subDetail = [];

    /**
     * Validation map for fields in type ClaimResponse.Detail
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRClaimResponseDetail Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DETAIL_SEQUENCE]) || isset($data[self::FIELD_DETAIL_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_DETAIL_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_SEQUENCE_EXT]) && is_array($data[self::FIELD_DETAIL_SEQUENCE_EXT])) ? $data[self::FIELD_DETAIL_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDetailSequence($value);
                } else if (is_array($value)) {
                    $this->setDetailSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDetailSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailSequence(new FHIRPositiveInt($ext));
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
        if (isset($data[self::FIELD_NOTE_NUMBER]) || isset($data[self::FIELD_NOTE_NUMBER_EXT])) {
            $value = $data[self::FIELD_NOTE_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_NOTE_NUMBER_EXT]) && is_array($data[self::FIELD_NOTE_NUMBER_EXT])) ? $data[self::FIELD_NOTE_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addNoteNumber($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addNoteNumber($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNoteNumber(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addNoteNumber(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNoteNumber(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addNoteNumber(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNoteNumber(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REVIEW_OUTCOME])) {
            if ($data[self::FIELD_REVIEW_OUTCOME] instanceof FHIRClaimResponseReviewOutcome) {
                $this->setReviewOutcome($data[self::FIELD_REVIEW_OUTCOME]);
            } else {
                $this->setReviewOutcome(new FHIRClaimResponseReviewOutcome($data[self::FIELD_REVIEW_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_ADJUDICATION])) {
            if (is_array($data[self::FIELD_ADJUDICATION])) {
                foreach($data[self::FIELD_ADJUDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseAdjudication) {
                        $this->addAdjudication($v);
                    } else {
                        $this->addAdjudication(new FHIRClaimResponseAdjudication($v));
                    }
                }
            } elseif ($data[self::FIELD_ADJUDICATION] instanceof FHIRClaimResponseAdjudication) {
                $this->addAdjudication($data[self::FIELD_ADJUDICATION]);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication($data[self::FIELD_ADJUDICATION]));
            }
        }
        if (isset($data[self::FIELD_SUB_DETAIL])) {
            if (is_array($data[self::FIELD_SUB_DETAIL])) {
                foreach($data[self::FIELD_SUB_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseSubDetail) {
                        $this->addSubDetail($v);
                    } else {
                        $this->addSubDetail(new FHIRClaimResponseSubDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_SUB_DETAIL] instanceof FHIRClaimResponseSubDetail) {
                $this->addSubDetail($data[self::FIELD_SUB_DETAIL]);
            } else {
                $this->addSubDetail(new FHIRClaimResponseSubDetail($data[self::FIELD_SUB_DETAIL]));
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
     * A number to uniquely reference the claim detail entry.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequence(): null|FHIRPositiveInt
    {
        return $this->detailSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim detail entry.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $detailSequence
     * @return static
     */
    public function setDetailSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequence = null): self
    {
        if (null !== $detailSequence && !($detailSequence instanceof FHIRPositiveInt)) {
            $detailSequence = new FHIRPositiveInt($detailSequence);
        }
        $this->_trackValueSet($this->detailSequence, $detailSequence);
        $this->detailSequence = $detailSequence;
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
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber(): null|array
    {
        return $this->noteNumber;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $noteNumber
     * @return static
     */
    public function addNoteNumber(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumber = null): self
    {
        if (null !== $noteNumber && !($noteNumber instanceof FHIRPositiveInt)) {
            $noteNumber = new FHIRPositiveInt($noteNumber);
        }
        $this->_trackValueAdded();
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @return static
     */
    public function setNoteNumber(array $noteNumber = []): self
    {
        if ([] !== $this->noteNumber) {
            $this->_trackValuesRemoved(count($this->noteNumber));
            $this->noteNumber = [];
        }
        if ([] === $noteNumber) {
            return $this;
        }
        foreach($noteNumber as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addNoteNumber($v);
            } else {
                $this->addNoteNumber(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome
     */
    public function getReviewOutcome(): null|FHIRClaimResponseReviewOutcome
    {
        return $this->reviewOutcome;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome $reviewOutcome
     * @return static
     */
    public function setReviewOutcome(null|FHIRClaimResponseReviewOutcome $reviewOutcome = null): self
    {
        if (null === $reviewOutcome) {
            $reviewOutcome = new FHIRClaimResponseReviewOutcome();
        }
        $this->_trackValueSet($this->reviewOutcome, $reviewOutcome);
        $this->reviewOutcome = $reviewOutcome;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication(): null|array
    {
        return $this->adjudication;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(null|FHIRClaimResponseAdjudication $adjudication = null): self
    {
        if (null === $adjudication) {
            $adjudication = new FHIRClaimResponseAdjudication();
        }
        $this->_trackValueAdded();
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] $adjudication
     * @return static
     */
    public function setAdjudication(array $adjudication = []): self
    {
        if ([] !== $this->adjudication) {
            $this->_trackValuesRemoved(count($this->adjudication));
            $this->adjudication = [];
        }
        if ([] === $adjudication) {
            return $this;
        }
        foreach($adjudication as $v) {
            if ($v instanceof FHIRClaimResponseAdjudication) {
                $this->addAdjudication($v);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail[]
     */
    public function getSubDetail(): null|array
    {
        return $this->subDetail;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail $subDetail
     * @return static
     */
    public function addSubDetail(null|FHIRClaimResponseSubDetail $subDetail = null): self
    {
        if (null === $subDetail) {
            $subDetail = new FHIRClaimResponseSubDetail();
        }
        $this->_trackValueAdded();
        $this->subDetail[] = $subDetail;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail[] $subDetail
     * @return static
     */
    public function setSubDetail(array $subDetail = []): self
    {
        if ([] !== $this->subDetail) {
            $this->_trackValuesRemoved(count($this->subDetail));
            $this->subDetail = [];
        }
        if ([] === $subDetail) {
            return $this;
        }
        foreach($subDetail as $v) {
            if ($v instanceof FHIRClaimResponseSubDetail) {
                $this->addSubDetail($v);
            } else {
                $this->addSubDetail(new FHIRClaimResponseSubDetail($v));
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
        if (null !== ($v = $this->getDetailSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTraceNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TRACE_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNoteNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReviewOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REVIEW_OUTCOME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADJUDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSubDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUB_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_SEQUENCE])) {
            $v = $this->getDetailSequence();
            foreach($validationRules[self::FIELD_DETAIL_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_DETAIL_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_SEQUENCE])) {
                        $errs[self::FIELD_DETAIL_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_DETAIL_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRACE_NUMBER])) {
            $v = $this->getTraceNumber();
            foreach($validationRules[self::FIELD_TRACE_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_TRACE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRACE_NUMBER])) {
                        $errs[self::FIELD_TRACE_NUMBER] = [];
                    }
                    $errs[self::FIELD_TRACE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE_NUMBER])) {
            $v = $this->getNoteNumber();
            foreach($validationRules[self::FIELD_NOTE_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_NOTE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE_NUMBER])) {
                        $errs[self::FIELD_NOTE_NUMBER] = [];
                    }
                    $errs[self::FIELD_NOTE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REVIEW_OUTCOME])) {
            $v = $this->getReviewOutcome();
            foreach($validationRules[self::FIELD_REVIEW_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_REVIEW_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REVIEW_OUTCOME])) {
                        $errs[self::FIELD_REVIEW_OUTCOME] = [];
                    }
                    $errs[self::FIELD_REVIEW_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADJUDICATION])) {
            $v = $this->getAdjudication();
            foreach($validationRules[self::FIELD_ADJUDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_ADJUDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADJUDICATION])) {
                        $errs[self::FIELD_ADJUDICATION] = [];
                    }
                    $errs[self::FIELD_ADJUDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_DETAIL])) {
            $v = $this->getSubDetail();
            foreach($validationRules[self::FIELD_SUB_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_SUB_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_DETAIL])) {
                        $errs[self::FIELD_SUB_DETAIL] = [];
                    }
                    $errs[self::FIELD_SUB_DETAIL][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail
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
        } else if (!($type instanceof FHIRClaimResponseDetail)) {
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
            if (self::FIELD_DETAIL_SEQUENCE === $n->nodeName) {
                $type->setDetailSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_TRACE_NUMBER === $n->nodeName) {
                $type->addTraceNumber(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE_NUMBER === $n->nodeName) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_REVIEW_OUTCOME === $n->nodeName) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::xmlUnserialize($n));
            } elseif (self::FIELD_ADJUDICATION === $n->nodeName) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_DETAIL === $n->nodeName) {
                $type->addSubDetail(FHIRClaimResponseSubDetail::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DETAIL_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getDetailSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDetailSequence($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOTE_NUMBER);
        if (null !== $n) {
            $type->addNoteNumber($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ClaimResponseDetail'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getDetailSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL_SEQUENCE);
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
        if ([] !== ($vs = $this->getNoteNumber())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE_NUMBER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getReviewOutcome())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REVIEW_OUTCOME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADJUDICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSubDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUB_DETAIL);
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
        if (null !== ($v = $this->getDetailSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_SEQUENCE_EXT} = $ext;
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
        if ([] !== ($vs = $this->getNoteNumber())) {
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
                $out->{self::FIELD_NOTE_NUMBER} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOTE_NUMBER_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getReviewOutcome())) {
            $out->{self::FIELD_REVIEW_OUTCOME} = $v;
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            $out->{self::FIELD_ADJUDICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ADJUDICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSubDetail())) {
            $out->{self::FIELD_SUB_DETAIL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUB_DETAIL}[] = $v;
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