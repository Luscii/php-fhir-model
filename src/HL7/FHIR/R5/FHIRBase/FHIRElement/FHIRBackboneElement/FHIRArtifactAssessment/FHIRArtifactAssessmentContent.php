<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * This Resource provides one or more comments, classifiers or ratings about a
 * Resource and supports attribution and rights management metadata for the added
 * content.
 *
 * Class FHIRArtifactAssessmentContent
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment
 */
class FHIRArtifactAssessmentContent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT;

    const FIELD_INFORMATION_TYPE = 'informationType';
    const FIELD_INFORMATION_TYPE_EXT = '_informationType';
    const FIELD_SUMMARY = 'summary';
    const FIELD_SUMMARY_EXT = '_summary';
    const FIELD_TYPE = 'type';
    const FIELD_CLASSIFIER = 'classifier';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_AUTHOR = 'author';
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_FREE_TO_SHARE = 'freeToShare';
    const FIELD_FREE_TO_SHARE_EXT = '_freeToShare';
    const FIELD_COMPONENT = 'component';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of information this component of the content represents.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType
     */
    protected null|FHIRArtifactAssessmentInformationType $informationType = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A brief summary of the content of this component.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $summary = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what type of content this component represents.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Represents a rating, classifier, or assessment of the artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $classifier = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A quantitative rating of the artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what authored the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $author = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri[]
     */
    protected null|array $path = [];
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    protected null|array $relatedArtifact = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $freeToShare = null;
    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent[]
     */
    protected null|array $component = [];

    /**
     * Validation map for fields in type ArtifactAssessment.Content
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRArtifactAssessmentContent Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_INFORMATION_TYPE]) || isset($data[self::FIELD_INFORMATION_TYPE_EXT])) {
            $value = $data[self::FIELD_INFORMATION_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_INFORMATION_TYPE_EXT]) && is_array($data[self::FIELD_INFORMATION_TYPE_EXT])) ? $data[self::FIELD_INFORMATION_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRArtifactAssessmentInformationType) {
                    $this->setInformationType($value);
                } else if (is_array($value)) {
                    $this->setInformationType(new FHIRArtifactAssessmentInformationType(array_merge($ext, $value)));
                } else {
                    $this->setInformationType(new FHIRArtifactAssessmentInformationType([FHIRArtifactAssessmentInformationType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInformationType(new FHIRArtifactAssessmentInformationType($ext));
            }
        }
        if (isset($data[self::FIELD_SUMMARY]) || isset($data[self::FIELD_SUMMARY_EXT])) {
            $value = $data[self::FIELD_SUMMARY] ?? null;
            $ext = (isset($data[self::FIELD_SUMMARY_EXT]) && is_array($data[self::FIELD_SUMMARY_EXT])) ? $data[self::FIELD_SUMMARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setSummary($value);
                } else if (is_array($value)) {
                    $this->setSummary(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setSummary(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSummary(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
            $value = $data[self::FIELD_PATH] ?? null;
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) ? $data[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addPath($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addPath($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPath(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addPath(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPath(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addPath(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPath(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_RELATED_ARTIFACT])) {
            if (is_array($data[self::FIELD_RELATED_ARTIFACT])) {
                foreach($data[self::FIELD_RELATED_ARTIFACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addRelatedArtifact($v);
                    } else {
                        $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]));
            }
        }
        if (isset($data[self::FIELD_FREE_TO_SHARE]) || isset($data[self::FIELD_FREE_TO_SHARE_EXT])) {
            $value = $data[self::FIELD_FREE_TO_SHARE] ?? null;
            $ext = (isset($data[self::FIELD_FREE_TO_SHARE_EXT]) && is_array($data[self::FIELD_FREE_TO_SHARE_EXT])) ? $data[self::FIELD_FREE_TO_SHARE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFreeToShare($value);
                } else if (is_array($value)) {
                    $this->setFreeToShare(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFreeToShare(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFreeToShare(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_COMPONENT])) {
            if (is_array($data[self::FIELD_COMPONENT])) {
                foreach($data[self::FIELD_COMPONENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRArtifactAssessmentContent) {
                        $this->addComponent($v);
                    } else {
                        $this->addComponent(new FHIRArtifactAssessmentContent($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPONENT] instanceof FHIRArtifactAssessmentContent) {
                $this->addComponent($data[self::FIELD_COMPONENT]);
            } else {
                $this->addComponent(new FHIRArtifactAssessmentContent($data[self::FIELD_COMPONENT]));
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
     * The type of information this component of the content represents.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType
     */
    public function getInformationType(): null|FHIRArtifactAssessmentInformationType
    {
        return $this->informationType;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of information this component of the content represents.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType $informationType
     * @return static
     */
    public function setInformationType(null|FHIRArtifactAssessmentInformationType $informationType = null): self
    {
        if (null === $informationType) {
            $informationType = new FHIRArtifactAssessmentInformationType();
        }
        $this->_trackValueSet($this->informationType, $informationType);
        $this->informationType = $informationType;
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
     * A brief summary of the content of this component.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getSummary(): null|FHIRMarkdown
    {
        return $this->summary;
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
     * A brief summary of the content of this component.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $summary
     * @return static
     */
    public function setSummary(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $summary = null): self
    {
        if (null !== $summary && !($summary instanceof FHIRMarkdown)) {
            $summary = new FHIRMarkdown($summary);
        }
        $this->_trackValueSet($this->summary, $summary);
        $this->summary = $summary;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what type of content this component represents.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what type of content this component represents.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A quantitative rating of the artifact.
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
     * A quantitative rating of the artifact.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what authored the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAuthor(): null|FHIRReference
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what authored the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function setAuthor(null|FHIRReference $author = null): self
    {
        if (null === $author) {
            $author = new FHIRReference();
        }
        $this->_trackValueSet($this->author, $author);
        $this->author = $author;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri[]
     */
    public function getPath(): null|array
    {
        return $this->path;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $path
     * @return static
     */
    public function addPath(null|string|FHIRUriPrimitive|FHIRUri $path = null): self
    {
        if (null !== $path && !($path instanceof FHIRUri)) {
            $path = new FHIRUri($path);
        }
        $this->_trackValueAdded();
        $this->path[] = $path;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri[] $path
     * @return static
     */
    public function setPath(array $path = []): self
    {
        if ([] !== $this->path) {
            $this->_trackValuesRemoved(count($this->path));
            $this->path = [];
        }
        if ([] === $path) {
            return $this;
        }
        foreach($path as $v) {
            if ($v instanceof FHIRUri) {
                $this->addPath($v);
            } else {
                $this->addPath(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact(): null|array
    {
        return $this->relatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(null|FHIRRelatedArtifact $relatedArtifact = null): self
    {
        if (null === $relatedArtifact) {
            $relatedArtifact = new FHIRRelatedArtifact();
        }
        $this->_trackValueAdded();
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[] $relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(array $relatedArtifact = []): self
    {
        if ([] !== $this->relatedArtifact) {
            $this->_trackValuesRemoved(count($this->relatedArtifact));
            $this->relatedArtifact = [];
        }
        if ([] === $relatedArtifact) {
            return $this;
        }
        foreach($relatedArtifact as $v) {
            if ($v instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($v);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getFreeToShare(): null|FHIRBoolean
    {
        return $this->freeToShare;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $freeToShare
     * @return static
     */
    public function setFreeToShare(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $freeToShare = null): self
    {
        if (null !== $freeToShare && !($freeToShare instanceof FHIRBoolean)) {
            $freeToShare = new FHIRBoolean($freeToShare);
        }
        $this->_trackValueSet($this->freeToShare, $freeToShare);
        $this->freeToShare = $freeToShare;
        return $this;
    }

    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent[]
     */
    public function getComponent(): null|array
    {
        return $this->component;
    }

    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent $component
     * @return static
     */
    public function addComponent(null|FHIRArtifactAssessmentContent $component = null): self
    {
        if (null === $component) {
            $component = new FHIRArtifactAssessmentContent();
        }
        $this->_trackValueAdded();
        $this->component[] = $component;
        return $this;
    }

    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent[] $component
     * @return static
     */
    public function setComponent(array $component = []): self
    {
        if ([] !== $this->component) {
            $this->_trackValuesRemoved(count($this->component));
            $this->component = [];
        }
        if ([] === $component) {
            return $this;
        }
        foreach($component as $v) {
            if ($v instanceof FHIRArtifactAssessmentContent) {
                $this->addComponent($v);
            } else {
                $this->addComponent(new FHIRArtifactAssessmentContent($v));
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
        if (null !== ($v = $this->getInformationType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INFORMATION_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSummary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUMMARY] = $fieldErrs;
            }
        }
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
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPath())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PATH, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ARTIFACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREE_TO_SHARE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getComponent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPONENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION_TYPE])) {
            $v = $this->getInformationType();
            foreach($validationRules[self::FIELD_INFORMATION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_INFORMATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION_TYPE])) {
                        $errs[self::FIELD_INFORMATION_TYPE] = [];
                    }
                    $errs[self::FIELD_INFORMATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUMMARY])) {
            $v = $this->getSummary();
            foreach($validationRules[self::FIELD_SUMMARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUMMARY])) {
                        $errs[self::FIELD_SUMMARY] = [];
                    }
                    $errs[self::FIELD_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFIER])) {
                        $errs[self::FIELD_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ARTIFACT])) {
            $v = $this->getRelatedArtifact();
            foreach($validationRules[self::FIELD_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREE_TO_SHARE])) {
            $v = $this->getFreeToShare();
            foreach($validationRules[self::FIELD_FREE_TO_SHARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_FREE_TO_SHARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREE_TO_SHARE])) {
                        $errs[self::FIELD_FREE_TO_SHARE] = [];
                    }
                    $errs[self::FIELD_FREE_TO_SHARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPONENT])) {
            $v = $this->getComponent();
            foreach($validationRules[self::FIELD_COMPONENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT, self::FIELD_COMPONENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPONENT])) {
                        $errs[self::FIELD_COMPONENT] = [];
                    }
                    $errs[self::FIELD_COMPONENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent
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
        } else if (!($type instanceof FHIRArtifactAssessmentContent)) {
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
            if (self::FIELD_INFORMATION_TYPE === $n->nodeName) {
                $type->setInformationType(FHIRArtifactAssessmentInformationType::xmlUnserialize($n));
            } elseif (self::FIELD_SUMMARY === $n->nodeName) {
                $type->setSummary(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFIER === $n->nodeName) {
                $type->addClassifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHOR === $n->nodeName) {
                $type->setAuthor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PATH === $n->nodeName) {
                $type->addPath(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_RELATED_ARTIFACT === $n->nodeName) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n));
            } elseif (self::FIELD_FREE_TO_SHARE === $n->nodeName) {
                $type->setFreeToShare(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_COMPONENT === $n->nodeName) {
                $type->addComponent(FHIRArtifactAssessmentContent::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUMMARY);
        if (null !== $n) {
            $pt = $type->getSummary();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSummary($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PATH);
        if (null !== $n) {
            $type->addPath($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FREE_TO_SHARE);
        if (null !== $n) {
            $pt = $type->getFreeToShare();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFreeToShare($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ArtifactAssessmentContent'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getInformationType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INFORMATION_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSummary())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUMMARY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
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
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAuthor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPath())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PATH);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATED_ARTIFACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FREE_TO_SHARE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getComponent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMPONENT);
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
        if (null !== ($v = $this->getInformationType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INFORMATION_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRArtifactAssessmentInformationType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INFORMATION_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSummary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUMMARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUMMARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
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
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = $v;
        }
        if ([] !== ($vs = $this->getPath())) {
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
                $out->{self::FIELD_PATH} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATH_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $out->{self::FIELD_RELATED_ARTIFACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATED_ARTIFACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FREE_TO_SHARE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FREE_TO_SHARE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getComponent())) {
            $out->{self::FIELD_COMPONENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMPONENT}[] = $v;
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