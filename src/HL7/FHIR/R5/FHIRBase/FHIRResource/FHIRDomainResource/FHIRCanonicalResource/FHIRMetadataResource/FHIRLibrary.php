<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRChangeTrackingTrait;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRValidationAssertionsTrait;
use HL7\FHIR\R5\PHPFHIRXmlNamespaceTrait;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The Library resource is a general-purpose container for knowledge asset
 * definitions. It can be used to describe and expose existing knowledge assets
 * such as logic libraries and information model descriptions, as well as to
 * describe a collection of knowledge assets.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRLibrary
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource
 */
class FHIRLibrary extends FHIRMetadataResource implements PHPFHIRContainedTypeInterface
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LIBRARY;

    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_VERSION_ALGORITHM_STRING = 'versionAlgorithmString';
    const FIELD_VERSION_ALGORITHM_STRING_EXT = '_versionAlgorithmString';
    const FIELD_VERSION_ALGORITHM_CODING = 'versionAlgorithmCoding';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_SUBTITLE = 'subtitle';
    const FIELD_SUBTITLE_EXT = '_subtitle';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_TYPE = 'type';
    const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_CONTACT = 'contact';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_USAGE = 'usage';
    const FIELD_USAGE_EXT = '_usage';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_COPYRIGHT_LABEL = 'copyrightLabel';
    const FIELD_COPYRIGHT_LABEL_EXT = '_copyrightLabel';
    const FIELD_APPROVAL_DATE = 'approvalDate';
    const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_TOPIC = 'topic';
    const FIELD_AUTHOR = 'author';
    const FIELD_EDITOR = 'editor';
    const FIELD_REVIEWER = 'reviewer';
    const FIELD_ENDORSER = 'endorser';
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_DATA_REQUIREMENT = 'dataRequirement';
    const FIELD_CONTENT = 'content';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this library when it is referenced in a
     * specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which an authoritative instance of this library is (or will be) published. This
     * URL can be the target of a canonical reference. It SHALL remain the same when
     * the library is stored on different servers.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this library when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least
     * one identifier is required for non-experimental active artifacts.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the library when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the library author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence. To provide a version consistent with the Decision
     * Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0).
     * For more information on versioning knowledge assets, refer to the Decision
     * Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $versionAlgorithmString = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $versionAlgorithmCoding = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the library. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the library giving additional information
     * about its content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $subtitle = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this library. Enables tracking the life-cycle of the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus
     */
    protected null|FHIRPublicationStatus $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this library is authored for testing purposes
     * (or education/evaluation/marketing) and is not intended to be used for genuine
     * usage.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $experimental = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of library such as a Logic Library, Model Definition, Asset
     * Collection, or Module Definition.
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
     * A code or group definition that describes the intended subject of the contents
     * of the library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $subjectCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the contents
     * of the library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subjectReference = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the library was last significantly changed.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the library changes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $publisher = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    protected null|array $contact = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the library from a consumer's
     * perspective.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate library instances.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[]
     */
    protected null|array $useContext = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the library is intended to be used.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $jurisdiction = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this library is needed and why it has been designed as it
     * has.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $purpose = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A detailed description of how the library is used from a clinical perspective.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $usage = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the library and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $copyright = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that
     * identifies the copyright holder, effective period, and optionally whether rights
     * are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $copyrightLabel = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $approvalDate = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $lastReviewDate = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the library content was or is planned to be in active
     * use.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $effectivePeriod = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the library. Topics provide a
     * high-level categorization of the library that can be useful for filtering and
     * searching.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $topic = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    protected null|array $author = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    protected null|array $editor = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    protected null|array $reviewer = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    protected null|array $endorser = [];
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    protected null|array $relatedArtifact = [];
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter element defines parameters used by the library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition[]
     */
    protected null|array $parameter = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes a set of data that must be provided in order to be able to
     * successfully perform the computations defined by the library.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement[]
     */
    protected null|array $dataRequirement = [];
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content of the library as an Attachment. The content may be a reference to a
     * url, or may be directly embedded as a base-64 string. Either way, the
     * contentType of the attachment determines how to interpret the content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    protected null|array $content = [];

    /**
     * Validation map for fields in type Library
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRLibrary Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
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
        if (isset($data[self::FIELD_VERSION_ALGORITHM_STRING]) || isset($data[self::FIELD_VERSION_ALGORITHM_STRING_EXT])) {
            $value = $data[self::FIELD_VERSION_ALGORITHM_STRING] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_ALGORITHM_STRING_EXT]) && is_array($data[self::FIELD_VERSION_ALGORITHM_STRING_EXT])) ? $data[self::FIELD_VERSION_ALGORITHM_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersionAlgorithmString($value);
                } else if (is_array($value)) {
                    $this->setVersionAlgorithmString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersionAlgorithmString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersionAlgorithmString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION_ALGORITHM_CODING])) {
            if ($data[self::FIELD_VERSION_ALGORITHM_CODING] instanceof FHIRCoding) {
                $this->setVersionAlgorithmCoding($data[self::FIELD_VERSION_ALGORITHM_CODING]);
            } else {
                $this->setVersionAlgorithmCoding(new FHIRCoding($data[self::FIELD_VERSION_ALGORITHM_CODING]));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUBTITLE]) || isset($data[self::FIELD_SUBTITLE_EXT])) {
            $value = $data[self::FIELD_SUBTITLE] ?? null;
            $ext = (isset($data[self::FIELD_SUBTITLE_EXT]) && is_array($data[self::FIELD_SUBTITLE_EXT])) ? $data[self::FIELD_SUBTITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubtitle($value);
                } else if (is_array($value)) {
                    $this->setSubtitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubtitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubtitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL]) || isset($data[self::FIELD_EXPERIMENTAL_EXT])) {
            $value = $data[self::FIELD_EXPERIMENTAL] ?? null;
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT])) ? $data[self::FIELD_EXPERIMENTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExperimental($value);
                } else if (is_array($value)) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExperimental(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubjectCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]);
            } else {
                $this->setSubjectCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_REFERENCE])) {
            if ($data[self::FIELD_SUBJECT_REFERENCE] instanceof FHIRReference) {
                $this->setSubjectReference($data[self::FIELD_SUBJECT_REFERENCE]);
            } else {
                $this->setSubjectReference(new FHIRReference($data[self::FIELD_SUBJECT_REFERENCE]));
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
        if (isset($data[self::FIELD_PUBLISHER]) || isset($data[self::FIELD_PUBLISHER_EXT])) {
            $value = $data[self::FIELD_PUBLISHER] ?? null;
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT])) ? $data[self::FIELD_PUBLISHER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublisher($value);
                } else if (is_array($value)) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublisher(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
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
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($data[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRUsageContext($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE]) || isset($data[self::FIELD_PURPOSE_EXT])) {
            $value = $data[self::FIELD_PURPOSE] ?? null;
            $ext = (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT])) ? $data[self::FIELD_PURPOSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPurpose($value);
                } else if (is_array($value)) {
                    $this->setPurpose(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPurpose(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_USAGE]) || isset($data[self::FIELD_USAGE_EXT])) {
            $value = $data[self::FIELD_USAGE] ?? null;
            $ext = (isset($data[self::FIELD_USAGE_EXT]) && is_array($data[self::FIELD_USAGE_EXT])) ? $data[self::FIELD_USAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setUsage($value);
                } else if (is_array($value)) {
                    $this->setUsage(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setUsage(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUsage(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT]) || isset($data[self::FIELD_COPYRIGHT_EXT])) {
            $value = $data[self::FIELD_COPYRIGHT] ?? null;
            $ext = (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT])) ? $data[self::FIELD_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCopyright($value);
                } else if (is_array($value)) {
                    $this->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCopyright(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT_LABEL]) || isset($data[self::FIELD_COPYRIGHT_LABEL_EXT])) {
            $value = $data[self::FIELD_COPYRIGHT_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_COPYRIGHT_LABEL_EXT]) && is_array($data[self::FIELD_COPYRIGHT_LABEL_EXT])) ? $data[self::FIELD_COPYRIGHT_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCopyrightLabel($value);
                } else if (is_array($value)) {
                    $this->setCopyrightLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCopyrightLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCopyrightLabel(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_APPROVAL_DATE]) || isset($data[self::FIELD_APPROVAL_DATE_EXT])) {
            $value = $data[self::FIELD_APPROVAL_DATE] ?? null;
            $ext = (isset($data[self::FIELD_APPROVAL_DATE_EXT]) && is_array($data[self::FIELD_APPROVAL_DATE_EXT])) ? $data[self::FIELD_APPROVAL_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setApprovalDate($value);
                } else if (is_array($value)) {
                    $this->setApprovalDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setApprovalDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_REVIEW_DATE]) || isset($data[self::FIELD_LAST_REVIEW_DATE_EXT])) {
            $value = $data[self::FIELD_LAST_REVIEW_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVIEW_DATE_EXT])) ? $data[self::FIELD_LAST_REVIEW_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLastReviewDate($value);
                } else if (is_array($value)) {
                    $this->setLastReviewDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastReviewDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_TOPIC])) {
            if (is_array($data[self::FIELD_TOPIC])) {
                foreach($data[self::FIELD_TOPIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTopic($v);
                    } else {
                        $this->addTopic(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TOPIC] instanceof FHIRCodeableConcept) {
                $this->addTopic($data[self::FIELD_TOPIC]);
            } else {
                $this->addTopic(new FHIRCodeableConcept($data[self::FIELD_TOPIC]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHOR] instanceof FHIRContactDetail) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRContactDetail($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_EDITOR])) {
            if (is_array($data[self::FIELD_EDITOR])) {
                foreach($data[self::FIELD_EDITOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addEditor($v);
                    } else {
                        $this->addEditor(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_EDITOR] instanceof FHIRContactDetail) {
                $this->addEditor($data[self::FIELD_EDITOR]);
            } else {
                $this->addEditor(new FHIRContactDetail($data[self::FIELD_EDITOR]));
            }
        }
        if (isset($data[self::FIELD_REVIEWER])) {
            if (is_array($data[self::FIELD_REVIEWER])) {
                foreach($data[self::FIELD_REVIEWER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addReviewer($v);
                    } else {
                        $this->addReviewer(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_REVIEWER] instanceof FHIRContactDetail) {
                $this->addReviewer($data[self::FIELD_REVIEWER]);
            } else {
                $this->addReviewer(new FHIRContactDetail($data[self::FIELD_REVIEWER]));
            }
        }
        if (isset($data[self::FIELD_ENDORSER])) {
            if (is_array($data[self::FIELD_ENDORSER])) {
                foreach($data[self::FIELD_ENDORSER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addEndorser($v);
                    } else {
                        $this->addEndorser(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_ENDORSER] instanceof FHIRContactDetail) {
                $this->addEndorser($data[self::FIELD_ENDORSER]);
            } else {
                $this->addEndorser(new FHIRContactDetail($data[self::FIELD_ENDORSER]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ARTIFACT])) {
            if (is_array($data[self::FIELD_RELATED_ARTIFACT])) {
                foreach($data[self::FIELD_RELATED_ARTIFACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addRelatedArtifact($v);
                    } else {
                        $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRParameterDefinition) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRParameterDefinition($v));
                    }
                }
            } elseif ($data[self::FIELD_PARAMETER] instanceof FHIRParameterDefinition) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRParameterDefinition($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_DATA_REQUIREMENT])) {
            if (is_array($data[self::FIELD_DATA_REQUIREMENT])) {
                foreach($data[self::FIELD_DATA_REQUIREMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addDataRequirement($v);
                    } else {
                        $this->addDataRequirement(new FHIRDataRequirement($v));
                    }
                }
            } elseif ($data[self::FIELD_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->addDataRequirement($data[self::FIELD_DATA_REQUIREMENT]);
            } else {
                $this->addDataRequirement(new FHIRDataRequirement($data[self::FIELD_DATA_REQUIREMENT]));
            }
        }
        if (isset($data[self::FIELD_CONTENT])) {
            if (is_array($data[self::FIELD_CONTENT])) {
                foreach($data[self::FIELD_CONTENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAttachment) {
                        $this->addContent($v);
                    } else {
                        $this->addContent(new FHIRAttachment($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTENT] instanceof FHIRAttachment) {
                $this->addContent($data[self::FIELD_CONTENT]);
            } else {
                $this->addContent(new FHIRAttachment($data[self::FIELD_CONTENT]));
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this library when it is referenced in a
     * specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which an authoritative instance of this library is (or will be) published. This
     * URL can be the target of a canonical reference. It SHALL remain the same when
     * the library is stored on different servers.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this library when it is referenced in a
     * specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which an authoritative instance of this library is (or will be) published. This
     * URL can be the target of a canonical reference. It SHALL remain the same when
     * the library is stored on different servers.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url = null): self
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        $this->url = $url;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this library when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least
     * one identifier is required for non-experimental active artifacts.
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
     * A formal identifier that is used to identify this library when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least
     * one identifier is required for non-experimental active artifacts.
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
     * A formal identifier that is used to identify this library when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least
     * one identifier is required for non-experimental active artifacts.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the library when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the library author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence. To provide a version consistent with the Decision
     * Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0).
     * For more information on versioning knowledge assets, refer to the Decision
     * Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
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
     * The identifier that is used to identify this version of the library when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the library author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence. To provide a version consistent with the Decision
     * Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0).
     * For more information on versioning knowledge assets, refer to the Decision
     * Support Service specification. Note that a version is required for
     * non-experimental active artifacts.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersionAlgorithmString(): null|FHIRString
    {
        return $this->versionAlgorithmString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $versionAlgorithmString
     * @return static
     */
    public function setVersionAlgorithmString(null|string|FHIRStringPrimitive|FHIRString $versionAlgorithmString = null): self
    {
        if (null !== $versionAlgorithmString && !($versionAlgorithmString instanceof FHIRString)) {
            $versionAlgorithmString = new FHIRString($versionAlgorithmString);
        }
        $this->_trackValueSet($this->versionAlgorithmString, $versionAlgorithmString);
        $this->versionAlgorithmString = $versionAlgorithmString;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getVersionAlgorithmCoding(): null|FHIRCoding
    {
        return $this->versionAlgorithmCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $versionAlgorithmCoding
     * @return static
     */
    public function setVersionAlgorithmCoding(null|FHIRCoding $versionAlgorithmCoding = null): self
    {
        if (null === $versionAlgorithmCoding) {
            $versionAlgorithmCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->versionAlgorithmCoding, $versionAlgorithmCoding);
        $this->versionAlgorithmCoding = $versionAlgorithmCoding;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the library. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the library. This name should be usable as
     * an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the library.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        $this->title = $title;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the library giving additional information
     * about its content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSubtitle(): null|FHIRString
    {
        return $this->subtitle;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the library giving additional information
     * about its content.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $subtitle
     * @return static
     */
    public function setSubtitle(null|string|FHIRStringPrimitive|FHIRString $subtitle = null): self
    {
        if (null !== $subtitle && !($subtitle instanceof FHIRString)) {
            $subtitle = new FHIRString($subtitle);
        }
        $this->_trackValueSet($this->subtitle, $subtitle);
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this library. Enables tracking the life-cycle of the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this library. Enables tracking the life-cycle of the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRPublicationStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this library is authored for testing purposes
     * (or education/evaluation/marketing) and is not intended to be used for genuine
     * usage.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExperimental(): null|FHIRBoolean
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this library is authored for testing purposes
     * (or education/evaluation/marketing) and is not intended to be used for genuine
     * usage.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $experimental
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null): self
    {
        if (null !== $experimental && !($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean($experimental);
        }
        $this->_trackValueSet($this->experimental, $experimental);
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of library such as a Logic Library, Model Definition, Asset
     * Collection, or Module Definition.
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
     * Identifies the type of library such as a Logic Library, Model Definition, Asset
     * Collection, or Module Definition.
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
     * A code or group definition that describes the intended subject of the contents
     * of the library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the contents
     * of the library.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subjectCodeableConcept
     * @return static
     */
    public function setSubjectCodeableConcept(null|FHIRCodeableConcept $subjectCodeableConcept = null): self
    {
        if (null === $subjectCodeableConcept) {
            $subjectCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->subjectCodeableConcept, $subjectCodeableConcept);
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the contents
     * of the library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubjectReference(): null|FHIRReference
    {
        return $this->subjectReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or group definition that describes the intended subject of the contents
     * of the library.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectReference
     * @return static
     */
    public function setSubjectReference(null|FHIRReference $subjectReference = null): self
    {
        if (null === $subjectReference) {
            $subjectReference = new FHIRReference();
        }
        $this->_trackValueSet($this->subjectReference, $subjectReference);
        $this->subjectReference = $subjectReference;
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
     * The date (and optionally time) when the library was last significantly changed.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the library changes.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
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
     * The date (and optionally time) when the library was last significantly changed.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the library changes.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $date
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the library.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher = null): self
    {
        if (null !== $publisher && !($publisher instanceof FHIRString)) {
            $publisher = new FHIRString($publisher);
        }
        $this->_trackValueSet($this->publisher, $publisher);
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(null|FHIRContactDetail $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $contact
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
            if ($v instanceof FHIRContactDetail) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactDetail($v));
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
     * A free text natural language description of the library from a consumer's
     * perspective.
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
     * A free text natural language description of the library from a consumer's
     * perspective.
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
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate library instances.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[]
     */
    public function getUseContext(): null|array
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate library instances.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(null|FHIRUsageContext $useContext = null): self
    {
        if (null === $useContext) {
            $useContext = new FHIRUsageContext();
        }
        $this->_trackValueAdded();
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate library instances.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[] $useContext
     * @return static
     */
    public function setUseContext(array $useContext = []): self
    {
        if ([] !== $this->useContext) {
            $this->_trackValuesRemoved(count($this->useContext));
            $this->useContext = [];
        }
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            if ($v instanceof FHIRUsageContext) {
                $this->addUseContext($v);
            } else {
                $this->addUseContext(new FHIRUsageContext($v));
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
     * A legal or geographic region in which the library is intended to be used.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getJurisdiction(): null|array
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the library is intended to be used.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function addJurisdiction(null|FHIRCodeableConcept $jurisdiction = null): self
    {
        if (null === $jurisdiction) {
            $jurisdiction = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the library is intended to be used.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $jurisdiction
     * @return static
     */
    public function setJurisdiction(array $jurisdiction = []): self
    {
        if ([] !== $this->jurisdiction) {
            $this->_trackValuesRemoved(count($this->jurisdiction));
            $this->jurisdiction = [];
        }
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
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
     * Explanation of why this library is needed and why it has been designed as it
     * has.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getPurpose(): null|FHIRMarkdown
    {
        return $this->purpose;
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
     * Explanation of why this library is needed and why it has been designed as it
     * has.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $purpose
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose = null): self
    {
        if (null !== $purpose && !($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown($purpose);
        }
        $this->_trackValueSet($this->purpose, $purpose);
        $this->purpose = $purpose;
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
     * A detailed description of how the library is used from a clinical perspective.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getUsage(): null|FHIRMarkdown
    {
        return $this->usage;
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
     * A detailed description of how the library is used from a clinical perspective.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $usage
     * @return static
     */
    public function setUsage(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $usage = null): self
    {
        if (null !== $usage && !($usage instanceof FHIRMarkdown)) {
            $usage = new FHIRMarkdown($usage);
        }
        $this->_trackValueSet($this->usage, $usage);
        $this->usage = $usage;
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
     * A copyright statement relating to the library and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getCopyright(): null|FHIRMarkdown
    {
        return $this->copyright;
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
     * A copyright statement relating to the library and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * library.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright = null): self
    {
        if (null !== $copyright && !($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown($copyright);
        }
        $this->_trackValueSet($this->copyright, $copyright);
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that
     * identifies the copyright holder, effective period, and optionally whether rights
     * are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCopyrightLabel(): null|FHIRString
    {
        return $this->copyrightLabel;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that
     * identifies the copyright holder, effective period, and optionally whether rights
     * are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $copyrightLabel
     * @return static
     */
    public function setCopyrightLabel(null|string|FHIRStringPrimitive|FHIRString $copyrightLabel = null): self
    {
        if (null !== $copyrightLabel && !($copyrightLabel instanceof FHIRString)) {
            $copyrightLabel = new FHIRString($copyrightLabel);
        }
        $this->_trackValueSet($this->copyrightLabel, $copyrightLabel);
        $this->copyrightLabel = $copyrightLabel;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getApprovalDate(): null|FHIRDate
    {
        return $this->approvalDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $approvalDate
     * @return static
     */
    public function setApprovalDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate = null): self
    {
        if (null !== $approvalDate && !($approvalDate instanceof FHIRDate)) {
            $approvalDate = new FHIRDate($approvalDate);
        }
        $this->_trackValueSet($this->approvalDate, $approvalDate);
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLastReviewDate(): null|FHIRDate
    {
        return $this->lastReviewDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $lastReviewDate
     * @return static
     */
    public function setLastReviewDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate = null): self
    {
        if (null !== $lastReviewDate && !($lastReviewDate instanceof FHIRDate)) {
            $lastReviewDate = new FHIRDate($lastReviewDate);
        }
        $this->_trackValueSet($this->lastReviewDate, $lastReviewDate);
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the library content was or is planned to be in active
     * use.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getEffectivePeriod(): null|FHIRPeriod
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the library content was or is planned to be in active
     * use.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(null|FHIRPeriod $effectivePeriod = null): self
    {
        if (null === $effectivePeriod) {
            $effectivePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->effectivePeriod, $effectivePeriod);
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the library. Topics provide a
     * high-level categorization of the library that can be useful for filtering and
     * searching.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getTopic(): null|array
    {
        return $this->topic;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the library. Topics provide a
     * high-level categorization of the library that can be useful for filtering and
     * searching.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $topic
     * @return static
     */
    public function addTopic(null|FHIRCodeableConcept $topic = null): self
    {
        if (null === $topic) {
            $topic = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the library. Topics provide a
     * high-level categorization of the library that can be useful for filtering and
     * searching.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $topic
     * @return static
     */
    public function setTopic(array $topic = []): self
    {
        if ([] !== $this->topic) {
            $this->_trackValuesRemoved(count($this->topic));
            $this->topic = [];
        }
        if ([] === $topic) {
            return $this;
        }
        foreach($topic as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addTopic($v);
            } else {
                $this->addTopic(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getAuthor(): null|array
    {
        return $this->author;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $author
     * @return static
     */
    public function addAuthor(null|FHIRContactDetail $author = null): self
    {
        if (null === $author) {
            $author = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->author[] = $author;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $author
     * @return static
     */
    public function setAuthor(array $author = []): self
    {
        if ([] !== $this->author) {
            $this->_trackValuesRemoved(count($this->author));
            $this->author = [];
        }
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getEditor(): null|array
    {
        return $this->editor;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $editor
     * @return static
     */
    public function addEditor(null|FHIRContactDetail $editor = null): self
    {
        if (null === $editor) {
            $editor = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $editor
     * @return static
     */
    public function setEditor(array $editor = []): self
    {
        if ([] !== $this->editor) {
            $this->_trackValuesRemoved(count($this->editor));
            $this->editor = [];
        }
        if ([] === $editor) {
            return $this;
        }
        foreach($editor as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addEditor($v);
            } else {
                $this->addEditor(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getReviewer(): null|array
    {
        return $this->reviewer;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $reviewer
     * @return static
     */
    public function addReviewer(null|FHIRContactDetail $reviewer = null): self
    {
        if (null === $reviewer) {
            $reviewer = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $reviewer
     * @return static
     */
    public function setReviewer(array $reviewer = []): self
    {
        if ([] !== $this->reviewer) {
            $this->_trackValuesRemoved(count($this->reviewer));
            $this->reviewer = [];
        }
        if ([] === $reviewer) {
            return $this;
        }
        foreach($reviewer as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addReviewer($v);
            } else {
                $this->addReviewer(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getEndorser(): null|array
    {
        return $this->endorser;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $endorser
     * @return static
     */
    public function addEndorser(null|FHIRContactDetail $endorser = null): self
    {
        if (null === $endorser) {
            $endorser = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $endorser
     * @return static
     */
    public function setEndorser(array $endorser = []): self
    {
        if ([] !== $this->endorser) {
            $this->_trackValuesRemoved(count($this->endorser));
            $this->endorser = [];
        }
        if ([] === $endorser) {
            return $this;
        }
        foreach($endorser as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addEndorser($v);
            } else {
                $this->addEndorser(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact(): null|array
    {
        return $this->relatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(null|FHIRRelatedArtifact $relatedArtifact = null): self
    {
        if (null === $relatedArtifact) {
            $relatedArtifact = new FHIRRelatedArtifact();
        }
        $this->_trackValueAdded();
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[] $relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(array $relatedArtifact = []): self
    {
        if ([] !== $this->relatedArtifact) {
            $this->_trackValuesRemoved(count($this->relatedArtifact));
            $this->relatedArtifact = [];
        }
        if ([] === $relatedArtifact) {
            return $this;
        }
        foreach($relatedArtifact as $v) {
            if ($v instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($v);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
            }
        }
        return $this;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter element defines parameters used by the library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition[]
     */
    public function getParameter(): null|array
    {
        return $this->parameter;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter element defines parameters used by the library.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition $parameter
     * @return static
     */
    public function addParameter(null|FHIRParameterDefinition $parameter = null): self
    {
        if (null === $parameter) {
            $parameter = new FHIRParameterDefinition();
        }
        $this->_trackValueAdded();
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter element defines parameters used by the library.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = []): self
    {
        if ([] !== $this->parameter) {
            $this->_trackValuesRemoved(count($this->parameter));
            $this->parameter = [];
        }
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRParameterDefinition) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRParameterDefinition($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes a set of data that must be provided in order to be able to
     * successfully perform the computations defined by the library.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement[]
     */
    public function getDataRequirement(): null|array
    {
        return $this->dataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes a set of data that must be provided in order to be able to
     * successfully perform the computations defined by the library.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement $dataRequirement
     * @return static
     */
    public function addDataRequirement(null|FHIRDataRequirement $dataRequirement = null): self
    {
        if (null === $dataRequirement) {
            $dataRequirement = new FHIRDataRequirement();
        }
        $this->_trackValueAdded();
        $this->dataRequirement[] = $dataRequirement;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes a set of data that must be provided in order to be able to
     * successfully perform the computations defined by the library.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement[] $dataRequirement
     * @return static
     */
    public function setDataRequirement(array $dataRequirement = []): self
    {
        if ([] !== $this->dataRequirement) {
            $this->_trackValuesRemoved(count($this->dataRequirement));
            $this->dataRequirement = [];
        }
        if ([] === $dataRequirement) {
            return $this;
        }
        foreach($dataRequirement as $v) {
            if ($v instanceof FHIRDataRequirement) {
                $this->addDataRequirement($v);
            } else {
                $this->addDataRequirement(new FHIRDataRequirement($v));
            }
        }
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content of the library as an Attachment. The content may be a reference to a
     * url, or may be directly embedded as a base-64 string. Either way, the
     * contentType of the attachment determines how to interpret the content.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    public function getContent(): null|array
    {
        return $this->content;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content of the library as an Attachment. The content may be a reference to a
     * url, or may be directly embedded as a base-64 string. Either way, the
     * contentType of the attachment determines how to interpret the content.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $content
     * @return static
     */
    public function addContent(null|FHIRAttachment $content = null): self
    {
        if (null === $content) {
            $content = new FHIRAttachment();
        }
        $this->_trackValueAdded();
        $this->content[] = $content;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content of the library as an Attachment. The content may be a reference to a
     * url, or may be directly embedded as a base-64 string. Either way, the
     * contentType of the attachment determines how to interpret the content.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[] $content
     * @return static
     */
    public function setContent(array $content = []): self
    {
        if ([] !== $this->content) {
            $this->_trackValuesRemoved(count($this->content));
            $this->content = [];
        }
        if ([] === $content) {
            return $this;
        }
        foreach($content as $v) {
            if ($v instanceof FHIRAttachment) {
                $this->addContent($v);
            } else {
                $this->addContent(new FHIRAttachment($v));
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
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersionAlgorithmString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION_ALGORITHM_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersionAlgorithmCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION_ALGORITHM_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubtitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBTITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubjectReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PURPOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUsage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCopyrightLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPROVAL_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_REVIEW_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TOPIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EDITOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REVIEWER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEndorser())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENDORSER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ARTIFACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDataRequirement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATA_REQUIREMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION_ALGORITHM_STRING])) {
            $v = $this->getVersionAlgorithmString();
            foreach($validationRules[self::FIELD_VERSION_ALGORITHM_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_VERSION_ALGORITHM_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_ALGORITHM_STRING])) {
                        $errs[self::FIELD_VERSION_ALGORITHM_STRING] = [];
                    }
                    $errs[self::FIELD_VERSION_ALGORITHM_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION_ALGORITHM_CODING])) {
            $v = $this->getVersionAlgorithmCoding();
            foreach($validationRules[self::FIELD_VERSION_ALGORITHM_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_VERSION_ALGORITHM_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_ALGORITHM_CODING])) {
                        $errs[self::FIELD_VERSION_ALGORITHM_CODING] = [];
                    }
                    $errs[self::FIELD_VERSION_ALGORITHM_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBTITLE])) {
            $v = $this->getSubtitle();
            foreach($validationRules[self::FIELD_SUBTITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_SUBTITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBTITLE])) {
                        $errs[self::FIELD_SUBTITLE] = [];
                    }
                    $errs[self::FIELD_SUBTITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            $v = $this->getSubjectCodeableConcept();
            foreach($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_SUBJECT_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_REFERENCE])) {
            $v = $this->getSubjectReference();
            foreach($validationRules[self::FIELD_SUBJECT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_SUBJECT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_REFERENCE])) {
                        $errs[self::FIELD_SUBJECT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SUBJECT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USAGE])) {
            $v = $this->getUsage();
            foreach($validationRules[self::FIELD_USAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_USAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USAGE])) {
                        $errs[self::FIELD_USAGE] = [];
                    }
                    $errs[self::FIELD_USAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT_LABEL])) {
            $v = $this->getCopyrightLabel();
            foreach($validationRules[self::FIELD_COPYRIGHT_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_COPYRIGHT_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT_LABEL])) {
                        $errs[self::FIELD_COPYRIGHT_LABEL] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPROVAL_DATE])) {
            $v = $this->getApprovalDate();
            foreach($validationRules[self::FIELD_APPROVAL_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_APPROVAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPROVAL_DATE])) {
                        $errs[self::FIELD_APPROVAL_DATE] = [];
                    }
                    $errs[self::FIELD_APPROVAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVIEW_DATE])) {
            $v = $this->getLastReviewDate();
            foreach($validationRules[self::FIELD_LAST_REVIEW_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_LAST_REVIEW_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVIEW_DATE])) {
                        $errs[self::FIELD_LAST_REVIEW_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVIEW_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EDITOR])) {
            $v = $this->getEditor();
            foreach($validationRules[self::FIELD_EDITOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_EDITOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EDITOR])) {
                        $errs[self::FIELD_EDITOR] = [];
                    }
                    $errs[self::FIELD_EDITOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REVIEWER])) {
            $v = $this->getReviewer();
            foreach($validationRules[self::FIELD_REVIEWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_REVIEWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REVIEWER])) {
                        $errs[self::FIELD_REVIEWER] = [];
                    }
                    $errs[self::FIELD_REVIEWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDORSER])) {
            $v = $this->getEndorser();
            foreach($validationRules[self::FIELD_ENDORSER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_ENDORSER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDORSER])) {
                        $errs[self::FIELD_ENDORSER] = [];
                    }
                    $errs[self::FIELD_ENDORSER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ARTIFACT])) {
            $v = $this->getRelatedArtifact();
            foreach($validationRules[self::FIELD_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_REQUIREMENT])) {
            $v = $this->getDataRequirement();
            foreach($validationRules[self::FIELD_DATA_REQUIREMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_DATA_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_REQUIREMENT])) {
                        $errs[self::FIELD_DATA_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_DATA_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIBRARY, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRLibrary $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRLibrary
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
        } else if (!($type instanceof FHIRLibrary)) {
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
            if (self::FIELD_URL === $n->nodeName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->setVersion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION_ALGORITHM_STRING === $n->nodeName) {
                $type->setVersionAlgorithmString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION_ALGORITHM_CODING === $n->nodeName) {
                $type->setVersionAlgorithmCoding(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TITLE === $n->nodeName) {
                $type->setTitle(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SUBTITLE === $n->nodeName) {
                $type->setSubtitle(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_EXPERIMENTAL === $n->nodeName) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT_REFERENCE === $n->nodeName) {
                $type->setSubjectReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_PUBLISHER === $n->nodeName) {
                $type->setPublisher(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CONTACT === $n->nodeName) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_USE_CONTEXT === $n->nodeName) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n));
            } elseif (self::FIELD_JURISDICTION === $n->nodeName) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PURPOSE === $n->nodeName) {
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_USAGE === $n->nodeName) {
                $type->setUsage(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COPYRIGHT_LABEL === $n->nodeName) {
                $type->setCopyrightLabel(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_APPROVAL_DATE === $n->nodeName) {
                $type->setApprovalDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_REVIEW_DATE === $n->nodeName) {
                $type->setLastReviewDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_EFFECTIVE_PERIOD === $n->nodeName) {
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_TOPIC === $n->nodeName) {
                $type->addTopic(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHOR === $n->nodeName) {
                $type->addAuthor(FHIRContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_EDITOR === $n->nodeName) {
                $type->addEditor(FHIRContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_REVIEWER === $n->nodeName) {
                $type->addReviewer(FHIRContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_ENDORSER === $n->nodeName) {
                $type->addEndorser(FHIRContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_RELATED_ARTIFACT === $n->nodeName) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n));
            } elseif (self::FIELD_PARAMETER === $n->nodeName) {
                $type->addParameter(FHIRParameterDefinition::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_REQUIREMENT === $n->nodeName) {
                $type->addDataRequirement(FHIRDataRequirement::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT === $n->nodeName) {
                $type->addContent(FHIRAttachment::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_URL);
        if (null !== $n) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUrl($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_VERSION_ALGORITHM_STRING);
        if (null !== $n) {
            $pt = $type->getVersionAlgorithmString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVersionAlgorithmString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TITLE);
        if (null !== $n) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTitle($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUBTITLE);
        if (null !== $n) {
            $pt = $type->getSubtitle();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSubtitle($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXPERIMENTAL);
        if (null !== $n) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExperimental($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_PUBLISHER);
        if (null !== $n) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPublisher($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_PURPOSE);
        if (null !== $n) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPurpose($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_USAGE);
        if (null !== $n) {
            $pt = $type->getUsage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUsage($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COPYRIGHT);
        if (null !== $n) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCopyright($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COPYRIGHT_LABEL);
        if (null !== $n) {
            $pt = $type->getCopyrightLabel();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCopyrightLabel($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_APPROVAL_DATE);
        if (null !== $n) {
            $pt = $type->getApprovalDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setApprovalDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_REVIEW_DATE);
        if (null !== $n) {
            $pt = $type->getLastReviewDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastReviewDate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Library'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
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
        if (null !== ($v = $this->getVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVersionAlgorithmString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION_ALGORITHM_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVersionAlgorithmCoding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION_ALGORITHM_CODING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTitle())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubtitle())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBTITLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExperimental())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPERIMENTAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPublisher())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLISHER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
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
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_USE_CONTEXT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_JURISDICTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PURPOSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUsage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_USAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCopyright())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COPYRIGHT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCopyrightLabel())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COPYRIGHT_LABEL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_APPROVAL_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_REVIEW_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EFFECTIVE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TOPIC);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_EDITOR);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REVIEWER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getEndorser())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENDORSER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATED_ARTIFACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PARAMETER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDataRequirement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DATA_REQUIREMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
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
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
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
        if (null !== ($v = $this->getVersionAlgorithmString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION_ALGORITHM_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_ALGORITHM_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVersionAlgorithmCoding())) {
            $out->{self::FIELD_VERSION_ALGORITHM_CODING} = $v;
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubtitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUBTITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUBTITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPublicationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPERIMENTAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPERIMENTAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $out->{self::FIELD_SUBJECT_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $out->{self::FIELD_SUBJECT_REFERENCE} = $v;
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
        if (null !== ($v = $this->getPublisher())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLISHER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLISHER_EXT} = $ext;
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
        if ([] !== ($vs = $this->getUseContext())) {
            $out->{self::FIELD_USE_CONTEXT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_USE_CONTEXT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $out->{self::FIELD_JURISDICTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_JURISDICTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PURPOSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PURPOSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUsage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_USAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_USAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COPYRIGHT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COPYRIGHT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCopyrightLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COPYRIGHT_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COPYRIGHT_LABEL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_APPROVAL_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_APPROVAL_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_REVIEW_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_REVIEW_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $out->{self::FIELD_EFFECTIVE_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getTopic())) {
            $out->{self::FIELD_TOPIC} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TOPIC}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AUTHOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            $out->{self::FIELD_EDITOR} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_EDITOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            $out->{self::FIELD_REVIEWER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REVIEWER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEndorser())) {
            $out->{self::FIELD_ENDORSER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENDORSER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $out->{self::FIELD_RELATED_ARTIFACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATED_ARTIFACT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $out->{self::FIELD_PARAMETER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PARAMETER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDataRequirement())) {
            $out->{self::FIELD_DATA_REQUIREMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DATA_REQUIREMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContent())) {
            $out->{self::FIELD_CONTENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTENT}[] = $v;
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