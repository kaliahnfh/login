<?php
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
		$email = $_COOKIE['email'];
		$pass  = $_COOKIE['pass'];
		echo "<script>
			document.getElementById('email').value ='$email';
			document.getElementById('pass').value = '$pass';
		</script>";
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session and Cookies</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="main">
		<h1>SIMPLE LOGIN</h1>
		<form method="POST" action="validasi.php">n
			<input type="text" name="email" id="email" placeholder="email">
			<input type="password" name="password" id="password" placeholder="password">
			<input type="submit" name="login" value="login" class="btn">
		</form>
	</div>

</body>
</html>