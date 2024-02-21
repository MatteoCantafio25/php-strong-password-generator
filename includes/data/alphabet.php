<?php
$upper_alphabet = range('A', 'Z');

$lower_alphabet = range('a', 'z');

$numbers = range('0', '9');

$symbols = array('-', '*','_', '#', '$', '~', '%', '@', '&', '+', '=');

$final_array = array_merge($upper_alphabet, $numbers, $symbols, $lower_alphabet);


?>