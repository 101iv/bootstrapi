<?php
namespace App\Common;

class Helper
{
    public static function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
    {
        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));

        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }

        return $str;
    }

    public static function underscoreToCamelCase($string, $capitalizeFirstCharacter = false)
    {
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));

        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }

        return $str;
    }

    public static function generateRandomString($length=32)
    {
        $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
        $charsCount = strlen($chars);

        srand((double)microtime()*1000000);
        $i = 1;
        $token = '';

        while ($i <= $length)
        {
            $num = rand() % $charsCount;
            $tmp = substr($chars, $num, 1);
            $token .= $tmp;
            $i++;
        }

        return $token;
    }
}