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

/**
 * Interface PHPFHIRXmlSerializableConfigInterface
 * @package \HL7\FHIR\DSTU1
 */
interface PHPFHIRXmlSerializableConfigInterface
{
    public const DEFAULT_LIBXML_OPTS = LIBXML_NONET | LIBXML_PARSEHUGE | LIBXML_COMPACT;
    public const DEFAULT_DOM_VERSION = '1.0';
    public const DEFAULT_ENCODING = 'UTF-8';
    public const DEFAULT_PRESERVE_WHITESPACE = true;
    public const DEFAULT_FORMAT_OUTPUT = false;

    /**
     * Must construct a new \DOMDocument instance based on current configuration
     *
     * @return \DOMDocument
     */
    public function newDOMDocument(): \DOMDocument;

    /**
     * Sets the option flags to provide to libxml when serializing and unserializing XML
     *
     * @param int $libxmlOpts
     * @return static
     */
    public function setLibxmlOpts(int $libxmlOpts): self;

    /**
     * Must return the set libxml option flags
     *
     * @return int
     */
    public function getLibxmlOpts(): int;

    /**
     * @param string $domVersion
     * @return static
     */
    public function setDOMVersion(string $domVersion): self;

    /**
     * @return string
     */
    public function getDOMVersion(): string;

    /**
     * @param string $encoding
     * @return static
     */
    public function setEncoding(string $encoding): self;

    /**
     * @return string
     */
    public function getEncoding(): string;

    /**
     * Sets whether or not to preserve whitespace when rendering XML
     *
     * @param bool $preserveWhitespace
     * @return static
     */
    public function setPreserveWhitespace(bool $preserveWhitespace): self;

    /**
     * @return bool
     */
    public function getPreserveWhitespace(): bool;

    /**
     * @param bool $formatOutput
     * @return static
     */
    public function setFormatOutput(bool $formatOutput): self;

    /**
     * @return bool
     */
    public function getFormatOutput(): bool;
}
