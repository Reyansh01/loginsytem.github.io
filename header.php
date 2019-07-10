<?php
	SESSION_START();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<nav>
		<div class = "main-wrapper">
			<ul>
				<li ><a href="index3.php">HOME</a></li>
			</ul>
			<div class = "nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.php" method="POST">
							<button type="submit" name="submit" >Logout</button>
						</form>';
					} else{
						echo '<form action="includes/login.php" method="POST">
							<input type="text" name="uid" placeholder="Username/E-Mail ID">
							<input type="password" name="pwd" placeholder="Password">
							<button type="submit" name="submit">LOGIN</button>
						</form>';
					}
				?>
				<a href="signup.php">Sign up</a>
			</div>
		</div>
	</nav>
</header>