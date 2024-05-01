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
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRInteger;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRIdPrimitive;
use HL7\FHIR\R4\FHIRIntegerPrimitive;
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
 * Nucleic acids are defined by three distinct elements: the base, sugar and
 * linkage. Individual substance/moiety IDs will be created for each of these
 * elements. The nucleotide sequence will be always entered in the 5’-3’
 * direction.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstanceNucleicAcid
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceNucleicAcid extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID;

    const FIELD_SEQUENCE_TYPE = 'sequenceType';
    const FIELD_NUMBER_OF_SUBUNITS = 'numberOfSubunits';
    const FIELD_NUMBER_OF_SUBUNITS_EXT = '_numberOfSubunits';
    const FIELD_AREA_OF_HYBRIDISATION = 'areaOfHybridisation';
    const FIELD_AREA_OF_HYBRIDISATION_EXT = '_areaOfHybridisation';
    const FIELD_OLIGO_NUCLEOTIDE_TYPE = 'oligoNucleotideType';
    const FIELD_SUBUNIT = 'subunit';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the sequence shall be specified based on a controlled vocabulary.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $sequenceType = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of linear sequences of nucleotides linked through phosphodiester
     * bonds shall be described. Subunits would be strands of nucleic acids that are
     * tightly associated typically through Watson-Crick base pairing. NOTE: If not
     * specified in the reference source, the assumption is that there is 1 subunit.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $numberOfSubunits = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The area of hybridisation shall be described if applicable for double stranded
     * RNA or DNA. The number associated with the subunit followed by the number
     * associated to the residue shall be specified in increasing order. The underscore
     * “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $areaOfHybridisation = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $oligoNucleotideType = null;
    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[]
     */
    protected null|array $subunit = [];

    /**
     * Validation map for fields in type SubstanceNucleicAcid
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstanceNucleicAcid Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SEQUENCE_TYPE])) {
            if ($data[self::FIELD_SEQUENCE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSequenceType($data[self::FIELD_SEQUENCE_TYPE]);
            } else {
                $this->setSequenceType(new FHIRCodeableConcept($data[self::FIELD_SEQUENCE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_SUBUNITS]) || isset($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT])) {
            $value = $data[self::FIELD_NUMBER_OF_SUBUNITS] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT])) ? $data[self::FIELD_NUMBER_OF_SUBUNITS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfSubunits($value);
                } else if (is_array($value)) {
                    $this->setNumberOfSubunits(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfSubunits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumberOfSubunits(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_AREA_OF_HYBRIDISATION]) || isset($data[self::FIELD_AREA_OF_HYBRIDISATION_EXT])) {
            $value = $data[self::FIELD_AREA_OF_HYBRIDISATION] ?? null;
            $ext = (isset($data[self::FIELD_AREA_OF_HYBRIDISATION_EXT]) && is_array($data[self::FIELD_AREA_OF_HYBRIDISATION_EXT])) ? $data[self::FIELD_AREA_OF_HYBRIDISATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAreaOfHybridisation($value);
                } else if (is_array($value)) {
                    $this->setAreaOfHybridisation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAreaOfHybridisation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAreaOfHybridisation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE])) {
            if ($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setOligoNucleotideType($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE]);
            } else {
                $this->setOligoNucleotideType(new FHIRCodeableConcept($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUBUNIT])) {
            if (is_array($data[self::FIELD_SUBUNIT])) {
                foreach($data[self::FIELD_SUBUNIT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceNucleicAcidSubunit) {
                        $this->addSubunit($v);
                    } else {
                        $this->addSubunit(new FHIRSubstanceNucleicAcidSubunit($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBUNIT] instanceof FHIRSubstanceNucleicAcidSubunit) {
                $this->addSubunit($data[self::FIELD_SUBUNIT]);
            } else {
                $this->addSubunit(new FHIRSubstanceNucleicAcidSubunit($data[self::FIELD_SUBUNIT]));
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
     * The type of the sequence shall be specified based on a controlled vocabulary.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSequenceType(): null|FHIRCodeableConcept
    {
        return $this->sequenceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the sequence shall be specified based on a controlled vocabulary.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $sequenceType
     * @return static
     */
    public function setSequenceType(null|FHIRCodeableConcept $sequenceType = null): self
    {
        if (null === $sequenceType) {
            $sequenceType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->sequenceType, $sequenceType);
        $this->sequenceType = $sequenceType;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of linear sequences of nucleotides linked through phosphodiester
     * bonds shall be described. Subunits would be strands of nucleic acids that are
     * tightly associated typically through Watson-Crick base pairing. NOTE: If not
     * specified in the reference source, the assumption is that there is 1 subunit.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getNumberOfSubunits(): null|FHIRInteger
    {
        return $this->numberOfSubunits;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of linear sequences of nucleotides linked through phosphodiester
     * bonds shall be described. Subunits would be strands of nucleic acids that are
     * tightly associated typically through Watson-Crick base pairing. NOTE: If not
     * specified in the reference source, the assumption is that there is 1 subunit.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $numberOfSubunits
     * @return static
     */
    public function setNumberOfSubunits(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfSubunits = null): self
    {
        if (null !== $numberOfSubunits && !($numberOfSubunits instanceof FHIRInteger)) {
            $numberOfSubunits = new FHIRInteger($numberOfSubunits);
        }
        $this->_trackValueSet($this->numberOfSubunits, $numberOfSubunits);
        $this->numberOfSubunits = $numberOfSubunits;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The area of hybridisation shall be described if applicable for double stranded
     * RNA or DNA. The number associated with the subunit followed by the number
     * associated to the residue shall be specified in increasing order. The underscore
     * “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getAreaOfHybridisation(): null|FHIRString
    {
        return $this->areaOfHybridisation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The area of hybridisation shall be described if applicable for double stranded
     * RNA or DNA. The number associated with the subunit followed by the number
     * associated to the residue shall be specified in increasing order. The underscore
     * “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $areaOfHybridisation
     * @return static
     */
    public function setAreaOfHybridisation(null|string|FHIRStringPrimitive|FHIRString $areaOfHybridisation = null): self
    {
        if (null !== $areaOfHybridisation && !($areaOfHybridisation instanceof FHIRString)) {
            $areaOfHybridisation = new FHIRString($areaOfHybridisation);
        }
        $this->_trackValueSet($this->areaOfHybridisation, $areaOfHybridisation);
        $this->areaOfHybridisation = $areaOfHybridisation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOligoNucleotideType(): null|FHIRCodeableConcept
    {
        return $this->oligoNucleotideType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $oligoNucleotideType
     * @return static
     */
    public function setOligoNucleotideType(null|FHIRCodeableConcept $oligoNucleotideType = null): self
    {
        if (null === $oligoNucleotideType) {
            $oligoNucleotideType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->oligoNucleotideType, $oligoNucleotideType);
        $this->oligoNucleotideType = $oligoNucleotideType;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[]
     */
    public function getSubunit(): null|array
    {
        return $this->subunit;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $subunit
     * @return static
     */
    public function addSubunit(null|FHIRSubstanceNucleicAcidSubunit $subunit = null): self
    {
        if (null === $subunit) {
            $subunit = new FHIRSubstanceNucleicAcidSubunit();
        }
        $this->_trackValueAdded();
        $this->subunit[] = $subunit;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[] $subunit
     * @return static
     */
    public function setSubunit(array $subunit = []): self
    {
        if ([] !== $this->subunit) {
            $this->_trackValuesRemoved(count($this->subunit));
            $this->subunit = [];
        }
        if ([] === $subunit) {
            return $this;
        }
        foreach($subunit as $v) {
            if ($v instanceof FHIRSubstanceNucleicAcidSubunit) {
                $this->addSubunit($v);
            } else {
                $this->addSubunit(new FHIRSubstanceNucleicAcidSubunit($v));
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
        if (null !== ($v = $this->getSequenceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_SUBUNITS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAreaOfHybridisation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AREA_OF_HYBRIDISATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOligoNucleotideType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubunit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBUNIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_TYPE])) {
            $v = $this->getSequenceType();
            foreach($validationRules[self::FIELD_SEQUENCE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_SEQUENCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_TYPE])) {
                        $errs[self::FIELD_SEQUENCE_TYPE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_SUBUNITS])) {
            $v = $this->getNumberOfSubunits();
            foreach($validationRules[self::FIELD_NUMBER_OF_SUBUNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_NUMBER_OF_SUBUNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_SUBUNITS])) {
                        $errs[self::FIELD_NUMBER_OF_SUBUNITS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_SUBUNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AREA_OF_HYBRIDISATION])) {
            $v = $this->getAreaOfHybridisation();
            foreach($validationRules[self::FIELD_AREA_OF_HYBRIDISATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_AREA_OF_HYBRIDISATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AREA_OF_HYBRIDISATION])) {
                        $errs[self::FIELD_AREA_OF_HYBRIDISATION] = [];
                    }
                    $errs[self::FIELD_AREA_OF_HYBRIDISATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OLIGO_NUCLEOTIDE_TYPE])) {
            $v = $this->getOligoNucleotideType();
            foreach($validationRules[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_OLIGO_NUCLEOTIDE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE])) {
                        $errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] = [];
                    }
                    $errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBUNIT])) {
            $v = $this->getSubunit();
            foreach($validationRules[self::FIELD_SUBUNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_SUBUNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBUNIT])) {
                        $errs[self::FIELD_SUBUNIT] = [];
                    }
                    $errs[self::FIELD_SUBUNIT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
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
        } else if (!($type instanceof FHIRSubstanceNucleicAcid)) {
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
            if (self::FIELD_SEQUENCE_TYPE === $n->nodeName) {
                $type->setSequenceType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_NUMBER_OF_SUBUNITS === $n->nodeName) {
                $type->setNumberOfSubunits(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_AREA_OF_HYBRIDISATION === $n->nodeName) {
                $type->setAreaOfHybridisation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_OLIGO_NUCLEOTIDE_TYPE === $n->nodeName) {
                $type->setOligoNucleotideType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBUNIT === $n->nodeName) {
                $type->addSubunit(FHIRSubstanceNucleicAcidSubunit::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_SUBUNITS);
        if (null !== $n) {
            $pt = $type->getNumberOfSubunits();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNumberOfSubunits($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AREA_OF_HYBRIDISATION);
        if (null !== $n) {
            $pt = $type->getAreaOfHybridisation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAreaOfHybridisation($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstanceNucleicAcid'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSequenceType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_OF_SUBUNITS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAreaOfHybridisation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AREA_OF_HYBRIDISATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOligoNucleotideType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OLIGO_NUCLEOTIDE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubunit())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUBUNIT);
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
        if (null !== ($v = $this->getSequenceType())) {
            $out->{self::FIELD_SEQUENCE_TYPE} = $v;
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER_OF_SUBUNITS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_OF_SUBUNITS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAreaOfHybridisation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AREA_OF_HYBRIDISATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AREA_OF_HYBRIDISATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOligoNucleotideType())) {
            $out->{self::FIELD_OLIGO_NUCLEOTIDE_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getSubunit())) {
            $out->{self::FIELD_SUBUNIT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUBUNIT}[] = $v;
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