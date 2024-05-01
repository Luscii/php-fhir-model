<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage;

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

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services.
 *
 * Class FHIRCoverageGrouping
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage
 */
class FHIRCoverageGrouping extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING;

    const FIELD_GROUP = 'group';
    const FIELD_GROUP_EXT = '_group';
    const FIELD_GROUP_DISPLAY = 'groupDisplay';
    const FIELD_GROUP_DISPLAY_EXT = '_groupDisplay';
    const FIELD_SUB_GROUP = 'subGroup';
    const FIELD_SUB_GROUP_EXT = '_subGroup';
    const FIELD_SUB_GROUP_DISPLAY = 'subGroupDisplay';
    const FIELD_SUB_GROUP_DISPLAY_EXT = '_subGroupDisplay';
    const FIELD_PLAN = 'plan';
    const FIELD_PLAN_EXT = '_plan';
    const FIELD_PLAN_DISPLAY = 'planDisplay';
    const FIELD_PLAN_DISPLAY_EXT = '_planDisplay';
    const FIELD_SUB_PLAN = 'subPlan';
    const FIELD_SUB_PLAN_EXT = '_subPlan';
    const FIELD_SUB_PLAN_DISPLAY = 'subPlanDisplay';
    const FIELD_SUB_PLAN_DISPLAY_EXT = '_subPlanDisplay';
    const FIELD_CLASS = 'class';
    const FIELD_CLASS_EXT = '_class';
    const FIELD_CLASS_DISPLAY = 'classDisplay';
    const FIELD_CLASS_DISPLAY_EXT = '_classDisplay';
    const FIELD_SUB_CLASS = 'subClass';
    const FIELD_SUB_CLASS_EXT = '_subClass';
    const FIELD_SUB_CLASS_DISPLAY = 'subClassDisplay';
    const FIELD_SUB_CLASS_DISPLAY_EXT = '_subClassDisplay';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $group = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $groupDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $subGroup = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $subGroupDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $plan = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $planDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $subPlan = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $subPlanDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $class = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $classDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $subClass = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $subClassDisplay = null;

    /**
     * Validation map for fields in type Coverage.Grouping
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCoverageGrouping Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_GROUP]) || isset($data[self::FIELD_GROUP_EXT])) {
            $value = $data[self::FIELD_GROUP] ?? null;
            $ext = (isset($data[self::FIELD_GROUP_EXT]) && is_array($data[self::FIELD_GROUP_EXT])) ? $data[self::FIELD_GROUP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setGroup($value);
                } else if (is_array($value)) {
                    $this->setGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroup(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GROUP_DISPLAY]) || isset($data[self::FIELD_GROUP_DISPLAY_EXT])) {
            $value = $data[self::FIELD_GROUP_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_GROUP_DISPLAY_EXT]) && is_array($data[self::FIELD_GROUP_DISPLAY_EXT])) ? $data[self::FIELD_GROUP_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setGroupDisplay($value);
                } else if (is_array($value)) {
                    $this->setGroupDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroupDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_GROUP]) || isset($data[self::FIELD_SUB_GROUP_EXT])) {
            $value = $data[self::FIELD_SUB_GROUP] ?? null;
            $ext = (isset($data[self::FIELD_SUB_GROUP_EXT]) && is_array($data[self::FIELD_SUB_GROUP_EXT])) ? $data[self::FIELD_SUB_GROUP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubGroup($value);
                } else if (is_array($value)) {
                    $this->setSubGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubGroup(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_GROUP_DISPLAY]) || isset($data[self::FIELD_SUB_GROUP_DISPLAY_EXT])) {
            $value = $data[self::FIELD_SUB_GROUP_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_SUB_GROUP_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_GROUP_DISPLAY_EXT])) ? $data[self::FIELD_SUB_GROUP_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubGroupDisplay($value);
                } else if (is_array($value)) {
                    $this->setSubGroupDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubGroupDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PLAN]) || isset($data[self::FIELD_PLAN_EXT])) {
            $value = $data[self::FIELD_PLAN] ?? null;
            $ext = (isset($data[self::FIELD_PLAN_EXT]) && is_array($data[self::FIELD_PLAN_EXT])) ? $data[self::FIELD_PLAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPlan($value);
                } else if (is_array($value)) {
                    $this->setPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPlan(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PLAN_DISPLAY]) || isset($data[self::FIELD_PLAN_DISPLAY_EXT])) {
            $value = $data[self::FIELD_PLAN_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_PLAN_DISPLAY_EXT]) && is_array($data[self::FIELD_PLAN_DISPLAY_EXT])) ? $data[self::FIELD_PLAN_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPlanDisplay($value);
                } else if (is_array($value)) {
                    $this->setPlanDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPlanDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_PLAN]) || isset($data[self::FIELD_SUB_PLAN_EXT])) {
            $value = $data[self::FIELD_SUB_PLAN] ?? null;
            $ext = (isset($data[self::FIELD_SUB_PLAN_EXT]) && is_array($data[self::FIELD_SUB_PLAN_EXT])) ? $data[self::FIELD_SUB_PLAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubPlan($value);
                } else if (is_array($value)) {
                    $this->setSubPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubPlan(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_PLAN_DISPLAY]) || isset($data[self::FIELD_SUB_PLAN_DISPLAY_EXT])) {
            $value = $data[self::FIELD_SUB_PLAN_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_SUB_PLAN_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_PLAN_DISPLAY_EXT])) ? $data[self::FIELD_SUB_PLAN_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubPlanDisplay($value);
                } else if (is_array($value)) {
                    $this->setSubPlanDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubPlanDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CLASS]) || isset($data[self::FIELD_CLASS_EXT])) {
            $value = $data[self::FIELD_CLASS] ?? null;
            $ext = (isset($data[self::FIELD_CLASS_EXT]) && is_array($data[self::FIELD_CLASS_EXT])) ? $data[self::FIELD_CLASS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClass($value);
                } else if (is_array($value)) {
                    $this->setClass(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClass(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setClass(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CLASS_DISPLAY]) || isset($data[self::FIELD_CLASS_DISPLAY_EXT])) {
            $value = $data[self::FIELD_CLASS_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_CLASS_DISPLAY_EXT]) && is_array($data[self::FIELD_CLASS_DISPLAY_EXT])) ? $data[self::FIELD_CLASS_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClassDisplay($value);
                } else if (is_array($value)) {
                    $this->setClassDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setClassDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_CLASS]) || isset($data[self::FIELD_SUB_CLASS_EXT])) {
            $value = $data[self::FIELD_SUB_CLASS] ?? null;
            $ext = (isset($data[self::FIELD_SUB_CLASS_EXT]) && is_array($data[self::FIELD_SUB_CLASS_EXT])) ? $data[self::FIELD_SUB_CLASS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubClass($value);
                } else if (is_array($value)) {
                    $this->setSubClass(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubClass(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubClass(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_CLASS_DISPLAY]) || isset($data[self::FIELD_SUB_CLASS_DISPLAY_EXT])) {
            $value = $data[self::FIELD_SUB_CLASS_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_SUB_CLASS_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_CLASS_DISPLAY_EXT])) ? $data[self::FIELD_SUB_CLASS_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubClassDisplay($value);
                } else if (is_array($value)) {
                    $this->setSubClassDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubClassDisplay(new FHIRString($ext));
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getGroup(): null|FHIRString
    {
        return $this->group;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $group
     * @return static
     */
    public function setGroup(null|string|FHIRStringPrimitive|FHIRString $group = null): self
    {
        if (null !== $group && !($group instanceof FHIRString)) {
            $group = new FHIRString($group);
        }
        $this->_trackValueSet($this->group, $group);
        $this->group = $group;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getGroupDisplay(): null|FHIRString
    {
        return $this->groupDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $groupDisplay
     * @return static
     */
    public function setGroupDisplay(null|string|FHIRStringPrimitive|FHIRString $groupDisplay = null): self
    {
        if (null !== $groupDisplay && !($groupDisplay instanceof FHIRString)) {
            $groupDisplay = new FHIRString($groupDisplay);
        }
        $this->_trackValueSet($this->groupDisplay, $groupDisplay);
        $this->groupDisplay = $groupDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubGroup(): null|FHIRString
    {
        return $this->subGroup;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $subGroup
     * @return static
     */
    public function setSubGroup(null|string|FHIRStringPrimitive|FHIRString $subGroup = null): self
    {
        if (null !== $subGroup && !($subGroup instanceof FHIRString)) {
            $subGroup = new FHIRString($subGroup);
        }
        $this->_trackValueSet($this->subGroup, $subGroup);
        $this->subGroup = $subGroup;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubGroupDisplay(): null|FHIRString
    {
        return $this->subGroupDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $subGroupDisplay
     * @return static
     */
    public function setSubGroupDisplay(null|string|FHIRStringPrimitive|FHIRString $subGroupDisplay = null): self
    {
        if (null !== $subGroupDisplay && !($subGroupDisplay instanceof FHIRString)) {
            $subGroupDisplay = new FHIRString($subGroupDisplay);
        }
        $this->_trackValueSet($this->subGroupDisplay, $subGroupDisplay);
        $this->subGroupDisplay = $subGroupDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getPlan(): null|FHIRString
    {
        return $this->plan;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $plan
     * @return static
     */
    public function setPlan(null|string|FHIRStringPrimitive|FHIRString $plan = null): self
    {
        if (null !== $plan && !($plan instanceof FHIRString)) {
            $plan = new FHIRString($plan);
        }
        $this->_trackValueSet($this->plan, $plan);
        $this->plan = $plan;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getPlanDisplay(): null|FHIRString
    {
        return $this->planDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $planDisplay
     * @return static
     */
    public function setPlanDisplay(null|string|FHIRStringPrimitive|FHIRString $planDisplay = null): self
    {
        if (null !== $planDisplay && !($planDisplay instanceof FHIRString)) {
            $planDisplay = new FHIRString($planDisplay);
        }
        $this->_trackValueSet($this->planDisplay, $planDisplay);
        $this->planDisplay = $planDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubPlan(): null|FHIRString
    {
        return $this->subPlan;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $subPlan
     * @return static
     */
    public function setSubPlan(null|string|FHIRStringPrimitive|FHIRString $subPlan = null): self
    {
        if (null !== $subPlan && !($subPlan instanceof FHIRString)) {
            $subPlan = new FHIRString($subPlan);
        }
        $this->_trackValueSet($this->subPlan, $subPlan);
        $this->subPlan = $subPlan;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubPlanDisplay(): null|FHIRString
    {
        return $this->subPlanDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $subPlanDisplay
     * @return static
     */
    public function setSubPlanDisplay(null|string|FHIRStringPrimitive|FHIRString $subPlanDisplay = null): self
    {
        if (null !== $subPlanDisplay && !($subPlanDisplay instanceof FHIRString)) {
            $subPlanDisplay = new FHIRString($subPlanDisplay);
        }
        $this->_trackValueSet($this->subPlanDisplay, $subPlanDisplay);
        $this->subPlanDisplay = $subPlanDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getClass(): null|FHIRString
    {
        return $this->class;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $class
     * @return static
     */
    public function setClass(null|string|FHIRStringPrimitive|FHIRString $class = null): self
    {
        if (null !== $class && !($class instanceof FHIRString)) {
            $class = new FHIRString($class);
        }
        $this->_trackValueSet($this->class, $class);
        $this->class = $class;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getClassDisplay(): null|FHIRString
    {
        return $this->classDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $classDisplay
     * @return static
     */
    public function setClassDisplay(null|string|FHIRStringPrimitive|FHIRString $classDisplay = null): self
    {
        if (null !== $classDisplay && !($classDisplay instanceof FHIRString)) {
            $classDisplay = new FHIRString($classDisplay);
        }
        $this->_trackValueSet($this->classDisplay, $classDisplay);
        $this->classDisplay = $classDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubClass(): null|FHIRString
    {
        return $this->subClass;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $subClass
     * @return static
     */
    public function setSubClass(null|string|FHIRStringPrimitive|FHIRString $subClass = null): self
    {
        if (null !== $subClass && !($subClass instanceof FHIRString)) {
            $subClass = new FHIRString($subClass);
        }
        $this->_trackValueSet($this->subClass, $subClass);
        $this->subClass = $subClass;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubClassDisplay(): null|FHIRString
    {
        return $this->subClassDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $subClassDisplay
     * @return static
     */
    public function setSubClassDisplay(null|string|FHIRStringPrimitive|FHIRString $subClassDisplay = null): self
    {
        if (null !== $subClassDisplay && !($subClassDisplay instanceof FHIRString)) {
            $subClassDisplay = new FHIRString($subClassDisplay);
        }
        $this->_trackValueSet($this->subClassDisplay, $subClassDisplay);
        $this->subClassDisplay = $subClassDisplay;
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
        if (null !== ($v = $this->getGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_GROUP_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLAN_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_PLAN_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClassDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_CLASS_DISPLAY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_DISPLAY])) {
            $v = $this->getGroupDisplay();
            foreach($validationRules[self::FIELD_GROUP_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_GROUP_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_DISPLAY])) {
                        $errs[self::FIELD_GROUP_DISPLAY] = [];
                    }
                    $errs[self::FIELD_GROUP_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_GROUP])) {
            $v = $this->getSubGroup();
            foreach($validationRules[self::FIELD_SUB_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_GROUP])) {
                        $errs[self::FIELD_SUB_GROUP] = [];
                    }
                    $errs[self::FIELD_SUB_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_GROUP_DISPLAY])) {
            $v = $this->getSubGroupDisplay();
            foreach($validationRules[self::FIELD_SUB_GROUP_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_GROUP_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_GROUP_DISPLAY])) {
                        $errs[self::FIELD_SUB_GROUP_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_GROUP_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN])) {
            $v = $this->getPlan();
            foreach($validationRules[self::FIELD_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN])) {
                        $errs[self::FIELD_PLAN] = [];
                    }
                    $errs[self::FIELD_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN_DISPLAY])) {
            $v = $this->getPlanDisplay();
            foreach($validationRules[self::FIELD_PLAN_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_PLAN_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN_DISPLAY])) {
                        $errs[self::FIELD_PLAN_DISPLAY] = [];
                    }
                    $errs[self::FIELD_PLAN_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_PLAN])) {
            $v = $this->getSubPlan();
            foreach($validationRules[self::FIELD_SUB_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_PLAN])) {
                        $errs[self::FIELD_SUB_PLAN] = [];
                    }
                    $errs[self::FIELD_SUB_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_PLAN_DISPLAY])) {
            $v = $this->getSubPlanDisplay();
            foreach($validationRules[self::FIELD_SUB_PLAN_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_PLAN_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_PLAN_DISPLAY])) {
                        $errs[self::FIELD_SUB_PLAN_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_PLAN_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS_DISPLAY])) {
            $v = $this->getClassDisplay();
            foreach($validationRules[self::FIELD_CLASS_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_CLASS_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS_DISPLAY])) {
                        $errs[self::FIELD_CLASS_DISPLAY] = [];
                    }
                    $errs[self::FIELD_CLASS_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_CLASS])) {
            $v = $this->getSubClass();
            foreach($validationRules[self::FIELD_SUB_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_CLASS])) {
                        $errs[self::FIELD_SUB_CLASS] = [];
                    }
                    $errs[self::FIELD_SUB_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_CLASS_DISPLAY])) {
            $v = $this->getSubClassDisplay();
            foreach($validationRules[self::FIELD_SUB_CLASS_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_CLASS_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_CLASS_DISPLAY])) {
                        $errs[self::FIELD_SUB_CLASS_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_CLASS_DISPLAY][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
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
        } else if (!($type instanceof FHIRCoverageGrouping)) {
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
            if (self::FIELD_GROUP === $n->nodeName) {
                $type->setGroup(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_GROUP_DISPLAY === $n->nodeName) {
                $type->setGroupDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_GROUP === $n->nodeName) {
                $type->setSubGroup(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_GROUP_DISPLAY === $n->nodeName) {
                $type->setSubGroupDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PLAN === $n->nodeName) {
                $type->setPlan(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PLAN_DISPLAY === $n->nodeName) {
                $type->setPlanDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_PLAN === $n->nodeName) {
                $type->setSubPlan(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_PLAN_DISPLAY === $n->nodeName) {
                $type->setSubPlanDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CLASS === $n->nodeName) {
                $type->setClass(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CLASS_DISPLAY === $n->nodeName) {
                $type->setClassDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_CLASS === $n->nodeName) {
                $type->setSubClass(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_CLASS_DISPLAY === $n->nodeName) {
                $type->setSubClassDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_GROUP);
        if (null !== $n) {
            $pt = $type->getGroup();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setGroup($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_GROUP_DISPLAY);
        if (null !== $n) {
            $pt = $type->getGroupDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setGroupDisplay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUB_GROUP);
        if (null !== $n) {
            $pt = $type->getSubGroup();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubGroup($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUB_GROUP_DISPLAY);
        if (null !== $n) {
            $pt = $type->getSubGroupDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubGroupDisplay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PLAN);
        if (null !== $n) {
            $pt = $type->getPlan();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPlan($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PLAN_DISPLAY);
        if (null !== $n) {
            $pt = $type->getPlanDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPlanDisplay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUB_PLAN);
        if (null !== $n) {
            $pt = $type->getSubPlan();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubPlan($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUB_PLAN_DISPLAY);
        if (null !== $n) {
            $pt = $type->getSubPlanDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubPlanDisplay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CLASS);
        if (null !== $n) {
            $pt = $type->getClass();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setClass($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CLASS_DISPLAY);
        if (null !== $n) {
            $pt = $type->getClassDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setClassDisplay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUB_CLASS);
        if (null !== $n) {
            $pt = $type->getSubClass();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubClass($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUB_CLASS_DISPLAY);
        if (null !== $n) {
            $pt = $type->getSubClassDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubClassDisplay($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CoverageGrouping'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getGroup())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GROUP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GROUP_DISPLAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubGroup())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUB_GROUP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUB_GROUP_DISPLAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPlan())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PLAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PLAN_DISPLAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubPlan())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUB_PLAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUB_PLAN_DISPLAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getClass())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CLASS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getClassDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CLASS_DISPLAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubClass())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUB_CLASS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUB_CLASS_DISPLAY);
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
        if (null !== ($v = $this->getGroup())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUP_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUP_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubGroup())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_GROUP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_GROUP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_GROUP_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_GROUP_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PLAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PLAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PLAN_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PLAN_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_PLAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_PLAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_PLAN_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_PLAN_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getClass())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CLASS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CLASS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getClassDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CLASS_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CLASS_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubClass())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_CLASS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_CLASS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_CLASS_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_CLASS_DISPLAY_EXT} = $ext;
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