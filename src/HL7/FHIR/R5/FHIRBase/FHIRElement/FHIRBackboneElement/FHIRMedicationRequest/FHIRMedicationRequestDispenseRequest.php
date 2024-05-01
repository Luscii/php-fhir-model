<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUnsignedIntPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * An order or request for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
 * generalize the use across inpatient and outpatient settings, including care
 * plans, etc., and to harmonize with workflow patterns.
 *
 * Class FHIRMedicationRequestDispenseRequest
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest
 */
class FHIRMedicationRequestDispenseRequest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST;

    const FIELD_INITIAL_FILL = 'initialFill';
    const FIELD_DISPENSE_INTERVAL = 'dispenseInterval';
    const FIELD_VALIDITY_PERIOD = 'validityPeriod';
    const FIELD_NUMBER_OF_REPEATS_ALLOWED = 'numberOfRepeatsAllowed';
    const FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT = '_numberOfRepeatsAllowed';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_EXPECTED_SUPPLY_DURATION = 'expectedSupplyDuration';
    const FIELD_DISPENSER = 'dispenser';
    const FIELD_DISPENSER_INSTRUCTION = 'dispenserInstruction';
    const FIELD_DOSE_ADMINISTRATION_AID = 'doseAdministrationAid';

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates the quantity or duration for the first dispense of the medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestInitialFill
     */
    protected null|FHIRMedicationRequestInitialFill $initialFill = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum period of time that must occur between dispenses of the medication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $dispenseInterval = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This indicates the validity period of a prescription (stale dating the
     * Prescription).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $validityPeriod = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An integer indicating the number of times, in addition to the original dispense,
     * (aka refills or repeats) that the patient can receive the prescribed medication.
     * Usage Notes: This integer does not include the original order dispense. This
     * means that if an order indicates dispense 30 tablets plus "3 repeats", then the
     * order can be dispensed a total of 4 times and the patient can receive a total of
     * 120 tablets. A prescriber may explicitly say that zero refills are permitted
     * after the initial dispense.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $numberOfRepeatsAllowed = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed for one fill.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $expectedSupplyDuration = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the intended performing Organization that will dispense the medication
     * as specified by the prescriber.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $dispenser = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional information to the dispenser, for example, counselling to be
     * provided to the patient.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $dispenserInstruction = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides information about the type of adherence packaging to be supplied for
     * the medication dispense.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $doseAdministrationAid = null;

    /**
     * Validation map for fields in type MedicationRequest.DispenseRequest
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedicationRequestDispenseRequest Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_INITIAL_FILL])) {
            if ($data[self::FIELD_INITIAL_FILL] instanceof FHIRMedicationRequestInitialFill) {
                $this->setInitialFill($data[self::FIELD_INITIAL_FILL]);
            } else {
                $this->setInitialFill(new FHIRMedicationRequestInitialFill($data[self::FIELD_INITIAL_FILL]));
            }
        }
        if (isset($data[self::FIELD_DISPENSE_INTERVAL])) {
            if ($data[self::FIELD_DISPENSE_INTERVAL] instanceof FHIRDuration) {
                $this->setDispenseInterval($data[self::FIELD_DISPENSE_INTERVAL]);
            } else {
                $this->setDispenseInterval(new FHIRDuration($data[self::FIELD_DISPENSE_INTERVAL]));
            }
        }
        if (isset($data[self::FIELD_VALIDITY_PERIOD])) {
            if ($data[self::FIELD_VALIDITY_PERIOD] instanceof FHIRPeriod) {
                $this->setValidityPeriod($data[self::FIELD_VALIDITY_PERIOD]);
            } else {
                $this->setValidityPeriod(new FHIRPeriod($data[self::FIELD_VALIDITY_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]) || isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT])) {
            $value = $data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT]) && is_array($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT])) ? $data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setNumberOfRepeatsAllowed($value);
                } else if (is_array($value)) {
                    $this->setNumberOfRepeatsAllowed(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfRepeatsAllowed(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumberOfRepeatsAllowed(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
            if ($data[self::FIELD_EXPECTED_SUPPLY_DURATION] instanceof FHIRDuration) {
                $this->setExpectedSupplyDuration($data[self::FIELD_EXPECTED_SUPPLY_DURATION]);
            } else {
                $this->setExpectedSupplyDuration(new FHIRDuration($data[self::FIELD_EXPECTED_SUPPLY_DURATION]));
            }
        }
        if (isset($data[self::FIELD_DISPENSER])) {
            if ($data[self::FIELD_DISPENSER] instanceof FHIRReference) {
                $this->setDispenser($data[self::FIELD_DISPENSER]);
            } else {
                $this->setDispenser(new FHIRReference($data[self::FIELD_DISPENSER]));
            }
        }
        if (isset($data[self::FIELD_DISPENSER_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DISPENSER_INSTRUCTION])) {
                foreach($data[self::FIELD_DISPENSER_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addDispenserInstruction($v);
                    } else {
                        $this->addDispenserInstruction(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_DISPENSER_INSTRUCTION] instanceof FHIRAnnotation) {
                $this->addDispenserInstruction($data[self::FIELD_DISPENSER_INSTRUCTION]);
            } else {
                $this->addDispenserInstruction(new FHIRAnnotation($data[self::FIELD_DISPENSER_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_DOSE_ADMINISTRATION_AID])) {
            if ($data[self::FIELD_DOSE_ADMINISTRATION_AID] instanceof FHIRCodeableConcept) {
                $this->setDoseAdministrationAid($data[self::FIELD_DOSE_ADMINISTRATION_AID]);
            } else {
                $this->setDoseAdministrationAid(new FHIRCodeableConcept($data[self::FIELD_DOSE_ADMINISTRATION_AID]));
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
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates the quantity or duration for the first dispense of the medication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestInitialFill
     */
    public function getInitialFill(): null|FHIRMedicationRequestInitialFill
    {
        return $this->initialFill;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates the quantity or duration for the first dispense of the medication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestInitialFill $initialFill
     * @return static
     */
    public function setInitialFill(null|FHIRMedicationRequestInitialFill $initialFill = null): self
    {
        if (null === $initialFill) {
            $initialFill = new FHIRMedicationRequestInitialFill();
        }
        $this->_trackValueSet($this->initialFill, $initialFill);
        $this->initialFill = $initialFill;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum period of time that must occur between dispenses of the medication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getDispenseInterval(): null|FHIRDuration
    {
        return $this->dispenseInterval;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum period of time that must occur between dispenses of the medication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $dispenseInterval
     * @return static
     */
    public function setDispenseInterval(null|FHIRDuration $dispenseInterval = null): self
    {
        if (null === $dispenseInterval) {
            $dispenseInterval = new FHIRDuration();
        }
        $this->_trackValueSet($this->dispenseInterval, $dispenseInterval);
        $this->dispenseInterval = $dispenseInterval;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This indicates the validity period of a prescription (stale dating the
     * Prescription).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getValidityPeriod(): null|FHIRPeriod
    {
        return $this->validityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This indicates the validity period of a prescription (stale dating the
     * Prescription).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $validityPeriod
     * @return static
     */
    public function setValidityPeriod(null|FHIRPeriod $validityPeriod = null): self
    {
        if (null === $validityPeriod) {
            $validityPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->validityPeriod, $validityPeriod);
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An integer indicating the number of times, in addition to the original dispense,
     * (aka refills or repeats) that the patient can receive the prescribed medication.
     * Usage Notes: This integer does not include the original order dispense. This
     * means that if an order indicates dispense 30 tablets plus "3 repeats", then the
     * order can be dispensed a total of 4 times and the patient can receive a total of
     * 120 tablets. A prescriber may explicitly say that zero refills are permitted
     * after the initial dispense.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfRepeatsAllowed(): null|FHIRUnsignedInt
    {
        return $this->numberOfRepeatsAllowed;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An integer indicating the number of times, in addition to the original dispense,
     * (aka refills or repeats) that the patient can receive the prescribed medication.
     * Usage Notes: This integer does not include the original order dispense. This
     * means that if an order indicates dispense 30 tablets plus "3 repeats", then the
     * order can be dispensed a total of 4 times and the patient can receive a total of
     * 120 tablets. A prescriber may explicitly say that zero refills are permitted
     * after the initial dispense.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRUnsignedIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfRepeatsAllowed
     * @return static
     */
    public function setNumberOfRepeatsAllowed(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfRepeatsAllowed = null): self
    {
        if (null !== $numberOfRepeatsAllowed && !($numberOfRepeatsAllowed instanceof FHIRUnsignedInt)) {
            $numberOfRepeatsAllowed = new FHIRUnsignedInt($numberOfRepeatsAllowed);
        }
        $this->_trackValueSet($this->numberOfRepeatsAllowed, $numberOfRepeatsAllowed);
        $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed for one fill.
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
     * The amount that is to be dispensed for one fill.
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getExpectedSupplyDuration(): null|FHIRDuration
    {
        return $this->expectedSupplyDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $expectedSupplyDuration
     * @return static
     */
    public function setExpectedSupplyDuration(null|FHIRDuration $expectedSupplyDuration = null): self
    {
        if (null === $expectedSupplyDuration) {
            $expectedSupplyDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->expectedSupplyDuration, $expectedSupplyDuration);
        $this->expectedSupplyDuration = $expectedSupplyDuration;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the intended performing Organization that will dispense the medication
     * as specified by the prescriber.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * Indicates the intended performing Organization that will dispense the medication
     * as specified by the prescriber.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $dispenser
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional information to the dispenser, for example, counselling to be
     * provided to the patient.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getDispenserInstruction(): null|array
    {
        return $this->dispenserInstruction;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional information to the dispenser, for example, counselling to be
     * provided to the patient.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $dispenserInstruction
     * @return static
     */
    public function addDispenserInstruction(null|FHIRAnnotation $dispenserInstruction = null): self
    {
        if (null === $dispenserInstruction) {
            $dispenserInstruction = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->dispenserInstruction[] = $dispenserInstruction;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional information to the dispenser, for example, counselling to be
     * provided to the patient.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $dispenserInstruction
     * @return static
     */
    public function setDispenserInstruction(array $dispenserInstruction = []): self
    {
        if ([] !== $this->dispenserInstruction) {
            $this->_trackValuesRemoved(count($this->dispenserInstruction));
            $this->dispenserInstruction = [];
        }
        if ([] === $dispenserInstruction) {
            return $this;
        }
        foreach($dispenserInstruction as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addDispenserInstruction($v);
            } else {
                $this->addDispenserInstruction(new FHIRAnnotation($v));
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
     * Provides information about the type of adherence packaging to be supplied for
     * the medication dispense.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDoseAdministrationAid(): null|FHIRCodeableConcept
    {
        return $this->doseAdministrationAid;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides information about the type of adherence packaging to be supplied for
     * the medication dispense.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $doseAdministrationAid
     * @return static
     */
    public function setDoseAdministrationAid(null|FHIRCodeableConcept $doseAdministrationAid = null): self
    {
        if (null === $doseAdministrationAid) {
            $doseAdministrationAid = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->doseAdministrationAid, $doseAdministrationAid);
        $this->doseAdministrationAid = $doseAdministrationAid;
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
        if (null !== ($v = $this->getInitialFill())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_FILL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDispenseInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSE_INTERVAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDITY_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpectedSupplyDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPECTED_SUPPLY_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDispenser())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDispenserInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DISPENSER_INSTRUCTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDoseAdministrationAid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_ADMINISTRATION_AID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_FILL])) {
            $v = $this->getInitialFill();
            foreach($validationRules[self::FIELD_INITIAL_FILL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_INITIAL_FILL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_FILL])) {
                        $errs[self::FIELD_INITIAL_FILL] = [];
                    }
                    $errs[self::FIELD_INITIAL_FILL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSE_INTERVAL])) {
            $v = $this->getDispenseInterval();
            foreach($validationRules[self::FIELD_DISPENSE_INTERVAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_DISPENSE_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE_INTERVAL])) {
                        $errs[self::FIELD_DISPENSE_INTERVAL] = [];
                    }
                    $errs[self::FIELD_DISPENSE_INTERVAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDITY_PERIOD])) {
            $v = $this->getValidityPeriod();
            foreach($validationRules[self::FIELD_VALIDITY_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_VALIDITY_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDITY_PERIOD])) {
                        $errs[self::FIELD_VALIDITY_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALIDITY_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
            $v = $this->getNumberOfRepeatsAllowed();
            foreach($validationRules[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_NUMBER_OF_REPEATS_ALLOWED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
                        $errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
            $v = $this->getExpectedSupplyDuration();
            foreach($validationRules[self::FIELD_EXPECTED_SUPPLY_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_EXPECTED_SUPPLY_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
                        $errs[self::FIELD_EXPECTED_SUPPLY_DURATION] = [];
                    }
                    $errs[self::FIELD_EXPECTED_SUPPLY_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSER])) {
            $v = $this->getDispenser();
            foreach($validationRules[self::FIELD_DISPENSER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_DISPENSER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSER])) {
                        $errs[self::FIELD_DISPENSER] = [];
                    }
                    $errs[self::FIELD_DISPENSER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSER_INSTRUCTION])) {
            $v = $this->getDispenserInstruction();
            foreach($validationRules[self::FIELD_DISPENSER_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_DISPENSER_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSER_INSTRUCTION])) {
                        $errs[self::FIELD_DISPENSER_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_DISPENSER_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_ADMINISTRATION_AID])) {
            $v = $this->getDoseAdministrationAid();
            foreach($validationRules[self::FIELD_DOSE_ADMINISTRATION_AID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST, self::FIELD_DOSE_ADMINISTRATION_AID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_ADMINISTRATION_AID])) {
                        $errs[self::FIELD_DOSE_ADMINISTRATION_AID] = [];
                    }
                    $errs[self::FIELD_DOSE_ADMINISTRATION_AID][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
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
        } else if (!($type instanceof FHIRMedicationRequestDispenseRequest)) {
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
            if (self::FIELD_INITIAL_FILL === $n->nodeName) {
                $type->setInitialFill(FHIRMedicationRequestInitialFill::xmlUnserialize($n));
            } elseif (self::FIELD_DISPENSE_INTERVAL === $n->nodeName) {
                $type->setDispenseInterval(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_VALIDITY_PERIOD === $n->nodeName) {
                $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_NUMBER_OF_REPEATS_ALLOWED === $n->nodeName) {
                $type->setNumberOfRepeatsAllowed(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_EXPECTED_SUPPLY_DURATION === $n->nodeName) {
                $type->setExpectedSupplyDuration(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_DISPENSER === $n->nodeName) {
                $type->setDispenser(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISPENSER_INSTRUCTION === $n->nodeName) {
                $type->addDispenserInstruction(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_ADMINISTRATION_AID === $n->nodeName) {
                $type->setDoseAdministrationAid(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_REPEATS_ALLOWED);
        if (null !== $n) {
            $pt = $type->getNumberOfRepeatsAllowed();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNumberOfRepeatsAllowed($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicationRequestDispenseRequest'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getInitialFill())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_FILL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDispenseInterval())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISPENSE_INTERVAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALIDITY_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_OF_REPEATS_ALLOWED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExpectedSupplyDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPECTED_SUPPLY_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDispenser())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISPENSER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getDispenserInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DISPENSER_INSTRUCTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDoseAdministrationAid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_ADMINISTRATION_AID);
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
        if (null !== ($v = $this->getInitialFill())) {
            $out->{self::FIELD_INITIAL_FILL} = $v;
        }
        if (null !== ($v = $this->getDispenseInterval())) {
            $out->{self::FIELD_DISPENSE_INTERVAL} = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $out->{self::FIELD_VALIDITY_PERIOD} = $v;
        }
        if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER_OF_REPEATS_ALLOWED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getExpectedSupplyDuration())) {
            $out->{self::FIELD_EXPECTED_SUPPLY_DURATION} = $v;
        }
        if (null !== ($v = $this->getDispenser())) {
            $out->{self::FIELD_DISPENSER} = $v;
        }
        if ([] !== ($vs = $this->getDispenserInstruction())) {
            $out->{self::FIELD_DISPENSER_INSTRUCTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DISPENSER_INSTRUCTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDoseAdministrationAid())) {
            $out->{self::FIELD_DOSE_ADMINISTRATION_AID} = $v;
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