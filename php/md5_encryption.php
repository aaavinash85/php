<?php
$string='password';
$string_hash=md5($string);        //this will generate a Hash from the given string
echo 'the generated hash is ', $string_hash;
?>