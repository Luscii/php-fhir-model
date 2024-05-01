<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioInstance
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioInstance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE;

    const FIELD_KEY = 'key';
    const FIELD_KEY_EXT = '_key';
    const FIELD_STRUCTURE_TYPE = 'structureType';
    const FIELD_STRUCTURE_VERSION = 'structureVersion';
    const FIELD_STRUCTURE_VERSION_EXT = '_structureVersion';
    const FIELD_STRUCTURE_PROFILE_CANONICAL = 'structureProfileCanonical';
    const FIELD_STRUCTURE_PROFILE_CANONICAL_EXT = '_structureProfileCanonical';
    const FIELD_STRUCTURE_PROFILE_URI = 'structureProfileUri';
    const FIELD_STRUCTURE_PROFILE_URI_EXT = '_structureProfileUri';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_CONTENT = 'content';
    const FIELD_VERSION = 'version';
    const FIELD_CONTAINED_INSTANCE = 'containedInstance';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the instance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $key = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the kind of data structure (FHIR resource or some other
     * standard) this is an instance of.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $structureType = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Conveys the version of the data structure instantiated. I.e. what release of
     * FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $structureVersion = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $structureProfileCanonical = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $structureProfileUri = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of what the instance contains and what it's for.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to an instance (typically an example) that shows the data that would
     * corespond to this instance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $content = null;
    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[]
     */
    protected null|array $version = [];
    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[]
     */
    protected null|array $containedInstance = [];

    /**
     * Validation map for fields in type ExampleScenario.Instance
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRExampleScenarioInstance Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_KEY]) || isset($data[self::FIELD_KEY_EXT])) {
            $value = $data[self::FIELD_KEY] ?? null;
            $ext = (isset($data[self::FIELD_KEY_EXT]) && is_array($data[self::FIELD_KEY_EXT])) ? $data[self::FIELD_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setKey($value);
                } else if (is_array($value)) {
                    $this->setKey(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setKey(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setKey(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE_TYPE])) {
            if ($data[self::FIELD_STRUCTURE_TYPE] instanceof FHIRCoding) {
                $this->setStructureType($data[self::FIELD_STRUCTURE_TYPE]);
            } else {
                $this->setStructureType(new FHIRCoding($data[self::FIELD_STRUCTURE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE_VERSION]) || isset($data[self::FIELD_STRUCTURE_VERSION_EXT])) {
            $value = $data[self::FIELD_STRUCTURE_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_STRUCTURE_VERSION_EXT]) && is_array($data[self::FIELD_STRUCTURE_VERSION_EXT])) ? $data[self::FIELD_STRUCTURE_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setStructureVersion($value);
                } else if (is_array($value)) {
                    $this->setStructureVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setStructureVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStructureVersion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE_PROFILE_CANONICAL]) || isset($data[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT])) {
            $value = $data[self::FIELD_STRUCTURE_PROFILE_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT]) && is_array($data[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT])) ? $data[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setStructureProfileCanonical($value);
                } else if (is_array($value)) {
                    $this->setStructureProfileCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setStructureProfileCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStructureProfileCanonical(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE_PROFILE_URI]) || isset($data[self::FIELD_STRUCTURE_PROFILE_URI_EXT])) {
            $value = $data[self::FIELD_STRUCTURE_PROFILE_URI] ?? null;
            $ext = (isset($data[self::FIELD_STRUCTURE_PROFILE_URI_EXT]) && is_array($data[self::FIELD_STRUCTURE_PROFILE_URI_EXT])) ? $data[self::FIELD_STRUCTURE_PROFILE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setStructureProfileUri($value);
                } else if (is_array($value)) {
                    $this->setStructureProfileUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setStructureProfileUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStructureProfileUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT])) {
            if ($data[self::FIELD_CONTENT] instanceof FHIRReference) {
                $this->setContent($data[self::FIELD_CONTENT]);
            } else {
                $this->setContent(new FHIRReference($data[self::FIELD_CONTENT]));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRExampleScenarioVersion($v));
                    }
                }
            } elseif ($data[self::FIELD_VERSION] instanceof FHIRExampleScenarioVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRExampleScenarioVersion($data[self::FIELD_VERSION]));
            }
        }
        if (isset($data[self::FIELD_CONTAINED_INSTANCE])) {
            if (is_array($data[self::FIELD_CONTAINED_INSTANCE])) {
                foreach($data[self::FIELD_CONTAINED_INSTANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioContainedInstance) {
                        $this->addContainedInstance($v);
                    } else {
                        $this->addContainedInstance(new FHIRExampleScenarioContainedInstance($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTAINED_INSTANCE] instanceof FHIRExampleScenarioContainedInstance) {
                $this->addContainedInstance($data[self::FIELD_CONTAINED_INSTANCE]);
            } else {
                $this->addContainedInstance(new FHIRExampleScenarioContainedInstance($data[self::FIELD_CONTAINED_INSTANCE]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the instance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getKey(): null|FHIRString
    {
        return $this->key;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the instance.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $key
     * @return static
     */
    public function setKey(null|string|FHIRStringPrimitive|FHIRString $key = null): self
    {
        if (null !== $key && !($key instanceof FHIRString)) {
            $key = new FHIRString($key);
        }
        $this->_trackValueSet($this->key, $key);
        $this->key = $key;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the kind of data structure (FHIR resource or some other
     * standard) this is an instance of.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getStructureType(): null|FHIRCoding
    {
        return $this->structureType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the kind of data structure (FHIR resource or some other
     * standard) this is an instance of.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $structureType
     * @return static
     */
    public function setStructureType(null|FHIRCoding $structureType = null): self
    {
        if (null === $structureType) {
            $structureType = new FHIRCoding();
        }
        $this->_trackValueSet($this->structureType, $structureType);
        $this->structureType = $structureType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Conveys the version of the data structure instantiated. I.e. what release of
     * FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getStructureVersion(): null|FHIRString
    {
        return $this->structureVersion;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Conveys the version of the data structure instantiated. I.e. what release of
     * FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $structureVersion
     * @return static
     */
    public function setStructureVersion(null|string|FHIRStringPrimitive|FHIRString $structureVersion = null): self
    {
        if (null !== $structureVersion && !($structureVersion instanceof FHIRString)) {
            $structureVersion = new FHIRString($structureVersion);
        }
        $this->_trackValueSet($this->structureVersion, $structureVersion);
        $this->structureVersion = $structureVersion;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getStructureProfileCanonical(): null|FHIRCanonical
    {
        return $this->structureProfileCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $structureProfileCanonical
     * @return static
     */
    public function setStructureProfileCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $structureProfileCanonical = null): self
    {
        if (null !== $structureProfileCanonical && !($structureProfileCanonical instanceof FHIRCanonical)) {
            $structureProfileCanonical = new FHIRCanonical($structureProfileCanonical);
        }
        $this->_trackValueSet($this->structureProfileCanonical, $structureProfileCanonical);
        $this->structureProfileCanonical = $structureProfileCanonical;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getStructureProfileUri(): null|FHIRUri
    {
        return $this->structureProfileUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $structureProfileUri
     * @return static
     */
    public function setStructureProfileUri(null|string|FHIRUriPrimitive|FHIRUri $structureProfileUri = null): self
    {
        if (null !== $structureProfileUri && !($structureProfileUri instanceof FHIRUri)) {
            $structureProfileUri = new FHIRUri($structureProfileUri);
        }
        $this->_trackValueSet($this->structureProfileUri, $structureProfileUri);
        $this->structureProfileUri = $structureProfileUri;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        $this->title = $title;
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
     * An explanation of what the instance contains and what it's for.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
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
     * An explanation of what the instance contains and what it's for.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to an instance (typically an example) that shows the data that would
     * corespond to this instance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getContent(): null|FHIRReference
    {
        return $this->content;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to an instance (typically an example) that shows the data that would
     * corespond to this instance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $content
     * @return static
     */
    public function setContent(null|FHIRReference $content = null): self
    {
        if (null === $content) {
            $content = new FHIRReference();
        }
        $this->_trackValueSet($this->content, $content);
        $this->content = $content;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[]
     */
    public function getVersion(): null|array
    {
        return $this->version;
    }

    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion $version
     * @return static
     */
    public function addVersion(null|FHIRExampleScenarioVersion $version = null): self
    {
        if (null === $version) {
            $version = new FHIRExampleScenarioVersion();
        }
        $this->_trackValueAdded();
        $this->version[] = $version;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[] $version
     * @return static
     */
    public function setVersion(array $version = []): self
    {
        if ([] !== $this->version) {
            $this->_trackValuesRemoved(count($this->version));
            $this->version = [];
        }
        if ([] === $version) {
            return $this;
        }
        foreach($version as $v) {
            if ($v instanceof FHIRExampleScenarioVersion) {
                $this->addVersion($v);
            } else {
                $this->addVersion(new FHIRExampleScenarioVersion($v));
            }
        }
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[]
     */
    public function getContainedInstance(): null|array
    {
        return $this->containedInstance;
    }

    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $containedInstance
     * @return static
     */
    public function addContainedInstance(null|FHIRExampleScenarioContainedInstance $containedInstance = null): self
    {
        if (null === $containedInstance) {
            $containedInstance = new FHIRExampleScenarioContainedInstance();
        }
        $this->_trackValueAdded();
        $this->containedInstance[] = $containedInstance;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[] $containedInstance
     * @return static
     */
    public function setContainedInstance(array $containedInstance = []): self
    {
        if ([] !== $this->containedInstance) {
            $this->_trackValuesRemoved(count($this->containedInstance));
            $this->containedInstance = [];
        }
        if ([] === $containedInstance) {
            return $this;
        }
        foreach($containedInstance as $v) {
            if ($v instanceof FHIRExampleScenarioContainedInstance) {
                $this->addContainedInstance($v);
            } else {
                $this->addContainedInstance(new FHIRExampleScenarioContainedInstance($v));
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
        if (null !== ($v = $this->getKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureProfileCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureProfileUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_PROFILE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERSION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContainedInstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTAINED_INSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KEY])) {
            $v = $this->getKey();
            foreach($validationRules[self::FIELD_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEY])) {
                        $errs[self::FIELD_KEY] = [];
                    }
                    $errs[self::FIELD_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_TYPE])) {
            $v = $this->getStructureType();
            foreach($validationRules[self::FIELD_STRUCTURE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_STRUCTURE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_TYPE])) {
                        $errs[self::FIELD_STRUCTURE_TYPE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_VERSION])) {
            $v = $this->getStructureVersion();
            foreach($validationRules[self::FIELD_STRUCTURE_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_STRUCTURE_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_VERSION])) {
                        $errs[self::FIELD_STRUCTURE_VERSION] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_PROFILE_CANONICAL])) {
            $v = $this->getStructureProfileCanonical();
            foreach($validationRules[self::FIELD_STRUCTURE_PROFILE_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_STRUCTURE_PROFILE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL])) {
                        $errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_PROFILE_URI])) {
            $v = $this->getStructureProfileUri();
            foreach($validationRules[self::FIELD_STRUCTURE_PROFILE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_STRUCTURE_PROFILE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_PROFILE_URI])) {
                        $errs[self::FIELD_STRUCTURE_PROFILE_URI] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_PROFILE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED_INSTANCE])) {
            $v = $this->getContainedInstance();
            foreach($validationRules[self::FIELD_CONTAINED_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_CONTAINED_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED_INSTANCE])) {
                        $errs[self::FIELD_CONTAINED_INSTANCE] = [];
                    }
                    $errs[self::FIELD_CONTAINED_INSTANCE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance
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
        } else if (!($type instanceof FHIRExampleScenarioInstance)) {
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
            if (self::FIELD_KEY === $n->nodeName) {
                $type->setKey(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STRUCTURE_TYPE === $n->nodeName) {
                $type->setStructureType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_STRUCTURE_VERSION === $n->nodeName) {
                $type->setStructureVersion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STRUCTURE_PROFILE_CANONICAL === $n->nodeName) {
                $type->setStructureProfileCanonical(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_STRUCTURE_PROFILE_URI === $n->nodeName) {
                $type->setStructureProfileUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_TITLE === $n->nodeName) {
                $type->setTitle(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT === $n->nodeName) {
                $type->setContent(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->addVersion(FHIRExampleScenarioVersion::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED_INSTANCE === $n->nodeName) {
                $type->addContainedInstance(FHIRExampleScenarioContainedInstance::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_KEY);
        if (null !== $n) {
            $pt = $type->getKey();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setKey($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STRUCTURE_VERSION);
        if (null !== $n) {
            $pt = $type->getStructureVersion();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStructureVersion($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STRUCTURE_PROFILE_CANONICAL);
        if (null !== $n) {
            $pt = $type->getStructureProfileCanonical();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStructureProfileCanonical($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STRUCTURE_PROFILE_URI);
        if (null !== $n) {
            $pt = $type->getStructureProfileUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStructureProfileUri($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TITLE);
        if (null !== $n) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTitle($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ExampleScenarioInstance'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getKey())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_KEY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStructureType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStructureVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURE_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStructureProfileCanonical())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURE_PROFILE_CANONICAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStructureProfileUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURE_PROFILE_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTitle())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContainedInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTAINED_INSTANCE);
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
        if (null !== ($v = $this->getKey())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_KEY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_KEY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStructureType())) {
            $out->{self::FIELD_STRUCTURE_TYPE} = $v;
        }
        if (null !== ($v = $this->getStructureVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STRUCTURE_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STRUCTURE_VERSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStructureProfileCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STRUCTURE_PROFILE_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStructureProfileUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STRUCTURE_PROFILE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STRUCTURE_PROFILE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContent())) {
            $out->{self::FIELD_CONTENT} = $v;
        }
        if ([] !== ($vs = $this->getVersion())) {
            $out->{self::FIELD_VERSION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VERSION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContainedInstance())) {
            $out->{self::FIELD_CONTAINED_INSTANCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTAINED_INSTANCE}[] = $v;
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