
	<?php
	include('includes/header.php'); 
	include('includes/navbar.php'); 
	include('includes/scripts.php');
	?>



		
		<?php
		 $conn=mysqli_connect("localhost","root","","class");
		 
			if(isset($_POST['addAdmin']))
			
			{
					
					
					$name=$_POST['name'];
					$password=$_POST['password'];
					
			
		   
		     $sql= "INSERT INTO `admindata`(`ID`, `name`, `password`) VALUES ('[value-1]','$name','$password')";
			 $query_run=mysqli_query($conn,$sql);
			  
			  
			  if($query_run)
					{
						echo'<script> alert("Data Saved");</script>';
						
					}
			  else
				{
					
					echo'<script> alert("Data Not Saved");</script>';
				}
				
				}
						   
			?>


  

		<?php

			  if(isset($_POST['updateadmin']))
			{
			   $id1=$_POST['update_id'];
			  
				  $name=$_POST['name'];
				 $password=$_POST['password'];
				
			
		$sql="update `admin` SET name='$name', password='$password' where admin_id='$id1'";
		
		$query_run=mysqli_query($conn,$sql);
		
		
			if($query_run)
			{
				echo' <script> alert("data update");</script>';

				
			}
			else
			{
				echo' <script> alert("data not update");</script>';
			}
				}

		?>

  <!--------End php for updata record----->



  <!----start php for delete record---->

			<?php

			if(isset($_POST['delete-data']))
			{
				$id1=$_POST['del_id'];
				
				$sql="DELETE FROM `admin` WHERE admin_id='$id1'";
				
				$query_run=mysqli_query($conn,$sql);
				if($query_run)
				{
					echo' <script> alert("data delete");</script>';
					
				}
				else
				{
					echo' <script> alert("data not delete");</script>';
				}
			}

             ?>

   <!------end delete php----->
				
				
   <!------Start Javascript part----->
			   
			   
				<!docype html>
				<head>
				
				
				
				

				<script type="text/javascript">
				
				
  <!------Call Edit Modal and retrive data in input fields----->
				
				
				$(document).ready(function(){
					$('.editmodal').on('click',function()
					{
						$('#editmodal').modal('show');
						  $tr=$(this).closest('tr');
						var data=$tr.children("td").map(function()
						{
							return $(this).text();
						}).get();
						console.log(data);
					   $('#id').val(data[0]);
						
						$('#p_name').val(data[1]);
                        $('#l_name').val(data[2]);
                        $('#e_name').val(data[3]);
                        $('#ph_name').val(data[4]);
						$('#p_modal').val(data[5]);
						
					});
				});
  <!------End Edit Modal----->
				
   <!------Call Delete Modal----->
				
				$(document).ready(function(){
					$('.dltbtn').on('click',function()
					{
						$('#deletemodal').modal('show');
						 $tr=$(this).closest('tr');
						var data=$tr.children("td").map(function()
						{
							return $(this).text();
						}).get();
						console.log(data);
					   $('#id2').val(data[0]);
					
					});
				});
  <!------End Delete Modal----->
				</script>
				
 <!------End JavaScript Part----->
			</head>
			<body>


				<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">

					  <div class="modal-header">
					 
						<h5 class="modal-title" id="exampleModalLabel">Add Admin information</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <form method="POST" enctype="multipart/form-data" action="adminreg.php">

						<div class="modal-body">
					
					

							<div class="form-group">
									<label>First Name </label>
									<input type="text" required name="first_name" id="p_name" class="form-control">
								</div>
                                <div class="form-group">
									<label>Last Name </label>
									<input type="text" required name="last_name" id="l_name" class="form-control">
								</div>
                                <div class="form-group">
									<label>Email </label>
									<input type="text" required name="email" id="e_name" class="form-control">
								</div>
                                <div class="form-group">
									<label>Phone </label>
									<input type="text" required name="phone" id="ph_name" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="text" required name="password" id="p_modal"  class="form-control" >
								</div>
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="submit" class="btn btn-primary">Add</button>
						</div>
					  </form>

					</div>
					
					
				  </div>
				  
				</div>



   
