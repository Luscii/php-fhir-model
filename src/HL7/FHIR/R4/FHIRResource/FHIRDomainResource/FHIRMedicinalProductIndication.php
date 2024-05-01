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
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRQuantity;
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
 * Indication for the Medicinal Product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductIndication
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductIndication extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION;

    const FIELD_SUBJECT = 'subject';
    const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_INTENDED_EFFECT = 'intendedEffect';
    const FIELD_DURATION = 'duration';
    const FIELD_OTHER_THERAPY = 'otherTherapy';
    const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';
    const FIELD_POPULATION = 'population';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $subject = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $diseaseSymptomProcedure = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $diseaseStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $comorbidity = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $intendedEffect = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $duration = null;
    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    protected null|array $otherTherapy = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $undesirableEffect = [];
    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    protected null|array $population = [];

    /**
     * Validation map for fields in type MedicinalProductIndication
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRMedicinalProductIndication Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SUBJECT])) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            if ($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableConcept) {
                $this->setDiseaseSymptomProcedure($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $this->setDiseaseSymptomProcedure(new FHIRCodeableConcept($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_STATUS])) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableConcept($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_COMORBIDITY])) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableConcept) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($data[self::FIELD_INTENDED_EFFECT])) {
            if ($data[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableConcept) {
                $this->setIntendedEffect($data[self::FIELD_INTENDED_EFFECT]);
            } else {
                $this->setIntendedEffect(new FHIRCodeableConcept($data[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_OTHER_THERAPY])) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($v));
                    }
                }
            } elseif ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
            }
        }
        if (isset($data[self::FIELD_UNDESIRABLE_EFFECT])) {
            if (is_array($data[self::FIELD_UNDESIRABLE_EFFECT])) {
                foreach($data[self::FIELD_UNDESIRABLE_EFFECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addUndesirableEffect($v);
                    } else {
                        $this->addUndesirableEffect(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_UNDESIRABLE_EFFECT] instanceof FHIRReference) {
                $this->addUndesirableEffect($data[self::FIELD_UNDESIRABLE_EFFECT]);
            } else {
                $this->addUndesirableEffect(new FHIRReference($data[self::FIELD_UNDESIRABLE_EFFECT]));
            }
        }
        if (isset($data[self::FIELD_POPULATION])) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRPopulation($v));
                    }
                }
            } elseif ($data[self::FIELD_POPULATION] instanceof FHIRPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRPopulation($data[self::FIELD_POPULATION]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getSubject(): null|array
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function addSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $subject
     * @return static
     */
    public function setSubject(array $subject = []): self
    {
        if ([] !== $this->subject) {
            $this->_trackValuesRemoved(count($this->subject));
            $this->subject = [];
        }
        if ([] === $subject) {
            return $this;
        }
        foreach($subject as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSubject($v);
            } else {
                $this->addSubject(new FHIRReference($v));
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
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseSymptomProcedure(): null|FHIRCodeableConcept
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(null|FHIRCodeableConcept $diseaseSymptomProcedure = null): self
    {
        if (null === $diseaseSymptomProcedure) {
            $diseaseSymptomProcedure = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->diseaseSymptomProcedure, $diseaseSymptomProcedure);
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus(): null|FHIRCodeableConcept
    {
        return $this->diseaseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(null|FHIRCodeableConcept $diseaseStatus = null): self
    {
        if (null === $diseaseStatus) {
            $diseaseStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->diseaseStatus, $diseaseStatus);
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComorbidity(): null|array
    {
        return $this->comorbidity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $comorbidity
     * @return static
     */
    public function addComorbidity(null|FHIRCodeableConcept $comorbidity = null): self
    {
        if (null === $comorbidity) {
            $comorbidity = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $comorbidity
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
            if ($v instanceof FHIRCodeableConcept) {
                $this->addComorbidity($v);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($v));
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
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedEffect(): null|FHIRCodeableConcept
    {
        return $this->intendedEffect;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $intendedEffect
     * @return static
     */
    public function setIntendedEffect(null|FHIRCodeableConcept $intendedEffect = null): self
    {
        if (null === $intendedEffect) {
            $intendedEffect = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->intendedEffect, $intendedEffect);
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity
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
     * Timing or duration information as part of the indication.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity $duration
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
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    public function getOtherTherapy(): null|array
    {
        return $this->otherTherapy;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(null|FHIRMedicinalProductIndicationOtherTherapy $otherTherapy = null): self
    {
        if (null === $otherTherapy) {
            $otherTherapy = new FHIRMedicinalProductIndicationOtherTherapy();
        }
        $this->_trackValueAdded();
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[] $otherTherapy
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
            if ($v instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                $this->addOtherTherapy($v);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getUndesirableEffect(): null|array
    {
        return $this->undesirableEffect;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRReference $undesirableEffect
     * @return static
     */
    public function addUndesirableEffect(null|FHIRReference $undesirableEffect = null): self
    {
        if (null === $undesirableEffect) {
            $undesirableEffect = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->undesirableEffect[] = $undesirableEffect;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRReference[] $undesirableEffect
     * @return static
     */
    public function setUndesirableEffect(array $undesirableEffect = []): self
    {
        if ([] !== $this->undesirableEffect) {
            $this->_trackValuesRemoved(count($this->undesirableEffect));
            $this->undesirableEffect = [];
        }
        if ([] === $undesirableEffect) {
            return $this;
        }
        foreach($undesirableEffect as $v) {
            if ($v instanceof FHIRReference) {
                $this->addUndesirableEffect($v);
            } else {
                $this->addUndesirableEffect(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    public function getPopulation(): null|array
    {
        return $this->population;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation $population
     * @return static
     */
    public function addPopulation(null|FHIRPopulation $population = null): self
    {
        if (null === $population) {
            $population = new FHIRPopulation();
        }
        $this->_trackValueAdded();
        $this->population[] = $population;
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation[] $population
     * @return static
     */
    public function setPopulation(array $population = []): self
    {
        if ([] !== $this->population) {
            $this->_trackValuesRemoved(count($this->population));
            $this->population = [];
        }
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRPopulation) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRPopulation($v));
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
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBJECT, $i)] = $fieldErrs;
                }
            }
        }
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
        if (null !== ($v = $this->getIntendedEffect())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENDED_EFFECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OTHER_THERAPY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UNDESIRABLE_EFFECT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POPULATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            $v = $this->getDiseaseSymptomProcedure();
            foreach($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_DISEASE_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_COMORBIDITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMORBIDITY])) {
                        $errs[self::FIELD_COMORBIDITY] = [];
                    }
                    $errs[self::FIELD_COMORBIDITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_EFFECT])) {
            $v = $this->getIntendedEffect();
            foreach($validationRules[self::FIELD_INTENDED_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_INTENDED_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_EFFECT])) {
                        $errs[self::FIELD_INTENDED_EFFECT] = [];
                    }
                    $errs[self::FIELD_INTENDED_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_THERAPY])) {
            $v = $this->getOtherTherapy();
            foreach($validationRules[self::FIELD_OTHER_THERAPY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_OTHER_THERAPY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER_THERAPY])) {
                        $errs[self::FIELD_OTHER_THERAPY] = [];
                    }
                    $errs[self::FIELD_OTHER_THERAPY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNDESIRABLE_EFFECT])) {
            $v = $this->getUndesirableEffect();
            foreach($validationRules[self::FIELD_UNDESIRABLE_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_UNDESIRABLE_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNDESIRABLE_EFFECT])) {
                        $errs[self::FIELD_UNDESIRABLE_EFFECT] = [];
                    }
                    $errs[self::FIELD_UNDESIRABLE_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POPULATION])) {
            $v = $this->getPopulation();
            foreach($validationRules[self::FIELD_POPULATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_POPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POPULATION])) {
                        $errs[self::FIELD_POPULATION] = [];
                    }
                    $errs[self::FIELD_POPULATION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
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
        } else if (!($type instanceof FHIRMedicinalProductIndication)) {
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
            if (self::FIELD_SUBJECT === $n->nodeName) {
                $type->addSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $n->nodeName) {
                $type->setDiseaseSymptomProcedure(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DISEASE_STATUS === $n->nodeName) {
                $type->setDiseaseStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_COMORBIDITY === $n->nodeName) {
                $type->addComorbidity(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INTENDED_EFFECT === $n->nodeName) {
                $type->setIntendedEffect(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION === $n->nodeName) {
                $type->setDuration(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_OTHER_THERAPY === $n->nodeName) {
                $type->addOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy::xmlUnserialize($n));
            } elseif (self::FIELD_UNDESIRABLE_EFFECT === $n->nodeName) {
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_POPULATION === $n->nodeName) {
                $type->addPopulation(FHIRPopulation::xmlUnserialize($n));
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('MedicinalProductIndication'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
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
        if (null !== ($v = $this->getIntendedEffect())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTENDED_EFFECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
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
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_UNDESIRABLE_EFFECT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_POPULATION);
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
        if ([] !== ($vs = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUBJECT}[] = $v;
            }
        }
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
        if (null !== ($v = $this->getIntendedEffect())) {
            $out->{self::FIELD_INTENDED_EFFECT} = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $out->{self::FIELD_DURATION} = $v;
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
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            $out->{self::FIELD_UNDESIRABLE_EFFECT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_UNDESIRABLE_EFFECT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $out->{self::FIELD_POPULATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_POPULATION}[] = $v;
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