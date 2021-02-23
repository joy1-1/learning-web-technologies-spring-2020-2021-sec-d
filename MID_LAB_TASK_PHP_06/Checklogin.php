<?php

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){

			echo "null Submission";

		}else{

			for($i = 0; $i < strlen($username); $i++){
				if(($username[$i] >= 'A' && $username[$i] <= 'Z')
				|| ($username[$i] >= 'a' && $username[$i] <= 'z')
				|| ($username[$i] >= 0 && $username[$i] <= 9)
				|| ($username[$i] === '.')
				|| ($username[$i] === '-')
				|| ($username[$i] === '_')){
					echo "Success";
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