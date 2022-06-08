<?php
echo "
<section>



    <form name='form' action='' method='post' class='form-group'>

        <div class='form-group'>
            <label for='name'>Nazwa rachunku</label>
            <input class='form-control' type='text' name='name' id='subject' value='default'>
        </div>
        <div class='form-group'>
            <label for='sum'>Kwota</label>
            <input class='form-control' type='number' name='sum' id='sum' value='0'>



        </div>
        <div class='form-group'>
            <label for='date'>Data</label>
        <input class='form-control' type='datetime-local' name='date' id='date' value='";
    echo date('Y-m-d H:i:s')."'>
        </div>
        <div class='form-group'>
            <label for='HOWPAID'>Kto płacił</label>
            <select class='form-control' id='HOWPAID' name='HOWPAID'>
            <option value='User1'>WR</option>
            <option value='User2'>Drugi Użytkownik2</option>
            <!-- <option value='both'>Wspólny</option> -->
        </select>
        </div>
        <br>
        <div class='form-group'>
            <input type='submit' name='submit' value='Prześlij do bazy' class='btn btn-primary mb-2' />
        </div>
    </form>
</section>

";


$nameform =  $_POST['name'];
$sum =  $_POST['sum'];
$HOWPAID =  $_POST['HOWPAID'];
$date =  $_POST['date'];

echo "Dziś jest: ".(new DateTime())->format( 'Y-m-d')."<br>";
$date_bill = (new DateTime())->format('Y-m-d');
echo "<br>";






if(isset($_POST['submit']))
{
    $sql = "INSERT INTO bills (id, DATA,`NAME-BILL`, SUM,HOWPAID)

    VALUES ('','$date', '$nameform$date', '$sum','$HOWPAID')";

    $newTable="CREATE TABLE `moneybilans`.`".$nameform.$date."`( `ID` INT AUTO_INCREMENT , `kwota` INT , `who` VARCHAR(30), PRIMARY KEY (`ID`))";
    $firstValueToTable="INSERT INTO `moneybilans`.`$nameform$date` (`ID`, `kwota`, `who`)  VALUES('','$sum','$HOWPAID')";

    if (mysqli_query($conn, $sql)) {
        echo "New record to Bills created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    if (mysqli_query($conn, $newTable)) {
        echo "New Table created successfully";
    } else {
        echo "Error: " . $newTable . "<br>" . mysqli_error($conn);
    }
    if (mysqli_query($conn, $firstValueToTable)) {
        echo "New record FirstValue created successfully";
    } else {
        echo "Error: " . $firstValueToTable . "<br>" . mysqli_error($conn);
    }

}

?>