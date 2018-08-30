<?php

$title=$_GET['edu'];
$experience=$_GET['grd'];
$achievements=$_GET['qual'];
$xfrom=$_GET['yrpass'];
$xto=$_GET['yrgrd'];
	
	
	$conn=mysqli_connect('localhost','root','','pro1');
	$q ="INSERT INTO `job` (`id`, `title`, `experience`, `achievements`, `xfrom`, `xto`)
	VALUES (NULL, '$title', '$experience', '$achievements', '$xfrom' , '$xto')";
	mysqli_query($conn,$q);
	header("Location:res_direct.php");
	
?>
