<?php
$string='this is the required string';
$string2='abcdefgh0123456';
$string_shuffled=str_shuffle($string);     //this will shuffle the given string randomly
$shuffle=str_shuffle($string2);
echo 'string 1 = ',$string_shuffled,"<br>";
echo 'string 2 = ',$shuffle,'<br>';
// we can also reduce the size of string
$half=substr($shuffle,0,5);               //this  will shorten the string by tsking 0-5 characters randomly
echo 'the shortened string = ', $half,'<br>';
# we can also reverse the string using string reverse function
$reverse=strrev($string2);
echo 'the reversed string is = ',$reverse,"<br>";
//we can also check the similarity between the two strings
similar_text($string,$string2,$result);
echo 'the similarity is : ',$result;
?>