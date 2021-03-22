<?php
	$title = "Home page";
	require_once('Header.php')
?>

	<div id="Page_title">
		<h1>Welcome Home, <?php echo $_SESSION['username']?></h1>		
	</div>

	<div id="nav_bar">

		<a href="Create.php">Create New User</a> |	
		<a href="Userlist.php">View User List</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<br>
		<br>
		<br>
	</div>

<?php include('Footer.php') ?>