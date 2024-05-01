<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRRange;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * A populatioof people with some set of grouping criteria.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRPopulation
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRPopulation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_POPULATION;

    const FIELD_AGE_RANGE = 'ageRange';
    const FIELD_AGE_CODEABLE_CONCEPT = 'ageCodeableConcept';
    const FIELD_GENDER = 'gender';
    const FIELD_RACE = 'race';
    const FIELD_PHYSIOLOGICAL_CONDITION = 'physiologicalCondition';

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $ageRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $ageCodeableConcept = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $gender = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $race = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $physiologicalCondition = null;

    /**
     * Validation map for fields in type Population
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRPopulation Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGE_RANGE])) {
            if ($data[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
                $this->setAgeRange($data[self::FIELD_AGE_RANGE]);
            } else {
                $this->setAgeRange(new FHIRRange($data[self::FIELD_AGE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_AGE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AGE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAgeCodeableConcept($data[self::FIELD_AGE_CODEABLE_CONCEPT]);
            } else {
                $this->setAgeCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AGE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_GENDER])) {
            if ($data[self::FIELD_GENDER] instanceof FHIRCodeableConcept) {
                $this->setGender($data[self::FIELD_GENDER]);
            } else {
                $this->setGender(new FHIRCodeableConcept($data[self::FIELD_GENDER]));
            }
        }
        if (isset($data[self::FIELD_RACE])) {
            if ($data[self::FIELD_RACE] instanceof FHIRCodeableConcept) {
                $this->setRace($data[self::FIELD_RACE]);
            } else {
                $this->setRace(new FHIRCodeableConcept($data[self::FIELD_RACE]));
            }
        }
        if (isset($data[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
            if ($data[self::FIELD_PHYSIOLOGICAL_CONDITION] instanceof FHIRCodeableConcept) {
                $this->setPhysiologicalCondition($data[self::FIELD_PHYSIOLOGICAL_CONDITION]);
            } else {
                $this->setPhysiologicalCondition(new FHIRCodeableConcept($data[self::FIELD_PHYSIOLOGICAL_CONDITION]));
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
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRRange
     */
    public function getAgeRange(): null|FHIRRange
    {
        return $this->ageRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRRange $ageRange
     * @return static
     */
    public function setAgeRange(null|FHIRRange $ageRange = null): self
    {
        if (null === $ageRange) {
            $ageRange = new FHIRRange();
        }
        $this->_trackValueSet($this->ageRange, $ageRange);
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAgeCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->ageCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $ageCodeableConcept
     * @return static
     */
    public function setAgeCodeableConcept(null|FHIRCodeableConcept $ageCodeableConcept = null): self
    {
        if (null === $ageCodeableConcept) {
            $ageCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->ageCodeableConcept, $ageCodeableConcept);
        $this->ageCodeableConcept = $ageCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGender(): null|FHIRCodeableConcept
    {
        return $this->gender;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $gender
     * @return static
     */
    public function setGender(null|FHIRCodeableConcept $gender = null): self
    {
        if (null === $gender) {
            $gender = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->gender, $gender);
        $this->gender = $gender;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRace(): null|FHIRCodeableConcept
    {
        return $this->race;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $race
     * @return static
     */
    public function setRace(null|FHIRCodeableConcept $race = null): self
    {
        if (null === $race) {
            $race = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->race, $race);
        $this->race = $race;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysiologicalCondition(): null|FHIRCodeableConcept
    {
        return $this->physiologicalCondition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $physiologicalCondition
     * @return static
     */
    public function setPhysiologicalCondition(null|FHIRCodeableConcept $physiologicalCondition = null): self
    {
        if (null === $physiologicalCondition) {
            $physiologicalCondition = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->physiologicalCondition, $physiologicalCondition);
        $this->physiologicalCondition = $physiologicalCondition;
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
        if (null !== ($v = $this->getAgeRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRace())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RACE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PHYSIOLOGICAL_CONDITION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AGE_RANGE])) {
            $v = $this->getAgeRange();
            foreach($validationRules[self::FIELD_AGE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_AGE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_RANGE])) {
                        $errs[self::FIELD_AGE_RANGE] = [];
                    }
                    $errs[self::FIELD_AGE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_CODEABLE_CONCEPT])) {
            $v = $this->getAgeCodeableConcept();
            foreach($validationRules[self::FIELD_AGE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_AGE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AGE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AGE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RACE])) {
            $v = $this->getRace();
            foreach($validationRules[self::FIELD_RACE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_RACE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RACE])) {
                        $errs[self::FIELD_RACE] = [];
                    }
                    $errs[self::FIELD_RACE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
            $v = $this->getPhysiologicalCondition();
            foreach($validationRules[self::FIELD_PHYSIOLOGICAL_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_PHYSIOLOGICAL_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
                        $errs[self::FIELD_PHYSIOLOGICAL_CONDITION] = [];
                    }
                    $errs[self::FIELD_PHYSIOLOGICAL_CONDITION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation
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
        } else if (!($type instanceof FHIRPopulation)) {
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
            if (self::FIELD_AGE_RANGE === $n->nodeName) {
                $type->setAgeRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_AGE_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setAgeCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_GENDER === $n->nodeName) {
                $type->setGender(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_RACE === $n->nodeName) {
                $type->setRace(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PHYSIOLOGICAL_CONDITION === $n->nodeName) {
                $type->setPhysiologicalCondition(FHIRCodeableConcept::xmlUnserialize($n));
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
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Population'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getAgeRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AGE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AGE_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getGender())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GENDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRace())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RACE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PHYSIOLOGICAL_CONDITION);
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
        if (null !== ($v = $this->getAgeRange())) {
            $out->{self::FIELD_AGE_RANGE} = $v;
        }
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            $out->{self::FIELD_AGE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $out->{self::FIELD_GENDER} = $v;
        }
        if (null !== ($v = $this->getRace())) {
            $out->{self::FIELD_RACE} = $v;
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            $out->{self::FIELD_PHYSIOLOGICAL_CONDITION} = $v;
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