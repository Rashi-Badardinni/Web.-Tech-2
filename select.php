<?php  
 $connect = mysqli_connect("localhost", "root", "", "inventory");  
 $output = '';  
 $sql = "SELECT * FROM supplier";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Supplier ID</th>  
                     <th width="20%">Supplier name</th>  
                     <th width="15%">Phone number</th>  
                     <th width="15%">Alternate phno.</th>  
					 <th width="20%">GST ID</th> 
					 <th width="20%">Email</th> 
					 <th width="20%">Add/Delete</th>
					</tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	 while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
					 <td class="supname" data-id1="'.$row["id"].'" contenteditable>'.$row["supname"].'</td>  
                     <td class="supph" data-id2="'.$row["id"].'" contenteditable>'.$row["supph"].'</td>  
                     <td class="supname" data-id3="'.$row["id"].'" contenteditable>'.$row["alph"].'</td>  
					 <td class="supname" data-id4="'.$row["id"].'" contenteditable>'.$row["gstid"].'</td>  
					 <td class="supname" data-id5="'.$row["id"].'" contenteditable>'.$row["email"].'</td>  
					 <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
				<td id="supname" contenteditable></td>  
                <td id="supph" contenteditable></td>
				<td id="alph" contenteditable></td>
				<td id="gstid" contenteditable></td>
				<td id="email" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>
				
					<td id="supname" contenteditable></td>  
					<td id="supph" contenteditable></td>
					<td id="alph" contenteditable></td>
					<td id="gstid" contenteditable></td>
					<td id="email" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>