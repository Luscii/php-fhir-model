<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use HL7\FHIR\DSTU1\FHIRCodePrimitive;
use HL7\FHIR\DSTU1\FHIRDateTimePrimitive;
use HL7\FHIR\DSTU1\FHIRElement\FHIRAttachment;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage;
use HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCode;
use HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime;
use HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticReportStatus;
use HL7\FHIR\DSTU1\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier;
use HL7\FHIR\DSTU1\FHIRElement\FHIRNarrative;
use HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod;
use HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference;
use HL7\FHIR\DSTU1\FHIRElement\FHIRString;
use HL7\FHIR\DSTU1\FHIRIdPrimitive;
use HL7\FHIR\DSTU1\FHIRStringPrimitive;
use HL7\FHIR\DSTU1\PHPFHIRConfig;
use HL7\FHIR\DSTU1\PHPFHIRConstants;
use HL7\FHIR\DSTU1\PHPFHIRContainedTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU1\PHPFHIRTypeMap;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface;

/**
 * The findings and interpretation of diagnostic tests performed on patients,
 * groups of patients, devices, and locations, and/or specimens derived from these.
 * The report includes clinical context such as requesting and provider
 * information, and some mix of atomic results, images, textual and coded
 * interpretation, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDiagnosticReport
 * @package \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRDiagnosticReport extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT;

    const FIELD_NAME = 'name';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_SUBJECT = 'subject';
    const FIELD_PERFORMER = 'performer';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_REQUEST_DETAIL = 'requestDetail';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_DIAGNOSTIC_DATE_TIME = 'diagnosticDateTime';
    const FIELD_DIAGNOSTIC_DATE_TIME_EXT = '_diagnosticDateTime';
    const FIELD_DIAGNOSTIC_PERIOD = 'diagnosticPeriod';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_RESULT = 'result';
    const FIELD_IMAGING_STUDY = 'imagingStudy';
    const FIELD_IMAGE = 'image';
    const FIELD_CONCLUSION = 'conclusion';
    const FIELD_CONCLUSION_EXT = '_conclusion';
    const FIELD_CODED_DIAGNOSIS = 'codedDiagnosis';
    const FIELD_PRESENTED_FORM = 'presentedForm';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $name = null;
    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticReportStatus
     */
    protected null|FHIRDiagnosticReportStatus $status = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $issued = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $performer = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $requestDetail = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $serviceCategory = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $diagnosticDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $diagnosticPeriod = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $specimen = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $result = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $imagingStudy = [];
    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    protected null|array $image = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $conclusion = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $codedDiagnosis = [];
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @var null|\HL7\FHIR\DSTU1\FHIRElement\FHIRAttachment[]
     */
    protected null|array $presentedForm = [];

    /**
     * Validation map for fields in type DiagnosticReport
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRDiagnosticReport Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME])) {
            if ($data[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRCodeableConcept($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDiagnosticReportStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRDiagnosticReportStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRDiagnosticReportStatus([FHIRDiagnosticReportStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRDiagnosticReportStatus($ext));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            $value = $data[self::FIELD_ISSUED] ?? null;
            $ext = (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) ? $data[self::FIELD_ISSUED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIssued(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRResourceReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRResourceReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_DETAIL])) {
            if (is_array($data[self::FIELD_REQUEST_DETAIL])) {
                foreach($data[self::FIELD_REQUEST_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addRequestDetail($v);
                    } else {
                        $this->addRequestDetail(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REQUEST_DETAIL] instanceof FHIRResourceReference) {
                $this->addRequestDetail($data[self::FIELD_REQUEST_DETAIL]);
            } else {
                $this->addRequestDetail(new FHIRResourceReference($data[self::FIELD_REQUEST_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_CATEGORY])) {
            if ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->setServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_DATE_TIME]) || isset($data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_DIAGNOSTIC_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT]) && is_array($data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT])) ? $data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDiagnosticDateTime($value);
                } else if (is_array($value)) {
                    $this->setDiagnosticDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDiagnosticDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDiagnosticDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_PERIOD])) {
            if ($data[self::FIELD_DIAGNOSTIC_PERIOD] instanceof FHIRPeriod) {
                $this->setDiagnosticPeriod($data[self::FIELD_DIAGNOSTIC_PERIOD]);
            } else {
                $this->setDiagnosticPeriod(new FHIRPeriod($data[self::FIELD_DIAGNOSTIC_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if (is_array($data[self::FIELD_SPECIMEN])) {
                foreach($data[self::FIELD_SPECIMEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSpecimen($v);
                    } else {
                        $this->addSpecimen(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIMEN] instanceof FHIRResourceReference) {
                $this->addSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->addSpecimen(new FHIRResourceReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($data[self::FIELD_RESULT])) {
            if (is_array($data[self::FIELD_RESULT])) {
                foreach($data[self::FIELD_RESULT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addResult($v);
                    } else {
                        $this->addResult(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RESULT] instanceof FHIRResourceReference) {
                $this->addResult($data[self::FIELD_RESULT]);
            } else {
                $this->addResult(new FHIRResourceReference($data[self::FIELD_RESULT]));
            }
        }
        if (isset($data[self::FIELD_IMAGING_STUDY])) {
            if (is_array($data[self::FIELD_IMAGING_STUDY])) {
                foreach($data[self::FIELD_IMAGING_STUDY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addImagingStudy($v);
                    } else {
                        $this->addImagingStudy(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRResourceReference) {
                $this->addImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->addImagingStudy(new FHIRResourceReference($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (isset($data[self::FIELD_IMAGE])) {
            if (is_array($data[self::FIELD_IMAGE])) {
                foreach($data[self::FIELD_IMAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDiagnosticReportImage) {
                        $this->addImage($v);
                    } else {
                        $this->addImage(new FHIRDiagnosticReportImage($v));
                    }
                }
            } elseif ($data[self::FIELD_IMAGE] instanceof FHIRDiagnosticReportImage) {
                $this->addImage($data[self::FIELD_IMAGE]);
            } else {
                $this->addImage(new FHIRDiagnosticReportImage($data[self::FIELD_IMAGE]));
            }
        }
        if (isset($data[self::FIELD_CONCLUSION]) || isset($data[self::FIELD_CONCLUSION_EXT])) {
            $value = $data[self::FIELD_CONCLUSION] ?? null;
            $ext = (isset($data[self::FIELD_CONCLUSION_EXT]) && is_array($data[self::FIELD_CONCLUSION_EXT])) ? $data[self::FIELD_CONCLUSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setConclusion($value);
                } else if (is_array($value)) {
                    $this->setConclusion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setConclusion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConclusion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CODED_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_CODED_DIAGNOSIS])) {
                foreach($data[self::FIELD_CODED_DIAGNOSIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCodedDiagnosis($v);
                    } else {
                        $this->addCodedDiagnosis(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CODED_DIAGNOSIS] instanceof FHIRCodeableConcept) {
                $this->addCodedDiagnosis($data[self::FIELD_CODED_DIAGNOSIS]);
            } else {
                $this->addCodedDiagnosis(new FHIRCodeableConcept($data[self::FIELD_CODED_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_PRESENTED_FORM])) {
            if (is_array($data[self::FIELD_PRESENTED_FORM])) {
                foreach($data[self::FIELD_PRESENTED_FORM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAttachment) {
                        $this->addPresentedForm($v);
                    } else {
                        $this->addPresentedForm(new FHIRAttachment($v));
                    }
                }
            } elseif ($data[self::FIELD_PRESENTED_FORM] instanceof FHIRAttachment) {
                $this->addPresentedForm($data[self::FIELD_PRESENTED_FORM]);
            } else {
                $this->addPresentedForm(new FHIRAttachment($data[self::FIELD_PRESENTED_FORM]));
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
     * A code or name that describes this diagnostic report.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getName(): null|FHIRCodeableConcept
    {
        return $this->name;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $name
     * @return static
     */
    public function setName(null|FHIRCodeableConcept $name = null): self
    {
        if (null === $name) {
            $name = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus(): null|FHIRDiagnosticReportStatus
    {
        return $this->status;
    }

    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return static
     */
    public function setStatus(null|FHIRDiagnosticReportStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRDiagnosticReportStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getIssued(): null|FHIRDateTime
    {
        return $this->issued;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU1\FHIRDateTimePrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime $issued
     * @return static
     */
    public function setIssued(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $issued = null): self
    {
        if (null !== $issued && !($issued instanceof FHIRDateTime)) {
            $issued = new FHIRDateTime($issued);
        }
        $this->_trackValueSet($this->issued, $issued);
        $this->issued = $issued;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getPerformer(): null|FHIRResourceReference
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRResourceReference $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->performer, $performer);
        $this->performer = $performer;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier
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
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier $identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getRequestDetail(): null|array
    {
        return $this->requestDetail;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $requestDetail
     * @return static
     */
    public function addRequestDetail(null|FHIRResourceReference $requestDetail = null): self
    {
        if (null === $requestDetail) {
            $requestDetail = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->requestDetail[] = $requestDetail;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[] $requestDetail
     * @return static
     */
    public function setRequestDetail(array $requestDetail = []): self
    {
        if ([] !== $this->requestDetail) {
            $this->_trackValuesRemoved(count($this->requestDetail));
            $this->requestDetail = [];
        }
        if ([] === $requestDetail) {
            return $this;
        }
        foreach($requestDetail as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addRequestDetail($v);
            } else {
                $this->addRequestDetail(new FHIRResourceReference($v));
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
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory(): null|FHIRCodeableConcept
    {
        return $this->serviceCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return static
     */
    public function setServiceCategory(null|FHIRCodeableConcept $serviceCategory = null): self
    {
        if (null === $serviceCategory) {
            $serviceCategory = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->serviceCategory, $serviceCategory);
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDiagnosticDateTime(): null|FHIRDateTime
    {
        return $this->diagnosticDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\DSTU1\FHIRDateTimePrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime $diagnosticDateTime
     * @return static
     */
    public function setDiagnosticDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $diagnosticDateTime = null): self
    {
        if (null !== $diagnosticDateTime && !($diagnosticDateTime instanceof FHIRDateTime)) {
            $diagnosticDateTime = new FHIRDateTime($diagnosticDateTime);
        }
        $this->_trackValueSet($this->diagnosticDateTime, $diagnosticDateTime);
        $this->diagnosticDateTime = $diagnosticDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getDiagnosticPeriod(): null|FHIRPeriod
    {
        return $this->diagnosticPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod $diagnosticPeriod
     * @return static
     */
    public function setDiagnosticPeriod(null|FHIRPeriod $diagnosticPeriod = null): self
    {
        if (null === $diagnosticPeriod) {
            $diagnosticPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->diagnosticPeriod, $diagnosticPeriod);
        $this->diagnosticPeriod = $diagnosticPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getSpecimen(): null|array
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $specimen
     * @return static
     */
    public function addSpecimen(null|FHIRResourceReference $specimen = null): self
    {
        if (null === $specimen) {
            $specimen = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[] $specimen
     * @return static
     */
    public function setSpecimen(array $specimen = []): self
    {
        if ([] !== $this->specimen) {
            $this->_trackValuesRemoved(count($this->specimen));
            $this->specimen = [];
        }
        if ([] === $specimen) {
            return $this;
        }
        foreach($specimen as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addSpecimen($v);
            } else {
                $this->addSpecimen(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getResult(): null|array
    {
        return $this->result;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $result
     * @return static
     */
    public function addResult(null|FHIRResourceReference $result = null): self
    {
        if (null === $result) {
            $result = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->result[] = $result;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[] $result
     * @return static
     */
    public function setResult(array $result = []): self
    {
        if ([] !== $this->result) {
            $this->_trackValuesRemoved(count($this->result));
            $this->result = [];
        }
        if ([] === $result) {
            return $this;
        }
        foreach($result as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addResult($v);
            } else {
                $this->addResult(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getImagingStudy(): null|array
    {
        return $this->imagingStudy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference $imagingStudy
     * @return static
     */
    public function addImagingStudy(null|FHIRResourceReference $imagingStudy = null): self
    {
        if (null === $imagingStudy) {
            $imagingStudy = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->imagingStudy[] = $imagingStudy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference[] $imagingStudy
     * @return static
     */
    public function setImagingStudy(array $imagingStudy = []): self
    {
        if ([] !== $this->imagingStudy) {
            $this->_trackValuesRemoved(count($this->imagingStudy));
            $this->imagingStudy = [];
        }
        if ([] === $imagingStudy) {
            return $this;
        }
        foreach($imagingStudy as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addImagingStudy($v);
            } else {
                $this->addImagingStudy(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public function getImage(): null|array
    {
        return $this->image;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
     * @return static
     */
    public function addImage(null|FHIRDiagnosticReportImage $image = null): self
    {
        if (null === $image) {
            $image = new FHIRDiagnosticReportImage();
        }
        $this->_trackValueAdded();
        $this->image[] = $image;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[] $image
     * @return static
     */
    public function setImage(array $image = []): self
    {
        if ([] !== $this->image) {
            $this->_trackValuesRemoved(count($this->image));
            $this->image = [];
        }
        if ([] === $image) {
            return $this;
        }
        foreach($image as $v) {
            if ($v instanceof FHIRDiagnosticReportImage) {
                $this->addImage($v);
            } else {
                $this->addImage(new FHIRDiagnosticReportImage($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRString
     */
    public function getConclusion(): null|FHIRString
    {
        return $this->conclusion;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @param null|string|\HL7\FHIR\DSTU1\FHIRStringPrimitive|\HL7\FHIR\DSTU1\FHIRElement\FHIRString $conclusion
     * @return static
     */
    public function setConclusion(null|string|FHIRStringPrimitive|FHIRString $conclusion = null): self
    {
        if (null !== $conclusion && !($conclusion instanceof FHIRString)) {
            $conclusion = new FHIRString($conclusion);
        }
        $this->_trackValueSet($this->conclusion, $conclusion);
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis(): null|array
    {
        return $this->codedDiagnosis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept $codedDiagnosis
     * @return static
     */
    public function addCodedDiagnosis(null|FHIRCodeableConcept $codedDiagnosis = null): self
    {
        if (null === $codedDiagnosis) {
            $codedDiagnosis = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->codedDiagnosis[] = $codedDiagnosis;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept[] $codedDiagnosis
     * @return static
     */
    public function setCodedDiagnosis(array $codedDiagnosis = []): self
    {
        if ([] !== $this->codedDiagnosis) {
            $this->_trackValuesRemoved(count($this->codedDiagnosis));
            $this->codedDiagnosis = [];
        }
        if ([] === $codedDiagnosis) {
            return $this;
        }
        foreach($codedDiagnosis as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCodedDiagnosis($v);
            } else {
                $this->addCodedDiagnosis(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRAttachment[]
     */
    public function getPresentedForm(): null|array
    {
        return $this->presentedForm;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRAttachment $presentedForm
     * @return static
     */
    public function addPresentedForm(null|FHIRAttachment $presentedForm = null): self
    {
        if (null === $presentedForm) {
            $presentedForm = new FHIRAttachment();
        }
        $this->_trackValueAdded();
        $this->presentedForm[] = $presentedForm;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param \HL7\FHIR\DSTU1\FHIRElement\FHIRAttachment[] $presentedForm
     * @return static
     */
    public function setPresentedForm(array $presentedForm = []): self
    {
        if ([] !== $this->presentedForm) {
            $this->_trackValuesRemoved(count($this->presentedForm));
            $this->presentedForm = [];
        }
        if ([] === $presentedForm) {
            return $this;
        }
        foreach($presentedForm as $v) {
            if ($v instanceof FHIRAttachment) {
                $this->addPresentedForm($v);
            } else {
                $this->addPresentedForm(new FHIRAttachment($v));
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRequestDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUEST_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getServiceCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIMEN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESULT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGING_STUDY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCLUSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODED_DIAGNOSIS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRESENTED_FORM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_DETAIL])) {
            $v = $this->getRequestDetail();
            foreach($validationRules[self::FIELD_REQUEST_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_REQUEST_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_DETAIL])) {
                        $errs[self::FIELD_REQUEST_DETAIL] = [];
                    }
                    $errs[self::FIELD_REQUEST_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_CATEGORY])) {
            $v = $this->getServiceCategory();
            foreach($validationRules[self::FIELD_SERVICE_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_SERVICE_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_CATEGORY])) {
                        $errs[self::FIELD_SERVICE_CATEGORY] = [];
                    }
                    $errs[self::FIELD_SERVICE_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSTIC_DATE_TIME])) {
            $v = $this->getDiagnosticDateTime();
            foreach($validationRules[self::FIELD_DIAGNOSTIC_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_DIAGNOSTIC_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSTIC_DATE_TIME])) {
                        $errs[self::FIELD_DIAGNOSTIC_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DIAGNOSTIC_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSTIC_PERIOD])) {
            $v = $this->getDiagnosticPeriod();
            foreach($validationRules[self::FIELD_DIAGNOSTIC_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_DIAGNOSTIC_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSTIC_PERIOD])) {
                        $errs[self::FIELD_DIAGNOSTIC_PERIOD] = [];
                    }
                    $errs[self::FIELD_DIAGNOSTIC_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT])) {
            $v = $this->getResult();
            foreach($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT])) {
                        $errs[self::FIELD_RESULT] = [];
                    }
                    $errs[self::FIELD_RESULT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGING_STUDY])) {
            $v = $this->getImagingStudy();
            foreach($validationRules[self::FIELD_IMAGING_STUDY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_IMAGING_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGING_STUDY])) {
                        $errs[self::FIELD_IMAGING_STUDY] = [];
                    }
                    $errs[self::FIELD_IMAGING_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE])) {
            $v = $this->getImage();
            foreach($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_IMAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE])) {
                        $errs[self::FIELD_IMAGE] = [];
                    }
                    $errs[self::FIELD_IMAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCLUSION])) {
            $v = $this->getConclusion();
            foreach($validationRules[self::FIELD_CONCLUSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CONCLUSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCLUSION])) {
                        $errs[self::FIELD_CONCLUSION] = [];
                    }
                    $errs[self::FIELD_CONCLUSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODED_DIAGNOSIS])) {
            $v = $this->getCodedDiagnosis();
            foreach($validationRules[self::FIELD_CODED_DIAGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CODED_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODED_DIAGNOSIS])) {
                        $errs[self::FIELD_CODED_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_CODED_DIAGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTED_FORM])) {
            $v = $this->getPresentedForm();
            foreach($validationRules[self::FIELD_PRESENTED_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_PRESENTED_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTED_FORM])) {
                        $errs[self::FIELD_PRESENTED_FORM] = [];
                    }
                    $errs[self::FIELD_PRESENTED_FORM][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport $type
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
        } else if (!($type instanceof FHIRDiagnosticReport)) {
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
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRDiagnosticReportStatus::xmlUnserialize($n));
            } elseif (self::FIELD_ISSUED === $n->nodeName) {
                $type->setIssued(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER === $n->nodeName) {
                $type->setPerformer(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST_DETAIL === $n->nodeName) {
                $type->addRequestDetail(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE_CATEGORY === $n->nodeName) {
                $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DIAGNOSTIC_DATE_TIME === $n->nodeName) {
                $type->setDiagnosticDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_DIAGNOSTIC_PERIOD === $n->nodeName) {
                $type->setDiagnosticPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIMEN === $n->nodeName) {
                $type->addSpecimen(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_RESULT === $n->nodeName) {
                $type->addResult(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_IMAGING_STUDY === $n->nodeName) {
                $type->addImagingStudy(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_IMAGE === $n->nodeName) {
                $type->addImage(FHIRDiagnosticReportImage::xmlUnserialize($n));
            } elseif (self::FIELD_CONCLUSION === $n->nodeName) {
                $type->setConclusion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CODED_DIAGNOSIS === $n->nodeName) {
                $type->addCodedDiagnosis(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRESENTED_FORM === $n->nodeName) {
                $type->addPresentedForm(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ISSUED);
        if (null !== $n) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIssued($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DIAGNOSTIC_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getDiagnosticDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDiagnosticDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONCLUSION);
        if (null !== $n) {
            $pt = $type->getConclusion();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setConclusion($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('DiagnosticReport'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIssued())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ISSUED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPerformer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRequestDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST_DETAIL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE_CATEGORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiagnosticDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIAGNOSTIC_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiagnosticPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIAGNOSTIC_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIMEN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RESULT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IMAGING_STUDY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IMAGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONCLUSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODED_DIAGNOSIS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRESENTED_FORM);
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
        if (null !== ($v = $this->getName())) {
            $out->{self::FIELD_NAME} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDiagnosticReportStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ISSUED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ISSUED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if ([] !== ($vs = $this->getRequestDetail())) {
            $out->{self::FIELD_REQUEST_DETAIL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REQUEST_DETAIL}[] = $v;
            }
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $out->{self::FIELD_SERVICE_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getDiagnosticDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIAGNOSTIC_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIAGNOSTIC_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDiagnosticPeriod())) {
            $out->{self::FIELD_DIAGNOSTIC_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            $out->{self::FIELD_SPECIMEN} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIMEN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            $out->{self::FIELD_RESULT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RESULT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            $out->{self::FIELD_IMAGING_STUDY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IMAGING_STUDY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            $out->{self::FIELD_IMAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IMAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONCLUSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONCLUSION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            $out->{self::FIELD_CODED_DIAGNOSIS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODED_DIAGNOSIS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            $out->{self::FIELD_PRESENTED_FORM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRESENTED_FORM}[] = $v;
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