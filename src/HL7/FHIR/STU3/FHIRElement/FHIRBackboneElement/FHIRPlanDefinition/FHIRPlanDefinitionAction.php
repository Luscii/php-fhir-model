<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 08:28+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRDateTimePrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRActionCardinalityBehavior;
use HL7\FHIR\STU3\FHIRElement\FHIRActionGroupingBehavior;
use HL7\FHIR\STU3\FHIRElement\FHIRActionPrecheckBehavior;
use HL7\FHIR\STU3\FHIRElement\FHIRActionRequiredBehavior;
use HL7\FHIR\STU3\FHIRElement\FHIRActionSelectionBehavior;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRCoding;
use HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRId;
use HL7\FHIR\STU3\FHIRElement\FHIRPeriod;
use HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use HL7\FHIR\STU3\FHIRElement\FHIRRange;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRElement\FHIRTiming;
use HL7\FHIR\STU3\FHIRElement\FHIRTriggerDefinition;
use HL7\FHIR\STU3\FHIRIdPrimitive;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConfigKeyEnum;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlLocationEnum;
use HL7\FHIR\STU3\PHPFHIRXmlWriter;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical artifacts such as clinical decision
 * support rules, order sets and protocols.
 *
 * Class FHIRPlanDefinitionAction
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION;

    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    const FIELD_CODE = 'code';
    const FIELD_REASON = 'reason';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_GOAL_ID = 'goalId';
    const FIELD_GOAL_ID_EXT = '_goalId';
    const FIELD_TRIGGER_DEFINITION = 'triggerDefinition';
    const FIELD_CONDITION = 'condition';
    const FIELD_INPUT = 'input';
    const FIELD_OUTPUT = 'output';
    const FIELD_RELATED_ACTION = 'relatedAction';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_DURATION = 'timingDuration';
    const FIELD_TIMING_RANGE = 'timingRange';
    const FIELD_TIMING_TIMING = 'timingTiming';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_TYPE = 'type';
    const FIELD_GROUPING_BEHAVIOR = 'groupingBehavior';
    const FIELD_GROUPING_BEHAVIOR_EXT = '_groupingBehavior';
    const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    const FIELD_SELECTION_BEHAVIOR_EXT = '_selectionBehavior';
    const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    const FIELD_REQUIRED_BEHAVIOR_EXT = '_requiredBehavior';
    const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    const FIELD_PRECHECK_BEHAVIOR_EXT = '_precheckBehavior';
    const FIELD_CARDINALITY_BEHAVIOR = 'cardinalityBehavior';
    const FIELD_CARDINALITY_BEHAVIOR_EXT = '_cardinalityBehavior';
    const FIELD_DEFINITION = 'definition';
    const FIELD_TRANSFORM = 'transform';
    const FIELD_DYNAMIC_VALUE = 'dynamicValue';
    const FIELD_ACTION = 'action';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible label for the action.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $textEquivalent = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $code = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reason = [];
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    protected null|array $documentation = [];
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRId[]
     */
    protected null|array $goalId = [];
    /**
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRTriggerDefinition[]
     */
    protected null|array $triggerDefinition = [];
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    protected null|array $condition = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement[]
     */
    protected null|array $input = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement[]
     */
    protected null|array $output = [];
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    protected null|array $relatedAction = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $timingDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $timingPeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $timingDuration = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $timingRange = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRTiming
     */
    protected null|FHIRTiming $timingTiming = null;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    protected null|array $participant = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $type = null;
    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRActionGroupingBehavior
     */
    protected null|FHIRActionGroupingBehavior $groupingBehavior = null;
    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRActionSelectionBehavior
     */
    protected null|FHIRActionSelectionBehavior $selectionBehavior = null;
    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRActionRequiredBehavior
     */
    protected null|FHIRActionRequiredBehavior $requiredBehavior = null;
    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRActionPrecheckBehavior
     */
    protected null|FHIRActionPrecheckBehavior $precheckBehavior = null;
    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRActionCardinalityBehavior
     */
    protected null|FHIRActionCardinalityBehavior $cardinalityBehavior = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $definition = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $transform = null;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    protected null|array $dynamicValue = [];
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    protected null|array $action = [];

    /**
     * Validation map for fields in type PlanDefinition.Action
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRPlanDefinitionAction Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LABEL, $data) || array_key_exists(self::FIELD_LABEL_EXT, $data)) {
            $value = $data[self::FIELD_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $data[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            } else {
                $this->setLabel(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TITLE, $data) || array_key_exists(self::FIELD_TITLE_EXT, $data)) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            } else {
                $this->setTitle(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TEXT_EQUIVALENT, $data) || array_key_exists(self::FIELD_TEXT_EQUIVALENT_EXT, $data)) {
            $value = $data[self::FIELD_TEXT_EQUIVALENT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EQUIVALENT_EXT]) && is_array($data[self::FIELD_TEXT_EQUIVALENT_EXT])) ? $data[self::FIELD_TEXT_EQUIVALENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextEquivalent($value);
                } else if (is_array($value)) {
                    $this->setTextEquivalent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextEquivalent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTextEquivalent(new FHIRString($ext));
            } else {
                $this->setTextEquivalent(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_REASON, $data)) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENTATION, $data)) {
            if (is_array($data[self::FIELD_DOCUMENTATION])) {
                foreach($data[self::FIELD_DOCUMENTATION] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addDocumentation($v);
                    } else {
                        $this->addDocumentation(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($data[self::FIELD_DOCUMENTATION] instanceof FHIRRelatedArtifact) {
                $this->addDocumentation($data[self::FIELD_DOCUMENTATION]);
            } else {
                $this->addDocumentation(new FHIRRelatedArtifact($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (array_key_exists(self::FIELD_GOAL_ID, $data) || array_key_exists(self::FIELD_GOAL_ID_EXT, $data)) {
            $value = $data[self::FIELD_GOAL_ID] ?? null;
            $ext = (isset($data[self::FIELD_GOAL_ID_EXT]) && is_array($data[self::FIELD_GOAL_ID_EXT])) ? $data[self::FIELD_GOAL_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->addGoalId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRId) {
                            $this->addGoalId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addGoalId(new FHIRId(array_merge($v, $iext)));
                            } else {
                                $this->addGoalId(new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addGoalId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->addGoalId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addGoalId(new FHIRId($iext));
                }
            } else {
                $this->addGoalId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_TRIGGER_DEFINITION, $data)) {
            if (is_array($data[self::FIELD_TRIGGER_DEFINITION])) {
                foreach($data[self::FIELD_TRIGGER_DEFINITION] as $v) {
                    if ($v instanceof FHIRTriggerDefinition) {
                        $this->addTriggerDefinition($v);
                    } else {
                        $this->addTriggerDefinition(new FHIRTriggerDefinition($v));
                    }
                }
            } elseif ($data[self::FIELD_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->addTriggerDefinition($data[self::FIELD_TRIGGER_DEFINITION]);
            } else {
                $this->addTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_TRIGGER_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data)) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionCondition) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRPlanDefinitionCondition($v));
                    }
                }
            } elseif ($data[self::FIELD_CONDITION] instanceof FHIRPlanDefinitionCondition) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRPlanDefinitionCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (array_key_exists(self::FIELD_INPUT, $data)) {
            if (is_array($data[self::FIELD_INPUT])) {
                foreach($data[self::FIELD_INPUT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addInput($v);
                    } else {
                        $this->addInput(new FHIRDataRequirement($v));
                    }
                }
            } elseif ($data[self::FIELD_INPUT] instanceof FHIRDataRequirement) {
                $this->addInput($data[self::FIELD_INPUT]);
            } else {
                $this->addInput(new FHIRDataRequirement($data[self::FIELD_INPUT]));
            }
        }
        if (array_key_exists(self::FIELD_OUTPUT, $data)) {
            if (is_array($data[self::FIELD_OUTPUT])) {
                foreach($data[self::FIELD_OUTPUT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addOutput($v);
                    } else {
                        $this->addOutput(new FHIRDataRequirement($v));
                    }
                }
            } elseif ($data[self::FIELD_OUTPUT] instanceof FHIRDataRequirement) {
                $this->addOutput($data[self::FIELD_OUTPUT]);
            } else {
                $this->addOutput(new FHIRDataRequirement($data[self::FIELD_OUTPUT]));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_ACTION, $data)) {
            if (is_array($data[self::FIELD_RELATED_ACTION])) {
                foreach($data[self::FIELD_RELATED_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionRelatedAction) {
                        $this->addRelatedAction($v);
                    } else {
                        $this->addRelatedAction(new FHIRPlanDefinitionRelatedAction($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_ACTION] instanceof FHIRPlanDefinitionRelatedAction) {
                $this->addRelatedAction($data[self::FIELD_RELATED_ACTION]);
            } else {
                $this->addRelatedAction(new FHIRPlanDefinitionRelatedAction($data[self::FIELD_RELATED_ACTION]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_DATE_TIME, $data) || array_key_exists(self::FIELD_TIMING_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_TIMING_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT])) ? $data[self::FIELD_TIMING_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTimingDateTime($value);
                } else if (is_array($value)) {
                    $this->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTimingDateTime(new FHIRDateTime($ext));
            } else {
                $this->setTimingDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_PERIOD, $data)) {
            if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
            } else {
                $this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_DURATION, $data)) {
            if ($data[self::FIELD_TIMING_DURATION] instanceof FHIRDuration) {
                $this->setTimingDuration($data[self::FIELD_TIMING_DURATION]);
            } else {
                $this->setTimingDuration(new FHIRDuration($data[self::FIELD_TIMING_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_RANGE, $data)) {
            if ($data[self::FIELD_TIMING_RANGE] instanceof FHIRRange) {
                $this->setTimingRange($data[self::FIELD_TIMING_RANGE]);
            } else {
                $this->setTimingRange(new FHIRRange($data[self::FIELD_TIMING_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_TIMING, $data)) {
            if ($data[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
                $this->setTimingTiming($data[self::FIELD_TIMING_TIMING]);
            } else {
                $this->setTimingTiming(new FHIRTiming($data[self::FIELD_TIMING_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT, $data)) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRPlanDefinitionParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRPlanDefinitionParticipant($v));
                    }
                }
            } elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRPlanDefinitionParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRPlanDefinitionParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_GROUPING_BEHAVIOR, $data) || array_key_exists(self::FIELD_GROUPING_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_GROUPING_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_GROUPING_BEHAVIOR_EXT]) && is_array($data[self::FIELD_GROUPING_BEHAVIOR_EXT])) ? $data[self::FIELD_GROUPING_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionGroupingBehavior) {
                    $this->setGroupingBehavior($value);
                } else if (is_array($value)) {
                    $this->setGroupingBehavior(new FHIRActionGroupingBehavior(array_merge($ext, $value)));
                } else {
                    $this->setGroupingBehavior(new FHIRActionGroupingBehavior([FHIRActionGroupingBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior($ext));
            } else {
                $this->setGroupingBehavior(new FHIRActionGroupingBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_SELECTION_BEHAVIOR, $data) || array_key_exists(self::FIELD_SELECTION_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_SELECTION_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_SELECTION_BEHAVIOR_EXT]) && is_array($data[self::FIELD_SELECTION_BEHAVIOR_EXT])) ? $data[self::FIELD_SELECTION_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionSelectionBehavior) {
                    $this->setSelectionBehavior($value);
                } else if (is_array($value)) {
                    $this->setSelectionBehavior(new FHIRActionSelectionBehavior(array_merge($ext, $value)));
                } else {
                    $this->setSelectionBehavior(new FHIRActionSelectionBehavior([FHIRActionSelectionBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior($ext));
            } else {
                $this->setSelectionBehavior(new FHIRActionSelectionBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUIRED_BEHAVIOR, $data) || array_key_exists(self::FIELD_REQUIRED_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_REQUIRED_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRED_BEHAVIOR_EXT]) && is_array($data[self::FIELD_REQUIRED_BEHAVIOR_EXT])) ? $data[self::FIELD_REQUIRED_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionRequiredBehavior) {
                    $this->setRequiredBehavior($value);
                } else if (is_array($value)) {
                    $this->setRequiredBehavior(new FHIRActionRequiredBehavior(array_merge($ext, $value)));
                } else {
                    $this->setRequiredBehavior(new FHIRActionRequiredBehavior([FHIRActionRequiredBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior($ext));
            } else {
                $this->setRequiredBehavior(new FHIRActionRequiredBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_PRECHECK_BEHAVIOR, $data) || array_key_exists(self::FIELD_PRECHECK_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_PRECHECK_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_PRECHECK_BEHAVIOR_EXT]) && is_array($data[self::FIELD_PRECHECK_BEHAVIOR_EXT])) ? $data[self::FIELD_PRECHECK_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionPrecheckBehavior) {
                    $this->setPrecheckBehavior($value);
                } else if (is_array($value)) {
                    $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior(array_merge($ext, $value)));
                } else {
                    $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior([FHIRActionPrecheckBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior($ext));
            } else {
                $this->setPrecheckBehavior(new FHIRActionPrecheckBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_CARDINALITY_BEHAVIOR, $data) || array_key_exists(self::FIELD_CARDINALITY_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_CARDINALITY_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT]) && is_array($data[self::FIELD_CARDINALITY_BEHAVIOR_EXT])) ? $data[self::FIELD_CARDINALITY_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionCardinalityBehavior) {
                    $this->setCardinalityBehavior($value);
                } else if (is_array($value)) {
                    $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior(array_merge($ext, $value)));
                } else {
                    $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior([FHIRActionCardinalityBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior($ext));
            } else {
                $this->setCardinalityBehavior(new FHIRActionCardinalityBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION, $data)) {
            if ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->setDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_TRANSFORM, $data)) {
            if ($data[self::FIELD_TRANSFORM] instanceof FHIRReference) {
                $this->setTransform($data[self::FIELD_TRANSFORM]);
            } else {
                $this->setTransform(new FHIRReference($data[self::FIELD_TRANSFORM]));
            }
        }
        if (array_key_exists(self::FIELD_DYNAMIC_VALUE, $data)) {
            if (is_array($data[self::FIELD_DYNAMIC_VALUE])) {
                foreach($data[self::FIELD_DYNAMIC_VALUE] as $v) {
                    if ($v instanceof FHIRPlanDefinitionDynamicValue) {
                        $this->addDynamicValue($v);
                    } else {
                        $this->addDynamicValue(new FHIRPlanDefinitionDynamicValue($v));
                    }
                }
            } elseif ($data[self::FIELD_DYNAMIC_VALUE] instanceof FHIRPlanDefinitionDynamicValue) {
                $this->addDynamicValue($data[self::FIELD_DYNAMIC_VALUE]);
            } else {
                $this->addDynamicValue(new FHIRPlanDefinitionDynamicValue($data[self::FIELD_DYNAMIC_VALUE]));
            }
        }
        if (array_key_exists(self::FIELD_ACTION, $data)) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRPlanDefinitionAction) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRPlanDefinitionAction($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTION] instanceof FHIRPlanDefinitionAction) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRPlanDefinitionAction($data[self::FIELD_ACTION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible label for the action.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible label for the action.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $label
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LABEL])) {
            $this->_primitiveXmlLocations[self::FIELD_LABEL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LABEL][0] = $xmlLocation;
        $this->label = $label;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The title of the action displayed to a user.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $title
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TITLE])) {
            $this->_primitiveXmlLocations[self::FIELD_TITLE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TITLE][0] = $xmlLocation;
        $this->title = $title;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description of the action used to provide a summary to display to the
     * user.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $description
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getTextEquivalent(): null|FHIRString
    {
        return $this->textEquivalent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that may not be capable of interpreting it dynamically.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $textEquivalent
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTextEquivalent(null|string|FHIRStringPrimitive|FHIRString $textEquivalent = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $textEquivalent && !($textEquivalent instanceof FHIRString)) {
            $textEquivalent = new FHIRString($textEquivalent);
        }
        $this->_trackValueSet($this->textEquivalent, $textEquivalent);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TEXT_EQUIVALENT])) {
            $this->_primitiveXmlLocations[self::FIELD_TEXT_EQUIVALENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TEXT_EQUIVALENT][0] = $xmlLocation;
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides meaning for the action or action group. For example, a
     * section may have a LOINC code for a the section of a documentation template.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function addCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason(): null|array
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function addReason(null|FHIRCodeableConcept $reason = null): self
    {
        if (null === $reason) {
            $reason = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation(): null|array
    {
        return $this->documentation;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact $documentation
     * @return static
     */
    public function addDocumentation(null|FHIRRelatedArtifact $documentation = null): self
    {
        if (null === $documentation) {
            $documentation = new FHIRRelatedArtifact();
        }
        $this->_trackValueAdded();
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRId[]
     */
    public function getGoalId(): null|array
    {
        return $this->goalId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRIdPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRId $goalId
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addGoalId(null|string|FHIRIdPrimitive|FHIRId $goalId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $goalId && !($goalId instanceof FHIRId)) {
            $goalId = new FHIRId($goalId);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_GOAL_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_GOAL_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_GOAL_ID][] = $xmlLocation;
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRId[] $goalId
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGoalId(array $goalId = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_GOAL_ID]);
        if ([] !== $this->goalId) {
            $this->_trackValuesRemoved(count($this->goalId));
            $this->goalId = [];
        }
        if ([] === $goalId) {
            return $this;
        }
        foreach($goalId as $v) {
            if ($v instanceof FHIRId) {
                $this->addGoalId($v, $xmlLocation);
            } else {
                $this->addGoalId(new FHIRId($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTriggerDefinition(): null|array
    {
        return $this->triggerDefinition;
    }

    /**
     * A description of a triggering event.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRTriggerDefinition $triggerDefinition
     * @return static
     */
    public function addTriggerDefinition(null|FHIRTriggerDefinition $triggerDefinition = null): self
    {
        if (null === $triggerDefinition) {
            $triggerDefinition = new FHIRTriggerDefinition();
        }
        $this->_trackValueAdded();
        $this->triggerDefinition[] = $triggerDefinition;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition(): null|array
    {
        return $this->condition;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * An expression that describes applicability criteria, or start/stop conditions
     * for the action.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
     * @return static
     */
    public function addCondition(null|FHIRPlanDefinitionCondition $condition = null): self
    {
        if (null === $condition) {
            $condition = new FHIRPlanDefinitionCondition();
        }
        $this->_trackValueAdded();
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput(): null|array
    {
        return $this->input;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines input data requirements for the action.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement $input
     * @return static
     */
    public function addInput(null|FHIRDataRequirement $input = null): self
    {
        if (null === $input) {
            $input = new FHIRDataRequirement();
        }
        $this->_trackValueAdded();
        $this->input[] = $input;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput(): null|array
    {
        return $this->output;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the outputs of the action, if any.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDataRequirement $output
     * @return static
     */
    public function addOutput(null|FHIRDataRequirement $output = null): self
    {
        if (null === $output) {
            $output = new FHIRDataRequirement();
        }
        $this->_trackValueAdded();
        $this->output[] = $output;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction(): null|array
    {
        return $this->relatedAction;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
     * @return static
     */
    public function addRelatedAction(null|FHIRPlanDefinitionRelatedAction $relatedAction = null): self
    {
        if (null === $relatedAction) {
            $relatedAction = new FHIRPlanDefinitionRelatedAction();
        }
        $this->_trackValueAdded();
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime(): null|FHIRDateTime
    {
        return $this->timingDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $timingDateTime
     * @param \HL7\FHIR\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $timingDateTime && !($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        $this->_trackValueSet($this->timingDateTime, $timingDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME][0] = $xmlLocation;
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod(): null|FHIRPeriod
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(null|FHIRPeriod $timingPeriod = null): self
    {
        if (null === $timingPeriod) {
            $timingPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->timingPeriod, $timingPeriod);
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration(): null|FHIRDuration
    {
        return $this->timingDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return static
     */
    public function setTimingDuration(null|FHIRDuration $timingDuration = null): self
    {
        if (null === $timingDuration) {
            $timingDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->timingDuration, $timingDuration);
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    public function getTimingRange(): null|FHIRRange
    {
        return $this->timingRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRange $timingRange
     * @return static
     */
    public function setTimingRange(null|FHIRRange $timingRange = null): self
    {
        if (null === $timingRange) {
            $timingRange = new FHIRRange();
        }
        $this->_trackValueSet($this->timingRange, $timingRange);
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRTiming
     */
    public function getTimingTiming(): null|FHIRTiming
    {
        return $this->timingTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRTiming $timingTiming
     * @return static
     */
    public function setTimingTiming(null|FHIRTiming $timingTiming = null): self
    {
        if (null === $timingTiming) {
            $timingTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->timingTiming, $timingTiming);
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant(): null|array
    {
        return $this->participant;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
     * @return static
     */
    public function addParticipant(null|FHIRPlanDefinitionParticipant $participant = null): self
    {
        if (null === $participant) {
            $participant = new FHIRPlanDefinitionParticipant();
        }
        $this->_trackValueAdded();
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCoding();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior(): null|FHIRActionGroupingBehavior
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines organization behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return static
     */
    public function setGroupingBehavior(null|FHIRActionGroupingBehavior $groupingBehavior = null): self
    {
        if (null === $groupingBehavior) {
            $groupingBehavior = new FHIRActionGroupingBehavior();
        }
        $this->_trackValueSet($this->groupingBehavior, $groupingBehavior);
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior(): null|FHIRActionSelectionBehavior
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines selection behavior of a group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return static
     */
    public function setSelectionBehavior(null|FHIRActionSelectionBehavior $selectionBehavior = null): self
    {
        if (null === $selectionBehavior) {
            $selectionBehavior = new FHIRActionSelectionBehavior();
        }
        $this->_trackValueSet($this->selectionBehavior, $selectionBehavior);
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior(): null|FHIRActionRequiredBehavior
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines requiredness behavior for selecting an action or an action group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the requiredness behavior for the action.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return static
     */
    public function setRequiredBehavior(null|FHIRActionRequiredBehavior $requiredBehavior = null): self
    {
        if (null === $requiredBehavior) {
            $requiredBehavior = new FHIRActionRequiredBehavior();
        }
        $this->_trackValueSet($this->requiredBehavior, $requiredBehavior);
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior(): null|FHIRActionPrecheckBehavior
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines selection frequency behavior for an action or group
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return static
     */
    public function setPrecheckBehavior(null|FHIRActionPrecheckBehavior $precheckBehavior = null): self
    {
        if (null === $precheckBehavior) {
            $precheckBehavior = new FHIRActionPrecheckBehavior();
        }
        $this->_trackValueSet($this->precheckBehavior, $precheckBehavior);
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior(): null|FHIRActionCardinalityBehavior
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines behavior for an action or a group for how many times that item may be
     * repeated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return static
     */
    public function setCardinalityBehavior(null|FHIRActionCardinalityBehavior $cardinalityBehavior = null): self
    {
        if (null === $cardinalityBehavior) {
            $cardinalityBehavior = new FHIRActionCardinalityBehavior();
        }
        $this->_trackValueSet($this->cardinalityBehavior, $cardinalityBehavior);
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getDefinition(): null|FHIRReference
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, or a PlanDefinition that describes a series of actions to be taken.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function setDefinition(null|FHIRReference $definition = null): self
    {
        if (null === $definition) {
            $definition = new FHIRReference();
        }
        $this->_trackValueSet($this->definition, $definition);
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getTransform(): null|FHIRReference
    {
        return $this->transform;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $transform
     * @return static
     */
    public function setTransform(null|FHIRReference $transform = null): self
    {
        if (null === $transform) {
            $transform = new FHIRReference();
        }
        $this->_trackValueSet($this->transform, $transform);
        $this->transform = $transform;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue(): null|array
    {
        return $this->dynamicValue;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
     * @return static
     */
    public function addDynamicValue(null|FHIRPlanDefinitionDynamicValue $dynamicValue = null): self
    {
        if (null === $dynamicValue) {
            $dynamicValue = new FHIRPlanDefinitionDynamicValue();
        }
        $this->_trackValueAdded();
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction(): null|array
    {
        return $this->action;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return static
     */
    public function addAction(null|FHIRPlanDefinitionAction $action = null): self
    {
        if (null === $action) {
            $action = new FHIRPlanDefinitionAction();
        }
        $this->_trackValueAdded();
        $this->action[] = $action;
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
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_EQUIVALENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getDocumentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOCUMENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGoalId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GOAL_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTriggerDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TRIGGER_DEFINITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInput())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INPUT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOutput())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTPUT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_TIMING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUPING_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SELECTION_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRED_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRECHECK_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARDINALITY_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTransform())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TRANSFORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDynamicValue())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DYNAMIC_VALUE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT_EQUIVALENT])) {
            $v = $this->getTextEquivalent();
            foreach($validationRules[self::FIELD_TEXT_EQUIVALENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TEXT_EQUIVALENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT_EQUIVALENT])) {
                        $errs[self::FIELD_TEXT_EQUIVALENT] = [];
                    }
                    $errs[self::FIELD_TEXT_EQUIVALENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GOAL_ID])) {
            $v = $this->getGoalId();
            foreach($validationRules[self::FIELD_GOAL_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_GOAL_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GOAL_ID])) {
                        $errs[self::FIELD_GOAL_ID] = [];
                    }
                    $errs[self::FIELD_GOAL_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRIGGER_DEFINITION])) {
            $v = $this->getTriggerDefinition();
            foreach($validationRules[self::FIELD_TRIGGER_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TRIGGER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRIGGER_DEFINITION])) {
                        $errs[self::FIELD_TRIGGER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_TRIGGER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INPUT])) {
            $v = $this->getInput();
            foreach($validationRules[self::FIELD_INPUT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_INPUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INPUT])) {
                        $errs[self::FIELD_INPUT] = [];
                    }
                    $errs[self::FIELD_INPUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTPUT])) {
            $v = $this->getOutput();
            foreach($validationRules[self::FIELD_OUTPUT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_OUTPUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTPUT])) {
                        $errs[self::FIELD_OUTPUT] = [];
                    }
                    $errs[self::FIELD_OUTPUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ACTION])) {
            $v = $this->getRelatedAction();
            foreach($validationRules[self::FIELD_RELATED_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_RELATED_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ACTION])) {
                        $errs[self::FIELD_RELATED_ACTION] = [];
                    }
                    $errs[self::FIELD_RELATED_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_DATE_TIME])) {
            $v = $this->getTimingDateTime();
            foreach($validationRules[self::FIELD_TIMING_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TIMING_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_DATE_TIME])) {
                        $errs[self::FIELD_TIMING_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_TIMING_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_PERIOD])) {
            $v = $this->getTimingPeriod();
            foreach($validationRules[self::FIELD_TIMING_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TIMING_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_PERIOD])) {
                        $errs[self::FIELD_TIMING_PERIOD] = [];
                    }
                    $errs[self::FIELD_TIMING_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_DURATION])) {
            $v = $this->getTimingDuration();
            foreach($validationRules[self::FIELD_TIMING_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TIMING_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_DURATION])) {
                        $errs[self::FIELD_TIMING_DURATION] = [];
                    }
                    $errs[self::FIELD_TIMING_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_RANGE])) {
            $v = $this->getTimingRange();
            foreach($validationRules[self::FIELD_TIMING_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TIMING_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_RANGE])) {
                        $errs[self::FIELD_TIMING_RANGE] = [];
                    }
                    $errs[self::FIELD_TIMING_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_TIMING])) {
            $v = $this->getTimingTiming();
            foreach($validationRules[self::FIELD_TIMING_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TIMING_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_TIMING])) {
                        $errs[self::FIELD_TIMING_TIMING] = [];
                    }
                    $errs[self::FIELD_TIMING_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUPING_BEHAVIOR])) {
            $v = $this->getGroupingBehavior();
            foreach($validationRules[self::FIELD_GROUPING_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_GROUPING_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUPING_BEHAVIOR])) {
                        $errs[self::FIELD_GROUPING_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_GROUPING_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SELECTION_BEHAVIOR])) {
            $v = $this->getSelectionBehavior();
            foreach($validationRules[self::FIELD_SELECTION_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_SELECTION_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SELECTION_BEHAVIOR])) {
                        $errs[self::FIELD_SELECTION_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_SELECTION_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRED_BEHAVIOR])) {
            $v = $this->getRequiredBehavior();
            foreach($validationRules[self::FIELD_REQUIRED_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_REQUIRED_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRED_BEHAVIOR])) {
                        $errs[self::FIELD_REQUIRED_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_REQUIRED_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRECHECK_BEHAVIOR])) {
            $v = $this->getPrecheckBehavior();
            foreach($validationRules[self::FIELD_PRECHECK_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_PRECHECK_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRECHECK_BEHAVIOR])) {
                        $errs[self::FIELD_PRECHECK_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_PRECHECK_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARDINALITY_BEHAVIOR])) {
            $v = $this->getCardinalityBehavior();
            foreach($validationRules[self::FIELD_CARDINALITY_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_CARDINALITY_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARDINALITY_BEHAVIOR])) {
                        $errs[self::FIELD_CARDINALITY_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_CARDINALITY_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRANSFORM])) {
            $v = $this->getTransform();
            foreach($validationRules[self::FIELD_TRANSFORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_TRANSFORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRANSFORM])) {
                        $errs[self::FIELD_TRANSFORM] = [];
                    }
                    $errs[self::FIELD_TRANSFORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DYNAMIC_VALUE])) {
            $v = $this->getDynamicValue();
            foreach($validationRules[self::FIELD_DYNAMIC_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_DYNAMIC_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DYNAMIC_VALUE])) {
                        $errs[self::FIELD_DYNAMIC_VALUE] = [];
                    }
                    $errs[self::FIELD_DYNAMIC_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRPlanDefinitionAction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_LABEL === $childName) {
                $type->setLabel(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TITLE === $childName) {
                $type->setTitle(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT_EQUIVALENT === $childName) {
                $type->setTextEquivalent(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE === $childName) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON === $childName) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOCUMENTATION === $childName) {
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GOAL_ID === $childName) {
                $type->addGoalId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TRIGGER_DEFINITION === $childName) {
                $type->addTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->addCondition(FHIRPlanDefinitionCondition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INPUT === $childName) {
                $type->addInput(FHIRDataRequirement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTPUT === $childName) {
                $type->addOutput(FHIRDataRequirement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATED_ACTION === $childName) {
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_DATE_TIME === $childName) {
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TIMING_PERIOD === $childName) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_DURATION === $childName) {
                $type->setTimingDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_RANGE === $childName) {
                $type->setTimingRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_TIMING === $childName) {
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT === $childName) {
                $type->addParticipant(FHIRPlanDefinitionParticipant::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUPING_BEHAVIOR === $childName) {
                $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SELECTION_BEHAVIOR === $childName) {
                $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUIRED_BEHAVIOR === $childName) {
                $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRECHECK_BEHAVIOR === $childName) {
                $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CARDINALITY_BEHAVIOR === $childName) {
                $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION === $childName) {
                $type->setDefinition(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TRANSFORM === $childName) {
                $type->setTransform(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DYNAMIC_VALUE === $childName) {
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTION === $childName) {
                $type->addAction(FHIRPlanDefinitionAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT_EQUIVALENT])) {
            $pt = $type->getTextEquivalent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT_EQUIVALENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTextEquivalent((string)$attributes[self::FIELD_TEXT_EQUIVALENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_GOAL_ID])) {
            $type->addGoalId((string)$attributes[self::FIELD_GOAL_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            $pt = $type->getTimingDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TIMING_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTimingDateTime((string)$attributes[self::FIELD_TIMING_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\HL7\FHIR\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \HL7\FHIR\STU3\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'PlanDefinitionAction', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->writeAttribute(self::FIELD_LABEL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->writeAttribute(self::FIELD_TITLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT_EQUIVALENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTextEquivalent())) {
            $xw->writeAttribute(self::FIELD_TEXT_EQUIVALENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GOAL_ID] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getGoalId())) {
            $xw->writeAttribute(self::FIELD_GOAL_ID, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getGoalId()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_GOAL_ID, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTimingDateTime())) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->startElement(self::FIELD_LABEL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->startElement(self::FIELD_TITLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT_EQUIVALENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTextEquivalent())) {
            $xw->startElement(self::FIELD_TEXT_EQUIVALENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCode() as $v) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReason() as $v) {
            $xw->startElement(self::FIELD_REASON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDocumentation() as $v) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GOAL_ID] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getGoalId())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_GOAL_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getTriggerDefinition() as $v) {
            $xw->startElement(self::FIELD_TRIGGER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCondition() as $v) {
            $xw->startElement(self::FIELD_CONDITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getInput() as $v) {
            $xw->startElement(self::FIELD_INPUT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOutput() as $v) {
            $xw->startElement(self::FIELD_OUTPUT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatedAction() as $v) {
            $xw->startElement(self::FIELD_RELATED_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTimingDateTime())) {
            $xw->startElement(self::FIELD_TIMING_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $xw->startElement(self::FIELD_TIMING_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingRange())) {
            $xw->startElement(self::FIELD_TIMING_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $xw->startElement(self::FIELD_TIMING_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParticipant() as $v) {
            $xw->startElement(self::FIELD_PARTICIPANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            $xw->startElement(self::FIELD_GROUPING_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            $xw->startElement(self::FIELD_SELECTION_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            $xw->startElement(self::FIELD_REQUIRED_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            $xw->startElement(self::FIELD_PRECHECK_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            $xw->startElement(self::FIELD_CARDINALITY_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinition())) {
            $xw->startElement(self::FIELD_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTransform())) {
            $xw->startElement(self::FIELD_TRANSFORM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDynamicValue() as $v) {
            $xw->startElement(self::FIELD_DYNAMIC_VALUE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAction() as $v) {
            $xw->startElement(self::FIELD_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LABEL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTextEquivalent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT_EQUIVALENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EQUIVALENT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            $out->{self::FIELD_REASON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REASON}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDocumentation())) {
            $out->{self::FIELD_DOCUMENTATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DOCUMENTATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getGoalId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRId::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_GOAL_ID} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GOAL_ID_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getTriggerDefinition())) {
            $out->{self::FIELD_TRIGGER_DEFINITION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TRIGGER_DEFINITION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $out->{self::FIELD_CONDITION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONDITION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getInput())) {
            $out->{self::FIELD_INPUT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_INPUT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOutput())) {
            $out->{self::FIELD_OUTPUT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OUTPUT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedAction())) {
            $out->{self::FIELD_RELATED_ACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATED_ACTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIMING_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIMING_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $out->{self::FIELD_TIMING_PERIOD} = $v;
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $out->{self::FIELD_TIMING_DURATION} = $v;
        }
        if (null !== ($v = $this->getTimingRange())) {
            $out->{self::FIELD_TIMING_RANGE} = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $out->{self::FIELD_TIMING_TIMING} = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $out->{self::FIELD_PARTICIPANT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARTICIPANT}[] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getGroupingBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUPING_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionGroupingBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUPING_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSelectionBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SELECTION_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionSelectionBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SELECTION_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequiredBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRED_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionRequiredBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRED_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPrecheckBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRECHECK_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionPrecheckBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRECHECK_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCardinalityBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CARDINALITY_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionCardinalityBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CARDINALITY_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $out->{self::FIELD_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getTransform())) {
            $out->{self::FIELD_TRANSFORM} = $v;
        }
        if ([] !== ($vs = $this->getDynamicValue())) {
            $out->{self::FIELD_DYNAMIC_VALUE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DYNAMIC_VALUE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            $out->{self::FIELD_ACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ACTION}[] = $v;
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