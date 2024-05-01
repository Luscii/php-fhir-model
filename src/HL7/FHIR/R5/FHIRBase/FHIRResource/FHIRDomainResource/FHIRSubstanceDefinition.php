<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstanceDefinition
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_STATUS = 'status';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_DOMAIN = 'domain';
    const FIELD_GRADE = 'grade';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_INFORMATION_SOURCE = 'informationSource';
    const FIELD_NOTE = 'note';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_SUPPLIER = 'supplier';
    const FIELD_MOIETY = 'moiety';
    const FIELD_CHARACTERIZATION = 'characterization';
    const FIELD_PROPERTY = 'property';
    const FIELD_REFERENCE_INFORMATION = 'referenceInformation';
    const FIELD_MOLECULAR_WEIGHT = 'molecularWeight';
    const FIELD_STRUCTURE = 'structure';
    const FIELD_CODE = 'code';
    const FIELD_NAME = 'name';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_NUCLEIC_ACID = 'nucleicAcid';
    const FIELD_POLYMER = 'polymer';
    const FIELD_PROTEIN = 'protein';
    const FIELD_SOURCE_MATERIAL = 'sourceMaterial';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business level version identifier of the substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $classification = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to human or veterinary use.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $domain = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $grade = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Textual description of the substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $informationSource = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $manufacturer = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $supplier = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety[]
     */
    protected null|array $moiety = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization[]
     */
    protected null|array $characterization = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty[]
     */
    protected null|array $property = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $referenceInformation = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight[]
     */
    protected null|array $molecularWeight = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure
     */
    protected null|FHIRSubstanceDefinitionStructure $structure = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode[]
     */
    protected null|array $code = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName[]
     */
    protected null|array $name = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship[]
     */
    protected null|array $relationship = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $nucleicAcid = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $polymer = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $protein = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial
     */
    protected null|FHIRSubstanceDefinitionSourceMaterial $sourceMaterial = null;

    /**
     * Validation map for fields in type SubstanceDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstanceDefinition Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRCodeableConcept($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_DOMAIN])) {
            if ($data[self::FIELD_DOMAIN] instanceof FHIRCodeableConcept) {
                $this->setDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->setDomain(new FHIRCodeableConcept($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_GRADE])) {
            if (is_array($data[self::FIELD_GRADE])) {
                foreach($data[self::FIELD_GRADE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addGrade($v);
                    } else {
                        $this->addGrade(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_GRADE] instanceof FHIRCodeableConcept) {
                $this->addGrade($data[self::FIELD_GRADE]);
            } else {
                $this->addGrade(new FHIRCodeableConcept($data[self::FIELD_GRADE]));
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
        if (isset($data[self::FIELD_INFORMATION_SOURCE])) {
            if (is_array($data[self::FIELD_INFORMATION_SOURCE])) {
                foreach($data[self::FIELD_INFORMATION_SOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addInformationSource($v);
                    } else {
                        $this->addInformationSource(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_INFORMATION_SOURCE] instanceof FHIRReference) {
                $this->addInformationSource($data[self::FIELD_INFORMATION_SOURCE]);
            } else {
                $this->addInformationSource(new FHIRReference($data[self::FIELD_INFORMATION_SOURCE]));
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
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if (is_array($data[self::FIELD_MANUFACTURER])) {
                foreach($data[self::FIELD_MANUFACTURER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addManufacturer($v);
                    } else {
                        $this->addManufacturer(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->addManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->addManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_SUPPLIER])) {
            if (is_array($data[self::FIELD_SUPPLIER])) {
                foreach($data[self::FIELD_SUPPLIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupplier($v);
                    } else {
                        $this->addSupplier(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPLIER] instanceof FHIRReference) {
                $this->addSupplier($data[self::FIELD_SUPPLIER]);
            } else {
                $this->addSupplier(new FHIRReference($data[self::FIELD_SUPPLIER]));
            }
        }
        if (isset($data[self::FIELD_MOIETY])) {
            if (is_array($data[self::FIELD_MOIETY])) {
                foreach($data[self::FIELD_MOIETY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionMoiety) {
                        $this->addMoiety($v);
                    } else {
                        $this->addMoiety(new FHIRSubstanceDefinitionMoiety($v));
                    }
                }
            } elseif ($data[self::FIELD_MOIETY] instanceof FHIRSubstanceDefinitionMoiety) {
                $this->addMoiety($data[self::FIELD_MOIETY]);
            } else {
                $this->addMoiety(new FHIRSubstanceDefinitionMoiety($data[self::FIELD_MOIETY]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERIZATION])) {
            if (is_array($data[self::FIELD_CHARACTERIZATION])) {
                foreach($data[self::FIELD_CHARACTERIZATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionCharacterization) {
                        $this->addCharacterization($v);
                    } else {
                        $this->addCharacterization(new FHIRSubstanceDefinitionCharacterization($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARACTERIZATION] instanceof FHIRSubstanceDefinitionCharacterization) {
                $this->addCharacterization($data[self::FIELD_CHARACTERIZATION]);
            } else {
                $this->addCharacterization(new FHIRSubstanceDefinitionCharacterization($data[self::FIELD_CHARACTERIZATION]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRSubstanceDefinitionProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRSubstanceDefinitionProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRSubstanceDefinitionProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_INFORMATION])) {
            if ($data[self::FIELD_REFERENCE_INFORMATION] instanceof FHIRReference) {
                $this->setReferenceInformation($data[self::FIELD_REFERENCE_INFORMATION]);
            } else {
                $this->setReferenceInformation(new FHIRReference($data[self::FIELD_REFERENCE_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_WEIGHT])) {
            if (is_array($data[self::FIELD_MOLECULAR_WEIGHT])) {
                foreach($data[self::FIELD_MOLECULAR_WEIGHT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionMolecularWeight) {
                        $this->addMolecularWeight($v);
                    } else {
                        $this->addMolecularWeight(new FHIRSubstanceDefinitionMolecularWeight($v));
                    }
                }
            } elseif ($data[self::FIELD_MOLECULAR_WEIGHT] instanceof FHIRSubstanceDefinitionMolecularWeight) {
                $this->addMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]);
            } else {
                $this->addMolecularWeight(new FHIRSubstanceDefinitionMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE])) {
            if ($data[self::FIELD_STRUCTURE] instanceof FHIRSubstanceDefinitionStructure) {
                $this->setStructure($data[self::FIELD_STRUCTURE]);
            } else {
                $this->setStructure(new FHIRSubstanceDefinitionStructure($data[self::FIELD_STRUCTURE]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionCode) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRSubstanceDefinitionCode($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRSubstanceDefinitionCode) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRSubstanceDefinitionCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRSubstanceDefinitionName($v));
                    }
                }
            } elseif ($data[self::FIELD_NAME] instanceof FHIRSubstanceDefinitionName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRSubstanceDefinitionName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if (is_array($data[self::FIELD_RELATIONSHIP])) {
                foreach($data[self::FIELD_RELATIONSHIP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionRelationship) {
                        $this->addRelationship($v);
                    } else {
                        $this->addRelationship(new FHIRSubstanceDefinitionRelationship($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATIONSHIP] instanceof FHIRSubstanceDefinitionRelationship) {
                $this->addRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->addRelationship(new FHIRSubstanceDefinitionRelationship($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_NUCLEIC_ACID])) {
            if ($data[self::FIELD_NUCLEIC_ACID] instanceof FHIRReference) {
                $this->setNucleicAcid($data[self::FIELD_NUCLEIC_ACID]);
            } else {
                $this->setNucleicAcid(new FHIRReference($data[self::FIELD_NUCLEIC_ACID]));
            }
        }
        if (isset($data[self::FIELD_POLYMER])) {
            if ($data[self::FIELD_POLYMER] instanceof FHIRReference) {
                $this->setPolymer($data[self::FIELD_POLYMER]);
            } else {
                $this->setPolymer(new FHIRReference($data[self::FIELD_POLYMER]));
            }
        }
        if (isset($data[self::FIELD_PROTEIN])) {
            if ($data[self::FIELD_PROTEIN] instanceof FHIRReference) {
                $this->setProtein($data[self::FIELD_PROTEIN]);
            } else {
                $this->setProtein(new FHIRReference($data[self::FIELD_PROTEIN]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_MATERIAL])) {
            if ($data[self::FIELD_SOURCE_MATERIAL] instanceof FHIRSubstanceDefinitionSourceMaterial) {
                $this->setSourceMaterial($data[self::FIELD_SOURCE_MATERIAL]);
            } else {
                $this->setSourceMaterial(new FHIRSubstanceDefinitionSourceMaterial($data[self::FIELD_SOURCE_MATERIAL]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business level version identifier of the substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business level version identifier of the substance.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version = null): self
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueSet($this->version, $version);
        $this->version = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status = null): self
    {
        if (null === $status) {
            $status = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassification(): null|array
    {
        return $this->classification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classification
     * @return static
     */
    public function addClassification(null|FHIRCodeableConcept $classification = null): self
    {
        if (null === $classification) {
            $classification = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classification
     * @return static
     */
    public function setClassification(array $classification = []): self
    {
        if ([] !== $this->classification) {
            $this->_trackValuesRemoved(count($this->classification));
            $this->classification = [];
        }
        if ([] === $classification) {
            return $this;
        }
        foreach($classification as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClassification($v);
            } else {
                $this->addClassification(new FHIRCodeableConcept($v));
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
     * If the substance applies to human or veterinary use.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDomain(): null|FHIRCodeableConcept
    {
        return $this->domain;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to human or veterinary use.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $domain
     * @return static
     */
    public function setDomain(null|FHIRCodeableConcept $domain = null): self
    {
        if (null === $domain) {
            $domain = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->domain, $domain);
        $this->domain = $domain;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getGrade(): null|array
    {
        return $this->grade;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $grade
     * @return static
     */
    public function addGrade(null|FHIRCodeableConcept $grade = null): self
    {
        if (null === $grade) {
            $grade = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->grade[] = $grade;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $grade
     * @return static
     */
    public function setGrade(array $grade = []): self
    {
        if ([] !== $this->grade) {
            $this->_trackValuesRemoved(count($this->grade));
            $this->grade = [];
        }
        if ([] === $grade) {
            return $this;
        }
        foreach($grade as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addGrade($v);
            } else {
                $this->addGrade(new FHIRCodeableConcept($v));
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
     * Textual description of the substance.
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
     * Textual description of the substance.
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
     * Supporting literature.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getInformationSource(): null|array
    {
        return $this->informationSource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $informationSource
     * @return static
     */
    public function addInformationSource(null|FHIRReference $informationSource = null): self
    {
        if (null === $informationSource) {
            $informationSource = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->informationSource[] = $informationSource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $informationSource
     * @return static
     */
    public function setInformationSource(array $informationSource = []): self
    {
        if ([] !== $this->informationSource) {
            $this->_trackValuesRemoved(count($this->informationSource));
            $this->informationSource = [];
        }
        if ([] === $informationSource) {
            return $this;
        }
        foreach($informationSource as $v) {
            if ($v instanceof FHIRReference) {
                $this->addInformationSource($v);
            } else {
                $this->addInformationSource(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Textual comment about the substance's catalogue or registry record.
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
     * Textual comment about the substance's catalogue or registry record.
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
     * Textual comment about the substance's catalogue or registry record.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getManufacturer(): null|array
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(null|FHIRReference $manufacturer = null): self
    {
        if (null === $manufacturer) {
            $manufacturer = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $manufacturer
     * @return static
     */
    public function setManufacturer(array $manufacturer = []): self
    {
        if ([] !== $this->manufacturer) {
            $this->_trackValuesRemoved(count($this->manufacturer));
            $this->manufacturer = [];
        }
        if ([] === $manufacturer) {
            return $this;
        }
        foreach($manufacturer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addManufacturer($v);
            } else {
                $this->addManufacturer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSupplier(): null|array
    {
        return $this->supplier;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supplier
     * @return static
     */
    public function addSupplier(null|FHIRReference $supplier = null): self
    {
        if (null === $supplier) {
            $supplier = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supplier[] = $supplier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $supplier
     * @return static
     */
    public function setSupplier(array $supplier = []): self
    {
        if ([] !== $this->supplier) {
            $this->_trackValuesRemoved(count($this->supplier));
            $this->supplier = [];
        }
        if ([] === $supplier) {
            return $this;
        }
        foreach($supplier as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupplier($v);
            } else {
                $this->addSupplier(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety[]
     */
    public function getMoiety(): null|array
    {
        return $this->moiety;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety $moiety
     * @return static
     */
    public function addMoiety(null|FHIRSubstanceDefinitionMoiety $moiety = null): self
    {
        if (null === $moiety) {
            $moiety = new FHIRSubstanceDefinitionMoiety();
        }
        $this->_trackValueAdded();
        $this->moiety[] = $moiety;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety[] $moiety
     * @return static
     */
    public function setMoiety(array $moiety = []): self
    {
        if ([] !== $this->moiety) {
            $this->_trackValuesRemoved(count($this->moiety));
            $this->moiety = [];
        }
        if ([] === $moiety) {
            return $this;
        }
        foreach($moiety as $v) {
            if ($v instanceof FHIRSubstanceDefinitionMoiety) {
                $this->addMoiety($v);
            } else {
                $this->addMoiety(new FHIRSubstanceDefinitionMoiety($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization[]
     */
    public function getCharacterization(): null|array
    {
        return $this->characterization;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization $characterization
     * @return static
     */
    public function addCharacterization(null|FHIRSubstanceDefinitionCharacterization $characterization = null): self
    {
        if (null === $characterization) {
            $characterization = new FHIRSubstanceDefinitionCharacterization();
        }
        $this->_trackValueAdded();
        $this->characterization[] = $characterization;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization[] $characterization
     * @return static
     */
    public function setCharacterization(array $characterization = []): self
    {
        if ([] !== $this->characterization) {
            $this->_trackValuesRemoved(count($this->characterization));
            $this->characterization = [];
        }
        if ([] === $characterization) {
            return $this;
        }
        foreach($characterization as $v) {
            if ($v instanceof FHIRSubstanceDefinitionCharacterization) {
                $this->addCharacterization($v);
            } else {
                $this->addCharacterization(new FHIRSubstanceDefinitionCharacterization($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty $property
     * @return static
     */
    public function addProperty(null|FHIRSubstanceDefinitionProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRSubstanceDefinitionProperty();
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty[] $property
     * @return static
     */
    public function setProperty(array $property = []): self
    {
        if ([] !== $this->property) {
            $this->_trackValuesRemoved(count($this->property));
            $this->property = [];
        }
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRSubstanceDefinitionProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRSubstanceDefinitionProperty($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReferenceInformation(): null|FHIRReference
    {
        return $this->referenceInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $referenceInformation
     * @return static
     */
    public function setReferenceInformation(null|FHIRReference $referenceInformation = null): self
    {
        if (null === $referenceInformation) {
            $referenceInformation = new FHIRReference();
        }
        $this->_trackValueSet($this->referenceInformation, $referenceInformation);
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight[]
     */
    public function getMolecularWeight(): null|array
    {
        return $this->molecularWeight;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight $molecularWeight
     * @return static
     */
    public function addMolecularWeight(null|FHIRSubstanceDefinitionMolecularWeight $molecularWeight = null): self
    {
        if (null === $molecularWeight) {
            $molecularWeight = new FHIRSubstanceDefinitionMolecularWeight();
        }
        $this->_trackValueAdded();
        $this->molecularWeight[] = $molecularWeight;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight[] $molecularWeight
     * @return static
     */
    public function setMolecularWeight(array $molecularWeight = []): self
    {
        if ([] !== $this->molecularWeight) {
            $this->_trackValuesRemoved(count($this->molecularWeight));
            $this->molecularWeight = [];
        }
        if ([] === $molecularWeight) {
            return $this;
        }
        foreach($molecularWeight as $v) {
            if ($v instanceof FHIRSubstanceDefinitionMolecularWeight) {
                $this->addMolecularWeight($v);
            } else {
                $this->addMolecularWeight(new FHIRSubstanceDefinitionMolecularWeight($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure
     */
    public function getStructure(): null|FHIRSubstanceDefinitionStructure
    {
        return $this->structure;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure $structure
     * @return static
     */
    public function setStructure(null|FHIRSubstanceDefinitionStructure $structure = null): self
    {
        if (null === $structure) {
            $structure = new FHIRSubstanceDefinitionStructure();
        }
        $this->_trackValueSet($this->structure, $structure);
        $this->structure = $structure;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode $code
     * @return static
     */
    public function addCode(null|FHIRSubstanceDefinitionCode $code = null): self
    {
        if (null === $code) {
            $code = new FHIRSubstanceDefinitionCode();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode[] $code
     * @return static
     */
    public function setCode(array $code = []): self
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRSubstanceDefinitionCode) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRSubstanceDefinitionCode($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName[]
     */
    public function getName(): null|array
    {
        return $this->name;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName $name
     * @return static
     */
    public function addName(null|FHIRSubstanceDefinitionName $name = null): self
    {
        if (null === $name) {
            $name = new FHIRSubstanceDefinitionName();
        }
        $this->_trackValueAdded();
        $this->name[] = $name;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName[] $name
     * @return static
     */
    public function setName(array $name = []): self
    {
        if ([] !== $this->name) {
            $this->_trackValuesRemoved(count($this->name));
            $this->name = [];
        }
        if ([] === $name) {
            return $this;
        }
        foreach($name as $v) {
            if ($v instanceof FHIRSubstanceDefinitionName) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRSubstanceDefinitionName($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship[]
     */
    public function getRelationship(): null|array
    {
        return $this->relationship;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship $relationship
     * @return static
     */
    public function addRelationship(null|FHIRSubstanceDefinitionRelationship $relationship = null): self
    {
        if (null === $relationship) {
            $relationship = new FHIRSubstanceDefinitionRelationship();
        }
        $this->_trackValueAdded();
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship[] $relationship
     * @return static
     */
    public function setRelationship(array $relationship = []): self
    {
        if ([] !== $this->relationship) {
            $this->_trackValuesRemoved(count($this->relationship));
            $this->relationship = [];
        }
        if ([] === $relationship) {
            return $this;
        }
        foreach($relationship as $v) {
            if ($v instanceof FHIRSubstanceDefinitionRelationship) {
                $this->addRelationship($v);
            } else {
                $this->addRelationship(new FHIRSubstanceDefinitionRelationship($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getNucleicAcid(): null|FHIRReference
    {
        return $this->nucleicAcid;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $nucleicAcid
     * @return static
     */
    public function setNucleicAcid(null|FHIRReference $nucleicAcid = null): self
    {
        if (null === $nucleicAcid) {
            $nucleicAcid = new FHIRReference();
        }
        $this->_trackValueSet($this->nucleicAcid, $nucleicAcid);
        $this->nucleicAcid = $nucleicAcid;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPolymer(): null|FHIRReference
    {
        return $this->polymer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $polymer
     * @return static
     */
    public function setPolymer(null|FHIRReference $polymer = null): self
    {
        if (null === $polymer) {
            $polymer = new FHIRReference();
        }
        $this->_trackValueSet($this->polymer, $polymer);
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getProtein(): null|FHIRReference
    {
        return $this->protein;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $protein
     * @return static
     */
    public function setProtein(null|FHIRReference $protein = null): self
    {
        if (null === $protein) {
            $protein = new FHIRReference();
        }
        $this->_trackValueSet($this->protein, $protein);
        $this->protein = $protein;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial
     */
    public function getSourceMaterial(): null|FHIRSubstanceDefinitionSourceMaterial
    {
        return $this->sourceMaterial;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial $sourceMaterial
     * @return static
     */
    public function setSourceMaterial(null|FHIRSubstanceDefinitionSourceMaterial $sourceMaterial = null): self
    {
        if (null === $sourceMaterial) {
            $sourceMaterial = new FHIRSubstanceDefinitionSourceMaterial();
        }
        $this->_trackValueSet($this->sourceMaterial, $sourceMaterial);
        $this->sourceMaterial = $sourceMaterial;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDomain())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOMAIN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGrade())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GRADE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInformationSource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INFORMATION_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANUFACTURER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSupplier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPLIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMoiety())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MOIETY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCharacterization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_INFORMATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MOLECULAR_WEIGHT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStructure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelationship())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATIONSHIP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUCLEIC_ACID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPolymer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLYMER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProtein())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROTEIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceMaterial())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GRADE])) {
            $v = $this->getGrade();
            foreach($validationRules[self::FIELD_GRADE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_GRADE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GRADE])) {
                        $errs[self::FIELD_GRADE] = [];
                    }
                    $errs[self::FIELD_GRADE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION_SOURCE])) {
            $v = $this->getInformationSource();
            foreach($validationRules[self::FIELD_INFORMATION_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_INFORMATION_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION_SOURCE])) {
                        $errs[self::FIELD_INFORMATION_SOURCE] = [];
                    }
                    $errs[self::FIELD_INFORMATION_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLIER])) {
            $v = $this->getSupplier();
            foreach($validationRules[self::FIELD_SUPPLIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_SUPPLIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLIER])) {
                        $errs[self::FIELD_SUPPLIER] = [];
                    }
                    $errs[self::FIELD_SUPPLIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOIETY])) {
            $v = $this->getMoiety();
            foreach($validationRules[self::FIELD_MOIETY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_MOIETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOIETY])) {
                        $errs[self::FIELD_MOIETY] = [];
                    }
                    $errs[self::FIELD_MOIETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERIZATION])) {
            $v = $this->getCharacterization();
            foreach($validationRules[self::FIELD_CHARACTERIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_CHARACTERIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERIZATION])) {
                        $errs[self::FIELD_CHARACTERIZATION] = [];
                    }
                    $errs[self::FIELD_CHARACTERIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_INFORMATION])) {
            $v = $this->getReferenceInformation();
            foreach($validationRules[self::FIELD_REFERENCE_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_REFERENCE_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_INFORMATION])) {
                        $errs[self::FIELD_REFERENCE_INFORMATION] = [];
                    }
                    $errs[self::FIELD_REFERENCE_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_WEIGHT])) {
            $v = $this->getMolecularWeight();
            foreach($validationRules[self::FIELD_MOLECULAR_WEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_MOLECULAR_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_WEIGHT])) {
                        $errs[self::FIELD_MOLECULAR_WEIGHT] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE])) {
            $v = $this->getStructure();
            foreach($validationRules[self::FIELD_STRUCTURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_STRUCTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE])) {
                        $errs[self::FIELD_STRUCTURE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUCLEIC_ACID])) {
            $v = $this->getNucleicAcid();
            foreach($validationRules[self::FIELD_NUCLEIC_ACID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_NUCLEIC_ACID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUCLEIC_ACID])) {
                        $errs[self::FIELD_NUCLEIC_ACID] = [];
                    }
                    $errs[self::FIELD_NUCLEIC_ACID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLYMER])) {
            $v = $this->getPolymer();
            foreach($validationRules[self::FIELD_POLYMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_POLYMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLYMER])) {
                        $errs[self::FIELD_POLYMER] = [];
                    }
                    $errs[self::FIELD_POLYMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTEIN])) {
            $v = $this->getProtein();
            foreach($validationRules[self::FIELD_PROTEIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_PROTEIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTEIN])) {
                        $errs[self::FIELD_PROTEIN] = [];
                    }
                    $errs[self::FIELD_PROTEIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL])) {
            $v = $this->getSourceMaterial();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION, self::FIELD_SOURCE_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_MATERIAL])) {
                        $errs[self::FIELD_SOURCE_MATERIAL] = [];
                    }
                    $errs[self::FIELD_SOURCE_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition
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
        } else if (!($type instanceof FHIRSubstanceDefinition)) {
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->setVersion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFICATION === $n->nodeName) {
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DOMAIN === $n->nodeName) {
                $type->setDomain(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_GRADE === $n->nodeName) {
                $type->addGrade(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_INFORMATION_SOURCE === $n->nodeName) {
                $type->addInformationSource(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_MANUFACTURER === $n->nodeName) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPLIER === $n->nodeName) {
                $type->addSupplier(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MOIETY === $n->nodeName) {
                $type->addMoiety(FHIRSubstanceDefinitionMoiety::xmlUnserialize($n));
            } elseif (self::FIELD_CHARACTERIZATION === $n->nodeName) {
                $type->addCharacterization(FHIRSubstanceDefinitionCharacterization::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRSubstanceDefinitionProperty::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE_INFORMATION === $n->nodeName) {
                $type->setReferenceInformation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MOLECULAR_WEIGHT === $n->nodeName) {
                $type->addMolecularWeight(FHIRSubstanceDefinitionMolecularWeight::xmlUnserialize($n));
            } elseif (self::FIELD_STRUCTURE === $n->nodeName) {
                $type->setStructure(FHIRSubstanceDefinitionStructure::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->addCode(FHIRSubstanceDefinitionCode::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->addName(FHIRSubstanceDefinitionName::xmlUnserialize($n));
            } elseif (self::FIELD_RELATIONSHIP === $n->nodeName) {
                $type->addRelationship(FHIRSubstanceDefinitionRelationship::xmlUnserialize($n));
            } elseif (self::FIELD_NUCLEIC_ACID === $n->nodeName) {
                $type->setNucleicAcid(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_POLYMER === $n->nodeName) {
                $type->setPolymer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PROTEIN === $n->nodeName) {
                $type->setProtein(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_MATERIAL === $n->nodeName) {
                $type->setSourceMaterial(FHIRSubstanceDefinitionSourceMaterial::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VERSION);
        if (null !== $n) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVersion($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstanceDefinition'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLASSIFICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDomain())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOMAIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getGrade())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GRADE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getInformationSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INFORMATION_SOURCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MANUFACTURER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSupplier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPLIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMoiety())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MOIETY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCharacterization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CHARACTERIZATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROPERTY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE_INFORMATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MOLECULAR_WEIGHT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStructure())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRelationship())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATIONSHIP);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUCLEIC_ACID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPolymer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_POLYMER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProtein())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROTEIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSourceMaterial())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_MATERIAL);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $out->{self::FIELD_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getClassification())) {
            $out->{self::FIELD_CLASSIFICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLASSIFICATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDomain())) {
            $out->{self::FIELD_DOMAIN} = $v;
        }
        if ([] !== ($vs = $this->getGrade())) {
            $out->{self::FIELD_GRADE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_GRADE}[] = $v;
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
        if ([] !== ($vs = $this->getInformationSource())) {
            $out->{self::FIELD_INFORMATION_SOURCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INFORMATION_SOURCE}[] = $v;
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
        if ([] !== ($vs = $this->getManufacturer())) {
            $out->{self::FIELD_MANUFACTURER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MANUFACTURER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupplier())) {
            $out->{self::FIELD_SUPPLIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPLIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMoiety())) {
            $out->{self::FIELD_MOIETY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MOIETY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCharacterization())) {
            $out->{self::FIELD_CHARACTERIZATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CHARACTERIZATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROPERTY}[] = $v;
            }
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            $out->{self::FIELD_REFERENCE_INFORMATION} = $v;
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            $out->{self::FIELD_MOLECULAR_WEIGHT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MOLECULAR_WEIGHT}[] = $v;
            }
        }
        if (null !== ($v = $this->getStructure())) {
            $out->{self::FIELD_STRUCTURE} = $v;
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $out->{self::FIELD_NAME} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NAME}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelationship())) {
            $out->{self::FIELD_RELATIONSHIP} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATIONSHIP}[] = $v;
            }
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            $out->{self::FIELD_NUCLEIC_ACID} = $v;
        }
        if (null !== ($v = $this->getPolymer())) {
            $out->{self::FIELD_POLYMER} = $v;
        }
        if (null !== ($v = $this->getProtein())) {
            $out->{self::FIELD_PROTEIN} = $v;
        }
        if (null !== ($v = $this->getSourceMaterial())) {
            $out->{self::FIELD_SOURCE_MATERIAL} = $v;
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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