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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
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
 * A medicinal product, being a substance or combination of substances that is
 * intended to treat, prevent or diagnose a disease, or to restore, correct or
 * modify physiological functions by exerting a pharmacological, immunological or
 * metabolic action. This resource is intended to define and detail such products
 * and their properties, for uses other than direct patient care (e.g. regulatory
 * use, or drug catalogs).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductDefinition
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_DOMAIN = 'domain';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM = 'combinedPharmaceuticalDoseForm';
    const FIELD_ROUTE = 'route';
    const FIELD_INDICATION = 'indication';
    const FIELD_INDICATION_EXT = '_indication';
    const FIELD_LEGAL_STATUS_OF_SUPPLY = 'legalStatusOfSupply';
    const FIELD_ADDITIONAL_MONITORING_INDICATOR = 'additionalMonitoringIndicator';
    const FIELD_SPECIAL_MEASURES = 'specialMeasures';
    const FIELD_PEDIATRIC_USE_INDICATOR = 'pediatricUseIndicator';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_MARKETING_STATUS = 'marketingStatus';
    const FIELD_PACKAGED_MEDICINAL_PRODUCT = 'packagedMedicinalProduct';
    const FIELD_COMPRISED_OF = 'comprisedOf';
    const FIELD_INGREDIENT = 'ingredient';
    const FIELD_IMPURITY = 'impurity';
    const FIELD_ATTACHED_DOCUMENT = 'attachedDocument';
    const FIELD_MASTER_FILE = 'masterFile';
    const FIELD_CONTACT = 'contact';
    const FIELD_CLINICAL_TRIAL = 'clinicalTrial';
    const FIELD_CODE = 'code';
    const FIELD_NAME = 'name';
    const FIELD_CROSS_REFERENCE = 'crossReference';
    const FIELD_OPERATION = 'operation';
    const FIELD_CHARACTERISTIC = 'characteristic';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $domain = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $status = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $statusDate = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General description of this product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $route = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $indication = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $legalStatusOfSupply = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $additionalMonitoringIndicator = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $specialMeasures = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $pediatricUseIndicator = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $classification = [];
    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus[]
     */
    protected null|array $marketingStatus = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $packagedMedicinalProduct = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $comprisedOf = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $ingredient = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $impurity = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $attachedDocument = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $masterFile = [];
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[]
     */
    protected null|array $contact = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $clinicalTrial = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $code = [];
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[]
     */
    protected null|array $name = [];
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[]
     */
    protected null|array $crossReference = [];
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[]
     */
    protected null|array $operation = [];
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[]
     */
    protected null|array $characteristic = [];

    /**
     * Validation map for fields in type MedicinalProductDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_NAME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicinalProductDefinition Constructor
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
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_DOMAIN])) {
            if ($data[self::FIELD_DOMAIN] instanceof FHIRCodeableConcept) {
                $this->setDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->setDomain(new FHIRCodeableConcept($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
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
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            if ($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setCombinedPharmaceuticalDoseForm($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]);
            } else {
                $this->setCombinedPharmaceuticalDoseForm(new FHIRCodeableConcept($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if (is_array($data[self::FIELD_ROUTE])) {
                foreach($data[self::FIELD_ROUTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRoute($v);
                    } else {
                        $this->addRoute(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->addRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->addRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_INDICATION]) || isset($data[self::FIELD_INDICATION_EXT])) {
            $value = $data[self::FIELD_INDICATION] ?? null;
            $ext = (isset($data[self::FIELD_INDICATION_EXT]) && is_array($data[self::FIELD_INDICATION_EXT])) ? $data[self::FIELD_INDICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setIndication($value);
                } else if (is_array($value)) {
                    $this->setIndication(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setIndication(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIndication(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            if ($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY] instanceof FHIRCodeableConcept) {
                $this->setLegalStatusOfSupply($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]);
            } else {
                $this->setLegalStatusOfSupply(new FHIRCodeableConcept($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            if ($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setAdditionalMonitoringIndicator($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]);
            } else {
                $this->setAdditionalMonitoringIndicator(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_MEASURES])) {
            if (is_array($data[self::FIELD_SPECIAL_MEASURES])) {
                foreach($data[self::FIELD_SPECIAL_MEASURES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialMeasures($v);
                    } else {
                        $this->addSpecialMeasures(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_MEASURES] instanceof FHIRCodeableConcept) {
                $this->addSpecialMeasures($data[self::FIELD_SPECIAL_MEASURES]);
            } else {
                $this->addSpecialMeasures(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_MEASURES]));
            }
        }
        if (isset($data[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
            if ($data[self::FIELD_PEDIATRIC_USE_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setPediatricUseIndicator($data[self::FIELD_PEDIATRIC_USE_INDICATOR]);
            } else {
                $this->setPediatricUseIndicator(new FHIRCodeableConcept($data[self::FIELD_PEDIATRIC_USE_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRCodeableConcept($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_MARKETING_STATUS])) {
            if (is_array($data[self::FIELD_MARKETING_STATUS])) {
                foreach($data[self::FIELD_MARKETING_STATUS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMarketingStatus) {
                        $this->addMarketingStatus($v);
                    } else {
                        $this->addMarketingStatus(new FHIRMarketingStatus($v));
                    }
                }
            } elseif ($data[self::FIELD_MARKETING_STATUS] instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($data[self::FIELD_MARKETING_STATUS]);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($data[self::FIELD_MARKETING_STATUS]));
            }
        }
        if (isset($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            if (is_array($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                foreach($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPackagedMedicinalProduct($v);
                    } else {
                        $this->addPackagedMedicinalProduct(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] instanceof FHIRCodeableConcept) {
                $this->addPackagedMedicinalProduct($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRCodeableConcept($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_COMPRISED_OF])) {
            if (is_array($data[self::FIELD_COMPRISED_OF])) {
                foreach($data[self::FIELD_COMPRISED_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addComprisedOf($v);
                    } else {
                        $this->addComprisedOf(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPRISED_OF] instanceof FHIRReference) {
                $this->addComprisedOf($data[self::FIELD_COMPRISED_OF]);
            } else {
                $this->addComprisedOf(new FHIRReference($data[self::FIELD_COMPRISED_OF]));
            }
        }
        if (isset($data[self::FIELD_INGREDIENT])) {
            if (is_array($data[self::FIELD_INGREDIENT])) {
                foreach($data[self::FIELD_INGREDIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIngredient($v);
                    } else {
                        $this->addIngredient(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_INGREDIENT] instanceof FHIRCodeableConcept) {
                $this->addIngredient($data[self::FIELD_INGREDIENT]);
            } else {
                $this->addIngredient(new FHIRCodeableConcept($data[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($data[self::FIELD_IMPURITY])) {
            if (is_array($data[self::FIELD_IMPURITY])) {
                foreach($data[self::FIELD_IMPURITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addImpurity($v);
                    } else {
                        $this->addImpurity(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_IMPURITY] instanceof FHIRCodeableReference) {
                $this->addImpurity($data[self::FIELD_IMPURITY]);
            } else {
                $this->addImpurity(new FHIRCodeableReference($data[self::FIELD_IMPURITY]));
            }
        }
        if (isset($data[self::FIELD_ATTACHED_DOCUMENT])) {
            if (is_array($data[self::FIELD_ATTACHED_DOCUMENT])) {
                foreach($data[self::FIELD_ATTACHED_DOCUMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAttachedDocument($v);
                    } else {
                        $this->addAttachedDocument(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ATTACHED_DOCUMENT] instanceof FHIRReference) {
                $this->addAttachedDocument($data[self::FIELD_ATTACHED_DOCUMENT]);
            } else {
                $this->addAttachedDocument(new FHIRReference($data[self::FIELD_ATTACHED_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_MASTER_FILE])) {
            if (is_array($data[self::FIELD_MASTER_FILE])) {
                foreach($data[self::FIELD_MASTER_FILE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addMasterFile($v);
                    } else {
                        $this->addMasterFile(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MASTER_FILE] instanceof FHIRReference) {
                $this->addMasterFile($data[self::FIELD_MASTER_FILE]);
            } else {
                $this->addMasterFile(new FHIRReference($data[self::FIELD_MASTER_FILE]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRMedicinalProductDefinitionContact($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRMedicinalProductDefinitionContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRMedicinalProductDefinitionContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_TRIAL])) {
            if (is_array($data[self::FIELD_CLINICAL_TRIAL])) {
                foreach($data[self::FIELD_CLINICAL_TRIAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addClinicalTrial($v);
                    } else {
                        $this->addClinicalTrial(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CLINICAL_TRIAL] instanceof FHIRReference) {
                $this->addClinicalTrial($data[self::FIELD_CLINICAL_TRIAL]);
            } else {
                $this->addClinicalTrial(new FHIRReference($data[self::FIELD_CLINICAL_TRIAL]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRMedicinalProductDefinitionName($v));
                    }
                }
            } elseif ($data[self::FIELD_NAME] instanceof FHIRMedicinalProductDefinitionName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRMedicinalProductDefinitionName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_CROSS_REFERENCE])) {
            if (is_array($data[self::FIELD_CROSS_REFERENCE])) {
                foreach($data[self::FIELD_CROSS_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionCrossReference) {
                        $this->addCrossReference($v);
                    } else {
                        $this->addCrossReference(new FHIRMedicinalProductDefinitionCrossReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CROSS_REFERENCE] instanceof FHIRMedicinalProductDefinitionCrossReference) {
                $this->addCrossReference($data[self::FIELD_CROSS_REFERENCE]);
            } else {
                $this->addCrossReference(new FHIRMedicinalProductDefinitionCrossReference($data[self::FIELD_CROSS_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionOperation) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRMedicinalProductDefinitionOperation($v));
                    }
                }
            } elseif ($data[self::FIELD_OPERATION] instanceof FHIRMedicinalProductDefinitionOperation) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRMedicinalProductDefinitionOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionCharacteristic) {
                        $this->addCharacteristic($v);
                    } else {
                        $this->addCharacteristic(new FHIRMedicinalProductDefinitionCharacteristic($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARACTERISTIC] instanceof FHIRMedicinalProductDefinitionCharacteristic) {
                $this->addCharacteristic($data[self::FIELD_CHARACTERISTIC]);
            } else {
                $this->addCharacteristic(new FHIRMedicinalProductDefinitionCharacteristic($data[self::FIELD_CHARACTERISTIC]));
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
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
     * If this medicine applies to human or veterinary uses.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDomain(): null|FHIRCodeableConcept
    {
        return $this->domain;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $domain
     * @return static
     */
    public function setDomain(null|FHIRCodeableConcept $domain = null): self
    {
        if (null === $domain) {
            $domain = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->domain, $domain);
        $this->domain = $domain;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version = null): self
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueSet($this->version, $version);
        $this->version = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status = null): self
    {
        if (null === $status) {
            $status = new FHIRCodeableConcept();
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
     * The date at which the given status became applicable.
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
     * The date at which the given status became applicable.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General description of this product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General description of this product.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm(): null|FHIRCodeableConcept
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return static
     */
    public function setCombinedPharmaceuticalDoseForm(null|FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null): self
    {
        if (null === $combinedPharmaceuticalDoseForm) {
            $combinedPharmaceuticalDoseForm = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->combinedPharmaceuticalDoseForm, $combinedPharmaceuticalDoseForm);
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRoute(): null|array
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
     * @return static
     */
    public function addRoute(null|FHIRCodeableConcept $route = null): self
    {
        if (null === $route) {
            $route = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->route[] = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $route
     * @return static
     */
    public function setRoute(array $route = []): self
    {
        if ([] !== $this->route) {
            $this->_trackValuesRemoved(count($this->route));
            $this->route = [];
        }
        if ([] === $route) {
            return $this;
        }
        foreach($route as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRoute($v);
            } else {
                $this->addRoute(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getIndication(): null|FHIRMarkdown
    {
        return $this->indication;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $indication
     * @return static
     */
    public function setIndication(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $indication = null): self
    {
        if (null !== $indication && !($indication instanceof FHIRMarkdown)) {
            $indication = new FHIRMarkdown($indication);
        }
        $this->_trackValueSet($this->indication, $indication);
        $this->indication = $indication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply(): null|FHIRCodeableConcept
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $legalStatusOfSupply
     * @return static
     */
    public function setLegalStatusOfSupply(null|FHIRCodeableConcept $legalStatusOfSupply = null): self
    {
        if (null === $legalStatusOfSupply) {
            $legalStatusOfSupply = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->legalStatusOfSupply, $legalStatusOfSupply);
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator(): null|FHIRCodeableConcept
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return static
     */
    public function setAdditionalMonitoringIndicator(null|FHIRCodeableConcept $additionalMonitoringIndicator = null): self
    {
        if (null === $additionalMonitoringIndicator) {
            $additionalMonitoringIndicator = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->additionalMonitoringIndicator, $additionalMonitoringIndicator);
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSpecialMeasures(): null|array
    {
        return $this->specialMeasures;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $specialMeasures
     * @return static
     */
    public function addSpecialMeasures(null|FHIRCodeableConcept $specialMeasures = null): self
    {
        if (null === $specialMeasures) {
            $specialMeasures = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $specialMeasures
     * @return static
     */
    public function setSpecialMeasures(array $specialMeasures = []): self
    {
        if ([] !== $this->specialMeasures) {
            $this->_trackValuesRemoved(count($this->specialMeasures));
            $this->specialMeasures = [];
        }
        if ([] === $specialMeasures) {
            return $this;
        }
        foreach($specialMeasures as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialMeasures($v);
            } else {
                $this->addSpecialMeasures(new FHIRCodeableConcept($v));
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
     * If authorised for use in children, or infants, neonates etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPediatricUseIndicator(): null|FHIRCodeableConcept
    {
        return $this->pediatricUseIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $pediatricUseIndicator
     * @return static
     */
    public function setPediatricUseIndicator(null|FHIRCodeableConcept $pediatricUseIndicator = null): self
    {
        if (null === $pediatricUseIndicator) {
            $pediatricUseIndicator = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->pediatricUseIndicator, $pediatricUseIndicator);
        $this->pediatricUseIndicator = $pediatricUseIndicator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassification(): null|array
    {
        return $this->classification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classification
     * @return static
     */
    public function addClassification(null|FHIRCodeableConcept $classification = null): self
    {
        if (null === $classification) {
            $classification = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classification
     * @return static
     */
    public function setClassification(array $classification = []): self
    {
        if ([] !== $this->classification) {
            $this->_trackValuesRemoved(count($this->classification));
            $this->classification = [];
        }
        if ([] === $classification) {
            return $this;
        }
        foreach($classification as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClassification($v);
            } else {
                $this->addClassification(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus[]
     */
    public function getMarketingStatus(): null|array
    {
        return $this->marketingStatus;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus $marketingStatus
     * @return static
     */
    public function addMarketingStatus(null|FHIRMarketingStatus $marketingStatus = null): self
    {
        if (null === $marketingStatus) {
            $marketingStatus = new FHIRMarketingStatus();
        }
        $this->_trackValueAdded();
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus[] $marketingStatus
     * @return static
     */
    public function setMarketingStatus(array $marketingStatus = []): self
    {
        if ([] !== $this->marketingStatus) {
            $this->_trackValuesRemoved(count($this->marketingStatus));
            $this->marketingStatus = [];
        }
        if ([] === $marketingStatus) {
            return $this;
        }
        foreach($marketingStatus as $v) {
            if ($v instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($v);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($v));
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
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getPackagedMedicinalProduct(): null|array
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $packagedMedicinalProduct
     * @return static
     */
    public function addPackagedMedicinalProduct(null|FHIRCodeableConcept $packagedMedicinalProduct = null): self
    {
        if (null === $packagedMedicinalProduct) {
            $packagedMedicinalProduct = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $packagedMedicinalProduct
     * @return static
     */
    public function setPackagedMedicinalProduct(array $packagedMedicinalProduct = []): self
    {
        if ([] !== $this->packagedMedicinalProduct) {
            $this->_trackValuesRemoved(count($this->packagedMedicinalProduct));
            $this->packagedMedicinalProduct = [];
        }
        if ([] === $packagedMedicinalProduct) {
            return $this;
        }
        foreach($packagedMedicinalProduct as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPackagedMedicinalProduct($v);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getComprisedOf(): null|array
    {
        return $this->comprisedOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $comprisedOf
     * @return static
     */
    public function addComprisedOf(null|FHIRReference $comprisedOf = null): self
    {
        if (null === $comprisedOf) {
            $comprisedOf = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->comprisedOf[] = $comprisedOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $comprisedOf
     * @return static
     */
    public function setComprisedOf(array $comprisedOf = []): self
    {
        if ([] !== $this->comprisedOf) {
            $this->_trackValuesRemoved(count($this->comprisedOf));
            $this->comprisedOf = [];
        }
        if ([] === $comprisedOf) {
            return $this;
        }
        foreach($comprisedOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addComprisedOf($v);
            } else {
                $this->addComprisedOf(new FHIRReference($v));
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
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getIngredient(): null|array
    {
        return $this->ingredient;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $ingredient
     * @return static
     */
    public function addIngredient(null|FHIRCodeableConcept $ingredient = null): self
    {
        if (null === $ingredient) {
            $ingredient = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $ingredient
     * @return static
     */
    public function setIngredient(array $ingredient = []): self
    {
        if ([] !== $this->ingredient) {
            $this->_trackValuesRemoved(count($this->ingredient));
            $this->ingredient = [];
        }
        if ([] === $ingredient) {
            return $this;
        }
        foreach($ingredient as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addIngredient($v);
            } else {
                $this->addIngredient(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getImpurity(): null|array
    {
        return $this->impurity;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $impurity
     * @return static
     */
    public function addImpurity(null|FHIRCodeableReference $impurity = null): self
    {
        if (null === $impurity) {
            $impurity = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->impurity[] = $impurity;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $impurity
     * @return static
     */
    public function setImpurity(array $impurity = []): self
    {
        if ([] !== $this->impurity) {
            $this->_trackValuesRemoved(count($this->impurity));
            $this->impurity = [];
        }
        if ([] === $impurity) {
            return $this;
        }
        foreach($impurity as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addImpurity($v);
            } else {
                $this->addImpurity(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAttachedDocument(): null|array
    {
        return $this->attachedDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $attachedDocument
     * @return static
     */
    public function addAttachedDocument(null|FHIRReference $attachedDocument = null): self
    {
        if (null === $attachedDocument) {
            $attachedDocument = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $attachedDocument
     * @return static
     */
    public function setAttachedDocument(array $attachedDocument = []): self
    {
        if ([] !== $this->attachedDocument) {
            $this->_trackValuesRemoved(count($this->attachedDocument));
            $this->attachedDocument = [];
        }
        if ([] === $attachedDocument) {
            return $this;
        }
        foreach($attachedDocument as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAttachedDocument($v);
            } else {
                $this->addAttachedDocument(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getMasterFile(): null|array
    {
        return $this->masterFile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $masterFile
     * @return static
     */
    public function addMasterFile(null|FHIRReference $masterFile = null): self
    {
        if (null === $masterFile) {
            $masterFile = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $masterFile
     * @return static
     */
    public function setMasterFile(array $masterFile = []): self
    {
        if ([] !== $this->masterFile) {
            $this->_trackValuesRemoved(count($this->masterFile));
            $this->masterFile = [];
        }
        if ([] === $masterFile) {
            return $this;
        }
        foreach($masterFile as $v) {
            if ($v instanceof FHIRReference) {
                $this->addMasterFile($v);
            } else {
                $this->addMasterFile(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact $contact
     * @return static
     */
    public function addContact(null|FHIRMedicinalProductDefinitionContact $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRMedicinalProductDefinitionContact();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[] $contact
     * @return static
     */
    public function setContact(array $contact = []): self
    {
        if ([] !== $this->contact) {
            $this->_trackValuesRemoved(count($this->contact));
            $this->contact = [];
        }
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRMedicinalProductDefinitionContact($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getClinicalTrial(): null|array
    {
        return $this->clinicalTrial;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $clinicalTrial
     * @return static
     */
    public function addClinicalTrial(null|FHIRReference $clinicalTrial = null): self
    {
        if (null === $clinicalTrial) {
            $clinicalTrial = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $clinicalTrial
     * @return static
     */
    public function setClinicalTrial(array $clinicalTrial = []): self
    {
        if ([] !== $this->clinicalTrial) {
            $this->_trackValuesRemoved(count($this->clinicalTrial));
            $this->clinicalTrial = [];
        }
        if ([] === $clinicalTrial) {
            return $this;
        }
        foreach($clinicalTrial as $v) {
            if ($v instanceof FHIRReference) {
                $this->addClinicalTrial($v);
            } else {
                $this->addClinicalTrial(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $code
     * @return static
     */
    public function addCode(null|FHIRCoding $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = []): self
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[]
     */
    public function getName(): null|array
    {
        return $this->name;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName $name
     * @return static
     */
    public function addName(null|FHIRMedicinalProductDefinitionName $name = null): self
    {
        if (null === $name) {
            $name = new FHIRMedicinalProductDefinitionName();
        }
        $this->_trackValueAdded();
        $this->name[] = $name;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[] $name
     * @return static
     */
    public function setName(array $name = []): self
    {
        if ([] !== $this->name) {
            $this->_trackValuesRemoved(count($this->name));
            $this->name = [];
        }
        if ([] === $name) {
            return $this;
        }
        foreach($name as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionName) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRMedicinalProductDefinitionName($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[]
     */
    public function getCrossReference(): null|array
    {
        return $this->crossReference;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference $crossReference
     * @return static
     */
    public function addCrossReference(null|FHIRMedicinalProductDefinitionCrossReference $crossReference = null): self
    {
        if (null === $crossReference) {
            $crossReference = new FHIRMedicinalProductDefinitionCrossReference();
        }
        $this->_trackValueAdded();
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[] $crossReference
     * @return static
     */
    public function setCrossReference(array $crossReference = []): self
    {
        if ([] !== $this->crossReference) {
            $this->_trackValuesRemoved(count($this->crossReference));
            $this->crossReference = [];
        }
        if ([] === $crossReference) {
            return $this;
        }
        foreach($crossReference as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionCrossReference) {
                $this->addCrossReference($v);
            } else {
                $this->addCrossReference(new FHIRMedicinalProductDefinitionCrossReference($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[]
     */
    public function getOperation(): null|array
    {
        return $this->operation;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation $operation
     * @return static
     */
    public function addOperation(null|FHIRMedicinalProductDefinitionOperation $operation = null): self
    {
        if (null === $operation) {
            $operation = new FHIRMedicinalProductDefinitionOperation();
        }
        $this->_trackValueAdded();
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[] $operation
     * @return static
     */
    public function setOperation(array $operation = []): self
    {
        if ([] !== $this->operation) {
            $this->_trackValuesRemoved(count($this->operation));
            $this->operation = [];
        }
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionOperation) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRMedicinalProductDefinitionOperation($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[]
     */
    public function getCharacteristic(): null|array
    {
        return $this->characteristic;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic $characteristic
     * @return static
     */
    public function addCharacteristic(null|FHIRMedicinalProductDefinitionCharacteristic $characteristic = null): self
    {
        if (null === $characteristic) {
            $characteristic = new FHIRMedicinalProductDefinitionCharacteristic();
        }
        $this->_trackValueAdded();
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[] $characteristic
     * @return static
     */
    public function setCharacteristic(array $characteristic = []): self
    {
        if ([] !== $this->characteristic) {
            $this->_trackValuesRemoved(count($this->characteristic));
            $this->characteristic = [];
        }
        if ([] === $characteristic) {
            return $this;
        }
        foreach($characteristic as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionCharacteristic) {
                $this->addCharacteristic($v);
            } else {
                $this->addCharacteristic(new FHIRMedicinalProductDefinitionCharacteristic($v));
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDomain())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOMAIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRoute())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROUTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIndication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_MEASURES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPediatricUseIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PEDIATRIC_USE_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MARKETING_STATUS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getComprisedOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPRISED_OF, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INGREDIENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImpurity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMPURITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ATTACHED_DOCUMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MASTER_FILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLINICAL_TRIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CROSS_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            $v = $this->getCombinedPharmaceuticalDoseForm();
            foreach($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
                        $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            $v = $this->getLegalStatusOfSupply();
            foreach($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_LEGAL_STATUS_OF_SUPPLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
                        $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = [];
                    }
                    $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            $v = $this->getAdditionalMonitoringIndicator();
            foreach($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_ADDITIONAL_MONITORING_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
                        $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_MEASURES])) {
            $v = $this->getSpecialMeasures();
            foreach($validationRules[self::FIELD_SPECIAL_MEASURES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_SPECIAL_MEASURES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_MEASURES])) {
                        $errs[self::FIELD_SPECIAL_MEASURES] = [];
                    }
                    $errs[self::FIELD_SPECIAL_MEASURES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
            $v = $this->getPediatricUseIndicator();
            foreach($validationRules[self::FIELD_PEDIATRIC_USE_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_PEDIATRIC_USE_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
                        $errs[self::FIELD_PEDIATRIC_USE_INDICATOR] = [];
                    }
                    $errs[self::FIELD_PEDIATRIC_USE_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MARKETING_STATUS])) {
            $v = $this->getMarketingStatus();
            foreach($validationRules[self::FIELD_MARKETING_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_MARKETING_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MARKETING_STATUS])) {
                        $errs[self::FIELD_MARKETING_STATUS] = [];
                    }
                    $errs[self::FIELD_MARKETING_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            $v = $this->getPackagedMedicinalProduct();
            foreach($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                        $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPRISED_OF])) {
            $v = $this->getComprisedOf();
            foreach($validationRules[self::FIELD_COMPRISED_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_COMPRISED_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPRISED_OF])) {
                        $errs[self::FIELD_COMPRISED_OF] = [];
                    }
                    $errs[self::FIELD_COMPRISED_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPURITY])) {
            $v = $this->getImpurity();
            foreach($validationRules[self::FIELD_IMPURITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_IMPURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPURITY])) {
                        $errs[self::FIELD_IMPURITY] = [];
                    }
                    $errs[self::FIELD_IMPURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTACHED_DOCUMENT])) {
            $v = $this->getAttachedDocument();
            foreach($validationRules[self::FIELD_ATTACHED_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_ATTACHED_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTACHED_DOCUMENT])) {
                        $errs[self::FIELD_ATTACHED_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_ATTACHED_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MASTER_FILE])) {
            $v = $this->getMasterFile();
            foreach($validationRules[self::FIELD_MASTER_FILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_MASTER_FILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MASTER_FILE])) {
                        $errs[self::FIELD_MASTER_FILE] = [];
                    }
                    $errs[self::FIELD_MASTER_FILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_TRIAL])) {
            $v = $this->getClinicalTrial();
            foreach($validationRules[self::FIELD_CLINICAL_TRIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CLINICAL_TRIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_TRIAL])) {
                        $errs[self::FIELD_CLINICAL_TRIAL] = [];
                    }
                    $errs[self::FIELD_CLINICAL_TRIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CROSS_REFERENCE])) {
            $v = $this->getCrossReference();
            foreach($validationRules[self::FIELD_CROSS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CROSS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CROSS_REFERENCE])) {
                        $errs[self::FIELD_CROSS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CROSS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC])) {
            $v = $this->getCharacteristic();
            foreach($validationRules[self::FIELD_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC])) {
                        $errs[self::FIELD_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition
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
        } else if (!($type instanceof FHIRMedicinalProductDefinition)) {
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
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DOMAIN === $n->nodeName) {
                $type->setDomain(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->setVersion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS_DATE === $n->nodeName) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM === $n->nodeName) {
                $type->setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ROUTE === $n->nodeName) {
                $type->addRoute(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INDICATION === $n->nodeName) {
                $type->setIndication(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_LEGAL_STATUS_OF_SUPPLY === $n->nodeName) {
                $type->setLegalStatusOfSupply(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ADDITIONAL_MONITORING_INDICATOR === $n->nodeName) {
                $type->setAdditionalMonitoringIndicator(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_MEASURES === $n->nodeName) {
                $type->addSpecialMeasures(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PEDIATRIC_USE_INDICATOR === $n->nodeName) {
                $type->setPediatricUseIndicator(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFICATION === $n->nodeName) {
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MARKETING_STATUS === $n->nodeName) {
                $type->addMarketingStatus(FHIRMarketingStatus::xmlUnserialize($n));
            } elseif (self::FIELD_PACKAGED_MEDICINAL_PRODUCT === $n->nodeName) {
                $type->addPackagedMedicinalProduct(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_COMPRISED_OF === $n->nodeName) {
                $type->addComprisedOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INGREDIENT === $n->nodeName) {
                $type->addIngredient(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_IMPURITY === $n->nodeName) {
                $type->addImpurity(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_ATTACHED_DOCUMENT === $n->nodeName) {
                $type->addAttachedDocument(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MASTER_FILE === $n->nodeName) {
                $type->addMasterFile(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTACT === $n->nodeName) {
                $type->addContact(FHIRMedicinalProductDefinitionContact::xmlUnserialize($n));
            } elseif (self::FIELD_CLINICAL_TRIAL === $n->nodeName) {
                $type->addClinicalTrial(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->addCode(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->addName(FHIRMedicinalProductDefinitionName::xmlUnserialize($n));
            } elseif (self::FIELD_CROSS_REFERENCE === $n->nodeName) {
                $type->addCrossReference(FHIRMedicinalProductDefinitionCrossReference::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATION === $n->nodeName) {
                $type->addOperation(FHIRMedicinalProductDefinitionOperation::xmlUnserialize($n));
            } elseif (self::FIELD_CHARACTERISTIC === $n->nodeName) {
                $type->addCharacteristic(FHIRMedicinalProductDefinitionCharacteristic::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_VERSION);
        if (null !== $n) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVersion($n->nodeValue);
            }
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
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INDICATION);
        if (null !== $n) {
            $pt = $type->getIndication();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIndication($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicinalProductDefinition'), $libxmlOpts);
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
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDomain())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOMAIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
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
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRoute())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ROUTE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getIndication())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INDICATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LEGAL_STATUS_OF_SUPPLY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADDITIONAL_MONITORING_INDICATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIAL_MEASURES);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPediatricUseIndicator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PEDIATRIC_USE_INDICATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLASSIFICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MARKETING_STATUS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PACKAGED_MEDICINAL_PRODUCT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getComprisedOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMPRISED_OF);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INGREDIENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getImpurity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IMPURITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ATTACHED_DOCUMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MASTER_FILE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLINICAL_TRIAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CROSS_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OPERATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CHARACTERISTIC);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getDomain())) {
            $out->{self::FIELD_DOMAIN} = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $out->{self::FIELD_STATUS} = $v;
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
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $out->{self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM} = $v;
        }
        if ([] !== ($vs = $this->getRoute())) {
            $out->{self::FIELD_ROUTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ROUTE}[] = $v;
            }
        }
        if (null !== ($v = $this->getIndication())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INDICATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INDICATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $out->{self::FIELD_LEGAL_STATUS_OF_SUPPLY} = $v;
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $out->{self::FIELD_ADDITIONAL_MONITORING_INDICATOR} = $v;
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            $out->{self::FIELD_SPECIAL_MEASURES} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIAL_MEASURES}[] = $v;
            }
        }
        if (null !== ($v = $this->getPediatricUseIndicator())) {
            $out->{self::FIELD_PEDIATRIC_USE_INDICATOR} = $v;
        }
        if ([] !== ($vs = $this->getClassification())) {
            $out->{self::FIELD_CLASSIFICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLASSIFICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            $out->{self::FIELD_MARKETING_STATUS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MARKETING_STATUS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            $out->{self::FIELD_PACKAGED_MEDICINAL_PRODUCT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PACKAGED_MEDICINAL_PRODUCT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getComprisedOf())) {
            $out->{self::FIELD_COMPRISED_OF} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMPRISED_OF}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            $out->{self::FIELD_INGREDIENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INGREDIENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getImpurity())) {
            $out->{self::FIELD_IMPURITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IMPURITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            $out->{self::FIELD_ATTACHED_DOCUMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ATTACHED_DOCUMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            $out->{self::FIELD_MASTER_FILE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MASTER_FILE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            $out->{self::FIELD_CLINICAL_TRIAL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLINICAL_TRIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $out->{self::FIELD_NAME} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NAME}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            $out->{self::FIELD_CROSS_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CROSS_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $out->{self::FIELD_OPERATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OPERATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $out->{self::FIELD_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CHARACTERISTIC}[] = $v;
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