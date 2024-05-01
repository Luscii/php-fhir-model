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
use HL7\FHIR\R4\FHIRDateTimePrimitive;
use HL7\FHIR\R4\FHIRDecimalPrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRAnnotation;
use HL7\FHIR\R4\FHIRElement\FHIRAttachment;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRDateTime;
use HL7\FHIR\R4\FHIRElement\FHIRDecimal;
use HL7\FHIR\R4\FHIRElement\FHIREventStatus;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
use HL7\FHIR\R4\FHIRElement\FHIRInstant;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRPeriod;
use HL7\FHIR\R4\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRIdPrimitive;
use HL7\FHIR\R4\FHIRInstantPrimitive;
use HL7\FHIR\R4\FHIRPositiveIntPrimitive;
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
 * A photo, video, or audio recording acquired or used in healthcare. The actual
 * content may be inline or provided by direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedia
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedia extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDIA;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_PART_OF = 'partOf';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';
    const FIELD_MODALITY = 'modality';
    const FIELD_VIEW = 'view';
    const FIELD_SUBJECT = 'subject';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    const FIELD_CREATED_DATE_TIME_EXT = '_createdDateTime';
    const FIELD_CREATED_PERIOD = 'createdPeriod';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_OPERATOR = 'operator';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_DEVICE_NAME = 'deviceName';
    const FIELD_DEVICE_NAME_EXT = '_deviceName';
    const FIELD_DEVICE = 'device';
    const FIELD_HEIGHT = 'height';
    const FIELD_HEIGHT_EXT = '_height';
    const FIELD_WIDTH = 'width';
    const FIELD_WIDTH_EXT = '_width';
    const FIELD_FRAMES = 'frames';
    const FIELD_FRAMES_EXT = '_frames';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_CONTENT = 'content';
    const FIELD_NOTE = 'note';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $partOf = [];
    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the {{title}}.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIREventStatus
     */
    protected null|FHIREventStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies whether the media is an image, video or audio recording
     * or some other media category.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $modality = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $view = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter that establishes the context for this media.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $createdDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $createdPeriod = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this version of the media was made available to providers,
     * typically after having been reviewed.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $issued = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $operator = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonCode = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the observation was made (i.e.
     * the target site).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $bodySite = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $deviceName = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used to collect the media.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $device = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $height = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $width = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $frames = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $duration = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $content = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type Media
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedia Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREventStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIREventStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIREventStatus([FHIREventStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIREventStatus($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_MODALITY])) {
            if ($data[self::FIELD_MODALITY] instanceof FHIRCodeableConcept) {
                $this->setModality($data[self::FIELD_MODALITY]);
            } else {
                $this->setModality(new FHIRCodeableConcept($data[self::FIELD_MODALITY]));
            }
        }
        if (isset($data[self::FIELD_VIEW])) {
            if ($data[self::FIELD_VIEW] instanceof FHIRCodeableConcept) {
                $this->setView($data[self::FIELD_VIEW]);
            } else {
                $this->setView(new FHIRCodeableConcept($data[self::FIELD_VIEW]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_CREATED_DATE_TIME]) || isset($data[self::FIELD_CREATED_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_CREATED_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_CREATED_DATE_TIME_EXT]) && is_array($data[self::FIELD_CREATED_DATE_TIME_EXT])) ? $data[self::FIELD_CREATED_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreatedDateTime($value);
                } else if (is_array($value)) {
                    $this->setCreatedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreatedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCreatedDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_CREATED_PERIOD])) {
            if ($data[self::FIELD_CREATED_PERIOD] instanceof FHIRPeriod) {
                $this->setCreatedPeriod($data[self::FIELD_CREATED_PERIOD]);
            } else {
                $this->setCreatedPeriod(new FHIRPeriod($data[self::FIELD_CREATED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            $value = $data[self::FIELD_ISSUED] ?? null;
            $ext = (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) ? $data[self::FIELD_ISSUED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIssued(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_OPERATOR])) {
            if ($data[self::FIELD_OPERATOR] instanceof FHIRReference) {
                $this->setOperator($data[self::FIELD_OPERATOR]);
            } else {
                $this->setOperator(new FHIRReference($data[self::FIELD_OPERATOR]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_DEVICE_NAME]) || isset($data[self::FIELD_DEVICE_NAME_EXT])) {
            $value = $data[self::FIELD_DEVICE_NAME] ?? null;
            $ext = (isset($data[self::FIELD_DEVICE_NAME_EXT]) && is_array($data[self::FIELD_DEVICE_NAME_EXT])) ? $data[self::FIELD_DEVICE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDeviceName($value);
                } else if (is_array($value)) {
                    $this->setDeviceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDeviceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDeviceName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_HEIGHT]) || isset($data[self::FIELD_HEIGHT_EXT])) {
            $value = $data[self::FIELD_HEIGHT] ?? null;
            $ext = (isset($data[self::FIELD_HEIGHT_EXT]) && is_array($data[self::FIELD_HEIGHT_EXT])) ? $data[self::FIELD_HEIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setHeight($value);
                } else if (is_array($value)) {
                    $this->setHeight(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setHeight(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHeight(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_WIDTH]) || isset($data[self::FIELD_WIDTH_EXT])) {
            $value = $data[self::FIELD_WIDTH] ?? null;
            $ext = (isset($data[self::FIELD_WIDTH_EXT]) && is_array($data[self::FIELD_WIDTH_EXT])) ? $data[self::FIELD_WIDTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setWidth($value);
                } else if (is_array($value)) {
                    $this->setWidth(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setWidth(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWidth(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_FRAMES]) || isset($data[self::FIELD_FRAMES_EXT])) {
            $value = $data[self::FIELD_FRAMES] ?? null;
            $ext = (isset($data[self::FIELD_FRAMES_EXT]) && is_array($data[self::FIELD_FRAMES_EXT])) ? $data[self::FIELD_FRAMES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setFrames($value);
                } else if (is_array($value)) {
                    $this->setFrames(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setFrames(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFrames(new FHIRPositiveInt($ext));
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
        if (isset($data[self::FIELD_CONTENT])) {
            if ($data[self::FIELD_CONTENT] instanceof FHIRAttachment) {
                $this->setContent($data[self::FIELD_CONTENT]);
            } else {
                $this->setContent(new FHIRAttachment($data[self::FIELD_CONTENT]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = []): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getPartOf(): null|array
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(null|FHIRReference $partOf = null): self
    {
        if (null === $partOf) {
            $partOf = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $partOf
     * @return static
     */
    public function setPartOf(array $partOf = []): self
    {
        if ([] !== $this->partOf) {
            $this->_trackValuesRemoved(count($this->partOf));
            $this->partOf = [];
        }
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the {{title}}.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIREventStatus
     */
    public function getStatus(): null|FHIREventStatus
    {
        return $this->status;
    }

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the {{title}}.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIREventStatus $status
     * @return static
     */
    public function setStatus(null|FHIREventStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIREventStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies whether the media is an image, video or audio recording
     * or some other media category.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies whether the media is an image, video or audio recording
     * or some other media category.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getModality(): null|FHIRCodeableConcept
    {
        return $this->modality;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $modality
     * @return static
     */
    public function setModality(null|FHIRCodeableConcept $modality = null): self
    {
        if (null === $modality) {
            $modality = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->modality, $modality);
        $this->modality = $modality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getView(): null|FHIRCodeableConcept
    {
        return $this->view;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $view
     * @return static
     */
    public function setView(null|FHIRCodeableConcept $view = null): self
    {
        if (null === $view) {
            $view = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->view, $view);
        $this->view = $view;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
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
     * The encounter that establishes the context for this media.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter that establishes the context for this media.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
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
     * The date and time(s) at which the media was collected.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getCreatedDateTime(): null|FHIRDateTime
    {
        return $this->createdDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R4\FHIRDateTimePrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDateTime $createdDateTime
     * @return static
     */
    public function setCreatedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $createdDateTime = null): self
    {
        if (null !== $createdDateTime && !($createdDateTime instanceof FHIRDateTime)) {
            $createdDateTime = new FHIRDateTime($createdDateTime);
        }
        $this->_trackValueSet($this->createdDateTime, $createdDateTime);
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPeriod
     */
    public function getCreatedPeriod(): null|FHIRPeriod
    {
        return $this->createdPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRPeriod $createdPeriod
     * @return static
     */
    public function setCreatedPeriod(null|FHIRPeriod $createdPeriod = null): self
    {
        if (null === $createdPeriod) {
            $createdPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->createdPeriod, $createdPeriod);
        $this->createdPeriod = $createdPeriod;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this version of the media was made available to providers,
     * typically after having been reviewed.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInstant
     */
    public function getIssued(): null|FHIRInstant
    {
        return $this->issued;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this version of the media was made available to providers,
     * typically after having been reviewed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R4\FHIRInstantPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInstant $issued
     * @return static
     */
    public function setIssued(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $issued = null): self
    {
        if (null !== $issued && !($issued instanceof FHIRInstant)) {
            $issued = new FHIRInstant($issued);
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
     * The person who administered the collection of the image.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getOperator(): null|FHIRReference
    {
        return $this->operator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $operator
     * @return static
     */
    public function setOperator(null|FHIRReference $operator = null): self
    {
        if (null === $operator) {
            $operator = new FHIRReference();
        }
        $this->_trackValueSet($this->operator, $operator);
        $this->operator = $operator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): null|array
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(null|FHIRCodeableConcept $reasonCode = null): self
    {
        if (null === $reasonCode) {
            $reasonCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = []): self
    {
        if ([] !== $this->reasonCode) {
            $this->_trackValuesRemoved(count($this->reasonCode));
            $this->reasonCode = [];
        }
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
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
     * Indicates the site on the subject's body where the observation was made (i.e.
     * the target site).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite(): null|FHIRCodeableConcept
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the observation was made (i.e.
     * the target site).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function setBodySite(null|FHIRCodeableConcept $bodySite = null): self
    {
        if (null === $bodySite) {
            $bodySite = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->bodySite, $bodySite);
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDeviceName(): null|FHIRString
    {
        return $this->deviceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $deviceName
     * @return static
     */
    public function setDeviceName(null|string|FHIRStringPrimitive|FHIRString $deviceName = null): self
    {
        if (null !== $deviceName && !($deviceName instanceof FHIRString)) {
            $deviceName = new FHIRString($deviceName);
        }
        $this->_trackValueSet($this->deviceName, $deviceName);
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used to collect the media.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getDevice(): null|FHIRReference
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used to collect the media.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(null|FHIRReference $device = null): self
    {
        if (null === $device) {
            $device = new FHIRReference();
        }
        $this->_trackValueSet($this->device, $device);
        $this->device = $device;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getHeight(): null|FHIRPositiveInt
    {
        return $this->height;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRPositiveIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt $height
     * @return static
     */
    public function setHeight(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $height = null): self
    {
        if (null !== $height && !($height instanceof FHIRPositiveInt)) {
            $height = new FHIRPositiveInt($height);
        }
        $this->_trackValueSet($this->height, $height);
        $this->height = $height;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getWidth(): null|FHIRPositiveInt
    {
        return $this->width;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRPositiveIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt $width
     * @return static
     */
    public function setWidth(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $width = null): self
    {
        if (null !== $width && !($width instanceof FHIRPositiveInt)) {
            $width = new FHIRPositiveInt($width);
        }
        $this->_trackValueSet($this->width, $width);
        $this->width = $width;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getFrames(): null|FHIRPositiveInt
    {
        return $this->frames;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRPositiveIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt $frames
     * @return static
     */
    public function setFrames(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $frames = null): self
    {
        if (null !== $frames && !($frames instanceof FHIRPositiveInt)) {
            $frames = new FHIRPositiveInt($frames);
        }
        $this->_trackValueSet($this->frames, $frames);
        $this->frames = $frames;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDecimal
     */
    public function getDuration(): null|FHIRDecimal
    {
        return $this->duration;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @param null|string|float|int|\HL7\FHIR\R4\FHIRDecimalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDecimal $duration
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment
     */
    public function getContent(): null|FHIRAttachment
    {
        return $this->content;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRAttachment $content
     * @return static
     */
    public function setContent(null|FHIRAttachment $content = null): self
    {
        if (null === $content) {
            $content = new FHIRAttachment();
        }
        $this->_trackValueSet($this->content, $content);
        $this->content = $content;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = []): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getModality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getView())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VIEW] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreatedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreatedPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBodySite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BODY_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHeight())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWidth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WIDTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrames())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FRAMES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODALITY])) {
            $v = $this->getModality();
            foreach($validationRules[self::FIELD_MODALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_MODALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODALITY])) {
                        $errs[self::FIELD_MODALITY] = [];
                    }
                    $errs[self::FIELD_MODALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VIEW])) {
            $v = $this->getView();
            foreach($validationRules[self::FIELD_VIEW] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_VIEW, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VIEW])) {
                        $errs[self::FIELD_VIEW] = [];
                    }
                    $errs[self::FIELD_VIEW][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED_DATE_TIME])) {
            $v = $this->getCreatedDateTime();
            foreach($validationRules[self::FIELD_CREATED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_CREATED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED_DATE_TIME])) {
                        $errs[self::FIELD_CREATED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_CREATED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED_PERIOD])) {
            $v = $this->getCreatedPeriod();
            foreach($validationRules[self::FIELD_CREATED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_CREATED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED_PERIOD])) {
                        $errs[self::FIELD_CREATED_PERIOD] = [];
                    }
                    $errs[self::FIELD_CREATED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATOR])) {
            $v = $this->getOperator();
            foreach($validationRules[self::FIELD_OPERATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_OPERATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATOR])) {
                        $errs[self::FIELD_OPERATOR] = [];
                    }
                    $errs[self::FIELD_OPERATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_NAME])) {
            $v = $this->getDeviceName();
            foreach($validationRules[self::FIELD_DEVICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_DEVICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_NAME])) {
                        $errs[self::FIELD_DEVICE_NAME] = [];
                    }
                    $errs[self::FIELD_DEVICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEIGHT])) {
            $v = $this->getHeight();
            foreach($validationRules[self::FIELD_HEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_HEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEIGHT])) {
                        $errs[self::FIELD_HEIGHT] = [];
                    }
                    $errs[self::FIELD_HEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WIDTH])) {
            $v = $this->getWidth();
            foreach($validationRules[self::FIELD_WIDTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_WIDTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WIDTH])) {
                        $errs[self::FIELD_WIDTH] = [];
                    }
                    $errs[self::FIELD_WIDTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FRAMES])) {
            $v = $this->getFrames();
            foreach($validationRules[self::FIELD_FRAMES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_FRAMES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FRAMES])) {
                        $errs[self::FIELD_FRAMES] = [];
                    }
                    $errs[self::FIELD_FRAMES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedia $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedia
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
        } else if (!($type instanceof FHIRMedia)) {
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_BASED_ON === $n->nodeName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PART_OF === $n->nodeName) {
                $type->addPartOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIREventStatus::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODALITY === $n->nodeName) {
                $type->setModality(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VIEW === $n->nodeName) {
                $type->setView(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ENCOUNTER === $n->nodeName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CREATED_DATE_TIME === $n->nodeName) {
                $type->setCreatedDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_CREATED_PERIOD === $n->nodeName) {
                $type->setCreatedPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_ISSUED === $n->nodeName) {
                $type->setIssued(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATOR === $n->nodeName) {
                $type->setOperator(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_CODE === $n->nodeName) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_BODY_SITE === $n->nodeName) {
                $type->setBodySite(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DEVICE_NAME === $n->nodeName) {
                $type->setDeviceName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DEVICE === $n->nodeName) {
                $type->setDevice(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_HEIGHT === $n->nodeName) {
                $type->setHeight(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_WIDTH === $n->nodeName) {
                $type->setWidth(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_FRAMES === $n->nodeName) {
                $type->setFrames(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION === $n->nodeName) {
                $type->setDuration(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT === $n->nodeName) {
                $type->setContent(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_CREATED_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getCreatedDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCreatedDateTime($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_DEVICE_NAME);
        if (null !== $n) {
            $pt = $type->getDeviceName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDeviceName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_HEIGHT);
        if (null !== $n) {
            $pt = $type->getHeight();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setHeight($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_WIDTH);
        if (null !== $n) {
            $pt = $type->getWidth();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setWidth($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FRAMES);
        if (null !== $n) {
            $pt = $type->getFrames();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFrames($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Media'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_BASED_ON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PART_OF);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getModality())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MODALITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getView())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VIEW);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEncounter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENCOUNTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCreatedDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CREATED_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCreatedPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CREATED_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIssued())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ISSUED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOperator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPERATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getBodySite())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BODY_SITE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDeviceName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEVICE_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDevice())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEVICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getHeight())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HEIGHT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWidth())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WIDTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFrames())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FRAMES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $out->{self::FIELD_PART_OF} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PART_OF}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREventStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getModality())) {
            $out->{self::FIELD_MODALITY} = $v;
        }
        if (null !== ($v = $this->getView())) {
            $out->{self::FIELD_VIEW} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getCreatedDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CREATED_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CREATED_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCreatedPeriod())) {
            $out->{self::FIELD_CREATED_PERIOD} = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ISSUED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ISSUED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            $out->{self::FIELD_OPERATOR} = $v;
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $out->{self::FIELD_REASON_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getBodySite())) {
            $out->{self::FIELD_BODY_SITE} = $v;
        }
        if (null !== ($v = $this->getDeviceName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEVICE_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEVICE_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            $out->{self::FIELD_DEVICE} = $v;
        }
        if (null !== ($v = $this->getHeight())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HEIGHT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HEIGHT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWidth())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WIDTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WIDTH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFrames())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FRAMES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FRAMES_EXT} = $ext;
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
        if (null !== ($v = $this->getContent())) {
            $out->{self::FIELD_CONTENT} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTE}[] = $v;
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