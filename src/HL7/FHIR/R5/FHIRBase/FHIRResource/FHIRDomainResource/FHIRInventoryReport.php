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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryReport\FHIRInventoryReportInventoryListing;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryCountType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryReportStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A report of inventory or stock items.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRInventoryReport
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRInventoryReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_COUNT_TYPE = 'countType';
    const FIELD_COUNT_TYPE_EXT = '_countType';
    const FIELD_OPERATION_TYPE = 'operationType';
    const FIELD_OPERATION_TYPE_REASON = 'operationTypeReason';
    const FIELD_REPORTED_DATE_TIME = 'reportedDateTime';
    const FIELD_REPORTED_DATE_TIME_EXT = '_reportedDateTime';
    const FIELD_REPORTER = 'reporter';
    const FIELD_REPORTING_PERIOD = 'reportingPeriod';
    const FIELD_INVENTORY_LISTING = 'inventoryListing';
    const FIELD_NOTE = 'note';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the InventoryReport.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the inventory check or notification - whether this is draft (e.g.
     * the report is still pending some updates) or active.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryReportStatus
     */
    protected null|FHIRInventoryReportStatus $status = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the report is about the current inventory count (snapshot) or a
     * differential change in inventory (change).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryCountType
     */
    protected null|FHIRInventoryCountType $countType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What type of operation is being performed - addition or subtraction.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $operationType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for this count - regular count, ad-hoc count, new arrivals, etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $operationTypeReason = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the report has been submitted.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $reportedDateTime = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who submits the report.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $reporter = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period the report refers to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $reportingPeriod = null;
    /**
     * A report of inventory or stock items.
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryReport\FHIRInventoryReportInventoryListing[]
     */
    protected null|array $inventoryListing = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A note associated with the InventoryReport.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type InventoryReport
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRInventoryReport Constructor
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInventoryReportStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRInventoryReportStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRInventoryReportStatus([FHIRInventoryReportStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRInventoryReportStatus($ext));
            }
        }
        if (isset($data[self::FIELD_COUNT_TYPE]) || isset($data[self::FIELD_COUNT_TYPE_EXT])) {
            $value = $data[self::FIELD_COUNT_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_COUNT_TYPE_EXT]) && is_array($data[self::FIELD_COUNT_TYPE_EXT])) ? $data[self::FIELD_COUNT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInventoryCountType) {
                    $this->setCountType($value);
                } else if (is_array($value)) {
                    $this->setCountType(new FHIRInventoryCountType(array_merge($ext, $value)));
                } else {
                    $this->setCountType(new FHIRInventoryCountType([FHIRInventoryCountType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCountType(new FHIRInventoryCountType($ext));
            }
        }
        if (isset($data[self::FIELD_OPERATION_TYPE])) {
            if ($data[self::FIELD_OPERATION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setOperationType($data[self::FIELD_OPERATION_TYPE]);
            } else {
                $this->setOperationType(new FHIRCodeableConcept($data[self::FIELD_OPERATION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION_TYPE_REASON])) {
            if ($data[self::FIELD_OPERATION_TYPE_REASON] instanceof FHIRCodeableConcept) {
                $this->setOperationTypeReason($data[self::FIELD_OPERATION_TYPE_REASON]);
            } else {
                $this->setOperationTypeReason(new FHIRCodeableConcept($data[self::FIELD_OPERATION_TYPE_REASON]));
            }
        }
        if (isset($data[self::FIELD_REPORTED_DATE_TIME]) || isset($data[self::FIELD_REPORTED_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_REPORTED_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_REPORTED_DATE_TIME_EXT]) && is_array($data[self::FIELD_REPORTED_DATE_TIME_EXT])) ? $data[self::FIELD_REPORTED_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setReportedDateTime($value);
                } else if (is_array($value)) {
                    $this->setReportedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setReportedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReportedDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_REPORTER])) {
            if ($data[self::FIELD_REPORTER] instanceof FHIRReference) {
                $this->setReporter($data[self::FIELD_REPORTER]);
            } else {
                $this->setReporter(new FHIRReference($data[self::FIELD_REPORTER]));
            }
        }
        if (isset($data[self::FIELD_REPORTING_PERIOD])) {
            if ($data[self::FIELD_REPORTING_PERIOD] instanceof FHIRPeriod) {
                $this->setReportingPeriod($data[self::FIELD_REPORTING_PERIOD]);
            } else {
                $this->setReportingPeriod(new FHIRPeriod($data[self::FIELD_REPORTING_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_INVENTORY_LISTING])) {
            if (is_array($data[self::FIELD_INVENTORY_LISTING])) {
                foreach($data[self::FIELD_INVENTORY_LISTING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInventoryReportInventoryListing) {
                        $this->addInventoryListing($v);
                    } else {
                        $this->addInventoryListing(new FHIRInventoryReportInventoryListing($v));
                    }
                }
            } elseif ($data[self::FIELD_INVENTORY_LISTING] instanceof FHIRInventoryReportInventoryListing) {
                $this->addInventoryListing($data[self::FIELD_INVENTORY_LISTING]);
            } else {
                $this->addInventoryListing(new FHIRInventoryReportInventoryListing($data[self::FIELD_INVENTORY_LISTING]));
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
     * Business identifier for the InventoryReport.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
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
     * Business identifier for the InventoryReport.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * Business identifier for the InventoryReport.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the inventory check or notification - whether this is draft (e.g.
     * the report is still pending some updates) or active.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryReportStatus
     */
    public function getStatus(): null|FHIRInventoryReportStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the inventory check or notification - whether this is draft (e.g.
     * the report is still pending some updates) or active.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryReportStatus $status
     * @return static
     */
    public function setStatus(null|FHIRInventoryReportStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRInventoryReportStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the report is about the current inventory count (snapshot) or a
     * differential change in inventory (change).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryCountType
     */
    public function getCountType(): null|FHIRInventoryCountType
    {
        return $this->countType;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the report is about the current inventory count (snapshot) or a
     * differential change in inventory (change).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInventoryCountType $countType
     * @return static
     */
    public function setCountType(null|FHIRInventoryCountType $countType = null): self
    {
        if (null === $countType) {
            $countType = new FHIRInventoryCountType();
        }
        $this->_trackValueSet($this->countType, $countType);
        $this->countType = $countType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What type of operation is being performed - addition or subtraction.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOperationType(): null|FHIRCodeableConcept
    {
        return $this->operationType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What type of operation is being performed - addition or subtraction.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $operationType
     * @return static
     */
    public function setOperationType(null|FHIRCodeableConcept $operationType = null): self
    {
        if (null === $operationType) {
            $operationType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->operationType, $operationType);
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for this count - regular count, ad-hoc count, new arrivals, etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOperationTypeReason(): null|FHIRCodeableConcept
    {
        return $this->operationTypeReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for this count - regular count, ad-hoc count, new arrivals, etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $operationTypeReason
     * @return static
     */
    public function setOperationTypeReason(null|FHIRCodeableConcept $operationTypeReason = null): self
    {
        if (null === $operationTypeReason) {
            $operationTypeReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->operationTypeReason, $operationTypeReason);
        $this->operationTypeReason = $operationTypeReason;
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
     * When the report has been submitted.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getReportedDateTime(): null|FHIRDateTime
    {
        return $this->reportedDateTime;
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
     * When the report has been submitted.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $reportedDateTime
     * @return static
     */
    public function setReportedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $reportedDateTime = null): self
    {
        if (null !== $reportedDateTime && !($reportedDateTime instanceof FHIRDateTime)) {
            $reportedDateTime = new FHIRDateTime($reportedDateTime);
        }
        $this->_trackValueSet($this->reportedDateTime, $reportedDateTime);
        $this->reportedDateTime = $reportedDateTime;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who submits the report.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReporter(): null|FHIRReference
    {
        return $this->reporter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who submits the report.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reporter
     * @return static
     */
    public function setReporter(null|FHIRReference $reporter = null): self
    {
        if (null === $reporter) {
            $reporter = new FHIRReference();
        }
        $this->_trackValueSet($this->reporter, $reporter);
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period the report refers to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getReportingPeriod(): null|FHIRPeriod
    {
        return $this->reportingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period the report refers to.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $reportingPeriod
     * @return static
     */
    public function setReportingPeriod(null|FHIRPeriod $reportingPeriod = null): self
    {
        if (null === $reportingPeriod) {
            $reportingPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->reportingPeriod, $reportingPeriod);
        $this->reportingPeriod = $reportingPeriod;
        return $this;
    }

    /**
     * A report of inventory or stock items.
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryReport\FHIRInventoryReportInventoryListing[]
     */
    public function getInventoryListing(): null|array
    {
        return $this->inventoryListing;
    }

    /**
     * A report of inventory or stock items.
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryReport\FHIRInventoryReportInventoryListing $inventoryListing
     * @return static
     */
    public function addInventoryListing(null|FHIRInventoryReportInventoryListing $inventoryListing = null): self
    {
        if (null === $inventoryListing) {
            $inventoryListing = new FHIRInventoryReportInventoryListing();
        }
        $this->_trackValueAdded();
        $this->inventoryListing[] = $inventoryListing;
        return $this;
    }

    /**
     * A report of inventory or stock items.
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryReport\FHIRInventoryReportInventoryListing[] $inventoryListing
     * @return static
     */
    public function setInventoryListing(array $inventoryListing = []): self
    {
        if ([] !== $this->inventoryListing) {
            $this->_trackValuesRemoved(count($this->inventoryListing));
            $this->inventoryListing = [];
        }
        if ([] === $inventoryListing) {
            return $this;
        }
        foreach($inventoryListing as $v) {
            if ($v instanceof FHIRInventoryReportInventoryListing) {
                $this->addInventoryListing($v);
            } else {
                $this->addInventoryListing(new FHIRInventoryReportInventoryListing($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A note associated with the InventoryReport.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
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
     * A note associated with the InventoryReport.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
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
     * A note associated with the InventoryReport.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperationType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperationTypeReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_TYPE_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReporter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTING_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInventoryListing())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INVENTORY_LISTING, $i)] = $fieldErrs;
                }
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT_TYPE])) {
            $v = $this->getCountType();
            foreach($validationRules[self::FIELD_COUNT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_COUNT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT_TYPE])) {
                        $errs[self::FIELD_COUNT_TYPE] = [];
                    }
                    $errs[self::FIELD_COUNT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION_TYPE])) {
            $v = $this->getOperationType();
            foreach($validationRules[self::FIELD_OPERATION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_OPERATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION_TYPE])) {
                        $errs[self::FIELD_OPERATION_TYPE] = [];
                    }
                    $errs[self::FIELD_OPERATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION_TYPE_REASON])) {
            $v = $this->getOperationTypeReason();
            foreach($validationRules[self::FIELD_OPERATION_TYPE_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_OPERATION_TYPE_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION_TYPE_REASON])) {
                        $errs[self::FIELD_OPERATION_TYPE_REASON] = [];
                    }
                    $errs[self::FIELD_OPERATION_TYPE_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTED_DATE_TIME])) {
            $v = $this->getReportedDateTime();
            foreach($validationRules[self::FIELD_REPORTED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_REPORTED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTED_DATE_TIME])) {
                        $errs[self::FIELD_REPORTED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_REPORTED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTER])) {
            $v = $this->getReporter();
            foreach($validationRules[self::FIELD_REPORTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_REPORTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTER])) {
                        $errs[self::FIELD_REPORTER] = [];
                    }
                    $errs[self::FIELD_REPORTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTING_PERIOD])) {
            $v = $this->getReportingPeriod();
            foreach($validationRules[self::FIELD_REPORTING_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_REPORTING_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTING_PERIOD])) {
                        $errs[self::FIELD_REPORTING_PERIOD] = [];
                    }
                    $errs[self::FIELD_REPORTING_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INVENTORY_LISTING])) {
            $v = $this->getInventoryListing();
            foreach($validationRules[self::FIELD_INVENTORY_LISTING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_INVENTORY_LISTING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INVENTORY_LISTING])) {
                        $errs[self::FIELD_INVENTORY_LISTING] = [];
                    }
                    $errs[self::FIELD_INVENTORY_LISTING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_REPORT, self::FIELD_NOTE, $rule, $constraint, $v);
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryReport $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryReport
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
        } else if (!($type instanceof FHIRInventoryReport)) {
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
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRInventoryReportStatus::xmlUnserialize($n));
            } elseif (self::FIELD_COUNT_TYPE === $n->nodeName) {
                $type->setCountType(FHIRInventoryCountType::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATION_TYPE === $n->nodeName) {
                $type->setOperationType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATION_TYPE_REASON === $n->nodeName) {
                $type->setOperationTypeReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REPORTED_DATE_TIME === $n->nodeName) {
                $type->setReportedDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_REPORTER === $n->nodeName) {
                $type->setReporter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REPORTING_PERIOD === $n->nodeName) {
                $type->setReportingPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_INVENTORY_LISTING === $n->nodeName) {
                $type->addInventoryListing(FHIRInventoryReportInventoryListing::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_REPORTED_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getReportedDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReportedDateTime($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('InventoryReport'), $libxmlOpts);
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
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCountType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COUNT_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOperationType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPERATION_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOperationTypeReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPERATION_TYPE_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReportedDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPORTED_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReporter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPORTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReportingPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPORTING_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getInventoryListing())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INVENTORY_LISTING);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInventoryReportStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCountType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COUNT_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInventoryCountType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COUNT_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOperationType())) {
            $out->{self::FIELD_OPERATION_TYPE} = $v;
        }
        if (null !== ($v = $this->getOperationTypeReason())) {
            $out->{self::FIELD_OPERATION_TYPE_REASON} = $v;
        }
        if (null !== ($v = $this->getReportedDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REPORTED_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REPORTED_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReporter())) {
            $out->{self::FIELD_REPORTER} = $v;
        }
        if (null !== ($v = $this->getReportingPeriod())) {
            $out->{self::FIELD_REPORTING_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getInventoryListing())) {
            $out->{self::FIELD_INVENTORY_LISTING} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INVENTORY_LISTING}[] = $v;
            }
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