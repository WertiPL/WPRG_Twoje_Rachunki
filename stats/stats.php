<?php $mainDir = '.\..'; ?>
<?php $partialDir = $mainDir . '\_partial'; ?>
<?php $srcDir = $mainDir . '\src'; ?>
<?php $configDir = $mainDir . '\config'; ?>

    <!doctype html>
    <html lang="pl">

<?php require "{$partialDir}\head.php"; ?>
<body>

<?php require $partialDir . "\header.php"; ?>


<?php require "{$configDir}\databasePDU.php"; ?>


    <br>Poniżej widoczne Całe Rachunki <br>

    <form id="selectform" name="selectSomething" action="" method="GET" class="form-group">
        <label for="statsmonth">Stats by (month and year):</label>
        <input type="month" id="statsmonth" name="statsmonth" value="2022-06">


        <div class="form-group">
            <input type="submit" name="submit2" onclick="choose()" value="Wybrany rachunek"
                   class="btn btn-success mb-2"/>

        </div>
        <br>


    </form>
<?php
if (isset($_GET['submit2'])) {
    $month = $_GET['statsmonth'];



    $SQLcosts = "SELECT  DATA, `NAME-BILL` FROM bills WHERE `DATA` like '" . $month . "-%'";

    $costs = $conn->prepare($SQLcosts) or die("Problemy z odczytem danych!");
    $costs->execute();
    $fetch = $costs->fetch();
    $Wydal1 = 0;
    $oddaj1 = 0;
    $Wydal2 = 0;
    $oddaj2 = 0;
    $nick1 = "User1"; //
    $nick2 = "User2";


    $rows = $costs->fetchAll();
    $i = 0;
    foreach ($rows as $rs) {

        $tableName = $rs['NAME-BILL'];


        //$tableName="biedrona2022-06-08t23:22:33";
        $WhoPaid = "SELECT `who`,`kwota` FROM `$tableName` WHERE `ID`=1;";
        $result = $conn->prepare($WhoPaid) or die("Problemy z odczytem danych!");
        $result->execute();
        $fetch = $result->fetch();
        $PayForBill = $fetch['who'];
        $HowManyPaid = $fetch['kwota'];

        $Sumapierwszywydal = "SELECT SUM(kwota) as `Suma` FROM `$tableName` WHERE `ID` != 1 AND `who`=\"User1\";";
        $drugiWydal = "SELECT SUM(kwota) as `Suma`  FROM `$tableName` WHERE `ID` != 1 AND `who`=\"User2\";";
        if ($PayForBill == $nick1) {
            $Wydal1 += $HowManyPaid;

            $dSQL = $conn->prepare($drugiWydal) or die("Problemy z odczytem danych!");
            $dSQL->execute();
            $fetchUser1 = $dSQL->fetch();
            $SumaIledrugiMaNaRachunkuPierwszego = $fetchUser1['Suma'];
            $oddaj2 += $SumaIledrugiMaNaRachunkuPierwszego * (-1);


        } else if ($PayForBill == $nick2) {
            $Wydal2 += $HowManyPaid;
            $pSQL = $conn->prepare($Sumapierwszywydal) or die("Problemy z odczytem danych!");
            $pSQL->execute();
            $fetchUser2 = $pSQL->fetch();
            $SumaIle1MaNaRachunku2 = $fetchUser2['Suma'];
            $oddaj1 += $SumaIle1MaNaRachunku2 * (-1);
        }
        $i++;
        echo $tableName . "<br>";


    }


    if ($oddaj1 >= $oddaj2) {
        $oddaj1 -= $oddaj2;
        $oddaj2 = 0;
    } else {
        $oddaj2 -= $oddaj1;
        $oddaj1 = 0;
    }

    ?>


    <h4><?php echo $nick1 . " Zapłacił za rachunki w tym miesiącu " . $Wydal1;
        if ($oddaj1 > 0) echo " Musi oddac jeszcze " . ($oddaj1); ?></h4>


    <h4><?php echo $nick2 . " Zapłacił za rachunki w tym miesiącu " . $Wydal2;
        if ($oddaj2 > 0) echo " Musi oddac jeszcze " . ($oddaj2); ?></h4>
    <?php
}
