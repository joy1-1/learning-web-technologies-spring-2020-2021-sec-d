<?php

	if(isset($_POST['submit'])){
		$name = $_POST['myname'];
    $email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conpass = $_POST['conpass'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if($name == "" || $email== "" || $username == ""
		|| $password == "" || $conpass == "" || $gender == ""
		|| $day == "" || $month == "" || $year == ""){

			echo "null Submission.";

		}else{

			for($i = 0; $i < strlen($username); $itr++){
				if(($username[$i] >= 'A' && $username[$i] <= 'Z')
				|| ($username[$i] >= 'a' && $username[$i] <= 'z')
				|| ($username[$i] >= 0 && $username[$i] <= 9)
				|| ($username[$i] === '.')
				|| ($username[$i] === '-')
				|| ($username[$i] === '_')){
					echo "";
          break;

				}
				else{
					echo "User Name can contain alpha numeric characters, period, dash or underscore only!";
					break;
				}
			}
			if(strlen($username) < 2){
				echo "User Name must contain at least two (2) characters!";
			}
			if(strlen($password) < 8){
				echo "Password must not be less than eight (8) characters!";
			}
      for($i = 0; $i < strlen($password); $i++){
				if ($password[$i] != '@')
				|| ($username[$i] != '#')
				|| ($username[$i] != '$')
				|| ($username[$i] != '%')
        {

				echo "Password must contain at least one of the special characters (@, #, $, %)";
        break;
			}
		}
  }

?>