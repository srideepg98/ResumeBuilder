<head>
<style>
* {
    box-sizing: border-box;
}
body {
  background-image: url(downloaded.jpg);
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
    float: right;
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

<h2 ><center>Educational Details</center></h2>


<div class="container">
  
  <form action="ins_edu.php">
  
    <div class="row">
      <div class="col-25">
        <label for="edu">Education</label>
      </div>
      <div class="col-75">
        <input type="text" id="edu" name="edu" placeholder="Your School name.."required>
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="yrpass">Year Passed</label>
      </div>
      <div class="col-75">
        <input type="number" id="yrpass" name="yrpass" min="1990" max="2025"required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="grd">Graduation</label>
      </div>
      <div class="col-75">
        <input type="text" id="grd" name="grd" placeholder="Your University name.."required>
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="qual">Qualifications</label>
      </div>
      <div class="col-75">
        <textarea id="qual" name="qual" placeholder="Write your Qualifications.." style="height:60px"required></textarea>
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="yrgrd">Year Graduated</label>
      </div>
      <div class="col-75">
        <input type="number" id="yrgrd" name="yrgrd" min="1990" max="2025"required>
      </div>
    </div>

    <div class="row">
     <br> <input type="submit" value="Next">
 <input type="reset"  style="float:none;background-color: hsla(0, 90%, 50%,0.7);" value="Reset">
    
  </form>
  <a href="select.php"><input style="float:left; "  type="submit" value="Prev"></a></div>
</div>

</body>
