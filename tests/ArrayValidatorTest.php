<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:42
 */

namespace Tests\Php\Validator;

use Php\Validator\ArrayValidator;


/**
 * Class ArrayValidatorTest
 * @package Tests\Php\Validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmptyTrue()
    {
        $array = array();
        $result = ArrayValidator::isEmpty($array);

        $this->assertTrue($result);
    }

    public function testIsEmptyFalse()
    {
        $array = array("Hello", "World");
        $result = ArrayValidator::isEmpty($array);

        $this->assertFalse($result);
    }
}