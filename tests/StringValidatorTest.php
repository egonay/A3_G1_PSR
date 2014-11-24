<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 15:08
 */

namespace Tests\Php\Validator;

use Php\Validator\StringValidator;


class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testStringValidatorLength()
    {
        $test = 50;
        $result = StringValidator::length("Bonjour tout le monde!", $test);

        $this->assertFalse($result);
    }

    public function testStringValidatorLengthIsMoreThan()
    {
        $test = 46;
        $result = StringValidator::lengthIsMoreThan("Bonjour tout le monde!", $test);

        $this->assertFalse($result);
    }

    public function testStringValidatorLengthIsLessThan()
    {
        $test = 5;
        $result = StringValidator::lengthIsMoreThan("Bonjour tout le monde!", $test);

        $this->assertFalse($result);
    }

    public function testStringValidatorLengthIsBetween()
    {
        $test = 30;
        $test2 = 47;
        $result = StringValidator::lengthIsBetween("Bonjour tout le monde!", $test, $test2);

        $this->assertFalse($result);
    }

    public function testNoSpaceAtBeginningAndEnd()
    {
        $result = StringValidator::noSpaceAtBeginningAndEnd("Bonjour tout le monde!");

        $this->assertFalse($result);
    }
} 