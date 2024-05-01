<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionHandling
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionHandling extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING;

    const FIELD_TEMPERATURE_QUALIFIER = 'temperatureQualifier';
    const FIELD_TEMPERATURE_RANGE = 'temperatureRange';
    const FIELD_MAX_DURATION = 'maxDuration';
    const FIELD_INSTRUCTION = 'instruction';
    const FIELD_INSTRUCTION_EXT = '_instruction';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $temperatureQualifier = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $temperatureRange = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $maxDuration = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $instruction = null;

    /**
     * Validation map for fields in type SpecimenDefinition.Handling
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSpecimenDefinitionHandling Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TEMPERATURE_QUALIFIER])) {
            if ($data[self::FIELD_TEMPERATURE_QUALIFIER] instanceof FHIRCodeableConcept) {
                $this->setTemperatureQualifier($data[self::FIELD_TEMPERATURE_QUALIFIER]);
            } else {
                $this->setTemperatureQualifier(new FHIRCodeableConcept($data[self::FIELD_TEMPERATURE_QUALIFIER]));
            }
        }
        if (isset($data[self::FIELD_TEMPERATURE_RANGE])) {
            if ($data[self::FIELD_TEMPERATURE_RANGE] instanceof FHIRRange) {
                $this->setTemperatureRange($data[self::FIELD_TEMPERATURE_RANGE]);
            } else {
                $this->setTemperatureRange(new FHIRRange($data[self::FIELD_TEMPERATURE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_MAX_DURATION])) {
            if ($data[self::FIELD_MAX_DURATION] instanceof FHIRDuration) {
                $this->setMaxDuration($data[self::FIELD_MAX_DURATION]);
            } else {
                $this->setMaxDuration(new FHIRDuration($data[self::FIELD_MAX_DURATION]));
            }
        }
        if (isset($data[self::FIELD_INSTRUCTION]) || isset($data[self::FIELD_INSTRUCTION_EXT])) {
            $value = $data[self::FIELD_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_INSTRUCTION_EXT]) && is_array($data[self::FIELD_INSTRUCTION_EXT])) ? $data[self::FIELD_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setInstruction($value);
                } else if (is_array($value)) {
                    $this->setInstruction(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setInstruction(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInstruction(new FHIRMarkdown($ext));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTemperatureQualifier(): null|FHIRCodeableConcept
    {
        return $this->temperatureQualifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $temperatureQualifier
     * @return static
     */
    public function setTemperatureQualifier(null|FHIRCodeableConcept $temperatureQualifier = null): self
    {
        if (null === $temperatureQualifier) {
            $temperatureQualifier = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->temperatureQualifier, $temperatureQualifier);
        $this->temperatureQualifier = $temperatureQualifier;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getTemperatureRange(): null|FHIRRange
    {
        return $this->temperatureRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $temperatureRange
     * @return static
     */
    public function setTemperatureRange(null|FHIRRange $temperatureRange = null): self
    {
        if (null === $temperatureRange) {
            $temperatureRange = new FHIRRange();
        }
        $this->_trackValueSet($this->temperatureRange, $temperatureRange);
        $this->temperatureRange = $temperatureRange;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getMaxDuration(): null|FHIRDuration
    {
        return $this->maxDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $maxDuration
     * @return static
     */
    public function setMaxDuration(null|FHIRDuration $maxDuration = null): self
    {
        if (null === $maxDuration) {
            $maxDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->maxDuration, $maxDuration);
        $this->maxDuration = $maxDuration;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getInstruction(): null|FHIRMarkdown
    {
        return $this->instruction;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $instruction
     * @return static
     */
    public function setInstruction(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $instruction = null): self
    {
        if (null !== $instruction && !($instruction instanceof FHIRMarkdown)) {
            $instruction = new FHIRMarkdown($instruction);
        }
        $this->_trackValueSet($this->instruction, $instruction);
        $this->instruction = $instruction;
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
        if (null !== ($v = $this->getTemperatureQualifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEMPERATURE_QUALIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTemperatureRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEMPERATURE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTRUCTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TEMPERATURE_QUALIFIER])) {
            $v = $this->getTemperatureQualifier();
            foreach($validationRules[self::FIELD_TEMPERATURE_QUALIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING, self::FIELD_TEMPERATURE_QUALIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPERATURE_QUALIFIER])) {
                        $errs[self::FIELD_TEMPERATURE_QUALIFIER] = [];
                    }
                    $errs[self::FIELD_TEMPERATURE_QUALIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEMPERATURE_RANGE])) {
            $v = $this->getTemperatureRange();
            foreach($validationRules[self::FIELD_TEMPERATURE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING, self::FIELD_TEMPERATURE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPERATURE_RANGE])) {
                        $errs[self::FIELD_TEMPERATURE_RANGE] = [];
                    }
                    $errs[self::FIELD_TEMPERATURE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DURATION])) {
            $v = $this->getMaxDuration();
            foreach($validationRules[self::FIELD_MAX_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING, self::FIELD_MAX_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DURATION])) {
                        $errs[self::FIELD_MAX_DURATION] = [];
                    }
                    $errs[self::FIELD_MAX_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTRUCTION])) {
            $v = $this->getInstruction();
            foreach($validationRules[self::FIELD_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING, self::FIELD_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTRUCTION])) {
                        $errs[self::FIELD_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_INSTRUCTION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
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
        } else if (!($type instanceof FHIRSpecimenDefinitionHandling)) {
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
            if (self::FIELD_TEMPERATURE_QUALIFIER === $n->nodeName) {
                $type->setTemperatureQualifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TEMPERATURE_RANGE === $n->nodeName) {
                $type->setTemperatureRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_DURATION === $n->nodeName) {
                $type->setMaxDuration(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_INSTRUCTION === $n->nodeName) {
                $type->setInstruction(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INSTRUCTION);
        if (null !== $n) {
            $pt = $type->getInstruction();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInstruction($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SpecimenDefinitionHandling'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getTemperatureQualifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEMPERATURE_QUALIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTemperatureRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEMPERATURE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInstruction())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSTRUCTION);
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
        if (null !== ($v = $this->getTemperatureQualifier())) {
            $out->{self::FIELD_TEMPERATURE_QUALIFIER} = $v;
        }
        if (null !== ($v = $this->getTemperatureRange())) {
            $out->{self::FIELD_TEMPERATURE_RANGE} = $v;
        }
        if (null !== ($v = $this->getMaxDuration())) {
            $out->{self::FIELD_MAX_DURATION} = $v;
        }
        if (null !== ($v = $this->getInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INSTRUCTION_EXT} = $ext;
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