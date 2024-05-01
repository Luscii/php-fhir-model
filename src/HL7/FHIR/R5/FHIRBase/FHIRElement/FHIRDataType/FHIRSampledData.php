<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDecimalPrimitive;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRSampledDataDataTypePrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRChangeTrackingTrait;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRValidationAssertionsTrait;
use HL7\FHIR\R5\PHPFHIRXmlNamespaceTrait;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A series of measurements taken by a device, with upper and lower limits. There
 * may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSampledData
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType
 */
class FHIRSampledData extends FHIRDataType
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA;

    const FIELD_ORIGIN = 'origin';
    const FIELD_INTERVAL = 'interval';
    const FIELD_INTERVAL_EXT = '_interval';
    const FIELD_INTERVAL_UNIT = 'intervalUnit';
    const FIELD_INTERVAL_UNIT_EXT = '_intervalUnit';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_LOWER_LIMIT = 'lowerLimit';
    const FIELD_LOWER_LIMIT_EXT = '_lowerLimit';
    const FIELD_UPPER_LIMIT = 'upperLimit';
    const FIELD_UPPER_LIMIT_EXT = '_upperLimit';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_DIMENSIONS_EXT = '_dimensions';
    const FIELD_CODE_MAP = 'codeMap';
    const FIELD_CODE_MAP_EXT = '_codeMap';
    const FIELD_OFFSETS = 'offsets';
    const FIELD_OFFSETS_EXT = '_offsets';
    const FIELD_DATA = 'data';
    const FIELD_DATA_EXT = '_data';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $origin = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $interval = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $intervalUnit = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $factor = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $lowerLimit = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $upperLimit = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $dimensions = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $codeMap = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A series of data points which are decimal values separated by a single space
     * (character u20). The units in which the offsets are expressed are found in
     * intervalUnit. The absolute point at which the measurements begin SHALL be
     * conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime
     * for a timing offset.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $offsets = null;
    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType
     */
    protected null|FHIRSampledDataDataType $data = null;

    /**
     * Validation map for fields in type SampledData
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSampledData Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ORIGIN])) {
            if ($data[self::FIELD_ORIGIN] instanceof FHIRQuantity) {
                $this->setOrigin($data[self::FIELD_ORIGIN]);
            } else {
                $this->setOrigin(new FHIRQuantity($data[self::FIELD_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_INTERVAL]) || isset($data[self::FIELD_INTERVAL_EXT])) {
            $value = $data[self::FIELD_INTERVAL] ?? null;
            $ext = (isset($data[self::FIELD_INTERVAL_EXT]) && is_array($data[self::FIELD_INTERVAL_EXT])) ? $data[self::FIELD_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setInterval($value);
                } else if (is_array($value)) {
                    $this->setInterval(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setInterval(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInterval(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_INTERVAL_UNIT]) || isset($data[self::FIELD_INTERVAL_UNIT_EXT])) {
            $value = $data[self::FIELD_INTERVAL_UNIT] ?? null;
            $ext = (isset($data[self::FIELD_INTERVAL_UNIT_EXT]) && is_array($data[self::FIELD_INTERVAL_UNIT_EXT])) ? $data[self::FIELD_INTERVAL_UNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setIntervalUnit($value);
                } else if (is_array($value)) {
                    $this->setIntervalUnit(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setIntervalUnit(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIntervalUnit(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
            $value = $data[self::FIELD_FACTOR] ?? null;
            $ext = (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) ? $data[self::FIELD_FACTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_LOWER_LIMIT]) || isset($data[self::FIELD_LOWER_LIMIT_EXT])) {
            $value = $data[self::FIELD_LOWER_LIMIT] ?? null;
            $ext = (isset($data[self::FIELD_LOWER_LIMIT_EXT]) && is_array($data[self::FIELD_LOWER_LIMIT_EXT])) ? $data[self::FIELD_LOWER_LIMIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLowerLimit($value);
                } else if (is_array($value)) {
                    $this->setLowerLimit(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLowerLimit(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLowerLimit(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_UPPER_LIMIT]) || isset($data[self::FIELD_UPPER_LIMIT_EXT])) {
            $value = $data[self::FIELD_UPPER_LIMIT] ?? null;
            $ext = (isset($data[self::FIELD_UPPER_LIMIT_EXT]) && is_array($data[self::FIELD_UPPER_LIMIT_EXT])) ? $data[self::FIELD_UPPER_LIMIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setUpperLimit($value);
                } else if (is_array($value)) {
                    $this->setUpperLimit(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setUpperLimit(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUpperLimit(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DIMENSIONS]) || isset($data[self::FIELD_DIMENSIONS_EXT])) {
            $value = $data[self::FIELD_DIMENSIONS] ?? null;
            $ext = (isset($data[self::FIELD_DIMENSIONS_EXT]) && is_array($data[self::FIELD_DIMENSIONS_EXT])) ? $data[self::FIELD_DIMENSIONS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDimensions($value);
                } else if (is_array($value)) {
                    $this->setDimensions(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDimensions(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDimensions(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_CODE_MAP]) || isset($data[self::FIELD_CODE_MAP_EXT])) {
            $value = $data[self::FIELD_CODE_MAP] ?? null;
            $ext = (isset($data[self::FIELD_CODE_MAP_EXT]) && is_array($data[self::FIELD_CODE_MAP_EXT])) ? $data[self::FIELD_CODE_MAP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setCodeMap($value);
                } else if (is_array($value)) {
                    $this->setCodeMap(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setCodeMap(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCodeMap(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_OFFSETS]) || isset($data[self::FIELD_OFFSETS_EXT])) {
            $value = $data[self::FIELD_OFFSETS] ?? null;
            $ext = (isset($data[self::FIELD_OFFSETS_EXT]) && is_array($data[self::FIELD_OFFSETS_EXT])) ? $data[self::FIELD_OFFSETS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOffsets($value);
                } else if (is_array($value)) {
                    $this->setOffsets(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOffsets(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOffsets(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DATA]) || isset($data[self::FIELD_DATA_EXT])) {
            $value = $data[self::FIELD_DATA] ?? null;
            $ext = (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT])) ? $data[self::FIELD_DATA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSampledDataDataType) {
                    $this->setData($value);
                } else if (is_array($value)) {
                    $this->setData(new FHIRSampledDataDataType(array_merge($ext, $value)));
                } else {
                    $this->setData(new FHIRSampledDataDataType([FHIRSampledDataDataType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setData(new FHIRSampledDataDataType($ext));
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getOrigin(): null|FHIRQuantity
    {
        return $this->origin;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $origin
     * @return static
     */
    public function setOrigin(null|FHIRQuantity $origin = null): self
    {
        if (null === $origin) {
            $origin = new FHIRQuantity();
        }
        $this->_trackValueSet($this->origin, $origin);
        $this->origin = $origin;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getInterval(): null|FHIRDecimal
    {
        return $this->interval;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $interval
     * @return static
     */
    public function setInterval(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $interval = null): self
    {
        if (null !== $interval && !($interval instanceof FHIRDecimal)) {
            $interval = new FHIRDecimal($interval);
        }
        $this->_trackValueSet($this->interval, $interval);
        $this->interval = $interval;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode
     */
    public function getIntervalUnit(): null|FHIRCode
    {
        return $this->intervalUnit;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCodePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode $intervalUnit
     * @return static
     */
    public function setIntervalUnit(null|string|FHIRCodePrimitive|FHIRCode $intervalUnit = null): self
    {
        if (null !== $intervalUnit && !($intervalUnit instanceof FHIRCode)) {
            $intervalUnit = new FHIRCode($intervalUnit);
        }
        $this->_trackValueSet($this->intervalUnit, $intervalUnit);
        $this->intervalUnit = $intervalUnit;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor = null): self
    {
        if (null !== $factor && !($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal($factor);
        }
        $this->_trackValueSet($this->factor, $factor);
        $this->factor = $factor;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit(): null|FHIRDecimal
    {
        return $this->lowerLimit;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $lowerLimit
     * @return static
     */
    public function setLowerLimit(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $lowerLimit = null): self
    {
        if (null !== $lowerLimit && !($lowerLimit instanceof FHIRDecimal)) {
            $lowerLimit = new FHIRDecimal($lowerLimit);
        }
        $this->_trackValueSet($this->lowerLimit, $lowerLimit);
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit(): null|FHIRDecimal
    {
        return $this->upperLimit;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $upperLimit
     * @return static
     */
    public function setUpperLimit(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $upperLimit = null): self
    {
        if (null !== $upperLimit && !($upperLimit instanceof FHIRDecimal)) {
            $upperLimit = new FHIRDecimal($upperLimit);
        }
        $this->_trackValueSet($this->upperLimit, $upperLimit);
        $this->upperLimit = $upperLimit;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDimensions(): null|FHIRPositiveInt
    {
        return $this->dimensions;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $dimensions
     * @return static
     */
    public function setDimensions(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dimensions = null): self
    {
        if (null !== $dimensions && !($dimensions instanceof FHIRPositiveInt)) {
            $dimensions = new FHIRPositiveInt($dimensions);
        }
        $this->_trackValueSet($this->dimensions, $dimensions);
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getCodeMap(): null|FHIRCanonical
    {
        return $this->codeMap;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $codeMap
     * @return static
     */
    public function setCodeMap(null|string|FHIRCanonicalPrimitive|FHIRCanonical $codeMap = null): self
    {
        if (null !== $codeMap && !($codeMap instanceof FHIRCanonical)) {
            $codeMap = new FHIRCanonical($codeMap);
        }
        $this->_trackValueSet($this->codeMap, $codeMap);
        $this->codeMap = $codeMap;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A series of data points which are decimal values separated by a single space
     * (character u20). The units in which the offsets are expressed are found in
     * intervalUnit. The absolute point at which the measurements begin SHALL be
     * conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime
     * for a timing offset.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getOffsets(): null|FHIRString
    {
        return $this->offsets;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A series of data points which are decimal values separated by a single space
     * (character u20). The units in which the offsets are expressed are found in
     * intervalUnit. The absolute point at which the measurements begin SHALL be
     * conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime
     * for a timing offset.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $offsets
     * @return static
     */
    public function setOffsets(null|string|FHIRStringPrimitive|FHIRString $offsets = null): self
    {
        if (null !== $offsets && !($offsets instanceof FHIRString)) {
            $offsets = new FHIRString($offsets);
        }
        $this->_trackValueSet($this->offsets, $offsets);
        $this->offsets = $offsets;
        return $this;
    }

    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType
     */
    public function getData(): null|FHIRSampledDataDataType
    {
        return $this->data;
    }

    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRSampledDataDataTypePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType $data
     * @return static
     */
    public function setData(null|string|FHIRSampledDataDataTypePrimitive|FHIRSampledDataDataType $data = null): self
    {
        if (null !== $data && !($data instanceof FHIRSampledDataDataType)) {
            $data = new FHIRSampledDataDataType($data);
        }
        $this->_trackValueSet($this->data, $data);
        $this->data = $data;
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
        if (null !== ($v = $this->getOrigin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERVAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntervalUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERVAL_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLowerLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOWER_LIMIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUpperLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UPPER_LIMIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIMENSIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCodeMap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE_MAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOffsets())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OFFSETS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGIN])) {
                        $errs[self::FIELD_ORIGIN] = [];
                    }
                    $errs[self::FIELD_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERVAL])) {
            $v = $this->getInterval();
            foreach($validationRules[self::FIELD_INTERVAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERVAL])) {
                        $errs[self::FIELD_INTERVAL] = [];
                    }
                    $errs[self::FIELD_INTERVAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERVAL_UNIT])) {
            $v = $this->getIntervalUnit();
            foreach($validationRules[self::FIELD_INTERVAL_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_INTERVAL_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERVAL_UNIT])) {
                        $errs[self::FIELD_INTERVAL_UNIT] = [];
                    }
                    $errs[self::FIELD_INTERVAL_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOWER_LIMIT])) {
            $v = $this->getLowerLimit();
            foreach($validationRules[self::FIELD_LOWER_LIMIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_LOWER_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOWER_LIMIT])) {
                        $errs[self::FIELD_LOWER_LIMIT] = [];
                    }
                    $errs[self::FIELD_LOWER_LIMIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UPPER_LIMIT])) {
            $v = $this->getUpperLimit();
            foreach($validationRules[self::FIELD_UPPER_LIMIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_UPPER_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UPPER_LIMIT])) {
                        $errs[self::FIELD_UPPER_LIMIT] = [];
                    }
                    $errs[self::FIELD_UPPER_LIMIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIMENSIONS])) {
            $v = $this->getDimensions();
            foreach($validationRules[self::FIELD_DIMENSIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_DIMENSIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIMENSIONS])) {
                        $errs[self::FIELD_DIMENSIONS] = [];
                    }
                    $errs[self::FIELD_DIMENSIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_MAP])) {
            $v = $this->getCodeMap();
            foreach($validationRules[self::FIELD_CODE_MAP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_CODE_MAP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_MAP])) {
                        $errs[self::FIELD_CODE_MAP] = [];
                    }
                    $errs[self::FIELD_CODE_MAP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSETS])) {
            $v = $this->getOffsets();
            foreach($validationRules[self::FIELD_OFFSETS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_OFFSETS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSETS])) {
                        $errs[self::FIELD_OFFSETS] = [];
                    }
                    $errs[self::FIELD_OFFSETS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
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
        } else if (!($type instanceof FHIRSampledData)) {
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
            if (self::FIELD_ORIGIN === $n->nodeName) {
                $type->setOrigin(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_INTERVAL === $n->nodeName) {
                $type->setInterval(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_INTERVAL_UNIT === $n->nodeName) {
                $type->setIntervalUnit(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_FACTOR === $n->nodeName) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_LOWER_LIMIT === $n->nodeName) {
                $type->setLowerLimit(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_UPPER_LIMIT === $n->nodeName) {
                $type->setUpperLimit(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DIMENSIONS === $n->nodeName) {
                $type->setDimensions(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_CODE_MAP === $n->nodeName) {
                $type->setCodeMap(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_OFFSETS === $n->nodeName) {
                $type->setOffsets(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DATA === $n->nodeName) {
                $type->setData(FHIRSampledDataDataType::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INTERVAL);
        if (null !== $n) {
            $pt = $type->getInterval();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInterval($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INTERVAL_UNIT);
        if (null !== $n) {
            $pt = $type->getIntervalUnit();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIntervalUnit($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FACTOR);
        if (null !== $n) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFactor($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LOWER_LIMIT);
        if (null !== $n) {
            $pt = $type->getLowerLimit();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLowerLimit($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_UPPER_LIMIT);
        if (null !== $n) {
            $pt = $type->getUpperLimit();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUpperLimit($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DIMENSIONS);
        if (null !== $n) {
            $pt = $type->getDimensions();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDimensions($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CODE_MAP);
        if (null !== $n) {
            $pt = $type->getCodeMap();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCodeMap($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OFFSETS);
        if (null !== $n) {
            $pt = $type->getOffsets();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOffsets($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA);
        if (null !== $n) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setData($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SampledData'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getOrigin())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORIGIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInterval())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTERVAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIntervalUnit())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTERVAL_UNIT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFactor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FACTOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLowerLimit())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOWER_LIMIT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUpperLimit())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UPPER_LIMIT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDimensions())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIMENSIONS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCodeMap())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE_MAP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOffsets())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OFFSETS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getData())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA);
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
        if (null !== ($v = $this->getOrigin())) {
            $out->{self::FIELD_ORIGIN} = $v;
        }
        if (null !== ($v = $this->getInterval())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INTERVAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INTERVAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIntervalUnit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INTERVAL_UNIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INTERVAL_UNIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FACTOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FACTOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLowerLimit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOWER_LIMIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOWER_LIMIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUpperLimit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UPPER_LIMIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UPPER_LIMIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIMENSIONS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIMENSIONS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCodeMap())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CODE_MAP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CODE_MAP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOffsets())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OFFSETS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OFFSETS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getData())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSampledDataDataType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_EXT} = $ext;
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