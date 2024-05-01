<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement;

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
use HL7\FHIR\STU3\FHIRElement;
use HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\FHIRUriPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirement
 * @package \HL7\FHIR\STU3\FHIRElement
 */
class FHIRDataRequirement extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_CODE_FILTER = 'codeFilter';
    const FIELD_DATE_FILTER = 'dateFilter';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $type = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRUri[]
     */
    protected null|array $profile = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $mustSupport = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    protected null|array $codeFilter = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    protected null|array $dateFilter = [];

    /**
     * Validation map for fields in type DataRequirement
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDataRequirement Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_PROFILE]) || isset($data[self::FIELD_PROFILE_EXT])) {
            $value = $data[self::FIELD_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) ? $data[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProfile(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProfile(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT]) || isset($data[self::FIELD_MUST_SUPPORT_EXT])) {
            $value = $data[self::FIELD_MUST_SUPPORT] ?? null;
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) ? $data[self::FIELD_MUST_SUPPORT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addMustSupport($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addMustSupport($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addMustSupport(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addMustSupport(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addMustSupport(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_CODE_FILTER])) {
            if (is_array($data[self::FIELD_CODE_FILTER])) {
                foreach($data[self::FIELD_CODE_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDataRequirementCodeFilter) {
                        $this->addCodeFilter($v);
                    } else {
                        $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE_FILTER] instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($data[self::FIELD_CODE_FILTER]);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($data[self::FIELD_CODE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_DATE_FILTER])) {
            if (is_array($data[self::FIELD_DATE_FILTER])) {
                foreach($data[self::FIELD_DATE_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDataRequirementDateFilter) {
                        $this->addDateFilter($v);
                    } else {
                        $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
                    }
                }
            } elseif ($data[self::FIELD_DATE_FILTER] instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($data[self::FIELD_DATE_FILTER]);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($data[self::FIELD_DATE_FILTER]));
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCode
     */
    public function getType(): null|FHIRCode
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRCodePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRCode $type
     * @return static
     */
    public function setType(null|string|FHIRCodePrimitive|FHIRCode $type = null): self
    {
        if (null !== $type && !($type instanceof FHIRCode)) {
            $type = new FHIRCode($type);
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRUri[]
     */
    public function getProfile(): null|array
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRUriPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRUri $profile
     * @return static
     */
    public function addProfile(null|string|FHIRUriPrimitive|FHIRUri $profile = null): self
    {
        if (null !== $profile && !($profile instanceof FHIRUri)) {
            $profile = new FHIRUri($profile);
        }
        $this->_trackValueAdded();
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri[] $profile
     * @return static
     */
    public function setProfile(array $profile = []): self
    {
        if ([] !== $this->profile) {
            $this->_trackValuesRemoved(count($this->profile));
            $this->profile = [];
        }
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRUri) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getMustSupport(): null|array
    {
        return $this->mustSupport;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $mustSupport
     * @return static
     */
    public function addMustSupport(null|string|FHIRStringPrimitive|FHIRString $mustSupport = null): self
    {
        if (null !== $mustSupport && !($mustSupport instanceof FHIRString)) {
            $mustSupport = new FHIRString($mustSupport);
        }
        $this->_trackValueAdded();
        $this->mustSupport[] = $mustSupport;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $mustSupport
     * @return static
     */
    public function setMustSupport(array $mustSupport = []): self
    {
        if ([] !== $this->mustSupport) {
            $this->_trackValuesRemoved(count($this->mustSupport));
            $this->mustSupport = [];
        }
        if ([] === $mustSupport) {
            return $this;
        }
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->addMustSupport($v);
            } else {
                $this->addMustSupport(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    public function getCodeFilter(): null|array
    {
        return $this->codeFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return static
     */
    public function addCodeFilter(null|FHIRDataRequirementCodeFilter $codeFilter = null): self
    {
        if (null === $codeFilter) {
            $codeFilter = new FHIRDataRequirementCodeFilter();
        }
        $this->_trackValueAdded();
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[] $codeFilter
     * @return static
     */
    public function setCodeFilter(array $codeFilter = []): self
    {
        if ([] !== $this->codeFilter) {
            $this->_trackValuesRemoved(count($this->codeFilter));
            $this->codeFilter = [];
        }
        if ([] === $codeFilter) {
            return $this;
        }
        foreach($codeFilter as $v) {
            if ($v instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($v);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    public function getDateFilter(): null|array
    {
        return $this->dateFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return static
     */
    public function addDateFilter(null|FHIRDataRequirementDateFilter $dateFilter = null): self
    {
        if (null === $dateFilter) {
            $dateFilter = new FHIRDataRequirementDateFilter();
        }
        $this->_trackValueAdded();
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[] $dateFilter
     * @return static
     */
    public function setDateFilter(array $dateFilter = []): self
    {
        if ([] !== $this->dateFilter) {
            $this->_trackValuesRemoved(count($this->dateFilter));
            $this->dateFilter = [];
        }
        if ([] === $dateFilter) {
            return $this;
        }
        foreach($dateFilter as $v) {
            if ($v instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($v);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MUST_SUPPORT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_FILTER])) {
            $v = $this->getCodeFilter();
            foreach($validationRules[self::FIELD_CODE_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_CODE_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_FILTER])) {
                        $errs[self::FIELD_CODE_FILTER] = [];
                    }
                    $errs[self::FIELD_CODE_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_FILTER])) {
            $v = $this->getDateFilter();
            foreach($validationRules[self::FIELD_DATE_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_DATE_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_FILTER])) {
                        $errs[self::FIELD_DATE_FILTER] = [];
                    }
                    $errs[self::FIELD_DATE_FILTER][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement
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
        } else if (!($type instanceof FHIRDataRequirement)) {
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
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_PROFILE === $n->nodeName) {
                $type->addProfile(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_MUST_SUPPORT === $n->nodeName) {
                $type->addMustSupport(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CODE_FILTER === $n->nodeName) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($n));
            } elseif (self::FIELD_DATE_FILTER === $n->nodeName) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TYPE);
        if (null !== $n) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PROFILE);
        if (null !== $n) {
            $type->addProfile($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MUST_SUPPORT);
        if (null !== $n) {
            $type->addMustSupport($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DataRequirement'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROFILE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MUST_SUPPORT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE_FILTER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DATE_FILTER);
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
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
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
                $out->{self::FIELD_PROFILE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROFILE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
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
                $out->{self::FIELD_MUST_SUPPORT} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MUST_SUPPORT_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getCodeFilter())) {
            $out->{self::FIELD_CODE_FILTER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODE_FILTER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            $out->{self::FIELD_DATE_FILTER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DATE_FILTER}[] = $v;
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