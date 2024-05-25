<?php

$input_string = "aabbbccaaaac";
$input_string_arr = str_split($input_string);

$output_str = "";
$current_char = "";
$initial_cnt = 1;

foreach ($input_string_arr as $char) {
    if ($current_char == $char) {
        $initial_cnt += 1;
    } else if ($current_char) {
        $output_str .= $initial_cnt . "" . $current_char;
        $initial_cnt = 1;
    }
    $current_char = $char;
}

$output_str .= $current_char;

echo $output_str; 

// ----------- Output -------------
// 2a3b2c4ac
