<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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

use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionDirectionType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionOperatorType;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionResponseTypes;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRBooleanPrimitive;
use HL7\FHIR\R5\FHIRCodePrimitive;
use HL7\FHIR\R5\FHIRIdPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\FHIRUriPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A structured set of tests against a FHIR server or client implementation to
 * determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptAssert
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptAssert extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT;

    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DIRECTION = 'direction';
    const FIELD_DIRECTION_EXT = '_direction';
    const FIELD_COMPARE_TO_SOURCE_ID = 'compareToSourceId';
    const FIELD_COMPARE_TO_SOURCE_ID_EXT = '_compareToSourceId';
    const FIELD_COMPARE_TO_SOURCE_EXPRESSION = 'compareToSourceExpression';
    const FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT = '_compareToSourceExpression';
    const FIELD_COMPARE_TO_SOURCE_PATH = 'compareToSourcePath';
    const FIELD_COMPARE_TO_SOURCE_PATH_EXT = '_compareToSourcePath';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_DEFAULT_MANUAL_COMPLETION = 'defaultManualCompletion';
    const FIELD_DEFAULT_MANUAL_COMPLETION_EXT = '_defaultManualCompletion';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';
    const FIELD_HEADER_FIELD = 'headerField';
    const FIELD_HEADER_FIELD_EXT = '_headerField';
    const FIELD_MINIMUM_ID = 'minimumId';
    const FIELD_MINIMUM_ID_EXT = '_minimumId';
    const FIELD_NAVIGATION_LINKS = 'navigationLinks';
    const FIELD_NAVIGATION_LINKS_EXT = '_navigationLinks';
    const FIELD_OPERATOR = 'operator';
    const FIELD_OPERATOR_EXT = '_operator';
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_REQUEST_METHOD = 'requestMethod';
    const FIELD_REQUEST_METHOD_EXT = '_requestMethod';
    const FIELD_REQUEST_URL = 'requestURL';
    const FIELD_REQUEST_URL_EXT = '_requestURL';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESPONSE = 'response';
    const FIELD_RESPONSE_EXT = '_response';
    const FIELD_RESPONSE_CODE = 'responseCode';
    const FIELD_RESPONSE_CODE_EXT = '_responseCode';
    const FIELD_SOURCE_ID = 'sourceId';
    const FIELD_SOURCE_ID_EXT = '_sourceId';
    const FIELD_STOP_TEST_ON_FAIL = 'stopTestOnFail';
    const FIELD_STOP_TEST_ON_FAIL_EXT = '_stopTestOnFail';
    const FIELD_VALIDATE_PROFILE_ID = 'validateProfileId';
    const FIELD_VALIDATE_PROFILE_ID_EXT = '_validateProfileId';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';
    const FIELD_WARNING_ONLY = 'warningOnly';
    const FIELD_WARNING_ONLY_EXT = '_warningOnly';
    const FIELD_REQUIREMENT = 'requirement';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionDirectionType
     */
    protected null|FHIRAssertionDirectionType $direction = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $compareToSourceId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression for a specific value to evaluate against the source
     * fixture. When compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $compareToSourceExpression = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $compareToSourcePath = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime-type contents to compare against the request or response message
     * 'Content-Type' header.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $contentType = null;
    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The default manual completion outcome applied to this assertion.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType
     */
    protected null|FHIRAssertionManualCompletionType $defaultManualCompletion = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $expression = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $headerField = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $minimumId = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $navigationLinks = null;
    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionOperatorType
     */
    protected null|FHIRAssertionOperatorType $operator = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $path = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    protected null|FHIRTestScriptRequestMethodCode $requestMethod = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $requestURL = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See the [resource list](resourcelist.html).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $resource = null;
    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * continue | switchingProtocols | okay | created | accepted |
     * nonAuthoritativeInformation | noContent | resetContent | partialContent |
     * multipleChoices | movedPermanently | found | seeOther | notModified | useProxy |
     * temporaryRedirect | permanentRedirect | badRequest | unauthorized |
     * paymentRequired | forbidden | notFound | methodNotAllowed | notAcceptable |
     * proxyAuthenticationRequired | requestTimeout | conflict | gone | lengthRequired
     * | preconditionFailed | contentTooLarge | uriTooLong | unsupportedMediaType |
     * rangeNotSatisfiable | expectationFailed | misdirectedRequest |
     * unprocessableContent | upgradeRequired | internalServerError | notImplemented |
     * badGateway | serviceUnavailable | gatewayTimeout | httpVersionNotSupported.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionResponseTypes
     */
    protected null|FHIRAssertionResponseTypes $response = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $responseCode = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $sourceId = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the current test execution will stop on failure for this assert.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $stopTestOnFail = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The ID of the Profile to validate against.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $validateProfileId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $value = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $warningOnly = null;
    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement[]
     */
    protected null|array $requirement = [];

    /**
     * Validation map for fields in type TestScript.Assert
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRTestScriptAssert Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LABEL]) || isset($data[self::FIELD_LABEL_EXT])) {
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
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
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
            }
        }
        if (isset($data[self::FIELD_DIRECTION]) || isset($data[self::FIELD_DIRECTION_EXT])) {
            $value = $data[self::FIELD_DIRECTION] ?? null;
            $ext = (isset($data[self::FIELD_DIRECTION_EXT]) && is_array($data[self::FIELD_DIRECTION_EXT])) ? $data[self::FIELD_DIRECTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionDirectionType) {
                    $this->setDirection($value);
                } else if (is_array($value)) {
                    $this->setDirection(new FHIRAssertionDirectionType(array_merge($ext, $value)));
                } else {
                    $this->setDirection(new FHIRAssertionDirectionType([FHIRAssertionDirectionType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDirection(new FHIRAssertionDirectionType($ext));
            }
        }
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID]) || isset($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])) {
            $value = $data[self::FIELD_COMPARE_TO_SOURCE_ID] ?? null;
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT])) ? $data[self::FIELD_COMPARE_TO_SOURCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourceId($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourceId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourceId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompareToSourceId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION]) || isset($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT])) {
            $value = $data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] ?? null;
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT])) ? $data[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourceExpression($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourceExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourceExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompareToSourceExpression(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH]) || isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])) {
            $value = $data[self::FIELD_COMPARE_TO_SOURCE_PATH] ?? null;
            $ext = (isset($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT]) && is_array($data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT])) ? $data[self::FIELD_COMPARE_TO_SOURCE_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCompareToSourcePath($value);
                } else if (is_array($value)) {
                    $this->setCompareToSourcePath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCompareToSourcePath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompareToSourcePath(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
            $value = $data[self::FIELD_CONTENT_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) ? $data[self::FIELD_CONTENT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContentType(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_MANUAL_COMPLETION]) || isset($data[self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT])) {
            $value = $data[self::FIELD_DEFAULT_MANUAL_COMPLETION] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT]) && is_array($data[self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT])) ? $data[self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionManualCompletionType) {
                    $this->setDefaultManualCompletion($value);
                } else if (is_array($value)) {
                    $this->setDefaultManualCompletion(new FHIRAssertionManualCompletionType(array_merge($ext, $value)));
                } else {
                    $this->setDefaultManualCompletion(new FHIRAssertionManualCompletionType([FHIRAssertionManualCompletionType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultManualCompletion(new FHIRAssertionManualCompletionType($ext));
            }
        }
        if (isset($data[self::FIELD_EXPRESSION]) || isset($data[self::FIELD_EXPRESSION_EXT])) {
            $value = $data[self::FIELD_EXPRESSION] ?? null;
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT])) ? $data[self::FIELD_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setExpression($value);
                } else if (is_array($value)) {
                    $this->setExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExpression(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_HEADER_FIELD]) || isset($data[self::FIELD_HEADER_FIELD_EXT])) {
            $value = $data[self::FIELD_HEADER_FIELD] ?? null;
            $ext = (isset($data[self::FIELD_HEADER_FIELD_EXT]) && is_array($data[self::FIELD_HEADER_FIELD_EXT])) ? $data[self::FIELD_HEADER_FIELD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setHeaderField($value);
                } else if (is_array($value)) {
                    $this->setHeaderField(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setHeaderField(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHeaderField(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MINIMUM_ID]) || isset($data[self::FIELD_MINIMUM_ID_EXT])) {
            $value = $data[self::FIELD_MINIMUM_ID] ?? null;
            $ext = (isset($data[self::FIELD_MINIMUM_ID_EXT]) && is_array($data[self::FIELD_MINIMUM_ID_EXT])) ? $data[self::FIELD_MINIMUM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMinimumId($value);
                } else if (is_array($value)) {
                    $this->setMinimumId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMinimumId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinimumId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NAVIGATION_LINKS]) || isset($data[self::FIELD_NAVIGATION_LINKS_EXT])) {
            $value = $data[self::FIELD_NAVIGATION_LINKS] ?? null;
            $ext = (isset($data[self::FIELD_NAVIGATION_LINKS_EXT]) && is_array($data[self::FIELD_NAVIGATION_LINKS_EXT])) ? $data[self::FIELD_NAVIGATION_LINKS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNavigationLinks($value);
                } else if (is_array($value)) {
                    $this->setNavigationLinks(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNavigationLinks(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNavigationLinks(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_OPERATOR]) || isset($data[self::FIELD_OPERATOR_EXT])) {
            $value = $data[self::FIELD_OPERATOR] ?? null;
            $ext = (isset($data[self::FIELD_OPERATOR_EXT]) && is_array($data[self::FIELD_OPERATOR_EXT])) ? $data[self::FIELD_OPERATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionOperatorType) {
                    $this->setOperator($value);
                } else if (is_array($value)) {
                    $this->setOperator(new FHIRAssertionOperatorType(array_merge($ext, $value)));
                } else {
                    $this->setOperator(new FHIRAssertionOperatorType([FHIRAssertionOperatorType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOperator(new FHIRAssertionOperatorType($ext));
            }
        }
        if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
            $value = $data[self::FIELD_PATH] ?? null;
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) ? $data[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REQUEST_METHOD]) || isset($data[self::FIELD_REQUEST_METHOD_EXT])) {
            $value = $data[self::FIELD_REQUEST_METHOD] ?? null;
            $ext = (isset($data[self::FIELD_REQUEST_METHOD_EXT]) && is_array($data[self::FIELD_REQUEST_METHOD_EXT])) ? $data[self::FIELD_REQUEST_METHOD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTestScriptRequestMethodCode) {
                    $this->setRequestMethod($value);
                } else if (is_array($value)) {
                    $this->setRequestMethod(new FHIRTestScriptRequestMethodCode(array_merge($ext, $value)));
                } else {
                    $this->setRequestMethod(new FHIRTestScriptRequestMethodCode([FHIRTestScriptRequestMethodCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequestMethod(new FHIRTestScriptRequestMethodCode($ext));
            }
        }
        if (isset($data[self::FIELD_REQUEST_URL]) || isset($data[self::FIELD_REQUEST_URL_EXT])) {
            $value = $data[self::FIELD_REQUEST_URL] ?? null;
            $ext = (isset($data[self::FIELD_REQUEST_URL_EXT]) && is_array($data[self::FIELD_REQUEST_URL_EXT])) ? $data[self::FIELD_REQUEST_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRequestURL($value);
                } else if (is_array($value)) {
                    $this->setRequestURL(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRequestURL(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequestURL(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE]) || isset($data[self::FIELD_RESOURCE_EXT])) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_RESPONSE]) || isset($data[self::FIELD_RESPONSE_EXT])) {
            $value = $data[self::FIELD_RESPONSE] ?? null;
            $ext = (isset($data[self::FIELD_RESPONSE_EXT]) && is_array($data[self::FIELD_RESPONSE_EXT])) ? $data[self::FIELD_RESPONSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAssertionResponseTypes) {
                    $this->setResponse($value);
                } else if (is_array($value)) {
                    $this->setResponse(new FHIRAssertionResponseTypes(array_merge($ext, $value)));
                } else {
                    $this->setResponse(new FHIRAssertionResponseTypes([FHIRAssertionResponseTypes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResponse(new FHIRAssertionResponseTypes($ext));
            }
        }
        if (isset($data[self::FIELD_RESPONSE_CODE]) || isset($data[self::FIELD_RESPONSE_CODE_EXT])) {
            $value = $data[self::FIELD_RESPONSE_CODE] ?? null;
            $ext = (isset($data[self::FIELD_RESPONSE_CODE_EXT]) && is_array($data[self::FIELD_RESPONSE_CODE_EXT])) ? $data[self::FIELD_RESPONSE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setResponseCode($value);
                } else if (is_array($value)) {
                    $this->setResponseCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setResponseCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResponseCode(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ID]) || isset($data[self::FIELD_SOURCE_ID_EXT])) {
            $value = $data[self::FIELD_SOURCE_ID] ?? null;
            $ext = (isset($data[self::FIELD_SOURCE_ID_EXT]) && is_array($data[self::FIELD_SOURCE_ID_EXT])) ? $data[self::FIELD_SOURCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setSourceId($value);
                } else if (is_array($value)) {
                    $this->setSourceId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setSourceId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSourceId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_STOP_TEST_ON_FAIL]) || isset($data[self::FIELD_STOP_TEST_ON_FAIL_EXT])) {
            $value = $data[self::FIELD_STOP_TEST_ON_FAIL] ?? null;
            $ext = (isset($data[self::FIELD_STOP_TEST_ON_FAIL_EXT]) && is_array($data[self::FIELD_STOP_TEST_ON_FAIL_EXT])) ? $data[self::FIELD_STOP_TEST_ON_FAIL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setStopTestOnFail($value);
                } else if (is_array($value)) {
                    $this->setStopTestOnFail(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setStopTestOnFail(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStopTestOnFail(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VALIDATE_PROFILE_ID]) || isset($data[self::FIELD_VALIDATE_PROFILE_ID_EXT])) {
            $value = $data[self::FIELD_VALIDATE_PROFILE_ID] ?? null;
            $ext = (isset($data[self::FIELD_VALIDATE_PROFILE_ID_EXT]) && is_array($data[self::FIELD_VALIDATE_PROFILE_ID_EXT])) ? $data[self::FIELD_VALIDATE_PROFILE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setValidateProfileId($value);
                } else if (is_array($value)) {
                    $this->setValidateProfileId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setValidateProfileId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValidateProfileId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE]) || isset($data[self::FIELD_VALUE_EXT])) {
            $value = $data[self::FIELD_VALUE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) ? $data[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValue(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_WARNING_ONLY]) || isset($data[self::FIELD_WARNING_ONLY_EXT])) {
            $value = $data[self::FIELD_WARNING_ONLY] ?? null;
            $ext = (isset($data[self::FIELD_WARNING_ONLY_EXT]) && is_array($data[self::FIELD_WARNING_ONLY_EXT])) ? $data[self::FIELD_WARNING_ONLY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWarningOnly($value);
                } else if (is_array($value)) {
                    $this->setWarningOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWarningOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWarningOnly(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENT])) {
            if (is_array($data[self::FIELD_REQUIREMENT])) {
                foreach($data[self::FIELD_REQUIREMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestScriptRequirement) {
                        $this->addRequirement($v);
                    } else {
                        $this->addRequirement(new FHIRTestScriptRequirement($v));
                    }
                }
            } elseif ($data[self::FIELD_REQUIREMENT] instanceof FHIRTestScriptRequirement) {
                $this->addRequirement($data[self::FIELD_REQUIREMENT]);
            } else {
                $this->addRequirement(new FHIRTestScriptRequirement($data[self::FIELD_REQUIREMENT]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        $this->label = $label;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionDirectionType
     */
    public function getDirection(): null|FHIRAssertionDirectionType
    {
        return $this->direction;
    }

    /**
     * The type of direction to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The direction to use for the assertion.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionDirectionType $direction
     * @return static
     */
    public function setDirection(null|FHIRAssertionDirectionType $direction = null): self
    {
        if (null === $direction) {
            $direction = new FHIRAssertionDirectionType();
        }
        $this->_trackValueSet($this->direction, $direction);
        $this->direction = $direction;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCompareToSourceId(): null|FHIRString
    {
        return $this->compareToSourceId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the source fixture used as the contents to be evaluated by either the
     * "source/expression" or "sourceId/path" definition.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $compareToSourceId
     * @return static
     */
    public function setCompareToSourceId(null|string|FHIRStringPrimitive|FHIRString $compareToSourceId = null): self
    {
        if (null !== $compareToSourceId && !($compareToSourceId instanceof FHIRString)) {
            $compareToSourceId = new FHIRString($compareToSourceId);
        }
        $this->_trackValueSet($this->compareToSourceId, $compareToSourceId);
        $this->compareToSourceId = $compareToSourceId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression for a specific value to evaluate against the source
     * fixture. When compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCompareToSourceExpression(): null|FHIRString
    {
        return $this->compareToSourceExpression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression for a specific value to evaluate against the source
     * fixture. When compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $compareToSourceExpression
     * @return static
     */
    public function setCompareToSourceExpression(null|string|FHIRStringPrimitive|FHIRString $compareToSourceExpression = null): self
    {
        if (null !== $compareToSourceExpression && !($compareToSourceExpression instanceof FHIRString)) {
            $compareToSourceExpression = new FHIRString($compareToSourceExpression);
        }
        $this->_trackValueSet($this->compareToSourceExpression, $compareToSourceExpression);
        $this->compareToSourceExpression = $compareToSourceExpression;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCompareToSourcePath(): null|FHIRString
    {
        return $this->compareToSourcePath;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When
     * compareToSourceId is defined, either compareToSourceExpression or
     * compareToSourcePath must be defined, but not both.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $compareToSourcePath
     * @return static
     */
    public function setCompareToSourcePath(null|string|FHIRStringPrimitive|FHIRString $compareToSourcePath = null): self
    {
        if (null !== $compareToSourcePath && !($compareToSourcePath instanceof FHIRString)) {
            $compareToSourcePath = new FHIRString($compareToSourcePath);
        }
        $this->_trackValueSet($this->compareToSourcePath, $compareToSourcePath);
        $this->compareToSourcePath = $compareToSourcePath;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime-type contents to compare against the request or response message
     * 'Content-Type' header.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode
     */
    public function getContentType(): null|FHIRCode
    {
        return $this->contentType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime-type contents to compare against the request or response message
     * 'Content-Type' header.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRCodePrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRCode $contentType
     * @return static
     */
    public function setContentType(null|string|FHIRCodePrimitive|FHIRCode $contentType = null): self
    {
        if (null !== $contentType && !($contentType instanceof FHIRCode)) {
            $contentType = new FHIRCode($contentType);
        }
        $this->_trackValueSet($this->contentType, $contentType);
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The default manual completion outcome applied to this assertion.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType
     */
    public function getDefaultManualCompletion(): null|FHIRAssertionManualCompletionType
    {
        return $this->defaultManualCompletion;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The default manual completion outcome applied to this assertion.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionManualCompletionType $defaultManualCompletion
     * @return static
     */
    public function setDefaultManualCompletion(null|FHIRAssertionManualCompletionType $defaultManualCompletion = null): self
    {
        if (null === $defaultManualCompletion) {
            $defaultManualCompletion = new FHIRAssertionManualCompletionType();
        }
        $this->_trackValueSet($this->defaultManualCompletion, $defaultManualCompletion);
        $this->defaultManualCompletion = $defaultManualCompletion;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getExpression(): null|FHIRString
    {
        return $this->expression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath expression to be evaluated against the request or response message
     * contents - HTTP headers and payload.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $expression
     * @return static
     */
    public function setExpression(null|string|FHIRStringPrimitive|FHIRString $expression = null): self
    {
        if (null !== $expression && !($expression instanceof FHIRString)) {
            $expression = new FHIRString($expression);
        }
        $this->_trackValueSet($this->expression, $expression);
        $this->expression = $expression;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getHeaderField(): null|FHIRString
    {
        return $this->headerField;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $headerField
     * @return static
     */
    public function setHeaderField(null|string|FHIRStringPrimitive|FHIRString $headerField = null): self
    {
        if (null !== $headerField && !($headerField instanceof FHIRString)) {
            $headerField = new FHIRString($headerField);
        }
        $this->_trackValueSet($this->headerField, $headerField);
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getMinimumId(): null|FHIRString
    {
        return $this->minimumId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture
     * specified by minimumId.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $minimumId
     * @return static
     */
    public function setMinimumId(null|string|FHIRStringPrimitive|FHIRString $minimumId = null): self
    {
        if (null !== $minimumId && !($minimumId instanceof FHIRString)) {
            $minimumId = new FHIRString($minimumId);
        }
        $this->_trackValueSet($this->minimumId, $minimumId);
        $this->minimumId = $minimumId;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getNavigationLinks(): null|FHIRBoolean
    {
        return $this->navigationLinks;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution performs validation on the bundle navigation
     * links.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $navigationLinks
     * @return static
     */
    public function setNavigationLinks(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $navigationLinks = null): self
    {
        if (null !== $navigationLinks && !($navigationLinks instanceof FHIRBoolean)) {
            $navigationLinks = new FHIRBoolean($navigationLinks);
        }
        $this->_trackValueSet($this->navigationLinks, $navigationLinks);
        $this->navigationLinks = $navigationLinks;
        return $this;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionOperatorType
     */
    public function getOperator(): null|FHIRAssertionOperatorType
    {
        return $this->operator;
    }

    /**
     * The type of operator to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The operator type defines the conditional behavior of the assert.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionOperatorType $operator
     * @return static
     */
    public function setOperator(null|FHIRAssertionOperatorType $operator = null): self
    {
        if (null === $operator) {
            $operator = new FHIRAssertionOperatorType();
        }
        $this->_trackValueSet($this->operator, $operator);
        $this->operator = $operator;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The XPath or JSONPath expression to be evaluated against the fixture
     * representing the response received from server.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path = null): self
    {
        if (null !== $path && !($path instanceof FHIRString)) {
            $path = new FHIRString($path);
        }
        $this->_trackValueSet($this->path, $path);
        $this->path = $path;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode
     */
    public function getRequestMethod(): null|FHIRTestScriptRequestMethodCode
    {
        return $this->requestMethod;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The request method or HTTP operation code to compare against that used by the
     * client system under test.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRTestScriptRequestMethodCode $requestMethod
     * @return static
     */
    public function setRequestMethod(null|FHIRTestScriptRequestMethodCode $requestMethod = null): self
    {
        if (null === $requestMethod) {
            $requestMethod = new FHIRTestScriptRequestMethodCode();
        }
        $this->_trackValueSet($this->requestMethod, $requestMethod);
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getRequestURL(): null|FHIRString
    {
        return $this->requestURL;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $requestURL
     * @return static
     */
    public function setRequestURL(null|string|FHIRStringPrimitive|FHIRString $requestURL = null): self
    {
        if (null !== $requestURL && !($requestURL instanceof FHIRString)) {
            $requestURL = new FHIRString($requestURL);
        }
        $this->_trackValueSet($this->requestURL, $requestURL);
        $this->requestURL = $requestURL;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See the [resource list](resourcelist.html).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResource(): null|FHIRUri
    {
        return $this->resource;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource. See the [resource list](resourcelist.html).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $resource
     * @return static
     */
    public function setResource(null|string|FHIRUriPrimitive|FHIRUri $resource = null): self
    {
        if (null !== $resource && !($resource instanceof FHIRUri)) {
            $resource = new FHIRUri($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        $this->resource = $resource;
        return $this;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * continue | switchingProtocols | okay | created | accepted |
     * nonAuthoritativeInformation | noContent | resetContent | partialContent |
     * multipleChoices | movedPermanently | found | seeOther | notModified | useProxy |
     * temporaryRedirect | permanentRedirect | badRequest | unauthorized |
     * paymentRequired | forbidden | notFound | methodNotAllowed | notAcceptable |
     * proxyAuthenticationRequired | requestTimeout | conflict | gone | lengthRequired
     * | preconditionFailed | contentTooLarge | uriTooLong | unsupportedMediaType |
     * rangeNotSatisfiable | expectationFailed | misdirectedRequest |
     * unprocessableContent | upgradeRequired | internalServerError | notImplemented |
     * badGateway | serviceUnavailable | gatewayTimeout | httpVersionNotSupported.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionResponseTypes
     */
    public function getResponse(): null|FHIRAssertionResponseTypes
    {
        return $this->response;
    }

    /**
     * The type of response code to use for assertion.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * continue | switchingProtocols | okay | created | accepted |
     * nonAuthoritativeInformation | noContent | resetContent | partialContent |
     * multipleChoices | movedPermanently | found | seeOther | notModified | useProxy |
     * temporaryRedirect | permanentRedirect | badRequest | unauthorized |
     * paymentRequired | forbidden | notFound | methodNotAllowed | notAcceptable |
     * proxyAuthenticationRequired | requestTimeout | conflict | gone | lengthRequired
     * | preconditionFailed | contentTooLarge | uriTooLong | unsupportedMediaType |
     * rangeNotSatisfiable | expectationFailed | misdirectedRequest |
     * unprocessableContent | upgradeRequired | internalServerError | notImplemented |
     * badGateway | serviceUnavailable | gatewayTimeout | httpVersionNotSupported.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRAssertionResponseTypes $response
     * @return static
     */
    public function setResponse(null|FHIRAssertionResponseTypes $response = null): self
    {
        if (null === $response) {
            $response = new FHIRAssertionResponseTypes();
        }
        $this->_trackValueSet($this->response, $response);
        $this->response = $response;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getResponseCode(): null|FHIRString
    {
        return $this->responseCode;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the HTTP response code to be tested.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $responseCode
     * @return static
     */
    public function setResponseCode(null|string|FHIRStringPrimitive|FHIRString $responseCode = null): self
    {
        if (null !== $responseCode && !($responseCode instanceof FHIRString)) {
            $responseCode = new FHIRString($responseCode);
        }
        $this->_trackValueSet($this->responseCode, $responseCode);
        $this->responseCode = $responseCode;
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
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getSourceId(): null|FHIRId
    {
        return $this->sourceId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRIdPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId $sourceId
     * @return static
     */
    public function setSourceId(null|string|FHIRIdPrimitive|FHIRId $sourceId = null): self
    {
        if (null !== $sourceId && !($sourceId instanceof FHIRId)) {
            $sourceId = new FHIRId($sourceId);
        }
        $this->_trackValueSet($this->sourceId, $sourceId);
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the current test execution will stop on failure for this assert.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getStopTestOnFail(): null|FHIRBoolean
    {
        return $this->stopTestOnFail;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the current test execution will stop on failure for this assert.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $stopTestOnFail
     * @return static
     */
    public function setStopTestOnFail(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $stopTestOnFail = null): self
    {
        if (null !== $stopTestOnFail && !($stopTestOnFail instanceof FHIRBoolean)) {
            $stopTestOnFail = new FHIRBoolean($stopTestOnFail);
        }
        $this->_trackValueSet($this->stopTestOnFail, $stopTestOnFail);
        $this->stopTestOnFail = $stopTestOnFail;
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
     * The ID of the Profile to validate against.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getValidateProfileId(): null|FHIRId
    {
        return $this->validateProfileId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The ID of the Profile to validate against.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRIdPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRId $validateProfileId
     * @return static
     */
    public function setValidateProfileId(null|string|FHIRIdPrimitive|FHIRId $validateProfileId = null): self
    {
        if (null !== $validateProfileId && !($validateProfileId instanceof FHIRId)) {
            $validateProfileId = new FHIRId($validateProfileId);
        }
        $this->_trackValueSet($this->validateProfileId, $validateProfileId);
        $this->validateProfileId = $validateProfileId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value to compare to.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $value
     * @return static
     */
    public function setValue(null|string|FHIRStringPrimitive|FHIRString $value = null): self
    {
        if (null !== $value && !($value instanceof FHIRString)) {
            $value = new FHIRString($value);
        }
        $this->_trackValueSet($this->value, $value);
        $this->value = $value;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getWarningOnly(): null|FHIRBoolean
    {
        return $this->warningOnly;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will produce a warning only on error for this
     * assert.
     *
     * @param null|string|bool|\HL7\FHIR\R5\FHIRBooleanPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBoolean $warningOnly
     * @return static
     */
    public function setWarningOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $warningOnly = null): self
    {
        if (null !== $warningOnly && !($warningOnly instanceof FHIRBoolean)) {
            $warningOnly = new FHIRBoolean($warningOnly);
        }
        $this->_trackValueSet($this->warningOnly, $warningOnly);
        $this->warningOnly = $warningOnly;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement[]
     */
    public function getRequirement(): null|array
    {
        return $this->requirement;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement $requirement
     * @return static
     */
    public function addRequirement(null|FHIRTestScriptRequirement $requirement = null): self
    {
        if (null === $requirement) {
            $requirement = new FHIRTestScriptRequirement();
        }
        $this->_trackValueAdded();
        $this->requirement[] = $requirement;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequirement[] $requirement
     * @return static
     */
    public function setRequirement(array $requirement = []): self
    {
        if ([] !== $this->requirement) {
            $this->_trackValuesRemoved(count($this->requirement));
            $this->requirement = [];
        }
        if ([] === $requirement) {
            return $this;
        }
        foreach($requirement as $v) {
            if ($v instanceof FHIRTestScriptRequirement) {
                $this->addRequirement($v);
            } else {
                $this->addRequirement(new FHIRTestScriptRequirement($v));
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
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDirection())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIRECTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARE_TO_SOURCE_PATH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultManualCompletion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_MANUAL_COMPLETION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHeaderField())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEADER_FIELD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinimumId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MINIMUM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAVIGATION_LINKS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestURL())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponseCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStopTestOnFail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STOP_TEST_ON_FAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATE_PROFILE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWarningOnly())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WARNING_ONLY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRequirement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUIREMENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIRECTION])) {
            $v = $this->getDirection();
            foreach($validationRules[self::FIELD_DIRECTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_DIRECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIRECTION])) {
                        $errs[self::FIELD_DIRECTION] = [];
                    }
                    $errs[self::FIELD_DIRECTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARE_TO_SOURCE_ID])) {
            $v = $this->getCompareToSourceId();
            foreach($validationRules[self::FIELD_COMPARE_TO_SOURCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_COMPARE_TO_SOURCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARE_TO_SOURCE_ID])) {
                        $errs[self::FIELD_COMPARE_TO_SOURCE_ID] = [];
                    }
                    $errs[self::FIELD_COMPARE_TO_SOURCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
            $v = $this->getCompareToSourceExpression();
            foreach($validationRules[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_COMPARE_TO_SOURCE_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION])) {
                        $errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_COMPARE_TO_SOURCE_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
            $v = $this->getCompareToSourcePath();
            foreach($validationRules[self::FIELD_COMPARE_TO_SOURCE_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_COMPARE_TO_SOURCE_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARE_TO_SOURCE_PATH])) {
                        $errs[self::FIELD_COMPARE_TO_SOURCE_PATH] = [];
                    }
                    $errs[self::FIELD_COMPARE_TO_SOURCE_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
            $v = $this->getContentType();
            foreach($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
                        $errs[self::FIELD_CONTENT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_MANUAL_COMPLETION])) {
            $v = $this->getDefaultManualCompletion();
            foreach($validationRules[self::FIELD_DEFAULT_MANUAL_COMPLETION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_DEFAULT_MANUAL_COMPLETION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_MANUAL_COMPLETION])) {
                        $errs[self::FIELD_DEFAULT_MANUAL_COMPLETION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_MANUAL_COMPLETION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPRESSION])) {
            $v = $this->getExpression();
            foreach($validationRules[self::FIELD_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPRESSION])) {
                        $errs[self::FIELD_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEADER_FIELD])) {
            $v = $this->getHeaderField();
            foreach($validationRules[self::FIELD_HEADER_FIELD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_HEADER_FIELD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEADER_FIELD])) {
                        $errs[self::FIELD_HEADER_FIELD] = [];
                    }
                    $errs[self::FIELD_HEADER_FIELD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MINIMUM_ID])) {
            $v = $this->getMinimumId();
            foreach($validationRules[self::FIELD_MINIMUM_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_MINIMUM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MINIMUM_ID])) {
                        $errs[self::FIELD_MINIMUM_ID] = [];
                    }
                    $errs[self::FIELD_MINIMUM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAVIGATION_LINKS])) {
            $v = $this->getNavigationLinks();
            foreach($validationRules[self::FIELD_NAVIGATION_LINKS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_NAVIGATION_LINKS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAVIGATION_LINKS])) {
                        $errs[self::FIELD_NAVIGATION_LINKS] = [];
                    }
                    $errs[self::FIELD_NAVIGATION_LINKS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATOR])) {
            $v = $this->getOperator();
            foreach($validationRules[self::FIELD_OPERATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_OPERATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATOR])) {
                        $errs[self::FIELD_OPERATOR] = [];
                    }
                    $errs[self::FIELD_OPERATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_METHOD])) {
            $v = $this->getRequestMethod();
            foreach($validationRules[self::FIELD_REQUEST_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_REQUEST_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_METHOD])) {
                        $errs[self::FIELD_REQUEST_METHOD] = [];
                    }
                    $errs[self::FIELD_REQUEST_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_URL])) {
            $v = $this->getRequestURL();
            foreach($validationRules[self::FIELD_REQUEST_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_REQUEST_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_URL])) {
                        $errs[self::FIELD_REQUEST_URL] = [];
                    }
                    $errs[self::FIELD_REQUEST_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE])) {
            $v = $this->getResponse();
            foreach($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE_CODE])) {
            $v = $this->getResponseCode();
            foreach($validationRules[self::FIELD_RESPONSE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_RESPONSE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE_CODE])) {
                        $errs[self::FIELD_RESPONSE_CODE] = [];
                    }
                    $errs[self::FIELD_RESPONSE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_ID])) {
            $v = $this->getSourceId();
            foreach($validationRules[self::FIELD_SOURCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_SOURCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_ID])) {
                        $errs[self::FIELD_SOURCE_ID] = [];
                    }
                    $errs[self::FIELD_SOURCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STOP_TEST_ON_FAIL])) {
            $v = $this->getStopTestOnFail();
            foreach($validationRules[self::FIELD_STOP_TEST_ON_FAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_STOP_TEST_ON_FAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STOP_TEST_ON_FAIL])) {
                        $errs[self::FIELD_STOP_TEST_ON_FAIL] = [];
                    }
                    $errs[self::FIELD_STOP_TEST_ON_FAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATE_PROFILE_ID])) {
            $v = $this->getValidateProfileId();
            foreach($validationRules[self::FIELD_VALIDATE_PROFILE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_VALIDATE_PROFILE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATE_PROFILE_ID])) {
                        $errs[self::FIELD_VALIDATE_PROFILE_ID] = [];
                    }
                    $errs[self::FIELD_VALIDATE_PROFILE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WARNING_ONLY])) {
            $v = $this->getWarningOnly();
            foreach($validationRules[self::FIELD_WARNING_ONLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_WARNING_ONLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WARNING_ONLY])) {
                        $errs[self::FIELD_WARNING_ONLY] = [];
                    }
                    $errs[self::FIELD_WARNING_ONLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENT])) {
            $v = $this->getRequirement();
            foreach($validationRules[self::FIELD_REQUIREMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENT])) {
                        $errs[self::FIELD_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_REQUIREMENT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert
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
        } else if (!($type instanceof FHIRTestScriptAssert)) {
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
            if (self::FIELD_LABEL === $n->nodeName) {
                $type->setLabel(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DIRECTION === $n->nodeName) {
                $type->setDirection(FHIRAssertionDirectionType::xmlUnserialize($n));
            } elseif (self::FIELD_COMPARE_TO_SOURCE_ID === $n->nodeName) {
                $type->setCompareToSourceId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COMPARE_TO_SOURCE_EXPRESSION === $n->nodeName) {
                $type->setCompareToSourceExpression(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COMPARE_TO_SOURCE_PATH === $n->nodeName) {
                $type->setCompareToSourcePath(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT_TYPE === $n->nodeName) {
                $type->setContentType(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_DEFAULT_MANUAL_COMPLETION === $n->nodeName) {
                $type->setDefaultManualCompletion(FHIRAssertionManualCompletionType::xmlUnserialize($n));
            } elseif (self::FIELD_EXPRESSION === $n->nodeName) {
                $type->setExpression(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_HEADER_FIELD === $n->nodeName) {
                $type->setHeaderField(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MINIMUM_ID === $n->nodeName) {
                $type->setMinimumId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_NAVIGATION_LINKS === $n->nodeName) {
                $type->setNavigationLinks(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATOR === $n->nodeName) {
                $type->setOperator(FHIRAssertionOperatorType::xmlUnserialize($n));
            } elseif (self::FIELD_PATH === $n->nodeName) {
                $type->setPath(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST_METHOD === $n->nodeName) {
                $type->setRequestMethod(FHIRTestScriptRequestMethodCode::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST_URL === $n->nodeName) {
                $type->setRequestURL(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE === $n->nodeName) {
                $type->setResource(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_RESPONSE === $n->nodeName) {
                $type->setResponse(FHIRAssertionResponseTypes::xmlUnserialize($n));
            } elseif (self::FIELD_RESPONSE_CODE === $n->nodeName) {
                $type->setResponseCode(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_ID === $n->nodeName) {
                $type->setSourceId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_STOP_TEST_ON_FAIL === $n->nodeName) {
                $type->setStopTestOnFail(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_VALIDATE_PROFILE_ID === $n->nodeName) {
                $type->setValidateProfileId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE === $n->nodeName) {
                $type->setValue(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_WARNING_ONLY === $n->nodeName) {
                $type->setWarningOnly(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIREMENT === $n->nodeName) {
                $type->addRequirement(FHIRTestScriptRequirement::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LABEL);
        if (null !== $n) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLabel($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COMPARE_TO_SOURCE_ID);
        if (null !== $n) {
            $pt = $type->getCompareToSourceId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCompareToSourceId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION);
        if (null !== $n) {
            $pt = $type->getCompareToSourceExpression();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCompareToSourceExpression($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COMPARE_TO_SOURCE_PATH);
        if (null !== $n) {
            $pt = $type->getCompareToSourcePath();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCompareToSourcePath($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONTENT_TYPE);
        if (null !== $n) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setContentType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXPRESSION);
        if (null !== $n) {
            $pt = $type->getExpression();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExpression($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_HEADER_FIELD);
        if (null !== $n) {
            $pt = $type->getHeaderField();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setHeaderField($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MINIMUM_ID);
        if (null !== $n) {
            $pt = $type->getMinimumId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMinimumId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAVIGATION_LINKS);
        if (null !== $n) {
            $pt = $type->getNavigationLinks();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNavigationLinks($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PATH);
        if (null !== $n) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPath($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUEST_URL);
        if (null !== $n) {
            $pt = $type->getRequestURL();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequestURL($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE);
        if (null !== $n) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResource($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESPONSE_CODE);
        if (null !== $n) {
            $pt = $type->getResponseCode();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResponseCode($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SOURCE_ID);
        if (null !== $n) {
            $pt = $type->getSourceId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSourceId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STOP_TEST_ON_FAIL);
        if (null !== $n) {
            $pt = $type->getStopTestOnFail();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStopTestOnFail($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALIDATE_PROFILE_ID);
        if (null !== $n) {
            $pt = $type->getValidateProfileId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValidateProfileId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE);
        if (null !== $n) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValue($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_WARNING_ONLY);
        if (null !== $n) {
            $pt = $type->getWarningOnly();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setWarningOnly($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('TestScriptAssert'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getLabel())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LABEL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDirection())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIRECTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPARE_TO_SOURCE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPARE_TO_SOURCE_EXPRESSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPARE_TO_SOURCE_PATH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContentType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefaultManualCompletion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_MANUAL_COMPLETION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExpression())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPRESSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getHeaderField())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HEADER_FIELD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMinimumId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MINIMUM_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAVIGATION_LINKS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOperator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPERATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPath())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequestMethod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST_METHOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequestURL())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResponse())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESPONSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResponseCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESPONSE_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSourceId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStopTestOnFail())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STOP_TEST_ON_FAIL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALIDATE_PROFILE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValue())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getWarningOnly())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_WARNING_ONLY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRequirement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REQUIREMENT);
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
        if (null !== ($v = $this->getDirection())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIRECTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionDirectionType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIRECTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompareToSourceId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompareToSourceExpression())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_EXPRESSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_EXPRESSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompareToSourcePath())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_PATH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPARE_TO_SOURCE_PATH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultManualCompletion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_MANUAL_COMPLETION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionManualCompletionType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_MANUAL_COMPLETION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExpression())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPRESSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPRESSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getHeaderField())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HEADER_FIELD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HEADER_FIELD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinimumId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MINIMUM_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MINIMUM_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNavigationLinks())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAVIGATION_LINKS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAVIGATION_LINKS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OPERATOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionOperatorType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OPERATOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPath())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequestMethod())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUEST_METHOD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTestScriptRequestMethodCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUEST_METHOD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequestURL())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUEST_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUEST_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESPONSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAssertionResponseTypes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESPONSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResponseCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESPONSE_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESPONSE_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSourceId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SOURCE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SOURCE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStopTestOnFail())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STOP_TEST_ON_FAIL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STOP_TEST_ON_FAIL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValidateProfileId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALIDATE_PROFILE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALIDATE_PROFILE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWarningOnly())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WARNING_ONLY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WARNING_ONLY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRequirement())) {
            $out->{self::FIELD_REQUIREMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REQUIREMENT}[] = $v;
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