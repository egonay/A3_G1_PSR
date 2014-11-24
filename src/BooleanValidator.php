<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:13
 */

namespace Php\Validator;


class BooleanValidator
{
    public static function isTrue($boolean){
        return $boolean === true;
    }

    public static function isFalse($boolean){
        return $boolean === true;
    }
} 