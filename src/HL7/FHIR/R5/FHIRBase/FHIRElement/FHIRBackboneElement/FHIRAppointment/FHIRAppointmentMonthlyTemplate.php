<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 *
 * Class FHIRAppointmentMonthlyTemplate
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment
 */
class FHIRAppointmentMonthlyTemplate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE;

    const FIELD_DAY_OF_MONTH = 'dayOfMonth';
    const FIELD_DAY_OF_MONTH_EXT = '_dayOfMonth';
    const FIELD_NTH_WEEK_OF_MONTH = 'nthWeekOfMonth';
    const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    const FIELD_MONTH_INTERVAL = 'monthInterval';
    const FIELD_MONTH_INTERVAL_EXT = '_monthInterval';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $dayOfMonth = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $nthWeekOfMonth = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $dayOfWeek = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $monthInterval = null;

    /**
     * Validation map for fields in type Appointment.MonthlyTemplate
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRAppointmentMonthlyTemplate Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DAY_OF_MONTH]) || isset($data[self::FIELD_DAY_OF_MONTH_EXT])) {
            $value = $data[self::FIELD_DAY_OF_MONTH] ?? null;
            $ext = (isset($data[self::FIELD_DAY_OF_MONTH_EXT]) && is_array($data[self::FIELD_DAY_OF_MONTH_EXT])) ? $data[self::FIELD_DAY_OF_MONTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDayOfMonth($value);
                } else if (is_array($value)) {
                    $this->setDayOfMonth(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDayOfMonth(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDayOfMonth(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_NTH_WEEK_OF_MONTH])) {
            if ($data[self::FIELD_NTH_WEEK_OF_MONTH] instanceof FHIRCoding) {
                $this->setNthWeekOfMonth($data[self::FIELD_NTH_WEEK_OF_MONTH]);
            } else {
                $this->setNthWeekOfMonth(new FHIRCoding($data[self::FIELD_NTH_WEEK_OF_MONTH]));
            }
        }
        if (isset($data[self::FIELD_DAY_OF_WEEK])) {
            if ($data[self::FIELD_DAY_OF_WEEK] instanceof FHIRCoding) {
                $this->setDayOfWeek($data[self::FIELD_DAY_OF_WEEK]);
            } else {
                $this->setDayOfWeek(new FHIRCoding($data[self::FIELD_DAY_OF_WEEK]));
            }
        }
        if (isset($data[self::FIELD_MONTH_INTERVAL]) || isset($data[self::FIELD_MONTH_INTERVAL_EXT])) {
            $value = $data[self::FIELD_MONTH_INTERVAL] ?? null;
            $ext = (isset($data[self::FIELD_MONTH_INTERVAL_EXT]) && is_array($data[self::FIELD_MONTH_INTERVAL_EXT])) ? $data[self::FIELD_MONTH_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMonthInterval($value);
                } else if (is_array($value)) {
                    $this->setMonthInterval(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMonthInterval(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMonthInterval(new FHIRPositiveInt($ext));
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
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDayOfMonth(): null|FHIRPositiveInt
    {
        return $this->dayOfMonth;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @return static
     */
    public function setDayOfMonth(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth = null): self
    {
        if (null !== $dayOfMonth && !($dayOfMonth instanceof FHIRPositiveInt)) {
            $dayOfMonth = new FHIRPositiveInt($dayOfMonth);
        }
        $this->_trackValueSet($this->dayOfMonth, $dayOfMonth);
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getNthWeekOfMonth(): null|FHIRCoding
    {
        return $this->nthWeekOfMonth;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @return static
     */
    public function setNthWeekOfMonth(null|FHIRCoding $nthWeekOfMonth = null): self
    {
        if (null === $nthWeekOfMonth) {
            $nthWeekOfMonth = new FHIRCoding();
        }
        $this->_trackValueSet($this->nthWeekOfMonth, $nthWeekOfMonth);
        $this->nthWeekOfMonth = $nthWeekOfMonth;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getDayOfWeek(): null|FHIRCoding
    {
        return $this->dayOfWeek;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @return static
     */
    public function setDayOfWeek(null|FHIRCoding $dayOfWeek = null): self
    {
        if (null === $dayOfWeek) {
            $dayOfWeek = new FHIRCoding();
        }
        $this->_trackValueSet($this->dayOfWeek, $dayOfWeek);
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMonthInterval(): null|FHIRPositiveInt
    {
        return $this->monthInterval;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @return static
     */
    public function setMonthInterval(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval = null): self
    {
        if (null !== $monthInterval && !($monthInterval instanceof FHIRPositiveInt)) {
            $monthInterval = new FHIRPositiveInt($monthInterval);
        }
        $this->_trackValueSet($this->monthInterval, $monthInterval);
        $this->monthInterval = $monthInterval;
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
        if (null !== ($v = $this->getDayOfMonth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAY_OF_MONTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNthWeekOfMonth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NTH_WEEK_OF_MONTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAY_OF_WEEK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMonthInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONTH_INTERVAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_MONTH])) {
            $v = $this->getDayOfMonth();
            foreach($validationRules[self::FIELD_DAY_OF_MONTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_DAY_OF_MONTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_MONTH])) {
                        $errs[self::FIELD_DAY_OF_MONTH] = [];
                    }
                    $errs[self::FIELD_DAY_OF_MONTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NTH_WEEK_OF_MONTH])) {
            $v = $this->getNthWeekOfMonth();
            foreach($validationRules[self::FIELD_NTH_WEEK_OF_MONTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_NTH_WEEK_OF_MONTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NTH_WEEK_OF_MONTH])) {
                        $errs[self::FIELD_NTH_WEEK_OF_MONTH] = [];
                    }
                    $errs[self::FIELD_NTH_WEEK_OF_MONTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_WEEK])) {
            $v = $this->getDayOfWeek();
            foreach($validationRules[self::FIELD_DAY_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_DAY_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_WEEK])) {
                        $errs[self::FIELD_DAY_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAY_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONTH_INTERVAL])) {
            $v = $this->getMonthInterval();
            foreach($validationRules[self::FIELD_MONTH_INTERVAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_MONTH_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONTH_INTERVAL])) {
                        $errs[self::FIELD_MONTH_INTERVAL] = [];
                    }
                    $errs[self::FIELD_MONTH_INTERVAL][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
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
        } else if (!($type instanceof FHIRAppointmentMonthlyTemplate)) {
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
            if (self::FIELD_DAY_OF_MONTH === $n->nodeName) {
                $type->setDayOfMonth(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_NTH_WEEK_OF_MONTH === $n->nodeName) {
                $type->setNthWeekOfMonth(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_DAY_OF_WEEK === $n->nodeName) {
                $type->setDayOfWeek(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_MONTH_INTERVAL === $n->nodeName) {
                $type->setMonthInterval(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DAY_OF_MONTH);
        if (null !== $n) {
            $pt = $type->getDayOfMonth();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDayOfMonth($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MONTH_INTERVAL);
        if (null !== $n) {
            $pt = $type->getMonthInterval();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMonthInterval($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('AppointmentMonthlyTemplate'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getDayOfMonth())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DAY_OF_MONTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNthWeekOfMonth())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NTH_WEEK_OF_MONTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DAY_OF_WEEK);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMonthInterval())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MONTH_INTERVAL);
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
        if (null !== ($v = $this->getDayOfMonth())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DAY_OF_MONTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DAY_OF_MONTH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNthWeekOfMonth())) {
            $out->{self::FIELD_NTH_WEEK_OF_MONTH} = $v;
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            $out->{self::FIELD_DAY_OF_WEEK} = $v;
        }
        if (null !== ($v = $this->getMonthInterval())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MONTH_INTERVAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MONTH_INTERVAL_EXT} = $ext;
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