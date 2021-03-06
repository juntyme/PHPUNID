<?php

namespace parte_2\Test\Validators;

use PHPUnit\Framework\TestCase;

class NotEmptyValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider valueProvider
     */
    public function testIsValid($value, $expectedResult)
    {
        $dataProvider = [
            '' => false,
            'foo' => true
        ];

        foreach ($dataProvider as $value => $expectedResult) {
            $notEmptyValidador = new NotEmptyValidatorTest($value);

            $isValid = $notEmptyValidador->isValid();

            $this->assertEquals($expectedResult, $isValid);
        }
    }

    public function valueProvider()
    {
        return [
            'sould_BeValid_When_ValueIsNotEmpty' => ['value' => 'foo', 'expectedResul' => true],
            'souldNotBeValidWhenValueIsNotEmpty' => ['value' => '', 'expectedResul' => false]
        ];
    }

    // public function testShouldBeValidWhenValueIsEmpty()
    // {
    //     $emptyValue = "foo";
    //     $notEmptyValidador = new NotEmptyValidatorTest();

    //     $isValid = $notEmptyValidador->isValid();

    //     $this->assertFalse($isValid);
    // }
}
