<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 23rd, 2023 13:30+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2023 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use HL7\FHIR\R4\FHIRElement\FHIRBoolean;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioStep
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioStep extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP;
    const FIELD_PROCESS = 'process';
    const FIELD_PAUSE = 'pause';
    const FIELD_PAUSE_EXT = '_pause';
    const FIELD_OPERATION = 'operation';
    const FIELD_ALTERNATIVE = 'alternative';

    /** @var string */
    private $_xmlns = '';

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    protected ?array $process = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @var null|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected ?FHIRBoolean $pause = null;

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    protected ?FHIRExampleScenarioOperation $operation = null;

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    protected ?array $alternative = [];

    /**
     * Validation map for fields in type ExampleScenario.Step
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRExampleScenarioStep Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioStep::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PROCESS])) {
            if (is_array($data[self::FIELD_PROCESS])) {
                foreach($data[self::FIELD_PROCESS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioProcess) {
                        $this->addProcess($v);
                    } else {
                        $this->addProcess(new FHIRExampleScenarioProcess($v));
                    }
                }
            } elseif ($data[self::FIELD_PROCESS] instanceof FHIRExampleScenarioProcess) {
                $this->addProcess($data[self::FIELD_PROCESS]);
            } else {
                $this->addProcess(new FHIRExampleScenarioProcess($data[self::FIELD_PROCESS]));
            }
        }
        if (isset($data[self::FIELD_PAUSE]) || isset($data[self::FIELD_PAUSE_EXT])) {
            $value = $data[self::FIELD_PAUSE] ?? null;
            $ext = (isset($data[self::FIELD_PAUSE_EXT]) && is_array($data[self::FIELD_PAUSE_EXT])) ? $data[self::FIELD_PAUSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPause($value);
                } else if (is_array($value)) {
                    $this->setPause(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPause(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPause(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if ($data[self::FIELD_OPERATION] instanceof FHIRExampleScenarioOperation) {
                $this->setOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->setOperation(new FHIRExampleScenarioOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_ALTERNATIVE])) {
            if (is_array($data[self::FIELD_ALTERNATIVE])) {
                foreach($data[self::FIELD_ALTERNATIVE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioAlternative) {
                        $this->addAlternative($v);
                    } else {
                        $this->addAlternative(new FHIRExampleScenarioAlternative($v));
                    }
                }
            } elseif ($data[self::FIELD_ALTERNATIVE] instanceof FHIRExampleScenarioAlternative) {
                $this->addAlternative($data[self::FIELD_ALTERNATIVE]);
            } else {
                $this->addAlternative(new FHIRExampleScenarioAlternative($data[self::FIELD_ALTERNATIVE]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ExampleScenarioStep{$xmlns}></ExampleScenarioStep>";
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[]
     */
    public function getProcess(): ?array
    {
        return $this->process;
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess $process
     * @return static
     */
    public function addProcess(?FHIRExampleScenarioProcess $process = null): object
    {
        $this->_trackValueAdded();
        $this->process[] = $process;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Nested process.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess[] $process
     * @return static
     */
    public function setProcess(array $process = []): object
    {
        if ([] !== $this->process) {
            $this->_trackValuesRemoved(count($this->process));
            $this->process = [];
        }
        if ([] === $process) {
            return $this;
        }
        foreach($process as $v) {
            if ($v instanceof FHIRExampleScenarioProcess) {
                $this->addProcess($v);
            } else {
                $this->addProcess(new FHIRExampleScenarioProcess($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @return null|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getPause(): ?FHIRBoolean
    {
        return $this->pause;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If there is a pause in the flow.
     *
     * @param null|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $pause
     * @return static
     */
    public function setPause($pause = null): object
    {
        if (null !== $pause && !($pause instanceof FHIRBoolean)) {
            $pause = new FHIRBoolean($pause);
        }
        $this->_trackValueSet($this->pause, $pause);
        $this->pause = $pause;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function getOperation(): ?FHIRExampleScenarioOperation
    {
        return $this->operation;
    }

    /**
     * Example of workflow instance.
     *
     * Each interaction or action.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $operation
     * @return static
     */
    public function setOperation(?FHIRExampleScenarioOperation $operation = null): object
    {
        $this->_trackValueSet($this->operation, $operation);
        $this->operation = $operation;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[]
     */
    public function getAlternative(): ?array
    {
        return $this->alternative;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative $alternative
     * @return static
     */
    public function addAlternative(?FHIRExampleScenarioAlternative $alternative = null): object
    {
        $this->_trackValueAdded();
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Indicates an alternative step that can be taken instead of the operations on the
     * base step in exceptional/atypical circumstances.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative[] $alternative
     * @return static
     */
    public function setAlternative(array $alternative = []): object
    {
        if ([] !== $this->alternative) {
            $this->_trackValuesRemoved(count($this->alternative));
            $this->alternative = [];
        }
        if ([] === $alternative) {
            return $this;
        }
        foreach($alternative as $v) {
            if ($v instanceof FHIRExampleScenarioAlternative) {
                $this->addAlternative($v);
            } else {
                $this->addAlternative(new FHIRExampleScenarioAlternative($v));
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
        return self::$_validationRules;
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
        if ([] !== ($vs = $this->getProcess())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCESS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPause())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAUSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAlternative())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ALTERNATIVE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESS])) {
            $v = $this->getProcess();
            foreach($validationRules[self::FIELD_PROCESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_PROCESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESS])) {
                        $errs[self::FIELD_PROCESS] = [];
                    }
                    $errs[self::FIELD_PROCESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAUSE])) {
            $v = $this->getPause();
            foreach($validationRules[self::FIELD_PAUSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_PAUSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAUSE])) {
                        $errs[self::FIELD_PAUSE] = [];
                    }
                    $errs[self::FIELD_PAUSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTERNATIVE])) {
            $v = $this->getAlternative();
            foreach($validationRules[self::FIELD_ALTERNATIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP, self::FIELD_ALTERNATIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTERNATIVE])) {
                        $errs[self::FIELD_ALTERNATIVE] = [];
                    }
                    $errs[self::FIELD_ALTERNATIVE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRExampleScenarioStep::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioStep::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRExampleScenarioStep(null);
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioStep)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioStep::xmlUnserialize - $type must be instance of \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_PROCESS === $n->nodeName) {
                $type->addProcess(FHIRExampleScenarioProcess::xmlUnserialize($n));
            } elseif (self::FIELD_PAUSE === $n->nodeName) {
                $type->setPause(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATION === $n->nodeName) {
                $type->setOperation(FHIRExampleScenarioOperation::xmlUnserialize($n));
            } elseif (self::FIELD_ALTERNATIVE === $n->nodeName) {
                $type->addAlternative(FHIRExampleScenarioAlternative::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PAUSE);
        if (null !== $n) {
            $pt = $type->getPause();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPause($n->nodeValue);
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
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getProcess())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROCESS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPause())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAUSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOperation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPERATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAlternative())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ALTERNATIVE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getProcess())) {
            $out->{self::FIELD_PROCESS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROCESS}[] = $v;
            }
        }
        if (null !== ($v = $this->getPause())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PAUSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PAUSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOperation())) {
            $out->{self::FIELD_OPERATION} = $v;
        }
        if ([] !== ($vs = $this->getAlternative())) {
            $out->{self::FIELD_ALTERNATIVE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ALTERNATIVE}[] = $v;
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