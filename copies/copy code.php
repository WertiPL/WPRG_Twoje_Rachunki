<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zestawienie Płatności</title>

    <link href="/Mysqli/styles.css" rel="stylesheet">
    <link href="/ProjectTIN/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<header>
    <h1>Witaj użytkowniku</h1>
</header>
<section>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moneybilans";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    $q = "SELECT id, nazwa FROM klasa";



    $q = "SELECT id, nazwa FROM klasa";
    $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
    while($row = mysqli_fetch_row($result))
    {
        echo $row[1]."<br>";
        // wartość $row[1] wypisze nazwę klasy,
        // gdyby było $row[0] to wypisalibyśmy jej id
    }
    echo "<br>";


    $q = "SELECT id, nazwa FROM klasa";
    $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
    $i =0;
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['nazwa']." id ".$i."<br>";
        // wartość $row['nazwa'] wypisze nazwę klasy
        $i++;
    }

    ?>

</section>
<aside>



    <form name="form" action="" method="post" class="form-group">

        <div class="form-group">
            <label for="name">Nazwa rachunku</label>
            <input class="form-control" type="text" name="name" id="subject" value="">
        </div>
        <div class="form-group">
            <label for="sum">Kwota</label>
            <input class="form-control" type="text" name="sum" id="sum" value="00123">
        </div>
        <div class="form-group">
            <label for="HOWPAID">Kto płacił</label>
            <select class="form-control" id="HOWPAID" name="HOWPAID">
            <option value="Wiktor">Wiktor</option>
            <option value="Dawid">Dawid</option>
            <option value="both">Wspólny</option>
        </select>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2"  >Prześlij do bazy</button>
        </div>
    </form>
</aside>

<?php
$nameform =  $_POST['name'];
$sum =  $_POST['sum'];
$HOWPAID =  $_POST['HOWPAID'];

echo "Dziś jest: ".(new DateTime())->format('Y-m-d')."<br>";
$date_bill = (new DateTime())->format('Y-m-d');
echo "<br>";
if(!($sum == "00123"))
{
    $sql = "INSERT INTO bills (id, DATA,`NAME-BILL`, SUM,HOWPAID)

    VALUES ('',$date_bill, '$nameform', '$sum','$HOWPAID')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
echo "<br>Poniżej widoczne Wpisane Rachunki <br>";
$q = "SELECT id,DATA, `NAME-BILL`,SUM FROM bills";
$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
echo "<table class="table">"
while($row = mysqli_fetch_row($result))
{
    echo "<td scope='row''>". $row[1]." ".$row[2]."</td>";
    // wartość $row[1] wypisze nazwę klasy,
    // gdyby było $row[0] to wypisalibyśmy jej id
}
echo "</table>"
echo "<br>"

#$klasa = $_POST["klasa"]; // wartość pobrana z formularza
#$q = "SELECT id FROM klasa WHERE nazwa='$klasa'";
#$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
?>

echo "<table class='table'>
    <tr>
        <th scope='col'>Number</th>
        <th scope='col'>Date</th>
        <th scope='col'>Name</th>
        <th scope='col'>Sum</th>
    </tr>

    ";

    while($row = mysqli_fetch_row($result))
    {
    echo "<tr><td scope='row''>". $row[1]."<td scope='row''>".$row[2]."</td><td scope='row''>".$row[3]."</td><td scope='row''>".$row[4]."</td>"."</tr>";
    // wartość $row[1] wypisze nazwę klasy,
    // gdyby było $row[0] to wypisalibyśmy jej id
    }
    echo "</table>"



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
#$klasa = $_POST["klasa"]; // wartość pobrana z formularza
#$q = "SELECT id FROM klasa WHERE nazwa='$klasa'";
#$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
mysqli_close($conn);
?>
</body>
</html>
Zapytania
suma
SELECT SUM(`SUM`), HOWPAID FROM `bills` GROUP by `HOWPAID`;


<link href="/ProjectTIN/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
