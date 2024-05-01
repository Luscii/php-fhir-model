<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A reference to a document of any kind for any purpose. While the term
 * “document” implies a more narrow focus, for this resource this "document"
 * encompasses *any* serialized object with a mime-type, it includes formal
 * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
 * specific documents like policy text, as well as a photo, video, or audio
 * recording acquired or used in healthcare. The DocumentReference resource
 * provides metadata about the document so that the document can be discovered and
 * managed. The actual content may be inline base64 encoded data or provided by
 * direct reference.
 *
 * Class FHIRDocumentReferenceContent
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference
 */
class FHIRDocumentReferenceContent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT;

    const FIELD_ATTACHMENT = 'attachment';
    const FIELD_PROFILE = 'profile';

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document or URL of the document along with critical metadata to prove
     * content has integrity.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    protected null|FHIRAttachment $attachment = null;
    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * An identifier of the document constraints, encoding, structure, and template
     * that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceProfile[]
     */
    protected null|array $profile = [];

    /**
     * Validation map for fields in type DocumentReference.Content
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDocumentReferenceContent Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ATTACHMENT])) {
            if ($data[self::FIELD_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setAttachment($data[self::FIELD_ATTACHMENT]);
            } else {
                $this->setAttachment(new FHIRAttachment($data[self::FIELD_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if (is_array($data[self::FIELD_PROFILE])) {
                foreach($data[self::FIELD_PROFILE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDocumentReferenceProfile) {
                        $this->addProfile($v);
                    } else {
                        $this->addProfile(new FHIRDocumentReferenceProfile($v));
                    }
                }
            } elseif ($data[self::FIELD_PROFILE] instanceof FHIRDocumentReferenceProfile) {
                $this->addProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->addProfile(new FHIRDocumentReferenceProfile($data[self::FIELD_PROFILE]));
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document or URL of the document along with critical metadata to prove
     * content has integrity.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    public function getAttachment(): null|FHIRAttachment
    {
        return $this->attachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document or URL of the document along with critical metadata to prove
     * content has integrity.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $attachment
     * @return static
     */
    public function setAttachment(null|FHIRAttachment $attachment = null): self
    {
        if (null === $attachment) {
            $attachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->attachment, $attachment);
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * An identifier of the document constraints, encoding, structure, and template
     * that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceProfile[]
     */
    public function getProfile(): null|array
    {
        return $this->profile;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * An identifier of the document constraints, encoding, structure, and template
     * that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceProfile $profile
     * @return static
     */
    public function addProfile(null|FHIRDocumentReferenceProfile $profile = null): self
    {
        if (null === $profile) {
            $profile = new FHIRDocumentReferenceProfile();
        }
        $this->_trackValueAdded();
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * An identifier of the document constraints, encoding, structure, and template
     * that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceProfile[] $profile
     * @return static
     */
    public function setProfile(array $profile = []): self
    {
        if ([] !== $this->profile) {
            $this->_trackValuesRemoved(count($this->profile));
            $this->profile = [];
        }
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRDocumentReferenceProfile) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRDocumentReferenceProfile($v));
            }
        }
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
        if (null !== ($v = $this->getAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ATTACHMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTACHMENT])) {
            $v = $this->getAttachment();
            foreach($validationRules[self::FIELD_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT, self::FIELD_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTACHMENT])) {
                        $errs[self::FIELD_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
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
        } else if (!($type instanceof FHIRDocumentReferenceContent)) {
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
            if (self::FIELD_ATTACHMENT === $n->nodeName) {
                $type->setAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_PROFILE === $n->nodeName) {
                $type->addProfile(FHIRDocumentReferenceProfile::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DocumentReferenceContent'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROFILE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getAttachment())) {
            $out->{self::FIELD_ATTACHMENT} = $v;
        }
        if ([] !== ($vs = $this->getProfile())) {
            $out->{self::FIELD_PROFILE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROFILE}[] = $v;
            }
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