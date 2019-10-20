<?php
	session_start();
	if(isset($_COOKIE['uname'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin's Home page</title>
</head>
<body>

	<h1>Welcome! <?=$_COOKIE['uname']?></h1> 
	<a href="profile.php">Profile</a>
		<a href=".php">Change Password</a>
			<a href="users.html">View Users</a>
				<a href="logout.php">Logut</a>
</body>	
</html>


<?php		
	}else{
		header('location: register.html');
	}

?>