<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R4\FHIRCodePrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRReference;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRIdPrimitive;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R4\FHIRUriPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeMap;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * A pharmaceutical product described in terms of its composition and dose form.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductPharmaceutical
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductPharmaceutical extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ADMINISTRABLE_DOSE_FORM = 'administrableDoseForm';
    const FIELD_UNIT_OF_PRESENTATION = 'unitOfPresentation';
    const FIELD_INGREDIENT = 'ingredient';
    const FIELD_DEVICE = 'device';
    const FIELD_CHARACTERISTICS = 'characteristics';
    const FIELD_ROUTE_OF_ADMINISTRATION = 'routeOfAdministration';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the pharmaceutical medicinal product.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $administrableDoseForm = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $unitOfPresentation = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $ingredient = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $device = [];
    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics[]
     */
    protected null|array $characteristics = [];
    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration[]
     */
    protected null|array $routeOfAdministration = [];

    /**
     * Validation map for fields in type MedicinalProductPharmaceutical
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_ROUTE_OF_ADMINISTRATION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicinalProductPharmaceutical Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
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
        if (isset($data[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            if ($data[self::FIELD_ADMINISTRABLE_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setAdministrableDoseForm($data[self::FIELD_ADMINISTRABLE_DOSE_FORM]);
            } else {
                $this->setAdministrableDoseForm(new FHIRCodeableConcept($data[self::FIELD_ADMINISTRABLE_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_UNIT_OF_PRESENTATION])) {
            if ($data[self::FIELD_UNIT_OF_PRESENTATION] instanceof FHIRCodeableConcept) {
                $this->setUnitOfPresentation($data[self::FIELD_UNIT_OF_PRESENTATION]);
            } else {
                $this->setUnitOfPresentation(new FHIRCodeableConcept($data[self::FIELD_UNIT_OF_PRESENTATION]));
            }
        }
        if (isset($data[self::FIELD_INGREDIENT])) {
            if (is_array($data[self::FIELD_INGREDIENT])) {
                foreach($data[self::FIELD_INGREDIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addIngredient($v);
                    } else {
                        $this->addIngredient(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_INGREDIENT] instanceof FHIRReference) {
                $this->addIngredient($data[self::FIELD_INGREDIENT]);
            } else {
                $this->addIngredient(new FHIRReference($data[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if (is_array($data[self::FIELD_DEVICE])) {
                foreach($data[self::FIELD_DEVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDevice($v);
                    } else {
                        $this->addDevice(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->addDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->addDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERISTICS])) {
            if (is_array($data[self::FIELD_CHARACTERISTICS])) {
                foreach($data[self::FIELD_CHARACTERISTICS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalCharacteristics) {
                        $this->addCharacteristics($v);
                    } else {
                        $this->addCharacteristics(new FHIRMedicinalProductPharmaceuticalCharacteristics($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARACTERISTICS] instanceof FHIRMedicinalProductPharmaceuticalCharacteristics) {
                $this->addCharacteristics($data[self::FIELD_CHARACTERISTICS]);
            } else {
                $this->addCharacteristics(new FHIRMedicinalProductPharmaceuticalCharacteristics($data[self::FIELD_CHARACTERISTICS]));
            }
        }
        if (isset($data[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            if (is_array($data[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                foreach($data[self::FIELD_ROUTE_OF_ADMINISTRATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration) {
                        $this->addRouteOfAdministration($v);
                    } else {
                        $this->addRouteOfAdministration(new FHIRMedicinalProductPharmaceuticalRouteOfAdministration($v));
                    }
                }
            } elseif ($data[self::FIELD_ROUTE_OF_ADMINISTRATION] instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration) {
                $this->addRouteOfAdministration($data[self::FIELD_ROUTE_OF_ADMINISTRATION]);
            } else {
                $this->addRouteOfAdministration(new FHIRMedicinalProductPharmaceuticalRouteOfAdministration($data[self::FIELD_ROUTE_OF_ADMINISTRATION]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the pharmaceutical medicinal product.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
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
     * An identifier for the pharmaceutical medicinal product.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
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
     * An identifier for the pharmaceutical medicinal product.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAdministrableDoseForm(): null|FHIRCodeableConcept
    {
        return $this->administrableDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $administrableDoseForm
     * @return static
     */
    public function setAdministrableDoseForm(null|FHIRCodeableConcept $administrableDoseForm = null): self
    {
        if (null === $administrableDoseForm) {
            $administrableDoseForm = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->administrableDoseForm, $administrableDoseForm);
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation(): null|FHIRCodeableConcept
    {
        return $this->unitOfPresentation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @return static
     */
    public function setUnitOfPresentation(null|FHIRCodeableConcept $unitOfPresentation = null): self
    {
        if (null === $unitOfPresentation) {
            $unitOfPresentation = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->unitOfPresentation, $unitOfPresentation);
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getIngredient(): null|array
    {
        return $this->ingredient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $ingredient
     * @return static
     */
    public function addIngredient(null|FHIRReference $ingredient = null): self
    {
        if (null === $ingredient) {
            $ingredient = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $ingredient
     * @return static
     */
    public function setIngredient(array $ingredient = []): self
    {
        if ([] !== $this->ingredient) {
            $this->_trackValuesRemoved(count($this->ingredient));
            $this->ingredient = [];
        }
        if ([] === $ingredient) {
            return $this;
        }
        foreach($ingredient as $v) {
            if ($v instanceof FHIRReference) {
                $this->addIngredient($v);
            } else {
                $this->addIngredient(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getDevice(): null|array
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $device
     * @return static
     */
    public function addDevice(null|FHIRReference $device = null): self
    {
        if (null === $device) {
            $device = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $device
     * @return static
     */
    public function setDevice(array $device = []): self
    {
        if ([] !== $this->device) {
            $this->_trackValuesRemoved(count($this->device));
            $this->device = [];
        }
        if ([] === $device) {
            return $this;
        }
        foreach($device as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDevice($v);
            } else {
                $this->addDevice(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics[]
     */
    public function getCharacteristics(): null|array
    {
        return $this->characteristics;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics $characteristics
     * @return static
     */
    public function addCharacteristics(null|FHIRMedicinalProductPharmaceuticalCharacteristics $characteristics = null): self
    {
        if (null === $characteristics) {
            $characteristics = new FHIRMedicinalProductPharmaceuticalCharacteristics();
        }
        $this->_trackValueAdded();
        $this->characteristics[] = $characteristics;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics[] $characteristics
     * @return static
     */
    public function setCharacteristics(array $characteristics = []): self
    {
        if ([] !== $this->characteristics) {
            $this->_trackValuesRemoved(count($this->characteristics));
            $this->characteristics = [];
        }
        if ([] === $characteristics) {
            return $this;
        }
        foreach($characteristics as $v) {
            if ($v instanceof FHIRMedicinalProductPharmaceuticalCharacteristics) {
                $this->addCharacteristics($v);
            } else {
                $this->addCharacteristics(new FHIRMedicinalProductPharmaceuticalCharacteristics($v));
            }
        }
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration[]
     */
    public function getRouteOfAdministration(): null|array
    {
        return $this->routeOfAdministration;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration $routeOfAdministration
     * @return static
     */
    public function addRouteOfAdministration(null|FHIRMedicinalProductPharmaceuticalRouteOfAdministration $routeOfAdministration = null): self
    {
        if (null === $routeOfAdministration) {
            $routeOfAdministration = new FHIRMedicinalProductPharmaceuticalRouteOfAdministration();
        }
        $this->_trackValueAdded();
        $this->routeOfAdministration[] = $routeOfAdministration;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration[] $routeOfAdministration
     * @return static
     */
    public function setRouteOfAdministration(array $routeOfAdministration = []): self
    {
        if ([] !== $this->routeOfAdministration) {
            $this->_trackValuesRemoved(count($this->routeOfAdministration));
            $this->routeOfAdministration = [];
        }
        if ([] === $routeOfAdministration) {
            return $this;
        }
        foreach($routeOfAdministration as $v) {
            if ($v instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration) {
                $this->addRouteOfAdministration($v);
            } else {
                $this->addRouteOfAdministration(new FHIRMedicinalProductPharmaceuticalRouteOfAdministration($v));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_OF_PRESENTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INGREDIENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCharacteristics())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERISTICS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROUTE_OF_ADMINISTRATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            $v = $this->getAdministrableDoseForm();
            foreach($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_ADMINISTRABLE_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
                        $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_OF_PRESENTATION])) {
            $v = $this->getUnitOfPresentation();
            foreach($validationRules[self::FIELD_UNIT_OF_PRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_UNIT_OF_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_OF_PRESENTATION])) {
                        $errs[self::FIELD_UNIT_OF_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_UNIT_OF_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTICS])) {
            $v = $this->getCharacteristics();
            foreach($validationRules[self::FIELD_CHARACTERISTICS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_CHARACTERISTICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTICS])) {
                        $errs[self::FIELD_CHARACTERISTICS] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            $v = $this->getRouteOfAdministration();
            foreach($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_ROUTE_OF_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                        $errs[self::FIELD_ROUTE_OF_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_ROUTE_OF_ADMINISTRATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
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
        } else if (!($type instanceof FHIRMedicinalProductPharmaceutical)) {
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_ADMINISTRABLE_DOSE_FORM === $n->nodeName) {
                $type->setAdministrableDoseForm(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_UNIT_OF_PRESENTATION === $n->nodeName) {
                $type->setUnitOfPresentation(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INGREDIENT === $n->nodeName) {
                $type->addIngredient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DEVICE === $n->nodeName) {
                $type->addDevice(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CHARACTERISTICS === $n->nodeName) {
                $type->addCharacteristics(FHIRMedicinalProductPharmaceuticalCharacteristics::xmlUnserialize($n));
            } elseif (self::FIELD_ROUTE_OF_ADMINISTRATION === $n->nodeName) {
                $type->addRouteOfAdministration(FHIRMedicinalProductPharmaceuticalRouteOfAdministration::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicinalProductPharmaceutical'), $libxmlOpts);
            $element = $dom->documentElement;
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
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADMINISTRABLE_DOSE_FORM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UNIT_OF_PRESENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INGREDIENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEVICE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCharacteristics())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CHARACTERISTICS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ROUTE_OF_ADMINISTRATION);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $out->{self::FIELD_ADMINISTRABLE_DOSE_FORM} = $v;
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $out->{self::FIELD_UNIT_OF_PRESENTATION} = $v;
        }
        if ([] !== ($vs = $this->getIngredient())) {
            $out->{self::FIELD_INGREDIENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INGREDIENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            $out->{self::FIELD_DEVICE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEVICE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCharacteristics())) {
            $out->{self::FIELD_CHARACTERISTICS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CHARACTERISTICS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            $out->{self::FIELD_ROUTE_OF_ADMINISTRATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ROUTE_OF_ADMINISTRATION}[] = $v;
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