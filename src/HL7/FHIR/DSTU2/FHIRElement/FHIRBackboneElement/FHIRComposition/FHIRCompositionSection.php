<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\DSTU2\FHIRCodePrimitive;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCode;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative;
use HL7\FHIR\DSTU2\FHIRElement\FHIRReference;
use HL7\FHIR\DSTU2\FHIRElement\FHIRString;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRStringPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * A set of healthcare-related information that is assembled together into a single
 * logical document that provides a single coherent statement of meaning,
 * establishes its own context and that has clinical attestation with regard to who
 * is making the statement. While a Composition defines the structure, it does not
 * actually contain the content: rather the full content of a document is contained
 * in a Bundle, of which the Composition is the first resource contained.
 *
 * Class FHIRCompositionSection
 * @package \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionSection extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION;

    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_CODE = 'code';
    const FIELD_TEXT = 'text';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_ORDERED_BY = 'orderedBy';
    const FIELD_ENTRY = 'entry';
    const FIELD_EMPTY_REASON = 'emptyReason';
    const FIELD_SECTION = 'section';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative
     */
    protected null|FHIRNarrative $text = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $mode = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $orderedBy = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $entry = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $emptyReason = null;
    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     *
     * A nested sub-section within this section.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[]
     */
    protected null|array $section = [];

    /**
     * Validation map for fields in type Composition.Section
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCompositionSection Constructor
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
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
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
                if ($value instanceof FHIRCode) {
                    $this->setMode($value);
                } else if (is_array($value)) {
                    $this->setMode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setMode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_ORDERED_BY])) {
            if ($data[self::FIELD_ORDERED_BY] instanceof FHIRCodeableConcept) {
                $this->setOrderedBy($data[self::FIELD_ORDERED_BY]);
            } else {
                $this->setOrderedBy(new FHIRCodeableConcept($data[self::FIELD_ORDERED_BY]));
            }
        }
        if (isset($data[self::FIELD_ENTRY])) {
            if (is_array($data[self::FIELD_ENTRY])) {
                foreach($data[self::FIELD_ENTRY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEntry($v);
                    } else {
                        $this->addEntry(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ENTRY] instanceof FHIRReference) {
                $this->addEntry($data[self::FIELD_ENTRY]);
            } else {
                $this->addEntry(new FHIRReference($data[self::FIELD_ENTRY]));
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
                    if ($v instanceof FHIRCompositionSection) {
                        $this->addSection($v);
                    } else {
                        $this->addSection(new FHIRCompositionSection($v));
                    }
                }
            } elseif ($data[self::FIELD_SECTION] instanceof FHIRCompositionSection) {
                $this->addSection($data[self::FIELD_SECTION]);
            } else {
                $this->addSection(new FHIRCompositionSection($data[self::FIELD_SECTION]));
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $title
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
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative
     */
    public function getText(): null|FHIRNarrative
    {
        return $this->text;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative $text
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getMode(): null|FHIRCode
    {
        return $this->mode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRCodePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $mode
     * @return static
     */
    public function setMode(null|string|FHIRCodePrimitive|FHIRCode $mode = null): self
    {
        if (null !== $mode && !($mode instanceof FHIRCode)) {
            $mode = new FHIRCode($mode);
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $orderedBy
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getEntry(): null|array
    {
        return $this->entry;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $entry
     * @return static
     */
    public function addEntry(null|FHIRReference $entry = null): self
    {
        if (null === $entry) {
            $entry = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->entry[] = $entry;
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
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRReference[] $entry
     * @return static
     */
    public function setEntry(array $entry = []): self
    {
        if ([] !== $this->entry) {
            $this->_trackValuesRemoved(count($this->entry));
            $this->entry = [];
        }
        if ([] === $entry) {
            return $this;
        }
        foreach($entry as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEntry($v);
            } else {
                $this->addEntry(new FHIRReference($v));
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $emptyReason
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
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     *
     * A nested sub-section within this section.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection(): null|array
    {
        return $this->section;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     *
     * A nested sub-section within this section.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $section
     * @return static
     */
    public function addSection(null|FHIRCompositionSection $section = null): self
    {
        if (null === $section) {
            $section = new FHIRCompositionSection();
        }
        $this->_trackValueAdded();
        $this->section[] = $section;
        return $this;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     *
     * A nested sub-section within this section.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[] $section
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
            if ($v instanceof FHIRCompositionSection) {
                $this->addSection($v);
            } else {
                $this->addSection(new FHIRCompositionSection($v));
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
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
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTRY, $i)] = $fieldErrs;
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_MODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_ORDERED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED_BY])) {
                        $errs[self::FIELD_ORDERED_BY] = [];
                    }
                    $errs[self::FIELD_ORDERED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY])) {
            $v = $this->getEntry();
            foreach($validationRules[self::FIELD_ENTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_ENTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY])) {
                        $errs[self::FIELD_ENTRY] = [];
                    }
                    $errs[self::FIELD_ENTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EMPTY_REASON])) {
            $v = $this->getEmptyReason();
            foreach($validationRules[self::FIELD_EMPTY_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_EMPTY_REASON, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION, self::FIELD_SECTION, $rule, $constraint, $v);
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
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
        } else if (!($type instanceof FHIRCompositionSection)) {
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
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_MODE === $n->nodeName) {
                $type->setMode(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_ORDERED_BY === $n->nodeName) {
                $type->setOrderedBy(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ENTRY === $n->nodeName) {
                $type->addEntry(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_EMPTY_REASON === $n->nodeName) {
                $type->setEmptyReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SECTION === $n->nodeName) {
                $type->addSection(FHIRCompositionSection::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_MODE);
        if (null !== $n) {
            $pt = $type->getMode();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMode($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CompositionSection'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getTitle())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
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
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENTRY);
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
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getText())) {
            $out->{self::FIELD_TEXT} = $v;
        }
        if (null !== ($v = $this->getMode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOrderedBy())) {
            $out->{self::FIELD_ORDERED_BY} = $v;
        }
        if ([] !== ($vs = $this->getEntry())) {
            $out->{self::FIELD_ENTRY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENTRY}[] = $v;
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