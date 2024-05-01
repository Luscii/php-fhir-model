<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * Source material shall capture information on the taxonomic and anatomical
 * origins as well as the fraction of a material that can result in or can be
 * modified to form a substance. This set of data elements shall be used to define
 * polymer substances isolated from biological matrices. Taxonomic and anatomical
 * origins shall be described using a controlled vocabulary as required. This
 * information is captured for naturally derived polymers ( . starch) and
 * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
 * the Substance level defines the fresh material of a single species or
 * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
 * preparations, the fraction information will be captured at the Substance
 * information level and additional information for herbal extracts will be
 * captured at the Specified Substance Group 1 information level. See for further
 * explanation the Substance Class: Structurally Diverse and the herbal annex.
 *
 * Class FHIRSubstanceSourceMaterialOrganism
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialOrganism extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM;

    const FIELD_FAMILY = 'family';
    const FIELD_GENUS = 'genus';
    const FIELD_SPECIES = 'species';
    const FIELD_INTRASPECIFIC_TYPE = 'intraspecificType';
    const FIELD_INTRASPECIFIC_DESCRIPTION = 'intraspecificDescription';
    const FIELD_INTRASPECIFIC_DESCRIPTION_EXT = '_intraspecificDescription';
    const FIELD_AUTHOR = 'author';
    const FIELD_HYBRID = 'hybrid';
    const FIELD_ORGANISM_GENERAL = 'organismGeneral';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The family of an organism shall be specified.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $family = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the
     * genus element of the plant/animal scientific name; it is present in names for
     * genera, species and infraspecies.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $genus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism shall be specified; refers to the Latin epithet of
     * the species of the plant/animal; it is present in names for species and
     * infraspecies.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $species = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $intraspecificType = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The intraspecific description of an organism shall be specified based on a
     * controlled vocabulary. For Influenza Vaccine, the intraspecific description
     * shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $intraspecificDescription = null;
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor[]
     */
    protected null|array $author = [];
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    protected null|FHIRSubstanceSourceMaterialHybrid $hybrid = null;
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral
     */
    protected null|FHIRSubstanceSourceMaterialOrganismGeneral $organismGeneral = null;

    /**
     * Validation map for fields in type SubstanceSourceMaterial.Organism
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstanceSourceMaterialOrganism Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FAMILY])) {
            if ($data[self::FIELD_FAMILY] instanceof FHIRCodeableConcept) {
                $this->setFamily($data[self::FIELD_FAMILY]);
            } else {
                $this->setFamily(new FHIRCodeableConcept($data[self::FIELD_FAMILY]));
            }
        }
        if (isset($data[self::FIELD_GENUS])) {
            if ($data[self::FIELD_GENUS] instanceof FHIRCodeableConcept) {
                $this->setGenus($data[self::FIELD_GENUS]);
            } else {
                $this->setGenus(new FHIRCodeableConcept($data[self::FIELD_GENUS]));
            }
        }
        if (isset($data[self::FIELD_SPECIES])) {
            if ($data[self::FIELD_SPECIES] instanceof FHIRCodeableConcept) {
                $this->setSpecies($data[self::FIELD_SPECIES]);
            } else {
                $this->setSpecies(new FHIRCodeableConcept($data[self::FIELD_SPECIES]));
            }
        }
        if (isset($data[self::FIELD_INTRASPECIFIC_TYPE])) {
            if ($data[self::FIELD_INTRASPECIFIC_TYPE] instanceof FHIRCodeableConcept) {
                $this->setIntraspecificType($data[self::FIELD_INTRASPECIFIC_TYPE]);
            } else {
                $this->setIntraspecificType(new FHIRCodeableConcept($data[self::FIELD_INTRASPECIFIC_TYPE]));
            }
        }
        if (isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION]) || isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_INTRASPECIFIC_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT]) && is_array($data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT])) ? $data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIntraspecificDescription($value);
                } else if (is_array($value)) {
                    $this->setIntraspecificDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIntraspecificDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIntraspecificDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceSourceMaterialAuthor) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRSubstanceSourceMaterialAuthor($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHOR] instanceof FHIRSubstanceSourceMaterialAuthor) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRSubstanceSourceMaterialAuthor($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_HYBRID])) {
            if ($data[self::FIELD_HYBRID] instanceof FHIRSubstanceSourceMaterialHybrid) {
                $this->setHybrid($data[self::FIELD_HYBRID]);
            } else {
                $this->setHybrid(new FHIRSubstanceSourceMaterialHybrid($data[self::FIELD_HYBRID]));
            }
        }
        if (isset($data[self::FIELD_ORGANISM_GENERAL])) {
            if ($data[self::FIELD_ORGANISM_GENERAL] instanceof FHIRSubstanceSourceMaterialOrganismGeneral) {
                $this->setOrganismGeneral($data[self::FIELD_ORGANISM_GENERAL]);
            } else {
                $this->setOrganismGeneral(new FHIRSubstanceSourceMaterialOrganismGeneral($data[self::FIELD_ORGANISM_GENERAL]));
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
     * The family of an organism shall be specified.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getFamily(): null|FHIRCodeableConcept
    {
        return $this->family;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The family of an organism shall be specified.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $family
     * @return static
     */
    public function setFamily(null|FHIRCodeableConcept $family = null): self
    {
        if (null === $family) {
            $family = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->family, $family);
        $this->family = $family;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the
     * genus element of the plant/animal scientific name; it is present in names for
     * genera, species and infraspecies.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGenus(): null|FHIRCodeableConcept
    {
        return $this->genus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the
     * genus element of the plant/animal scientific name; it is present in names for
     * genera, species and infraspecies.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $genus
     * @return static
     */
    public function setGenus(null|FHIRCodeableConcept $genus = null): self
    {
        if (null === $genus) {
            $genus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->genus, $genus);
        $this->genus = $genus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism shall be specified; refers to the Latin epithet of
     * the species of the plant/animal; it is present in names for species and
     * infraspecies.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecies(): null|FHIRCodeableConcept
    {
        return $this->species;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism shall be specified; refers to the Latin epithet of
     * the species of the plant/animal; it is present in names for species and
     * infraspecies.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $species
     * @return static
     */
    public function setSpecies(null|FHIRCodeableConcept $species = null): self
    {
        if (null === $species) {
            $species = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->species, $species);
        $this->species = $species;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIntraspecificType(): null|FHIRCodeableConcept
    {
        return $this->intraspecificType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $intraspecificType
     * @return static
     */
    public function setIntraspecificType(null|FHIRCodeableConcept $intraspecificType = null): self
    {
        if (null === $intraspecificType) {
            $intraspecificType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->intraspecificType, $intraspecificType);
        $this->intraspecificType = $intraspecificType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The intraspecific description of an organism shall be specified based on a
     * controlled vocabulary. For Influenza Vaccine, the intraspecific description
     * shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getIntraspecificDescription(): null|FHIRString
    {
        return $this->intraspecificDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The intraspecific description of an organism shall be specified based on a
     * controlled vocabulary. For Influenza Vaccine, the intraspecific description
     * shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $intraspecificDescription
     * @return static
     */
    public function setIntraspecificDescription(null|string|FHIRStringPrimitive|FHIRString $intraspecificDescription = null): self
    {
        if (null !== $intraspecificDescription && !($intraspecificDescription instanceof FHIRString)) {
            $intraspecificDescription = new FHIRString($intraspecificDescription);
        }
        $this->_trackValueSet($this->intraspecificDescription, $intraspecificDescription);
        $this->intraspecificDescription = $intraspecificDescription;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor[]
     */
    public function getAuthor(): null|array
    {
        return $this->author;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor $author
     * @return static
     */
    public function addAuthor(null|FHIRSubstanceSourceMaterialAuthor $author = null): self
    {
        if (null === $author) {
            $author = new FHIRSubstanceSourceMaterialAuthor();
        }
        $this->_trackValueAdded();
        $this->author[] = $author;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor[] $author
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
            if ($v instanceof FHIRSubstanceSourceMaterialAuthor) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRSubstanceSourceMaterialAuthor($v));
            }
        }
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function getHybrid(): null|FHIRSubstanceSourceMaterialHybrid
    {
        return $this->hybrid;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $hybrid
     * @return static
     */
    public function setHybrid(null|FHIRSubstanceSourceMaterialHybrid $hybrid = null): self
    {
        if (null === $hybrid) {
            $hybrid = new FHIRSubstanceSourceMaterialHybrid();
        }
        $this->_trackValueSet($this->hybrid, $hybrid);
        $this->hybrid = $hybrid;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral
     */
    public function getOrganismGeneral(): null|FHIRSubstanceSourceMaterialOrganismGeneral
    {
        return $this->organismGeneral;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral $organismGeneral
     * @return static
     */
    public function setOrganismGeneral(null|FHIRSubstanceSourceMaterialOrganismGeneral $organismGeneral = null): self
    {
        if (null === $organismGeneral) {
            $organismGeneral = new FHIRSubstanceSourceMaterialOrganismGeneral();
        }
        $this->_trackValueSet($this->organismGeneral, $organismGeneral);
        $this->organismGeneral = $organismGeneral;
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
        if (null !== ($v = $this->getFamily())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGenus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecies())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntraspecificType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTRASPECIFIC_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntraspecificDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTRASPECIFIC_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getHybrid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HYBRID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganismGeneral())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANISM_GENERAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_FAMILY])) {
            $v = $this->getFamily();
            foreach($validationRules[self::FIELD_FAMILY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_FAMILY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAMILY])) {
                        $errs[self::FIELD_FAMILY] = [];
                    }
                    $errs[self::FIELD_FAMILY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENUS])) {
            $v = $this->getGenus();
            foreach($validationRules[self::FIELD_GENUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_GENUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENUS])) {
                        $errs[self::FIELD_GENUS] = [];
                    }
                    $errs[self::FIELD_GENUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIES])) {
            $v = $this->getSpecies();
            foreach($validationRules[self::FIELD_SPECIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_SPECIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIES])) {
                        $errs[self::FIELD_SPECIES] = [];
                    }
                    $errs[self::FIELD_SPECIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTRASPECIFIC_TYPE])) {
            $v = $this->getIntraspecificType();
            foreach($validationRules[self::FIELD_INTRASPECIFIC_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_INTRASPECIFIC_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTRASPECIFIC_TYPE])) {
                        $errs[self::FIELD_INTRASPECIFIC_TYPE] = [];
                    }
                    $errs[self::FIELD_INTRASPECIFIC_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTRASPECIFIC_DESCRIPTION])) {
            $v = $this->getIntraspecificDescription();
            foreach($validationRules[self::FIELD_INTRASPECIFIC_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_INTRASPECIFIC_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTRASPECIFIC_DESCRIPTION])) {
                        $errs[self::FIELD_INTRASPECIFIC_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_INTRASPECIFIC_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HYBRID])) {
            $v = $this->getHybrid();
            foreach($validationRules[self::FIELD_HYBRID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_HYBRID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HYBRID])) {
                        $errs[self::FIELD_HYBRID] = [];
                    }
                    $errs[self::FIELD_HYBRID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANISM_GENERAL])) {
            $v = $this->getOrganismGeneral();
            foreach($validationRules[self::FIELD_ORGANISM_GENERAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_ORGANISM_GENERAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANISM_GENERAL])) {
                        $errs[self::FIELD_ORGANISM_GENERAL] = [];
                    }
                    $errs[self::FIELD_ORGANISM_GENERAL][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
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
        } else if (!($type instanceof FHIRSubstanceSourceMaterialOrganism)) {
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
            if (self::FIELD_FAMILY === $n->nodeName) {
                $type->setFamily(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_GENUS === $n->nodeName) {
                $type->setGenus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIES === $n->nodeName) {
                $type->setSpecies(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INTRASPECIFIC_TYPE === $n->nodeName) {
                $type->setIntraspecificType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INTRASPECIFIC_DESCRIPTION === $n->nodeName) {
                $type->setIntraspecificDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHOR === $n->nodeName) {
                $type->addAuthor(FHIRSubstanceSourceMaterialAuthor::xmlUnserialize($n));
            } elseif (self::FIELD_HYBRID === $n->nodeName) {
                $type->setHybrid(FHIRSubstanceSourceMaterialHybrid::xmlUnserialize($n));
            } elseif (self::FIELD_ORGANISM_GENERAL === $n->nodeName) {
                $type->setOrganismGeneral(FHIRSubstanceSourceMaterialOrganismGeneral::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INTRASPECIFIC_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getIntraspecificDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIntraspecificDescription($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstanceSourceMaterialOrganism'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getFamily())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FAMILY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getGenus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GENUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSpecies())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SPECIES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIntraspecificType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTRASPECIFIC_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIntraspecificDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTRASPECIFIC_DESCRIPTION);
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
        if (null !== ($v = $this->getHybrid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HYBRID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrganismGeneral())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORGANISM_GENERAL);
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
        if (null !== ($v = $this->getFamily())) {
            $out->{self::FIELD_FAMILY} = $v;
        }
        if (null !== ($v = $this->getGenus())) {
            $out->{self::FIELD_GENUS} = $v;
        }
        if (null !== ($v = $this->getSpecies())) {
            $out->{self::FIELD_SPECIES} = $v;
        }
        if (null !== ($v = $this->getIntraspecificType())) {
            $out->{self::FIELD_INTRASPECIFIC_TYPE} = $v;
        }
        if (null !== ($v = $this->getIntraspecificDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INTRASPECIFIC_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT} = $ext;
            }
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
        if (null !== ($v = $this->getHybrid())) {
            $out->{self::FIELD_HYBRID} = $v;
        }
        if (null !== ($v = $this->getOrganismGeneral())) {
            $out->{self::FIELD_ORGANISM_GENERAL} = $v;
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