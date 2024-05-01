<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 *
 * Class FHIRVerificationResultAttestation
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult
 */
class FHIRVerificationResultAttestation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION;

    const FIELD_WHO = 'who';
    const FIELD_ON_BEHALF_OF = 'onBehalfOf';
    const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_SOURCE_IDENTITY_CERTIFICATE = 'sourceIdentityCertificate';
    const FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT = '_sourceIdentityCertificate';
    const FIELD_PROXY_IDENTITY_CERTIFICATE = 'proxyIdentityCertificate';
    const FIELD_PROXY_IDENTITY_CERTIFICATE_EXT = '_proxyIdentityCertificate';
    const FIELD_PROXY_SIGNATURE = 'proxySignature';
    const FIELD_SOURCE_SIGNATURE = 'sourceSignature';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $who = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $onBehalfOf = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $communicationMethod = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $sourceIdentityCertificate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $proxyIdentityCertificate = null;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the proxy entity indicating that they have the right to
     * submit attested information on behalf of the attestation source.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    protected null|FHIRSignature $proxySignature = null;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the attestation source that they have attested to the
     * information.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    protected null|FHIRSignature $sourceSignature = null;

    /**
     * Validation map for fields in type VerificationResult.Attestation
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRVerificationResultAttestation Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_WHO])) {
            if ($data[self::FIELD_WHO] instanceof FHIRReference) {
                $this->setWho($data[self::FIELD_WHO]);
            } else {
                $this->setWho(new FHIRReference($data[self::FIELD_WHO]));
            }
        }
        if (isset($data[self::FIELD_ON_BEHALF_OF])) {
            if ($data[self::FIELD_ON_BEHALF_OF] instanceof FHIRReference) {
                $this->setOnBehalfOf($data[self::FIELD_ON_BEHALF_OF]);
            } else {
                $this->setOnBehalfOf(new FHIRReference($data[self::FIELD_ON_BEHALF_OF]));
            }
        }
        if (isset($data[self::FIELD_COMMUNICATION_METHOD])) {
            if ($data[self::FIELD_COMMUNICATION_METHOD] instanceof FHIRCodeableConcept) {
                $this->setCommunicationMethod($data[self::FIELD_COMMUNICATION_METHOD]);
            } else {
                $this->setCommunicationMethod(new FHIRCodeableConcept($data[self::FIELD_COMMUNICATION_METHOD]));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE]) || isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT])) {
            $value = $data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] ?? null;
            $ext = (isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT])) ? $data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSourceIdentityCertificate($value);
                } else if (is_array($value)) {
                    $this->setSourceIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSourceIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSourceIdentityCertificate(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE]) || isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT])) {
            $value = $data[self::FIELD_PROXY_IDENTITY_CERTIFICATE] ?? null;
            $ext = (isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT])) ? $data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setProxyIdentityCertificate($value);
                } else if (is_array($value)) {
                    $this->setProxyIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setProxyIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProxyIdentityCertificate(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PROXY_SIGNATURE])) {
            if ($data[self::FIELD_PROXY_SIGNATURE] instanceof FHIRSignature) {
                $this->setProxySignature($data[self::FIELD_PROXY_SIGNATURE]);
            } else {
                $this->setProxySignature(new FHIRSignature($data[self::FIELD_PROXY_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_SIGNATURE])) {
            if ($data[self::FIELD_SOURCE_SIGNATURE] instanceof FHIRSignature) {
                $this->setSourceSignature($data[self::FIELD_SOURCE_SIGNATURE]);
            } else {
                $this->setSourceSignature(new FHIRSignature($data[self::FIELD_SOURCE_SIGNATURE]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getWho(): null|FHIRReference
    {
        return $this->who;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $who
     * @return static
     */
    public function setWho(null|FHIRReference $who = null): self
    {
        if (null === $who) {
            $who = new FHIRReference();
        }
        $this->_trackValueSet($this->who, $who);
        $this->who = $who;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getOnBehalfOf(): null|FHIRReference
    {
        return $this->onBehalfOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $onBehalfOf
     * @return static
     */
    public function setOnBehalfOf(null|FHIRReference $onBehalfOf = null): self
    {
        if (null === $onBehalfOf) {
            $onBehalfOf = new FHIRReference();
        }
        $this->_trackValueSet($this->onBehalfOf, $onBehalfOf);
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCommunicationMethod(): null|FHIRCodeableConcept
    {
        return $this->communicationMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $communicationMethod
     * @return static
     */
    public function setCommunicationMethod(null|FHIRCodeableConcept $communicationMethod = null): self
    {
        if (null === $communicationMethod) {
            $communicationMethod = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->communicationMethod, $communicationMethod);
        $this->communicationMethod = $communicationMethod;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getDate(): null|FHIRDate
    {
        return $this->date;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null): self
    {
        if (null !== $date && !($date instanceof FHIRDate)) {
            $date = new FHIRDate($date);
        }
        $this->_trackValueSet($this->date, $date);
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSourceIdentityCertificate(): null|FHIRString
    {
        return $this->sourceIdentityCertificate;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $sourceIdentityCertificate
     * @return static
     */
    public function setSourceIdentityCertificate(null|string|FHIRStringPrimitive|FHIRString $sourceIdentityCertificate = null): self
    {
        if (null !== $sourceIdentityCertificate && !($sourceIdentityCertificate instanceof FHIRString)) {
            $sourceIdentityCertificate = new FHIRString($sourceIdentityCertificate);
        }
        $this->_trackValueSet($this->sourceIdentityCertificate, $sourceIdentityCertificate);
        $this->sourceIdentityCertificate = $sourceIdentityCertificate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getProxyIdentityCertificate(): null|FHIRString
    {
        return $this->proxyIdentityCertificate;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $proxyIdentityCertificate
     * @return static
     */
    public function setProxyIdentityCertificate(null|string|FHIRStringPrimitive|FHIRString $proxyIdentityCertificate = null): self
    {
        if (null !== $proxyIdentityCertificate && !($proxyIdentityCertificate instanceof FHIRString)) {
            $proxyIdentityCertificate = new FHIRString($proxyIdentityCertificate);
        }
        $this->_trackValueSet($this->proxyIdentityCertificate, $proxyIdentityCertificate);
        $this->proxyIdentityCertificate = $proxyIdentityCertificate;
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
     * Signed assertion by the proxy entity indicating that they have the right to
     * submit attested information on behalf of the attestation source.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    public function getProxySignature(): null|FHIRSignature
    {
        return $this->proxySignature;
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
     * Signed assertion by the proxy entity indicating that they have the right to
     * submit attested information on behalf of the attestation source.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $proxySignature
     * @return static
     */
    public function setProxySignature(null|FHIRSignature $proxySignature = null): self
    {
        if (null === $proxySignature) {
            $proxySignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->proxySignature, $proxySignature);
        $this->proxySignature = $proxySignature;
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
     * Signed assertion by the attestation source that they have attested to the
     * information.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    public function getSourceSignature(): null|FHIRSignature
    {
        return $this->sourceSignature;
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
     * Signed assertion by the attestation source that they have attested to the
     * information.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $sourceSignature
     * @return static
     */
    public function setSourceSignature(null|FHIRSignature $sourceSignature = null): self
    {
        if (null === $sourceSignature) {
            $sourceSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->sourceSignature, $sourceSignature);
        $this->sourceSignature = $sourceSignature;
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
        if (null !== ($v = $this->getWho())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ON_BEHALF_OF] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCommunicationMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMUNICATION_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProxySignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROXY_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_SIGNATURE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_WHO])) {
            $v = $this->getWho();
            foreach($validationRules[self::FIELD_WHO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_WHO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO])) {
                        $errs[self::FIELD_WHO] = [];
                    }
                    $errs[self::FIELD_WHO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ON_BEHALF_OF])) {
            $v = $this->getOnBehalfOf();
            foreach($validationRules[self::FIELD_ON_BEHALF_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_ON_BEHALF_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ON_BEHALF_OF])) {
                        $errs[self::FIELD_ON_BEHALF_OF] = [];
                    }
                    $errs[self::FIELD_ON_BEHALF_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMUNICATION_METHOD])) {
            $v = $this->getCommunicationMethod();
            foreach($validationRules[self::FIELD_COMMUNICATION_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_COMMUNICATION_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMUNICATION_METHOD])) {
                        $errs[self::FIELD_COMMUNICATION_METHOD] = [];
                    }
                    $errs[self::FIELD_COMMUNICATION_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
            $v = $this->getSourceIdentityCertificate();
            foreach($validationRules[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
                        $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = [];
                    }
                    $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
            $v = $this->getProxyIdentityCertificate();
            foreach($validationRules[self::FIELD_PROXY_IDENTITY_CERTIFICATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_PROXY_IDENTITY_CERTIFICATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
                        $errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE] = [];
                    }
                    $errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROXY_SIGNATURE])) {
            $v = $this->getProxySignature();
            foreach($validationRules[self::FIELD_PROXY_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_PROXY_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROXY_SIGNATURE])) {
                        $errs[self::FIELD_PROXY_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_PROXY_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_SIGNATURE])) {
            $v = $this->getSourceSignature();
            foreach($validationRules[self::FIELD_SOURCE_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_SOURCE_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_SIGNATURE])) {
                        $errs[self::FIELD_SOURCE_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_SOURCE_SIGNATURE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
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
        } else if (!($type instanceof FHIRVerificationResultAttestation)) {
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
            if (self::FIELD_WHO === $n->nodeName) {
                $type->setWho(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ON_BEHALF_OF === $n->nodeName) {
                $type->setOnBehalfOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_COMMUNICATION_METHOD === $n->nodeName) {
                $type->setCommunicationMethod(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_IDENTITY_CERTIFICATE === $n->nodeName) {
                $type->setSourceIdentityCertificate(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PROXY_IDENTITY_CERTIFICATE === $n->nodeName) {
                $type->setProxyIdentityCertificate(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PROXY_SIGNATURE === $n->nodeName) {
                $type->setProxySignature(FHIRSignature::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_SIGNATURE === $n->nodeName) {
                $type->setSourceSignature(FHIRSignature::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATE);
        if (null !== $n) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SOURCE_IDENTITY_CERTIFICATE);
        if (null !== $n) {
            $pt = $type->getSourceIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSourceIdentityCertificate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PROXY_IDENTITY_CERTIFICATE);
        if (null !== $n) {
            $pt = $type->getProxyIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setProxyIdentityCertificate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('VerificationResultAttestation'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getWho())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ON_BEHALF_OF);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCommunicationMethod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMMUNICATION_METHOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_IDENTITY_CERTIFICATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROXY_IDENTITY_CERTIFICATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProxySignature())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROXY_SIGNATURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSourceSignature())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_SIGNATURE);
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
        if (null !== ($v = $this->getWho())) {
            $out->{self::FIELD_WHO} = $v;
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $out->{self::FIELD_ON_BEHALF_OF} = $v;
        }
        if (null !== ($v = $this->getCommunicationMethod())) {
            $out->{self::FIELD_COMMUNICATION_METHOD} = $v;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SOURCE_IDENTITY_CERTIFICATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROXY_IDENTITY_CERTIFICATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProxySignature())) {
            $out->{self::FIELD_PROXY_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getSourceSignature())) {
            $out->{self::FIELD_SOURCE_SIGNATURE} = $v;
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