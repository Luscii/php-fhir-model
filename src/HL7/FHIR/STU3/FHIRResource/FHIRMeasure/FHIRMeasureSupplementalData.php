<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRMeasure;

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
 * The Measure resource provides the definition of a quality measure.
 */
class FHIRMeasureSupplementalData extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An identifier for the supplemental data.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $usage = [];

    /**
     * The criteria for the supplemental data. This must be the name of a valid expression defined within a referenced library, and defines the data to be returned for this element.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $criteria = null;

    /**
     * The supplemental data to be supplied as part of the measure response, specified as a valid FHIR Resource Path.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Measure.SupplementalData';

    /**
     * An identifier for the supplemental data.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * An identifier for the supplemental data.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUsage() {
        return $this->usage;
    }

    /**
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $usage
     * @return $this
     */
    public function addUsage($usage) {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * The criteria for the supplemental data. This must be the name of a valid expression defined within a referenced library, and defines the data to be returned for this element.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getCriteria() {
        return $this->criteria;
    }

    /**
     * The criteria for the supplemental data. This must be the name of a valid expression defined within a referenced library, and defines the data to be returned for this element.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $criteria
     * @return $this
     */
    public function setCriteria($criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * The supplemental data to be supplied as part of the measure response, specified as a valid FHIR Resource Path.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * The supplemental data to be supplied as part of the measure response, specified as a valid FHIR Resource Path.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path) {
        $this->path = $path;
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['usage'])) {
                if (is_array($data['usage'])) {
                    foreach($data['usage'] as $d) {
                        $this->addUsage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"usage" must be array of objects or null, '.gettype($data['usage']).' seen.');
                }
            }
            if (isset($data['criteria'])) {
                $this->setCriteria($data['criteria']);
            }
            if (isset($data['path'])) {
                $this->setPath($data['path']);
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (0 < count($this->usage)) {
            $json['usage'] = [];
            foreach($this->usage as $usage) {
                if (null !== $usage) $json['usage'][] = $usage;
            }
        }
        if (isset($this->criteria)) $json['criteria'] = $this->criteria;
        if (isset($this->path)) $json['path'] = $this->path;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MeasureSupplementalData xmlns="http://hl7.org/fhir"></MeasureSupplementalData>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (0 < count($this->usage)) {
            foreach($this->usage as $usage) {
                $usage->xmlSerialize(true, $sxe->addChild('usage'));
            }
        }
        if (isset($this->criteria)) $this->criteria->xmlSerialize(true, $sxe->addChild('criteria'));
        if (isset($this->path)) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}