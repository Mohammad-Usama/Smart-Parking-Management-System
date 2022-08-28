
	<?php
	include('includes/header.php'); 
	include('includes/navbar.php'); 
	include('includes/scripts.php');
	?>




		<?php

			  if(isset($_POST['updatedata']))
			{
			   $id1=$_POST['update_id'];
			  
				 $fname=$_POST['fname'];
				 $lname=$_POST['lname'];
				 $email=$_POST['email'];
                 $phone=$_POST['phone'];
				 $password=$_POST['password'];
				
			
		$sql="update `admindata` SET First_Name='$fname', Last_Name='$lname',Email='$email',Phone='$phone',password='$password' where ID='$id1'";
		
		$query_run=mysqli_query($conn,$sql);
		
		
			if($query_run)
			{
				echo' <script> alert("User Data Updated SuccessFully");</script>';

				
			}
			else
			{
				echo' <script> alert("User Data Not Updated");</script>';
			}
				}

		?>



			<?php

			if(isset($_POST['delete-data']))
			{
				$id1=$_POST['del_id'];
				
				$sql="DELETE FROM `admindata` WHERE ID='$id1'";
				
				$query_run=mysqli_query($conn,$sql);
				if($query_run)
				{
					echo' <script> alert("User SuccessFully Delete");</script>';
					
				}
				else
				{
					echo' <script> alert("User Not Deleted");</script>';
				}
			}

             ?>

			   
			   
				<!docype html>
				<head>
				
				
				
				

				<script type="text/javascript">
				
				

				
				
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
						$('#p_modal').val(data[2]);
						$('#email').val(data[3]);
                        $('#phone').val(data[4]);
						$('#password').val(data[5]);
						
					});
				});
>
				
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

				</script>

			</head>
			<body>


					<div class="modal fade" id="editmodal" role="dialog" >
					  <div class="modal-dialog" role="document">
						<div class="modal-content">

						  <div class="modal-header">
						 
							<h5 class="modal-title">Update User Data</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <form method="POST" enctype="multipart/form-data">

							<div class="modal-body">
							
							
								 <input type="hidden" id="id" name="update_id">
					
								<div class="form-group">
									<label>Fisrt Name </label>
									<input type="text" required name="fname" id="p_name" class="form-control">
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" required name="lname"id="p_modal"  class="form-control" >
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" required name="email"id="email"  class="form-control" >
								</div>
                                <div class="form-group">
									<label>Email</label>
									<input type="text" required name="phone"id="phone"  class="form-control" >
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="text" required name="password"id="password"  class="form-control" >
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


				<div class="modal fade" id="deletemodal" role="dialog">
				<div class="modal-dialog">
				   
				   
				   <div class="modal-content">
				   <div class="modal-header">
				   <h5 class="modal-title">Delete Record</h5>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					 
				   </div>
					<form method="post">
				   <div class="modal-body">
				  
						<input type="hidden" id="id2" name="del_id">
						<h5>Are you sure to delete this user</h5>
							
				   </div>
				   
				   <div class="modal-footer">
				   <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				   <button type="submit" class="btn btn-danger" name="delete-data">Yes</button>
				   </div>
				   </form>
				   </div>
				</div>
				</div>

 <div class="card-header py-3">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile"><i class='fa fa-plus'></i>
						 Add New User
						</button>
						 
				</h6>
			  </div>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">

					  <div class="modal-header">
					 
						<h5 class="modal-title" id="exampleModalLabel">Add User information</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					 
                          <form method="POST" action="addstaff_reg.php" enctype="multipart/form-data" class="login100-form validate-form p-b-33 p-t-5">
                    
                    
                    <br>
                   
                      
				

						<div class="modal-body">
					
					

						<div class="form-group" data-validate = "Enter CNIC">
						<input class="form-control" type="number" name="cnic" placeholder="CNIC">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="form-group" data-validate = "Enter Name">
						<input class="form-control" type="text" name="name" placeholder="Enter Name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="form-group" data-validate = "Enter Department Name">
						<input class="form-control" type="text" name="department" placeholder="Department name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="form-group" data-validate = "Enter Vehicle Number">
						<input class="form-control" type="text" name="vehicle" placeholder="Vehicle Number">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="form-group" data-validate = "Enter Mobile Number">
						<input class="form-control" type="number" name="mobile" placeholder="Mobile Number">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    
                  <input type="file" class="form-control" name="image">
                    
                   
					
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-info" name="submit" value="Submit" >
						</div>
					  </form>

					</div>
					
					
				  </div>
				  
				</div>

			<div class="container-fluid">

			<div class="card shadow mb-4">
			  <div class="card-header py-3">
						<h4>Users Record</h4>
						 
				</h6>
			  </div>


				  <div class="card">
				 <div class="card-body">
			
				
			  
			  <table id="table1" class="table table-bordered display">
			  <thead>
				<tr>
				  
				  <th scope="col">Staff CNIC</th>
				  <th scope="col">Staff Name</th>
                    <th scope="col">Staff Department</th>
                    <th scope="col">Staff Vehicle</th>
				  
                    <th scope="col">Staff Mobile</th>
                    <th scope="col">Car_Image </th>
				  
				  <th scope="col">Edit</th>
				   <th scope="col">Delete</th>
				</tr>
			  </thead>
			 
			  <tbody>
                 
				<tr>
 <?php
            $conn = mysqli_connect("localhost","root","","class") or die("Error in connection");
            
            $query = mysqli_query($conn,"SELECT * from staffdata");
            while($result=mysqli_fetch_array($query))
            {
                echo"<tr>
                <td>".$result['staff_cnic']."</td>
                <td>".$result['staff_name']."</td>
                <td>".$result['staff_department']."</td>
                <td>".$result['staff_vehicle']."</td>
                <td>".$result['staff_mobile']."</td>
                <td><img src='$result[staff_picture]' style='height:90px;' alt='Missing Picture'>
                <br>
                
                </td>
                <td><a href='updatastaff.php? na=$result[staff_name]&vhi=$result[staff_vehicle] &de=$result[staff_department]&cn=$result[staff_cnic]' onclick='return myfunction()'>Update</td>
                <td><a href='staffdelete.php? pn=$result[staff_cnic]' onclick='return show()' role='button'>Delete</td>
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