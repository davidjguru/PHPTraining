<?php

// Intro

echo '<strong><p>'."Ok, in this script we are going to test a basic function for strings, called str_word_count". '</p></strong>';
echo '<p>'."The function str_word_count is from PHP and counts the number of words inside string. ".'</p>';
echo '<p>'."str_word_count ( string, format, charlist )".'</p></br>';


echo '<p>'."These are the string to test, using the version (version, format). str_word_count(string, format)".'</p></br>';



// First, we're going to define a set of strings

$string_test1 = "";
$string_test2 = "cadena dos";
$string_test3 = "cadena tres";
$string_test4 = "cadena numero cuatro"; 
$string_test5 = "esta es la cadena número cinco";

// Show the strings on screen

echo "string_test1: -> <-".'</br>';
echo "string_test2: ".$string_test2.'</br>';
echo "string_test3: ".$string_test3.'</br>';
echo "string_test4: ".$string_test4.'</br>';
echo "string_test5: ".$string_test5.'</br></br>';

// Counting of the number of words in a String

echo "Number of words in string number one (empty): ". str_word_count($string_test1, 0).'<br />';

echo "Number of words in string number two (only two words): ". str_word_count($string_test2, 0).'<br />';

echo "Number of words in string number three (two words): ". str_word_count($string_test3, 0).'<br />';

echo "Number of words in string number four (three words): ". str_word_count($string_test4, 0).'<br />';

echo "Number of words in string number five (six words): ". str_word_count($string_test5, 0).'<br />';













?>
