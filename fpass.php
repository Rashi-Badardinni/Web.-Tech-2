<?php
 ob_start();
 session_start();
 $con=mysqli_connect("localhost","root","","inventory");
 
if ( isset($_SESSION['user'])!="" ) {
	echo"<script>window.location.href='http://localhost/proj/invento/profile.php' </script>";
}

if(isset($_POST['fpass'])){
	
	$email = $_POST['email'];
	$pin = $_POST['pin']; 
	$pass = $_POST['pass'];
	$cpass = $_POST ['cpass'];
	
	if($pass == $cpass )
	{
		$query  ="select * from reg_users where email='$email';";		
		$query_check = mysqli_query($con,$query);
		$row=mysqli_fetch_array($query_check);
	}
	else
	{
		//echo "<script>alert('Your Password is Updated');window.location.href='http://localhost/proj/invento/aboutus.php';</script>";
		echo "<script>alert('Your Passwords do not match');window.location.href='http://localhost/proj/invento/fpass.php';</script>";
	}

	if( $row['pin']==$pin )
	{
		$query1 ="update reg_users set pass='$pass' where email='$email';" ;
		$query_run = mysqli_query($con,$query1);
		echo "<script>alert('Your Password is Updated');window.location.href='http://localhost/proj/invento/login.php';</script>";
	}

	else
	{
		echo "<script>alert('Your Password is not Updated try again !!!');window.location.href='http://localhost/proj/invento/fpass.php';</script>";
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
	
<?php
if ( isset($_SESSION['user'])=="" )
  echo"<script> <a href='http://localhost/proj/invento/register.php' onclick='sidebar_close()' class='bar-item button'>Login/Register</a></script>";
else
	echo"<script> <a href='http://localhost/proj/invento/logout.php' onclick='sidebar_close()' class='bar-item button'>Logout</a></script>";
?>

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
<fieldset>	
<h2>Reset Password</h2>

	  <!-- First Photo Grid-->
	  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
	<div class="row-padding padding-16 center" id="food">
 <div class="row">
    <div class="col-25">
      <label for="email">Email-ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email id here..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pin">Pin Code</label>
    </div>
    <div class="col-75">
      <input type="text" id="pin" name="pin" placeholder="Your four-digit pin here..">
    </div>
  </div>
 <div class="row">
    <div class="col-25">
      <label for="pass">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Your password here.." style="width:850px;height:45px">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="cpass">Confirm Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="cpass" name="cpass" placeholder="Comfirm password..." style="width:850px;height:45px">
    </div>
  </div>
	
  <div class="row"><br>
	<button type="submit" class="buttonreg button5" name="fpass">Reset</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
