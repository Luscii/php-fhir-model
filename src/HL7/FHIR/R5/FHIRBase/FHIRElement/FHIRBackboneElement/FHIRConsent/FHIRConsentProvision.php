<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A record of a healthcare consumer’s choices or choices made on their behalf by
 * a third party, which permits or denies identified recipient(s) or recipient
 * role(s) to perform one or more actions within a given policy context, for
 * specific purposes and periods of time.
 *
 * Class FHIRConsentProvision
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentProvision extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION;

    const FIELD_PERIOD = 'period';
    const FIELD_ACTOR = 'actor';
    const FIELD_ACTION = 'action';
    const FIELD_SECURITY_LABEL = 'securityLabel';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_DOCUMENT_TYPE = 'documentType';
    const FIELD_RESOURCE_TYPE = 'resourceType';
    const FIELD_CODE = 'code';
    const FIELD_DATA_PERIOD = 'dataPeriod';
    const FIELD_DATA = 'data';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_PROVISION = 'provision';

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timeframe for this provision.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Who or what is controlled by this provision. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    protected null|array $actor = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this provision.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $action = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which
     * define which resources are controlled by this exception.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $securityLabel = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this provision.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $purpose = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The documentType(s) covered by this provision. The type can be a CDA document,
     * or some other type that indicates what sort of information the consent relates
     * to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $documentType = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource
     * type or a profile on a type that indicates what information the consent relates
     * to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $resourceType = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the provision applies.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $code = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this provision.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $dataPeriod = null;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    protected null|array $data = [];
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A computable (FHIRPath or other) definition of what is controlled by this
     * consent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    protected null|FHIRExpression $expression = null;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Provisions which provide exceptions to the base provision or subprovisions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[]
     */
    protected null|array $provision = [];

    /**
     * Validation map for fields in type Consent.Provision
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRConsentProvision Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ACTOR])) {
            if (is_array($data[self::FIELD_ACTOR])) {
                foreach($data[self::FIELD_ACTOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentActor) {
                        $this->addActor($v);
                    } else {
                        $this->addActor(new FHIRConsentActor($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTOR] instanceof FHIRConsentActor) {
                $this->addActor($data[self::FIELD_ACTOR]);
            } else {
                $this->addActor(new FHIRConsentActor($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRCodeableConcept($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_SECURITY_LABEL])) {
            if (is_array($data[self::FIELD_SECURITY_LABEL])) {
                foreach($data[self::FIELD_SECURITY_LABEL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addSecurityLabel($v);
                    } else {
                        $this->addSecurityLabel(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_SECURITY_LABEL] instanceof FHIRCoding) {
                $this->addSecurityLabel($data[self::FIELD_SECURITY_LABEL]);
            } else {
                $this->addSecurityLabel(new FHIRCoding($data[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE])) {
            if (is_array($data[self::FIELD_PURPOSE])) {
                foreach($data[self::FIELD_PURPOSE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addPurpose($v);
                    } else {
                        $this->addPurpose(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_PURPOSE] instanceof FHIRCoding) {
                $this->addPurpose($data[self::FIELD_PURPOSE]);
            } else {
                $this->addPurpose(new FHIRCoding($data[self::FIELD_PURPOSE]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT_TYPE])) {
            if (is_array($data[self::FIELD_DOCUMENT_TYPE])) {
                foreach($data[self::FIELD_DOCUMENT_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addDocumentType($v);
                    } else {
                        $this->addDocumentType(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_DOCUMENT_TYPE] instanceof FHIRCoding) {
                $this->addDocumentType($data[self::FIELD_DOCUMENT_TYPE]);
            } else {
                $this->addDocumentType(new FHIRCoding($data[self::FIELD_DOCUMENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE_TYPE])) {
            if (is_array($data[self::FIELD_RESOURCE_TYPE])) {
                foreach($data[self::FIELD_RESOURCE_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addResourceType($v);
                    } else {
                        $this->addResourceType(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_RESOURCE_TYPE] instanceof FHIRCoding) {
                $this->addResourceType($data[self::FIELD_RESOURCE_TYPE]);
            } else {
                $this->addResourceType(new FHIRCoding($data[self::FIELD_RESOURCE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DATA_PERIOD])) {
            if ($data[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $this->setDataPeriod($data[self::FIELD_DATA_PERIOD]);
            } else {
                $this->setDataPeriod(new FHIRPeriod($data[self::FIELD_DATA_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DATA])) {
            if (is_array($data[self::FIELD_DATA])) {
                foreach($data[self::FIELD_DATA] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentData) {
                        $this->addData($v);
                    } else {
                        $this->addData(new FHIRConsentData($v));
                    }
                }
            } elseif ($data[self::FIELD_DATA] instanceof FHIRConsentData) {
                $this->addData($data[self::FIELD_DATA]);
            } else {
                $this->addData(new FHIRConsentData($data[self::FIELD_DATA]));
            }
        }
        if (isset($data[self::FIELD_EXPRESSION])) {
            if ($data[self::FIELD_EXPRESSION] instanceof FHIRExpression) {
                $this->setExpression($data[self::FIELD_EXPRESSION]);
            } else {
                $this->setExpression(new FHIRExpression($data[self::FIELD_EXPRESSION]));
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timeframe for this provision.
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
     * Timeframe for this provision.
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
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Who or what is controlled by this provision. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    public function getActor(): null|array
    {
        return $this->actor;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Who or what is controlled by this provision. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor $actor
     * @return static
     */
    public function addActor(null|FHIRConsentActor $actor = null): self
    {
        if (null === $actor) {
            $actor = new FHIRConsentActor();
        }
        $this->_trackValueAdded();
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Who or what is controlled by this provision. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[] $actor
     * @return static
     */
    public function setActor(array $actor = []): self
    {
        if ([] !== $this->actor) {
            $this->_trackValuesRemoved(count($this->actor));
            $this->actor = [];
        }
        if ([] === $actor) {
            return $this;
        }
        foreach($actor as $v) {
            if ($v instanceof FHIRConsentActor) {
                $this->addActor($v);
            } else {
                $this->addActor(new FHIRConsentActor($v));
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
     * Actions controlled by this provision.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getAction(): null|array
    {
        return $this->action;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this provision.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $action
     * @return static
     */
    public function addAction(null|FHIRCodeableConcept $action = null): self
    {
        if (null === $action) {
            $action = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this provision.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $action
     * @return static
     */
    public function setAction(array $action = []): self
    {
        if ([] !== $this->action) {
            $this->_trackValuesRemoved(count($this->action));
            $this->action = [];
        }
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which
     * define which resources are controlled by this exception.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getSecurityLabel(): null|array
    {
        return $this->securityLabel;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which
     * define which resources are controlled by this exception.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $securityLabel
     * @return static
     */
    public function addSecurityLabel(null|FHIRCoding $securityLabel = null): self
    {
        if (null === $securityLabel) {
            $securityLabel = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which
     * define which resources are controlled by this exception.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $securityLabel
     * @return static
     */
    public function setSecurityLabel(array $securityLabel = []): self
    {
        if ([] !== $this->securityLabel) {
            $this->_trackValuesRemoved(count($this->securityLabel));
            $this->securityLabel = [];
        }
        if ([] === $securityLabel) {
            return $this;
        }
        foreach($securityLabel as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addSecurityLabel($v);
            } else {
                $this->addSecurityLabel(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this provision.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getPurpose(): null|array
    {
        return $this->purpose;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this provision.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $purpose
     * @return static
     */
    public function addPurpose(null|FHIRCoding $purpose = null): self
    {
        if (null === $purpose) {
            $purpose = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this provision.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $purpose
     * @return static
     */
    public function setPurpose(array $purpose = []): self
    {
        if ([] !== $this->purpose) {
            $this->_trackValuesRemoved(count($this->purpose));
            $this->purpose = [];
        }
        if ([] === $purpose) {
            return $this;
        }
        foreach($purpose as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addPurpose($v);
            } else {
                $this->addPurpose(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The documentType(s) covered by this provision. The type can be a CDA document,
     * or some other type that indicates what sort of information the consent relates
     * to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getDocumentType(): null|array
    {
        return $this->documentType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The documentType(s) covered by this provision. The type can be a CDA document,
     * or some other type that indicates what sort of information the consent relates
     * to.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $documentType
     * @return static
     */
    public function addDocumentType(null|FHIRCoding $documentType = null): self
    {
        if (null === $documentType) {
            $documentType = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->documentType[] = $documentType;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The documentType(s) covered by this provision. The type can be a CDA document,
     * or some other type that indicates what sort of information the consent relates
     * to.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $documentType
     * @return static
     */
    public function setDocumentType(array $documentType = []): self
    {
        if ([] !== $this->documentType) {
            $this->_trackValuesRemoved(count($this->documentType));
            $this->documentType = [];
        }
        if ([] === $documentType) {
            return $this;
        }
        foreach($documentType as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addDocumentType($v);
            } else {
                $this->addDocumentType(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource
     * type or a profile on a type that indicates what information the consent relates
     * to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getResourceType(): null|array
    {
        return $this->resourceType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource
     * type or a profile on a type that indicates what information the consent relates
     * to.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $resourceType
     * @return static
     */
    public function addResourceType(null|FHIRCoding $resourceType = null): self
    {
        if (null === $resourceType) {
            $resourceType = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->resourceType[] = $resourceType;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource
     * type or a profile on a type that indicates what information the consent relates
     * to.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $resourceType
     * @return static
     */
    public function setResourceType(array $resourceType = []): self
    {
        if ([] !== $this->resourceType) {
            $this->_trackValuesRemoved(count($this->resourceType));
            $this->resourceType = [];
        }
        if ([] === $resourceType) {
            return $this;
        }
        foreach($resourceType as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addResourceType($v);
            } else {
                $this->addResourceType(new FHIRCoding($v));
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
     * If this code is found in an instance, then the provision applies.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the provision applies.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function addCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the provision applies.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $code
     * @return static
     */
    public function setCode(array $code = []): self
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this provision.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getDataPeriod(): null|FHIRPeriod
    {
        return $this->dataPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this provision.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $dataPeriod
     * @return static
     */
    public function setDataPeriod(null|FHIRPeriod $dataPeriod = null): self
    {
        if (null === $dataPeriod) {
            $dataPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->dataPeriod, $dataPeriod);
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    public function getData(): null|array
    {
        return $this->data;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData $data
     * @return static
     */
    public function addData(null|FHIRConsentData $data = null): self
    {
        if (null === $data) {
            $data = new FHIRConsentData();
        }
        $this->_trackValueAdded();
        $this->data[] = $data;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[] $data
     * @return static
     */
    public function setData(array $data = []): self
    {
        if ([] !== $this->data) {
            $this->_trackValuesRemoved(count($this->data));
            $this->data = [];
        }
        if ([] === $data) {
            return $this;
        }
        foreach($data as $v) {
            if ($v instanceof FHIRConsentData) {
                $this->addData($v);
            } else {
                $this->addData(new FHIRConsentData($v));
            }
        }
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A computable (FHIRPath or other) definition of what is controlled by this
     * consent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getExpression(): null|FHIRExpression
    {
        return $this->expression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A computable (FHIRPath or other) definition of what is controlled by this
     * consent.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $expression
     * @return static
     */
    public function setExpression(null|FHIRExpression $expression = null): self
    {
        if (null === $expression) {
            $expression = new FHIRExpression();
        }
        $this->_trackValueSet($this->expression, $expression);
        $this->expression = $expression;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Provisions which provide exceptions to the base provision or subprovisions.
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
     * Provisions which provide exceptions to the base provision or subprovisions.
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
     * Provisions which provide exceptions to the base provision or subprovisions.
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
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PURPOSE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDocumentType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOCUMENT_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResourceType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESOURCE_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATA, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPRESSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProvision())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROVISION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR])) {
            $v = $this->getActor();
            foreach($validationRules[self::FIELD_ACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_ACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR])) {
                        $errs[self::FIELD_ACTOR] = [];
                    }
                    $errs[self::FIELD_ACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL])) {
            $v = $this->getSecurityLabel();
            foreach($validationRules[self::FIELD_SECURITY_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_SECURITY_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL])) {
                        $errs[self::FIELD_SECURITY_LABEL] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT_TYPE])) {
            $v = $this->getDocumentType();
            foreach($validationRules[self::FIELD_DOCUMENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_DOCUMENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT_TYPE])) {
                        $errs[self::FIELD_DOCUMENT_TYPE] = [];
                    }
                    $errs[self::FIELD_DOCUMENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE_TYPE])) {
            $v = $this->getResourceType();
            foreach($validationRules[self::FIELD_RESOURCE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_RESOURCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE_TYPE])) {
                        $errs[self::FIELD_RESOURCE_TYPE] = [];
                    }
                    $errs[self::FIELD_RESOURCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_PERIOD])) {
            $v = $this->getDataPeriod();
            foreach($validationRules[self::FIELD_DATA_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_DATA_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_PERIOD])) {
                        $errs[self::FIELD_DATA_PERIOD] = [];
                    }
                    $errs[self::FIELD_DATA_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPRESSION])) {
            $v = $this->getExpression();
            foreach($validationRules[self::FIELD_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPRESSION])) {
                        $errs[self::FIELD_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROVISION])) {
            $v = $this->getProvision();
            foreach($validationRules[self::FIELD_PROVISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_PROVISION, self::FIELD_PROVISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVISION])) {
                        $errs[self::FIELD_PROVISION] = [];
                    }
                    $errs[self::FIELD_PROVISION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
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
        } else if (!($type instanceof FHIRConsentProvision)) {
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
            if (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_ACTOR === $n->nodeName) {
                $type->addActor(FHIRConsentActor::xmlUnserialize($n));
            } elseif (self::FIELD_ACTION === $n->nodeName) {
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SECURITY_LABEL === $n->nodeName) {
                $type->addSecurityLabel(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_PURPOSE === $n->nodeName) {
                $type->addPurpose(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENT_TYPE === $n->nodeName) {
                $type->addDocumentType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE_TYPE === $n->nodeName) {
                $type->addResourceType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_PERIOD === $n->nodeName) {
                $type->setDataPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_DATA === $n->nodeName) {
                $type->addData(FHIRConsentData::xmlUnserialize($n));
            } elseif (self::FIELD_EXPRESSION === $n->nodeName) {
                $type->setExpression(FHIRExpression::xmlUnserialize($n));
            } elseif (self::FIELD_PROVISION === $n->nodeName) {
                $type->addProvision(FHIRConsentProvision::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ConsentProvision'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACTOR);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SECURITY_LABEL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PURPOSE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDocumentType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENT_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getResourceType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DATA);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getExpression())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPRESSION);
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
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getActor())) {
            $out->{self::FIELD_ACTOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ACTOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            $out->{self::FIELD_ACTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ACTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            $out->{self::FIELD_SECURITY_LABEL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SECURITY_LABEL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPurpose())) {
            $out->{self::FIELD_PURPOSE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PURPOSE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDocumentType())) {
            $out->{self::FIELD_DOCUMENT_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DOCUMENT_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getResourceType())) {
            $out->{self::FIELD_RESOURCE_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RESOURCE_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $out->{self::FIELD_DATA_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getData())) {
            $out->{self::FIELD_DATA} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DATA}[] = $v;
            }
        }
        if (null !== ($v = $this->getExpression())) {
            $out->{self::FIELD_EXPRESSION} = $v;
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