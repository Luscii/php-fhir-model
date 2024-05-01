<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConformanceExpectation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUrlPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A set of requirements - a list of features or behaviors of designed systems that
 * are necessary to achieve organizational or regulatory goals.
 *
 * Class FHIRRequirementsStatement
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements
 */
class FHIRRequirementsStatement extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT;

    const FIELD_KEY = 'key';
    const FIELD_KEY_EXT = '_key';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_CONFORMANCE = 'conformance';
    const FIELD_CONFORMANCE_EXT = '_conformance';
    const FIELD_CONDITIONALITY = 'conditionality';
    const FIELD_CONDITIONALITY_EXT = '_conditionality';
    const FIELD_REQUIREMENT = 'requirement';
    const FIELD_REQUIREMENT_EXT = '_requirement';
    const FIELD_DERIVED_FROM = 'derivedFrom';
    const FIELD_DERIVED_FROM_EXT = '_derivedFrom';
    const FIELD_PARENT = 'parent';
    const FIELD_PARENT_EXT = '_parent';
    const FIELD_SATISFIED_BY = 'satisfiedBy';
    const FIELD_SATISFIED_BY_EXT = '_satisfiedBy';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_SOURCE = 'source';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $key = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConformanceExpectation[]
     */
    protected null|array $conformance = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This boolean flag is set to true of the text of the requirement is conditional
     * on something e.g. it includes lanauage like 'if x then y'. This conditionality
     * flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $conditionality = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual requirement for human consumption.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $requirement = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Another statement on one of the requirements that this requirement clarifies or
     * restricts.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $derivedFrom = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $parent = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    protected null|array $satisfiedBy = [];
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    protected null|array $reference = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $source = [];

    /**
     * Validation map for fields in type Requirements.Statement
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRRequirementsStatement Constructor
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
                if ($value instanceof FHIRId) {
                    $this->setKey($value);
                } else if (is_array($value)) {
                    $this->setKey(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setKey(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setKey(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_LABEL]) || isset($data[self::FIELD_LABEL_EXT])) {
            $value = $data[self::FIELD_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $data[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONFORMANCE]) || isset($data[self::FIELD_CONFORMANCE_EXT])) {
            $value = $data[self::FIELD_CONFORMANCE] ?? null;
            $ext = (isset($data[self::FIELD_CONFORMANCE_EXT]) && is_array($data[self::FIELD_CONFORMANCE_EXT])) ? $data[self::FIELD_CONFORMANCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConformanceExpectation) {
                    $this->addConformance($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRConformanceExpectation) {
                            $this->addConformance($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addConformance(new FHIRConformanceExpectation(array_merge($v, $iext)));
                            } else {
                                $this->addConformance(new FHIRConformanceExpectation([FHIRConformanceExpectation::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addConformance(new FHIRConformanceExpectation(array_merge($ext, $value)));
                } else {
                    $this->addConformance(new FHIRConformanceExpectation([FHIRConformanceExpectation::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addConformance(new FHIRConformanceExpectation($iext));
                }
            }
        }
        if (isset($data[self::FIELD_CONDITIONALITY]) || isset($data[self::FIELD_CONDITIONALITY_EXT])) {
            $value = $data[self::FIELD_CONDITIONALITY] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONALITY_EXT]) && is_array($data[self::FIELD_CONDITIONALITY_EXT])) ? $data[self::FIELD_CONDITIONALITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionality($value);
                } else if (is_array($value)) {
                    $this->setConditionality(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionality(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionality(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENT]) || isset($data[self::FIELD_REQUIREMENT_EXT])) {
            $value = $data[self::FIELD_REQUIREMENT] ?? null;
            $ext = (isset($data[self::FIELD_REQUIREMENT_EXT]) && is_array($data[self::FIELD_REQUIREMENT_EXT])) ? $data[self::FIELD_REQUIREMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setRequirement($value);
                } else if (is_array($value)) {
                    $this->setRequirement(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setRequirement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequirement(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_DERIVED_FROM]) || isset($data[self::FIELD_DERIVED_FROM_EXT])) {
            $value = $data[self::FIELD_DERIVED_FROM] ?? null;
            $ext = (isset($data[self::FIELD_DERIVED_FROM_EXT]) && is_array($data[self::FIELD_DERIVED_FROM_EXT])) ? $data[self::FIELD_DERIVED_FROM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDerivedFrom($value);
                } else if (is_array($value)) {
                    $this->setDerivedFrom(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDerivedFrom(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDerivedFrom(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PARENT]) || isset($data[self::FIELD_PARENT_EXT])) {
            $value = $data[self::FIELD_PARENT] ?? null;
            $ext = (isset($data[self::FIELD_PARENT_EXT]) && is_array($data[self::FIELD_PARENT_EXT])) ? $data[self::FIELD_PARENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setParent($value);
                } else if (is_array($value)) {
                    $this->setParent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setParent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setParent(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SATISFIED_BY]) || isset($data[self::FIELD_SATISFIED_BY_EXT])) {
            $value = $data[self::FIELD_SATISFIED_BY] ?? null;
            $ext = (isset($data[self::FIELD_SATISFIED_BY_EXT]) && is_array($data[self::FIELD_SATISFIED_BY_EXT])) ? $data[self::FIELD_SATISFIED_BY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->addSatisfiedBy($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUrl) {
                            $this->addSatisfiedBy($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSatisfiedBy(new FHIRUrl(array_merge($v, $iext)));
                            } else {
                                $this->addSatisfiedBy(new FHIRUrl([FHIRUrl::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSatisfiedBy(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->addSatisfiedBy(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSatisfiedBy(new FHIRUrl($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REFERENCE]) || isset($data[self::FIELD_REFERENCE_EXT])) {
            $value = $data[self::FIELD_REFERENCE] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT])) ? $data[self::FIELD_REFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->addReference($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUrl) {
                            $this->addReference($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addReference(new FHIRUrl(array_merge($v, $iext)));
                            } else {
                                $this->addReference(new FHIRUrl([FHIRUrl::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addReference(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->addReference(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReference(new FHIRUrl($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRReference($data[self::FIELD_SOURCE]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getKey(): null|FHIRId
    {
        return $this->key;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRIdPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId $key
     * @return static
     */
    public function setKey(null|string|FHIRIdPrimitive|FHIRId $key = null): self
    {
        if (null !== $key && !($key instanceof FHIRId)) {
            $key = new FHIRId($key);
        }
        $this->_trackValueSet($this->key, $key);
        $this->key = $key;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        $this->label = $label;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConformanceExpectation[]
     */
    public function getConformance(): null|array
    {
        return $this->conformance;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConformanceExpectation $conformance
     * @return static
     */
    public function addConformance(null|FHIRConformanceExpectation $conformance = null): self
    {
        if (null === $conformance) {
            $conformance = new FHIRConformanceExpectation();
        }
        $this->_trackValueAdded();
        $this->conformance[] = $conformance;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRConformanceExpectation[] $conformance
     * @return static
     */
    public function setConformance(array $conformance = []): self
    {
        if ([] !== $this->conformance) {
            $this->_trackValuesRemoved(count($this->conformance));
            $this->conformance = [];
        }
        if ([] === $conformance) {
            return $this;
        }
        foreach($conformance as $v) {
            if ($v instanceof FHIRConformanceExpectation) {
                $this->addConformance($v);
            } else {
                $this->addConformance(new FHIRConformanceExpectation($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This boolean flag is set to true of the text of the requirement is conditional
     * on something e.g. it includes lanauage like 'if x then y'. This conditionality
     * flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getConditionality(): null|FHIRBoolean
    {
        return $this->conditionality;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This boolean flag is set to true of the text of the requirement is conditional
     * on something e.g. it includes lanauage like 'if x then y'. This conditionality
     * flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $conditionality
     * @return static
     */
    public function setConditionality(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionality = null): self
    {
        if (null !== $conditionality && !($conditionality instanceof FHIRBoolean)) {
            $conditionality = new FHIRBoolean($conditionality);
        }
        $this->_trackValueSet($this->conditionality, $conditionality);
        $this->conditionality = $conditionality;
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
     * The actual requirement for human consumption.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getRequirement(): null|FHIRMarkdown
    {
        return $this->requirement;
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
     * The actual requirement for human consumption.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @return static
     */
    public function setRequirement(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement = null): self
    {
        if (null !== $requirement && !($requirement instanceof FHIRMarkdown)) {
            $requirement = new FHIRMarkdown($requirement);
        }
        $this->_trackValueSet($this->requirement, $requirement);
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Another statement on one of the requirements that this requirement clarifies or
     * restricts.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDerivedFrom(): null|FHIRString
    {
        return $this->derivedFrom;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Another statement on one of the requirements that this requirement clarifies or
     * restricts.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $derivedFrom
     * @return static
     */
    public function setDerivedFrom(null|string|FHIRStringPrimitive|FHIRString $derivedFrom = null): self
    {
        if (null !== $derivedFrom && !($derivedFrom instanceof FHIRString)) {
            $derivedFrom = new FHIRString($derivedFrom);
        }
        $this->_trackValueSet($this->derivedFrom, $derivedFrom);
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getParent(): null|FHIRString
    {
        return $this->parent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $parent
     * @return static
     */
    public function setParent(null|string|FHIRStringPrimitive|FHIRString $parent = null): self
    {
        if (null !== $parent && !($parent instanceof FHIRString)) {
            $parent = new FHIRString($parent);
        }
        $this->_trackValueSet($this->parent, $parent);
        $this->parent = $parent;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    public function getSatisfiedBy(): null|array
    {
        return $this->satisfiedBy;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUrlPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl $satisfiedBy
     * @return static
     */
    public function addSatisfiedBy(null|string|FHIRUrlPrimitive|FHIRUrl $satisfiedBy = null): self
    {
        if (null !== $satisfiedBy && !($satisfiedBy instanceof FHIRUrl)) {
            $satisfiedBy = new FHIRUrl($satisfiedBy);
        }
        $this->_trackValueAdded();
        $this->satisfiedBy[] = $satisfiedBy;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[] $satisfiedBy
     * @return static
     */
    public function setSatisfiedBy(array $satisfiedBy = []): self
    {
        if ([] !== $this->satisfiedBy) {
            $this->_trackValuesRemoved(count($this->satisfiedBy));
            $this->satisfiedBy = [];
        }
        if ([] === $satisfiedBy) {
            return $this;
        }
        foreach($satisfiedBy as $v) {
            if ($v instanceof FHIRUrl) {
                $this->addSatisfiedBy($v);
            } else {
                $this->addSatisfiedBy(new FHIRUrl($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    public function getReference(): null|array
    {
        return $this->reference;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUrlPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl $reference
     * @return static
     */
    public function addReference(null|string|FHIRUrlPrimitive|FHIRUrl $reference = null): self
    {
        if (null !== $reference && !($reference instanceof FHIRUrl)) {
            $reference = new FHIRUrl($reference);
        }
        $this->_trackValueAdded();
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUrl[] $reference
     * @return static
     */
    public function setReference(array $reference = []): self
    {
        if ([] !== $this->reference) {
            $this->_trackValuesRemoved(count($this->reference));
            $this->reference = [];
        }
        if ([] === $reference) {
            return $this;
        }
        foreach($reference as $v) {
            if ($v instanceof FHIRUrl) {
                $this->addReference($v);
            } else {
                $this->addReference(new FHIRUrl($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSource(): null|array
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $source
     * @return static
     */
    public function addSource(null|FHIRReference $source = null): self
    {
        if (null === $source) {
            $source = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $source
     * @return static
     */
    public function setSource(array $source = []): self
    {
        if ([] !== $this->source) {
            $this->_trackValuesRemoved(count($this->source));
            $this->source = [];
        }
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSource($v);
            } else {
                $this->addSource(new FHIRReference($v));
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
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getConformance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONFORMANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getConditionality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DERIVED_FROM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSatisfiedBy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SATISFIED_BY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KEY])) {
            $v = $this->getKey();
            foreach($validationRules[self::FIELD_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEY])) {
                        $errs[self::FIELD_KEY] = [];
                    }
                    $errs[self::FIELD_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONFORMANCE])) {
            $v = $this->getConformance();
            foreach($validationRules[self::FIELD_CONFORMANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_CONFORMANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFORMANCE])) {
                        $errs[self::FIELD_CONFORMANCE] = [];
                    }
                    $errs[self::FIELD_CONFORMANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONALITY])) {
            $v = $this->getConditionality();
            foreach($validationRules[self::FIELD_CONDITIONALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_CONDITIONALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONALITY])) {
                        $errs[self::FIELD_CONDITIONALITY] = [];
                    }
                    $errs[self::FIELD_CONDITIONALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENT])) {
            $v = $this->getRequirement();
            foreach($validationRules[self::FIELD_REQUIREMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENT])) {
                        $errs[self::FIELD_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM])) {
            $v = $this->getDerivedFrom();
            foreach($validationRules[self::FIELD_DERIVED_FROM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_DERIVED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM])) {
                        $errs[self::FIELD_DERIVED_FROM] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SATISFIED_BY])) {
            $v = $this->getSatisfiedBy();
            foreach($validationRules[self::FIELD_SATISFIED_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_SATISFIED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SATISFIED_BY])) {
                        $errs[self::FIELD_SATISFIED_BY] = [];
                    }
                    $errs[self::FIELD_SATISFIED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement
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
        } else if (!($type instanceof FHIRRequirementsStatement)) {
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
                $type->setKey(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_LABEL === $n->nodeName) {
                $type->setLabel(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CONFORMANCE === $n->nodeName) {
                $type->addConformance(FHIRConformanceExpectation::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITIONALITY === $n->nodeName) {
                $type->setConditionality(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIREMENT === $n->nodeName) {
                $type->setRequirement(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_DERIVED_FROM === $n->nodeName) {
                $type->setDerivedFrom(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PARENT === $n->nodeName) {
                $type->setParent(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SATISFIED_BY === $n->nodeName) {
                $type->addSatisfiedBy(FHIRUrl::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE === $n->nodeName) {
                $type->addReference(FHIRUrl::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE === $n->nodeName) {
                $type->addSource(FHIRReference::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_LABEL);
        if (null !== $n) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLabel($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONDITIONALITY);
        if (null !== $n) {
            $pt = $type->getConditionality();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setConditionality($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUIREMENT);
        if (null !== $n) {
            $pt = $type->getRequirement();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequirement($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DERIVED_FROM);
        if (null !== $n) {
            $pt = $type->getDerivedFrom();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDerivedFrom($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PARENT);
        if (null !== $n) {
            $pt = $type->getParent();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setParent($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SATISFIED_BY);
        if (null !== $n) {
            $type->addSatisfiedBy($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REFERENCE);
        if (null !== $n) {
            $type->addReference($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('RequirementsStatement'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getKey())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_KEY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLabel())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LABEL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getConformance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONFORMANCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getConditionality())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONDITIONALITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequirement())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUIREMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DERIVED_FROM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getParent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PARENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSatisfiedBy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SATISFIED_BY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
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
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_KEY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LABEL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getConformance())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRConformanceExpectation::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_CONFORMANCE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONFORMANCE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getConditionality())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONALITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONALITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequirement())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIREMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIREMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DERIVED_FROM} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DERIVED_FROM_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getParent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PARENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PARENT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSatisfiedBy())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUrl::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SATISFIED_BY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SATISFIED_BY_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUrl::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_REFERENCE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            $out->{self::FIELD_SOURCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SOURCE}[] = $v;
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