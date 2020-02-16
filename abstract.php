	<!DOCTYPE html>
<html lang = "en">
<link rel="stylesheet" href = "style.css">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="slicebox.css">
<link rel="stylesheet" href="final.css">
<title>NATIONAL CONFERENCE</title>
<style>
.outermost-box{
	height:100%;
	margin-right:30px;
	margin-left:30px;
	background-image:  url(images/d5.png);
	background-size: cover;
	background-position: center;
}
form{
	font-size:20px;
}
form input[type=text],input[type=email],input[type=phone]{
	color:black;
	float:left;
	height:40px;
	width:25%;
	padding-top:5px;
	padding-left:5px;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
}

form select{
	color:black;
	float:left;
	width:25%;
	height:40px;
	padding-top:5px;
	margin-left:0px;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
}

form textarea{
	float:left;
	width:50%;
	height:100px;
	padding-top:5px;
	padding-left:5px;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
}

form label {
  float:left;
  width:100%;
  padding-top:10px;
  display:inline-block;
}

form input[type=submit]{
	width:15%;
	background-color:#2F4F4F;
	color:white;
	padding:14px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
}
form input[type=submit]:hover{
	color:black;
	background-color:#FFFFFF;
}
form input[type=text]{
	color:black;
	float:left;
	width:25%;
	padding-top:5px;
	padding-left:5px;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
}
form label {
  float:left;
  width:100%;
  padding-top:10px;
  display:inline-block;
}
form input[type=file]{
	width:30%;
	background-color:#2F4F4F;
	color:red;
	padding:14px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
}
form input[type=submit]{
	width:15%;
	background-color:#2F4F4F;
	color:white;
	padding:14px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
}
form input[type=submit]:hover{
	color:black;
	background-color:#FFFFFF;
}
</style>

</head>
<body>
<div class="header">
<div style="width:24.5%"><img style = "float : left; margin-top = 40px; margin-bottom= 60px; margin-right = 500px; margin-left= 50px;" src = "images/pec1.jpg" height = "150" width = "130"></div>
<div style="width:49%"><span class="tab"><center><h2 style="color:navy;font-family:Cursive;font-size:30px;font-weight:bolder">NATIONAL CONFERENCE ON</h2>
<h3 style="color:navy;font-family:Cursive;font-weight:bolder">BIG DATA ANALYTICS FOR HEALTH PREDICTIONS </h3>
<h4 style="color:navy;font-family:Cursive;font-size:20px;"><i>9<SUP>th</SUP> & 10<SUP>th</SUP> JANUARY 2020</i></h4></center></span></div>
<div style="width:24.5%"><img style = "float : right; margin-top = 40px; margin-bottom= 60px; margin-right = 50px; margin-left= 500px;" src = "images/logo.jpg" width="130" height="150" ></div>
</div>
 <div class="low-resolution";><!-- Use any element to open the sidenav -->
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
</div>
<div class="outermost-box">
<div id="menu">
	<ul>
		<li><a href="index.php"><img src="images/home.png" height = "25" width = "30"> &nbsp; Home</i></a></li>
		<li><a href="#"><img src="images/conference.png" height = "25" width = "30"> &nbsp; Conference</i></a>
		<ul><li><a href="images/brochure.pdf"> Conference brochure</a></li>
		<li><a href="conference.php">Keynote</a></li>
		<li><a href="committee.php">Committees</a></li>
		<li><a href="ven.php">Venue & accomodation</a></li>
		</ul></li>
		<li><a href="#"><img src="images/paper.png" height = "25" width = "25"> &nbsp; Paper submission</i></a>
		<ul>
		<li><a href="callfor.php"> Call for papers</a></li>
		<li><a class="active;" href="abstract.php">Paper submission</a></li>
		<li><a href="revision1.php">Revision 1 submission</a></li>
		<li><a href="images/NCBDAHP_Paper_format11.doc" download="NCBDAHP_Paper_format11.doc">Full paper guidelines</a></li>
		<li><a href="imp_dates.php">Important dates</a></li>
		</ul></li>
		<li><a href="javascript:void(0)"><img src="images/register.png" height = "25" width = "30">&nbsp; Registration</i></a>
		<ul>
		<li><a href="register.php" >Online registration</a></li>
		<li><a href="fees.php">Registration fees</a></li>
		</ul></li>
  <li><a href="contact.php"><img src="images/contact.png" height = "25" width = "30">  &nbsp; Contact</i></a></li>
	</ul>
