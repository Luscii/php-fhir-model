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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRPositiveIntPrimitive;
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
 * Class FHIRCitationEntry
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY;

    const FIELD_CONTRIBUTOR = 'contributor';
    const FIELD_FORENAME_INITIALS = 'forenameInitials';
    const FIELD_FORENAME_INITIALS_EXT = '_forenameInitials';
    const FIELD_AFFILIATION = 'affiliation';
    const FIELD_CONTRIBUTION_TYPE = 'contributionType';
    const FIELD_ROLE = 'role';
    const FIELD_CONTRIBUTION_INSTANCE = 'contributionInstance';
    const FIELD_CORRESPONDING_CONTACT = 'correspondingContact';
    const FIELD_CORRESPONDING_CONTACT_EXT = '_correspondingContact';
    const FIELD_RANKING_ORDER = 'rankingOrder';
    const FIELD_RANKING_ORDER_EXT = '_rankingOrder';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $contributor = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $forenameInitials = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $affiliation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $contributionType = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $role = null;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    protected null|array $contributionInstance = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $correspondingContact = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $rankingOrder = null;

    /**
     * Validation map for fields in type Citation.Entry
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCitationEntry Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTRIBUTOR])) {
            if ($data[self::FIELD_CONTRIBUTOR] instanceof FHIRReference) {
                $this->setContributor($data[self::FIELD_CONTRIBUTOR]);
            } else {
                $this->setContributor(new FHIRReference($data[self::FIELD_CONTRIBUTOR]));
            }
        }
        if (isset($data[self::FIELD_FORENAME_INITIALS]) || isset($data[self::FIELD_FORENAME_INITIALS_EXT])) {
            $value = $data[self::FIELD_FORENAME_INITIALS] ?? null;
            $ext = (isset($data[self::FIELD_FORENAME_INITIALS_EXT]) && is_array($data[self::FIELD_FORENAME_INITIALS_EXT])) ? $data[self::FIELD_FORENAME_INITIALS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setForenameInitials($value);
                } else if (is_array($value)) {
                    $this->setForenameInitials(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setForenameInitials(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setForenameInitials(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AFFILIATION])) {
            if (is_array($data[self::FIELD_AFFILIATION])) {
                foreach($data[self::FIELD_AFFILIATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAffiliation($v);
                    } else {
                        $this->addAffiliation(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AFFILIATION] instanceof FHIRReference) {
                $this->addAffiliation($data[self::FIELD_AFFILIATION]);
            } else {
                $this->addAffiliation(new FHIRReference($data[self::FIELD_AFFILIATION]));
            }
        }
        if (isset($data[self::FIELD_CONTRIBUTION_TYPE])) {
            if (is_array($data[self::FIELD_CONTRIBUTION_TYPE])) {
                foreach($data[self::FIELD_CONTRIBUTION_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addContributionType($v);
                    } else {
                        $this->addContributionType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTION_TYPE] instanceof FHIRCodeableConcept) {
                $this->addContributionType($data[self::FIELD_CONTRIBUTION_TYPE]);
            } else {
                $this->addContributionType(new FHIRCodeableConcept($data[self::FIELD_CONTRIBUTION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_CONTRIBUTION_INSTANCE])) {
            if (is_array($data[self::FIELD_CONTRIBUTION_INSTANCE])) {
                foreach($data[self::FIELD_CONTRIBUTION_INSTANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationContributionInstance) {
                        $this->addContributionInstance($v);
                    } else {
                        $this->addContributionInstance(new FHIRCitationContributionInstance($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTION_INSTANCE] instanceof FHIRCitationContributionInstance) {
                $this->addContributionInstance($data[self::FIELD_CONTRIBUTION_INSTANCE]);
            } else {
                $this->addContributionInstance(new FHIRCitationContributionInstance($data[self::FIELD_CONTRIBUTION_INSTANCE]));
            }
        }
        if (isset($data[self::FIELD_CORRESPONDING_CONTACT]) || isset($data[self::FIELD_CORRESPONDING_CONTACT_EXT])) {
            $value = $data[self::FIELD_CORRESPONDING_CONTACT] ?? null;
            $ext = (isset($data[self::FIELD_CORRESPONDING_CONTACT_EXT]) && is_array($data[self::FIELD_CORRESPONDING_CONTACT_EXT])) ? $data[self::FIELD_CORRESPONDING_CONTACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCorrespondingContact($value);
                } else if (is_array($value)) {
                    $this->setCorrespondingContact(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCorrespondingContact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCorrespondingContact(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_RANKING_ORDER]) || isset($data[self::FIELD_RANKING_ORDER_EXT])) {
            $value = $data[self::FIELD_RANKING_ORDER] ?? null;
            $ext = (isset($data[self::FIELD_RANKING_ORDER_EXT]) && is_array($data[self::FIELD_RANKING_ORDER_EXT])) ? $data[self::FIELD_RANKING_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setRankingOrder($value);
                } else if (is_array($value)) {
                    $this->setRankingOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setRankingOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRankingOrder(new FHIRPositiveInt($ext));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getContributor(): null|FHIRReference
    {
        return $this->contributor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contributor
     * @return static
     */
    public function setContributor(null|FHIRReference $contributor = null): self
    {
        if (null === $contributor) {
            $contributor = new FHIRReference();
        }
        $this->_trackValueSet($this->contributor, $contributor);
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getForenameInitials(): null|FHIRString
    {
        return $this->forenameInitials;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $forenameInitials
     * @return static
     */
    public function setForenameInitials(null|string|FHIRStringPrimitive|FHIRString $forenameInitials = null): self
    {
        if (null !== $forenameInitials && !($forenameInitials instanceof FHIRString)) {
            $forenameInitials = new FHIRString($forenameInitials);
        }
        $this->_trackValueSet($this->forenameInitials, $forenameInitials);
        $this->forenameInitials = $forenameInitials;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAffiliation(): null|array
    {
        return $this->affiliation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $affiliation
     * @return static
     */
    public function addAffiliation(null|FHIRReference $affiliation = null): self
    {
        if (null === $affiliation) {
            $affiliation = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->affiliation[] = $affiliation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $affiliation
     * @return static
     */
    public function setAffiliation(array $affiliation = []): self
    {
        if ([] !== $this->affiliation) {
            $this->_trackValuesRemoved(count($this->affiliation));
            $this->affiliation = [];
        }
        if ([] === $affiliation) {
            return $this;
        }
        foreach($affiliation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAffiliation($v);
            } else {
                $this->addAffiliation(new FHIRReference($v));
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
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getContributionType(): null|array
    {
        return $this->contributionType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $contributionType
     * @return static
     */
    public function addContributionType(null|FHIRCodeableConcept $contributionType = null): self
    {
        if (null === $contributionType) {
            $contributionType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->contributionType[] = $contributionType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $contributionType
     * @return static
     */
    public function setContributionType(array $contributionType = []): self
    {
        if ([] !== $this->contributionType) {
            $this->_trackValuesRemoved(count($this->contributionType));
            $this->contributionType = [];
        }
        if ([] === $contributionType) {
            return $this;
        }
        foreach($contributionType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addContributionType($v);
            } else {
                $this->addContributionType(new FHIRCodeableConcept($v));
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
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRole(): null|FHIRCodeableConcept
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(null|FHIRCodeableConcept $role = null): self
    {
        if (null === $role) {
            $role = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->role, $role);
        $this->role = $role;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    public function getContributionInstance(): null|array
    {
        return $this->contributionInstance;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance $contributionInstance
     * @return static
     */
    public function addContributionInstance(null|FHIRCitationContributionInstance $contributionInstance = null): self
    {
        if (null === $contributionInstance) {
            $contributionInstance = new FHIRCitationContributionInstance();
        }
        $this->_trackValueAdded();
        $this->contributionInstance[] = $contributionInstance;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[] $contributionInstance
     * @return static
     */
    public function setContributionInstance(array $contributionInstance = []): self
    {
        if ([] !== $this->contributionInstance) {
            $this->_trackValuesRemoved(count($this->contributionInstance));
            $this->contributionInstance = [];
        }
        if ([] === $contributionInstance) {
            return $this;
        }
        foreach($contributionInstance as $v) {
            if ($v instanceof FHIRCitationContributionInstance) {
                $this->addContributionInstance($v);
            } else {
                $this->addContributionInstance(new FHIRCitationContributionInstance($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getCorrespondingContact(): null|FHIRBoolean
    {
        return $this->correspondingContact;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $correspondingContact
     * @return static
     */
    public function setCorrespondingContact(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $correspondingContact = null): self
    {
        if (null !== $correspondingContact && !($correspondingContact instanceof FHIRBoolean)) {
            $correspondingContact = new FHIRBoolean($correspondingContact);
        }
        $this->_trackValueSet($this->correspondingContact, $correspondingContact);
        $this->correspondingContact = $correspondingContact;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getRankingOrder(): null|FHIRPositiveInt
    {
        return $this->rankingOrder;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRPositiveIntPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRPositiveInt $rankingOrder
     * @return static
     */
    public function setRankingOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rankingOrder = null): self
    {
        if (null !== $rankingOrder && !($rankingOrder instanceof FHIRPositiveInt)) {
            $rankingOrder = new FHIRPositiveInt($rankingOrder);
        }
        $this->_trackValueSet($this->rankingOrder, $rankingOrder);
        $this->rankingOrder = $rankingOrder;
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
        if (null !== ($v = $this->getContributor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRIBUTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getForenameInitials())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORENAME_INITIALS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAffiliation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AFFILIATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTION_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTION_INSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CORRESPONDING_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRankingOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RANKING_ORDER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTOR])) {
            $v = $this->getContributor();
            foreach($validationRules[self::FIELD_CONTRIBUTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTOR])) {
                        $errs[self::FIELD_CONTRIBUTOR] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORENAME_INITIALS])) {
            $v = $this->getForenameInitials();
            foreach($validationRules[self::FIELD_FORENAME_INITIALS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_FORENAME_INITIALS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORENAME_INITIALS])) {
                        $errs[self::FIELD_FORENAME_INITIALS] = [];
                    }
                    $errs[self::FIELD_FORENAME_INITIALS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AFFILIATION])) {
            $v = $this->getAffiliation();
            foreach($validationRules[self::FIELD_AFFILIATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_AFFILIATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AFFILIATION])) {
                        $errs[self::FIELD_AFFILIATION] = [];
                    }
                    $errs[self::FIELD_AFFILIATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTION_TYPE])) {
            $v = $this->getContributionType();
            foreach($validationRules[self::FIELD_CONTRIBUTION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTION_TYPE])) {
                        $errs[self::FIELD_CONTRIBUTION_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTION_INSTANCE])) {
            $v = $this->getContributionInstance();
            foreach($validationRules[self::FIELD_CONTRIBUTION_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTION_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTION_INSTANCE])) {
                        $errs[self::FIELD_CONTRIBUTION_INSTANCE] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTION_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CORRESPONDING_CONTACT])) {
            $v = $this->getCorrespondingContact();
            foreach($validationRules[self::FIELD_CORRESPONDING_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CORRESPONDING_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CORRESPONDING_CONTACT])) {
                        $errs[self::FIELD_CORRESPONDING_CONTACT] = [];
                    }
                    $errs[self::FIELD_CORRESPONDING_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RANKING_ORDER])) {
            $v = $this->getRankingOrder();
            foreach($validationRules[self::FIELD_RANKING_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_RANKING_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANKING_ORDER])) {
                        $errs[self::FIELD_RANKING_ORDER] = [];
                    }
                    $errs[self::FIELD_RANKING_ORDER][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
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
        } else if (!($type instanceof FHIRCitationEntry)) {
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
            if (self::FIELD_CONTRIBUTOR === $n->nodeName) {
                $type->setContributor(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_FORENAME_INITIALS === $n->nodeName) {
                $type->setForenameInitials(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_AFFILIATION === $n->nodeName) {
                $type->addAffiliation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRIBUTION_TYPE === $n->nodeName) {
                $type->addContributionType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ROLE === $n->nodeName) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRIBUTION_INSTANCE === $n->nodeName) {
                $type->addContributionInstance(FHIRCitationContributionInstance::xmlUnserialize($n));
            } elseif (self::FIELD_CORRESPONDING_CONTACT === $n->nodeName) {
                $type->setCorrespondingContact(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_RANKING_ORDER === $n->nodeName) {
                $type->setRankingOrder(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FORENAME_INITIALS);
        if (null !== $n) {
            $pt = $type->getForenameInitials();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setForenameInitials($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CORRESPONDING_CONTACT);
        if (null !== $n) {
            $pt = $type->getCorrespondingContact();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCorrespondingContact($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RANKING_ORDER);
        if (null !== $n) {
            $pt = $type->getRankingOrder();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRankingOrder($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CitationEntry'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getContributor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTRIBUTOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getForenameInitials())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FORENAME_INITIALS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAffiliation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AFFILIATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTRIBUTION_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getRole())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ROLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTRIBUTION_INSTANCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CORRESPONDING_CONTACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRankingOrder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RANKING_ORDER);
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
        if (null !== ($v = $this->getContributor())) {
            $out->{self::FIELD_CONTRIBUTOR} = $v;
        }
        if (null !== ($v = $this->getForenameInitials())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FORENAME_INITIALS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FORENAME_INITIALS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAffiliation())) {
            $out->{self::FIELD_AFFILIATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AFFILIATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            $out->{self::FIELD_CONTRIBUTION_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTRIBUTION_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getRole())) {
            $out->{self::FIELD_ROLE} = $v;
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            $out->{self::FIELD_CONTRIBUTION_INSTANCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTRIBUTION_INSTANCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CORRESPONDING_CONTACT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CORRESPONDING_CONTACT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRankingOrder())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RANKING_ORDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RANKING_ORDER_EXT} = $ext;
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