<?php

function verifyPalindrome($word)
{
    $word = strtolower(str_replace(' ', '', $word));

    $reversedWord = strrev($word);

    return $word === $reversedWord;
}

function getPalindrome($word)
{
    if (verifyPalindrome($word)) {
        return 'Is palindrome';
    }

    return 'Nope';
}

$word1 = "php";
$word2 = "word";

echo getPalindrome($word1) . PHP_EOL;
echo getPalindrome($word2) . PHP_EOL;
