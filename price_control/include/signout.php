<?php
	session_start();
	if(isset($_REQUEST['signout'])){
		session_destroy();
		header("Location: ../index.php");
	}
?>