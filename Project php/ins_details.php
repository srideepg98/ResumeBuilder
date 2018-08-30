<?php

$fname=$_GET['fname'];
$eid =$_GET['eid'];
$add =$_GET['add'];
$ph =$_GET['ph'];
$dob =$_GET['dob'];
$skills =$_GET['skills'];
$hobbies=$_GET['hobbies'];
	$conn=mysqli_connect('localhost','root','','pro1');
	$q ="INSERT INTO `details` (`id`, `Name`, `Mail`, `dob`, `phno`, `Skills`, `Hobby`, `Adress`)
	VALUES (NULL, '$fname', '$eid', '$dob', '$ph', '$skills', '$hobbies', '$add')";
    mysqli_query($conn,$q);
	header("Location:edu.php");
	
?>