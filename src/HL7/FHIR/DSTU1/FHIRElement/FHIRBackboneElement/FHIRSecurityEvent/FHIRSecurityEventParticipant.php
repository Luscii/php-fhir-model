<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use HL7\FHIR\DSTU1\FHIRBooleanPrimitive;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCoding;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference;
use HL7\FHIR\DSTU1\FHIRElement\FHIRString;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\FHIRStringPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRSecurityEventParticipant
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent
 */
class FHIRSecurityEventParticipant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT;

    const FIELD_ROLE = 'role';
    const FIELD_REFERENCE = 'reference';
    const FIELD_USER_ID = 'userId';
    const FIELD_USER_ID_EXT = '_userId';
    const FIELD_ALT_ID = 'altId';
    const FIELD_ALT_ID_EXT = '_altId';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_REQUESTOR = 'requestor';
    const FIELD_REQUESTOR_EXT = '_requestor';
    const FIELD_MEDIA = 'media';
    const FIELD_NETWORK = 'network';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $role = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Direct reference to a resource that identifies the participant.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $reference = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Unique identifier for the user actively participating in the event.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $userId = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Alternative Participant Identifier. For a human, this should be a user
     * identifier text string from authentication system. This identifier would be one
     * known to a common authentication system (e.g., single sign-on), if available.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $altId = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-meaningful name for the user.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event
     * being audited.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $requestor = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of media involved. Used when the event is about exporting/importing onto
     * media.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $media = null;
    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Logical network location for application activity, if the activity has a network
     * location.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork
     */
    protected null|FHIRSecurityEventNetwork $network = null;

    /**
     * Validation map for fields in type SecurityEvent.Participant
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSecurityEventParticipant Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ROLE])) {
            if (is_array($data[self::FIELD_ROLE])) {
                foreach($data[self::FIELD_ROLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRole($v);
                    } else {
                        $this->addRole(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->addRole($data[self::FIELD_ROLE]);
            } else {
                $this->addRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRResourceReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRResourceReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_USER_ID]) || isset($data[self::FIELD_USER_ID_EXT])) {
            $value = $data[self::FIELD_USER_ID] ?? null;
            $ext = (isset($data[self::FIELD_USER_ID_EXT]) && is_array($data[self::FIELD_USER_ID_EXT])) ? $data[self::FIELD_USER_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setUserId($value);
                } else if (is_array($value)) {
                    $this->setUserId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setUserId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUserId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ALT_ID]) || isset($data[self::FIELD_ALT_ID_EXT])) {
            $value = $data[self::FIELD_ALT_ID] ?? null;
            $ext = (isset($data[self::FIELD_ALT_ID_EXT]) && is_array($data[self::FIELD_ALT_ID_EXT])) ? $data[self::FIELD_ALT_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAltId($value);
                } else if (is_array($value)) {
                    $this->setAltId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAltId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAltId(new FHIRString($ext));
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
        if (isset($data[self::FIELD_REQUESTOR]) || isset($data[self::FIELD_REQUESTOR_EXT])) {
            $value = $data[self::FIELD_REQUESTOR] ?? null;
            $ext = (isset($data[self::FIELD_REQUESTOR_EXT]) && is_array($data[self::FIELD_REQUESTOR_EXT])) ? $data[self::FIELD_REQUESTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRequestor($value);
                } else if (is_array($value)) {
                    $this->setRequestor(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRequestor(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequestor(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_MEDIA])) {
            if ($data[self::FIELD_MEDIA] instanceof FHIRCoding) {
                $this->setMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->setMedia(new FHIRCoding($data[self::FIELD_MEDIA]));
            }
        }
        if (isset($data[self::FIELD_NETWORK])) {
            if ($data[self::FIELD_NETWORK] instanceof FHIRSecurityEventNetwork) {
                $this->setNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->setNetwork(new FHIRSecurityEventNetwork($data[self::FIELD_NETWORK]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole(): null|array
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function addRole(null|FHIRCodeableConcept $role = null): self
    {
        if (null === $role) {
            $role = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->role[] = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[] $role
     * @return static
     */
    public function setRole(array $role = []): self
    {
        if ([] !== $this->role) {
            $this->_trackValuesRemoved(count($this->role));
            $this->role = [];
        }
        if ([] === $role) {
            return $this;
        }
        foreach($role as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRole($v);
            } else {
                $this->addRole(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Direct reference to a resource that identifies the participant.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getReference(): null|FHIRResourceReference
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Direct reference to a resource that identifies the participant.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $reference
     * @return static
     */
    public function setReference(null|FHIRResourceReference $reference = null): self
    {
        if (null === $reference) {
            $reference = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->reference, $reference);
        $this->reference = $reference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Unique identifier for the user actively participating in the event.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getUserId(): null|FHIRString
    {
        return $this->userId;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Unique identifier for the user actively participating in the event.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $userId
     * @return static
     */
    public function setUserId(null|string|FHIRStringPrimitive|FHIRString $userId = null): self
    {
        if (null !== $userId && !($userId instanceof FHIRString)) {
            $userId = new FHIRString($userId);
        }
        $this->_trackValueSet($this->userId, $userId);
        $this->userId = $userId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Alternative Participant Identifier. For a human, this should be a user
     * identifier text string from authentication system. This identifier would be one
     * known to a common authentication system (e.g., single sign-on), if available.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getAltId(): null|FHIRString
    {
        return $this->altId;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Alternative Participant Identifier. For a human, this should be a user
     * identifier text string from authentication system. This identifier would be one
     * known to a common authentication system (e.g., single sign-on), if available.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $altId
     * @return static
     */
    public function setAltId(null|string|FHIRStringPrimitive|FHIRString $altId = null): self
    {
        if (null !== $altId && !($altId instanceof FHIRString)) {
            $altId = new FHIRString($altId);
        }
        $this->_trackValueSet($this->altId, $altId);
        $this->altId = $altId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-meaningful name for the user.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-meaningful name for the user.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $name
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event
     * being audited.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getRequestor(): null|FHIRBoolean
    {
        return $this->requestor;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event
     * being audited.
     *
     * @param null|string|bool|\HL7\FHIR\DSTU1\FHIRBooleanPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean $requestor
     * @return static
     */
    public function setRequestor(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $requestor = null): self
    {
        if (null !== $requestor && !($requestor instanceof FHIRBoolean)) {
            $requestor = new FHIRBoolean($requestor);
        }
        $this->_trackValueSet($this->requestor, $requestor);
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of media involved. Used when the event is about exporting/importing onto
     * media.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCoding
     */
    public function getMedia(): null|FHIRCoding
    {
        return $this->media;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of media involved. Used when the event is about exporting/importing onto
     * media.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCoding $media
     * @return static
     */
    public function setMedia(null|FHIRCoding $media = null): self
    {
        if (null === $media) {
            $media = new FHIRCoding();
        }
        $this->_trackValueSet($this->media, $media);
        $this->media = $media;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Logical network location for application activity, if the activity has a network
     * location.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork
     */
    public function getNetwork(): null|FHIRSecurityEventNetwork
    {
        return $this->network;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Logical network location for application activity, if the activity has a network
     * location.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork $network
     * @return static
     */
    public function setNetwork(null|FHIRSecurityEventNetwork $network = null): self
    {
        if (null === $network) {
            $network = new FHIRSecurityEventNetwork();
        }
        $this->_trackValueSet($this->network, $network);
        $this->network = $network;
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
        if ([] !== ($vs = $this->getRole())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROLE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUserId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USER_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAltId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALT_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedia())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDIA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NETWORK] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USER_ID])) {
            $v = $this->getUserId();
            foreach($validationRules[self::FIELD_USER_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_USER_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USER_ID])) {
                        $errs[self::FIELD_USER_ID] = [];
                    }
                    $errs[self::FIELD_USER_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALT_ID])) {
            $v = $this->getAltId();
            foreach($validationRules[self::FIELD_ALT_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_ALT_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALT_ID])) {
                        $errs[self::FIELD_ALT_ID] = [];
                    }
                    $errs[self::FIELD_ALT_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTOR])) {
            $v = $this->getRequestor();
            foreach($validationRules[self::FIELD_REQUESTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_REQUESTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTOR])) {
                        $errs[self::FIELD_REQUESTOR] = [];
                    }
                    $errs[self::FIELD_REQUESTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDIA])) {
            $v = $this->getMedia();
            foreach($validationRules[self::FIELD_MEDIA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_MEDIA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDIA])) {
                        $errs[self::FIELD_MEDIA] = [];
                    }
                    $errs[self::FIELD_MEDIA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant
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
        } else if (!($type instanceof FHIRSecurityEventParticipant)) {
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
            if (self::FIELD_ROLE === $n->nodeName) {
                $type->addRole(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE === $n->nodeName) {
                $type->setReference(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_USER_ID === $n->nodeName) {
                $type->setUserId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ALT_ID === $n->nodeName) {
                $type->setAltId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REQUESTOR === $n->nodeName) {
                $type->setRequestor(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_MEDIA === $n->nodeName) {
                $type->setMedia(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_NETWORK === $n->nodeName) {
                $type->setNetwork(FHIRSecurityEventNetwork::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_USER_ID);
        if (null !== $n) {
            $pt = $type->getUserId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUserId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ALT_ID);
        if (null !== $n) {
            $pt = $type->getAltId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAltId($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_REQUESTOR);
        if (null !== $n) {
            $pt = $type->getRequestor();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequestor($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SecurityEventParticipant'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getRole())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ROLE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUserId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_USER_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAltId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ALT_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequestor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUESTOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMedia())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MEDIA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNetwork())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NETWORK);
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
        if ([] !== ($vs = $this->getRole())) {
            $out->{self::FIELD_ROLE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ROLE}[] = $v;
            }
        }
        if (null !== ($v = $this->getReference())) {
            $out->{self::FIELD_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getUserId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_USER_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_USER_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAltId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ALT_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ALT_ID_EXT} = $ext;
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
        if (null !== ($v = $this->getRequestor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUESTOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUESTOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMedia())) {
            $out->{self::FIELD_MEDIA} = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $out->{self::FIELD_NETWORK} = $v;
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