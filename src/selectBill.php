<?php $configDir = dirname(__DIR__); ?>
<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$loginDir = $mainDir. '\login_register';
$db_username = 'root';
$db_password = '';
$logconn = new PDO('mysql:host=localhost;dbname=wprg', $db_username, $db_password);
if (!$logconn) {
    die("Fatal Error: Connection Failed!");
}
?>
<br>Poniżej widoczne Wpisane Rachunki <br>

<form id="selectform" name="selectSomething" action="" method="GET" class="form-group">

    <div class="form-group">
        <select class="form-control" id="Bill" name="Bill">
            <?php


            $q = "SELECT id,DATA, `NAME-BILL`,SUM,HOWPAID FROM bills";
            $result = $logconn->query(q) or die("Problemy z odczytem danych!");

            while ($row = mysqli_fetch_row($result)) {
                echo "<option  value='$row[2]'  >" . "Data: " . $row[1] . " Nazwa: " . $row[2] . " Kwota: " . $row[3] . " Placil: " . $row[4] . "</option>
                

<br>";
            }


            ?>
            <div class="form-group">
                <input type="submit" name="submit2" onclick="choose()" value="Wybrany rachunek"
                       class="btn btn-success mb-2"/>
            </div>
        </select>
    </div>
    <br>


</form>
<?php

if (isset($_GET['submit2']) || isset($_POST['submit3'])) {
$nameTableFromOption = $_GET['Bill'];
$showdataBill = "SELECT * FROM {$nameTableFromOption};";
if ($logconn->query($showdataBill)) {
    echo "New record showed successfully";
} else {
    echo "Error: " . $showdataBill . "<br>" . $logconn->errorInfo();
}

$result3 = $logconn->query($showdataBill) or die("Problemy z odczytem danych!");
echo "<form name='selectSomething' action='' method='POST' class='form-group'>";
while ($row = mysqli_fetch_row($result3)) {
    echo "";

    echo "<br> Pozycja: " . $row[0] . '  > Kwota: ' . $row[1] . " Kto: " . $row[2] . "
                <input type='hidden' name='test' value='$row[0]'>
                <input type='submit' name='deletequery' value='Usuń' class='btn btn-danger mb-2' />
            ";
}


echo "</form>";
if (isset($_POST['deletequery'])) {
    $idToDelete = $_POST['test'];
    $deletePosition = "DELETE FROM `{$nameTableFromOption}` WHERE ID = {$idToDelete};";
    if ($logconn->query($deletePosition)) {
        echo "Udało się, Usunąłeś pozycje " . $idToDelete;
        echo "<meta http-equiv='refresh' content='0'>";

        $dom = new DOMDocument;
        $dom->loadHTML();
        $form = $dom->getElementsByTagName('#modform');

        $form->setAttribute('class', $form->getAttribute('class') . ' showdiv');
        $html = $dom->saveHTML();
        if (isset($_POST['submit3'])) {
            echo "<meta http-equiv='refresh' content='0'>";

        }
    } else {
        echo "Error: " . $showdataBill . "<br>" . $logconn->errorInfo();
    }

}
?>
<section>
    <div class='toclick' onclick='showUnderdiv("#modform")'>
        Zeby modyfikowac kliknij tutaj
    </div>
    <?php

    require __DIR__ . '\modyfiBill.php';
    echo "</section>";


    }
    ?>

