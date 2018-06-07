<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRImagingStudy;

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
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 */
class FHIRImagingStudySeries extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Formal identifier for this series.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * The numeric identifier of this series in the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUnsignedInt
     */
    public $number = null;

    /**
     * The modality of this series sequence.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $modality = null;

    /**
     * A description of the series.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Availability of series (online, offline or nearline).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.type.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $endpoint = [];

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $laterality = null;

    /**
     * The date and time the series was started.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * The physician or operator (often the radiology technician)  who performed the series. The performer is recorded at the series level, since each series in a study may be performed by a different practitioner, at different times, and using different devices. A series may be performed by multiple practitioners.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $performer = [];

    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public $instance = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy.Series';

    /**
     * Formal identifier for this series.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIROid
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Formal identifier for this series.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid) {
        $this->uid = $uid;
        return $this;
    }

    /**
     * The numeric identifier of this series in the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * The numeric identifier of this series in the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUnsignedInt $number
     * @return $this
     */
    public function setNumber($number) {
        $this->number = $number;
        return $this;
    }

    /**
     * The modality of this series sequence.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getModality() {
        return $this->modality;
    }

    /**
     * The modality of this series sequence.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $modality
     * @return $this
     */
    public function setModality($modality) {
        $this->modality = $modality;
        return $this;
    }

    /**
     * A description of the series.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A description of the series.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances() {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances) {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability() {
        return $this->availability;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRInstanceAvailability $availability
     * @return $this
     */
    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.type.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.type.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint) {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $bodySite
     * @return $this
     */
    public function setBodySite($bodySite) {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getLaterality() {
        return $this->laterality;
    }

    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $laterality
     * @return $this
     */
    public function setLaterality($laterality) {
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * The date and time the series was started.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getStarted() {
        return $this->started;
    }

    /**
     * The date and time the series was started.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $started
     * @return $this
     */
    public function setStarted($started) {
        $this->started = $started;
        return $this;
    }

    /**
     * The physician or operator (often the radiology technician)  who performed the series. The performer is recorded at the series level, since each series in a study may be performed by a different practitioner, at different times, and using different devices. A series may be performed by multiple practitioners.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The physician or operator (often the radiology technician)  who performed the series. The performer is recorded at the series level, since each series in a study may be performed by a different practitioner, at different times, and using different devices. A series may be performed by multiple practitioners.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function addPerformer($performer) {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance() {
        return $this->instance;
    }

    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance $instance
     * @return $this
     */
    public function addInstance($instance) {
        $this->instance[] = $instance;
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
            if (isset($data['uid'])) {
                $this->setUid($data['uid']);
            }
            if (isset($data['number'])) {
                $this->setNumber($data['number']);
            }
            if (isset($data['modality'])) {
                $this->setModality($data['modality']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['numberOfInstances'])) {
                $this->setNumberOfInstances($data['numberOfInstances']);
            }
            if (isset($data['availability'])) {
                $this->setAvailability($data['availability']);
            }
            if (isset($data['endpoint'])) {
                if (is_array($data['endpoint'])) {
                    foreach($data['endpoint'] as $d) {
                        $this->addEndpoint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"endpoint" must be array of objects or null, '.gettype($data['endpoint']).' seen.');
                }
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['laterality'])) {
                $this->setLaterality($data['laterality']);
            }
            if (isset($data['started'])) {
                $this->setStarted($data['started']);
            }
            if (isset($data['performer'])) {
                if (is_array($data['performer'])) {
                    foreach($data['performer'] as $d) {
                        $this->addPerformer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"performer" must be array of objects or null, '.gettype($data['performer']).' seen.');
                }
            }
            if (isset($data['instance'])) {
                if (is_array($data['instance'])) {
                    foreach($data['instance'] as $d) {
                        $this->addInstance($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instance" must be array of objects or null, '.gettype($data['instance']).' seen.');
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
        if (isset($this->uid)) $json['uid'] = $this->uid;
        if (isset($this->number)) $json['number'] = $this->number;
        if (isset($this->modality)) $json['modality'] = $this->modality;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->numberOfInstances)) $json['numberOfInstances'] = $this->numberOfInstances;
        if (isset($this->availability)) $json['availability'] = $this->availability;
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                if (null !== $endpoint) $json['endpoint'][] = $endpoint;
            }
        }
        if (isset($this->bodySite)) $json['bodySite'] = $this->bodySite;
        if (isset($this->laterality)) $json['laterality'] = $this->laterality;
        if (isset($this->started)) $json['started'] = $this->started;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                if (null !== $performer) $json['performer'][] = $performer;
            }
        }
        if (0 < count($this->instance)) {
            $json['instance'] = [];
            foreach($this->instance as $instance) {
                if (null !== $instance) $json['instance'][] = $instance;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingStudySeries xmlns="http://hl7.org/fhir"></ImagingStudySeries>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->uid)) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (isset($this->number)) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (isset($this->modality)) $this->modality->xmlSerialize(true, $sxe->addChild('modality'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->numberOfInstances)) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
        if (isset($this->availability)) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if (isset($this->bodySite)) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (isset($this->laterality)) $this->laterality->xmlSerialize(true, $sxe->addChild('laterality'));
        if (isset($this->started)) $this->started->xmlSerialize(true, $sxe->addChild('started'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (0 < count($this->instance)) {
            foreach($this->instance as $instance) {
                $instance->xmlSerialize(true, $sxe->addChild('instance'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}