<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 25/11/14
 * Time: 08:11
 */

namespace Php\Validator;


class DateTimeValidator
{
    public static function isDateNow($now, $date){
        return $now === $date;
    }


} 