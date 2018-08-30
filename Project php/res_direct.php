<?php

$conn=mysqli_connect('localhost','root','','pro1');
$tem="SELECT * FROM template order by id desc limit 1";
$result=mysqli_query($conn,$tem);
$answer= mysqli_fetch_assoc($result);
if($answer["id"]==1){
	header("Location:resume1/res1.php");
}
elseif($answer["id"]==2){
	header("Location:resume2/res2.php");
}
elseif($answer["id"]==3){
	header("Location:resume3/res3.php");
}

?>