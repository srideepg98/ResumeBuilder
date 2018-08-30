

<?php

$conn=mysqli_connect('localhost','root','','pro1');

$q1="select * from details order by id desc limit 1";
$result1=mysqli_query($conn,$q1);

$q2="select * from edu order by id desc limit 1";
$result2=mysqli_query($conn,$q2);

$q3="select * from job order by id desc limit 1";
$result3=mysqli_query($conn,$q3);

 if ((mysqli_num_rows($result1) > 0)&&(mysqli_num_rows($result2) > 0)) {
  $row1 = mysqli_fetch_assoc($result1) ;
  $row2 = mysqli_fetch_assoc($result2) ;
  $row3 = mysqli_fetch_assoc($result3) ;
 }
 else {
 header("Location:res3.php");
 }
?>



<!DOCTYPE html>
<html>
<head>
<title>Resume 1</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style.css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="headshot.jpg" alt="Alan Smith" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $row1["Name"];?></h1>
			<h2 class="quickFade delayThree"><?php echo $row3["title"];?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>D.O.B: <?php echo $row1["dob"];?></a></li>
				<li><a href="mailto:abc@gmail.com" target="_blank"><?php echo $row1["Mail"];?></a></li>
				<li><?php echo $row1["Adress"];?></a></li>
				<li><?php echo $row1["phno"];?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p> ----</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2><?php echo $row3["experience"];?></h2>
					<p class="subDetails"><?php echo $row3["xfrom"];?> - <?php echo $row3["xto"];?></p>
					<p><?php echo $row3["achievements"];?></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<li><?php echo $row1["Skills"];?></li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>Schooling</h2>
					<p class="subDetails">Year Passed:<?php echo $row2["Year"];?></p>
					<p><?php echo $row2["Education"];?></p>
				</article>
				
				<article>
					<h2>College/University</h2>
					<p class="subDetails">Year Graduated:<?php echo $row2["yearg"];?></p>
					<p><?php echo $row2["Quali"];?></p>
					<p>from <strong><?php echo $row2["Graduation"];?></strong></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				<h1>Hobbies and interests</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<li><?php echo $row1["Hobby"];?></li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>