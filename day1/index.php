<!doctype html>
<hmtl lang="fr">
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>AoC 2022 - Day 1</title>

</head>

<?php

    // session_start();

?>

<a href="..">Go back</a>
<h1>Advent of code - 2022</h1>

<!-- EX 1 -->
<h2><a href="https://adventofcode.com/2022/day/1" target="_blank">Day 1: Calorie Counting</a></h2>


<!-- PART 1 -->
<?php
    //needed var
    $maxCal = 0;
    $countCal = 0;

    $lines = file("input");

    foreach ($lines as $line) {
        $countCal += intval($line);
        if (intval($line) == 0) {
            if ($countCal > $maxCal) {
                $maxCal = $countCal;
            }
            $countCal = 0;
        }
    }
    ?>

<p>Max calories:
    <?php echo $maxCal;?></p>

<!-- PART 2 -->
<?php
    //needed var
    $maxValues = [];
    $countCal = 0;

    $lines = file("input");

    foreach ($lines as $line) {
        $countCal += intval($line); // calcul des calories par personne
        if (intval($line) == 0) {
            if (count($maxValues)<3) {
                array_push($maxValues, $countCal);
            }
            else {
                $min = $maxValues[0];
                $iMin = 0;
                foreach($maxValues as $i=>$val) {
                    if ($min > $val ) {
                        $min = $val;
                        $iMin = $i;
                    }
                }
                if ($min < $countCal) {
                    $maxValues = array_replace($maxValues, array($iMin => $countCal)); // on remlace la valeur la plus petite des trois plus grandes du fichier
                }
            }
            $countCal = 0;
        }
    }
    $sum = array_sum($maxValues);

    ?>

    <p>Sum of 3 max calories:
    <?php echo $sum;?></p>