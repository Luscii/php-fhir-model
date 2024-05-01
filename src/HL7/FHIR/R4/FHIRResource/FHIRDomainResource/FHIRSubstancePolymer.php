<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R4\FHIRCodePrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRIdPrimitive;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\FHIRUriPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeMap;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * Todo.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstancePolymer
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstancePolymer extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER;

    const FIELD_CLASS = 'class';
    const FIELD_GEOMETRY = 'geometry';
    const FIELD_COPOLYMER_CONNECTIVITY = 'copolymerConnectivity';
    const FIELD_MODIFICATION = 'modification';
    const FIELD_MODIFICATION_EXT = '_modification';
    const FIELD_MONOMER_SET = 'monomerSet';
    const FIELD_REPEAT = 'repeat';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $class = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $geometry = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $copolymerConnectivity = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString[]
     */
    protected null|array $modification = [];
    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[]
     */
    protected null|array $monomerSet = [];
    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[]
     */
    protected null|array $repeat = [];

    /**
     * Validation map for fields in type SubstancePolymer
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstancePolymer Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASS])) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_GEOMETRY])) {
            if ($data[self::FIELD_GEOMETRY] instanceof FHIRCodeableConcept) {
                $this->setGeometry($data[self::FIELD_GEOMETRY]);
            } else {
                $this->setGeometry(new FHIRCodeableConcept($data[self::FIELD_GEOMETRY]));
            }
        }
        if (isset($data[self::FIELD_COPOLYMER_CONNECTIVITY])) {
            if (is_array($data[self::FIELD_COPOLYMER_CONNECTIVITY])) {
                foreach($data[self::FIELD_COPOLYMER_CONNECTIVITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCopolymerConnectivity($v);
                    } else {
                        $this->addCopolymerConnectivity(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COPOLYMER_CONNECTIVITY] instanceof FHIRCodeableConcept) {
                $this->addCopolymerConnectivity($data[self::FIELD_COPOLYMER_CONNECTIVITY]);
            } else {
                $this->addCopolymerConnectivity(new FHIRCodeableConcept($data[self::FIELD_COPOLYMER_CONNECTIVITY]));
            }
        }
        if (isset($data[self::FIELD_MODIFICATION]) || isset($data[self::FIELD_MODIFICATION_EXT])) {
            $value = $data[self::FIELD_MODIFICATION] ?? null;
            $ext = (isset($data[self::FIELD_MODIFICATION_EXT]) && is_array($data[self::FIELD_MODIFICATION_EXT])) ? $data[self::FIELD_MODIFICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addModification($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addModification($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addModification(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addModification(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addModification(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_MONOMER_SET])) {
            if (is_array($data[self::FIELD_MONOMER_SET])) {
                foreach($data[self::FIELD_MONOMER_SET] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerMonomerSet) {
                        $this->addMonomerSet($v);
                    } else {
                        $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($v));
                    }
                }
            } elseif ($data[self::FIELD_MONOMER_SET] instanceof FHIRSubstancePolymerMonomerSet) {
                $this->addMonomerSet($data[self::FIELD_MONOMER_SET]);
            } else {
                $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($data[self::FIELD_MONOMER_SET]));
            }
        }
        if (isset($data[self::FIELD_REPEAT])) {
            if (is_array($data[self::FIELD_REPEAT])) {
                foreach($data[self::FIELD_REPEAT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerRepeat) {
                        $this->addRepeat($v);
                    } else {
                        $this->addRepeat(new FHIRSubstancePolymerRepeat($v));
                    }
                }
            } elseif ($data[self::FIELD_REPEAT] instanceof FHIRSubstancePolymerRepeat) {
                $this->addRepeat($data[self::FIELD_REPEAT]);
            } else {
                $this->addRepeat(new FHIRSubstancePolymerRepeat($data[self::FIELD_REPEAT]));
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
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getClass(): null|FHIRCodeableConcept
    {
        return $this->class;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $class
     * @return static
     */
    public function setClass(null|FHIRCodeableConcept $class = null): self
    {
        if (null === $class) {
            $class = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->class, $class);
        $this->class = $class;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGeometry(): null|FHIRCodeableConcept
    {
        return $this->geometry;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $geometry
     * @return static
     */
    public function setGeometry(null|FHIRCodeableConcept $geometry = null): self
    {
        if (null === $geometry) {
            $geometry = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->geometry, $geometry);
        $this->geometry = $geometry;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCopolymerConnectivity(): null|array
    {
        return $this->copolymerConnectivity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $copolymerConnectivity
     * @return static
     */
    public function addCopolymerConnectivity(null|FHIRCodeableConcept $copolymerConnectivity = null): self
    {
        if (null === $copolymerConnectivity) {
            $copolymerConnectivity = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->copolymerConnectivity[] = $copolymerConnectivity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $copolymerConnectivity
     * @return static
     */
    public function setCopolymerConnectivity(array $copolymerConnectivity = []): self
    {
        if ([] !== $this->copolymerConnectivity) {
            $this->_trackValuesRemoved(count($this->copolymerConnectivity));
            $this->copolymerConnectivity = [];
        }
        if ([] === $copolymerConnectivity) {
            return $this;
        }
        foreach($copolymerConnectivity as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCopolymerConnectivity($v);
            } else {
                $this->addCopolymerConnectivity(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString[]
     */
    public function getModification(): null|array
    {
        return $this->modification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $modification
     * @return static
     */
    public function addModification(null|string|FHIRStringPrimitive|FHIRString $modification = null): self
    {
        if (null !== $modification && !($modification instanceof FHIRString)) {
            $modification = new FHIRString($modification);
        }
        $this->_trackValueAdded();
        $this->modification[] = $modification;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRString[] $modification
     * @return static
     */
    public function setModification(array $modification = []): self
    {
        if ([] !== $this->modification) {
            $this->_trackValuesRemoved(count($this->modification));
            $this->modification = [];
        }
        if ([] === $modification) {
            return $this;
        }
        foreach($modification as $v) {
            if ($v instanceof FHIRString) {
                $this->addModification($v);
            } else {
                $this->addModification(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[]
     */
    public function getMonomerSet(): null|array
    {
        return $this->monomerSet;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet $monomerSet
     * @return static
     */
    public function addMonomerSet(null|FHIRSubstancePolymerMonomerSet $monomerSet = null): self
    {
        if (null === $monomerSet) {
            $monomerSet = new FHIRSubstancePolymerMonomerSet();
        }
        $this->_trackValueAdded();
        $this->monomerSet[] = $monomerSet;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[] $monomerSet
     * @return static
     */
    public function setMonomerSet(array $monomerSet = []): self
    {
        if ([] !== $this->monomerSet) {
            $this->_trackValuesRemoved(count($this->monomerSet));
            $this->monomerSet = [];
        }
        if ([] === $monomerSet) {
            return $this;
        }
        foreach($monomerSet as $v) {
            if ($v instanceof FHIRSubstancePolymerMonomerSet) {
                $this->addMonomerSet($v);
            } else {
                $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[]
     */
    public function getRepeat(): null|array
    {
        return $this->repeat;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $repeat
     * @return static
     */
    public function addRepeat(null|FHIRSubstancePolymerRepeat $repeat = null): self
    {
        if (null === $repeat) {
            $repeat = new FHIRSubstancePolymerRepeat();
        }
        $this->_trackValueAdded();
        $this->repeat[] = $repeat;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[] $repeat
     * @return static
     */
    public function setRepeat(array $repeat = []): self
    {
        if ([] !== $this->repeat) {
            $this->_trackValuesRemoved(count($this->repeat));
            $this->repeat = [];
        }
        if ([] === $repeat) {
            return $this;
        }
        foreach($repeat as $v) {
            if ($v instanceof FHIRSubstancePolymerRepeat) {
                $this->addRepeat($v);
            } else {
                $this->addRepeat(new FHIRSubstancePolymerRepeat($v));
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
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGeometry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GEOMETRY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COPOLYMER_CONNECTIVITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getModification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MONOMER_SET, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRepeat())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPEAT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GEOMETRY])) {
            $v = $this->getGeometry();
            foreach($validationRules[self::FIELD_GEOMETRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_GEOMETRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GEOMETRY])) {
                        $errs[self::FIELD_GEOMETRY] = [];
                    }
                    $errs[self::FIELD_GEOMETRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPOLYMER_CONNECTIVITY])) {
            $v = $this->getCopolymerConnectivity();
            foreach($validationRules[self::FIELD_COPOLYMER_CONNECTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_COPOLYMER_CONNECTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPOLYMER_CONNECTIVITY])) {
                        $errs[self::FIELD_COPOLYMER_CONNECTIVITY] = [];
                    }
                    $errs[self::FIELD_COPOLYMER_CONNECTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFICATION])) {
            $v = $this->getModification();
            foreach($validationRules[self::FIELD_MODIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFICATION])) {
                        $errs[self::FIELD_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_MODIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONOMER_SET])) {
            $v = $this->getMonomerSet();
            foreach($validationRules[self::FIELD_MONOMER_SET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_MONOMER_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONOMER_SET])) {
                        $errs[self::FIELD_MONOMER_SET] = [];
                    }
                    $errs[self::FIELD_MONOMER_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT])) {
            $v = $this->getRepeat();
            foreach($validationRules[self::FIELD_REPEAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_REPEAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT])) {
                        $errs[self::FIELD_REPEAT] = [];
                    }
                    $errs[self::FIELD_REPEAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
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
        } else if (!($type instanceof FHIRSubstancePolymer)) {
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
            if (self::FIELD_CLASS === $n->nodeName) {
                $type->setClass(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_GEOMETRY === $n->nodeName) {
                $type->setGeometry(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_COPOLYMER_CONNECTIVITY === $n->nodeName) {
                $type->addCopolymerConnectivity(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFICATION === $n->nodeName) {
                $type->addModification(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MONOMER_SET === $n->nodeName) {
                $type->addMonomerSet(FHIRSubstancePolymerMonomerSet::xmlUnserialize($n));
            } elseif (self::FIELD_REPEAT === $n->nodeName) {
                $type->addRepeat(FHIRSubstancePolymerRepeat::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MODIFICATION);
        if (null !== $n) {
            $type->addModification($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstancePolymer'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getClass())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CLASS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getGeometry())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GEOMETRY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COPOLYMER_CONNECTIVITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getModification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MODIFICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MONOMER_SET);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRepeat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REPEAT);
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
        if (null !== ($v = $this->getClass())) {
            $out->{self::FIELD_CLASS} = $v;
        }
        if (null !== ($v = $this->getGeometry())) {
            $out->{self::FIELD_GEOMETRY} = $v;
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            $out->{self::FIELD_COPOLYMER_CONNECTIVITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COPOLYMER_CONNECTIVITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getModification())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_MODIFICATION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODIFICATION_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            $out->{self::FIELD_MONOMER_SET} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MONOMER_SET}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRepeat())) {
            $out->{self::FIELD_REPEAT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REPEAT}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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