<!DOCTYPE html>
<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$loginDir = $mainDir. '\login_register';
$db_username = 'root';
$db_password = '';
$conn = new PDO('mysql:host=localhost;dbname=wprg', $db_username, $db_password);
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location: '. $loginDir .'login.php');
	}
?>
<html lang="pl">
	<head>

		<meta charset="UTF-8" =/>
	</head>
<body>
			<?php
				$id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `user` WHERE `user_id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>
			<h4><?php echo $fetch['firstname']." ". $fetch['secondname']?></h4>
			<h4><?php echo $fetch['country']." ". $fetch['username']?></h4>
			<h4><?php echo $fetch['password']?></h4>
			<a href = "<?php echo $loginDir; ?>\logout.php">Logout</a>
		</div>
	</div>
</body>
</html>