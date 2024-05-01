<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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

use HL7\FHIR\STU3\FHIRBooleanPrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRBoolean;
use HL7\FHIR\STU3\FHIRElement\FHIRConditionalDeleteStatus;
use HL7\FHIR\STU3\FHIRElement\FHIRConditionalReadStatus;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRMarkdown;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRReferenceHandlingPolicy;
use HL7\FHIR\STU3\FHIRElement\FHIRResourceType;
use HL7\FHIR\STU3\FHIRElement\FHIRResourceVersionPolicy;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRMarkdownPrimitive;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server that may be used as a statement of actual server functionality or a
 * statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementResource
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE;

    const FIELD_TYPE = 'type';
    const FIELD_PROFILE = 'profile';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_INTERACTION = 'interaction';
    const FIELD_VERSIONING = 'versioning';
    const FIELD_VERSIONING_EXT = '_versioning';
    const FIELD_READ_HISTORY = 'readHistory';
    const FIELD_READ_HISTORY_EXT = '_readHistory';
    const FIELD_UPDATE_CREATE = 'updateCreate';
    const FIELD_UPDATE_CREATE_EXT = '_updateCreate';
    const FIELD_CONDITIONAL_CREATE = 'conditionalCreate';
    const FIELD_CONDITIONAL_CREATE_EXT = '_conditionalCreate';
    const FIELD_CONDITIONAL_READ = 'conditionalRead';
    const FIELD_CONDITIONAL_READ_EXT = '_conditionalRead';
    const FIELD_CONDITIONAL_UPDATE = 'conditionalUpdate';
    const FIELD_CONDITIONAL_UPDATE_EXT = '_conditionalUpdate';
    const FIELD_CONDITIONAL_DELETE = 'conditionalDelete';
    const FIELD_CONDITIONAL_DELETE_EXT = '_conditionalDelete';
    const FIELD_REFERENCE_POLICY = 'referencePolicy';
    const FIELD_REFERENCE_POLICY_EXT = '_referencePolicy';
    const FIELD_SEARCH_INCLUDE = 'searchInclude';
    const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    const FIELD_SEARCH_REV_INCLUDE = 'searchRevInclude';
    const FIELD_SEARCH_REV_INCLUDE_EXT = '_searchRevInclude';
    const FIELD_SEARCH_PARAM = 'searchParam';

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRResourceType
     */
    protected null|FHIRResourceType $type = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $profile = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $documentation = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    protected null|array $interaction = [];
    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRResourceVersionPolicy
     */
    protected null|FHIRResourceVersionPolicy $versioning = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $readHistory = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $updateCreate = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $conditionalCreate = null;
    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRConditionalReadStatus
     */
    protected null|FHIRConditionalReadStatus $conditionalRead = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $conditionalUpdate = null;
    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRConditionalDeleteStatus
     */
    protected null|FHIRConditionalDeleteStatus $conditionalDelete = null;
    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    protected null|array $referencePolicy = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $searchInclude = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $searchRevInclude = [];
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    protected null|array $searchParam = [];

    /**
     * Validation map for fields in type CapabilityStatement.Resource
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_INTERACTION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCapabilityStatementResource Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE])) {
            $this->setType($data[self::FIELD_TYPE]);
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if ($data[self::FIELD_PROFILE] instanceof FHIRReference) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->setProfile(new FHIRReference($data[self::FIELD_PROFILE]));
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
        if (isset($data[self::FIELD_INTERACTION])) {
            if (is_array($data[self::FIELD_INTERACTION])) {
                foreach($data[self::FIELD_INTERACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementInteraction) {
                        $this->addInteraction($v);
                    } else {
                        $this->addInteraction(new FHIRCapabilityStatementInteraction($v));
                    }
                }
            } elseif ($data[self::FIELD_INTERACTION] instanceof FHIRCapabilityStatementInteraction) {
                $this->addInteraction($data[self::FIELD_INTERACTION]);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction($data[self::FIELD_INTERACTION]));
            }
        }
        if (isset($data[self::FIELD_VERSIONING]) || isset($data[self::FIELD_VERSIONING_EXT])) {
            $value = $data[self::FIELD_VERSIONING] ?? null;
            $ext = (isset($data[self::FIELD_VERSIONING_EXT]) && is_array($data[self::FIELD_VERSIONING_EXT])) ? $data[self::FIELD_VERSIONING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRResourceVersionPolicy) {
                    $this->setVersioning($value);
                } else if (is_array($value)) {
                    $this->setVersioning(new FHIRResourceVersionPolicy(array_merge($ext, $value)));
                } else {
                    $this->setVersioning(new FHIRResourceVersionPolicy([FHIRResourceVersionPolicy::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersioning(new FHIRResourceVersionPolicy($ext));
            }
        }
        if (isset($data[self::FIELD_READ_HISTORY]) || isset($data[self::FIELD_READ_HISTORY_EXT])) {
            $value = $data[self::FIELD_READ_HISTORY] ?? null;
            $ext = (isset($data[self::FIELD_READ_HISTORY_EXT]) && is_array($data[self::FIELD_READ_HISTORY_EXT])) ? $data[self::FIELD_READ_HISTORY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReadHistory($value);
                } else if (is_array($value)) {
                    $this->setReadHistory(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReadHistory(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReadHistory(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_UPDATE_CREATE]) || isset($data[self::FIELD_UPDATE_CREATE_EXT])) {
            $value = $data[self::FIELD_UPDATE_CREATE] ?? null;
            $ext = (isset($data[self::FIELD_UPDATE_CREATE_EXT]) && is_array($data[self::FIELD_UPDATE_CREATE_EXT])) ? $data[self::FIELD_UPDATE_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setUpdateCreate($value);
                } else if (is_array($value)) {
                    $this->setUpdateCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setUpdateCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUpdateCreate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_CREATE]) || isset($data[self::FIELD_CONDITIONAL_CREATE_EXT])) {
            $value = $data[self::FIELD_CONDITIONAL_CREATE] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_CREATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_CREATE_EXT])) ? $data[self::FIELD_CONDITIONAL_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalCreate($value);
                } else if (is_array($value)) {
                    $this->setConditionalCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalCreate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_READ]) || isset($data[self::FIELD_CONDITIONAL_READ_EXT])) {
            $value = $data[self::FIELD_CONDITIONAL_READ] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_READ_EXT]) && is_array($data[self::FIELD_CONDITIONAL_READ_EXT])) ? $data[self::FIELD_CONDITIONAL_READ_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConditionalReadStatus) {
                    $this->setConditionalRead($value);
                } else if (is_array($value)) {
                    $this->setConditionalRead(new FHIRConditionalReadStatus(array_merge($ext, $value)));
                } else {
                    $this->setConditionalRead(new FHIRConditionalReadStatus([FHIRConditionalReadStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalRead(new FHIRConditionalReadStatus($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_UPDATE]) || isset($data[self::FIELD_CONDITIONAL_UPDATE_EXT])) {
            $value = $data[self::FIELD_CONDITIONAL_UPDATE] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_UPDATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_UPDATE_EXT])) ? $data[self::FIELD_CONDITIONAL_UPDATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalUpdate($value);
                } else if (is_array($value)) {
                    $this->setConditionalUpdate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalUpdate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalUpdate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_DELETE]) || isset($data[self::FIELD_CONDITIONAL_DELETE_EXT])) {
            $value = $data[self::FIELD_CONDITIONAL_DELETE] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_DELETE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_DELETE_EXT])) ? $data[self::FIELD_CONDITIONAL_DELETE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConditionalDeleteStatus) {
                    $this->setConditionalDelete($value);
                } else if (is_array($value)) {
                    $this->setConditionalDelete(new FHIRConditionalDeleteStatus(array_merge($ext, $value)));
                } else {
                    $this->setConditionalDelete(new FHIRConditionalDeleteStatus([FHIRConditionalDeleteStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalDelete(new FHIRConditionalDeleteStatus($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_POLICY]) || isset($data[self::FIELD_REFERENCE_POLICY_EXT])) {
            $value = $data[self::FIELD_REFERENCE_POLICY] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_POLICY_EXT]) && is_array($data[self::FIELD_REFERENCE_POLICY_EXT])) ? $data[self::FIELD_REFERENCE_POLICY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRReferenceHandlingPolicy) {
                    $this->addReferencePolicy($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRReferenceHandlingPolicy) {
                            $this->addReferencePolicy($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy(array_merge($v, $iext)));
                            } else {
                                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy([FHIRReferenceHandlingPolicy::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy(array_merge($ext, $value)));
                } else {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy([FHIRReferenceHandlingPolicy::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SEARCH_INCLUDE]) || isset($data[self::FIELD_SEARCH_INCLUDE_EXT])) {
            $value = $data[self::FIELD_SEARCH_INCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_SEARCH_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_INCLUDE_EXT])) ? $data[self::FIELD_SEARCH_INCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSearchInclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSearchInclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSearchInclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSearchInclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSearchInclude(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SEARCH_REV_INCLUDE]) || isset($data[self::FIELD_SEARCH_REV_INCLUDE_EXT])) {
            $value = $data[self::FIELD_SEARCH_REV_INCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_SEARCH_REV_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_REV_INCLUDE_EXT])) ? $data[self::FIELD_SEARCH_REV_INCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSearchRevInclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSearchRevInclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSearchRevInclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSearchRevInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSearchRevInclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSearchRevInclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSearchRevInclude(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SEARCH_PARAM])) {
            if (is_array($data[self::FIELD_SEARCH_PARAM])) {
                foreach($data[self::FIELD_SEARCH_PARAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementSearchParam) {
                        $this->addSearchParam($v);
                    } else {
                        $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
                    }
                }
            } elseif ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($data[self::FIELD_SEARCH_PARAM]));
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
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRResourceType
     */
    public function getType(): null|FHIRResourceType
    {
        return $this->type;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRElement\FHIRResourceType $type
     * @return static
     */
    public function setType(null|string|FHIRResourceType $type = null): self
    {
        if (null !== $type && !($type instanceof FHIRResourceType)) {
            $type = new FHIRResourceType($type);
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getProfile(): null|FHIRReference
    {
        return $this->profile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $profile
     * @return static
     */
    public function setProfile(null|FHIRReference $profile = null): self
    {
        if (null === $profile) {
            $profile = new FHIRReference();
        }
        $this->_trackValueSet($this->profile, $profile);
        $this->profile = $profile;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation(): null|FHIRMarkdown
    {
        return $this->documentation;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRMarkdownPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRMarkdown $documentation
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
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction(): null|array
    {
        return $this->interaction;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $interaction
     * @return static
     */
    public function addInteraction(null|FHIRCapabilityStatementInteraction $interaction = null): self
    {
        if (null === $interaction) {
            $interaction = new FHIRCapabilityStatementInteraction();
        }
        $this->_trackValueAdded();
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[] $interaction
     * @return static
     */
    public function setInteraction(array $interaction = []): self
    {
        if ([] !== $this->interaction) {
            $this->_trackValuesRemoved(count($this->interaction));
            $this->interaction = [];
        }
        if ([] === $interaction) {
            return $this;
        }
        foreach($interaction as $v) {
            if ($v instanceof FHIRCapabilityStatementInteraction) {
                $this->addInteraction($v);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction($v));
            }
        }
        return $this;
    }

    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning(): null|FHIRResourceVersionPolicy
    {
        return $this->versioning;
    }

    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return static
     */
    public function setVersioning(null|FHIRResourceVersionPolicy $versioning = null): self
    {
        if (null === $versioning) {
            $versioning = new FHIRResourceVersionPolicy();
        }
        $this->_trackValueSet($this->versioning, $versioning);
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getReadHistory(): null|FHIRBoolean
    {
        return $this->readHistory;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $readHistory
     * @return static
     */
    public function setReadHistory(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readHistory = null): self
    {
        if (null !== $readHistory && !($readHistory instanceof FHIRBoolean)) {
            $readHistory = new FHIRBoolean($readHistory);
        }
        $this->_trackValueSet($this->readHistory, $readHistory);
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate(): null|FHIRBoolean
    {
        return $this->updateCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $updateCreate
     * @return static
     */
    public function setUpdateCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $updateCreate = null): self
    {
        if (null !== $updateCreate && !($updateCreate instanceof FHIRBoolean)) {
            $updateCreate = new FHIRBoolean($updateCreate);
        }
        $this->_trackValueSet($this->updateCreate, $updateCreate);
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate(): null|FHIRBoolean
    {
        return $this->conditionalCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $conditionalCreate
     * @return static
     */
    public function setConditionalCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalCreate = null): self
    {
        if (null !== $conditionalCreate && !($conditionalCreate instanceof FHIRBoolean)) {
            $conditionalCreate = new FHIRBoolean($conditionalCreate);
        }
        $this->_trackValueSet($this->conditionalCreate, $conditionalCreate);
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead(): null|FHIRConditionalReadStatus
    {
        return $this->conditionalRead;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @return static
     */
    public function setConditionalRead(null|FHIRConditionalReadStatus $conditionalRead = null): self
    {
        if (null === $conditionalRead) {
            $conditionalRead = new FHIRConditionalReadStatus();
        }
        $this->_trackValueSet($this->conditionalRead, $conditionalRead);
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate(): null|FHIRBoolean
    {
        return $this->conditionalUpdate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $conditionalUpdate
     * @return static
     */
    public function setConditionalUpdate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalUpdate = null): self
    {
        if (null !== $conditionalUpdate && !($conditionalUpdate instanceof FHIRBoolean)) {
            $conditionalUpdate = new FHIRBoolean($conditionalUpdate);
        }
        $this->_trackValueSet($this->conditionalUpdate, $conditionalUpdate);
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete(): null|FHIRConditionalDeleteStatus
    {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return static
     */
    public function setConditionalDelete(null|FHIRConditionalDeleteStatus $conditionalDelete = null): self
    {
        if (null === $conditionalDelete) {
            $conditionalDelete = new FHIRConditionalDeleteStatus();
        }
        $this->_trackValueSet($this->conditionalDelete, $conditionalDelete);
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy(): null|array
    {
        return $this->referencePolicy;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReferenceHandlingPolicy $referencePolicy
     * @return static
     */
    public function addReferencePolicy(null|FHIRReferenceHandlingPolicy $referencePolicy = null): self
    {
        if (null === $referencePolicy) {
            $referencePolicy = new FHIRReferenceHandlingPolicy();
        }
        $this->_trackValueAdded();
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReferenceHandlingPolicy[] $referencePolicy
     * @return static
     */
    public function setReferencePolicy(array $referencePolicy = []): self
    {
        if ([] !== $this->referencePolicy) {
            $this->_trackValuesRemoved(count($this->referencePolicy));
            $this->referencePolicy = [];
        }
        if ([] === $referencePolicy) {
            return $this;
        }
        foreach($referencePolicy as $v) {
            if ($v instanceof FHIRReferenceHandlingPolicy) {
                $this->addReferencePolicy($v);
            } else {
                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getSearchInclude(): null|array
    {
        return $this->searchInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $searchInclude
     * @return static
     */
    public function addSearchInclude(null|string|FHIRStringPrimitive|FHIRString $searchInclude = null): self
    {
        if (null !== $searchInclude && !($searchInclude instanceof FHIRString)) {
            $searchInclude = new FHIRString($searchInclude);
        }
        $this->_trackValueAdded();
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $searchInclude
     * @return static
     */
    public function setSearchInclude(array $searchInclude = []): self
    {
        if ([] !== $this->searchInclude) {
            $this->_trackValuesRemoved(count($this->searchInclude));
            $this->searchInclude = [];
        }
        if ([] === $searchInclude) {
            return $this;
        }
        foreach($searchInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addSearchInclude($v);
            } else {
                $this->addSearchInclude(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude(): null|array
    {
        return $this->searchRevInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $searchRevInclude
     * @return static
     */
    public function addSearchRevInclude(null|string|FHIRStringPrimitive|FHIRString $searchRevInclude = null): self
    {
        if (null !== $searchRevInclude && !($searchRevInclude instanceof FHIRString)) {
            $searchRevInclude = new FHIRString($searchRevInclude);
        }
        $this->_trackValueAdded();
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString[] $searchRevInclude
     * @return static
     */
    public function setSearchRevInclude(array $searchRevInclude = []): self
    {
        if ([] !== $this->searchRevInclude) {
            $this->_trackValuesRemoved(count($this->searchRevInclude));
            $this->searchRevInclude = [];
        }
        if ([] === $searchRevInclude) {
            return $this;
        }
        foreach($searchRevInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addSearchRevInclude($v);
            } else {
                $this->addSearchRevInclude(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam(): null|array
    {
        return $this->searchParam;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(null|FHIRCapabilityStatementSearchParam $searchParam = null): self
    {
        if (null === $searchParam) {
            $searchParam = new FHIRCapabilityStatementSearchParam();
        }
        $this->_trackValueAdded();
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[] $searchParam
     * @return static
     */
    public function setSearchParam(array $searchParam = []): self
    {
        if ([] !== $this->searchParam) {
            $this->_trackValuesRemoved(count($this->searchParam));
            $this->searchParam = [];
        }
        if ([] === $searchParam) {
            return $this;
        }
        foreach($searchParam as $v) {
            if ($v instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($v);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInteraction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INTERACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSIONING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadHistory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_HISTORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UPDATE_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalRead())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_READ] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_UPDATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_DELETE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_POLICY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_REV_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_PARAM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERACTION])) {
            $v = $this->getInteraction();
            foreach($validationRules[self::FIELD_INTERACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_INTERACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERACTION])) {
                        $errs[self::FIELD_INTERACTION] = [];
                    }
                    $errs[self::FIELD_INTERACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSIONING])) {
            $v = $this->getVersioning();
            foreach($validationRules[self::FIELD_VERSIONING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_VERSIONING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSIONING])) {
                        $errs[self::FIELD_VERSIONING] = [];
                    }
                    $errs[self::FIELD_VERSIONING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READ_HISTORY])) {
            $v = $this->getReadHistory();
            foreach($validationRules[self::FIELD_READ_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_READ_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_HISTORY])) {
                        $errs[self::FIELD_READ_HISTORY] = [];
                    }
                    $errs[self::FIELD_READ_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UPDATE_CREATE])) {
            $v = $this->getUpdateCreate();
            foreach($validationRules[self::FIELD_UPDATE_CREATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_UPDATE_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UPDATE_CREATE])) {
                        $errs[self::FIELD_UPDATE_CREATE] = [];
                    }
                    $errs[self::FIELD_UPDATE_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_CREATE])) {
            $v = $this->getConditionalCreate();
            foreach($validationRules[self::FIELD_CONDITIONAL_CREATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_CREATE])) {
                        $errs[self::FIELD_CONDITIONAL_CREATE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_READ])) {
            $v = $this->getConditionalRead();
            foreach($validationRules[self::FIELD_CONDITIONAL_READ] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_READ, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_READ])) {
                        $errs[self::FIELD_CONDITIONAL_READ] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_READ][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_UPDATE])) {
            $v = $this->getConditionalUpdate();
            foreach($validationRules[self::FIELD_CONDITIONAL_UPDATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_UPDATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_UPDATE])) {
                        $errs[self::FIELD_CONDITIONAL_UPDATE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_UPDATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_DELETE])) {
            $v = $this->getConditionalDelete();
            foreach($validationRules[self::FIELD_CONDITIONAL_DELETE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_DELETE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_DELETE])) {
                        $errs[self::FIELD_CONDITIONAL_DELETE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_DELETE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_POLICY])) {
            $v = $this->getReferencePolicy();
            foreach($validationRules[self::FIELD_REFERENCE_POLICY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_REFERENCE_POLICY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_POLICY])) {
                        $errs[self::FIELD_REFERENCE_POLICY] = [];
                    }
                    $errs[self::FIELD_REFERENCE_POLICY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_INCLUDE])) {
            $v = $this->getSearchInclude();
            foreach($validationRules[self::FIELD_SEARCH_INCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SEARCH_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_INCLUDE])) {
                        $errs[self::FIELD_SEARCH_INCLUDE] = [];
                    }
                    $errs[self::FIELD_SEARCH_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_REV_INCLUDE])) {
            $v = $this->getSearchRevInclude();
            foreach($validationRules[self::FIELD_SEARCH_REV_INCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SEARCH_REV_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_REV_INCLUDE])) {
                        $errs[self::FIELD_SEARCH_REV_INCLUDE] = [];
                    }
                    $errs[self::FIELD_SEARCH_REV_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_PARAM])) {
            $v = $this->getSearchParam();
            foreach($validationRules[self::FIELD_SEARCH_PARAM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SEARCH_PARAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_PARAM])) {
                        $errs[self::FIELD_SEARCH_PARAM] = [];
                    }
                    $errs[self::FIELD_SEARCH_PARAM][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
        } else if (!($type instanceof FHIRCapabilityStatementResource)) {
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
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRResourceType::xmlUnserialize($n));
            } elseif (self::FIELD_PROFILE === $n->nodeName) {
                $type->setProfile(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
                $type->setDocumentation(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_INTERACTION === $n->nodeName) {
                $type->addInteraction(FHIRCapabilityStatementInteraction::xmlUnserialize($n));
            } elseif (self::FIELD_VERSIONING === $n->nodeName) {
                $type->setVersioning(FHIRResourceVersionPolicy::xmlUnserialize($n));
            } elseif (self::FIELD_READ_HISTORY === $n->nodeName) {
                $type->setReadHistory(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_UPDATE_CREATE === $n->nodeName) {
                $type->setUpdateCreate(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITIONAL_CREATE === $n->nodeName) {
                $type->setConditionalCreate(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITIONAL_READ === $n->nodeName) {
                $type->setConditionalRead(FHIRConditionalReadStatus::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITIONAL_UPDATE === $n->nodeName) {
                $type->setConditionalUpdate(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITIONAL_DELETE === $n->nodeName) {
                $type->setConditionalDelete(FHIRConditionalDeleteStatus::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE_POLICY === $n->nodeName) {
                $type->addReferencePolicy(FHIRReferenceHandlingPolicy::xmlUnserialize($n));
            } elseif (self::FIELD_SEARCH_INCLUDE === $n->nodeName) {
                $type->addSearchInclude(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SEARCH_REV_INCLUDE === $n->nodeName) {
                $type->addSearchRevInclude(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SEARCH_PARAM === $n->nodeName) {
                $type->addSearchParam(FHIRCapabilityStatementSearchParam::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TYPE);
        if (null !== $n) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setType($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_READ_HISTORY);
        if (null !== $n) {
            $pt = $type->getReadHistory();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReadHistory($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_UPDATE_CREATE);
        if (null !== $n) {
            $pt = $type->getUpdateCreate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUpdateCreate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONDITIONAL_CREATE);
        if (null !== $n) {
            $pt = $type->getConditionalCreate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setConditionalCreate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONDITIONAL_UPDATE);
        if (null !== $n) {
            $pt = $type->getConditionalUpdate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setConditionalUpdate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEARCH_INCLUDE);
        if (null !== $n) {
            $type->addSearchInclude($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEARCH_REV_INCLUDE);
        if (null !== $n) {
            $type->addSearchRevInclude($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CapabilityStatementResource'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $element->setAttribute(self::FIELD_TYPE, (string)$v);
        }
        if (null !== ($v = $this->getProfile())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROFILE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDocumentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getInteraction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INTERACTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSIONING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReadHistory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_READ_HISTORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UPDATE_CREATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConditionalCreate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONDITIONAL_CREATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONDITIONAL_READ);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONDITIONAL_UPDATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONDITIONAL_DELETE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE_POLICY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SEARCH_INCLUDE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SEARCH_REV_INCLUDE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SEARCH_PARAM);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $out->{self::FIELD_PROFILE} = $v;
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
        if ([] !== ($vs = $this->getInteraction())) {
            $out->{self::FIELD_INTERACTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INTERACTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSIONING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRResourceVersionPolicy::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSIONING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReadHistory())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_READ_HISTORY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_READ_HISTORY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UPDATE_CREATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UPDATE_CREATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalCreate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_CREATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_CREATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalRead())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_READ} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConditionalReadStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_READ_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_UPDATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_UPDATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_DELETE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConditionalDeleteStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_DELETE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRReferenceHandlingPolicy::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_REFERENCE_POLICY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_POLICY_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SEARCH_INCLUDE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEARCH_INCLUDE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SEARCH_REV_INCLUDE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEARCH_REV_INCLUDE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            $out->{self::FIELD_SEARCH_PARAM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SEARCH_PARAM}[] = $v;
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