<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance;

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
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRIdentifier;
use HL7\FHIR\STU3\FHIRElement\FHIRProvenanceEntityRole;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRUri;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\FHIRUriPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Provenance of a resource is a record that describes entities and processes
 * involved in producing and delivering or otherwise influencing that resource.
 * Provenance provides a critical foundation for assessing authenticity, enabling
 * trust, and allowing reproducibility. Provenance assertions are a form of
 * contextual metadata and can themselves become important records with their own
 * provenance. Provenance statement indicates clinical significance in terms of
 * confidence in authenticity, reliability, and trustworthiness, integrity, and
 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
 * authenticated), all of which may impact security, privacy, and trust policies.
 *
 * Class FHIRProvenanceEntity
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceEntity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY;

    const FIELD_ROLE = 'role';
    const FIELD_ROLE_EXT = '_role';
    const FIELD_WHAT_URI = 'whatUri';
    const FIELD_WHAT_URI_EXT = '_whatUri';
    const FIELD_WHAT_REFERENCE = 'whatReference';
    const FIELD_WHAT_IDENTIFIER = 'whatIdentifier';
    const FIELD_AGENT = 'agent';

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRProvenanceEntityRole
     */
    protected null|FHIRProvenanceEntityRole $role = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $whatUri = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $whatReference = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $whatIdentifier = null;
    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    protected null|array $agent = [];

    /**
     * Validation map for fields in type Provenance.Entity
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRProvenanceEntity Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ROLE]) || isset($data[self::FIELD_ROLE_EXT])) {
            $value = $data[self::FIELD_ROLE] ?? null;
            $ext = (isset($data[self::FIELD_ROLE_EXT]) && is_array($data[self::FIELD_ROLE_EXT])) ? $data[self::FIELD_ROLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRProvenanceEntityRole) {
                    $this->setRole($value);
                } else if (is_array($value)) {
                    $this->setRole(new FHIRProvenanceEntityRole(array_merge($ext, $value)));
                } else {
                    $this->setRole(new FHIRProvenanceEntityRole([FHIRProvenanceEntityRole::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRole(new FHIRProvenanceEntityRole($ext));
            }
        }
        if (isset($data[self::FIELD_WHAT_URI]) || isset($data[self::FIELD_WHAT_URI_EXT])) {
            $value = $data[self::FIELD_WHAT_URI] ?? null;
            $ext = (isset($data[self::FIELD_WHAT_URI_EXT]) && is_array($data[self::FIELD_WHAT_URI_EXT])) ? $data[self::FIELD_WHAT_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setWhatUri($value);
                } else if (is_array($value)) {
                    $this->setWhatUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setWhatUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWhatUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_WHAT_REFERENCE])) {
            if ($data[self::FIELD_WHAT_REFERENCE] instanceof FHIRReference) {
                $this->setWhatReference($data[self::FIELD_WHAT_REFERENCE]);
            } else {
                $this->setWhatReference(new FHIRReference($data[self::FIELD_WHAT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_WHAT_IDENTIFIER])) {
            if ($data[self::FIELD_WHAT_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setWhatIdentifier($data[self::FIELD_WHAT_IDENTIFIER]);
            } else {
                $this->setWhatIdentifier(new FHIRIdentifier($data[self::FIELD_WHAT_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_AGENT])) {
            if (is_array($data[self::FIELD_AGENT])) {
                foreach($data[self::FIELD_AGENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRProvenanceAgent) {
                        $this->addAgent($v);
                    } else {
                        $this->addAgent(new FHIRProvenanceAgent($v));
                    }
                }
            } elseif ($data[self::FIELD_AGENT] instanceof FHIRProvenanceAgent) {
                $this->addAgent($data[self::FIELD_AGENT]);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($data[self::FIELD_AGENT]));
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
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole(): null|FHIRProvenanceEntityRole
    {
        return $this->role;
    }

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRProvenanceEntityRole $role
     * @return static
     */
    public function setRole(null|FHIRProvenanceEntityRole $role = null): self
    {
        if (null === $role) {
            $role = new FHIRProvenanceEntityRole();
        }
        $this->_trackValueSet($this->role, $role);
        $this->role = $role;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public function getWhatUri(): null|FHIRUri
    {
        return $this->whatUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRUriPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRUri $whatUri
     * @return static
     */
    public function setWhatUri(null|string|FHIRUriPrimitive|FHIRUri $whatUri = null): self
    {
        if (null !== $whatUri && !($whatUri instanceof FHIRUri)) {
            $whatUri = new FHIRUri($whatUri);
        }
        $this->_trackValueSet($this->whatUri, $whatUri);
        $this->whatUri = $whatUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getWhatReference(): null|FHIRReference
    {
        return $this->whatReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $whatReference
     * @return static
     */
    public function setWhatReference(null|FHIRReference $whatReference = null): self
    {
        if (null === $whatReference) {
            $whatReference = new FHIRReference();
        }
        $this->_trackValueSet($this->whatReference, $whatReference);
        $this->whatReference = $whatReference;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getWhatIdentifier(): null|FHIRIdentifier
    {
        return $this->whatIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $whatIdentifier
     * @return static
     */
    public function setWhatIdentifier(null|FHIRIdentifier $whatIdentifier = null): self
    {
        if (null === $whatIdentifier) {
            $whatIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->whatIdentifier, $whatIdentifier);
        $this->whatIdentifier = $whatIdentifier;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent(): null|array
    {
        return $this->agent;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return static
     */
    public function addAgent(null|FHIRProvenanceAgent $agent = null): self
    {
        if (null === $agent) {
            $agent = new FHIRProvenanceAgent();
        }
        $this->_trackValueAdded();
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @return static
     */
    public function setAgent(array $agent = []): self
    {
        if ([] !== $this->agent) {
            $this->_trackValuesRemoved(count($this->agent));
            $this->agent = [];
        }
        if ([] === $agent) {
            return $this;
        }
        foreach($agent as $v) {
            if ($v instanceof FHIRProvenanceAgent) {
                $this->addAgent($v);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($v));
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
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhatUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHAT_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhatReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHAT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhatIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHAT_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHAT_URI])) {
            $v = $this->getWhatUri();
            foreach($validationRules[self::FIELD_WHAT_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_WHAT_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHAT_URI])) {
                        $errs[self::FIELD_WHAT_URI] = [];
                    }
                    $errs[self::FIELD_WHAT_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHAT_REFERENCE])) {
            $v = $this->getWhatReference();
            foreach($validationRules[self::FIELD_WHAT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_WHAT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHAT_REFERENCE])) {
                        $errs[self::FIELD_WHAT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_WHAT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHAT_IDENTIFIER])) {
            $v = $this->getWhatIdentifier();
            foreach($validationRules[self::FIELD_WHAT_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_WHAT_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHAT_IDENTIFIER])) {
                        $errs[self::FIELD_WHAT_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_WHAT_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
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
        } else if (!($type instanceof FHIRProvenanceEntity)) {
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
                $type->setRole(FHIRProvenanceEntityRole::xmlUnserialize($n));
            } elseif (self::FIELD_WHAT_URI === $n->nodeName) {
                $type->setWhatUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_WHAT_REFERENCE === $n->nodeName) {
                $type->setWhatReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_WHAT_IDENTIFIER === $n->nodeName) {
                $type->setWhatIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_AGENT === $n->nodeName) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_WHAT_URI);
        if (null !== $n) {
            $pt = $type->getWhatUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setWhatUri($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ProvenanceEntity'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getRole())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ROLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhatUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHAT_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhatReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHAT_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhatIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHAT_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AGENT);
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
        if (null !== ($v = $this->getRole())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ROLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRProvenanceEntityRole::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ROLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWhatUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WHAT_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WHAT_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWhatReference())) {
            $out->{self::FIELD_WHAT_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getWhatIdentifier())) {
            $out->{self::FIELD_WHAT_IDENTIFIER} = $v;
        }
        if ([] !== ($vs = $this->getAgent())) {
            $out->{self::FIELD_AGENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AGENT}[] = $v;
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