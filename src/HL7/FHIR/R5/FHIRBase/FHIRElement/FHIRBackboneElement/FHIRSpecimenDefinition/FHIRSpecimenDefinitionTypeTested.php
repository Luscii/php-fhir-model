<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRMarkdownPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionTypeTested
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionTypeTested extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED;

    const FIELD_IS_DERIVED = 'isDerived';
    const FIELD_IS_DERIVED_EXT = '_isDerived';
    const FIELD_TYPE = 'type';
    const FIELD_PREFERENCE = 'preference';
    const FIELD_PREFERENCE_EXT = '_preference';
    const FIELD_CONTAINER = 'container';
    const FIELD_REQUIREMENT = 'requirement';
    const FIELD_REQUIREMENT_EXT = '_requirement';
    const FIELD_RETENTION_TIME = 'retentionTime';
    const FIELD_SINGLE_USE = 'singleUse';
    const FIELD_SINGLE_USE_EXT = '_singleUse';
    const FIELD_REJECTION_CRITERION = 'rejectionCriterion';
    const FIELD_HANDLING = 'handling';
    const FIELD_TESTING_DESTINATION = 'testingDestination';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isDerived = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference
     */
    protected null|FHIRSpecimenContainedPreference $preference = null;
    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    protected null|FHIRSpecimenDefinitionContainer $container = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $requirement = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $retentionTime = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $singleUse = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $rejectionCriterion = [];
    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    protected null|array $handling = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $testingDestination = [];

    /**
     * Validation map for fields in type SpecimenDefinition.TypeTested
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSpecimenDefinitionTypeTested Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IS_DERIVED]) || isset($data[self::FIELD_IS_DERIVED_EXT])) {
            $value = $data[self::FIELD_IS_DERIVED] ?? null;
            $ext = (isset($data[self::FIELD_IS_DERIVED_EXT]) && is_array($data[self::FIELD_IS_DERIVED_EXT])) ? $data[self::FIELD_IS_DERIVED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsDerived($value);
                } else if (is_array($value)) {
                    $this->setIsDerived(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsDerived(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsDerived(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PREFERENCE]) || isset($data[self::FIELD_PREFERENCE_EXT])) {
            $value = $data[self::FIELD_PREFERENCE] ?? null;
            $ext = (isset($data[self::FIELD_PREFERENCE_EXT]) && is_array($data[self::FIELD_PREFERENCE_EXT])) ? $data[self::FIELD_PREFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSpecimenContainedPreference) {
                    $this->setPreference($value);
                } else if (is_array($value)) {
                    $this->setPreference(new FHIRSpecimenContainedPreference(array_merge($ext, $value)));
                } else {
                    $this->setPreference(new FHIRSpecimenContainedPreference([FHIRSpecimenContainedPreference::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPreference(new FHIRSpecimenContainedPreference($ext));
            }
        }
        if (isset($data[self::FIELD_CONTAINER])) {
            if ($data[self::FIELD_CONTAINER] instanceof FHIRSpecimenDefinitionContainer) {
                $this->setContainer($data[self::FIELD_CONTAINER]);
            } else {
                $this->setContainer(new FHIRSpecimenDefinitionContainer($data[self::FIELD_CONTAINER]));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENT]) || isset($data[self::FIELD_REQUIREMENT_EXT])) {
            $value = $data[self::FIELD_REQUIREMENT] ?? null;
            $ext = (isset($data[self::FIELD_REQUIREMENT_EXT]) && is_array($data[self::FIELD_REQUIREMENT_EXT])) ? $data[self::FIELD_REQUIREMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setRequirement($value);
                } else if (is_array($value)) {
                    $this->setRequirement(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setRequirement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequirement(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_RETENTION_TIME])) {
            if ($data[self::FIELD_RETENTION_TIME] instanceof FHIRDuration) {
                $this->setRetentionTime($data[self::FIELD_RETENTION_TIME]);
            } else {
                $this->setRetentionTime(new FHIRDuration($data[self::FIELD_RETENTION_TIME]));
            }
        }
        if (isset($data[self::FIELD_SINGLE_USE]) || isset($data[self::FIELD_SINGLE_USE_EXT])) {
            $value = $data[self::FIELD_SINGLE_USE] ?? null;
            $ext = (isset($data[self::FIELD_SINGLE_USE_EXT]) && is_array($data[self::FIELD_SINGLE_USE_EXT])) ? $data[self::FIELD_SINGLE_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setSingleUse($value);
                } else if (is_array($value)) {
                    $this->setSingleUse(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setSingleUse(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSingleUse(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REJECTION_CRITERION])) {
            if (is_array($data[self::FIELD_REJECTION_CRITERION])) {
                foreach($data[self::FIELD_REJECTION_CRITERION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRejectionCriterion($v);
                    } else {
                        $this->addRejectionCriterion(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REJECTION_CRITERION] instanceof FHIRCodeableConcept) {
                $this->addRejectionCriterion($data[self::FIELD_REJECTION_CRITERION]);
            } else {
                $this->addRejectionCriterion(new FHIRCodeableConcept($data[self::FIELD_REJECTION_CRITERION]));
            }
        }
        if (isset($data[self::FIELD_HANDLING])) {
            if (is_array($data[self::FIELD_HANDLING])) {
                foreach($data[self::FIELD_HANDLING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSpecimenDefinitionHandling) {
                        $this->addHandling($v);
                    } else {
                        $this->addHandling(new FHIRSpecimenDefinitionHandling($v));
                    }
                }
            } elseif ($data[self::FIELD_HANDLING] instanceof FHIRSpecimenDefinitionHandling) {
                $this->addHandling($data[self::FIELD_HANDLING]);
            } else {
                $this->addHandling(new FHIRSpecimenDefinitionHandling($data[self::FIELD_HANDLING]));
            }
        }
        if (isset($data[self::FIELD_TESTING_DESTINATION])) {
            if (is_array($data[self::FIELD_TESTING_DESTINATION])) {
                foreach($data[self::FIELD_TESTING_DESTINATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTestingDestination($v);
                    } else {
                        $this->addTestingDestination(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TESTING_DESTINATION] instanceof FHIRCodeableConcept) {
                $this->addTestingDestination($data[self::FIELD_TESTING_DESTINATION]);
            } else {
                $this->addTestingDestination(new FHIRCodeableConcept($data[self::FIELD_TESTING_DESTINATION]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getIsDerived(): null|FHIRBoolean
    {
        return $this->isDerived;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $isDerived
     * @return static
     */
    public function setIsDerived(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDerived = null): self
    {
        if (null !== $isDerived && !($isDerived instanceof FHIRBoolean)) {
            $isDerived = new FHIRBoolean($isDerived);
        }
        $this->_trackValueSet($this->isDerived, $isDerived);
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
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
     * The kind of specimen conditioned for testing expected by lab.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference(): null|FHIRSpecimenContainedPreference
    {
        return $this->preference;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return static
     */
    public function setPreference(null|FHIRSpecimenContainedPreference $preference = null): self
    {
        if (null === $preference) {
            $preference = new FHIRSpecimenContainedPreference();
        }
        $this->_trackValueSet($this->preference, $preference);
        $this->preference = $preference;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function getContainer(): null|FHIRSpecimenDefinitionContainer
    {
        return $this->container;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $container
     * @return static
     */
    public function setContainer(null|FHIRSpecimenDefinitionContainer $container = null): self
    {
        if (null === $container) {
            $container = new FHIRSpecimenDefinitionContainer();
        }
        $this->_trackValueSet($this->container, $container);
        $this->container = $container;
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
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getRequirement(): null|FHIRMarkdown
    {
        return $this->requirement;
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
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRMarkdownPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @return static
     */
    public function setRequirement(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement = null): self
    {
        if (null !== $requirement && !($requirement instanceof FHIRMarkdown)) {
            $requirement = new FHIRMarkdown($requirement);
        }
        $this->_trackValueSet($this->requirement, $requirement);
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime(): null|FHIRDuration
    {
        return $this->retentionTime;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $retentionTime
     * @return static
     */
    public function setRetentionTime(null|FHIRDuration $retentionTime = null): self
    {
        if (null === $retentionTime) {
            $retentionTime = new FHIRDuration();
        }
        $this->_trackValueSet($this->retentionTime, $retentionTime);
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSingleUse(): null|FHIRBoolean
    {
        return $this->singleUse;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $singleUse
     * @return static
     */
    public function setSingleUse(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $singleUse = null): self
    {
        if (null !== $singleUse && !($singleUse instanceof FHIRBoolean)) {
            $singleUse = new FHIRBoolean($singleUse);
        }
        $this->_trackValueSet($this->singleUse, $singleUse);
        $this->singleUse = $singleUse;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRejectionCriterion(): null|array
    {
        return $this->rejectionCriterion;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $rejectionCriterion
     * @return static
     */
    public function addRejectionCriterion(null|FHIRCodeableConcept $rejectionCriterion = null): self
    {
        if (null === $rejectionCriterion) {
            $rejectionCriterion = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $rejectionCriterion
     * @return static
     */
    public function setRejectionCriterion(array $rejectionCriterion = []): self
    {
        if ([] !== $this->rejectionCriterion) {
            $this->_trackValuesRemoved(count($this->rejectionCriterion));
            $this->rejectionCriterion = [];
        }
        if ([] === $rejectionCriterion) {
            return $this;
        }
        foreach($rejectionCriterion as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRejectionCriterion($v);
            } else {
                $this->addRejectionCriterion(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public function getHandling(): null|array
    {
        return $this->handling;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $handling
     * @return static
     */
    public function addHandling(null|FHIRSpecimenDefinitionHandling $handling = null): self
    {
        if (null === $handling) {
            $handling = new FHIRSpecimenDefinitionHandling();
        }
        $this->_trackValueAdded();
        $this->handling[] = $handling;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[] $handling
     * @return static
     */
    public function setHandling(array $handling = []): self
    {
        if ([] !== $this->handling) {
            $this->_trackValuesRemoved(count($this->handling));
            $this->handling = [];
        }
        if ([] === $handling) {
            return $this;
        }
        foreach($handling as $v) {
            if ($v instanceof FHIRSpecimenDefinitionHandling) {
                $this->addHandling($v);
            } else {
                $this->addHandling(new FHIRSpecimenDefinitionHandling($v));
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
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getTestingDestination(): null|array
    {
        return $this->testingDestination;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $testingDestination
     * @return static
     */
    public function addTestingDestination(null|FHIRCodeableConcept $testingDestination = null): self
    {
        if (null === $testingDestination) {
            $testingDestination = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->testingDestination[] = $testingDestination;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $testingDestination
     * @return static
     */
    public function setTestingDestination(array $testingDestination = []): self
    {
        if ([] !== $this->testingDestination) {
            $this->_trackValuesRemoved(count($this->testingDestination));
            $this->testingDestination = [];
        }
        if ([] === $testingDestination) {
            return $this;
        }
        foreach($testingDestination as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addTestingDestination($v);
            } else {
                $this->addTestingDestination(new FHIRCodeableConcept($v));
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
        if (null !== ($v = $this->getIsDerived())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_DERIVED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPreference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContainer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTAINER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRetentionTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RETENTION_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSingleUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SINGLE_USE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRejectionCriterion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REJECTION_CRITERION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getHandling())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_HANDLING, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTestingDestination())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TESTING_DESTINATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_DERIVED])) {
            $v = $this->getIsDerived();
            foreach($validationRules[self::FIELD_IS_DERIVED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_IS_DERIVED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_DERIVED])) {
                        $errs[self::FIELD_IS_DERIVED] = [];
                    }
                    $errs[self::FIELD_IS_DERIVED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFERENCE])) {
            $v = $this->getPreference();
            foreach($validationRules[self::FIELD_PREFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_PREFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFERENCE])) {
                        $errs[self::FIELD_PREFERENCE] = [];
                    }
                    $errs[self::FIELD_PREFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINER])) {
            $v = $this->getContainer();
            foreach($validationRules[self::FIELD_CONTAINER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_CONTAINER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINER])) {
                        $errs[self::FIELD_CONTAINER] = [];
                    }
                    $errs[self::FIELD_CONTAINER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENT])) {
            $v = $this->getRequirement();
            foreach($validationRules[self::FIELD_REQUIREMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENT])) {
                        $errs[self::FIELD_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RETENTION_TIME])) {
            $v = $this->getRetentionTime();
            foreach($validationRules[self::FIELD_RETENTION_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_RETENTION_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RETENTION_TIME])) {
                        $errs[self::FIELD_RETENTION_TIME] = [];
                    }
                    $errs[self::FIELD_RETENTION_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SINGLE_USE])) {
            $v = $this->getSingleUse();
            foreach($validationRules[self::FIELD_SINGLE_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_SINGLE_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SINGLE_USE])) {
                        $errs[self::FIELD_SINGLE_USE] = [];
                    }
                    $errs[self::FIELD_SINGLE_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REJECTION_CRITERION])) {
            $v = $this->getRejectionCriterion();
            foreach($validationRules[self::FIELD_REJECTION_CRITERION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_REJECTION_CRITERION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REJECTION_CRITERION])) {
                        $errs[self::FIELD_REJECTION_CRITERION] = [];
                    }
                    $errs[self::FIELD_REJECTION_CRITERION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HANDLING])) {
            $v = $this->getHandling();
            foreach($validationRules[self::FIELD_HANDLING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_HANDLING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HANDLING])) {
                        $errs[self::FIELD_HANDLING] = [];
                    }
                    $errs[self::FIELD_HANDLING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TESTING_DESTINATION])) {
            $v = $this->getTestingDestination();
            foreach($validationRules[self::FIELD_TESTING_DESTINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_TESTING_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TESTING_DESTINATION])) {
                        $errs[self::FIELD_TESTING_DESTINATION] = [];
                    }
                    $errs[self::FIELD_TESTING_DESTINATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
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
        } else if (!($type instanceof FHIRSpecimenDefinitionTypeTested)) {
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
            if (self::FIELD_IS_DERIVED === $n->nodeName) {
                $type->setIsDerived(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PREFERENCE === $n->nodeName) {
                $type->setPreference(FHIRSpecimenContainedPreference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINER === $n->nodeName) {
                $type->setContainer(FHIRSpecimenDefinitionContainer::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIREMENT === $n->nodeName) {
                $type->setRequirement(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_RETENTION_TIME === $n->nodeName) {
                $type->setRetentionTime(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_SINGLE_USE === $n->nodeName) {
                $type->setSingleUse(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REJECTION_CRITERION === $n->nodeName) {
                $type->addRejectionCriterion(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_HANDLING === $n->nodeName) {
                $type->addHandling(FHIRSpecimenDefinitionHandling::xmlUnserialize($n));
            } elseif (self::FIELD_TESTING_DESTINATION === $n->nodeName) {
                $type->addTestingDestination(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IS_DERIVED);
        if (null !== $n) {
            $pt = $type->getIsDerived();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIsDerived($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUIREMENT);
        if (null !== $n) {
            $pt = $type->getRequirement();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequirement($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SINGLE_USE);
        if (null !== $n) {
            $pt = $type->getSingleUse();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSingleUse($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SpecimenDefinitionTypeTested'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getIsDerived())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IS_DERIVED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPreference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PREFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContainer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTAINER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequirement())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUIREMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRetentionTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RETENTION_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSingleUse())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SINGLE_USE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRejectionCriterion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REJECTION_CRITERION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getHandling())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_HANDLING);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTestingDestination())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TESTING_DESTINATION);
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
        if (null !== ($v = $this->getIsDerived())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_DERIVED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_DERIVED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getPreference())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREFERENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSpecimenContainedPreference::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFERENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContainer())) {
            $out->{self::FIELD_CONTAINER} = $v;
        }
        if (null !== ($v = $this->getRequirement())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIREMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIREMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRetentionTime())) {
            $out->{self::FIELD_RETENTION_TIME} = $v;
        }
        if (null !== ($v = $this->getSingleUse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SINGLE_USE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SINGLE_USE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRejectionCriterion())) {
            $out->{self::FIELD_REJECTION_CRITERION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REJECTION_CRITERION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getHandling())) {
            $out->{self::FIELD_HANDLING} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_HANDLING}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTestingDestination())) {
            $out->{self::FIELD_TESTING_DESTINATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TESTING_DESTINATION}[] = $v;
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