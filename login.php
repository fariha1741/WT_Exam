<?php

if(isset($_POST['submit'])){
$id = $_POST['id'];
$password =$_POST['password'];

		if(empty($id) == true || empty($password) == true){
			echo "null submission!";
		}else{

		
				echo "invalid username/password";
			}
		}

	
?>