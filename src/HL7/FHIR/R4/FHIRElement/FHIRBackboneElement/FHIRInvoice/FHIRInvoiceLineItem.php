<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRPositiveIntPrimitive;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * Invoice containing collected ChargeItems from an Account with calculated
 * individual and total price for Billing purpose.
 *
 * Class FHIRInvoiceLineItem
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice
 */
class FHIRInvoiceLineItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_CHARGE_ITEM_REFERENCE = 'chargeItemReference';
    const FIELD_CHARGE_ITEM_CODEABLE_CONCEPT = 'chargeItemCodeableConcept';
    const FIELD_PRICE_COMPONENT = 'priceComponent';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $sequence = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $chargeItemReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $chargeItemCodeableConcept = null;
    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    protected null|array $priceComponent = [];

    /**
     * Validation map for fields in type Invoice.LineItem
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRInvoiceLineItem Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_CHARGE_ITEM_REFERENCE])) {
            if ($data[self::FIELD_CHARGE_ITEM_REFERENCE] instanceof FHIRReference) {
                $this->setChargeItemReference($data[self::FIELD_CHARGE_ITEM_REFERENCE]);
            } else {
                $this->setChargeItemReference(new FHIRReference($data[self::FIELD_CHARGE_ITEM_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setChargeItemCodeableConcept($data[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT]);
            } else {
                $this->setChargeItemCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_PRICE_COMPONENT])) {
            if (is_array($data[self::FIELD_PRICE_COMPONENT])) {
                foreach($data[self::FIELD_PRICE_COMPONENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInvoicePriceComponent) {
                        $this->addPriceComponent($v);
                    } else {
                        $this->addPriceComponent(new FHIRInvoicePriceComponent($v));
                    }
                }
            } elseif ($data[self::FIELD_PRICE_COMPONENT] instanceof FHIRInvoicePriceComponent) {
                $this->addPriceComponent($data[self::FIELD_PRICE_COMPONENT]);
            } else {
                $this->addPriceComponent(new FHIRInvoicePriceComponent($data[self::FIELD_PRICE_COMPONENT]));
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSequence(): null|FHIRPositiveInt
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRPositiveIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRPositiveInt $sequence
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getChargeItemReference(): null|FHIRReference
    {
        return $this->chargeItemReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $chargeItemReference
     * @return static
     */
    public function setChargeItemReference(null|FHIRReference $chargeItemReference = null): self
    {
        if (null === $chargeItemReference) {
            $chargeItemReference = new FHIRReference();
        }
        $this->_trackValueSet($this->chargeItemReference, $chargeItemReference);
        $this->chargeItemReference = $chargeItemReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getChargeItemCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->chargeItemCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $chargeItemCodeableConcept
     * @return static
     */
    public function setChargeItemCodeableConcept(null|FHIRCodeableConcept $chargeItemCodeableConcept = null): self
    {
        if (null === $chargeItemCodeableConcept) {
            $chargeItemCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->chargeItemCodeableConcept, $chargeItemCodeableConcept);
        $this->chargeItemCodeableConcept = $chargeItemCodeableConcept;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public function getPriceComponent(): null|array
    {
        return $this->priceComponent;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent $priceComponent
     * @return static
     */
    public function addPriceComponent(null|FHIRInvoicePriceComponent $priceComponent = null): self
    {
        if (null === $priceComponent) {
            $priceComponent = new FHIRInvoicePriceComponent();
        }
        $this->_trackValueAdded();
        $this->priceComponent[] = $priceComponent;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[] $priceComponent
     * @return static
     */
    public function setPriceComponent(array $priceComponent = []): self
    {
        if ([] !== $this->priceComponent) {
            $this->_trackValuesRemoved(count($this->priceComponent));
            $this->priceComponent = [];
        }
        if ([] === $priceComponent) {
            return $this;
        }
        foreach($priceComponent as $v) {
            if ($v instanceof FHIRInvoicePriceComponent) {
                $this->addPriceComponent($v);
            } else {
                $this->addPriceComponent(new FHIRInvoicePriceComponent($v));
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
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getChargeItemReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARGE_ITEM_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getChargeItemCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPriceComponent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRICE_COMPONENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARGE_ITEM_REFERENCE])) {
            $v = $this->getChargeItemReference();
            foreach($validationRules[self::FIELD_CHARGE_ITEM_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM, self::FIELD_CHARGE_ITEM_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARGE_ITEM_REFERENCE])) {
                        $errs[self::FIELD_CHARGE_ITEM_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CHARGE_ITEM_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT])) {
            $v = $this->getChargeItemCodeableConcept();
            foreach($validationRules[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM, self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRICE_COMPONENT])) {
            $v = $this->getPriceComponent();
            foreach($validationRules[self::FIELD_PRICE_COMPONENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM, self::FIELD_PRICE_COMPONENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRICE_COMPONENT])) {
                        $errs[self::FIELD_PRICE_COMPONENT] = [];
                    }
                    $errs[self::FIELD_PRICE_COMPONENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
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
        } else if (!($type instanceof FHIRInvoiceLineItem)) {
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
            if (self::FIELD_SEQUENCE === $n->nodeName) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_CHARGE_ITEM_REFERENCE === $n->nodeName) {
                $type->setChargeItemReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setChargeItemCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRICE_COMPONENT === $n->nodeName) {
                $type->addPriceComponent(FHIRInvoicePriceComponent::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSequence($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('InvoiceLineItem'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getChargeItemReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CHARGE_ITEM_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getChargeItemCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPriceComponent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRICE_COMPONENT);
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
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getChargeItemReference())) {
            $out->{self::FIELD_CHARGE_ITEM_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getChargeItemCodeableConcept())) {
            $out->{self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT} = $v;
        }
        if ([] !== ($vs = $this->getPriceComponent())) {
            $out->{self::FIELD_PRICE_COMPONENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRICE_COMPONENT}[] = $v;
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