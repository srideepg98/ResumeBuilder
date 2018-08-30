<head>
<style>
* {
    box-sizing: border-box;
}
hi{
	color:red;
}
body {
  background-image: url(downloaded.jpg);
}
.error{
	color:red;
	
}
input[type=text], select, textarea, input[type=date],input[type=email],input[type=number]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit],input[type=reset] {
    background-color: hsl(0, 90%, 30%);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]{
float:right;
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

/* Clear floats after the columns */
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

<h2 ><center>Personal Details</center></h2>


<div class="container">
  
  <form id="Error_detect" method="get"  action="ins_details.php">
    
	<div class="row">
      <div class="col-25">
        <label for="fname"> Name<hi>*</hi>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name.."required>
      </div></label>
	  <span class="error"><p id="fname_error"></p></span>
    </div>
    
	<div class="row">
      <div class="col-25">
        <label for="eid">Email Id<hi>*</hi>
      </div>
      <div class="col-75">
        <input type="email" id="eid" name="eid" placeholder="Your Email.."required>
      </div></label>
	  <span class="error"><p id="eid_error"></p></span>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="ph">Phone No.<hi>*</hi>
      </div>
      <div class="col-75">
        <input type="tel" id="ph" name="ph" maxlength="10" placeholder="Your Phone no..."required>
      </div></label>
	  <span class="error"><p id="ph_error"></p></span>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="dob">Date of Birth<hi>*</hi>
      </div>
      <div class="col-75">
        <input type="date" id="dob" name="dob" required>
      </div></label>
	  <span class="error"><p id="dob_error"></p></span>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="add">Address<hi>*</hi>
      </div>
      <div class="col-75">
        <textarea id="add" name="add" placeholder="Write address.." style="height:60px"required></textarea>
      </div></label>
	  <span class="error"><p id="add_error"></p></span>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="skills">Skills<hi>*</hi>
      </div>
      <div class="col-75">
        <textarea id="skills" name="skills" placeholder="Write your skills.." style="height:60px"required></textarea>
      </div></label>
	  <span class="error"><p id="skills_error"></p></span>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="hobbies">Hobbies<hi>*</hi>
      </div>
      <div class="col-75">
        <textarea id="hobbies" name="hobbies" placeholder="Write your Hobbies.." style="height:60px"required></textarea>
      </div></label>
	  <span class="error"><p id="hobbies_error"></p></span>
    </div>

<br>

    <div class="row">
      <input type="submit" value="Next"> 
 <input type="reset" value="Reset">
    </div>
  </form>
</div>
<script>
document.getElementById("Error_detect").onsubmit = function () {
    var x = document.forms["Error_detect"]["fname"].value;
    var z = document.forms["Error_detect"]["eid"].value;
    var z5 = document.forms["Error_detect"]["add"].value;
    var z1 = document.forms["Error_detect"]["ph"].value;
    var z2 = document.forms["Error_detect"]["dob"].value;
    var z3 = document.forms["Error_detect"]["skills"].value;
    var z4 = document.forms["Error_detect"]["hobbies"].value;

    var submit = true;

    if (x == null || x == "") {
        fnE = "Please enter your First name";
        document.getElementById("fname_error").innerHTML = fnE;
		submit = false;
    }

    
	if (z == null || z == "") {
        Em = "Please enter your Email id";
        document.getElementById("eid_error").innerHTML = Em;
        submit = false;
    }
	if (z1 == null || z1 == "") {
        phno = "Please enter your contact no.";
        document.getElementById("ph_error").innerHTML = phno;
        submit = false;
    }
	if (z2 == null || z2 == "") {
        dobi = "Please enter your Date Of Birth";
        document.getElementById("dob_error").innerHTML = dobi;
        submit = false;
    }
	if (z3 == null || z3 == "") {
        Skills = "Please enter your Skills";
        document.getElementById("skills_error").innerHTML = Skills;
        submit = false;
    }
	if (z4 == null || z4 == "") {
        Hobbies = "Please enter your Hobbies";
        document.getElementById("hobbies_error").innerHTML = Hobbies;
        submit = false;
    }
	if (z5 == null || z5 == "") {
        Address = "Please enter your Address";
        document.getElementById("add_error").innerHTML = Address;
        submit = false;
    }
    return submit;
}

function removeWarning() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById("fname").onkeyup = removeWarning;
document.getElementById("eid").onkeyup = removeWarning;
document.getElementById("ph").onkeyup = removeWarning;
</script>

</body>

<?php
$design=$_GET['id'];
	$conn=mysqli_connect('localhost','root','','pro1');

if($design!="")
{
	$qds ="insert into template values('$design')";
    mysqli_query($conn,$qds);
}
?>






