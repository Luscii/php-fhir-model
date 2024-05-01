<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\DSTU2\FHIRBooleanPrimitive;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDaysOfWeek;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRTime;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRTimePrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * The details of a healthcare service available at a location.
 *
 * Class FHIRHealthcareServiceAvailableTime
 * @package \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService
 */
class FHIRHealthcareServiceAvailableTime extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME;

    const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    const FIELD_ALL_DAY = 'allDay';
    const FIELD_ALL_DAY_EXT = '_allDay';
    const FIELD_AVAILABLE_START_TIME = 'availableStartTime';
    const FIELD_AVAILABLE_START_TIME_EXT = '_availableStartTime';
    const FIELD_AVAILABLE_END_TIME = 'availableEndTime';
    const FIELD_AVAILABLE_END_TIME_EXT = '_availableEndTime';

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDaysOfWeek[]
     */
    protected null|array $daysOfWeek = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $allDay = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $availableStartTime = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $availableEndTime = null;

    /**
     * Validation map for fields in type HealthcareService.AvailableTime
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRHealthcareServiceAvailableTime Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DAYS_OF_WEEK]) || isset($data[self::FIELD_DAYS_OF_WEEK_EXT])) {
            $value = $data[self::FIELD_DAYS_OF_WEEK] ?? null;
            $ext = (isset($data[self::FIELD_DAYS_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAYS_OF_WEEK_EXT])) ? $data[self::FIELD_DAYS_OF_WEEK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDaysOfWeek) {
                    $this->addDaysOfWeek($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDaysOfWeek) {
                            $this->addDaysOfWeek($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($v, $iext)));
                            } else {
                                $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($ext, $value)));
                } else {
                    $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDaysOfWeek(new FHIRDaysOfWeek($iext));
                }
            }
        }
        if (isset($data[self::FIELD_ALL_DAY]) || isset($data[self::FIELD_ALL_DAY_EXT])) {
            $value = $data[self::FIELD_ALL_DAY] ?? null;
            $ext = (isset($data[self::FIELD_ALL_DAY_EXT]) && is_array($data[self::FIELD_ALL_DAY_EXT])) ? $data[self::FIELD_ALL_DAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAllDay($value);
                } else if (is_array($value)) {
                    $this->setAllDay(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAllDay(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAllDay(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_START_TIME]) || isset($data[self::FIELD_AVAILABLE_START_TIME_EXT])) {
            $value = $data[self::FIELD_AVAILABLE_START_TIME] ?? null;
            $ext = (isset($data[self::FIELD_AVAILABLE_START_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_START_TIME_EXT])) ? $data[self::FIELD_AVAILABLE_START_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAvailableStartTime($value);
                } else if (is_array($value)) {
                    $this->setAvailableStartTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAvailableStartTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAvailableStartTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_END_TIME]) || isset($data[self::FIELD_AVAILABLE_END_TIME_EXT])) {
            $value = $data[self::FIELD_AVAILABLE_END_TIME] ?? null;
            $ext = (isset($data[self::FIELD_AVAILABLE_END_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_END_TIME_EXT])) ? $data[self::FIELD_AVAILABLE_END_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAvailableEndTime($value);
                } else if (is_array($value)) {
                    $this->setAvailableEndTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAvailableEndTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAvailableEndTime(new FHIRTime($ext));
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
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek(): null|array
    {
        return $this->daysOfWeek;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return static
     */
    public function addDaysOfWeek(null|FHIRDaysOfWeek $daysOfWeek = null): self
    {
        if (null === $daysOfWeek) {
            $daysOfWeek = new FHIRDaysOfWeek();
        }
        $this->_trackValueAdded();
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
     * @return static
     */
    public function setDaysOfWeek(array $daysOfWeek = []): self
    {
        if ([] !== $this->daysOfWeek) {
            $this->_trackValuesRemoved(count($this->daysOfWeek));
            $this->daysOfWeek = [];
        }
        if ([] === $daysOfWeek) {
            return $this;
        }
        foreach($daysOfWeek as $v) {
            if ($v instanceof FHIRDaysOfWeek) {
                $this->addDaysOfWeek($v);
            } else {
                $this->addDaysOfWeek(new FHIRDaysOfWeek($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getAllDay(): null|FHIRBoolean
    {
        return $this->allDay;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @param null|string|bool|\HL7\FHIR\DSTU2\FHIRBooleanPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $allDay
     * @return static
     */
    public function setAllDay(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay = null): self
    {
        if (null !== $allDay && !($allDay instanceof FHIRBoolean)) {
            $allDay = new FHIRBoolean($allDay);
        }
        $this->_trackValueSet($this->allDay, $allDay);
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getAvailableStartTime(): null|FHIRTime
    {
        return $this->availableStartTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $availableStartTime
     * @return static
     */
    public function setAvailableStartTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableStartTime = null): self
    {
        if (null !== $availableStartTime && !($availableStartTime instanceof FHIRTime)) {
            $availableStartTime = new FHIRTime($availableStartTime);
        }
        $this->_trackValueSet($this->availableStartTime, $availableStartTime);
        $this->availableStartTime = $availableStartTime;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getAvailableEndTime(): null|FHIRTime
    {
        return $this->availableEndTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $availableEndTime
     * @return static
     */
    public function setAvailableEndTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableEndTime = null): self
    {
        if (null !== $availableEndTime && !($availableEndTime instanceof FHIRTime)) {
            $availableEndTime = new FHIRTime($availableEndTime);
        }
        $this->_trackValueSet($this->availableEndTime, $availableEndTime);
        $this->availableEndTime = $availableEndTime;
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
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DAYS_OF_WEEK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAllDay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALL_DAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABLE_START_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABLE_END_TIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DAYS_OF_WEEK])) {
            $v = $this->getDaysOfWeek();
            foreach($validationRules[self::FIELD_DAYS_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME, self::FIELD_DAYS_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_OF_WEEK])) {
                        $errs[self::FIELD_DAYS_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAYS_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALL_DAY])) {
            $v = $this->getAllDay();
            foreach($validationRules[self::FIELD_ALL_DAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME, self::FIELD_ALL_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALL_DAY])) {
                        $errs[self::FIELD_ALL_DAY] = [];
                    }
                    $errs[self::FIELD_ALL_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_START_TIME])) {
            $v = $this->getAvailableStartTime();
            foreach($validationRules[self::FIELD_AVAILABLE_START_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME, self::FIELD_AVAILABLE_START_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_START_TIME])) {
                        $errs[self::FIELD_AVAILABLE_START_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_START_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_END_TIME])) {
            $v = $this->getAvailableEndTime();
            foreach($validationRules[self::FIELD_AVAILABLE_END_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME, self::FIELD_AVAILABLE_END_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_END_TIME])) {
                        $errs[self::FIELD_AVAILABLE_END_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_END_TIME][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
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
        } else if (!($type instanceof FHIRHealthcareServiceAvailableTime)) {
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
            if (self::FIELD_DAYS_OF_WEEK === $n->nodeName) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::xmlUnserialize($n));
            } elseif (self::FIELD_ALL_DAY === $n->nodeName) {
                $type->setAllDay(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_AVAILABLE_START_TIME === $n->nodeName) {
                $type->setAvailableStartTime(FHIRTime::xmlUnserialize($n));
            } elseif (self::FIELD_AVAILABLE_END_TIME === $n->nodeName) {
                $type->setAvailableEndTime(FHIRTime::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ALL_DAY);
        if (null !== $n) {
            $pt = $type->getAllDay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAllDay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AVAILABLE_START_TIME);
        if (null !== $n) {
            $pt = $type->getAvailableStartTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAvailableStartTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AVAILABLE_END_TIME);
        if (null !== $n) {
            $pt = $type->getAvailableEndTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAvailableEndTime($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('HealthcareServiceAvailableTime'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DAYS_OF_WEEK);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAllDay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ALL_DAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AVAILABLE_START_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AVAILABLE_END_TIME);
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
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDaysOfWeek::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_DAYS_OF_WEEK} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DAYS_OF_WEEK_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getAllDay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ALL_DAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ALL_DAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVAILABLE_START_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVAILABLE_START_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVAILABLE_END_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVAILABLE_END_TIME_EXT} = $ext;
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