<?php
	session_start();
	require_once('../model/userModel.php');
    $user = getAllUser() ;
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "null submission";
		}else{
            $user = [
                'userid'   => $user[0]['user_id'],
                'username'	=>$username, 
                'email'		=>$email, 
                'password'	=>$password,
                'type'		=>'user'
            ];

			$status = updateUser($user);
				
			if($status){
				echo "Updated";
			}else{
				echo "Something is Wrong!";
			}
		}
	}
?>