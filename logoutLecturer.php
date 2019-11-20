<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	header('location:lecturerLogin.php');
}else{
	echo '<script>alert("You do not have a session open")</script>';
}

?>