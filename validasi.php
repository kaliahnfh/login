<?php 

    $myemail = "inihani02@yahoo.com";
    $mypass  = "222345";

	if(isset($_POST['login'])) {
		$email = $_POST['email'];
		$pass  = $_POST['password'];
		if( $email == $myemail and $pass == $mypass ) {
		    if( isset($_POST['remember'])) {
		    setcookie('email',$email,time()+60*60*7);
		    setcookie('pass',$pass,time()+60*60*7);
		}
		    session_start();
		    $_SESSION['email'] = $email;
		    header("location: welcome.php");

		} else {
			echo "email or password is invailid.<br> click here to <a
			   href='index.php'>try again</a>";
		}
			} else{
				header("location: login.php");
			}

?>