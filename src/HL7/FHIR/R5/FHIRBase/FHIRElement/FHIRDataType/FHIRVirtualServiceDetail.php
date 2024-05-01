<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUrlPrimitive;
use HL7\FHIR\R5\PHPFHIRChangeTrackingTrait;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRValidationAssertionsTrait;
use HL7\FHIR\R5\PHPFHIRXmlNamespaceTrait;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Virtual Service Contact Details.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRVirtualServiceDetail
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType
 */
class FHIRVirtualServiceDetail extends FHIRDataType
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL;

    const FIELD_CHANNEL_TYPE = 'channelType';
    const FIELD_ADDRESS_URL = 'addressUrl';
    const FIELD_ADDRESS_URL_EXT = '_addressUrl';
    const FIELD_ADDRESS_STRING = 'addressString';
    const FIELD_ADDRESS_STRING_EXT = '_addressString';
    const FIELD_ADDRESS_CONTACT_POINT = 'addressContactPoint';
    const FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL = 'addressExtendedContactDetail';
    const FIELD_ADDITIONAL_INFO = 'additionalInfo';
    const FIELD_ADDITIONAL_INFO_EXT = '_additionalInfo';
    const FIELD_MAX_PARTICIPANTS = 'maxParticipants';
    const FIELD_MAX_PARTICIPANTS_EXT = '_maxParticipants';
    const FIELD_SESSION_KEY = 'sessionKey';
    const FIELD_SESSION_KEY_EXT = '_sessionKey';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $channelType = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    protected null|FHIRUrl $addressUrl = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $addressString = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    protected null|FHIRContactPoint $addressContactPoint = null;
    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    protected null|FHIRExtendedContactDetail $addressExtendedContactDetail = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    protected null|array $additionalInfo = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $maxParticipants = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $sessionKey = null;

    /**
     * Validation map for fields in type VirtualServiceDetail
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRVirtualServiceDetail Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CHANNEL_TYPE])) {
            if ($data[self::FIELD_CHANNEL_TYPE] instanceof FHIRCoding) {
                $this->setChannelType($data[self::FIELD_CHANNEL_TYPE]);
            } else {
                $this->setChannelType(new FHIRCoding($data[self::FIELD_CHANNEL_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ADDRESS_URL]) || isset($data[self::FIELD_ADDRESS_URL_EXT])) {
            $value = $data[self::FIELD_ADDRESS_URL] ?? null;
            $ext = (isset($data[self::FIELD_ADDRESS_URL_EXT]) && is_array($data[self::FIELD_ADDRESS_URL_EXT])) ? $data[self::FIELD_ADDRESS_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setAddressUrl($value);
                } else if (is_array($value)) {
                    $this->setAddressUrl(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setAddressUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAddressUrl(new FHIRUrl($ext));
            }
        }
        if (isset($data[self::FIELD_ADDRESS_STRING]) || isset($data[self::FIELD_ADDRESS_STRING_EXT])) {
            $value = $data[self::FIELD_ADDRESS_STRING] ?? null;
            $ext = (isset($data[self::FIELD_ADDRESS_STRING_EXT]) && is_array($data[self::FIELD_ADDRESS_STRING_EXT])) ? $data[self::FIELD_ADDRESS_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAddressString($value);
                } else if (is_array($value)) {
                    $this->setAddressString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAddressString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAddressString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ADDRESS_CONTACT_POINT])) {
            if ($data[self::FIELD_ADDRESS_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setAddressContactPoint($data[self::FIELD_ADDRESS_CONTACT_POINT]);
            } else {
                $this->setAddressContactPoint(new FHIRContactPoint($data[self::FIELD_ADDRESS_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL])) {
            if ($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] instanceof FHIRExtendedContactDetail) {
                $this->setAddressExtendedContactDetail($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL]);
            } else {
                $this->setAddressExtendedContactDetail(new FHIRExtendedContactDetail($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_INFO]) || isset($data[self::FIELD_ADDITIONAL_INFO_EXT])) {
            $value = $data[self::FIELD_ADDITIONAL_INFO] ?? null;
            $ext = (isset($data[self::FIELD_ADDITIONAL_INFO_EXT]) && is_array($data[self::FIELD_ADDITIONAL_INFO_EXT])) ? $data[self::FIELD_ADDITIONAL_INFO_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->addAdditionalInfo($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUrl) {
                            $this->addAdditionalInfo($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addAdditionalInfo(new FHIRUrl(array_merge($v, $iext)));
                            } else {
                                $this->addAdditionalInfo(new FHIRUrl([FHIRUrl::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addAdditionalInfo(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->addAdditionalInfo(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addAdditionalInfo(new FHIRUrl($iext));
                }
            }
        }
        if (isset($data[self::FIELD_MAX_PARTICIPANTS]) || isset($data[self::FIELD_MAX_PARTICIPANTS_EXT])) {
            $value = $data[self::FIELD_MAX_PARTICIPANTS] ?? null;
            $ext = (isset($data[self::FIELD_MAX_PARTICIPANTS_EXT]) && is_array($data[self::FIELD_MAX_PARTICIPANTS_EXT])) ? $data[self::FIELD_MAX_PARTICIPANTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMaxParticipants($value);
                } else if (is_array($value)) {
                    $this->setMaxParticipants(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxParticipants(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxParticipants(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_SESSION_KEY]) || isset($data[self::FIELD_SESSION_KEY_EXT])) {
            $value = $data[self::FIELD_SESSION_KEY] ?? null;
            $ext = (isset($data[self::FIELD_SESSION_KEY_EXT]) && is_array($data[self::FIELD_SESSION_KEY_EXT])) ? $data[self::FIELD_SESSION_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSessionKey($value);
                } else if (is_array($value)) {
                    $this->setSessionKey(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSessionKey(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSessionKey(new FHIRString($ext));
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
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
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
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
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getAddressUrl(): null|FHIRUrl
    {
        return $this->addressUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUrlPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl $addressUrl
     * @return static
     */
    public function setAddressUrl(null|string|FHIRUrlPrimitive|FHIRUrl $addressUrl = null): self
    {
        if (null !== $addressUrl && !($addressUrl instanceof FHIRUrl)) {
            $addressUrl = new FHIRUrl($addressUrl);
        }
        $this->_trackValueSet($this->addressUrl, $addressUrl);
        $this->addressUrl = $addressUrl;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getAddressString(): null|FHIRString
    {
        return $this->addressString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $addressString
     * @return static
     */
    public function setAddressString(null|string|FHIRStringPrimitive|FHIRString $addressString = null): self
    {
        if (null !== $addressString && !($addressString instanceof FHIRString)) {
            $addressString = new FHIRString($addressString);
        }
        $this->_trackValueSet($this->addressString, $addressString);
        $this->addressString = $addressString;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    public function getAddressContactPoint(): null|FHIRContactPoint
    {
        return $this->addressContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $addressContactPoint
     * @return static
     */
    public function setAddressContactPoint(null|FHIRContactPoint $addressContactPoint = null): self
    {
        if (null === $addressContactPoint) {
            $addressContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->addressContactPoint, $addressContactPoint);
        $this->addressContactPoint = $addressContactPoint;
        return $this;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    public function getAddressExtendedContactDetail(): null|FHIRExtendedContactDetail
    {
        return $this->addressExtendedContactDetail;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $addressExtendedContactDetail
     * @return static
     */
    public function setAddressExtendedContactDetail(null|FHIRExtendedContactDetail $addressExtendedContactDetail = null): self
    {
        if (null === $addressExtendedContactDetail) {
            $addressExtendedContactDetail = new FHIRExtendedContactDetail();
        }
        $this->_trackValueSet($this->addressExtendedContactDetail, $addressExtendedContactDetail);
        $this->addressExtendedContactDetail = $addressExtendedContactDetail;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    public function getAdditionalInfo(): null|array
    {
        return $this->additionalInfo;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUrlPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl $additionalInfo
     * @return static
     */
    public function addAdditionalInfo(null|string|FHIRUrlPrimitive|FHIRUrl $additionalInfo = null): self
    {
        if (null !== $additionalInfo && !($additionalInfo instanceof FHIRUrl)) {
            $additionalInfo = new FHIRUrl($additionalInfo);
        }
        $this->_trackValueAdded();
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[] $additionalInfo
     * @return static
     */
    public function setAdditionalInfo(array $additionalInfo = []): self
    {
        if ([] !== $this->additionalInfo) {
            $this->_trackValuesRemoved(count($this->additionalInfo));
            $this->additionalInfo = [];
        }
        if ([] === $additionalInfo) {
            return $this;
        }
        foreach($additionalInfo as $v) {
            if ($v instanceof FHIRUrl) {
                $this->addAdditionalInfo($v);
            } else {
                $this->addAdditionalInfo(new FHIRUrl($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMaxParticipants(): null|FHIRPositiveInt
    {
        return $this->maxParticipants;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $maxParticipants
     * @return static
     */
    public function setMaxParticipants(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxParticipants = null): self
    {
        if (null !== $maxParticipants && !($maxParticipants instanceof FHIRPositiveInt)) {
            $maxParticipants = new FHIRPositiveInt($maxParticipants);
        }
        $this->_trackValueSet($this->maxParticipants, $maxParticipants);
        $this->maxParticipants = $maxParticipants;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSessionKey(): null|FHIRString
    {
        return $this->sessionKey;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $sessionKey
     * @return static
     */
    public function setSessionKey(null|string|FHIRStringPrimitive|FHIRString $sessionKey = null): self
    {
        if (null !== $sessionKey && !($sessionKey instanceof FHIRString)) {
            $sessionKey = new FHIRString($sessionKey);
        }
        $this->_trackValueSet($this->sessionKey, $sessionKey);
        $this->sessionKey = $sessionKey;
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
        if (null !== ($v = $this->getChannelType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHANNEL_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressExtendedContactDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdditionalInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMaxParticipants())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_PARTICIPANTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSessionKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SESSION_KEY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CHANNEL_TYPE])) {
            $v = $this->getChannelType();
            foreach($validationRules[self::FIELD_CHANNEL_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_CHANNEL_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHANNEL_TYPE])) {
                        $errs[self::FIELD_CHANNEL_TYPE] = [];
                    }
                    $errs[self::FIELD_CHANNEL_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_URL])) {
            $v = $this->getAddressUrl();
            foreach($validationRules[self::FIELD_ADDRESS_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_URL])) {
                        $errs[self::FIELD_ADDRESS_URL] = [];
                    }
                    $errs[self::FIELD_ADDRESS_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_STRING])) {
            $v = $this->getAddressString();
            foreach($validationRules[self::FIELD_ADDRESS_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_STRING])) {
                        $errs[self::FIELD_ADDRESS_STRING] = [];
                    }
                    $errs[self::FIELD_ADDRESS_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_CONTACT_POINT])) {
            $v = $this->getAddressContactPoint();
            foreach($validationRules[self::FIELD_ADDRESS_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_CONTACT_POINT])) {
                        $errs[self::FIELD_ADDRESS_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_ADDRESS_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL])) {
            $v = $this->getAddressExtendedContactDetail();
            foreach($validationRules[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL])) {
                        $errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] = [];
                    }
                    $errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_INFO])) {
            $v = $this->getAdditionalInfo();
            foreach($validationRules[self::FIELD_ADDITIONAL_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDITIONAL_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INFO])) {
                        $errs[self::FIELD_ADDITIONAL_INFO] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_PARTICIPANTS])) {
            $v = $this->getMaxParticipants();
            foreach($validationRules[self::FIELD_MAX_PARTICIPANTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_MAX_PARTICIPANTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_PARTICIPANTS])) {
                        $errs[self::FIELD_MAX_PARTICIPANTS] = [];
                    }
                    $errs[self::FIELD_MAX_PARTICIPANTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SESSION_KEY])) {
            $v = $this->getSessionKey();
            foreach($validationRules[self::FIELD_SESSION_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_SESSION_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SESSION_KEY])) {
                        $errs[self::FIELD_SESSION_KEY] = [];
                    }
                    $errs[self::FIELD_SESSION_KEY][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail
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
        } else if (!($type instanceof FHIRVirtualServiceDetail)) {
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
            if (self::FIELD_CHANNEL_TYPE === $n->nodeName) {
                $type->setChannelType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_ADDRESS_URL === $n->nodeName) {
                $type->setAddressUrl(FHIRUrl::xmlUnserialize($n));
            } elseif (self::FIELD_ADDRESS_STRING === $n->nodeName) {
                $type->setAddressString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ADDRESS_CONTACT_POINT === $n->nodeName) {
                $type->setAddressContactPoint(FHIRContactPoint::xmlUnserialize($n));
            } elseif (self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL === $n->nodeName) {
                $type->setAddressExtendedContactDetail(FHIRExtendedContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_ADDITIONAL_INFO === $n->nodeName) {
                $type->addAdditionalInfo(FHIRUrl::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_PARTICIPANTS === $n->nodeName) {
                $type->setMaxParticipants(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_SESSION_KEY === $n->nodeName) {
                $type->setSessionKey(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ADDRESS_URL);
        if (null !== $n) {
            $pt = $type->getAddressUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAddressUrl($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ADDRESS_STRING);
        if (null !== $n) {
            $pt = $type->getAddressString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAddressString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ADDITIONAL_INFO);
        if (null !== $n) {
            $type->addAdditionalInfo($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX_PARTICIPANTS);
        if (null !== $n) {
            $pt = $type->getMaxParticipants();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMaxParticipants($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SESSION_KEY);
        if (null !== $n) {
            $pt = $type->getSessionKey();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSessionKey($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('VirtualServiceDetail'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getChannelType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CHANNEL_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAddressUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAddressString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAddressContactPoint())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS_CONTACT_POINT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAddressExtendedContactDetail())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAdditionalInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADDITIONAL_INFO);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getMaxParticipants())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_PARTICIPANTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSessionKey())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SESSION_KEY);
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
        if (null !== ($v = $this->getChannelType())) {
            $out->{self::FIELD_CHANNEL_TYPE} = $v;
        }
        if (null !== ($v = $this->getAddressUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADDRESS_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUrl::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDRESS_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAddressString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADDRESS_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDRESS_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAddressContactPoint())) {
            $out->{self::FIELD_ADDRESS_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getAddressExtendedContactDetail())) {
            $out->{self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL} = $v;
        }
        if ([] !== ($vs = $this->getAdditionalInfo())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUrl::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_ADDITIONAL_INFO} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDITIONAL_INFO_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getMaxParticipants())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_PARTICIPANTS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_PARTICIPANTS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSessionKey())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SESSION_KEY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SESSION_KEY_EXT} = $ext;
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