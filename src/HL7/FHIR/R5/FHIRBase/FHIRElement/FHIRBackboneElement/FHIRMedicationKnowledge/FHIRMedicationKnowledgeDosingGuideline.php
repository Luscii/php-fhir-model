<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeDosingGuideline
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeDosingGuideline extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE;

    const FIELD_TREATMENT_INTENT = 'treatmentIntent';
    const FIELD_DOSAGE = 'dosage';
    const FIELD_ADMINISTRATION_TREATMENT = 'administrationTreatment';
    const FIELD_PATIENT_CHARACTERISTIC = 'patientCharacteristic';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $treatmentIntent = null;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    protected null|array $dosage = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $administrationTreatment = null;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[]
     */
    protected null|array $patientCharacteristic = [];

    /**
     * Validation map for fields in type MedicationKnowledge.DosingGuideline
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedicationKnowledgeDosingGuideline Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TREATMENT_INTENT])) {
            if ($data[self::FIELD_TREATMENT_INTENT] instanceof FHIRCodeableConcept) {
                $this->setTreatmentIntent($data[self::FIELD_TREATMENT_INTENT]);
            } else {
                $this->setTreatmentIntent(new FHIRCodeableConcept($data[self::FIELD_TREATMENT_INTENT]));
            }
        }
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
        if (isset($data[self::FIELD_ADMINISTRATION_TREATMENT])) {
            if ($data[self::FIELD_ADMINISTRATION_TREATMENT] instanceof FHIRCodeableConcept) {
                $this->setAdministrationTreatment($data[self::FIELD_ADMINISTRATION_TREATMENT]);
            } else {
                $this->setAdministrationTreatment(new FHIRCodeableConcept($data[self::FIELD_ADMINISTRATION_TREATMENT]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_PATIENT_CHARACTERISTIC])) {
                foreach($data[self::FIELD_PATIENT_CHARACTERISTIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgePatientCharacteristic) {
                        $this->addPatientCharacteristic($v);
                    } else {
                        $this->addPatientCharacteristic(new FHIRMedicationKnowledgePatientCharacteristic($v));
                    }
                }
            } elseif ($data[self::FIELD_PATIENT_CHARACTERISTIC] instanceof FHIRMedicationKnowledgePatientCharacteristic) {
                $this->addPatientCharacteristic($data[self::FIELD_PATIENT_CHARACTERISTIC]);
            } else {
                $this->addPatientCharacteristic(new FHIRMedicationKnowledgePatientCharacteristic($data[self::FIELD_PATIENT_CHARACTERISTIC]));
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
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTreatmentIntent(): null|FHIRCodeableConcept
    {
        return $this->treatmentIntent;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $treatmentIntent
     * @return static
     */
    public function setTreatmentIntent(null|FHIRCodeableConcept $treatmentIntent = null): self
    {
        if (null === $treatmentIntent) {
            $treatmentIntent = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->treatmentIntent, $treatmentIntent);
        $this->treatmentIntent = $treatmentIntent;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public function getDosage(): null|array
    {
        return $this->dosage;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage $dosage
     * @return static
     */
    public function addDosage(null|FHIRMedicationKnowledgeDosage $dosage = null): self
    {
        if (null === $dosage) {
            $dosage = new FHIRMedicationKnowledgeDosage();
        }
        $this->_trackValueAdded();
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[] $dosage
     * @return static
     */
    public function setDosage(array $dosage = []): self
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
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAdministrationTreatment(): null|FHIRCodeableConcept
    {
        return $this->administrationTreatment;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $administrationTreatment
     * @return static
     */
    public function setAdministrationTreatment(null|FHIRCodeableConcept $administrationTreatment = null): self
    {
        if (null === $administrationTreatment) {
            $administrationTreatment = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->administrationTreatment, $administrationTreatment);
        $this->administrationTreatment = $administrationTreatment;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[]
     */
    public function getPatientCharacteristic(): null|array
    {
        return $this->patientCharacteristic;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic $patientCharacteristic
     * @return static
     */
    public function addPatientCharacteristic(null|FHIRMedicationKnowledgePatientCharacteristic $patientCharacteristic = null): self
    {
        if (null === $patientCharacteristic) {
            $patientCharacteristic = new FHIRMedicationKnowledgePatientCharacteristic();
        }
        $this->_trackValueAdded();
        $this->patientCharacteristic[] = $patientCharacteristic;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[] $patientCharacteristic
     * @return static
     */
    public function setPatientCharacteristic(array $patientCharacteristic = []): self
    {
        if ([] !== $this->patientCharacteristic) {
            $this->_trackValuesRemoved(count($this->patientCharacteristic));
            $this->patientCharacteristic = [];
        }
        if ([] === $patientCharacteristic) {
            return $this;
        }
        foreach($patientCharacteristic as $v) {
            if ($v instanceof FHIRMedicationKnowledgePatientCharacteristic) {
                $this->addPatientCharacteristic($v);
            } else {
                $this->addPatientCharacteristic(new FHIRMedicationKnowledgePatientCharacteristic($v));
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
        if (null !== ($v = $this->getTreatmentIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TREATMENT_INTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAdministrationTreatment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTRATION_TREATMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPatientCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PATIENT_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TREATMENT_INTENT])) {
            $v = $this->getTreatmentIntent();
            foreach($validationRules[self::FIELD_TREATMENT_INTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_TREATMENT_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TREATMENT_INTENT])) {
                        $errs[self::FIELD_TREATMENT_INTENT] = [];
                    }
                    $errs[self::FIELD_TREATMENT_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRATION_TREATMENT])) {
            $v = $this->getAdministrationTreatment();
            foreach($validationRules[self::FIELD_ADMINISTRATION_TREATMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_ADMINISTRATION_TREATMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRATION_TREATMENT])) {
                        $errs[self::FIELD_ADMINISTRATION_TREATMENT] = [];
                    }
                    $errs[self::FIELD_ADMINISTRATION_TREATMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_CHARACTERISTIC])) {
            $v = $this->getPatientCharacteristic();
            foreach($validationRules[self::FIELD_PATIENT_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_PATIENT_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_CHARACTERISTIC])) {
                        $errs[self::FIELD_PATIENT_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_PATIENT_CHARACTERISTIC][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline
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
        } else if (!($type instanceof FHIRMedicationKnowledgeDosingGuideline)) {
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
            if (self::FIELD_TREATMENT_INTENT === $n->nodeName) {
                $type->setTreatmentIntent(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DOSAGE === $n->nodeName) {
                $type->addDosage(FHIRMedicationKnowledgeDosage::xmlUnserialize($n));
            } elseif (self::FIELD_ADMINISTRATION_TREATMENT === $n->nodeName) {
                $type->setAdministrationTreatment(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT_CHARACTERISTIC === $n->nodeName) {
                $type->addPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicationKnowledgeDosingGuideline'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getTreatmentIntent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TREATMENT_INTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
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
        if (null !== ($v = $this->getAdministrationTreatment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADMINISTRATION_TREATMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPatientCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT_CHARACTERISTIC);
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
        if (null !== ($v = $this->getTreatmentIntent())) {
            $out->{self::FIELD_TREATMENT_INTENT} = $v;
        }
        if ([] !== ($vs = $this->getDosage())) {
            $out->{self::FIELD_DOSAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DOSAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAdministrationTreatment())) {
            $out->{self::FIELD_ADMINISTRATION_TREATMENT} = $v;
        }
        if ([] !== ($vs = $this->getPatientCharacteristic())) {
            $out->{self::FIELD_PATIENT_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PATIENT_CHARACTERISTIC}[] = $v;
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