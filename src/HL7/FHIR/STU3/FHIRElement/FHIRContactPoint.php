<?php namespace HL7\FHIR\STU3\FHIRElement;

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

use HL7\FHIR\STU3\FHIRElement;

/**
 * Details for all kinds of technology mediated contact points for a person or organization, including telephone, email, etc.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRContactPoint extends FHIRElement implements \JsonSerializable
{
    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRContactPointSystem
     */
    public $system = null;

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $value = null;

    /**
     * Identifies the purpose for the contact point.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRContactPointUse
     */
    public $use = null;

    /**
     * Specifies a preferred order in which to use a set of contacts. Contacts are ranked with lower values coming before higher values.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public $rank = null;

    /**
     * Time period when the contact point was/is in use.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ContactPoint';

    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRContactPointSystem
     */
    public function getSystem() {
        return $this->system;
    }

    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRContactPointSystem $system
     * @return $this
     */
    public function setSystem($system) {
        $this->system = $system;
        return $this;
    }

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $value
     * @return $this
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Identifies the purpose for the contact point.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRContactPointUse
     */
    public function getUse() {
        return $this->use;
    }

    /**
     * Identifies the purpose for the contact point.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRContactPointUse $use
     * @return $this
     */
    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    /**
     * Specifies a preferred order in which to use a set of contacts. Contacts are ranked with lower values coming before higher values.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getRank() {
        return $this->rank;
    }

    /**
     * Specifies a preferred order in which to use a set of contacts. Contacts are ranked with lower values coming before higher values.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $rank
     * @return $this
     */
    public function setRank($rank) {
        $this->rank = $rank;
        return $this;
    }

    /**
     * Time period when the contact point was/is in use.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Time period when the contact point was/is in use.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
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
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['value'])) {
                $this->setValue($data['value']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
            if (isset($data['rank'])) {
                $this->setRank($data['rank']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
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
        return (string)$this->getValue();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->system)) $json['system'] = $this->system;
        if (isset($this->value)) $json['value'] = $this->value;
        if (isset($this->use)) $json['use'] = $this->use;
        if (isset($this->rank)) $json['rank'] = $this->rank;
        if (isset($this->period)) $json['period'] = $this->period;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContactPoint xmlns="http://hl7.org/fhir"></ContactPoint>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->system)) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (isset($this->value)) $this->value->xmlSerialize(true, $sxe->addChild('value'));
        if (isset($this->use)) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (isset($this->rank)) $this->rank->xmlSerialize(true, $sxe->addChild('rank'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}