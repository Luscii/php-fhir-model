<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

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

use HL7\FHIR\R4\FHIRBooleanPrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRBoolean;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRInteger;
use HL7\FHIR\R4\FHIRIntegerPrimitive;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRMolecularSequenceStructureVariant
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceStructureVariant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT;

    const FIELD_VARIANT_TYPE = 'variantType';
    const FIELD_EXACT = 'exact';
    const FIELD_EXACT_EXT = '_exact';
    const FIELD_LENGTH = 'length';
    const FIELD_LENGTH_EXT = '_length';
    const FIELD_OUTER = 'outer';
    const FIELD_INNER = 'inner';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $variantType = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $exact = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $length = null;
    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    protected null|FHIRMolecularSequenceOuter $outer = null;
    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    protected null|FHIRMolecularSequenceInner $inner = null;

    /**
     * Validation map for fields in type MolecularSequence.StructureVariant
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMolecularSequenceStructureVariant Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_VARIANT_TYPE])) {
            if ($data[self::FIELD_VARIANT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setVariantType($data[self::FIELD_VARIANT_TYPE]);
            } else {
                $this->setVariantType(new FHIRCodeableConcept($data[self::FIELD_VARIANT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_EXACT]) || isset($data[self::FIELD_EXACT_EXT])) {
            $value = $data[self::FIELD_EXACT] ?? null;
            $ext = (isset($data[self::FIELD_EXACT_EXT]) && is_array($data[self::FIELD_EXACT_EXT])) ? $data[self::FIELD_EXACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExact($value);
                } else if (is_array($value)) {
                    $this->setExact(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExact(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_LENGTH]) || isset($data[self::FIELD_LENGTH_EXT])) {
            $value = $data[self::FIELD_LENGTH] ?? null;
            $ext = (isset($data[self::FIELD_LENGTH_EXT]) && is_array($data[self::FIELD_LENGTH_EXT])) ? $data[self::FIELD_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setLength($value);
                } else if (is_array($value)) {
                    $this->setLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLength(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_OUTER])) {
            if ($data[self::FIELD_OUTER] instanceof FHIRMolecularSequenceOuter) {
                $this->setOuter($data[self::FIELD_OUTER]);
            } else {
                $this->setOuter(new FHIRMolecularSequenceOuter($data[self::FIELD_OUTER]));
            }
        }
        if (isset($data[self::FIELD_INNER])) {
            if ($data[self::FIELD_INNER] instanceof FHIRMolecularSequenceInner) {
                $this->setInner($data[self::FIELD_INNER]);
            } else {
                $this->setInner(new FHIRMolecularSequenceInner($data[self::FIELD_INNER]));
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
     * Information about chromosome structure variation DNA change type.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVariantType(): null|FHIRCodeableConcept
    {
        return $this->variantType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $variantType
     * @return static
     */
    public function setVariantType(null|FHIRCodeableConcept $variantType = null): self
    {
        if (null === $variantType) {
            $variantType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->variantType, $variantType);
        $this->variantType = $variantType;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getExact(): null|FHIRBoolean
    {
        return $this->exact;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $exact
     * @return static
     */
    public function setExact(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exact = null): self
    {
        if (null !== $exact && !($exact instanceof FHIRBoolean)) {
            $exact = new FHIRBoolean($exact);
        }
        $this->_trackValueSet($this->exact, $exact);
        $this->exact = $exact;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getLength(): null|FHIRInteger
    {
        return $this->length;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $length
     * @return static
     */
    public function setLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length = null): self
    {
        if (null !== $length && !($length instanceof FHIRInteger)) {
            $length = new FHIRInteger($length);
        }
        $this->_trackValueSet($this->length, $length);
        $this->length = $length;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    public function getOuter(): null|FHIRMolecularSequenceOuter
    {
        return $this->outer;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter $outer
     * @return static
     */
    public function setOuter(null|FHIRMolecularSequenceOuter $outer = null): self
    {
        if (null === $outer) {
            $outer = new FHIRMolecularSequenceOuter();
        }
        $this->_trackValueSet($this->outer, $outer);
        $this->outer = $outer;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    public function getInner(): null|FHIRMolecularSequenceInner
    {
        return $this->inner;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner $inner
     * @return static
     */
    public function setInner(null|FHIRMolecularSequenceInner $inner = null): self
    {
        if (null === $inner) {
            $inner = new FHIRMolecularSequenceInner();
        }
        $this->_trackValueSet($this->inner, $inner);
        $this->inner = $inner;
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
        if (null !== ($v = $this->getVariantType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIANT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOuter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INNER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_VARIANT_TYPE])) {
            $v = $this->getVariantType();
            foreach($validationRules[self::FIELD_VARIANT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT, self::FIELD_VARIANT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANT_TYPE])) {
                        $errs[self::FIELD_VARIANT_TYPE] = [];
                    }
                    $errs[self::FIELD_VARIANT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXACT])) {
            $v = $this->getExact();
            foreach($validationRules[self::FIELD_EXACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT, self::FIELD_EXACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXACT])) {
                        $errs[self::FIELD_EXACT] = [];
                    }
                    $errs[self::FIELD_EXACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTER])) {
            $v = $this->getOuter();
            foreach($validationRules[self::FIELD_OUTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT, self::FIELD_OUTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTER])) {
                        $errs[self::FIELD_OUTER] = [];
                    }
                    $errs[self::FIELD_OUTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INNER])) {
            $v = $this->getInner();
            foreach($validationRules[self::FIELD_INNER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT, self::FIELD_INNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INNER])) {
                        $errs[self::FIELD_INNER] = [];
                    }
                    $errs[self::FIELD_INNER][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant
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
        } else if (!($type instanceof FHIRMolecularSequenceStructureVariant)) {
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
            if (self::FIELD_VARIANT_TYPE === $n->nodeName) {
                $type->setVariantType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_EXACT === $n->nodeName) {
                $type->setExact(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_LENGTH === $n->nodeName) {
                $type->setLength(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_OUTER === $n->nodeName) {
                $type->setOuter(FHIRMolecularSequenceOuter::xmlUnserialize($n));
            } elseif (self::FIELD_INNER === $n->nodeName) {
                $type->setInner(FHIRMolecularSequenceInner::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXACT);
        if (null !== $n) {
            $pt = $type->getExact();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExact($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LENGTH);
        if (null !== $n) {
            $pt = $type->getLength();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLength($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MolecularSequenceStructureVariant'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getVariantType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VARIANT_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExact())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOuter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OUTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInner())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INNER);
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
        if (null !== ($v = $this->getVariantType())) {
            $out->{self::FIELD_VARIANT_TYPE} = $v;
        }
        if (null !== ($v = $this->getExact())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXACT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXACT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLength())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LENGTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LENGTH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOuter())) {
            $out->{self::FIELD_OUTER} = $v;
        }
        if (null !== ($v = $this->getInner())) {
            $out->{self::FIELD_INNER} = $v;
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