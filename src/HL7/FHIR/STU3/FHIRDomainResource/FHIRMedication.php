<?php namespace HL7\FHIR\STU3\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

/**
 * This resource is primarily used for the identification and definition of a medication. It covers the ingredients and the packaging for a medication.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedication extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A code to indicate if the medication is in active use.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMedicationStatus
     */
    public $status = null;

    /**
     * Set to true if the item is attributable to a specific manufacturer.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $isBrand = null;

    /**
     * Set to true if the medication can be obtained without an order from a prescriber.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $isOverTheCounter = null;

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * Identifies a particular constituent of interest in the product.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRMedication\FHIRMedicationIngredient[]
     */
    public $ingredient = [];

    /**
     * Information that only applies to packages (not products).
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRMedication\FHIRMedicationPackage
     */
    public $package = null;

    /**
     * Photo(s) or graphic representation(s) of the medication.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAttachment[]
     */
    public $image = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Medication';

    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * A code to indicate if the medication is in active use.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMedicationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * A code to indicate if the medication is in active use.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMedicationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Set to true if the item is attributable to a specific manufacturer.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getIsBrand() {
        return $this->isBrand;
    }

    /**
     * Set to true if the item is attributable to a specific manufacturer.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $isBrand
     * @return $this
     */
    public function setIsBrand($isBrand) {
        $this->isBrand = $isBrand;
        return $this;
    }

    /**
     * Set to true if the medication can be obtained without an order from a prescriber.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getIsOverTheCounter() {
        return $this->isOverTheCounter;
    }

    /**
     * Set to true if the medication can be obtained without an order from a prescriber.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $isOverTheCounter
     * @return $this
     */
    public function setIsOverTheCounter($isOverTheCounter) {
        $this->isOverTheCounter = $isOverTheCounter;
        return $this;
    }

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getForm() {
        return $this->form;
    }

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $form
     * @return $this
     */
    public function setForm($form) {
        $this->form = $form;
        return $this;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRMedication\FHIRMedicationIngredient[]
     */
    public function getIngredient() {
        return $this->ingredient;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRMedication\FHIRMedicationIngredient $ingredient
     * @return $this
     */
    public function addIngredient($ingredient) {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Information that only applies to packages (not products).
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRMedication\FHIRMedicationPackage
     */
    public function getPackage() {
        return $this->package;
    }

    /**
     * Information that only applies to packages (not products).
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRMedication\FHIRMedicationPackage $package
     * @return $this
     */
    public function setPackage($package) {
        $this->package = $package;
        return $this;
    }

    /**
     * Photo(s) or graphic representation(s) of the medication.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAttachment[]
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Photo(s) or graphic representation(s) of the medication.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAttachment $image
     * @return $this
     */
    public function addImage($image) {
        $this->image[] = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['isBrand'])) {
                $this->setIsBrand($data['isBrand']);
            }
            if (isset($data['isOverTheCounter'])) {
                $this->setIsOverTheCounter($data['isOverTheCounter']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['ingredient'])) {
                if (is_array($data['ingredient'])) {
                    foreach($data['ingredient'] as $d) {
                        $this->addIngredient($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"ingredient" must be array of objects or null, '.gettype($data['ingredient']).' seen.');
                }
            }
            if (isset($data['package'])) {
                $this->setPackage($data['package']);
            }
            if (isset($data['image'])) {
                if (is_array($data['image'])) {
                    foreach($data['image'] as $d) {
                        $this->addImage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"image" must be array of objects or null, '.gettype($data['image']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->isBrand)) $json['isBrand'] = $this->isBrand;
        if (isset($this->isOverTheCounter)) $json['isOverTheCounter'] = $this->isOverTheCounter;
        if (isset($this->manufacturer)) $json['manufacturer'] = $this->manufacturer;
        if (isset($this->form)) $json['form'] = $this->form;
        if (0 < count($this->ingredient)) {
            $json['ingredient'] = [];
            foreach($this->ingredient as $ingredient) {
                if (null !== $ingredient) $json['ingredient'][] = $ingredient;
            }
        }
        if (isset($this->package)) $json['package'] = $this->package;
        if (0 < count($this->image)) {
            $json['image'] = [];
            foreach($this->image as $image) {
                if (null !== $image) $json['image'][] = $image;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Medication xmlns="http://hl7.org/fhir"></Medication>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->isBrand)) $this->isBrand->xmlSerialize(true, $sxe->addChild('isBrand'));
        if (isset($this->isOverTheCounter)) $this->isOverTheCounter->xmlSerialize(true, $sxe->addChild('isOverTheCounter'));
        if (isset($this->manufacturer)) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (isset($this->form)) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->ingredient)) {
            foreach($this->ingredient as $ingredient) {
                $ingredient->xmlSerialize(true, $sxe->addChild('ingredient'));
            }
        }
        if (isset($this->package)) $this->package->xmlSerialize(true, $sxe->addChild('package'));
        if (0 < count($this->image)) {
            foreach($this->image as $image) {
                $image->xmlSerialize(true, $sxe->addChild('image'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}