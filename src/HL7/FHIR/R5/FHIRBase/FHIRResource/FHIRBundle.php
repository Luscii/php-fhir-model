<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBundleType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRInstantPrimitive;
use HL7\FHIR\R5\FHIRUnsignedIntPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A container for a collection of resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRBundle
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource
 */
class FHIRBundle extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TIMESTAMP_EXT = '_timestamp';
    const FIELD_TOTAL = 'total';
    const FIELD_TOTAL_EXT = '_total';
    const FIELD_LINK = 'link';
    const FIELD_ENTRY = 'entry';
    const FIELD_SIGNATURE = 'signature';
    const FIELD_ISSUES = 'issues';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBundleType
     */
    protected null|FHIRBundleType $type = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $timestamp = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the (potentially estimated) total number of
     * entries of type 'match' across all pages in the search. It does not include
     * search.mode = 'include' or 'outcome' entries and it does not provide a count of
     * the number of entries in the Bundle.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $total = null;
    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    protected null|array $link = [];
    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    protected null|array $entry = [];
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWS.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    protected null|FHIRSignature $signature = null;
    /**
     * Captures issues and warnings that relate to the construction of the Bundle and
     * the content within it.
     *
     * @var null|\HL7\FHIR\R5\|PHPFHIRContainedTypeInterface
     */
    protected null|PHPFHIRContainedTypeInterface $issues = null;

    /**
     * Validation map for fields in type Bundle
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRBundle Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBundleType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRBundleType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRBundleType([FHIRBundleType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRBundleType($ext));
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
        if (isset($data[self::FIELD_TOTAL]) || isset($data[self::FIELD_TOTAL_EXT])) {
            $value = $data[self::FIELD_TOTAL] ?? null;
            $ext = (isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT])) ? $data[self::FIELD_TOTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setTotal($value);
                } else if (is_array($value)) {
                    $this->setTotal(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setTotal(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTotal(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBundleLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRBundleLink($v));
                    }
                }
            } elseif ($data[self::FIELD_LINK] instanceof FHIRBundleLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRBundleLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_ENTRY])) {
            if (is_array($data[self::FIELD_ENTRY])) {
                foreach($data[self::FIELD_ENTRY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBundleEntry) {
                        $this->addEntry($v);
                    } else {
                        $this->addEntry(new FHIRBundleEntry($v));
                    }
                }
            } elseif ($data[self::FIELD_ENTRY] instanceof FHIRBundleEntry) {
                $this->addEntry($data[self::FIELD_ENTRY]);
            } else {
                $this->addEntry(new FHIRBundleEntry($data[self::FIELD_ENTRY]));
            }
        }
        if (isset($data[self::FIELD_SIGNATURE])) {
            if ($data[self::FIELD_SIGNATURE] instanceof FHIRSignature) {
                $this->setSignature($data[self::FIELD_SIGNATURE]);
            } else {
                $this->setSignature(new FHIRSignature($data[self::FIELD_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_ISSUES])) {
            if (is_object($data[self::FIELD_ISSUES])) {
                if ($data[self::FIELD_ISSUES] instanceof PHPFHIRContainedTypeInterface) {
                    $this->setIssues($data[self::FIELD_ISSUES]);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundle - Field "issues" must be an object implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($data[self::FIELD_ISSUES])
                    ));
                }
            } elseif (is_array($data[self::FIELD_ISSUES])) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_ISSUES]);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundle - Unable to determine class for field "issues" from value: %s',
                        json_encode($data[self::FIELD_ISSUES])
                    ));
                }
                $this->setIssues(new $typeClass($data[self::FIELD_ISSUES]));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRBundle - Unable to determine class for field "issues" from value: %s',
                    json_encode($data[self::FIELD_ISSUES])
                ));
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
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBundleType
     */
    public function getType(): null|FHIRBundleType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBundleType $type
     * @return static
     */
    public function setType(null|FHIRBundleType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRBundleType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
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
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
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
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
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
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the (potentially estimated) total number of
     * entries of type 'match' across all pages in the search. It does not include
     * search.mode = 'include' or 'outcome' entries and it does not provide a count of
     * the number of entries in the Bundle.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getTotal(): null|FHIRUnsignedInt
    {
        return $this->total;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the (potentially estimated) total number of
     * entries of type 'match' across all pages in the search. It does not include
     * search.mode = 'include' or 'outcome' entries and it does not provide a count of
     * the number of entries in the Bundle.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $total
     * @return static
     */
    public function setTotal(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $total = null): self
    {
        if (null !== $total && !($total instanceof FHIRUnsignedInt)) {
            $total = new FHIRUnsignedInt($total);
        }
        $this->_trackValueSet($this->total, $total);
        $this->total = $total;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink(): null|array
    {
        return $this->link;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return static
     */
    public function addLink(null|FHIRBundleLink $link = null): self
    {
        if (null === $link) {
            $link = new FHIRBundleLink();
        }
        $this->_trackValueAdded();
        $this->link[] = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @return static
     */
    public function setLink(array $link = []): self
    {
        if ([] !== $this->link) {
            $this->_trackValuesRemoved(count($this->link));
            $this->link = [];
        }
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRBundleLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRBundleLink($v));
            }
        }
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    public function getEntry(): null|array
    {
        return $this->entry;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $entry
     * @return static
     */
    public function addEntry(null|FHIRBundleEntry $entry = null): self
    {
        if (null === $entry) {
            $entry = new FHIRBundleEntry();
        }
        $this->_trackValueAdded();
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[] $entry
     * @return static
     */
    public function setEntry(array $entry = []): self
    {
        if ([] !== $this->entry) {
            $this->_trackValuesRemoved(count($this->entry));
            $this->entry = [];
        }
        if ([] === $entry) {
            return $this;
        }
        foreach($entry as $v) {
            if ($v instanceof FHIRBundleEntry) {
                $this->addEntry($v);
            } else {
                $this->addEntry(new FHIRBundleEntry($v));
            }
        }
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWS.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    public function getSignature(): null|FHIRSignature
    {
        return $this->signature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWS.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $signature
     * @return static
     */
    public function setSignature(null|FHIRSignature $signature = null): self
    {
        if (null === $signature) {
            $signature = new FHIRSignature();
        }
        $this->_trackValueSet($this->signature, $signature);
        $this->signature = $signature;
        return $this;
    }

    /**
     * Captures issues and warnings that relate to the construction of the Bundle and
     * the content within it.
     *
     * @return null|\HL7\FHIR\R5\|PHPFHIRContainedTypeInterface
     */
    public function getIssues(): null|PHPFHIRContainedTypeInterface
    {
        return $this->issues;
    }

    /**
     * Captures issues and warnings that relate to the construction of the Bundle and
     * the content within it.
     *
     * @param null|\HL7\FHIR\R5\PHPFHIRContainedTypeInterface $issues
     * @return static
     */
    public function setIssues(?PHPFHIRContainedTypeInterface $issues = null): self
    {
        $this->_trackValueSet($this->issues, $issues);
        $this->issues = $issues;
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMESTAMP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTRY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssues())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMESTAMP])) {
            $v = $this->getTimestamp();
            foreach($validationRules[self::FIELD_TIMESTAMP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_TIMESTAMP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMESTAMP])) {
                        $errs[self::FIELD_TIMESTAMP] = [];
                    }
                    $errs[self::FIELD_TIMESTAMP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL])) {
            $v = $this->getTotal();
            foreach($validationRules[self::FIELD_TOTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_TOTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL])) {
                        $errs[self::FIELD_TOTAL] = [];
                    }
                    $errs[self::FIELD_TOTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY])) {
            $v = $this->getEntry();
            foreach($validationRules[self::FIELD_ENTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_ENTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY])) {
                        $errs[self::FIELD_ENTRY] = [];
                    }
                    $errs[self::FIELD_ENTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIGNATURE])) {
            $v = $this->getSignature();
            foreach($validationRules[self::FIELD_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIGNATURE])) {
                        $errs[self::FIELD_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUES])) {
            $v = $this->getIssues();
            foreach($validationRules[self::FIELD_ISSUES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_ISSUES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUES])) {
                        $errs[self::FIELD_ISSUES] = [];
                    }
                    $errs[self::FIELD_ISSUES][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRBundle $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRBundle
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
        } else if (!($type instanceof FHIRBundle)) {
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
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRBundleType::xmlUnserialize($n));
            } elseif (self::FIELD_TIMESTAMP === $n->nodeName) {
                $type->setTimestamp(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_TOTAL === $n->nodeName) {
                $type->setTotal(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_LINK === $n->nodeName) {
                $type->addLink(FHIRBundleLink::xmlUnserialize($n));
            } elseif (self::FIELD_ENTRY === $n->nodeName) {
                $type->addEntry(FHIRBundleEntry::xmlUnserialize($n));
            } elseif (self::FIELD_SIGNATURE === $n->nodeName) {
                $type->setSignature(FHIRSignature::xmlUnserialize($n));
            } elseif (self::FIELD_ISSUES === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->setIssues(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
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
        $n = $element->attributes->getNamedItem(self::FIELD_TIMESTAMP);
        if (null !== $n) {
            $pt = $type->getTimestamp();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTimestamp($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TOTAL);
        if (null !== $n) {
            $pt = $type->getTotal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTotal($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Bundle'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTimestamp())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TIMESTAMP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTotal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TOTAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LINK);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENTRY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getSignature())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SIGNATURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIssues())) {
            $e2 = $element->ownerDocument->createElement(self::FIELD_ISSUES);
            $element->appendChild($e2);
            $e3 = $element->ownerDocument->createElement($v->_getFHIRTypeName());
            $e2->appendChild($e3);
            $v->xmlSerialize($e3);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBundleType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
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
        if (null !== ($v = $this->getTotal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TOTAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TOTAL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $out->{self::FIELD_LINK} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LINK}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEntry())) {
            $out->{self::FIELD_ENTRY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENTRY}[] = $v;
            }
        }
        if (null !== ($v = $this->getSignature())) {
            $out->{self::FIELD_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getIssues())) {
            $out->{self::FIELD_ISSUES} = $v;
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