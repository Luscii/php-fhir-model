<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid;

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

use HL7\FHIR\R4\FHIRElement\FHIRAttachment;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRInteger;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRIntegerPrimitive;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * Nucleic acids are defined by three distinct elements: the base, sugar and
 * linkage. Individual substance/moiety IDs will be created for each of these
 * elements. The nucleotide sequence will be always entered in the 5’-3’
 * direction.
 *
 * Class FHIRSubstanceNucleicAcidSubunit
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid
 */
class FHIRSubstanceNucleicAcidSubunit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT;

    const FIELD_SUBUNIT = 'subunit';
    const FIELD_SUBUNIT_EXT = '_subunit';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_LENGTH = 'length';
    const FIELD_LENGTH_EXT = '_length';
    const FIELD_SEQUENCE_ATTACHMENT = 'sequenceAttachment';
    const FIELD_FIVE_PRIME = 'fivePrime';
    const FIELD_THREE_PRIME = 'threePrime';
    const FIELD_LINKAGE = 'linkage';
    const FIELD_SUGAR = 'sugar';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $subunit = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $sequence = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $length = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $sequenceAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the first position in the
     * sequence. A separate representation would be redundant.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $fivePrime = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the last position in the
     * sequence. A separate representation would be redundant.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $threePrime = null;
    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[]
     */
    protected null|array $linkage = [];
    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[]
     */
    protected null|array $sugar = [];

    /**
     * Validation map for fields in type SubstanceNucleicAcid.Subunit
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstanceNucleicAcidSubunit Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SUBUNIT]) || isset($data[self::FIELD_SUBUNIT_EXT])) {
            $value = $data[self::FIELD_SUBUNIT] ?? null;
            $ext = (isset($data[self::FIELD_SUBUNIT_EXT]) && is_array($data[self::FIELD_SUBUNIT_EXT])) ? $data[self::FIELD_SUBUNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSubunit($value);
                } else if (is_array($value)) {
                    $this->setSubunit(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSubunit(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubunit(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRString($ext));
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
        if (isset($data[self::FIELD_SEQUENCE_ATTACHMENT])) {
            if ($data[self::FIELD_SEQUENCE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setSequenceAttachment($data[self::FIELD_SEQUENCE_ATTACHMENT]);
            } else {
                $this->setSequenceAttachment(new FHIRAttachment($data[self::FIELD_SEQUENCE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_FIVE_PRIME])) {
            if ($data[self::FIELD_FIVE_PRIME] instanceof FHIRCodeableConcept) {
                $this->setFivePrime($data[self::FIELD_FIVE_PRIME]);
            } else {
                $this->setFivePrime(new FHIRCodeableConcept($data[self::FIELD_FIVE_PRIME]));
            }
        }
        if (isset($data[self::FIELD_THREE_PRIME])) {
            if ($data[self::FIELD_THREE_PRIME] instanceof FHIRCodeableConcept) {
                $this->setThreePrime($data[self::FIELD_THREE_PRIME]);
            } else {
                $this->setThreePrime(new FHIRCodeableConcept($data[self::FIELD_THREE_PRIME]));
            }
        }
        if (isset($data[self::FIELD_LINKAGE])) {
            if (is_array($data[self::FIELD_LINKAGE])) {
                foreach($data[self::FIELD_LINKAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceNucleicAcidLinkage) {
                        $this->addLinkage($v);
                    } else {
                        $this->addLinkage(new FHIRSubstanceNucleicAcidLinkage($v));
                    }
                }
            } elseif ($data[self::FIELD_LINKAGE] instanceof FHIRSubstanceNucleicAcidLinkage) {
                $this->addLinkage($data[self::FIELD_LINKAGE]);
            } else {
                $this->addLinkage(new FHIRSubstanceNucleicAcidLinkage($data[self::FIELD_LINKAGE]));
            }
        }
        if (isset($data[self::FIELD_SUGAR])) {
            if (is_array($data[self::FIELD_SUGAR])) {
                foreach($data[self::FIELD_SUGAR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceNucleicAcidSugar) {
                        $this->addSugar($v);
                    } else {
                        $this->addSugar(new FHIRSubstanceNucleicAcidSugar($v));
                    }
                }
            } elseif ($data[self::FIELD_SUGAR] instanceof FHIRSubstanceNucleicAcidSugar) {
                $this->addSugar($data[self::FIELD_SUGAR]);
            } else {
                $this->addSugar(new FHIRSubstanceNucleicAcidSugar($data[self::FIELD_SUGAR]));
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getSubunit(): null|FHIRInteger
    {
        return $this->subunit;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $subunit
     * @return static
     */
    public function setSubunit(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $subunit = null): self
    {
        if (null !== $subunit && !($subunit instanceof FHIRInteger)) {
            $subunit = new FHIRInteger($subunit);
        }
        $this->_trackValueSet($this->subunit, $subunit);
        $this->subunit = $subunit;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getSequence(): null|FHIRString
    {
        return $this->sequence;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $sequence
     * @return static
     */
    public function setSequence(null|string|FHIRStringPrimitive|FHIRString $sequence = null): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRString)) {
            $sequence = new FHIRString($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
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
     * The length of the sequence shall be captured.
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment
     */
    public function getSequenceAttachment(): null|FHIRAttachment
    {
        return $this->sequenceAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment $sequenceAttachment
     * @return static
     */
    public function setSequenceAttachment(null|FHIRAttachment $sequenceAttachment = null): self
    {
        if (null === $sequenceAttachment) {
            $sequenceAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->sequenceAttachment, $sequenceAttachment);
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the first position in the
     * sequence. A separate representation would be redundant.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getFivePrime(): null|FHIRCodeableConcept
    {
        return $this->fivePrime;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the first position in the
     * sequence. A separate representation would be redundant.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $fivePrime
     * @return static
     */
    public function setFivePrime(null|FHIRCodeableConcept $fivePrime = null): self
    {
        if (null === $fivePrime) {
            $fivePrime = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->fivePrime, $fivePrime);
        $this->fivePrime = $fivePrime;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the last position in the
     * sequence. A separate representation would be redundant.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getThreePrime(): null|FHIRCodeableConcept
    {
        return $this->threePrime;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the last position in the
     * sequence. A separate representation would be redundant.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $threePrime
     * @return static
     */
    public function setThreePrime(null|FHIRCodeableConcept $threePrime = null): self
    {
        if (null === $threePrime) {
            $threePrime = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->threePrime, $threePrime);
        $this->threePrime = $threePrime;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[]
     */
    public function getLinkage(): null|array
    {
        return $this->linkage;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage $linkage
     * @return static
     */
    public function addLinkage(null|FHIRSubstanceNucleicAcidLinkage $linkage = null): self
    {
        if (null === $linkage) {
            $linkage = new FHIRSubstanceNucleicAcidLinkage();
        }
        $this->_trackValueAdded();
        $this->linkage[] = $linkage;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[] $linkage
     * @return static
     */
    public function setLinkage(array $linkage = []): self
    {
        if ([] !== $this->linkage) {
            $this->_trackValuesRemoved(count($this->linkage));
            $this->linkage = [];
        }
        if ([] === $linkage) {
            return $this;
        }
        foreach($linkage as $v) {
            if ($v instanceof FHIRSubstanceNucleicAcidLinkage) {
                $this->addLinkage($v);
            } else {
                $this->addLinkage(new FHIRSubstanceNucleicAcidLinkage($v));
            }
        }
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[]
     */
    public function getSugar(): null|array
    {
        return $this->sugar;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar $sugar
     * @return static
     */
    public function addSugar(null|FHIRSubstanceNucleicAcidSugar $sugar = null): self
    {
        if (null === $sugar) {
            $sugar = new FHIRSubstanceNucleicAcidSugar();
        }
        $this->_trackValueAdded();
        $this->sugar[] = $sugar;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[] $sugar
     * @return static
     */
    public function setSugar(array $sugar = []): self
    {
        if ([] !== $this->sugar) {
            $this->_trackValuesRemoved(count($this->sugar));
            $this->sugar = [];
        }
        if ([] === $sugar) {
            return $this;
        }
        foreach($sugar as $v) {
            if ($v instanceof FHIRSubstanceNucleicAcidSugar) {
                $this->addSugar($v);
            } else {
                $this->addSugar(new FHIRSubstanceNucleicAcidSugar($v));
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
        if (null !== ($v = $this->getSubunit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBUNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFivePrime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIVE_PRIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getThreePrime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_THREE_PRIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLinkage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINKAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSugar())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUGAR, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBUNIT])) {
            $v = $this->getSubunit();
            foreach($validationRules[self::FIELD_SUBUNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_SUBUNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBUNIT])) {
                        $errs[self::FIELD_SUBUNIT] = [];
                    }
                    $errs[self::FIELD_SUBUNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_ATTACHMENT])) {
            $v = $this->getSequenceAttachment();
            foreach($validationRules[self::FIELD_SEQUENCE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_SEQUENCE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_ATTACHMENT])) {
                        $errs[self::FIELD_SEQUENCE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIVE_PRIME])) {
            $v = $this->getFivePrime();
            foreach($validationRules[self::FIELD_FIVE_PRIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_FIVE_PRIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIVE_PRIME])) {
                        $errs[self::FIELD_FIVE_PRIME] = [];
                    }
                    $errs[self::FIELD_FIVE_PRIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_THREE_PRIME])) {
            $v = $this->getThreePrime();
            foreach($validationRules[self::FIELD_THREE_PRIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_THREE_PRIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_THREE_PRIME])) {
                        $errs[self::FIELD_THREE_PRIME] = [];
                    }
                    $errs[self::FIELD_THREE_PRIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINKAGE])) {
            $v = $this->getLinkage();
            foreach($validationRules[self::FIELD_LINKAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_LINKAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINKAGE])) {
                        $errs[self::FIELD_LINKAGE] = [];
                    }
                    $errs[self::FIELD_LINKAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUGAR])) {
            $v = $this->getSugar();
            foreach($validationRules[self::FIELD_SUGAR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT, self::FIELD_SUGAR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUGAR])) {
                        $errs[self::FIELD_SUGAR] = [];
                    }
                    $errs[self::FIELD_SUGAR][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit
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
        } else if (!($type instanceof FHIRSubstanceNucleicAcidSubunit)) {
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
            if (self::FIELD_SUBUNIT === $n->nodeName) {
                $type->setSubunit(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_SEQUENCE === $n->nodeName) {
                $type->setSequence(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LENGTH === $n->nodeName) {
                $type->setLength(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_SEQUENCE_ATTACHMENT === $n->nodeName) {
                $type->setSequenceAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_FIVE_PRIME === $n->nodeName) {
                $type->setFivePrime(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_THREE_PRIME === $n->nodeName) {
                $type->setThreePrime(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_LINKAGE === $n->nodeName) {
                $type->addLinkage(FHIRSubstanceNucleicAcidLinkage::xmlUnserialize($n));
            } elseif (self::FIELD_SUGAR === $n->nodeName) {
                $type->addSugar(FHIRSubstanceNucleicAcidSugar::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUBUNIT);
        if (null !== $n) {
            $pt = $type->getSubunit();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubunit($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSequence($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstanceNucleicAcidSubunit'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSubunit())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBUNIT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFivePrime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FIVE_PRIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getThreePrime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_THREE_PRIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getLinkage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LINKAGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSugar())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUGAR);
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
        if (null !== ($v = $this->getSubunit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUBUNIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUBUNIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
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
        if (null !== ($v = $this->getSequenceAttachment())) {
            $out->{self::FIELD_SEQUENCE_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getFivePrime())) {
            $out->{self::FIELD_FIVE_PRIME} = $v;
        }
        if (null !== ($v = $this->getThreePrime())) {
            $out->{self::FIELD_THREE_PRIME} = $v;
        }
        if ([] !== ($vs = $this->getLinkage())) {
            $out->{self::FIELD_LINKAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LINKAGE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSugar())) {
            $out->{self::FIELD_SUGAR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUGAR}[] = $v;
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