<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$loginDir = $mainDir. '\login_register';
session_start();

$db_username = 'root';
$db_password = '';
$conn = new PDO('mysql:host=localhost;dbname=wprg', $db_username, $db_password);
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}

if(ISSET($_POST['login'])) {
    if ($_POST['username'] != "" || $_POST['password'] != "") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `user` WHERE `username`=? AND `password`=? ";
        $query = $conn->prepare($sql);
        $query->execute(array($username, $password));
        $row = $query->rowCount();
        $fetch = $query->fetch();
        if ($row > 0) {
            $_SESSION['user'] = $fetch['user_id'];
            header('location:' . $mainDir .'\app.php');
        } else {
            echo "
				<script>alert('złe dane')</script>
				<script>window.location =  ";echo $loginDir.'\login.php</script>
				';
        }
    } else {
        echo "
				<script>alert('zapomniałeś o moich polach')</script>
				<script>window.location = ";echo $loginDir .'\login.php';echo "</script>
			";
    }
}
