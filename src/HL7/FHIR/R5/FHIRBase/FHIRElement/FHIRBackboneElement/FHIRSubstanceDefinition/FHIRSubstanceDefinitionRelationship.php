<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 *
 * Class FHIRSubstanceDefinitionRelationship
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition
 */
class FHIRSubstanceDefinitionRelationship extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP;

    const FIELD_SUBSTANCE_DEFINITION_REFERENCE = 'substanceDefinitionReference';
    const FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT = 'substanceDefinitionCodeableConcept';
    const FIELD_TYPE = 'type';
    const FIELD_IS_DEFINING = 'isDefining';
    const FIELD_IS_DEFINING_EXT = '_isDefining';
    const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    const FIELD_AMOUNT_RATIO = 'amountRatio';
    const FIELD_AMOUNT_STRING = 'amountString';
    const FIELD_AMOUNT_STRING_EXT = '_amountString';
    const FIELD_RATIO_HIGH_LIMIT_AMOUNT = 'ratioHighLimitAmount';
    const FIELD_COMPARATOR = 'comparator';
    const FIELD_SOURCE = 'source';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $substanceDefinitionReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $substanceDefinitionCodeableConcept = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material", "polymorph",
     * "impurity of".
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isDefining = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $amountQuantity = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $amountRatio = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $amountString = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric has an uncertain range.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $ratioHighLimitAmount = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $comparator = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $source = [];

    /**
     * Validation map for fields in type SubstanceDefinition.Relationship
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRSubstanceDefinitionRelationship Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE])) {
            if ($data[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setSubstanceDefinitionReference($data[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE]);
            } else {
                $this->setSubstanceDefinitionReference(new FHIRReference($data[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubstanceDefinitionCodeableConcept($data[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT]);
            } else {
                $this->setSubstanceDefinitionCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_IS_DEFINING]) || isset($data[self::FIELD_IS_DEFINING_EXT])) {
            $value = $data[self::FIELD_IS_DEFINING] ?? null;
            $ext = (isset($data[self::FIELD_IS_DEFINING_EXT]) && is_array($data[self::FIELD_IS_DEFINING_EXT])) ? $data[self::FIELD_IS_DEFINING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsDefining($value);
                } else if (is_array($value)) {
                    $this->setIsDefining(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsDefining(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsDefining(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_QUANTITY])) {
            if ($data[self::FIELD_AMOUNT_QUANTITY] instanceof FHIRQuantity) {
                $this->setAmountQuantity($data[self::FIELD_AMOUNT_QUANTITY]);
            } else {
                $this->setAmountQuantity(new FHIRQuantity($data[self::FIELD_AMOUNT_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_RATIO])) {
            if ($data[self::FIELD_AMOUNT_RATIO] instanceof FHIRRatio) {
                $this->setAmountRatio($data[self::FIELD_AMOUNT_RATIO]);
            } else {
                $this->setAmountRatio(new FHIRRatio($data[self::FIELD_AMOUNT_RATIO]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_STRING]) || isset($data[self::FIELD_AMOUNT_STRING_EXT])) {
            $value = $data[self::FIELD_AMOUNT_STRING] ?? null;
            $ext = (isset($data[self::FIELD_AMOUNT_STRING_EXT]) && is_array($data[self::FIELD_AMOUNT_STRING_EXT])) ? $data[self::FIELD_AMOUNT_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAmountString($value);
                } else if (is_array($value)) {
                    $this->setAmountString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAmountString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAmountString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT])) {
            if ($data[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT] instanceof FHIRRatio) {
                $this->setRatioHighLimitAmount($data[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT]);
            } else {
                $this->setRatioHighLimitAmount(new FHIRRatio($data[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_COMPARATOR])) {
            if ($data[self::FIELD_COMPARATOR] instanceof FHIRCodeableConcept) {
                $this->setComparator($data[self::FIELD_COMPARATOR]);
            } else {
                $this->setComparator(new FHIRCodeableConcept($data[self::FIELD_COMPARATOR]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRReference($data[self::FIELD_SOURCE]));
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
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubstanceDefinitionReference(): null|FHIRReference
    {
        return $this->substanceDefinitionReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $substanceDefinitionReference
     * @return static
     */
    public function setSubstanceDefinitionReference(null|FHIRReference $substanceDefinitionReference = null): self
    {
        if (null === $substanceDefinitionReference) {
            $substanceDefinitionReference = new FHIRReference();
        }
        $this->_trackValueSet($this->substanceDefinitionReference, $substanceDefinitionReference);
        $this->substanceDefinitionReference = $substanceDefinitionReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSubstanceDefinitionCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->substanceDefinitionCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $substanceDefinitionCodeableConcept
     * @return static
     */
    public function setSubstanceDefinitionCodeableConcept(null|FHIRCodeableConcept $substanceDefinitionCodeableConcept = null): self
    {
        if (null === $substanceDefinitionCodeableConcept) {
            $substanceDefinitionCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->substanceDefinitionCodeableConcept, $substanceDefinitionCodeableConcept);
        $this->substanceDefinitionCodeableConcept = $substanceDefinitionCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material", "polymorph",
     * "impurity of".
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
     * For example "salt to parent", "active moiety", "starting material", "polymorph",
     * "impurity of".
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getIsDefining(): null|FHIRBoolean
    {
        return $this->isDefining;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $isDefining
     * @return static
     */
    public function setIsDefining(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDefining = null): self
    {
        if (null !== $isDefining && !($isDefining instanceof FHIRBoolean)) {
            $isDefining = new FHIRBoolean($isDefining);
        }
        $this->_trackValueSet($this->isDefining, $isDefining);
        $this->isDefining = $isDefining;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getAmountQuantity(): null|FHIRQuantity
    {
        return $this->amountQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(null|FHIRQuantity $amountQuantity = null): self
    {
        if (null === $amountQuantity) {
            $amountQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->amountQuantity, $amountQuantity);
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getAmountRatio(): null|FHIRRatio
    {
        return $this->amountRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $amountRatio
     * @return static
     */
    public function setAmountRatio(null|FHIRRatio $amountRatio = null): self
    {
        if (null === $amountRatio) {
            $amountRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->amountRatio, $amountRatio);
        $this->amountRatio = $amountRatio;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getAmountString(): null|FHIRString
    {
        return $this->amountString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $amountString
     * @return static
     */
    public function setAmountString(null|string|FHIRStringPrimitive|FHIRString $amountString = null): self
    {
        if (null !== $amountString && !($amountString instanceof FHIRString)) {
            $amountString = new FHIRString($amountString);
        }
        $this->_trackValueSet($this->amountString, $amountString);
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric has an uncertain range.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getRatioHighLimitAmount(): null|FHIRRatio
    {
        return $this->ratioHighLimitAmount;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric has an uncertain range.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $ratioHighLimitAmount
     * @return static
     */
    public function setRatioHighLimitAmount(null|FHIRRatio $ratioHighLimitAmount = null): self
    {
        if (null === $ratioHighLimitAmount) {
            $ratioHighLimitAmount = new FHIRRatio();
        }
        $this->_trackValueSet($this->ratioHighLimitAmount, $ratioHighLimitAmount);
        $this->ratioHighLimitAmount = $ratioHighLimitAmount;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getComparator(): null|FHIRCodeableConcept
    {
        return $this->comparator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $comparator
     * @return static
     */
    public function setComparator(null|FHIRCodeableConcept $comparator = null): self
    {
        if (null === $comparator) {
            $comparator = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->comparator, $comparator);
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSource(): null|array
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $source
     * @return static
     */
    public function addSource(null|FHIRReference $source = null): self
    {
        if (null === $source) {
            $source = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $source
     * @return static
     */
    public function setSource(array $source = []): self
    {
        if ([] !== $this->source) {
            $this->_trackValuesRemoved(count($this->source));
            $this->source = [];
        }
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSource($v);
            } else {
                $this->addSource(new FHIRReference($v));
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
        if (null !== ($v = $this->getSubstanceDefinitionReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceDefinitionCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsDefining())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_DEFINING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRatioHighLimitAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComparator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE])) {
            $v = $this->getSubstanceDefinitionReference();
            foreach($validationRules[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_SUBSTANCE_DEFINITION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE])) {
                        $errs[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE_DEFINITION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT])) {
            $v = $this->getSubstanceDefinitionCodeableConcept();
            foreach($validationRules[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_DEFINING])) {
            $v = $this->getIsDefining();
            foreach($validationRules[self::FIELD_IS_DEFINING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_IS_DEFINING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_DEFINING])) {
                        $errs[self::FIELD_IS_DEFINING] = [];
                    }
                    $errs[self::FIELD_IS_DEFINING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_QUANTITY])) {
            $v = $this->getAmountQuantity();
            foreach($validationRules[self::FIELD_AMOUNT_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_QUANTITY])) {
                        $errs[self::FIELD_AMOUNT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_AMOUNT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_RATIO])) {
            $v = $this->getAmountRatio();
            foreach($validationRules[self::FIELD_AMOUNT_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_RATIO])) {
                        $errs[self::FIELD_AMOUNT_RATIO] = [];
                    }
                    $errs[self::FIELD_AMOUNT_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_STRING])) {
            $v = $this->getAmountString();
            foreach($validationRules[self::FIELD_AMOUNT_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_STRING])) {
                        $errs[self::FIELD_AMOUNT_STRING] = [];
                    }
                    $errs[self::FIELD_AMOUNT_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT])) {
            $v = $this->getRatioHighLimitAmount();
            foreach($validationRules[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_RATIO_HIGH_LIMIT_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT])) {
                        $errs[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT] = [];
                    }
                    $errs[self::FIELD_RATIO_HIGH_LIMIT_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARATOR])) {
            $v = $this->getComparator();
            foreach($validationRules[self::FIELD_COMPARATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_COMPARATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARATOR])) {
                        $errs[self::FIELD_COMPARATOR] = [];
                    }
                    $errs[self::FIELD_COMPARATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship
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
        } else if (!($type instanceof FHIRSubstanceDefinitionRelationship)) {
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
            if (self::FIELD_SUBSTANCE_DEFINITION_REFERENCE === $n->nodeName) {
                $type->setSubstanceDefinitionReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setSubstanceDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_IS_DEFINING === $n->nodeName) {
                $type->setIsDefining(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_AMOUNT_QUANTITY === $n->nodeName) {
                $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_AMOUNT_RATIO === $n->nodeName) {
                $type->setAmountRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_AMOUNT_STRING === $n->nodeName) {
                $type->setAmountString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RATIO_HIGH_LIMIT_AMOUNT === $n->nodeName) {
                $type->setRatioHighLimitAmount(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_COMPARATOR === $n->nodeName) {
                $type->setComparator(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE === $n->nodeName) {
                $type->addSource(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IS_DEFINING);
        if (null !== $n) {
            $pt = $type->getIsDefining();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIsDefining($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AMOUNT_STRING);
        if (null !== $n) {
            $pt = $type->getAmountString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAmountString($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('SubstanceDefinitionRelationship'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSubstanceDefinitionReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBSTANCE_DEFINITION_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubstanceDefinitionCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIsDefining())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IS_DEFINING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAmountQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAmountRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAmountString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRatioHighLimitAmount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RATIO_HIGH_LIMIT_AMOUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getComparator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPARATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
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
        if (null !== ($v = $this->getSubstanceDefinitionReference())) {
            $out->{self::FIELD_SUBSTANCE_DEFINITION_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getSubstanceDefinitionCodeableConcept())) {
            $out->{self::FIELD_SUBSTANCE_DEFINITION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getIsDefining())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_DEFINING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_DEFINING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAmountQuantity())) {
            $out->{self::FIELD_AMOUNT_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getAmountRatio())) {
            $out->{self::FIELD_AMOUNT_RATIO} = $v;
        }
        if (null !== ($v = $this->getAmountString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AMOUNT_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AMOUNT_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRatioHighLimitAmount())) {
            $out->{self::FIELD_RATIO_HIGH_LIMIT_AMOUNT} = $v;
        }
        if (null !== ($v = $this->getComparator())) {
            $out->{self::FIELD_COMPARATOR} = $v;
        }
        if ([] !== ($vs = $this->getSource())) {
            $out->{self::FIELD_SOURCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SOURCE}[] = $v;
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