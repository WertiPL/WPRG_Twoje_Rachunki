<?php $mainDir = '.\..'; ?>
<?php $partialDir = $mainDir . '\_partial'; ?>
<?php $srcDir = $mainDir . '\src'; ?>
<?php $configDir = $mainDir . '\config'; ?>

    <!doctype html>
    <html lang="pl">

<?php require "{$partialDir}\head.php"; ?>
<body>

<?php require $partialDir."\header.php"; ?>


<?php require "{$configDir}\databasePDU.php";?>


<br>Poniżej widoczne Wpisane Rachunki <br>

<form id="selectform" name="selectSomething" action="" method="GET" class="form-group">

    <div class="form-group">
        <!--<select class="form-control" id="Bill" name="Bill">-->
            <?php


            $WhoPaid = "SELECT `who`,`kwota` FROM `biedrona2022-06-08t23:22:33` WHERE `ID`=1;";

            $result = $conn->prepare($WhoPaid) or die("Problemy z odczytem danych!");
            $result->execute();
            $fetch = $result->fetch();
            $PayForBill=$fetch['who'];
            $HowManyPaid=$fetch['kwota'];

            $SQLcosts = "SELECT * FROM `biedrona2022-06-08t23:22:33`;";

            $costs = $conn->prepare($SQLcosts) or die("Problemy z odczytem danych!");
            $costs->execute();
/*            $fetch = $costs->fetch();*/
$Wydal1=0;
$oddaj1=0;
$Wydal2=0;
$oddaj2=0;
$nick1="User1";
$nick2="User2";

            $rows = $costs->fetchAll();
            foreach ($rows as $rs)
            {
                $id = $rs['ID'];
                $kwota = $rs['kwota'];
                $whoseProduct = $rs['who'];
                if($id == 1)
                {
                    $Wydal1 +=$kwota;
                    continue;
                }else{

                    if($PayForBill==$nick1)
                    {
                        if($whoseProduct ==$nick1){
                            $Wydal1 +=$kwota;

                        }else{
                            $oddaj2+=$kwota;
                        }
                    }
                    else if($PayForBill==$nick2)
                    {
                        if($whoseProduct ==$nick2){
                            $Wydal2 +=$kwota;

                        }else{
                            $oddaj1+=$kwota;
                        }
                    }
                }

            }



            ?>
        <h4><?php echo $nick1." Wydał w tym miesiącu ".$Wydal1." Musi oddac jeszcze ".($oddaj1)  ?></h4>


            <h4><?php echo $nick2." Wydał w tym miesiącu ".$Wydal2." Musi oddac jeszcze ".($oddaj2)  ?></h4>
        <!--    <div class="form-group">
               <input type="submit" name="submit2" onclick="choose()" value="Wybrany rachunek" class="btn btn-success mb-2" />
           </div>-->
            <!-- <option value="both">Wspólny</option> -->
        <!--   </select>-->
    </div>
    <br>


</form>

