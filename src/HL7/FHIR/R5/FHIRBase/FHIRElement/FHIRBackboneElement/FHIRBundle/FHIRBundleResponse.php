<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri;
use HL7\FHIR\R5\FHIRInstantPrimitive;
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
 * A container for a collection of resources.
 *
 * Class FHIRBundleResponse
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleResponse extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE;

    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_EXT = '_location';
    const FIELD_ETAG = 'etag';
    const FIELD_ETAG_EXT = '_etag';
    const FIELD_LAST_MODIFIED = 'lastModified';
    const FIELD_LAST_MODIFIED_EXT = '_lastModified';
    const FIELD_OUTCOME = 'outcome';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $status = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The location header created by processing this operation, populated if the
     * operation returns a location.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $location = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Etag for the resource, if the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $etag = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $lastModified = null;
    /**
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @var null|\HL7\FHIR\R5\|PHPFHIRContainedTypeInterface
     */
    protected null|PHPFHIRContainedTypeInterface $outcome = null;

    /**
     * Validation map for fields in type Bundle.Response
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRBundleResponse Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LOCATION]) || isset($data[self::FIELD_LOCATION_EXT])) {
            $value = $data[self::FIELD_LOCATION] ?? null;
            $ext = (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT])) ? $data[self::FIELD_LOCATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setLocation($value);
                } else if (is_array($value)) {
                    $this->setLocation(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setLocation(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLocation(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_ETAG]) || isset($data[self::FIELD_ETAG_EXT])) {
            $value = $data[self::FIELD_ETAG] ?? null;
            $ext = (isset($data[self::FIELD_ETAG_EXT]) && is_array($data[self::FIELD_ETAG_EXT])) ? $data[self::FIELD_ETAG_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setEtag($value);
                } else if (is_array($value)) {
                    $this->setEtag(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setEtag(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEtag(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_MODIFIED]) || isset($data[self::FIELD_LAST_MODIFIED_EXT])) {
            $value = $data[self::FIELD_LAST_MODIFIED] ?? null;
            $ext = (isset($data[self::FIELD_LAST_MODIFIED_EXT]) && is_array($data[self::FIELD_LAST_MODIFIED_EXT])) ? $data[self::FIELD_LAST_MODIFIED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setLastModified($value);
                } else if (is_array($value)) {
                    $this->setLastModified(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setLastModified(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastModified(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if (is_object($data[self::FIELD_OUTCOME])) {
                if ($data[self::FIELD_OUTCOME] instanceof PHPFHIRContainedTypeInterface) {
                    $this->setOutcome($data[self::FIELD_OUTCOME]);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleResponse - Field "outcome" must be an object implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($data[self::FIELD_OUTCOME])
                    ));
                }
            } elseif (is_array($data[self::FIELD_OUTCOME])) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_OUTCOME]);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleResponse - Unable to determine class for field "outcome" from value: %s',
                        json_encode($data[self::FIELD_OUTCOME])
                    ));
                }
                $this->setOutcome(new $typeClass($data[self::FIELD_OUTCOME]));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRBundleResponse - Unable to determine class for field "outcome" from value: %s',
                    json_encode($data[self::FIELD_OUTCOME])
                ));
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
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getStatus(): null|FHIRString
    {
        return $this->status;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $status
     * @return static
     */
    public function setStatus(null|string|FHIRStringPrimitive|FHIRString $status = null): self
    {
        if (null !== $status && !($status instanceof FHIRString)) {
            $status = new FHIRString($status);
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The location header created by processing this operation, populated if the
     * operation returns a location.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getLocation(): null|FHIRUri
    {
        return $this->location;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The location header created by processing this operation, populated if the
     * operation returns a location.
     *
     * @param null|string|\HL7\FHIR\R5\FHIRUriPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRUri $location
     * @return static
     */
    public function setLocation(null|string|FHIRUriPrimitive|FHIRUri $location = null): self
    {
        if (null !== $location && !($location instanceof FHIRUri)) {
            $location = new FHIRUri($location);
        }
        $this->_trackValueSet($this->location, $location);
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Etag for the resource, if the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getEtag(): null|FHIRString
    {
        return $this->etag;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Etag for the resource, if the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @param null|string|\HL7\FHIR\R5\FHIRStringPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRString $etag
     * @return static
     */
    public function setEtag(null|string|FHIRStringPrimitive|FHIRString $etag = null): self
    {
        if (null !== $etag && !($etag instanceof FHIRString)) {
            $etag = new FHIRString($etag);
        }
        $this->_trackValueSet($this->etag, $etag);
        $this->etag = $etag;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getLastModified(): null|FHIRInstant
    {
        return $this->lastModified;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R5\FHIRInstantPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInstant $lastModified
     * @return static
     */
    public function setLastModified(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastModified = null): self
    {
        if (null !== $lastModified && !($lastModified instanceof FHIRInstant)) {
            $lastModified = new FHIRInstant($lastModified);
        }
        $this->_trackValueSet($this->lastModified, $lastModified);
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @return null|\HL7\FHIR\R5\|PHPFHIRContainedTypeInterface
     */
    public function getOutcome(): null|PHPFHIRContainedTypeInterface
    {
        return $this->outcome;
    }

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @param null|\HL7\FHIR\R5\PHPFHIRContainedTypeInterface $outcome
     * @return static
     */
    public function setOutcome(?PHPFHIRContainedTypeInterface $outcome = null): self
    {
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEtag())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ETAG] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_MODIFIED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ETAG])) {
            $v = $this->getEtag();
            foreach($validationRules[self::FIELD_ETAG] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_ETAG, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ETAG])) {
                        $errs[self::FIELD_ETAG] = [];
                    }
                    $errs[self::FIELD_ETAG][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_MODIFIED])) {
            $v = $this->getLastModified();
            foreach($validationRules[self::FIELD_LAST_MODIFIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_LAST_MODIFIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_MODIFIED])) {
                        $errs[self::FIELD_LAST_MODIFIED] = [];
                    }
                    $errs[self::FIELD_LAST_MODIFIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
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
        } else if (!($type instanceof FHIRBundleResponse)) {
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
            if (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LOCATION === $n->nodeName) {
                $type->setLocation(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_ETAG === $n->nodeName) {
                $type->setEtag(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_MODIFIED === $n->nodeName) {
                $type->setLastModified(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_OUTCOME === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->setOutcome(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STATUS);
        if (null !== $n) {
            $pt = $type->getStatus();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStatus($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LOCATION);
        if (null !== $n) {
            $pt = $type->getLocation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLocation($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ETAG);
        if (null !== $n) {
            $pt = $type->getEtag();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEtag($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_MODIFIED);
        if (null !== $n) {
            $pt = $type->getLastModified();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastModified($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('BundleResponse'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLocation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEtag())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ETAG);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastModified())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_MODIFIED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOutcome())) {
            $e2 = $element->ownerDocument->createElement(self::FIELD_OUTCOME);
            $element->appendChild($e2);
            $e3 = $element->ownerDocument->createElement($v->_getFHIRTypeName());
            $e2->appendChild($e3);
            $v->xmlSerialize($e3);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOCATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOCATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEtag())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ETAG} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ETAG_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_MODIFIED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_MODIFIED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = $v;
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