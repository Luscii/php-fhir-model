<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUnsignedIntPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server or Client for a particular version of FHIR that may be used as a
 * statement of actual server functionality or a statement of required or desired
 * server implementation.
 *
 * Class FHIRCapabilityStatementMessaging
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementMessaging extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING;

    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_RELIABLE_CACHE = 'reliableCache';
    const FIELD_RELIABLE_CACHE_EXT = '_reliableCache';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_SUPPORTED_MESSAGE = 'supportedMessage';

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * An endpoint (network accessible address) to which messages and/or replies are to
     * be sent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint[]
     */
    protected null|array $endpoint = [];
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or
     * how long the cache length on the receiver should be (if a sender).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $reliableCache = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the capability statement. For example, the process for
     * becoming an authorized messaging exchange partner.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $documentation = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage[]
     */
    protected null|array $supportedMessage = [];

    /**
     * Validation map for fields in type CapabilityStatement.Messaging
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCapabilityStatementMessaging Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementEndpoint) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRCapabilityStatementEndpoint($v));
                    }
                }
            } elseif ($data[self::FIELD_ENDPOINT] instanceof FHIRCapabilityStatementEndpoint) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRCapabilityStatementEndpoint($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_RELIABLE_CACHE]) || isset($data[self::FIELD_RELIABLE_CACHE_EXT])) {
            $value = $data[self::FIELD_RELIABLE_CACHE] ?? null;
            $ext = (isset($data[self::FIELD_RELIABLE_CACHE_EXT]) && is_array($data[self::FIELD_RELIABLE_CACHE_EXT])) ? $data[self::FIELD_RELIABLE_CACHE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setReliableCache($value);
                } else if (is_array($value)) {
                    $this->setReliableCache(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setReliableCache(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReliableCache(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION]) || isset($data[self::FIELD_DOCUMENTATION_EXT])) {
            $value = $data[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) ? $data[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocumentation(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPORTED_MESSAGE])) {
            if (is_array($data[self::FIELD_SUPPORTED_MESSAGE])) {
                foreach($data[self::FIELD_SUPPORTED_MESSAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementSupportedMessage) {
                        $this->addSupportedMessage($v);
                    } else {
                        $this->addSupportedMessage(new FHIRCapabilityStatementSupportedMessage($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTED_MESSAGE] instanceof FHIRCapabilityStatementSupportedMessage) {
                $this->addSupportedMessage($data[self::FIELD_SUPPORTED_MESSAGE]);
            } else {
                $this->addSupportedMessage(new FHIRCapabilityStatementSupportedMessage($data[self::FIELD_SUPPORTED_MESSAGE]));
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
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * An endpoint (network accessible address) to which messages and/or replies are to
     * be sent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint[]
     */
    public function getEndpoint(): null|array
    {
        return $this->endpoint;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * An endpoint (network accessible address) to which messages and/or replies are to
     * be sent.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint $endpoint
     * @return static
     */
    public function addEndpoint(null|FHIRCapabilityStatementEndpoint $endpoint = null): self
    {
        if (null === $endpoint) {
            $endpoint = new FHIRCapabilityStatementEndpoint();
        }
        $this->_trackValueAdded();
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * An endpoint (network accessible address) to which messages and/or replies are to
     * be sent.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint[] $endpoint
     * @return static
     */
    public function setEndpoint(array $endpoint = []): self
    {
        if ([] !== $this->endpoint) {
            $this->_trackValuesRemoved(count($this->endpoint));
            $this->endpoint = [];
        }
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRCapabilityStatementEndpoint) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRCapabilityStatementEndpoint($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or
     * how long the cache length on the receiver should be (if a sender).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getReliableCache(): null|FHIRUnsignedInt
    {
        return $this->reliableCache;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or
     * how long the cache length on the receiver should be (if a sender).
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $reliableCache
     * @return static
     */
    public function setReliableCache(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $reliableCache = null): self
    {
        if (null !== $reliableCache && !($reliableCache instanceof FHIRUnsignedInt)) {
            $reliableCache = new FHIRUnsignedInt($reliableCache);
        }
        $this->_trackValueSet($this->reliableCache, $reliableCache);
        $this->reliableCache = $reliableCache;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the capability statement. For example, the process for
     * becoming an authorized messaging exchange partner.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation(): null|FHIRMarkdown
    {
        return $this->documentation;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the capability statement. For example, the process for
     * becoming an authorized messaging exchange partner.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $documentation
     * @return static
     */
    public function setDocumentation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $documentation = null): self
    {
        if (null !== $documentation && !($documentation instanceof FHIRMarkdown)) {
            $documentation = new FHIRMarkdown($documentation);
        }
        $this->_trackValueSet($this->documentation, $documentation);
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage[]
     */
    public function getSupportedMessage(): null|array
    {
        return $this->supportedMessage;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage $supportedMessage
     * @return static
     */
    public function addSupportedMessage(null|FHIRCapabilityStatementSupportedMessage $supportedMessage = null): self
    {
        if (null === $supportedMessage) {
            $supportedMessage = new FHIRCapabilityStatementSupportedMessage();
        }
        $this->_trackValueAdded();
        $this->supportedMessage[] = $supportedMessage;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage[] $supportedMessage
     * @return static
     */
    public function setSupportedMessage(array $supportedMessage = []): self
    {
        if ([] !== $this->supportedMessage) {
            $this->_trackValuesRemoved(count($this->supportedMessage));
            $this->supportedMessage = [];
        }
        if ([] === $supportedMessage) {
            return $this;
        }
        foreach($supportedMessage as $v) {
            if ($v instanceof FHIRCapabilityStatementSupportedMessage) {
                $this->addSupportedMessage($v);
            } else {
                $this->addSupportedMessage(new FHIRCapabilityStatementSupportedMessage($v));
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
        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENDPOINT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReliableCache())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELIABLE_CACHE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportedMessage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTED_MESSAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELIABLE_CACHE])) {
            $v = $this->getReliableCache();
            foreach($validationRules[self::FIELD_RELIABLE_CACHE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING, self::FIELD_RELIABLE_CACHE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELIABLE_CACHE])) {
                        $errs[self::FIELD_RELIABLE_CACHE] = [];
                    }
                    $errs[self::FIELD_RELIABLE_CACHE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTED_MESSAGE])) {
            $v = $this->getSupportedMessage();
            foreach($validationRules[self::FIELD_SUPPORTED_MESSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING, self::FIELD_SUPPORTED_MESSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTED_MESSAGE])) {
                        $errs[self::FIELD_SUPPORTED_MESSAGE] = [];
                    }
                    $errs[self::FIELD_SUPPORTED_MESSAGE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging
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
        } else if (!($type instanceof FHIRCapabilityStatementMessaging)) {
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
            if (self::FIELD_ENDPOINT === $n->nodeName) {
                $type->addEndpoint(FHIRCapabilityStatementEndpoint::xmlUnserialize($n));
            } elseif (self::FIELD_RELIABLE_CACHE === $n->nodeName) {
                $type->setReliableCache(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
                $type->setDocumentation(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTED_MESSAGE === $n->nodeName) {
                $type->addSupportedMessage(FHIRCapabilityStatementSupportedMessage::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RELIABLE_CACHE);
        if (null !== $n) {
            $pt = $type->getReliableCache();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReliableCache($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DOCUMENTATION);
        if (null !== $n) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDocumentation($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CapabilityStatementMessaging'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENDPOINT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getReliableCache())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RELIABLE_CACHE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDocumentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSupportedMessage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTED_MESSAGE);
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
        if ([] !== ($vs = $this->getEndpoint())) {
            $out->{self::FIELD_ENDPOINT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENDPOINT}[] = $v;
            }
        }
        if (null !== ($v = $this->getReliableCache())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RELIABLE_CACHE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RELIABLE_CACHE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOCUMENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSupportedMessage())) {
            $out->{self::FIELD_SUPPORTED_MESSAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPORTED_MESSAGE}[] = $v;
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