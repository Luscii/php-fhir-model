<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRCapabilityStatement;

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
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRCapabilityStatementEvent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A coded identifier of a supported messaging event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $code = null;

    /**
     * The impact of the content of the message.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMessageSignificanceCategory
     */
    public $category = null;

    /**
     * The mode of this event declaration - whether an application is a sender or receiver.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIREventCapabilityMode
     */
    public $mode = null;

    /**
     * A resource associated with the event.  This is the resource that defines the event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRResourceType
     */
    public $focus = null;

    /**
     * Information about the request for this event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Information about the response for this event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $response = null;

    /**
     * Guidance on how this event is handled, such as internal system trigger points, business rules, etc.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CapabilityStatement.Event';

    /**
     * A coded identifier of a supported messaging event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A coded identifier of a supported messaging event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The impact of the content of the message.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMessageSignificanceCategory
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * The impact of the content of the message.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMessageSignificanceCategory $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * The mode of this event declaration - whether an application is a sender or receiver.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIREventCapabilityMode
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * The mode of this event declaration - whether an application is a sender or receiver.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIREventCapabilityMode $mode
     * @return $this
     */
    public function setMode($mode) {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A resource associated with the event.  This is the resource that defines the event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRResourceType
     */
    public function getFocus() {
        return $this->focus;
    }

    /**
     * A resource associated with the event.  This is the resource that defines the event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRResourceType $focus
     * @return $this
     */
    public function setFocus($focus) {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Information about the request for this event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Information about the request for this event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Information about the response for this event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * Information about the response for this event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $response
     * @return $this
     */
    public function setResponse($response) {
        $this->response = $response;
        return $this;
    }

    /**
     * Guidance on how this event is handled, such as internal system trigger points, business rules, etc.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDocumentation() {
        return $this->documentation;
    }

    /**
     * Guidance on how this event is handled, such as internal system trigger points, business rules, etc.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation) {
        $this->documentation = $documentation;
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
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['focus'])) {
                $this->setFocus($data['focus']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
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
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->mode)) $json['mode'] = $this->mode;
        if (isset($this->focus)) $json['focus'] = $this->focus;
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->response)) $json['response'] = $this->response;
        if (isset($this->documentation)) $json['documentation'] = $this->documentation;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CapabilityStatementEvent xmlns="http://hl7.org/fhir"></CapabilityStatementEvent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->mode)) $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        if (isset($this->focus)) $this->focus->xmlSerialize(true, $sxe->addChild('focus'));
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->response)) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (isset($this->documentation)) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}