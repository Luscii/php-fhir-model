<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;

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
use HL7\FHIR\DSTU2\FHIRDateTimePrimitive;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCode;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRId;
use HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationDispenseStatus;
use HL7\FHIR\DSTU2\FHIRElement\FHIRMeta;
use HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative;
use HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use HL7\FHIR\DSTU2\FHIRElement\FHIRReference;
use HL7\FHIR\DSTU2\FHIRElement\FHIRString;
use HL7\FHIR\DSTU2\FHIRElement\FHIRUri;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;
use HL7\FHIR\DSTU2\FHIRStringPrimitive;
use HL7\FHIR\DSTU2\FHIRUriPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRContainedTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeMap;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * Indicates that a medication product is to be or has been dispensed for a named
 * person/patient. This includes a description of the medication product (supply)
 * provided and the instructions for administering the medication. The medication
 * dispense is the result of a pharmacy system responding to a medication order.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationDispense
 * @package \HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationDispense extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PATIENT = 'patient';
    const FIELD_DISPENSER = 'dispenser';
    const FIELD_AUTHORIZING_PRESCRIPTION = 'authorizingPrescription';
    const FIELD_TYPE = 'type';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_DAYS_SUPPLY = 'daysSupply';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_WHEN_PREPARED = 'whenPrepared';
    const FIELD_WHEN_PREPARED_EXT = '_whenPrepared';
    const FIELD_WHEN_HANDED_OVER = 'whenHandedOver';
    const FIELD_WHEN_HANDED_OVER_EXT = '_whenHandedOver';
    const FIELD_DESTINATION = 'destination';
    const FIELD_RECEIVER = 'receiver';
    const FIELD_NOTE = 'note';
    const FIELD_NOTE_EXT = '_note';
    const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    const FIELD_SUBSTITUTION = 'substitution';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier assigned by the dispensing facility - this is an identifier assigned
     * outside FHIR.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * A code specifying the state of the dispense event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationDispenseStatus
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
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual responsible for dispensing the medication.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $dispenser = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $authorizingPrescription = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected null|FHIRSimpleQuantity $quantity = null;
    /**
     * The amount of medication expressed as a timing amount.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected null|FHIRSimpleQuantity $daysSupply = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $medicationCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $medicationReference = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $whenPrepared = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $whenHandedOver = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $destination = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $receiver = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $note = null;
    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction[]
     */
    protected null|array $dosageInstruction = [];
    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
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
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_DISPENSER])) {
            if ($data[self::FIELD_DISPENSER] instanceof FHIRReference) {
                $this->setDispenser($data[self::FIELD_DISPENSER]);
            } else {
                $this->setDispenser(new FHIRReference($data[self::FIELD_DISPENSER]));
            }
        }
        if (isset($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
            if (is_array($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
                foreach($data[self::FIELD_AUTHORIZING_PRESCRIPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAuthorizingPrescription($v);
                    } else {
                        $this->addAuthorizingPrescription(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHORIZING_PRESCRIPTION] instanceof FHIRReference) {
                $this->addAuthorizingPrescription($data[self::FIELD_AUTHORIZING_PRESCRIPTION]);
            } else {
                $this->addAuthorizingPrescription(new FHIRReference($data[self::FIELD_AUTHORIZING_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DAYS_SUPPLY])) {
            if ($data[self::FIELD_DAYS_SUPPLY] instanceof FHIRSimpleQuantity) {
                $this->setDaysSupply($data[self::FIELD_DAYS_SUPPLY]);
            } else {
                $this->setDaysSupply(new FHIRSimpleQuantity($data[self::FIELD_DAYS_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setMedicationCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setMedicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_REFERENCE])) {
            if ($data[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setMedicationReference($data[self::FIELD_MEDICATION_REFERENCE]);
            } else {
                $this->setMedicationReference(new FHIRReference($data[self::FIELD_MEDICATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_WHEN_PREPARED]) || isset($data[self::FIELD_WHEN_PREPARED_EXT])) {
            $value = $data[self::FIELD_WHEN_PREPARED] ?? null;
            $ext = (isset($data[self::FIELD_WHEN_PREPARED_EXT]) && is_array($data[self::FIELD_WHEN_PREPARED_EXT])) ? $data[self::FIELD_WHEN_PREPARED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setWhenPrepared($value);
                } else if (is_array($value)) {
                    $this->setWhenPrepared(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setWhenPrepared(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWhenPrepared(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN_HANDED_OVER]) || isset($data[self::FIELD_WHEN_HANDED_OVER_EXT])) {
            $value = $data[self::FIELD_WHEN_HANDED_OVER] ?? null;
            $ext = (isset($data[self::FIELD_WHEN_HANDED_OVER_EXT]) && is_array($data[self::FIELD_WHEN_HANDED_OVER_EXT])) ? $data[self::FIELD_WHEN_HANDED_OVER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setWhenHandedOver($value);
                } else if (is_array($value)) {
                    $this->setWhenHandedOver(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setWhenHandedOver(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWhenHandedOver(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if ($data[self::FIELD_DESTINATION] instanceof FHIRReference) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->setDestination(new FHIRReference($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_RECEIVER])) {
            if (is_array($data[self::FIELD_RECEIVER])) {
                foreach($data[self::FIELD_RECEIVER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReceiver($v);
                    } else {
                        $this->addReceiver(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RECEIVER] instanceof FHIRReference) {
                $this->addReceiver($data[self::FIELD_RECEIVER]);
            } else {
                $this->addReceiver(new FHIRReference($data[self::FIELD_RECEIVER]));
            }
        }
        if (isset($data[self::FIELD_NOTE]) || isset($data[self::FIELD_NOTE_EXT])) {
            $value = $data[self::FIELD_NOTE] ?? null;
            $ext = (isset($data[self::FIELD_NOTE_EXT]) && is_array($data[self::FIELD_NOTE_EXT])) ? $data[self::FIELD_NOTE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNote($value);
                } else if (is_array($value)) {
                    $this->setNote(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNote(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNote(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DOSAGE_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($data[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationDispenseDosageInstruction) {
                        $this->addDosageInstruction($v);
                    } else {
                        $this->addDosageInstruction(new FHIRMedicationDispenseDosageInstruction($v));
                    }
                }
            } elseif ($data[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRMedicationDispenseDosageInstruction) {
                $this->addDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $this->addDosageInstruction(new FHIRMedicationDispenseDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]));
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationDispenseStatus
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationDispenseStatus $status
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getDispenser(): null|FHIRReference
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $dispenser
     * @return static
     */
    public function setDispenser(null|FHIRReference $dispenser = null): self
    {
        if (null === $dispenser) {
            $dispenser = new FHIRReference();
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
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $authorizingPrescription
     * @return static
     */
    public function addAuthorizingPrescription(null|FHIRReference $authorizingPrescription = null): self
    {
        if (null === $authorizingPrescription) {
            $authorizingPrescription = new FHIRReference();
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
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRReference[] $authorizingPrescription
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
            if ($v instanceof FHIRReference) {
                $this->addAuthorizingPrescription($v);
            } else {
                $this->addAuthorizingPrescription(new FHIRReference($v));
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
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
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
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity(): null|FHIRSimpleQuantity
    {
        return $this->quantity;
    }

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRSimpleQuantity $quantity = null): self
    {
        if (null === $quantity) {
            $quantity = new FHIRSimpleQuantity();
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDaysSupply(): null|FHIRSimpleQuantity
    {
        return $this->daysSupply;
    }

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $daysSupply
     * @return static
     */
    public function setDaysSupply(null|FHIRSimpleQuantity $daysSupply = null): self
    {
        if (null === $daysSupply) {
            $daysSupply = new FHIRSimpleQuantity();
        }
        $this->_trackValueSet($this->daysSupply, $daysSupply);
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return static
     */
    public function setMedicationCodeableConcept(null|FHIRCodeableConcept $medicationCodeableConcept = null): self
    {
        if (null === $medicationCodeableConcept) {
            $medicationCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->medicationCodeableConcept, $medicationCodeableConcept);
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getMedicationReference(): null|FHIRReference
    {
        return $this->medicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $medicationReference
     * @return static
     */
    public function setMedicationReference(null|FHIRReference $medicationReference = null): self
    {
        if (null === $medicationReference) {
            $medicationReference = new FHIRReference();
        }
        $this->_trackValueSet($this->medicationReference, $medicationReference);
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getWhenPrepared(): null|FHIRDateTime
    {
        return $this->whenPrepared;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRDateTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $whenPrepared
     * @return static
     */
    public function setWhenPrepared(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $whenPrepared = null): self
    {
        if (null !== $whenPrepared && !($whenPrepared instanceof FHIRDateTime)) {
            $whenPrepared = new FHIRDateTime($whenPrepared);
        }
        $this->_trackValueSet($this->whenPrepared, $whenPrepared);
        $this->whenPrepared = $whenPrepared;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getWhenHandedOver(): null|FHIRDateTime
    {
        return $this->whenHandedOver;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRDateTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $whenHandedOver
     * @return static
     */
    public function setWhenHandedOver(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $whenHandedOver = null): self
    {
        if (null !== $whenHandedOver && !($whenHandedOver instanceof FHIRDateTime)) {
            $whenHandedOver = new FHIRDateTime($whenHandedOver);
        }
        $this->_trackValueSet($this->whenHandedOver, $whenHandedOver);
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getDestination(): null|FHIRReference
    {
        return $this->destination;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $destination
     * @return static
     */
    public function setDestination(null|FHIRReference $destination = null): self
    {
        if (null === $destination) {
            $destination = new FHIRReference();
        }
        $this->_trackValueSet($this->destination, $destination);
        $this->destination = $destination;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getReceiver(): null|array
    {
        return $this->receiver;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $receiver
     * @return static
     */
    public function addReceiver(null|FHIRReference $receiver = null): self
    {
        if (null === $receiver) {
            $receiver = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRReference[] $receiver
     * @return static
     */
    public function setReceiver(array $receiver = []): self
    {
        if ([] !== $this->receiver) {
            $this->_trackValuesRemoved(count($this->receiver));
            $this->receiver = [];
        }
        if ([] === $receiver) {
            return $this;
        }
        foreach($receiver as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReceiver($v);
            } else {
                $this->addReceiver(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getNote(): null|FHIRString
    {
        return $this->note;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $note
     * @return static
     */
    public function setNote(null|string|FHIRStringPrimitive|FHIRString $note = null): self
    {
        if (null !== $note && !($note instanceof FHIRString)) {
            $note = new FHIRString($note);
        }
        $this->_trackValueSet($this->note, $note);
        $this->note = $note;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction[]
     */
    public function getDosageInstruction(): null|array
    {
        return $this->dosageInstruction;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(null|FHIRMedicationDispenseDosageInstruction $dosageInstruction = null): self
    {
        if (null === $dosageInstruction) {
            $dosageInstruction = new FHIRMedicationDispenseDosageInstruction();
        }
        $this->_trackValueAdded();
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction[] $dosageInstruction
     * @return static
     */
    public function setDosageInstruction(array $dosageInstruction = []): self
    {
        if ([] !== $this->dosageInstruction) {
            $this->_trackValuesRemoved(count($this->dosageInstruction));
            $this->dosageInstruction = [];
        }
        if ([] === $dosageInstruction) {
            return $this;
        }
        foreach($dosageInstruction as $v) {
            if ($v instanceof FHIRMedicationDispenseDosageInstruction) {
                $this->addDosageInstruction($v);
            } else {
                $this->addDosageInstruction(new FHIRMedicationDispenseDosageInstruction($v));
            }
        }
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution(): null|FHIRMedicationDispenseSubstitution
    {
        return $this->substitution;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $substitution
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDaysSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAYS_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_PREPARED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_HANDED_OVER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESTINATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReceiver())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RECEIVER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNote())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE_INSTRUCTION, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAYS_SUPPLY])) {
            $v = $this->getDaysSupply();
            foreach($validationRules[self::FIELD_DAYS_SUPPLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DAYS_SUPPLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_SUPPLY])) {
                        $errs[self::FIELD_DAYS_SUPPLY] = [];
                    }
                    $errs[self::FIELD_DAYS_SUPPLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_REFERENCE])) {
            $v = $this->getMedicationReference();
            foreach($validationRules[self::FIELD_MEDICATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_PREPARED])) {
            $v = $this->getWhenPrepared();
            foreach($validationRules[self::FIELD_WHEN_PREPARED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_WHEN_PREPARED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_PREPARED])) {
                        $errs[self::FIELD_WHEN_PREPARED] = [];
                    }
                    $errs[self::FIELD_WHEN_PREPARED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_HANDED_OVER])) {
            $v = $this->getWhenHandedOver();
            foreach($validationRules[self::FIELD_WHEN_HANDED_OVER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_WHEN_HANDED_OVER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_HANDED_OVER])) {
                        $errs[self::FIELD_WHEN_HANDED_OVER] = [];
                    }
                    $errs[self::FIELD_WHEN_HANDED_OVER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESTINATION])) {
            $v = $this->getDestination();
            foreach($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESTINATION])) {
                        $errs[self::FIELD_DESTINATION] = [];
                    }
                    $errs[self::FIELD_DESTINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECEIVER])) {
            $v = $this->getReceiver();
            foreach($validationRules[self::FIELD_RECEIVER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_RECEIVER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECEIVER])) {
                        $errs[self::FIELD_RECEIVER] = [];
                    }
                    $errs[self::FIELD_RECEIVER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE_INSTRUCTION])) {
            $v = $this->getDosageInstruction();
            foreach($validationRules[self::FIELD_DOSAGE_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE, self::FIELD_DOSAGE_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE_INSTRUCTION])) {
                        $errs[self::FIELD_DOSAGE_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_DOSAGE_INSTRUCTION][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISPENSER === $n->nodeName) {
                $type->setDispenser(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHORIZING_PRESCRIPTION === $n->nodeName) {
                $type->addAuthorizingPrescription(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_DAYS_SUPPLY === $n->nodeName) {
                $type->setDaysSupply(FHIRSimpleQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_MEDICATION_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MEDICATION_REFERENCE === $n->nodeName) {
                $type->setMedicationReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_WHEN_PREPARED === $n->nodeName) {
                $type->setWhenPrepared(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_WHEN_HANDED_OVER === $n->nodeName) {
                $type->setWhenHandedOver(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_DESTINATION === $n->nodeName) {
                $type->setDestination(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_RECEIVER === $n->nodeName) {
                $type->addReceiver(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->setNote(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DOSAGE_INSTRUCTION === $n->nodeName) {
                $type->addDosageInstruction(FHIRMedicationDispenseDosageInstruction::xmlUnserialize($n));
            } elseif (self::FIELD_SUBSTITUTION === $n->nodeName) {
                $type->setSubstitution(FHIRMedicationDispenseSubstitution::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_WHEN_PREPARED);
        if (null !== $n) {
            $pt = $type->getWhenPrepared();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setWhenPrepared($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_WHEN_HANDED_OVER);
        if (null !== $n) {
            $pt = $type->getWhenHandedOver();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setWhenHandedOver($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOTE);
        if (null !== $n) {
            $pt = $type->getNote();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNote($n->nodeValue);
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
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DAYS_SUPPLY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MEDICATION_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MEDICATION_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHEN_PREPARED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHEN_HANDED_OVER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDestination())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESTINATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReceiver())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RECEIVER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNote())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DOSAGE_INSTRUCTION);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $out->{self::FIELD_DAYS_SUPPLY} = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $out->{self::FIELD_MEDICATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $out->{self::FIELD_MEDICATION_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WHEN_PREPARED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WHEN_PREPARED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WHEN_HANDED_OVER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WHEN_HANDED_OVER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            $out->{self::FIELD_DESTINATION} = $v;
        }
        if ([] !== ($vs = $this->getReceiver())) {
            $out->{self::FIELD_RECEIVER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RECEIVER}[] = $v;
            }
        }
        if (null !== ($v = $this->getNote())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOTE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOTE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            $out->{self::FIELD_DOSAGE_INSTRUCTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DOSAGE_INSTRUCTION}[] = $v;
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