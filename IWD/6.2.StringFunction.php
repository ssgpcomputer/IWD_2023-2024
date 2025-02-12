<?php

$Str = "HELLO WORLD!";

// Check if string contains lowercase letters
$check = 0;

// Convert string to an array of characters
foreach (str_split($Str) as $str) {
    if (ord($str) >= 97 && ord($str) <= 122) { 
        $check = 1;
        break;
    }
}

if ($check) {
    echo "String contains lowercase";
} else {
    echo "String does not contain lowercase";
}

echo "<br><br>";

// REVERSE the string using strrev() function
$Rev = strrev($Str);
echo "Reversed string: " . $Rev;


echo "<br><br>";

// Remove all spaces from the string
$StrNoSpaces = str_replace(' ', '', $Str);

echo "String without spaces: " . $StrNoSpaces;

echo "<br><br>";
// Replace given word in the string


$Str = "HELLO WORLD!";
$wordToReplace = "WORLD";  // Word you want to replace
$replacementWord = "PHP";  // Word you want to replace it with

$ReplacedStr = str_replace($wordToReplace, $replacementWord, $Str);
echo "String after replacing '$wordToReplace' with '$replacementWord': " . $ReplacedStr;

?>

