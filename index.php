<!doctype html>
<hmtl lang="fr">
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>AoC 2022</title>

</head>

<?php

    // session_start();

?>

<h1>Advent of code - 2022</h1>

<!-- MENU -->

<?php for ($i=1;$i<26;$i++) {
    echo "<a href='/day" .$i. "/index.php'>Day". $i . "</a><br>";
}?>