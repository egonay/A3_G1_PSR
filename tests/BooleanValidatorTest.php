<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:18
 */

namespace Tests\Php\Validator;

use Php\Validator\BooleanValidator;


class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testBooleanValidatorIsTrue()
    {
        $result = BooleanValidator::isTrue(false);

        $this->assertFalse($result);
    }

    public function testBooleanValidatorIsFalse()
    {
        $result = BooleanValidator::isFalse(false);

        $this->assertFalse($result);
    }
} 