<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchComparator;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchModifierCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The subscription resource describes a particular client's request to be notified
 * about a SubscriptionTopic.
 *
 * Class FHIRSubscriptionFilterBy
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription
 */
class FHIRSubscriptionFilterBy extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY;

    const FIELD_RESOURCE_TYPE = 'resourceType';
    const FIELD_RESOURCE_TYPE_EXT = '_resourceType';
    const FIELD_FILTER_PARAMETER = 'filterParameter';
    const FIELD_FILTER_PARAMETER_EXT = '_filterParameter';
    const FIELD_COMPARATOR = 'comparator';
    const FIELD_COMPARATOR_EXT = '_comparator';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_MODIFIER_EXT = '_modifier';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references
     * (`SubscriptionTopic.canFilterBy.resource`). This element can be used to
     * differentiate filters for topics that include more than one resource type.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $resourceType = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter`
     * element.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $filterParameter = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparator applied to this filter parameter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchComparator
     */
    protected null|FHIRSearchComparator $comparator = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifier applied to this filter parameter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchModifierCode
     */
    protected null|FHIRSearchModifierCode $modifier = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literal value or resource path as is legal in search - for example,
     * `Patient/123` or `le1950`.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $value = null;

    /**
     * Validation map for fields in type Subscription.FilterBy
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubscriptionFilterBy Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_RESOURCE_TYPE]) || isset($data[self::FIELD_RESOURCE_TYPE_EXT])) {
            $value = $data[self::FIELD_RESOURCE_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_TYPE_EXT]) && is_array($data[self::FIELD_RESOURCE_TYPE_EXT])) ? $data[self::FIELD_RESOURCE_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setResourceType($value);
                } else if (is_array($value)) {
                    $this->setResourceType(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setResourceType(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResourceType(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_FILTER_PARAMETER]) || isset($data[self::FIELD_FILTER_PARAMETER_EXT])) {
            $value = $data[self::FIELD_FILTER_PARAMETER] ?? null;
            $ext = (isset($data[self::FIELD_FILTER_PARAMETER_EXT]) && is_array($data[self::FIELD_FILTER_PARAMETER_EXT])) ? $data[self::FIELD_FILTER_PARAMETER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFilterParameter($value);
                } else if (is_array($value)) {
                    $this->setFilterParameter(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFilterParameter(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFilterParameter(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMPARATOR]) || isset($data[self::FIELD_COMPARATOR_EXT])) {
            $value = $data[self::FIELD_COMPARATOR] ?? null;
            $ext = (isset($data[self::FIELD_COMPARATOR_EXT]) && is_array($data[self::FIELD_COMPARATOR_EXT])) ? $data[self::FIELD_COMPARATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchComparator) {
                    $this->setComparator($value);
                } else if (is_array($value)) {
                    $this->setComparator(new FHIRSearchComparator(array_merge($ext, $value)));
                } else {
                    $this->setComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComparator(new FHIRSearchComparator($ext));
            }
        }
        if (isset($data[self::FIELD_MODIFIER]) || isset($data[self::FIELD_MODIFIER_EXT])) {
            $value = $data[self::FIELD_MODIFIER] ?? null;
            $ext = (isset($data[self::FIELD_MODIFIER_EXT]) && is_array($data[self::FIELD_MODIFIER_EXT])) ? $data[self::FIELD_MODIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchModifierCode) {
                    $this->setModifier($value);
                } else if (is_array($value)) {
                    $this->setModifier(new FHIRSearchModifierCode(array_merge($ext, $value)));
                } else {
                    $this->setModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setModifier(new FHIRSearchModifierCode($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE]) || isset($data[self::FIELD_VALUE_EXT])) {
            $value = $data[self::FIELD_VALUE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) ? $data[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValue(new FHIRString($ext));
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references
     * (`SubscriptionTopic.canFilterBy.resource`). This element can be used to
     * differentiate filters for topics that include more than one resource type.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResourceType(): null|FHIRUri
    {
        return $this->resourceType;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references
     * (`SubscriptionTopic.canFilterBy.resource`). This element can be used to
     * differentiate filters for topics that include more than one resource type.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $resourceType
     * @return static
     */
    public function setResourceType(null|string|FHIRUriPrimitive|FHIRUri $resourceType = null): self
    {
        if (null !== $resourceType && !($resourceType instanceof FHIRUri)) {
            $resourceType = new FHIRUri($resourceType);
        }
        $this->_trackValueSet($this->resourceType, $resourceType);
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter`
     * element.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getFilterParameter(): null|FHIRString
    {
        return $this->filterParameter;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter`
     * element.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $filterParameter
     * @return static
     */
    public function setFilterParameter(null|string|FHIRStringPrimitive|FHIRString $filterParameter = null): self
    {
        if (null !== $filterParameter && !($filterParameter instanceof FHIRString)) {
            $filterParameter = new FHIRString($filterParameter);
        }
        $this->_trackValueSet($this->filterParameter, $filterParameter);
        $this->filterParameter = $filterParameter;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparator applied to this filter parameter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchComparator
     */
    public function getComparator(): null|FHIRSearchComparator
    {
        return $this->comparator;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparator applied to this filter parameter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchComparator $comparator
     * @return static
     */
    public function setComparator(null|FHIRSearchComparator $comparator = null): self
    {
        if (null === $comparator) {
            $comparator = new FHIRSearchComparator();
        }
        $this->_trackValueSet($this->comparator, $comparator);
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifier applied to this filter parameter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchModifierCode
     */
    public function getModifier(): null|FHIRSearchModifierCode
    {
        return $this->modifier;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifier applied to this filter parameter.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSearchModifierCode $modifier
     * @return static
     */
    public function setModifier(null|FHIRSearchModifierCode $modifier = null): self
    {
        if (null === $modifier) {
            $modifier = new FHIRSearchModifierCode();
        }
        $this->_trackValueSet($this->modifier, $modifier);
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literal value or resource path as is legal in search - for example,
     * `Patient/123` or `le1950`.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literal value or resource path as is legal in search - for example,
     * `Patient/123` or `le1950`.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $value
     * @return static
     */
    public function setValue(null|string|FHIRStringPrimitive|FHIRString $value = null): self
    {
        if (null !== $value && !($value instanceof FHIRString)) {
            $value = new FHIRString($value);
        }
        $this->_trackValueSet($this->value, $value);
        $this->value = $value;
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
        if (null !== ($v = $this->getResourceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFilterParameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FILTER_PARAMETER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComparator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getModifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE_TYPE])) {
            $v = $this->getResourceType();
            foreach($validationRules[self::FIELD_RESOURCE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY, self::FIELD_RESOURCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE_TYPE])) {
                        $errs[self::FIELD_RESOURCE_TYPE] = [];
                    }
                    $errs[self::FIELD_RESOURCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER_PARAMETER])) {
            $v = $this->getFilterParameter();
            foreach($validationRules[self::FIELD_FILTER_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY, self::FIELD_FILTER_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER_PARAMETER])) {
                        $errs[self::FIELD_FILTER_PARAMETER] = [];
                    }
                    $errs[self::FIELD_FILTER_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARATOR])) {
            $v = $this->getComparator();
            foreach($validationRules[self::FIELD_COMPARATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY, self::FIELD_COMPARATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARATOR])) {
                        $errs[self::FIELD_COMPARATOR] = [];
                    }
                    $errs[self::FIELD_COMPARATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy
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
        } else if (!($type instanceof FHIRSubscriptionFilterBy)) {
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
            if (self::FIELD_RESOURCE_TYPE === $n->nodeName) {
                $type->setResourceType(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_FILTER_PARAMETER === $n->nodeName) {
                $type->setFilterParameter(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COMPARATOR === $n->nodeName) {
                $type->setComparator(FHIRSearchComparator::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER === $n->nodeName) {
                $type->setModifier(FHIRSearchModifierCode::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE === $n->nodeName) {
                $type->setValue(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE_TYPE);
        if (null !== $n) {
            $pt = $type->getResourceType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResourceType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FILTER_PARAMETER);
        if (null !== $n) {
            $pt = $type->getFilterParameter();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFilterParameter($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE);
        if (null !== $n) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValue($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubscriptionFilterBy'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getResourceType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFilterParameter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FILTER_PARAMETER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getComparator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPARATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getModifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MODIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValue())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE);
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
        if (null !== ($v = $this->getResourceType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFilterParameter())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FILTER_PARAMETER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FILTER_PARAMETER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getComparator())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARATOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSearchComparator::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARATOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getModifier())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODIFIER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSearchModifierCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODIFIER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_EXT} = $ext;
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