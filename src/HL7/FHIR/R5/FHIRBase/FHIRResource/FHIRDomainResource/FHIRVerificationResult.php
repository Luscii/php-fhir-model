<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVerificationResultStatus;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRVerificationResult
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRVerificationResult extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT;

    const FIELD_TARGET = 'target';
    const FIELD_TARGET_LOCATION = 'targetLocation';
    const FIELD_TARGET_LOCATION_EXT = '_targetLocation';
    const FIELD_NEED = 'need';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_VALIDATION_TYPE = 'validationType';
    const FIELD_VALIDATION_PROCESS = 'validationProcess';
    const FIELD_FREQUENCY = 'frequency';
    const FIELD_LAST_PERFORMED = 'lastPerformed';
    const FIELD_LAST_PERFORMED_EXT = '_lastPerformed';
    const FIELD_NEXT_SCHEDULED = 'nextScheduled';
    const FIELD_NEXT_SCHEDULED_EXT = '_nextScheduled';
    const FIELD_FAILURE_ACTION = 'failureAction';
    const FIELD_PRIMARY_SOURCE = 'primarySource';
    const FIELD_ATTESTATION = 'attestation';
    const FIELD_VALIDATOR = 'validator';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $target = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $targetLocation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $need = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVerificationResultStatus
     */
    protected null|FHIRVerificationResultStatus $status = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $statusDate = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $validationType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $validationProcess = [];
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    protected null|FHIRTiming $frequency = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $lastPerformed = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $nextScheduled = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $failureAction = null;
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[]
     */
    protected null|array $primarySource = [];
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    protected null|FHIRVerificationResultAttestation $attestation = null;
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[]
     */
    protected null|array $validator = [];

    /**
     * Validation map for fields in type VerificationResult
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRVerificationResult Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TARGET])) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRReference($data[self::FIELD_TARGET]));
            }
        }
        if (isset($data[self::FIELD_TARGET_LOCATION]) || isset($data[self::FIELD_TARGET_LOCATION_EXT])) {
            $value = $data[self::FIELD_TARGET_LOCATION] ?? null;
            $ext = (isset($data[self::FIELD_TARGET_LOCATION_EXT]) && is_array($data[self::FIELD_TARGET_LOCATION_EXT])) ? $data[self::FIELD_TARGET_LOCATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addTargetLocation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addTargetLocation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addTargetLocation(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addTargetLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addTargetLocation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addTargetLocation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addTargetLocation(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NEED])) {
            if ($data[self::FIELD_NEED] instanceof FHIRCodeableConcept) {
                $this->setNeed($data[self::FIELD_NEED]);
            } else {
                $this->setNeed(new FHIRCodeableConcept($data[self::FIELD_NEED]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRVerificationResultStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRVerificationResultStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRVerificationResultStatus([FHIRVerificationResultStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRVerificationResultStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_DATE]) || isset($data[self::FIELD_STATUS_DATE_EXT])) {
            $value = $data[self::FIELD_STATUS_DATE] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_DATE_EXT]) && is_array($data[self::FIELD_STATUS_DATE_EXT])) ? $data[self::FIELD_STATUS_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setStatusDate($value);
                } else if (is_array($value)) {
                    $this->setStatusDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setStatusDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatusDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALIDATION_TYPE])) {
            if ($data[self::FIELD_VALIDATION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setValidationType($data[self::FIELD_VALIDATION_TYPE]);
            } else {
                $this->setValidationType(new FHIRCodeableConcept($data[self::FIELD_VALIDATION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALIDATION_PROCESS])) {
            if (is_array($data[self::FIELD_VALIDATION_PROCESS])) {
                foreach($data[self::FIELD_VALIDATION_PROCESS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addValidationProcess($v);
                    } else {
                        $this->addValidationProcess(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_VALIDATION_PROCESS] instanceof FHIRCodeableConcept) {
                $this->addValidationProcess($data[self::FIELD_VALIDATION_PROCESS]);
            } else {
                $this->addValidationProcess(new FHIRCodeableConcept($data[self::FIELD_VALIDATION_PROCESS]));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY])) {
            if ($data[self::FIELD_FREQUENCY] instanceof FHIRTiming) {
                $this->setFrequency($data[self::FIELD_FREQUENCY]);
            } else {
                $this->setFrequency(new FHIRTiming($data[self::FIELD_FREQUENCY]));
            }
        }
        if (isset($data[self::FIELD_LAST_PERFORMED]) || isset($data[self::FIELD_LAST_PERFORMED_EXT])) {
            $value = $data[self::FIELD_LAST_PERFORMED] ?? null;
            $ext = (isset($data[self::FIELD_LAST_PERFORMED_EXT]) && is_array($data[self::FIELD_LAST_PERFORMED_EXT])) ? $data[self::FIELD_LAST_PERFORMED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastPerformed($value);
                } else if (is_array($value)) {
                    $this->setLastPerformed(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastPerformed(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastPerformed(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_NEXT_SCHEDULED]) || isset($data[self::FIELD_NEXT_SCHEDULED_EXT])) {
            $value = $data[self::FIELD_NEXT_SCHEDULED] ?? null;
            $ext = (isset($data[self::FIELD_NEXT_SCHEDULED_EXT]) && is_array($data[self::FIELD_NEXT_SCHEDULED_EXT])) ? $data[self::FIELD_NEXT_SCHEDULED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setNextScheduled($value);
                } else if (is_array($value)) {
                    $this->setNextScheduled(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setNextScheduled(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNextScheduled(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_FAILURE_ACTION])) {
            if ($data[self::FIELD_FAILURE_ACTION] instanceof FHIRCodeableConcept) {
                $this->setFailureAction($data[self::FIELD_FAILURE_ACTION]);
            } else {
                $this->setFailureAction(new FHIRCodeableConcept($data[self::FIELD_FAILURE_ACTION]));
            }
        }
        if (isset($data[self::FIELD_PRIMARY_SOURCE])) {
            if (is_array($data[self::FIELD_PRIMARY_SOURCE])) {
                foreach($data[self::FIELD_PRIMARY_SOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRVerificationResultPrimarySource) {
                        $this->addPrimarySource($v);
                    } else {
                        $this->addPrimarySource(new FHIRVerificationResultPrimarySource($v));
                    }
                }
            } elseif ($data[self::FIELD_PRIMARY_SOURCE] instanceof FHIRVerificationResultPrimarySource) {
                $this->addPrimarySource($data[self::FIELD_PRIMARY_SOURCE]);
            } else {
                $this->addPrimarySource(new FHIRVerificationResultPrimarySource($data[self::FIELD_PRIMARY_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_ATTESTATION])) {
            if ($data[self::FIELD_ATTESTATION] instanceof FHIRVerificationResultAttestation) {
                $this->setAttestation($data[self::FIELD_ATTESTATION]);
            } else {
                $this->setAttestation(new FHIRVerificationResultAttestation($data[self::FIELD_ATTESTATION]));
            }
        }
        if (isset($data[self::FIELD_VALIDATOR])) {
            if (is_array($data[self::FIELD_VALIDATOR])) {
                foreach($data[self::FIELD_VALIDATOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRVerificationResultValidator) {
                        $this->addValidator($v);
                    } else {
                        $this->addValidator(new FHIRVerificationResultValidator($v));
                    }
                }
            } elseif ($data[self::FIELD_VALIDATOR] instanceof FHIRVerificationResultValidator) {
                $this->addValidator($data[self::FIELD_VALIDATOR]);
            } else {
                $this->addValidator(new FHIRVerificationResultValidator($data[self::FIELD_VALIDATOR]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getTarget(): null|array
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $target
     * @return static
     */
    public function addTarget(null|FHIRReference $target = null): self
    {
        if (null === $target) {
            $target = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $target
     * @return static
     */
    public function setTarget(array $target = []): self
    {
        if ([] !== $this->target) {
            $this->_trackValuesRemoved(count($this->target));
            $this->target = [];
        }
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            if ($v instanceof FHIRReference) {
                $this->addTarget($v);
            } else {
                $this->addTarget(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getTargetLocation(): null|array
    {
        return $this->targetLocation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $targetLocation
     * @return static
     */
    public function addTargetLocation(null|string|FHIRStringPrimitive|FHIRString $targetLocation = null): self
    {
        if (null !== $targetLocation && !($targetLocation instanceof FHIRString)) {
            $targetLocation = new FHIRString($targetLocation);
        }
        $this->_trackValueAdded();
        $this->targetLocation[] = $targetLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[] $targetLocation
     * @return static
     */
    public function setTargetLocation(array $targetLocation = []): self
    {
        if ([] !== $this->targetLocation) {
            $this->_trackValuesRemoved(count($this->targetLocation));
            $this->targetLocation = [];
        }
        if ([] === $targetLocation) {
            return $this;
        }
        foreach($targetLocation as $v) {
            if ($v instanceof FHIRString) {
                $this->addTargetLocation($v);
            } else {
                $this->addTargetLocation(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getNeed(): null|FHIRCodeableConcept
    {
        return $this->need;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $need
     * @return static
     */
    public function setNeed(null|FHIRCodeableConcept $need = null): self
    {
        if (null === $need) {
            $need = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->need, $need);
        $this->need = $need;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVerificationResultStatus
     */
    public function getStatus(): null|FHIRVerificationResultStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVerificationResultStatus $status
     * @return static
     */
    public function setStatus(null|FHIRVerificationResultStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRVerificationResultStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getStatusDate(): null|FHIRDateTime
    {
        return $this->statusDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $statusDate
     * @return static
     */
    public function setStatusDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate = null): self
    {
        if (null !== $statusDate && !($statusDate instanceof FHIRDateTime)) {
            $statusDate = new FHIRDateTime($statusDate);
        }
        $this->_trackValueSet($this->statusDate, $statusDate);
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getValidationType(): null|FHIRCodeableConcept
    {
        return $this->validationType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $validationType
     * @return static
     */
    public function setValidationType(null|FHIRCodeableConcept $validationType = null): self
    {
        if (null === $validationType) {
            $validationType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->validationType, $validationType);
        $this->validationType = $validationType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getValidationProcess(): null|array
    {
        return $this->validationProcess;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $validationProcess
     * @return static
     */
    public function addValidationProcess(null|FHIRCodeableConcept $validationProcess = null): self
    {
        if (null === $validationProcess) {
            $validationProcess = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->validationProcess[] = $validationProcess;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $validationProcess
     * @return static
     */
    public function setValidationProcess(array $validationProcess = []): self
    {
        if ([] !== $this->validationProcess) {
            $this->_trackValuesRemoved(count($this->validationProcess));
            $this->validationProcess = [];
        }
        if ([] === $validationProcess) {
            return $this;
        }
        foreach($validationProcess as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addValidationProcess($v);
            } else {
                $this->addValidationProcess(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getFrequency(): null|FHIRTiming
    {
        return $this->frequency;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $frequency
     * @return static
     */
    public function setFrequency(null|FHIRTiming $frequency = null): self
    {
        if (null === $frequency) {
            $frequency = new FHIRTiming();
        }
        $this->_trackValueSet($this->frequency, $frequency);
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getLastPerformed(): null|FHIRDateTime
    {
        return $this->lastPerformed;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $lastPerformed
     * @return static
     */
    public function setLastPerformed(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastPerformed = null): self
    {
        if (null !== $lastPerformed && !($lastPerformed instanceof FHIRDateTime)) {
            $lastPerformed = new FHIRDateTime($lastPerformed);
        }
        $this->_trackValueSet($this->lastPerformed, $lastPerformed);
        $this->lastPerformed = $lastPerformed;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getNextScheduled(): null|FHIRDate
    {
        return $this->nextScheduled;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $nextScheduled
     * @return static
     */
    public function setNextScheduled(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $nextScheduled = null): self
    {
        if (null !== $nextScheduled && !($nextScheduled instanceof FHIRDate)) {
            $nextScheduled = new FHIRDate($nextScheduled);
        }
        $this->_trackValueSet($this->nextScheduled, $nextScheduled);
        $this->nextScheduled = $nextScheduled;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFailureAction(): null|FHIRCodeableConcept
    {
        return $this->failureAction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $failureAction
     * @return static
     */
    public function setFailureAction(null|FHIRCodeableConcept $failureAction = null): self
    {
        if (null === $failureAction) {
            $failureAction = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->failureAction, $failureAction);
        $this->failureAction = $failureAction;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[]
     */
    public function getPrimarySource(): null|array
    {
        return $this->primarySource;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $primarySource
     * @return static
     */
    public function addPrimarySource(null|FHIRVerificationResultPrimarySource $primarySource = null): self
    {
        if (null === $primarySource) {
            $primarySource = new FHIRVerificationResultPrimarySource();
        }
        $this->_trackValueAdded();
        $this->primarySource[] = $primarySource;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[] $primarySource
     * @return static
     */
    public function setPrimarySource(array $primarySource = []): self
    {
        if ([] !== $this->primarySource) {
            $this->_trackValuesRemoved(count($this->primarySource));
            $this->primarySource = [];
        }
        if ([] === $primarySource) {
            return $this;
        }
        foreach($primarySource as $v) {
            if ($v instanceof FHIRVerificationResultPrimarySource) {
                $this->addPrimarySource($v);
            } else {
                $this->addPrimarySource(new FHIRVerificationResultPrimarySource($v));
            }
        }
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    public function getAttestation(): null|FHIRVerificationResultAttestation
    {
        return $this->attestation;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $attestation
     * @return static
     */
    public function setAttestation(null|FHIRVerificationResultAttestation $attestation = null): self
    {
        if (null === $attestation) {
            $attestation = new FHIRVerificationResultAttestation();
        }
        $this->_trackValueSet($this->attestation, $attestation);
        $this->attestation = $attestation;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[]
     */
    public function getValidator(): null|array
    {
        return $this->validator;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator $validator
     * @return static
     */
    public function addValidator(null|FHIRVerificationResultValidator $validator = null): self
    {
        if (null === $validator) {
            $validator = new FHIRVerificationResultValidator();
        }
        $this->_trackValueAdded();
        $this->validator[] = $validator;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[] $validator
     * @return static
     */
    public function setValidator(array $validator = []): self
    {
        if ([] !== $this->validator) {
            $this->_trackValuesRemoved(count($this->validator));
            $this->validator = [];
        }
        if ([] === $validator) {
            return $this;
        }
        foreach($validator as $v) {
            if ($v instanceof FHIRVerificationResultValidator) {
                $this->addValidator($v);
            } else {
                $this->addValidator(new FHIRVerificationResultValidator($v));
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
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNeed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NEED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidationType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATION_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALIDATION_PROCESS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastPerformed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_PERFORMED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNextScheduled())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NEXT_SCHEDULED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFailureAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAILURE_ACTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRIMARY_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAttestation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ATTESTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValidator())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALIDATOR, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_LOCATION])) {
            $v = $this->getTargetLocation();
            foreach($validationRules[self::FIELD_TARGET_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_TARGET_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_LOCATION])) {
                        $errs[self::FIELD_TARGET_LOCATION] = [];
                    }
                    $errs[self::FIELD_TARGET_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEED])) {
            $v = $this->getNeed();
            foreach($validationRules[self::FIELD_NEED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_NEED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEED])) {
                        $errs[self::FIELD_NEED] = [];
                    }
                    $errs[self::FIELD_NEED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_TYPE])) {
            $v = $this->getValidationType();
            foreach($validationRules[self::FIELD_VALIDATION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_VALIDATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_TYPE])) {
                        $errs[self::FIELD_VALIDATION_TYPE] = [];
                    }
                    $errs[self::FIELD_VALIDATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_PROCESS])) {
            $v = $this->getValidationProcess();
            foreach($validationRules[self::FIELD_VALIDATION_PROCESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_VALIDATION_PROCESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_PROCESS])) {
                        $errs[self::FIELD_VALIDATION_PROCESS] = [];
                    }
                    $errs[self::FIELD_VALIDATION_PROCESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_PERFORMED])) {
            $v = $this->getLastPerformed();
            foreach($validationRules[self::FIELD_LAST_PERFORMED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_LAST_PERFORMED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_PERFORMED])) {
                        $errs[self::FIELD_LAST_PERFORMED] = [];
                    }
                    $errs[self::FIELD_LAST_PERFORMED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEXT_SCHEDULED])) {
            $v = $this->getNextScheduled();
            foreach($validationRules[self::FIELD_NEXT_SCHEDULED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_NEXT_SCHEDULED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEXT_SCHEDULED])) {
                        $errs[self::FIELD_NEXT_SCHEDULED] = [];
                    }
                    $errs[self::FIELD_NEXT_SCHEDULED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FAILURE_ACTION])) {
            $v = $this->getFailureAction();
            foreach($validationRules[self::FIELD_FAILURE_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_FAILURE_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAILURE_ACTION])) {
                        $errs[self::FIELD_FAILURE_ACTION] = [];
                    }
                    $errs[self::FIELD_FAILURE_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_SOURCE])) {
            $v = $this->getPrimarySource();
            foreach($validationRules[self::FIELD_PRIMARY_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_PRIMARY_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_SOURCE])) {
                        $errs[self::FIELD_PRIMARY_SOURCE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTESTATION])) {
            $v = $this->getAttestation();
            foreach($validationRules[self::FIELD_ATTESTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_ATTESTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTESTATION])) {
                        $errs[self::FIELD_ATTESTATION] = [];
                    }
                    $errs[self::FIELD_ATTESTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATOR])) {
            $v = $this->getValidator();
            foreach($validationRules[self::FIELD_VALIDATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_VALIDATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATOR])) {
                        $errs[self::FIELD_VALIDATOR] = [];
                    }
                    $errs[self::FIELD_VALIDATOR][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVerificationResult $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVerificationResult
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
        } else if (!($type instanceof FHIRVerificationResult)) {
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
            if (self::FIELD_TARGET === $n->nodeName) {
                $type->addTarget(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_LOCATION === $n->nodeName) {
                $type->addTargetLocation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_NEED === $n->nodeName) {
                $type->setNeed(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRVerificationResultStatus::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS_DATE === $n->nodeName) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_VALIDATION_TYPE === $n->nodeName) {
                $type->setValidationType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VALIDATION_PROCESS === $n->nodeName) {
                $type->addValidationProcess(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FREQUENCY === $n->nodeName) {
                $type->setFrequency(FHIRTiming::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_PERFORMED === $n->nodeName) {
                $type->setLastPerformed(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_NEXT_SCHEDULED === $n->nodeName) {
                $type->setNextScheduled(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_FAILURE_ACTION === $n->nodeName) {
                $type->setFailureAction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRIMARY_SOURCE === $n->nodeName) {
                $type->addPrimarySource(FHIRVerificationResultPrimarySource::xmlUnserialize($n));
            } elseif (self::FIELD_ATTESTATION === $n->nodeName) {
                $type->setAttestation(FHIRVerificationResultAttestation::xmlUnserialize($n));
            } elseif (self::FIELD_VALIDATOR === $n->nodeName) {
                $type->addValidator(FHIRVerificationResultValidator::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_TARGET_LOCATION);
        if (null !== $n) {
            $type->addTargetLocation($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STATUS_DATE);
        if (null !== $n) {
            $pt = $type->getStatusDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStatusDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_PERFORMED);
        if (null !== $n) {
            $pt = $type->getLastPerformed();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastPerformed($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NEXT_SCHEDULED);
        if (null !== $n) {
            $pt = $type->getNextScheduled();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNextScheduled($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('VerificationResult'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TARGET);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_LOCATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNeed())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NEED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatusDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValidationType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALIDATION_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VALIDATION_PROCESS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FREQUENCY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastPerformed())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_PERFORMED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNextScheduled())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NEXT_SCHEDULED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFailureAction())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FAILURE_ACTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRIMARY_SOURCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAttestation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ATTESTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getValidator())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VALIDATOR);
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
        if ([] !== ($vs = $this->getTarget())) {
            $out->{self::FIELD_TARGET} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TARGET}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
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
                $out->{self::FIELD_TARGET_LOCATION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TARGET_LOCATION_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getNeed())) {
            $out->{self::FIELD_NEED} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRVerificationResultStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValidationType())) {
            $out->{self::FIELD_VALIDATION_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            $out->{self::FIELD_VALIDATION_PROCESS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VALIDATION_PROCESS}[] = $v;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            $out->{self::FIELD_FREQUENCY} = $v;
        }
        if (null !== ($v = $this->getLastPerformed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_PERFORMED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_PERFORMED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNextScheduled())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NEXT_SCHEDULED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NEXT_SCHEDULED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFailureAction())) {
            $out->{self::FIELD_FAILURE_ACTION} = $v;
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            $out->{self::FIELD_PRIMARY_SOURCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRIMARY_SOURCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAttestation())) {
            $out->{self::FIELD_ATTESTATION} = $v;
        }
        if ([] !== ($vs = $this->getValidator())) {
            $out->{self::FIELD_VALIDATOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VALIDATOR}[] = $v;
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