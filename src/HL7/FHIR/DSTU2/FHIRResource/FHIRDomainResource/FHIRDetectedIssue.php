<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\DSTU2\FHIRCodePrimitive;
use HL7\FHIR\DSTU2\FHIRDateTimePrimitive;
use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCode;
use HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime;
use HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRId;
use HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU2\FHIRElement\FHIRMeta;
use HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative;
use HL7\FHIR\DSTU2\FHIRElement\FHIRReference;
use HL7\FHIR\DSTU2\FHIRElement\FHIRString;
use HL7\FHIR\DSTU2\FHIRElement\FHIRUri;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;
use HL7\FHIR\DSTU2\FHIRStringPrimitive;
use HL7\FHIR\DSTU2\FHIRUriPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRContainedTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeMap;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * Indicates an actual or potential clinical issue with or between one or more
 * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
 * Ineffective treatment frequency, Procedure-condition conflict, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDetectedIssue
 * @package \HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDetectedIssue extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE;

    const FIELD_PATIENT = 'patient';
    const FIELD_CATEGORY = 'category';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_IMPLICATED = 'implicated';
    const FIELD_DETAIL = 'detail';
    const FIELD_DETAIL_EXT = '_detail';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_AUTHOR = 'author';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_MITIGATION = 'mitigation';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $category = null;
    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity
     */
    protected null|FHIRDetectedIssueSeverity $severity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $implicated = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $detail = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or date-time when the detected issue was initially identified.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $author = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $reference = null;
    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to to reduce or
     * eliminate the likelihood of the risk identified by the detected issue from
     * manifesting. Can also reflect an observation of known mitigating factors that
     * may reduce/eliminate the need for any action.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    protected null|array $mitigation = [];

    /**
     * Validation map for fields in type DetectedIssue
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDetectedIssue Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_SEVERITY]) || isset($data[self::FIELD_SEVERITY_EXT])) {
            $value = $data[self::FIELD_SEVERITY] ?? null;
            $ext = (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT])) ? $data[self::FIELD_SEVERITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDetectedIssueSeverity) {
                    $this->setSeverity($value);
                } else if (is_array($value)) {
                    $this->setSeverity(new FHIRDetectedIssueSeverity(array_merge($ext, $value)));
                } else {
                    $this->setSeverity(new FHIRDetectedIssueSeverity([FHIRDetectedIssueSeverity::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeverity(new FHIRDetectedIssueSeverity($ext));
            }
        }
        if (isset($data[self::FIELD_IMPLICATED])) {
            if (is_array($data[self::FIELD_IMPLICATED])) {
                foreach($data[self::FIELD_IMPLICATED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addImplicated($v);
                    } else {
                        $this->addImplicated(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_IMPLICATED] instanceof FHIRReference) {
                $this->addImplicated($data[self::FIELD_IMPLICATED]);
            } else {
                $this->addImplicated(new FHIRReference($data[self::FIELD_IMPLICATED]));
            }
        }
        if (isset($data[self::FIELD_DETAIL]) || isset($data[self::FIELD_DETAIL_EXT])) {
            $value = $data[self::FIELD_DETAIL] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_EXT]) && is_array($data[self::FIELD_DETAIL_EXT])) ? $data[self::FIELD_DETAIL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetail($value);
                } else if (is_array($value)) {
                    $this->setDetail(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetail(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetail(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE]) || isset($data[self::FIELD_REFERENCE_EXT])) {
            $value = $data[self::FIELD_REFERENCE] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT])) ? $data[self::FIELD_REFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setReference($value);
                } else if (is_array($value)) {
                    $this->setReference(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReference(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_MITIGATION])) {
            if (is_array($data[self::FIELD_MITIGATION])) {
                foreach($data[self::FIELD_MITIGATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDetectedIssueMitigation) {
                        $this->addMitigation($v);
                    } else {
                        $this->addMitigation(new FHIRDetectedIssueMitigation($v));
                    }
                }
            } elseif ($data[self::FIELD_MITIGATION] instanceof FHIRDetectedIssueMitigation) {
                $this->addMitigation($data[self::FIELD_MITIGATION]);
            } else {
                $this->addMitigation(new FHIRDetectedIssueMitigation($data[self::FIELD_MITIGATION]));
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
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->category, $category);
        $this->category = $category;
        return $this;
    }

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity
     */
    public function getSeverity(): null|FHIRDetectedIssueSeverity
    {
        return $this->severity;
    }

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity $severity
     * @return static
     */
    public function setSeverity(null|FHIRDetectedIssueSeverity $severity = null): self
    {
        if (null === $severity) {
            $severity = new FHIRDetectedIssueSeverity();
        }
        $this->_trackValueSet($this->severity, $severity);
        $this->severity = $severity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getImplicated(): null|array
    {
        return $this->implicated;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $implicated
     * @return static
     */
    public function addImplicated(null|FHIRReference $implicated = null): self
    {
        if (null === $implicated) {
            $implicated = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->implicated[] = $implicated;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRReference[] $implicated
     * @return static
     */
    public function setImplicated(array $implicated = []): self
    {
        if ([] !== $this->implicated) {
            $this->_trackValuesRemoved(count($this->implicated));
            $this->implicated = [];
        }
        if ([] === $implicated) {
            return $this;
        }
        foreach($implicated as $v) {
            if ($v instanceof FHIRReference) {
                $this->addImplicated($v);
            } else {
                $this->addImplicated(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDetail(): null|FHIRString
    {
        return $this->detail;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRStringPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRString $detail
     * @return static
     */
    public function setDetail(null|string|FHIRStringPrimitive|FHIRString $detail = null): self
    {
        if (null !== $detail && !($detail instanceof FHIRString)) {
            $detail = new FHIRString($detail);
        }
        $this->_trackValueSet($this->detail, $detail);
        $this->detail = $detail;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or date-time when the detected issue was initially identified.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or date-time when the detected issue was initially identified.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU2\FHIRDateTimePrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAuthor(): null|FHIRReference
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $author
     * @return static
     */
    public function setAuthor(null|FHIRReference $author = null): self
    {
        if (null === $author) {
            $author = new FHIRReference();
        }
        $this->_trackValueSet($this->author, $author);
        $this->author = $author;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getReference(): null|FHIRUri
    {
        return $this->reference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRUriPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $reference
     * @return static
     */
    public function setReference(null|string|FHIRUriPrimitive|FHIRUri $reference = null): self
    {
        if (null !== $reference && !($reference instanceof FHIRUri)) {
            $reference = new FHIRUri($reference);
        }
        $this->_trackValueSet($this->reference, $reference);
        $this->reference = $reference;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to to reduce or
     * eliminate the likelihood of the risk identified by the detected issue from
     * manifesting. Can also reflect an observation of known mitigating factors that
     * may reduce/eliminate the need for any action.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    public function getMitigation(): null|array
    {
        return $this->mitigation;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to to reduce or
     * eliminate the likelihood of the risk identified by the detected issue from
     * manifesting. Can also reflect an observation of known mitigating factors that
     * may reduce/eliminate the need for any action.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation $mitigation
     * @return static
     */
    public function addMitigation(null|FHIRDetectedIssueMitigation $mitigation = null): self
    {
        if (null === $mitigation) {
            $mitigation = new FHIRDetectedIssueMitigation();
        }
        $this->_trackValueAdded();
        $this->mitigation[] = $mitigation;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to to reduce or
     * eliminate the likelihood of the risk identified by the detected issue from
     * manifesting. Can also reflect an observation of known mitigating factors that
     * may reduce/eliminate the need for any action.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[] $mitigation
     * @return static
     */
    public function setMitigation(array $mitigation = []): self
    {
        if ([] !== $this->mitigation) {
            $this->_trackValuesRemoved(count($this->mitigation));
            $this->mitigation = [];
        }
        if ([] === $mitigation) {
            return $this;
        }
        foreach($mitigation as $v) {
            if ($v instanceof FHIRDetectedIssueMitigation) {
                $this->addMitigation($v);
            } else {
                $this->addMitigation(new FHIRDetectedIssueMitigation($v));
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getImplicated())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMPLICATED, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMitigation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MITIGATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICATED])) {
            $v = $this->getImplicated();
            foreach($validationRules[self::FIELD_IMPLICATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_IMPLICATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICATED])) {
                        $errs[self::FIELD_IMPLICATED] = [];
                    }
                    $errs[self::FIELD_IMPLICATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MITIGATION])) {
            $v = $this->getMitigation();
            foreach($validationRules[self::FIELD_MITIGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_MITIGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MITIGATION])) {
                        $errs[self::FIELD_MITIGATION] = [];
                    }
                    $errs[self::FIELD_MITIGATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
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
        } else if (!($type instanceof FHIRDetectedIssue)) {
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
            if (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CATEGORY === $n->nodeName) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SEVERITY === $n->nodeName) {
                $type->setSeverity(FHIRDetectedIssueSeverity::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICATED === $n->nodeName) {
                $type->addImplicated(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL === $n->nodeName) {
                $type->setDetail(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHOR === $n->nodeName) {
                $type->setAuthor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE === $n->nodeName) {
                $type->setReference(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_MITIGATION === $n->nodeName) {
                $type->addMitigation(FHIRDetectedIssueMitigation::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DETAIL);
        if (null !== $n) {
            $pt = $type->getDetail();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDetail($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATE);
        if (null !== $n) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REFERENCE);
        if (null !== $n) {
            $pt = $type->getReference();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReference($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DetectedIssue'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeverity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEVERITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getImplicated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IMPLICATED);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDetail())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAuthor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getMitigation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MITIGATION);
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
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEVERITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDetectedIssueSeverity::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEVERITY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getImplicated())) {
            $out->{self::FIELD_IMPLICATED} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IMPLICATED}[] = $v;
            }
        }
        if (null !== ($v = $this->getDetail())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getReference())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REFERENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getMitigation())) {
            $out->{self::FIELD_MITIGATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MITIGATION}[] = $v;
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