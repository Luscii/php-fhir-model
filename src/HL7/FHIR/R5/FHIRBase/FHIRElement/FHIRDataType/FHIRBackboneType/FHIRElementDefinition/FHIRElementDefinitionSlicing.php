<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSlicingRules;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionSlicing
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition
 */
class FHIRElementDefinitionSlicing extends FHIRBackboneType
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING;

    const FIELD_DISCRIMINATOR = 'discriminator';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ORDERED = 'ordered';
    const FIELD_ORDERED_EXT = '_ordered';
    const FIELD_RULES = 'rules';
    const FIELD_RULES_EXT = '_rules';

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionDiscriminator[]
     */
    protected null|array $discriminator = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human-readable text description of how the slicing works. If there is no
     * discriminator, this is required to be present to provide whatever information is
     * possible about how the slices can be differentiated.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $ordered = null;
    /**
     * How slices are interpreted when evaluating an instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSlicingRules
     */
    protected null|FHIRSlicingRules $rules = null;

    /**
     * Validation map for fields in type ElementDefinition.Slicing
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRElementDefinitionSlicing Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DISCRIMINATOR])) {
            if (is_array($data[self::FIELD_DISCRIMINATOR])) {
                foreach($data[self::FIELD_DISCRIMINATOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRElementDefinitionDiscriminator) {
                        $this->addDiscriminator($v);
                    } else {
                        $this->addDiscriminator(new FHIRElementDefinitionDiscriminator($v));
                    }
                }
            } elseif ($data[self::FIELD_DISCRIMINATOR] instanceof FHIRElementDefinitionDiscriminator) {
                $this->addDiscriminator($data[self::FIELD_DISCRIMINATOR]);
            } else {
                $this->addDiscriminator(new FHIRElementDefinitionDiscriminator($data[self::FIELD_DISCRIMINATOR]));
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
        if (isset($data[self::FIELD_ORDERED]) || isset($data[self::FIELD_ORDERED_EXT])) {
            $value = $data[self::FIELD_ORDERED] ?? null;
            $ext = (isset($data[self::FIELD_ORDERED_EXT]) && is_array($data[self::FIELD_ORDERED_EXT])) ? $data[self::FIELD_ORDERED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setOrdered($value);
                } else if (is_array($value)) {
                    $this->setOrdered(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setOrdered(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOrdered(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_RULES]) || isset($data[self::FIELD_RULES_EXT])) {
            $value = $data[self::FIELD_RULES] ?? null;
            $ext = (isset($data[self::FIELD_RULES_EXT]) && is_array($data[self::FIELD_RULES_EXT])) ? $data[self::FIELD_RULES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSlicingRules) {
                    $this->setRules($value);
                } else if (is_array($value)) {
                    $this->setRules(new FHIRSlicingRules(array_merge($ext, $value)));
                } else {
                    $this->setRules(new FHIRSlicingRules([FHIRSlicingRules::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRules(new FHIRSlicingRules($ext));
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
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionDiscriminator[]
     */
    public function getDiscriminator(): null|array
    {
        return $this->discriminator;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionDiscriminator $discriminator
     * @return static
     */
    public function addDiscriminator(null|FHIRElementDefinitionDiscriminator $discriminator = null): self
    {
        if (null === $discriminator) {
            $discriminator = new FHIRElementDefinitionDiscriminator();
        }
        $this->_trackValueAdded();
        $this->discriminator[] = $discriminator;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionDiscriminator[] $discriminator
     * @return static
     */
    public function setDiscriminator(array $discriminator = []): self
    {
        if ([] !== $this->discriminator) {
            $this->_trackValuesRemoved(count($this->discriminator));
            $this->discriminator = [];
        }
        if ([] === $discriminator) {
            return $this;
        }
        foreach($discriminator as $v) {
            if ($v instanceof FHIRElementDefinitionDiscriminator) {
                $this->addDiscriminator($v);
            } else {
                $this->addDiscriminator(new FHIRElementDefinitionDiscriminator($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human-readable text description of how the slicing works. If there is no
     * discriminator, this is required to be present to provide whatever information is
     * possible about how the slices can be differentiated.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human-readable text description of how the slicing works. If there is no
     * discriminator, this is required to be present to provide whatever information is
     * possible about how the slices can be differentiated.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $description
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getOrdered(): null|FHIRBoolean
    {
        return $this->ordered;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $ordered
     * @return static
     */
    public function setOrdered(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $ordered = null): self
    {
        if (null !== $ordered && !($ordered instanceof FHIRBoolean)) {
            $ordered = new FHIRBoolean($ordered);
        }
        $this->_trackValueSet($this->ordered, $ordered);
        $this->ordered = $ordered;
        return $this;
    }

    /**
     * How slices are interpreted when evaluating an instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSlicingRules
     */
    public function getRules(): null|FHIRSlicingRules
    {
        return $this->rules;
    }

    /**
     * How slices are interpreted when evaluating an instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSlicingRules $rules
     * @return static
     */
    public function setRules(null|FHIRSlicingRules $rules = null): self
    {
        if (null === $rules) {
            $rules = new FHIRSlicingRules();
        }
        $this->_trackValueSet($this->rules, $rules);
        $this->rules = $rules;
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
        if ([] !== ($vs = $this->getDiscriminator())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DISCRIMINATOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrdered())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDERED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRules())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RULES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DISCRIMINATOR])) {
            $v = $this->getDiscriminator();
            foreach($validationRules[self::FIELD_DISCRIMINATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING, self::FIELD_DISCRIMINATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCRIMINATOR])) {
                        $errs[self::FIELD_DISCRIMINATOR] = [];
                    }
                    $errs[self::FIELD_DISCRIMINATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERED])) {
            $v = $this->getOrdered();
            foreach($validationRules[self::FIELD_ORDERED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING, self::FIELD_ORDERED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED])) {
                        $errs[self::FIELD_ORDERED] = [];
                    }
                    $errs[self::FIELD_ORDERED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULES])) {
            $v = $this->getRules();
            foreach($validationRules[self::FIELD_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING, self::FIELD_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULES])) {
                        $errs[self::FIELD_RULES] = [];
                    }
                    $errs[self::FIELD_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_TYPE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionSlicing $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionSlicing
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
        } else if (!($type instanceof FHIRElementDefinitionSlicing)) {
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
            if (self::FIELD_DISCRIMINATOR === $n->nodeName) {
                $type->addDiscriminator(FHIRElementDefinitionDiscriminator::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ORDERED === $n->nodeName) {
                $type->setOrdered(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_RULES === $n->nodeName) {
                $type->setRules(FHIRSlicingRules::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_ORDERED);
        if (null !== $n) {
            $pt = $type->getOrdered();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOrdered($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ElementDefinitionSlicing'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getDiscriminator())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DISCRIMINATOR);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrdered())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORDERED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRules())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RULES);
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
        if ([] !== ($vs = $this->getDiscriminator())) {
            $out->{self::FIELD_DISCRIMINATOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DISCRIMINATOR}[] = $v;
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
        if (null !== ($v = $this->getOrdered())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ORDERED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORDERED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRules())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RULES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSlicingRules::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RULES_EXT} = $ext;
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