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


    		<h3>PHP Register</h3>

    			<?php if(isset($_SESSION['message'])): ?>
    				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
    			<script>
    				(function() {
    					setTimeout(function(){
    						document.querySelector('.msg').remove();
    					},3000)
    				})();
    			</script>
    			<?php
    				endif;
    				unset($_SESSION['message']);
    			?>
    			<form action="login_query.php" method="POST">
    				<h4 >Tutaj sie loguj!!!!!!</h4>
    					<label>Username</label>
    					<input type="text"  name="username" />
    				</div>
    					<input type="password"  name="password" />
    				<br />
    					<button  name="login">Login</button>

    				<a href="<?php echo $loginDir; ?>\registration.php">Registration</a>
    			</form>
    		</div>
    	</div>
    </body>
    </html>