<!----------------Start Update model--------->

					<div class="modal fade" id="editmodal" role="dialog" >
					  <div class="modal-dialog" role="document">
						<div class="modal-content">

						  <div class="modal-header">
						 
							<h5 class="modal-title">Update Admin Profile</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <form method="POST" enctype="multipart/form-data">

							<div class="modal-body">
							
							
								 <input type="hidden" id="id" name="update_id">
					
								<div class="form-group">
									<label>First Name </label>
									<input type="text" required name="name" id="p_name" class="form-control">
								</div>
                                <div class="form-group">
									<label>Last Name </label>
									<input type="text" required name="name" id="l_name" class="form-control">
								</div>
                                <div class="form-group">
									<label>Email </label>
									<input type="text" required name="name" id="e_name" class="form-control">
								</div>
                                <div class="form-group">
									<label>Phone </label>
									<input type="text" required name="name" id="ph_name" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" required name="password"  id="p_modal"  class="form-control" >
								</div>
								
								
					
							
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" name="updatedata" class="btn btn-primary">Update</button>
							</div>
						  </form>

						</div>
						
						
					  </div>
					  
					</div>
<!----End Update Modal----->


<!--------Delete Modal---------->

				<div class="modal fade" id="deletemodal" role="dialog">
				<div class="modal-dialog">
				   
				   
				   <div class="modal-content">
				   <div class="modal-header">
				   <h5 class="modal-title">Delete Admin Profile</h5>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					 
				   </div>
					<form method="post">
				   <div class="modal-body">
				  
						<input type="hidden" id="id2" name="del_id">
						<h5>Are you sure to delete this admin</h5>
							
				   </div>
				   
				   <div class="modal-footer">
				   <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				   <button type="submit" class="btn btn-danger" name="delete-data">Yes</button>
				   </div>
				   </form>
				   </div>
				</div>
				</div>

<!---------end delete Modal---------------->

			<div class="container-fluid">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile"><i class='fa fa-plus'></i>
						 Add New Admin
						</button>
			<div class="card shadow mb-4">
			  <div class="card-header py-3">
						
						 
				<h4>Admin Record</h4>
			  </div>

 <!----Table Part----->
				  <div class="card">
				 <div class="card-body">
				
				
			  
			  <table id="table1" class="table table-bordered display">
			  <thead>
				<tr>
		
				  <th scope="col">First_Name</th>
				  <th scope="col">Last_Name</th>
                    <th scope="col">Email</th>
				  <th scope="col">Phone</th>

				  <th scope="col">Password</th>
			
				  
				  <th scope="col">Edit</th>
				   <th scope="col">Delete</th>
				</tr>
			  </thead>
			 
			  <tbody>
				<tr>
<?php
            $conn = mysqli_connect("localhost","root","","class") or die("Error in connection");
            
            $query = mysqli_query($conn,"SELECT * from admindata");
            while($result=mysqli_fetch_array($query))
            {
                echo"<tr>
                <td>".$result['First_Name']."</td>
                <td>".$result['Last_Name']."</td>
                <td>".$result['Email']."</td>
                <td>".$result['Phone']."</td>
                <td>".$result['Password']."</td>
               
                <br>
                
                </td>
                <td><a href='updateadmin.php? id=$result[ID]&na=$result[First_Name]&la=$result[Last_Name] &em=$result[Email]&ph=$result[Phone]&ps=$result[Password]' onclick='return myfunction()'>Update</td>
                <td><a href='admindelete.php? pn=$result[ID]' onclick='return show()' role='button'>Delete</td>
                </tr>";
            }
            ?>
					
				</tr>
			  </tbody>
			 
			  
			</table>
			  
			  </div>
			  </div>
			  

</div>

</div>



			
			</body>
			</html>