</div>

<div class="content";>


<p style="color:black";><b><h3><center>PAPER SUBMISSION</center></h3></b></p>
<br/>

<p>The multi-disciplinary nature of the conference provides a wide scope to prospective authors for submission of journal articles. Authors are invited to submit 
full papers presenting new research ideas related to Big Data Analytics for Healthcare. Papers should be submitted in the standard double column attached IEEE format.
  Minimum number of pages is limited to five. Authors can submit the paper in MS-Word format directly to the email id
  <a href="mailto:ncbdahp20@pec.edu">ncbdahp20@pec.edu</a> Submitted papers may not have appeared in or be considered for any other conference. The selected papers will be considered for 
  publication in the referred International journals (Scopus indexed, UGC, ProQuest, DOAJ) with additional cost. 


</p></br>
<form action="papersub.php" method="post" enctype="multipart/form-data">
	<p><B>Instant Confirmation</B></br>
	Registration can be done only after confirmation of paper acceptance.</br>
	Please make sure that the first author enters his/her email address correctly for further communication.</br>
	After successful submission paperID will be generated.</br></br>
	<font color="darkred"><b>Upload the paper with paperID to this email:<a href="mailto:ncbdahp20@pec.edu">ncbdahp20@pec.edu</a> </b></font></br>	
	<font color="darkred"><b>* are mandatory.</b></font></p>	
		<label for="title">Paper Title</label></br>
		<input type="text" id="title" name="title" required="required"><font color="darkred"><b>*</b></font></br></br>
		<label for="name">Name of the Author1</label></br>
		<input type="text" id="name1" name="name1" required="required"><font color="darkred"><b>*</b></font>&nbsp <font color="darkred"><b>(Corresponding Author to generate paperID)</b></font></br></br>
		<label for="category">Category</label></br>
		<select id="category" name="category" required="required">
			<option> -- </option>
			<option value="delegate">Industry Delegate</option>
			<option value="faculty">Faculty</option>	
			<option value="scholar">Research Scholar</option>
			<optgroup label="Student">
				<option value="ug">Under Graduate</option>
				<option value="pg">Post Graduate</option>
			</optgroup>
		</select><font color="darkred"><b>*</b></font></br></br>
		<label for="dept">Department,College/Company Name</label></br>
		<textarea id="dept" name="department" required="required"></textarea><font color="darkred"><b>*</b></font></br></br>
		<label for="name2">Name of the Author2</label></br>
		<input type="text" id="name2" name="name2" ></br></br>
		<label for="category2">Category</label></br>
		<select id="category2" name="category2">
			<option> -- </option>
			<option value="delegate">Industry Delegate</option>
			<option value="faculty">Faculty</option>	
			<option value="scholar">Research Scholar</option>
			<optgroup label="Student">
				<option value="ug">Under Graduate</option>
				<option value="pg">Post Graduate</option>
			</optgroup>
		</select></br></br>
		<label for="dept2">Department,College/Company Name</label></br>
		<textarea id="dept2" name="department2" ></textarea></br></br>
		<label for="name3">Name of the Author3</label></br>
		<input type="text" id="name3" name="name3" ></br></br>
		<label for="category3">Category</label></br>
		<select id="category3" name="category3">
			<option> -- </option>
			<option value="delegate">Industry Delegate</option>
			<option value="faculty">Faculty</option>	
			<option value="scholar">Research Scholar</option>
			<optgroup label="Student">
				<option value="ug">Under Graduate</option>
				<option value="pg">Post Graduate</option>
			</optgroup>
		</select></br></br>
		<label for="dept3">Department,College/Company Name</label></br>
		<textarea id="dept3" name="department3" ></textarea></br></br>
		<label for="name4">Name of the Author4</label></br>
		<input type="text" id="name4" name="name4" ></br></br>
		<label for="category4">Category</label></br>
		<select id="category4" name="category4">
			<option> -- </option>
			<option value="delegate">Industry Delegate</option>
			<option value="faculty">Faculty</option>	
			<option value="scholar">Research Scholar</option>
			<optgroup label="Student">
				<option value="ug">Under Graduate</option>
				<option value="pg">Post Graduate</option>
			</optgroup>
		</select></br></br>
		<label for="dept4">Department,College/Company Name</label></br>
		<textarea id="dept4" name="department4" ></textarea></br></br>
		<label for="name5">Name of the Author5</label></br>
		<input type="text" id="name5" name="name5" ></br></br>
		<label for="category5">Category</label></br>
		<select id="category5" name="category5">
			<option> -- </option>
			<option value="delegate">Industry Delegate</option>
			<option value="faculty">Faculty</option>	
			<option value="scholar">Research Scholar</option>
			<optgroup label="Student">
				<option value="ug">Under Graduate</option>
				<option value="pg">Post Graduate</option>
			</optgroup>
		</select></br></br></br></br>
		<label for="dept5">Department,College/Company Name</label></br>
		<textarea id="dept5" name="department5" ></textarea></br></br></br></br>
		<label><font color="darkred"><b>(Further Conference details corresponds to author1)</b></font></label></br></br></br></br>
		<label for="affliation">Affiliated by AICTE</label></br>
		<input type="radio" name="affliation" value="yes">YES</br>
		<input type="radio" name="affliation" value="no" >NO</br>
		<label for="add">Address with pincode</label></br>
		<textarea id="address" name="add" required="required"></textarea><font color="darkred"><b>*</b></font></br></br></br></br>
		<label for="mob">Mobile</label></br>
		<input type="phone" id="mobile" name="mob" pattern="[0-9]{10}" required="number"><font color="darkred"><b>* (Enter 10 digit phone number)</b></font></br></br>
		<label for="email">E-mail ID</label></br>
		<input type="email" id="email" name="email" required="required"><font color="darkred"><b>* (Enter valid email id)</b></font></br></br>
    <label>File Upload</label>
    <input type="file" name="file" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="required"><font color="darkred"><b>* (maximum file size is 1 MB)</br>(If file size is more than 1 MB, please upload the first page with abstract and </br> mail full paper to ncbdahp20@pec.edu)</b></font><label><font color="darkred"><b>(Only first submission will be accepted)</b></font></br><font color="darkred"><b>(.doc/.docx files in provided IEEE format should be uploaded.)</b></font></label></br></br></br></br>
    <input type="submit" name="submit">
