<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 23rd, 2023 13:30+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2023 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeAdministrationGuidelines
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeAdministrationGuidelines extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES;
    const FIELD_DOSAGE = 'dosage';
    const FIELD_INDICATION_CODEABLE_CONCEPT = 'indicationCodeableConcept';
    const FIELD_INDICATION_REFERENCE = 'indicationReference';
    const FIELD_PATIENT_CHARACTERISTICS = 'patientCharacteristics';

    /** @var string */
    private $_xmlns = '';

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    protected ?array $dosage = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $indicationCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $indicationReference = null;

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[]
     */
    protected ?array $patientCharacteristics = [];

    /**
     * Validation map for fields in type MedicationKnowledge.AdministrationGuidelines
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRMedicationKnowledgeAdministrationGuidelines Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledgeAdministrationGuidelines::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOSAGE])) {
            if (is_array($data[self::FIELD_DOSAGE])) {
                foreach($data[self::FIELD_DOSAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeDosage) {
                        $this->addDosage($v);
                    } else {
                        $this->addDosage(new FHIRMedicationKnowledgeDosage($v));
                    }
                }
            } elseif ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationKnowledgeDosage) {
                $this->addDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->addDosage(new FHIRMedicationKnowledgeDosage($data[self::FIELD_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_INDICATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_INDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setIndicationCodeableConcept($data[self::FIELD_INDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setIndicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_INDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_INDICATION_REFERENCE])) {
            if ($data[self::FIELD_INDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setIndicationReference($data[self::FIELD_INDICATION_REFERENCE]);
            } else {
                $this->setIndicationReference(new FHIRReference($data[self::FIELD_INDICATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_CHARACTERISTICS])) {
            if (is_array($data[self::FIELD_PATIENT_CHARACTERISTICS])) {
                foreach($data[self::FIELD_PATIENT_CHARACTERISTICS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgePatientCharacteristics) {
                        $this->addPatientCharacteristics($v);
                    } else {
                        $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics($v));
                    }
                }
            } elseif ($data[self::FIELD_PATIENT_CHARACTERISTICS] instanceof FHIRMedicationKnowledgePatientCharacteristics) {
                $this->addPatientCharacteristics($data[self::FIELD_PATIENT_CHARACTERISTICS]);
            } else {
                $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics($data[self::FIELD_PATIENT_CHARACTERISTICS]));
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
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MedicationKnowledgeAdministrationGuidelines{$xmlns}></MedicationKnowledgeAdministrationGuidelines>";
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public function getDosage(): ?array
    {
        return $this->dosage;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage $dosage
     * @return static
     */
    public function addDosage(?FHIRMedicationKnowledgeDosage $dosage = null): object
    {
        $this->_trackValueAdded();
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[] $dosage
     * @return static
     */
    public function setDosage(array $dosage = []): object
    {
        if ([] !== $this->dosage) {
            $this->_trackValuesRemoved(count($this->dosage));
            $this->dosage = [];
        }
        if ([] === $dosage) {
            return $this;
        }
        foreach($dosage as $v) {
            if ($v instanceof FHIRMedicationKnowledgeDosage) {
                $this->addDosage($v);
            } else {
                $this->addDosage(new FHIRMedicationKnowledgeDosage($v));
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
     * Indication for use that apply to the specific administration guidelines.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIndicationCodeableConcept(): ?FHIRCodeableConcept
    {
        return $this->indicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $indicationCodeableConcept
     * @return static
     */
    public function setIndicationCodeableConcept(?FHIRCodeableConcept $indicationCodeableConcept = null): object
    {
        $this->_trackValueSet($this->indicationCodeableConcept, $indicationCodeableConcept);
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getIndicationReference(): ?FHIRReference
    {
        return $this->indicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $indicationReference
     * @return static
     */
    public function setIndicationReference(?FHIRReference $indicationReference = null): object
    {
        $this->_trackValueSet($this->indicationReference, $indicationReference);
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[]
     */
    public function getPatientCharacteristics(): ?array
    {
        return $this->patientCharacteristics;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics $patientCharacteristics
     * @return static
     */
    public function addPatientCharacteristics(?FHIRMedicationKnowledgePatientCharacteristics $patientCharacteristics = null): object
    {
        $this->_trackValueAdded();
        $this->patientCharacteristics[] = $patientCharacteristics;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[] $patientCharacteristics
     * @return static
     */
    public function setPatientCharacteristics(array $patientCharacteristics = []): object
    {
        if ([] !== $this->patientCharacteristics) {
            $this->_trackValuesRemoved(count($this->patientCharacteristics));
            $this->patientCharacteristics = [];
        }
        if ([] === $patientCharacteristics) {
            return $this;
        }
        foreach($patientCharacteristics as $v) {
            if ($v instanceof FHIRMedicationKnowledgePatientCharacteristics) {
                $this->addPatientCharacteristics($v);
            } else {
                $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics($v));
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
        return self::$_validationRules;
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
        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIndicationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INDICATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIndicationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INDICATION_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPatientCharacteristics())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PATIENT_CHARACTERISTICS, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getIndicationCodeableConcept();
            foreach($validationRules[self::FIELD_INDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES, self::FIELD_INDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_INDICATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_INDICATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION_REFERENCE])) {
            $v = $this->getIndicationReference();
            foreach($validationRules[self::FIELD_INDICATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES, self::FIELD_INDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION_REFERENCE])) {
                        $errs[self::FIELD_INDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_INDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_CHARACTERISTICS])) {
            $v = $this->getPatientCharacteristics();
            foreach($validationRules[self::FIELD_PATIENT_CHARACTERISTICS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES, self::FIELD_PATIENT_CHARACTERISTICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_CHARACTERISTICS])) {
                        $errs[self::FIELD_PATIENT_CHARACTERISTICS] = [];
                    }
                    $errs[self::FIELD_PATIENT_CHARACTERISTICS][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRMedicationKnowledgeAdministrationGuidelines(null);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledgeAdministrationGuidelines)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize - $type must be instance of \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_DOSAGE === $n->nodeName) {
                $type->addDosage(FHIRMedicationKnowledgeDosage::xmlUnserialize($n));
            } elseif (self::FIELD_INDICATION_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setIndicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INDICATION_REFERENCE === $n->nodeName) {
                $type->setIndicationReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT_CHARACTERISTICS === $n->nodeName) {
                $type->addPatientCharacteristics(FHIRMedicationKnowledgePatientCharacteristics::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DOSAGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getIndicationCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INDICATION_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIndicationReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INDICATION_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPatientCharacteristics())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT_CHARACTERISTICS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getDosage())) {
            $out->{self::FIELD_DOSAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DOSAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getIndicationCodeableConcept())) {
            $out->{self::FIELD_INDICATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getIndicationReference())) {
            $out->{self::FIELD_INDICATION_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getPatientCharacteristics())) {
            $out->{self::FIELD_PATIENT_CHARACTERISTICS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PATIENT_CHARACTERISTICS}[] = $v;
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