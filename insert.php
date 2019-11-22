<?php  
$connect = mysqli_connect("localhost", "root", "", "inventory");
$sql = "INSERT INTO supplier(supname,supph,alph,gstid,email) VALUES('".$_POST["supname"]."', '".$_POST["supph"]."', '".$_POST["alph"]."', '".$_POST["gstid"]."', '".$_POST["email"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>