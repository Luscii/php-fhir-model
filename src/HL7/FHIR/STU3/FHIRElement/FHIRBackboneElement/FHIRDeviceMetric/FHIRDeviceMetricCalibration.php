<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric;

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
use HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationState;
use HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationType;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRInstant;
use HL7\FHIR\STU3\FHIRInstantPrimitive;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Describes a measurement, calculation or setting capability of a medical device.
 *
 * Class FHIRDeviceMetricCalibration
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric
 */
class FHIRDeviceMetricCalibration extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_STATE = 'state';
    const FIELD_STATE_EXT = '_state';
    const FIELD_TIME = 'time';
    const FIELD_TIME_EXT = '_time';

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    protected null|FHIRDeviceMetricCalibrationType $type = null;
    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    protected null|FHIRDeviceMetricCalibrationState $state = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $time = null;

    /**
     * Validation map for fields in type DeviceMetric.Calibration
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDeviceMetricCalibration Constructor
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
                if ($value instanceof FHIRDeviceMetricCalibrationType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRDeviceMetricCalibrationType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRDeviceMetricCalibrationType([FHIRDeviceMetricCalibrationType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRDeviceMetricCalibrationType($ext));
            }
        }
        if (isset($data[self::FIELD_STATE]) || isset($data[self::FIELD_STATE_EXT])) {
            $value = $data[self::FIELD_STATE] ?? null;
            $ext = (isset($data[self::FIELD_STATE_EXT]) && is_array($data[self::FIELD_STATE_EXT])) ? $data[self::FIELD_STATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDeviceMetricCalibrationState) {
                    $this->setState($value);
                } else if (is_array($value)) {
                    $this->setState(new FHIRDeviceMetricCalibrationState(array_merge($ext, $value)));
                } else {
                    $this->setState(new FHIRDeviceMetricCalibrationState([FHIRDeviceMetricCalibrationState::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setState(new FHIRDeviceMetricCalibrationState($ext));
            }
        }
        if (isset($data[self::FIELD_TIME]) || isset($data[self::FIELD_TIME_EXT])) {
            $value = $data[self::FIELD_TIME] ?? null;
            $ext = (isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT])) ? $data[self::FIELD_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setTime($value);
                } else if (is_array($value)) {
                    $this->setTime(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setTime(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTime(new FHIRInstant($ext));
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
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    public function getType(): null|FHIRDeviceMetricCalibrationType
    {
        return $this->type;
    }

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationType $type
     * @return static
     */
    public function setType(null|FHIRDeviceMetricCalibrationType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRDeviceMetricCalibrationType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    public function getState(): null|FHIRDeviceMetricCalibrationState
    {
        return $this->state;
    }

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDeviceMetricCalibrationState $state
     * @return static
     */
    public function setState(null|FHIRDeviceMetricCalibrationState $state = null): self
    {
        if (null === $state) {
            $state = new FHIRDeviceMetricCalibrationState();
        }
        $this->_trackValueSet($this->state, $state);
        $this->state = $state;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRInstant
     */
    public function getTime(): null|FHIRInstant
    {
        return $this->time;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRInstantPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRInstant $time
     * @return static
     */
    public function setTime(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $time = null): self
    {
        if (null !== $time && !($time instanceof FHIRInstant)) {
            $time = new FHIRInstant($time);
        }
        $this->_trackValueSet($this->time, $time);
        $this->time = $time;
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
        if (null !== ($v = $this->getState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATE])) {
            $v = $this->getState();
            foreach($validationRules[self::FIELD_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION, self::FIELD_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATE])) {
                        $errs[self::FIELD_STATE] = [];
                    }
                    $errs[self::FIELD_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME])) {
            $v = $this->getTime();
            foreach($validationRules[self::FIELD_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION, self::FIELD_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME])) {
                        $errs[self::FIELD_TIME] = [];
                    }
                    $errs[self::FIELD_TIME][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
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
        } else if (!($type instanceof FHIRDeviceMetricCalibration)) {
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
                $type->setType(FHIRDeviceMetricCalibrationType::xmlUnserialize($n));
            } elseif (self::FIELD_STATE === $n->nodeName) {
                $type->setState(FHIRDeviceMetricCalibrationState::xmlUnserialize($n));
            } elseif (self::FIELD_TIME === $n->nodeName) {
                $type->setTime(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TIME);
        if (null !== $n) {
            $pt = $type->getTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTime($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DeviceMetricCalibration'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getState())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TIME);
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
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDeviceMetricCalibrationType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getState())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDeviceMetricCalibrationState::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIME_EXT} = $ext;
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