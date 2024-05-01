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
    * Trait PHPFHIRXmlSerializableConfigTrait
    * @package \HL7\FHIR\R5
    */
trait PHPFHIRXmlSerializableConfigTrait
{
    /** @var int */
    private int $libxmlOpts;
    /** @var string */
    private string $domVersion;
    /** @var string */
    private string $encoding;
    /** @var bool */
    private bool $preserveWhitespace;
    /** @var bool */
    private bool $formatOutput;

    /**
     * @return \DOMDocument;
     */
    public function newDOMDocument(): \DOMDocument
    {
        $dom = new \DOMDocument($this->getDOMVersion(), $this->getEncoding());
        $dom->preserveWhiteSpace = $this->getPreserveWhitespace();
        $dom->formatOutput = $this->getFormatOutput();
        return $dom;
    }

    /**
     * Sets the option flags to provide to libxml when serializing and unserializing XML
     *
     * @param int $libxmlOpts
     * @return static
     */
    public function setLibxmlOpts(int $libxmlOpts): self
    {
        $this->libxmlOpts = $libxmlOpts;
        return $this;
    }

    /**
     * Returns set libxml option flags
     *
     * @return int
     */
    public function getLibxmlOpts(): int
    {
        return $this->libxmlOpts ?? PHPFHIRXmlSerializableConfigInterface::DEFAULT_LIBXML_OPTS;
    }

    /**
     * @param string $domVersion
     * @return static
     */
    public function setDOMVersion(string $domVersion): self
    {
        $this->domVersion = $domVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getDOMVersion(): string
    {
        return $this->domVersion ?? PHPFHIRXmlSerializableConfigInterface::DEFAULT_DOM_VERSION;
    }

    /**
     * @param string $encoding
     * @return static
     */
    public function setEncoding(string $encoding): self
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding ?? PHPFHIRXmlSerializableConfigInterface::DEFAULT_ENCODING;
    }

    /**
     * Sets whether or not to preserve whitespace when rendering XML
     *
     * @param bool $preserveWhitespace
     * @return static
     */
    public function setPreserveWhitespace(bool $preserveWhitespace): self
    {
        $this->preserveWhitespace = $preserveWhitespace;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreserveWhitespace(): bool
    {
        return $this->preserveWhitespace ?? PHPFHIRXmlSerializableConfigInterface::DEFAULT_PRESERVE_WHITESPACE;
    }

    /**
     * @param bool $formatOutput
     * @return static
     */
    public function setFormatOutput(bool $formatOutput): self
    {
        $this->formatOutput = $formatOutput;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFormatOutput(): bool
    {
        return $this->formatOutput ?? PHPFHIRXmlSerializableConfigInterface::DEFAULT_FORMAT_OUTPUT;
    }
}
