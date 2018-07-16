<?php
$string ='this is an example';
//$word_count=str_word_count($string);    //this will normally produce the length of string
//echo 'no. of words = ', $word_count;    //this will O/P the length of sring
 $word_count=str_word_count($string, 1);   # here 1 is used to store the value in an array
//$word_count=str_word_count($string, 2);   //this will results in associative array
print_r($word_count);                     # this is used to display hte value stored in array
?>