<?php

$fname=$_GET['edu'];
$eid  =$_GET['yrpass'];
$add  =$_GET['grd'];
$ph   =$_GET['qual'];
$dob  =$_GET['dob'];
$skills =$_GET['yrgrd'];
	$conn=mysqli_connect('localhost','root','','pro1');
	$q ="INSERT INTO `edu` (`id`, `Education`, `Year`, `Graduation`, `Quali`, `yearg`) 
	VALUES (NULL, '$fname', '$eid', '$add', '$ph', '$skills')";
    mysqli_query($conn,$q);
	header("Location:job.php");
	
?>
