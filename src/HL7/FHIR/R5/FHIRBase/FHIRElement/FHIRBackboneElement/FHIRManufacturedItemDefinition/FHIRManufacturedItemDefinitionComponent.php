<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * The definition and characteristics of a medicinal manufactured item, such as a
 * tablet or capsule, as contained in a packaged medicinal product.
 *
 * Class FHIRManufacturedItemDefinitionComponent
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition
 */
class FHIRManufacturedItemDefinitionComponent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT;

    const FIELD_TYPE = 'type';
    const FIELD_FUNCTION = 'function';
    const FIELD_AMOUNT = 'amount';
    const FIELD_CONSTITUENT = 'constituent';
    const FIELD_PROPERTY = 'property';
    const FIELD_COMPONENT = 'component';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defining type of the component e.g. shell, layer, ink.
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
     * The function of this component within the item e.g. delivers active ingredient,
     * masks taste.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $function = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurable amount of total quantity of all substances in the component,
     * expressable in different ways (e.g. by mass or volume).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    protected null|array $amount = [];
    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so
     * that its component location within the item can be indicated. This not where the
     * item's ingredient are primarily stated (for which see Ingredient.for or
     * ManufacturedItemDefinition.ingredient).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionConstituent[]
     */
    protected null|array $constituent = [];
    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this component.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty[]
     */
    protected null|array $property = [];
    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A component that this component contains or is made from.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionComponent[]
     */
    protected null|array $component = [];

    /**
     * Validation map for fields in type ManufacturedItemDefinition.Component
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRManufacturedItemDefinitionComponent Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_FUNCTION])) {
            if (is_array($data[self::FIELD_FUNCTION])) {
                foreach($data[self::FIELD_FUNCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFunction($v);
                    } else {
                        $this->addFunction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_FUNCTION] instanceof FHIRCodeableConcept) {
                $this->addFunction($data[self::FIELD_FUNCTION]);
            } else {
                $this->addFunction(new FHIRCodeableConcept($data[self::FIELD_FUNCTION]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT])) {
            if (is_array($data[self::FIELD_AMOUNT])) {
                foreach($data[self::FIELD_AMOUNT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuantity) {
                        $this->addAmount($v);
                    } else {
                        $this->addAmount(new FHIRQuantity($v));
                    }
                }
            } elseif ($data[self::FIELD_AMOUNT] instanceof FHIRQuantity) {
                $this->addAmount($data[self::FIELD_AMOUNT]);
            } else {
                $this->addAmount(new FHIRQuantity($data[self::FIELD_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_CONSTITUENT])) {
            if (is_array($data[self::FIELD_CONSTITUENT])) {
                foreach($data[self::FIELD_CONSTITUENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRManufacturedItemDefinitionConstituent) {
                        $this->addConstituent($v);
                    } else {
                        $this->addConstituent(new FHIRManufacturedItemDefinitionConstituent($v));
                    }
                }
            } elseif ($data[self::FIELD_CONSTITUENT] instanceof FHIRManufacturedItemDefinitionConstituent) {
                $this->addConstituent($data[self::FIELD_CONSTITUENT]);
            } else {
                $this->addConstituent(new FHIRManufacturedItemDefinitionConstituent($data[self::FIELD_CONSTITUENT]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRManufacturedItemDefinitionProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRManufacturedItemDefinitionProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRManufacturedItemDefinitionProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRManufacturedItemDefinitionProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_COMPONENT])) {
            if (is_array($data[self::FIELD_COMPONENT])) {
                foreach($data[self::FIELD_COMPONENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRManufacturedItemDefinitionComponent) {
                        $this->addComponent($v);
                    } else {
                        $this->addComponent(new FHIRManufacturedItemDefinitionComponent($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPONENT] instanceof FHIRManufacturedItemDefinitionComponent) {
                $this->addComponent($data[self::FIELD_COMPONENT]);
            } else {
                $this->addComponent(new FHIRManufacturedItemDefinitionComponent($data[self::FIELD_COMPONENT]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defining type of the component e.g. shell, layer, ink.
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
     * Defining type of the component e.g. shell, layer, ink.
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
     * The function of this component within the item e.g. delivers active ingredient,
     * masks taste.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getFunction(): null|array
    {
        return $this->function;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of this component within the item e.g. delivers active ingredient,
     * masks taste.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $function
     * @return static
     */
    public function addFunction(null|FHIRCodeableConcept $function = null): self
    {
        if (null === $function) {
            $function = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->function[] = $function;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of this component within the item e.g. delivers active ingredient,
     * masks taste.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $function
     * @return static
     */
    public function setFunction(array $function = []): self
    {
        if ([] !== $this->function) {
            $this->_trackValuesRemoved(count($this->function));
            $this->function = [];
        }
        if ([] === $function) {
            return $this;
        }
        foreach($function as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addFunction($v);
            } else {
                $this->addFunction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurable amount of total quantity of all substances in the component,
     * expressable in different ways (e.g. by mass or volume).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    public function getAmount(): null|array
    {
        return $this->amount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurable amount of total quantity of all substances in the component,
     * expressable in different ways (e.g. by mass or volume).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $amount
     * @return static
     */
    public function addAmount(null|FHIRQuantity $amount = null): self
    {
        if (null === $amount) {
            $amount = new FHIRQuantity();
        }
        $this->_trackValueAdded();
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurable amount of total quantity of all substances in the component,
     * expressable in different ways (e.g. by mass or volume).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[] $amount
     * @return static
     */
    public function setAmount(array $amount = []): self
    {
        if ([] !== $this->amount) {
            $this->_trackValuesRemoved(count($this->amount));
            $this->amount = [];
        }
        if ([] === $amount) {
            return $this;
        }
        foreach($amount as $v) {
            if ($v instanceof FHIRQuantity) {
                $this->addAmount($v);
            } else {
                $this->addAmount(new FHIRQuantity($v));
            }
        }
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so
     * that its component location within the item can be indicated. This not where the
     * item's ingredient are primarily stated (for which see Ingredient.for or
     * ManufacturedItemDefinition.ingredient).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionConstituent[]
     */
    public function getConstituent(): null|array
    {
        return $this->constituent;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so
     * that its component location within the item can be indicated. This not where the
     * item's ingredient are primarily stated (for which see Ingredient.for or
     * ManufacturedItemDefinition.ingredient).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionConstituent $constituent
     * @return static
     */
    public function addConstituent(null|FHIRManufacturedItemDefinitionConstituent $constituent = null): self
    {
        if (null === $constituent) {
            $constituent = new FHIRManufacturedItemDefinitionConstituent();
        }
        $this->_trackValueAdded();
        $this->constituent[] = $constituent;
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so
     * that its component location within the item can be indicated. This not where the
     * item's ingredient are primarily stated (for which see Ingredient.for or
     * ManufacturedItemDefinition.ingredient).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionConstituent[] $constituent
     * @return static
     */
    public function setConstituent(array $constituent = []): self
    {
        if ([] !== $this->constituent) {
            $this->_trackValuesRemoved(count($this->constituent));
            $this->constituent = [];
        }
        if ([] === $constituent) {
            return $this;
        }
        foreach($constituent as $v) {
            if ($v instanceof FHIRManufacturedItemDefinitionConstituent) {
                $this->addConstituent($v);
            } else {
                $this->addConstituent(new FHIRManufacturedItemDefinitionConstituent($v));
            }
        }
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this component.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this component.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty $property
     * @return static
     */
    public function addProperty(null|FHIRManufacturedItemDefinitionProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRManufacturedItemDefinitionProperty();
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this component.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty[] $property
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
            if ($v instanceof FHIRManufacturedItemDefinitionProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRManufacturedItemDefinitionProperty($v));
            }
        }
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A component that this component contains or is made from.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionComponent[]
     */
    public function getComponent(): null|array
    {
        return $this->component;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A component that this component contains or is made from.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionComponent $component
     * @return static
     */
    public function addComponent(null|FHIRManufacturedItemDefinitionComponent $component = null): self
    {
        if (null === $component) {
            $component = new FHIRManufacturedItemDefinitionComponent();
        }
        $this->_trackValueAdded();
        $this->component[] = $component;
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * A component that this component contains or is made from.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionComponent[] $component
     * @return static
     */
    public function setComponent(array $component = []): self
    {
        if ([] !== $this->component) {
            $this->_trackValuesRemoved(count($this->component));
            $this->component = [];
        }
        if ([] === $component) {
            return $this;
        }
        foreach($component as $v) {
            if ($v instanceof FHIRManufacturedItemDefinitionComponent) {
                $this->addComponent($v);
            } else {
                $this->addComponent(new FHIRManufacturedItemDefinitionComponent($v));
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFunction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FUNCTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAmount())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AMOUNT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConstituent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONSTITUENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getComponent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPONENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FUNCTION])) {
            $v = $this->getFunction();
            foreach($validationRules[self::FIELD_FUNCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT, self::FIELD_FUNCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FUNCTION])) {
                        $errs[self::FIELD_FUNCTION] = [];
                    }
                    $errs[self::FIELD_FUNCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONSTITUENT])) {
            $v = $this->getConstituent();
            foreach($validationRules[self::FIELD_CONSTITUENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT, self::FIELD_CONSTITUENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSTITUENT])) {
                        $errs[self::FIELD_CONSTITUENT] = [];
                    }
                    $errs[self::FIELD_CONSTITUENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPONENT])) {
            $v = $this->getComponent();
            foreach($validationRules[self::FIELD_COMPONENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_COMPONENT, self::FIELD_COMPONENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPONENT])) {
                        $errs[self::FIELD_COMPONENT] = [];
                    }
                    $errs[self::FIELD_COMPONENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionComponent $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionComponent
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
        } else if (!($type instanceof FHIRManufacturedItemDefinitionComponent)) {
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
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FUNCTION === $n->nodeName) {
                $type->addFunction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_AMOUNT === $n->nodeName) {
                $type->addAmount(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_CONSTITUENT === $n->nodeName) {
                $type->addConstituent(FHIRManufacturedItemDefinitionConstituent::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRManufacturedItemDefinitionProperty::xmlUnserialize($n));
            } elseif (self::FIELD_COMPONENT === $n->nodeName) {
                $type->addComponent(FHIRManufacturedItemDefinitionComponent::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ManufacturedItemDefinitionComponent'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getFunction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FUNCTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAmount())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getConstituent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONSTITUENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if ([] !== ($vs = $this->getComponent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMPONENT);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getFunction())) {
            $out->{self::FIELD_FUNCTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FUNCTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAmount())) {
            $out->{self::FIELD_AMOUNT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AMOUNT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getConstituent())) {
            $out->{self::FIELD_CONSTITUENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONSTITUENT}[] = $v;
            }
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
        if ([] !== ($vs = $this->getComponent())) {
            $out->{self::FIELD_COMPONENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMPONENT}[] = $v;
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