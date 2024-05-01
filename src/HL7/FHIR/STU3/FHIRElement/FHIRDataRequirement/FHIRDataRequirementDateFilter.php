<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement;

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

use HL7\FHIR\STU3\FHIRDateTimePrimitive;
use HL7\FHIR\STU3\FHIRElement;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRPeriod;
use HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRStringPrimitive;
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
 * Class FHIRDataRequirementDateFilter
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement
 */
class FHIRDataRequirementDateFilter extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER;

    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_DURATION = 'valueDuration';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type dateTime, Period,
     * Schedule, or Timing.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $path = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $valueDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $valuePeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $valueDuration = null;

    /**
     * Validation map for fields in type DataRequirement.DateFilter
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDataRequirementDateFilter Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
            $value = $data[self::FIELD_PATH] ?? null;
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) ? $data[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME]) || isset($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_VALUE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])) ? $data[self::FIELD_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DURATION])) {
            if ($data[self::FIELD_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setValueDuration($data[self::FIELD_VALUE_DURATION]);
            } else {
                $this->setValueDuration(new FHIRDuration($data[self::FIELD_VALUE_DURATION]));
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
     * The date-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type dateTime, Period,
     * Schedule, or Timing.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type dateTime, Period,
     * Schedule, or Timing.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path = null): self
    {
        if (null !== $path && !($path instanceof FHIRString)) {
            $path = new FHIRString($path);
        }
        $this->_trackValueSet($this->path, $path);
        $this->path = $path;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime(): null|FHIRDateTime
    {
        return $this->valueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $valueDateTime
     * @return static
     */
    public function setValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime = null): self
    {
        if (null !== $valueDateTime && !($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        $this->_trackValueSet($this->valueDateTime, $valueDateTime);
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod(): null|FHIRPeriod
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(null|FHIRPeriod $valuePeriod = null): self
    {
        if (null === $valuePeriod) {
            $valuePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->valuePeriod, $valuePeriod);
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration(): null|FHIRDuration
    {
        return $this->valueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return static
     */
    public function setValueDuration(null|FHIRDuration $valueDuration = null): self
    {
        if (null === $valueDuration) {
            $valueDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->valueDuration, $valueDuration);
        $this->valueDuration = $valueDuration;
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
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DURATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATE_TIME])) {
            $v = $this->getValueDateTime();
            foreach($validationRules[self::FIELD_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER, self::FIELD_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_PERIOD])) {
            $v = $this->getValuePeriod();
            foreach($validationRules[self::FIELD_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_PERIOD])) {
                        $errs[self::FIELD_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DURATION])) {
            $v = $this->getValueDuration();
            foreach($validationRules[self::FIELD_VALUE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER, self::FIELD_VALUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DURATION])) {
                        $errs[self::FIELD_VALUE_DURATION] = [];
                    }
                    $errs[self::FIELD_VALUE_DURATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
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
        } else if (!($type instanceof FHIRDataRequirementDateFilter)) {
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
            if (self::FIELD_PATH === $n->nodeName) {
                $type->setPath(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_DATE_TIME === $n->nodeName) {
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_PERIOD === $n->nodeName) {
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_DURATION === $n->nodeName) {
                $type->setValueDuration(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PATH);
        if (null !== $n) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPath($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueDateTime($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DataRequirementDateFilter'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getPath())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DURATION);
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
        if (null !== ($v = $this->getPath())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $out->{self::FIELD_VALUE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getValueDuration())) {
            $out->{self::FIELD_VALUE_DURATION} = $v;
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