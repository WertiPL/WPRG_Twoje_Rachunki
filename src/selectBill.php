<?php $configDir = dirname(__DIR__); ?>
<?php include "$configDir\config\database.php"; ?>
<br>Poniżej widoczne Wpisane Rachunki <br>

<form id="selectform" name="selectSomething" action="" method="GET" class="form-group">

    <div class="form-group">
        <select class="form-control" id="Bill" name="Bill">
            <?php



            $q = "SELECT id,DATA, `NAME-BILL`,SUM,HOWPAID FROM bills";
            $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");

            while($row = mysqli_fetch_row($result))
            {
                echo "<option  value='$row[2]'  >"."Data: ". $row[1]." Nazwa: ".$row[2]." Kwota: ".$row[3]."</option>
                

<br>";
            }


            ?>
            <div class="form-group">
                <input type="submit" name="submit2" onclick="choose()" value="Wybrany rachunek" class="btn btn-success mb-2" />
            </div>
            <!-- <option value="both">Wspólny</option> -->
        </select>
    </div>
    <br>


</form>
<?php

if(isset($_GET['submit2']) || isset($_POST['submit3'])) {
    $nameTableFromOption = $_GET['Bill'];
    //echo $nameTableFromOption . " XXXXXXXXXXX";
    $showdataBill = "SELECT * FROM `$nameTableFromOption`;";
    if (mysqli_query($conn, $showdataBill)) {
        echo "New record showed successfully";
    } else {
        echo "Error: " . $showdataBill . "<br>" . mysqli_error($conn);
    }

    $result3 = mysqli_query($conn, $showdataBill) or die("Problemy z odczytem danych!");
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
        $deletePosition = "DELETE FROM `$nameTableFromOption` WHERE ID = $idToDelete;";
        if (mysqli_query($conn, $deletePosition)) {
            echo "Udało się, Usunąłeś pozycje ".$idToDelete;
            if(isset($_POST['submit3']))
            {
                echo "<meta http-equiv='refresh' content='0'>";
            }
        } else {
            echo "Error: " . $showdataBill . "<br>" . mysqli_error($conn);
        }

    }
    ?><section>
    <div class='toclick' onclick='showUnderdiv("#modform")' >
        Zeby modyfikowac kliknij tutaj
    </div>
    <?php

     require __DIR__.'\modyfiBill.php';
     echo "</section>";


}
?>

