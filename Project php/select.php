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
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover  {
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
#image{
    line-height:650px;
		width: 560px;
    height: 700px;
		
		margin:0 auto;
    
    background-image: url('');
    background-repeat: no-repeat;
    color:black;
    text-align: center;
    background-size: 100%;
    margin-bottom:25px;
    font-size: 150%;
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
    .col-25, .col-75, input[type=submit]  {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
	<body>

		<h2 ><center>Select One of the following Resume</center></h2>

		
		<div class="container">
		<div class="row">
		 <table>
			<tr>
			<td>
			<a href="details.php?id=1"><img src="1.jpg" alt="Resume 1" onmouseover =
			"upDate(this)" width="250" height="300"><a>
			<td>
			<a href="details.php?id=2"><img src="2.jpg" alt="Resume 2" onmouseover = 
			"upDate(this)"  width="250" height="300"></a>
			<td>
			<a href="details.php?id=3"><img src="3.jpg" alt="Resume 3" onmouseover = 
			"upDate(this)" width="250" height="300"></a>
			<br>
			<td>
			<div style="float:right;" id = "image">
			Hover over an image below to display here.
			</div>
			
		 </table><br>
		</div>
    	
		</div>
		<script>
		function upDate(previewPic) {
		document.getElementById("image").style.backgroundImage =
		"url(" + previewPic.src + ")";
		document.getElementById("image").innerHTML = previewPic.alt;
		}
		</script>
	</body>

<?php
      $conn=mysqli_connect('localhost','root','','pro1');
      $q ="delete FROM details";
      mysqli_query($conn,$q);

      $q1 ="delete FROM edu";
      mysqli_query($conn,$q1);

      $q2 ="delete FROM template";  
      mysqli_query($conn,$q2);
	  $q3 ="delete FROM job";
      mysqli_query($conn,$q3);

?>