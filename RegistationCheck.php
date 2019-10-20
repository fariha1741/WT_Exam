<?php
$id = $_POST['id'];
$password =$_POST['password'];
$confirmpassword =$_POST['confirmpassword'];
$name =$_POST['uname'];

echo $id." ".$password. " " .$confirmpassword." ".$name;

if(isset($_POST['type'])){
	foreach ($_POST['type'] as $utype)
	echo $utype;  
                
}

?>