<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVisionEyes;
use HL7\FHIR\R5\FHIRDecimalPrimitive;
use HL7\FHIR\R5\FHIRIntegerPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * An authorization for the provision of glasses and/or contact lenses to a
 * patient.
 *
 * Class FHIRVisionPrescriptionLensSpecification
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription
 */
class FHIRVisionPrescriptionLensSpecification extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION;

    const FIELD_PRODUCT = 'product';
    const FIELD_EYE = 'eye';
    const FIELD_EYE_EXT = '_eye';
    const FIELD_SPHERE = 'sphere';
    const FIELD_SPHERE_EXT = '_sphere';
    const FIELD_CYLINDER = 'cylinder';
    const FIELD_CYLINDER_EXT = '_cylinder';
    const FIELD_AXIS = 'axis';
    const FIELD_AXIS_EXT = '_axis';
    const FIELD_PRISM = 'prism';
    const FIELD_ADD = 'add';
    const FIELD_ADD_EXT = '_add';
    const FIELD_POWER = 'power';
    const FIELD_POWER_EXT = '_power';
    const FIELD_BACK_CURVE = 'backCurve';
    const FIELD_BACK_CURVE_EXT = '_backCurve';
    const FIELD_DIAMETER = 'diameter';
    const FIELD_DIAMETER_EXT = '_diameter';
    const FIELD_DURATION = 'duration';
    const FIELD_COLOR = 'color';
    const FIELD_COLOR_EXT = '_color';
    const FIELD_BRAND = 'brand';
    const FIELD_BRAND_EXT = '_brand';
    const FIELD_NOTE = 'note';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $product = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVisionEyes
     */
    protected null|FHIRVisionEyes $eye = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $sphere = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $cylinder = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $axis = null;
    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[]
     */
    protected null|array $prism = [];
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $add = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $power = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $backCurve = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $diameter = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $duration = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $color = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $brand = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type VisionPrescription.LensSpecification
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRVisionPrescriptionLensSpecification Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PRODUCT])) {
            if ($data[self::FIELD_PRODUCT] instanceof FHIRCodeableConcept) {
                $this->setProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->setProduct(new FHIRCodeableConcept($data[self::FIELD_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_EYE]) || isset($data[self::FIELD_EYE_EXT])) {
            $value = $data[self::FIELD_EYE] ?? null;
            $ext = (isset($data[self::FIELD_EYE_EXT]) && is_array($data[self::FIELD_EYE_EXT])) ? $data[self::FIELD_EYE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRVisionEyes) {
                    $this->setEye($value);
                } else if (is_array($value)) {
                    $this->setEye(new FHIRVisionEyes(array_merge($ext, $value)));
                } else {
                    $this->setEye(new FHIRVisionEyes([FHIRVisionEyes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEye(new FHIRVisionEyes($ext));
            }
        }
        if (isset($data[self::FIELD_SPHERE]) || isset($data[self::FIELD_SPHERE_EXT])) {
            $value = $data[self::FIELD_SPHERE] ?? null;
            $ext = (isset($data[self::FIELD_SPHERE_EXT]) && is_array($data[self::FIELD_SPHERE_EXT])) ? $data[self::FIELD_SPHERE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setSphere($value);
                } else if (is_array($value)) {
                    $this->setSphere(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setSphere(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSphere(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_CYLINDER]) || isset($data[self::FIELD_CYLINDER_EXT])) {
            $value = $data[self::FIELD_CYLINDER] ?? null;
            $ext = (isset($data[self::FIELD_CYLINDER_EXT]) && is_array($data[self::FIELD_CYLINDER_EXT])) ? $data[self::FIELD_CYLINDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setCylinder($value);
                } else if (is_array($value)) {
                    $this->setCylinder(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setCylinder(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCylinder(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_AXIS]) || isset($data[self::FIELD_AXIS_EXT])) {
            $value = $data[self::FIELD_AXIS] ?? null;
            $ext = (isset($data[self::FIELD_AXIS_EXT]) && is_array($data[self::FIELD_AXIS_EXT])) ? $data[self::FIELD_AXIS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAxis($value);
                } else if (is_array($value)) {
                    $this->setAxis(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAxis(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAxis(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_PRISM])) {
            if (is_array($data[self::FIELD_PRISM])) {
                foreach($data[self::FIELD_PRISM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRVisionPrescriptionPrism) {
                        $this->addPrism($v);
                    } else {
                        $this->addPrism(new FHIRVisionPrescriptionPrism($v));
                    }
                }
            } elseif ($data[self::FIELD_PRISM] instanceof FHIRVisionPrescriptionPrism) {
                $this->addPrism($data[self::FIELD_PRISM]);
            } else {
                $this->addPrism(new FHIRVisionPrescriptionPrism($data[self::FIELD_PRISM]));
            }
        }
        if (isset($data[self::FIELD_ADD]) || isset($data[self::FIELD_ADD_EXT])) {
            $value = $data[self::FIELD_ADD] ?? null;
            $ext = (isset($data[self::FIELD_ADD_EXT]) && is_array($data[self::FIELD_ADD_EXT])) ? $data[self::FIELD_ADD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAdd($value);
                } else if (is_array($value)) {
                    $this->setAdd(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAdd(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAdd(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_POWER]) || isset($data[self::FIELD_POWER_EXT])) {
            $value = $data[self::FIELD_POWER] ?? null;
            $ext = (isset($data[self::FIELD_POWER_EXT]) && is_array($data[self::FIELD_POWER_EXT])) ? $data[self::FIELD_POWER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPower($value);
                } else if (is_array($value)) {
                    $this->setPower(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPower(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPower(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_BACK_CURVE]) || isset($data[self::FIELD_BACK_CURVE_EXT])) {
            $value = $data[self::FIELD_BACK_CURVE] ?? null;
            $ext = (isset($data[self::FIELD_BACK_CURVE_EXT]) && is_array($data[self::FIELD_BACK_CURVE_EXT])) ? $data[self::FIELD_BACK_CURVE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setBackCurve($value);
                } else if (is_array($value)) {
                    $this->setBackCurve(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setBackCurve(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBackCurve(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DIAMETER]) || isset($data[self::FIELD_DIAMETER_EXT])) {
            $value = $data[self::FIELD_DIAMETER] ?? null;
            $ext = (isset($data[self::FIELD_DIAMETER_EXT]) && is_array($data[self::FIELD_DIAMETER_EXT])) ? $data[self::FIELD_DIAMETER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDiameter($value);
                } else if (is_array($value)) {
                    $this->setDiameter(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDiameter(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDiameter(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_COLOR]) || isset($data[self::FIELD_COLOR_EXT])) {
            $value = $data[self::FIELD_COLOR] ?? null;
            $ext = (isset($data[self::FIELD_COLOR_EXT]) && is_array($data[self::FIELD_COLOR_EXT])) ? $data[self::FIELD_COLOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setColor($value);
                } else if (is_array($value)) {
                    $this->setColor(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setColor(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setColor(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_BRAND]) || isset($data[self::FIELD_BRAND_EXT])) {
            $value = $data[self::FIELD_BRAND] ?? null;
            $ext = (isset($data[self::FIELD_BRAND_EXT]) && is_array($data[self::FIELD_BRAND_EXT])) ? $data[self::FIELD_BRAND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBrand($value);
                } else if (is_array($value)) {
                    $this->setBrand(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBrand(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBrand(new FHIRString($ext));
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
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProduct(): null|FHIRCodeableConcept
    {
        return $this->product;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $product
     * @return static
     */
    public function setProduct(null|FHIRCodeableConcept $product = null): self
    {
        if (null === $product) {
            $product = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->product, $product);
        $this->product = $product;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVisionEyes
     */
    public function getEye(): null|FHIRVisionEyes
    {
        return $this->eye;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRVisionEyes $eye
     * @return static
     */
    public function setEye(null|FHIRVisionEyes $eye = null): self
    {
        if (null === $eye) {
            $eye = new FHIRVisionEyes();
        }
        $this->_trackValueSet($this->eye, $eye);
        $this->eye = $eye;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getSphere(): null|FHIRDecimal
    {
        return $this->sphere;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $sphere
     * @return static
     */
    public function setSphere(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sphere = null): self
    {
        if (null !== $sphere && !($sphere instanceof FHIRDecimal)) {
            $sphere = new FHIRDecimal($sphere);
        }
        $this->_trackValueSet($this->sphere, $sphere);
        $this->sphere = $sphere;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getCylinder(): null|FHIRDecimal
    {
        return $this->cylinder;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $cylinder
     * @return static
     */
    public function setCylinder(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $cylinder = null): self
    {
        if (null !== $cylinder && !($cylinder instanceof FHIRDecimal)) {
            $cylinder = new FHIRDecimal($cylinder);
        }
        $this->_trackValueSet($this->cylinder, $cylinder);
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getAxis(): null|FHIRInteger
    {
        return $this->axis;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRIntegerPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger $axis
     * @return static
     */
    public function setAxis(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $axis = null): self
    {
        if (null !== $axis && !($axis instanceof FHIRInteger)) {
            $axis = new FHIRInteger($axis);
        }
        $this->_trackValueSet($this->axis, $axis);
        $this->axis = $axis;
        return $this;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[]
     */
    public function getPrism(): null|array
    {
        return $this->prism;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism $prism
     * @return static
     */
    public function addPrism(null|FHIRVisionPrescriptionPrism $prism = null): self
    {
        if (null === $prism) {
            $prism = new FHIRVisionPrescriptionPrism();
        }
        $this->_trackValueAdded();
        $this->prism[] = $prism;
        return $this;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[] $prism
     * @return static
     */
    public function setPrism(array $prism = []): self
    {
        if ([] !== $this->prism) {
            $this->_trackValuesRemoved(count($this->prism));
            $this->prism = [];
        }
        if ([] === $prism) {
            return $this;
        }
        foreach($prism as $v) {
            if ($v instanceof FHIRVisionPrescriptionPrism) {
                $this->addPrism($v);
            } else {
                $this->addPrism(new FHIRVisionPrescriptionPrism($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getAdd(): null|FHIRDecimal
    {
        return $this->add;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $add
     * @return static
     */
    public function setAdd(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $add = null): self
    {
        if (null !== $add && !($add instanceof FHIRDecimal)) {
            $add = new FHIRDecimal($add);
        }
        $this->_trackValueSet($this->add, $add);
        $this->add = $add;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getPower(): null|FHIRDecimal
    {
        return $this->power;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $power
     * @return static
     */
    public function setPower(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $power = null): self
    {
        if (null !== $power && !($power instanceof FHIRDecimal)) {
            $power = new FHIRDecimal($power);
        }
        $this->_trackValueSet($this->power, $power);
        $this->power = $power;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getBackCurve(): null|FHIRDecimal
    {
        return $this->backCurve;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $backCurve
     * @return static
     */
    public function setBackCurve(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $backCurve = null): self
    {
        if (null !== $backCurve && !($backCurve instanceof FHIRDecimal)) {
            $backCurve = new FHIRDecimal($backCurve);
        }
        $this->_trackValueSet($this->backCurve, $backCurve);
        $this->backCurve = $backCurve;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getDiameter(): null|FHIRDecimal
    {
        return $this->diameter;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $diameter
     * @return static
     */
    public function setDiameter(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $diameter = null): self
    {
        if (null !== $diameter && !($diameter instanceof FHIRDecimal)) {
            $diameter = new FHIRDecimal($diameter);
        }
        $this->_trackValueSet($this->diameter, $diameter);
        $this->diameter = $diameter;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDuration(): null|FHIRQuantity
    {
        return $this->duration;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $duration
     * @return static
     */
    public function setDuration(null|FHIRQuantity $duration = null): self
    {
        if (null === $duration) {
            $duration = new FHIRQuantity();
        }
        $this->_trackValueSet($this->duration, $duration);
        $this->duration = $duration;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getColor(): null|FHIRString
    {
        return $this->color;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $color
     * @return static
     */
    public function setColor(null|string|FHIRStringPrimitive|FHIRString $color = null): self
    {
        if (null !== $color && !($color instanceof FHIRString)) {
            $color = new FHIRString($color);
        }
        $this->_trackValueSet($this->color, $color);
        $this->color = $color;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getBrand(): null|FHIRString
    {
        return $this->brand;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $brand
     * @return static
     */
    public function setBrand(null|string|FHIRStringPrimitive|FHIRString $brand = null): self
    {
        if (null !== $brand && !($brand instanceof FHIRString)) {
            $brand = new FHIRString($brand);
        }
        $this->_trackValueSet($this->brand, $brand);
        $this->brand = $brand;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
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
     * Notes for special requirements such as coatings and lens materials.
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
     * Notes for special requirements such as coatings and lens materials.
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
        if (null !== ($v = $this->getProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEye())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EYE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSphere())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPHERE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CYLINDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAxis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AXIS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPrism())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRISM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAdd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPower())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POWER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BACK_CURVE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAMETER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getColor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBrand())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BRAND] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT])) {
                        $errs[self::FIELD_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EYE])) {
            $v = $this->getEye();
            foreach($validationRules[self::FIELD_EYE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_EYE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EYE])) {
                        $errs[self::FIELD_EYE] = [];
                    }
                    $errs[self::FIELD_EYE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPHERE])) {
            $v = $this->getSphere();
            foreach($validationRules[self::FIELD_SPHERE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_SPHERE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPHERE])) {
                        $errs[self::FIELD_SPHERE] = [];
                    }
                    $errs[self::FIELD_SPHERE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CYLINDER])) {
            $v = $this->getCylinder();
            foreach($validationRules[self::FIELD_CYLINDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_CYLINDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CYLINDER])) {
                        $errs[self::FIELD_CYLINDER] = [];
                    }
                    $errs[self::FIELD_CYLINDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AXIS])) {
            $v = $this->getAxis();
            foreach($validationRules[self::FIELD_AXIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_AXIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AXIS])) {
                        $errs[self::FIELD_AXIS] = [];
                    }
                    $errs[self::FIELD_AXIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRISM])) {
            $v = $this->getPrism();
            foreach($validationRules[self::FIELD_PRISM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_PRISM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRISM])) {
                        $errs[self::FIELD_PRISM] = [];
                    }
                    $errs[self::FIELD_PRISM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADD])) {
            $v = $this->getAdd();
            foreach($validationRules[self::FIELD_ADD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_ADD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADD])) {
                        $errs[self::FIELD_ADD] = [];
                    }
                    $errs[self::FIELD_ADD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POWER])) {
            $v = $this->getPower();
            foreach($validationRules[self::FIELD_POWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_POWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POWER])) {
                        $errs[self::FIELD_POWER] = [];
                    }
                    $errs[self::FIELD_POWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BACK_CURVE])) {
            $v = $this->getBackCurve();
            foreach($validationRules[self::FIELD_BACK_CURVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_BACK_CURVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BACK_CURVE])) {
                        $errs[self::FIELD_BACK_CURVE] = [];
                    }
                    $errs[self::FIELD_BACK_CURVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAMETER])) {
            $v = $this->getDiameter();
            foreach($validationRules[self::FIELD_DIAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_DIAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAMETER])) {
                        $errs[self::FIELD_DIAMETER] = [];
                    }
                    $errs[self::FIELD_DIAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLOR])) {
            $v = $this->getColor();
            foreach($validationRules[self::FIELD_COLOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_COLOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLOR])) {
                        $errs[self::FIELD_COLOR] = [];
                    }
                    $errs[self::FIELD_COLOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BRAND])) {
            $v = $this->getBrand();
            foreach($validationRules[self::FIELD_BRAND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_BRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BRAND])) {
                        $errs[self::FIELD_BRAND] = [];
                    }
                    $errs[self::FIELD_BRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
        } else if (!($type instanceof FHIRVisionPrescriptionLensSpecification)) {
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
            if (self::FIELD_PRODUCT === $n->nodeName) {
                $type->setProduct(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_EYE === $n->nodeName) {
                $type->setEye(FHIRVisionEyes::xmlUnserialize($n));
            } elseif (self::FIELD_SPHERE === $n->nodeName) {
                $type->setSphere(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_CYLINDER === $n->nodeName) {
                $type->setCylinder(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_AXIS === $n->nodeName) {
                $type->setAxis(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_PRISM === $n->nodeName) {
                $type->addPrism(FHIRVisionPrescriptionPrism::xmlUnserialize($n));
            } elseif (self::FIELD_ADD === $n->nodeName) {
                $type->setAdd(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_POWER === $n->nodeName) {
                $type->setPower(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_BACK_CURVE === $n->nodeName) {
                $type->setBackCurve(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DIAMETER === $n->nodeName) {
                $type->setDiameter(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION === $n->nodeName) {
                $type->setDuration(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_COLOR === $n->nodeName) {
                $type->setColor(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_BRAND === $n->nodeName) {
                $type->setBrand(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SPHERE);
        if (null !== $n) {
            $pt = $type->getSphere();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSphere($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CYLINDER);
        if (null !== $n) {
            $pt = $type->getCylinder();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCylinder($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AXIS);
        if (null !== $n) {
            $pt = $type->getAxis();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAxis($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ADD);
        if (null !== $n) {
            $pt = $type->getAdd();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAdd($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_POWER);
        if (null !== $n) {
            $pt = $type->getPower();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPower($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BACK_CURVE);
        if (null !== $n) {
            $pt = $type->getBackCurve();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBackCurve($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DIAMETER);
        if (null !== $n) {
            $pt = $type->getDiameter();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDiameter($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COLOR);
        if (null !== $n) {
            $pt = $type->getColor();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setColor($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BRAND);
        if (null !== $n) {
            $pt = $type->getBrand();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBrand($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('VisionPrescriptionLensSpecification'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getProduct())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEye())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EYE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSphere())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SPHERE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCylinder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CYLINDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAxis())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AXIS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPrism())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRISM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAdd())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPower())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_POWER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBackCurve())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BACK_CURVE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiameter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIAMETER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getColor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COLOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBrand())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BRAND);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
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
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getProduct())) {
            $out->{self::FIELD_PRODUCT} = $v;
        }
        if (null !== ($v = $this->getEye())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EYE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRVisionEyes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EYE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSphere())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SPHERE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SPHERE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CYLINDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CYLINDER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAxis())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AXIS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AXIS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPrism())) {
            $out->{self::FIELD_PRISM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRISM}[] = $v;
            }
        }
        if (null !== ($v = $this->getAdd())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPower())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_POWER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_POWER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BACK_CURVE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BACK_CURVE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDiameter())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIAMETER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIAMETER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $out->{self::FIELD_DURATION} = $v;
        }
        if (null !== ($v = $this->getColor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COLOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COLOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBrand())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BRAND} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BRAND_EXT} = $ext;
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