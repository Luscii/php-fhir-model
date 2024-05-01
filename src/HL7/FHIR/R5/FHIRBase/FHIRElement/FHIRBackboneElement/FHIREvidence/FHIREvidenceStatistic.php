<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
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
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (e.g., population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 *
 * Class FHIREvidenceStatistic
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence
 */
class FHIREvidenceStatistic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_NOTE = 'note';
    const FIELD_STATISTIC_TYPE = 'statisticType';
    const FIELD_CATEGORY = 'category';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_NUMBER_OF_EVENTS = 'numberOfEvents';
    const FIELD_NUMBER_OF_EVENTS_EXT = '_numberOfEvents';
    const FIELD_NUMBER_AFFECTED = 'numberAffected';
    const FIELD_NUMBER_AFFECTED_EXT = '_numberAffected';
    const FIELD_SAMPLE_SIZE = 'sampleSize';
    const FIELD_ATTRIBUTE_ESTIMATE = 'attributeEstimate';
    const FIELD_MODEL_CHARACTERISTIC = 'modelCharacteristic';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A description of the content value of the statistic.
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
     * Footnotes and/or explanatory notes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, e.g., relative risk.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $statisticType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the measured variable is handled categorically, the category element is
     * used to define which category the statistic is reporting.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $category = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Statistic value.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of events associated with the statistic, where the unit of analysis
     * is different from numberAffected, sampleSize.knownDataCount and
     * sampleSize.numberOfParticipants.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $numberOfEvents = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $numberAffected = null;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize
     */
    protected null|FHIREvidenceSampleSize $sampleSize = null;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate[]
     */
    protected null|array $attributeEstimate = [];
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic[]
     */
    protected null|array $modelCharacteristic = [];

    /**
     * Validation map for fields in type Evidence.Statistic
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIREvidenceStatistic Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_STATISTIC_TYPE])) {
            if ($data[self::FIELD_STATISTIC_TYPE] instanceof FHIRCodeableConcept) {
                $this->setStatisticType($data[self::FIELD_STATISTIC_TYPE]);
            } else {
                $this->setStatisticType(new FHIRCodeableConcept($data[self::FIELD_STATISTIC_TYPE]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_EVENTS]) || isset($data[self::FIELD_NUMBER_OF_EVENTS_EXT])) {
            $value = $data[self::FIELD_NUMBER_OF_EVENTS] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_OF_EVENTS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_EVENTS_EXT])) ? $data[self::FIELD_NUMBER_OF_EVENTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setNumberOfEvents($value);
                } else if (is_array($value)) {
                    $this->setNumberOfEvents(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfEvents(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumberOfEvents(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_NUMBER_AFFECTED]) || isset($data[self::FIELD_NUMBER_AFFECTED_EXT])) {
            $value = $data[self::FIELD_NUMBER_AFFECTED] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_AFFECTED_EXT]) && is_array($data[self::FIELD_NUMBER_AFFECTED_EXT])) ? $data[self::FIELD_NUMBER_AFFECTED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setNumberAffected($value);
                } else if (is_array($value)) {
                    $this->setNumberAffected(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setNumberAffected(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumberAffected(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_SAMPLE_SIZE])) {
            if ($data[self::FIELD_SAMPLE_SIZE] instanceof FHIREvidenceSampleSize) {
                $this->setSampleSize($data[self::FIELD_SAMPLE_SIZE]);
            } else {
                $this->setSampleSize(new FHIREvidenceSampleSize($data[self::FIELD_SAMPLE_SIZE]));
            }
        }
        if (isset($data[self::FIELD_ATTRIBUTE_ESTIMATE])) {
            if (is_array($data[self::FIELD_ATTRIBUTE_ESTIMATE])) {
                foreach($data[self::FIELD_ATTRIBUTE_ESTIMATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREvidenceAttributeEstimate) {
                        $this->addAttributeEstimate($v);
                    } else {
                        $this->addAttributeEstimate(new FHIREvidenceAttributeEstimate($v));
                    }
                }
            } elseif ($data[self::FIELD_ATTRIBUTE_ESTIMATE] instanceof FHIREvidenceAttributeEstimate) {
                $this->addAttributeEstimate($data[self::FIELD_ATTRIBUTE_ESTIMATE]);
            } else {
                $this->addAttributeEstimate(new FHIREvidenceAttributeEstimate($data[self::FIELD_ATTRIBUTE_ESTIMATE]));
            }
        }
        if (isset($data[self::FIELD_MODEL_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_MODEL_CHARACTERISTIC])) {
                foreach($data[self::FIELD_MODEL_CHARACTERISTIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREvidenceModelCharacteristic) {
                        $this->addModelCharacteristic($v);
                    } else {
                        $this->addModelCharacteristic(new FHIREvidenceModelCharacteristic($v));
                    }
                }
            } elseif ($data[self::FIELD_MODEL_CHARACTERISTIC] instanceof FHIREvidenceModelCharacteristic) {
                $this->addModelCharacteristic($data[self::FIELD_MODEL_CHARACTERISTIC]);
            } else {
                $this->addModelCharacteristic(new FHIREvidenceModelCharacteristic($data[self::FIELD_MODEL_CHARACTERISTIC]));
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A description of the content value of the statistic.
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
     * A description of the content value of the statistic.
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
     * Footnotes and/or explanatory notes.
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
     * Footnotes and/or explanatory notes.
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
     * Footnotes and/or explanatory notes.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, e.g., relative risk.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatisticType(): null|FHIRCodeableConcept
    {
        return $this->statisticType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, e.g., relative risk.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statisticType
     * @return static
     */
    public function setStatisticType(null|FHIRCodeableConcept $statisticType = null): self
    {
        if (null === $statisticType) {
            $statisticType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->statisticType, $statisticType);
        $this->statisticType = $statisticType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the measured variable is handled categorically, the category element is
     * used to define which category the statistic is reporting.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the measured variable is handled categorically, the category element is
     * used to define which category the statistic is reporting.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->category, $category);
        $this->category = $category;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Statistic value.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Statistic value.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity = null): self
    {
        if (null === $quantity) {
            $quantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of events associated with the statistic, where the unit of analysis
     * is different from numberAffected, sampleSize.knownDataCount and
     * sampleSize.numberOfParticipants.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfEvents(): null|FHIRUnsignedInt
    {
        return $this->numberOfEvents;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of events associated with the statistic, where the unit of analysis
     * is different from numberAffected, sampleSize.knownDataCount and
     * sampleSize.numberOfParticipants.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfEvents
     * @return static
     */
    public function setNumberOfEvents(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfEvents = null): self
    {
        if (null !== $numberOfEvents && !($numberOfEvents instanceof FHIRUnsignedInt)) {
            $numberOfEvents = new FHIRUnsignedInt($numberOfEvents);
        }
        $this->_trackValueSet($this->numberOfEvents, $numberOfEvents);
        $this->numberOfEvents = $numberOfEvents;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberAffected(): null|FHIRUnsignedInt
    {
        return $this->numberAffected;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $numberAffected
     * @return static
     */
    public function setNumberAffected(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberAffected = null): self
    {
        if (null !== $numberAffected && !($numberAffected instanceof FHIRUnsignedInt)) {
            $numberAffected = new FHIRUnsignedInt($numberAffected);
        }
        $this->_trackValueSet($this->numberAffected, $numberAffected);
        $this->numberAffected = $numberAffected;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize
     */
    public function getSampleSize(): null|FHIREvidenceSampleSize
    {
        return $this->sampleSize;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $sampleSize
     * @return static
     */
    public function setSampleSize(null|FHIREvidenceSampleSize $sampleSize = null): self
    {
        if (null === $sampleSize) {
            $sampleSize = new FHIREvidenceSampleSize();
        }
        $this->_trackValueSet($this->sampleSize, $sampleSize);
        $this->sampleSize = $sampleSize;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate[]
     */
    public function getAttributeEstimate(): null|array
    {
        return $this->attributeEstimate;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate $attributeEstimate
     * @return static
     */
    public function addAttributeEstimate(null|FHIREvidenceAttributeEstimate $attributeEstimate = null): self
    {
        if (null === $attributeEstimate) {
            $attributeEstimate = new FHIREvidenceAttributeEstimate();
        }
        $this->_trackValueAdded();
        $this->attributeEstimate[] = $attributeEstimate;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate[] $attributeEstimate
     * @return static
     */
    public function setAttributeEstimate(array $attributeEstimate = []): self
    {
        if ([] !== $this->attributeEstimate) {
            $this->_trackValuesRemoved(count($this->attributeEstimate));
            $this->attributeEstimate = [];
        }
        if ([] === $attributeEstimate) {
            return $this;
        }
        foreach($attributeEstimate as $v) {
            if ($v instanceof FHIREvidenceAttributeEstimate) {
                $this->addAttributeEstimate($v);
            } else {
                $this->addAttributeEstimate(new FHIREvidenceAttributeEstimate($v));
            }
        }
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic[]
     */
    public function getModelCharacteristic(): null|array
    {
        return $this->modelCharacteristic;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic $modelCharacteristic
     * @return static
     */
    public function addModelCharacteristic(null|FHIREvidenceModelCharacteristic $modelCharacteristic = null): self
    {
        if (null === $modelCharacteristic) {
            $modelCharacteristic = new FHIREvidenceModelCharacteristic();
        }
        $this->_trackValueAdded();
        $this->modelCharacteristic[] = $modelCharacteristic;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic[] $modelCharacteristic
     * @return static
     */
    public function setModelCharacteristic(array $modelCharacteristic = []): self
    {
        if ([] !== $this->modelCharacteristic) {
            $this->_trackValuesRemoved(count($this->modelCharacteristic));
            $this->modelCharacteristic = [];
        }
        if ([] === $modelCharacteristic) {
            return $this;
        }
        foreach($modelCharacteristic as $v) {
            if ($v instanceof FHIREvidenceModelCharacteristic) {
                $this->addModelCharacteristic($v);
            } else {
                $this->addModelCharacteristic(new FHIREvidenceModelCharacteristic($v));
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
        if (null !== ($v = $this->getStatisticType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATISTIC_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfEvents())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_EVENTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberAffected())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_AFFECTED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSampleSize())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SAMPLE_SIZE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAttributeEstimate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ATTRIBUTE_ESTIMATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getModelCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODEL_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATISTIC_TYPE])) {
            $v = $this->getStatisticType();
            foreach($validationRules[self::FIELD_STATISTIC_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_STATISTIC_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATISTIC_TYPE])) {
                        $errs[self::FIELD_STATISTIC_TYPE] = [];
                    }
                    $errs[self::FIELD_STATISTIC_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_EVENTS])) {
            $v = $this->getNumberOfEvents();
            foreach($validationRules[self::FIELD_NUMBER_OF_EVENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_NUMBER_OF_EVENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_EVENTS])) {
                        $errs[self::FIELD_NUMBER_OF_EVENTS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_EVENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_AFFECTED])) {
            $v = $this->getNumberAffected();
            foreach($validationRules[self::FIELD_NUMBER_AFFECTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_NUMBER_AFFECTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_AFFECTED])) {
                        $errs[self::FIELD_NUMBER_AFFECTED] = [];
                    }
                    $errs[self::FIELD_NUMBER_AFFECTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SAMPLE_SIZE])) {
            $v = $this->getSampleSize();
            foreach($validationRules[self::FIELD_SAMPLE_SIZE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_SAMPLE_SIZE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SAMPLE_SIZE])) {
                        $errs[self::FIELD_SAMPLE_SIZE] = [];
                    }
                    $errs[self::FIELD_SAMPLE_SIZE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTRIBUTE_ESTIMATE])) {
            $v = $this->getAttributeEstimate();
            foreach($validationRules[self::FIELD_ATTRIBUTE_ESTIMATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_ATTRIBUTE_ESTIMATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTRIBUTE_ESTIMATE])) {
                        $errs[self::FIELD_ATTRIBUTE_ESTIMATE] = [];
                    }
                    $errs[self::FIELD_ATTRIBUTE_ESTIMATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODEL_CHARACTERISTIC])) {
            $v = $this->getModelCharacteristic();
            foreach($validationRules[self::FIELD_MODEL_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC, self::FIELD_MODEL_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODEL_CHARACTERISTIC])) {
                        $errs[self::FIELD_MODEL_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_MODEL_CHARACTERISTIC][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic
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
        } else if (!($type instanceof FHIREvidenceStatistic)) {
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
            if (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_STATISTIC_TYPE === $n->nodeName) {
                $type->setStatisticType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_NUMBER_OF_EVENTS === $n->nodeName) {
                $type->setNumberOfEvents(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_NUMBER_AFFECTED === $n->nodeName) {
                $type->setNumberAffected(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_SAMPLE_SIZE === $n->nodeName) {
                $type->setSampleSize(FHIREvidenceSampleSize::xmlUnserialize($n));
            } elseif (self::FIELD_ATTRIBUTE_ESTIMATE === $n->nodeName) {
                $type->addAttributeEstimate(FHIREvidenceAttributeEstimate::xmlUnserialize($n));
            } elseif (self::FIELD_MODEL_CHARACTERISTIC === $n->nodeName) {
                $type->addModelCharacteristic(FHIREvidenceModelCharacteristic::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_EVENTS);
        if (null !== $n) {
            $pt = $type->getNumberOfEvents();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNumberOfEvents($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NUMBER_AFFECTED);
        if (null !== $n) {
            $pt = $type->getNumberAffected();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNumberAffected($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('EvidenceStatistic'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
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
        if (null !== ($v = $this->getStatisticType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATISTIC_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNumberOfEvents())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_OF_EVENTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNumberAffected())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_AFFECTED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSampleSize())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SAMPLE_SIZE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAttributeEstimate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ATTRIBUTE_ESTIMATE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getModelCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MODEL_CHARACTERISTIC);
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
        if (null !== ($v = $this->getStatisticType())) {
            $out->{self::FIELD_STATISTIC_TYPE} = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getNumberOfEvents())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER_OF_EVENTS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_OF_EVENTS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNumberAffected())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER_AFFECTED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_AFFECTED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSampleSize())) {
            $out->{self::FIELD_SAMPLE_SIZE} = $v;
        }
        if ([] !== ($vs = $this->getAttributeEstimate())) {
            $out->{self::FIELD_ATTRIBUTE_ESTIMATE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ATTRIBUTE_ESTIMATE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getModelCharacteristic())) {
            $out->{self::FIELD_MODEL_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MODEL_CHARACTERISTIC}[] = $v;
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