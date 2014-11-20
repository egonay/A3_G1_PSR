<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 18/11/2014
 * Time: 11:57
 */

namespace Web1\StringGenerator;

/**
 * Class PasswordGenerator
 * @package Web1\StringGenerator
 */
class PasswordGenerator
{
    const PASSWORD_EASY   = 0;
    const PASSWORD_MEDIUM = 1;
    const PASSWORD_HARD   = 2;

    /**
     * @var string
     */
    private static $passwordCharEasy = 'abcdefghijklmnopqrstuvwxyz';
    /**
     * @var string
     */
    private static $passwordCharMedium = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    /**
     * @var string
     */
    private static $passwordCharHard = '#=!$£*+-.éè@';
    /**
     * @var int
     */
    private static $passwordDefaultLenght = 10;


    /**
     * @param null $number
     * @param int $strength
     * @return string
     * @throws \Exception
     */
    public static  function getRandomString($number = null, $strength = self::PASSWORD_MEDIUM)
    {
        if (false === in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
        ]))
            throw new \Exception('Bad strength!');

        $length   = (null === $number) //aligner les "egal" pour eviter les conflits avec scrutinizer
            ? self::$passwordDefaultLenght
            : (0 === (int)$number)
                ? self::$passwordDefaultLenght
                : (int)$number;

        $password = $char = '';

        switch ($strength) {
            case self::PASSWORD_EASY:
                $char = self::$passwordCharEasy;
                break;
            case self::PASSWORD_MEDIUM:
                $char = self::$passwordCharEasy.self::$passwordCharMedium;
                break;
            case self::PASSWORD_HARD:
                $char = self::$passwordCharEasy.self::$passwordCharMedium.self::$passwordCharHard;
                break;
        }
        for ($i = 0; $i < $length; $i++) {
            $password .= mb_substr($char, mt_rand(0, (mb_strlen($char)-1)), 1);
        }
        return $password;
    }
}