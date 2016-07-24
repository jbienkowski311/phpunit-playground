<?php
/**
 * Created by PhpStorm.
 * User: bienko
 * Date: 24.07.16
 * Time: 18:35
 */

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->calc = new Calculator;
    }

    public function correctValues()
    {
        return [
            [2, 2, 4],
            [2, -2, 0],
            [1, -2, -1],
            [-2, 1, -1],
            [2.5, 2.5, 5],
            [2.5, -2.5, 0]
        ];
    }

    public function invalidValues()
    {
        return [
            [null, null],
            ['a', 'b'],
            ['a', []]
        ];
    }

    /**
     * @dataProvider correctValues
     */
    public function testAddNumbers($x, $y, $sum)
    {
        $this->assertEquals($sum, $this->calc->add($x, $y));
    }

    /**
     * @dataProvider invalidValues
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionOnNonNumericParam()
    {
        $this->calc->add(null, null);
    }
}