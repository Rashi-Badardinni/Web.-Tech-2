<html>  
    <head>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		
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
    </head>  
    <body>  
	
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
	
	
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
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
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        
        var supname = $('#supname').text(); 
		var supph = $('#supph').text();
		var alph = $('#alph').text();
		var gstid = $('#gstid').text();
		var email = $('#email').text();
       
        if(supname == '')  
        {  
            alert("Enter Supplier name");  
            return false;  
        }  
		if(supph == '')  
        {  
            alert("Enter supplier phone number");  
            return false;  
        } 
		if(alph == '')  
        {  
            alert("Enter alternate phone number");  
            return false;  
        } 
		if(gstid == '')  
        {  
            alert("Enter gstid");  
            return false;  
        } 
		if(email == '')  
        {  
            alert("Enter email");  
            return false;  
        } 
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{supname:supname,supph:supph,alph:alph,gstid:gstid,email:email},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
     
    $(document).on('blur', '.supname', function(){  
        var id = $(this).data("id1");  
        var supname = $(this).text();  
        edit_data(id,supname, "supname");  
    });
	$(document).on('blur', '.supph', function(){  
        var id = $(this).data("id2");  
        var supph = $(this).text();  
        edit_data(id,supph, "supph");  
    }); 
	$(document).on('blur', '.alph', function(){  
        var id = $(this).data("id3");  
        var alph = $(this).text();  
        edit_data(id,alph, "alph");  
    }); 
	$(document).on('blur', '.gstid', function(){  
        var id = $(this).data("id4");  
        var gstid = $(this).text();  
        edit_data(id,gstid, "gstid");  
    }); 
	$(document).on('blur', '.email', function(){  
        var id = $(this).data("id5");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    }); 
    $(document).on('click', '.btn_delete', function(){  
        var id = $(this).data("id6");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>