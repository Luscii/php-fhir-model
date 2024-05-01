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

use HL7\FHIR\R4\FHIRDecimalPrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRDecimal;
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
 * Class FHIRMolecularSequenceRoc
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceRoc extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC;

    const FIELD_SCORE = 'score';
    const FIELD_SCORE_EXT = '_score';
    const FIELD_NUM_TP = 'numTP';
    const FIELD_NUM_TP_EXT = '_numTP';
    const FIELD_NUM_FP = 'numFP';
    const FIELD_NUM_FP_EXT = '_numFP';
    const FIELD_NUM_FN = 'numFN';
    const FIELD_NUM_FN_EXT = '_numFN';
    const FIELD_PRECISION = 'precision';
    const FIELD_PRECISION_EXT = '_precision';
    const FIELD_SENSITIVITY = 'sensitivity';
    const FIELD_SENSITIVITY_EXT = '_sensitivity';
    const FIELD_F_MEASURE = 'fMeasure';
    const FIELD_F_MEASURE_EXT = '_fMeasure';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    protected null|array $score = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    protected null|array $numTP = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    protected null|array $numFP = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    protected null|array $numFN = [];
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal[]
     */
    protected null|array $precision = [];
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal[]
     */
    protected null|array $sensitivity = [];
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal[]
     */
    protected null|array $fMeasure = [];

    /**
     * Validation map for fields in type MolecularSequence.Roc
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMolecularSequenceRoc Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SCORE]) || isset($data[self::FIELD_SCORE_EXT])) {
            $value = $data[self::FIELD_SCORE] ?? null;
            $ext = (isset($data[self::FIELD_SCORE_EXT]) && is_array($data[self::FIELD_SCORE_EXT])) ? $data[self::FIELD_SCORE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addScore($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addScore($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addScore(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addScore(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addScore(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUM_TP]) || isset($data[self::FIELD_NUM_TP_EXT])) {
            $value = $data[self::FIELD_NUM_TP] ?? null;
            $ext = (isset($data[self::FIELD_NUM_TP_EXT]) && is_array($data[self::FIELD_NUM_TP_EXT])) ? $data[self::FIELD_NUM_TP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addNumTP($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addNumTP($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumTP(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumTP(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumTP(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUM_FP]) || isset($data[self::FIELD_NUM_FP_EXT])) {
            $value = $data[self::FIELD_NUM_FP] ?? null;
            $ext = (isset($data[self::FIELD_NUM_FP_EXT]) && is_array($data[self::FIELD_NUM_FP_EXT])) ? $data[self::FIELD_NUM_FP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addNumFP($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addNumFP($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumFP(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumFP(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumFP(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUM_FN]) || isset($data[self::FIELD_NUM_FN_EXT])) {
            $value = $data[self::FIELD_NUM_FN] ?? null;
            $ext = (isset($data[self::FIELD_NUM_FN_EXT]) && is_array($data[self::FIELD_NUM_FN_EXT])) ? $data[self::FIELD_NUM_FN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addNumFN($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addNumFN($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumFN(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumFN(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumFN(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PRECISION]) || isset($data[self::FIELD_PRECISION_EXT])) {
            $value = $data[self::FIELD_PRECISION] ?? null;
            $ext = (isset($data[self::FIELD_PRECISION_EXT]) && is_array($data[self::FIELD_PRECISION_EXT])) ? $data[self::FIELD_PRECISION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addPrecision($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addPrecision($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPrecision(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPrecision(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPrecision(new FHIRDecimal($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SENSITIVITY]) || isset($data[self::FIELD_SENSITIVITY_EXT])) {
            $value = $data[self::FIELD_SENSITIVITY] ?? null;
            $ext = (isset($data[self::FIELD_SENSITIVITY_EXT]) && is_array($data[self::FIELD_SENSITIVITY_EXT])) ? $data[self::FIELD_SENSITIVITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addSensitivity($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addSensitivity($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSensitivity(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSensitivity(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSensitivity(new FHIRDecimal($iext));
                }
            }
        }
        if (isset($data[self::FIELD_F_MEASURE]) || isset($data[self::FIELD_F_MEASURE_EXT])) {
            $value = $data[self::FIELD_F_MEASURE] ?? null;
            $ext = (isset($data[self::FIELD_F_MEASURE_EXT]) && is_array($data[self::FIELD_F_MEASURE_EXT])) ? $data[self::FIELD_F_MEASURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addFMeasure($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addFMeasure($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addFMeasure(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addFMeasure(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addFMeasure(new FHIRDecimal($iext));
                }
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
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    public function getScore(): null|array
    {
        return $this->score;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $score
     * @return static
     */
    public function addScore(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $score = null): self
    {
        if (null !== $score && !($score instanceof FHIRInteger)) {
            $score = new FHIRInteger($score);
        }
        $this->_trackValueAdded();
        $this->score[] = $score;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRInteger[] $score
     * @return static
     */
    public function setScore(array $score = []): self
    {
        if ([] !== $this->score) {
            $this->_trackValuesRemoved(count($this->score));
            $this->score = [];
        }
        if ([] === $score) {
            return $this;
        }
        foreach($score as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addScore($v);
            } else {
                $this->addScore(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    public function getNumTP(): null|array
    {
        return $this->numTP;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $numTP
     * @return static
     */
    public function addNumTP(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numTP = null): self
    {
        if (null !== $numTP && !($numTP instanceof FHIRInteger)) {
            $numTP = new FHIRInteger($numTP);
        }
        $this->_trackValueAdded();
        $this->numTP[] = $numTP;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRInteger[] $numTP
     * @return static
     */
    public function setNumTP(array $numTP = []): self
    {
        if ([] !== $this->numTP) {
            $this->_trackValuesRemoved(count($this->numTP));
            $this->numTP = [];
        }
        if ([] === $numTP) {
            return $this;
        }
        foreach($numTP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumTP($v);
            } else {
                $this->addNumTP(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    public function getNumFP(): null|array
    {
        return $this->numFP;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $numFP
     * @return static
     */
    public function addNumFP(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numFP = null): self
    {
        if (null !== $numFP && !($numFP instanceof FHIRInteger)) {
            $numFP = new FHIRInteger($numFP);
        }
        $this->_trackValueAdded();
        $this->numFP[] = $numFP;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRInteger[] $numFP
     * @return static
     */
    public function setNumFP(array $numFP = []): self
    {
        if ([] !== $this->numFP) {
            $this->_trackValuesRemoved(count($this->numFP));
            $this->numFP = [];
        }
        if ([] === $numFP) {
            return $this;
        }
        foreach($numFP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumFP($v);
            } else {
                $this->addNumFP(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger[]
     */
    public function getNumFN(): null|array
    {
        return $this->numFN;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $numFN
     * @return static
     */
    public function addNumFN(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numFN = null): self
    {
        if (null !== $numFN && !($numFN instanceof FHIRInteger)) {
            $numFN = new FHIRInteger($numFN);
        }
        $this->_trackValueAdded();
        $this->numFN[] = $numFN;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRInteger[] $numFN
     * @return static
     */
    public function setNumFN(array $numFN = []): self
    {
        if ([] !== $this->numFN) {
            $this->_trackValuesRemoved(count($this->numFN));
            $this->numFN = [];
        }
        if ([] === $numFN) {
            return $this;
        }
        foreach($numFN as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumFN($v);
            } else {
                $this->addNumFN(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal[]
     */
    public function getPrecision(): null|array
    {
        return $this->precision;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param null|string|float|int|\HL7\FHIR\R4\FHIRDecimalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDecimal $precision
     * @return static
     */
    public function addPrecision(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $precision = null): self
    {
        if (null !== $precision && !($precision instanceof FHIRDecimal)) {
            $precision = new FHIRDecimal($precision);
        }
        $this->_trackValueAdded();
        $this->precision[] = $precision;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRDecimal[] $precision
     * @return static
     */
    public function setPrecision(array $precision = []): self
    {
        if ([] !== $this->precision) {
            $this->_trackValuesRemoved(count($this->precision));
            $this->precision = [];
        }
        if ([] === $precision) {
            return $this;
        }
        foreach($precision as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addPrecision($v);
            } else {
                $this->addPrecision(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal[]
     */
    public function getSensitivity(): null|array
    {
        return $this->sensitivity;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param null|string|float|int|\HL7\FHIR\R4\FHIRDecimalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDecimal $sensitivity
     * @return static
     */
    public function addSensitivity(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sensitivity = null): self
    {
        if (null !== $sensitivity && !($sensitivity instanceof FHIRDecimal)) {
            $sensitivity = new FHIRDecimal($sensitivity);
        }
        $this->_trackValueAdded();
        $this->sensitivity[] = $sensitivity;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRDecimal[] $sensitivity
     * @return static
     */
    public function setSensitivity(array $sensitivity = []): self
    {
        if ([] !== $this->sensitivity) {
            $this->_trackValuesRemoved(count($this->sensitivity));
            $this->sensitivity = [];
        }
        if ([] === $sensitivity) {
            return $this;
        }
        foreach($sensitivity as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addSensitivity($v);
            } else {
                $this->addSensitivity(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal[]
     */
    public function getFMeasure(): null|array
    {
        return $this->fMeasure;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param null|string|float|int|\HL7\FHIR\R4\FHIRDecimalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDecimal $fMeasure
     * @return static
     */
    public function addFMeasure(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fMeasure = null): self
    {
        if (null !== $fMeasure && !($fMeasure instanceof FHIRDecimal)) {
            $fMeasure = new FHIRDecimal($fMeasure);
        }
        $this->_trackValueAdded();
        $this->fMeasure[] = $fMeasure;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRDecimal[] $fMeasure
     * @return static
     */
    public function setFMeasure(array $fMeasure = []): self
    {
        if ([] !== $this->fMeasure) {
            $this->_trackValuesRemoved(count($this->fMeasure));
            $this->fMeasure = [];
        }
        if ([] === $fMeasure) {
            return $this;
        }
        foreach($fMeasure as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addFMeasure($v);
            } else {
                $this->addFMeasure(new FHIRDecimal($v));
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
        if ([] !== ($vs = $this->getScore())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCORE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUM_TP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUM_FP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUM_FN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRECISION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SENSITIVITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFMeasure())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_F_MEASURE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORE])) {
            $v = $this->getScore();
            foreach($validationRules[self::FIELD_SCORE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_SCORE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORE])) {
                        $errs[self::FIELD_SCORE] = [];
                    }
                    $errs[self::FIELD_SCORE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_TP])) {
            $v = $this->getNumTP();
            foreach($validationRules[self::FIELD_NUM_TP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_NUM_TP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_TP])) {
                        $errs[self::FIELD_NUM_TP] = [];
                    }
                    $errs[self::FIELD_NUM_TP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_FP])) {
            $v = $this->getNumFP();
            foreach($validationRules[self::FIELD_NUM_FP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_NUM_FP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_FP])) {
                        $errs[self::FIELD_NUM_FP] = [];
                    }
                    $errs[self::FIELD_NUM_FP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_FN])) {
            $v = $this->getNumFN();
            foreach($validationRules[self::FIELD_NUM_FN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_NUM_FN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_FN])) {
                        $errs[self::FIELD_NUM_FN] = [];
                    }
                    $errs[self::FIELD_NUM_FN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRECISION])) {
            $v = $this->getPrecision();
            foreach($validationRules[self::FIELD_PRECISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_PRECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRECISION])) {
                        $errs[self::FIELD_PRECISION] = [];
                    }
                    $errs[self::FIELD_PRECISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SENSITIVITY])) {
            $v = $this->getSensitivity();
            foreach($validationRules[self::FIELD_SENSITIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_SENSITIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENSITIVITY])) {
                        $errs[self::FIELD_SENSITIVITY] = [];
                    }
                    $errs[self::FIELD_SENSITIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_F_MEASURE])) {
            $v = $this->getFMeasure();
            foreach($validationRules[self::FIELD_F_MEASURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_F_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_F_MEASURE])) {
                        $errs[self::FIELD_F_MEASURE] = [];
                    }
                    $errs[self::FIELD_F_MEASURE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
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
        } else if (!($type instanceof FHIRMolecularSequenceRoc)) {
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
            if (self::FIELD_SCORE === $n->nodeName) {
                $type->addScore(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_NUM_TP === $n->nodeName) {
                $type->addNumTP(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_NUM_FP === $n->nodeName) {
                $type->addNumFP(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_NUM_FN === $n->nodeName) {
                $type->addNumFN(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_PRECISION === $n->nodeName) {
                $type->addPrecision(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_SENSITIVITY === $n->nodeName) {
                $type->addSensitivity(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_F_MEASURE === $n->nodeName) {
                $type->addFMeasure(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SCORE);
        if (null !== $n) {
            $type->addScore($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NUM_TP);
        if (null !== $n) {
            $type->addNumTP($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NUM_FP);
        if (null !== $n) {
            $type->addNumFP($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NUM_FN);
        if (null !== $n) {
            $type->addNumFN($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PRECISION);
        if (null !== $n) {
            $type->addPrecision($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SENSITIVITY);
        if (null !== $n) {
            $type->addSensitivity($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_F_MEASURE);
        if (null !== $n) {
            $type->addFMeasure($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MolecularSequenceRoc'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getScore())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SCORE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NUM_TP);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NUM_FP);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NUM_FN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRECISION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SENSITIVITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getFMeasure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_F_MEASURE);
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
        if ([] !== ($vs = $this->getScore())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SCORE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SCORE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_NUM_TP} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUM_TP_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_NUM_FP} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUM_FP_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_NUM_FN} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUM_FN_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDecimal::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PRECISION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRECISION_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDecimal::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SENSITIVITY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SENSITIVITY_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getFMeasure())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDecimal::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_F_MEASURE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_F_MEASURE_EXT} = $exts;
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