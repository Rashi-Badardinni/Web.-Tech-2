<?php
 ob_start();
 session_start();
  if(isset($_SESSION['user'])!="" ){
   $user = $_SESSION['user'];
 }
  $con=mysqli_connect("localhost","root","","inventory");
$query1="Select eid from reg_users where  empname ='$user';";
$e = mysqli_query($con, $query1);
$row=mysqli_fetch_assoc($e);
	$eid = $row['eid'];
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
		<fieldset>
					<h2> <u> Payroll Status </u> </h2> <br>
<?php
$query = "SELECT salary, date FROM emp_payroll WHERE eid='$eid' ORDER BY date DESC;";
$data = mysqli_query($con, $query);
$total =mysqli_num_rows($data);
if($total !=0)
{
?>
				<table  align="center" style="width:900px;">
					<tr>
						<th>Date</th>
						<th>Salary</th>	
					</tr>
	
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['date']."</td>
		<td>".$result['salary']."</td>
	</tr>";
	}
}
else
{
	echo "No record found";
}
?>
					</table>
				</fieldset><hr>
						<center style="padding:10px;">
			<a href="http://localhost/proj/invento/profile.php" <button class="buttonreg button5">Back</button></a>
			<a href="http://localhost/proj/invento/attend.php" <button class="buttonreg button5">View Attendance</button></a>
			<a href="http://localhost/proj/invento/order.php" <button class="buttonreg button5">Order</button></a>
		</center>
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
