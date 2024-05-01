<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Record details about an anatomical structure. This resource may be used when a
 * coded concept does not provide the necessary detail needed for the use case.
 *
 * Class FHIRBodyStructureIncludedStructure
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure
 */
class FHIRBodyStructureIncludedStructure extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE;

    const FIELD_STRUCTURE = 'structure';
    const FIELD_LATERALITY = 'laterality';
    const FIELD_BODY_LANDMARK_ORIENTATION = 'bodyLandmarkOrientation';
    const FIELD_SPATIAL_REFERENCE = 'spatialReference';
    const FIELD_QUALIFIER = 'qualifier';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $structure = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $laterality = null;
    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[]
     */
    protected null|array $bodyLandmarkOrientation = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $spatialReference = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $qualifier = [];

    /**
     * Validation map for fields in type BodyStructure.IncludedStructure
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRBodyStructureIncludedStructure Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STRUCTURE])) {
            if ($data[self::FIELD_STRUCTURE] instanceof FHIRCodeableConcept) {
                $this->setStructure($data[self::FIELD_STRUCTURE]);
            } else {
                $this->setStructure(new FHIRCodeableConcept($data[self::FIELD_STRUCTURE]));
            }
        }
        if (isset($data[self::FIELD_LATERALITY])) {
            if ($data[self::FIELD_LATERALITY] instanceof FHIRCodeableConcept) {
                $this->setLaterality($data[self::FIELD_LATERALITY]);
            } else {
                $this->setLaterality(new FHIRCodeableConcept($data[self::FIELD_LATERALITY]));
            }
        }
        if (isset($data[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
            if (is_array($data[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
                foreach($data[self::FIELD_BODY_LANDMARK_ORIENTATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBodyStructureBodyLandmarkOrientation) {
                        $this->addBodyLandmarkOrientation($v);
                    } else {
                        $this->addBodyLandmarkOrientation(new FHIRBodyStructureBodyLandmarkOrientation($v));
                    }
                }
            } elseif ($data[self::FIELD_BODY_LANDMARK_ORIENTATION] instanceof FHIRBodyStructureBodyLandmarkOrientation) {
                $this->addBodyLandmarkOrientation($data[self::FIELD_BODY_LANDMARK_ORIENTATION]);
            } else {
                $this->addBodyLandmarkOrientation(new FHIRBodyStructureBodyLandmarkOrientation($data[self::FIELD_BODY_LANDMARK_ORIENTATION]));
            }
        }
        if (isset($data[self::FIELD_SPATIAL_REFERENCE])) {
            if (is_array($data[self::FIELD_SPATIAL_REFERENCE])) {
                foreach($data[self::FIELD_SPATIAL_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSpatialReference($v);
                    } else {
                        $this->addSpatialReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SPATIAL_REFERENCE] instanceof FHIRReference) {
                $this->addSpatialReference($data[self::FIELD_SPATIAL_REFERENCE]);
            } else {
                $this->addSpatialReference(new FHIRReference($data[self::FIELD_SPATIAL_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_QUALIFIER])) {
            if (is_array($data[self::FIELD_QUALIFIER])) {
                foreach($data[self::FIELD_QUALIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addQualifier($v);
                    } else {
                        $this->addQualifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_QUALIFIER] instanceof FHIRCodeableConcept) {
                $this->addQualifier($data[self::FIELD_QUALIFIER]);
            } else {
                $this->addQualifier(new FHIRCodeableConcept($data[self::FIELD_QUALIFIER]));
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
     * Code that represents the included structure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStructure(): null|FHIRCodeableConcept
    {
        return $this->structure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $structure
     * @return static
     */
    public function setStructure(null|FHIRCodeableConcept $structure = null): self
    {
        if (null === $structure) {
            $structure = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->structure, $structure);
        $this->structure = $structure;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLaterality(): null|FHIRCodeableConcept
    {
        return $this->laterality;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $laterality
     * @return static
     */
    public function setLaterality(null|FHIRCodeableConcept $laterality = null): self
    {
        if (null === $laterality) {
            $laterality = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->laterality, $laterality);
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[]
     */
    public function getBodyLandmarkOrientation(): null|array
    {
        return $this->bodyLandmarkOrientation;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation $bodyLandmarkOrientation
     * @return static
     */
    public function addBodyLandmarkOrientation(null|FHIRBodyStructureBodyLandmarkOrientation $bodyLandmarkOrientation = null): self
    {
        if (null === $bodyLandmarkOrientation) {
            $bodyLandmarkOrientation = new FHIRBodyStructureBodyLandmarkOrientation();
        }
        $this->_trackValueAdded();
        $this->bodyLandmarkOrientation[] = $bodyLandmarkOrientation;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[] $bodyLandmarkOrientation
     * @return static
     */
    public function setBodyLandmarkOrientation(array $bodyLandmarkOrientation = []): self
    {
        if ([] !== $this->bodyLandmarkOrientation) {
            $this->_trackValuesRemoved(count($this->bodyLandmarkOrientation));
            $this->bodyLandmarkOrientation = [];
        }
        if ([] === $bodyLandmarkOrientation) {
            return $this;
        }
        foreach($bodyLandmarkOrientation as $v) {
            if ($v instanceof FHIRBodyStructureBodyLandmarkOrientation) {
                $this->addBodyLandmarkOrientation($v);
            } else {
                $this->addBodyLandmarkOrientation(new FHIRBodyStructureBodyLandmarkOrientation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSpatialReference(): null|array
    {
        return $this->spatialReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $spatialReference
     * @return static
     */
    public function addSpatialReference(null|FHIRReference $spatialReference = null): self
    {
        if (null === $spatialReference) {
            $spatialReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->spatialReference[] = $spatialReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $spatialReference
     * @return static
     */
    public function setSpatialReference(array $spatialReference = []): self
    {
        if ([] !== $this->spatialReference) {
            $this->_trackValuesRemoved(count($this->spatialReference));
            $this->spatialReference = [];
        }
        if ([] === $spatialReference) {
            return $this;
        }
        foreach($spatialReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSpatialReference($v);
            } else {
                $this->addSpatialReference(new FHIRReference($v));
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
     * Code that represents the included structure qualifier.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getQualifier(): null|array
    {
        return $this->qualifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $qualifier
     * @return static
     */
    public function addQualifier(null|FHIRCodeableConcept $qualifier = null): self
    {
        if (null === $qualifier) {
            $qualifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->qualifier[] = $qualifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $qualifier
     * @return static
     */
    public function setQualifier(array $qualifier = []): self
    {
        if ([] !== $this->qualifier) {
            $this->_trackValuesRemoved(count($this->qualifier));
            $this->qualifier = [];
        }
        if ([] === $qualifier) {
            return $this;
        }
        foreach($qualifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addQualifier($v);
            } else {
                $this->addQualifier(new FHIRCodeableConcept($v));
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
        if (null !== ($v = $this->getStructure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLaterality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LATERALITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBodyLandmarkOrientation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BODY_LANDMARK_ORIENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpatialReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPATIAL_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getQualifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_QUALIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE])) {
            $v = $this->getStructure();
            foreach($validationRules[self::FIELD_STRUCTURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_STRUCTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE])) {
                        $errs[self::FIELD_STRUCTURE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LATERALITY])) {
            $v = $this->getLaterality();
            foreach($validationRules[self::FIELD_LATERALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_LATERALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LATERALITY])) {
                        $errs[self::FIELD_LATERALITY] = [];
                    }
                    $errs[self::FIELD_LATERALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
            $v = $this->getBodyLandmarkOrientation();
            foreach($validationRules[self::FIELD_BODY_LANDMARK_ORIENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_BODY_LANDMARK_ORIENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
                        $errs[self::FIELD_BODY_LANDMARK_ORIENTATION] = [];
                    }
                    $errs[self::FIELD_BODY_LANDMARK_ORIENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPATIAL_REFERENCE])) {
            $v = $this->getSpatialReference();
            foreach($validationRules[self::FIELD_SPATIAL_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_SPATIAL_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPATIAL_REFERENCE])) {
                        $errs[self::FIELD_SPATIAL_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SPATIAL_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALIFIER])) {
            $v = $this->getQualifier();
            foreach($validationRules[self::FIELD_QUALIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_QUALIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALIFIER])) {
                        $errs[self::FIELD_QUALIFIER] = [];
                    }
                    $errs[self::FIELD_QUALIFIER][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure
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
        } else if (!($type instanceof FHIRBodyStructureIncludedStructure)) {
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
            if (self::FIELD_STRUCTURE === $n->nodeName) {
                $type->setStructure(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_LATERALITY === $n->nodeName) {
                $type->setLaterality(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_BODY_LANDMARK_ORIENTATION === $n->nodeName) {
                $type->addBodyLandmarkOrientation(FHIRBodyStructureBodyLandmarkOrientation::xmlUnserialize($n));
            } elseif (self::FIELD_SPATIAL_REFERENCE === $n->nodeName) {
                $type->addSpatialReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_QUALIFIER === $n->nodeName) {
                $type->addQualifier(FHIRCodeableConcept::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('BodyStructureIncludedStructure'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getStructure())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRUCTURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLaterality())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LATERALITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getBodyLandmarkOrientation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_BODY_LANDMARK_ORIENTATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSpatialReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPATIAL_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getQualifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_QUALIFIER);
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
        if (null !== ($v = $this->getStructure())) {
            $out->{self::FIELD_STRUCTURE} = $v;
        }
        if (null !== ($v = $this->getLaterality())) {
            $out->{self::FIELD_LATERALITY} = $v;
        }
        if ([] !== ($vs = $this->getBodyLandmarkOrientation())) {
            $out->{self::FIELD_BODY_LANDMARK_ORIENTATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_BODY_LANDMARK_ORIENTATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpatialReference())) {
            $out->{self::FIELD_SPATIAL_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPATIAL_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getQualifier())) {
            $out->{self::FIELD_QUALIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_QUALIFIER}[] = $v;
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