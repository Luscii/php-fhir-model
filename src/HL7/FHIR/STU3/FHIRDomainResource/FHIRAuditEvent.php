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
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAuditEvent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Identifier for the category of event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $subtype = [];

    /**
     * Indicator for type of action performed during the event that generated the audit.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAuditEventAction
     */
    public $action = null;

    /**
     * The time when the event occurred on the source.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRInstant
     */
    public $recorded = null;

    /**
     * Indicates whether the event succeeded or failed.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAuditEventOutcome
     */
    public $outcome = null;

    /**
     * A free text description of the outcome of the event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $outcomeDesc = null;

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $purposeOfEvent = [];

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventAgent[]
     */
    public $agent = [];

    /**
     * The system that is reporting the event.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventSource
     */
    public $source = null;

    /**
     * Specific instances of data or objects that have been accessed.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventEntity[]
     */
    public $entity = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'AuditEvent';

    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Identifier for the category of event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getSubtype() {
        return $this->subtype;
    }

    /**
     * Identifier for the category of event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $subtype
     * @return $this
     */
    public function addSubtype($subtype) {
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * Indicator for type of action performed during the event that generated the audit.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAuditEventAction
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Indicator for type of action performed during the event that generated the audit.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAuditEventAction $action
     * @return $this
     */
    public function setAction($action) {
        $this->action = $action;
        return $this;
    }

    /**
     * The time when the event occurred on the source.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRInstant
     */
    public function getRecorded() {
        return $this->recorded;
    }

    /**
     * The time when the event occurred on the source.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRInstant $recorded
     * @return $this
     */
    public function setRecorded($recorded) {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Indicates whether the event succeeded or failed.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAuditEventOutcome
     */
    public function getOutcome() {
        return $this->outcome;
    }

    /**
     * Indicates whether the event succeeded or failed.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAuditEventOutcome $outcome
     * @return $this
     */
    public function setOutcome($outcome) {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A free text description of the outcome of the event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getOutcomeDesc() {
        return $this->outcomeDesc;
    }

    /**
     * A free text description of the outcome of the event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $outcomeDesc
     * @return $this
     */
    public function setOutcomeDesc($outcomeDesc) {
        $this->outcomeDesc = $outcomeDesc;
        return $this;
    }

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPurposeOfEvent() {
        return $this->purposeOfEvent;
    }

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $purposeOfEvent
     * @return $this
     */
    public function addPurposeOfEvent($purposeOfEvent) {
        $this->purposeOfEvent[] = $purposeOfEvent;
        return $this;
    }

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventAgent[]
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventAgent $agent
     * @return $this
     */
    public function addAgent($agent) {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * The system that is reporting the event.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventSource
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * The system that is reporting the event.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventSource $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventEntity[]
     */
    public function getEntity() {
        return $this->entity;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventEntity $entity
     * @return $this
     */
    public function addEntity($entity) {
        $this->entity[] = $entity;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['subtype'])) {
                if (is_array($data['subtype'])) {
                    foreach($data['subtype'] as $d) {
                        $this->addSubtype($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subtype" must be array of objects or null, '.gettype($data['subtype']).' seen.');
                }
            }
            if (isset($data['action'])) {
                $this->setAction($data['action']);
            }
            if (isset($data['recorded'])) {
                $this->setRecorded($data['recorded']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['outcomeDesc'])) {
                $this->setOutcomeDesc($data['outcomeDesc']);
            }
            if (isset($data['purposeOfEvent'])) {
                if (is_array($data['purposeOfEvent'])) {
                    foreach($data['purposeOfEvent'] as $d) {
                        $this->addPurposeOfEvent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"purposeOfEvent" must be array of objects or null, '.gettype($data['purposeOfEvent']).' seen.');
                }
            }
            if (isset($data['agent'])) {
                if (is_array($data['agent'])) {
                    foreach($data['agent'] as $d) {
                        $this->addAgent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"agent" must be array of objects or null, '.gettype($data['agent']).' seen.');
                }
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['entity'])) {
                if (is_array($data['entity'])) {
                    foreach($data['entity'] as $d) {
                        $this->addEntity($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"entity" must be array of objects or null, '.gettype($data['entity']).' seen.');
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->subtype)) {
            $json['subtype'] = [];
            foreach($this->subtype as $subtype) {
                if (null !== $subtype) $json['subtype'][] = $subtype;
            }
        }
        if (isset($this->action)) $json['action'] = $this->action;
        if (isset($this->recorded)) $json['recorded'] = $this->recorded;
        if (isset($this->outcome)) $json['outcome'] = $this->outcome;
        if (isset($this->outcomeDesc)) $json['outcomeDesc'] = $this->outcomeDesc;
        if (0 < count($this->purposeOfEvent)) {
            $json['purposeOfEvent'] = [];
            foreach($this->purposeOfEvent as $purposeOfEvent) {
                if (null !== $purposeOfEvent) $json['purposeOfEvent'][] = $purposeOfEvent;
            }
        }
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                if (null !== $agent) $json['agent'][] = $agent;
            }
        }
        if (isset($this->source)) $json['source'] = $this->source;
        if (0 < count($this->entity)) {
            $json['entity'] = [];
            foreach($this->entity as $entity) {
                if (null !== $entity) $json['entity'][] = $entity;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AuditEvent xmlns="http://hl7.org/fhir"></AuditEvent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->subtype)) {
            foreach($this->subtype as $subtype) {
                $subtype->xmlSerialize(true, $sxe->addChild('subtype'));
            }
        }
        if (isset($this->action)) $this->action->xmlSerialize(true, $sxe->addChild('action'));
        if (isset($this->recorded)) $this->recorded->xmlSerialize(true, $sxe->addChild('recorded'));
        if (isset($this->outcome)) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (isset($this->outcomeDesc)) $this->outcomeDesc->xmlSerialize(true, $sxe->addChild('outcomeDesc'));
        if (0 < count($this->purposeOfEvent)) {
            foreach($this->purposeOfEvent as $purposeOfEvent) {
                $purposeOfEvent->xmlSerialize(true, $sxe->addChild('purposeOfEvent'));
            }
        }
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (0 < count($this->entity)) {
            foreach($this->entity as $entity) {
                $entity->xmlSerialize(true, $sxe->addChild('entity'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}