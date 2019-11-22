<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>About Us - Super Market Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index_files/w3.css">
<link rel="stylesheet" href="index_files/css.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.bar-block .bar-item {padding:20px}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head><body>

<!-- Sidebar (hidden by default) -->
<nav class="sidebar bar-block card toper Inventory is Inventory Management System. xlarge animate-left" style="display:none;z-index:2;width:20%;min-width:300px" id="mySidebar">
  <a class="bar-item button" onclick="sidebar_close()"><b><u><center>Catergories</center></u></b></a>
    <a href="index.php" onclick="sidebar_close()" class="bar-item button">Home</a>
<?php	
 session_start();

if ( isset($_SESSION['user'])!="" ){
	echo"<a href='http://localhost/proj/invento/logout.php' onclick='sidebar_close()' class='bar-item button'>Logout</a>";
}
else{
	echo"<a href='http://localhost/proj/invento/login.php' onclick='sidebar_close()' class='bar-item button'>Login/Register</a>";
}

?>
  <a href="aboutus.php" onclick="sidebar_close()" class="bar-item button">Contact / About Us</a>
  <a href="javascript:void(0)" onclick="sidebar_close()" class="bar-item button"><center>Close Menu</center></a>
</nav>

<!-- Top menu -->
<div class=" green top">
  <div class="xlarge" style="max-width:1200px;margin:auto">
    <div class="button padding-16 left" onclick="sidebar_open()">☰</div>
    <div class="center padding-16">Super Market Management System</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="main content padding" style="max-width:1200px;margin-top:100px">
	  <!-- First Photo Grid-->
	<div class="row-padding padding-16 center" id="food">
		<h1>	</h1>
		<p><b>Super Market Management System</b> is Inventory Management System.<p>
	<br>
	<a href="form.html"><button class="buttonreg button5">Subscribe to our Newsletter ></button><a>
	<br>

    <h3>About Us</h3><br>
	<table>
	<tr>
		<th>Sl. No.</th>
		<th>Members</th>
		<th>USN</th>
		<th>Mobile No</th>
		<th>E-Mail</th>
	</tr>
	  <tr>
		<td>1</td>
		<td>Akshay</td>
		<td>01FB17ECS702</td>
		<td>(+91) 7259262657</td>
		<td>akshayjambagi3@gmail.com</td>
	  </tr>
	  <tr>
		<td>2</td>
		<td>Rashi Badardinni</td>
		<td>01FB17ECS704</td>
		<td>(+91) 8830209769</td>
		<td>rashibadardinnis@gmail.com</td>
	  </tr>
	  <tr>
		<td>3</td>
		<td>Zainab Muskaan</td>
		<td>01FB17ECS733</td>
		<td>(+91) 1234567890</td>
		<td>zainabmuskaan@gmail.com</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>Divya Rajshekar</td>
		<td>01FB17ECS710</td>
		<td>(+91) 1234567890</td>
		<td>divyarajshekar@gmail.com</td>
	  </tr>

	</table>
	</div>

</div>
  
  <hr id="about">

  <!-- About Section -->
  <div class=" padding-32 center">  
 
    <div class="padding-12	">
      <h4><b>We are, who we are.</b></h4>
      <h6><i>We are bunch of students doing Software Engineering Project. We have been planning for project in this stage and will be more and more enhanced as how the time pass by.</i></h6>
      	
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="green row-padding padding-32">
<div class="third">
	<h3>Contact Us</h3>
	<p>
		<br><b>Super Market Management System</b>
		<br>Dwarakanagar, BSK III Stage,
		<br>Bangalore- Karataka - 560085.<br>
		<br><b>Email : </b>butterinventory@gmail.com
		<br><b>Contact Number: </b>(O) 080 080080080
		<br><b>Fax – </b>080 080080080
	</p>
</div>


  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function sidebar_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function sidebar_close() {
  document.getElementById("mySidebar").style.display = "none";
}
function liked() {
	this.style.visibility="visible";
}

</script>


</body></html>
