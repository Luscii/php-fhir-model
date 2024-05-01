<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU1;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

// if this class is used, assume not using Composer...

// interfaces
if (!interface_exists('\HL7\FHIR\DSTU1\PHPFHIRTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU1\PHPFHIRPrimitiveTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRPrimitiveTypeInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU1\PHPFHIRContainedTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRContainedTypeInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU1\PHPFHIRCommentContainerInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlSerializableConfigInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlSerializableInterface.php';
}

// traits
if (!trait_exists('\HL7\FHIR\DSTU1\PHPFHIRCommentContainerTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU1\PHPFHIRValidationAssertionsTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRValidationAssertionsTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU1\PHPFHIRChangeTrackingTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRChangeTrackingTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU1\PHPFHIRXmlNamespaceTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlNamespaceTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU1\PHPFHIRXmlSerializableConfigTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlSerializableConfigTrait.php';
}

// enums
if (!enum_exists('\HL7\FHIR\DSTU1\PHPFHIRConfigKeyEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConfigKeyEnum.php';
}
if (!enum_exists('\HL7\FHIR\DSTU1\PHPFHIRTypeEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeEnum.php';
}
if (!enum_exists('\HL7\FHIR\DSTU1\PHPFHIRApiFormatEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRApiFormatEnum.php';
}

// classes
if (!class_exists('\HL7\FHIR\DSTU1\PHPFHIRConstants', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConstants.php';
}
if (!class_exists('\HL7\FHIR\DSTU1\PHPFHIRTypeMap', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeMap.php';
}
if (!class_exists('\HL7\FHIR\DSTU1\PHPFHIRConfig', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConfig.php';
}
if (!class_exists('\HL7\FHIR\DSTU1\PHPFHIRResponseParser', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParser.php';
}
if (!class_exists('\HL7\FHIR\DSTU1\PHPFHIRDebugClientResponse', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRDebugClientResponse.php';
}
if (!class_exists('\HL7\FHIR\DSTU1\PHPFHIRDebugClient', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRDebugClient.php';
}

/**
 * Class PHPFHIRAutoloader
 * @package \HL7\FHIR\DSTU1
 */
abstract class PHPFHIRAutoloader
{
    /** @var array */
    private const _CLASS_MAP = [
        'HL7\FHIR\DSTU1\FHIRBase64BinaryPrimitive' => 'FHIRBase64BinaryPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRBinary' => 'FHIRBinary.php',
        'HL7\FHIR\DSTU1\FHIRBooleanPrimitive' => 'FHIRBooleanPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRCodePrimitive' => 'FHIRCodePrimitive.php',
        'HL7\FHIR\DSTU1\FHIRDatePrimitive' => 'FHIRDatePrimitive.php',
        'HL7\FHIR\DSTU1\FHIRDateTimePrimitive' => 'FHIRDateTimePrimitive.php',
        'HL7\FHIR\DSTU1\FHIRDecimalPrimitive' => 'FHIRDecimalPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRElement' => 'FHIRElement.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRAddress' => 'FHIRElement/FHIRAddress.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRAddressUse' => 'FHIRElement/FHIRAddressUse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRAggregationMode' => 'FHIRElement/FHIRAggregationMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRAlertStatus' => 'FHIRElement/FHIRAlertStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRAttachment' => 'FHIRElement/FHIRAttachment.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement' => 'FHIRElement/FHIRBackboneElement.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionExposure' => 'FHIRElement/FHIRBackboneElement/FHIRAdverseReaction/FHIRAdverseReactionExposure.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionSymptom' => 'FHIRElement/FHIRBackboneElement/FHIRAdverseReaction/FHIRAdverseReactionSymptom.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanActivity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanGoal.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanParticipant.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanSimple.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionAttester.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionEvent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionSection.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapConcept.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapDependsOn.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapMap.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionEvidence.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionLocation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionRelatedItem.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionStage.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceCertificate.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceDocument.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEvent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceImplementation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceMessaging.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation1.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceQuery.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceResource.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceRest.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSearchParam.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSecurity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSoftware.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportChannel' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportChannel.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportMetric' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportMetric.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportVirtualDevice.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderEvent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderItem.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticReport/FHIRDiagnosticReportImage.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceParameter.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceService.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterAccomodation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterHospitalization.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterLocation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterParticipant.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition' => 'FHIRElement/FHIRBackboneElement/FHIRFamilyHistory/FHIRFamilyHistoryCondition.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation' => 'FHIRElement/FHIRBackboneElement/FHIRFamilyHistory/FHIRFamilyHistoryRelation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic' => 'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupCharacteristic.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyInstance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudySeries.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationProtocol.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationExplanation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationReaction.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationVaccinationProtocol.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry' => 'FHIRElement/FHIRBackboneElement/FHIRList/FHIRListEntry.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition' => 'FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationPosition.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDispense.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDosage.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionDispense.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionDosageInstruction.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionSubstitution.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationStatement/FHIRMedicationStatementDosage.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationContent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationIngredient.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationPackage.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationProduct.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderSource.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationReferenceRange.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationRelated.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue' => 'FHIRElement/FHIRBackboneElement/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen' => 'FHIRElement/FHIRBackboneElement/FHIROrder/FHIROrderWhen.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact' => 'FHIRElement/FHIRBackboneElement/FHIROrganization/FHIROrganizationContact.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientAnimal.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientContact.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientLink.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification' => 'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerQualification.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedurePerformer.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedureRelatedItem.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileBinding.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileConstraint.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileDefinition.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileElement' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileElement.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileExtensionDefn.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileMapping.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileMapping1.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileQuery' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileQuery.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSearchParam' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileSearchParam.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileSlicing.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileStructure' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileStructure.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceAgent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceEntity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse' => 'FHIRElement/FHIRBackboneElement/FHIRQuery/FHIRQueryResponse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireGroup.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireQuestion.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource' => 'FHIRElement/FHIRBackboneElement/FHIRResource.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAdverseReaction.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAlert.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAllergyIntolerance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRCarePlan.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRComposition.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRConceptMap.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRCondition.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRConformance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDevice.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDeviceObservationReport.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDiagnosticOrder.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDiagnosticReport.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDocumentManifest.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDocumentReference.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIREncounter.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRFamilyHistory.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRGroup.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImagingStudy.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImmunization.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImmunizationRecommendation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRList.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRLocation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedia.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedication.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationAdministration.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationDispense.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationPrescription.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationStatement.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMessageHeader.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRObservation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROperationOutcome.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrder.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrderResponse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrganization.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROther.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRPatient.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRPractitioner.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProcedure.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProfile.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProvenance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRQuery.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRQuestionnaire.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRRelatedPerson.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSecurityEvent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSpecimen.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSubstance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSupply.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRValueSet.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventDetail.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventEvent.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventNetwork.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventObject.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventParticipant.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventSource.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenCollection.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenContainer.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenSource.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenTreatment.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceIngredient.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceInstance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSupply\FHIRSupplyDispense' => 'FHIRElement/FHIRBackboneElement/FHIRSupply/FHIRSupplyDispense.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCompose.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContains.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDefine' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetDefine.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetExpansion.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetFilter.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetInclude.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBase64Binary' => 'FHIRElement/FHIRBase64Binary.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBindingConformance' => 'FHIRElement/FHIRBindingConformance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRBoolean' => 'FHIRElement/FHIRBoolean.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCarePlanActivityCategory' => 'FHIRElement/FHIRCarePlanActivityCategory.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCarePlanActivityStatus' => 'FHIRElement/FHIRCarePlanActivityStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCarePlanGoalStatus' => 'FHIRElement/FHIRCarePlanGoalStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCarePlanStatus' => 'FHIRElement/FHIRCarePlanStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCausalityExpectation' => 'FHIRElement/FHIRCausalityExpectation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCode' => 'FHIRElement/FHIRCode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCodeableConcept' => 'FHIRElement/FHIRCodeableConcept.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCoding' => 'FHIRElement/FHIRCoding.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCompositionAttestationMode' => 'FHIRElement/FHIRCompositionAttestationMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCompositionStatus' => 'FHIRElement/FHIRCompositionStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRConceptMapEquivalence' => 'FHIRElement/FHIRConceptMapEquivalence.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRConditionRelationshipType' => 'FHIRElement/FHIRConditionRelationshipType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRConditionStatus' => 'FHIRElement/FHIRConditionStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRConformanceEventMode' => 'FHIRElement/FHIRConformanceEventMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRConformanceStatementStatus' => 'FHIRElement/FHIRConformanceStatementStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRConstraintSeverity' => 'FHIRElement/FHIRConstraintSeverity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRContact' => 'FHIRElement/FHIRContact.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRContactSystem' => 'FHIRElement/FHIRContactSystem.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRContactUse' => 'FHIRElement/FHIRContactUse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRCriticality' => 'FHIRElement/FHIRCriticality.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDate' => 'FHIRElement/FHIRDate.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDateTime' => 'FHIRElement/FHIRDateTime.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDecimal' => 'FHIRElement/FHIRDecimal.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDecimal\FHIRScore' => 'FHIRElement/FHIRDecimal/FHIRScore.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticOrderPriority' => 'FHIRElement/FHIRDiagnosticOrderPriority.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticOrderStatus' => 'FHIRElement/FHIRDiagnosticOrderStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDiagnosticReportStatus' => 'FHIRElement/FHIRDiagnosticReportStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDocumentMode' => 'FHIRElement/FHIRDocumentMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDocumentReferenceStatus' => 'FHIRElement/FHIRDocumentReferenceStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRDocumentRelationshipType' => 'FHIRElement/FHIRDocumentRelationshipType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIREncounterClass' => 'FHIRElement/FHIREncounterClass.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIREncounterState' => 'FHIRElement/FHIREncounterState.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIREventTiming' => 'FHIRElement/FHIREventTiming.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRExposureType' => 'FHIRElement/FHIRExposureType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRExtension' => 'FHIRElement/FHIRExtension.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRExtensionContext' => 'FHIRElement/FHIRExtensionContext.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRFilterOperator' => 'FHIRElement/FHIRFilterOperator.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRGroupType' => 'FHIRElement/FHIRGroupType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRHierarchicalRelationshipType' => 'FHIRElement/FHIRHierarchicalRelationshipType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRHumanName' => 'FHIRElement/FHIRHumanName.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRId' => 'FHIRElement/FHIRId.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifier' => 'FHIRElement/FHIRIdentifier.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRIdentifierUse' => 'FHIRElement/FHIRIdentifierUse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRImagingModality' => 'FHIRElement/FHIRImagingModality.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRInstanceAvailability' => 'FHIRElement/FHIRInstanceAvailability.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRInstant' => 'FHIRElement/FHIRInstant.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRInteger' => 'FHIRElement/FHIRInteger.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRInteger\FHIRTotalResults' => 'FHIRElement/FHIRInteger/FHIRTotalResults.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRIssueSeverity' => 'FHIRElement/FHIRIssueSeverity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRLinkType' => 'FHIRElement/FHIRLinkType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRListMode' => 'FHIRElement/FHIRListMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRLocationMode' => 'FHIRElement/FHIRLocationMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRLocationStatus' => 'FHIRElement/FHIRLocationStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRMediaType' => 'FHIRElement/FHIRMediaType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationAdministrationStatus' => 'FHIRElement/FHIRMedicationAdministrationStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationDispenseStatus' => 'FHIRElement/FHIRMedicationDispenseStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationKind' => 'FHIRElement/FHIRMedicationKind.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus' => 'FHIRElement/FHIRMedicationPrescriptionStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRMessageSignificanceCategory' => 'FHIRElement/FHIRMessageSignificanceCategory.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRModality' => 'FHIRElement/FHIRModality.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRNameUse' => 'FHIRElement/FHIRNameUse.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRNarrative' => 'FHIRElement/FHIRNarrative.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRNarrativeStatus' => 'FHIRElement/FHIRNarrativeStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRObservationRelationshipType' => 'FHIRElement/FHIRObservationRelationshipType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRObservationReliability' => 'FHIRElement/FHIRObservationReliability.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRObservationStatus' => 'FHIRElement/FHIRObservationStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIROid' => 'FHIRElement/FHIROid.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIROrderOutcomeStatus' => 'FHIRElement/FHIROrderOutcomeStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRPeriod' => 'FHIRElement/FHIRPeriod.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRProcedureRelationshipType' => 'FHIRElement/FHIRProcedureRelationshipType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRPropertyRepresentation' => 'FHIRElement/FHIRPropertyRepresentation.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRProvenanceEntityRole' => 'FHIRElement/FHIRProvenanceEntityRole.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantity' => 'FHIRElement/FHIRQuantity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantityCompararator' => 'FHIRElement/FHIRQuantityCompararator.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantity\FHIRAge' => 'FHIRElement/FHIRQuantity/FHIRAge.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantity\FHIRCount' => 'FHIRElement/FHIRQuantity/FHIRCount.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantity\FHIRDistance' => 'FHIRElement/FHIRQuantity/FHIRDistance.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration' => 'FHIRElement/FHIRQuantity/FHIRDuration.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuantity\FHIRMoney' => 'FHIRElement/FHIRQuantity/FHIRMoney.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQueryOutcome' => 'FHIRElement/FHIRQueryOutcome.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRQuestionnaireStatus' => 'FHIRElement/FHIRQuestionnaireStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRRange' => 'FHIRElement/FHIRRange.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRRatio' => 'FHIRElement/FHIRRatio.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRReactionSeverity' => 'FHIRElement/FHIRReactionSeverity.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRResourceProfileStatus' => 'FHIRElement/FHIRResourceProfileStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRResourceReference' => 'FHIRElement/FHIRResourceReference.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRResponseType' => 'FHIRElement/FHIRResponseType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulConformanceMode' => 'FHIRElement/FHIRRestfulConformanceMode.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulOperationSystem' => 'FHIRElement/FHIRRestfulOperationSystem.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRRestfulOperationType' => 'FHIRElement/FHIRRestfulOperationType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSampledData' => 'FHIRElement/FHIRSampledData.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSampledDataDataType' => 'FHIRElement/FHIRSampledDataDataType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSchedule' => 'FHIRElement/FHIRSchedule.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat' => 'FHIRElement/FHIRSchedule/FHIRScheduleRepeat.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSearchParamType' => 'FHIRElement/FHIRSearchParamType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSecurityEventAction' => 'FHIRElement/FHIRSecurityEventAction.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle' => 'FHIRElement/FHIRSecurityEventObjectLifecycle.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSecurityEventObjectRole' => 'FHIRElement/FHIRSecurityEventObjectRole.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSecurityEventObjectType' => 'FHIRElement/FHIRSecurityEventObjectType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSecurityEventOutcome' => 'FHIRElement/FHIRSecurityEventOutcome.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSecurityEventParticipantNetworkType' => 'FHIRElement/FHIRSecurityEventParticipantNetworkType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSensitivityStatus' => 'FHIRElement/FHIRSensitivityStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSensitivityType' => 'FHIRElement/FHIRSensitivityType.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSlicingRules' => 'FHIRElement/FHIRSlicingRules.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRString' => 'FHIRElement/FHIRString.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSupplyDispenseStatus' => 'FHIRElement/FHIRSupplyDispenseStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRSupplyStatus' => 'FHIRElement/FHIRSupplyStatus.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRUnitsOfTime' => 'FHIRElement/FHIRUnitsOfTime.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRUri' => 'FHIRElement/FHIRUri.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRUuid' => 'FHIRElement/FHIRUuid.php',
        'HL7\FHIR\DSTU1\FHIRElement\FHIRValueSetStatus' => 'FHIRElement/FHIRValueSetStatus.php',
        'HL7\FHIR\DSTU1\FHIRIdPrimitive' => 'FHIRIdPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef' => 'FHIRIdPrimitive/FHIRXmlIdRef.php',
        'HL7\FHIR\DSTU1\FHIRInstantPrimitive' => 'FHIRInstantPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRIntegerPrimitive' => 'FHIRIntegerPrimitive.php',
        'HL7\FHIR\DSTU1\FHIROidPrimitive' => 'FHIROidPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRResourceInline' => 'FHIRResourceInline.php',
        'HL7\FHIR\DSTU1\FHIRSampledDataDataTypePrimitive' => 'FHIRSampledDataDataTypePrimitive.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive' => 'FHIRStringPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRAddressUseList' => 'FHIRStringPrimitive/FHIRAddressUseList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRAggregationModeList' => 'FHIRStringPrimitive/FHIRAggregationModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRAlertStatusList' => 'FHIRStringPrimitive/FHIRAlertStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRBindingConformanceList' => 'FHIRStringPrimitive/FHIRBindingConformanceList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList' => 'FHIRStringPrimitive/FHIRCarePlanActivityCategoryList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCarePlanActivityStatusList' => 'FHIRStringPrimitive/FHIRCarePlanActivityStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCarePlanGoalStatusList' => 'FHIRStringPrimitive/FHIRCarePlanGoalStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCarePlanStatusList' => 'FHIRStringPrimitive/FHIRCarePlanStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCausalityExpectationList' => 'FHIRStringPrimitive/FHIRCausalityExpectationList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCompositionAttestationModeList' => 'FHIRStringPrimitive/FHIRCompositionAttestationModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCompositionStatusList' => 'FHIRStringPrimitive/FHIRCompositionStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRConceptMapEquivalenceList' => 'FHIRStringPrimitive/FHIRConceptMapEquivalenceList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRConditionRelationshipTypeList' => 'FHIRStringPrimitive/FHIRConditionRelationshipTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRConditionStatusList' => 'FHIRStringPrimitive/FHIRConditionStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRConformanceEventModeList' => 'FHIRStringPrimitive/FHIRConformanceEventModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRConformanceStatementStatusList' => 'FHIRStringPrimitive/FHIRConformanceStatementStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRConstraintSeverityList' => 'FHIRStringPrimitive/FHIRConstraintSeverityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRContactSystemList' => 'FHIRStringPrimitive/FHIRContactSystemList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRContactUseList' => 'FHIRStringPrimitive/FHIRContactUseList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRCriticalityList' => 'FHIRStringPrimitive/FHIRCriticalityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList' => 'FHIRStringPrimitive/FHIRDiagnosticOrderPriorityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList' => 'FHIRStringPrimitive/FHIRDiagnosticOrderStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRDiagnosticReportStatusList' => 'FHIRStringPrimitive/FHIRDiagnosticReportStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRDocumentModeList' => 'FHIRStringPrimitive/FHIRDocumentModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRDocumentReferenceStatusList' => 'FHIRStringPrimitive/FHIRDocumentReferenceStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList' => 'FHIRStringPrimitive/FHIRDocumentRelationshipTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIREncounterClassList' => 'FHIRStringPrimitive/FHIREncounterClassList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIREncounterStateList' => 'FHIRStringPrimitive/FHIREncounterStateList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIREventTimingList' => 'FHIRStringPrimitive/FHIREventTimingList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRExposureTypeList' => 'FHIRStringPrimitive/FHIRExposureTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRExtensionContextList' => 'FHIRStringPrimitive/FHIRExtensionContextList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRFilterOperatorList' => 'FHIRStringPrimitive/FHIRFilterOperatorList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRGroupTypeList' => 'FHIRStringPrimitive/FHIRGroupTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRHierarchicalRelationshipTypeList' => 'FHIRStringPrimitive/FHIRHierarchicalRelationshipTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRIdentifierUseList' => 'FHIRStringPrimitive/FHIRIdentifierUseList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRImagingModalityList' => 'FHIRStringPrimitive/FHIRImagingModalityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRInstanceAvailabilityList' => 'FHIRStringPrimitive/FHIRInstanceAvailabilityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRIssueSeverityList' => 'FHIRStringPrimitive/FHIRIssueSeverityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRLinkTypeList' => 'FHIRStringPrimitive/FHIRLinkTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRListModeList' => 'FHIRStringPrimitive/FHIRListModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRLocationModeList' => 'FHIRStringPrimitive/FHIRLocationModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRLocationStatusList' => 'FHIRStringPrimitive/FHIRLocationStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRMediaTypeList' => 'FHIRStringPrimitive/FHIRMediaTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList' => 'FHIRStringPrimitive/FHIRMedicationAdministrationStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRMedicationDispenseStatusList' => 'FHIRStringPrimitive/FHIRMedicationDispenseStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRMedicationKindList' => 'FHIRStringPrimitive/FHIRMedicationKindList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList' => 'FHIRStringPrimitive/FHIRMedicationPrescriptionStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList' => 'FHIRStringPrimitive/FHIRMessageSignificanceCategoryList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRModalityList' => 'FHIRStringPrimitive/FHIRModalityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRNameUseList' => 'FHIRStringPrimitive/FHIRNameUseList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRNarrativeStatusList' => 'FHIRStringPrimitive/FHIRNarrativeStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRObservationRelationshipTypeList' => 'FHIRStringPrimitive/FHIRObservationRelationshipTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRObservationReliabilityList' => 'FHIRStringPrimitive/FHIRObservationReliabilityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRObservationStatusList' => 'FHIRStringPrimitive/FHIRObservationStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIROrderOutcomeStatusList' => 'FHIRStringPrimitive/FHIROrderOutcomeStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRProcedureRelationshipTypeList' => 'FHIRStringPrimitive/FHIRProcedureRelationshipTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRPropertyRepresentationList' => 'FHIRStringPrimitive/FHIRPropertyRepresentationList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRProvenanceEntityRoleList' => 'FHIRStringPrimitive/FHIRProvenanceEntityRoleList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRQuantityCompararatorList' => 'FHIRStringPrimitive/FHIRQuantityCompararatorList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRQueryOutcomeList' => 'FHIRStringPrimitive/FHIRQueryOutcomeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRQuestionnaireStatusList' => 'FHIRStringPrimitive/FHIRQuestionnaireStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRReactionSeverityList' => 'FHIRStringPrimitive/FHIRReactionSeverityList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRResourceProfileStatusList' => 'FHIRStringPrimitive/FHIRResourceProfileStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRResourceType' => 'FHIRStringPrimitive/FHIRResourceType.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRResourceType\FHIRResourceNamesPlusBinary' => 'FHIRStringPrimitive/FHIRResourceType/FHIRResourceNamesPlusBinary.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRResponseTypeList' => 'FHIRStringPrimitive/FHIRResponseTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRRestfulConformanceModeList' => 'FHIRStringPrimitive/FHIRRestfulConformanceModeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRRestfulOperationSystemList' => 'FHIRStringPrimitive/FHIRRestfulOperationSystemList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRRestfulOperationTypeList' => 'FHIRStringPrimitive/FHIRRestfulOperationTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSearchParamTypeList' => 'FHIRStringPrimitive/FHIRSearchParamTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSecurityEventActionList' => 'FHIRStringPrimitive/FHIRSecurityEventActionList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSecurityEventObjectLifecycleList' => 'FHIRStringPrimitive/FHIRSecurityEventObjectLifecycleList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSecurityEventObjectRoleList' => 'FHIRStringPrimitive/FHIRSecurityEventObjectRoleList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSecurityEventObjectTypeList' => 'FHIRStringPrimitive/FHIRSecurityEventObjectTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSecurityEventOutcomeList' => 'FHIRStringPrimitive/FHIRSecurityEventOutcomeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSecurityEventParticipantNetworkTypeList' => 'FHIRStringPrimitive/FHIRSecurityEventParticipantNetworkTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSensitivityStatusList' => 'FHIRStringPrimitive/FHIRSensitivityStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSensitivityTypeList' => 'FHIRStringPrimitive/FHIRSensitivityTypeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSlicingRulesList' => 'FHIRStringPrimitive/FHIRSlicingRulesList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSupplyDispenseStatusList' => 'FHIRStringPrimitive/FHIRSupplyDispenseStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRSupplyStatusList' => 'FHIRStringPrimitive/FHIRSupplyStatusList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRUnitsOfTimeList' => 'FHIRStringPrimitive/FHIRUnitsOfTimeList.php',
        'HL7\FHIR\DSTU1\FHIRStringPrimitive\FHIRValueSetStatusList' => 'FHIRStringPrimitive/FHIRValueSetStatusList.php',
        'HL7\FHIR\DSTU1\FHIRUriPrimitive' => 'FHIRUriPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRUuidPrimitive' => 'FHIRUuidPrimitive.php',
        'HL7\FHIR\DSTU1\FHIRXhtml' => 'FHIRXhtml.php',
    ];

    /** @var bool */
    private static bool $_registered = false;

    /**
     * @return bool
     * @throws \Exception
     */
    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(__CLASS__ . '::loadClass', true);
        }
        return self::$_registered;
    }

    /**
     * @return bool
     */
    public static function unregister(): bool
    {
        if (self::$_registered) {
            if (spl_autoload_unregister(__CLASS__ . '::loadClass')) {
                self::$_registered = false;
                return true;
            }
        }
        return false;
    }

    /**
     * Please see associated documentation for more information on what this method looks for.
     *
     * @param string $class
     * @return bool|null
     */
    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require __DIR__ . DIRECTORY_SEPARATOR . self::_CLASS_MAP[$class];
        }
        return null;
    }
}
