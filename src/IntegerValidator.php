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
        }
    }

    public static function above($integer, $test)
    {
        if ($integer > $test)
        {
            return true;
        }
    }

    public static function less($integer, $test)
    {
        if ($integer < $test)
        {
            return true;
        }
    }

    public static function between($integer, $test, $test2)
    {
        if ($test < $integer && $integer < $test2)
        {
            return true;
        }
    }

    public static function lessThanOrEqualTo($test)
    {
        if ($test <= 0)
        {
            return true;
        }
    }

    public static function moreThanOrEqualTo($test)
    {
        if ($test >= 0)
        {
            return true;
        }
    }
} 