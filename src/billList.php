<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";

$partialDir ='..\_partial';  ?>
<?php  include '..\config\database.php'; ?>

<!doctype html>
<html lang='pl'>

<!doctype html>
<html lang="pl">
<head>
    <?php require "$partialDir\head.php"; ?>
    <style>

        .showdiv {
            display: block !important;
        }
        #selectform, #modform{
            display: none;
        }
        .toclick:hover{
            background-color: brown;
        }

    </style>
 </head>
<body>

<header>

    <h1>Witaj użytkowniku</h1>

    <?php require "{$partialDir}\menu.php"; ?>
</header>

<section>
    <div class="toclick" onclick="showUnderdiv('#selectform')">
        Zeby wybierac klikj tutaj
    </div>
    <?php require __DIR__."\selectBill.php"; ?>

</section>


</body>
<script>
    showUnderdiv=(nameDiv)=>{
        let divtodelete = document.querySelectorAll(".showdiv");
        divtodelete.forEach(item =>{
            item.classList.remove('showdiv');
        });
        document.querySelector(nameDiv).classList.add('showdiv');
    }

</script>
</html>