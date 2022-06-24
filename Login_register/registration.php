<?php
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$loginDir = $mainDir. '\login_register';
$db_username = 'root';
$db_password = '';
$logconn = new PDO('mysql:host=localhost;dbname=wprg', $db_username, $db_password);
if (!$logconn) {
    die("Fatal Error: Connection Failed!");
}
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
	</head>
<body>

			<form action="register_query.php" method="POST">	
				<h4 class="text-success">To jest tutaj rejestracja..</h4>

					<label>Firstname</label>
					<input type="text"  name="firstname" />


					<label>Secondname</label>
					<input type="text" name="secondname" />
                     <label>Country</label>
                    <input type="text" name="country" />

					<label>Username</label>
					<input type="text" name="username" />


					<label>Password</label>
					<input type="password" name="password" />

				<br />

					<button  name="register">Register</button>
                <a href="<?php echo $loginDir; ?>\login.php">Login</a>
			</form>
		</div>
	</div>
</body>
</html>