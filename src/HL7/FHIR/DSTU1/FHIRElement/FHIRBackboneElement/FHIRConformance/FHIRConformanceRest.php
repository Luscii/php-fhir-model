<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance;

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

use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulConformanceMode;
use HL7\FHIR\DSTU1\FHIRElement\FHIRString;
use HL7\FHIR\DSTU1\FHIRElement\FHIRUri;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\FHIRStringPrimitive;
use HL7\FHIR\DSTU1\FHIRUriPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 *
 * Class FHIRConformanceRest
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceRest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST;

    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_SECURITY = 'security';
    const FIELD_RESOURCE = 'resource';
    const FIELD_OPERATION = 'operation';
    const FIELD_QUERY = 'query';
    const FIELD_DOCUMENT_MAILBOX = 'documentMailbox';
    const FIELD_DOCUMENT_MAILBOX_EXT = '_documentMailbox';

    /**
     * The mode of a RESTful conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulConformanceMode
     */
    protected null|FHIRRestfulConformanceMode $mode = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $documentation = null;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Information about security of implementation.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity
     */
    protected null|FHIRConformanceSecurity $security = null;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[]
     */
    protected null|array $resource = [];
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1[]
     */
    protected null|array $operation = [];
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery[]
     */
    protected null|array $query = [];
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRUri[]
     */
    protected null|array $documentMailbox = [];

    /**
     * Validation map for fields in type Conformance.Rest
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_RESOURCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConformanceRest Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
            $value = $data[self::FIELD_MODE] ?? null;
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])) ? $data[self::FIELD_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRestfulConformanceMode) {
                    $this->setMode($value);
                } else if (is_array($value)) {
                    $this->setMode(new FHIRRestfulConformanceMode(array_merge($ext, $value)));
                } else {
                    $this->setMode(new FHIRRestfulConformanceMode([FHIRRestfulConformanceMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMode(new FHIRRestfulConformanceMode($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION]) || isset($data[self::FIELD_DOCUMENTATION_EXT])) {
            $value = $data[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) ? $data[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocumentation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SECURITY])) {
            if ($data[self::FIELD_SECURITY] instanceof FHIRConformanceSecurity) {
                $this->setSecurity($data[self::FIELD_SECURITY]);
            } else {
                $this->setSecurity(new FHIRConformanceSecurity($data[self::FIELD_SECURITY]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_array($data[self::FIELD_RESOURCE])) {
                foreach($data[self::FIELD_RESOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceResource) {
                        $this->addResource($v);
                    } else {
                        $this->addResource(new FHIRConformanceResource($v));
                    }
                }
            } elseif ($data[self::FIELD_RESOURCE] instanceof FHIRConformanceResource) {
                $this->addResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->addResource(new FHIRConformanceResource($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceOperation1) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRConformanceOperation1($v));
                    }
                }
            } elseif ($data[self::FIELD_OPERATION] instanceof FHIRConformanceOperation1) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRConformanceOperation1($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_QUERY])) {
            if (is_array($data[self::FIELD_QUERY])) {
                foreach($data[self::FIELD_QUERY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceQuery) {
                        $this->addQuery($v);
                    } else {
                        $this->addQuery(new FHIRConformanceQuery($v));
                    }
                }
            } elseif ($data[self::FIELD_QUERY] instanceof FHIRConformanceQuery) {
                $this->addQuery($data[self::FIELD_QUERY]);
            } else {
                $this->addQuery(new FHIRConformanceQuery($data[self::FIELD_QUERY]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT_MAILBOX]) || isset($data[self::FIELD_DOCUMENT_MAILBOX_EXT])) {
            $value = $data[self::FIELD_DOCUMENT_MAILBOX] ?? null;
            $ext = (isset($data[self::FIELD_DOCUMENT_MAILBOX_EXT]) && is_array($data[self::FIELD_DOCUMENT_MAILBOX_EXT])) ? $data[self::FIELD_DOCUMENT_MAILBOX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addDocumentMailbox($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addDocumentMailbox($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDocumentMailbox(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addDocumentMailbox(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDocumentMailbox(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addDocumentMailbox(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDocumentMailbox(new FHIRUri($iext));
                }
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
     * The mode of a RESTful conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulConformanceMode
     */
    public function getMode(): null|FHIRRestfulConformanceMode
    {
        return $this->mode;
    }

    /**
     * The mode of a RESTful conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulConformanceMode $mode
     * @return static
     */
    public function setMode(null|FHIRRestfulConformanceMode $mode = null): self
    {
        if (null === $mode) {
            $mode = new FHIRRestfulConformanceMode();
        }
        $this->_trackValueSet($this->mode, $mode);
        $this->mode = $mode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation = null): self
    {
        if (null !== $documentation && !($documentation instanceof FHIRString)) {
            $documentation = new FHIRString($documentation);
        }
        $this->_trackValueSet($this->documentation, $documentation);
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Information about security of implementation.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity
     */
    public function getSecurity(): null|FHIRConformanceSecurity
    {
        return $this->security;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Information about security of implementation.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity $security
     * @return static
     */
    public function setSecurity(null|FHIRConformanceSecurity $security = null): self
    {
        if (null === $security) {
            $security = new FHIRConformanceSecurity();
        }
        $this->_trackValueSet($this->security, $security);
        $this->security = $security;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[]
     */
    public function getResource(): null|array
    {
        return $this->resource;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource $resource
     * @return static
     */
    public function addResource(null|FHIRConformanceResource $resource = null): self
    {
        if (null === $resource) {
            $resource = new FHIRConformanceResource();
        }
        $this->_trackValueAdded();
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[] $resource
     * @return static
     */
    public function setResource(array $resource = []): self
    {
        if ([] !== $this->resource) {
            $this->_trackValuesRemoved(count($this->resource));
            $this->resource = [];
        }
        if ([] === $resource) {
            return $this;
        }
        foreach($resource as $v) {
            if ($v instanceof FHIRConformanceResource) {
                $this->addResource($v);
            } else {
                $this->addResource(new FHIRConformanceResource($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1[]
     */
    public function getOperation(): null|array
    {
        return $this->operation;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1 $operation
     * @return static
     */
    public function addOperation(null|FHIRConformanceOperation1 $operation = null): self
    {
        if (null === $operation) {
            $operation = new FHIRConformanceOperation1();
        }
        $this->_trackValueAdded();
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1[] $operation
     * @return static
     */
    public function setOperation(array $operation = []): self
    {
        if ([] !== $this->operation) {
            $this->_trackValuesRemoved(count($this->operation));
            $this->operation = [];
        }
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRConformanceOperation1) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRConformanceOperation1($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery[]
     */
    public function getQuery(): null|array
    {
        return $this->query;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery $query
     * @return static
     */
    public function addQuery(null|FHIRConformanceQuery $query = null): self
    {
        if (null === $query) {
            $query = new FHIRConformanceQuery();
        }
        $this->_trackValueAdded();
        $this->query[] = $query;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery[] $query
     * @return static
     */
    public function setQuery(array $query = []): self
    {
        if ([] !== $this->query) {
            $this->_trackValuesRemoved(count($this->query));
            $this->query = [];
        }
        if ([] === $query) {
            return $this;
        }
        foreach($query as $v) {
            if ($v instanceof FHIRConformanceQuery) {
                $this->addQuery($v);
            } else {
                $this->addQuery(new FHIRConformanceQuery($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRUri[]
     */
    public function getDocumentMailbox(): null|array
    {
        return $this->documentMailbox;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRUriPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRUri $documentMailbox
     * @return static
     */
    public function addDocumentMailbox(null|string|FHIRUriPrimitive|FHIRUri $documentMailbox = null): self
    {
        if (null !== $documentMailbox && !($documentMailbox instanceof FHIRUri)) {
            $documentMailbox = new FHIRUri($documentMailbox);
        }
        $this->_trackValueAdded();
        $this->documentMailbox[] = $documentMailbox;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRUri[] $documentMailbox
     * @return static
     */
    public function setDocumentMailbox(array $documentMailbox = []): self
    {
        if ([] !== $this->documentMailbox) {
            $this->_trackValuesRemoved(count($this->documentMailbox));
            $this->documentMailbox = [];
        }
        if ([] === $documentMailbox) {
            return $this;
        }
        foreach($documentMailbox as $v) {
            if ($v instanceof FHIRUri) {
                $this->addDocumentMailbox($v);
            } else {
                $this->addDocumentMailbox(new FHIRUri($v));
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
        if (null !== ($v = $this->getMode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSecurity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SECURITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getQuery())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_QUERY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDocumentMailbox())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOCUMENT_MAILBOX, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY])) {
            $v = $this->getSecurity();
            foreach($validationRules[self::FIELD_SECURITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_SECURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY])) {
                        $errs[self::FIELD_SECURITY] = [];
                    }
                    $errs[self::FIELD_SECURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUERY])) {
            $v = $this->getQuery();
            foreach($validationRules[self::FIELD_QUERY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_QUERY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUERY])) {
                        $errs[self::FIELD_QUERY] = [];
                    }
                    $errs[self::FIELD_QUERY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT_MAILBOX])) {
            $v = $this->getDocumentMailbox();
            foreach($validationRules[self::FIELD_DOCUMENT_MAILBOX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST, self::FIELD_DOCUMENT_MAILBOX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT_MAILBOX])) {
                        $errs[self::FIELD_DOCUMENT_MAILBOX] = [];
                    }
                    $errs[self::FIELD_DOCUMENT_MAILBOX][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest
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
        } else if (!($type instanceof FHIRConformanceRest)) {
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
            if (self::FIELD_MODE === $n->nodeName) {
                $type->setMode(FHIRRestfulConformanceMode::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
                $type->setDocumentation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SECURITY === $n->nodeName) {
                $type->setSecurity(FHIRConformanceSecurity::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE === $n->nodeName) {
                $type->addResource(FHIRConformanceResource::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATION === $n->nodeName) {
                $type->addOperation(FHIRConformanceOperation1::xmlUnserialize($n));
            } elseif (self::FIELD_QUERY === $n->nodeName) {
                $type->addQuery(FHIRConformanceQuery::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENT_MAILBOX === $n->nodeName) {
                $type->addDocumentMailbox(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DOCUMENT_MAILBOX);
        if (null !== $n) {
            $type->addDocumentMailbox($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ConformanceRest'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getMode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDocumentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSecurity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SECURITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OPERATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getQuery())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_QUERY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDocumentMailbox())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENT_MAILBOX);
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
        if (null !== ($v = $this->getMode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRestfulConformanceMode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOCUMENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSecurity())) {
            $out->{self::FIELD_SECURITY} = $v;
        }
        if ([] !== ($vs = $this->getResource())) {
            $out->{self::FIELD_RESOURCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RESOURCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $out->{self::FIELD_OPERATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OPERATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getQuery())) {
            $out->{self::FIELD_QUERY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_QUERY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDocumentMailbox())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUri::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_DOCUMENT_MAILBOX} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOCUMENT_MAILBOX_EXT} = $exts;
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