<?php  $partialDir =dirname(__DIR__).'\_partial';  ?>
<?php $configDir = dirname(__DIR__); ?>
<?php include "$configDir\config\database.php"; ?>
<!doctype html>
<html lang='pl'>
<head>
    <?php require "$partialDir\head.php"; ?>
    <link href="demo.css" rel="stylesheet">
</head>
<header>
    <h1>Strona demonstarcyjna</h1>
    <?php require "{$partialDir}/menu.php"; ?>

</header>


<?php require "{$configDir}\config\database.php"; ?>

<body>
<button class="button-56" role="button"  onclick="createValue()">Dodaj przykładowe dwa rachunki</button><br>
<button class="button-56" role="button"  onclick="createTable()">Pokaż wpisane rachunki</button><br>
<button class="button-56" role="button"  onclick="addBillForm()">Dodaj kolejny rachunek do Bazy</button><br>
<button class="button-56" role="button"  onclick="checkStatsPerPerson()">Sprawdz wydatki Użytkownika</button><br>

<div id="addBill"></div>
<div id="demo"></div>
<div id="demo2"></div>
<div id="ListOfProduct"></div>
<div id="formtoADDsth"></div>
<div id="checkStats"></div>
<div id="checkStatsResults"></div>
<script src="demo.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php

mysqli_close($conn);
?>
</body>
</html>

