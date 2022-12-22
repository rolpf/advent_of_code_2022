<!doctype html>
<hmtl lang="fr">
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>AoC 2022 - Day 3</title>

</head>

<?php

    // session_start();

?>

<a href="..">Go back</a>
<h1>Advent of code - 2022</h1>

<!-- EX 2 -->
<h2><a href="https://adventofcode.com/2022/day/3" target="_blank">Day 3: Rucksack Reorganization</a></h2>

<?php
$lines = file("input");


$sum = 0;

// loop through each rucksack
foreach ($lines as $line) {
    // get first and second compartments
    $compartment1 = substr($line, 0, strlen($line) / 2);
    $compartment2 = substr($line, strlen($line) / 2);

    // loop through each item in first compartment
    foreach (str_split($compartment1) as $item) {
        // check if item appears in second compartment
        if (strpos($compartment2, $item) !== false) {
            // add priority of item to sum
            $sum += get_priority($item);
            break;
        }
    }
}

// print sum
echo "The sum is : " . $sum;

// function to determine priority of item based on its type
function get_priority($item) {
    if (ctype_upper($item)) {
        return ord($item) - ord('A') + 27;
    } else {
        return ord($item) - ord('a') + 1;
    }
}

?>