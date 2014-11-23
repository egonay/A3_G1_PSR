<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 23/11/14
 * Time: 19:37
 */

namespace Php\Validator;


class IntegerValidator
{
    public static function equal($integer, $test)
    {
        if ($integer === $test)
        {
            return true;
        } else {
            return false;
        }

    }
} 