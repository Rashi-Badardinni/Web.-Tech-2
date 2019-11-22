<?php
 ob_start();
 session_start();
  if(isset($_SESSION['user'])!="" ){
   $user = $_SESSION['user'];
 }
 $con=mysqli_connect("localhost","root","","inventory");
$query="Select * from reg_users where  empname ='$user';";
	$res= mysqli_query($con,$query);
	$r = mysqli_num_rows($res);
	$row=mysqli_fetch_assoc($res);
		$empname = $row['empname'];
		$eid = $row['eid'];
		$aadhar = $row['aadhar'];
		$email = $row['email'];
		$phno = $row['phno'];
		$alph = $row['alph'];
		$dob = $row['dob'];
		$desig = $row['desig'];
		$sex = $row['sex'];
		$pass = $row['pass'];
		$pin = $row['pin'];

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
 //session_start();

if ( isset($_SESSION['user'])!="" ){
	echo"<a href='http://localhost/proj/invento/logout.php' onclick='sidebar_close()' class='bar-item button'>Logout</a>";
}
else{
	echo"<a href='http://localhost/proj/invento/login.php' onclick='sidebar_close()' class='bar-item button'>Login/Register</a>";
}

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
<!-- First Photo Grid-->
	<div class="row-padding padding-16 center" id="food">
	<!-- Code here -->
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
		<center style="padding:10px;">
			<a href="http://localhost/proj/invento/attend.php" <button class="buttonreg button5">View Attendance</button></a>
			<a href="http://localhost/proj/invento/sal.php" <button class="buttonreg button5">View Salary</button></a>
			<a href="http://localhost/proj/invento/order.php" <button class="buttonreg button5">Order</button></a>
		</center>
			<fieldset>
					<h2> <u> Profile </u> </h2> <br>
					<table  id="additem" align="center" style="width:900px;">
						<tr> 
							<td> Name  </td> 
							<td> <?php echo $empname ?> </td> 
						</tr>
						<tr>
							<td> Employee ID </td>
							<td> <?php echo $eid ?> </td>
						</tr>
						<tr>
							<td> E-mail </td>
							<td> <?php echo $email ?> </td>
						</tr>
						<tr>
							<td>  Designation</td>
							<td> <?php echo $desig ?> </td>
						</tr>
						<tr>
							<td> Date of Birth </td>
							<td> <?php echo $dob ?> </td>
						</tr>
						
						<tr>
							<td> Phone Number </td>
							<td> <?php echo $phno ?> </td>
						</tr>
						<tr>
							<td> Alternate Phone Number </td>
							<td> <?php echo $alph ?> </td>
						</tr>
					</table>
				</fieldset>
		</form>  
	</div>
</div>
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
