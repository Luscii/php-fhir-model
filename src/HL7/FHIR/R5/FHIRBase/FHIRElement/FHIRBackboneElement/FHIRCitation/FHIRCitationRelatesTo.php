<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactTypeExpanded;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationRelatesTo
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationRelatesTo extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_CLASSIFIER = 'classifier';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';
    const FIELD_CITATION = 'citation';
    const FIELD_CITATION_EXT = '_citation';
    const FIELD_DOCUMENT = 'document';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESOURCE_REFERENCE = 'resourceReference';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactTypeExpanded
     */
    protected null|FHIRRelatedArtifactTypeExpanded $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $classifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label that can be used to reference the related artifact from elsewhere
     * in the containing artifact, such as a footnote index.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $display = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $citation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. Do not use this
     * element if using the resource element to provide the canonical to the related
     * artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    protected null|FHIRAttachment $document = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The related artifact, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $resource = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource
     * reference to a canonical resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $resourceReference = null;

    /**
     * Validation map for fields in type Citation.RelatesTo
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCitationRelatesTo Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRelatedArtifactTypeExpanded) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRRelatedArtifactTypeExpanded(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRRelatedArtifactTypeExpanded([FHIRRelatedArtifactTypeExpanded::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRRelatedArtifactTypeExpanded($ext));
            }
        }
        if (isset($data[self::FIELD_CLASSIFIER])) {
            if (is_array($data[self::FIELD_CLASSIFIER])) {
                foreach($data[self::FIELD_CLASSIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassifier($v);
                    } else {
                        $this->addClassifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFIER] instanceof FHIRCodeableConcept) {
                $this->addClassifier($data[self::FIELD_CLASSIFIER]);
            } else {
                $this->addClassifier(new FHIRCodeableConcept($data[self::FIELD_CLASSIFIER]));
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
        if (isset($data[self::FIELD_DISPLAY]) || isset($data[self::FIELD_DISPLAY_EXT])) {
            $value = $data[self::FIELD_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT])) ? $data[self::FIELD_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDisplay($value);
                } else if (is_array($value)) {
                    $this->setDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CITATION]) || isset($data[self::FIELD_CITATION_EXT])) {
            $value = $data[self::FIELD_CITATION] ?? null;
            $ext = (isset($data[self::FIELD_CITATION_EXT]) && is_array($data[self::FIELD_CITATION_EXT])) ? $data[self::FIELD_CITATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCitation($value);
                } else if (is_array($value)) {
                    $this->setCitation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCitation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCitation(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT])) {
            if ($data[self::FIELD_DOCUMENT] instanceof FHIRAttachment) {
                $this->setDocument($data[self::FIELD_DOCUMENT]);
            } else {
                $this->setDocument(new FHIRAttachment($data[self::FIELD_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE]) || isset($data[self::FIELD_RESOURCE_EXT])) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE_REFERENCE])) {
            if ($data[self::FIELD_RESOURCE_REFERENCE] instanceof FHIRReference) {
                $this->setResourceReference($data[self::FIELD_RESOURCE_REFERENCE]);
            } else {
                $this->setResourceReference(new FHIRReference($data[self::FIELD_RESOURCE_REFERENCE]));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactTypeExpanded
     */
    public function getType(): null|FHIRRelatedArtifactTypeExpanded
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactTypeExpanded $type
     * @return static
     */
    public function setType(null|FHIRRelatedArtifactTypeExpanded $type = null): self
    {
        if (null === $type) {
            $type = new FHIRRelatedArtifactTypeExpanded();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassifier(): null|array
    {
        return $this->classifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classifier
     * @return static
     */
    public function addClassifier(null|FHIRCodeableConcept $classifier = null): self
    {
        if (null === $classifier) {
            $classifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classifier
     * @return static
     */
    public function setClassifier(array $classifier = []): self
    {
        if ([] !== $this->classifier) {
            $this->_trackValuesRemoved(count($this->classifier));
            $this->classifier = [];
        }
        if ([] === $classifier) {
            return $this;
        }
        foreach($classifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClassifier($v);
            } else {
                $this->addClassifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label that can be used to reference the related artifact from elsewhere
     * in the containing artifact, such as a footnote index.
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
     * A short label that can be used to reference the related artifact from elsewhere
     * in the containing artifact, such as a footnote index.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDisplay(): null|FHIRString
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $display
     * @return static
     */
    public function setDisplay(null|string|FHIRStringPrimitive|FHIRString $display = null): self
    {
        if (null !== $display && !($display instanceof FHIRString)) {
            $display = new FHIRString($display);
        }
        $this->_trackValueSet($this->display, $display);
        $this->display = $display;
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
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getCitation(): null|FHIRMarkdown
    {
        return $this->citation;
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
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $citation
     * @return static
     */
    public function setCitation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $citation = null): self
    {
        if (null !== $citation && !($citation instanceof FHIRMarkdown)) {
            $citation = new FHIRMarkdown($citation);
        }
        $this->_trackValueSet($this->citation, $citation);
        $this->citation = $citation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. Do not use this
     * element if using the resource element to provide the canonical to the related
     * artifact.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    public function getDocument(): null|FHIRAttachment
    {
        return $this->document;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. Do not use this
     * element if using the resource element to provide the canonical to the related
     * artifact.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $document
     * @return static
     */
    public function setDocument(null|FHIRAttachment $document = null): self
    {
        if (null === $document) {
            $document = new FHIRAttachment();
        }
        $this->_trackValueSet($this->document, $document);
        $this->document = $document;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The related artifact, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getResource(): null|FHIRCanonical
    {
        return $this->resource;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The related artifact, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $resource
     * @return static
     */
    public function setResource(null|string|FHIRCanonicalPrimitive|FHIRCanonical $resource = null): self
    {
        if (null !== $resource && !($resource instanceof FHIRCanonical)) {
            $resource = new FHIRCanonical($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        $this->resource = $resource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource
     * reference to a canonical resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getResourceReference(): null|FHIRReference
    {
        return $this->resourceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource
     * reference to a canonical resource.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $resourceReference
     * @return static
     */
    public function setResourceReference(null|FHIRReference $resourceReference = null): self
    {
        if (null === $resourceReference) {
            $resourceReference = new FHIRReference();
        }
        $this->_trackValueSet($this->resourceReference, $resourceReference);
        $this->resourceReference = $resourceReference;
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
        if ([] !== ($vs = $this->getClassifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCitation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocument())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResourceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFIER])) {
            $v = $this->getClassifier();
            foreach($validationRules[self::FIELD_CLASSIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFIER])) {
                        $errs[self::FIELD_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPLAY])) {
            $v = $this->getDisplay();
            foreach($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPLAY])) {
                        $errs[self::FIELD_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITATION])) {
            $v = $this->getCitation();
            foreach($validationRules[self::FIELD_CITATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_CITATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITATION])) {
                        $errs[self::FIELD_CITATION] = [];
                    }
                    $errs[self::FIELD_CITATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT])) {
            $v = $this->getDocument();
            foreach($validationRules[self::FIELD_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT])) {
                        $errs[self::FIELD_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE_REFERENCE])) {
            $v = $this->getResourceReference();
            foreach($validationRules[self::FIELD_RESOURCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_RESOURCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE_REFERENCE])) {
                        $errs[self::FIELD_RESOURCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE_REFERENCE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo
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
        } else if (!($type instanceof FHIRCitationRelatesTo)) {
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
                $type->setType(FHIRRelatedArtifactTypeExpanded::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFIER === $n->nodeName) {
                $type->addClassifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_LABEL === $n->nodeName) {
                $type->setLabel(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DISPLAY === $n->nodeName) {
                $type->setDisplay(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CITATION === $n->nodeName) {
                $type->setCitation(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENT === $n->nodeName) {
                $type->setDocument(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE === $n->nodeName) {
                $type->setResource(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE_REFERENCE === $n->nodeName) {
                $type->setResourceReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DISPLAY);
        if (null !== $n) {
            $pt = $type->getDisplay();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDisplay($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CITATION);
        if (null !== $n) {
            $pt = $type->getCitation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCitation($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE);
        if (null !== $n) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResource($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CitationRelatesTo'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getClassifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLASSIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getLabel())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LABEL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDisplay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISPLAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCitation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CITATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDocument())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResourceReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
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
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRelatedArtifactTypeExpanded::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getClassifier())) {
            $out->{self::FIELD_CLASSIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLASSIFIER}[] = $v;
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
        if (null !== ($v = $this->getDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCitation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CITATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CITATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocument())) {
            $out->{self::FIELD_DOCUMENT} = $v;
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResourceReference())) {
            $out->{self::FIELD_RESOURCE_REFERENCE} = $v;
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