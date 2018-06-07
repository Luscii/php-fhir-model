<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRExplanationOfBenefit;

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

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 */
class FHIRExplanationOfBenefitAccident extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Date of an accident which these services are addressing.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * Type of accident: work, auto, etc.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAddress
     */
    public $locationAddress = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $locationReference = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ExplanationOfBenefit.Accident';

    /**
     * Date of an accident which these services are addressing.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Date of an accident which these services are addressing.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDate $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Type of accident: work, auto, etc.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Type of accident: work, auto, etc.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAddress
     */
    public function getLocationAddress() {
        return $this->locationAddress;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAddress $locationAddress
     * @return $this
     */
    public function setLocationAddress($locationAddress) {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getLocationReference() {
        return $this->locationReference;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $locationReference
     * @return $this
     */
    public function setLocationReference($locationReference) {
        $this->locationReference = $locationReference;
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
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['locationAddress'])) {
                $this->setLocationAddress($data['locationAddress']);
            }
            if (isset($data['locationReference'])) {
                $this->setLocationReference($data['locationReference']);
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
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->locationAddress)) $json['locationAddress'] = $this->locationAddress;
        if (isset($this->locationReference)) $json['locationReference'] = $this->locationReference;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExplanationOfBenefitAccident xmlns="http://hl7.org/fhir"></ExplanationOfBenefitAccident>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->locationAddress)) $this->locationAddress->xmlSerialize(true, $sxe->addChild('locationAddress'));
        if (isset($this->locationReference)) $this->locationReference->xmlSerialize(true, $sxe->addChild('locationReference'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}