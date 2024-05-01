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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentState;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A record of a healthcare consumer’s choices or choices made on their behalf by
 * a third party, which permits or denies identified recipient(s) or recipient
 * role(s) to perform one or more actions within a given policy context, for
 * specific purposes and periods of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRConsent
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRConsent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CATEGORY = 'category';
    const FIELD_SUBJECT = 'subject';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_PERIOD = 'period';
    const FIELD_GRANTOR = 'grantor';
    const FIELD_GRANTEE = 'grantee';
    const FIELD_MANAGER = 'manager';
    const FIELD_CONTROLLER = 'controller';
    const FIELD_SOURCE_ATTACHMENT = 'sourceAttachment';
    const FIELD_SOURCE_REFERENCE = 'sourceReference';
    const FIELD_REGULATORY_BASIS = 'regulatoryBasis';
    const FIELD_POLICY_BASIS = 'policyBasis';
    const FIELD_POLICY_TEXT = 'policyText';
    const FIELD_VERIFICATION = 'verification';
    const FIELD_DECISION = 'decision';
    const FIELD_DECISION_EXT = '_decision';
    const FIELD_PROVISION = 'provision';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this Consent resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentState
     */
    protected null|FHIRConsentState $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $category = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare practitioner or group of persons to whom this consent
     * applies.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the consent instance was agreed to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $date = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Effective period for this Consent Resource and all provisions unless specified
     * in that provision.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $grantor = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $grantee = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $manager = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $controller = [];
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    protected null|array $sourceAttachment = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $sourceReference = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $regulatoryBasis = [];
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * A Reference or URL used to uniquely identify the policy the organization will
     * enforce for this Consent. This Reference or URL should be specific to the
     * version of the policy and should be dereferencable to a computable policy of
     * some form.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis
     */
    protected null|FHIRConsentPolicyBasis $policyBasis = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $policyText = [];
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[]
     */
    protected null|array $verification = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Action to take - permit or deny - as default.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType
     */
    protected null|FHIRConsentProvisionType $decision = null;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[]
     */
    protected null|array $provision = [];

    /**
     * Validation map for fields in type Consent
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRConsent Constructor
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConsentState) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRConsentState(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRConsentState([FHIRConsentState::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRConsentState($ext));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_GRANTOR])) {
            if (is_array($data[self::FIELD_GRANTOR])) {
                foreach($data[self::FIELD_GRANTOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addGrantor($v);
                    } else {
                        $this->addGrantor(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_GRANTOR] instanceof FHIRReference) {
                $this->addGrantor($data[self::FIELD_GRANTOR]);
            } else {
                $this->addGrantor(new FHIRReference($data[self::FIELD_GRANTOR]));
            }
        }
        if (isset($data[self::FIELD_GRANTEE])) {
            if (is_array($data[self::FIELD_GRANTEE])) {
                foreach($data[self::FIELD_GRANTEE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addGrantee($v);
                    } else {
                        $this->addGrantee(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_GRANTEE] instanceof FHIRReference) {
                $this->addGrantee($data[self::FIELD_GRANTEE]);
            } else {
                $this->addGrantee(new FHIRReference($data[self::FIELD_GRANTEE]));
            }
        }
        if (isset($data[self::FIELD_MANAGER])) {
            if (is_array($data[self::FIELD_MANAGER])) {
                foreach($data[self::FIELD_MANAGER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addManager($v);
                    } else {
                        $this->addManager(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MANAGER] instanceof FHIRReference) {
                $this->addManager($data[self::FIELD_MANAGER]);
            } else {
                $this->addManager(new FHIRReference($data[self::FIELD_MANAGER]));
            }
        }
        if (isset($data[self::FIELD_CONTROLLER])) {
            if (is_array($data[self::FIELD_CONTROLLER])) {
                foreach($data[self::FIELD_CONTROLLER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addController($v);
                    } else {
                        $this->addController(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTROLLER] instanceof FHIRReference) {
                $this->addController($data[self::FIELD_CONTROLLER]);
            } else {
                $this->addController(new FHIRReference($data[self::FIELD_CONTROLLER]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ATTACHMENT])) {
            if (is_array($data[self::FIELD_SOURCE_ATTACHMENT])) {
                foreach($data[self::FIELD_SOURCE_ATTACHMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAttachment) {
                        $this->addSourceAttachment($v);
                    } else {
                        $this->addSourceAttachment(new FHIRAttachment($v));
                    }
                }
            } elseif ($data[self::FIELD_SOURCE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->addSourceAttachment($data[self::FIELD_SOURCE_ATTACHMENT]);
            } else {
                $this->addSourceAttachment(new FHIRAttachment($data[self::FIELD_SOURCE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_REFERENCE])) {
            if (is_array($data[self::FIELD_SOURCE_REFERENCE])) {
                foreach($data[self::FIELD_SOURCE_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSourceReference($v);
                    } else {
                        $this->addSourceReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SOURCE_REFERENCE] instanceof FHIRReference) {
                $this->addSourceReference($data[self::FIELD_SOURCE_REFERENCE]);
            } else {
                $this->addSourceReference(new FHIRReference($data[self::FIELD_SOURCE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REGULATORY_BASIS])) {
            if (is_array($data[self::FIELD_REGULATORY_BASIS])) {
                foreach($data[self::FIELD_REGULATORY_BASIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRegulatoryBasis($v);
                    } else {
                        $this->addRegulatoryBasis(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REGULATORY_BASIS] instanceof FHIRCodeableConcept) {
                $this->addRegulatoryBasis($data[self::FIELD_REGULATORY_BASIS]);
            } else {
                $this->addRegulatoryBasis(new FHIRCodeableConcept($data[self::FIELD_REGULATORY_BASIS]));
            }
        }
        if (isset($data[self::FIELD_POLICY_BASIS])) {
            if ($data[self::FIELD_POLICY_BASIS] instanceof FHIRConsentPolicyBasis) {
                $this->setPolicyBasis($data[self::FIELD_POLICY_BASIS]);
            } else {
                $this->setPolicyBasis(new FHIRConsentPolicyBasis($data[self::FIELD_POLICY_BASIS]));
            }
        }
        if (isset($data[self::FIELD_POLICY_TEXT])) {
            if (is_array($data[self::FIELD_POLICY_TEXT])) {
                foreach($data[self::FIELD_POLICY_TEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPolicyText($v);
                    } else {
                        $this->addPolicyText(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_POLICY_TEXT] instanceof FHIRReference) {
                $this->addPolicyText($data[self::FIELD_POLICY_TEXT]);
            } else {
                $this->addPolicyText(new FHIRReference($data[self::FIELD_POLICY_TEXT]));
            }
        }
        if (isset($data[self::FIELD_VERIFICATION])) {
            if (is_array($data[self::FIELD_VERIFICATION])) {
                foreach($data[self::FIELD_VERIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentVerification) {
                        $this->addVerification($v);
                    } else {
                        $this->addVerification(new FHIRConsentVerification($v));
                    }
                }
            } elseif ($data[self::FIELD_VERIFICATION] instanceof FHIRConsentVerification) {
                $this->addVerification($data[self::FIELD_VERIFICATION]);
            } else {
                $this->addVerification(new FHIRConsentVerification($data[self::FIELD_VERIFICATION]));
            }
        }
        if (isset($data[self::FIELD_DECISION]) || isset($data[self::FIELD_DECISION_EXT])) {
            $value = $data[self::FIELD_DECISION] ?? null;
            $ext = (isset($data[self::FIELD_DECISION_EXT]) && is_array($data[self::FIELD_DECISION_EXT])) ? $data[self::FIELD_DECISION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConsentProvisionType) {
                    $this->setDecision($value);
                } else if (is_array($value)) {
                    $this->setDecision(new FHIRConsentProvisionType(array_merge($ext, $value)));
                } else {
                    $this->setDecision(new FHIRConsentProvisionType([FHIRConsentProvisionType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDecision(new FHIRConsentProvisionType($ext));
            }
        }
        if (isset($data[self::FIELD_PROVISION])) {
            if (is_array($data[self::FIELD_PROVISION])) {
                foreach($data[self::FIELD_PROVISION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentProvision) {
                        $this->addProvision($v);
                    } else {
                        $this->addProvision(new FHIRConsentProvision($v));
                    }
                }
            } elseif ($data[self::FIELD_PROVISION] instanceof FHIRConsentProvision) {
                $this->addProvision($data[self::FIELD_PROVISION]);
            } else {
                $this->addProvision(new FHIRConsentProvision($data[self::FIELD_PROVISION]));
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
     * Unique identifier for this copy of the Consent Statement.
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
     * Unique identifier for this copy of the Consent Statement.
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
     * Unique identifier for this copy of the Consent Statement.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this Consent resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentState
     */
    public function getStatus(): null|FHIRConsentState
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this Consent resource.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentState $status
     * @return static
     */
    public function setStatus(null|FHIRConsentState $status = null): self
    {
        if (null === $status) {
            $status = new FHIRConsentState();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): null|array
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = []): self
    {
        if ([] !== $this->category) {
            $this->_trackValuesRemoved(count($this->category));
            $this->category = [];
        }
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare practitioner or group of persons to whom this consent
     * applies.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare practitioner or group of persons to whom this consent
     * applies.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the consent instance was agreed to.
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
     * Date the consent instance was agreed to.
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Effective period for this Consent Resource and all provisions unless specified
     * in that provision.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Effective period for this Consent Resource and all provisions unless specified
     * in that provision.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getGrantor(): null|array
    {
        return $this->grantor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $grantor
     * @return static
     */
    public function addGrantor(null|FHIRReference $grantor = null): self
    {
        if (null === $grantor) {
            $grantor = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->grantor[] = $grantor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $grantor
     * @return static
     */
    public function setGrantor(array $grantor = []): self
    {
        if ([] !== $this->grantor) {
            $this->_trackValuesRemoved(count($this->grantor));
            $this->grantor = [];
        }
        if ([] === $grantor) {
            return $this;
        }
        foreach($grantor as $v) {
            if ($v instanceof FHIRReference) {
                $this->addGrantor($v);
            } else {
                $this->addGrantor(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getGrantee(): null|array
    {
        return $this->grantee;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $grantee
     * @return static
     */
    public function addGrantee(null|FHIRReference $grantee = null): self
    {
        if (null === $grantee) {
            $grantee = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->grantee[] = $grantee;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $grantee
     * @return static
     */
    public function setGrantee(array $grantee = []): self
    {
        if ([] !== $this->grantee) {
            $this->_trackValuesRemoved(count($this->grantee));
            $this->grantee = [];
        }
        if ([] === $grantee) {
            return $this;
        }
        foreach($grantee as $v) {
            if ($v instanceof FHIRReference) {
                $this->addGrantee($v);
            } else {
                $this->addGrantee(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getManager(): null|array
    {
        return $this->manager;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $manager
     * @return static
     */
    public function addManager(null|FHIRReference $manager = null): self
    {
        if (null === $manager) {
            $manager = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->manager[] = $manager;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $manager
     * @return static
     */
    public function setManager(array $manager = []): self
    {
        if ([] !== $this->manager) {
            $this->_trackValuesRemoved(count($this->manager));
            $this->manager = [];
        }
        if ([] === $manager) {
            return $this;
        }
        foreach($manager as $v) {
            if ($v instanceof FHIRReference) {
                $this->addManager($v);
            } else {
                $this->addManager(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getController(): null|array
    {
        return $this->controller;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $controller
     * @return static
     */
    public function addController(null|FHIRReference $controller = null): self
    {
        if (null === $controller) {
            $controller = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->controller[] = $controller;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $controller
     * @return static
     */
    public function setController(array $controller = []): self
    {
        if ([] !== $this->controller) {
            $this->_trackValuesRemoved(count($this->controller));
            $this->controller = [];
        }
        if ([] === $controller) {
            return $this;
        }
        foreach($controller as $v) {
            if ($v instanceof FHIRReference) {
                $this->addController($v);
            } else {
                $this->addController(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    public function getSourceAttachment(): null|array
    {
        return $this->sourceAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $sourceAttachment
     * @return static
     */
    public function addSourceAttachment(null|FHIRAttachment $sourceAttachment = null): self
    {
        if (null === $sourceAttachment) {
            $sourceAttachment = new FHIRAttachment();
        }
        $this->_trackValueAdded();
        $this->sourceAttachment[] = $sourceAttachment;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[] $sourceAttachment
     * @return static
     */
    public function setSourceAttachment(array $sourceAttachment = []): self
    {
        if ([] !== $this->sourceAttachment) {
            $this->_trackValuesRemoved(count($this->sourceAttachment));
            $this->sourceAttachment = [];
        }
        if ([] === $sourceAttachment) {
            return $this;
        }
        foreach($sourceAttachment as $v) {
            if ($v instanceof FHIRAttachment) {
                $this->addSourceAttachment($v);
            } else {
                $this->addSourceAttachment(new FHIRAttachment($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSourceReference(): null|array
    {
        return $this->sourceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $sourceReference
     * @return static
     */
    public function addSourceReference(null|FHIRReference $sourceReference = null): self
    {
        if (null === $sourceReference) {
            $sourceReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->sourceReference[] = $sourceReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $sourceReference
     * @return static
     */
    public function setSourceReference(array $sourceReference = []): self
    {
        if ([] !== $this->sourceReference) {
            $this->_trackValuesRemoved(count($this->sourceReference));
            $this->sourceReference = [];
        }
        if ([] === $sourceReference) {
            return $this;
        }
        foreach($sourceReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSourceReference($v);
            } else {
                $this->addSourceReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRegulatoryBasis(): null|array
    {
        return $this->regulatoryBasis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $regulatoryBasis
     * @return static
     */
    public function addRegulatoryBasis(null|FHIRCodeableConcept $regulatoryBasis = null): self
    {
        if (null === $regulatoryBasis) {
            $regulatoryBasis = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->regulatoryBasis[] = $regulatoryBasis;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $regulatoryBasis
     * @return static
     */
    public function setRegulatoryBasis(array $regulatoryBasis = []): self
    {
        if ([] !== $this->regulatoryBasis) {
            $this->_trackValuesRemoved(count($this->regulatoryBasis));
            $this->regulatoryBasis = [];
        }
        if ([] === $regulatoryBasis) {
            return $this;
        }
        foreach($regulatoryBasis as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRegulatoryBasis($v);
            } else {
                $this->addRegulatoryBasis(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * A Reference or URL used to uniquely identify the policy the organization will
     * enforce for this Consent. This Reference or URL should be specific to the
     * version of the policy and should be dereferencable to a computable policy of
     * some form.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis
     */
    public function getPolicyBasis(): null|FHIRConsentPolicyBasis
    {
        return $this->policyBasis;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * A Reference or URL used to uniquely identify the policy the organization will
     * enforce for this Consent. This Reference or URL should be specific to the
     * version of the policy and should be dereferencable to a computable policy of
     * some form.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis $policyBasis
     * @return static
     */
    public function setPolicyBasis(null|FHIRConsentPolicyBasis $policyBasis = null): self
    {
        if (null === $policyBasis) {
            $policyBasis = new FHIRConsentPolicyBasis();
        }
        $this->_trackValueSet($this->policyBasis, $policyBasis);
        $this->policyBasis = $policyBasis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getPolicyText(): null|array
    {
        return $this->policyText;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $policyText
     * @return static
     */
    public function addPolicyText(null|FHIRReference $policyText = null): self
    {
        if (null === $policyText) {
            $policyText = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->policyText[] = $policyText;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $policyText
     * @return static
     */
    public function setPolicyText(array $policyText = []): self
    {
        if ([] !== $this->policyText) {
            $this->_trackValuesRemoved(count($this->policyText));
            $this->policyText = [];
        }
        if ([] === $policyText) {
            return $this;
        }
        foreach($policyText as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPolicyText($v);
            } else {
                $this->addPolicyText(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[]
     */
    public function getVerification(): null|array
    {
        return $this->verification;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $verification
     * @return static
     */
    public function addVerification(null|FHIRConsentVerification $verification = null): self
    {
        if (null === $verification) {
            $verification = new FHIRConsentVerification();
        }
        $this->_trackValueAdded();
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[] $verification
     * @return static
     */
    public function setVerification(array $verification = []): self
    {
        if ([] !== $this->verification) {
            $this->_trackValuesRemoved(count($this->verification));
            $this->verification = [];
        }
        if ([] === $verification) {
            return $this;
        }
        foreach($verification as $v) {
            if ($v instanceof FHIRConsentVerification) {
                $this->addVerification($v);
            } else {
                $this->addVerification(new FHIRConsentVerification($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Action to take - permit or deny - as default.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType
     */
    public function getDecision(): null|FHIRConsentProvisionType
    {
        return $this->decision;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Action to take - permit or deny - as default.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType $decision
     * @return static
     */
    public function setDecision(null|FHIRConsentProvisionType $decision = null): self
    {
        if (null === $decision) {
            $decision = new FHIRConsentProvisionType();
        }
        $this->_trackValueSet($this->decision, $decision);
        $this->decision = $decision;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[]
     */
    public function getProvision(): null|array
    {
        return $this->provision;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision $provision
     * @return static
     */
    public function addProvision(null|FHIRConsentProvision $provision = null): self
    {
        if (null === $provision) {
            $provision = new FHIRConsentProvision();
        }
        $this->_trackValueAdded();
        $this->provision[] = $provision;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[] $provision
     * @return static
     */
    public function setProvision(array $provision = []): self
    {
        if ([] !== $this->provision) {
            $this->_trackValuesRemoved(count($this->provision));
            $this->provision = [];
        }
        if ([] === $provision) {
            return $this;
        }
        foreach($provision as $v) {
            if ($v instanceof FHIRConsentProvision) {
                $this->addProvision($v);
            } else {
                $this->addProvision(new FHIRConsentProvision($v));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGrantor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GRANTOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGrantee())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GRANTEE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getManager())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANAGER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getController())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTROLLER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSourceAttachment())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE_ATTACHMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSourceReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRegulatoryBasis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REGULATORY_BASIS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPolicyBasis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLICY_BASIS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPolicyText())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POLICY_TEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getVerification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDecision())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECISION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProvision())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROVISION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GRANTOR])) {
            $v = $this->getGrantor();
            foreach($validationRules[self::FIELD_GRANTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_GRANTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GRANTOR])) {
                        $errs[self::FIELD_GRANTOR] = [];
                    }
                    $errs[self::FIELD_GRANTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GRANTEE])) {
            $v = $this->getGrantee();
            foreach($validationRules[self::FIELD_GRANTEE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_GRANTEE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GRANTEE])) {
                        $errs[self::FIELD_GRANTEE] = [];
                    }
                    $errs[self::FIELD_GRANTEE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANAGER])) {
            $v = $this->getManager();
            foreach($validationRules[self::FIELD_MANAGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_MANAGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANAGER])) {
                        $errs[self::FIELD_MANAGER] = [];
                    }
                    $errs[self::FIELD_MANAGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTROLLER])) {
            $v = $this->getController();
            foreach($validationRules[self::FIELD_CONTROLLER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_CONTROLLER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTROLLER])) {
                        $errs[self::FIELD_CONTROLLER] = [];
                    }
                    $errs[self::FIELD_CONTROLLER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_ATTACHMENT])) {
            $v = $this->getSourceAttachment();
            foreach($validationRules[self::FIELD_SOURCE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SOURCE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_ATTACHMENT])) {
                        $errs[self::FIELD_SOURCE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_SOURCE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_REFERENCE])) {
            $v = $this->getSourceReference();
            foreach($validationRules[self::FIELD_SOURCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SOURCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_REFERENCE])) {
                        $errs[self::FIELD_SOURCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SOURCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATORY_BASIS])) {
            $v = $this->getRegulatoryBasis();
            foreach($validationRules[self::FIELD_REGULATORY_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_REGULATORY_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATORY_BASIS])) {
                        $errs[self::FIELD_REGULATORY_BASIS] = [];
                    }
                    $errs[self::FIELD_REGULATORY_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_BASIS])) {
            $v = $this->getPolicyBasis();
            foreach($validationRules[self::FIELD_POLICY_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_POLICY_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_BASIS])) {
                        $errs[self::FIELD_POLICY_BASIS] = [];
                    }
                    $errs[self::FIELD_POLICY_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_TEXT])) {
            $v = $this->getPolicyText();
            foreach($validationRules[self::FIELD_POLICY_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_POLICY_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_TEXT])) {
                        $errs[self::FIELD_POLICY_TEXT] = [];
                    }
                    $errs[self::FIELD_POLICY_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFICATION])) {
            $v = $this->getVerification();
            foreach($validationRules[self::FIELD_VERIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_VERIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION])) {
                        $errs[self::FIELD_VERIFICATION] = [];
                    }
                    $errs[self::FIELD_VERIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECISION])) {
            $v = $this->getDecision();
            foreach($validationRules[self::FIELD_DECISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_DECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECISION])) {
                        $errs[self::FIELD_DECISION] = [];
                    }
                    $errs[self::FIELD_DECISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROVISION])) {
            $v = $this->getProvision();
            foreach($validationRules[self::FIELD_PROVISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PROVISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVISION])) {
                        $errs[self::FIELD_PROVISION] = [];
                    }
                    $errs[self::FIELD_PROVISION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent
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
        } else if (!($type instanceof FHIRConsent)) {
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
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRConsentState::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_GRANTOR === $n->nodeName) {
                $type->addGrantor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_GRANTEE === $n->nodeName) {
                $type->addGrantee(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MANAGER === $n->nodeName) {
                $type->addManager(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTROLLER === $n->nodeName) {
                $type->addController(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_ATTACHMENT === $n->nodeName) {
                $type->addSourceAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_REFERENCE === $n->nodeName) {
                $type->addSourceReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REGULATORY_BASIS === $n->nodeName) {
                $type->addRegulatoryBasis(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_POLICY_BASIS === $n->nodeName) {
                $type->setPolicyBasis(FHIRConsentPolicyBasis::xmlUnserialize($n));
            } elseif (self::FIELD_POLICY_TEXT === $n->nodeName) {
                $type->addPolicyText(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_VERIFICATION === $n->nodeName) {
                $type->addVerification(FHIRConsentVerification::xmlUnserialize($n));
            } elseif (self::FIELD_DECISION === $n->nodeName) {
                $type->setDecision(FHIRConsentProvisionType::xmlUnserialize($n));
            } elseif (self::FIELD_PROVISION === $n->nodeName) {
                $type->addProvision(FHIRConsentProvision::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DATE);
        if (null !== $n) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Consent'), $libxmlOpts);
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
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getGrantor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GRANTOR);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getGrantee())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GRANTEE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getManager())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MANAGER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getController())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTROLLER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSourceAttachment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_ATTACHMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSourceReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRegulatoryBasis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REGULATORY_BASIS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPolicyBasis())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_POLICY_BASIS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPolicyText())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_POLICY_TEXT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getVerification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VERIFICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDecision())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECISION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProvision())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROVISION);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConsentState::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CATEGORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
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
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getGrantor())) {
            $out->{self::FIELD_GRANTOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_GRANTOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getGrantee())) {
            $out->{self::FIELD_GRANTEE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_GRANTEE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getManager())) {
            $out->{self::FIELD_MANAGER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MANAGER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getController())) {
            $out->{self::FIELD_CONTROLLER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTROLLER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSourceAttachment())) {
            $out->{self::FIELD_SOURCE_ATTACHMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SOURCE_ATTACHMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSourceReference())) {
            $out->{self::FIELD_SOURCE_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SOURCE_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRegulatoryBasis())) {
            $out->{self::FIELD_REGULATORY_BASIS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REGULATORY_BASIS}[] = $v;
            }
        }
        if (null !== ($v = $this->getPolicyBasis())) {
            $out->{self::FIELD_POLICY_BASIS} = $v;
        }
        if ([] !== ($vs = $this->getPolicyText())) {
            $out->{self::FIELD_POLICY_TEXT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_POLICY_TEXT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getVerification())) {
            $out->{self::FIELD_VERIFICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VERIFICATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDecision())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DECISION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConsentProvisionType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DECISION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getProvision())) {
            $out->{self::FIELD_PROVISION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROVISION}[] = $v;
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