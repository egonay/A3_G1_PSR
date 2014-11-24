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
    public static function equal($integer, $test){
        return $integer === $test;
    }

    public static function above($integer, $test)
    {
        return $integer > $test;
    }

    public static function less($integer, $test)
    {
        return $integer < $test;
    }

    public static function between($integer, $test, $test2)
    {
        return $test < $integer && $integer < $test2;
    }

    public static function lessThanOrEqualTo($test)
    {
        return $test <= 0;
    }

    public static function moreThanOrEqualTo($test)
    {
        return $test >= 0;
    }
} 