<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64;
use HL7\FHIR\R5\FHIRInstantPrimitive;
use HL7\FHIR\R5\FHIRInteger64Primitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The SubscriptionStatus resource describes the state of a Subscription during
 * notifications.
 *
 * Class FHIRSubscriptionStatusNotificationEvent
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus
 */
class FHIRSubscriptionStatusNotificationEvent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT;

    const FIELD_EVENT_NUMBER = 'eventNumber';
    const FIELD_EVENT_NUMBER_EXT = '_eventNumber';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TIMESTAMP_EXT = '_timestamp';
    const FIELD_FOCUS = 'focus';
    const FIELD_ADDITIONAL_CONTEXT = 'additionalContext';

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the sequential number of this event in this subscription context or a
     * relative event number for this notification.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64
     */
    protected null|FHIRInteger64 $eventNumber = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual time this event occurred on the server.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $timestamp = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The focus of this event. While this will usually be a reference to the focus
     * resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $focus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $additionalContext = [];

    /**
     * Validation map for fields in type SubscriptionStatus.NotificationEvent
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubscriptionStatusNotificationEvent Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EVENT_NUMBER]) || isset($data[self::FIELD_EVENT_NUMBER_EXT])) {
            $value = $data[self::FIELD_EVENT_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_EVENT_NUMBER_EXT]) && is_array($data[self::FIELD_EVENT_NUMBER_EXT])) ? $data[self::FIELD_EVENT_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger64) {
                    $this->setEventNumber($value);
                } else if (is_array($value)) {
                    $this->setEventNumber(new FHIRInteger64(array_merge($ext, $value)));
                } else {
                    $this->setEventNumber(new FHIRInteger64([FHIRInteger64::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEventNumber(new FHIRInteger64($ext));
            }
        }
        if (isset($data[self::FIELD_TIMESTAMP]) || isset($data[self::FIELD_TIMESTAMP_EXT])) {
            $value = $data[self::FIELD_TIMESTAMP] ?? null;
            $ext = (isset($data[self::FIELD_TIMESTAMP_EXT]) && is_array($data[self::FIELD_TIMESTAMP_EXT])) ? $data[self::FIELD_TIMESTAMP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setTimestamp($value);
                } else if (is_array($value)) {
                    $this->setTimestamp(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setTimestamp(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTimestamp(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            if ($data[self::FIELD_FOCUS] instanceof FHIRReference) {
                $this->setFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->setFocus(new FHIRReference($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_CONTEXT])) {
            if (is_array($data[self::FIELD_ADDITIONAL_CONTEXT])) {
                foreach($data[self::FIELD_ADDITIONAL_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAdditionalContext($v);
                    } else {
                        $this->addAdditionalContext(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ADDITIONAL_CONTEXT] instanceof FHIRReference) {
                $this->addAdditionalContext($data[self::FIELD_ADDITIONAL_CONTEXT]);
            } else {
                $this->addAdditionalContext(new FHIRReference($data[self::FIELD_ADDITIONAL_CONTEXT]));
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
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the sequential number of this event in this subscription context or a
     * relative event number for this notification.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64
     */
    public function getEventNumber(): null|FHIRInteger64
    {
        return $this->eventNumber;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the sequential number of this event in this subscription context or a
     * relative event number for this notification.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRInteger64Primitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64 $eventNumber
     * @return static
     */
    public function setEventNumber(null|string|int|float|FHIRInteger64Primitive|FHIRInteger64 $eventNumber = null): self
    {
        if (null !== $eventNumber && !($eventNumber instanceof FHIRInteger64)) {
            $eventNumber = new FHIRInteger64($eventNumber);
        }
        $this->_trackValueSet($this->eventNumber, $eventNumber);
        $this->eventNumber = $eventNumber;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual time this event occurred on the server.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getTimestamp(): null|FHIRInstant
    {
        return $this->timestamp;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual time this event occurred on the server.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRInstantPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant $timestamp
     * @return static
     */
    public function setTimestamp(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp = null): self
    {
        if (null !== $timestamp && !($timestamp instanceof FHIRInstant)) {
            $timestamp = new FHIRInstant($timestamp);
        }
        $this->_trackValueSet($this->timestamp, $timestamp);
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The focus of this event. While this will usually be a reference to the focus
     * resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The focus of this event. While this will usually be a reference to the focus
     * resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus = null): self
    {
        if (null === $focus) {
            $focus = new FHIRReference();
        }
        $this->_trackValueSet($this->focus, $focus);
        $this->focus = $focus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAdditionalContext(): null|array
    {
        return $this->additionalContext;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $additionalContext
     * @return static
     */
    public function addAdditionalContext(null|FHIRReference $additionalContext = null): self
    {
        if (null === $additionalContext) {
            $additionalContext = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->additionalContext[] = $additionalContext;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $additionalContext
     * @return static
     */
    public function setAdditionalContext(array $additionalContext = []): self
    {
        if ([] !== $this->additionalContext) {
            $this->_trackValuesRemoved(count($this->additionalContext));
            $this->additionalContext = [];
        }
        if ([] === $additionalContext) {
            return $this;
        }
        foreach($additionalContext as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAdditionalContext($v);
            } else {
                $this->addAdditionalContext(new FHIRReference($v));
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
        if (null !== ($v = $this->getEventNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVENT_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMESTAMP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdditionalContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_NUMBER])) {
            $v = $this->getEventNumber();
            foreach($validationRules[self::FIELD_EVENT_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT, self::FIELD_EVENT_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_NUMBER])) {
                        $errs[self::FIELD_EVENT_NUMBER] = [];
                    }
                    $errs[self::FIELD_EVENT_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMESTAMP])) {
            $v = $this->getTimestamp();
            foreach($validationRules[self::FIELD_TIMESTAMP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT, self::FIELD_TIMESTAMP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMESTAMP])) {
                        $errs[self::FIELD_TIMESTAMP] = [];
                    }
                    $errs[self::FIELD_TIMESTAMP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCUS])) {
            $v = $this->getFocus();
            foreach($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT, self::FIELD_FOCUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS])) {
                        $errs[self::FIELD_FOCUS] = [];
                    }
                    $errs[self::FIELD_FOCUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_CONTEXT])) {
            $v = $this->getAdditionalContext();
            foreach($validationRules[self::FIELD_ADDITIONAL_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT, self::FIELD_ADDITIONAL_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_CONTEXT])) {
                        $errs[self::FIELD_ADDITIONAL_CONTEXT] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_CONTEXT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent
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
        } else if (!($type instanceof FHIRSubscriptionStatusNotificationEvent)) {
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
            if (self::FIELD_EVENT_NUMBER === $n->nodeName) {
                $type->setEventNumber(FHIRInteger64::xmlUnserialize($n));
            } elseif (self::FIELD_TIMESTAMP === $n->nodeName) {
                $type->setTimestamp(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_FOCUS === $n->nodeName) {
                $type->setFocus(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ADDITIONAL_CONTEXT === $n->nodeName) {
                $type->addAdditionalContext(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EVENT_NUMBER);
        if (null !== $n) {
            $pt = $type->getEventNumber();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEventNumber($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TIMESTAMP);
        if (null !== $n) {
            $pt = $type->getTimestamp();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTimestamp($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubscriptionStatusNotificationEvent'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getEventNumber())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EVENT_NUMBER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTimestamp())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TIMESTAMP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFocus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FOCUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAdditionalContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADDITIONAL_CONTEXT);
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
        if (null !== ($v = $this->getEventNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EVENT_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger64::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EVENT_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIMESTAMP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIMESTAMP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFocus())) {
            $out->{self::FIELD_FOCUS} = $v;
        }
        if ([] !== ($vs = $this->getAdditionalContext())) {
            $out->{self::FIELD_ADDITIONAL_CONTEXT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ADDITIONAL_CONTEXT}[] = $v;
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