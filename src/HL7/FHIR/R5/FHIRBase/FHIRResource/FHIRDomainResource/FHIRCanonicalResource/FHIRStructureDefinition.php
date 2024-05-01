<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFHIRVersion;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRStructureDefinitionKind;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTypeDerivationRule;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCanonicalPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
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
 * A definition of a FHIR structure. This resource is used to describe the
 * underlying resources, data types defined in FHIR, and also for describing
 * extensions and constraints on resources and data types.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRStructureDefinition
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource
 */
class FHIRStructureDefinition extends FHIRCanonicalResource implements PHPFHIRContainedTypeInterface
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION;

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
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
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
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_COPYRIGHT_LABEL = 'copyrightLabel';
    const FIELD_COPYRIGHT_LABEL_EXT = '_copyrightLabel';
    const FIELD_KEYWORD = 'keyword';
    const FIELD_FHIR_VERSION = 'fhirVersion';
    const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    const FIELD_MAPPING = 'mapping';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_ABSTRACT = 'abstract';
    const FIELD_ABSTRACT_EXT = '_abstract';
    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_INVARIANT = 'contextInvariant';
    const FIELD_CONTEXT_INVARIANT_EXT = '_contextInvariant';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_BASE_DEFINITION = 'baseDefinition';
    const FIELD_BASE_DEFINITION_EXT = '_baseDefinition';
    const FIELD_DERIVATION = 'derivation';
    const FIELD_DERIVATION_EXT = '_derivation';
    const FIELD_SNAPSHOT = 'snapshot';
    const FIELD_DIFFERENTIAL = 'differential';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this structure definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this structure definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure definition is stored on different
     * servers.
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
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the structure definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure definition author and is not expected
     * to be globally unique. There is no expectation that versions can be placed in a
     * lexicographical sequence, so authors are encouraged to populate the
     * StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there
     * is no managed version available, authors can consider using ISO date/time syntax
     * (e.g., '2023-01-01').
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
     * A natural language name identifying the structure definition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the structure definition.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this structure definition. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus
     */
    protected null|FHIRPublicationStatus $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this structure definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $experimental = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the structure definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the structure definition changes.
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
     * ongoing maintenance of the structure definition.
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
     * A free text natural language description of the structure definition from a
     * consumer's perspective.
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
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
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
     * A legal or geographic region in which the structure definition is intended to be
     * used.
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
     * Explanation of why this structure definition is needed and why it has been
     * designed as it has.
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
     * A copyright statement relating to the structure definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure definition. The short copyright declaration (e.g. (c) '2015+
     * xyz organization' should be sent in the copyrightLabel element.
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $keyword = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the FHIR specification on which this StructureDefinition is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFHIRVersion
     */
    protected null|FHIRFHIRVersion $fhirVersion = null;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping[]
     */
    protected null|array $mapping = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRStructureDefinitionKind
     */
    protected null|FHIRStructureDefinitionKind $kind = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether structure this definition describes is abstract or not - that is,
     * whether the structure is not intended to be instantiated. For Resources and Data
     * types, abstract types will never be exchanged between systems.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $abstract = null;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext[]
     */
    protected null|array $context = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $contextInvariant = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type this structure describes. If the derivation kind is 'specialization'
     * then this is the master definition for a type, and there is always one of these
     * (a data type, an extension, a resource, including abstract ones). Otherwise the
     * structure definition is a constraint on the stated type (and in this case, the
     * type cannot be an abstract type). References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to
     * http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed
     * in logical models, where they are required.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $type = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that is the base structure from which this type is derived,
     * either by specialization or constraint.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $baseDefinition = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the type relates to the baseDefinition.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTypeDerivationRule
     */
    protected null|FHIRTypeDerivationRule $derivation = null;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A snapshot view is expressed in a standalone form that can be used and
     * interpreted without considering the base StructureDefinition.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    protected null|FHIRStructureDefinitionSnapshot $snapshot = null;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A differential view is expressed relative to the base StructureDefinition - a
     * statement of differences that it applies.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    protected null|FHIRStructureDefinitionDifferential $differential = null;

    /**
     * Validation map for fields in type StructureDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRStructureDefinition Constructor
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
        if (isset($data[self::FIELD_KEYWORD])) {
            if (is_array($data[self::FIELD_KEYWORD])) {
                foreach($data[self::FIELD_KEYWORD] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addKeyword($v);
                    } else {
                        $this->addKeyword(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_KEYWORD] instanceof FHIRCoding) {
                $this->addKeyword($data[self::FIELD_KEYWORD]);
            } else {
                $this->addKeyword(new FHIRCoding($data[self::FIELD_KEYWORD]));
            }
        }
        if (isset($data[self::FIELD_FHIR_VERSION]) || isset($data[self::FIELD_FHIR_VERSION_EXT])) {
            $value = $data[self::FIELD_FHIR_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_FHIR_VERSION_EXT]) && is_array($data[self::FIELD_FHIR_VERSION_EXT])) ? $data[self::FIELD_FHIR_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRVersion) {
                    $this->setFhirVersion($value);
                } else if (is_array($value)) {
                    $this->setFhirVersion(new FHIRFHIRVersion(array_merge($ext, $value)));
                } else {
                    $this->setFhirVersion(new FHIRFHIRVersion([FHIRFHIRVersion::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFhirVersion(new FHIRFHIRVersion($ext));
            }
        }
        if (isset($data[self::FIELD_MAPPING])) {
            if (is_array($data[self::FIELD_MAPPING])) {
                foreach($data[self::FIELD_MAPPING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRStructureDefinitionMapping) {
                        $this->addMapping($v);
                    } else {
                        $this->addMapping(new FHIRStructureDefinitionMapping($v));
                    }
                }
            } elseif ($data[self::FIELD_MAPPING] instanceof FHIRStructureDefinitionMapping) {
                $this->addMapping($data[self::FIELD_MAPPING]);
            } else {
                $this->addMapping(new FHIRStructureDefinitionMapping($data[self::FIELD_MAPPING]));
            }
        }
        if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
            $value = $data[self::FIELD_KIND] ?? null;
            $ext = (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])) ? $data[self::FIELD_KIND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureDefinitionKind) {
                    $this->setKind($value);
                } else if (is_array($value)) {
                    $this->setKind(new FHIRStructureDefinitionKind(array_merge($ext, $value)));
                } else {
                    $this->setKind(new FHIRStructureDefinitionKind([FHIRStructureDefinitionKind::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setKind(new FHIRStructureDefinitionKind($ext));
            }
        }
        if (isset($data[self::FIELD_ABSTRACT]) || isset($data[self::FIELD_ABSTRACT_EXT])) {
            $value = $data[self::FIELD_ABSTRACT] ?? null;
            $ext = (isset($data[self::FIELD_ABSTRACT_EXT]) && is_array($data[self::FIELD_ABSTRACT_EXT])) ? $data[self::FIELD_ABSTRACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAbstract($value);
                } else if (is_array($value)) {
                    $this->setAbstract(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAbstract(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAbstract(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if (is_array($data[self::FIELD_CONTEXT])) {
                foreach($data[self::FIELD_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRStructureDefinitionContext) {
                        $this->addContext($v);
                    } else {
                        $this->addContext(new FHIRStructureDefinitionContext($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTEXT] instanceof FHIRStructureDefinitionContext) {
                $this->addContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->addContext(new FHIRStructureDefinitionContext($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT_INVARIANT]) || isset($data[self::FIELD_CONTEXT_INVARIANT_EXT])) {
            $value = $data[self::FIELD_CONTEXT_INVARIANT] ?? null;
            $ext = (isset($data[self::FIELD_CONTEXT_INVARIANT_EXT]) && is_array($data[self::FIELD_CONTEXT_INVARIANT_EXT])) ? $data[self::FIELD_CONTEXT_INVARIANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addContextInvariant($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addContextInvariant($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addContextInvariant(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addContextInvariant(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addContextInvariant(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addContextInvariant(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addContextInvariant(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_BASE_DEFINITION]) || isset($data[self::FIELD_BASE_DEFINITION_EXT])) {
            $value = $data[self::FIELD_BASE_DEFINITION] ?? null;
            $ext = (isset($data[self::FIELD_BASE_DEFINITION_EXT]) && is_array($data[self::FIELD_BASE_DEFINITION_EXT])) ? $data[self::FIELD_BASE_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setBaseDefinition($value);
                } else if (is_array($value)) {
                    $this->setBaseDefinition(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setBaseDefinition(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBaseDefinition(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_DERIVATION]) || isset($data[self::FIELD_DERIVATION_EXT])) {
            $value = $data[self::FIELD_DERIVATION] ?? null;
            $ext = (isset($data[self::FIELD_DERIVATION_EXT]) && is_array($data[self::FIELD_DERIVATION_EXT])) ? $data[self::FIELD_DERIVATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTypeDerivationRule) {
                    $this->setDerivation($value);
                } else if (is_array($value)) {
                    $this->setDerivation(new FHIRTypeDerivationRule(array_merge($ext, $value)));
                } else {
                    $this->setDerivation(new FHIRTypeDerivationRule([FHIRTypeDerivationRule::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDerivation(new FHIRTypeDerivationRule($ext));
            }
        }
        if (isset($data[self::FIELD_SNAPSHOT])) {
            if ($data[self::FIELD_SNAPSHOT] instanceof FHIRStructureDefinitionSnapshot) {
                $this->setSnapshot($data[self::FIELD_SNAPSHOT]);
            } else {
                $this->setSnapshot(new FHIRStructureDefinitionSnapshot($data[self::FIELD_SNAPSHOT]));
            }
        }
        if (isset($data[self::FIELD_DIFFERENTIAL])) {
            if ($data[self::FIELD_DIFFERENTIAL] instanceof FHIRStructureDefinitionDifferential) {
                $this->setDifferential($data[self::FIELD_DIFFERENTIAL]);
            } else {
                $this->setDifferential(new FHIRStructureDefinitionDifferential($data[self::FIELD_DIFFERENTIAL]));
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
     * An absolute URI that is used to identify this structure definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this structure definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure definition is stored on different
     * servers.
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
     * An absolute URI that is used to identify this structure definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this structure definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure definition is stored on different
     * servers.
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
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * The identifier that is used to identify this version of the structure definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure definition author and is not expected
     * to be globally unique. There is no expectation that versions can be placed in a
     * lexicographical sequence, so authors are encouraged to populate the
     * StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there
     * is no managed version available, authors can consider using ISO date/time syntax
     * (e.g., '2023-01-01').
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
     * The identifier that is used to identify this version of the structure definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure definition author and is not expected
     * to be globally unique. There is no expectation that versions can be placed in a
     * lexicographical sequence, so authors are encouraged to populate the
     * StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there
     * is no managed version available, authors can consider using ISO date/time syntax
     * (e.g., '2023-01-01').
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
     * A natural language name identifying the structure definition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
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
     * A natural language name identifying the structure definition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
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
     * A short, descriptive, user-friendly title for the structure definition.
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
     * A short, descriptive, user-friendly title for the structure definition.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this structure definition. Enables tracking the life-cycle of the
     * content.
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
     * The status of this structure definition. Enables tracking the life-cycle of the
     * content.
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
     * A Boolean value to indicate that this structure definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
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
     * A Boolean value to indicate that this structure definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the structure definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the structure definition changes.
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
     * The date (and optionally time) when the structure definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the structure definition changes.
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
     * ongoing maintenance of the structure definition.
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
     * ongoing maintenance of the structure definition.
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
     * A free text natural language description of the structure definition from a
     * consumer's perspective.
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
     * A free text natural language description of the structure definition from a
     * consumer's perspective.
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
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
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
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
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
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
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
     * A legal or geographic region in which the structure definition is intended to be
     * used.
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
     * A legal or geographic region in which the structure definition is intended to be
     * used.
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
     * A legal or geographic region in which the structure definition is intended to be
     * used.
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
     * Explanation of why this structure definition is needed and why it has been
     * designed as it has.
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
     * Explanation of why this structure definition is needed and why it has been
     * designed as it has.
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
     * A copyright statement relating to the structure definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure definition. The short copyright declaration (e.g. (c) '2015+
     * xyz organization' should be sent in the copyrightLabel element.
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
     * A copyright statement relating to the structure definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure definition. The short copyright declaration (e.g. (c) '2015+
     * xyz organization' should be sent in the copyrightLabel element.
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getKeyword(): null|array
    {
        return $this->keyword;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $keyword
     * @return static
     */
    public function addKeyword(null|FHIRCoding $keyword = null): self
    {
        if (null === $keyword) {
            $keyword = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $keyword
     * @return static
     */
    public function setKeyword(array $keyword = []): self
    {
        if ([] !== $this->keyword) {
            $this->_trackValuesRemoved(count($this->keyword));
            $this->keyword = [];
        }
        if ([] === $keyword) {
            return $this;
        }
        foreach($keyword as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addKeyword($v);
            } else {
                $this->addKeyword(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the FHIR specification on which this StructureDefinition is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFHIRVersion
     */
    public function getFhirVersion(): null|FHIRFHIRVersion
    {
        return $this->fhirVersion;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the FHIR specification on which this StructureDefinition is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @return static
     */
    public function setFhirVersion(null|FHIRFHIRVersion $fhirVersion = null): self
    {
        if (null === $fhirVersion) {
            $fhirVersion = new FHIRFHIRVersion();
        }
        $this->_trackValueSet($this->fhirVersion, $fhirVersion);
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping[]
     */
    public function getMapping(): null|array
    {
        return $this->mapping;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping $mapping
     * @return static
     */
    public function addMapping(null|FHIRStructureDefinitionMapping $mapping = null): self
    {
        if (null === $mapping) {
            $mapping = new FHIRStructureDefinitionMapping();
        }
        $this->_trackValueAdded();
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping[] $mapping
     * @return static
     */
    public function setMapping(array $mapping = []): self
    {
        if ([] !== $this->mapping) {
            $this->_trackValuesRemoved(count($this->mapping));
            $this->mapping = [];
        }
        if ([] === $mapping) {
            return $this;
        }
        foreach($mapping as $v) {
            if ($v instanceof FHIRStructureDefinitionMapping) {
                $this->addMapping($v);
            } else {
                $this->addMapping(new FHIRStructureDefinitionMapping($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRStructureDefinitionKind
     */
    public function getKind(): null|FHIRStructureDefinitionKind
    {
        return $this->kind;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRStructureDefinitionKind $kind
     * @return static
     */
    public function setKind(null|FHIRStructureDefinitionKind $kind = null): self
    {
        if (null === $kind) {
            $kind = new FHIRStructureDefinitionKind();
        }
        $this->_trackValueSet($this->kind, $kind);
        $this->kind = $kind;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether structure this definition describes is abstract or not - that is,
     * whether the structure is not intended to be instantiated. For Resources and Data
     * types, abstract types will never be exchanged between systems.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getAbstract(): null|FHIRBoolean
    {
        return $this->abstract;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether structure this definition describes is abstract or not - that is,
     * whether the structure is not intended to be instantiated. For Resources and Data
     * types, abstract types will never be exchanged between systems.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $abstract
     * @return static
     */
    public function setAbstract(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abstract = null): self
    {
        if (null !== $abstract && !($abstract instanceof FHIRBoolean)) {
            $abstract = new FHIRBoolean($abstract);
        }
        $this->_trackValueSet($this->abstract, $abstract);
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext[]
     */
    public function getContext(): null|array
    {
        return $this->context;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext $context
     * @return static
     */
    public function addContext(null|FHIRStructureDefinitionContext $context = null): self
    {
        if (null === $context) {
            $context = new FHIRStructureDefinitionContext();
        }
        $this->_trackValueAdded();
        $this->context[] = $context;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext[] $context
     * @return static
     */
    public function setContext(array $context = []): self
    {
        if ([] !== $this->context) {
            $this->_trackValuesRemoved(count($this->context));
            $this->context = [];
        }
        if ([] === $context) {
            return $this;
        }
        foreach($context as $v) {
            if ($v instanceof FHIRStructureDefinitionContext) {
                $this->addContext($v);
            } else {
                $this->addContext(new FHIRStructureDefinitionContext($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getContextInvariant(): null|array
    {
        return $this->contextInvariant;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $contextInvariant
     * @return static
     */
    public function addContextInvariant(null|string|FHIRStringPrimitive|FHIRString $contextInvariant = null): self
    {
        if (null !== $contextInvariant && !($contextInvariant instanceof FHIRString)) {
            $contextInvariant = new FHIRString($contextInvariant);
        }
        $this->_trackValueAdded();
        $this->contextInvariant[] = $contextInvariant;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString[] $contextInvariant
     * @return static
     */
    public function setContextInvariant(array $contextInvariant = []): self
    {
        if ([] !== $this->contextInvariant) {
            $this->_trackValuesRemoved(count($this->contextInvariant));
            $this->contextInvariant = [];
        }
        if ([] === $contextInvariant) {
            return $this;
        }
        foreach($contextInvariant as $v) {
            if ($v instanceof FHIRString) {
                $this->addContextInvariant($v);
            } else {
                $this->addContextInvariant(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type this structure describes. If the derivation kind is 'specialization'
     * then this is the master definition for a type, and there is always one of these
     * (a data type, an extension, a resource, including abstract ones). Otherwise the
     * structure definition is a constraint on the stated type (and in this case, the
     * type cannot be an abstract type). References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to
     * http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed
     * in logical models, where they are required.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getType(): null|FHIRUri
    {
        return $this->type;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type this structure describes. If the derivation kind is 'specialization'
     * then this is the master definition for a type, and there is always one of these
     * (a data type, an extension, a resource, including abstract ones). Otherwise the
     * structure definition is a constraint on the stated type (and in this case, the
     * type cannot be an abstract type). References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to
     * http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed
     * in logical models, where they are required.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $type
     * @return static
     */
    public function setType(null|string|FHIRUriPrimitive|FHIRUri $type = null): self
    {
        if (null !== $type && !($type instanceof FHIRUri)) {
            $type = new FHIRUri($type);
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that is the base structure from which this type is derived,
     * either by specialization or constraint.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getBaseDefinition(): null|FHIRCanonical
    {
        return $this->baseDefinition;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that is the base structure from which this type is derived,
     * either by specialization or constraint.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCanonicalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCanonical $baseDefinition
     * @return static
     */
    public function setBaseDefinition(null|string|FHIRCanonicalPrimitive|FHIRCanonical $baseDefinition = null): self
    {
        if (null !== $baseDefinition && !($baseDefinition instanceof FHIRCanonical)) {
            $baseDefinition = new FHIRCanonical($baseDefinition);
        }
        $this->_trackValueSet($this->baseDefinition, $baseDefinition);
        $this->baseDefinition = $baseDefinition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the type relates to the baseDefinition.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTypeDerivationRule
     */
    public function getDerivation(): null|FHIRTypeDerivationRule
    {
        return $this->derivation;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the type relates to the baseDefinition.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTypeDerivationRule $derivation
     * @return static
     */
    public function setDerivation(null|FHIRTypeDerivationRule $derivation = null): self
    {
        if (null === $derivation) {
            $derivation = new FHIRTypeDerivationRule();
        }
        $this->_trackValueSet($this->derivation, $derivation);
        $this->derivation = $derivation;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A snapshot view is expressed in a standalone form that can be used and
     * interpreted without considering the base StructureDefinition.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public function getSnapshot(): null|FHIRStructureDefinitionSnapshot
    {
        return $this->snapshot;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A snapshot view is expressed in a standalone form that can be used and
     * interpreted without considering the base StructureDefinition.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot $snapshot
     * @return static
     */
    public function setSnapshot(null|FHIRStructureDefinitionSnapshot $snapshot = null): self
    {
        if (null === $snapshot) {
            $snapshot = new FHIRStructureDefinitionSnapshot();
        }
        $this->_trackValueSet($this->snapshot, $snapshot);
        $this->snapshot = $snapshot;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A differential view is expressed relative to the base StructureDefinition - a
     * statement of differences that it applies.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public function getDifferential(): null|FHIRStructureDefinitionDifferential
    {
        return $this->differential;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A differential view is expressed relative to the base StructureDefinition - a
     * statement of differences that it applies.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential $differential
     * @return static
     */
    public function setDifferential(null|FHIRStructureDefinitionDifferential $differential = null): self
    {
        if (null === $differential) {
            $differential = new FHIRStructureDefinitionDifferential();
        }
        $this->_trackValueSet($this->differential, $differential);
        $this->differential = $differential;
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
        if ([] !== ($vs = $this->getKeyword())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_KEYWORD, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FHIR_VERSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbstract())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABSTRACT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContextInvariant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTEXT_INVARIANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBaseDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDerivation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DERIVATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSnapshot())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SNAPSHOT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDifferential())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIFFERENTIAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_URL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_VERSION_ALGORITHM_STRING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_VERSION_ALGORITHM_CODING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_PUBLISHER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_JURISDICTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_COPYRIGHT_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT_LABEL])) {
                        $errs[self::FIELD_COPYRIGHT_LABEL] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KEYWORD])) {
            $v = $this->getKeyword();
            foreach($validationRules[self::FIELD_KEYWORD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_KEYWORD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEYWORD])) {
                        $errs[self::FIELD_KEYWORD] = [];
                    }
                    $errs[self::FIELD_KEYWORD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FHIR_VERSION])) {
            $v = $this->getFhirVersion();
            foreach($validationRules[self::FIELD_FHIR_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_FHIR_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FHIR_VERSION])) {
                        $errs[self::FIELD_FHIR_VERSION] = [];
                    }
                    $errs[self::FIELD_FHIR_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAPPING])) {
            $v = $this->getMapping();
            foreach($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_MAPPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAPPING])) {
                        $errs[self::FIELD_MAPPING] = [];
                    }
                    $errs[self::FIELD_MAPPING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABSTRACT])) {
            $v = $this->getAbstract();
            foreach($validationRules[self::FIELD_ABSTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_ABSTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABSTRACT])) {
                        $errs[self::FIELD_ABSTRACT] = [];
                    }
                    $errs[self::FIELD_ABSTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT_INVARIANT])) {
            $v = $this->getContextInvariant();
            foreach($validationRules[self::FIELD_CONTEXT_INVARIANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_CONTEXT_INVARIANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT_INVARIANT])) {
                        $errs[self::FIELD_CONTEXT_INVARIANT] = [];
                    }
                    $errs[self::FIELD_CONTEXT_INVARIANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE_DEFINITION])) {
            $v = $this->getBaseDefinition();
            foreach($validationRules[self::FIELD_BASE_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_BASE_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE_DEFINITION])) {
                        $errs[self::FIELD_BASE_DEFINITION] = [];
                    }
                    $errs[self::FIELD_BASE_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVATION])) {
            $v = $this->getDerivation();
            foreach($validationRules[self::FIELD_DERIVATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_DERIVATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVATION])) {
                        $errs[self::FIELD_DERIVATION] = [];
                    }
                    $errs[self::FIELD_DERIVATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SNAPSHOT])) {
            $v = $this->getSnapshot();
            foreach($validationRules[self::FIELD_SNAPSHOT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_SNAPSHOT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SNAPSHOT])) {
                        $errs[self::FIELD_SNAPSHOT] = [];
                    }
                    $errs[self::FIELD_SNAPSHOT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIFFERENTIAL])) {
            $v = $this->getDifferential();
            foreach($validationRules[self::FIELD_DIFFERENTIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION, self::FIELD_DIFFERENTIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIFFERENTIAL])) {
                        $errs[self::FIELD_DIFFERENTIAL] = [];
                    }
                    $errs[self::FIELD_DIFFERENTIAL][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition
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
        } else if (!($type instanceof FHIRStructureDefinition)) {
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
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_EXPERIMENTAL === $n->nodeName) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n));
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
            } elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COPYRIGHT_LABEL === $n->nodeName) {
                $type->setCopyrightLabel(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_KEYWORD === $n->nodeName) {
                $type->addKeyword(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_FHIR_VERSION === $n->nodeName) {
                $type->setFhirVersion(FHIRFHIRVersion::xmlUnserialize($n));
            } elseif (self::FIELD_MAPPING === $n->nodeName) {
                $type->addMapping(FHIRStructureDefinitionMapping::xmlUnserialize($n));
            } elseif (self::FIELD_KIND === $n->nodeName) {
                $type->setKind(FHIRStructureDefinitionKind::xmlUnserialize($n));
            } elseif (self::FIELD_ABSTRACT === $n->nodeName) {
                $type->setAbstract(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONTEXT === $n->nodeName) {
                $type->addContext(FHIRStructureDefinitionContext::xmlUnserialize($n));
            } elseif (self::FIELD_CONTEXT_INVARIANT === $n->nodeName) {
                $type->addContextInvariant(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_BASE_DEFINITION === $n->nodeName) {
                $type->setBaseDefinition(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_DERIVATION === $n->nodeName) {
                $type->setDerivation(FHIRTypeDerivationRule::xmlUnserialize($n));
            } elseif (self::FIELD_SNAPSHOT === $n->nodeName) {
                $type->setSnapshot(FHIRStructureDefinitionSnapshot::xmlUnserialize($n));
            } elseif (self::FIELD_DIFFERENTIAL === $n->nodeName) {
                $type->setDifferential(FHIRStructureDefinitionDifferential::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_ABSTRACT);
        if (null !== $n) {
            $pt = $type->getAbstract();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAbstract($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONTEXT_INVARIANT);
        if (null !== $n) {
            $type->addContextInvariant($n->nodeValue);
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TYPE);
        if (null !== $n) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BASE_DEFINITION);
        if (null !== $n) {
            $pt = $type->getBaseDefinition();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBaseDefinition($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('StructureDefinition'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getKeyword())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_KEYWORD);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FHIR_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MAPPING);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getKind())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_KIND);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAbstract())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ABSTRACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTEXT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContextInvariant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTEXT_INVARIANT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBaseDefinition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BASE_DEFINITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDerivation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DERIVATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSnapshot())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SNAPSHOT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDifferential())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIFFERENTIAL);
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
        if ([] !== ($vs = $this->getKeyword())) {
            $out->{self::FIELD_KEYWORD} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_KEYWORD}[] = $v;
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FHIR_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRFHIRVersion::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FHIR_VERSION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            $out->{self::FIELD_MAPPING} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MAPPING}[] = $v;
            }
        }
        if (null !== ($v = $this->getKind())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_KIND} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRStructureDefinitionKind::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_KIND_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAbstract())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ABSTRACT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ABSTRACT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTEXT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContextInvariant())) {
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
                $out->{self::FIELD_CONTEXT_INVARIANT} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTEXT_INVARIANT_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBaseDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BASE_DEFINITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BASE_DEFINITION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDerivation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DERIVATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTypeDerivationRule::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DERIVATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSnapshot())) {
            $out->{self::FIELD_SNAPSHOT} = $v;
        }
        if (null !== ($v = $this->getDifferential())) {
            $out->{self::FIELD_DIFFERENTIAL} = $v;
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