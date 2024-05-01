<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use HL7\FHIR\DSTU1\FHIRCodePrimitive;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCode;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationDispenseStatus;
use HL7\FHIR\DSTU1\FHIRElement\FHIRNarrative;
use HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRContainedTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRTypeMap;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * Dispensing a medication to a named patient. This includes a description of the
 * supply provided and the instructions for administering the medication.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationDispense
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRMedicationDispense extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PATIENT = 'patient';
    const FIELD_DISPENSER = 'dispenser';
    const FIELD_AUTHORIZING_PRESCRIPTION = 'authorizingPrescription';
    const FIELD_DISPENSE = 'dispense';
    const FIELD_SUBSTITUTION = 'substitution';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationDispenseStatus
     */
    protected null|FHIRMedicationDispenseStatus $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $dispenser = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $authorizingPrescription = [];
    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates the details of the dispense event such as the days supply and quantity
     * of medication dispensed.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense[]
     */
    protected null|array $dispense = [];
    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but doesn't happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitition did or did not happen and why.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    protected null|FHIRMedicationDispenseSubstitution $substitution = null;

    /**
     * Validation map for fields in type MedicationDispense
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedicationDispense Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMedicationDispenseStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationDispenseStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationDispenseStatus([FHIRMedicationDispenseStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRMedicationDispenseStatus($ext));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRResourceReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRResourceReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_DISPENSER])) {
            if ($data[self::FIELD_DISPENSER] instanceof FHIRResourceReference) {
                $this->setDispenser($data[self::FIELD_DISPENSER]);
            } else {
                $this->setDispenser(new FHIRResourceReference($data[self::FIELD_DISPENSER]));
            }
        }
        if (isset($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
            if (is_array($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
                foreach($data[self::FIELD_AUTHORIZING_PRESCRIPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addAuthorizingPrescription($v);
                    } else {
                        $this->addAuthorizingPrescription(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHORIZING_PRESCRIPTION] instanceof FHIRResourceReference) {
                $this->addAuthorizingPrescription($data[self::FIELD_AUTHORIZING_PRESCRIPTION]);
            } else {
                $this->addAuthorizingPrescription(new FHIRResourceReference($data[self::FIELD_AUTHORIZING_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DISPENSE])) {
            if (is_array($data[self::FIELD_DISPENSE])) {
                foreach($data[self::FIELD_DISPENSE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationDispenseDispense) {
                        $this->addDispense($v);
                    } else {
                        $this->addDispense(new FHIRMedicationDispenseDispense($v));
                    }
                }
            } elseif ($data[self::FIELD_DISPENSE] instanceof FHIRMedicationDispenseDispense) {
                $this->addDispense($data[self::FIELD_DISPENSE]);
            } else {
                $this->addDispense(new FHIRMedicationDispenseDispense($data[self::FIELD_DISPENSE]));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationDispenseSubstitution) {
                $this->setSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->setSubstitution(new FHIRMedicationDispenseSubstitution($data[self::FIELD_SUBSTITUTION]));
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationDispenseStatus
     */
    public function getStatus(): null|FHIRMedicationDispenseStatus
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationDispenseStatus $status
     * @return static
     */
    public function setStatus(null|FHIRMedicationDispenseStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRMedicationDispenseStatus();
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
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getPatient(): null|FHIRResourceReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $patient
     * @return static
     */
    public function setPatient(null|FHIRResourceReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getDispenser(): null|FHIRResourceReference
    {
        return $this->dispenser;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $dispenser
     * @return static
     */
    public function setDispenser(null|FHIRResourceReference $dispenser = null): self
    {
        if (null === $dispenser) {
            $dispenser = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->dispenser, $dispenser);
        $this->dispenser = $dispenser;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getAuthorizingPrescription(): null|array
    {
        return $this->authorizingPrescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $authorizingPrescription
     * @return static
     */
    public function addAuthorizingPrescription(null|FHIRResourceReference $authorizingPrescription = null): self
    {
        if (null === $authorizingPrescription) {
            $authorizingPrescription = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->authorizingPrescription[] = $authorizingPrescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[] $authorizingPrescription
     * @return static
     */
    public function setAuthorizingPrescription(array $authorizingPrescription = []): self
    {
        if ([] !== $this->authorizingPrescription) {
            $this->_trackValuesRemoved(count($this->authorizingPrescription));
            $this->authorizingPrescription = [];
        }
        if ([] === $authorizingPrescription) {
            return $this;
        }
        foreach($authorizingPrescription as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addAuthorizingPrescription($v);
            } else {
                $this->addAuthorizingPrescription(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates the details of the dispense event such as the days supply and quantity
     * of medication dispensed.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense[]
     */
    public function getDispense(): null|array
    {
        return $this->dispense;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates the details of the dispense event such as the days supply and quantity
     * of medication dispensed.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense $dispense
     * @return static
     */
    public function addDispense(null|FHIRMedicationDispenseDispense $dispense = null): self
    {
        if (null === $dispense) {
            $dispense = new FHIRMedicationDispenseDispense();
        }
        $this->_trackValueAdded();
        $this->dispense[] = $dispense;
        return $this;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates the details of the dispense event such as the days supply and quantity
     * of medication dispensed.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense[] $dispense
     * @return static
     */
    public function setDispense(array $dispense = []): self
    {
        if ([] !== $this->dispense) {
            $this->_trackValuesRemoved(count($this->dispense));
            $this->dispense = [];
        }
        if ([] === $dispense) {
            return $this;
        }
        foreach($dispense as $v) {
            if ($v instanceof FHIRMedicationDispenseDispense) {
                $this->addDispense($v);
            } else {
                $this->addDispense(new FHIRMedicationDispenseDispense($v));
            }
        }
        return $this;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but doesn't happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitition did or did not happen and why.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution(): null|FHIRMedicationDispenseSubstitution
    {
        return $this->substitution;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but doesn't happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitition did or did not happen and why.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $substitution
     * @return static
     */
    public function setSubstitution(null|FHIRMedicationDispenseSubstitution $substitution = null): self
    {
        if (null === $substitution) {
            $substitution = new FHIRMedicationDispenseSubstitution();
        }
        $this->_trackValueSet($this->substitution, $substitution);
        $this->substitution = $substitution;
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDispenser())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHORIZING_PRESCRIPTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDispense())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DISPENSE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTITUTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSER])) {
            $v = $this->getDispenser();
            foreach($validationRules[self::FIELD_DISPENSER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DISPENSER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSER])) {
                        $errs[self::FIELD_DISPENSER] = [];
                    }
                    $errs[self::FIELD_DISPENSER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
            $v = $this->getAuthorizingPrescription();
            foreach($validationRules[self::FIELD_AUTHORIZING_PRESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_AUTHORIZING_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
                        $errs[self::FIELD_AUTHORIZING_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_AUTHORIZING_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSE])) {
            $v = $this->getDispense();
            foreach($validationRules[self::FIELD_DISPENSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DISPENSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE])) {
                        $errs[self::FIELD_DISPENSE] = [];
                    }
                    $errs[self::FIELD_DISPENSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTITUTION])) {
            $v = $this->getSubstitution();
            foreach($validationRules[self::FIELD_SUBSTITUTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTITUTION])) {
                        $errs[self::FIELD_SUBSTITUTION] = [];
                    }
                    $errs[self::FIELD_SUBSTITUTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense
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
        } else if (!($type instanceof FHIRMedicationDispense)) {
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
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRMedicationDispenseStatus::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISPENSER === $n->nodeName) {
                $type->setDispenser(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHORIZING_PRESCRIPTION === $n->nodeName) {
                $type->addAuthorizingPrescription(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISPENSE === $n->nodeName) {
                $type->addDispense(FHIRMedicationDispenseDispense::xmlUnserialize($n));
            } elseif (self::FIELD_SUBSTITUTION === $n->nodeName) {
                $type->setSubstitution(FHIRMedicationDispenseSubstitution::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicationDispense'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDispenser())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISPENSER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AUTHORIZING_PRESCRIPTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDispense())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DISPENSE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBSTITUTION);
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
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMedicationDispenseStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getDispenser())) {
            $out->{self::FIELD_DISPENSER} = $v;
        }
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            $out->{self::FIELD_AUTHORIZING_PRESCRIPTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AUTHORIZING_PRESCRIPTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDispense())) {
            $out->{self::FIELD_DISPENSE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DISPENSE}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            $out->{self::FIELD_SUBSTITUTION} = $v;
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