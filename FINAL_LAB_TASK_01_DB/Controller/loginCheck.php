<?php
	session_start();
	require_once('../model/userModel.php');
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "null submission";
		}else{

			$status = validateUser($username, $password);
				
			if($status){
				$_SESSION['status'] = true;
				$_SESSION['username'] = $username;
				header('location: ../View/Home.php');
			}else{
				echo "Invalid user...";
			}
		}
	}
?>