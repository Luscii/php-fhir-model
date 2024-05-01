<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRListMode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The EvidenceReport Resource is a specialized container for a collection of
 * resources and codeable concepts, adapted to support compositions of Evidence,
 * EvidenceVariable, and Citation resources and related concepts.
 *
 * Class FHIREvidenceReportSection
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport
 */
class FHIREvidenceReportSection extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION;

    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_FOCUS = 'focus';
    const FIELD_FOCUS_REFERENCE = 'focusReference';
    const FIELD_AUTHOR = 'author';
    const FIELD_TEXT = 'text';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_ORDERED_BY = 'orderedBy';
    const FIELD_ENTRY_CLASSIFIER = 'entryClassifier';
    const FIELD_ENTRY_REFERENCE = 'entryReference';
    const FIELD_ENTRY_QUANTITY = 'entryQuantity';
    const FIELD_EMPTY_REASON = 'emptyReason';
    const FIELD_SECTION = 'section';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This should
     * be consistent with the section title.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $focus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A definitional Resource identifying the kind of content contained within the
     * section. This should be consistent with the section title.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $focusReference = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $author = [];
    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is peferred to contain sufficient detail to
     * make it acceptable for a human to just read the narrative.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative
     */
    protected null|FHIRNarrative $text = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRListMode
     */
    protected null|FHIRListMode $mode = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $orderedBy = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies any type of classification of the evidence report.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $entryClassifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $entryReference = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity as content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    protected null|array $entryQuantity = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $emptyReason = null;
    /**
     * The EvidenceReport Resource is a specialized container for a collection of
     * resources and codeable concepts, adapted to support compositions of Evidence,
     * EvidenceVariable, and Citation resources and related concepts.
     *
     * A nested sub-section within this section.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection[]
     */
    protected null|array $section = [];

    /**
     * Validation map for fields in type EvidenceReport.Section
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIREvidenceReportSection Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_FOCUS])) {
            if ($data[self::FIELD_FOCUS] instanceof FHIRCodeableConcept) {
                $this->setFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->setFocus(new FHIRCodeableConcept($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_FOCUS_REFERENCE])) {
            if ($data[self::FIELD_FOCUS_REFERENCE] instanceof FHIRReference) {
                $this->setFocusReference($data[self::FIELD_FOCUS_REFERENCE]);
            } else {
                $this->setFocusReference(new FHIRReference($data[self::FIELD_FOCUS_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            if ($data[self::FIELD_TEXT] instanceof FHIRNarrative) {
                $this->setText($data[self::FIELD_TEXT]);
            } else {
                $this->setText(new FHIRNarrative($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
            $value = $data[self::FIELD_MODE] ?? null;
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])) ? $data[self::FIELD_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRListMode) {
                    $this->setMode($value);
                } else if (is_array($value)) {
                    $this->setMode(new FHIRListMode(array_merge($ext, $value)));
                } else {
                    $this->setMode(new FHIRListMode([FHIRListMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMode(new FHIRListMode($ext));
            }
        }
        if (isset($data[self::FIELD_ORDERED_BY])) {
            if ($data[self::FIELD_ORDERED_BY] instanceof FHIRCodeableConcept) {
                $this->setOrderedBy($data[self::FIELD_ORDERED_BY]);
            } else {
                $this->setOrderedBy(new FHIRCodeableConcept($data[self::FIELD_ORDERED_BY]));
            }
        }
        if (isset($data[self::FIELD_ENTRY_CLASSIFIER])) {
            if (is_array($data[self::FIELD_ENTRY_CLASSIFIER])) {
                foreach($data[self::FIELD_ENTRY_CLASSIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addEntryClassifier($v);
                    } else {
                        $this->addEntryClassifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ENTRY_CLASSIFIER] instanceof FHIRCodeableConcept) {
                $this->addEntryClassifier($data[self::FIELD_ENTRY_CLASSIFIER]);
            } else {
                $this->addEntryClassifier(new FHIRCodeableConcept($data[self::FIELD_ENTRY_CLASSIFIER]));
            }
        }
        if (isset($data[self::FIELD_ENTRY_REFERENCE])) {
            if (is_array($data[self::FIELD_ENTRY_REFERENCE])) {
                foreach($data[self::FIELD_ENTRY_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEntryReference($v);
                    } else {
                        $this->addEntryReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ENTRY_REFERENCE] instanceof FHIRReference) {
                $this->addEntryReference($data[self::FIELD_ENTRY_REFERENCE]);
            } else {
                $this->addEntryReference(new FHIRReference($data[self::FIELD_ENTRY_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ENTRY_QUANTITY])) {
            if (is_array($data[self::FIELD_ENTRY_QUANTITY])) {
                foreach($data[self::FIELD_ENTRY_QUANTITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuantity) {
                        $this->addEntryQuantity($v);
                    } else {
                        $this->addEntryQuantity(new FHIRQuantity($v));
                    }
                }
            } elseif ($data[self::FIELD_ENTRY_QUANTITY] instanceof FHIRQuantity) {
                $this->addEntryQuantity($data[self::FIELD_ENTRY_QUANTITY]);
            } else {
                $this->addEntryQuantity(new FHIRQuantity($data[self::FIELD_ENTRY_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_EMPTY_REASON])) {
            if ($data[self::FIELD_EMPTY_REASON] instanceof FHIRCodeableConcept) {
                $this->setEmptyReason($data[self::FIELD_EMPTY_REASON]);
            } else {
                $this->setEmptyReason(new FHIRCodeableConcept($data[self::FIELD_EMPTY_REASON]));
            }
        }
        if (isset($data[self::FIELD_SECTION])) {
            if (is_array($data[self::FIELD_SECTION])) {
                foreach($data[self::FIELD_SECTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREvidenceReportSection) {
                        $this->addSection($v);
                    } else {
                        $this->addSection(new FHIREvidenceReportSection($v));
                    }
                }
            } elseif ($data[self::FIELD_SECTION] instanceof FHIREvidenceReportSection) {
                $this->addSection($data[self::FIELD_SECTION]);
            } else {
                $this->addSection(new FHIREvidenceReportSection($data[self::FIELD_SECTION]));
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
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
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
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This should
     * be consistent with the section title.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFocus(): null|FHIRCodeableConcept
    {
        return $this->focus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This should
     * be consistent with the section title.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $focus
     * @return static
     */
    public function setFocus(null|FHIRCodeableConcept $focus = null): self
    {
        if (null === $focus) {
            $focus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->focus, $focus);
        $this->focus = $focus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A definitional Resource identifying the kind of content contained within the
     * section. This should be consistent with the section title.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getFocusReference(): null|FHIRReference
    {
        return $this->focusReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A definitional Resource identifying the kind of content contained within the
     * section. This should be consistent with the section title.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focusReference
     * @return static
     */
    public function setFocusReference(null|FHIRReference $focusReference = null): self
    {
        if (null === $focusReference) {
            $focusReference = new FHIRReference();
        }
        $this->_trackValueSet($this->focusReference, $focusReference);
        $this->focusReference = $focusReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAuthor(): null|array
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function addAuthor(null|FHIRReference $author = null): self
    {
        if (null === $author) {
            $author = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->author[] = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $author
     * @return static
     */
    public function setAuthor(array $author = []): self
    {
        if ([] !== $this->author) {
            $this->_trackValuesRemoved(count($this->author));
            $this->author = [];
        }
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is peferred to contain sufficient detail to
     * make it acceptable for a human to just read the narrative.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative
     */
    public function getText(): null|FHIRNarrative
    {
        return $this->text;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is peferred to contain sufficient detail to
     * make it acceptable for a human to just read the narrative.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @return static
     */
    public function setText(null|FHIRNarrative $text = null): self
    {
        if (null === $text) {
            $text = new FHIRNarrative();
        }
        $this->_trackValueSet($this->text, $text);
        $this->text = $text;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRListMode
     */
    public function getMode(): null|FHIRListMode
    {
        return $this->mode;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRListMode $mode
     * @return static
     */
    public function setMode(null|FHIRListMode $mode = null): self
    {
        if (null === $mode) {
            $mode = new FHIRListMode();
        }
        $this->_trackValueSet($this->mode, $mode);
        $this->mode = $mode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOrderedBy(): null|FHIRCodeableConcept
    {
        return $this->orderedBy;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $orderedBy
     * @return static
     */
    public function setOrderedBy(null|FHIRCodeableConcept $orderedBy = null): self
    {
        if (null === $orderedBy) {
            $orderedBy = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->orderedBy, $orderedBy);
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies any type of classification of the evidence report.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getEntryClassifier(): null|array
    {
        return $this->entryClassifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies any type of classification of the evidence report.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $entryClassifier
     * @return static
     */
    public function addEntryClassifier(null|FHIRCodeableConcept $entryClassifier = null): self
    {
        if (null === $entryClassifier) {
            $entryClassifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->entryClassifier[] = $entryClassifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies any type of classification of the evidence report.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $entryClassifier
     * @return static
     */
    public function setEntryClassifier(array $entryClassifier = []): self
    {
        if ([] !== $this->entryClassifier) {
            $this->_trackValuesRemoved(count($this->entryClassifier));
            $this->entryClassifier = [];
        }
        if ([] === $entryClassifier) {
            return $this;
        }
        foreach($entryClassifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addEntryClassifier($v);
            } else {
                $this->addEntryClassifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getEntryReference(): null|array
    {
        return $this->entryReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $entryReference
     * @return static
     */
    public function addEntryReference(null|FHIRReference $entryReference = null): self
    {
        if (null === $entryReference) {
            $entryReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->entryReference[] = $entryReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $entryReference
     * @return static
     */
    public function setEntryReference(array $entryReference = []): self
    {
        if ([] !== $this->entryReference) {
            $this->_trackValuesRemoved(count($this->entryReference));
            $this->entryReference = [];
        }
        if ([] === $entryReference) {
            return $this;
        }
        foreach($entryReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEntryReference($v);
            } else {
                $this->addEntryReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity as content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    public function getEntryQuantity(): null|array
    {
        return $this->entryQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity as content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $entryQuantity
     * @return static
     */
    public function addEntryQuantity(null|FHIRQuantity $entryQuantity = null): self
    {
        if (null === $entryQuantity) {
            $entryQuantity = new FHIRQuantity();
        }
        $this->_trackValueAdded();
        $this->entryQuantity[] = $entryQuantity;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantity as content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[] $entryQuantity
     * @return static
     */
    public function setEntryQuantity(array $entryQuantity = []): self
    {
        if ([] !== $this->entryQuantity) {
            $this->_trackValuesRemoved(count($this->entryQuantity));
            $this->entryQuantity = [];
        }
        if ([] === $entryQuantity) {
            return $this;
        }
        foreach($entryQuantity as $v) {
            if ($v instanceof FHIRQuantity) {
                $this->addEntryQuantity($v);
            } else {
                $this->addEntryQuantity(new FHIRQuantity($v));
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
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getEmptyReason(): null|FHIRCodeableConcept
    {
        return $this->emptyReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $emptyReason
     * @return static
     */
    public function setEmptyReason(null|FHIRCodeableConcept $emptyReason = null): self
    {
        if (null === $emptyReason) {
            $emptyReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->emptyReason, $emptyReason);
        $this->emptyReason = $emptyReason;
        return $this;
    }

    /**
     * The EvidenceReport Resource is a specialized container for a collection of
     * resources and codeable concepts, adapted to support compositions of Evidence,
     * EvidenceVariable, and Citation resources and related concepts.
     *
     * A nested sub-section within this section.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection[]
     */
    public function getSection(): null|array
    {
        return $this->section;
    }

    /**
     * The EvidenceReport Resource is a specialized container for a collection of
     * resources and codeable concepts, adapted to support compositions of Evidence,
     * EvidenceVariable, and Citation resources and related concepts.
     *
     * A nested sub-section within this section.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection $section
     * @return static
     */
    public function addSection(null|FHIREvidenceReportSection $section = null): self
    {
        if (null === $section) {
            $section = new FHIREvidenceReportSection();
        }
        $this->_trackValueAdded();
        $this->section[] = $section;
        return $this;
    }

    /**
     * The EvidenceReport Resource is a specialized container for a collection of
     * resources and codeable concepts, adapted to support compositions of Evidence,
     * EvidenceVariable, and Citation resources and related concepts.
     *
     * A nested sub-section within this section.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection[] $section
     * @return static
     */
    public function setSection(array $section = []): self
    {
        if ([] !== $this->section) {
            $this->_trackValuesRemoved(count($this->section));
            $this->section = [];
        }
        if ([] === $section) {
            return $this;
        }
        foreach($section as $v) {
            if ($v instanceof FHIREvidenceReportSection) {
                $this->addSection($v);
            } else {
                $this->addSection(new FHIREvidenceReportSection($v));
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
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocusReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCUS_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderedBy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDERED_BY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEntryClassifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTRY_CLASSIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEntryReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTRY_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEntryQuantity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTRY_QUANTITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEmptyReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EMPTY_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSection())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCUS])) {
            $v = $this->getFocus();
            foreach($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_FOCUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS])) {
                        $errs[self::FIELD_FOCUS] = [];
                    }
                    $errs[self::FIELD_FOCUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCUS_REFERENCE])) {
            $v = $this->getFocusReference();
            foreach($validationRules[self::FIELD_FOCUS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_FOCUS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS_REFERENCE])) {
                        $errs[self::FIELD_FOCUS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_FOCUS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERED_BY])) {
            $v = $this->getOrderedBy();
            foreach($validationRules[self::FIELD_ORDERED_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_ORDERED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED_BY])) {
                        $errs[self::FIELD_ORDERED_BY] = [];
                    }
                    $errs[self::FIELD_ORDERED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY_CLASSIFIER])) {
            $v = $this->getEntryClassifier();
            foreach($validationRules[self::FIELD_ENTRY_CLASSIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_ENTRY_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY_CLASSIFIER])) {
                        $errs[self::FIELD_ENTRY_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_ENTRY_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY_REFERENCE])) {
            $v = $this->getEntryReference();
            foreach($validationRules[self::FIELD_ENTRY_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_ENTRY_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY_REFERENCE])) {
                        $errs[self::FIELD_ENTRY_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ENTRY_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY_QUANTITY])) {
            $v = $this->getEntryQuantity();
            foreach($validationRules[self::FIELD_ENTRY_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_ENTRY_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY_QUANTITY])) {
                        $errs[self::FIELD_ENTRY_QUANTITY] = [];
                    }
                    $errs[self::FIELD_ENTRY_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EMPTY_REASON])) {
            $v = $this->getEmptyReason();
            foreach($validationRules[self::FIELD_EMPTY_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_EMPTY_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EMPTY_REASON])) {
                        $errs[self::FIELD_EMPTY_REASON] = [];
                    }
                    $errs[self::FIELD_EMPTY_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECTION])) {
            $v = $this->getSection();
            foreach($validationRules[self::FIELD_SECTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION, self::FIELD_SECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECTION])) {
                        $errs[self::FIELD_SECTION] = [];
                    }
                    $errs[self::FIELD_SECTION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection
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
        } else if (!($type instanceof FHIREvidenceReportSection)) {
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
            if (self::FIELD_TITLE === $n->nodeName) {
                $type->setTitle(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FOCUS === $n->nodeName) {
                $type->setFocus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FOCUS_REFERENCE === $n->nodeName) {
                $type->setFocusReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHOR === $n->nodeName) {
                $type->addAuthor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_MODE === $n->nodeName) {
                $type->setMode(FHIRListMode::xmlUnserialize($n));
            } elseif (self::FIELD_ORDERED_BY === $n->nodeName) {
                $type->setOrderedBy(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ENTRY_CLASSIFIER === $n->nodeName) {
                $type->addEntryClassifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ENTRY_REFERENCE === $n->nodeName) {
                $type->addEntryReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ENTRY_QUANTITY === $n->nodeName) {
                $type->addEntryQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_EMPTY_REASON === $n->nodeName) {
                $type->setEmptyReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SECTION === $n->nodeName) {
                $type->addSection(FHIREvidenceReportSection::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('EvidenceReportSection'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getTitle())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFocus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FOCUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFocusReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FOCUS_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getText())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrderedBy())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORDERED_BY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getEntryClassifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENTRY_CLASSIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getEntryReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENTRY_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getEntryQuantity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENTRY_QUANTITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getEmptyReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EMPTY_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSection())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SECTION);
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
        if (null !== ($v = $this->getFocus())) {
            $out->{self::FIELD_FOCUS} = $v;
        }
        if (null !== ($v = $this->getFocusReference())) {
            $out->{self::FIELD_FOCUS_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AUTHOR}[] = $v;
            }
        }
        if (null !== ($v = $this->getText())) {
            $out->{self::FIELD_TEXT} = $v;
        }
        if (null !== ($v = $this->getMode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRListMode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOrderedBy())) {
            $out->{self::FIELD_ORDERED_BY} = $v;
        }
        if ([] !== ($vs = $this->getEntryClassifier())) {
            $out->{self::FIELD_ENTRY_CLASSIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENTRY_CLASSIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEntryReference())) {
            $out->{self::FIELD_ENTRY_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENTRY_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEntryQuantity())) {
            $out->{self::FIELD_ENTRY_QUANTITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENTRY_QUANTITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getEmptyReason())) {
            $out->{self::FIELD_EMPTY_REASON} = $v;
        }
        if ([] !== ($vs = $this->getSection())) {
            $out->{self::FIELD_SECTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SECTION}[] = $v;
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