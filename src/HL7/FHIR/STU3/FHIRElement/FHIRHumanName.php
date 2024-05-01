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

use HL7\FHIR\STU3\FHIRElement;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * A human's name with the ability to identify parts and usage.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRHumanName
 * @package \HL7\FHIR\STU3\FHIRElement
 */
class FHIRHumanName extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_HUMAN_NAME;

    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_FAMILY = 'family';
    const FIELD_FAMILY_EXT = '_family';
    const FIELD_GIVEN = 'given';
    const FIELD_GIVEN_EXT = '_given';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_SUFFIX = 'suffix';
    const FIELD_SUFFIX_EXT = '_suffix';
    const FIELD_PERIOD = 'period';

    /**
     * The use of a human name
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRNameUse
     */
    protected null|FHIRNameUse $use = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the name.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $family = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $given = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $prefix = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $suffix = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;

    /**
     * Validation map for fields in type HumanName
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRHumanName Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_USE]) || isset($data[self::FIELD_USE_EXT])) {
            $value = $data[self::FIELD_USE] ?? null;
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) ? $data[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRNameUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIRNameUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIRNameUse([FHIRNameUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUse(new FHIRNameUse($ext));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            $value = $data[self::FIELD_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $data[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FAMILY]) || isset($data[self::FIELD_FAMILY_EXT])) {
            $value = $data[self::FIELD_FAMILY] ?? null;
            $ext = (isset($data[self::FIELD_FAMILY_EXT]) && is_array($data[self::FIELD_FAMILY_EXT])) ? $data[self::FIELD_FAMILY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFamily($value);
                } else if (is_array($value)) {
                    $this->setFamily(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFamily(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFamily(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GIVEN]) || isset($data[self::FIELD_GIVEN_EXT])) {
            $value = $data[self::FIELD_GIVEN] ?? null;
            $ext = (isset($data[self::FIELD_GIVEN_EXT]) && is_array($data[self::FIELD_GIVEN_EXT])) ? $data[self::FIELD_GIVEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addGiven($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addGiven($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addGiven(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addGiven(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addGiven(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addGiven(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addGiven(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PREFIX]) || isset($data[self::FIELD_PREFIX_EXT])) {
            $value = $data[self::FIELD_PREFIX] ?? null;
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) ? $data[self::FIELD_PREFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addPrefix($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addPrefix($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPrefix(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addPrefix(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPrefix(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SUFFIX]) || isset($data[self::FIELD_SUFFIX_EXT])) {
            $value = $data[self::FIELD_SUFFIX] ?? null;
            $ext = (isset($data[self::FIELD_SUFFIX_EXT]) && is_array($data[self::FIELD_SUFFIX_EXT])) ? $data[self::FIELD_SUFFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSuffix($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSuffix($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSuffix(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSuffix(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSuffix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSuffix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSuffix(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
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
     * The use of a human name
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRNameUse
     */
    public function getUse(): null|FHIRNameUse
    {
        return $this->use;
    }

    /**
     * The use of a human name
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRNameUse $use
     * @return static
     */
    public function setUse(null|FHIRNameUse $use = null): self
    {
        if (null === $use) {
            $use = new FHIRNameUse();
        }
        $this->_trackValueSet($this->use, $use);
        $this->use = $use;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the name.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the name.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text = null): self
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getFamily(): null|FHIRString
    {
        return $this->family;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $family
     * @return static
     */
    public function setFamily(null|string|FHIRStringPrimitive|FHIRString $family = null): self
    {
        if (null !== $family && !($family instanceof FHIRString)) {
            $family = new FHIRString($family);
        }
        $this->_trackValueSet($this->family, $family);
        $this->family = $family;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getGiven(): null|array
    {
        return $this->given;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $given
     * @return static
     */
    public function addGiven(null|string|FHIRStringPrimitive|FHIRString $given = null): self
    {
        if (null !== $given && !($given instanceof FHIRString)) {
            $given = new FHIRString($given);
        }
        $this->_trackValueAdded();
        $this->given[] = $given;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $given
     * @return static
     */
    public function setGiven(array $given = []): self
    {
        if ([] !== $this->given) {
            $this->_trackValuesRemoved(count($this->given));
            $this->given = [];
        }
        if ([] === $given) {
            return $this;
        }
        foreach($given as $v) {
            if ($v instanceof FHIRString) {
                $this->addGiven($v);
            } else {
                $this->addGiven(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getPrefix(): null|array
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $prefix
     * @return static
     */
    public function addPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix = null): self
    {
        if (null !== $prefix && !($prefix instanceof FHIRString)) {
            $prefix = new FHIRString($prefix);
        }
        $this->_trackValueAdded();
        $this->prefix[] = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $prefix
     * @return static
     */
    public function setPrefix(array $prefix = []): self
    {
        if ([] !== $this->prefix) {
            $this->_trackValuesRemoved(count($this->prefix));
            $this->prefix = [];
        }
        if ([] === $prefix) {
            return $this;
        }
        foreach($prefix as $v) {
            if ($v instanceof FHIRString) {
                $this->addPrefix($v);
            } else {
                $this->addPrefix(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getSuffix(): null|array
    {
        return $this->suffix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $suffix
     * @return static
     */
    public function addSuffix(null|string|FHIRStringPrimitive|FHIRString $suffix = null): self
    {
        if (null !== $suffix && !($suffix instanceof FHIRString)) {
            $suffix = new FHIRString($suffix);
        }
        $this->_trackValueAdded();
        $this->suffix[] = $suffix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $suffix
     * @return static
     */
    public function setSuffix(array $suffix = []): self
    {
        if ([] !== $this->suffix) {
            $this->_trackValuesRemoved(count($this->suffix));
            $this->suffix = [];
        }
        if ([] === $suffix) {
            return $this;
        }
        foreach($suffix as $v) {
            if ($v instanceof FHIRString) {
                $this->addSuffix($v);
            } else {
                $this->addSuffix(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
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
     * Indicates the period of time when this name was valid for the named person.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $period
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
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFamily())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGiven())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GIVEN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrefix())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PREFIX, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUFFIX, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FAMILY])) {
            $v = $this->getFamily();
            foreach($validationRules[self::FIELD_FAMILY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_FAMILY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAMILY])) {
                        $errs[self::FIELD_FAMILY] = [];
                    }
                    $errs[self::FIELD_FAMILY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GIVEN])) {
            $v = $this->getGiven();
            foreach($validationRules[self::FIELD_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GIVEN])) {
                        $errs[self::FIELD_GIVEN] = [];
                    }
                    $errs[self::FIELD_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_PREFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFIX])) {
                        $errs[self::FIELD_PREFIX] = [];
                    }
                    $errs[self::FIELD_PREFIX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUFFIX])) {
            $v = $this->getSuffix();
            foreach($validationRules[self::FIELD_SUFFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_SUFFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUFFIX])) {
                        $errs[self::FIELD_SUFFIX] = [];
                    }
                    $errs[self::FIELD_SUFFIX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRHumanName $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRHumanName
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
        } else if (!($type instanceof FHIRHumanName)) {
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
            if (self::FIELD_USE === $n->nodeName) {
                $type->setUse(FHIRNameUse::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FAMILY === $n->nodeName) {
                $type->setFamily(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_GIVEN === $n->nodeName) {
                $type->addGiven(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PREFIX === $n->nodeName) {
                $type->addPrefix(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUFFIX === $n->nodeName) {
                $type->addSuffix(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TEXT);
        if (null !== $n) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setText($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FAMILY);
        if (null !== $n) {
            $pt = $type->getFamily();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFamily($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_GIVEN);
        if (null !== $n) {
            $type->addGiven($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PREFIX);
        if (null !== $n) {
            $type->addPrefix($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUFFIX);
        if (null !== $n) {
            $type->addSuffix($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('HumanName'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getUse())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_USE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getText())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFamily())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FAMILY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getGiven())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GIVEN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPrefix())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PREFIX);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUFFIX);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
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
        if (null !== ($v = $this->getUse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_USE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRNameUse::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_USE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFamily())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FAMILY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FAMILY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getGiven())) {
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
                $out->{self::FIELD_GIVEN} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GIVEN_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getPrefix())) {
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
                $out->{self::FIELD_PREFIX} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFIX_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
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
                $out->{self::FIELD_SUFFIX} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUFFIX_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
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