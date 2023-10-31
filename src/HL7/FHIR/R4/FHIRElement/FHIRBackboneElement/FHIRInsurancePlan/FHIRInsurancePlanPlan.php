<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 23rd, 2023 13:30+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2023 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;

/**
 * Details of a Health Insurance product/plan provided by an organization.
 *
 * Class FHIRInsurancePlanPlan
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan
 */
class FHIRInsurancePlanPlan extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_COVERAGE_AREA = 'coverageArea';
    const FIELD_NETWORK = 'network';
    const FIELD_GENERAL_COST = 'generalCost';
    const FIELD_SPECIFIC_COST = 'specificCost';

    /** @var string */
    private $_xmlns = '';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance plan which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    protected ?array $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of plan. For example, "Platinum" or "High Deductable".
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $type = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected ?array $coverageArea = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected ?array $network = [];

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Overall costs associated with the plan.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost[]
     */
    protected ?array $generalCost = [];

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Costs associated with the coverage provided by the product.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost[]
     */
    protected ?array $specificCost = [];

    /**
     * Validation map for fields in type InsurancePlan.Plan
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRInsurancePlanPlan Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInsurancePlanPlan::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
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
        if (isset($data[self::FIELD_COVERAGE_AREA])) {
            if (is_array($data[self::FIELD_COVERAGE_AREA])) {
                foreach($data[self::FIELD_COVERAGE_AREA] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addCoverageArea($v);
                    } else {
                        $this->addCoverageArea(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COVERAGE_AREA] instanceof FHIRReference) {
                $this->addCoverageArea($data[self::FIELD_COVERAGE_AREA]);
            } else {
                $this->addCoverageArea(new FHIRReference($data[self::FIELD_COVERAGE_AREA]));
            }
        }
        if (isset($data[self::FIELD_NETWORK])) {
            if (is_array($data[self::FIELD_NETWORK])) {
                foreach($data[self::FIELD_NETWORK] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addNetwork($v);
                    } else {
                        $this->addNetwork(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_NETWORK] instanceof FHIRReference) {
                $this->addNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->addNetwork(new FHIRReference($data[self::FIELD_NETWORK]));
            }
        }
        if (isset($data[self::FIELD_GENERAL_COST])) {
            if (is_array($data[self::FIELD_GENERAL_COST])) {
                foreach($data[self::FIELD_GENERAL_COST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInsurancePlanGeneralCost) {
                        $this->addGeneralCost($v);
                    } else {
                        $this->addGeneralCost(new FHIRInsurancePlanGeneralCost($v));
                    }
                }
            } elseif ($data[self::FIELD_GENERAL_COST] instanceof FHIRInsurancePlanGeneralCost) {
                $this->addGeneralCost($data[self::FIELD_GENERAL_COST]);
            } else {
                $this->addGeneralCost(new FHIRInsurancePlanGeneralCost($data[self::FIELD_GENERAL_COST]));
            }
        }
        if (isset($data[self::FIELD_SPECIFIC_COST])) {
            if (is_array($data[self::FIELD_SPECIFIC_COST])) {
                foreach($data[self::FIELD_SPECIFIC_COST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInsurancePlanSpecificCost) {
                        $this->addSpecificCost($v);
                    } else {
                        $this->addSpecificCost(new FHIRInsurancePlanSpecificCost($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIFIC_COST] instanceof FHIRInsurancePlanSpecificCost) {
                $this->addSpecificCost($data[self::FIELD_SPECIFIC_COST]);
            } else {
                $this->addSpecificCost(new FHIRInsurancePlanSpecificCost($data[self::FIELD_SPECIFIC_COST]));
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
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<InsurancePlanPlan{$xmlns}></InsurancePlanPlan>";
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance plan which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): ?array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance plan which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(?FHIRIdentifier $identifier = null): object
    {
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
     * Business identifiers assigned to this health insurance plan which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): object
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
     * Type of plan. For example, "Platinum" or "High Deductable".
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): ?FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of plan. For example, "Platinum" or "High Deductable".
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(?FHIRCodeableConcept $type = null): object
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea(): ?array
    {
        return $this->coverageArea;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $coverageArea
     * @return static
     */
    public function addCoverageArea(?FHIRReference $coverageArea = null): object
    {
        $this->_trackValueAdded();
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $coverageArea
     * @return static
     */
    public function setCoverageArea(array $coverageArea = []): object
    {
        if ([] !== $this->coverageArea) {
            $this->_trackValuesRemoved(count($this->coverageArea));
            $this->coverageArea = [];
        }
        if ([] === $coverageArea) {
            return $this;
        }
        foreach($coverageArea as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCoverageArea($v);
            } else {
                $this->addCoverageArea(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getNetwork(): ?array
    {
        return $this->network;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $network
     * @return static
     */
    public function addNetwork(?FHIRReference $network = null): object
    {
        $this->_trackValueAdded();
        $this->network[] = $network;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $network
     * @return static
     */
    public function setNetwork(array $network = []): object
    {
        if ([] !== $this->network) {
            $this->_trackValuesRemoved(count($this->network));
            $this->network = [];
        }
        if ([] === $network) {
            return $this;
        }
        foreach($network as $v) {
            if ($v instanceof FHIRReference) {
                $this->addNetwork($v);
            } else {
                $this->addNetwork(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Overall costs associated with the plan.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost[]
     */
    public function getGeneralCost(): ?array
    {
        return $this->generalCost;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Overall costs associated with the plan.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost $generalCost
     * @return static
     */
    public function addGeneralCost(?FHIRInsurancePlanGeneralCost $generalCost = null): object
    {
        $this->_trackValueAdded();
        $this->generalCost[] = $generalCost;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Overall costs associated with the plan.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost[] $generalCost
     * @return static
     */
    public function setGeneralCost(array $generalCost = []): object
    {
        if ([] !== $this->generalCost) {
            $this->_trackValuesRemoved(count($this->generalCost));
            $this->generalCost = [];
        }
        if ([] === $generalCost) {
            return $this;
        }
        foreach($generalCost as $v) {
            if ($v instanceof FHIRInsurancePlanGeneralCost) {
                $this->addGeneralCost($v);
            } else {
                $this->addGeneralCost(new FHIRInsurancePlanGeneralCost($v));
            }
        }
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Costs associated with the coverage provided by the product.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost[]
     */
    public function getSpecificCost(): ?array
    {
        return $this->specificCost;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Costs associated with the coverage provided by the product.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost $specificCost
     * @return static
     */
    public function addSpecificCost(?FHIRInsurancePlanSpecificCost $specificCost = null): object
    {
        $this->_trackValueAdded();
        $this->specificCost[] = $specificCost;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Costs associated with the coverage provided by the product.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost[] $specificCost
     * @return static
     */
    public function setSpecificCost(array $specificCost = []): object
    {
        if ([] !== $this->specificCost) {
            $this->_trackValuesRemoved(count($this->specificCost));
            $this->specificCost = [];
        }
        if ([] === $specificCost) {
            return $this;
        }
        foreach($specificCost as $v) {
            if ($v instanceof FHIRInsurancePlanSpecificCost) {
                $this->addSpecificCost($v);
            } else {
                $this->addSpecificCost(new FHIRInsurancePlanSpecificCost($v));
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
        return self::$_validationRules;
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
        if ([] !== ($vs = $this->getCoverageArea())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COVERAGE_AREA, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNetwork())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NETWORK, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGeneralCost())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GENERAL_COST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecificCost())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIFIC_COST, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE_AREA])) {
            $v = $this->getCoverageArea();
            foreach($validationRules[self::FIELD_COVERAGE_AREA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN, self::FIELD_COVERAGE_AREA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE_AREA])) {
                        $errs[self::FIELD_COVERAGE_AREA] = [];
                    }
                    $errs[self::FIELD_COVERAGE_AREA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENERAL_COST])) {
            $v = $this->getGeneralCost();
            foreach($validationRules[self::FIELD_GENERAL_COST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN, self::FIELD_GENERAL_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENERAL_COST])) {
                        $errs[self::FIELD_GENERAL_COST] = [];
                    }
                    $errs[self::FIELD_GENERAL_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIFIC_COST])) {
            $v = $this->getSpecificCost();
            foreach($validationRules[self::FIELD_SPECIFIC_COST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN, self::FIELD_SPECIFIC_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIFIC_COST])) {
                        $errs[self::FIELD_SPECIFIC_COST] = [];
                    }
                    $errs[self::FIELD_SPECIFIC_COST][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRInsurancePlanPlan::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRInsurancePlanPlan::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRInsurancePlanPlan(null);
        } elseif (!is_object($type) || !($type instanceof FHIRInsurancePlanPlan)) {
            throw new \RuntimeException(sprintf(
                'FHIRInsurancePlanPlan::xmlUnserialize - $type must be instance of \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
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
            } elseif (self::FIELD_COVERAGE_AREA === $n->nodeName) {
                $type->addCoverageArea(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NETWORK === $n->nodeName) {
                $type->addNetwork(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_GENERAL_COST === $n->nodeName) {
                $type->addGeneralCost(FHIRInsurancePlanGeneralCost::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIFIC_COST === $n->nodeName) {
                $type->addSpecificCost(FHIRInsurancePlanSpecificCost::xmlUnserialize($n));
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
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
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
        if ([] !== ($vs = $this->getCoverageArea())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COVERAGE_AREA);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNetwork())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NETWORK);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getGeneralCost())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GENERAL_COST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSpecificCost())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIFIC_COST);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
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
        if ([] !== ($vs = $this->getCoverageArea())) {
            $out->{self::FIELD_COVERAGE_AREA} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COVERAGE_AREA}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNetwork())) {
            $out->{self::FIELD_NETWORK} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NETWORK}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getGeneralCost())) {
            $out->{self::FIELD_GENERAL_COST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_GENERAL_COST}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecificCost())) {
            $out->{self::FIELD_SPECIFIC_COST} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIFIC_COST}[] = $v;
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