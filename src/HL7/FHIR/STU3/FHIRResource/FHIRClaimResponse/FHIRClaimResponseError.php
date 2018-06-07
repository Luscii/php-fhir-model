<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRClaimResponse;

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
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseError extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error is elsewhere.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public $sequenceLinkId = null;

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public $detailSequenceLinkId = null;

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public $subdetailSequenceLinkId = null;

    /**
     * An error code,from a specified code system, which details why the claim could not be adjudicated.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse.Error';

    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error is elsewhere.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getSequenceLinkId() {
        return $this->sequenceLinkId;
    }

    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error is elsewhere.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return $this
     */
    public function setSequenceLinkId($sequenceLinkId) {
        $this->sequenceLinkId = $sequenceLinkId;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequenceLinkId() {
        return $this->detailSequenceLinkId;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $detailSequenceLinkId
     * @return $this
     */
    public function setDetailSequenceLinkId($detailSequenceLinkId) {
        $this->detailSequenceLinkId = $detailSequenceLinkId;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getSubdetailSequenceLinkId() {
        return $this->subdetailSequenceLinkId;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $subdetailSequenceLinkId
     * @return $this
     */
    public function setSubdetailSequenceLinkId($subdetailSequenceLinkId) {
        $this->subdetailSequenceLinkId = $subdetailSequenceLinkId;
        return $this;
    }

    /**
     * An error code,from a specified code system, which details why the claim could not be adjudicated.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * An error code,from a specified code system, which details why the claim could not be adjudicated.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
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
            if (isset($data['sequenceLinkId'])) {
                $this->setSequenceLinkId($data['sequenceLinkId']);
            }
            if (isset($data['detailSequenceLinkId'])) {
                $this->setDetailSequenceLinkId($data['detailSequenceLinkId']);
            }
            if (isset($data['subdetailSequenceLinkId'])) {
                $this->setSubdetailSequenceLinkId($data['subdetailSequenceLinkId']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
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
        if (isset($this->sequenceLinkId)) $json['sequenceLinkId'] = $this->sequenceLinkId;
        if (isset($this->detailSequenceLinkId)) $json['detailSequenceLinkId'] = $this->detailSequenceLinkId;
        if (isset($this->subdetailSequenceLinkId)) $json['subdetailSequenceLinkId'] = $this->subdetailSequenceLinkId;
        if (isset($this->code)) $json['code'] = $this->code;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponseError xmlns="http://hl7.org/fhir"></ClaimResponseError>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->sequenceLinkId)) $this->sequenceLinkId->xmlSerialize(true, $sxe->addChild('sequenceLinkId'));
        if (isset($this->detailSequenceLinkId)) $this->detailSequenceLinkId->xmlSerialize(true, $sxe->addChild('detailSequenceLinkId'));
        if (isset($this->subdetailSequenceLinkId)) $this->subdetailSequenceLinkId->xmlSerialize(true, $sxe->addChild('subdetailSequenceLinkId'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}