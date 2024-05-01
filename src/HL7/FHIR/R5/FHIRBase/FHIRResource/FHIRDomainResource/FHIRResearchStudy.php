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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus;
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
 * A scientific study of nature that sometimes includes processes involved in
 * health and disease. For example, clinical trials are research studies that
 * involve people. These studies may be related to new ways to screen, prevent,
 * diagnose, and treat disease. They may also study certain outcomes and certain
 * groups of people by looking at data collected in the past or future.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRResearchStudy
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRResearchStudy extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY;

    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_LABEL = 'label';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_PART_OF = 'partOf';
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PRIMARY_PURPOSE_TYPE = 'primaryPurposeType';
    const FIELD_PHASE = 'phase';
    const FIELD_STUDY_DESIGN = 'studyDesign';
    const FIELD_FOCUS = 'focus';
    const FIELD_CONDITION = 'condition';
    const FIELD_KEYWORD = 'keyword';
    const FIELD_REGION = 'region';
    const FIELD_DESCRIPTION_SUMMARY = 'descriptionSummary';
    const FIELD_DESCRIPTION_SUMMARY_EXT = '_descriptionSummary';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_PERIOD = 'period';
    const FIELD_SITE = 'site';
    const FIELD_NOTE = 'note';
    const FIELD_CLASSIFIER = 'classifier';
    const FIELD_ASSOCIATED_PARTY = 'associatedParty';
    const FIELD_PROGRESS_STATUS = 'progressStatus';
    const FIELD_WHY_STOPPED = 'whyStopped';
    const FIELD_RECRUITMENT = 'recruitment';
    const FIELD_COMPARISON_GROUP = 'comparisonGroup';
    const FIELD_OBJECTIVE = 'objective';
    const FIELD_OUTCOME_MEASURE = 'outcomeMeasure';
    const FIELD_RESULT = 'result';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Canonical identifier for this study resource, represented as a globally unique
     * URI.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The business version for the study record.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name for this study (computer friendly).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human readable name of the research study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel[]
     */
    protected null|array $label = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $protocol = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $partOf = [];
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    protected null|array $relatedArtifact = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the ResearchStudy Resource was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ResearchStudy Resource changes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The publication state of the resource (not of the study).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPublicationStatus
     */
    protected null|FHIRPublicationStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study based upon the intent of the study activities. A
     * classification of the intent of the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $primaryPurposeType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The stage in the progression of a therapy from initial experimental use in
     * humans in clinical trials to post-market evaluation.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $phase = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $studyDesign = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $focus = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $condition = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $keyword = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $region = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A brief text for explaining the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $descriptionSummary = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A detailed and human-readable narrative of the study. E.g., study abstract.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $site = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $classifier = [];
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty[]
     */
    protected null|array $associatedParty = [];
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus[]
     */
    protected null|array $progressStatus = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $whyStopped = null;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Target or actual group of participants enrolled in study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment
     */
    protected null|FHIRResearchStudyRecruitment $recruitment = null;
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup[]
     */
    protected null|array $comparisonGroup = [];
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective[]
     */
    protected null|array $objective = [];
    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure[]
     */
    protected null|array $outcomeMeasure = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $result = [];

    /**
     * Validation map for fields in type ResearchStudy
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRResearchStudy Constructor
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
        if (isset($data[self::FIELD_LABEL])) {
            if (is_array($data[self::FIELD_LABEL])) {
                foreach($data[self::FIELD_LABEL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResearchStudyLabel) {
                        $this->addLabel($v);
                    } else {
                        $this->addLabel(new FHIRResearchStudyLabel($v));
                    }
                }
            } elseif ($data[self::FIELD_LABEL] instanceof FHIRResearchStudyLabel) {
                $this->addLabel($data[self::FIELD_LABEL]);
            } else {
                $this->addLabel(new FHIRResearchStudyLabel($data[self::FIELD_LABEL]));
            }
        }
        if (isset($data[self::FIELD_PROTOCOL])) {
            if (is_array($data[self::FIELD_PROTOCOL])) {
                foreach($data[self::FIELD_PROTOCOL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addProtocol($v);
                    } else {
                        $this->addProtocol(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PROTOCOL] instanceof FHIRReference) {
                $this->addProtocol($data[self::FIELD_PROTOCOL]);
            } else {
                $this->addProtocol(new FHIRReference($data[self::FIELD_PROTOCOL]));
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
        if (isset($data[self::FIELD_PRIMARY_PURPOSE_TYPE])) {
            if ($data[self::FIELD_PRIMARY_PURPOSE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPrimaryPurposeType($data[self::FIELD_PRIMARY_PURPOSE_TYPE]);
            } else {
                $this->setPrimaryPurposeType(new FHIRCodeableConcept($data[self::FIELD_PRIMARY_PURPOSE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PHASE])) {
            if ($data[self::FIELD_PHASE] instanceof FHIRCodeableConcept) {
                $this->setPhase($data[self::FIELD_PHASE]);
            } else {
                $this->setPhase(new FHIRCodeableConcept($data[self::FIELD_PHASE]));
            }
        }
        if (isset($data[self::FIELD_STUDY_DESIGN])) {
            if (is_array($data[self::FIELD_STUDY_DESIGN])) {
                foreach($data[self::FIELD_STUDY_DESIGN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addStudyDesign($v);
                    } else {
                        $this->addStudyDesign(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_STUDY_DESIGN] instanceof FHIRCodeableConcept) {
                $this->addStudyDesign($data[self::FIELD_STUDY_DESIGN]);
            } else {
                $this->addStudyDesign(new FHIRCodeableConcept($data[self::FIELD_STUDY_DESIGN]));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            if (is_array($data[self::FIELD_FOCUS])) {
                foreach($data[self::FIELD_FOCUS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addFocus($v);
                    } else {
                        $this->addFocus(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_FOCUS] instanceof FHIRCodeableReference) {
                $this->addFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->addFocus(new FHIRCodeableReference($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONDITION] instanceof FHIRCodeableConcept) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRCodeableConcept($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_KEYWORD])) {
            if (is_array($data[self::FIELD_KEYWORD])) {
                foreach($data[self::FIELD_KEYWORD] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addKeyword($v);
                    } else {
                        $this->addKeyword(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_KEYWORD] instanceof FHIRCodeableConcept) {
                $this->addKeyword($data[self::FIELD_KEYWORD]);
            } else {
                $this->addKeyword(new FHIRCodeableConcept($data[self::FIELD_KEYWORD]));
            }
        }
        if (isset($data[self::FIELD_REGION])) {
            if (is_array($data[self::FIELD_REGION])) {
                foreach($data[self::FIELD_REGION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRegion($v);
                    } else {
                        $this->addRegion(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REGION] instanceof FHIRCodeableConcept) {
                $this->addRegion($data[self::FIELD_REGION]);
            } else {
                $this->addRegion(new FHIRCodeableConcept($data[self::FIELD_REGION]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION_SUMMARY]) || isset($data[self::FIELD_DESCRIPTION_SUMMARY_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION_SUMMARY] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_SUMMARY_EXT]) && is_array($data[self::FIELD_DESCRIPTION_SUMMARY_EXT])) ? $data[self::FIELD_DESCRIPTION_SUMMARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescriptionSummary($value);
                } else if (is_array($value)) {
                    $this->setDescriptionSummary(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescriptionSummary(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescriptionSummary(new FHIRMarkdown($ext));
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
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if (is_array($data[self::FIELD_SITE])) {
                foreach($data[self::FIELD_SITE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSite($v);
                    } else {
                        $this->addSite(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SITE] instanceof FHIRReference) {
                $this->addSite($data[self::FIELD_SITE]);
            } else {
                $this->addSite(new FHIRReference($data[self::FIELD_SITE]));
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
        if (isset($data[self::FIELD_CLASSIFIER])) {
            if (is_array($data[self::FIELD_CLASSIFIER])) {
                foreach($data[self::FIELD_CLASSIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassifier($v);
                    } else {
                        $this->addClassifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFIER] instanceof FHIRCodeableConcept) {
                $this->addClassifier($data[self::FIELD_CLASSIFIER]);
            } else {
                $this->addClassifier(new FHIRCodeableConcept($data[self::FIELD_CLASSIFIER]));
            }
        }
        if (isset($data[self::FIELD_ASSOCIATED_PARTY])) {
            if (is_array($data[self::FIELD_ASSOCIATED_PARTY])) {
                foreach($data[self::FIELD_ASSOCIATED_PARTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResearchStudyAssociatedParty) {
                        $this->addAssociatedParty($v);
                    } else {
                        $this->addAssociatedParty(new FHIRResearchStudyAssociatedParty($v));
                    }
                }
            } elseif ($data[self::FIELD_ASSOCIATED_PARTY] instanceof FHIRResearchStudyAssociatedParty) {
                $this->addAssociatedParty($data[self::FIELD_ASSOCIATED_PARTY]);
            } else {
                $this->addAssociatedParty(new FHIRResearchStudyAssociatedParty($data[self::FIELD_ASSOCIATED_PARTY]));
            }
        }
        if (isset($data[self::FIELD_PROGRESS_STATUS])) {
            if (is_array($data[self::FIELD_PROGRESS_STATUS])) {
                foreach($data[self::FIELD_PROGRESS_STATUS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResearchStudyProgressStatus) {
                        $this->addProgressStatus($v);
                    } else {
                        $this->addProgressStatus(new FHIRResearchStudyProgressStatus($v));
                    }
                }
            } elseif ($data[self::FIELD_PROGRESS_STATUS] instanceof FHIRResearchStudyProgressStatus) {
                $this->addProgressStatus($data[self::FIELD_PROGRESS_STATUS]);
            } else {
                $this->addProgressStatus(new FHIRResearchStudyProgressStatus($data[self::FIELD_PROGRESS_STATUS]));
            }
        }
        if (isset($data[self::FIELD_WHY_STOPPED])) {
            if ($data[self::FIELD_WHY_STOPPED] instanceof FHIRCodeableConcept) {
                $this->setWhyStopped($data[self::FIELD_WHY_STOPPED]);
            } else {
                $this->setWhyStopped(new FHIRCodeableConcept($data[self::FIELD_WHY_STOPPED]));
            }
        }
        if (isset($data[self::FIELD_RECRUITMENT])) {
            if ($data[self::FIELD_RECRUITMENT] instanceof FHIRResearchStudyRecruitment) {
                $this->setRecruitment($data[self::FIELD_RECRUITMENT]);
            } else {
                $this->setRecruitment(new FHIRResearchStudyRecruitment($data[self::FIELD_RECRUITMENT]));
            }
        }
        if (isset($data[self::FIELD_COMPARISON_GROUP])) {
            if (is_array($data[self::FIELD_COMPARISON_GROUP])) {
                foreach($data[self::FIELD_COMPARISON_GROUP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResearchStudyComparisonGroup) {
                        $this->addComparisonGroup($v);
                    } else {
                        $this->addComparisonGroup(new FHIRResearchStudyComparisonGroup($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPARISON_GROUP] instanceof FHIRResearchStudyComparisonGroup) {
                $this->addComparisonGroup($data[self::FIELD_COMPARISON_GROUP]);
            } else {
                $this->addComparisonGroup(new FHIRResearchStudyComparisonGroup($data[self::FIELD_COMPARISON_GROUP]));
            }
        }
        if (isset($data[self::FIELD_OBJECTIVE])) {
            if (is_array($data[self::FIELD_OBJECTIVE])) {
                foreach($data[self::FIELD_OBJECTIVE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResearchStudyObjective) {
                        $this->addObjective($v);
                    } else {
                        $this->addObjective(new FHIRResearchStudyObjective($v));
                    }
                }
            } elseif ($data[self::FIELD_OBJECTIVE] instanceof FHIRResearchStudyObjective) {
                $this->addObjective($data[self::FIELD_OBJECTIVE]);
            } else {
                $this->addObjective(new FHIRResearchStudyObjective($data[self::FIELD_OBJECTIVE]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME_MEASURE])) {
            if (is_array($data[self::FIELD_OUTCOME_MEASURE])) {
                foreach($data[self::FIELD_OUTCOME_MEASURE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResearchStudyOutcomeMeasure) {
                        $this->addOutcomeMeasure($v);
                    } else {
                        $this->addOutcomeMeasure(new FHIRResearchStudyOutcomeMeasure($v));
                    }
                }
            } elseif ($data[self::FIELD_OUTCOME_MEASURE] instanceof FHIRResearchStudyOutcomeMeasure) {
                $this->addOutcomeMeasure($data[self::FIELD_OUTCOME_MEASURE]);
            } else {
                $this->addOutcomeMeasure(new FHIRResearchStudyOutcomeMeasure($data[self::FIELD_OUTCOME_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_RESULT])) {
            if (is_array($data[self::FIELD_RESULT])) {
                foreach($data[self::FIELD_RESULT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addResult($v);
                    } else {
                        $this->addResult(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RESULT] instanceof FHIRReference) {
                $this->addResult($data[self::FIELD_RESULT]);
            } else {
                $this->addResult(new FHIRReference($data[self::FIELD_RESULT]));
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
     * Canonical identifier for this study resource, represented as a globally unique
     * URI.
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
     * Canonical identifier for this study resource, represented as a globally unique
     * URI.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * The business version for the study record.
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
     * The business version for the study record.
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
     * Name for this study (computer friendly).
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
     * Name for this study (computer friendly).
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
     * The human readable name of the research study.
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
     * The human readable name of the research study.
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
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel[]
     */
    public function getLabel(): null|array
    {
        return $this->label;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel $label
     * @return static
     */
    public function addLabel(null|FHIRResearchStudyLabel $label = null): self
    {
        if (null === $label) {
            $label = new FHIRResearchStudyLabel();
        }
        $this->_trackValueAdded();
        $this->label[] = $label;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Additional names for the study.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyLabel[] $label
     * @return static
     */
    public function setLabel(array $label = []): self
    {
        if ([] !== $this->label) {
            $this->_trackValuesRemoved(count($this->label));
            $this->label = [];
        }
        if ([] === $label) {
            return $this;
        }
        foreach($label as $v) {
            if ($v instanceof FHIRResearchStudyLabel) {
                $this->addLabel($v);
            } else {
                $this->addLabel(new FHIRResearchStudyLabel($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getProtocol(): null|array
    {
        return $this->protocol;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $protocol
     * @return static
     */
    public function addProtocol(null|FHIRReference $protocol = null): self
    {
        if (null === $protocol) {
            $protocol = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $protocol
     * @return static
     */
    public function setProtocol(array $protocol = []): self
    {
        if ([] !== $this->protocol) {
            $this->_trackValuesRemoved(count($this->protocol));
            $this->protocol = [];
        }
        if ([] === $protocol) {
            return $this;
        }
        foreach($protocol as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProtocol($v);
            } else {
                $this->addProtocol(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
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
     * A larger research study of which this particular study is a component or step.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $partOf
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
     * A larger research study of which this particular study is a component or step.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $partOf
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
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
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
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
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
     * Citations, references, URLs and other related documents. When using
     * relatedArtifact to share URLs, the relatedArtifact.type will often be set to one
     * of "documentation" or "supported-with" and the URL value will often be in
     * relatedArtifact.document.url but another possible location is
     * relatedArtifact.resource when it is a canonical URL.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the ResearchStudy Resource was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ResearchStudy Resource changes.
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
     * The date (and optionally time) when the ResearchStudy Resource was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ResearchStudy Resource changes.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The publication state of the resource (not of the study).
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
     * The publication state of the resource (not of the study).
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study based upon the intent of the study activities. A
     * classification of the intent of the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPrimaryPurposeType(): null|FHIRCodeableConcept
    {
        return $this->primaryPurposeType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study based upon the intent of the study activities. A
     * classification of the intent of the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $primaryPurposeType
     * @return static
     */
    public function setPrimaryPurposeType(null|FHIRCodeableConcept $primaryPurposeType = null): self
    {
        if (null === $primaryPurposeType) {
            $primaryPurposeType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->primaryPurposeType, $primaryPurposeType);
        $this->primaryPurposeType = $primaryPurposeType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The stage in the progression of a therapy from initial experimental use in
     * humans in clinical trials to post-market evaluation.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPhase(): null|FHIRCodeableConcept
    {
        return $this->phase;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The stage in the progression of a therapy from initial experimental use in
     * humans in clinical trials to post-market evaluation.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $phase
     * @return static
     */
    public function setPhase(null|FHIRCodeableConcept $phase = null): self
    {
        if (null === $phase) {
            $phase = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->phase, $phase);
        $this->phase = $phase;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getStudyDesign(): null|array
    {
        return $this->studyDesign;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $studyDesign
     * @return static
     */
    public function addStudyDesign(null|FHIRCodeableConcept $studyDesign = null): self
    {
        if (null === $studyDesign) {
            $studyDesign = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->studyDesign[] = $studyDesign;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $studyDesign
     * @return static
     */
    public function setStudyDesign(array $studyDesign = []): self
    {
        if ([] !== $this->studyDesign) {
            $this->_trackValuesRemoved(count($this->studyDesign));
            $this->studyDesign = [];
        }
        if ([] === $studyDesign) {
            return $this;
        }
        foreach($studyDesign as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addStudyDesign($v);
            } else {
                $this->addStudyDesign(new FHIRCodeableConcept($v));
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
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getFocus(): null|array
    {
        return $this->focus;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $focus
     * @return static
     */
    public function addFocus(null|FHIRCodeableReference $focus = null): self
    {
        if (null === $focus) {
            $focus = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or
     * interventions that the study is seeking to gain more information about.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $focus
     * @return static
     */
    public function setFocus(array $focus = []): self
    {
        if ([] !== $this->focus) {
            $this->_trackValuesRemoved(count($this->focus));
            $this->focus = [];
        }
        if ([] === $focus) {
            return $this;
        }
        foreach($focus as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addFocus($v);
            } else {
                $this->addFocus(new FHIRCodeableReference($v));
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
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCondition(): null|array
    {
        return $this->condition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $condition
     * @return static
     */
    public function addCondition(null|FHIRCodeableConcept $condition = null): self
    {
        if (null === $condition) {
            $condition = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The condition that is the focus of the study. For example, In a study to examine
     * risk factors for Lupus, might have as an inclusion criterion "healthy
     * volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $condition
     * @return static
     */
    public function setCondition(array $condition = []): self
    {
        if ([] !== $this->condition) {
            $this->_trackValuesRemoved(count($this->condition));
            $this->condition = [];
        }
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRCodeableConcept($v));
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
     * Key terms to aid in searching for or filtering the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getKeyword(): null|array
    {
        return $this->keyword;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $keyword
     * @return static
     */
    public function addKeyword(null|FHIRCodeableConcept $keyword = null): self
    {
        if (null === $keyword) {
            $keyword = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $keyword
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
            if ($v instanceof FHIRCodeableConcept) {
                $this->addKeyword($v);
            } else {
                $this->addKeyword(new FHIRCodeableConcept($v));
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
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRegion(): null|array
    {
        return $this->region;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $region
     * @return static
     */
    public function addRegion(null|FHIRCodeableConcept $region = null): self
    {
        if (null === $region) {
            $region = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->region[] = $region;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A country, state or other area where the study is taking place rather than its
     * precise geographic location or address.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $region
     * @return static
     */
    public function setRegion(array $region = []): self
    {
        if ([] !== $this->region) {
            $this->_trackValuesRemoved(count($this->region));
            $this->region = [];
        }
        if ([] === $region) {
            return $this;
        }
        foreach($region as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRegion($v);
            } else {
                $this->addRegion(new FHIRCodeableConcept($v));
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
     * A brief text for explaining the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescriptionSummary(): null|FHIRMarkdown
    {
        return $this->descriptionSummary;
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
     * A brief text for explaining the study.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $descriptionSummary
     * @return static
     */
    public function setDescriptionSummary(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $descriptionSummary = null): self
    {
        if (null !== $descriptionSummary && !($descriptionSummary instanceof FHIRMarkdown)) {
            $descriptionSummary = new FHIRMarkdown($descriptionSummary);
        }
        $this->_trackValueSet($this->descriptionSummary, $descriptionSummary);
        $this->descriptionSummary = $descriptionSummary;
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
     * A detailed and human-readable narrative of the study. E.g., study abstract.
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
     * A detailed and human-readable narrative of the study. E.g., study abstract.
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSite(): null|array
    {
        return $this->site;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $site
     * @return static
     */
    public function addSite(null|FHIRReference $site = null): self
    {
        if (null === $site) {
            $site = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->site[] = $site;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A facility in which study activities are conducted.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $site
     * @return static
     */
    public function setSite(array $site = []): self
    {
        if ([] !== $this->site) {
            $this->_trackValuesRemoved(count($this->site));
            $this->site = [];
        }
        if ([] === $site) {
            return $this;
        }
        foreach($site as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSite($v);
            } else {
                $this->addSite(new FHIRReference($v));
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
     * Comments made about the study by the performer, subject or other participants.
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
     * Comments made about the study by the performer, subject or other participants.
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
     * Comments made about the study by the performer, subject or other participants.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassifier(): null|array
    {
        return $this->classifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classifier
     * @return static
     */
    public function addClassifier(null|FHIRCodeableConcept $classifier = null): self
    {
        if (null === $classifier) {
            $classifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional grouping mechanism or categorization of a research study. Example:
     * FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal
     * requirement), IRB-exempt, etc. Implementation Note: do not use the classifier
     * element to support existing semantics that are already supported thru explicit
     * elements in the resource.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classifier
     * @return static
     */
    public function setClassifier(array $classifier = []): self
    {
        if ([] !== $this->classifier) {
            $this->_trackValuesRemoved(count($this->classifier));
            $this->classifier = [];
        }
        if ([] === $classifier) {
            return $this;
        }
        foreach($classifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClassifier($v);
            } else {
                $this->addClassifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty[]
     */
    public function getAssociatedParty(): null|array
    {
        return $this->associatedParty;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty $associatedParty
     * @return static
     */
    public function addAssociatedParty(null|FHIRResearchStudyAssociatedParty $associatedParty = null): self
    {
        if (null === $associatedParty) {
            $associatedParty = new FHIRResearchStudyAssociatedParty();
        }
        $this->_trackValueAdded();
        $this->associatedParty[] = $associatedParty;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyAssociatedParty[] $associatedParty
     * @return static
     */
    public function setAssociatedParty(array $associatedParty = []): self
    {
        if ([] !== $this->associatedParty) {
            $this->_trackValuesRemoved(count($this->associatedParty));
            $this->associatedParty = [];
        }
        if ([] === $associatedParty) {
            return $this;
        }
        foreach($associatedParty as $v) {
            if ($v instanceof FHIRResearchStudyAssociatedParty) {
                $this->addAssociatedParty($v);
            } else {
                $this->addAssociatedParty(new FHIRResearchStudyAssociatedParty($v));
            }
        }
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus[]
     */
    public function getProgressStatus(): null|array
    {
        return $this->progressStatus;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus $progressStatus
     * @return static
     */
    public function addProgressStatus(null|FHIRResearchStudyProgressStatus $progressStatus = null): self
    {
        if (null === $progressStatus) {
            $progressStatus = new FHIRResearchStudyProgressStatus();
        }
        $this->_trackValueAdded();
        $this->progressStatus[] = $progressStatus;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Status of study with time for that status.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyProgressStatus[] $progressStatus
     * @return static
     */
    public function setProgressStatus(array $progressStatus = []): self
    {
        if ([] !== $this->progressStatus) {
            $this->_trackValuesRemoved(count($this->progressStatus));
            $this->progressStatus = [];
        }
        if ([] === $progressStatus) {
            return $this;
        }
        foreach($progressStatus as $v) {
            if ($v instanceof FHIRResearchStudyProgressStatus) {
                $this->addProgressStatus($v);
            } else {
                $this->addProgressStatus(new FHIRResearchStudyProgressStatus($v));
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
     * A description and/or code explaining the premature termination of the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getWhyStopped(): null|FHIRCodeableConcept
    {
        return $this->whyStopped;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $whyStopped
     * @return static
     */
    public function setWhyStopped(null|FHIRCodeableConcept $whyStopped = null): self
    {
        if (null === $whyStopped) {
            $whyStopped = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->whyStopped, $whyStopped);
        $this->whyStopped = $whyStopped;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Target or actual group of participants enrolled in study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment
     */
    public function getRecruitment(): null|FHIRResearchStudyRecruitment
    {
        return $this->recruitment;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Target or actual group of participants enrolled in study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment $recruitment
     * @return static
     */
    public function setRecruitment(null|FHIRResearchStudyRecruitment $recruitment = null): self
    {
        if (null === $recruitment) {
            $recruitment = new FHIRResearchStudyRecruitment();
        }
        $this->_trackValueSet($this->recruitment, $recruitment);
        $this->recruitment = $recruitment;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup[]
     */
    public function getComparisonGroup(): null|array
    {
        return $this->comparisonGroup;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup $comparisonGroup
     * @return static
     */
    public function addComparisonGroup(null|FHIRResearchStudyComparisonGroup $comparisonGroup = null): self
    {
        if (null === $comparisonGroup) {
            $comparisonGroup = new FHIRResearchStudyComparisonGroup();
        }
        $this->_trackValueAdded();
        $this->comparisonGroup[] = $comparisonGroup;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * Describes an expected event or sequence of events for one of the subjects of a
     * study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug
     * B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at
     * 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyComparisonGroup[] $comparisonGroup
     * @return static
     */
    public function setComparisonGroup(array $comparisonGroup = []): self
    {
        if ([] !== $this->comparisonGroup) {
            $this->_trackValuesRemoved(count($this->comparisonGroup));
            $this->comparisonGroup = [];
        }
        if ([] === $comparisonGroup) {
            return $this;
        }
        foreach($comparisonGroup as $v) {
            if ($v instanceof FHIRResearchStudyComparisonGroup) {
                $this->addComparisonGroup($v);
            } else {
                $this->addComparisonGroup(new FHIRResearchStudyComparisonGroup($v));
            }
        }
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective[]
     */
    public function getObjective(): null|array
    {
        return $this->objective;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective $objective
     * @return static
     */
    public function addObjective(null|FHIRResearchStudyObjective $objective = null): self
    {
        if (null === $objective) {
            $objective = new FHIRResearchStudyObjective();
        }
        $this->_trackValueAdded();
        $this->objective[] = $objective;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to
     * be answered by the analysis of data collected during the study.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective[] $objective
     * @return static
     */
    public function setObjective(array $objective = []): self
    {
        if ([] !== $this->objective) {
            $this->_trackValuesRemoved(count($this->objective));
            $this->objective = [];
        }
        if ([] === $objective) {
            return $this;
        }
        foreach($objective as $v) {
            if ($v instanceof FHIRResearchStudyObjective) {
                $this->addObjective($v);
            } else {
                $this->addObjective(new FHIRResearchStudyObjective($v));
            }
        }
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure[]
     */
    public function getOutcomeMeasure(): null|array
    {
        return $this->outcomeMeasure;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure $outcomeMeasure
     * @return static
     */
    public function addOutcomeMeasure(null|FHIRResearchStudyOutcomeMeasure $outcomeMeasure = null): self
    {
        if (null === $outcomeMeasure) {
            $outcomeMeasure = new FHIRResearchStudyOutcomeMeasure();
        }
        $this->_trackValueAdded();
        $this->outcomeMeasure[] = $outcomeMeasure;
        return $this;
    }

    /**
     * A scientific study of nature that sometimes includes processes involved in
     * health and disease. For example, clinical trials are research studies that
     * involve people. These studies may be related to new ways to screen, prevent,
     * diagnose, and treat disease. They may also study certain outcomes and certain
     * groups of people by looking at data collected in the past or future.
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a
     * specific measurement or observation used to quantify the effect of experimental
     * variables on the participants in a study, or for observational studies, to
     * describe patterns of diseases or traits or associations with exposures, risk
     * factors or treatment.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyOutcomeMeasure[] $outcomeMeasure
     * @return static
     */
    public function setOutcomeMeasure(array $outcomeMeasure = []): self
    {
        if ([] !== $this->outcomeMeasure) {
            $this->_trackValuesRemoved(count($this->outcomeMeasure));
            $this->outcomeMeasure = [];
        }
        if ([] === $outcomeMeasure) {
            return $this;
        }
        foreach($outcomeMeasure as $v) {
            if ($v instanceof FHIRResearchStudyOutcomeMeasure) {
                $this->addOutcomeMeasure($v);
            } else {
                $this->addOutcomeMeasure(new FHIRResearchStudyOutcomeMeasure($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
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
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $result
     * @return static
     */
    public function addResult(null|FHIRReference $result = null): self
    {
        if (null === $result) {
            $result = new FHIRReference();
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
     * Link to one or more sets of results generated by the study. Could also link to a
     * research registry holding the results such as ClinicalTrials.gov.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $result
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
            if ($v instanceof FHIRReference) {
                $this->addResult($v);
            } else {
                $this->addResult(new FHIRReference($v));
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
        if ([] !== ($vs = $this->getLabel())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LABEL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProtocol())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROTOCOL, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ARTIFACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrimaryPurposeType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIMARY_PURPOSE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPhase())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PHASE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStudyDesign())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STUDY_DESIGN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFocus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FOCUS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getKeyword())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_KEYWORD, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRegion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REGION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescriptionSummary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION_SUMMARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSite())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SITE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getClassifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAssociatedParty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ASSOCIATED_PARTY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProgressStatus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGRESS_STATUS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getWhyStopped())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHY_STOPPED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecruitment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECRUITMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getComparisonGroup())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPARISON_GROUP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getObjective())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OBJECTIVE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOutcomeMeasure())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTCOME_MEASURE, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_URL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTOCOL])) {
            $v = $this->getProtocol();
            foreach($validationRules[self::FIELD_PROTOCOL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_PROTOCOL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTOCOL])) {
                        $errs[self::FIELD_PROTOCOL] = [];
                    }
                    $errs[self::FIELD_PROTOCOL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ARTIFACT])) {
            $v = $this->getRelatedArtifact();
            foreach($validationRules[self::FIELD_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_PURPOSE_TYPE])) {
            $v = $this->getPrimaryPurposeType();
            foreach($validationRules[self::FIELD_PRIMARY_PURPOSE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_PRIMARY_PURPOSE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_PURPOSE_TYPE])) {
                        $errs[self::FIELD_PRIMARY_PURPOSE_TYPE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_PURPOSE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHASE])) {
            $v = $this->getPhase();
            foreach($validationRules[self::FIELD_PHASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_PHASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHASE])) {
                        $errs[self::FIELD_PHASE] = [];
                    }
                    $errs[self::FIELD_PHASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_DESIGN])) {
            $v = $this->getStudyDesign();
            foreach($validationRules[self::FIELD_STUDY_DESIGN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_STUDY_DESIGN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_DESIGN])) {
                        $errs[self::FIELD_STUDY_DESIGN] = [];
                    }
                    $errs[self::FIELD_STUDY_DESIGN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCUS])) {
            $v = $this->getFocus();
            foreach($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_FOCUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS])) {
                        $errs[self::FIELD_FOCUS] = [];
                    }
                    $errs[self::FIELD_FOCUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KEYWORD])) {
            $v = $this->getKeyword();
            foreach($validationRules[self::FIELD_KEYWORD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_KEYWORD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEYWORD])) {
                        $errs[self::FIELD_KEYWORD] = [];
                    }
                    $errs[self::FIELD_KEYWORD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGION])) {
            $v = $this->getRegion();
            foreach($validationRules[self::FIELD_REGION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_REGION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGION])) {
                        $errs[self::FIELD_REGION] = [];
                    }
                    $errs[self::FIELD_REGION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION_SUMMARY])) {
            $v = $this->getDescriptionSummary();
            foreach($validationRules[self::FIELD_DESCRIPTION_SUMMARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_DESCRIPTION_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION_SUMMARY])) {
                        $errs[self::FIELD_DESCRIPTION_SUMMARY] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFIER])) {
            $v = $this->getClassifier();
            foreach($validationRules[self::FIELD_CLASSIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFIER])) {
                        $errs[self::FIELD_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSOCIATED_PARTY])) {
            $v = $this->getAssociatedParty();
            foreach($validationRules[self::FIELD_ASSOCIATED_PARTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_ASSOCIATED_PARTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSOCIATED_PARTY])) {
                        $errs[self::FIELD_ASSOCIATED_PARTY] = [];
                    }
                    $errs[self::FIELD_ASSOCIATED_PARTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGRESS_STATUS])) {
            $v = $this->getProgressStatus();
            foreach($validationRules[self::FIELD_PROGRESS_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_PROGRESS_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGRESS_STATUS])) {
                        $errs[self::FIELD_PROGRESS_STATUS] = [];
                    }
                    $errs[self::FIELD_PROGRESS_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHY_STOPPED])) {
            $v = $this->getWhyStopped();
            foreach($validationRules[self::FIELD_WHY_STOPPED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_WHY_STOPPED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHY_STOPPED])) {
                        $errs[self::FIELD_WHY_STOPPED] = [];
                    }
                    $errs[self::FIELD_WHY_STOPPED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECRUITMENT])) {
            $v = $this->getRecruitment();
            foreach($validationRules[self::FIELD_RECRUITMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_RECRUITMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECRUITMENT])) {
                        $errs[self::FIELD_RECRUITMENT] = [];
                    }
                    $errs[self::FIELD_RECRUITMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARISON_GROUP])) {
            $v = $this->getComparisonGroup();
            foreach($validationRules[self::FIELD_COMPARISON_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_COMPARISON_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARISON_GROUP])) {
                        $errs[self::FIELD_COMPARISON_GROUP] = [];
                    }
                    $errs[self::FIELD_COMPARISON_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OBJECTIVE])) {
            $v = $this->getObjective();
            foreach($validationRules[self::FIELD_OBJECTIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_OBJECTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OBJECTIVE])) {
                        $errs[self::FIELD_OBJECTIVE] = [];
                    }
                    $errs[self::FIELD_OBJECTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME_MEASURE])) {
            $v = $this->getOutcomeMeasure();
            foreach($validationRules[self::FIELD_OUTCOME_MEASURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_OUTCOME_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME_MEASURE])) {
                        $errs[self::FIELD_OUTCOME_MEASURE] = [];
                    }
                    $errs[self::FIELD_OUTCOME_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT])) {
            $v = $this->getResult();
            foreach($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY, self::FIELD_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT])) {
                        $errs[self::FIELD_RESULT] = [];
                    }
                    $errs[self::FIELD_RESULT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy
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
        } else if (!($type instanceof FHIRResearchStudy)) {
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
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TITLE === $n->nodeName) {
                $type->setTitle(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LABEL === $n->nodeName) {
                $type->addLabel(FHIRResearchStudyLabel::xmlUnserialize($n));
            } elseif (self::FIELD_PROTOCOL === $n->nodeName) {
                $type->addProtocol(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PART_OF === $n->nodeName) {
                $type->addPartOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_RELATED_ARTIFACT === $n->nodeName) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_PRIMARY_PURPOSE_TYPE === $n->nodeName) {
                $type->setPrimaryPurposeType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PHASE === $n->nodeName) {
                $type->setPhase(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STUDY_DESIGN === $n->nodeName) {
                $type->addStudyDesign(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FOCUS === $n->nodeName) {
                $type->addFocus(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITION === $n->nodeName) {
                $type->addCondition(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_KEYWORD === $n->nodeName) {
                $type->addKeyword(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REGION === $n->nodeName) {
                $type->addRegion(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION_SUMMARY === $n->nodeName) {
                $type->setDescriptionSummary(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD === $n->nodeName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_SITE === $n->nodeName) {
                $type->addSite(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFIER === $n->nodeName) {
                $type->addClassifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ASSOCIATED_PARTY === $n->nodeName) {
                $type->addAssociatedParty(FHIRResearchStudyAssociatedParty::xmlUnserialize($n));
            } elseif (self::FIELD_PROGRESS_STATUS === $n->nodeName) {
                $type->addProgressStatus(FHIRResearchStudyProgressStatus::xmlUnserialize($n));
            } elseif (self::FIELD_WHY_STOPPED === $n->nodeName) {
                $type->setWhyStopped(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_RECRUITMENT === $n->nodeName) {
                $type->setRecruitment(FHIRResearchStudyRecruitment::xmlUnserialize($n));
            } elseif (self::FIELD_COMPARISON_GROUP === $n->nodeName) {
                $type->addComparisonGroup(FHIRResearchStudyComparisonGroup::xmlUnserialize($n));
            } elseif (self::FIELD_OBJECTIVE === $n->nodeName) {
                $type->addObjective(FHIRResearchStudyObjective::xmlUnserialize($n));
            } elseif (self::FIELD_OUTCOME_MEASURE === $n->nodeName) {
                $type->addOutcomeMeasure(FHIRResearchStudyOutcomeMeasure::xmlUnserialize($n));
            } elseif (self::FIELD_RESULT === $n->nodeName) {
                $type->addResult(FHIRReference::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_DATE);
        if (null !== $n) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION_SUMMARY);
        if (null !== $n) {
            $pt = $type->getDescriptionSummary();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescriptionSummary($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ResearchStudy'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getLabel())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LABEL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProtocol())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROTOCOL);
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
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPrimaryPurposeType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRIMARY_PURPOSE_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPhase())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PHASE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getStudyDesign())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_STUDY_DESIGN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getFocus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FOCUS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONDITION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if ([] !== ($vs = $this->getRegion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REGION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDescriptionSummary())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION_SUMMARY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SITE);
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
        if ([] !== ($vs = $this->getClassifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLASSIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAssociatedParty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ASSOCIATED_PARTY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProgressStatus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROGRESS_STATUS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getWhyStopped())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WHY_STOPPED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRecruitment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RECRUITMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getComparisonGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMPARISON_GROUP);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getObjective())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OBJECTIVE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getOutcomeMeasure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OUTCOME_MEASURE);
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
        if ([] !== ($vs = $this->getLabel())) {
            $out->{self::FIELD_LABEL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LABEL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProtocol())) {
            $out->{self::FIELD_PROTOCOL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROTOCOL}[] = $v;
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
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $out->{self::FIELD_RELATED_ARTIFACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATED_ARTIFACT}[] = $v;
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
        if (null !== ($v = $this->getPrimaryPurposeType())) {
            $out->{self::FIELD_PRIMARY_PURPOSE_TYPE} = $v;
        }
        if (null !== ($v = $this->getPhase())) {
            $out->{self::FIELD_PHASE} = $v;
        }
        if ([] !== ($vs = $this->getStudyDesign())) {
            $out->{self::FIELD_STUDY_DESIGN} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_STUDY_DESIGN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFocus())) {
            $out->{self::FIELD_FOCUS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FOCUS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $out->{self::FIELD_CONDITION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONDITION}[] = $v;
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
        if ([] !== ($vs = $this->getRegion())) {
            $out->{self::FIELD_REGION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REGION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescriptionSummary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION_SUMMARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_SUMMARY_EXT} = $ext;
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
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getSite())) {
            $out->{self::FIELD_SITE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SITE}[] = $v;
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
        if ([] !== ($vs = $this->getClassifier())) {
            $out->{self::FIELD_CLASSIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLASSIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAssociatedParty())) {
            $out->{self::FIELD_ASSOCIATED_PARTY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ASSOCIATED_PARTY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProgressStatus())) {
            $out->{self::FIELD_PROGRESS_STATUS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROGRESS_STATUS}[] = $v;
            }
        }
        if (null !== ($v = $this->getWhyStopped())) {
            $out->{self::FIELD_WHY_STOPPED} = $v;
        }
        if (null !== ($v = $this->getRecruitment())) {
            $out->{self::FIELD_RECRUITMENT} = $v;
        }
        if ([] !== ($vs = $this->getComparisonGroup())) {
            $out->{self::FIELD_COMPARISON_GROUP} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMPARISON_GROUP}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getObjective())) {
            $out->{self::FIELD_OBJECTIVE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OBJECTIVE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOutcomeMeasure())) {
            $out->{self::FIELD_OUTCOME_MEASURE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OUTCOME_MEASURE}[] = $v;
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