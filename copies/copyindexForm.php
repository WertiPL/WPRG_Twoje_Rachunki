<form name='form' action='' method='post' class='form-group'>
    <div class='form-group'>
        <label for='sum'>Kwota</label>
        <input class='form-control' type='number' name='sum2' id='sum2' value='0'>
    </div>
    <div class='form-group'>
        <label for='HOWPAID'>Kogo zakupy</label>
        <select class='form-control' id='HOWPAID' name='HOWPAID3'>
            <option value='Wiktor'>Wiktor</option>
            <option value='Dawid'>Dawid</option>
            <option value='both'>Wspólny</option>
        </select>
    </div>
    <br>
    <div class='form-group'>
        <input type='submit' name='submit3' value='Prześlij do bazy' class='btn btn-info mb-2' />
    </div>
</form>

<?php


if (isset($_POST['submit3'])) {
    $sumToBill = $_POST['sum2'];
    $PaidBy= $_POST['HOWPAID3'];
    $sumToBill -=$sumToBill*2;
    if($PaidBy=='both')
    {
        $half = $sumToBill /2;
        echo "Wspólny działa";
        $sqlBoth1 = "INSERT INTO `$nameTableFromOption` (`ID`, `kwota`, `who`) VALUES('', '$half','Dawid')";
        $sqlBoth2 = "INSERT INTO `$nameTableFromOption` (`ID`, `kwota`, `who`) VALUES('', '$half','Wiktor')";
        if (mysqli_query($conn, $sqlBoth1)) {
            echo "New record added successfully";
        } else {
            echo "Error: " . $sqlBoth1 . "<br>" . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sqlBoth2)) {
            echo "New record added successfully";
        } else {
            echo "Error: " . $sqlBoth2 . "<br>" . mysqli_error($conn);
        }
    }
    else
    {
        $fullsql = "INSERT INTO `$nameTableFromOption` (`ID`, `kwota`, `who`)   VALUES('', '$sumToBill','$PaidBy')";
        if (mysqli_query($conn, $fullsql)) {
            echo "New record added successfullydziwne";
        } else {
            echo "Error: " . $fullsql . "<br> dziwne" . mysqli_error($conn);
        }
    }

}


?>
