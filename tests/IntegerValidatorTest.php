<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 23/11/14
 * Time: 19:48
 */

namespace Tests\Php\Validator;

use Php\Validator\IntegerValidator;


/**
 * Class IntegerValidatorTest
 * @package Tests\Php\Validator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIntegerValidatorEqualFalse()
    {
        $test = 8;
        $result = IntegerValidator::equal($test, 100);

        $this->assertFalse($result);
    }


    public function testIntegerValidatorAboveFalse()
    {
        $test = 8;
        $result = IntegerValidator::above(5, $test);

        $this->assertFalse($result);
    }

    public function testIntegerValidatorLessFalse()
    {
        $test = 8;
        $result = IntegerValidator::less(19, $test);

        $this->assertFalse($result);
    }


} 