<?php

$input_array = [
    "English" => "Subject",
    "India" => "Country",
    "Maths" => "Subject",
    "USA" => "Country",
    "Canada" => "Country",
    "Pen" => "Stationary",
];

$output_array = array();

foreach ($input_array as $key => $value) {
    $output_array[$value][] = $key;
}

echo "<pre>";
print_r($output_array);

// ------------ Output ------------

// Array
// (
//     [Subject] => Array
//         (
//             [0] => English
//             [1] => Maths
//         )

//     [Country] => Array
//         (
//             [0] => India
//             [1] => USA
//             [2] => Canada
//         )

//     [Stationary] => Array
//         (
//             [0] => Pen
//         )

// )