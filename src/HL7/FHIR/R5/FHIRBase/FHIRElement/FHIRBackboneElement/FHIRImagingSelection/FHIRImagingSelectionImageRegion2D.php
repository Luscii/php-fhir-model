<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType;
use HL7\FHIR\R5\FHIRDecimalPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A selection of DICOM SOP instances and/or frames within a single Study and
 * Series. This might include additional specifics such as an image region, an
 * Observation UID or a Segmentation Number, allowing linkage to an Observation
 * Resource or transferring this information along with the ImagingStudy Resource.
 *
 * Class FHIRImagingSelectionImageRegion2D
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection
 */
class FHIRImagingSelectionImageRegion2D extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_IMAGE_REGION_2D;

    const FIELD_REGION_TYPE = 'regionType';
    const FIELD_REGION_TYPE_EXT = '_regionType';
    const FIELD_COORDINATE = 'coordinate';
    const FIELD_COORDINATE_EXT = '_coordinate';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the type of image region.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType
     */
    protected null|FHIRImagingSelectionDGraphicType $regionType = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal[]
     */
    protected null|array $coordinate = [];

    /**
     * Validation map for fields in type ImagingSelection.ImageRegion2D
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_COORDINATE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImagingSelectionImageRegion2D Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_REGION_TYPE]) || isset($data[self::FIELD_REGION_TYPE_EXT])) {
            $value = $data[self::FIELD_REGION_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_REGION_TYPE_EXT]) && is_array($data[self::FIELD_REGION_TYPE_EXT])) ? $data[self::FIELD_REGION_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRImagingSelectionDGraphicType) {
                    $this->setRegionType($value);
                } else if (is_array($value)) {
                    $this->setRegionType(new FHIRImagingSelectionDGraphicType(array_merge($ext, $value)));
                } else {
                    $this->setRegionType(new FHIRImagingSelectionDGraphicType([FHIRImagingSelectionDGraphicType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRegionType(new FHIRImagingSelectionDGraphicType($ext));
            }
        }
        if (isset($data[self::FIELD_COORDINATE]) || isset($data[self::FIELD_COORDINATE_EXT])) {
            $value = $data[self::FIELD_COORDINATE] ?? null;
            $ext = (isset($data[self::FIELD_COORDINATE_EXT]) && is_array($data[self::FIELD_COORDINATE_EXT])) ? $data[self::FIELD_COORDINATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addCoordinate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addCoordinate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addCoordinate(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addCoordinate(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addCoordinate(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addCoordinate(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addCoordinate(new FHIRDecimal($iext));
                }
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the type of image region.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType
     */
    public function getRegionType(): null|FHIRImagingSelectionDGraphicType
    {
        return $this->regionType;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the type of image region.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType $regionType
     * @return static
     */
    public function setRegionType(null|FHIRImagingSelectionDGraphicType $regionType = null): self
    {
        if (null === $regionType) {
            $regionType = new FHIRImagingSelectionDGraphicType();
        }
        $this->_trackValueSet($this->regionType, $regionType);
        $this->regionType = $regionType;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal[]
     */
    public function getCoordinate(): null|array
    {
        return $this->coordinate;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @param null|string|float|int|\HL7\FHIR\R5\FHIRDecimalPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal $coordinate
     * @return static
     */
    public function addCoordinate(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $coordinate = null): self
    {
        if (null !== $coordinate && !($coordinate instanceof FHIRDecimal)) {
            $coordinate = new FHIRDecimal($coordinate);
        }
        $this->_trackValueAdded();
        $this->coordinate[] = $coordinate;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDecimal[] $coordinate
     * @return static
     */
    public function setCoordinate(array $coordinate = []): self
    {
        if ([] !== $this->coordinate) {
            $this->_trackValuesRemoved(count($this->coordinate));
            $this->coordinate = [];
        }
        if ([] === $coordinate) {
            return $this;
        }
        foreach($coordinate as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addCoordinate($v);
            } else {
                $this->addCoordinate(new FHIRDecimal($v));
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
        if (null !== ($v = $this->getRegionType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REGION_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCoordinate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COORDINATE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGION_TYPE])) {
            $v = $this->getRegionType();
            foreach($validationRules[self::FIELD_REGION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_IMAGE_REGION_2D, self::FIELD_REGION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGION_TYPE])) {
                        $errs[self::FIELD_REGION_TYPE] = [];
                    }
                    $errs[self::FIELD_REGION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COORDINATE])) {
            $v = $this->getCoordinate();
            foreach($validationRules[self::FIELD_COORDINATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_IMAGE_REGION_2D, self::FIELD_COORDINATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COORDINATE])) {
                        $errs[self::FIELD_COORDINATE] = [];
                    }
                    $errs[self::FIELD_COORDINATE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D
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
        } else if (!($type instanceof FHIRImagingSelectionImageRegion2D)) {
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
            if (self::FIELD_REGION_TYPE === $n->nodeName) {
                $type->setRegionType(FHIRImagingSelectionDGraphicType::xmlUnserialize($n));
            } elseif (self::FIELD_COORDINATE === $n->nodeName) {
                $type->addCoordinate(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COORDINATE);
        if (null !== $n) {
            $type->addCoordinate($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ImagingSelectionImageRegion2D'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getRegionType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REGION_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCoordinate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COORDINATE);
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
        if (null !== ($v = $this->getRegionType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REGION_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRImagingSelectionDGraphicType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REGION_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCoordinate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDecimal::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_COORDINATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COORDINATE_EXT} = $exts;
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