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
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['country'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$secondname = $_POST['secondname'];
				$country = $_POST['country'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `user` VALUES ('', '{$firstname}', '{$secondname}','{$country}', '{$username}', '{$password}')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User dodany.","alert"=>"info");
			$conn = null;
			header('location:'. $loginDir .'\login.php');
		}else{
            echo "
                <script>window.location = "; echo $loginDir."\registration.php</script>
				<script>alert('Wypełnij moje pola')</script>
				
			";


		}
        header('location: '. $loginDir .'\registration.php');
	}
?>