<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRElement\FHIRTiming;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\DSTU2\FHIRDecimalPrimitive;
use HL7\FHIR\DSTU2\FHIRElement;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal;
use HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRInteger;
use HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod;
use HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration;
use HL7\FHIR\DSTU2\FHIRElement\FHIRRange;
use HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRIntegerPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are expected or requested to occur. The most common usage is
 * in dosage instructions for medications. They are also used when planning care of
 * various kinds.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRTimingRepeat
 * @package \HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
 */
class FHIRTimingRepeat extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT;

    const FIELD_BOUNDS_QUANTITY = 'boundsQuantity';
    const FIELD_BOUNDS_RANGE = 'boundsRange';
    const FIELD_BOUNDS_PERIOD = 'boundsPeriod';
    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_DURATION_MAX = 'durationMax';
    const FIELD_DURATION_MAX_EXT = '_durationMax';
    const FIELD_DURATION_UNITS = 'durationUnits';
    const FIELD_DURATION_UNITS_EXT = '_durationUnits';
    const FIELD_FREQUENCY = 'frequency';
    const FIELD_FREQUENCY_EXT = '_frequency';
    const FIELD_FREQUENCY_MAX = 'frequencyMax';
    const FIELD_FREQUENCY_MAX_EXT = '_frequencyMax';
    const FIELD_PERIOD = 'period';
    const FIELD_PERIOD_EXT = '_period';
    const FIELD_PERIOD_MAX = 'periodMax';
    const FIELD_PERIOD_MAX_EXT = '_periodMax';
    const FIELD_PERIOD_UNITS = 'periodUnits';
    const FIELD_PERIOD_UNITS_EXT = '_periodUnits';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';

    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $boundsQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $boundsRange = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $boundsPeriod = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $count = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $duration = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $durationMax = null;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    protected null|FHIRUnitsOfTime $durationUnits = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $frequency = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $frequencyMax = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $period = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $periodMax = null;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    protected null|FHIRUnitsOfTime $periodUnits = null;
    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming
     */
    protected null|FHIREventTiming $when = null;

    /**
     * Validation map for fields in type Timing.Repeat
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRTimingRepeat Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BOUNDS_QUANTITY])) {
            if ($data[self::FIELD_BOUNDS_QUANTITY] instanceof FHIRDuration) {
                $this->setBoundsQuantity($data[self::FIELD_BOUNDS_QUANTITY]);
            } else {
                $this->setBoundsQuantity(new FHIRDuration($data[self::FIELD_BOUNDS_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_BOUNDS_RANGE])) {
            if ($data[self::FIELD_BOUNDS_RANGE] instanceof FHIRRange) {
                $this->setBoundsRange($data[self::FIELD_BOUNDS_RANGE]);
            } else {
                $this->setBoundsRange(new FHIRRange($data[self::FIELD_BOUNDS_RANGE]));
            }
        }
        if (isset($data[self::FIELD_BOUNDS_PERIOD])) {
            if ($data[self::FIELD_BOUNDS_PERIOD] instanceof FHIRPeriod) {
                $this->setBoundsPeriod($data[self::FIELD_BOUNDS_PERIOD]);
            } else {
                $this->setBoundsPeriod(new FHIRPeriod($data[self::FIELD_BOUNDS_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_COUNT]) || isset($data[self::FIELD_COUNT_EXT])) {
            $value = $data[self::FIELD_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_COUNT_EXT]) && is_array($data[self::FIELD_COUNT_EXT])) ? $data[self::FIELD_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setCount($value);
                } else if (is_array($value)) {
                    $this->setCount(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCount(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION]) || isset($data[self::FIELD_DURATION_EXT])) {
            $value = $data[self::FIELD_DURATION] ?? null;
            $ext = (isset($data[self::FIELD_DURATION_EXT]) && is_array($data[self::FIELD_DURATION_EXT])) ? $data[self::FIELD_DURATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDuration($value);
                } else if (is_array($value)) {
                    $this->setDuration(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDuration(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDuration(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION_MAX]) || isset($data[self::FIELD_DURATION_MAX_EXT])) {
            $value = $data[self::FIELD_DURATION_MAX] ?? null;
            $ext = (isset($data[self::FIELD_DURATION_MAX_EXT]) && is_array($data[self::FIELD_DURATION_MAX_EXT])) ? $data[self::FIELD_DURATION_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDurationMax($value);
                } else if (is_array($value)) {
                    $this->setDurationMax(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDurationMax(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDurationMax(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION_UNITS]) || isset($data[self::FIELD_DURATION_UNITS_EXT])) {
            $value = $data[self::FIELD_DURATION_UNITS] ?? null;
            $ext = (isset($data[self::FIELD_DURATION_UNITS_EXT]) && is_array($data[self::FIELD_DURATION_UNITS_EXT])) ? $data[self::FIELD_DURATION_UNITS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnitsOfTime) {
                    $this->setDurationUnits($value);
                } else if (is_array($value)) {
                    $this->setDurationUnits(new FHIRUnitsOfTime(array_merge($ext, $value)));
                } else {
                    $this->setDurationUnits(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDurationUnits(new FHIRUnitsOfTime($ext));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY]) || isset($data[self::FIELD_FREQUENCY_EXT])) {
            $value = $data[self::FIELD_FREQUENCY] ?? null;
            $ext = (isset($data[self::FIELD_FREQUENCY_EXT]) && is_array($data[self::FIELD_FREQUENCY_EXT])) ? $data[self::FIELD_FREQUENCY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setFrequency($value);
                } else if (is_array($value)) {
                    $this->setFrequency(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setFrequency(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFrequency(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY_MAX]) || isset($data[self::FIELD_FREQUENCY_MAX_EXT])) {
            $value = $data[self::FIELD_FREQUENCY_MAX] ?? null;
            $ext = (isset($data[self::FIELD_FREQUENCY_MAX_EXT]) && is_array($data[self::FIELD_FREQUENCY_MAX_EXT])) ? $data[self::FIELD_FREQUENCY_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setFrequencyMax($value);
                } else if (is_array($value)) {
                    $this->setFrequencyMax(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setFrequencyMax(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFrequencyMax(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_PERIOD]) || isset($data[self::FIELD_PERIOD_EXT])) {
            $value = $data[self::FIELD_PERIOD] ?? null;
            $ext = (isset($data[self::FIELD_PERIOD_EXT]) && is_array($data[self::FIELD_PERIOD_EXT])) ? $data[self::FIELD_PERIOD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPeriod($value);
                } else if (is_array($value)) {
                    $this->setPeriod(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPeriod(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPeriod(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PERIOD_MAX]) || isset($data[self::FIELD_PERIOD_MAX_EXT])) {
            $value = $data[self::FIELD_PERIOD_MAX] ?? null;
            $ext = (isset($data[self::FIELD_PERIOD_MAX_EXT]) && is_array($data[self::FIELD_PERIOD_MAX_EXT])) ? $data[self::FIELD_PERIOD_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPeriodMax($value);
                } else if (is_array($value)) {
                    $this->setPeriodMax(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPeriodMax(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPeriodMax(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PERIOD_UNITS]) || isset($data[self::FIELD_PERIOD_UNITS_EXT])) {
            $value = $data[self::FIELD_PERIOD_UNITS] ?? null;
            $ext = (isset($data[self::FIELD_PERIOD_UNITS_EXT]) && is_array($data[self::FIELD_PERIOD_UNITS_EXT])) ? $data[self::FIELD_PERIOD_UNITS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnitsOfTime) {
                    $this->setPeriodUnits($value);
                } else if (is_array($value)) {
                    $this->setPeriodUnits(new FHIRUnitsOfTime(array_merge($ext, $value)));
                } else {
                    $this->setPeriodUnits(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPeriodUnits(new FHIRUnitsOfTime($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN]) || isset($data[self::FIELD_WHEN_EXT])) {
            $value = $data[self::FIELD_WHEN] ?? null;
            $ext = (isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT])) ? $data[self::FIELD_WHEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREventTiming) {
                    $this->setWhen($value);
                } else if (is_array($value)) {
                    $this->setWhen(new FHIREventTiming(array_merge($ext, $value)));
                } else {
                    $this->setWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWhen(new FHIREventTiming($ext));
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
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsQuantity(): null|FHIRDuration
    {
        return $this->boundsQuantity;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $boundsQuantity
     * @return static
     */
    public function setBoundsQuantity(null|FHIRDuration $boundsQuantity = null): self
    {
        if (null === $boundsQuantity) {
            $boundsQuantity = new FHIRDuration();
        }
        $this->_trackValueSet($this->boundsQuantity, $boundsQuantity);
        $this->boundsQuantity = $boundsQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getBoundsRange(): null|FHIRRange
    {
        return $this->boundsRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $boundsRange
     * @return static
     */
    public function setBoundsRange(null|FHIRRange $boundsRange = null): self
    {
        if (null === $boundsRange) {
            $boundsRange = new FHIRRange();
        }
        $this->_trackValueSet($this->boundsRange, $boundsRange);
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod(): null|FHIRPeriod
    {
        return $this->boundsPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $boundsPeriod
     * @return static
     */
    public function setBoundsPeriod(null|FHIRPeriod $boundsPeriod = null): self
    {
        if (null === $boundsPeriod) {
            $boundsPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->boundsPeriod, $boundsPeriod);
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getCount(): null|FHIRInteger
    {
        return $this->count;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @param null|string|int|float|\HL7\FHIR\DSTU2\FHIRIntegerPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $count
     * @return static
     */
    public function setCount(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count = null): self
    {
        if (null !== $count && !($count instanceof FHIRInteger)) {
            $count = new FHIRInteger($count);
        }
        $this->_trackValueSet($this->count, $count);
        $this->count = $count;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getDuration(): null|FHIRDecimal
    {
        return $this->duration;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @param null|string|float|int|\HL7\FHIR\DSTU2\FHIRDecimalPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $duration
     * @return static
     */
    public function setDuration(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration = null): self
    {
        if (null !== $duration && !($duration instanceof FHIRDecimal)) {
            $duration = new FHIRDecimal($duration);
        }
        $this->_trackValueSet($this->duration, $duration);
        $this->duration = $duration;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getDurationMax(): null|FHIRDecimal
    {
        return $this->durationMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @param null|string|float|int|\HL7\FHIR\DSTU2\FHIRDecimalPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $durationMax
     * @return static
     */
    public function setDurationMax(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $durationMax = null): self
    {
        if (null !== $durationMax && !($durationMax instanceof FHIRDecimal)) {
            $durationMax = new FHIRDecimal($durationMax);
        }
        $this->_trackValueSet($this->durationMax, $durationMax);
        $this->durationMax = $durationMax;
        return $this;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnits(): null|FHIRUnitsOfTime
    {
        return $this->durationUnits;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime $durationUnits
     * @return static
     */
    public function setDurationUnits(null|FHIRUnitsOfTime $durationUnits = null): self
    {
        if (null === $durationUnits) {
            $durationUnits = new FHIRUnitsOfTime();
        }
        $this->_trackValueSet($this->durationUnits, $durationUnits);
        $this->durationUnits = $durationUnits;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getFrequency(): null|FHIRInteger
    {
        return $this->frequency;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @param null|string|int|float|\HL7\FHIR\DSTU2\FHIRIntegerPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $frequency
     * @return static
     */
    public function setFrequency(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null): self
    {
        if (null !== $frequency && !($frequency instanceof FHIRInteger)) {
            $frequency = new FHIRInteger($frequency);
        }
        $this->_trackValueSet($this->frequency, $frequency);
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getFrequencyMax(): null|FHIRInteger
    {
        return $this->frequencyMax;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|string|int|float|\HL7\FHIR\DSTU2\FHIRIntegerPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $frequencyMax
     * @return static
     */
    public function setFrequencyMax(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax = null): self
    {
        if (null !== $frequencyMax && !($frequencyMax instanceof FHIRInteger)) {
            $frequencyMax = new FHIRInteger($frequencyMax);
        }
        $this->_trackValueSet($this->frequencyMax, $frequencyMax);
        $this->frequencyMax = $frequencyMax;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPeriod(): null|FHIRDecimal
    {
        return $this->period;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @param null|string|float|int|\HL7\FHIR\DSTU2\FHIRDecimalPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $period
     * @return static
     */
    public function setPeriod(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $period = null): self
    {
        if (null !== $period && !($period instanceof FHIRDecimal)) {
            $period = new FHIRDecimal($period);
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax(): null|FHIRDecimal
    {
        return $this->periodMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @param null|string|float|int|\HL7\FHIR\DSTU2\FHIRDecimalPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $periodMax
     * @return static
     */
    public function setPeriodMax(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $periodMax = null): self
    {
        if (null !== $periodMax && !($periodMax instanceof FHIRDecimal)) {
            $periodMax = new FHIRDecimal($periodMax);
        }
        $this->_trackValueSet($this->periodMax, $periodMax);
        $this->periodMax = $periodMax;
        return $this;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnits(): null|FHIRUnitsOfTime
    {
        return $this->periodUnits;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime $periodUnits
     * @return static
     */
    public function setPeriodUnits(null|FHIRUnitsOfTime $periodUnits = null): self
    {
        if (null === $periodUnits) {
            $periodUnits = new FHIRUnitsOfTime();
        }
        $this->_trackValueSet($this->periodUnits, $periodUnits);
        $this->periodUnits = $periodUnits;
        return $this;
    }

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming
     */
    public function getWhen(): null|FHIREventTiming
    {
        return $this->when;
    }

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function setWhen(null|FHIREventTiming $when = null): self
    {
        if (null === $when) {
            $when = new FHIREventTiming();
        }
        $this->_trackValueSet($this->when, $when);
        $this->when = $when;
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
        if (null !== ($v = $this->getBoundsQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BOUNDS_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBoundsRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BOUNDS_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BOUNDS_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationUnits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_UNITS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriodMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriodUnits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD_UNITS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_QUANTITY])) {
            $v = $this->getBoundsQuantity();
            foreach($validationRules[self::FIELD_BOUNDS_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_BOUNDS_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_QUANTITY])) {
                        $errs[self::FIELD_BOUNDS_QUANTITY] = [];
                    }
                    $errs[self::FIELD_BOUNDS_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_RANGE])) {
            $v = $this->getBoundsRange();
            foreach($validationRules[self::FIELD_BOUNDS_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_BOUNDS_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_RANGE])) {
                        $errs[self::FIELD_BOUNDS_RANGE] = [];
                    }
                    $errs[self::FIELD_BOUNDS_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_PERIOD])) {
            $v = $this->getBoundsPeriod();
            foreach($validationRules[self::FIELD_BOUNDS_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_BOUNDS_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_PERIOD])) {
                        $errs[self::FIELD_BOUNDS_PERIOD] = [];
                    }
                    $errs[self::FIELD_BOUNDS_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT])) {
            $v = $this->getCount();
            foreach($validationRules[self::FIELD_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT])) {
                        $errs[self::FIELD_COUNT] = [];
                    }
                    $errs[self::FIELD_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_MAX])) {
            $v = $this->getDurationMax();
            foreach($validationRules[self::FIELD_DURATION_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DURATION_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_MAX])) {
                        $errs[self::FIELD_DURATION_MAX] = [];
                    }
                    $errs[self::FIELD_DURATION_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_UNITS])) {
            $v = $this->getDurationUnits();
            foreach($validationRules[self::FIELD_DURATION_UNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DURATION_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_UNITS])) {
                        $errs[self::FIELD_DURATION_UNITS] = [];
                    }
                    $errs[self::FIELD_DURATION_UNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY_MAX])) {
            $v = $this->getFrequencyMax();
            foreach($validationRules[self::FIELD_FREQUENCY_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_FREQUENCY_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY_MAX])) {
                        $errs[self::FIELD_FREQUENCY_MAX] = [];
                    }
                    $errs[self::FIELD_FREQUENCY_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_MAX])) {
            $v = $this->getPeriodMax();
            foreach($validationRules[self::FIELD_PERIOD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_PERIOD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_MAX])) {
                        $errs[self::FIELD_PERIOD_MAX] = [];
                    }
                    $errs[self::FIELD_PERIOD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_UNITS])) {
            $v = $this->getPeriodUnits();
            foreach($validationRules[self::FIELD_PERIOD_UNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_PERIOD_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_UNITS])) {
                        $errs[self::FIELD_PERIOD_UNITS] = [];
                    }
                    $errs[self::FIELD_PERIOD_UNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN])) {
            $v = $this->getWhen();
            foreach($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN])) {
                        $errs[self::FIELD_WHEN] = [];
                    }
                    $errs[self::FIELD_WHEN][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat
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
        } else if (!($type instanceof FHIRTimingRepeat)) {
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
            if (self::FIELD_BOUNDS_QUANTITY === $n->nodeName) {
                $type->setBoundsQuantity(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_BOUNDS_RANGE === $n->nodeName) {
                $type->setBoundsRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_BOUNDS_PERIOD === $n->nodeName) {
                $type->setBoundsPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_COUNT === $n->nodeName) {
                $type->setCount(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION === $n->nodeName) {
                $type->setDuration(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION_MAX === $n->nodeName) {
                $type->setDurationMax(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION_UNITS === $n->nodeName) {
                $type->setDurationUnits(FHIRUnitsOfTime::xmlUnserialize($n));
            } elseif (self::FIELD_FREQUENCY === $n->nodeName) {
                $type->setFrequency(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_FREQUENCY_MAX === $n->nodeName) {
                $type->setFrequencyMax(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD_MAX === $n->nodeName) {
                $type->setPeriodMax(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD_UNITS === $n->nodeName) {
                $type->setPeriodUnits(FHIRUnitsOfTime::xmlUnserialize($n));
            } elseif (self::FIELD_WHEN === $n->nodeName) {
                $type->setWhen(FHIREventTiming::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COUNT);
        if (null !== $n) {
            $pt = $type->getCount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCount($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DURATION);
        if (null !== $n) {
            $pt = $type->getDuration();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDuration($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DURATION_MAX);
        if (null !== $n) {
            $pt = $type->getDurationMax();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDurationMax($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FREQUENCY);
        if (null !== $n) {
            $pt = $type->getFrequency();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFrequency($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FREQUENCY_MAX);
        if (null !== $n) {
            $pt = $type->getFrequencyMax();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFrequencyMax($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PERIOD);
        if (null !== $n) {
            $pt = $type->getPeriod();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPeriod($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PERIOD_MAX);
        if (null !== $n) {
            $pt = $type->getPeriodMax();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPeriodMax($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('TimingRepeat'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getBoundsQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BOUNDS_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBoundsRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BOUNDS_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BOUNDS_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDurationMax())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION_MAX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDurationUnits())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION_UNITS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFrequency())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FREQUENCY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FREQUENCY_MAX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD_MAX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriodUnits())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD_UNITS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWhen())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHEN);
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
        if (null !== ($v = $this->getBoundsQuantity())) {
            $out->{self::FIELD_BOUNDS_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getBoundsRange())) {
            $out->{self::FIELD_BOUNDS_RANGE} = $v;
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            $out->{self::FIELD_BOUNDS_PERIOD} = $v;
        }
        if (null !== ($v = $this->getCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COUNT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DURATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DURATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDurationMax())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DURATION_MAX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DURATION_MAX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDurationUnits())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DURATION_UNITS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnitsOfTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DURATION_UNITS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FREQUENCY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FREQUENCY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FREQUENCY_MAX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FREQUENCY_MAX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PERIOD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PERIOD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPeriodMax())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PERIOD_MAX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PERIOD_MAX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPeriodUnits())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PERIOD_UNITS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnitsOfTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PERIOD_UNITS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWhen())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WHEN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREventTiming::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WHEN_EXT} = $ext;
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