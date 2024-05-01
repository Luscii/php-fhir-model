<?php declare(strict_types=1);

namespace HL7\FHIR\R5;

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

/**
 * XHTML type used in special cases
 *
 * Class FHIRXhtml
 * @package \HL7\FHIR\R5
 */
class FHIRXhtml implements PHPFHIRXmlSerializableInterface, \JsonSerializable
{
    use PHPFHIRChangeTrackingTrait,
        PHPFHIRXmlNamespaceTrait;

    const _NOISE_NODES = ['html', 'head', 'body'];

    /** @var null|\DOMElement */
    private null|\DOMElement $_node = null;

    /**
     * Xhtml Constructor
     * @param null|string|\DOMNode $node
     * @param null|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config
     */
    public function __construct(null|string|\DOMNode $node = null, null|PHPFHIRXmlSerializableConfigInterface $config = null)
    {
        $this->setNode($node, $config);
    }

    /**
     * @return null|\DOMNode
     */
    public function getNode(): null|\DOMNode
    {
        return $this->_node;
    }

    /**
     * @param null|string|\DOMNode $node
     * @param null|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config
     * @return static
     */
    public function setNode(null|string|\DOMNode $node, null|PHPFHIRXmlSerializableConfigInterface $config = null): self
    {
        if (null === $node) {
            $this->_trackValueSet($this->_node, null);
            $this->_node = null;
            return $this;
        }
        if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        $dom = $config->newDOMDocument();
        if (is_string($node)) {
            $dom->loadHTML($node);
        } else if ($node instanceof \DOMDocument) {
            $dom->appendChild($dom->importNode($node->documentElement, true));
        } else {
            $dom->appendChild($dom->importNode($node, true));
        }
        $newNode = $dom->documentElement;
        while (null !== $newNode) {
            if (in_array(strtolower($newNode->nodeName), self::_NOISE_NODES, true)) {
                $newNode = $newNode->firstChild;
            } else {
                break;
            }
        }
        if ('' !== ($ens = (string)$newNode?->namespaceURI)) {
            $this->_setFHIRXMLNamespace($ens);
        }
        $this->_trackValueSet($this->_node, $newNode);
        $this->_node = $newNode;
        return $this;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\R5\FHIRXhtml $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRXhtml
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
        } else if (!($type instanceof FHIRXhtml)) {
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
        $type->setNode($element);
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DOMElement
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('Xhtml'), $libxmlOpts);
            $element = $dom->documentElement;
        } else if ('' !== ($ns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $ns);
        }
        $node = $this->getNode();
        if (null === $node) {
            return $element;
        }
        for ($i = 0; $i < $node->attributes->length; $i++) {
            $attr = $node->attributes->item($i);
            $element->setAttribute($attr->nodeName, $attr->nodeValue);
        }
        for ($i = 0; $i < $node->childNodes->length; $i++) {
            $element->appendChild($element->ownerDocument->importNode($node->childNodes->item($i), true));
        }
        return $element;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize(): mixed
    {
        $node = $this->getNode();
        return $node?->ownerDocument->saveXML($node);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->jsonSerialize() ?? '';
    }
}