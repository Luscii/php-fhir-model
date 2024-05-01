<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 *
 * Class FHIRSubscriptionTopicQueryCriteria
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic
 */
class FHIRSubscriptionTopicQueryCriteria extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA;

    const FIELD_PREVIOUS = 'previous';
    const FIELD_PREVIOUS_EXT = '_previous';
    const FIELD_RESULT_FOR_CREATE = 'resultForCreate';
    const FIELD_RESULT_FOR_CREATE_EXT = '_resultForCreate';
    const FIELD_CURRENT = 'current';
    const FIELD_CURRENT_EXT = '_current';
    const FIELD_RESULT_FOR_DELETE = 'resultForDelete';
    const FIELD_RESULT_FOR_DELETE_EXT = '_resultForDelete';
    const FIELD_REQUIRE_BOTH = 'requireBoth';
    const FIELD_REQUIRE_BOTH_EXT = '_requireBoth';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $previous = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For `create` interactions, should the `previous` criteria count as an automatic
     * pass or an automatic fail. If not present, the testing behavior during `create`
     * interactions is unspecified (server discretion).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    protected null|FHIRCriteriaNotExistsBehavior $resultForCreate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $current = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For 'delete' interactions, should the 'current' query criteria count as an
     * automatic pass or an automatic fail. If not present, the testing behavior during
     * `delete` interactions is unspecified (server discretion).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    protected null|FHIRCriteriaNotExistsBehavior $resultForDelete = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate
     * `true` to trigger a notification for this topic. If set to `false` or not
     * present, a notification for this topic will be triggered if either the `current`
     * or `previous` tests evaluate to `true`.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $requireBoth = null;

    /**
     * Validation map for fields in type SubscriptionTopic.QueryCriteria
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubscriptionTopicQueryCriteria Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PREVIOUS]) || isset($data[self::FIELD_PREVIOUS_EXT])) {
            $value = $data[self::FIELD_PREVIOUS] ?? null;
            $ext = (isset($data[self::FIELD_PREVIOUS_EXT]) && is_array($data[self::FIELD_PREVIOUS_EXT])) ? $data[self::FIELD_PREVIOUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrevious($value);
                } else if (is_array($value)) {
                    $this->setPrevious(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrevious(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrevious(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RESULT_FOR_CREATE]) || isset($data[self::FIELD_RESULT_FOR_CREATE_EXT])) {
            $value = $data[self::FIELD_RESULT_FOR_CREATE] ?? null;
            $ext = (isset($data[self::FIELD_RESULT_FOR_CREATE_EXT]) && is_array($data[self::FIELD_RESULT_FOR_CREATE_EXT])) ? $data[self::FIELD_RESULT_FOR_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCriteriaNotExistsBehavior) {
                    $this->setResultForCreate($value);
                } else if (is_array($value)) {
                    $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior(array_merge($ext, $value)));
                } else {
                    $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior([FHIRCriteriaNotExistsBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_CURRENT]) || isset($data[self::FIELD_CURRENT_EXT])) {
            $value = $data[self::FIELD_CURRENT] ?? null;
            $ext = (isset($data[self::FIELD_CURRENT_EXT]) && is_array($data[self::FIELD_CURRENT_EXT])) ? $data[self::FIELD_CURRENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCurrent($value);
                } else if (is_array($value)) {
                    $this->setCurrent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCurrent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCurrent(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RESULT_FOR_DELETE]) || isset($data[self::FIELD_RESULT_FOR_DELETE_EXT])) {
            $value = $data[self::FIELD_RESULT_FOR_DELETE] ?? null;
            $ext = (isset($data[self::FIELD_RESULT_FOR_DELETE_EXT]) && is_array($data[self::FIELD_RESULT_FOR_DELETE_EXT])) ? $data[self::FIELD_RESULT_FOR_DELETE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCriteriaNotExistsBehavior) {
                    $this->setResultForDelete($value);
                } else if (is_array($value)) {
                    $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior(array_merge($ext, $value)));
                } else {
                    $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior([FHIRCriteriaNotExistsBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_REQUIRE_BOTH]) || isset($data[self::FIELD_REQUIRE_BOTH_EXT])) {
            $value = $data[self::FIELD_REQUIRE_BOTH] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRE_BOTH_EXT]) && is_array($data[self::FIELD_REQUIRE_BOTH_EXT])) ? $data[self::FIELD_REQUIRE_BOTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRequireBoth($value);
                } else if (is_array($value)) {
                    $this->setRequireBoth(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRequireBoth(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequireBoth(new FHIRBoolean($ext));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPrevious(): null|FHIRString
    {
        return $this->previous;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $previous
     * @return static
     */
    public function setPrevious(null|string|FHIRStringPrimitive|FHIRString $previous = null): self
    {
        if (null !== $previous && !($previous instanceof FHIRString)) {
            $previous = new FHIRString($previous);
        }
        $this->_trackValueSet($this->previous, $previous);
        $this->previous = $previous;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For `create` interactions, should the `previous` criteria count as an automatic
     * pass or an automatic fail. If not present, the testing behavior during `create`
     * interactions is unspecified (server discretion).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    public function getResultForCreate(): null|FHIRCriteriaNotExistsBehavior
    {
        return $this->resultForCreate;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For `create` interactions, should the `previous` criteria count as an automatic
     * pass or an automatic fail. If not present, the testing behavior during `create`
     * interactions is unspecified (server discretion).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForCreate
     * @return static
     */
    public function setResultForCreate(null|FHIRCriteriaNotExistsBehavior $resultForCreate = null): self
    {
        if (null === $resultForCreate) {
            $resultForCreate = new FHIRCriteriaNotExistsBehavior();
        }
        $this->_trackValueSet($this->resultForCreate, $resultForCreate);
        $this->resultForCreate = $resultForCreate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCurrent(): null|FHIRString
    {
        return $this->current;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $current
     * @return static
     */
    public function setCurrent(null|string|FHIRStringPrimitive|FHIRString $current = null): self
    {
        if (null !== $current && !($current instanceof FHIRString)) {
            $current = new FHIRString($current);
        }
        $this->_trackValueSet($this->current, $current);
        $this->current = $current;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For 'delete' interactions, should the 'current' query criteria count as an
     * automatic pass or an automatic fail. If not present, the testing behavior during
     * `delete` interactions is unspecified (server discretion).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    public function getResultForDelete(): null|FHIRCriteriaNotExistsBehavior
    {
        return $this->resultForDelete;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For 'delete' interactions, should the 'current' query criteria count as an
     * automatic pass or an automatic fail. If not present, the testing behavior during
     * `delete` interactions is unspecified (server discretion).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForDelete
     * @return static
     */
    public function setResultForDelete(null|FHIRCriteriaNotExistsBehavior $resultForDelete = null): self
    {
        if (null === $resultForDelete) {
            $resultForDelete = new FHIRCriteriaNotExistsBehavior();
        }
        $this->_trackValueSet($this->resultForDelete, $resultForDelete);
        $this->resultForDelete = $resultForDelete;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate
     * `true` to trigger a notification for this topic. If set to `false` or not
     * present, a notification for this topic will be triggered if either the `current`
     * or `previous` tests evaluate to `true`.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getRequireBoth(): null|FHIRBoolean
    {
        return $this->requireBoth;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate
     * `true` to trigger a notification for this topic. If set to `false` or not
     * present, a notification for this topic will be triggered if either the `current`
     * or `previous` tests evaluate to `true`.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $requireBoth
     * @return static
     */
    public function setRequireBoth(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $requireBoth = null): self
    {
        if (null !== $requireBoth && !($requireBoth instanceof FHIRBoolean)) {
            $requireBoth = new FHIRBoolean($requireBoth);
        }
        $this->_trackValueSet($this->requireBoth, $requireBoth);
        $this->requireBoth = $requireBoth;
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
        if (null !== ($v = $this->getPrevious())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREVIOUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResultForCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT_FOR_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCurrent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CURRENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResultForDelete())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT_FOR_DELETE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequireBoth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRE_BOTH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PREVIOUS])) {
            $v = $this->getPrevious();
            foreach($validationRules[self::FIELD_PREVIOUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_PREVIOUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREVIOUS])) {
                        $errs[self::FIELD_PREVIOUS] = [];
                    }
                    $errs[self::FIELD_PREVIOUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT_FOR_CREATE])) {
            $v = $this->getResultForCreate();
            foreach($validationRules[self::FIELD_RESULT_FOR_CREATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_RESULT_FOR_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT_FOR_CREATE])) {
                        $errs[self::FIELD_RESULT_FOR_CREATE] = [];
                    }
                    $errs[self::FIELD_RESULT_FOR_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CURRENT])) {
            $v = $this->getCurrent();
            foreach($validationRules[self::FIELD_CURRENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_CURRENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CURRENT])) {
                        $errs[self::FIELD_CURRENT] = [];
                    }
                    $errs[self::FIELD_CURRENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT_FOR_DELETE])) {
            $v = $this->getResultForDelete();
            foreach($validationRules[self::FIELD_RESULT_FOR_DELETE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_RESULT_FOR_DELETE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT_FOR_DELETE])) {
                        $errs[self::FIELD_RESULT_FOR_DELETE] = [];
                    }
                    $errs[self::FIELD_RESULT_FOR_DELETE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRE_BOTH])) {
            $v = $this->getRequireBoth();
            foreach($validationRules[self::FIELD_REQUIRE_BOTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_REQUIRE_BOTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRE_BOTH])) {
                        $errs[self::FIELD_REQUIRE_BOTH] = [];
                    }
                    $errs[self::FIELD_REQUIRE_BOTH][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
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
        } else if (!($type instanceof FHIRSubscriptionTopicQueryCriteria)) {
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
            if (self::FIELD_PREVIOUS === $n->nodeName) {
                $type->setPrevious(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RESULT_FOR_CREATE === $n->nodeName) {
                $type->setResultForCreate(FHIRCriteriaNotExistsBehavior::xmlUnserialize($n));
            } elseif (self::FIELD_CURRENT === $n->nodeName) {
                $type->setCurrent(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RESULT_FOR_DELETE === $n->nodeName) {
                $type->setResultForDelete(FHIRCriteriaNotExistsBehavior::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIRE_BOTH === $n->nodeName) {
                $type->setRequireBoth(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PREVIOUS);
        if (null !== $n) {
            $pt = $type->getPrevious();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPrevious($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CURRENT);
        if (null !== $n) {
            $pt = $type->getCurrent();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCurrent($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUIRE_BOTH);
        if (null !== $n) {
            $pt = $type->getRequireBoth();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequireBoth($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubscriptionTopicQueryCriteria'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getPrevious())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PREVIOUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResultForCreate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESULT_FOR_CREATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCurrent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CURRENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResultForDelete())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESULT_FOR_DELETE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequireBoth())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUIRE_BOTH);
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
        if (null !== ($v = $this->getPrevious())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREVIOUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREVIOUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResultForCreate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESULT_FOR_CREATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCriteriaNotExistsBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESULT_FOR_CREATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCurrent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CURRENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CURRENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResultForDelete())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESULT_FOR_DELETE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCriteriaNotExistsBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESULT_FOR_DELETE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequireBoth())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRE_BOTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRE_BOTH_EXT} = $ext;
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