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
 * Related artifacts such as additional documentation, justification, or bibliographic references.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRRelatedArtifact extends FHIRElement implements \JsonSerializable
{
    /**
     * The type of relationship to the related artifact.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifactType
     */
    public $type = null;

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $citation = null;

    /**
     * A url for the artifact that can be followed to access the actual content.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAttachment
     */
    public $document = null;

    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $resource = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'RelatedArtifact';

    /**
     * The type of relationship to the related artifact.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifactType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of relationship to the related artifact.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifactType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDisplay() {
        return $this->display;
    }

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display) {
        $this->display = $display;
        return $this;
    }

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getCitation() {
        return $this->citation;
    }

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $citation
     * @return $this
     */
    public function setCitation($citation) {
        $this->citation = $citation;
        return $this;
    }

    /**
     * A url for the artifact that can be followed to access the actual content.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * A url for the artifact that can be followed to access the actual content.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAttachment
     */
    public function getDocument() {
        return $this->document;
    }

    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAttachment $document
     * @return $this
     */
    public function setDocument($document) {
        $this->document = $document;
        return $this;
    }

    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getResource() {
        return $this->resource;
    }

    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $resource
     * @return $this
     */
    public function setResource($resource) {
        $this->resource = $resource;
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
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['citation'])) {
                $this->setCitation($data['citation']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['document'])) {
                $this->setDocument($data['document']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->display)) $json['display'] = $this->display;
        if (isset($this->citation)) $json['citation'] = $this->citation;
        if (isset($this->url)) $json['url'] = $this->url;
        if (isset($this->document)) $json['document'] = $this->document;
        if (isset($this->resource)) $json['resource'] = $this->resource;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<RelatedArtifact xmlns="http://hl7.org/fhir"></RelatedArtifact>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->display)) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (isset($this->citation)) $this->citation->xmlSerialize(true, $sxe->addChild('citation'));
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->document)) $this->document->xmlSerialize(true, $sxe->addChild('document'));
        if (isset($this->resource)) $this->resource->xmlSerialize(true, $sxe->addChild('resource'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}