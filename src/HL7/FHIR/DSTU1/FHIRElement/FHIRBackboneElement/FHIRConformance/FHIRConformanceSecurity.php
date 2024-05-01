<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use HL7\FHIR\DSTU1\FHIRBooleanPrimitive;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRString;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\FHIRStringPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 *
 * Class FHIRConformanceSecurity
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceSecurity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY;

    const FIELD_CORS = 'cors';
    const FIELD_CORS_EXT = '_cors';
    const FIELD_SERVICE = 'service';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_CERTIFICATE = 'certificate';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Server adds CORS headers when responding to requests - this enables javascript
     * applications to yuse the server.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $cors = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services are supported/required by the system.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $service = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General description of how security works.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Certificates associated with security profiles.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate[]
     */
    protected null|array $certificate = [];

    /**
     * Validation map for fields in type Conformance.Security
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRConformanceSecurity Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CORS]) || isset($data[self::FIELD_CORS_EXT])) {
            $value = $data[self::FIELD_CORS] ?? null;
            $ext = (isset($data[self::FIELD_CORS_EXT]) && is_array($data[self::FIELD_CORS_EXT])) ? $data[self::FIELD_CORS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCors($value);
                } else if (is_array($value)) {
                    $this->setCors(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCors(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCors(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if (is_array($data[self::FIELD_SERVICE])) {
                foreach($data[self::FIELD_SERVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addService($v);
                    } else {
                        $this->addService(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SERVICE] instanceof FHIRCodeableConcept) {
                $this->addService($data[self::FIELD_SERVICE]);
            } else {
                $this->addService(new FHIRCodeableConcept($data[self::FIELD_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CERTIFICATE])) {
            if (is_array($data[self::FIELD_CERTIFICATE])) {
                foreach($data[self::FIELD_CERTIFICATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceCertificate) {
                        $this->addCertificate($v);
                    } else {
                        $this->addCertificate(new FHIRConformanceCertificate($v));
                    }
                }
            } elseif ($data[self::FIELD_CERTIFICATE] instanceof FHIRConformanceCertificate) {
                $this->addCertificate($data[self::FIELD_CERTIFICATE]);
            } else {
                $this->addCertificate(new FHIRConformanceCertificate($data[self::FIELD_CERTIFICATE]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Server adds CORS headers when responding to requests - this enables javascript
     * applications to yuse the server.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getCors(): null|FHIRBoolean
    {
        return $this->cors;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Server adds CORS headers when responding to requests - this enables javascript
     * applications to yuse the server.
     *
     * @param null|string|bool|\HL7\FHIR\DSTU1\FHIRBooleanPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean $cors
     * @return static
     */
    public function setCors(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $cors = null): self
    {
        if (null !== $cors && !($cors instanceof FHIRBoolean)) {
            $cors = new FHIRBoolean($cors);
        }
        $this->_trackValueSet($this->cors, $cors);
        $this->cors = $cors;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services are supported/required by the system.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getService(): null|array
    {
        return $this->service;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services are supported/required by the system.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $service
     * @return static
     */
    public function addService(null|FHIRCodeableConcept $service = null): self
    {
        if (null === $service) {
            $service = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->service[] = $service;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services are supported/required by the system.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[] $service
     * @return static
     */
    public function setService(array $service = []): self
    {
        if ([] !== $this->service) {
            $this->_trackValuesRemoved(count($this->service));
            $this->service = [];
        }
        if ([] === $service) {
            return $this;
        }
        foreach($service as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addService($v);
            } else {
                $this->addService(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General description of how security works.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General description of how security works.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Certificates associated with security profiles.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate[]
     */
    public function getCertificate(): null|array
    {
        return $this->certificate;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Certificates associated with security profiles.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate $certificate
     * @return static
     */
    public function addCertificate(null|FHIRConformanceCertificate $certificate = null): self
    {
        if (null === $certificate) {
            $certificate = new FHIRConformanceCertificate();
        }
        $this->_trackValueAdded();
        $this->certificate[] = $certificate;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Certificates associated with security profiles.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate[] $certificate
     * @return static
     */
    public function setCertificate(array $certificate = []): self
    {
        if ([] !== $this->certificate) {
            $this->_trackValuesRemoved(count($this->certificate));
            $this->certificate = [];
        }
        if ([] === $certificate) {
            return $this;
        }
        foreach($certificate as $v) {
            if ($v instanceof FHIRConformanceCertificate) {
                $this->addCertificate($v);
            } else {
                $this->addCertificate(new FHIRConformanceCertificate($v));
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
        if (null !== ($v = $this->getCors())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CORS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getService())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCertificate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CERTIFICATE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CORS])) {
            $v = $this->getCors();
            foreach($validationRules[self::FIELD_CORS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY, self::FIELD_CORS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CORS])) {
                        $errs[self::FIELD_CORS] = [];
                    }
                    $errs[self::FIELD_CORS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE])) {
            $v = $this->getService();
            foreach($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY, self::FIELD_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE])) {
                        $errs[self::FIELD_SERVICE] = [];
                    }
                    $errs[self::FIELD_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CERTIFICATE])) {
            $v = $this->getCertificate();
            foreach($validationRules[self::FIELD_CERTIFICATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY, self::FIELD_CERTIFICATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CERTIFICATE])) {
                        $errs[self::FIELD_CERTIFICATE] = [];
                    }
                    $errs[self::FIELD_CERTIFICATE][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity
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
        } else if (!($type instanceof FHIRConformanceSecurity)) {
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
            if (self::FIELD_CORS === $n->nodeName) {
                $type->setCors(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE === $n->nodeName) {
                $type->addService(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CERTIFICATE === $n->nodeName) {
                $type->addCertificate(FHIRConformanceCertificate::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CORS);
        if (null !== $n) {
            $pt = $type->getCors();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCors($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ConformanceSecurity'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getCors())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CORS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getService())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCertificate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CERTIFICATE);
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
        if (null !== ($v = $this->getCors())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CORS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CORS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getService())) {
            $out->{self::FIELD_SERVICE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SERVICE}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCertificate())) {
            $out->{self::FIELD_CERTIFICATE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CERTIFICATE}[] = $v;
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