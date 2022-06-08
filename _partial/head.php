<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$thisDir = $mainDir."\_partial";
$menu= $thisDir.'\menu.css';
$styles= $thisDir.'\styles.css';
$formcss= $thisDir.'\form.css';

echo "
<head>
<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Zestawienie Płatności</title>

    <link href='$styles' rel='stylesheet'>
    <link href='$menu' rel='stylesheet'>
    <link href='$formcss' rel='stylesheet'>
</head>

";
?>