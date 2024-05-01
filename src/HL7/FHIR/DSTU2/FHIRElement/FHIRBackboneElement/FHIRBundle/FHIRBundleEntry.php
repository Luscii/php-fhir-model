<?php declare(strict_types=1);

namespace HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle;

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

use HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\DSTU2\FHIRElement\FHIRExtension;
use HL7\FHIR\DSTU2\FHIRElement\FHIRUri;
use HL7\FHIR\DSTU2\FHIRIdPrimitive;
use HL7\FHIR\DSTU2\FHIRUriPrimitive;
use HL7\FHIR\DSTU2\PHPFHIRConfig;
use HL7\FHIR\DSTU2\PHPFHIRConstants;
use HL7\FHIR\DSTU2\PHPFHIRContainedTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeInterface;
use HL7\FHIR\DSTU2\PHPFHIRTypeMap;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\DSTU2\PHPFHIRXmlSerializableInterface;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleEntry
 * @package \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY;

    const FIELD_LINK = 'link';
    const FIELD_FULL_URL = 'fullUrl';
    const FIELD_FULL_URL_EXT = '_fullUrl';
    const FIELD_RESOURCE = 'resource';
    const FIELD_SEARCH = 'search';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    protected null|array $link = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. This must be provided for all resources. The
     * fullUrl SHALL not disagree with the id in the resource. The fullUrl is a version
     * independent reference to the resource.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $fullUrl = null;
    /**
     * The Resources for the entry.
     *
     * @var null|\HL7\FHIR\DSTU2\|PHPFHIRContainedTypeInterface
     */
    protected null|PHPFHIRContainedTypeInterface $resource = null;
    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    protected null|FHIRBundleSearch $search = null;
    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    protected null|FHIRBundleRequest $request = null;
    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @var null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    protected null|FHIRBundleResponse $response = null;

    /**
     * Validation map for fields in type Bundle.Entry
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRBundleEntry Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBundleLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRBundleLink($v));
                    }
                }
            } elseif ($data[self::FIELD_LINK] instanceof FHIRBundleLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRBundleLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_FULL_URL]) || isset($data[self::FIELD_FULL_URL_EXT])) {
            $value = $data[self::FIELD_FULL_URL] ?? null;
            $ext = (isset($data[self::FIELD_FULL_URL_EXT]) && is_array($data[self::FIELD_FULL_URL_EXT])) ? $data[self::FIELD_FULL_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setFullUrl($value);
                } else if (is_array($value)) {
                    $this->setFullUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setFullUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFullUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_object($data[self::FIELD_RESOURCE])) {
                if ($data[self::FIELD_RESOURCE] instanceof PHPFHIRContainedTypeInterface) {
                    $this->setResource($data[self::FIELD_RESOURCE]);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleEntry - Field "resource" must be an object implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($data[self::FIELD_RESOURCE])
                    ));
                }
            } elseif (is_array($data[self::FIELD_RESOURCE])) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_RESOURCE]);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleEntry - Unable to determine class for field "resource" from value: %s',
                        json_encode($data[self::FIELD_RESOURCE])
                    ));
                }
                $this->setResource(new $typeClass($data[self::FIELD_RESOURCE]));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRBundleEntry - Unable to determine class for field "resource" from value: %s',
                    json_encode($data[self::FIELD_RESOURCE])
                ));
            }
        }
        if (isset($data[self::FIELD_SEARCH])) {
            if ($data[self::FIELD_SEARCH] instanceof FHIRBundleSearch) {
                $this->setSearch($data[self::FIELD_SEARCH]);
            } else {
                $this->setSearch(new FHIRBundleSearch($data[self::FIELD_SEARCH]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRBundleRequest) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRBundleRequest($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRBundleResponse) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRBundleResponse($data[self::FIELD_RESPONSE]));
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
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink(): null|array
    {
        return $this->link;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return static
     */
    public function addLink(null|FHIRBundleLink $link = null): self
    {
        if (null === $link) {
            $link = new FHIRBundleLink();
        }
        $this->_trackValueAdded();
        $this->link[] = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @param \HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @return static
     */
    public function setLink(array $link = []): self
    {
        if ([] !== $this->link) {
            $this->_trackValuesRemoved(count($this->link));
            $this->link = [];
        }
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRBundleLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRBundleLink($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. This must be provided for all resources. The
     * fullUrl SHALL not disagree with the id in the resource. The fullUrl is a version
     * independent reference to the resource.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getFullUrl(): null|FHIRUri
    {
        return $this->fullUrl;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. This must be provided for all resources. The
     * fullUrl SHALL not disagree with the id in the resource. The fullUrl is a version
     * independent reference to the resource.
     *
     * @param null|string|\HL7\FHIR\DSTU2\FHIRUriPrimitive|\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $fullUrl
     * @return static
     */
    public function setFullUrl(null|string|FHIRUriPrimitive|FHIRUri $fullUrl = null): self
    {
        if (null !== $fullUrl && !($fullUrl instanceof FHIRUri)) {
            $fullUrl = new FHIRUri($fullUrl);
        }
        $this->_trackValueSet($this->fullUrl, $fullUrl);
        $this->fullUrl = $fullUrl;
        return $this;
    }

    /**
     * The Resources for the entry.
     *
     * @return null|\HL7\FHIR\DSTU2\|PHPFHIRContainedTypeInterface
     */
    public function getResource(): null|PHPFHIRContainedTypeInterface
    {
        return $this->resource;
    }

    /**
     * The Resources for the entry.
     *
     * @param null|\HL7\FHIR\DSTU2\PHPFHIRContainedTypeInterface $resource
     * @return static
     */
    public function setResource(?PHPFHIRContainedTypeInterface $resource = null): self
    {
        $this->_trackValueSet($this->resource, $resource);
        $this->resource = $resource;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    public function getSearch(): null|FHIRBundleSearch
    {
        return $this->search;
    }

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch $search
     * @return static
     */
    public function setSearch(null|FHIRBundleSearch $search = null): self
    {
        if (null === $search) {
            $search = new FHIRBundleSearch();
        }
        $this->_trackValueSet($this->search, $search);
        $this->search = $search;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function getRequest(): null|FHIRBundleRequest
    {
        return $this->request;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $request
     * @return static
     */
    public function setRequest(null|FHIRBundleRequest $request = null): self
    {
        if (null === $request) {
            $request = new FHIRBundleRequest();
        }
        $this->_trackValueSet($this->request, $request);
        $this->request = $request;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function getResponse(): null|FHIRBundleResponse
    {
        return $this->response;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction.
     *
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $response
     * @return static
     */
    public function setResponse(null|FHIRBundleResponse $response = null): self
    {
        if (null === $response) {
            $response = new FHIRBundleResponse();
        }
        $this->_trackValueSet($this->response, $response);
        $this->response = $response;
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
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFullUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FULL_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSearch())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEARCH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FULL_URL])) {
            $v = $this->getFullUrl();
            foreach($validationRules[self::FIELD_FULL_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_FULL_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FULL_URL])) {
                        $errs[self::FIELD_FULL_URL] = [];
                    }
                    $errs[self::FIELD_FULL_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH])) {
            $v = $this->getSearch();
            foreach($validationRules[self::FIELD_SEARCH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_SEARCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH])) {
                        $errs[self::FIELD_SEARCH] = [];
                    }
                    $errs[self::FIELD_SEARCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE])) {
            $v = $this->getResponse();
            foreach($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
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
     * @param null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $type
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
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
        } else if (!($type instanceof FHIRBundleEntry)) {
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
            if (self::FIELD_LINK === $n->nodeName) {
                $type->addLink(FHIRBundleLink::xmlUnserialize($n));
            } elseif (self::FIELD_FULL_URL === $n->nodeName) {
                $type->setFullUrl(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->setResource(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_SEARCH === $n->nodeName) {
                $type->setSearch(FHIRBundleSearch::xmlUnserialize($n));
            } elseif (self::FIELD_REQUEST === $n->nodeName) {
                $type->setRequest(FHIRBundleRequest::xmlUnserialize($n));
            } elseif (self::FIELD_RESPONSE === $n->nodeName) {
                $type->setResponse(FHIRBundleResponse::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FULL_URL);
        if (null !== $n) {
            $pt = $type->getFullUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFullUrl($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\DSTU2\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('BundleEntry'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LINK);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getFullUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FULL_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResource())) {
            $e2 = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
            $element->appendChild($e2);
            $e3 = $element->ownerDocument->createElement($v->_getFHIRTypeName());
            $e2->appendChild($e3);
            $v->xmlSerialize($e3);
        }
        if (null !== ($v = $this->getSearch())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEARCH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequest())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResponse())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESPONSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getLink())) {
            $out->{self::FIELD_LINK} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LINK}[] = $v;
            }
        }
        if (null !== ($v = $this->getFullUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FULL_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FULL_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $out->{self::FIELD_RESOURCE} = $v;
        }
        if (null !== ($v = $this->getSearch())) {
            $out->{self::FIELD_SEARCH} = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $out->{self::FIELD_RESPONSE} = $v;
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