</form>

</div>


<div class="footer">
	<div class="inner-footer">
		<div class="footer-items">
		<h1>Big Data Analytics For Health Predictions</h1>
		<p>NCBDAHP'20</P>
		</div>
		<div style="width:450px" class="footer-items">
			<h2>Contact Us</h2>
				<div class="border"></div>
				<br>
					<ul>
						<li><img src="images/home.png" height = "30" width = "30">&nbsp;Department of Information Technology</li>
						<li><img src="images/location.png" height = "30" width = "30">&nbsp;Pondicherry Engineering College, </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPillaichavady, Puducherry – 605 014</li>
						<li><img src="images/call.png" height = "30" width = "30">&nbsp;0413-2655281-Extn. 612,613</li>
						<li><img src="images/mail.png" height = "30" width = "30">&nbsp;ncbdahp20@pec.edu</li>
					</ul>
				
		</div>
	</div>
	<div class="footer-bottom" align="center">
	Copyright &copy; NCBDAHP'20.All rights reserved.
	</div>
</div>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php"><img src="images/home.png" height = "25" width = "30">HOME</i></a>
		<a href="#"><img src="images/conference.png" height = "25" width = "30">CONFERENCE</i></a>
		<a href="images/brochure.pdf"> CONFERENCE BROCHURE</a>
			<a href="conference.php">KEYNOTE</a>
			<a href="committee.php">COMMITTEES</a>
			<a href="ven.php">VENUE & ACCOMODATION</a>
		<a href="#" target="_blank"><img src="images/paper.png" height = "25" width = "25">PAPER SUBMISSION</i></a>
		<a href="callfor.php">CALL FOR PAPERS</a>
		<a class="active;" href="abstract.php">PAPER SUBMISSION</a>
		<a href="revision1.php">Revision 1 submission</a>
		<a href="images/NCBDAHP_Paper_format11.doc" download="NCBDAHP_Paper_format11.doc">FULL PAPER GUIDELINES</a>
		<a href="#" target = "_blank"><img src="images/register.png" height = "25" width = "30">REGISTRATION</i></a>
		<a href="register.php">ONLINE REGISTRATION</a>
		<a href="imp_dates.php">IMPORTANT DATES</a>
		<a href="fees.php">REGISTRATION FEES</a>
		<a href="contact.php"><img src="images/contact.png" height = "25" width = "30"> CONTACT</i></a>
</div>

</div>

<script>
/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}</script>
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("menu");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


</body>
</html>