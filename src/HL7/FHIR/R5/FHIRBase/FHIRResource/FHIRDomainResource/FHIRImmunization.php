<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProgramEligibility;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImmunizationStatusCodes;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRDatePrimitive;
use HL7\FHIR\R5\FHIRDateTimePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRTypeMap;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImmunization
 * @package \HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRImmunization extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_VACCINE_CODE = 'vaccineCode';
    const FIELD_ADMINISTERED_PRODUCT = 'administeredProduct';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_EXPIRATION_DATE = 'expirationDate';
    const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    const FIELD_PATIENT = 'patient';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_STRING = 'occurrenceString';
    const FIELD_OCCURRENCE_STRING_EXT = '_occurrenceString';
    const FIELD_PRIMARY_SOURCE = 'primarySource';
    const FIELD_PRIMARY_SOURCE_EXT = '_primarySource';
    const FIELD_INFORMATION_SOURCE = 'informationSource';
    const FIELD_LOCATION = 'location';
    const FIELD_SITE = 'site';
    const FIELD_ROUTE = 'route';
    const FIELD_DOSE_QUANTITY = 'doseQuantity';
    const FIELD_PERFORMER = 'performer';
    const FIELD_NOTE = 'note';
    const FIELD_REASON = 'reason';
    const FIELD_IS_SUBPOTENT = 'isSubpotent';
    const FIELD_IS_SUBPOTENT_EXT = '_isSubpotent';
    const FIELD_SUBPOTENT_REASON = 'subpotentReason';
    const FIELD_PROGRAM_ELIGIBILITY = 'programEligibility';
    const FIELD_FUNDING_SOURCE = 'fundingSource';
    const FIELD_REACTION = 'reaction';
    const FIELD_PROTOCOL_APPLIED = 'protocolApplied';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, order or recommendation fulfilled in whole or in part by this
     * immunization.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImmunizationStatusCodes
     */
    protected null|FHIRImmunizationStatusCodes $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $statusReason = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $vaccineCode = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of which product was administered to the patient. This is
     * typically a more detailed representation of the concept conveyed by the
     * vaccineCode data element. If a Medication resource is referenced, it may be to a
     * stand-alone resource or a contained resource within the Immunization resource.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $administeredProduct = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $manufacturer = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $lotNumber = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $expirationDate = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine
     * recipient who is pregnant, the gestational age of the fetus). The reason why a
     * vaccine was given (e.g. occupation, underlying medical condition) should be
     * conveyed in Immunization.reason, not as supporting information. The reason why a
     * vaccine was not given (e.g. contraindication) should be conveyed in
     * Immunization.statusReason, not as supporting information.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $supportingInformation = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $occurrenceDateTime = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $occurrenceString = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the data contained in the resource was captured by the
     * individual/organization which was responsible for the administration of the
     * vaccine rather than as 'secondary reported' data documented by a third party. A
     * value of 'true' means this data originated with the individual/organization
     * which was responsible for the administration of the vaccine.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $primarySource = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Typically the source of the data when the report of the immunization event is
     * not based on information from the person who administered the vaccine.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $informationSource = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $site = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $route = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $doseQuantity = null;
    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[]
     */
    protected null|array $performer = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates
     * another resource (Condition, Observation or DiagnosticReport) whose existence
     * justifies this immunization.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $reason = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isSubpotent = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $subpotentReason = [];
    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProgramEligibility[]
     */
    protected null|array $programEligibility = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $fundingSource = null;
    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    protected null|array $reaction = [];
    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[]
     */
    protected null|array $protocolApplied = [];

    /**
     * Validation map for fields in type Immunization
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRImmunization Constructor
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
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRImmunizationStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRImmunizationStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRImmunizationStatusCodes([FHIRImmunizationStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRImmunizationStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_VACCINE_CODE])) {
            if ($data[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->setVaccineCode($data[self::FIELD_VACCINE_CODE]);
            } else {
                $this->setVaccineCode(new FHIRCodeableConcept($data[self::FIELD_VACCINE_CODE]));
            }
        }
        if (isset($data[self::FIELD_ADMINISTERED_PRODUCT])) {
            if ($data[self::FIELD_ADMINISTERED_PRODUCT] instanceof FHIRCodeableReference) {
                $this->setAdministeredProduct($data[self::FIELD_ADMINISTERED_PRODUCT]);
            } else {
                $this->setAdministeredProduct(new FHIRCodeableReference($data[self::FIELD_ADMINISTERED_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRCodeableReference) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->setManufacturer(new FHIRCodeableReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_LOT_NUMBER]) || isset($data[self::FIELD_LOT_NUMBER_EXT])) {
            $value = $data[self::FIELD_LOT_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT])) ? $data[self::FIELD_LOT_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLotNumber($value);
                } else if (is_array($value)) {
                    $this->setLotNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLotNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_DATE]) || isset($data[self::FIELD_EXPIRATION_DATE_EXT])) {
            $value = $data[self::FIELD_EXPIRATION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT])) ? $data[self::FIELD_EXPIRATION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setExpirationDate($value);
                } else if (is_array($value)) {
                    $this->setExpirationDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setExpirationDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExpirationDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
            $value = $data[self::FIELD_OCCURRENCE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) ? $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_STRING]) || isset($data[self::FIELD_OCCURRENCE_STRING_EXT])) {
            $value = $data[self::FIELD_OCCURRENCE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_STRING_EXT]) && is_array($data[self::FIELD_OCCURRENCE_STRING_EXT])) ? $data[self::FIELD_OCCURRENCE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOccurrenceString($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PRIMARY_SOURCE]) || isset($data[self::FIELD_PRIMARY_SOURCE_EXT])) {
            $value = $data[self::FIELD_PRIMARY_SOURCE] ?? null;
            $ext = (isset($data[self::FIELD_PRIMARY_SOURCE_EXT]) && is_array($data[self::FIELD_PRIMARY_SOURCE_EXT])) ? $data[self::FIELD_PRIMARY_SOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPrimarySource($value);
                } else if (is_array($value)) {
                    $this->setPrimarySource(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPrimarySource(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrimarySource(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_INFORMATION_SOURCE])) {
            if ($data[self::FIELD_INFORMATION_SOURCE] instanceof FHIRCodeableReference) {
                $this->setInformationSource($data[self::FIELD_INFORMATION_SOURCE]);
            } else {
                $this->setInformationSource(new FHIRCodeableReference($data[self::FIELD_INFORMATION_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_DOSE_QUANTITY])) {
            if ($data[self::FIELD_DOSE_QUANTITY] instanceof FHIRQuantity) {
                $this->setDoseQuantity($data[self::FIELD_DOSE_QUANTITY]);
            } else {
                $this->setDoseQuantity(new FHIRQuantity($data[self::FIELD_DOSE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationPerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRImmunizationPerformer($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER] instanceof FHIRImmunizationPerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRImmunizationPerformer($data[self::FIELD_PERFORMER]));
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
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON] instanceof FHIRCodeableReference) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableReference($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_IS_SUBPOTENT]) || isset($data[self::FIELD_IS_SUBPOTENT_EXT])) {
            $value = $data[self::FIELD_IS_SUBPOTENT] ?? null;
            $ext = (isset($data[self::FIELD_IS_SUBPOTENT_EXT]) && is_array($data[self::FIELD_IS_SUBPOTENT_EXT])) ? $data[self::FIELD_IS_SUBPOTENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsSubpotent($value);
                } else if (is_array($value)) {
                    $this->setIsSubpotent(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsSubpotent(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsSubpotent(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_SUBPOTENT_REASON])) {
            if (is_array($data[self::FIELD_SUBPOTENT_REASON])) {
                foreach($data[self::FIELD_SUBPOTENT_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubpotentReason($v);
                    } else {
                        $this->addSubpotentReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBPOTENT_REASON] instanceof FHIRCodeableConcept) {
                $this->addSubpotentReason($data[self::FIELD_SUBPOTENT_REASON]);
            } else {
                $this->addSubpotentReason(new FHIRCodeableConcept($data[self::FIELD_SUBPOTENT_REASON]));
            }
        }
        if (isset($data[self::FIELD_PROGRAM_ELIGIBILITY])) {
            if (is_array($data[self::FIELD_PROGRAM_ELIGIBILITY])) {
                foreach($data[self::FIELD_PROGRAM_ELIGIBILITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationProgramEligibility) {
                        $this->addProgramEligibility($v);
                    } else {
                        $this->addProgramEligibility(new FHIRImmunizationProgramEligibility($v));
                    }
                }
            } elseif ($data[self::FIELD_PROGRAM_ELIGIBILITY] instanceof FHIRImmunizationProgramEligibility) {
                $this->addProgramEligibility($data[self::FIELD_PROGRAM_ELIGIBILITY]);
            } else {
                $this->addProgramEligibility(new FHIRImmunizationProgramEligibility($data[self::FIELD_PROGRAM_ELIGIBILITY]));
            }
        }
        if (isset($data[self::FIELD_FUNDING_SOURCE])) {
            if ($data[self::FIELD_FUNDING_SOURCE] instanceof FHIRCodeableConcept) {
                $this->setFundingSource($data[self::FIELD_FUNDING_SOURCE]);
            } else {
                $this->setFundingSource(new FHIRCodeableConcept($data[self::FIELD_FUNDING_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationReaction) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRImmunizationReaction($v));
                    }
                }
            } elseif ($data[self::FIELD_REACTION] instanceof FHIRImmunizationReaction) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRImmunizationReaction($data[self::FIELD_REACTION]));
            }
        }
        if (isset($data[self::FIELD_PROTOCOL_APPLIED])) {
            if (is_array($data[self::FIELD_PROTOCOL_APPLIED])) {
                foreach($data[self::FIELD_PROTOCOL_APPLIED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationProtocolApplied) {
                        $this->addProtocolApplied($v);
                    } else {
                        $this->addProtocolApplied(new FHIRImmunizationProtocolApplied($v));
                    }
                }
            } elseif ($data[self::FIELD_PROTOCOL_APPLIED] instanceof FHIRImmunizationProtocolApplied) {
                $this->addProtocolApplied($data[self::FIELD_PROTOCOL_APPLIED]);
            } else {
                $this->addProtocolApplied(new FHIRImmunizationProtocolApplied($data[self::FIELD_PROTOCOL_APPLIED]));
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
     * A unique identifier assigned to this immunization record.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
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
     * A unique identifier assigned to this immunization record.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * A unique identifier assigned to this immunization record.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, order or recommendation fulfilled in whole or in part by this
     * immunization.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, order or recommendation fulfilled in whole or in part by this
     * immunization.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, order or recommendation fulfilled in whole or in part by this
     * immunization.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = []): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus(): null|FHIRImmunizationStatusCodes
    {
        return $this->status;
    }

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRImmunizationStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRImmunizationStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRImmunizationStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatusReason(): null|FHIRCodeableConcept
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(null|FHIRCodeableConcept $statusReason = null): self
    {
        if (null === $statusReason) {
            $statusReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->statusReason, $statusReason);
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getVaccineCode(): null|FHIRCodeableConcept
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $vaccineCode
     * @return static
     */
    public function setVaccineCode(null|FHIRCodeableConcept $vaccineCode = null): self
    {
        if (null === $vaccineCode) {
            $vaccineCode = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->vaccineCode, $vaccineCode);
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of which product was administered to the patient. This is
     * typically a more detailed representation of the concept conveyed by the
     * vaccineCode data element. If a Medication resource is referenced, it may be to a
     * stand-alone resource or a contained resource within the Immunization resource.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getAdministeredProduct(): null|FHIRCodeableReference
    {
        return $this->administeredProduct;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of which product was administered to the patient. This is
     * typically a more detailed representation of the concept conveyed by the
     * vaccineCode data element. If a Medication resource is referenced, it may be to a
     * stand-alone resource or a contained resource within the Immunization resource.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $administeredProduct
     * @return static
     */
    public function setAdministeredProduct(null|FHIRCodeableReference $administeredProduct = null): self
    {
        if (null === $administeredProduct) {
            $administeredProduct = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->administeredProduct, $administeredProduct);
        $this->administeredProduct = $administeredProduct;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getManufacturer(): null|FHIRCodeableReference
    {
        return $this->manufacturer;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $manufacturer
     * @return static
     */
    public function setManufacturer(null|FHIRCodeableReference $manufacturer = null): self
    {
        if (null === $manufacturer) {
            $manufacturer = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->manufacturer, $manufacturer);
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLotNumber(): null|FHIRString
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $lotNumber
     * @return static
     */
    public function setLotNumber(null|string|FHIRStringPrimitive|FHIRString $lotNumber = null): self
    {
        if (null !== $lotNumber && !($lotNumber instanceof FHIRString)) {
            $lotNumber = new FHIRString($lotNumber);
        }
        $this->_trackValueSet($this->lotNumber, $lotNumber);
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getExpirationDate(): null|FHIRDate
    {
        return $this->expirationDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDatePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDate $expirationDate
     * @return static
     */
    public function setExpirationDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $expirationDate = null): self
    {
        if (null !== $expirationDate && !($expirationDate instanceof FHIRDate)) {
            $expirationDate = new FHIRDate($expirationDate);
        }
        $this->_trackValueSet($this->expirationDate, $expirationDate);
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine
     * recipient who is pregnant, the gestational age of the fetus). The reason why a
     * vaccine was given (e.g. occupation, underlying medical condition) should be
     * conveyed in Immunization.reason, not as supporting information. The reason why a
     * vaccine was not given (e.g. contraindication) should be conveyed in
     * Immunization.statusReason, not as supporting information.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSupportingInformation(): null|array
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine
     * recipient who is pregnant, the gestational age of the fetus). The reason why a
     * vaccine was given (e.g. occupation, underlying medical condition) should be
     * conveyed in Immunization.reason, not as supporting information. The reason why a
     * vaccine was not given (e.g. contraindication) should be conveyed in
     * Immunization.statusReason, not as supporting information.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supportingInformation
     * @return static
     */
    public function addSupportingInformation(null|FHIRReference $supportingInformation = null): self
    {
        if (null === $supportingInformation) {
            $supportingInformation = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine
     * recipient who is pregnant, the gestational age of the fetus). The reason why a
     * vaccine was given (e.g. occupation, underlying medical condition) should be
     * conveyed in Immunization.reason, not as supporting information. The reason why a
     * vaccine was not given (e.g. contraindication) should be conveyed in
     * Immunization.statusReason, not as supporting information.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $supportingInformation
     * @return static
     */
    public function setSupportingInformation(array $supportingInformation = []): self
    {
        if ([] !== $this->supportingInformation) {
            $this->_trackValuesRemoved(count($this->supportingInformation));
            $this->supportingInformation = [];
        }
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInformation($v);
            } else {
                $this->addSupportingInformation(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
    {
        return $this->occurrenceDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRDateTimePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return static
     */
    public function setOccurrenceDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null): self
    {
        if (null !== $occurrenceDateTime && !($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        $this->_trackValueSet($this->occurrenceDateTime, $occurrenceDateTime);
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getOccurrenceString(): null|FHIRString
    {
        return $this->occurrenceString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $occurrenceString
     * @return static
     */
    public function setOccurrenceString(null|string|FHIRStringPrimitive|FHIRString $occurrenceString = null): self
    {
        if (null !== $occurrenceString && !($occurrenceString instanceof FHIRString)) {
            $occurrenceString = new FHIRString($occurrenceString);
        }
        $this->_trackValueSet($this->occurrenceString, $occurrenceString);
        $this->occurrenceString = $occurrenceString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the data contained in the resource was captured by the
     * individual/organization which was responsible for the administration of the
     * vaccine rather than as 'secondary reported' data documented by a third party. A
     * value of 'true' means this data originated with the individual/organization
     * which was responsible for the administration of the vaccine.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource(): null|FHIRBoolean
    {
        return $this->primarySource;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the data contained in the resource was captured by the
     * individual/organization which was responsible for the administration of the
     * vaccine rather than as 'secondary reported' data documented by a third party. A
     * value of 'true' means this data originated with the individual/organization
     * which was responsible for the administration of the vaccine.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $primarySource
     * @return static
     */
    public function setPrimarySource(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $primarySource = null): self
    {
        if (null !== $primarySource && !($primarySource instanceof FHIRBoolean)) {
            $primarySource = new FHIRBoolean($primarySource);
        }
        $this->_trackValueSet($this->primarySource, $primarySource);
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Typically the source of the data when the report of the immunization event is
     * not based on information from the person who administered the vaccine.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getInformationSource(): null|FHIRCodeableReference
    {
        return $this->informationSource;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Typically the source of the data when the report of the immunization event is
     * not based on information from the person who administered the vaccine.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $informationSource
     * @return static
     */
    public function setInformationSource(null|FHIRCodeableReference $informationSource = null): self
    {
        if (null === $informationSource) {
            $informationSource = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->informationSource, $informationSource);
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSite(): null|FHIRCodeableConcept
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(null|FHIRCodeableConcept $site = null): self
    {
        if (null === $site) {
            $site = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->site, $site);
        $this->site = $site;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRoute(): null|FHIRCodeableConcept
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(null|FHIRCodeableConcept $route = null): self
    {
        if (null === $route) {
            $route = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->route, $route);
        $this->route = $route;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDoseQuantity(): null|FHIRQuantity
    {
        return $this->doseQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $doseQuantity
     * @return static
     */
    public function setDoseQuantity(null|FHIRQuantity $doseQuantity = null): self
    {
        if (null === $doseQuantity) {
            $doseQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->doseQuantity, $doseQuantity);
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[]
     */
    public function getPerformer(): null|array
    {
        return $this->performer;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer $performer
     * @return static
     */
    public function addPerformer(null|FHIRImmunizationPerformer $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRImmunizationPerformer();
        }
        $this->_trackValueAdded();
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[] $performer
     * @return static
     */
    public function setPerformer(array $performer = []): self
    {
        if ([] !== $this->performer) {
            $this->_trackValuesRemoved(count($this->performer));
            $this->performer = [];
        }
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRImmunizationPerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRImmunizationPerformer($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates
     * another resource (Condition, Observation or DiagnosticReport) whose existence
     * justifies this immunization.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getReason(): null|array
    {
        return $this->reason;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates
     * another resource (Condition, Observation or DiagnosticReport) whose existence
     * justifies this immunization.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $reason
     * @return static
     */
    public function addReason(null|FHIRCodeableReference $reason = null): self
    {
        if (null === $reason) {
            $reason = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates
     * another resource (Condition, Observation or DiagnosticReport) whose existence
     * justifies this immunization.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $reason
     * @return static
     */
    public function setReason(array $reason = []): self
    {
        if ([] !== $this->reason) {
            $this->_trackValuesRemoved(count($this->reason));
            $this->reason = [];
        }
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getIsSubpotent(): null|FHIRBoolean
    {
        return $this->isSubpotent;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $isSubpotent
     * @return static
     */
    public function setIsSubpotent(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isSubpotent = null): self
    {
        if (null !== $isSubpotent && !($isSubpotent instanceof FHIRBoolean)) {
            $isSubpotent = new FHIRBoolean($isSubpotent);
        }
        $this->_trackValueSet($this->isSubpotent, $isSubpotent);
        $this->isSubpotent = $isSubpotent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSubpotentReason(): null|array
    {
        return $this->subpotentReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subpotentReason
     * @return static
     */
    public function addSubpotentReason(null|FHIRCodeableConcept $subpotentReason = null): self
    {
        if (null === $subpotentReason) {
            $subpotentReason = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->subpotentReason[] = $subpotentReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $subpotentReason
     * @return static
     */
    public function setSubpotentReason(array $subpotentReason = []): self
    {
        if ([] !== $this->subpotentReason) {
            $this->_trackValuesRemoved(count($this->subpotentReason));
            $this->subpotentReason = [];
        }
        if ([] === $subpotentReason) {
            return $this;
        }
        foreach($subpotentReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubpotentReason($v);
            } else {
                $this->addSubpotentReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProgramEligibility[]
     */
    public function getProgramEligibility(): null|array
    {
        return $this->programEligibility;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProgramEligibility $programEligibility
     * @return static
     */
    public function addProgramEligibility(null|FHIRImmunizationProgramEligibility $programEligibility = null): self
    {
        if (null === $programEligibility) {
            $programEligibility = new FHIRImmunizationProgramEligibility();
        }
        $this->_trackValueAdded();
        $this->programEligibility[] = $programEligibility;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProgramEligibility[] $programEligibility
     * @return static
     */
    public function setProgramEligibility(array $programEligibility = []): self
    {
        if ([] !== $this->programEligibility) {
            $this->_trackValuesRemoved(count($this->programEligibility));
            $this->programEligibility = [];
        }
        if ([] === $programEligibility) {
            return $this;
        }
        foreach($programEligibility as $v) {
            if ($v instanceof FHIRImmunizationProgramEligibility) {
                $this->addProgramEligibility($v);
            } else {
                $this->addProgramEligibility(new FHIRImmunizationProgramEligibility($v));
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
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFundingSource(): null|FHIRCodeableConcept
    {
        return $this->fundingSource;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $fundingSource
     * @return static
     */
    public function setFundingSource(null|FHIRCodeableConcept $fundingSource = null): self
    {
        if (null === $fundingSource) {
            $fundingSource = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->fundingSource, $fundingSource);
        $this->fundingSource = $fundingSource;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction(): null|array
    {
        return $this->reaction;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction $reaction
     * @return static
     */
    public function addReaction(null|FHIRImmunizationReaction $reaction = null): self
    {
        if (null === $reaction) {
            $reaction = new FHIRImmunizationReaction();
        }
        $this->_trackValueAdded();
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] $reaction
     * @return static
     */
    public function setReaction(array $reaction = []): self
    {
        if ([] !== $this->reaction) {
            $this->_trackValuesRemoved(count($this->reaction));
            $this->reaction = [];
        }
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRImmunizationReaction) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRImmunizationReaction($v));
            }
        }
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[]
     */
    public function getProtocolApplied(): null|array
    {
        return $this->protocolApplied;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied $protocolApplied
     * @return static
     */
    public function addProtocolApplied(null|FHIRImmunizationProtocolApplied $protocolApplied = null): self
    {
        if (null === $protocolApplied) {
            $protocolApplied = new FHIRImmunizationProtocolApplied();
        }
        $this->_trackValueAdded();
        $this->protocolApplied[] = $protocolApplied;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[] $protocolApplied
     * @return static
     */
    public function setProtocolApplied(array $protocolApplied = []): self
    {
        if ([] !== $this->protocolApplied) {
            $this->_trackValuesRemoved(count($this->protocolApplied));
            $this->protocolApplied = [];
        }
        if ([] === $protocolApplied) {
            return $this;
        }
        foreach($protocolApplied as $v) {
            if ($v instanceof FHIRImmunizationProtocolApplied) {
                $this->addProtocolApplied($v);
            } else {
                $this->addProtocolApplied(new FHIRImmunizationProtocolApplied($v));
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
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VACCINE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdministeredProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTERED_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLotNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOT_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPIRATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIMARY_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInformationSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INFORMATION_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_QUANTITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_SUBPOTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBPOTENT_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGRAM_ELIGIBILITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFundingSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FUNDING_SOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROTOCOL_APPLIED, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
            $v = $this->getVaccineCode();
            foreach($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_CODE])) {
                        $errs[self::FIELD_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_VACCINE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTERED_PRODUCT])) {
            $v = $this->getAdministeredProduct();
            foreach($validationRules[self::FIELD_ADMINISTERED_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_ADMINISTERED_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTERED_PRODUCT])) {
                        $errs[self::FIELD_ADMINISTERED_PRODUCT] = [];
                    }
                    $errs[self::FIELD_ADMINISTERED_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOT_NUMBER])) {
            $v = $this->getLotNumber();
            foreach($validationRules[self::FIELD_LOT_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_LOT_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOT_NUMBER])) {
                        $errs[self::FIELD_LOT_NUMBER] = [];
                    }
                    $errs[self::FIELD_LOT_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPIRATION_DATE])) {
            $v = $this->getExpirationDate();
            foreach($validationRules[self::FIELD_EXPIRATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_EXPIRATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPIRATION_DATE])) {
                        $errs[self::FIELD_EXPIRATION_DATE] = [];
                    }
                    $errs[self::FIELD_EXPIRATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFORMATION])) {
            $v = $this->getSupportingInformation();
            foreach($validationRules[self::FIELD_SUPPORTING_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_SUPPORTING_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFORMATION])) {
                        $errs[self::FIELD_SUPPORTING_INFORMATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_STRING])) {
            $v = $this->getOccurrenceString();
            foreach($validationRules[self::FIELD_OCCURRENCE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_OCCURRENCE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_STRING])) {
                        $errs[self::FIELD_OCCURRENCE_STRING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_SOURCE])) {
            $v = $this->getPrimarySource();
            foreach($validationRules[self::FIELD_PRIMARY_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PRIMARY_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_SOURCE])) {
                        $errs[self::FIELD_PRIMARY_SOURCE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION_SOURCE])) {
            $v = $this->getInformationSource();
            foreach($validationRules[self::FIELD_INFORMATION_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_INFORMATION_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION_SOURCE])) {
                        $errs[self::FIELD_INFORMATION_SOURCE] = [];
                    }
                    $errs[self::FIELD_INFORMATION_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_QUANTITY])) {
            $v = $this->getDoseQuantity();
            foreach($validationRules[self::FIELD_DOSE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_DOSE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_QUANTITY])) {
                        $errs[self::FIELD_DOSE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DOSE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_SUBPOTENT])) {
            $v = $this->getIsSubpotent();
            foreach($validationRules[self::FIELD_IS_SUBPOTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_IS_SUBPOTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_SUBPOTENT])) {
                        $errs[self::FIELD_IS_SUBPOTENT] = [];
                    }
                    $errs[self::FIELD_IS_SUBPOTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBPOTENT_REASON])) {
            $v = $this->getSubpotentReason();
            foreach($validationRules[self::FIELD_SUBPOTENT_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_SUBPOTENT_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBPOTENT_REASON])) {
                        $errs[self::FIELD_SUBPOTENT_REASON] = [];
                    }
                    $errs[self::FIELD_SUBPOTENT_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGRAM_ELIGIBILITY])) {
            $v = $this->getProgramEligibility();
            foreach($validationRules[self::FIELD_PROGRAM_ELIGIBILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PROGRAM_ELIGIBILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGRAM_ELIGIBILITY])) {
                        $errs[self::FIELD_PROGRAM_ELIGIBILITY] = [];
                    }
                    $errs[self::FIELD_PROGRAM_ELIGIBILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FUNDING_SOURCE])) {
            $v = $this->getFundingSource();
            foreach($validationRules[self::FIELD_FUNDING_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_FUNDING_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FUNDING_SOURCE])) {
                        $errs[self::FIELD_FUNDING_SOURCE] = [];
                    }
                    $errs[self::FIELD_FUNDING_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REACTION])) {
            $v = $this->getReaction();
            foreach($validationRules[self::FIELD_REACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_REACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REACTION])) {
                        $errs[self::FIELD_REACTION] = [];
                    }
                    $errs[self::FIELD_REACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTOCOL_APPLIED])) {
            $v = $this->getProtocolApplied();
            foreach($validationRules[self::FIELD_PROTOCOL_APPLIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PROTOCOL_APPLIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTOCOL_APPLIED])) {
                        $errs[self::FIELD_PROTOCOL_APPLIED] = [];
                    }
                    $errs[self::FIELD_PROTOCOL_APPLIED][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunization $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunization
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
        } else if (!($type instanceof FHIRImmunization)) {
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
            } elseif (self::FIELD_BASED_ON === $n->nodeName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRImmunizationStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS_REASON === $n->nodeName) {
                $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VACCINE_CODE === $n->nodeName) {
                $type->setVaccineCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ADMINISTERED_PRODUCT === $n->nodeName) {
                $type->setAdministeredProduct(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_MANUFACTURER === $n->nodeName) {
                $type->setManufacturer(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_LOT_NUMBER === $n->nodeName) {
                $type->setLotNumber(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_EXPIRATION_DATE === $n->nodeName) {
                $type->setExpirationDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ENCOUNTER === $n->nodeName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTING_INFORMATION === $n->nodeName) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_DATE_TIME === $n->nodeName) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_STRING === $n->nodeName) {
                $type->setOccurrenceString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PRIMARY_SOURCE === $n->nodeName) {
                $type->setPrimarySource(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_INFORMATION_SOURCE === $n->nodeName) {
                $type->setInformationSource(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION === $n->nodeName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_SITE === $n->nodeName) {
                $type->setSite(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ROUTE === $n->nodeName) {
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_QUANTITY === $n->nodeName) {
                $type->setDoseQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER === $n->nodeName) {
                $type->addPerformer(FHIRImmunizationPerformer::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_REASON === $n->nodeName) {
                $type->addReason(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_IS_SUBPOTENT === $n->nodeName) {
                $type->setIsSubpotent(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_SUBPOTENT_REASON === $n->nodeName) {
                $type->addSubpotentReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PROGRAM_ELIGIBILITY === $n->nodeName) {
                $type->addProgramEligibility(FHIRImmunizationProgramEligibility::xmlUnserialize($n));
            } elseif (self::FIELD_FUNDING_SOURCE === $n->nodeName) {
                $type->setFundingSource(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REACTION === $n->nodeName) {
                $type->addReaction(FHIRImmunizationReaction::xmlUnserialize($n));
            } elseif (self::FIELD_PROTOCOL_APPLIED === $n->nodeName) {
                $type->addProtocolApplied(FHIRImmunizationProtocolApplied::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_LOT_NUMBER);
        if (null !== $n) {
            $pt = $type->getLotNumber();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLotNumber($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXPIRATION_DATE);
        if (null !== $n) {
            $pt = $type->getExpirationDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExpirationDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_STRING);
        if (null !== $n) {
            $pt = $type->getOccurrenceString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PRIMARY_SOURCE);
        if (null !== $n) {
            $pt = $type->getPrimarySource();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPrimarySource($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IS_SUBPOTENT);
        if (null !== $n) {
            $pt = $type->getIsSubpotent();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIsSubpotent($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Immunization'), $libxmlOpts);
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
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_BASED_ON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatusReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VACCINE_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAdministeredProduct())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADMINISTERED_PRODUCT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getManufacturer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MANUFACTURER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLotNumber())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOT_NUMBER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPIRATION_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEncounter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENCOUNTER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTING_INFORMATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRIMARY_SOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInformationSource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INFORMATION_SOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLocation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSite())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SITE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRoute())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ROUTE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IS_SUBPOTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUBPOTENT_REASON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROGRAM_ELIGIBILITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getFundingSource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FUNDING_SOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REACTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROTOCOL_APPLIED);
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
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRImmunizationStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $out->{self::FIELD_STATUS_REASON} = $v;
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $out->{self::FIELD_VACCINE_CODE} = $v;
        }
        if (null !== ($v = $this->getAdministeredProduct())) {
            $out->{self::FIELD_ADMINISTERED_PRODUCT} = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $out->{self::FIELD_MANUFACTURER} = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOT_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOT_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPIRATION_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPIRATION_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $out->{self::FIELD_SUPPORTING_INFORMATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUPPORTING_INFORMATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRIMARY_SOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRIMARY_SOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getInformationSource())) {
            $out->{self::FIELD_INFORMATION_SOURCE} = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $out->{self::FIELD_SITE} = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $out->{self::FIELD_ROUTE} = $v;
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $out->{self::FIELD_DOSE_QUANTITY} = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PERFORMER}[] = $v;
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
        if ([] !== ($vs = $this->getReason())) {
            $out->{self::FIELD_REASON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON}[] = $v;
            }
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_SUBPOTENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_SUBPOTENT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            $out->{self::FIELD_SUBPOTENT_REASON} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SUBPOTENT_REASON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            $out->{self::FIELD_PROGRAM_ELIGIBILITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROGRAM_ELIGIBILITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getFundingSource())) {
            $out->{self::FIELD_FUNDING_SOURCE} = $v;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $out->{self::FIELD_REACTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REACTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            $out->{self::FIELD_PROTOCOL_APPLIED} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROTOCOL_APPLIED}[] = $v;
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