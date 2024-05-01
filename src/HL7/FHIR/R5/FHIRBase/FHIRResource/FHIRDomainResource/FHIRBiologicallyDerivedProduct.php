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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProperty;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
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
 * This resource reflects an instance of a biologically derived product. A material
 * substance originating from a biological entity intended to be transplanted or
 * infused into another (possibly the same) biological entity.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRBiologicallyDerivedProduct
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRBiologicallyDerivedProduct extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT;

    const FIELD_PRODUCT_CATEGORY = 'productCategory';
    const FIELD_PRODUCT_CODE = 'productCode';
    const FIELD_PARENT = 'parent';
    const FIELD_REQUEST = 'request';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_BIOLOGICAL_SOURCE_EVENT = 'biologicalSourceEvent';
    const FIELD_PROCESSING_FACILITY = 'processingFacility';
    const FIELD_DIVISION = 'division';
    const FIELD_DIVISION_EXT = '_division';
    const FIELD_PRODUCT_STATUS = 'productStatus';
    const FIELD_EXPIRATION_DATE = 'expirationDate';
    const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    const FIELD_COLLECTION = 'collection';
    const FIELD_STORAGE_TEMP_REQUIREMENTS = 'storageTempRequirements';
    const FIELD_PROPERTY = 'property';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad category of this product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $productCategory = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A codified value that systematically supports characterization and
     * classification of medical products of human origin inclusive of processing
     * conditions such as additives, volumes and handling conditions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $productCode = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $parent = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request to obtain and/or infuse this biologically derived product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $request = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a biologically derived product. Note:
     * This is a business identifier, not a resource identifier.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that supports traceability to the event during which material in
     * this product from one or more biological entities was obtained or pooled.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    protected null|FHIRIdentifier $biologicalSourceEvent = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing facilities responsible for the labeling and distribution of this
     * biologically derived product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $processingFacility = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique identifier for an aliquot of a product. Used to distinguish individual
     * aliquots of a product carrying the same biologicalSource and productCode
     * identifiers.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $division = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the product is currently available.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $productStatus = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date, and where relevant time, of expiration.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $expirationDate = null;
    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    protected null|FHIRBiologicallyDerivedProductCollection $collection = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature requirements for storage of the biologically-derived product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $storageTempRequirements = null;
    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProperty[]
     */
    protected null|array $property = [];

    /**
     * Validation map for fields in type BiologicallyDerivedProduct
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRBiologicallyDerivedProduct Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PRODUCT_CATEGORY])) {
            if ($data[self::FIELD_PRODUCT_CATEGORY] instanceof FHIRCoding) {
                $this->setProductCategory($data[self::FIELD_PRODUCT_CATEGORY]);
            } else {
                $this->setProductCategory(new FHIRCoding($data[self::FIELD_PRODUCT_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CODE])) {
            if ($data[self::FIELD_PRODUCT_CODE] instanceof FHIRCodeableConcept) {
                $this->setProductCode($data[self::FIELD_PRODUCT_CODE]);
            } else {
                $this->setProductCode(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CODE]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if (is_array($data[self::FIELD_PARENT])) {
                foreach($data[self::FIELD_PARENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addParent($v);
                    } else {
                        $this->addParent(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->addParent($data[self::FIELD_PARENT]);
            } else {
                $this->addParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if (is_array($data[self::FIELD_REQUEST])) {
                foreach($data[self::FIELD_REQUEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRequest($v);
                    } else {
                        $this->addRequest(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->addRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->addRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
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
        if (isset($data[self::FIELD_BIOLOGICAL_SOURCE_EVENT])) {
            if ($data[self::FIELD_BIOLOGICAL_SOURCE_EVENT] instanceof FHIRIdentifier) {
                $this->setBiologicalSourceEvent($data[self::FIELD_BIOLOGICAL_SOURCE_EVENT]);
            } else {
                $this->setBiologicalSourceEvent(new FHIRIdentifier($data[self::FIELD_BIOLOGICAL_SOURCE_EVENT]));
            }
        }
        if (isset($data[self::FIELD_PROCESSING_FACILITY])) {
            if (is_array($data[self::FIELD_PROCESSING_FACILITY])) {
                foreach($data[self::FIELD_PROCESSING_FACILITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addProcessingFacility($v);
                    } else {
                        $this->addProcessingFacility(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PROCESSING_FACILITY] instanceof FHIRReference) {
                $this->addProcessingFacility($data[self::FIELD_PROCESSING_FACILITY]);
            } else {
                $this->addProcessingFacility(new FHIRReference($data[self::FIELD_PROCESSING_FACILITY]));
            }
        }
        if (isset($data[self::FIELD_DIVISION]) || isset($data[self::FIELD_DIVISION_EXT])) {
            $value = $data[self::FIELD_DIVISION] ?? null;
            $ext = (isset($data[self::FIELD_DIVISION_EXT]) && is_array($data[self::FIELD_DIVISION_EXT])) ? $data[self::FIELD_DIVISION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDivision($value);
                } else if (is_array($value)) {
                    $this->setDivision(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDivision(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDivision(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_STATUS])) {
            if ($data[self::FIELD_PRODUCT_STATUS] instanceof FHIRCoding) {
                $this->setProductStatus($data[self::FIELD_PRODUCT_STATUS]);
            } else {
                $this->setProductStatus(new FHIRCoding($data[self::FIELD_PRODUCT_STATUS]));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_DATE]) || isset($data[self::FIELD_EXPIRATION_DATE_EXT])) {
            $value = $data[self::FIELD_EXPIRATION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT])) ? $data[self::FIELD_EXPIRATION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setExpirationDate($value);
                } else if (is_array($value)) {
                    $this->setExpirationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setExpirationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExpirationDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_COLLECTION])) {
            if ($data[self::FIELD_COLLECTION] instanceof FHIRBiologicallyDerivedProductCollection) {
                $this->setCollection($data[self::FIELD_COLLECTION]);
            } else {
                $this->setCollection(new FHIRBiologicallyDerivedProductCollection($data[self::FIELD_COLLECTION]));
            }
        }
        if (isset($data[self::FIELD_STORAGE_TEMP_REQUIREMENTS])) {
            if ($data[self::FIELD_STORAGE_TEMP_REQUIREMENTS] instanceof FHIRRange) {
                $this->setStorageTempRequirements($data[self::FIELD_STORAGE_TEMP_REQUIREMENTS]);
            } else {
                $this->setStorageTempRequirements(new FHIRRange($data[self::FIELD_STORAGE_TEMP_REQUIREMENTS]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBiologicallyDerivedProductProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRBiologicallyDerivedProductProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRBiologicallyDerivedProductProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRBiologicallyDerivedProductProperty($data[self::FIELD_PROPERTY]));
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad category of this product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getProductCategory(): null|FHIRCoding
    {
        return $this->productCategory;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Broad category of this product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $productCategory
     * @return static
     */
    public function setProductCategory(null|FHIRCoding $productCategory = null): self
    {
        if (null === $productCategory) {
            $productCategory = new FHIRCoding();
        }
        $this->_trackValueSet($this->productCategory, $productCategory);
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A codified value that systematically supports characterization and
     * classification of medical products of human origin inclusive of processing
     * conditions such as additives, volumes and handling conditions.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProductCode(): null|FHIRCodeableConcept
    {
        return $this->productCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A codified value that systematically supports characterization and
     * classification of medical products of human origin inclusive of processing
     * conditions such as additives, volumes and handling conditions.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productCode
     * @return static
     */
    public function setProductCode(null|FHIRCodeableConcept $productCode = null): self
    {
        if (null === $productCode) {
            $productCode = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->productCode, $productCode);
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getParent(): null|array
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $parent
     * @return static
     */
    public function addParent(null|FHIRReference $parent = null): self
    {
        if (null === $parent) {
            $parent = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $parent
     * @return static
     */
    public function setParent(array $parent = []): self
    {
        if ([] !== $this->parent) {
            $this->_trackValuesRemoved(count($this->parent));
            $this->parent = [];
        }
        if ([] === $parent) {
            return $this;
        }
        foreach($parent as $v) {
            if ($v instanceof FHIRReference) {
                $this->addParent($v);
            } else {
                $this->addParent(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request to obtain and/or infuse this biologically derived product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getRequest(): null|array
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request to obtain and/or infuse this biologically derived product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $request
     * @return static
     */
    public function addRequest(null|FHIRReference $request = null): self
    {
        if (null === $request) {
            $request = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->request[] = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request to obtain and/or infuse this biologically derived product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $request
     * @return static
     */
    public function setRequest(array $request = []): self
    {
        if ([] !== $this->request) {
            $this->_trackValuesRemoved(count($this->request));
            $this->request = [];
        }
        if ([] === $request) {
            return $this;
        }
        foreach($request as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRequest($v);
            } else {
                $this->addRequest(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a biologically derived product. Note:
     * This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product. Note:
     * This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product. Note:
     * This is a business identifier, not a resource identifier.
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that supports traceability to the event during which material in
     * this product from one or more biological entities was obtained or pooled.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getBiologicalSourceEvent(): null|FHIRIdentifier
    {
        return $this->biologicalSourceEvent;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that supports traceability to the event during which material in
     * this product from one or more biological entities was obtained or pooled.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $biologicalSourceEvent
     * @return static
     */
    public function setBiologicalSourceEvent(null|FHIRIdentifier $biologicalSourceEvent = null): self
    {
        if (null === $biologicalSourceEvent) {
            $biologicalSourceEvent = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->biologicalSourceEvent, $biologicalSourceEvent);
        $this->biologicalSourceEvent = $biologicalSourceEvent;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing facilities responsible for the labeling and distribution of this
     * biologically derived product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getProcessingFacility(): null|array
    {
        return $this->processingFacility;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing facilities responsible for the labeling and distribution of this
     * biologically derived product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $processingFacility
     * @return static
     */
    public function addProcessingFacility(null|FHIRReference $processingFacility = null): self
    {
        if (null === $processingFacility) {
            $processingFacility = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->processingFacility[] = $processingFacility;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing facilities responsible for the labeling and distribution of this
     * biologically derived product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $processingFacility
     * @return static
     */
    public function setProcessingFacility(array $processingFacility = []): self
    {
        if ([] !== $this->processingFacility) {
            $this->_trackValuesRemoved(count($this->processingFacility));
            $this->processingFacility = [];
        }
        if ([] === $processingFacility) {
            return $this;
        }
        foreach($processingFacility as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProcessingFacility($v);
            } else {
                $this->addProcessingFacility(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique identifier for an aliquot of a product. Used to distinguish individual
     * aliquots of a product carrying the same biologicalSource and productCode
     * identifiers.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDivision(): null|FHIRString
    {
        return $this->division;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique identifier for an aliquot of a product. Used to distinguish individual
     * aliquots of a product carrying the same biologicalSource and productCode
     * identifiers.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $division
     * @return static
     */
    public function setDivision(null|string|FHIRStringPrimitive|FHIRString $division = null): self
    {
        if (null !== $division && !($division instanceof FHIRString)) {
            $division = new FHIRString($division);
        }
        $this->_trackValueSet($this->division, $division);
        $this->division = $division;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the product is currently available.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getProductStatus(): null|FHIRCoding
    {
        return $this->productStatus;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the product is currently available.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $productStatus
     * @return static
     */
    public function setProductStatus(null|FHIRCoding $productStatus = null): self
    {
        if (null === $productStatus) {
            $productStatus = new FHIRCoding();
        }
        $this->_trackValueSet($this->productStatus, $productStatus);
        $this->productStatus = $productStatus;
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
     * Date, and where relevant time, of expiration.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getExpirationDate(): null|FHIRDateTime
    {
        return $this->expirationDate;
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
     * Date, and where relevant time, of expiration.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $expirationDate
     * @return static
     */
    public function setExpirationDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $expirationDate = null): self
    {
        if (null !== $expirationDate && !($expirationDate instanceof FHIRDateTime)) {
            $expirationDate = new FHIRDateTime($expirationDate);
        }
        $this->_trackValueSet($this->expirationDate, $expirationDate);
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function getCollection(): null|FHIRBiologicallyDerivedProductCollection
    {
        return $this->collection;
    }

    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection $collection
     * @return static
     */
    public function setCollection(null|FHIRBiologicallyDerivedProductCollection $collection = null): self
    {
        if (null === $collection) {
            $collection = new FHIRBiologicallyDerivedProductCollection();
        }
        $this->_trackValueSet($this->collection, $collection);
        $this->collection = $collection;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature requirements for storage of the biologically-derived product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getStorageTempRequirements(): null|FHIRRange
    {
        return $this->storageTempRequirements;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature requirements for storage of the biologically-derived product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $storageTempRequirements
     * @return static
     */
    public function setStorageTempRequirements(null|FHIRRange $storageTempRequirements = null): self
    {
        if (null === $storageTempRequirements) {
            $storageTempRequirements = new FHIRRange();
        }
        $this->_trackValueSet($this->storageTempRequirements, $storageTempRequirements);
        $this->storageTempRequirements = $storageTempRequirements;
        return $this;
    }

    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProperty $property
     * @return static
     */
    public function addProperty(null|FHIRBiologicallyDerivedProductProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRBiologicallyDerivedProductProperty();
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * This resource reflects an instance of a biologically derived product. A material
     * substance originating from a biological entity intended to be transplanted or
     * infused into another (possibly the same) biological entity.
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProperty[] $property
     * @return static
     */
    public function setProperty(array $property = []): self
    {
        if ([] !== $this->property) {
            $this->_trackValuesRemoved(count($this->property));
            $this->property = [];
        }
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRBiologicallyDerivedProductProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRBiologicallyDerivedProductProperty($v));
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
        if (null !== ($v = $this->getProductCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUEST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBiologicalSourceEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BIOLOGICAL_SOURCE_EVENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProcessingFacility())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCESSING_FACILITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDivision())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIVISION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPIRATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCollection())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLLECTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStorageTempRequirements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STORAGE_TEMP_REQUIREMENTS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_CATEGORY])) {
            $v = $this->getProductCategory();
            foreach($validationRules[self::FIELD_PRODUCT_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PRODUCT_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CATEGORY])) {
                        $errs[self::FIELD_PRODUCT_CATEGORY] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_CODE])) {
            $v = $this->getProductCode();
            foreach($validationRules[self::FIELD_PRODUCT_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PRODUCT_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CODE])) {
                        $errs[self::FIELD_PRODUCT_CODE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BIOLOGICAL_SOURCE_EVENT])) {
            $v = $this->getBiologicalSourceEvent();
            foreach($validationRules[self::FIELD_BIOLOGICAL_SOURCE_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_BIOLOGICAL_SOURCE_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BIOLOGICAL_SOURCE_EVENT])) {
                        $errs[self::FIELD_BIOLOGICAL_SOURCE_EVENT] = [];
                    }
                    $errs[self::FIELD_BIOLOGICAL_SOURCE_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESSING_FACILITY])) {
            $v = $this->getProcessingFacility();
            foreach($validationRules[self::FIELD_PROCESSING_FACILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PROCESSING_FACILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESSING_FACILITY])) {
                        $errs[self::FIELD_PROCESSING_FACILITY] = [];
                    }
                    $errs[self::FIELD_PROCESSING_FACILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIVISION])) {
            $v = $this->getDivision();
            foreach($validationRules[self::FIELD_DIVISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_DIVISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIVISION])) {
                        $errs[self::FIELD_DIVISION] = [];
                    }
                    $errs[self::FIELD_DIVISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_STATUS])) {
            $v = $this->getProductStatus();
            foreach($validationRules[self::FIELD_PRODUCT_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PRODUCT_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_STATUS])) {
                        $errs[self::FIELD_PRODUCT_STATUS] = [];
                    }
                    $errs[self::FIELD_PRODUCT_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPIRATION_DATE])) {
            $v = $this->getExpirationDate();
            foreach($validationRules[self::FIELD_EXPIRATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_EXPIRATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPIRATION_DATE])) {
                        $errs[self::FIELD_EXPIRATION_DATE] = [];
                    }
                    $errs[self::FIELD_EXPIRATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLLECTION])) {
            $v = $this->getCollection();
            foreach($validationRules[self::FIELD_COLLECTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_COLLECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLLECTION])) {
                        $errs[self::FIELD_COLLECTION] = [];
                    }
                    $errs[self::FIELD_COLLECTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STORAGE_TEMP_REQUIREMENTS])) {
            $v = $this->getStorageTempRequirements();
            foreach($validationRules[self::FIELD_STORAGE_TEMP_REQUIREMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_STORAGE_TEMP_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STORAGE_TEMP_REQUIREMENTS])) {
                        $errs[self::FIELD_STORAGE_TEMP_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_STORAGE_TEMP_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
        } else if (!($type instanceof FHIRBiologicallyDerivedProduct)) {
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
            if (self::FIELD_PRODUCT_CATEGORY === $n->nodeName) {
                $type->setProductCategory(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCT_CODE === $n->nodeName) {
                $type->setProductCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PARENT === $n->nodeName) {
                $type->addParent(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST === $n->nodeName) {
                $type->addRequest(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_BIOLOGICAL_SOURCE_EVENT === $n->nodeName) {
                $type->setBiologicalSourceEvent(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_PROCESSING_FACILITY === $n->nodeName) {
                $type->addProcessingFacility(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DIVISION === $n->nodeName) {
                $type->setDivision(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCT_STATUS === $n->nodeName) {
                $type->setProductStatus(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_EXPIRATION_DATE === $n->nodeName) {
                $type->setExpirationDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_COLLECTION === $n->nodeName) {
                $type->setCollection(FHIRBiologicallyDerivedProductCollection::xmlUnserialize($n));
            } elseif (self::FIELD_STORAGE_TEMP_REQUIREMENTS === $n->nodeName) {
                $type->setStorageTempRequirements(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRBiologicallyDerivedProductProperty::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DIVISION);
        if (null !== $n) {
            $pt = $type->getDivision();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDivision($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXPIRATION_DATE);
        if (null !== $n) {
            $pt = $type->getExpirationDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExpirationDate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('BiologicallyDerivedProduct'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getProductCategory())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_CATEGORY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProductCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getParent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PARENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
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
        if (null !== ($v = $this->getBiologicalSourceEvent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BIOLOGICAL_SOURCE_EVENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProcessingFacility())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROCESSING_FACILITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDivision())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIVISION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProductStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPIRATION_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCollection())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COLLECTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStorageTempRequirements())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STORAGE_TEMP_REQUIREMENTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROPERTY);
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
        if (null !== ($v = $this->getProductCategory())) {
            $out->{self::FIELD_PRODUCT_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getProductCode())) {
            $out->{self::FIELD_PRODUCT_CODE} = $v;
        }
        if ([] !== ($vs = $this->getParent())) {
            $out->{self::FIELD_PARENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PARENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REQUEST}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getBiologicalSourceEvent())) {
            $out->{self::FIELD_BIOLOGICAL_SOURCE_EVENT} = $v;
        }
        if ([] !== ($vs = $this->getProcessingFacility())) {
            $out->{self::FIELD_PROCESSING_FACILITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROCESSING_FACILITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getDivision())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIVISION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIVISION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProductStatus())) {
            $out->{self::FIELD_PRODUCT_STATUS} = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPIRATION_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPIRATION_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCollection())) {
            $out->{self::FIELD_COLLECTION} = $v;
        }
        if (null !== ($v = $this->getStorageTempRequirements())) {
            $out->{self::FIELD_STORAGE_TEMP_REQUIREMENTS} = $v;
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROPERTY}[] = $v;
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