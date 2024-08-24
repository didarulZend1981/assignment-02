<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u'];
$vowelsString = implode('', $vowels);
$pattern = sprintf('/[%s]/i', $vowelsString);

foreach ($strings as $string) {
    
    $vowelCount = preg_match_all($pattern, $string);
    $reversedString = strrev($string);
    echo "Original String: $string, 
    Vowel Count: $vowelCount\n, 
    Reversed String: $reversedString<br>";

}