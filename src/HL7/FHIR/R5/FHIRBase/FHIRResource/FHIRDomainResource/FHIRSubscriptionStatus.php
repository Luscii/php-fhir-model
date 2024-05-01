<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionNotificationType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRInteger64Primitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The SubscriptionStatus resource describes the state of a Subscription during
 * notifications.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubscriptionStatus
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRSubscriptionStatus extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS;

    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_EVENTS_SINCE_SUBSCRIPTION_START = 'eventsSinceSubscriptionStart';
    const FIELD_EVENTS_SINCE_SUBSCRIPTION_START_EXT = '_eventsSinceSubscriptionStart';
    const FIELD_NOTIFICATION_EVENT = 'notificationEvent';
    const FIELD_SUBSCRIPTION = 'subscription';
    const FIELD_TOPIC = 'topic';
    const FIELD_TOPIC_EXT = '_topic';
    const FIELD_ERROR = 'error';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the subscription, which marks the server state for managing the
     * subscription.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes
     */
    protected null|FHIRSubscriptionStatusCodes $status = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of event being conveyed with this notification.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionNotificationType
     */
    protected null|FHIRSubscriptionNotificationType $type = null;
    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of actual events which have been generated since the
     * Subscription was created (inclusive of this notification) - regardless of how
     * many have been successfully communicated. This number is NOT incremented for
     * handshake and heartbeat notifications.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64
     */
    protected null|FHIRInteger64 $eventsSinceSubscriptionStart = null;
    /**
     * The SubscriptionStatus resource describes the state of a Subscription during
     * notifications.
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent[]
     */
    protected null|array $notificationEvent = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the Subscription which generated this notification.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subscription = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the SubscriptionTopic for the Subscription which generated this
     * notification.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $topic = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $error = [];

    /**
     * Validation map for fields in type SubscriptionStatus
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubscriptionStatus Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSubscriptionStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRSubscriptionStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRSubscriptionStatusCodes([FHIRSubscriptionStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRSubscriptionStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSubscriptionNotificationType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRSubscriptionNotificationType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRSubscriptionNotificationType([FHIRSubscriptionNotificationType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRSubscriptionNotificationType($ext));
            }
        }
        if (isset($data[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START]) || isset($data[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START_EXT])) {
            $value = $data[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START] ?? null;
            $ext = (isset($data[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START_EXT]) && is_array($data[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START_EXT])) ? $data[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger64) {
                    $this->setEventsSinceSubscriptionStart($value);
                } else if (is_array($value)) {
                    $this->setEventsSinceSubscriptionStart(new FHIRInteger64(array_merge($ext, $value)));
                } else {
                    $this->setEventsSinceSubscriptionStart(new FHIRInteger64([FHIRInteger64::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEventsSinceSubscriptionStart(new FHIRInteger64($ext));
            }
        }
        if (isset($data[self::FIELD_NOTIFICATION_EVENT])) {
            if (is_array($data[self::FIELD_NOTIFICATION_EVENT])) {
                foreach($data[self::FIELD_NOTIFICATION_EVENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubscriptionStatusNotificationEvent) {
                        $this->addNotificationEvent($v);
                    } else {
                        $this->addNotificationEvent(new FHIRSubscriptionStatusNotificationEvent($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTIFICATION_EVENT] instanceof FHIRSubscriptionStatusNotificationEvent) {
                $this->addNotificationEvent($data[self::FIELD_NOTIFICATION_EVENT]);
            } else {
                $this->addNotificationEvent(new FHIRSubscriptionStatusNotificationEvent($data[self::FIELD_NOTIFICATION_EVENT]));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIPTION])) {
            if ($data[self::FIELD_SUBSCRIPTION] instanceof FHIRReference) {
                $this->setSubscription($data[self::FIELD_SUBSCRIPTION]);
            } else {
                $this->setSubscription(new FHIRReference($data[self::FIELD_SUBSCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_TOPIC]) || isset($data[self::FIELD_TOPIC_EXT])) {
            $value = $data[self::FIELD_TOPIC] ?? null;
            $ext = (isset($data[self::FIELD_TOPIC_EXT]) && is_array($data[self::FIELD_TOPIC_EXT])) ? $data[self::FIELD_TOPIC_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setTopic($value);
                } else if (is_array($value)) {
                    $this->setTopic(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setTopic(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTopic(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_ERROR])) {
            if (is_array($data[self::FIELD_ERROR])) {
                foreach($data[self::FIELD_ERROR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addError($v);
                    } else {
                        $this->addError(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ERROR] instanceof FHIRCodeableConcept) {
                $this->addError($data[self::FIELD_ERROR]);
            } else {
                $this->addError(new FHIRCodeableConcept($data[self::FIELD_ERROR]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the subscription, which marks the server state for managing the
     * subscription.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes
     */
    public function getStatus(): null|FHIRSubscriptionStatusCodes
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the subscription, which marks the server state for managing the
     * subscription.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRSubscriptionStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRSubscriptionStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of event being conveyed with this notification.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionNotificationType
     */
    public function getType(): null|FHIRSubscriptionNotificationType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of event being conveyed with this notification.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionNotificationType $type
     * @return static
     */
    public function setType(null|FHIRSubscriptionNotificationType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRSubscriptionNotificationType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of actual events which have been generated since the
     * Subscription was created (inclusive of this notification) - regardless of how
     * many have been successfully communicated. This number is NOT incremented for
     * handshake and heartbeat notifications.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64
     */
    public function getEventsSinceSubscriptionStart(): null|FHIRInteger64
    {
        return $this->eventsSinceSubscriptionStart;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of actual events which have been generated since the
     * Subscription was created (inclusive of this notification) - regardless of how
     * many have been successfully communicated. This number is NOT incremented for
     * handshake and heartbeat notifications.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRInteger64Primitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger64 $eventsSinceSubscriptionStart
     * @return static
     */
    public function setEventsSinceSubscriptionStart(null|string|int|float|FHIRInteger64Primitive|FHIRInteger64 $eventsSinceSubscriptionStart = null): self
    {
        if (null !== $eventsSinceSubscriptionStart && !($eventsSinceSubscriptionStart instanceof FHIRInteger64)) {
            $eventsSinceSubscriptionStart = new FHIRInteger64($eventsSinceSubscriptionStart);
        }
        $this->_trackValueSet($this->eventsSinceSubscriptionStart, $eventsSinceSubscriptionStart);
        $this->eventsSinceSubscriptionStart = $eventsSinceSubscriptionStart;
        return $this;
    }

    /**
     * The SubscriptionStatus resource describes the state of a Subscription during
     * notifications.
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent[]
     */
    public function getNotificationEvent(): null|array
    {
        return $this->notificationEvent;
    }

    /**
     * The SubscriptionStatus resource describes the state of a Subscription during
     * notifications.
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent $notificationEvent
     * @return static
     */
    public function addNotificationEvent(null|FHIRSubscriptionStatusNotificationEvent $notificationEvent = null): self
    {
        if (null === $notificationEvent) {
            $notificationEvent = new FHIRSubscriptionStatusNotificationEvent();
        }
        $this->_trackValueAdded();
        $this->notificationEvent[] = $notificationEvent;
        return $this;
    }

    /**
     * The SubscriptionStatus resource describes the state of a Subscription during
     * notifications.
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent[] $notificationEvent
     * @return static
     */
    public function setNotificationEvent(array $notificationEvent = []): self
    {
        if ([] !== $this->notificationEvent) {
            $this->_trackValuesRemoved(count($this->notificationEvent));
            $this->notificationEvent = [];
        }
        if ([] === $notificationEvent) {
            return $this;
        }
        foreach($notificationEvent as $v) {
            if ($v instanceof FHIRSubscriptionStatusNotificationEvent) {
                $this->addNotificationEvent($v);
            } else {
                $this->addNotificationEvent(new FHIRSubscriptionStatusNotificationEvent($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the Subscription which generated this notification.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubscription(): null|FHIRReference
    {
        return $this->subscription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the Subscription which generated this notification.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subscription
     * @return static
     */
    public function setSubscription(null|FHIRReference $subscription = null): self
    {
        if (null === $subscription) {
            $subscription = new FHIRReference();
        }
        $this->_trackValueSet($this->subscription, $subscription);
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the SubscriptionTopic for the Subscription which generated this
     * notification.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getTopic(): null|FHIRCanonical
    {
        return $this->topic;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the SubscriptionTopic for the Subscription which generated this
     * notification.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $topic
     * @return static
     */
    public function setTopic(null|string|FHIRCanonicalPrimitive|FHIRCanonical $topic = null): self
    {
        if (null !== $topic && !($topic instanceof FHIRCanonical)) {
            $topic = new FHIRCanonical($topic);
        }
        $this->_trackValueSet($this->topic, $topic);
        $this->topic = $topic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getError(): null|array
    {
        return $this->error;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $error
     * @return static
     */
    public function addError(null|FHIRCodeableConcept $error = null): self
    {
        if (null === $error) {
            $error = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->error[] = $error;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $error
     * @return static
     */
    public function setError(array $error = []): self
    {
        if ([] !== $this->error) {
            $this->_trackValuesRemoved(count($this->error));
            $this->error = [];
        }
        if ([] === $error) {
            return $this;
        }
        foreach($error as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addError($v);
            } else {
                $this->addError(new FHIRCodeableConcept($v));
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEventsSinceSubscriptionStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNotificationEvent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTIFICATION_EVENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubscription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTopic())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOPIC] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ERROR, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START])) {
            $v = $this->getEventsSinceSubscriptionStart();
            foreach($validationRules[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START])) {
                        $errs[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START] = [];
                    }
                    $errs[self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTIFICATION_EVENT])) {
            $v = $this->getNotificationEvent();
            foreach($validationRules[self::FIELD_NOTIFICATION_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_NOTIFICATION_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTIFICATION_EVENT])) {
                        $errs[self::FIELD_NOTIFICATION_EVENT] = [];
                    }
                    $errs[self::FIELD_NOTIFICATION_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIPTION])) {
            $v = $this->getSubscription();
            foreach($validationRules[self::FIELD_SUBSCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_SUBSCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIPTION])) {
                        $errs[self::FIELD_SUBSCRIPTION] = [];
                    }
                    $errs[self::FIELD_SUBSCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ERROR])) {
            $v = $this->getError();
            foreach($validationRules[self::FIELD_ERROR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS, self::FIELD_ERROR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ERROR])) {
                        $errs[self::FIELD_ERROR] = [];
                    }
                    $errs[self::FIELD_ERROR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscriptionStatus $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscriptionStatus
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
        } else if (!($type instanceof FHIRSubscriptionStatus)) {
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
            if (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRSubscriptionStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRSubscriptionNotificationType::xmlUnserialize($n));
            } elseif (self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START === $n->nodeName) {
                $type->setEventsSinceSubscriptionStart(FHIRInteger64::xmlUnserialize($n));
            } elseif (self::FIELD_NOTIFICATION_EVENT === $n->nodeName) {
                $type->addNotificationEvent(FHIRSubscriptionStatusNotificationEvent::xmlUnserialize($n));
            } elseif (self::FIELD_SUBSCRIPTION === $n->nodeName) {
                $type->setSubscription(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TOPIC === $n->nodeName) {
                $type->setTopic(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_ERROR === $n->nodeName) {
                $type->addError(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START);
        if (null !== $n) {
            $pt = $type->getEventsSinceSubscriptionStart();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEventsSinceSubscriptionStart($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TOPIC);
        if (null !== $n) {
            $pt = $type->getTopic();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTopic($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubscriptionStatus'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEventsSinceSubscriptionStart())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getNotificationEvent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTIFICATION_EVENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getSubscription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBSCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTopic())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TOPIC);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ERROR);
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
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSubscriptionStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSubscriptionNotificationType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEventsSinceSubscriptionStart())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger64::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EVENTS_SINCE_SUBSCRIPTION_START_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getNotificationEvent())) {
            $out->{self::FIELD_NOTIFICATION_EVENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTIFICATION_EVENT}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubscription())) {
            $out->{self::FIELD_SUBSCRIPTION} = $v;
        }
        if (null !== ($v = $this->getTopic())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TOPIC} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TOPIC_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getError())) {
            $out->{self::FIELD_ERROR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ERROR}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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