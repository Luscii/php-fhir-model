<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A single issue - either an indication, contraindication, interaction or an
 * undesirable effect for a medicinal product, medication, device or procedure.
 *
 * Class FHIRClinicalUseDefinitionContraindication
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition
 */
class FHIRClinicalUseDefinitionContraindication extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION;

    const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_INDICATION = 'indication';
    const FIELD_APPLICABILITY = 'applicability';
    const FIELD_OTHER_THERAPY = 'otherTherapy';

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as contraindicating against this item.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $diseaseSymptomProcedure = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the contraindication, for example
     * "chronic" or "metastatic".
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $diseaseStatus = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $comorbidity = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The indication which this is a contraidication for.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $indication = [];
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An expression that returns true or false, indicating whether the indication is
     * applicable or not, after having applied its other elements.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    protected null|FHIRExpression $applicability = null;
    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    protected null|array $otherTherapy = [];

    /**
     * Validation map for fields in type ClinicalUseDefinition.Contraindication
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRClinicalUseDefinitionContraindication Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            if ($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableReference) {
                $this->setDiseaseSymptomProcedure($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $this->setDiseaseSymptomProcedure(new FHIRCodeableReference($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_STATUS])) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableReference) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableReference($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_COMORBIDITY])) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableReference) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableReference($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($data[self::FIELD_INDICATION])) {
            if (is_array($data[self::FIELD_INDICATION])) {
                foreach($data[self::FIELD_INDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addIndication($v);
                    } else {
                        $this->addIndication(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_INDICATION] instanceof FHIRReference) {
                $this->addIndication($data[self::FIELD_INDICATION]);
            } else {
                $this->addIndication(new FHIRReference($data[self::FIELD_INDICATION]));
            }
        }
        if (isset($data[self::FIELD_APPLICABILITY])) {
            if ($data[self::FIELD_APPLICABILITY] instanceof FHIRExpression) {
                $this->setApplicability($data[self::FIELD_APPLICABILITY]);
            } else {
                $this->setApplicability(new FHIRExpression($data[self::FIELD_APPLICABILITY]));
            }
        }
        if (isset($data[self::FIELD_OTHER_THERAPY])) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($v));
                    }
                }
            } elseif ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as contraindicating against this item.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getDiseaseSymptomProcedure(): null|FHIRCodeableReference
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as contraindicating against this item.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(null|FHIRCodeableReference $diseaseSymptomProcedure = null): self
    {
        if (null === $diseaseSymptomProcedure) {
            $diseaseSymptomProcedure = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->diseaseSymptomProcedure, $diseaseSymptomProcedure);
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the contraindication, for example
     * "chronic" or "metastatic".
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getDiseaseStatus(): null|FHIRCodeableReference
    {
        return $this->diseaseStatus;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the contraindication, for example
     * "chronic" or "metastatic".
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(null|FHIRCodeableReference $diseaseStatus = null): self
    {
        if (null === $diseaseStatus) {
            $diseaseStatus = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->diseaseStatus, $diseaseStatus);
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getComorbidity(): null|array
    {
        return $this->comorbidity;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $comorbidity
     * @return static
     */
    public function addComorbidity(null|FHIRCodeableReference $comorbidity = null): self
    {
        if (null === $comorbidity) {
            $comorbidity = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $comorbidity
     * @return static
     */
    public function setComorbidity(array $comorbidity = []): self
    {
        if ([] !== $this->comorbidity) {
            $this->_trackValuesRemoved(count($this->comorbidity));
            $this->comorbidity = [];
        }
        if ([] === $comorbidity) {
            return $this;
        }
        foreach($comorbidity as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addComorbidity($v);
            } else {
                $this->addComorbidity(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The indication which this is a contraidication for.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getIndication(): null|array
    {
        return $this->indication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The indication which this is a contraidication for.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $indication
     * @return static
     */
    public function addIndication(null|FHIRReference $indication = null): self
    {
        if (null === $indication) {
            $indication = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The indication which this is a contraidication for.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $indication
     * @return static
     */
    public function setIndication(array $indication = []): self
    {
        if ([] !== $this->indication) {
            $this->_trackValuesRemoved(count($this->indication));
            $this->indication = [];
        }
        if ([] === $indication) {
            return $this;
        }
        foreach($indication as $v) {
            if ($v instanceof FHIRReference) {
                $this->addIndication($v);
            } else {
                $this->addIndication(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An expression that returns true or false, indicating whether the indication is
     * applicable or not, after having applied its other elements.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getApplicability(): null|FHIRExpression
    {
        return $this->applicability;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An expression that returns true or false, indicating whether the indication is
     * applicable or not, after having applied its other elements.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $applicability
     * @return static
     */
    public function setApplicability(null|FHIRExpression $applicability = null): self
    {
        if (null === $applicability) {
            $applicability = new FHIRExpression();
        }
        $this->_trackValueSet($this->applicability, $applicability);
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    public function getOtherTherapy(): null|array
    {
        return $this->otherTherapy;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(null|FHIRClinicalUseDefinitionOtherTherapy $otherTherapy = null): self
    {
        if (null === $otherTherapy) {
            $otherTherapy = new FHIRClinicalUseDefinitionOtherTherapy();
        }
        $this->_trackValueAdded();
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[] $otherTherapy
     * @return static
     */
    public function setOtherTherapy(array $otherTherapy = []): self
    {
        if ([] !== $this->otherTherapy) {
            $this->_trackValuesRemoved(count($this->otherTherapy));
            $this->otherTherapy = [];
        }
        if ([] === $otherTherapy) {
            return $this;
        }
        foreach($otherTherapy as $v) {
            if ($v instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                $this->addOtherTherapy($v);
            } else {
                $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($v));
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
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMORBIDITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getApplicability())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPLICABILITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OTHER_THERAPY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            $v = $this->getDiseaseSymptomProcedure();
            foreach($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION, self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
                        $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_STATUS])) {
            $v = $this->getDiseaseStatus();
            foreach($validationRules[self::FIELD_DISEASE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION, self::FIELD_DISEASE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_STATUS])) {
                        $errs[self::FIELD_DISEASE_STATUS] = [];
                    }
                    $errs[self::FIELD_DISEASE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMORBIDITY])) {
            $v = $this->getComorbidity();
            foreach($validationRules[self::FIELD_COMORBIDITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION, self::FIELD_COMORBIDITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMORBIDITY])) {
                        $errs[self::FIELD_COMORBIDITY] = [];
                    }
                    $errs[self::FIELD_COMORBIDITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLICABILITY])) {
            $v = $this->getApplicability();
            foreach($validationRules[self::FIELD_APPLICABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION, self::FIELD_APPLICABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLICABILITY])) {
                        $errs[self::FIELD_APPLICABILITY] = [];
                    }
                    $errs[self::FIELD_APPLICABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_THERAPY])) {
            $v = $this->getOtherTherapy();
            foreach($validationRules[self::FIELD_OTHER_THERAPY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION, self::FIELD_OTHER_THERAPY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER_THERAPY])) {
                        $errs[self::FIELD_OTHER_THERAPY] = [];
                    }
                    $errs[self::FIELD_OTHER_THERAPY][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionContraindication $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionContraindication
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
        } else if (!($type instanceof FHIRClinicalUseDefinitionContraindication)) {
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
            if (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $n->nodeName) {
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISEASE_STATUS === $n->nodeName) {
                $type->setDiseaseStatus(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_COMORBIDITY === $n->nodeName) {
                $type->addComorbidity(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_INDICATION === $n->nodeName) {
                $type->addIndication(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_APPLICABILITY === $n->nodeName) {
                $type->setApplicability(FHIRExpression::xmlUnserialize($n));
            } elseif (self::FIELD_OTHER_THERAPY === $n->nodeName) {
                $type->addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('ClinicalUseDefinitionContraindication'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISEASE_SYMPTOM_PROCEDURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISEASE_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMORBIDITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INDICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getApplicability())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_APPLICABILITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OTHER_THERAPY);
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
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $out->{self::FIELD_DISEASE_SYMPTOM_PROCEDURE} = $v;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $out->{self::FIELD_DISEASE_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            $out->{self::FIELD_COMORBIDITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMORBIDITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            $out->{self::FIELD_INDICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INDICATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getApplicability())) {
            $out->{self::FIELD_APPLICABILITY} = $v;
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            $out->{self::FIELD_OTHER_THERAPY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OTHER_THERAPY}[] = $v;
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