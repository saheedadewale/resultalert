<?php
include_once 'db.php';

$matricno = $_POST['matricno'];
$surname = $_POST['surname'];
$othername = $_POST['othername'];
$gender = $_POST['gender'];
$level = $_POST['level'];
$section = $_POST['section'];

if (empty($matricno) || empty($surname) || empty($othername)||empty($gender)||empty($level)||empty($section)){
	echo "Required fields left unfill";
	exit;
}else{
	//writing SQL query
	$query = "INSERT into students (matricno,surname,othername,gender,level,section) VALUES ('$matricno','$surname','$othername','$gender','$level','$section')";
	$result = mysqli_query($connect,$query);
	if(!$result){
		echo "Whoops! error occure while saving record! ";
	}else{
		echo "Great!, Student Added Successfully!";
	}
}
?>