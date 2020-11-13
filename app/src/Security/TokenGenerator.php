<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-13
 * Time: 14:07
 */

namespace App\Security;


class TokenGenerator
{
    const ALPHABET = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    public function getRandomSecureToken(int $length = 30): string
    {
        $token = '';
        $maxNumber = strlen(self::ALPHABET);

        for ($i = 0; $i < $length; $i++) {
            $token .= self::ALPHABET[random_int(0, $maxNumber - 1)];
        }

        return $token;
    }
}