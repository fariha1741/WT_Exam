<?php

	session_start();
	//session_destroy();
	session_unset($_SESSION['username']);
	header('location: login.html');
?>