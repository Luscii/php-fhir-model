<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 23rd, 2023 13:30+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2023 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use HL7\FHIR\R4\FHIRElement\FHIRActionRelationshipType;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use HL7\FHIR\R4\FHIRElement\FHIRRange;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;

/**
 * A group of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 *
 * Class FHIRRequestGroupRelatedAction
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup
 */
class FHIRRequestGroupRelatedAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION;
    const FIELD_ACTION_ID = 'actionId';
    const FIELD_ACTION_ID_EXT = '_actionId';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_RELATIONSHIP_EXT = '_relationship';
    const FIELD_OFFSET_DURATION = 'offsetDuration';
    const FIELD_OFFSET_RANGE = 'offsetRange';

    /** @var string */
    private $_xmlns = '';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @var null|\HL7\FHIR\R4\FHIRIdPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRId
     */
    protected ?FHIRId $actionId = null;

    /**
     * Defines the types of relationships between actions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRActionRelationshipType
     */
    protected ?FHIRActionRelationshipType $relationship = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected ?FHIRDuration $offsetDuration = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRRange
     */
    protected ?FHIRRange $offsetRange = null;

    /**
     * Validation map for fields in type RequestGroup.RelatedAction
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRRequestGroupRelatedAction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRequestGroupRelatedAction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION_ID]) || isset($data[self::FIELD_ACTION_ID_EXT])) {
            $value = $data[self::FIELD_ACTION_ID] ?? null;
            $ext = (isset($data[self::FIELD_ACTION_ID_EXT]) && is_array($data[self::FIELD_ACTION_ID_EXT])) ? $data[self::FIELD_ACTION_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setActionId($value);
                } else if (is_array($value)) {
                    $this->setActionId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setActionId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setActionId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP]) || isset($data[self::FIELD_RELATIONSHIP_EXT])) {
            $value = $data[self::FIELD_RELATIONSHIP] ?? null;
            $ext = (isset($data[self::FIELD_RELATIONSHIP_EXT]) && is_array($data[self::FIELD_RELATIONSHIP_EXT])) ? $data[self::FIELD_RELATIONSHIP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionRelationshipType) {
                    $this->setRelationship($value);
                } else if (is_array($value)) {
                    $this->setRelationship(new FHIRActionRelationshipType(array_merge($ext, $value)));
                } else {
                    $this->setRelationship(new FHIRActionRelationshipType([FHIRActionRelationshipType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRelationship(new FHIRActionRelationshipType($ext));
            }
        }
        if (isset($data[self::FIELD_OFFSET_DURATION])) {
            if ($data[self::FIELD_OFFSET_DURATION] instanceof FHIRDuration) {
                $this->setOffsetDuration($data[self::FIELD_OFFSET_DURATION]);
            } else {
                $this->setOffsetDuration(new FHIRDuration($data[self::FIELD_OFFSET_DURATION]));
            }
        }
        if (isset($data[self::FIELD_OFFSET_RANGE])) {
            if ($data[self::FIELD_OFFSET_RANGE] instanceof FHIRRange) {
                $this->setOffsetRange($data[self::FIELD_OFFSET_RANGE]);
            } else {
                $this->setOffsetRange(new FHIRRange($data[self::FIELD_OFFSET_RANGE]));
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
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<RequestGroupRelatedAction{$xmlns}></RequestGroupRelatedAction>";
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @return null|\HL7\FHIR\R4\FHIRIdPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRId
     */
    public function getActionId(): ?FHIRId
    {
        return $this->actionId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @param null|\HL7\FHIR\R4\FHIRIdPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRId $actionId
     * @return static
     */
    public function setActionId($actionId = null): object
    {
        if (null !== $actionId && !($actionId instanceof FHIRId)) {
            $actionId = new FHIRId($actionId);
        }
        $this->_trackValueSet($this->actionId, $actionId);
        $this->actionId = $actionId;
        return $this;
    }

    /**
     * Defines the types of relationships between actions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRActionRelationshipType
     */
    public function getRelationship(): ?FHIRActionRelationshipType
    {
        return $this->relationship;
    }

    /**
     * Defines the types of relationships between actions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRActionRelationshipType $relationship
     * @return static
     */
    public function setRelationship(?FHIRActionRelationshipType $relationship = null): object
    {
        $this->_trackValueSet($this->relationship, $relationship);
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getOffsetDuration(): ?FHIRDuration
    {
        return $this->offsetDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRDuration $offsetDuration
     * @return static
     */
    public function setOffsetDuration(?FHIRDuration $offsetDuration = null): object
    {
        $this->_trackValueSet($this->offsetDuration, $offsetDuration);
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRRange
     */
    public function getOffsetRange(): ?FHIRRange
    {
        return $this->offsetRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRRange $offsetRange
     * @return static
     */
    public function setOffsetRange(?FHIRRange $offsetRange = null): object
    {
        $this->_trackValueSet($this->offsetRange, $offsetRange);
        $this->offsetRange = $offsetRange;
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
        return self::$_validationRules;
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
        if (null !== ($v = $this->getActionId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOffsetDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OFFSET_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOffsetRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OFFSET_RANGE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACTION_ID])) {
            $v = $this->getActionId();
            foreach($validationRules[self::FIELD_ACTION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION, self::FIELD_ACTION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION_ID])) {
                        $errs[self::FIELD_ACTION_ID] = [];
                    }
                    $errs[self::FIELD_ACTION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSET_DURATION])) {
            $v = $this->getOffsetDuration();
            foreach($validationRules[self::FIELD_OFFSET_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION, self::FIELD_OFFSET_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSET_DURATION])) {
                        $errs[self::FIELD_OFFSET_DURATION] = [];
                    }
                    $errs[self::FIELD_OFFSET_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSET_RANGE])) {
            $v = $this->getOffsetRange();
            foreach($validationRules[self::FIELD_OFFSET_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION, self::FIELD_OFFSET_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSET_RANGE])) {
                        $errs[self::FIELD_OFFSET_RANGE] = [];
                    }
                    $errs[self::FIELD_OFFSET_RANGE][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRRequestGroupRelatedAction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRequestGroupRelatedAction::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRRequestGroupRelatedAction(null);
        } elseif (!is_object($type) || !($type instanceof FHIRRequestGroupRelatedAction)) {
            throw new \RuntimeException(sprintf(
                'FHIRRequestGroupRelatedAction::xmlUnserialize - $type must be instance of \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_ACTION_ID === $n->nodeName) {
                $type->setActionId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_RELATIONSHIP === $n->nodeName) {
                $type->setRelationship(FHIRActionRelationshipType::xmlUnserialize($n));
            } elseif (self::FIELD_OFFSET_DURATION === $n->nodeName) {
                $type->setOffsetDuration(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_OFFSET_RANGE === $n->nodeName) {
                $type->setOffsetRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ACTION_ID);
        if (null !== $n) {
            $pt = $type->getActionId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setActionId($n->nodeValue);
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
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getActionId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ACTION_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRelationship())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RELATIONSHIP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOffsetDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OFFSET_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOffsetRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OFFSET_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getActionId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACTION_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACTION_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RELATIONSHIP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionRelationshipType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RELATIONSHIP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOffsetDuration())) {
            $out->{self::FIELD_OFFSET_DURATION} = $v;
        }
        if (null !== ($v = $this->getOffsetRange())) {
            $out->{self::FIELD_OFFSET_RANGE} = $v;
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