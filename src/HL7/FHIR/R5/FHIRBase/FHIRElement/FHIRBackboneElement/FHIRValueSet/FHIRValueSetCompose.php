<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A ValueSet resource instance specifies a set of codes drawn from one or more
 * code systems, intended for use in a particular context. Value sets link between
 * [CodeSystem](codesystem.html) definitions and their use in [coded
 * elements](terminologies.html).
 *
 * Class FHIRValueSetCompose
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetCompose extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;

    const FIELD_LOCKED_DATE = 'lockedDate';
    const FIELD_LOCKED_DATE_EXT = '_lockedDate';
    const FIELD_INACTIVE = 'inactive';
    const FIELD_INACTIVE_EXT = '_inactive';
    const FIELD_INCLUDE = 'include';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_PROPERTY = 'property';
    const FIELD_PROPERTY_EXT = '_property';

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $lockedDate = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $inactive = null;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    protected null|array $include = [];
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    protected null|array $exclude = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $property = [];

    /**
     * Validation map for fields in type ValueSet.Compose
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_INCLUDE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRValueSetCompose Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LOCKED_DATE]) || isset($data[self::FIELD_LOCKED_DATE_EXT])) {
            $value = $data[self::FIELD_LOCKED_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LOCKED_DATE_EXT]) && is_array($data[self::FIELD_LOCKED_DATE_EXT])) ? $data[self::FIELD_LOCKED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLockedDate($value);
                } else if (is_array($value)) {
                    $this->setLockedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLockedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLockedDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_INACTIVE]) || isset($data[self::FIELD_INACTIVE_EXT])) {
            $value = $data[self::FIELD_INACTIVE] ?? null;
            $ext = (isset($data[self::FIELD_INACTIVE_EXT]) && is_array($data[self::FIELD_INACTIVE_EXT])) ? $data[self::FIELD_INACTIVE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setInactive($value);
                } else if (is_array($value)) {
                    $this->setInactive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setInactive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInactive(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_INCLUDE])) {
            if (is_array($data[self::FIELD_INCLUDE])) {
                foreach($data[self::FIELD_INCLUDE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetInclude) {
                        $this->addInclude($v);
                    } else {
                        $this->addInclude(new FHIRValueSetInclude($v));
                    }
                }
            } elseif ($data[self::FIELD_INCLUDE] instanceof FHIRValueSetInclude) {
                $this->addInclude($data[self::FIELD_INCLUDE]);
            } else {
                $this->addInclude(new FHIRValueSetInclude($data[self::FIELD_INCLUDE]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE])) {
            if (is_array($data[self::FIELD_EXCLUDE])) {
                foreach($data[self::FIELD_EXCLUDE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetInclude) {
                        $this->addExclude($v);
                    } else {
                        $this->addExclude(new FHIRValueSetInclude($v));
                    }
                }
            } elseif ($data[self::FIELD_EXCLUDE] instanceof FHIRValueSetInclude) {
                $this->addExclude($data[self::FIELD_EXCLUDE]);
            } else {
                $this->addExclude(new FHIRValueSetInclude($data[self::FIELD_EXCLUDE]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY]) || isset($data[self::FIELD_PROPERTY_EXT])) {
            $value = $data[self::FIELD_PROPERTY] ?? null;
            $ext = (isset($data[self::FIELD_PROPERTY_EXT]) && is_array($data[self::FIELD_PROPERTY_EXT])) ? $data[self::FIELD_PROPERTY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addProperty($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addProperty($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProperty(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addProperty(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProperty(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addProperty(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProperty(new FHIRString($iext));
                }
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
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLockedDate(): null|FHIRDate
    {
        return $this->lockedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $lockedDate
     * @return static
     */
    public function setLockedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lockedDate = null): self
    {
        if (null !== $lockedDate && !($lockedDate instanceof FHIRDate)) {
            $lockedDate = new FHIRDate($lockedDate);
        }
        $this->_trackValueSet($this->lockedDate, $lockedDate);
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getInactive(): null|FHIRBoolean
    {
        return $this->inactive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $inactive
     * @return static
     */
    public function setInactive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $inactive = null): self
    {
        if (null !== $inactive && !($inactive instanceof FHIRBoolean)) {
            $inactive = new FHIRBoolean($inactive);
        }
        $this->_trackValueSet($this->inactive, $inactive);
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getInclude(): null|array
    {
        return $this->include;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $include
     * @return static
     */
    public function addInclude(null|FHIRValueSetInclude $include = null): self
    {
        if (null === $include) {
            $include = new FHIRValueSetInclude();
        }
        $this->_trackValueAdded();
        $this->include[] = $include;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $include
     * @return static
     */
    public function setInclude(array $include = []): self
    {
        if ([] !== $this->include) {
            $this->_trackValuesRemoved(count($this->include));
            $this->include = [];
        }
        if ([] === $include) {
            return $this;
        }
        foreach($include as $v) {
            if ($v instanceof FHIRValueSetInclude) {
                $this->addInclude($v);
            } else {
                $this->addInclude(new FHIRValueSetInclude($v));
            }
        }
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getExclude(): null|array
    {
        return $this->exclude;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $exclude
     * @return static
     */
    public function addExclude(null|FHIRValueSetInclude $exclude = null): self
    {
        if (null === $exclude) {
            $exclude = new FHIRValueSetInclude();
        }
        $this->_trackValueAdded();
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $exclude
     * @return static
     */
    public function setExclude(array $exclude = []): self
    {
        if ([] !== $this->exclude) {
            $this->_trackValuesRemoved(count($this->exclude));
            $this->exclude = [];
        }
        if ([] === $exclude) {
            return $this;
        }
        foreach($exclude as $v) {
            if ($v instanceof FHIRValueSetInclude) {
                $this->addExclude($v);
            } else {
                $this->addExclude(new FHIRValueSetInclude($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $property
     * @return static
     */
    public function addProperty(null|string|FHIRStringPrimitive|FHIRString $property = null): self
    {
        if (null !== $property && !($property instanceof FHIRString)) {
            $property = new FHIRString($property);
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[] $property
     * @return static
     */
    public function setProperty(array $property = []): self
    {
        if ([] !== $this->property) {
            $this->_trackValuesRemoved(count($this->property));
            $this->property = [];
        }
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRString) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRString($v));
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
        if (null !== ($v = $this->getLockedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCKED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInactive())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INACTIVE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCKED_DATE])) {
            $v = $this->getLockedDate();
            foreach($validationRules[self::FIELD_LOCKED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_LOCKED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCKED_DATE])) {
                        $errs[self::FIELD_LOCKED_DATE] = [];
                    }
                    $errs[self::FIELD_LOCKED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INACTIVE])) {
            $v = $this->getInactive();
            foreach($validationRules[self::FIELD_INACTIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_INACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INACTIVE])) {
                        $errs[self::FIELD_INACTIVE] = [];
                    }
                    $errs[self::FIELD_INACTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INCLUDE])) {
            $v = $this->getInclude();
            foreach($validationRules[self::FIELD_INCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INCLUDE])) {
                        $errs[self::FIELD_INCLUDE] = [];
                    }
                    $errs[self::FIELD_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
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
        } else if (!($type instanceof FHIRValueSetCompose)) {
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
            if (self::FIELD_LOCKED_DATE === $n->nodeName) {
                $type->setLockedDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_INACTIVE === $n->nodeName) {
                $type->setInactive(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_INCLUDE === $n->nodeName) {
                $type->addInclude(FHIRValueSetInclude::xmlUnserialize($n));
            } elseif (self::FIELD_EXCLUDE === $n->nodeName) {
                $type->addExclude(FHIRValueSetInclude::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LOCKED_DATE);
        if (null !== $n) {
            $pt = $type->getLockedDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLockedDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INACTIVE);
        if (null !== $n) {
            $pt = $type->getInactive();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInactive($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PROPERTY);
        if (null !== $n) {
            $type->addProperty($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ValueSetCompose'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getLockedDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCKED_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInactive())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INACTIVE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INCLUDE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EXCLUDE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROPERTY);
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
        if (null !== ($v = $this->getLockedDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOCKED_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOCKED_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getInactive())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INACTIVE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INACTIVE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            $out->{self::FIELD_INCLUDE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INCLUDE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            $out->{self::FIELD_EXCLUDE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_EXCLUDE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
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
                $out->{self::FIELD_PROPERTY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROPERTY_EXT} = $exts;
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