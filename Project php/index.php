<head>
<style>
* {
    box-sizing: border-box;
}
body {
  background-image: url(downloaded.jpg);
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: hsl(0, 90%, 30%);
    color: white;
    padding: 12px 20px;
    border: none;
	font-size:18px;
	width:400px;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover,input[type=reset]:hover  {
    background-color: hsl(0, 100%, 25%);
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit],input[type=reset]  {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<h1 style="font-size:50px"><center>Welcome to Resume Creator</h1>


<div class="container">
<center style="font-size:35px"><b>Create resume of your choice.</b><br>
  <br>
  <form name=form1 id="form1" method="get" action="#" >
    <br><div class="row">
	<div style="font-size:25px">
	Please Enter your name  
	<input type="text" name="visitor" placeholder="here">
	</div><p style="font-size:16px; color:red;" id="emsg"></p>
	<br><br>
	<input type="submit" value="Click to Begin"></center>
    </div>
  </form>
</div>
<script>
document.getElementById("form1").onsubmit = function (){
	var x= document.forms["form1"]["visitor"].value;
	
	var submit =true;
	if( x == null || x == "" )
	{	
		errmsg="Enter Name Please";
		document.getElementById("emsg").innerHTML= errmsg;
		submit=false;
    }
	return submit;
}
</script>
</body>

	<?php
	
	$visitor=$_GET['visitor'];
	if($visitor!=""){
	$conn=mysqli_connect('localhost','root','','pro1');
	$query ="insert into visitor values('','$visitor')";
    mysqli_query($conn,$query);
	header("Location:select.php");
	}
	?>





