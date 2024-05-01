<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein;

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
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
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
 * A SubstanceProtein is defined as a single unit of a linear amino acid sequence,
 * or a combination of subunits that are either covalently linked or have a defined
 * invariant stoichiometric relationship. This includes all synthetic, recombinant
 * and purified SubstanceProteins of defined sequence, whether the use is
 * therapeutic or prophylactic. This set of elements will be used to describe
 * albumins, coagulation factors, cytokines, growth factors,
 * peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant
 * vaccines, and immunomodulators.
 *
 * Class FHIRSubstanceProteinSubunit
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein
 */
class FHIRSubstanceProteinSubunit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT;

    const FIELD_SUBUNIT = 'subunit';
    const FIELD_SUBUNIT_EXT = '_subunit';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_LENGTH = 'length';
    const FIELD_LENGTH_EXT = '_length';
    const FIELD_SEQUENCE_ATTACHMENT = 'sequenceAttachment';
    const FIELD_N_TERMINAL_MODIFICATION_ID = 'nTerminalModificationId';
    const FIELD_N_TERMINAL_MODIFICATION = 'nTerminalModification';
    const FIELD_N_TERMINAL_MODIFICATION_EXT = '_nTerminalModification';
    const FIELD_C_TERMINAL_MODIFICATION_ID = 'cTerminalModificationId';
    const FIELD_C_TERMINAL_MODIFICATION = 'cTerminalModification';
    const FIELD_C_TERMINAL_MODIFICATION_EXT = '_cTerminalModification';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $subunit = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $sequence = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $length = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $sequenceAttachment = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $nTerminalModificationId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $nTerminalModification = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $cTerminalModificationId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $cTerminalModification = null;

    /**
     * Validation map for fields in type SubstanceProtein.Subunit
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstanceProteinSubunit Constructor
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
        if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
            if ($data[self::FIELD_N_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $this->setNTerminalModificationId($data[self::FIELD_N_TERMINAL_MODIFICATION_ID]);
            } else {
                $this->setNTerminalModificationId(new FHIRIdentifier($data[self::FIELD_N_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION]) || isset($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT])) {
            $value = $data[self::FIELD_N_TERMINAL_MODIFICATION] ?? null;
            $ext = (isset($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT]) && is_array($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT])) ? $data[self::FIELD_N_TERMINAL_MODIFICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNTerminalModification($value);
                } else if (is_array($value)) {
                    $this->setNTerminalModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNTerminalModification(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
            if ($data[self::FIELD_C_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $this->setCTerminalModificationId($data[self::FIELD_C_TERMINAL_MODIFICATION_ID]);
            } else {
                $this->setCTerminalModificationId(new FHIRIdentifier($data[self::FIELD_C_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION]) || isset($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT])) {
            $value = $data[self::FIELD_C_TERMINAL_MODIFICATION] ?? null;
            $ext = (isset($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT]) && is_array($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT])) ? $data[self::FIELD_C_TERMINAL_MODIFICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCTerminalModification($value);
                } else if (is_array($value)) {
                    $this->setCTerminalModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCTerminalModification(new FHIRString($ext));
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
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
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
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
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
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * Length of linear sequences of amino acids contained in the subunit.
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
     * Length of linear sequences of amino acids contained in the subunit.
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
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier
     */
    public function getNTerminalModificationId(): null|FHIRIdentifier
    {
        return $this->nTerminalModificationId;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $nTerminalModificationId
     * @return static
     */
    public function setNTerminalModificationId(null|FHIRIdentifier $nTerminalModificationId = null): self
    {
        if (null === $nTerminalModificationId) {
            $nTerminalModificationId = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->nTerminalModificationId, $nTerminalModificationId);
        $this->nTerminalModificationId = $nTerminalModificationId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getNTerminalModification(): null|FHIRString
    {
        return $this->nTerminalModification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $nTerminalModification
     * @return static
     */
    public function setNTerminalModification(null|string|FHIRStringPrimitive|FHIRString $nTerminalModification = null): self
    {
        if (null !== $nTerminalModification && !($nTerminalModification instanceof FHIRString)) {
            $nTerminalModification = new FHIRString($nTerminalModification);
        }
        $this->_trackValueSet($this->nTerminalModification, $nTerminalModification);
        $this->nTerminalModification = $nTerminalModification;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier
     */
    public function getCTerminalModificationId(): null|FHIRIdentifier
    {
        return $this->cTerminalModificationId;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $cTerminalModificationId
     * @return static
     */
    public function setCTerminalModificationId(null|FHIRIdentifier $cTerminalModificationId = null): self
    {
        if (null === $cTerminalModificationId) {
            $cTerminalModificationId = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->cTerminalModificationId, $cTerminalModificationId);
        $this->cTerminalModificationId = $cTerminalModificationId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getCTerminalModification(): null|FHIRString
    {
        return $this->cTerminalModification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $cTerminalModification
     * @return static
     */
    public function setCTerminalModification(null|string|FHIRStringPrimitive|FHIRString $cTerminalModification = null): self
    {
        if (null !== $cTerminalModification && !($cTerminalModification instanceof FHIRString)) {
            $cTerminalModification = new FHIRString($cTerminalModification);
        }
        $this->_trackValueSet($this->cTerminalModification, $cTerminalModification);
        $this->cTerminalModification = $cTerminalModification;
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
        if (null !== ($v = $this->getNTerminalModificationId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_N_TERMINAL_MODIFICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCTerminalModification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_C_TERMINAL_MODIFICATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SUBUNIT])) {
            $v = $this->getSubunit();
            foreach($validationRules[self::FIELD_SUBUNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_SUBUNIT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_SEQUENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_LENGTH, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_SEQUENCE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_ATTACHMENT])) {
                        $errs[self::FIELD_SEQUENCE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
            $v = $this->getNTerminalModificationId();
            foreach($validationRules[self::FIELD_N_TERMINAL_MODIFICATION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_N_TERMINAL_MODIFICATION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
                        $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID] = [];
                    }
                    $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_N_TERMINAL_MODIFICATION])) {
            $v = $this->getNTerminalModification();
            foreach($validationRules[self::FIELD_N_TERMINAL_MODIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_N_TERMINAL_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_N_TERMINAL_MODIFICATION])) {
                        $errs[self::FIELD_N_TERMINAL_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_N_TERMINAL_MODIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
            $v = $this->getCTerminalModificationId();
            foreach($validationRules[self::FIELD_C_TERMINAL_MODIFICATION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_C_TERMINAL_MODIFICATION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
                        $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID] = [];
                    }
                    $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_C_TERMINAL_MODIFICATION])) {
            $v = $this->getCTerminalModification();
            foreach($validationRules[self::FIELD_C_TERMINAL_MODIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_C_TERMINAL_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_C_TERMINAL_MODIFICATION])) {
                        $errs[self::FIELD_C_TERMINAL_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_C_TERMINAL_MODIFICATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
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
        } else if (!($type instanceof FHIRSubstanceProteinSubunit)) {
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
            } elseif (self::FIELD_N_TERMINAL_MODIFICATION_ID === $n->nodeName) {
                $type->setNTerminalModificationId(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_N_TERMINAL_MODIFICATION === $n->nodeName) {
                $type->setNTerminalModification(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_C_TERMINAL_MODIFICATION_ID === $n->nodeName) {
                $type->setCTerminalModificationId(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_C_TERMINAL_MODIFICATION === $n->nodeName) {
                $type->setCTerminalModification(FHIRString::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_N_TERMINAL_MODIFICATION);
        if (null !== $n) {
            $pt = $type->getNTerminalModification();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNTerminalModification($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_C_TERMINAL_MODIFICATION);
        if (null !== $n) {
            $pt = $type->getCTerminalModification();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCTerminalModification($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstanceProteinSubunit'), $libxmlOpts);
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
        if (null !== ($v = $this->getNTerminalModificationId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_N_TERMINAL_MODIFICATION_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_N_TERMINAL_MODIFICATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_C_TERMINAL_MODIFICATION_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCTerminalModification())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_C_TERMINAL_MODIFICATION);
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
        if (null !== ($v = $this->getNTerminalModificationId())) {
            $out->{self::FIELD_N_TERMINAL_MODIFICATION_ID} = $v;
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_N_TERMINAL_MODIFICATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_N_TERMINAL_MODIFICATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            $out->{self::FIELD_C_TERMINAL_MODIFICATION_ID} = $v;
        }
        if (null !== ($v = $this->getCTerminalModification())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_C_TERMINAL_MODIFICATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_C_TERMINAL_MODIFICATION_EXT} = $ext;
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