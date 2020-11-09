<?php
/**
 * Created by PhpStorm.
 * User: kybora
 * Date: 11/8/2020
 * Time: 8:36 PM
 */

namespace src;

class PigLatin
{
    public function convert($word)
    {
        $firstLetter = substr($word, 1, 0);

        $newWord = substr($word, 1);
        $newWord .= $firstLetter . 'ay';

        return $newWord;
    }
}