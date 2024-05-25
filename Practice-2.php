<?php

$input_string = "aabbbccaaaac";
$input_string_arr = str_split($input_string);

$output_str = "";
$current_char = "";
$initial_char = 1;

foreach ($input_string_arr as $char) {
    if ($current_char == $char) {
        $initial_char += 1;
    } else if ($current_char) {
        $output_str .= $initial_char . "" . $current_char;
        $initial_char = 1;
    }
    $current_char = $char;
}

$output_str .= $current_char;

echo $output_str; 

// ----------- Output -------------
// 2a3b2c4ac
