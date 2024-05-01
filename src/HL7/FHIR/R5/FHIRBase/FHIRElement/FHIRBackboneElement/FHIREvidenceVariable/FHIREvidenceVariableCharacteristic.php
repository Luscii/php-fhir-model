<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is
 * about.
 *
 * Class FHIREvidenceVariableCharacteristic
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable
 */
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC;

    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_NOTE = 'note';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    const FIELD_DEFINITION_ID = 'definitionId';
    const FIELD_DEFINITION_ID_EXT = '_definitionId';
    const FIELD_DEFINITION_BY_TYPE_AND_VALUE = 'definitionByTypeAndValue';
    const FIELD_DEFINITION_BY_COMBINATION = 'definitionByCombination';
    const FIELD_INSTANCES_QUANTITY = 'instancesQuantity';
    const FIELD_INSTANCES_RANGE = 'instancesRange';
    const FIELD_DURATION_QUANTITY = 'durationQuantity';
    const FIELD_DURATION_RANGE = 'durationRange';
    const FIELD_TIME_FROM_EVENT = 'timeFromEvent';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $linkId = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $exclude = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $definitionReference = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $definitionCanonical = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $definitionCodeableConcept = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using Expression.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    protected null|FHIRExpression $definitionExpression = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $definitionId = null;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue
     */
    protected null|FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue = null;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination
     */
    protected null|FHIREvidenceVariableDefinitionByCombination $definitionByCombination = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $instancesQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $instancesRange = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $durationQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $durationRange = null;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[]
     */
    protected null|array $timeFromEvent = [];

    /**
     * Validation map for fields in type EvidenceVariable.Characteristic
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            $value = $data[self::FIELD_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) ? $data[self::FIELD_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setLinkId($value);
                } else if (is_array($value)) {
                    $this->setLinkId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setLinkId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLinkId(new FHIRId($ext));
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
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE]) || isset($data[self::FIELD_EXCLUDE_EXT])) {
            $value = $data[self::FIELD_EXCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT])) ? $data[self::FIELD_EXCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExclude($value);
                } else if (is_array($value)) {
                    $this->setExclude(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExclude(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExclude(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_REFERENCE])) {
            if ($data[self::FIELD_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setDefinitionReference($data[self::FIELD_DEFINITION_REFERENCE]);
            } else {
                $this->setDefinitionReference(new FHIRReference($data[self::FIELD_DEFINITION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_CANONICAL]) || isset($data[self::FIELD_DEFINITION_CANONICAL_EXT])) {
            $value = $data[self::FIELD_DEFINITION_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT])) ? $data[self::FIELD_DEFINITION_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setDefinitionCanonical($value);
                } else if (is_array($value)) {
                    $this->setDefinitionCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinitionCanonical(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefinitionCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]);
            } else {
                $this->setDefinitionCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_EXPRESSION])) {
            if ($data[self::FIELD_DEFINITION_EXPRESSION] instanceof FHIRExpression) {
                $this->setDefinitionExpression($data[self::FIELD_DEFINITION_EXPRESSION]);
            } else {
                $this->setDefinitionExpression(new FHIRExpression($data[self::FIELD_DEFINITION_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_ID]) || isset($data[self::FIELD_DEFINITION_ID_EXT])) {
            $value = $data[self::FIELD_DEFINITION_ID] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_ID_EXT]) && is_array($data[self::FIELD_DEFINITION_ID_EXT])) ? $data[self::FIELD_DEFINITION_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDefinitionId($value);
                } else if (is_array($value)) {
                    $this->setDefinitionId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinitionId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE])) {
            if ($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] instanceof FHIREvidenceVariableDefinitionByTypeAndValue) {
                $this->setDefinitionByTypeAndValue($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE]);
            } else {
                $this->setDefinitionByTypeAndValue(new FHIREvidenceVariableDefinitionByTypeAndValue($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_BY_COMBINATION])) {
            if ($data[self::FIELD_DEFINITION_BY_COMBINATION] instanceof FHIREvidenceVariableDefinitionByCombination) {
                $this->setDefinitionByCombination($data[self::FIELD_DEFINITION_BY_COMBINATION]);
            } else {
                $this->setDefinitionByCombination(new FHIREvidenceVariableDefinitionByCombination($data[self::FIELD_DEFINITION_BY_COMBINATION]));
            }
        }
        if (isset($data[self::FIELD_INSTANCES_QUANTITY])) {
            if ($data[self::FIELD_INSTANCES_QUANTITY] instanceof FHIRQuantity) {
                $this->setInstancesQuantity($data[self::FIELD_INSTANCES_QUANTITY]);
            } else {
                $this->setInstancesQuantity(new FHIRQuantity($data[self::FIELD_INSTANCES_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_INSTANCES_RANGE])) {
            if ($data[self::FIELD_INSTANCES_RANGE] instanceof FHIRRange) {
                $this->setInstancesRange($data[self::FIELD_INSTANCES_RANGE]);
            } else {
                $this->setInstancesRange(new FHIRRange($data[self::FIELD_INSTANCES_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DURATION_QUANTITY])) {
            if ($data[self::FIELD_DURATION_QUANTITY] instanceof FHIRQuantity) {
                $this->setDurationQuantity($data[self::FIELD_DURATION_QUANTITY]);
            } else {
                $this->setDurationQuantity(new FHIRQuantity($data[self::FIELD_DURATION_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DURATION_RANGE])) {
            if ($data[self::FIELD_DURATION_RANGE] instanceof FHIRRange) {
                $this->setDurationRange($data[self::FIELD_DURATION_RANGE]);
            } else {
                $this->setDurationRange(new FHIRRange($data[self::FIELD_DURATION_RANGE]));
            }
        }
        if (isset($data[self::FIELD_TIME_FROM_EVENT])) {
            if (is_array($data[self::FIELD_TIME_FROM_EVENT])) {
                foreach($data[self::FIELD_TIME_FROM_EVENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREvidenceVariableTimeFromEvent) {
                        $this->addTimeFromEvent($v);
                    } else {
                        $this->addTimeFromEvent(new FHIREvidenceVariableTimeFromEvent($v));
                    }
                }
            } elseif ($data[self::FIELD_TIME_FROM_EVENT] instanceof FHIREvidenceVariableTimeFromEvent) {
                $this->addTimeFromEvent($data[self::FIELD_TIME_FROM_EVENT]);
            } else {
                $this->addTimeFromEvent(new FHIREvidenceVariableTimeFromEvent($data[self::FIELD_TIME_FROM_EVENT]));
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
     * Label used for when a characteristic refers to another characteristic.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getLinkId(): null|FHIRId
    {
        return $this->linkId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRIdPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId $linkId
     * @return static
     */
    public function setLinkId(null|string|FHIRIdPrimitive|FHIRId $linkId = null): self
    {
        if (null !== $linkId && !($linkId instanceof FHIRId)) {
            $linkId = new FHIRId($linkId);
        }
        $this->_trackValueSet($this->linkId, $linkId);
        $this->linkId = $linkId;
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
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
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
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = []): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $exclude
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null): self
    {
        if (null !== $exclude && !($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean($exclude);
        }
        $this->_trackValueSet($this->exclude, $exclude);
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getDefinitionReference(): null|FHIRReference
    {
        return $this->definitionReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $definitionReference
     * @return static
     */
    public function setDefinitionReference(null|FHIRReference $definitionReference = null): self
    {
        if (null === $definitionReference) {
            $definitionReference = new FHIRReference();
        }
        $this->_trackValueSet($this->definitionReference, $definitionReference);
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $definitionCanonical
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null): self
    {
        if (null !== $definitionCanonical && !($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical($definitionCanonical);
        }
        $this->_trackValueSet($this->definitionCanonical, $definitionCanonical);
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $definitionCodeableConcept
     * @return static
     */
    public function setDefinitionCodeableConcept(null|FHIRCodeableConcept $definitionCodeableConcept = null): self
    {
        if (null === $definitionCodeableConcept) {
            $definitionCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->definitionCodeableConcept, $definitionCodeableConcept);
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using Expression.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getDefinitionExpression(): null|FHIRExpression
    {
        return $this->definitionExpression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using Expression.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $definitionExpression
     * @return static
     */
    public function setDefinitionExpression(null|FHIRExpression $definitionExpression = null): self
    {
        if (null === $definitionExpression) {
            $definitionExpression = new FHIRExpression();
        }
        $this->_trackValueSet($this->definitionExpression, $definitionExpression);
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getDefinitionId(): null|FHIRId
    {
        return $this->definitionId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRIdPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId $definitionId
     * @return static
     */
    public function setDefinitionId(null|string|FHIRIdPrimitive|FHIRId $definitionId = null): self
    {
        if (null !== $definitionId && !($definitionId instanceof FHIRId)) {
            $definitionId = new FHIRId($definitionId);
        }
        $this->_trackValueSet($this->definitionId, $definitionId);
        $this->definitionId = $definitionId;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue
     */
    public function getDefinitionByTypeAndValue(): null|FHIREvidenceVariableDefinitionByTypeAndValue
    {
        return $this->definitionByTypeAndValue;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue
     * @return static
     */
    public function setDefinitionByTypeAndValue(null|FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue = null): self
    {
        if (null === $definitionByTypeAndValue) {
            $definitionByTypeAndValue = new FHIREvidenceVariableDefinitionByTypeAndValue();
        }
        $this->_trackValueSet($this->definitionByTypeAndValue, $definitionByTypeAndValue);
        $this->definitionByTypeAndValue = $definitionByTypeAndValue;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination
     */
    public function getDefinitionByCombination(): null|FHIREvidenceVariableDefinitionByCombination
    {
        return $this->definitionByCombination;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination $definitionByCombination
     * @return static
     */
    public function setDefinitionByCombination(null|FHIREvidenceVariableDefinitionByCombination $definitionByCombination = null): self
    {
        if (null === $definitionByCombination) {
            $definitionByCombination = new FHIREvidenceVariableDefinitionByCombination();
        }
        $this->_trackValueSet($this->definitionByCombination, $definitionByCombination);
        $this->definitionByCombination = $definitionByCombination;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getInstancesQuantity(): null|FHIRQuantity
    {
        return $this->instancesQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $instancesQuantity
     * @return static
     */
    public function setInstancesQuantity(null|FHIRQuantity $instancesQuantity = null): self
    {
        if (null === $instancesQuantity) {
            $instancesQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->instancesQuantity, $instancesQuantity);
        $this->instancesQuantity = $instancesQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getInstancesRange(): null|FHIRRange
    {
        return $this->instancesRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $instancesRange
     * @return static
     */
    public function setInstancesRange(null|FHIRRange $instancesRange = null): self
    {
        if (null === $instancesRange) {
            $instancesRange = new FHIRRange();
        }
        $this->_trackValueSet($this->instancesRange, $instancesRange);
        $this->instancesRange = $instancesRange;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDurationQuantity(): null|FHIRQuantity
    {
        return $this->durationQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $durationQuantity
     * @return static
     */
    public function setDurationQuantity(null|FHIRQuantity $durationQuantity = null): self
    {
        if (null === $durationQuantity) {
            $durationQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->durationQuantity, $durationQuantity);
        $this->durationQuantity = $durationQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDurationRange(): null|FHIRRange
    {
        return $this->durationRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $durationRange
     * @return static
     */
    public function setDurationRange(null|FHIRRange $durationRange = null): self
    {
        if (null === $durationRange) {
            $durationRange = new FHIRRange();
        }
        $this->_trackValueSet($this->durationRange, $durationRange);
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[]
     */
    public function getTimeFromEvent(): null|array
    {
        return $this->timeFromEvent;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent $timeFromEvent
     * @return static
     */
    public function addTimeFromEvent(null|FHIREvidenceVariableTimeFromEvent $timeFromEvent = null): self
    {
        if (null === $timeFromEvent) {
            $timeFromEvent = new FHIREvidenceVariableTimeFromEvent();
        }
        $this->_trackValueAdded();
        $this->timeFromEvent[] = $timeFromEvent;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[] $timeFromEvent
     * @return static
     */
    public function setTimeFromEvent(array $timeFromEvent = []): self
    {
        if ([] !== $this->timeFromEvent) {
            $this->_trackValuesRemoved(count($this->timeFromEvent));
            $this->timeFromEvent = [];
        }
        if ([] === $timeFromEvent) {
            return $this;
        }
        foreach($timeFromEvent as $v) {
            if ($v instanceof FHIREvidenceVariableTimeFromEvent) {
                $this->addTimeFromEvent($v);
            } else {
                $this->addTimeFromEvent(new FHIREvidenceVariableTimeFromEvent($v));
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
        if (null !== ($v = $this->getLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINK_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXCLUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionByTypeAndValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionByCombination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_BY_COMBINATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInstancesQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCES_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInstancesRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCES_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_RANGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTimeFromEvent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TIME_FROM_EVENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_REFERENCE])) {
            $v = $this->getDefinitionReference();
            foreach($validationRules[self::FIELD_DEFINITION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_REFERENCE])) {
                        $errs[self::FIELD_DEFINITION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFINITION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CANONICAL])) {
            $v = $this->getDefinitionCanonical();
            foreach($validationRules[self::FIELD_DEFINITION_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CANONICAL])) {
                        $errs[self::FIELD_DEFINITION_CANONICAL] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
            $v = $this->getDefinitionCodeableConcept();
            foreach($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_EXPRESSION])) {
            $v = $this->getDefinitionExpression();
            foreach($validationRules[self::FIELD_DEFINITION_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_EXPRESSION])) {
                        $errs[self::FIELD_DEFINITION_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_DEFINITION_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_ID])) {
            $v = $this->getDefinitionId();
            foreach($validationRules[self::FIELD_DEFINITION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_ID])) {
                        $errs[self::FIELD_DEFINITION_ID] = [];
                    }
                    $errs[self::FIELD_DEFINITION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE])) {
            $v = $this->getDefinitionByTypeAndValue();
            foreach($validationRules[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_BY_TYPE_AND_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE])) {
                        $errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] = [];
                    }
                    $errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_BY_COMBINATION])) {
            $v = $this->getDefinitionByCombination();
            foreach($validationRules[self::FIELD_DEFINITION_BY_COMBINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_BY_COMBINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_BY_COMBINATION])) {
                        $errs[self::FIELD_DEFINITION_BY_COMBINATION] = [];
                    }
                    $errs[self::FIELD_DEFINITION_BY_COMBINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCES_QUANTITY])) {
            $v = $this->getInstancesQuantity();
            foreach($validationRules[self::FIELD_INSTANCES_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_INSTANCES_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCES_QUANTITY])) {
                        $errs[self::FIELD_INSTANCES_QUANTITY] = [];
                    }
                    $errs[self::FIELD_INSTANCES_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCES_RANGE])) {
            $v = $this->getInstancesRange();
            foreach($validationRules[self::FIELD_INSTANCES_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_INSTANCES_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCES_RANGE])) {
                        $errs[self::FIELD_INSTANCES_RANGE] = [];
                    }
                    $errs[self::FIELD_INSTANCES_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_QUANTITY])) {
            $v = $this->getDurationQuantity();
            foreach($validationRules[self::FIELD_DURATION_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DURATION_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_QUANTITY])) {
                        $errs[self::FIELD_DURATION_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DURATION_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_RANGE])) {
            $v = $this->getDurationRange();
            foreach($validationRules[self::FIELD_DURATION_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DURATION_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_RANGE])) {
                        $errs[self::FIELD_DURATION_RANGE] = [];
                    }
                    $errs[self::FIELD_DURATION_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME_FROM_EVENT])) {
            $v = $this->getTimeFromEvent();
            foreach($validationRules[self::FIELD_TIME_FROM_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_TIME_FROM_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME_FROM_EVENT])) {
                        $errs[self::FIELD_TIME_FROM_EVENT] = [];
                    }
                    $errs[self::FIELD_TIME_FROM_EVENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
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
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
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
            if (self::FIELD_LINK_ID === $n->nodeName) {
                $type->setLinkId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_EXCLUDE === $n->nodeName) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_REFERENCE === $n->nodeName) {
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_CANONICAL === $n->nodeName) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_EXPRESSION === $n->nodeName) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_ID === $n->nodeName) {
                $type->setDefinitionId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_BY_TYPE_AND_VALUE === $n->nodeName) {
                $type->setDefinitionByTypeAndValue(FHIREvidenceVariableDefinitionByTypeAndValue::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION_BY_COMBINATION === $n->nodeName) {
                $type->setDefinitionByCombination(FHIREvidenceVariableDefinitionByCombination::xmlUnserialize($n));
            } elseif (self::FIELD_INSTANCES_QUANTITY === $n->nodeName) {
                $type->setInstancesQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_INSTANCES_RANGE === $n->nodeName) {
                $type->setInstancesRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION_QUANTITY === $n->nodeName) {
                $type->setDurationQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION_RANGE === $n->nodeName) {
                $type->setDurationRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_TIME_FROM_EVENT === $n->nodeName) {
                $type->addTimeFromEvent(FHIREvidenceVariableTimeFromEvent::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LINK_ID);
        if (null !== $n) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLinkId($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_EXCLUDE);
        if (null !== $n) {
            $pt = $type->getExclude();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExclude($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DEFINITION_CANONICAL);
        if (null !== $n) {
            $pt = $type->getDefinitionCanonical();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDefinitionCanonical($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DEFINITION_ID);
        if (null !== $n) {
            $pt = $type->getDefinitionId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDefinitionId($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('EvidenceVariableCharacteristic'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getLinkId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LINK_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getExclude())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXCLUDE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_CANONICAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_EXPRESSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionByTypeAndValue())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_BY_TYPE_AND_VALUE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinitionByCombination())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION_BY_COMBINATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInstancesQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSTANCES_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInstancesRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSTANCES_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDurationQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDurationRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getTimeFromEvent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TIME_FROM_EVENT);
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
        if (null !== ($v = $this->getLinkId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LINK_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINK_ID_EXT} = $ext;
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
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXCLUDE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $out->{self::FIELD_DEFINITION_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $out->{self::FIELD_DEFINITION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $out->{self::FIELD_DEFINITION_EXPRESSION} = $v;
        }
        if (null !== ($v = $this->getDefinitionId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionByTypeAndValue())) {
            $out->{self::FIELD_DEFINITION_BY_TYPE_AND_VALUE} = $v;
        }
        if (null !== ($v = $this->getDefinitionByCombination())) {
            $out->{self::FIELD_DEFINITION_BY_COMBINATION} = $v;
        }
        if (null !== ($v = $this->getInstancesQuantity())) {
            $out->{self::FIELD_INSTANCES_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getInstancesRange())) {
            $out->{self::FIELD_INSTANCES_RANGE} = $v;
        }
        if (null !== ($v = $this->getDurationQuantity())) {
            $out->{self::FIELD_DURATION_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDurationRange())) {
            $out->{self::FIELD_DURATION_RANGE} = $v;
        }
        if ([] !== ($vs = $this->getTimeFromEvent())) {
            $out->{self::FIELD_TIME_FROM_EVENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TIME_FROM_EVENT}[] = $v;
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