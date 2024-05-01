<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRBooleanPrimitive;
use HL7\FHIR\STU3\FHIRCodePrimitive;
use HL7\FHIR\STU3\FHIRDateTimePrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRAnnotation;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer;
use HL7\FHIR\STU3\FHIRElement\FHIRBoolean;
use HL7\FHIR\STU3\FHIRElement\FHIRCode;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRId;
use HL7\FHIR\STU3\FHIRElement\FHIRIdentifier;
use HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus;
use HL7\FHIR\STU3\FHIRElement\FHIRMeta;
use HL7\FHIR\STU3\FHIRElement\FHIRNarrative;
use HL7\FHIR\STU3\FHIRElement\FHIRPeriod;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRUri;
use HL7\FHIR\STU3\FHIRIdPrimitive;
use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;
use HL7\FHIR\STU3\FHIRUriPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRContainedTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeMap;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Describes the event of a patient consuming or otherwise being administered a
 * medication. This may be as simple as swallowing a tablet or it may be a long
 * running infusion. Related resources tie this event to the authorizing
 * prescription, and the specific encounter between patient and health care
 * practitioner.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationAdministration
 * @package \HL7\FHIR\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_DEFINITION = 'definition';
    const FIELD_PART_OF = 'partOf';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CATEGORY = 'category';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_SUBJECT = 'subject';
    const FIELD_CONTEXT = 'context';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';
    const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
    const FIELD_EFFECTIVE_DATE_TIME_EXT = '_effectiveDateTime';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_PERFORMER = 'performer';
    const FIELD_NOT_GIVEN = 'notGiven';
    const FIELD_NOT_GIVEN_EXT = '_notGiven';
    const FIELD_REASON_NOT_GIVEN = 'reasonNotGiven';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_PRESCRIPTION = 'prescription';
    const FIELD_DEVICE = 'device';
    const FIELD_NOTE = 'note';
    const FIELD_DOSAGE = 'dosage';
    const FIELD_EVENT_HISTORY = 'eventHistory';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that was adhered to in whole
     * or in part by this event.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $definition = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $partOf = [];
    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus
     */
    protected null|FHIRMedicationAdministrationStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication administration and where the medication is
     * expected to be consumed or administered.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $category = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $medicationCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $medicationReference = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal or group receiving the medication.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $context = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information (for example, patient height and weight) that supports
     * the administration of the medication.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $supportingInformation = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $effectiveDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $effectivePeriod = null;
    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    protected null|array $performer = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $notGiven = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonNotGiven = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonCode = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was administered.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $reasonReference = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $prescription = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $device = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    protected null|FHIRMedicationAdministrationDosage $dosage = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * administration was verified.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $eventHistory = [];

    /**
     * Validation map for fields in type MedicationAdministration
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedicationAdministration Constructor
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
        if (isset($data[self::FIELD_DEFINITION])) {
            if (is_array($data[self::FIELD_DEFINITION])) {
                foreach($data[self::FIELD_DEFINITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDefinition($v);
                    } else {
                        $this->addDefinition(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->addDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->addDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMedicationAdministrationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationAdministrationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationAdministrationStatus([FHIRMedicationAdministrationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRMedicationAdministrationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
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
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME]) || isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_EFFECTIVE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) ? $data[self::FIELD_EFFECTIVE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEffectiveDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationAdministrationPerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRMedicationAdministrationPerformer($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER] instanceof FHIRMedicationAdministrationPerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRMedicationAdministrationPerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_NOT_GIVEN]) || isset($data[self::FIELD_NOT_GIVEN_EXT])) {
            $value = $data[self::FIELD_NOT_GIVEN] ?? null;
            $ext = (isset($data[self::FIELD_NOT_GIVEN_EXT]) && is_array($data[self::FIELD_NOT_GIVEN_EXT])) ? $data[self::FIELD_NOT_GIVEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNotGiven($value);
                } else if (is_array($value)) {
                    $this->setNotGiven(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNotGiven(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotGiven(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REASON_NOT_GIVEN])) {
            if (is_array($data[self::FIELD_REASON_NOT_GIVEN])) {
                foreach($data[self::FIELD_REASON_NOT_GIVEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonNotGiven($v);
                    } else {
                        $this->addReasonNotGiven(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_NOT_GIVEN] instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($data[self::FIELD_REASON_NOT_GIVEN]);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($data[self::FIELD_REASON_NOT_GIVEN]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PRESCRIPTION])) {
            if ($data[self::FIELD_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPrescription($data[self::FIELD_PRESCRIPTION]);
            } else {
                $this->setPrescription(new FHIRReference($data[self::FIELD_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if (is_array($data[self::FIELD_DEVICE])) {
                foreach($data[self::FIELD_DEVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDevice($v);
                    } else {
                        $this->addDevice(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->addDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->addDevice(new FHIRReference($data[self::FIELD_DEVICE]));
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
        if (isset($data[self::FIELD_DOSAGE])) {
            if ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationAdministrationDosage) {
                $this->setDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->setDosage(new FHIRMedicationAdministrationDosage($data[self::FIELD_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_EVENT_HISTORY])) {
            if (is_array($data[self::FIELD_EVENT_HISTORY])) {
                foreach($data[self::FIELD_EVENT_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEventHistory($v);
                    } else {
                        $this->addEventHistory(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_EVENT_HISTORY] instanceof FHIRReference) {
                $this->addEventHistory($data[self::FIELD_EVENT_HISTORY]);
            } else {
                $this->addEventHistory(new FHIRReference($data[self::FIELD_EVENT_HISTORY]));
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
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[] $identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that was adhered to in whole
     * or in part by this event.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDefinition(): null|array
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that was adhered to in whole
     * or in part by this event.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function addDefinition(null|FHIRReference $definition = null): self
    {
        if (null === $definition) {
            $definition = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that was adhered to in whole
     * or in part by this event.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $definition
     * @return static
     */
    public function setDefinition(array $definition = []): self
    {
        if ([] !== $this->definition) {
            $this->_trackValuesRemoved(count($this->definition));
            $this->definition = [];
        }
        if ([] === $definition) {
            return $this;
        }
        foreach($definition as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDefinition($v);
            } else {
                $this->addDefinition(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getPartOf(): null|array
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(null|FHIRReference $partOf = null): self
    {
        if (null === $partOf) {
            $partOf = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $partOf
     * @return static
     */
    public function setPartOf(array $partOf = []): self
    {
        if ([] !== $this->partOf) {
            $this->_trackValuesRemoved(count($this->partOf));
            $this->partOf = [];
        }
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus(): null|FHIRMedicationAdministrationStatus
    {
        return $this->status;
    }

    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRMedicationAdministrationStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRMedicationAdministrationStatus();
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
     * Indicates the type of medication administration and where the medication is
     * expected to be consumed or administered.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication administration and where the medication is
     * expected to be consumed or administered.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->category, $category);
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
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
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
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
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
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
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $medicationReference
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal or group receiving the medication.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal or group receiving the medication.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getContext(): null|FHIRReference
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(null|FHIRReference $context = null): self
    {
        if (null === $context) {
            $context = new FHIRReference();
        }
        $this->_trackValueSet($this->context, $context);
        $this->context = $context;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information (for example, patient height and weight) that supports
     * the administration of the medication.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation(): null|array
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information (for example, patient height and weight) that supports
     * the administration of the medication.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $supportingInformation
     * @return static
     */
    public function addSupportingInformation(null|FHIRReference $supportingInformation = null): self
    {
        if (null === $supportingInformation) {
            $supportingInformation = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information (for example, patient height and weight) that supports
     * the administration of the medication.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $supportingInformation
     * @return static
     */
    public function setSupportingInformation(array $supportingInformation = []): self
    {
        if ([] !== $this->supportingInformation) {
            $this->_trackValuesRemoved(count($this->supportingInformation));
            $this->supportingInformation = [];
        }
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInformation($v);
            } else {
                $this->addSupportingInformation(new FHIRReference($v));
            }
        }
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
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime(): null|FHIRDateTime
    {
        return $this->effectiveDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return static
     */
    public function setEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $effectiveDateTime = null): self
    {
        if (null !== $effectiveDateTime && !($effectiveDateTime instanceof FHIRDateTime)) {
            $effectiveDateTime = new FHIRDateTime($effectiveDateTime);
        }
        $this->_trackValueSet($this->effectiveDateTime, $effectiveDateTime);
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod(): null|FHIRPeriod
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(null|FHIRPeriod $effectivePeriod = null): self
    {
        if (null === $effectivePeriod) {
            $effectivePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->effectivePeriod, $effectivePeriod);
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public function getPerformer(): null|array
    {
        return $this->performer;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer $performer
     * @return static
     */
    public function addPerformer(null|FHIRMedicationAdministrationPerformer $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRMedicationAdministrationPerformer();
        }
        $this->_trackValueAdded();
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[] $performer
     * @return static
     */
    public function setPerformer(array $performer = []): self
    {
        if ([] !== $this->performer) {
            $this->_trackValuesRemoved(count($this->performer));
            $this->performer = [];
        }
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRMedicationAdministrationPerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRMedicationAdministrationPerformer($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getNotGiven(): null|FHIRBoolean
    {
        return $this->notGiven;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $notGiven
     * @return static
     */
    public function setNotGiven(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notGiven = null): self
    {
        if (null !== $notGiven && !($notGiven instanceof FHIRBoolean)) {
            $notGiven = new FHIRBoolean($notGiven);
        }
        $this->_trackValueSet($this->notGiven, $notGiven);
        $this->notGiven = $notGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven(): null|array
    {
        return $this->reasonNotGiven;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return static
     */
    public function addReasonNotGiven(null|FHIRCodeableConcept $reasonNotGiven = null): self
    {
        if (null === $reasonNotGiven) {
            $reasonNotGiven = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[] $reasonNotGiven
     * @return static
     */
    public function setReasonNotGiven(array $reasonNotGiven = []): self
    {
        if ([] !== $this->reasonNotGiven) {
            $this->_trackValuesRemoved(count($this->reasonNotGiven));
            $this->reasonNotGiven = [];
        }
        if ([] === $reasonNotGiven) {
            return $this;
        }
        foreach($reasonNotGiven as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($v);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($v));
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
     * A code indicating why the medication was given.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): null|array
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(null|FHIRCodeableConcept $reasonCode = null): self
    {
        if (null === $reasonCode) {
            $reasonCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = []): self
    {
        if ([] !== $this->reasonCode) {
            $this->_trackValuesRemoved(count($this->reasonCode));
            $this->reasonCode = [];
        }
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was administered.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): null|array
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was administered.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(null|FHIRReference $reasonReference = null): self
    {
        if (null === $reasonReference) {
            $reasonReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was administered.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = []): self
    {
        if ([] !== $this->reasonReference) {
            $this->_trackValuesRemoved(count($this->reasonReference));
            $this->reasonReference = [];
        }
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPrescription(): null|FHIRReference
    {
        return $this->prescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $prescription
     * @return static
     */
    public function setPrescription(null|FHIRReference $prescription = null): self
    {
        if (null === $prescription) {
            $prescription = new FHIRReference();
        }
        $this->_trackValueSet($this->prescription, $prescription);
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDevice(): null|array
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $device
     * @return static
     */
    public function addDevice(null|FHIRReference $device = null): self
    {
        if (null === $device) {
            $device = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $device
     * @return static
     */
    public function setDevice(array $device = []): self
    {
        if ([] !== $this->device) {
            $this->_trackValuesRemoved(count($this->device));
            $this->device = [];
        }
        if ([] === $device) {
            return $this;
        }
        foreach($device as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDevice($v);
            } else {
                $this->addDevice(new FHIRReference($v));
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
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
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
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
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
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[] $note
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
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage(): null|FHIRMedicationAdministrationDosage
    {
        return $this->dosage;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return static
     */
    public function setDosage(null|FHIRMedicationAdministrationDosage $dosage = null): self
    {
        if (null === $dosage) {
            $dosage = new FHIRMedicationAdministrationDosage();
        }
        $this->_trackValueSet($this->dosage, $dosage);
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * administration was verified.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getEventHistory(): null|array
    {
        return $this->eventHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * administration was verified.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $eventHistory
     * @return static
     */
    public function addEventHistory(null|FHIRReference $eventHistory = null): self
    {
        if (null === $eventHistory) {
            $eventHistory = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * administration was verified.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $eventHistory
     * @return static
     */
    public function setEventHistory(array $eventHistory = []): self
    {
        if ([] !== $this->eventHistory) {
            $this->_trackValuesRemoved(count($this->eventHistory));
            $this->eventHistory = [];
        }
        if ([] === $eventHistory) {
            return $this;
        }
        foreach($eventHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEventHistory($v);
            } else {
                $this->addEventHistory(new FHIRReference($v));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEFINITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
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
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNotGiven())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_GIVEN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_NOT_GIVEN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getDosage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSAGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EVENT_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFORMATION])) {
            $v = $this->getSupportingInformation();
            foreach($validationRules[self::FIELD_SUPPORTING_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_SUPPORTING_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFORMATION])) {
                        $errs[self::FIELD_SUPPORTING_INFORMATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_DATE_TIME])) {
            $v = $this->getEffectiveDateTime();
            foreach($validationRules[self::FIELD_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_DATE_TIME])) {
                        $errs[self::FIELD_EFFECTIVE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_GIVEN])) {
            $v = $this->getNotGiven();
            foreach($validationRules[self::FIELD_NOT_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_GIVEN])) {
                        $errs[self::FIELD_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_NOT_GIVEN])) {
            $v = $this->getReasonNotGiven();
            foreach($validationRules[self::FIELD_REASON_NOT_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_REASON_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_NOT_GIVEN])) {
                        $errs[self::FIELD_REASON_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_REASON_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESCRIPTION])) {
            $v = $this->getPrescription();
            foreach($validationRules[self::FIELD_PRESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESCRIPTION])) {
                        $errs[self::FIELD_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_HISTORY])) {
            $v = $this->getEventHistory();
            foreach($validationRules[self::FIELD_EVENT_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION, self::FIELD_EVENT_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_HISTORY])) {
                        $errs[self::FIELD_EVENT_HISTORY] = [];
                    }
                    $errs[self::FIELD_EVENT_HISTORY][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
        } else if (!($type instanceof FHIRMedicationAdministration)) {
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
            } elseif (self::FIELD_DEFINITION === $n->nodeName) {
                $type->addDefinition(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PART_OF === $n->nodeName) {
                $type->addPartOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRMedicationAdministrationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MEDICATION_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MEDICATION_REFERENCE === $n->nodeName) {
                $type->setMedicationReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTEXT === $n->nodeName) {
                $type->setContext(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTING_INFORMATION === $n->nodeName) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_EFFECTIVE_DATE_TIME === $n->nodeName) {
                $type->setEffectiveDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_EFFECTIVE_PERIOD === $n->nodeName) {
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER === $n->nodeName) {
                $type->addPerformer(FHIRMedicationAdministrationPerformer::xmlUnserialize($n));
            } elseif (self::FIELD_NOT_GIVEN === $n->nodeName) {
                $type->setNotGiven(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_NOT_GIVEN === $n->nodeName) {
                $type->addReasonNotGiven(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_CODE === $n->nodeName) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_REFERENCE === $n->nodeName) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PRESCRIPTION === $n->nodeName) {
                $type->setPrescription(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DEVICE === $n->nodeName) {
                $type->addDevice(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_DOSAGE === $n->nodeName) {
                $type->setDosage(FHIRMedicationAdministrationDosage::xmlUnserialize($n));
            } elseif (self::FIELD_EVENT_HISTORY === $n->nodeName) {
                $type->addEventHistory(FHIRReference::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_EFFECTIVE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEffectiveDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOT_GIVEN);
        if (null !== $n) {
            $pt = $type->getNotGiven();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNotGiven($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicationAdministration'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PART_OF);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
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
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContext())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTING_INFORMATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EFFECTIVE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EFFECTIVE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNotGiven())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOT_GIVEN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_NOT_GIVEN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEVICE);
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
        if (null !== ($v = $this->getDosage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EVENT_HISTORY);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDefinition())) {
            $out->{self::FIELD_DEFINITION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEFINITION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $out->{self::FIELD_PART_OF} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PART_OF}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMedicationAdministrationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $out->{self::FIELD_MEDICATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $out->{self::FIELD_MEDICATION_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = $v;
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $out->{self::FIELD_SUPPORTING_INFORMATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPORTING_INFORMATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EFFECTIVE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EFFECTIVE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $out->{self::FIELD_EFFECTIVE_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PERFORMER}[] = $v;
            }
        }
        if (null !== ($v = $this->getNotGiven())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOT_GIVEN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOT_GIVEN_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            $out->{self::FIELD_REASON_NOT_GIVEN} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_NOT_GIVEN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $out->{self::FIELD_REASON_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $out->{self::FIELD_REASON_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_REFERENCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            $out->{self::FIELD_PRESCRIPTION} = $v;
        }
        if ([] !== ($vs = $this->getDevice())) {
            $out->{self::FIELD_DEVICE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEVICE}[] = $v;
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
        if (null !== ($v = $this->getDosage())) {
            $out->{self::FIELD_DOSAGE} = $v;
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            $out->{self::FIELD_EVENT_HISTORY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_EVENT_HISTORY}[] = $v;
            }
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