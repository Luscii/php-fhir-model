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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRInstantPrimitive;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUnsignedIntPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\FHIRUrlPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The subscription resource describes a particular client's request to be notified
 * about a SubscriptionTopic.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubscription
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRSubscription extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TOPIC = 'topic';
    const FIELD_TOPIC_EXT = '_topic';
    const FIELD_CONTACT = 'contact';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_MANAGING_ENTITY = 'managingEntity';
    const FIELD_REASON = 'reason';
    const FIELD_REASON_EXT = '_reason';
    const FIELD_FILTER_BY = 'filterBy';
    const FIELD_CHANNEL_TYPE = 'channelType';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_ENDPOINT_EXT = '_endpoint';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_HEARTBEAT_PERIOD = 'heartbeatPeriod';
    const FIELD_HEARTBEAT_PERIOD_EXT = '_heartbeatPeriod';
    const FIELD_TIMEOUT = 'timeout';
    const FIELD_TIMEOUT_EXT = '_timeout';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_CONTENT = 'content';
    const FIELD_CONTENT_EXT = '_content';
    const FIELD_MAX_COUNT = 'maxCount';
    const FIELD_MAX_COUNT_EXT = '_maxCount';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the subscription.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the subscription topic to be notified about.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $topic = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[]
     */
    protected null|array $contact = [];
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time for the server to turn the subscription off.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $end = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity with authorization to make subsequent revisions to the Subscription and
     * also determines what data the subscription is authorized to disclose.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $managingEntity = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of why this subscription is defined.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $reason = null;
    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy[]
     */
    protected null|array $filterBy = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $channelType = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    protected null|FHIRUrl $endpoint = null;
    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter[]
     */
    protected null|array $parameter = [];
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel
     * with an interval period equal to this elements integer value in seconds. If not
     * present, a heartbeat notification is not sent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $heartbeatPeriod = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum amount of time a server will allow before failing a
     * notification attempt.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $timeout = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or
     * `application/fhir+json`. Note that: * clients may request notifications in a
     * specific FHIR version by using the [FHIR Version
     * Parameter](http.html#version-parameter) - e.g., `application/fhir+json;
     * fhirVersion=4.0`. * additional MIME types can be allowed by channels - e.g.,
     * `text/plain` and `text/html` are defined by the Email channel.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $contentType = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How much of the resource content to deliver in the notification payload. The
     * choices are an empty payload, only the resource id, or the full resource
     * content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent
     */
    protected null|FHIRSubscriptionPayloadContent $content = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum number of events that will be included in a notification
     * bundle. Note that this is not a strict limit on the number of entries in a
     * bundle, as dependent resources can be included.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $maxCount = null;

    /**
     * Validation map for fields in type Subscription
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubscription Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
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
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactPoint) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactPoint) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactPoint($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_END]) || isset($data[self::FIELD_END_EXT])) {
            $value = $data[self::FIELD_END] ?? null;
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])) ? $data[self::FIELD_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setEnd($value);
                } else if (is_array($value)) {
                    $this->setEnd(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setEnd(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEnd(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_MANAGING_ENTITY])) {
            if ($data[self::FIELD_MANAGING_ENTITY] instanceof FHIRReference) {
                $this->setManagingEntity($data[self::FIELD_MANAGING_ENTITY]);
            } else {
                $this->setManagingEntity(new FHIRReference($data[self::FIELD_MANAGING_ENTITY]));
            }
        }
        if (isset($data[self::FIELD_REASON]) || isset($data[self::FIELD_REASON_EXT])) {
            $value = $data[self::FIELD_REASON] ?? null;
            $ext = (isset($data[self::FIELD_REASON_EXT]) && is_array($data[self::FIELD_REASON_EXT])) ? $data[self::FIELD_REASON_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReason($value);
                } else if (is_array($value)) {
                    $this->setReason(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReason(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReason(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FILTER_BY])) {
            if (is_array($data[self::FIELD_FILTER_BY])) {
                foreach($data[self::FIELD_FILTER_BY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubscriptionFilterBy) {
                        $this->addFilterBy($v);
                    } else {
                        $this->addFilterBy(new FHIRSubscriptionFilterBy($v));
                    }
                }
            } elseif ($data[self::FIELD_FILTER_BY] instanceof FHIRSubscriptionFilterBy) {
                $this->addFilterBy($data[self::FIELD_FILTER_BY]);
            } else {
                $this->addFilterBy(new FHIRSubscriptionFilterBy($data[self::FIELD_FILTER_BY]));
            }
        }
        if (isset($data[self::FIELD_CHANNEL_TYPE])) {
            if ($data[self::FIELD_CHANNEL_TYPE] instanceof FHIRCoding) {
                $this->setChannelType($data[self::FIELD_CHANNEL_TYPE]);
            } else {
                $this->setChannelType(new FHIRCoding($data[self::FIELD_CHANNEL_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ENDPOINT]) || isset($data[self::FIELD_ENDPOINT_EXT])) {
            $value = $data[self::FIELD_ENDPOINT] ?? null;
            $ext = (isset($data[self::FIELD_ENDPOINT_EXT]) && is_array($data[self::FIELD_ENDPOINT_EXT])) ? $data[self::FIELD_ENDPOINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setEndpoint($value);
                } else if (is_array($value)) {
                    $this->setEndpoint(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setEndpoint(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEndpoint(new FHIRUrl($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubscriptionParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRSubscriptionParameter($v));
                    }
                }
            } elseif ($data[self::FIELD_PARAMETER] instanceof FHIRSubscriptionParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRSubscriptionParameter($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_HEARTBEAT_PERIOD]) || isset($data[self::FIELD_HEARTBEAT_PERIOD_EXT])) {
            $value = $data[self::FIELD_HEARTBEAT_PERIOD] ?? null;
            $ext = (isset($data[self::FIELD_HEARTBEAT_PERIOD_EXT]) && is_array($data[self::FIELD_HEARTBEAT_PERIOD_EXT])) ? $data[self::FIELD_HEARTBEAT_PERIOD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setHeartbeatPeriod($value);
                } else if (is_array($value)) {
                    $this->setHeartbeatPeriod(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setHeartbeatPeriod(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHeartbeatPeriod(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_TIMEOUT]) || isset($data[self::FIELD_TIMEOUT_EXT])) {
            $value = $data[self::FIELD_TIMEOUT] ?? null;
            $ext = (isset($data[self::FIELD_TIMEOUT_EXT]) && is_array($data[self::FIELD_TIMEOUT_EXT])) ? $data[self::FIELD_TIMEOUT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setTimeout($value);
                } else if (is_array($value)) {
                    $this->setTimeout(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setTimeout(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTimeout(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
            $value = $data[self::FIELD_CONTENT_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) ? $data[self::FIELD_CONTENT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContentType(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT]) || isset($data[self::FIELD_CONTENT_EXT])) {
            $value = $data[self::FIELD_CONTENT] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_EXT]) && is_array($data[self::FIELD_CONTENT_EXT])) ? $data[self::FIELD_CONTENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSubscriptionPayloadContent) {
                    $this->setContent($value);
                } else if (is_array($value)) {
                    $this->setContent(new FHIRSubscriptionPayloadContent(array_merge($ext, $value)));
                } else {
                    $this->setContent(new FHIRSubscriptionPayloadContent([FHIRSubscriptionPayloadContent::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContent(new FHIRSubscriptionPayloadContent($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_COUNT]) || isset($data[self::FIELD_MAX_COUNT_EXT])) {
            $value = $data[self::FIELD_MAX_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_MAX_COUNT_EXT]) && is_array($data[self::FIELD_MAX_COUNT_EXT])) ? $data[self::FIELD_MAX_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMaxCount($value);
                } else if (is_array($value)) {
                    $this->setMaxCount(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxCount(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxCount(new FHIRPositiveInt($ext));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the subscription.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the subscription.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the subscription topic to be notified about.
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
     * The reference to the subscription topic to be notified about.
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
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $contact
     * @return static
     */
    public function addContact(null|FHIRContactPoint $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactPoint();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[] $contact
     * @return static
     */
    public function setContact(array $contact = []): self
    {
        if ([] !== $this->contact) {
            $this->_trackValuesRemoved(count($this->contact));
            $this->contact = [];
        }
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactPoint($v));
            }
        }
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
     * The time for the server to turn the subscription off.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getEnd(): null|FHIRInstant
    {
        return $this->end;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time for the server to turn the subscription off.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRInstantPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant $end
     * @return static
     */
    public function setEnd(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end = null): self
    {
        if (null !== $end && !($end instanceof FHIRInstant)) {
            $end = new FHIRInstant($end);
        }
        $this->_trackValueSet($this->end, $end);
        $this->end = $end;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity with authorization to make subsequent revisions to the Subscription and
     * also determines what data the subscription is authorized to disclose.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getManagingEntity(): null|FHIRReference
    {
        return $this->managingEntity;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity with authorization to make subsequent revisions to the Subscription and
     * also determines what data the subscription is authorized to disclose.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $managingEntity
     * @return static
     */
    public function setManagingEntity(null|FHIRReference $managingEntity = null): self
    {
        if (null === $managingEntity) {
            $managingEntity = new FHIRReference();
        }
        $this->_trackValueSet($this->managingEntity, $managingEntity);
        $this->managingEntity = $managingEntity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of why this subscription is defined.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getReason(): null|FHIRString
    {
        return $this->reason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of why this subscription is defined.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $reason
     * @return static
     */
    public function setReason(null|string|FHIRStringPrimitive|FHIRString $reason = null): self
    {
        if (null !== $reason && !($reason instanceof FHIRString)) {
            $reason = new FHIRString($reason);
        }
        $this->_trackValueSet($this->reason, $reason);
        $this->reason = $reason;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy[]
     */
    public function getFilterBy(): null|array
    {
        return $this->filterBy;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy $filterBy
     * @return static
     */
    public function addFilterBy(null|FHIRSubscriptionFilterBy $filterBy = null): self
    {
        if (null === $filterBy) {
            $filterBy = new FHIRSubscriptionFilterBy();
        }
        $this->_trackValueAdded();
        $this->filterBy[] = $filterBy;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy[] $filterBy
     * @return static
     */
    public function setFilterBy(array $filterBy = []): self
    {
        if ([] !== $this->filterBy) {
            $this->_trackValuesRemoved(count($this->filterBy));
            $this->filterBy = [];
        }
        if ([] === $filterBy) {
            return $this;
        }
        foreach($filterBy as $v) {
            if ($v instanceof FHIRSubscriptionFilterBy) {
                $this->addFilterBy($v);
            } else {
                $this->addFilterBy(new FHIRSubscriptionFilterBy($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getChannelType(): null|FHIRCoding
    {
        return $this->channelType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $channelType
     * @return static
     */
    public function setChannelType(null|FHIRCoding $channelType = null): self
    {
        if (null === $channelType) {
            $channelType = new FHIRCoding();
        }
        $this->_trackValueSet($this->channelType, $channelType);
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getEndpoint(): null|FHIRUrl
    {
        return $this->endpoint;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUrlPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl $endpoint
     * @return static
     */
    public function setEndpoint(null|string|FHIRUrlPrimitive|FHIRUrl $endpoint = null): self
    {
        if (null !== $endpoint && !($endpoint instanceof FHIRUrl)) {
            $endpoint = new FHIRUrl($endpoint);
        }
        $this->_trackValueSet($this->endpoint, $endpoint);
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter[]
     */
    public function getParameter(): null|array
    {
        return $this->parameter;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter $parameter
     * @return static
     */
    public function addParameter(null|FHIRSubscriptionParameter $parameter = null): self
    {
        if (null === $parameter) {
            $parameter = new FHIRSubscriptionParameter();
        }
        $this->_trackValueAdded();
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = []): self
    {
        if ([] !== $this->parameter) {
            $this->_trackValuesRemoved(count($this->parameter));
            $this->parameter = [];
        }
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRSubscriptionParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRSubscriptionParameter($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel
     * with an interval period equal to this elements integer value in seconds. If not
     * present, a heartbeat notification is not sent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getHeartbeatPeriod(): null|FHIRUnsignedInt
    {
        return $this->heartbeatPeriod;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel
     * with an interval period equal to this elements integer value in seconds. If not
     * present, a heartbeat notification is not sent.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $heartbeatPeriod
     * @return static
     */
    public function setHeartbeatPeriod(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $heartbeatPeriod = null): self
    {
        if (null !== $heartbeatPeriod && !($heartbeatPeriod instanceof FHIRUnsignedInt)) {
            $heartbeatPeriod = new FHIRUnsignedInt($heartbeatPeriod);
        }
        $this->_trackValueSet($this->heartbeatPeriod, $heartbeatPeriod);
        $this->heartbeatPeriod = $heartbeatPeriod;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum amount of time a server will allow before failing a
     * notification attempt.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getTimeout(): null|FHIRUnsignedInt
    {
        return $this->timeout;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum amount of time a server will allow before failing a
     * notification attempt.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $timeout
     * @return static
     */
    public function setTimeout(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $timeout = null): self
    {
        if (null !== $timeout && !($timeout instanceof FHIRUnsignedInt)) {
            $timeout = new FHIRUnsignedInt($timeout);
        }
        $this->_trackValueSet($this->timeout, $timeout);
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or
     * `application/fhir+json`. Note that: * clients may request notifications in a
     * specific FHIR version by using the [FHIR Version
     * Parameter](http.html#version-parameter) - e.g., `application/fhir+json;
     * fhirVersion=4.0`. * additional MIME types can be allowed by channels - e.g.,
     * `text/plain` and `text/html` are defined by the Email channel.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode
     */
    public function getContentType(): null|FHIRCode
    {
        return $this->contentType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or
     * `application/fhir+json`. Note that: * clients may request notifications in a
     * specific FHIR version by using the [FHIR Version
     * Parameter](http.html#version-parameter) - e.g., `application/fhir+json;
     * fhirVersion=4.0`. * additional MIME types can be allowed by channels - e.g.,
     * `text/plain` and `text/html` are defined by the Email channel.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCodePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode $contentType
     * @return static
     */
    public function setContentType(null|string|FHIRCodePrimitive|FHIRCode $contentType = null): self
    {
        if (null !== $contentType && !($contentType instanceof FHIRCode)) {
            $contentType = new FHIRCode($contentType);
        }
        $this->_trackValueSet($this->contentType, $contentType);
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How much of the resource content to deliver in the notification payload. The
     * choices are an empty payload, only the resource id, or the full resource
     * content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent
     */
    public function getContent(): null|FHIRSubscriptionPayloadContent
    {
        return $this->content;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How much of the resource content to deliver in the notification payload. The
     * choices are an empty payload, only the resource id, or the full resource
     * content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent $content
     * @return static
     */
    public function setContent(null|FHIRSubscriptionPayloadContent $content = null): self
    {
        if (null === $content) {
            $content = new FHIRSubscriptionPayloadContent();
        }
        $this->_trackValueSet($this->content, $content);
        $this->content = $content;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum number of events that will be included in a notification
     * bundle. Note that this is not a strict limit on the number of entries in a
     * bundle, as dependent resources can be included.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMaxCount(): null|FHIRPositiveInt
    {
        return $this->maxCount;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum number of events that will be included in a notification
     * bundle. Note that this is not a strict limit on the number of entries in a
     * bundle, as dependent resources can be included.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $maxCount
     * @return static
     */
    public function setMaxCount(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxCount = null): self
    {
        if (null !== $maxCount && !($maxCount instanceof FHIRPositiveInt)) {
            $maxCount = new FHIRPositiveInt($maxCount);
        }
        $this->_trackValueSet($this->maxCount, $maxCount);
        $this->maxCount = $maxCount;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTopic())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOPIC] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_END] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManagingEntity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANAGING_ENTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFilterBy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FILTER_BY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getChannelType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHANNEL_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEndpoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENDPOINT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getHeartbeatPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEARTBEAT_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimeout())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMEOUT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_COUNT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANAGING_ENTITY])) {
            $v = $this->getManagingEntity();
            foreach($validationRules[self::FIELD_MANAGING_ENTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_MANAGING_ENTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANAGING_ENTITY])) {
                        $errs[self::FIELD_MANAGING_ENTITY] = [];
                    }
                    $errs[self::FIELD_MANAGING_ENTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER_BY])) {
            $v = $this->getFilterBy();
            foreach($validationRules[self::FIELD_FILTER_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_FILTER_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER_BY])) {
                        $errs[self::FIELD_FILTER_BY] = [];
                    }
                    $errs[self::FIELD_FILTER_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHANNEL_TYPE])) {
            $v = $this->getChannelType();
            foreach($validationRules[self::FIELD_CHANNEL_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_CHANNEL_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHANNEL_TYPE])) {
                        $errs[self::FIELD_CHANNEL_TYPE] = [];
                    }
                    $errs[self::FIELD_CHANNEL_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEARTBEAT_PERIOD])) {
            $v = $this->getHeartbeatPeriod();
            foreach($validationRules[self::FIELD_HEARTBEAT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_HEARTBEAT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEARTBEAT_PERIOD])) {
                        $errs[self::FIELD_HEARTBEAT_PERIOD] = [];
                    }
                    $errs[self::FIELD_HEARTBEAT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMEOUT])) {
            $v = $this->getTimeout();
            foreach($validationRules[self::FIELD_TIMEOUT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_TIMEOUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMEOUT])) {
                        $errs[self::FIELD_TIMEOUT] = [];
                    }
                    $errs[self::FIELD_TIMEOUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
            $v = $this->getContentType();
            foreach($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
                        $errs[self::FIELD_CONTENT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_COUNT])) {
            $v = $this->getMaxCount();
            foreach($validationRules[self::FIELD_MAX_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION, self::FIELD_MAX_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_COUNT])) {
                        $errs[self::FIELD_MAX_COUNT] = [];
                    }
                    $errs[self::FIELD_MAX_COUNT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription
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
        } else if (!($type instanceof FHIRSubscription)) {
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRSubscriptionStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_TOPIC === $n->nodeName) {
                $type->setTopic(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_CONTACT === $n->nodeName) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($n));
            } elseif (self::FIELD_END === $n->nodeName) {
                $type->setEnd(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_MANAGING_ENTITY === $n->nodeName) {
                $type->setManagingEntity(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REASON === $n->nodeName) {
                $type->setReason(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FILTER_BY === $n->nodeName) {
                $type->addFilterBy(FHIRSubscriptionFilterBy::xmlUnserialize($n));
            } elseif (self::FIELD_CHANNEL_TYPE === $n->nodeName) {
                $type->setChannelType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_ENDPOINT === $n->nodeName) {
                $type->setEndpoint(FHIRUrl::xmlUnserialize($n));
            } elseif (self::FIELD_PARAMETER === $n->nodeName) {
                $type->addParameter(FHIRSubscriptionParameter::xmlUnserialize($n));
            } elseif (self::FIELD_HEARTBEAT_PERIOD === $n->nodeName) {
                $type->setHeartbeatPeriod(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_TIMEOUT === $n->nodeName) {
                $type->setTimeout(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT_TYPE === $n->nodeName) {
                $type->setContentType(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT === $n->nodeName) {
                $type->setContent(FHIRSubscriptionPayloadContent::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_COUNT === $n->nodeName) {
                $type->setMaxCount(FHIRPositiveInt::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_END);
        if (null !== $n) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEnd($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REASON);
        if (null !== $n) {
            $pt = $type->getReason();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReason($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ENDPOINT);
        if (null !== $n) {
            $pt = $type->getEndpoint();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEndpoint($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_HEARTBEAT_PERIOD);
        if (null !== $n) {
            $pt = $type->getHeartbeatPeriod();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setHeartbeatPeriod($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TIMEOUT);
        if (null !== $n) {
            $pt = $type->getTimeout();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTimeout($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONTENT_TYPE);
        if (null !== $n) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setContentType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX_COUNT);
        if (null !== $n) {
            $pt = $type->getMaxCount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMaxCount($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Subscription'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTopic())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TOPIC);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getEnd())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_END);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getManagingEntity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MANAGING_ENTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getFilterBy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FILTER_BY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getChannelType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CHANNEL_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEndpoint())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENDPOINT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PARAMETER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getHeartbeatPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HEARTBEAT_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTimeout())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TIMEOUT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContentType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxCount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_COUNT);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
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
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_END} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_END_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getManagingEntity())) {
            $out->{self::FIELD_MANAGING_ENTITY} = $v;
        }
        if (null !== ($v = $this->getReason())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REASON} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REASON_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getFilterBy())) {
            $out->{self::FIELD_FILTER_BY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FILTER_BY}[] = $v;
            }
        }
        if (null !== ($v = $this->getChannelType())) {
            $out->{self::FIELD_CHANNEL_TYPE} = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ENDPOINT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUrl::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ENDPOINT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $out->{self::FIELD_PARAMETER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PARAMETER}[] = $v;
            }
        }
        if (null !== ($v = $this->getHeartbeatPeriod())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HEARTBEAT_PERIOD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HEARTBEAT_PERIOD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTimeout())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIMEOUT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIMEOUT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSubscriptionPayloadContent::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_COUNT_EXT} = $ext;
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