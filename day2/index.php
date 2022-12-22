<!doctype html>
<hmtl lang="fr">
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>AoC 2022 - Day 2</title>

</head>

<?php

    // session_start();

?>

<a href="..">Go back</a>
<h1>Advent of code - 2022</h1>

<!-- EX 2 -->
<h2><a href="https://adventofcode.com/2022/day/2" target="_blank">Day 2: Rock Paper Scissors</a></h2>


<table>
    <thead>
        <tr>
            <th colspan="2">Game Scoring</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>&#128074;</td>
            <td>1</td>
        </tr>
        <tr>
            <td>&#129306;</td>
            <td>2</td>
        </tr>
        <tr>
            <td>&#x1F91E;</td>
            <td>3</td>
        </tr>
        <tr>
            <td>lose</td>
            <td>0</td>
        </tr>
        <tr>
            <td>draw</td>
            <td>3</td>
        </tr>
        <tr>
            <td>win</td>
            <td>6</td>
        </tr>
    </tbody>
</table>

<!-- PART 1 -->
<h3>PART 1</h3>
<?php
// players score
$score1 = 0;
$score2 = 0;

// move score
$rock = 1;
$paper = 2;
$scissor = 3;

// result score
$lose = 0;
$draw = 3;
$win = 6;

$lines = file("input");

// help
// $line[0]; // gets the ABC player 
// $line[2]; // gets the XYZ player move

foreach($lines as $line) {
    if ($line[0]=="A") {
        if ($line[2]=="X") {
        $score1=$score1+$rock+$draw;
        $score2=$score2+$rock+$draw;
        }
        else if ($line[2]=="Y") {
            $score1=$score1+$rock+$lose;
            $score2=$score2+$paper+$win;       
        }
        else if ($line[2]=="Z") {
            $score1=$score1+$rock+$win;
            $score2=$score2+$scissor+$lose;       
        }
    }
    else if ($line[0]=="B") {
        if ($line[2]=="X") {
            $score1=$score1+$paper+$win;
            $score2=$score2+$rock+$lose;
            }
        else if ($line[2]=="Y") {
            $score1=$score1+$paper+$draw;
            $score2=$score2+$paper+$draw;
            }
        else if ($line[2]=="Z") {
            $score1=$score1+$paper+$lose;
            $score2=$score2+$scissor+$win;
            }
    }
    else if ($line[0]=="C") {
        if ($line[2]=="X") {
            $score1=$score1+$scissor+$lose;
            $score2=$score2+$rock+$win;
            }
        else if ($line[2]=="Y") {
            $score1=$score1+$scissor+$win;
            $score2=$score2+$paper+$lose;
            }
        else if ($line[2]=="Z") {
            $score1=$score1+$scissor+$draw;
            $score2=$score2+$scissor+$draw;
            }
    }
}
?>

<!-- Result -->
<p>Opponent total score:
    <?php echo $score1;?></p>
    <p>Me total score:
    <?php echo $score2;?></p>


<!-- PART 2 -->
<h3>PART 2</h3>



<?php
$score3 = 0;
$score4 = 0;

foreach($lines as $line) {
    if ($line[0]=="A") {
        if ($line[2]=="X") {
        $score3=$score3+$rock+$win;
        $score4=$score4+$scissor+$lose;
        }
        else if ($line[2]=="Y") {
            $score3=$score3+$rock+$draw;
            $score4=$score4+$rock+$draw;       
        }
        else if ($line[2]=="Z") {
            $score3=$score3+$rock+$lose;
            $score4=$score4+$paper+$win;
        }
    }
    else if ($line[0]=="B") {
        if ($line[2]=="X") {
            $score3=$score3+$paper+$win;
            $score4=$score4+$rock+$lose;
            }
        else if ($line[2]=="Y") {
            $score3=$score3+$paper+$draw;
            $score4=$score4+$paper+$draw;
            }
        else if ($line[2]=="Z") {
            $score3=$score3+$paper+$lose;
            $score4=$score4+$scissor+$win;
            }
    }
    else if ($line[0]=="C") {
        if ($line[2]=="X") {
            $score3=$score3+$scissor+$win;
            $score4=$score4+$paper+$lose;
            }
        else if ($line[2]=="Y") {
            $score3=$score3+$scissor+$draw;
            $score4=$score4+$scissor+$draw;
            }
        else if ($line[2]=="Z") {
            $score3=$score3+$scissor+$lose;
            $score4=$score4+$rock+$win;
            }
    }
}?>

<!-- Result -->
<p>Opponent total score:
    <?php echo $score3;?></p>
    <p>Me total score:
    <?php echo $score4;?></p>