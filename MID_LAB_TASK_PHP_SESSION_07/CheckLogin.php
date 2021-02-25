<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username == "" || $password == ""){
			echo "Null submission";

		}else{

			$user = $_SESSION['user'];

			if($username == $user['username'] && $password == $user['password']){

				$_SESSION['status'] = true;
				header('location: home.html');

			}else{
				echo "invalid user";
			}
		}
	}
?>