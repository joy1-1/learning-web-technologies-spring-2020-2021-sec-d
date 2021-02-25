<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 		= $_POST['username'];
		$myname 			= $_POST['myname'];
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
		$conpass 	= $_POST['conpass'];
		$gender 		= $_POST['gender'];
		$day 			= $_POST['day'];
		$month 			= $_POST['month'];
		$year 			= $_POST['year'];

		if($myname == "" || $email == "" || $username == "" ||   $password == ""
		 	|| $conpass == ""|| $gender == "" || $day == "" || $month == ""
			|| $year == ""){

			echo "invalid information...please try again!";

		}else{

			if($password == $conpass){


				$user = [
							'name'		=>$name,
							'email'		=>$email,
							'username'	=>$username,
							'password'	=>$password,
							'gender'	=>$gender,
							'day'		=>$day,
							'month'		=>$month,
							'year'		=>$year
						];

				$_SESSION['user'] = $user;

				header('location: login.html');

			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}
?>