<?php
 ob_start();
 session_start();
 $con=mysqli_connect("localhost","root","","inventory");
 
 if(isset($_POST['update']))
{
	$eid=$_POST['eid'];
	$jdate=$_POST['jdate'];
	$sal=$_POST['sal'];
	
	$query1="UPDATE reg_users SET verify='verified' where eid='$eid';";
	$query_run=mysqli_query($con,$query1);
	$query2="UPDATE reg_users SET jdate='$jdate' where eid='$eid';";
	$query_run=mysqli_query($con,$query2);
	$query3="UPDATE reg_users SET status='Working' where eid='$eid';";
	$query_run=mysqli_query($con,$query3);
	$query4="UPDATE reg_users SET salary='$sal' where eid='$eid';";
	$query_run=mysqli_query($con,$query4);
	if($query_run)
	{
		echo '<script type="text/javascript"> alert("verified user");</script>';
		echo"<script>window.location.href='http://localhost/proj/invento/admin_emp.php' </script>";
	}
}

if(isset($_POST['update1']))
{
	$eid=$_POST['eid'];
	$ldate=$_POST['ldate'];
		
	$query="UPDATE reg_users SET status='Not working' where eid='$eid';";
	$query_run=mysqli_query($con,$query);
	$query="UPDATE reg_users SET ldate='$ldate' where eid='$eid';";
	$query_run=mysqli_query($con,$query);
	if($query_run)
	{
		echo '<script type="text/javascript"> alert("updated");</script>';
			echo"<script>window.location.href='http://localhost/proj/invento/admin_emp.php' </script>";
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
    <a href="admin.php" onclick="sidebar_close()" class="bar-item button">Admin Panel</a>
<?php	
 //session_start();

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
	<!-- Code here -->
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
		
			<fieldset>
					<h2> <u> Employee Information </u> </h2> <br>

<?php
$query = "SELECT * FROM REG_USERS";
$data = mysqli_query($con, $query);
$total =mysqli_num_rows($data);
if($total !=0)
{
?>
<table  align="center" style="width:1000px;">
	<tr>
		<th>Employee Name</th>
		<th>Employee ID</th>
		<th>Aadhar</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Alternate Phone Number</th>
		<th>Date of Birth</th>
		<th>Designation</th>
		<th>Salary</th>
		<th>Sex</th>
		<th>Verification</th>
		<th>Joinig date</th>
		<th>Leaving date</th>
		<th>Status</th>		
	</tr>
	
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['empname']."</td>
		<td>".$result['eid']."</td>
		<td>".$result['aadhar']."</td>
		<td>".$result['email']."</td>
		<td>".$result['phno']."</td>
		<td>".$result['alph']."</td>
		<td>".$result['dob']."</td>
		<td>".$result['desig']."</td>
		<td>".$result['salary']."</td>
		<td>".$result['sex']."</td>
		<td>".$result['verify']."</td>
		<td>".$result['jdate']."</td>
		<td>".$result['ldate']."</td>
		<td>".$result['status']."</td>
	</tr>";
	}
}
else
{
	echo "No record found";
}
?>
					</table>
				</fieldset>
		</form>  
	</div>
</div>  

<fieldset>
<h3><u>Employee Verification</u></h3>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
		<div class="row">
			<div class="col-25">
			  <label for="alph">Employee ID</label>
			</div>
			<div class="col-75">
			  <input type="number" id="eid" name="eid" placeholder="Enter EID" >
			</div>
		</div>
		<div class="row">
			<div class="col-25">
			  <label for="alph">Joining Date</label>
			</div>
			<div class="col-75">
			  <input type="date" id="jdate" name="jdate" placeholder="Date" >
			</div>
		</div>
		<div class="row">
			<div class="col-25">
			  <label for="alph">Salary</label>
			</div>
			<div class="col-75">
			  <input type="number" id="sal" name="sal" placeholder="Salary" >
			</div>
		</div>
		
	<div class="row"><br>
		<button type="submit" class="buttonreg button5" name="update">Save and Verify</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</div>
</form>
</fieldset>
<br><br>

<fieldset>
<h3><u>Employee Resigning</u></h3>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
		<div class="row">
			<div class="col-25">
			  <label for="eid">Employee ID</label>
			</div>
			<div class="col-75">
			  <input type="number" id="eid" name="eid" placeholder="EID" >
			</div>
		</div>
		<div class="row">
			<div class="col-25">
			  <label for="alph">Leaving Date</label>
			</div>
			<div class="col-75">
			  <input type="date" id="ldate" name="ldate" placeholder="Date" >
			</div>
		</div>
		<div class="row"><br>
			<button type="submit" class="buttonreg button5" name="update1">Submit</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</div>
</form>
</fieldset>

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
		
