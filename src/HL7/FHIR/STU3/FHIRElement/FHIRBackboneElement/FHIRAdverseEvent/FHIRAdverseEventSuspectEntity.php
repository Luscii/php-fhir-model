<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

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

use HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 *
 * Class FHIRAdverseEventSuspectEntity
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY;

    const FIELD_INSTANCE = 'instance';
    const FIELD_CAUSALITY = 'causality';
    const FIELD_CAUSALITY_EXT = '_causality';
    const FIELD_CAUSALITY_ASSESSMENT = 'causalityAssessment';
    const FIELD_CAUSALITY_PRODUCT_RELATEDNESS = 'causalityProductRelatedness';
    const FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT = '_causalityProductRelatedness';
    const FIELD_CAUSALITY_METHOD = 'causalityMethod';
    const FIELD_CAUSALITY_AUTHOR = 'causalityAuthor';
    const FIELD_CAUSALITY_RESULT = 'causalityResult';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $instance = null;
    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    protected null|FHIRAdverseEventCausality $causality = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $causalityAssessment = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $causalityProductRelatedness = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $causalityMethod = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $causalityAuthor = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $causalityResult = null;

    /**
     * Validation map for fields in type AdverseEvent.SuspectEntity
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRAdverseEventSuspectEntity Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_INSTANCE])) {
            if ($data[self::FIELD_INSTANCE] instanceof FHIRReference) {
                $this->setInstance($data[self::FIELD_INSTANCE]);
            } else {
                $this->setInstance(new FHIRReference($data[self::FIELD_INSTANCE]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY]) || isset($data[self::FIELD_CAUSALITY_EXT])) {
            $value = $data[self::FIELD_CAUSALITY] ?? null;
            $ext = (isset($data[self::FIELD_CAUSALITY_EXT]) && is_array($data[self::FIELD_CAUSALITY_EXT])) ? $data[self::FIELD_CAUSALITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdverseEventCausality) {
                    $this->setCausality($value);
                } else if (is_array($value)) {
                    $this->setCausality(new FHIRAdverseEventCausality(array_merge($ext, $value)));
                } else {
                    $this->setCausality(new FHIRAdverseEventCausality([FHIRAdverseEventCausality::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCausality(new FHIRAdverseEventCausality($ext));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_ASSESSMENT])) {
            if ($data[self::FIELD_CAUSALITY_ASSESSMENT] instanceof FHIRCodeableConcept) {
                $this->setCausalityAssessment($data[self::FIELD_CAUSALITY_ASSESSMENT]);
            } else {
                $this->setCausalityAssessment(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_ASSESSMENT]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]) || isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT])) {
            $value = $data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] ?? null;
            $ext = (isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT]) && is_array($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT])) ? $data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCausalityProductRelatedness($value);
                } else if (is_array($value)) {
                    $this->setCausalityProductRelatedness(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCausalityProductRelatedness(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCausalityProductRelatedness(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_METHOD])) {
            if ($data[self::FIELD_CAUSALITY_METHOD] instanceof FHIRCodeableConcept) {
                $this->setCausalityMethod($data[self::FIELD_CAUSALITY_METHOD]);
            } else {
                $this->setCausalityMethod(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_METHOD]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_AUTHOR])) {
            if ($data[self::FIELD_CAUSALITY_AUTHOR] instanceof FHIRReference) {
                $this->setCausalityAuthor($data[self::FIELD_CAUSALITY_AUTHOR]);
            } else {
                $this->setCausalityAuthor(new FHIRReference($data[self::FIELD_CAUSALITY_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_RESULT])) {
            if ($data[self::FIELD_CAUSALITY_RESULT] instanceof FHIRCodeableConcept) {
                $this->setCausalityResult($data[self::FIELD_CAUSALITY_RESULT]);
            } else {
                $this->setCausalityResult(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_RESULT]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getInstance(): null|FHIRReference
    {
        return $this->instance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $instance
     * @return static
     */
    public function setInstance(null|FHIRReference $instance = null): self
    {
        if (null === $instance) {
            $instance = new FHIRReference();
        }
        $this->_trackValueSet($this->instance, $instance);
        $this->instance = $instance;
        return $this;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality(): null|FHIRAdverseEventCausality
    {
        return $this->causality;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality $causality
     * @return static
     */
    public function setCausality(null|FHIRAdverseEventCausality $causality = null): self
    {
        if (null === $causality) {
            $causality = new FHIRAdverseEventCausality();
        }
        $this->_trackValueSet($this->causality, $causality);
        $this->causality = $causality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment(): null|FHIRCodeableConcept
    {
        return $this->causalityAssessment;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @return static
     */
    public function setCausalityAssessment(null|FHIRCodeableConcept $causalityAssessment = null): self
    {
        if (null === $causalityAssessment) {
            $causalityAssessment = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->causalityAssessment, $causalityAssessment);
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness(): null|FHIRString
    {
        return $this->causalityProductRelatedness;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $causalityProductRelatedness
     * @return static
     */
    public function setCausalityProductRelatedness(null|string|FHIRStringPrimitive|FHIRString $causalityProductRelatedness = null): self
    {
        if (null !== $causalityProductRelatedness && !($causalityProductRelatedness instanceof FHIRString)) {
            $causalityProductRelatedness = new FHIRString($causalityProductRelatedness);
        }
        $this->_trackValueSet($this->causalityProductRelatedness, $causalityProductRelatedness);
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod(): null|FHIRCodeableConcept
    {
        return $this->causalityMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @return static
     */
    public function setCausalityMethod(null|FHIRCodeableConcept $causalityMethod = null): self
    {
        if (null === $causalityMethod) {
            $causalityMethod = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->causalityMethod, $causalityMethod);
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor(): null|FHIRReference
    {
        return $this->causalityAuthor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $causalityAuthor
     * @return static
     */
    public function setCausalityAuthor(null|FHIRReference $causalityAuthor = null): self
    {
        if (null === $causalityAuthor) {
            $causalityAuthor = new FHIRReference();
        }
        $this->_trackValueSet($this->causalityAuthor, $causalityAuthor);
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult(): null|FHIRCodeableConcept
    {
        return $this->causalityResult;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $causalityResult
     * @return static
     */
    public function setCausalityResult(null|FHIRCodeableConcept $causalityResult = null): self
    {
        if (null === $causalityResult) {
            $causalityResult = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->causalityResult, $causalityResult);
        $this->causalityResult = $causalityResult;
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
        if (null !== ($v = $this->getInstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_ASSESSMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_AUTHOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCausalityResult())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAUSALITY_RESULT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCE])) {
            $v = $this->getInstance();
            foreach($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCE])) {
                        $errs[self::FIELD_INSTANCE] = [];
                    }
                    $errs[self::FIELD_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY])) {
            $v = $this->getCausality();
            foreach($validationRules[self::FIELD_CAUSALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY])) {
                        $errs[self::FIELD_CAUSALITY] = [];
                    }
                    $errs[self::FIELD_CAUSALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_ASSESSMENT])) {
            $v = $this->getCausalityAssessment();
            foreach($validationRules[self::FIELD_CAUSALITY_ASSESSMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_ASSESSMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_ASSESSMENT])) {
                        $errs[self::FIELD_CAUSALITY_ASSESSMENT] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_ASSESSMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
            $v = $this->getCausalityProductRelatedness();
            foreach($validationRules[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
                        $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_METHOD])) {
            $v = $this->getCausalityMethod();
            foreach($validationRules[self::FIELD_CAUSALITY_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_METHOD])) {
                        $errs[self::FIELD_CAUSALITY_METHOD] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_AUTHOR])) {
            $v = $this->getCausalityAuthor();
            foreach($validationRules[self::FIELD_CAUSALITY_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_AUTHOR])) {
                        $errs[self::FIELD_CAUSALITY_AUTHOR] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_RESULT])) {
            $v = $this->getCausalityResult();
            foreach($validationRules[self::FIELD_CAUSALITY_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY, self::FIELD_CAUSALITY_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_RESULT])) {
                        $errs[self::FIELD_CAUSALITY_RESULT] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_RESULT][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
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
        } else if (!($type instanceof FHIRAdverseEventSuspectEntity)) {
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
            if (self::FIELD_INSTANCE === $n->nodeName) {
                $type->setInstance(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY === $n->nodeName) {
                $type->setCausality(FHIRAdverseEventCausality::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_ASSESSMENT === $n->nodeName) {
                $type->setCausalityAssessment(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS === $n->nodeName) {
                $type->setCausalityProductRelatedness(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_METHOD === $n->nodeName) {
                $type->setCausalityMethod(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_AUTHOR === $n->nodeName) {
                $type->setCausalityAuthor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CAUSALITY_RESULT === $n->nodeName) {
                $type->setCausalityResult(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS);
        if (null !== $n) {
            $pt = $type->getCausalityProductRelatedness();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCausalityProductRelatedness($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('AdverseEventSuspectEntity'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getInstance())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSTANCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausality())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_ASSESSMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_METHOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_AUTHOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CAUSALITY_RESULT);
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
        if (null !== ($v = $this->getInstance())) {
            $out->{self::FIELD_INSTANCE} = $v;
        }
        if (null !== ($v = $this->getCausality())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CAUSALITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAdverseEventCausality::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CAUSALITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $out->{self::FIELD_CAUSALITY_ASSESSMENT} = $v;
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $out->{self::FIELD_CAUSALITY_METHOD} = $v;
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $out->{self::FIELD_CAUSALITY_AUTHOR} = $v;
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $out->{self::FIELD_CAUSALITY_RESULT} = $v;
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