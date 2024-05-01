<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 *
 * Class FHIRAppointmentRecurrenceTemplate
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment
 */
class FHIRAppointmentRecurrenceTemplate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE;

    const FIELD_TIMEZONE = 'timezone';
    const FIELD_RECURRENCE_TYPE = 'recurrenceType';
    const FIELD_LAST_OCCURRENCE_DATE = 'lastOccurrenceDate';
    const FIELD_LAST_OCCURRENCE_DATE_EXT = '_lastOccurrenceDate';
    const FIELD_OCCURRENCE_COUNT = 'occurrenceCount';
    const FIELD_OCCURRENCE_COUNT_EXT = '_occurrenceCount';
    const FIELD_OCCURRENCE_DATE = 'occurrenceDate';
    const FIELD_OCCURRENCE_DATE_EXT = '_occurrenceDate';
    const FIELD_WEEKLY_TEMPLATE = 'weeklyTemplate';
    const FIELD_MONTHLY_TEMPLATE = 'monthlyTemplate';
    const FIELD_YEARLY_TEMPLATE = 'yearlyTemplate';
    const FIELD_EXCLUDING_DATE = 'excludingDate';
    const FIELD_EXCLUDING_DATE_EXT = '_excludingDate';
    const FIELD_EXCLUDING_RECURRENCE_ID = 'excludingRecurrenceId';
    const FIELD_EXCLUDING_RECURRENCE_ID_EXT = '_excludingRecurrenceId';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $timezone = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $recurrenceType = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $lastOccurrenceDate = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $occurrenceCount = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    protected null|array $occurrenceDate = [];
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     */
    protected null|FHIRAppointmentWeeklyTemplate $weeklyTemplate = null;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     */
    protected null|FHIRAppointmentMonthlyTemplate $monthlyTemplate = null;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate
     */
    protected null|FHIRAppointmentYearlyTemplate $yearlyTemplate = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    protected null|array $excludingDate = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $excludingRecurrenceId = [];

    /**
     * Validation map for fields in type Appointment.RecurrenceTemplate
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRAppointmentRecurrenceTemplate Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TIMEZONE])) {
            if ($data[self::FIELD_TIMEZONE] instanceof FHIRCodeableConcept) {
                $this->setTimezone($data[self::FIELD_TIMEZONE]);
            } else {
                $this->setTimezone(new FHIRCodeableConcept($data[self::FIELD_TIMEZONE]));
            }
        }
        if (isset($data[self::FIELD_RECURRENCE_TYPE])) {
            if ($data[self::FIELD_RECURRENCE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRecurrenceType($data[self::FIELD_RECURRENCE_TYPE]);
            } else {
                $this->setRecurrenceType(new FHIRCodeableConcept($data[self::FIELD_RECURRENCE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_LAST_OCCURRENCE_DATE]) || isset($data[self::FIELD_LAST_OCCURRENCE_DATE_EXT])) {
            $value = $data[self::FIELD_LAST_OCCURRENCE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_OCCURRENCE_DATE_EXT]) && is_array($data[self::FIELD_LAST_OCCURRENCE_DATE_EXT])) ? $data[self::FIELD_LAST_OCCURRENCE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLastOccurrenceDate($value);
                } else if (is_array($value)) {
                    $this->setLastOccurrenceDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLastOccurrenceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastOccurrenceDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_COUNT]) || isset($data[self::FIELD_OCCURRENCE_COUNT_EXT])) {
            $value = $data[self::FIELD_OCCURRENCE_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_COUNT_EXT]) && is_array($data[self::FIELD_OCCURRENCE_COUNT_EXT])) ? $data[self::FIELD_OCCURRENCE_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setOccurrenceCount($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceCount(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceCount(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceCount(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_DATE]) || isset($data[self::FIELD_OCCURRENCE_DATE_EXT])) {
            $value = $data[self::FIELD_OCCURRENCE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_EXT])) ? $data[self::FIELD_OCCURRENCE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->addOccurrenceDate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDate) {
                            $this->addOccurrenceDate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addOccurrenceDate(new FHIRDate(array_merge($v, $iext)));
                            } else {
                                $this->addOccurrenceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addOccurrenceDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->addOccurrenceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addOccurrenceDate(new FHIRDate($iext));
                }
            }
        }
        if (isset($data[self::FIELD_WEEKLY_TEMPLATE])) {
            if ($data[self::FIELD_WEEKLY_TEMPLATE] instanceof FHIRAppointmentWeeklyTemplate) {
                $this->setWeeklyTemplate($data[self::FIELD_WEEKLY_TEMPLATE]);
            } else {
                $this->setWeeklyTemplate(new FHIRAppointmentWeeklyTemplate($data[self::FIELD_WEEKLY_TEMPLATE]));
            }
        }
        if (isset($data[self::FIELD_MONTHLY_TEMPLATE])) {
            if ($data[self::FIELD_MONTHLY_TEMPLATE] instanceof FHIRAppointmentMonthlyTemplate) {
                $this->setMonthlyTemplate($data[self::FIELD_MONTHLY_TEMPLATE]);
            } else {
                $this->setMonthlyTemplate(new FHIRAppointmentMonthlyTemplate($data[self::FIELD_MONTHLY_TEMPLATE]));
            }
        }
        if (isset($data[self::FIELD_YEARLY_TEMPLATE])) {
            if ($data[self::FIELD_YEARLY_TEMPLATE] instanceof FHIRAppointmentYearlyTemplate) {
                $this->setYearlyTemplate($data[self::FIELD_YEARLY_TEMPLATE]);
            } else {
                $this->setYearlyTemplate(new FHIRAppointmentYearlyTemplate($data[self::FIELD_YEARLY_TEMPLATE]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDING_DATE]) || isset($data[self::FIELD_EXCLUDING_DATE_EXT])) {
            $value = $data[self::FIELD_EXCLUDING_DATE] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDING_DATE_EXT]) && is_array($data[self::FIELD_EXCLUDING_DATE_EXT])) ? $data[self::FIELD_EXCLUDING_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->addExcludingDate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDate) {
                            $this->addExcludingDate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addExcludingDate(new FHIRDate(array_merge($v, $iext)));
                            } else {
                                $this->addExcludingDate(new FHIRDate([FHIRDate::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addExcludingDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->addExcludingDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExcludingDate(new FHIRDate($iext));
                }
            }
        }
        if (isset($data[self::FIELD_EXCLUDING_RECURRENCE_ID]) || isset($data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT])) {
            $value = $data[self::FIELD_EXCLUDING_RECURRENCE_ID] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT]) && is_array($data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT])) ? $data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addExcludingRecurrenceId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addExcludingRecurrenceId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addExcludingRecurrenceId(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addExcludingRecurrenceId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addExcludingRecurrenceId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addExcludingRecurrenceId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExcludingRecurrenceId(new FHIRPositiveInt($iext));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTimezone(): null|FHIRCodeableConcept
    {
        return $this->timezone;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $timezone
     * @return static
     */
    public function setTimezone(null|FHIRCodeableConcept $timezone = null): self
    {
        if (null === $timezone) {
            $timezone = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->timezone, $timezone);
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRecurrenceType(): null|FHIRCodeableConcept
    {
        return $this->recurrenceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $recurrenceType
     * @return static
     */
    public function setRecurrenceType(null|FHIRCodeableConcept $recurrenceType = null): self
    {
        if (null === $recurrenceType) {
            $recurrenceType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->recurrenceType, $recurrenceType);
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLastOccurrenceDate(): null|FHIRDate
    {
        return $this->lastOccurrenceDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $lastOccurrenceDate
     * @return static
     */
    public function setLastOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate = null): self
    {
        if (null !== $lastOccurrenceDate && !($lastOccurrenceDate instanceof FHIRDate)) {
            $lastOccurrenceDate = new FHIRDate($lastOccurrenceDate);
        }
        $this->_trackValueSet($this->lastOccurrenceDate, $lastOccurrenceDate);
        $this->lastOccurrenceDate = $lastOccurrenceDate;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getOccurrenceCount(): null|FHIRPositiveInt
    {
        return $this->occurrenceCount;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $occurrenceCount
     * @return static
     */
    public function setOccurrenceCount(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount = null): self
    {
        if (null !== $occurrenceCount && !($occurrenceCount instanceof FHIRPositiveInt)) {
            $occurrenceCount = new FHIRPositiveInt($occurrenceCount);
        }
        $this->_trackValueSet($this->occurrenceCount, $occurrenceCount);
        $this->occurrenceCount = $occurrenceCount;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    public function getOccurrenceDate(): null|array
    {
        return $this->occurrenceDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $occurrenceDate
     * @return static
     */
    public function addOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $occurrenceDate = null): self
    {
        if (null !== $occurrenceDate && !($occurrenceDate instanceof FHIRDate)) {
            $occurrenceDate = new FHIRDate($occurrenceDate);
        }
        $this->_trackValueAdded();
        $this->occurrenceDate[] = $occurrenceDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate[] $occurrenceDate
     * @return static
     */
    public function setOccurrenceDate(array $occurrenceDate = []): self
    {
        if ([] !== $this->occurrenceDate) {
            $this->_trackValuesRemoved(count($this->occurrenceDate));
            $this->occurrenceDate = [];
        }
        if ([] === $occurrenceDate) {
            return $this;
        }
        foreach($occurrenceDate as $v) {
            if ($v instanceof FHIRDate) {
                $this->addOccurrenceDate($v);
            } else {
                $this->addOccurrenceDate(new FHIRDate($v));
            }
        }
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     */
    public function getWeeklyTemplate(): null|FHIRAppointmentWeeklyTemplate
    {
        return $this->weeklyTemplate;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $weeklyTemplate
     * @return static
     */
    public function setWeeklyTemplate(null|FHIRAppointmentWeeklyTemplate $weeklyTemplate = null): self
    {
        if (null === $weeklyTemplate) {
            $weeklyTemplate = new FHIRAppointmentWeeklyTemplate();
        }
        $this->_trackValueSet($this->weeklyTemplate, $weeklyTemplate);
        $this->weeklyTemplate = $weeklyTemplate;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     */
    public function getMonthlyTemplate(): null|FHIRAppointmentMonthlyTemplate
    {
        return $this->monthlyTemplate;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $monthlyTemplate
     * @return static
     */
    public function setMonthlyTemplate(null|FHIRAppointmentMonthlyTemplate $monthlyTemplate = null): self
    {
        if (null === $monthlyTemplate) {
            $monthlyTemplate = new FHIRAppointmentMonthlyTemplate();
        }
        $this->_trackValueSet($this->monthlyTemplate, $monthlyTemplate);
        $this->monthlyTemplate = $monthlyTemplate;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate
     */
    public function getYearlyTemplate(): null|FHIRAppointmentYearlyTemplate
    {
        return $this->yearlyTemplate;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate $yearlyTemplate
     * @return static
     */
    public function setYearlyTemplate(null|FHIRAppointmentYearlyTemplate $yearlyTemplate = null): self
    {
        if (null === $yearlyTemplate) {
            $yearlyTemplate = new FHIRAppointmentYearlyTemplate();
        }
        $this->_trackValueSet($this->yearlyTemplate, $yearlyTemplate);
        $this->yearlyTemplate = $yearlyTemplate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    public function getExcludingDate(): null|array
    {
        return $this->excludingDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $excludingDate
     * @return static
     */
    public function addExcludingDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $excludingDate = null): self
    {
        if (null !== $excludingDate && !($excludingDate instanceof FHIRDate)) {
            $excludingDate = new FHIRDate($excludingDate);
        }
        $this->_trackValueAdded();
        $this->excludingDate[] = $excludingDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate[] $excludingDate
     * @return static
     */
    public function setExcludingDate(array $excludingDate = []): self
    {
        if ([] !== $this->excludingDate) {
            $this->_trackValuesRemoved(count($this->excludingDate));
            $this->excludingDate = [];
        }
        if ([] === $excludingDate) {
            return $this;
        }
        foreach($excludingDate as $v) {
            if ($v instanceof FHIRDate) {
                $this->addExcludingDate($v);
            } else {
                $this->addExcludingDate(new FHIRDate($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getExcludingRecurrenceId(): null|array
    {
        return $this->excludingRecurrenceId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $excludingRecurrenceId
     * @return static
     */
    public function addExcludingRecurrenceId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $excludingRecurrenceId = null): self
    {
        if (null !== $excludingRecurrenceId && !($excludingRecurrenceId instanceof FHIRPositiveInt)) {
            $excludingRecurrenceId = new FHIRPositiveInt($excludingRecurrenceId);
        }
        $this->_trackValueAdded();
        $this->excludingRecurrenceId[] = $excludingRecurrenceId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $excludingRecurrenceId
     * @return static
     */
    public function setExcludingRecurrenceId(array $excludingRecurrenceId = []): self
    {
        if ([] !== $this->excludingRecurrenceId) {
            $this->_trackValuesRemoved(count($this->excludingRecurrenceId));
            $this->excludingRecurrenceId = [];
        }
        if ([] === $excludingRecurrenceId) {
            return $this;
        }
        foreach($excludingRecurrenceId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addExcludingRecurrenceId($v);
            } else {
                $this->addExcludingRecurrenceId(new FHIRPositiveInt($v));
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
        if (null !== ($v = $this->getTimezone())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMEZONE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecurrenceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECURRENCE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastOccurrenceDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_OCCURRENCE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_COUNT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOccurrenceDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OCCURRENCE_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getWeeklyTemplate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WEEKLY_TEMPLATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMonthlyTemplate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONTHLY_TEMPLATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getYearlyTemplate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_YEARLY_TEMPLATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExcludingDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDING_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getExcludingRecurrenceId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDING_RECURRENCE_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMEZONE])) {
            $v = $this->getTimezone();
            foreach($validationRules[self::FIELD_TIMEZONE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_TIMEZONE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMEZONE])) {
                        $errs[self::FIELD_TIMEZONE] = [];
                    }
                    $errs[self::FIELD_TIMEZONE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECURRENCE_TYPE])) {
            $v = $this->getRecurrenceType();
            foreach($validationRules[self::FIELD_RECURRENCE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_RECURRENCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECURRENCE_TYPE])) {
                        $errs[self::FIELD_RECURRENCE_TYPE] = [];
                    }
                    $errs[self::FIELD_RECURRENCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_OCCURRENCE_DATE])) {
            $v = $this->getLastOccurrenceDate();
            foreach($validationRules[self::FIELD_LAST_OCCURRENCE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_LAST_OCCURRENCE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_OCCURRENCE_DATE])) {
                        $errs[self::FIELD_LAST_OCCURRENCE_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_OCCURRENCE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_COUNT])) {
            $v = $this->getOccurrenceCount();
            foreach($validationRules[self::FIELD_OCCURRENCE_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_OCCURRENCE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_COUNT])) {
                        $errs[self::FIELD_OCCURRENCE_COUNT] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE])) {
            $v = $this->getOccurrenceDate();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_OCCURRENCE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE])) {
                        $errs[self::FIELD_OCCURRENCE_DATE] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEEKLY_TEMPLATE])) {
            $v = $this->getWeeklyTemplate();
            foreach($validationRules[self::FIELD_WEEKLY_TEMPLATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_WEEKLY_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEEKLY_TEMPLATE])) {
                        $errs[self::FIELD_WEEKLY_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_WEEKLY_TEMPLATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONTHLY_TEMPLATE])) {
            $v = $this->getMonthlyTemplate();
            foreach($validationRules[self::FIELD_MONTHLY_TEMPLATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_MONTHLY_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONTHLY_TEMPLATE])) {
                        $errs[self::FIELD_MONTHLY_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_MONTHLY_TEMPLATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_YEARLY_TEMPLATE])) {
            $v = $this->getYearlyTemplate();
            foreach($validationRules[self::FIELD_YEARLY_TEMPLATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_YEARLY_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_YEARLY_TEMPLATE])) {
                        $errs[self::FIELD_YEARLY_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_YEARLY_TEMPLATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDING_DATE])) {
            $v = $this->getExcludingDate();
            foreach($validationRules[self::FIELD_EXCLUDING_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_EXCLUDING_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDING_DATE])) {
                        $errs[self::FIELD_EXCLUDING_DATE] = [];
                    }
                    $errs[self::FIELD_EXCLUDING_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
            $v = $this->getExcludingRecurrenceId();
            foreach($validationRules[self::FIELD_EXCLUDING_RECURRENCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_EXCLUDING_RECURRENCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
                        $errs[self::FIELD_EXCLUDING_RECURRENCE_ID] = [];
                    }
                    $errs[self::FIELD_EXCLUDING_RECURRENCE_ID][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
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
        } else if (!($type instanceof FHIRAppointmentRecurrenceTemplate)) {
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
            if (self::FIELD_TIMEZONE === $n->nodeName) {
                $type->setTimezone(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_RECURRENCE_TYPE === $n->nodeName) {
                $type->setRecurrenceType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_OCCURRENCE_DATE === $n->nodeName) {
                $type->setLastOccurrenceDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_COUNT === $n->nodeName) {
                $type->setOccurrenceCount(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_DATE === $n->nodeName) {
                $type->addOccurrenceDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_WEEKLY_TEMPLATE === $n->nodeName) {
                $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::xmlUnserialize($n));
            } elseif (self::FIELD_MONTHLY_TEMPLATE === $n->nodeName) {
                $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::xmlUnserialize($n));
            } elseif (self::FIELD_YEARLY_TEMPLATE === $n->nodeName) {
                $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::xmlUnserialize($n));
            } elseif (self::FIELD_EXCLUDING_DATE === $n->nodeName) {
                $type->addExcludingDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_EXCLUDING_RECURRENCE_ID === $n->nodeName) {
                $type->addExcludingRecurrenceId(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_OCCURRENCE_DATE);
        if (null !== $n) {
            $pt = $type->getLastOccurrenceDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastOccurrenceDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_COUNT);
        if (null !== $n) {
            $pt = $type->getOccurrenceCount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceCount($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_DATE);
        if (null !== $n) {
            $type->addOccurrenceDate($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXCLUDING_DATE);
        if (null !== $n) {
            $type->addExcludingDate($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXCLUDING_RECURRENCE_ID);
        if (null !== $n) {
            $type->addExcludingRecurrenceId($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('AppointmentRecurrenceTemplate'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getTimezone())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TIMEZONE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRecurrenceType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RECURRENCE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastOccurrenceDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_OCCURRENCE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceCount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_COUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getOccurrenceDate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_DATE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getWeeklyTemplate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WEEKLY_TEMPLATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMonthlyTemplate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MONTHLY_TEMPLATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getYearlyTemplate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_YEARLY_TEMPLATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getExcludingDate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EXCLUDING_DATE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getExcludingRecurrenceId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EXCLUDING_RECURRENCE_ID);
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
        if (null !== ($v = $this->getTimezone())) {
            $out->{self::FIELD_TIMEZONE} = $v;
        }
        if (null !== ($v = $this->getRecurrenceType())) {
            $out->{self::FIELD_RECURRENCE_TYPE} = $v;
        }
        if (null !== ($v = $this->getLastOccurrenceDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_OCCURRENCE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_OCCURRENCE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrenceCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_COUNT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getOccurrenceDate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDate::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_OCCURRENCE_DATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_DATE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getWeeklyTemplate())) {
            $out->{self::FIELD_WEEKLY_TEMPLATE} = $v;
        }
        if (null !== ($v = $this->getMonthlyTemplate())) {
            $out->{self::FIELD_MONTHLY_TEMPLATE} = $v;
        }
        if (null !== ($v = $this->getYearlyTemplate())) {
            $out->{self::FIELD_YEARLY_TEMPLATE} = $v;
        }
        if ([] !== ($vs = $this->getExcludingDate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDate::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_EXCLUDING_DATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDING_DATE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getExcludingRecurrenceId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_EXCLUDING_RECURRENCE_ID} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDING_RECURRENCE_ID_EXT} = $exts;
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