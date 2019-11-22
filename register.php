<?php
 ob_start();
 session_start();
 if(isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }
 $con=mysqli_connect("localhost","root","","inventory");

 if (isset($_POST['btn-reg']) ) {
	$empname = $_POST['empname'];
	$eid = '';
	$aadhar = $_POST['aadhar'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];
	$alph = $_POST['alph'];
	$dob = $_POST['dob'];
	$desig = $_POST['desig'];
	$sex = $_POST['sex'];
	$pass = $_POST['pass'];
	$pin = $_POST['pin'];
  
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  if( !$error ) {
   $query = "INSERT INTO reg_users(empname,eid,aadhar,email,phno,alph,dob,desig,sex,pass,pin) VALUES('$empname','$eid','$aadhar','$email','$phno','$alph','$dob','$desig','$sex','$pass','$pin')";
   $res = mysqli_query($con,$query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
	echo 'Register successfully, Please login with your login details';
	echo"<script>window.location.href='http://localhost/proj/invento/login.php' </script>"
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
  
  
 }
?>
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
    <a href="index.html" onclick="sidebar_close()" class="bar-item button">Home</a>
  <a href="#" onclick="sidebar_close()" class="bar-item button">Login/Register</a>
  <a href="form.html" onclick="sidebar_close()" class="bar-item button">Contact / About Us</a>
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
<h2>Super Market Management System</h2>
<p>Inventory Solutions for all size organisations.</p>
<br>
<fieldset>	<div class="row-padding padding-16 center" id="food">
		<h1>Register</h1>


	
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
  <div class="row">
    <div class="col-25">
      <label for="name">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="empname" name="empname" placeholder="Your full name here.." >
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="aadhar">Aadhar</label>
    </div>
    <div class="col-75">
      <input type="text" id="aadhar" name="aadhar" placeholder="Your 15 digit Aadthar UID Number here.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email-ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email id here.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phno">Phone Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="phno" name="phno" placeholder="Your phone number here.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="alph">Alternate Phone Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="alph" name="alph" placeholder="Your alternate phone number here.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="dob">Date of birth (YYYY-MM-DD)</label>
    </div>
    <div class="col-75">
      <input type="text" id="dob" name="dob" placeholder="Your date of birth here.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="desig">Designation</label>
    </div>
    <div class="col-75">
      <select id="desig" name="desig" >
        <option value="">-- Select gender--</option>
        <option value="complaint">Manager</option>
		<option value="seeking">Cashier</option>
        <option value="seeking">Salesman</option>
		<option value="seeking">Helper</option>
		<option value="seeking">Security</option>
		<option value="seeking">Delivery</option>
		<option value="suggestion">Janitor</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="sex">Gender</label>
    </div>
    <div class="col-75">
      <select id="sex" name="sex" >
        <option value="">-- Select gender--</option>
        <option value="complaint">Male</option>
        <option value="suggestion">Female</option>
        <option value="seeking">Others</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pass">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Password" style="width:850px;height:45px">
    </div>
 </div>
 <div class="row">
    <div class="col-25">
      <label for="alph">Enter four-digit Pin for security</label>
    </div>
    <div class="col-75">
      <input type="text" id="pin" name="pin" placeholder="0000" >
    </div>
  </div>
  
  <div class="row"><br>
	<button type="submit" class="buttonreg button5" name="btn-reg">Register</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="http://localhost/proj/invento/login.php" <button class="buttonreg button5">Login</button></a>
  </div>
  </form>
 </div>
</div>
  
  <hr id="about">


  
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



