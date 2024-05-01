<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

// if this class is used, assume not using Composer...

// interfaces
if (!interface_exists('\HL7\FHIR\DSTU2\PHPFHIRTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU2\PHPFHIRPrimitiveTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRPrimitiveTypeInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU2\PHPFHIRContainedTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRContainedTypeInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU2\PHPFHIRCommentContainerInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlSerializableConfigInterface.php';
}
if (!interface_exists('\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlSerializableInterface.php';
}

// traits
if (!trait_exists('\HL7\FHIR\DSTU2\PHPFHIRCommentContainerTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU2\PHPFHIRValidationAssertionsTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRValidationAssertionsTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU2\PHPFHIRChangeTrackingTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRChangeTrackingTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU2\PHPFHIRXmlNamespaceTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlNamespaceTrait.php';
}
if (!trait_exists('\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlSerializableConfigTrait.php';
}

// enums
if (!enum_exists('\HL7\FHIR\DSTU2\PHPFHIRConfigKeyEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConfigKeyEnum.php';
}
if (!enum_exists('\HL7\FHIR\DSTU2\PHPFHIRTypeEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeEnum.php';
}
if (!enum_exists('\HL7\FHIR\DSTU2\PHPFHIRApiFormatEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRApiFormatEnum.php';
}

// classes
if (!class_exists('\HL7\FHIR\DSTU2\PHPFHIRConstants', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConstants.php';
}
if (!class_exists('\HL7\FHIR\DSTU2\PHPFHIRTypeMap', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeMap.php';
}
if (!class_exists('\HL7\FHIR\DSTU2\PHPFHIRConfig', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConfig.php';
}
if (!class_exists('\HL7\FHIR\DSTU2\PHPFHIRResponseParser', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParser.php';
}
if (!class_exists('\HL7\FHIR\DSTU2\PHPFHIRDebugClientResponse', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRDebugClientResponse.php';
}
if (!class_exists('\HL7\FHIR\DSTU2\PHPFHIRDebugClient', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRDebugClient.php';
}

/**
 * Class PHPFHIRAutoloader
 * @package \HL7\FHIR\DSTU2
 */
abstract class PHPFHIRAutoloader
{
    /** @var array */
    private const _CLASS_MAP = [
        'HL7\FHIR\DSTU2\FHIRBase64BinaryPrimitive' => 'FHIRBase64BinaryPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRBooleanPrimitive' => 'FHIRBooleanPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRCodePrimitive' => 'FHIRCodePrimitive.php',
        'HL7\FHIR\DSTU2\FHIRDatePrimitive' => 'FHIRDatePrimitive.php',
        'HL7\FHIR\DSTU2\FHIRDateTimePrimitive' => 'FHIRDateTimePrimitive.php',
        'HL7\FHIR\DSTU2\FHIRDecimalPrimitive' => 'FHIRDecimalPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRElement' => 'FHIRElement.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAccountStatus' => 'FHIRElement/FHIRAccountStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRActionList' => 'FHIRElement/FHIRActionList.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAddress' => 'FHIRElement/FHIRAddress.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAddressType' => 'FHIRElement/FHIRAddressType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAddressUse' => 'FHIRElement/FHIRAddressUse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAdministrativeGender' => 'FHIRElement/FHIRAdministrativeGender.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAggregationMode' => 'FHIRElement/FHIRAggregationMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory' => 'FHIRElement/FHIRAllergyIntoleranceCategory.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty' => 'FHIRElement/FHIRAllergyIntoleranceCertainty.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality' => 'FHIRElement/FHIRAllergyIntoleranceCriticality.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity' => 'FHIRElement/FHIRAllergyIntoleranceSeverity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus' => 'FHIRElement/FHIRAllergyIntoleranceStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceType' => 'FHIRElement/FHIRAllergyIntoleranceType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation' => 'FHIRElement/FHIRAnnotation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAnswerFormat' => 'FHIRElement/FHIRAnswerFormat.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAppointmentStatus' => 'FHIRElement/FHIRAppointmentStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAssertionDirectionType' => 'FHIRElement/FHIRAssertionDirectionType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAssertionOperatorType' => 'FHIRElement/FHIRAssertionOperatorType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAssertionResponseTypes' => 'FHIRElement/FHIRAssertionResponseTypes.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment' => 'FHIRElement/FHIRAttachment.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAuditEventAction' => 'FHIRElement/FHIRAuditEventAction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAuditEventOutcome' => 'FHIRElement/FHIRAuditEventOutcome.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRAuditEventParticipantNetworkType' => 'FHIRElement/FHIRAuditEventParticipantNetworkType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement' => 'FHIRElement/FHIRBackboneElement.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction' => 'FHIRElement/FHIRBackboneElement/FHIRAllergyIntolerance/FHIRAllergyIntoleranceReaction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRAppointment/FHIRAppointmentParticipant.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventEvent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventNetwork.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventObject.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventParticipant.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventSource.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleEntry.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleLink.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleRequest.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleResponse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleSearch.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanActivity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanParticipant.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanRelatedPlan.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAddItem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication2' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication2.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication3.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication4' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication4.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseCoverage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseDetail1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseError.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseItem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseNote.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseSubDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimCoverage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimDiagnosis.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimItem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimMissingTeeth.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimPayee.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimProsthesis.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimSubDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding' => 'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionFinding.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations' => 'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionInvestigations.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut' => 'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionRuledOut.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload' => 'FHIRElement/FHIRBackboneElement/FHIRCommunicationRequest/FHIRCommunicationRequestPayload.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload' => 'FHIRElement/FHIRBackboneElement/FHIRCommunication/FHIRCommunicationPayload.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionAttester.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionEvent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionSection.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapContact' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapDependsOn.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapElement.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapTarget.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionEvidence.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionStage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceCertificate.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceDocument.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEndpoint.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEvent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceImplementation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceInteraction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceInteraction1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceMessaging.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceResource.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceRest.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSearchParam.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSecurity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSoftware.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractActor.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractActor1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractFriendly.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractLegal.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractRule.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractSigner.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractTerm.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractValuedItem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractValuedItem1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact' => 'FHIRElement/FHIRBackboneElement/FHIRDataElement/FHIRDataElementContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping' => 'FHIRElement/FHIRBackboneElement/FHIRDataElement/FHIRDataElementMapping.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation' => 'FHIRElement/FHIRBackboneElement/FHIRDetectedIssue/FHIRDetectedIssueMitigation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceComponent/FHIRDeviceComponentProductionSpecification.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceMetric/FHIRDeviceMetricCalibration.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderEvent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderItem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticReport/FHIRDiagnosticReportImage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentManifest/FHIRDocumentManifestContent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentManifest/FHIRDocumentManifestRelated.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelated' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelated.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterHospitalization.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterLocation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterParticipant.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterStatusHistory.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam' => 'FHIRElement/FHIRBackboneElement/FHIREpisodeOfCare/FHIREpisodeOfCareCareTeam.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory' => 'FHIRElement/FHIRBackboneElement/FHIREpisodeOfCare/FHIREpisodeOfCareStatusHistory.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition' => 'FHIRElement/FHIRBackboneElement/FHIRFamilyMemberHistory/FHIRFamilyMemberHistoryCondition.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalOutcome' => 'FHIRElement/FHIRBackboneElement/FHIRGoal/FHIRGoalOutcome.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic' => 'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupCharacteristic.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember' => 'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupMember.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime' => 'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceAvailableTime.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable' => 'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceNotAvailable.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType' => 'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceServiceType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionFrames.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionInstance.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionSeries.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionStudy.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyInstance.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudySeries.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationProtocol.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationExplanation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationReaction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationVaccinationProtocol.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideDependency.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideGlobal.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuidePackage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuidePage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideResource.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry' => 'FHIRElement/FHIRBackboneElement/FHIRList/FHIRListEntry.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition' => 'FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationPosition.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDosageInstruction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationOrder/FHIRMedicationOrderDispenseRequest.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationOrder/FHIRMedicationOrderDosageInstruction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationOrder/FHIRMedicationOrderSubstitution.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationStatement/FHIRMedicationStatementDosage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationBatch.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationContent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationIngredient.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationPackage.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationProduct.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderSource.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact' => 'FHIRElement/FHIRBackboneElement/FHIRNamingSystem/FHIRNamingSystemContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId' => 'FHIRElement/FHIRBackboneElement/FHIRNamingSystem/FHIRNamingSystemUniqueId.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderAdministration.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderEnteralFormula.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderNutrient.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderOralDiet.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderSupplement.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderTexture.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationComponent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationReferenceRange.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationRelated.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding' => 'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionBinding.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact' => 'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter' => 'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionParameter.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue' => 'FHIRElement/FHIRBackboneElement/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen' => 'FHIRElement/FHIRBackboneElement/FHIROrder/FHIROrderWhen.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact' => 'FHIRElement/FHIRBackboneElement/FHIROrganization/FHIROrganizationContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter' => 'FHIRElement/FHIRBackboneElement/FHIRParameters/FHIRParametersParameter.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientAnimal.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientCommunication.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientLink.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail' => 'FHIRElement/FHIRBackboneElement/FHIRPaymentReconciliation/FHIRPaymentReconciliationDetail.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationNote' => 'FHIRElement/FHIRBackboneElement/FHIRPaymentReconciliation/FHIRPaymentReconciliationNote.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink' => 'FHIRElement/FHIRBackboneElement/FHIRPerson/FHIRPersonLink.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerPractitionerRole' => 'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerPractitionerRole.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification' => 'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerQualification.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedureFocalDevice.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedurePerformer.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem' => 'FHIRElement/FHIRBackboneElement/FHIRProcessRequest/FHIRProcessRequestItem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseNotes' => 'FHIRElement/FHIRBackboneElement/FHIRProcessResponse/FHIRProcessResponseNotes.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceAgent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceEntity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceRelatedAgent.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseAnswer.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseGroup.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseQuestion' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseQuestion.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireGroup.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireQuestion.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction' => 'FHIRElement/FHIRBackboneElement/FHIRRiskAssessment/FHIRRiskAssessmentPrediction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterContact' => 'FHIRElement/FHIRBackboneElement/FHIRSearchParameter/FHIRSearchParameterContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenCollection.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenContainer.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenTreatment.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContact' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionDifferential.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionMapping.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionSnapshot.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel' => 'FHIRElement/FHIRBackboneElement/FHIRSubscription/FHIRSubscriptionChannel.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceIngredient.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceInstance.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen' => 'FHIRElement/FHIRBackboneElement/FHIRSupplyRequest/FHIRSupplyRequestWhen.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction2.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAssert.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptCapability.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptFixture.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptLink.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptMetadata.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptOperation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptRequestHeader.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptSetup.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptTeardown.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptTest.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptVariable.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCodeSystem' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCodeSystem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCompose.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept1.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContact' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContact.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContains.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetDesignation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetExpansion.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetFilter.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetInclude.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetParameter.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense' => 'FHIRElement/FHIRBackboneElement/FHIRVisionPrescription/FHIRVisionPrescriptionDispense.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary' => 'FHIRElement/FHIRBase64Binary.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBindingStrength' => 'FHIRElement/FHIRBindingStrength.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean' => 'FHIRElement/FHIRBoolean.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRBundleType' => 'FHIRElement/FHIRBundleType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCarePlanActivityStatus' => 'FHIRElement/FHIRCarePlanActivityStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCarePlanRelationship' => 'FHIRElement/FHIRCarePlanRelationship.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCarePlanStatus' => 'FHIRElement/FHIRCarePlanStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRClaimType' => 'FHIRElement/FHIRClaimType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRClinicalImpressionStatus' => 'FHIRElement/FHIRClinicalImpressionStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCode' => 'FHIRElement/FHIRCode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept' => 'FHIRElement/FHIRCodeableConcept.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCoding' => 'FHIRElement/FHIRCoding.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCommunicationRequestStatus' => 'FHIRElement/FHIRCommunicationRequestStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCommunicationStatus' => 'FHIRElement/FHIRCommunicationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCompositionAttestationMode' => 'FHIRElement/FHIRCompositionAttestationMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRCompositionStatus' => 'FHIRElement/FHIRCompositionStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConceptMapEquivalence' => 'FHIRElement/FHIRConceptMapEquivalence.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConditionalDeleteStatus' => 'FHIRElement/FHIRConditionalDeleteStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus' => 'FHIRElement/FHIRConditionVerificationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConformanceEventMode' => 'FHIRElement/FHIRConformanceEventMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConformanceResourceStatus' => 'FHIRElement/FHIRConformanceResourceStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConformanceStatementKind' => 'FHIRElement/FHIRConformanceStatementKind.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRConstraintSeverity' => 'FHIRElement/FHIRConstraintSeverity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint' => 'FHIRElement/FHIRContactPoint.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRContactPointSystem' => 'FHIRElement/FHIRContactPointSystem.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRContactPointUse' => 'FHIRElement/FHIRContactPointUse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRContentType' => 'FHIRElement/FHIRContentType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDataElementStringency' => 'FHIRElement/FHIRDataElementStringency.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDate' => 'FHIRElement/FHIRDate.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime' => 'FHIRElement/FHIRDateTime.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDaysOfWeek' => 'FHIRElement/FHIRDaysOfWeek.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal' => 'FHIRElement/FHIRDecimal.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity' => 'FHIRElement/FHIRDetectedIssueSeverity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceMetricCalibrationState' => 'FHIRElement/FHIRDeviceMetricCalibrationState.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceMetricCalibrationType' => 'FHIRElement/FHIRDeviceMetricCalibrationType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceMetricCategory' => 'FHIRElement/FHIRDeviceMetricCategory.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceMetricColor' => 'FHIRElement/FHIRDeviceMetricColor.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceMetricOperationalStatus' => 'FHIRElement/FHIRDeviceMetricOperationalStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceStatus' => 'FHIRElement/FHIRDeviceStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority' => 'FHIRElement/FHIRDeviceUseRequestPriority.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus' => 'FHIRElement/FHIRDeviceUseRequestStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDiagnosticOrderPriority' => 'FHIRElement/FHIRDiagnosticOrderPriority.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus' => 'FHIRElement/FHIRDiagnosticOrderStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDiagnosticReportStatus' => 'FHIRElement/FHIRDiagnosticReportStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDigitalMediaType' => 'FHIRElement/FHIRDigitalMediaType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDocumentMode' => 'FHIRElement/FHIRDocumentMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDocumentReferenceStatus' => 'FHIRElement/FHIRDocumentReferenceStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRDocumentRelationshipType' => 'FHIRElement/FHIRDocumentRelationshipType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition' => 'FHIRElement/FHIRElementDefinition.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionBase.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionBinding.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionConstraint.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionMapping.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionSlicing.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIREncounterClass' => 'FHIRElement/FHIREncounterClass.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIREncounterLocationStatus' => 'FHIRElement/FHIREncounterLocationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIREncounterState' => 'FHIRElement/FHIREncounterState.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIREpisodeOfCareStatus' => 'FHIRElement/FHIREpisodeOfCareStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming' => 'FHIRElement/FHIREventTiming.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRExtension' => 'FHIRElement/FHIRExtension.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRExtensionContext' => 'FHIRElement/FHIRExtensionContext.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRFamilyHistoryStatus' => 'FHIRElement/FHIRFamilyHistoryStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRFilterOperator' => 'FHIRElement/FHIRFilterOperator.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRFlagStatus' => 'FHIRElement/FHIRFlagStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRGoalStatus' => 'FHIRElement/FHIRGoalStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRGroupType' => 'FHIRElement/FHIRGroupType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRGuideDependencyType' => 'FHIRElement/FHIRGuideDependencyType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRGuidePageKind' => 'FHIRElement/FHIRGuidePageKind.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRGuideResourcePurpose' => 'FHIRElement/FHIRGuideResourcePurpose.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRHTTPVerb' => 'FHIRElement/FHIRHTTPVerb.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName' => 'FHIRElement/FHIRHumanName.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRId' => 'FHIRElement/FHIRId.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier' => 'FHIRElement/FHIRIdentifier.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifierUse' => 'FHIRElement/FHIRIdentifierUse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRIdentityAssuranceLevel' => 'FHIRElement/FHIRIdentityAssuranceLevel.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRInstanceAvailability' => 'FHIRElement/FHIRInstanceAvailability.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRInstant' => 'FHIRElement/FHIRInstant.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRInteger' => 'FHIRElement/FHIRInteger.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRIssueSeverity' => 'FHIRElement/FHIRIssueSeverity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRIssueType' => 'FHIRElement/FHIRIssueType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRLinkType' => 'FHIRElement/FHIRLinkType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRListMode' => 'FHIRElement/FHIRListMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRListStatus' => 'FHIRElement/FHIRListStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRLocationMode' => 'FHIRElement/FHIRLocationMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRLocationStatus' => 'FHIRElement/FHIRLocationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown' => 'FHIRElement/FHIRMarkdown.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMeasmnt_Principle' => 'FHIRElement/FHIRMeasmnt_Principle.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus' => 'FHIRElement/FHIRMedicationAdministrationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationDispenseStatus' => 'FHIRElement/FHIRMedicationDispenseStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationOrderStatus' => 'FHIRElement/FHIRMedicationOrderStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMedicationStatementStatus' => 'FHIRElement/FHIRMedicationStatementStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMessageSignificanceCategory' => 'FHIRElement/FHIRMessageSignificanceCategory.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRMeta' => 'FHIRElement/FHIRMeta.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNameUse' => 'FHIRElement/FHIRNameUse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType' => 'FHIRElement/FHIRNamingSystemIdentifierType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNamingSystemType' => 'FHIRElement/FHIRNamingSystemType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNarrative' => 'FHIRElement/FHIRNarrative.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNarrativeStatus' => 'FHIRElement/FHIRNarrativeStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNoteType' => 'FHIRElement/FHIRNoteType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRNutritionOrderStatus' => 'FHIRElement/FHIRNutritionOrderStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRObservationRelationshipType' => 'FHIRElement/FHIRObservationRelationshipType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRObservationStatus' => 'FHIRElement/FHIRObservationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIROid' => 'FHIRElement/FHIROid.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIROperationKind' => 'FHIRElement/FHIROperationKind.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIROperationParameterUse' => 'FHIRElement/FHIROperationParameterUse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIROrderStatus' => 'FHIRElement/FHIROrderStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRParticipantRequired' => 'FHIRElement/FHIRParticipantRequired.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRParticipantStatus' => 'FHIRElement/FHIRParticipantStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRParticipationStatus' => 'FHIRElement/FHIRParticipationStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod' => 'FHIRElement/FHIRPeriod.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt' => 'FHIRElement/FHIRPositiveInt.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRProcedureRequestPriority' => 'FHIRElement/FHIRProcedureRequestPriority.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRProcedureRequestStatus' => 'FHIRElement/FHIRProcedureRequestStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRProcedureStatus' => 'FHIRElement/FHIRProcedureStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRPropertyRepresentation' => 'FHIRElement/FHIRPropertyRepresentation.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRProvenanceEntityRole' => 'FHIRElement/FHIRProvenanceEntityRole.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity' => 'FHIRElement/FHIRQuantity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantityComparator' => 'FHIRElement/FHIRQuantityComparator.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge' => 'FHIRElement/FHIRQuantity/FHIRAge.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRCount' => 'FHIRElement/FHIRQuantity/FHIRCount.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDistance' => 'FHIRElement/FHIRQuantity/FHIRDistance.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration' => 'FHIRElement/FHIRQuantity/FHIRDuration.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney' => 'FHIRElement/FHIRQuantity/FHIRMoney.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity' => 'FHIRElement/FHIRQuantity/FHIRSimpleQuantity.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuestionnaireResponseStatus' => 'FHIRElement/FHIRQuestionnaireResponseStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRQuestionnaireStatus' => 'FHIRElement/FHIRQuestionnaireStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRRange' => 'FHIRElement/FHIRRange.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRRatio' => 'FHIRElement/FHIRRatio.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRReference' => 'FHIRElement/FHIRReference.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRReferralStatus' => 'FHIRElement/FHIRReferralStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRRemittanceOutcome' => 'FHIRElement/FHIRRemittanceOutcome.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRResourceVersionPolicy' => 'FHIRElement/FHIRResourceVersionPolicy.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRResponseType' => 'FHIRElement/FHIRResponseType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRRestfulConformanceMode' => 'FHIRElement/FHIRRestfulConformanceMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData' => 'FHIRElement/FHIRSampledData.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSampledDataDataType' => 'FHIRElement/FHIRSampledDataDataType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSearchEntryMode' => 'FHIRElement/FHIRSearchEntryMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSearchModifierCode' => 'FHIRElement/FHIRSearchModifierCode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSearchParamType' => 'FHIRElement/FHIRSearchParamType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSignature' => 'FHIRElement/FHIRSignature.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSlicingRules' => 'FHIRElement/FHIRSlicingRules.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSlotStatus' => 'FHIRElement/FHIRSlotStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSpecimenStatus' => 'FHIRElement/FHIRSpecimenStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRString' => 'FHIRElement/FHIRString.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRStructureDefinitionKind' => 'FHIRElement/FHIRStructureDefinitionKind.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSubscriptionChannelType' => 'FHIRElement/FHIRSubscriptionChannelType.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSubscriptionStatus' => 'FHIRElement/FHIRSubscriptionStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus' => 'FHIRElement/FHIRSupplyDeliveryStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSupplyRequestStatus' => 'FHIRElement/FHIRSupplyRequestStatus.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRSystemRestfulInteraction' => 'FHIRElement/FHIRSystemRestfulInteraction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRTime' => 'FHIRElement/FHIRTime.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRTiming' => 'FHIRElement/FHIRTiming.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat' => 'FHIRElement/FHIRTiming/FHIRTimingRepeat.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRTransactionMode' => 'FHIRElement/FHIRTransactionMode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRTypeRestfulInteraction' => 'FHIRElement/FHIRTypeRestfulInteraction.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime' => 'FHIRElement/FHIRUnitsOfTime.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRUnknownContentCode' => 'FHIRElement/FHIRUnknownContentCode.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt' => 'FHIRElement/FHIRUnsignedInt.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRUri' => 'FHIRElement/FHIRUri.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRUse' => 'FHIRElement/FHIRUse.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRUuid' => 'FHIRElement/FHIRUuid.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRVisionBase' => 'FHIRElement/FHIRVisionBase.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRVisionEyes' => 'FHIRElement/FHIRVisionEyes.php',
        'HL7\FHIR\DSTU2\FHIRElement\FHIRXPathUsageType' => 'FHIRElement/FHIRXPathUsageType.php',
        'HL7\FHIR\DSTU2\FHIRIdPrimitive' => 'FHIRIdPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRInstantPrimitive' => 'FHIRInstantPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRIntegerPrimitive' => 'FHIRIntegerPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRMarkdownPrimitive' => 'FHIRMarkdownPrimitive.php',
        'HL7\FHIR\DSTU2\FHIROidPrimitive' => 'FHIROidPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRPositiveIntPrimitive' => 'FHIRPositiveIntPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRResource' => 'FHIRResource.php',
        'HL7\FHIR\DSTU2\FHIRResourceContainer' => 'FHIRResourceContainer.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRBinary' => 'FHIRResource/FHIRBinary.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRBundle' => 'FHIRResource/FHIRBundle.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource' => 'FHIRResource/FHIRDomainResource.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRAccount' => 'FHIRResource/FHIRDomainResource/FHIRAccount.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance' => 'FHIRResource/FHIRDomainResource/FHIRAllergyIntolerance.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointment' => 'FHIRResource/FHIRDomainResource/FHIRAppointment.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse' => 'FHIRResource/FHIRDomainResource/FHIRAppointmentResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRAuditEvent' => 'FHIRResource/FHIRDomainResource/FHIRAuditEvent.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRBasic' => 'FHIRResource/FHIRDomainResource/FHIRBasic.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRBodySite' => 'FHIRResource/FHIRDomainResource/FHIRBodySite.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCarePlan' => 'FHIRResource/FHIRDomainResource/FHIRCarePlan.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim' => 'FHIRResource/FHIRDomainResource/FHIRClaim.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse' => 'FHIRResource/FHIRDomainResource/FHIRClaimResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRClinicalImpression' => 'FHIRResource/FHIRDomainResource/FHIRClinicalImpression.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunication' => 'FHIRResource/FHIRDomainResource/FHIRCommunication.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest' => 'FHIRResource/FHIRDomainResource/FHIRCommunicationRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRComposition' => 'FHIRResource/FHIRDomainResource/FHIRComposition.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRConceptMap' => 'FHIRResource/FHIRDomainResource/FHIRConceptMap.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCondition' => 'FHIRResource/FHIRDomainResource/FHIRCondition.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRConformance' => 'FHIRResource/FHIRDomainResource/FHIRConformance.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRContract' => 'FHIRResource/FHIRDomainResource/FHIRContract.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRCoverage' => 'FHIRResource/FHIRDomainResource/FHIRCoverage.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDataElement' => 'FHIRResource/FHIRDomainResource/FHIRDataElement.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDetectedIssue' => 'FHIRResource/FHIRDomainResource/FHIRDetectedIssue.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDevice' => 'FHIRResource/FHIRDomainResource/FHIRDevice.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent' => 'FHIRResource/FHIRDomainResource/FHIRDeviceComponent.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceMetric' => 'FHIRResource/FHIRDomainResource/FHIRDeviceMetric.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest' => 'FHIRResource/FHIRDomainResource/FHIRDeviceUseRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement' => 'FHIRResource/FHIRDomainResource/FHIRDeviceUseStatement.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticOrder' => 'FHIRResource/FHIRDomainResource/FHIRDiagnosticOrder.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport' => 'FHIRResource/FHIRDomainResource/FHIRDiagnosticReport.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentManifest' => 'FHIRResource/FHIRDomainResource/FHIRDocumentManifest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentReference' => 'FHIRResource/FHIRDomainResource/FHIRDocumentReference.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIREligibilityRequest' => 'FHIRResource/FHIRDomainResource/FHIREligibilityRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIREligibilityResponse' => 'FHIRResource/FHIRDomainResource/FHIREligibilityResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter' => 'FHIRResource/FHIRDomainResource/FHIREncounter.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest' => 'FHIRResource/FHIRDomainResource/FHIREnrollmentRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse' => 'FHIRResource/FHIRDomainResource/FHIREnrollmentResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare' => 'FHIRResource/FHIRDomainResource/FHIREpisodeOfCare.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit' => 'FHIRResource/FHIRDomainResource/FHIRExplanationOfBenefit.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory' => 'FHIRResource/FHIRDomainResource/FHIRFamilyMemberHistory.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRFlag' => 'FHIRResource/FHIRDomainResource/FHIRFlag.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRGoal' => 'FHIRResource/FHIRDomainResource/FHIRGoal.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRGroup' => 'FHIRResource/FHIRDomainResource/FHIRGroup.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService' => 'FHIRResource/FHIRDomainResource/FHIRHealthcareService.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection' => 'FHIRResource/FHIRDomainResource/FHIRImagingObjectSelection.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingStudy' => 'FHIRResource/FHIRDomainResource/FHIRImagingStudy.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunization' => 'FHIRResource/FHIRDomainResource/FHIRImmunization.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation' => 'FHIRResource/FHIRDomainResource/FHIRImmunizationRecommendation.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRImplementationGuide' => 'FHIRResource/FHIRDomainResource/FHIRImplementationGuide.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRList' => 'FHIRResource/FHIRDomainResource/FHIRList.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRLocation' => 'FHIRResource/FHIRDomainResource/FHIRLocation.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia' => 'FHIRResource/FHIRDomainResource/FHIRMedia.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedication' => 'FHIRResource/FHIRDomainResource/FHIRMedication.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration' => 'FHIRResource/FHIRDomainResource/FHIRMedicationAdministration.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense' => 'FHIRResource/FHIRDomainResource/FHIRMedicationDispense.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationOrder' => 'FHIRResource/FHIRDomainResource/FHIRMedicationOrder.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationStatement' => 'FHIRResource/FHIRDomainResource/FHIRMedicationStatement.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRMessageHeader' => 'FHIRResource/FHIRDomainResource/FHIRMessageHeader.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRNamingSystem' => 'FHIRResource/FHIRDomainResource/FHIRNamingSystem.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRNutritionOrder' => 'FHIRResource/FHIRDomainResource/FHIRNutritionOrder.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRObservation' => 'FHIRResource/FHIRDomainResource/FHIRObservation.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition' => 'FHIRResource/FHIRDomainResource/FHIROperationDefinition.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationOutcome' => 'FHIRResource/FHIRDomainResource/FHIROperationOutcome.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIROrder' => 'FHIRResource/FHIRDomainResource/FHIROrder.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIROrderResponse' => 'FHIRResource/FHIRDomainResource/FHIROrderResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIROrganization' => 'FHIRResource/FHIRDomainResource/FHIROrganization.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRPatient' => 'FHIRResource/FHIRDomainResource/FHIRPatient.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRPaymentNotice' => 'FHIRResource/FHIRDomainResource/FHIRPaymentNotice.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation' => 'FHIRResource/FHIRDomainResource/FHIRPaymentReconciliation.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRPerson' => 'FHIRResource/FHIRDomainResource/FHIRPerson.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRPractitioner' => 'FHIRResource/FHIRDomainResource/FHIRPractitioner.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedure' => 'FHIRResource/FHIRDomainResource/FHIRProcedure.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest' => 'FHIRResource/FHIRDomainResource/FHIRProcedureRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessRequest' => 'FHIRResource/FHIRDomainResource/FHIRProcessRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessResponse' => 'FHIRResource/FHIRDomainResource/FHIRProcessResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRProvenance' => 'FHIRResource/FHIRDomainResource/FHIRProvenance.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRQuestionnaire' => 'FHIRResource/FHIRDomainResource/FHIRQuestionnaire.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse' => 'FHIRResource/FHIRDomainResource/FHIRQuestionnaireResponse.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRReferralRequest' => 'FHIRResource/FHIRDomainResource/FHIRReferralRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRRelatedPerson' => 'FHIRResource/FHIRDomainResource/FHIRRelatedPerson.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRRiskAssessment' => 'FHIRResource/FHIRDomainResource/FHIRRiskAssessment.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSchedule' => 'FHIRResource/FHIRDomainResource/FHIRSchedule.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSearchParameter' => 'FHIRResource/FHIRDomainResource/FHIRSearchParameter.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSlot' => 'FHIRResource/FHIRDomainResource/FHIRSlot.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSpecimen' => 'FHIRResource/FHIRDomainResource/FHIRSpecimen.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRStructureDefinition' => 'FHIRResource/FHIRDomainResource/FHIRStructureDefinition.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSubscription' => 'FHIRResource/FHIRDomainResource/FHIRSubscription.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSubstance' => 'FHIRResource/FHIRDomainResource/FHIRSubstance.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery' => 'FHIRResource/FHIRDomainResource/FHIRSupplyDelivery.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyRequest' => 'FHIRResource/FHIRDomainResource/FHIRSupplyRequest.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRTestScript' => 'FHIRResource/FHIRDomainResource/FHIRTestScript.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRValueSet' => 'FHIRResource/FHIRDomainResource/FHIRValueSet.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource\FHIRVisionPrescription' => 'FHIRResource/FHIRDomainResource/FHIRVisionPrescription.php',
        'HL7\FHIR\DSTU2\FHIRResource\FHIRParameters' => 'FHIRResource/FHIRParameters.php',
        'HL7\FHIR\DSTU2\FHIRSampledDataDataTypePrimitive' => 'FHIRSampledDataDataTypePrimitive.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive' => 'FHIRStringPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAccountStatusList' => 'FHIRStringPrimitive/FHIRAccountStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRActionListList' => 'FHIRStringPrimitive/FHIRActionListList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAddressTypeList' => 'FHIRStringPrimitive/FHIRAddressTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAddressUseList' => 'FHIRStringPrimitive/FHIRAddressUseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAdministrativeGenderList' => 'FHIRStringPrimitive/FHIRAdministrativeGenderList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAggregationModeList' => 'FHIRStringPrimitive/FHIRAggregationModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCategoryList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceCategoryList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCertaintyList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceCertaintyList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCriticalityList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceCriticalityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceSeverityList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceSeverityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceStatusList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceTypeList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAnswerFormatList' => 'FHIRStringPrimitive/FHIRAnswerFormatList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAppointmentStatusList' => 'FHIRStringPrimitive/FHIRAppointmentStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAssertionDirectionTypeList' => 'FHIRStringPrimitive/FHIRAssertionDirectionTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAssertionOperatorTypeList' => 'FHIRStringPrimitive/FHIRAssertionOperatorTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAssertionResponseTypesList' => 'FHIRStringPrimitive/FHIRAssertionResponseTypesList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAuditEventActionList' => 'FHIRStringPrimitive/FHIRAuditEventActionList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAuditEventOutcomeList' => 'FHIRStringPrimitive/FHIRAuditEventOutcomeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRAuditEventParticipantNetworkTypeList' => 'FHIRStringPrimitive/FHIRAuditEventParticipantNetworkTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRBindingStrengthList' => 'FHIRStringPrimitive/FHIRBindingStrengthList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRBundleTypeList' => 'FHIRStringPrimitive/FHIRBundleTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCarePlanActivityStatusList' => 'FHIRStringPrimitive/FHIRCarePlanActivityStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCarePlanRelationshipList' => 'FHIRStringPrimitive/FHIRCarePlanRelationshipList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCarePlanStatusList' => 'FHIRStringPrimitive/FHIRCarePlanStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRClaimTypeList' => 'FHIRStringPrimitive/FHIRClaimTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRClinicalImpressionStatusList' => 'FHIRStringPrimitive/FHIRClinicalImpressionStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCommunicationRequestStatusList' => 'FHIRStringPrimitive/FHIRCommunicationRequestStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCommunicationStatusList' => 'FHIRStringPrimitive/FHIRCommunicationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCompositionAttestationModeList' => 'FHIRStringPrimitive/FHIRCompositionAttestationModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRCompositionStatusList' => 'FHIRStringPrimitive/FHIRCompositionStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConceptMapEquivalenceList' => 'FHIRStringPrimitive/FHIRConceptMapEquivalenceList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConditionalDeleteStatusList' => 'FHIRStringPrimitive/FHIRConditionalDeleteStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConditionVerificationStatusList' => 'FHIRStringPrimitive/FHIRConditionVerificationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConformanceEventModeList' => 'FHIRStringPrimitive/FHIRConformanceEventModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConformanceResourceStatusList' => 'FHIRStringPrimitive/FHIRConformanceResourceStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConformanceStatementKindList' => 'FHIRStringPrimitive/FHIRConformanceStatementKindList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRConstraintSeverityList' => 'FHIRStringPrimitive/FHIRConstraintSeverityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRContactPointSystemList' => 'FHIRStringPrimitive/FHIRContactPointSystemList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRContactPointUseList' => 'FHIRStringPrimitive/FHIRContactPointUseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRContentTypeList' => 'FHIRStringPrimitive/FHIRContentTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDataElementStringencyList' => 'FHIRStringPrimitive/FHIRDataElementStringencyList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDaysOfWeekList' => 'FHIRStringPrimitive/FHIRDaysOfWeekList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDetectedIssueSeverityList' => 'FHIRStringPrimitive/FHIRDetectedIssueSeverityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCalibrationStateList' => 'FHIRStringPrimitive/FHIRDeviceMetricCalibrationStateList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCalibrationTypeList' => 'FHIRStringPrimitive/FHIRDeviceMetricCalibrationTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCategoryList' => 'FHIRStringPrimitive/FHIRDeviceMetricCategoryList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricColorList' => 'FHIRStringPrimitive/FHIRDeviceMetricColorList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricOperationalStatusList' => 'FHIRStringPrimitive/FHIRDeviceMetricOperationalStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceStatusList' => 'FHIRStringPrimitive/FHIRDeviceStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceUseRequestPriorityList' => 'FHIRStringPrimitive/FHIRDeviceUseRequestPriorityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDeviceUseRequestStatusList' => 'FHIRStringPrimitive/FHIRDeviceUseRequestStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList' => 'FHIRStringPrimitive/FHIRDiagnosticOrderPriorityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList' => 'FHIRStringPrimitive/FHIRDiagnosticOrderStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDiagnosticReportStatusList' => 'FHIRStringPrimitive/FHIRDiagnosticReportStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDigitalMediaTypeList' => 'FHIRStringPrimitive/FHIRDigitalMediaTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDocumentModeList' => 'FHIRStringPrimitive/FHIRDocumentModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDocumentReferenceStatusList' => 'FHIRStringPrimitive/FHIRDocumentReferenceStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList' => 'FHIRStringPrimitive/FHIRDocumentRelationshipTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIREncounterClassList' => 'FHIRStringPrimitive/FHIREncounterClassList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIREncounterLocationStatusList' => 'FHIRStringPrimitive/FHIREncounterLocationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIREncounterStateList' => 'FHIRStringPrimitive/FHIREncounterStateList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIREpisodeOfCareStatusList' => 'FHIRStringPrimitive/FHIREpisodeOfCareStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIREventTimingList' => 'FHIRStringPrimitive/FHIREventTimingList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRExtensionContextList' => 'FHIRStringPrimitive/FHIRExtensionContextList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRFamilyHistoryStatusList' => 'FHIRStringPrimitive/FHIRFamilyHistoryStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRFilterOperatorList' => 'FHIRStringPrimitive/FHIRFilterOperatorList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRFlagStatusList' => 'FHIRStringPrimitive/FHIRFlagStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRGoalStatusList' => 'FHIRStringPrimitive/FHIRGoalStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRGroupTypeList' => 'FHIRStringPrimitive/FHIRGroupTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRGuideDependencyTypeList' => 'FHIRStringPrimitive/FHIRGuideDependencyTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRGuidePageKindList' => 'FHIRStringPrimitive/FHIRGuidePageKindList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRGuideResourcePurposeList' => 'FHIRStringPrimitive/FHIRGuideResourcePurposeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRHTTPVerbList' => 'FHIRStringPrimitive/FHIRHTTPVerbList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRIdentifierUseList' => 'FHIRStringPrimitive/FHIRIdentifierUseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRIdentityAssuranceLevelList' => 'FHIRStringPrimitive/FHIRIdentityAssuranceLevelList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRInstanceAvailabilityList' => 'FHIRStringPrimitive/FHIRInstanceAvailabilityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRIssueSeverityList' => 'FHIRStringPrimitive/FHIRIssueSeverityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRIssueTypeList' => 'FHIRStringPrimitive/FHIRIssueTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRLinkTypeList' => 'FHIRStringPrimitive/FHIRLinkTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRListModeList' => 'FHIRStringPrimitive/FHIRListModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRListStatusList' => 'FHIRStringPrimitive/FHIRListStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRLocationModeList' => 'FHIRStringPrimitive/FHIRLocationModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRLocationStatusList' => 'FHIRStringPrimitive/FHIRLocationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRMeasmnt_PrincipleList' => 'FHIRStringPrimitive/FHIRMeasmnt_PrincipleList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList' => 'FHIRStringPrimitive/FHIRMedicationAdministrationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRMedicationDispenseStatusList' => 'FHIRStringPrimitive/FHIRMedicationDispenseStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRMedicationOrderStatusList' => 'FHIRStringPrimitive/FHIRMedicationOrderStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRMedicationStatementStatusList' => 'FHIRStringPrimitive/FHIRMedicationStatementStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList' => 'FHIRStringPrimitive/FHIRMessageSignificanceCategoryList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRNameUseList' => 'FHIRStringPrimitive/FHIRNameUseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRNamingSystemIdentifierTypeList' => 'FHIRStringPrimitive/FHIRNamingSystemIdentifierTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRNamingSystemTypeList' => 'FHIRStringPrimitive/FHIRNamingSystemTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRNarrativeStatusList' => 'FHIRStringPrimitive/FHIRNarrativeStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRNoteTypeList' => 'FHIRStringPrimitive/FHIRNoteTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRNutritionOrderStatusList' => 'FHIRStringPrimitive/FHIRNutritionOrderStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRObservationRelationshipTypeList' => 'FHIRStringPrimitive/FHIRObservationRelationshipTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRObservationStatusList' => 'FHIRStringPrimitive/FHIRObservationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIROperationKindList' => 'FHIRStringPrimitive/FHIROperationKindList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIROperationParameterUseList' => 'FHIRStringPrimitive/FHIROperationParameterUseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIROrderStatusList' => 'FHIRStringPrimitive/FHIROrderStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRParticipantRequiredList' => 'FHIRStringPrimitive/FHIRParticipantRequiredList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRParticipantStatusList' => 'FHIRStringPrimitive/FHIRParticipantStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRParticipationStatusList' => 'FHIRStringPrimitive/FHIRParticipationStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRProcedureRequestPriorityList' => 'FHIRStringPrimitive/FHIRProcedureRequestPriorityList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRProcedureRequestStatusList' => 'FHIRStringPrimitive/FHIRProcedureRequestStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRProcedureStatusList' => 'FHIRStringPrimitive/FHIRProcedureStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRPropertyRepresentationList' => 'FHIRStringPrimitive/FHIRPropertyRepresentationList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRProvenanceEntityRoleList' => 'FHIRStringPrimitive/FHIRProvenanceEntityRoleList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRQuantityComparatorList' => 'FHIRStringPrimitive/FHIRQuantityComparatorList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRQuestionnaireResponseStatusList' => 'FHIRStringPrimitive/FHIRQuestionnaireResponseStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRQuestionnaireStatusList' => 'FHIRStringPrimitive/FHIRQuestionnaireStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRReferralStatusList' => 'FHIRStringPrimitive/FHIRReferralStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRRemittanceOutcomeList' => 'FHIRStringPrimitive/FHIRRemittanceOutcomeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRResourceVersionPolicyList' => 'FHIRStringPrimitive/FHIRResourceVersionPolicyList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRResponseTypeList' => 'FHIRStringPrimitive/FHIRResponseTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRRestfulConformanceModeList' => 'FHIRStringPrimitive/FHIRRestfulConformanceModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSearchEntryModeList' => 'FHIRStringPrimitive/FHIRSearchEntryModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSearchModifierCodeList' => 'FHIRStringPrimitive/FHIRSearchModifierCodeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSearchParamTypeList' => 'FHIRStringPrimitive/FHIRSearchParamTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSlicingRulesList' => 'FHIRStringPrimitive/FHIRSlicingRulesList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSlotStatusList' => 'FHIRStringPrimitive/FHIRSlotStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSpecimenStatusList' => 'FHIRStringPrimitive/FHIRSpecimenStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRStructureDefinitionKindList' => 'FHIRStringPrimitive/FHIRStructureDefinitionKindList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSubscriptionChannelTypeList' => 'FHIRStringPrimitive/FHIRSubscriptionChannelTypeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSubscriptionStatusList' => 'FHIRStringPrimitive/FHIRSubscriptionStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSupplyDeliveryStatusList' => 'FHIRStringPrimitive/FHIRSupplyDeliveryStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSupplyRequestStatusList' => 'FHIRStringPrimitive/FHIRSupplyRequestStatusList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRSystemRestfulInteractionList' => 'FHIRStringPrimitive/FHIRSystemRestfulInteractionList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRTransactionModeList' => 'FHIRStringPrimitive/FHIRTransactionModeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRTypeRestfulInteractionList' => 'FHIRStringPrimitive/FHIRTypeRestfulInteractionList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRUnitsOfTimeList' => 'FHIRStringPrimitive/FHIRUnitsOfTimeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRUnknownContentCodeList' => 'FHIRStringPrimitive/FHIRUnknownContentCodeList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRUseList' => 'FHIRStringPrimitive/FHIRUseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRVisionBaseList' => 'FHIRStringPrimitive/FHIRVisionBaseList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRVisionEyesList' => 'FHIRStringPrimitive/FHIRVisionEyesList.php',
        'HL7\FHIR\DSTU2\FHIRStringPrimitive\FHIRXPathUsageTypeList' => 'FHIRStringPrimitive/FHIRXPathUsageTypeList.php',
        'HL7\FHIR\DSTU2\FHIRTimePrimitive' => 'FHIRTimePrimitive.php',
        'HL7\FHIR\DSTU2\FHIRUnsignedIntPrimitive' => 'FHIRUnsignedIntPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRUriPrimitive' => 'FHIRUriPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRUuidPrimitive' => 'FHIRUuidPrimitive.php',
        'HL7\FHIR\DSTU2\FHIRXhtml' => 'FHIRXhtml.php',
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
