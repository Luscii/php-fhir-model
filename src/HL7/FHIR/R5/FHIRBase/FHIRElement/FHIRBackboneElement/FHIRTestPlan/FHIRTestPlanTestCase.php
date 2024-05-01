<?php declare(strict_types=1);

namespace HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan;

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
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger;
use HL7\FHIR\R5\FHIRIntegerPrimitive;
use HL7\FHIR\R5\FHIRStringPrimitive;
use HL7\FHIR\R5\PHPFHIRConfig;
use HL7\FHIR\R5\PHPFHIRConstants;
use HL7\FHIR\R5\PHPFHIRTypeInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R5\PHPFHIRXmlSerializableInterface;

/**
 * A plan for executing testing on an artifact or specifications.
 *
 * Class FHIRTestPlanTestCase
 * @package \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan
 */
class FHIRTestPlanTestCase extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SCOPE = 'scope';
    const FIELD_DEPENDENCY = 'dependency';
    const FIELD_TEST_RUN = 'testRun';
    const FIELD_TEST_DATA = 'testData';
    const FIELD_ASSERTION = 'assertion';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $sequence = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $scope = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[]
     */
    protected null|array $dependency = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[]
     */
    protected null|array $testRun = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[]
     */
    protected null|array $testData = [];
    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @var null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[]
     */
    protected null|array $assertion = [];

    /**
     * Validation map for fields in type TestPlan.TestCase
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRTestPlanTestCase Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_SCOPE])) {
            if (is_array($data[self::FIELD_SCOPE])) {
                foreach($data[self::FIELD_SCOPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addScope($v);
                    } else {
                        $this->addScope(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SCOPE] instanceof FHIRReference) {
                $this->addScope($data[self::FIELD_SCOPE]);
            } else {
                $this->addScope(new FHIRReference($data[self::FIELD_SCOPE]));
            }
        }
        if (isset($data[self::FIELD_DEPENDENCY])) {
            if (is_array($data[self::FIELD_DEPENDENCY])) {
                foreach($data[self::FIELD_DEPENDENCY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestPlanDependency1) {
                        $this->addDependency($v);
                    } else {
                        $this->addDependency(new FHIRTestPlanDependency1($v));
                    }
                }
            } elseif ($data[self::FIELD_DEPENDENCY] instanceof FHIRTestPlanDependency1) {
                $this->addDependency($data[self::FIELD_DEPENDENCY]);
            } else {
                $this->addDependency(new FHIRTestPlanDependency1($data[self::FIELD_DEPENDENCY]));
            }
        }
        if (isset($data[self::FIELD_TEST_RUN])) {
            if (is_array($data[self::FIELD_TEST_RUN])) {
                foreach($data[self::FIELD_TEST_RUN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestPlanTestRun) {
                        $this->addTestRun($v);
                    } else {
                        $this->addTestRun(new FHIRTestPlanTestRun($v));
                    }
                }
            } elseif ($data[self::FIELD_TEST_RUN] instanceof FHIRTestPlanTestRun) {
                $this->addTestRun($data[self::FIELD_TEST_RUN]);
            } else {
                $this->addTestRun(new FHIRTestPlanTestRun($data[self::FIELD_TEST_RUN]));
            }
        }
        if (isset($data[self::FIELD_TEST_DATA])) {
            if (is_array($data[self::FIELD_TEST_DATA])) {
                foreach($data[self::FIELD_TEST_DATA] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestPlanTestData) {
                        $this->addTestData($v);
                    } else {
                        $this->addTestData(new FHIRTestPlanTestData($v));
                    }
                }
            } elseif ($data[self::FIELD_TEST_DATA] instanceof FHIRTestPlanTestData) {
                $this->addTestData($data[self::FIELD_TEST_DATA]);
            } else {
                $this->addTestData(new FHIRTestPlanTestData($data[self::FIELD_TEST_DATA]));
            }
        }
        if (isset($data[self::FIELD_ASSERTION])) {
            if (is_array($data[self::FIELD_ASSERTION])) {
                foreach($data[self::FIELD_ASSERTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTestPlanAssertion) {
                        $this->addAssertion($v);
                    } else {
                        $this->addAssertion(new FHIRTestPlanAssertion($v));
                    }
                }
            } elseif ($data[self::FIELD_ASSERTION] instanceof FHIRTestPlanAssertion) {
                $this->addAssertion($data[self::FIELD_ASSERTION]);
            } else {
                $this->addAssertion(new FHIRTestPlanAssertion($data[self::FIELD_ASSERTION]));
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getSequence(): null|FHIRInteger
    {
        return $this->sequence;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence of test case - an ordinal number that indicates the order for the
     * present test case in the test plan.
     *
     * @param null|string|int|float|\HL7\FHIR\R5\FHIRIntegerPrimitive|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getScope(): null|array
    {
        return $this->scope;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $scope
     * @return static
     */
    public function addScope(null|FHIRReference $scope = null): self
    {
        if (null === $scope) {
            $scope = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->scope[] = $scope;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The scope or artifact covered by the case, when the individual test case is
     * associated with a testable artifact.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $scope
     * @return static
     */
    public function setScope(array $scope = []): self
    {
        if ([] !== $this->scope) {
            $this->_trackValuesRemoved(count($this->scope));
            $this->scope = [];
        }
        if ([] === $scope) {
            return $this;
        }
        foreach($scope as $v) {
            if ($v instanceof FHIRReference) {
                $this->addScope($v);
            } else {
                $this->addScope(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[]
     */
    public function getDependency(): null|array
    {
        return $this->dependency;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1 $dependency
     * @return static
     */
    public function addDependency(null|FHIRTestPlanDependency1 $dependency = null): self
    {
        if (null === $dependency) {
            $dependency = new FHIRTestPlanDependency1();
        }
        $this->_trackValueAdded();
        $this->dependency[] = $dependency;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The required criteria to execute the test case - e.g. preconditions, previous
     * tests.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanDependency1[] $dependency
     * @return static
     */
    public function setDependency(array $dependency = []): self
    {
        if ([] !== $this->dependency) {
            $this->_trackValuesRemoved(count($this->dependency));
            $this->dependency = [];
        }
        if ([] === $dependency) {
            return $this;
        }
        foreach($dependency as $v) {
            if ($v instanceof FHIRTestPlanDependency1) {
                $this->addDependency($v);
            } else {
                $this->addDependency(new FHIRTestPlanDependency1($v));
            }
        }
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[]
     */
    public function getTestRun(): null|array
    {
        return $this->testRun;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun $testRun
     * @return static
     */
    public function addTestRun(null|FHIRTestPlanTestRun $testRun = null): self
    {
        if (null === $testRun) {
            $testRun = new FHIRTestPlanTestRun();
        }
        $this->_trackValueAdded();
        $this->testRun[] = $testRun;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The actual test to be executed.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestRun[] $testRun
     * @return static
     */
    public function setTestRun(array $testRun = []): self
    {
        if ([] !== $this->testRun) {
            $this->_trackValuesRemoved(count($this->testRun));
            $this->testRun = [];
        }
        if ([] === $testRun) {
            return $this;
        }
        foreach($testRun as $v) {
            if ($v instanceof FHIRTestPlanTestRun) {
                $this->addTestRun($v);
            } else {
                $this->addTestRun(new FHIRTestPlanTestRun($v));
            }
        }
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[]
     */
    public function getTestData(): null|array
    {
        return $this->testData;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData $testData
     * @return static
     */
    public function addTestData(null|FHIRTestPlanTestData $testData = null): self
    {
        if (null === $testData) {
            $testData = new FHIRTestPlanTestData();
        }
        $this->_trackValueAdded();
        $this->testData[] = $testData;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test data used in the test case.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestData[] $testData
     * @return static
     */
    public function setTestData(array $testData = []): self
    {
        if ([] !== $this->testData) {
            $this->_trackValuesRemoved(count($this->testData));
            $this->testData = [];
        }
        if ([] === $testData) {
            return $this;
        }
        foreach($testData as $v) {
            if ($v instanceof FHIRTestPlanTestData) {
                $this->addTestData($v);
            } else {
                $this->addTestData(new FHIRTestPlanTestData($v));
            }
        }
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[]
     */
    public function getAssertion(): null|array
    {
        return $this->assertion;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion $assertion
     * @return static
     */
    public function addAssertion(null|FHIRTestPlanAssertion $assertion = null): self
    {
        if (null === $assertion) {
            $assertion = new FHIRTestPlanAssertion();
        }
        $this->_trackValueAdded();
        $this->assertion[] = $assertion;
        return $this;
    }

    /**
     * A plan for executing testing on an artifact or specifications.
     *
     * The test assertions - the expectations of test results from the execution of the
     * test case.
     *
     * @param \HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanAssertion[] $assertion
     * @return static
     */
    public function setAssertion(array $assertion = []): self
    {
        if ([] !== $this->assertion) {
            $this->_trackValuesRemoved(count($this->assertion));
            $this->assertion = [];
        }
        if ([] === $assertion) {
            return $this;
        }
        foreach($assertion as $v) {
            if ($v instanceof FHIRTestPlanAssertion) {
                $this->addAssertion($v);
            } else {
                $this->addAssertion(new FHIRTestPlanAssertion($v));
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
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getScope())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCOPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDependency())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEPENDENCY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTestRun())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEST_RUN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTestData())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEST_DATA, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAssertion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ASSERTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCOPE])) {
            $v = $this->getScope();
            foreach($validationRules[self::FIELD_SCOPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_SCOPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCOPE])) {
                        $errs[self::FIELD_SCOPE] = [];
                    }
                    $errs[self::FIELD_SCOPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDENCY])) {
            $v = $this->getDependency();
            foreach($validationRules[self::FIELD_DEPENDENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_DEPENDENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDENCY])) {
                        $errs[self::FIELD_DEPENDENCY] = [];
                    }
                    $errs[self::FIELD_DEPENDENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEST_RUN])) {
            $v = $this->getTestRun();
            foreach($validationRules[self::FIELD_TEST_RUN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_TEST_RUN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEST_RUN])) {
                        $errs[self::FIELD_TEST_RUN] = [];
                    }
                    $errs[self::FIELD_TEST_RUN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEST_DATA])) {
            $v = $this->getTestData();
            foreach($validationRules[self::FIELD_TEST_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_TEST_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEST_DATA])) {
                        $errs[self::FIELD_TEST_DATA] = [];
                    }
                    $errs[self::FIELD_TEST_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTION])) {
            $v = $this->getAssertion();
            foreach($validationRules[self::FIELD_ASSERTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_PLAN_DOT_TEST_CASE, self::FIELD_ASSERTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTION])) {
                        $errs[self::FIELD_ASSERTION] = [];
                    }
                    $errs[self::FIELD_ASSERTION][$rule] = $err;
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
     * @param null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase $type
     * @param null|int|\HL7\FHIR\R5\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestPlan\FHIRTestPlanTestCase
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
        } else if (!($type instanceof FHIRTestPlanTestCase)) {
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
            if (self::FIELD_SEQUENCE === $n->nodeName) {
                $type->setSequence(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_SCOPE === $n->nodeName) {
                $type->addScope(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DEPENDENCY === $n->nodeName) {
                $type->addDependency(FHIRTestPlanDependency1::xmlUnserialize($n));
            } elseif (self::FIELD_TEST_RUN === $n->nodeName) {
                $type->addTestRun(FHIRTestPlanTestRun::xmlUnserialize($n));
            } elseif (self::FIELD_TEST_DATA === $n->nodeName) {
                $type->addTestData(FHIRTestPlanTestData::xmlUnserialize($n));
            } elseif (self::FIELD_ASSERTION === $n->nodeName) {
                $type->addAssertion(FHIRTestPlanAssertion::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSequence($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('TestPlanTestCase'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getScope())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SCOPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDependency())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEPENDENCY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTestRun())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TEST_RUN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTestData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TEST_DATA);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAssertion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ASSERTION);
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
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getScope())) {
            $out->{self::FIELD_SCOPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SCOPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDependency())) {
            $out->{self::FIELD_DEPENDENCY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEPENDENCY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTestRun())) {
            $out->{self::FIELD_TEST_RUN} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TEST_RUN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTestData())) {
            $out->{self::FIELD_TEST_DATA} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TEST_DATA}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAssertion())) {
            $out->{self::FIELD_ASSERTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ASSERTION}[] = $v;
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