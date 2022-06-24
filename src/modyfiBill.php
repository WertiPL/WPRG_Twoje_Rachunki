<?php
require "..\config\database.php";
echo"
<form id='modform' action='' method='post' class='form-group' >
    <div class='form-group'>
        <label for='sum'>Kwota</label>
        <input class='form-control' type='number' name='sum2' id='sum2' value='0'>
    </div>
    <div class='form-group'>
        <label for='HOWPAID'>Kogo zakupy</label>
        <select class='form-control' id='HOWPAID' name='HOWPAID3'>
             <option value='User1'>WR</option>
            <option value='User2'>Drugi Użytkownik2</option>
            <option value='both'>Wspólny</option>
        </select>
    </div>
    <br>
    <div class='form-group'>
        <input type='submit' name='submit3' value='Prześlij do bazy' class='btn btn-info mb-2' />
    </div>
</form>
";


if (isset($_POST['submit3'])) {
    $sumToBill = $_POST['sum2'];
    $PaidBy= $_POST['HOWPAID3'];
    $sumToBill -=$sumToBill*2;
    if($PaidBy=='both')
    {
        $half = $sumToBill /2;
        echo "Wspólny działa";
        $sqlBoth1 = "INSERT INTO `$nameTableFromOption` (`ID`, `kwota`, `who`) VALUES('', '$half','User1')";
        $sqlBoth2 = "INSERT INTO `$nameTableFromOption` (`ID`, `kwota`, `who`) VALUES('', '$half','User2')";
        if (mysqli_query($conn, $sqlBoth1)) {
            echo "Dodałeś produkt do tego rachunku"."User1";
            echo "<meta http-equiv='refresh' content='0'>";

            $dom = new DOMDocument;
            $dom->loadHTML();
            $form = $dom->getElementsByTagName('#modform');

            $form->setAttribute('class', $form->getAttribute('class').' showdiv');
            $html = $dom->saveHTML();
        } else {
            echo "Error: " . $sqlBoth1 . "<br>" . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sqlBoth2)) {
            echo "Dodałeś produkt do tego rachunku"."User2";
        } else {
            echo "Error: " . $sqlBoth2 . "<br>" . mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0'>";

            $dom = new DOMDocument;
            $dom->loadHTML();
            $form = $dom->getElementsByTagName('#modform');

            $form->setAttribute('class', $form->getAttribute('class').' showdiv');
            $html = $dom->saveHTML();
        }
    }
    else
    {
        $fullsql = "INSERT INTO `$nameTableFromOption` (`ID`, `kwota`, `who`)   VALUES('', '$sumToBill','$PaidBy')";
        if (mysqli_query($conn, $fullsql)) {
            echo "Dodałeś produkt do tego rachunku "."Wspólny";
                if(isset($_POST['submit3']))
                {
                echo "<meta http-equiv='refresh' content='0'>";

                    $dom = new DOMDocument;
                    $dom->loadHTML();
                    $form = $dom->getElementsByTagName('#modform');

                        $form->setAttribute('class', $form->getAttribute('class').' showdiv');
                    $html = $dom->saveHTML();
                }
        } else {
            echo "Error: " . $fullsql . "<br> " . mysqli_error($conn);
        }
    }

}