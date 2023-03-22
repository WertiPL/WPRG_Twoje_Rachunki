<?php
$partialDir ='..\_partial';  ?>


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

<?php require $partialDir."\header.php"; ?>

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