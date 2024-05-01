<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionContainer
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionContainer extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER;

    const FIELD_MATERIAL = 'material';
    const FIELD_TYPE = 'type';
    const FIELD_CAP = 'cap';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_CAPACITY = 'capacity';
    const FIELD_MINIMUM_VOLUME_QUANTITY = 'minimumVolumeQuantity';
    const FIELD_MINIMUM_VOLUME_STRING = 'minimumVolumeString';
    const FIELD_MINIMUM_VOLUME_STRING_EXT = '_minimumVolumeString';
    const FIELD_ADDITIVE = 'additive';
    const FIELD_PREPARATION = 'preparation';
    const FIELD_PREPARATION_EXT = '_preparation';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of material of the container.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $material = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of container used to contain this kind of specimen.
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
     * Color of container cap.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $cap = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The textual description of the kind of container.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $capacity = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum volume to be conditioned in the container.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $minimumVolumeQuantity = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum volume to be conditioned in the container.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $minimumVolumeString = null;
    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[]
     */
    protected null|array $additive = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Special processing that should be applied to the container for this kind of
     * specimen.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $preparation = null;

    /**
     * Validation map for fields in type SpecimenDefinition.Container
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSpecimenDefinitionContainer Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MATERIAL])) {
            if ($data[self::FIELD_MATERIAL] instanceof FHIRCodeableConcept) {
                $this->setMaterial($data[self::FIELD_MATERIAL]);
            } else {
                $this->setMaterial(new FHIRCodeableConcept($data[self::FIELD_MATERIAL]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_CAP])) {
            if ($data[self::FIELD_CAP] instanceof FHIRCodeableConcept) {
                $this->setCap($data[self::FIELD_CAP]);
            } else {
                $this->setCap(new FHIRCodeableConcept($data[self::FIELD_CAP]));
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
        if (isset($data[self::FIELD_CAPACITY])) {
            if ($data[self::FIELD_CAPACITY] instanceof FHIRQuantity) {
                $this->setCapacity($data[self::FIELD_CAPACITY]);
            } else {
                $this->setCapacity(new FHIRQuantity($data[self::FIELD_CAPACITY]));
            }
        }
        if (isset($data[self::FIELD_MINIMUM_VOLUME_QUANTITY])) {
            if ($data[self::FIELD_MINIMUM_VOLUME_QUANTITY] instanceof FHIRQuantity) {
                $this->setMinimumVolumeQuantity($data[self::FIELD_MINIMUM_VOLUME_QUANTITY]);
            } else {
                $this->setMinimumVolumeQuantity(new FHIRQuantity($data[self::FIELD_MINIMUM_VOLUME_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_MINIMUM_VOLUME_STRING]) || isset($data[self::FIELD_MINIMUM_VOLUME_STRING_EXT])) {
            $value = $data[self::FIELD_MINIMUM_VOLUME_STRING] ?? null;
            $ext = (isset($data[self::FIELD_MINIMUM_VOLUME_STRING_EXT]) && is_array($data[self::FIELD_MINIMUM_VOLUME_STRING_EXT])) ? $data[self::FIELD_MINIMUM_VOLUME_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMinimumVolumeString($value);
                } else if (is_array($value)) {
                    $this->setMinimumVolumeString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMinimumVolumeString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinimumVolumeString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ADDITIVE])) {
            if (is_array($data[self::FIELD_ADDITIVE])) {
                foreach($data[self::FIELD_ADDITIVE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSpecimenDefinitionAdditive) {
                        $this->addAdditive($v);
                    } else {
                        $this->addAdditive(new FHIRSpecimenDefinitionAdditive($v));
                    }
                }
            } elseif ($data[self::FIELD_ADDITIVE] instanceof FHIRSpecimenDefinitionAdditive) {
                $this->addAdditive($data[self::FIELD_ADDITIVE]);
            } else {
                $this->addAdditive(new FHIRSpecimenDefinitionAdditive($data[self::FIELD_ADDITIVE]));
            }
        }
        if (isset($data[self::FIELD_PREPARATION]) || isset($data[self::FIELD_PREPARATION_EXT])) {
            $value = $data[self::FIELD_PREPARATION] ?? null;
            $ext = (isset($data[self::FIELD_PREPARATION_EXT]) && is_array($data[self::FIELD_PREPARATION_EXT])) ? $data[self::FIELD_PREPARATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPreparation($value);
                } else if (is_array($value)) {
                    $this->setPreparation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPreparation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPreparation(new FHIRMarkdown($ext));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of material of the container.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMaterial(): null|FHIRCodeableConcept
    {
        return $this->material;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of material of the container.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $material
     * @return static
     */
    public function setMaterial(null|FHIRCodeableConcept $material = null): self
    {
        if (null === $material) {
            $material = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->material, $material);
        $this->material = $material;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of container used to contain this kind of specimen.
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
     * The type of container used to contain this kind of specimen.
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
     * Color of container cap.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCap(): null|FHIRCodeableConcept
    {
        return $this->cap;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Color of container cap.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $cap
     * @return static
     */
    public function setCap(null|FHIRCodeableConcept $cap = null): self
    {
        if (null === $cap) {
            $cap = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->cap, $cap);
        $this->cap = $cap;
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
     * The textual description of the kind of container.
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
     * The textual description of the kind of container.
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getCapacity(): null|FHIRQuantity
    {
        return $this->capacity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $capacity
     * @return static
     */
    public function setCapacity(null|FHIRQuantity $capacity = null): self
    {
        if (null === $capacity) {
            $capacity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->capacity, $capacity);
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum volume to be conditioned in the container.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMinimumVolumeQuantity(): null|FHIRQuantity
    {
        return $this->minimumVolumeQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum volume to be conditioned in the container.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $minimumVolumeQuantity
     * @return static
     */
    public function setMinimumVolumeQuantity(null|FHIRQuantity $minimumVolumeQuantity = null): self
    {
        if (null === $minimumVolumeQuantity) {
            $minimumVolumeQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->minimumVolumeQuantity, $minimumVolumeQuantity);
        $this->minimumVolumeQuantity = $minimumVolumeQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum volume to be conditioned in the container.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getMinimumVolumeString(): null|FHIRString
    {
        return $this->minimumVolumeString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum volume to be conditioned in the container.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $minimumVolumeString
     * @return static
     */
    public function setMinimumVolumeString(null|string|FHIRStringPrimitive|FHIRString $minimumVolumeString = null): self
    {
        if (null !== $minimumVolumeString && !($minimumVolumeString instanceof FHIRString)) {
            $minimumVolumeString = new FHIRString($minimumVolumeString);
        }
        $this->_trackValueSet($this->minimumVolumeString, $minimumVolumeString);
        $this->minimumVolumeString = $minimumVolumeString;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[]
     */
    public function getAdditive(): null|array
    {
        return $this->additive;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive $additive
     * @return static
     */
    public function addAdditive(null|FHIRSpecimenDefinitionAdditive $additive = null): self
    {
        if (null === $additive) {
            $additive = new FHIRSpecimenDefinitionAdditive();
        }
        $this->_trackValueAdded();
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[] $additive
     * @return static
     */
    public function setAdditive(array $additive = []): self
    {
        if ([] !== $this->additive) {
            $this->_trackValuesRemoved(count($this->additive));
            $this->additive = [];
        }
        if ([] === $additive) {
            return $this;
        }
        foreach($additive as $v) {
            if ($v instanceof FHIRSpecimenDefinitionAdditive) {
                $this->addAdditive($v);
            } else {
                $this->addAdditive(new FHIRSpecimenDefinitionAdditive($v));
            }
        }
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
     * Special processing that should be applied to the container for this kind of
     * specimen.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getPreparation(): null|FHIRMarkdown
    {
        return $this->preparation;
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
     * Special processing that should be applied to the container for this kind of
     * specimen.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $preparation
     * @return static
     */
    public function setPreparation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $preparation = null): self
    {
        if (null !== $preparation && !($preparation instanceof FHIRMarkdown)) {
            $preparation = new FHIRMarkdown($preparation);
        }
        $this->_trackValueSet($this->preparation, $preparation);
        $this->preparation = $preparation;
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
        if (null !== ($v = $this->getMaterial())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MATERIAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCapacity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAPACITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinimumVolumeQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MINIMUM_VOLUME_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinimumVolumeString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MINIMUM_VOLUME_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdditive())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIVE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPreparation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREPARATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MATERIAL])) {
            $v = $this->getMaterial();
            foreach($validationRules[self::FIELD_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERIAL])) {
                        $errs[self::FIELD_MATERIAL] = [];
                    }
                    $errs[self::FIELD_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAP])) {
            $v = $this->getCap();
            foreach($validationRules[self::FIELD_CAP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_CAP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAP])) {
                        $errs[self::FIELD_CAP] = [];
                    }
                    $errs[self::FIELD_CAP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAPACITY])) {
            $v = $this->getCapacity();
            foreach($validationRules[self::FIELD_CAPACITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_CAPACITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAPACITY])) {
                        $errs[self::FIELD_CAPACITY] = [];
                    }
                    $errs[self::FIELD_CAPACITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MINIMUM_VOLUME_QUANTITY])) {
            $v = $this->getMinimumVolumeQuantity();
            foreach($validationRules[self::FIELD_MINIMUM_VOLUME_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_MINIMUM_VOLUME_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MINIMUM_VOLUME_QUANTITY])) {
                        $errs[self::FIELD_MINIMUM_VOLUME_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MINIMUM_VOLUME_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MINIMUM_VOLUME_STRING])) {
            $v = $this->getMinimumVolumeString();
            foreach($validationRules[self::FIELD_MINIMUM_VOLUME_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_MINIMUM_VOLUME_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MINIMUM_VOLUME_STRING])) {
                        $errs[self::FIELD_MINIMUM_VOLUME_STRING] = [];
                    }
                    $errs[self::FIELD_MINIMUM_VOLUME_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIVE])) {
            $v = $this->getAdditive();
            foreach($validationRules[self::FIELD_ADDITIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_ADDITIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIVE])) {
                        $errs[self::FIELD_ADDITIVE] = [];
                    }
                    $errs[self::FIELD_ADDITIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREPARATION])) {
            $v = $this->getPreparation();
            foreach($validationRules[self::FIELD_PREPARATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER, self::FIELD_PREPARATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREPARATION])) {
                        $errs[self::FIELD_PREPARATION] = [];
                    }
                    $errs[self::FIELD_PREPARATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
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
        } else if (!($type instanceof FHIRSpecimenDefinitionContainer)) {
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
            if (self::FIELD_MATERIAL === $n->nodeName) {
                $type->setMaterial(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CAP === $n->nodeName) {
                $type->setCap(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_CAPACITY === $n->nodeName) {
                $type->setCapacity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_MINIMUM_VOLUME_QUANTITY === $n->nodeName) {
                $type->setMinimumVolumeQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_MINIMUM_VOLUME_STRING === $n->nodeName) {
                $type->setMinimumVolumeString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ADDITIVE === $n->nodeName) {
                $type->addAdditive(FHIRSpecimenDefinitionAdditive::xmlUnserialize($n));
            } elseif (self::FIELD_PREPARATION === $n->nodeName) {
                $type->setPreparation(FHIRMarkdown::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_MINIMUM_VOLUME_STRING);
        if (null !== $n) {
            $pt = $type->getMinimumVolumeString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMinimumVolumeString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PREPARATION);
        if (null !== $n) {
            $pt = $type->getPreparation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPreparation($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SpecimenDefinitionContainer'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getMaterial())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MATERIAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCap())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCapacity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAPACITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMinimumVolumeQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MINIMUM_VOLUME_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMinimumVolumeString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MINIMUM_VOLUME_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAdditive())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADDITIVE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPreparation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PREPARATION);
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
        if (null !== ($v = $this->getMaterial())) {
            $out->{self::FIELD_MATERIAL} = $v;
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getCap())) {
            $out->{self::FIELD_CAP} = $v;
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
        if (null !== ($v = $this->getCapacity())) {
            $out->{self::FIELD_CAPACITY} = $v;
        }
        if (null !== ($v = $this->getMinimumVolumeQuantity())) {
            $out->{self::FIELD_MINIMUM_VOLUME_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getMinimumVolumeString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MINIMUM_VOLUME_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MINIMUM_VOLUME_STRING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAdditive())) {
            $out->{self::FIELD_ADDITIVE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ADDITIVE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPreparation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREPARATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREPARATION_EXT} = $ext;
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