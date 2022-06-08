<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$thisDir = $mainDir."\_partial";
$index = $mainDir."\index.php";
$billList = $mainDir."\src\billList.php";
$demo = $mainDir."\demo\demo.php";
$statsHtml = $mainDir.'\stats.php';
$describe = $mainDir.'\describe.php';
echo "

<div class='classic' id='classicNav'>
  <a href='$index' class='active'>Główna</a>
   <a href='$demo'>Demo-Galeria/Instrukcja</a>
   <div class='undermenu'>
        <button class='dropbtn'>Funkcjonalności 
            <i class='fa fa-caret-down'></i>
        </button>
        <div class='undermenu-content'>
                <a  href='$billList'>Lista Rachunków</a>
              <a  href='$statsHtml' target='_blank'>Statystyki z rachunków</a>
        </div>
    </div>
    <a href='$describe'>Opis Aplikacji</a>
     <a href='javascript:void(0)' class='icon' onclick='menu()'>&#9776;</a>
 </div>
 <button onclick='topFunction()' id='topBTN' title='Idź na góre'>^</button>
<script src='$thisDir\menu.js'></script>
";
?>

