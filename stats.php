<?php $partialDir = __DIR__ . '/_partial'; ?>
<?php $srcDir = __DIR__ . '/src'; ?>
<?php $configDir = __DIR__ . '/config'; ?>

    <!doctype html>
    <html lang="pl">

<?php require "{$partialDir}/head.php"; ?>
<body>

<header>
    <h1>Witaj użytkowniku na tej stronie zobaczysz statystyki</h1>
    <?php require "{$partialDir}/menu.php"; ?>

</header>


<?php require "{$configDir}/database.php"; ?>