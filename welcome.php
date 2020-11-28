<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

	<marquee> Selamat Datang!! Kamu berhasil masuk ke tempat ini </marquee>

	<?php
	    session_start();
	    echo "pengguna : " . $_SESSION['email'];
	    echo "<br><a href='logout.php'>logout</a>";
	?>    

</body>
</html>