<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

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
use HL7\FHIR\DSTU1\FHIRElement\FHIRBindingConformance;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference;
use HL7\FHIR\DSTU1\FHIRElement\FHIRString;
use HL7\FHIR\DSTU1\FHIRElement\FHIRUri;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\FHIRStringPrimitive;
use HL7\FHIR\DSTU1\FHIRUriPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileBinding
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileBinding extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING;

    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_IS_EXTENSIBLE = 'isExtensible';
    const FIELD_IS_EXTENSIBLE_EXT = '_isExtensible';
    const FIELD_CONFORMANCE = 'conformance';
    const FIELD_CONFORMANCE_EXT = '_conformance';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_REFERENCE_URI = 'referenceUri';
    const FIELD_REFERENCE_URI_EXT = '_referenceUri';
    const FIELD_REFERENCE_RESOURCE = 'referenceResource';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isExtensible = null;
    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBindingConformance
     */
    protected null|FHIRBindingConformance $conformance = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $referenceUri = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $referenceResource = null;

    /**
     * Validation map for fields in type Profile.Binding
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRProfileBinding Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_IS_EXTENSIBLE]) || isset($data[self::FIELD_IS_EXTENSIBLE_EXT])) {
            $value = $data[self::FIELD_IS_EXTENSIBLE] ?? null;
            $ext = (isset($data[self::FIELD_IS_EXTENSIBLE_EXT]) && is_array($data[self::FIELD_IS_EXTENSIBLE_EXT])) ? $data[self::FIELD_IS_EXTENSIBLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsExtensible($value);
                } else if (is_array($value)) {
                    $this->setIsExtensible(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsExtensible(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsExtensible(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONFORMANCE]) || isset($data[self::FIELD_CONFORMANCE_EXT])) {
            $value = $data[self::FIELD_CONFORMANCE] ?? null;
            $ext = (isset($data[self::FIELD_CONFORMANCE_EXT]) && is_array($data[self::FIELD_CONFORMANCE_EXT])) ? $data[self::FIELD_CONFORMANCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBindingConformance) {
                    $this->setConformance($value);
                } else if (is_array($value)) {
                    $this->setConformance(new FHIRBindingConformance(array_merge($ext, $value)));
                } else {
                    $this->setConformance(new FHIRBindingConformance([FHIRBindingConformance::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConformance(new FHIRBindingConformance($ext));
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
        if (isset($data[self::FIELD_REFERENCE_URI]) || isset($data[self::FIELD_REFERENCE_URI_EXT])) {
            $value = $data[self::FIELD_REFERENCE_URI] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_URI_EXT]) && is_array($data[self::FIELD_REFERENCE_URI_EXT])) ? $data[self::FIELD_REFERENCE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setReferenceUri($value);
                } else if (is_array($value)) {
                    $this->setReferenceUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setReferenceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReferenceUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_RESOURCE])) {
            if ($data[self::FIELD_REFERENCE_RESOURCE] instanceof FHIRResourceReference) {
                $this->setReferenceResource($data[self::FIELD_REFERENCE_RESOURCE]);
            } else {
                $this->setReferenceResource(new FHIRResourceReference($data[self::FIELD_REFERENCE_RESOURCE]));
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getIsExtensible(): null|FHIRBoolean
    {
        return $this->isExtensible;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @param null|string|bool|\HL7\FHIR\DSTU1\FHIRBooleanPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean $isExtensible
     * @return static
     */
    public function setIsExtensible(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isExtensible = null): self
    {
        if (null !== $isExtensible && !($isExtensible instanceof FHIRBoolean)) {
            $isExtensible = new FHIRBoolean($isExtensible);
        }
        $this->_trackValueSet($this->isExtensible, $isExtensible);
        $this->isExtensible = $isExtensible;
        return $this;
    }

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBindingConformance
     */
    public function getConformance(): null|FHIRBindingConformance
    {
        return $this->conformance;
    }

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBindingConformance $conformance
     * @return static
     */
    public function setConformance(null|FHIRBindingConformance $conformance = null): self
    {
        if (null === $conformance) {
            $conformance = new FHIRBindingConformance();
        }
        $this->_trackValueSet($this->conformance, $conformance);
        $this->conformance = $conformance;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the intended use of this particular set of codes.
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
     * Describes the intended use of this particular set of codes.
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
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRUri
     */
    public function getReferenceUri(): null|FHIRUri
    {
        return $this->referenceUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRUriPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRUri $referenceUri
     * @return static
     */
    public function setReferenceUri(null|string|FHIRUriPrimitive|FHIRUri $referenceUri = null): self
    {
        if (null !== $referenceUri && !($referenceUri instanceof FHIRUri)) {
            $referenceUri = new FHIRUri($referenceUri);
        }
        $this->_trackValueSet($this->referenceUri, $referenceUri);
        $this->referenceUri = $referenceUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getReferenceResource(): null|FHIRResourceReference
    {
        return $this->referenceResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $referenceResource
     * @return static
     */
    public function setReferenceResource(null|FHIRResourceReference $referenceResource = null): self
    {
        if (null === $referenceResource) {
            $referenceResource = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->referenceResource, $referenceResource);
        $this->referenceResource = $referenceResource;
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsExtensible())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_EXTENSIBLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConformance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONFORMANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_RESOURCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_EXTENSIBLE])) {
            $v = $this->getIsExtensible();
            foreach($validationRules[self::FIELD_IS_EXTENSIBLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_IS_EXTENSIBLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_EXTENSIBLE])) {
                        $errs[self::FIELD_IS_EXTENSIBLE] = [];
                    }
                    $errs[self::FIELD_IS_EXTENSIBLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONFORMANCE])) {
            $v = $this->getConformance();
            foreach($validationRules[self::FIELD_CONFORMANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_CONFORMANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFORMANCE])) {
                        $errs[self::FIELD_CONFORMANCE] = [];
                    }
                    $errs[self::FIELD_CONFORMANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_URI])) {
            $v = $this->getReferenceUri();
            foreach($validationRules[self::FIELD_REFERENCE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_REFERENCE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_URI])) {
                        $errs[self::FIELD_REFERENCE_URI] = [];
                    }
                    $errs[self::FIELD_REFERENCE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_RESOURCE])) {
            $v = $this->getReferenceResource();
            foreach($validationRules[self::FIELD_REFERENCE_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_REFERENCE_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_RESOURCE])) {
                        $errs[self::FIELD_REFERENCE_RESOURCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_RESOURCE][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
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
        } else if (!($type instanceof FHIRProfileBinding)) {
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
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_IS_EXTENSIBLE === $n->nodeName) {
                $type->setIsExtensible(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONFORMANCE === $n->nodeName) {
                $type->setConformance(FHIRBindingConformance::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE_URI === $n->nodeName) {
                $type->setReferenceUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE_RESOURCE === $n->nodeName) {
                $type->setReferenceResource(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IS_EXTENSIBLE);
        if (null !== $n) {
            $pt = $type->getIsExtensible();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIsExtensible($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_REFERENCE_URI);
        if (null !== $n) {
            $pt = $type->getReferenceUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReferenceUri($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ProfileBinding'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIsExtensible())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IS_EXTENSIBLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConformance())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONFORMANCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReferenceUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIsExtensible())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_EXTENSIBLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_EXTENSIBLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConformance())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONFORMANCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBindingConformance::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONFORMANCE_EXT} = $ext;
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
        if (null !== ($v = $this->getReferenceUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REFERENCE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $out->{self::FIELD_REFERENCE_RESOURCE} = $v;
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