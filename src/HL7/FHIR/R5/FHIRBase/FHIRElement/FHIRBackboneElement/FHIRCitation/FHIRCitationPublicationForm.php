<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationPublicationForm
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationPublicationForm extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM;

    const FIELD_PUBLISHED_IN = 'publishedIn';
    const FIELD_CITED_MEDIUM = 'citedMedium';
    const FIELD_VOLUME = 'volume';
    const FIELD_VOLUME_EXT = '_volume';
    const FIELD_ISSUE = 'issue';
    const FIELD_ISSUE_EXT = '_issue';
    const FIELD_ARTICLE_DATE = 'articleDate';
    const FIELD_ARTICLE_DATE_EXT = '_articleDate';
    const FIELD_PUBLICATION_DATE_TEXT = 'publicationDateText';
    const FIELD_PUBLICATION_DATE_TEXT_EXT = '_publicationDateText';
    const FIELD_PUBLICATION_DATE_SEASON = 'publicationDateSeason';
    const FIELD_PUBLICATION_DATE_SEASON_EXT = '_publicationDateSeason';
    const FIELD_LAST_REVISION_DATE = 'lastRevisionDate';
    const FIELD_LAST_REVISION_DATE_EXT = '_lastRevisionDate';
    const FIELD_LANGUAGE = 'language';
    const FIELD_ACCESSION_NUMBER = 'accessionNumber';
    const FIELD_ACCESSION_NUMBER_EXT = '_accessionNumber';
    const FIELD_PAGE_STRING = 'pageString';
    const FIELD_PAGE_STRING_EXT = '_pageString';
    const FIELD_FIRST_PAGE = 'firstPage';
    const FIELD_FIRST_PAGE_EXT = '_firstPage';
    const FIELD_LAST_PAGE = 'lastPage';
    const FIELD_LAST_PAGE_EXT = '_lastPage';
    const FIELD_PAGE_COUNT = 'pageCount';
    const FIELD_PAGE_COUNT_EXT = '_pageCount';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn
     */
    protected null|FHIRCitationPublishedIn $publishedIn = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     * The CitedMedium value set has 6 codes. The codes internet, print, and
     * offline-digital-storage are the common codes for a typical publication form,
     * though internet and print are more common for study citations. Three additional
     * codes (each appending one of the primary codes with "-without-issue" are used
     * for situations when a study is published both within an issue (of a periodical
     * release as commonly done for journals) AND is published separately from the
     * issue (as commonly done with early online publication), to represent specific
     * identification of the publication form not associated with the issue.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $citedMedium = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $volume = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal or other collection in which the article is
     * published.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $issue = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $articleDate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date on which the issue of the cited artifact was
     * published.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $publicationDateText = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $publicationDateSeason = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $lastRevisionDate = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $language = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $accessionNumber = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $pageString = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $firstPage = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $lastPage = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the
     * page numbers.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $pageCount = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Copyright notice for the full article or artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $copyright = null;

    /**
     * Validation map for fields in type Citation.PublicationForm
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCitationPublicationForm Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PUBLISHED_IN])) {
            if ($data[self::FIELD_PUBLISHED_IN] instanceof FHIRCitationPublishedIn) {
                $this->setPublishedIn($data[self::FIELD_PUBLISHED_IN]);
            } else {
                $this->setPublishedIn(new FHIRCitationPublishedIn($data[self::FIELD_PUBLISHED_IN]));
            }
        }
        if (isset($data[self::FIELD_CITED_MEDIUM])) {
            if ($data[self::FIELD_CITED_MEDIUM] instanceof FHIRCodeableConcept) {
                $this->setCitedMedium($data[self::FIELD_CITED_MEDIUM]);
            } else {
                $this->setCitedMedium(new FHIRCodeableConcept($data[self::FIELD_CITED_MEDIUM]));
            }
        }
        if (isset($data[self::FIELD_VOLUME]) || isset($data[self::FIELD_VOLUME_EXT])) {
            $value = $data[self::FIELD_VOLUME] ?? null;
            $ext = (isset($data[self::FIELD_VOLUME_EXT]) && is_array($data[self::FIELD_VOLUME_EXT])) ? $data[self::FIELD_VOLUME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVolume($value);
                } else if (is_array($value)) {
                    $this->setVolume(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVolume(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVolume(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ISSUE]) || isset($data[self::FIELD_ISSUE_EXT])) {
            $value = $data[self::FIELD_ISSUE] ?? null;
            $ext = (isset($data[self::FIELD_ISSUE_EXT]) && is_array($data[self::FIELD_ISSUE_EXT])) ? $data[self::FIELD_ISSUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIssue($value);
                } else if (is_array($value)) {
                    $this->setIssue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIssue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIssue(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ARTICLE_DATE]) || isset($data[self::FIELD_ARTICLE_DATE_EXT])) {
            $value = $data[self::FIELD_ARTICLE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_ARTICLE_DATE_EXT]) && is_array($data[self::FIELD_ARTICLE_DATE_EXT])) ? $data[self::FIELD_ARTICLE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setArticleDate($value);
                } else if (is_array($value)) {
                    $this->setArticleDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setArticleDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setArticleDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_PUBLICATION_DATE_TEXT]) || isset($data[self::FIELD_PUBLICATION_DATE_TEXT_EXT])) {
            $value = $data[self::FIELD_PUBLICATION_DATE_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_PUBLICATION_DATE_TEXT_EXT]) && is_array($data[self::FIELD_PUBLICATION_DATE_TEXT_EXT])) ? $data[self::FIELD_PUBLICATION_DATE_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublicationDateText($value);
                } else if (is_array($value)) {
                    $this->setPublicationDateText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublicationDateText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublicationDateText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PUBLICATION_DATE_SEASON]) || isset($data[self::FIELD_PUBLICATION_DATE_SEASON_EXT])) {
            $value = $data[self::FIELD_PUBLICATION_DATE_SEASON] ?? null;
            $ext = (isset($data[self::FIELD_PUBLICATION_DATE_SEASON_EXT]) && is_array($data[self::FIELD_PUBLICATION_DATE_SEASON_EXT])) ? $data[self::FIELD_PUBLICATION_DATE_SEASON_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublicationDateSeason($value);
                } else if (is_array($value)) {
                    $this->setPublicationDateSeason(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublicationDateSeason(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublicationDateSeason(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_REVISION_DATE]) || isset($data[self::FIELD_LAST_REVISION_DATE_EXT])) {
            $value = $data[self::FIELD_LAST_REVISION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_REVISION_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVISION_DATE_EXT])) ? $data[self::FIELD_LAST_REVISION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastRevisionDate($value);
                } else if (is_array($value)) {
                    $this->setLastRevisionDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastRevisionDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastRevisionDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_LANGUAGE])) {
            if (is_array($data[self::FIELD_LANGUAGE])) {
                foreach($data[self::FIELD_LANGUAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLanguage($v);
                    } else {
                        $this->addLanguage(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_LANGUAGE] instanceof FHIRCodeableConcept) {
                $this->addLanguage($data[self::FIELD_LANGUAGE]);
            } else {
                $this->addLanguage(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE]));
            }
        }
        if (isset($data[self::FIELD_ACCESSION_NUMBER]) || isset($data[self::FIELD_ACCESSION_NUMBER_EXT])) {
            $value = $data[self::FIELD_ACCESSION_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_ACCESSION_NUMBER_EXT]) && is_array($data[self::FIELD_ACCESSION_NUMBER_EXT])) ? $data[self::FIELD_ACCESSION_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAccessionNumber($value);
                } else if (is_array($value)) {
                    $this->setAccessionNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAccessionNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAccessionNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PAGE_STRING]) || isset($data[self::FIELD_PAGE_STRING_EXT])) {
            $value = $data[self::FIELD_PAGE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_PAGE_STRING_EXT]) && is_array($data[self::FIELD_PAGE_STRING_EXT])) ? $data[self::FIELD_PAGE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPageString($value);
                } else if (is_array($value)) {
                    $this->setPageString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPageString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPageString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FIRST_PAGE]) || isset($data[self::FIELD_FIRST_PAGE_EXT])) {
            $value = $data[self::FIELD_FIRST_PAGE] ?? null;
            $ext = (isset($data[self::FIELD_FIRST_PAGE_EXT]) && is_array($data[self::FIELD_FIRST_PAGE_EXT])) ? $data[self::FIELD_FIRST_PAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFirstPage($value);
                } else if (is_array($value)) {
                    $this->setFirstPage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFirstPage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFirstPage(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_PAGE]) || isset($data[self::FIELD_LAST_PAGE_EXT])) {
            $value = $data[self::FIELD_LAST_PAGE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_PAGE_EXT]) && is_array($data[self::FIELD_LAST_PAGE_EXT])) ? $data[self::FIELD_LAST_PAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLastPage($value);
                } else if (is_array($value)) {
                    $this->setLastPage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLastPage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastPage(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PAGE_COUNT]) || isset($data[self::FIELD_PAGE_COUNT_EXT])) {
            $value = $data[self::FIELD_PAGE_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_PAGE_COUNT_EXT]) && is_array($data[self::FIELD_PAGE_COUNT_EXT])) ? $data[self::FIELD_PAGE_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPageCount($value);
                } else if (is_array($value)) {
                    $this->setPageCount(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPageCount(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPageCount(new FHIRString($ext));
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
    }


    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn
     */
    public function getPublishedIn(): null|FHIRCitationPublishedIn
    {
        return $this->publishedIn;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn $publishedIn
     * @return static
     */
    public function setPublishedIn(null|FHIRCitationPublishedIn $publishedIn = null): self
    {
        if (null === $publishedIn) {
            $publishedIn = new FHIRCitationPublishedIn();
        }
        $this->_trackValueSet($this->publishedIn, $publishedIn);
        $this->publishedIn = $publishedIn;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     * The CitedMedium value set has 6 codes. The codes internet, print, and
     * offline-digital-storage are the common codes for a typical publication form,
     * though internet and print are more common for study citations. Three additional
     * codes (each appending one of the primary codes with "-without-issue" are used
     * for situations when a study is published both within an issue (of a periodical
     * release as commonly done for journals) AND is published separately from the
     * issue (as commonly done with early online publication), to represent specific
     * identification of the publication form not associated with the issue.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCitedMedium(): null|FHIRCodeableConcept
    {
        return $this->citedMedium;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     * The CitedMedium value set has 6 codes. The codes internet, print, and
     * offline-digital-storage are the common codes for a typical publication form,
     * though internet and print are more common for study citations. Three additional
     * codes (each appending one of the primary codes with "-without-issue" are used
     * for situations when a study is published both within an issue (of a periodical
     * release as commonly done for journals) AND is published separately from the
     * issue (as commonly done with early online publication), to represent specific
     * identification of the publication form not associated with the issue.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $citedMedium
     * @return static
     */
    public function setCitedMedium(null|FHIRCodeableConcept $citedMedium = null): self
    {
        if (null === $citedMedium) {
            $citedMedium = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->citedMedium, $citedMedium);
        $this->citedMedium = $citedMedium;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getVolume(): null|FHIRString
    {
        return $this->volume;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $volume
     * @return static
     */
    public function setVolume(null|string|FHIRStringPrimitive|FHIRString $volume = null): self
    {
        if (null !== $volume && !($volume instanceof FHIRString)) {
            $volume = new FHIRString($volume);
        }
        $this->_trackValueSet($this->volume, $volume);
        $this->volume = $volume;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal or other collection in which the article is
     * published.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getIssue(): null|FHIRString
    {
        return $this->issue;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal or other collection in which the article is
     * published.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $issue
     * @return static
     */
    public function setIssue(null|string|FHIRStringPrimitive|FHIRString $issue = null): self
    {
        if (null !== $issue && !($issue instanceof FHIRString)) {
            $issue = new FHIRString($issue);
        }
        $this->_trackValueSet($this->issue, $issue);
        $this->issue = $issue;
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
     * The date the article was added to the database, or the date the article was
     * released.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getArticleDate(): null|FHIRDateTime
    {
        return $this->articleDate;
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
     * The date the article was added to the database, or the date the article was
     * released.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $articleDate
     * @return static
     */
    public function setArticleDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $articleDate = null): self
    {
        if (null !== $articleDate && !($articleDate instanceof FHIRDateTime)) {
            $articleDate = new FHIRDateTime($articleDate);
        }
        $this->_trackValueSet($this->articleDate, $articleDate);
        $this->articleDate = $articleDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date on which the issue of the cited artifact was
     * published.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPublicationDateText(): null|FHIRString
    {
        return $this->publicationDateText;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date on which the issue of the cited artifact was
     * published.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $publicationDateText
     * @return static
     */
    public function setPublicationDateText(null|string|FHIRStringPrimitive|FHIRString $publicationDateText = null): self
    {
        if (null !== $publicationDateText && !($publicationDateText instanceof FHIRString)) {
            $publicationDateText = new FHIRString($publicationDateText);
        }
        $this->_trackValueSet($this->publicationDateText, $publicationDateText);
        $this->publicationDateText = $publicationDateText;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPublicationDateSeason(): null|FHIRString
    {
        return $this->publicationDateSeason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $publicationDateSeason
     * @return static
     */
    public function setPublicationDateSeason(null|string|FHIRStringPrimitive|FHIRString $publicationDateSeason = null): self
    {
        if (null !== $publicationDateSeason && !($publicationDateSeason instanceof FHIRString)) {
            $publicationDateSeason = new FHIRString($publicationDateSeason);
        }
        $this->_trackValueSet($this->publicationDateSeason, $publicationDateSeason);
        $this->publicationDateSeason = $publicationDateSeason;
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
     * The date the article was last revised or updated in the database.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getLastRevisionDate(): null|FHIRDateTime
    {
        return $this->lastRevisionDate;
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
     * The date the article was last revised or updated in the database.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $lastRevisionDate
     * @return static
     */
    public function setLastRevisionDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastRevisionDate = null): self
    {
        if (null !== $lastRevisionDate && !($lastRevisionDate instanceof FHIRDateTime)) {
            $lastRevisionDate = new FHIRDateTime($lastRevisionDate);
        }
        $this->_trackValueSet($this->lastRevisionDate, $lastRevisionDate);
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getLanguage(): null|array
    {
        return $this->language;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $language
     * @return static
     */
    public function addLanguage(null|FHIRCodeableConcept $language = null): self
    {
        if (null === $language) {
            $language = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->language[] = $language;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $language
     * @return static
     */
    public function setLanguage(array $language = []): self
    {
        if ([] !== $this->language) {
            $this->_trackValuesRemoved(count($this->language));
            $this->language = [];
        }
        if ([] === $language) {
            return $this;
        }
        foreach($language as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addLanguage($v);
            } else {
                $this->addLanguage(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getAccessionNumber(): null|FHIRString
    {
        return $this->accessionNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $accessionNumber
     * @return static
     */
    public function setAccessionNumber(null|string|FHIRStringPrimitive|FHIRString $accessionNumber = null): self
    {
        if (null !== $accessionNumber && !($accessionNumber instanceof FHIRString)) {
            $accessionNumber = new FHIRString($accessionNumber);
        }
        $this->_trackValueSet($this->accessionNumber, $accessionNumber);
        $this->accessionNumber = $accessionNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPageString(): null|FHIRString
    {
        return $this->pageString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $pageString
     * @return static
     */
    public function setPageString(null|string|FHIRStringPrimitive|FHIRString $pageString = null): self
    {
        if (null !== $pageString && !($pageString instanceof FHIRString)) {
            $pageString = new FHIRString($pageString);
        }
        $this->_trackValueSet($this->pageString, $pageString);
        $this->pageString = $pageString;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getFirstPage(): null|FHIRString
    {
        return $this->firstPage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $firstPage
     * @return static
     */
    public function setFirstPage(null|string|FHIRStringPrimitive|FHIRString $firstPage = null): self
    {
        if (null !== $firstPage && !($firstPage instanceof FHIRString)) {
            $firstPage = new FHIRString($firstPage);
        }
        $this->_trackValueSet($this->firstPage, $firstPage);
        $this->firstPage = $firstPage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLastPage(): null|FHIRString
    {
        return $this->lastPage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $lastPage
     * @return static
     */
    public function setLastPage(null|string|FHIRStringPrimitive|FHIRString $lastPage = null): self
    {
        if (null !== $lastPage && !($lastPage instanceof FHIRString)) {
            $lastPage = new FHIRString($lastPage);
        }
        $this->_trackValueSet($this->lastPage, $lastPage);
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the
     * page numbers.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPageCount(): null|FHIRString
    {
        return $this->pageCount;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the
     * page numbers.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $pageCount
     * @return static
     */
    public function setPageCount(null|string|FHIRStringPrimitive|FHIRString $pageCount = null): self
    {
        if (null !== $pageCount && !($pageCount instanceof FHIRString)) {
            $pageCount = new FHIRString($pageCount);
        }
        $this->_trackValueSet($this->pageCount, $pageCount);
        $this->pageCount = $pageCount;
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
     * Copyright notice for the full article or artifact.
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
     * Copyright notice for the full article or artifact.
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
        if (null !== ($v = $this->getPublishedIn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHED_IN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCitedMedium())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITED_MEDIUM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVolume())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VOLUME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getArticleDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ARTICLE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublicationDateText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLICATION_DATE_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublicationDateSeason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLICATION_DATE_SEASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastRevisionDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_REVISION_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LANGUAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAccessionNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCESSION_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPageString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAGE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFirstPage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIRST_PAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastPage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_PAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPageCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAGE_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHED_IN])) {
            $v = $this->getPublishedIn();
            foreach($validationRules[self::FIELD_PUBLISHED_IN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PUBLISHED_IN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHED_IN])) {
                        $errs[self::FIELD_PUBLISHED_IN] = [];
                    }
                    $errs[self::FIELD_PUBLISHED_IN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITED_MEDIUM])) {
            $v = $this->getCitedMedium();
            foreach($validationRules[self::FIELD_CITED_MEDIUM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_CITED_MEDIUM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITED_MEDIUM])) {
                        $errs[self::FIELD_CITED_MEDIUM] = [];
                    }
                    $errs[self::FIELD_CITED_MEDIUM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VOLUME])) {
            $v = $this->getVolume();
            foreach($validationRules[self::FIELD_VOLUME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_VOLUME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VOLUME])) {
                        $errs[self::FIELD_VOLUME] = [];
                    }
                    $errs[self::FIELD_VOLUME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUE])) {
            $v = $this->getIssue();
            foreach($validationRules[self::FIELD_ISSUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_ISSUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUE])) {
                        $errs[self::FIELD_ISSUE] = [];
                    }
                    $errs[self::FIELD_ISSUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ARTICLE_DATE])) {
            $v = $this->getArticleDate();
            foreach($validationRules[self::FIELD_ARTICLE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_ARTICLE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ARTICLE_DATE])) {
                        $errs[self::FIELD_ARTICLE_DATE] = [];
                    }
                    $errs[self::FIELD_ARTICLE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_DATE_TEXT])) {
            $v = $this->getPublicationDateText();
            foreach($validationRules[self::FIELD_PUBLICATION_DATE_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PUBLICATION_DATE_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_DATE_TEXT])) {
                        $errs[self::FIELD_PUBLICATION_DATE_TEXT] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_DATE_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_DATE_SEASON])) {
            $v = $this->getPublicationDateSeason();
            foreach($validationRules[self::FIELD_PUBLICATION_DATE_SEASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PUBLICATION_DATE_SEASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_DATE_SEASON])) {
                        $errs[self::FIELD_PUBLICATION_DATE_SEASON] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_DATE_SEASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVISION_DATE])) {
            $v = $this->getLastRevisionDate();
            foreach($validationRules[self::FIELD_LAST_REVISION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_LAST_REVISION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVISION_DATE])) {
                        $errs[self::FIELD_LAST_REVISION_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVISION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCESSION_NUMBER])) {
            $v = $this->getAccessionNumber();
            foreach($validationRules[self::FIELD_ACCESSION_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_ACCESSION_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCESSION_NUMBER])) {
                        $errs[self::FIELD_ACCESSION_NUMBER] = [];
                    }
                    $errs[self::FIELD_ACCESSION_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE_STRING])) {
            $v = $this->getPageString();
            foreach($validationRules[self::FIELD_PAGE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PAGE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE_STRING])) {
                        $errs[self::FIELD_PAGE_STRING] = [];
                    }
                    $errs[self::FIELD_PAGE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIRST_PAGE])) {
            $v = $this->getFirstPage();
            foreach($validationRules[self::FIELD_FIRST_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_FIRST_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIRST_PAGE])) {
                        $errs[self::FIELD_FIRST_PAGE] = [];
                    }
                    $errs[self::FIELD_FIRST_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_PAGE])) {
            $v = $this->getLastPage();
            foreach($validationRules[self::FIELD_LAST_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_LAST_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_PAGE])) {
                        $errs[self::FIELD_LAST_PAGE] = [];
                    }
                    $errs[self::FIELD_LAST_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE_COUNT])) {
            $v = $this->getPageCount();
            foreach($validationRules[self::FIELD_PAGE_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PAGE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE_COUNT])) {
                        $errs[self::FIELD_PAGE_COUNT] = [];
                    }
                    $errs[self::FIELD_PAGE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
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
        } else if (!($type instanceof FHIRCitationPublicationForm)) {
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
            if (self::FIELD_PUBLISHED_IN === $n->nodeName) {
                $type->setPublishedIn(FHIRCitationPublishedIn::xmlUnserialize($n));
            } elseif (self::FIELD_CITED_MEDIUM === $n->nodeName) {
                $type->setCitedMedium(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VOLUME === $n->nodeName) {
                $type->setVolume(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ISSUE === $n->nodeName) {
                $type->setIssue(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ARTICLE_DATE === $n->nodeName) {
                $type->setArticleDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_PUBLICATION_DATE_TEXT === $n->nodeName) {
                $type->setPublicationDateText(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PUBLICATION_DATE_SEASON === $n->nodeName) {
                $type->setPublicationDateSeason(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_REVISION_DATE === $n->nodeName) {
                $type->setLastRevisionDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->addLanguage(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ACCESSION_NUMBER === $n->nodeName) {
                $type->setAccessionNumber(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PAGE_STRING === $n->nodeName) {
                $type->setPageString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FIRST_PAGE === $n->nodeName) {
                $type->setFirstPage(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_PAGE === $n->nodeName) {
                $type->setLastPage(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PAGE_COUNT === $n->nodeName) {
                $type->setPageCount(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VOLUME);
        if (null !== $n) {
            $pt = $type->getVolume();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVolume($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ISSUE);
        if (null !== $n) {
            $pt = $type->getIssue();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIssue($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ARTICLE_DATE);
        if (null !== $n) {
            $pt = $type->getArticleDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setArticleDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PUBLICATION_DATE_TEXT);
        if (null !== $n) {
            $pt = $type->getPublicationDateText();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPublicationDateText($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PUBLICATION_DATE_SEASON);
        if (null !== $n) {
            $pt = $type->getPublicationDateSeason();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPublicationDateSeason($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_REVISION_DATE);
        if (null !== $n) {
            $pt = $type->getLastRevisionDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastRevisionDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ACCESSION_NUMBER);
        if (null !== $n) {
            $pt = $type->getAccessionNumber();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAccessionNumber($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PAGE_STRING);
        if (null !== $n) {
            $pt = $type->getPageString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPageString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FIRST_PAGE);
        if (null !== $n) {
            $pt = $type->getFirstPage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFirstPage($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_PAGE);
        if (null !== $n) {
            $pt = $type->getLastPage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastPage($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PAGE_COUNT);
        if (null !== $n) {
            $pt = $type->getPageCount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPageCount($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CitationPublicationForm'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getPublishedIn())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLISHED_IN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCitedMedium())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CITED_MEDIUM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVolume())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VOLUME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIssue())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ISSUE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getArticleDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ARTICLE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPublicationDateText())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLICATION_DATE_TEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPublicationDateSeason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLICATION_DATE_SEASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastRevisionDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_REVISION_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LANGUAGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAccessionNumber())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ACCESSION_NUMBER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPageString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAGE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFirstPage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FIRST_PAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastPage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_PAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPageCount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAGE_COUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCopyright())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COPYRIGHT);
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
        if (null !== ($v = $this->getPublishedIn())) {
            $out->{self::FIELD_PUBLISHED_IN} = $v;
        }
        if (null !== ($v = $this->getCitedMedium())) {
            $out->{self::FIELD_CITED_MEDIUM} = $v;
        }
        if (null !== ($v = $this->getVolume())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VOLUME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VOLUME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIssue())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ISSUE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ISSUE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getArticleDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ARTICLE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ARTICLE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPublicationDateText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLICATION_DATE_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLICATION_DATE_TEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPublicationDateSeason())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLICATION_DATE_SEASON} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLICATION_DATE_SEASON_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastRevisionDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_REVISION_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_REVISION_DATE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getLanguage())) {
            $out->{self::FIELD_LANGUAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LANGUAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAccessionNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACCESSION_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACCESSION_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPageString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PAGE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PAGE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFirstPage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIRST_PAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIRST_PAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastPage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_PAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_PAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPageCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PAGE_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PAGE_COUNT_EXT} = $ext;
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