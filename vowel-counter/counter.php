<?php

function vowelCount($word)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}


$sentence = "My name is Dilson";
$result = vowelCount($sentence);
echo "Amount of vowels: $result";
