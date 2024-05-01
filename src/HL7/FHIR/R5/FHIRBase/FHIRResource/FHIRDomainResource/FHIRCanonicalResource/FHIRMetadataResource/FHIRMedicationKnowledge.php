<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRChangeTrackingTrait;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRValidationAssertionsTrait;
use HL7\FHIR\R5\PHPFHIRXmlNamespaceTrait;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationKnowledge
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource
 */
class FHIRMedicationKnowledge extends FHIRMetadataResource implements PHPFHIRContainedTypeInterface
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_CODE = 'code';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_AUTHOR = 'author';
    const FIELD_INTENDED_JURISDICTION = 'intendedJurisdiction';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_RELATED_MEDICATION_KNOWLEDGE = 'relatedMedicationKnowledge';
    const FIELD_ASSOCIATED_MEDICATION = 'associatedMedication';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_MONOGRAPH = 'monograph';
    const FIELD_PREPARATION_INSTRUCTION = 'preparationInstruction';
    const FIELD_PREPARATION_INSTRUCTION_EXT = '_preparationInstruction';
    const FIELD_COST = 'cost';
    const FIELD_MONITORING_PROGRAM = 'monitoringProgram';
    const FIELD_INDICATION_GUIDELINE = 'indicationGuideline';
    const FIELD_MEDICINE_CLASSIFICATION = 'medicineClassification';
    const FIELD_PACKAGING = 'packaging';
    const FIELD_CLINICAL_USE_ISSUE = 'clinicalUseIssue';
    const FIELD_STORAGE_GUIDELINE = 'storageGuideline';
    const FIELD_REGULATORY = 'regulatory';
    const FIELD_DEFINITIONAL = 'definitional';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that specifies this medication, or a textual description if no code is
     * available. Usage note: This could be a standard medication code such as a code
     * from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary
     * code, optionally with translations to other code systems.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is
     * in active use within the drug database or inventory system. The status refers to
     * the validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes
     */
    protected null|FHIRMedicationKnowledgeStatusCodes $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator or owner of the knowledge or information about the medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $author = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $intendedJurisdiction = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $name = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    protected null|array $relatedMedicationKnowledge = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $associatedMedication = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $productType = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    protected null|array $monograph = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The instructions for preparing the medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $preparationInstruction = null;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    protected null|array $cost = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    protected null|array $monitoringProgram = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline[]
     */
    protected null|array $indicationGuideline = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    protected null|array $medicineClassification = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging[]
     */
    protected null|array $packaging = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $clinicalUseIssue = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline[]
     */
    protected null|array $storageGuideline = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    protected null|array $regulatory = [];
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Along with the link to a Medicinal Product Definition resource, this information
     * provides common definitional elements that are needed to understand the specific
     * medication that is being described.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional
     */
    protected null|FHIRMedicationKnowledgeDefinitional $definitional = null;

    /**
     * Validation map for fields in type MedicationKnowledge
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedicationKnowledge Constructor
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
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMedicationKnowledgeStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationKnowledgeStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationKnowledgeStatusCodes([FHIRMedicationKnowledgeStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRMedicationKnowledgeStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_INTENDED_JURISDICTION])) {
            if (is_array($data[self::FIELD_INTENDED_JURISDICTION])) {
                foreach($data[self::FIELD_INTENDED_JURISDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIntendedJurisdiction($v);
                    } else {
                        $this->addIntendedJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_INTENDED_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addIntendedJurisdiction($data[self::FIELD_INTENDED_JURISDICTION]);
            } else {
                $this->addIntendedJurisdiction(new FHIRCodeableConcept($data[self::FIELD_INTENDED_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addName($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addName($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addName(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addName(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addName(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
            if (is_array($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
                foreach($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeRelatedMedicationKnowledge) {
                        $this->addRelatedMedicationKnowledge($v);
                    } else {
                        $this->addRelatedMedicationKnowledge(new FHIRMedicationKnowledgeRelatedMedicationKnowledge($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] instanceof FHIRMedicationKnowledgeRelatedMedicationKnowledge) {
                $this->addRelatedMedicationKnowledge($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE]);
            } else {
                $this->addRelatedMedicationKnowledge(new FHIRMedicationKnowledgeRelatedMedicationKnowledge($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE]));
            }
        }
        if (isset($data[self::FIELD_ASSOCIATED_MEDICATION])) {
            if (is_array($data[self::FIELD_ASSOCIATED_MEDICATION])) {
                foreach($data[self::FIELD_ASSOCIATED_MEDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAssociatedMedication($v);
                    } else {
                        $this->addAssociatedMedication(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ASSOCIATED_MEDICATION] instanceof FHIRReference) {
                $this->addAssociatedMedication($data[self::FIELD_ASSOCIATED_MEDICATION]);
            } else {
                $this->addAssociatedMedication(new FHIRReference($data[self::FIELD_ASSOCIATED_MEDICATION]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_TYPE])) {
            if (is_array($data[self::FIELD_PRODUCT_TYPE])) {
                foreach($data[self::FIELD_PRODUCT_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProductType($v);
                    } else {
                        $this->addProductType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PRODUCT_TYPE] instanceof FHIRCodeableConcept) {
                $this->addProductType($data[self::FIELD_PRODUCT_TYPE]);
            } else {
                $this->addProductType(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_MONOGRAPH])) {
            if (is_array($data[self::FIELD_MONOGRAPH])) {
                foreach($data[self::FIELD_MONOGRAPH] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeMonograph) {
                        $this->addMonograph($v);
                    } else {
                        $this->addMonograph(new FHIRMedicationKnowledgeMonograph($v));
                    }
                }
            } elseif ($data[self::FIELD_MONOGRAPH] instanceof FHIRMedicationKnowledgeMonograph) {
                $this->addMonograph($data[self::FIELD_MONOGRAPH]);
            } else {
                $this->addMonograph(new FHIRMedicationKnowledgeMonograph($data[self::FIELD_MONOGRAPH]));
            }
        }
        if (isset($data[self::FIELD_PREPARATION_INSTRUCTION]) || isset($data[self::FIELD_PREPARATION_INSTRUCTION_EXT])) {
            $value = $data[self::FIELD_PREPARATION_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_PREPARATION_INSTRUCTION_EXT]) && is_array($data[self::FIELD_PREPARATION_INSTRUCTION_EXT])) ? $data[self::FIELD_PREPARATION_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPreparationInstruction($value);
                } else if (is_array($value)) {
                    $this->setPreparationInstruction(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPreparationInstruction(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPreparationInstruction(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_COST])) {
            if (is_array($data[self::FIELD_COST])) {
                foreach($data[self::FIELD_COST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeCost) {
                        $this->addCost($v);
                    } else {
                        $this->addCost(new FHIRMedicationKnowledgeCost($v));
                    }
                }
            } elseif ($data[self::FIELD_COST] instanceof FHIRMedicationKnowledgeCost) {
                $this->addCost($data[self::FIELD_COST]);
            } else {
                $this->addCost(new FHIRMedicationKnowledgeCost($data[self::FIELD_COST]));
            }
        }
        if (isset($data[self::FIELD_MONITORING_PROGRAM])) {
            if (is_array($data[self::FIELD_MONITORING_PROGRAM])) {
                foreach($data[self::FIELD_MONITORING_PROGRAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeMonitoringProgram) {
                        $this->addMonitoringProgram($v);
                    } else {
                        $this->addMonitoringProgram(new FHIRMedicationKnowledgeMonitoringProgram($v));
                    }
                }
            } elseif ($data[self::FIELD_MONITORING_PROGRAM] instanceof FHIRMedicationKnowledgeMonitoringProgram) {
                $this->addMonitoringProgram($data[self::FIELD_MONITORING_PROGRAM]);
            } else {
                $this->addMonitoringProgram(new FHIRMedicationKnowledgeMonitoringProgram($data[self::FIELD_MONITORING_PROGRAM]));
            }
        }
        if (isset($data[self::FIELD_INDICATION_GUIDELINE])) {
            if (is_array($data[self::FIELD_INDICATION_GUIDELINE])) {
                foreach($data[self::FIELD_INDICATION_GUIDELINE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeIndicationGuideline) {
                        $this->addIndicationGuideline($v);
                    } else {
                        $this->addIndicationGuideline(new FHIRMedicationKnowledgeIndicationGuideline($v));
                    }
                }
            } elseif ($data[self::FIELD_INDICATION_GUIDELINE] instanceof FHIRMedicationKnowledgeIndicationGuideline) {
                $this->addIndicationGuideline($data[self::FIELD_INDICATION_GUIDELINE]);
            } else {
                $this->addIndicationGuideline(new FHIRMedicationKnowledgeIndicationGuideline($data[self::FIELD_INDICATION_GUIDELINE]));
            }
        }
        if (isset($data[self::FIELD_MEDICINE_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_MEDICINE_CLASSIFICATION])) {
                foreach($data[self::FIELD_MEDICINE_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeMedicineClassification) {
                        $this->addMedicineClassification($v);
                    } else {
                        $this->addMedicineClassification(new FHIRMedicationKnowledgeMedicineClassification($v));
                    }
                }
            } elseif ($data[self::FIELD_MEDICINE_CLASSIFICATION] instanceof FHIRMedicationKnowledgeMedicineClassification) {
                $this->addMedicineClassification($data[self::FIELD_MEDICINE_CLASSIFICATION]);
            } else {
                $this->addMedicineClassification(new FHIRMedicationKnowledgeMedicineClassification($data[self::FIELD_MEDICINE_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_PACKAGING])) {
            if (is_array($data[self::FIELD_PACKAGING])) {
                foreach($data[self::FIELD_PACKAGING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgePackaging) {
                        $this->addPackaging($v);
                    } else {
                        $this->addPackaging(new FHIRMedicationKnowledgePackaging($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGING] instanceof FHIRMedicationKnowledgePackaging) {
                $this->addPackaging($data[self::FIELD_PACKAGING]);
            } else {
                $this->addPackaging(new FHIRMedicationKnowledgePackaging($data[self::FIELD_PACKAGING]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_USE_ISSUE])) {
            if (is_array($data[self::FIELD_CLINICAL_USE_ISSUE])) {
                foreach($data[self::FIELD_CLINICAL_USE_ISSUE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addClinicalUseIssue($v);
                    } else {
                        $this->addClinicalUseIssue(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CLINICAL_USE_ISSUE] instanceof FHIRReference) {
                $this->addClinicalUseIssue($data[self::FIELD_CLINICAL_USE_ISSUE]);
            } else {
                $this->addClinicalUseIssue(new FHIRReference($data[self::FIELD_CLINICAL_USE_ISSUE]));
            }
        }
        if (isset($data[self::FIELD_STORAGE_GUIDELINE])) {
            if (is_array($data[self::FIELD_STORAGE_GUIDELINE])) {
                foreach($data[self::FIELD_STORAGE_GUIDELINE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeStorageGuideline) {
                        $this->addStorageGuideline($v);
                    } else {
                        $this->addStorageGuideline(new FHIRMedicationKnowledgeStorageGuideline($v));
                    }
                }
            } elseif ($data[self::FIELD_STORAGE_GUIDELINE] instanceof FHIRMedicationKnowledgeStorageGuideline) {
                $this->addStorageGuideline($data[self::FIELD_STORAGE_GUIDELINE]);
            } else {
                $this->addStorageGuideline(new FHIRMedicationKnowledgeStorageGuideline($data[self::FIELD_STORAGE_GUIDELINE]));
            }
        }
        if (isset($data[self::FIELD_REGULATORY])) {
            if (is_array($data[self::FIELD_REGULATORY])) {
                foreach($data[self::FIELD_REGULATORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeRegulatory) {
                        $this->addRegulatory($v);
                    } else {
                        $this->addRegulatory(new FHIRMedicationKnowledgeRegulatory($v));
                    }
                }
            } elseif ($data[self::FIELD_REGULATORY] instanceof FHIRMedicationKnowledgeRegulatory) {
                $this->addRegulatory($data[self::FIELD_REGULATORY]);
            } else {
                $this->addRegulatory(new FHIRMedicationKnowledgeRegulatory($data[self::FIELD_REGULATORY]));
            }
        }
        if (isset($data[self::FIELD_DEFINITIONAL])) {
            if ($data[self::FIELD_DEFINITIONAL] instanceof FHIRMedicationKnowledgeDefinitional) {
                $this->setDefinitional($data[self::FIELD_DEFINITIONAL]);
            } else {
                $this->setDefinitional(new FHIRMedicationKnowledgeDefinitional($data[self::FIELD_DEFINITIONAL]));
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that specifies this medication, or a textual description if no code is
     * available. Usage note: This could be a standard medication code such as a code
     * from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary
     * code, optionally with translations to other code systems.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * A code that specifies this medication, or a textual description if no code is
     * available. Usage note: This could be a standard medication code such as a code
     * from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary
     * code, optionally with translations to other code systems.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is
     * in active use within the drug database or inventory system. The status refers to
     * the validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes
     */
    public function getStatus(): null|FHIRMedicationKnowledgeStatusCodes
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is
     * in active use within the drug database or inventory system. The status refers to
     * the validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRMedicationKnowledgeStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRMedicationKnowledgeStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator or owner of the knowledge or information about the medication.
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
     * The creator or owner of the knowledge or information about the medication.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getIntendedJurisdiction(): null|array
    {
        return $this->intendedJurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $intendedJurisdiction
     * @return static
     */
    public function addIntendedJurisdiction(null|FHIRCodeableConcept $intendedJurisdiction = null): self
    {
        if (null === $intendedJurisdiction) {
            $intendedJurisdiction = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->intendedJurisdiction[] = $intendedJurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $intendedJurisdiction
     * @return static
     */
    public function setIntendedJurisdiction(array $intendedJurisdiction = []): self
    {
        if ([] !== $this->intendedJurisdiction) {
            $this->_trackValuesRemoved(count($this->intendedJurisdiction));
            $this->intendedJurisdiction = [];
        }
        if ([] === $intendedJurisdiction) {
            return $this;
        }
        foreach($intendedJurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addIntendedJurisdiction($v);
            } else {
                $this->addIntendedJurisdiction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getName(): null|array
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $name
     * @return static
     */
    public function addName(null|string|FHIRStringPrimitive|FHIRString $name = null): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueAdded();
        $this->name[] = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[] $name
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
            if ($v instanceof FHIRString) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    public function getRelatedMedicationKnowledge(): null|array
    {
        return $this->relatedMedicationKnowledge;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge
     * @return static
     */
    public function addRelatedMedicationKnowledge(null|FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge = null): self
    {
        if (null === $relatedMedicationKnowledge) {
            $relatedMedicationKnowledge = new FHIRMedicationKnowledgeRelatedMedicationKnowledge();
        }
        $this->_trackValueAdded();
        $this->relatedMedicationKnowledge[] = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[] $relatedMedicationKnowledge
     * @return static
     */
    public function setRelatedMedicationKnowledge(array $relatedMedicationKnowledge = []): self
    {
        if ([] !== $this->relatedMedicationKnowledge) {
            $this->_trackValuesRemoved(count($this->relatedMedicationKnowledge));
            $this->relatedMedicationKnowledge = [];
        }
        if ([] === $relatedMedicationKnowledge) {
            return $this;
        }
        foreach($relatedMedicationKnowledge as $v) {
            if ($v instanceof FHIRMedicationKnowledgeRelatedMedicationKnowledge) {
                $this->addRelatedMedicationKnowledge($v);
            } else {
                $this->addRelatedMedicationKnowledge(new FHIRMedicationKnowledgeRelatedMedicationKnowledge($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAssociatedMedication(): null|array
    {
        return $this->associatedMedication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $associatedMedication
     * @return static
     */
    public function addAssociatedMedication(null|FHIRReference $associatedMedication = null): self
    {
        if (null === $associatedMedication) {
            $associatedMedication = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->associatedMedication[] = $associatedMedication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $associatedMedication
     * @return static
     */
    public function setAssociatedMedication(array $associatedMedication = []): self
    {
        if ([] !== $this->associatedMedication) {
            $this->_trackValuesRemoved(count($this->associatedMedication));
            $this->associatedMedication = [];
        }
        if ([] === $associatedMedication) {
            return $this;
        }
        foreach($associatedMedication as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAssociatedMedication($v);
            } else {
                $this->addAssociatedMedication(new FHIRReference($v));
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
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getProductType(): null|array
    {
        return $this->productType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productType
     * @return static
     */
    public function addProductType(null|FHIRCodeableConcept $productType = null): self
    {
        if (null === $productType) {
            $productType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->productType[] = $productType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $productType
     * @return static
     */
    public function setProductType(array $productType = []): self
    {
        if ([] !== $this->productType) {
            $this->_trackValuesRemoved(count($this->productType));
            $this->productType = [];
        }
        if ([] === $productType) {
            return $this;
        }
        foreach($productType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProductType($v);
            } else {
                $this->addProductType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    public function getMonograph(): null|array
    {
        return $this->monograph;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph $monograph
     * @return static
     */
    public function addMonograph(null|FHIRMedicationKnowledgeMonograph $monograph = null): self
    {
        if (null === $monograph) {
            $monograph = new FHIRMedicationKnowledgeMonograph();
        }
        $this->_trackValueAdded();
        $this->monograph[] = $monograph;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[] $monograph
     * @return static
     */
    public function setMonograph(array $monograph = []): self
    {
        if ([] !== $this->monograph) {
            $this->_trackValuesRemoved(count($this->monograph));
            $this->monograph = [];
        }
        if ([] === $monograph) {
            return $this;
        }
        foreach($monograph as $v) {
            if ($v instanceof FHIRMedicationKnowledgeMonograph) {
                $this->addMonograph($v);
            } else {
                $this->addMonograph(new FHIRMedicationKnowledgeMonograph($v));
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
     * The instructions for preparing the medication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getPreparationInstruction(): null|FHIRMarkdown
    {
        return $this->preparationInstruction;
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
     * The instructions for preparing the medication.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $preparationInstruction
     * @return static
     */
    public function setPreparationInstruction(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $preparationInstruction = null): self
    {
        if (null !== $preparationInstruction && !($preparationInstruction instanceof FHIRMarkdown)) {
            $preparationInstruction = new FHIRMarkdown($preparationInstruction);
        }
        $this->_trackValueSet($this->preparationInstruction, $preparationInstruction);
        $this->preparationInstruction = $preparationInstruction;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    public function getCost(): null|array
    {
        return $this->cost;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $cost
     * @return static
     */
    public function addCost(null|FHIRMedicationKnowledgeCost $cost = null): self
    {
        if (null === $cost) {
            $cost = new FHIRMedicationKnowledgeCost();
        }
        $this->_trackValueAdded();
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[] $cost
     * @return static
     */
    public function setCost(array $cost = []): self
    {
        if ([] !== $this->cost) {
            $this->_trackValuesRemoved(count($this->cost));
            $this->cost = [];
        }
        if ([] === $cost) {
            return $this;
        }
        foreach($cost as $v) {
            if ($v instanceof FHIRMedicationKnowledgeCost) {
                $this->addCost($v);
            } else {
                $this->addCost(new FHIRMedicationKnowledgeCost($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    public function getMonitoringProgram(): null|array
    {
        return $this->monitoringProgram;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram
     * @return static
     */
    public function addMonitoringProgram(null|FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram = null): self
    {
        if (null === $monitoringProgram) {
            $monitoringProgram = new FHIRMedicationKnowledgeMonitoringProgram();
        }
        $this->_trackValueAdded();
        $this->monitoringProgram[] = $monitoringProgram;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[] $monitoringProgram
     * @return static
     */
    public function setMonitoringProgram(array $monitoringProgram = []): self
    {
        if ([] !== $this->monitoringProgram) {
            $this->_trackValuesRemoved(count($this->monitoringProgram));
            $this->monitoringProgram = [];
        }
        if ([] === $monitoringProgram) {
            return $this;
        }
        foreach($monitoringProgram as $v) {
            if ($v instanceof FHIRMedicationKnowledgeMonitoringProgram) {
                $this->addMonitoringProgram($v);
            } else {
                $this->addMonitoringProgram(new FHIRMedicationKnowledgeMonitoringProgram($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline[]
     */
    public function getIndicationGuideline(): null|array
    {
        return $this->indicationGuideline;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline $indicationGuideline
     * @return static
     */
    public function addIndicationGuideline(null|FHIRMedicationKnowledgeIndicationGuideline $indicationGuideline = null): self
    {
        if (null === $indicationGuideline) {
            $indicationGuideline = new FHIRMedicationKnowledgeIndicationGuideline();
        }
        $this->_trackValueAdded();
        $this->indicationGuideline[] = $indicationGuideline;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline[] $indicationGuideline
     * @return static
     */
    public function setIndicationGuideline(array $indicationGuideline = []): self
    {
        if ([] !== $this->indicationGuideline) {
            $this->_trackValuesRemoved(count($this->indicationGuideline));
            $this->indicationGuideline = [];
        }
        if ([] === $indicationGuideline) {
            return $this;
        }
        foreach($indicationGuideline as $v) {
            if ($v instanceof FHIRMedicationKnowledgeIndicationGuideline) {
                $this->addIndicationGuideline($v);
            } else {
                $this->addIndicationGuideline(new FHIRMedicationKnowledgeIndicationGuideline($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    public function getMedicineClassification(): null|array
    {
        return $this->medicineClassification;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $medicineClassification
     * @return static
     */
    public function addMedicineClassification(null|FHIRMedicationKnowledgeMedicineClassification $medicineClassification = null): self
    {
        if (null === $medicineClassification) {
            $medicineClassification = new FHIRMedicationKnowledgeMedicineClassification();
        }
        $this->_trackValueAdded();
        $this->medicineClassification[] = $medicineClassification;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[] $medicineClassification
     * @return static
     */
    public function setMedicineClassification(array $medicineClassification = []): self
    {
        if ([] !== $this->medicineClassification) {
            $this->_trackValuesRemoved(count($this->medicineClassification));
            $this->medicineClassification = [];
        }
        if ([] === $medicineClassification) {
            return $this;
        }
        foreach($medicineClassification as $v) {
            if ($v instanceof FHIRMedicationKnowledgeMedicineClassification) {
                $this->addMedicineClassification($v);
            } else {
                $this->addMedicineClassification(new FHIRMedicationKnowledgeMedicineClassification($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging[]
     */
    public function getPackaging(): null|array
    {
        return $this->packaging;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging $packaging
     * @return static
     */
    public function addPackaging(null|FHIRMedicationKnowledgePackaging $packaging = null): self
    {
        if (null === $packaging) {
            $packaging = new FHIRMedicationKnowledgePackaging();
        }
        $this->_trackValueAdded();
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging[] $packaging
     * @return static
     */
    public function setPackaging(array $packaging = []): self
    {
        if ([] !== $this->packaging) {
            $this->_trackValuesRemoved(count($this->packaging));
            $this->packaging = [];
        }
        if ([] === $packaging) {
            return $this;
        }
        foreach($packaging as $v) {
            if ($v instanceof FHIRMedicationKnowledgePackaging) {
                $this->addPackaging($v);
            } else {
                $this->addPackaging(new FHIRMedicationKnowledgePackaging($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getClinicalUseIssue(): null|array
    {
        return $this->clinicalUseIssue;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $clinicalUseIssue
     * @return static
     */
    public function addClinicalUseIssue(null|FHIRReference $clinicalUseIssue = null): self
    {
        if (null === $clinicalUseIssue) {
            $clinicalUseIssue = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->clinicalUseIssue[] = $clinicalUseIssue;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $clinicalUseIssue
     * @return static
     */
    public function setClinicalUseIssue(array $clinicalUseIssue = []): self
    {
        if ([] !== $this->clinicalUseIssue) {
            $this->_trackValuesRemoved(count($this->clinicalUseIssue));
            $this->clinicalUseIssue = [];
        }
        if ([] === $clinicalUseIssue) {
            return $this;
        }
        foreach($clinicalUseIssue as $v) {
            if ($v instanceof FHIRReference) {
                $this->addClinicalUseIssue($v);
            } else {
                $this->addClinicalUseIssue(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline[]
     */
    public function getStorageGuideline(): null|array
    {
        return $this->storageGuideline;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline $storageGuideline
     * @return static
     */
    public function addStorageGuideline(null|FHIRMedicationKnowledgeStorageGuideline $storageGuideline = null): self
    {
        if (null === $storageGuideline) {
            $storageGuideline = new FHIRMedicationKnowledgeStorageGuideline();
        }
        $this->_trackValueAdded();
        $this->storageGuideline[] = $storageGuideline;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline[] $storageGuideline
     * @return static
     */
    public function setStorageGuideline(array $storageGuideline = []): self
    {
        if ([] !== $this->storageGuideline) {
            $this->_trackValuesRemoved(count($this->storageGuideline));
            $this->storageGuideline = [];
        }
        if ([] === $storageGuideline) {
            return $this;
        }
        foreach($storageGuideline as $v) {
            if ($v instanceof FHIRMedicationKnowledgeStorageGuideline) {
                $this->addStorageGuideline($v);
            } else {
                $this->addStorageGuideline(new FHIRMedicationKnowledgeStorageGuideline($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    public function getRegulatory(): null|array
    {
        return $this->regulatory;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $regulatory
     * @return static
     */
    public function addRegulatory(null|FHIRMedicationKnowledgeRegulatory $regulatory = null): self
    {
        if (null === $regulatory) {
            $regulatory = new FHIRMedicationKnowledgeRegulatory();
        }
        $this->_trackValueAdded();
        $this->regulatory[] = $regulatory;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[] $regulatory
     * @return static
     */
    public function setRegulatory(array $regulatory = []): self
    {
        if ([] !== $this->regulatory) {
            $this->_trackValuesRemoved(count($this->regulatory));
            $this->regulatory = [];
        }
        if ([] === $regulatory) {
            return $this;
        }
        foreach($regulatory as $v) {
            if ($v instanceof FHIRMedicationKnowledgeRegulatory) {
                $this->addRegulatory($v);
            } else {
                $this->addRegulatory(new FHIRMedicationKnowledgeRegulatory($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Along with the link to a Medicinal Product Definition resource, this information
     * provides common definitional elements that are needed to understand the specific
     * medication that is being described.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional
     */
    public function getDefinitional(): null|FHIRMedicationKnowledgeDefinitional
    {
        return $this->definitional;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Along with the link to a Medicinal Product Definition resource, this information
     * provides common definitional elements that are needed to understand the specific
     * medication that is being described.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional $definitional
     * @return static
     */
    public function setDefinitional(null|FHIRMedicationKnowledgeDefinitional $definitional = null): self
    {
        if (null === $definitional) {
            $definitional = new FHIRMedicationKnowledgeDefinitional();
        }
        $this->_trackValueSet($this->definitional, $definitional);
        $this->definitional = $definitional;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIntendedJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INTENDED_JURISDICTION, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getRelatedMedicationKnowledge())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_MEDICATION_KNOWLEDGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAssociatedMedication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ASSOCIATED_MEDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProductType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCT_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMonograph())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MONOGRAPH, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREPARATION_INSTRUCTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCost())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMonitoringProgram())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MONITORING_PROGRAM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIndicationGuideline())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INDICATION_GUIDELINE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMedicineClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MEDICINE_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPackaging())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGING, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClinicalUseIssue())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLINICAL_USE_ISSUE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStorageGuideline())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STORAGE_GUIDELINE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRegulatory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REGULATORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDefinitional())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITIONAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_JURISDICTION])) {
            $v = $this->getIntendedJurisdiction();
            foreach($validationRules[self::FIELD_INTENDED_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_INTENDED_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_JURISDICTION])) {
                        $errs[self::FIELD_INTENDED_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_INTENDED_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
            $v = $this->getRelatedMedicationKnowledge();
            foreach($validationRules[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_RELATED_MEDICATION_KNOWLEDGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
                        $errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] = [];
                    }
                    $errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSOCIATED_MEDICATION])) {
            $v = $this->getAssociatedMedication();
            foreach($validationRules[self::FIELD_ASSOCIATED_MEDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_ASSOCIATED_MEDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSOCIATED_MEDICATION])) {
                        $errs[self::FIELD_ASSOCIATED_MEDICATION] = [];
                    }
                    $errs[self::FIELD_ASSOCIATED_MEDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_TYPE])) {
            $v = $this->getProductType();
            foreach($validationRules[self::FIELD_PRODUCT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_PRODUCT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_TYPE])) {
                        $errs[self::FIELD_PRODUCT_TYPE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONOGRAPH])) {
            $v = $this->getMonograph();
            foreach($validationRules[self::FIELD_MONOGRAPH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MONOGRAPH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONOGRAPH])) {
                        $errs[self::FIELD_MONOGRAPH] = [];
                    }
                    $errs[self::FIELD_MONOGRAPH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREPARATION_INSTRUCTION])) {
            $v = $this->getPreparationInstruction();
            foreach($validationRules[self::FIELD_PREPARATION_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_PREPARATION_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREPARATION_INSTRUCTION])) {
                        $errs[self::FIELD_PREPARATION_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PREPARATION_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST])) {
            $v = $this->getCost();
            foreach($validationRules[self::FIELD_COST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST])) {
                        $errs[self::FIELD_COST] = [];
                    }
                    $errs[self::FIELD_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONITORING_PROGRAM])) {
            $v = $this->getMonitoringProgram();
            foreach($validationRules[self::FIELD_MONITORING_PROGRAM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MONITORING_PROGRAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONITORING_PROGRAM])) {
                        $errs[self::FIELD_MONITORING_PROGRAM] = [];
                    }
                    $errs[self::FIELD_MONITORING_PROGRAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION_GUIDELINE])) {
            $v = $this->getIndicationGuideline();
            foreach($validationRules[self::FIELD_INDICATION_GUIDELINE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_INDICATION_GUIDELINE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION_GUIDELINE])) {
                        $errs[self::FIELD_INDICATION_GUIDELINE] = [];
                    }
                    $errs[self::FIELD_INDICATION_GUIDELINE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICINE_CLASSIFICATION])) {
            $v = $this->getMedicineClassification();
            foreach($validationRules[self::FIELD_MEDICINE_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MEDICINE_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICINE_CLASSIFICATION])) {
                        $errs[self::FIELD_MEDICINE_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_MEDICINE_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGING])) {
            $v = $this->getPackaging();
            foreach($validationRules[self::FIELD_PACKAGING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_PACKAGING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGING])) {
                        $errs[self::FIELD_PACKAGING] = [];
                    }
                    $errs[self::FIELD_PACKAGING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_USE_ISSUE])) {
            $v = $this->getClinicalUseIssue();
            foreach($validationRules[self::FIELD_CLINICAL_USE_ISSUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_CLINICAL_USE_ISSUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_USE_ISSUE])) {
                        $errs[self::FIELD_CLINICAL_USE_ISSUE] = [];
                    }
                    $errs[self::FIELD_CLINICAL_USE_ISSUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STORAGE_GUIDELINE])) {
            $v = $this->getStorageGuideline();
            foreach($validationRules[self::FIELD_STORAGE_GUIDELINE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_STORAGE_GUIDELINE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STORAGE_GUIDELINE])) {
                        $errs[self::FIELD_STORAGE_GUIDELINE] = [];
                    }
                    $errs[self::FIELD_STORAGE_GUIDELINE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATORY])) {
            $v = $this->getRegulatory();
            foreach($validationRules[self::FIELD_REGULATORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_REGULATORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATORY])) {
                        $errs[self::FIELD_REGULATORY] = [];
                    }
                    $errs[self::FIELD_REGULATORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITIONAL])) {
            $v = $this->getDefinitional();
            foreach($validationRules[self::FIELD_DEFINITIONAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_DEFINITIONAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITIONAL])) {
                        $errs[self::FIELD_DEFINITIONAL] = [];
                    }
                    $errs[self::FIELD_DEFINITIONAL][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge
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
        } else if (!($type instanceof FHIRMedicationKnowledge)) {
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
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRMedicationKnowledgeStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHOR === $n->nodeName) {
                $type->setAuthor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INTENDED_JURISDICTION === $n->nodeName) {
                $type->addIntendedJurisdiction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->addName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RELATED_MEDICATION_KNOWLEDGE === $n->nodeName) {
                $type->addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge::xmlUnserialize($n));
            } elseif (self::FIELD_ASSOCIATED_MEDICATION === $n->nodeName) {
                $type->addAssociatedMedication(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCT_TYPE === $n->nodeName) {
                $type->addProductType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MONOGRAPH === $n->nodeName) {
                $type->addMonograph(FHIRMedicationKnowledgeMonograph::xmlUnserialize($n));
            } elseif (self::FIELD_PREPARATION_INSTRUCTION === $n->nodeName) {
                $type->setPreparationInstruction(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COST === $n->nodeName) {
                $type->addCost(FHIRMedicationKnowledgeCost::xmlUnserialize($n));
            } elseif (self::FIELD_MONITORING_PROGRAM === $n->nodeName) {
                $type->addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram::xmlUnserialize($n));
            } elseif (self::FIELD_INDICATION_GUIDELINE === $n->nodeName) {
                $type->addIndicationGuideline(FHIRMedicationKnowledgeIndicationGuideline::xmlUnserialize($n));
            } elseif (self::FIELD_MEDICINE_CLASSIFICATION === $n->nodeName) {
                $type->addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification::xmlUnserialize($n));
            } elseif (self::FIELD_PACKAGING === $n->nodeName) {
                $type->addPackaging(FHIRMedicationKnowledgePackaging::xmlUnserialize($n));
            } elseif (self::FIELD_CLINICAL_USE_ISSUE === $n->nodeName) {
                $type->addClinicalUseIssue(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STORAGE_GUIDELINE === $n->nodeName) {
                $type->addStorageGuideline(FHIRMedicationKnowledgeStorageGuideline::xmlUnserialize($n));
            } elseif (self::FIELD_REGULATORY === $n->nodeName) {
                $type->addRegulatory(FHIRMedicationKnowledgeRegulatory::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITIONAL === $n->nodeName) {
                $type->setDefinitional(FHIRMedicationKnowledgeDefinitional::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $type->addName($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PREPARATION_INSTRUCTION);
        if (null !== $n) {
            $pt = $type->getPreparationInstruction();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPreparationInstruction($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicationKnowledge'), $libxmlOpts);
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
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAuthor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getIntendedJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INTENDED_JURISDICTION);
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
        if ([] !== ($vs = $this->getRelatedMedicationKnowledge())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATED_MEDICATION_KNOWLEDGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAssociatedMedication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ASSOCIATED_MEDICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProductType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMonograph())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MONOGRAPH);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PREPARATION_INSTRUCTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCost())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMonitoringProgram())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MONITORING_PROGRAM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getIndicationGuideline())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INDICATION_GUIDELINE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMedicineClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MEDICINE_CLASSIFICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPackaging())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PACKAGING);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getClinicalUseIssue())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLINICAL_USE_ISSUE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getStorageGuideline())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_STORAGE_GUIDELINE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRegulatory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REGULATORY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDefinitional())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITIONAL);
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
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMedicationKnowledgeStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = $v;
        }
        if ([] !== ($vs = $this->getIntendedJurisdiction())) {
            $out->{self::FIELD_INTENDED_JURISDICTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INTENDED_JURISDICTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_NAME} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getRelatedMedicationKnowledge())) {
            $out->{self::FIELD_RELATED_MEDICATION_KNOWLEDGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATED_MEDICATION_KNOWLEDGE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAssociatedMedication())) {
            $out->{self::FIELD_ASSOCIATED_MEDICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ASSOCIATED_MEDICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProductType())) {
            $out->{self::FIELD_PRODUCT_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRODUCT_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMonograph())) {
            $out->{self::FIELD_MONOGRAPH} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MONOGRAPH}[] = $v;
            }
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREPARATION_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREPARATION_INSTRUCTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCost())) {
            $out->{self::FIELD_COST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COST}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMonitoringProgram())) {
            $out->{self::FIELD_MONITORING_PROGRAM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MONITORING_PROGRAM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getIndicationGuideline())) {
            $out->{self::FIELD_INDICATION_GUIDELINE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INDICATION_GUIDELINE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMedicineClassification())) {
            $out->{self::FIELD_MEDICINE_CLASSIFICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MEDICINE_CLASSIFICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackaging())) {
            $out->{self::FIELD_PACKAGING} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PACKAGING}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClinicalUseIssue())) {
            $out->{self::FIELD_CLINICAL_USE_ISSUE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLINICAL_USE_ISSUE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStorageGuideline())) {
            $out->{self::FIELD_STORAGE_GUIDELINE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_STORAGE_GUIDELINE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRegulatory())) {
            $out->{self::FIELD_REGULATORY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REGULATORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getDefinitional())) {
            $out->{self::FIELD_DEFINITIONAL} = $v;
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