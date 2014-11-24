<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 15:07
 */

namespace Php\Validator;


class StringValidator
{
    public static function length($string, $test)
    {
        return strlen($string) === $test;
    }

    public static function lengthIsMoreThan($string, $test)
    {
        return strlen($string) > $test;
    }

    public static function lengthIsLessThan($string, $test)
    {
        return strlen($string) < $test;
    }

    public static function lengthIsBetween($string, $test, $test2)
    {
        return $test < strlen($string) && strlen($string) < $test2;
    }

    public static function noSpaceAtBeginningAndEnd($string)
    {
        $string2 = trim($string, ' ');
        return $string === $string2;
    }

    public static function noSpaceAtAll($string)
    {
        $string2 = trim($string);
        return $string === $string2;
    }
}