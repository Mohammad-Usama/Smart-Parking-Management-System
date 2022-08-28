
<!DOCTYPE html>
<html lang="en">
    <head>
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
 <script>
        $(document).ready(function()
        {
            $(window).load(function()
            {
                $("#myModal").modal('show');
            });
        });
        </script>
    </head>
    <body>
        <div class="container-fluid">
  
                <form method="get" id="main">
                    <div class="form-group">
                    <input type="hidden" name="id2" id="IDM" value="<?php echo $_GET['id'];?>">
                    </div>
                     <div class="form-group">
                    <label class="control-label">Enter First Name</label>
                <input class="form-control" name="Name" type="text" id="first" value="<?php echo $_GET['na'];?>" placeholder="Enter Name">
                    </div>
                     <div class="form-group">
                    <label class="control-label">Enter Last Name</label>
                <input class="form-control" name="last" type="text" id="last" value="<?php echo $_GET['la'];?>" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Enter Email Address</label>
                <input class="form-control" name="email" type="text" id="email" value="<?php echo $_GET['em'];?>" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Enter Phone Number</label>
                <input class="form-control" name="phone" type="text" id="phone" value="<?php echo $_GET['ph'];?>" placeholder="Enter Name">
                    </div>
                <div class="form-group">
                    <label class="control-label">Enter Password</label>
                <input class="form-control" name="pass" type="text" id="pass" value="<?php echo $_GET['ps'];?>" placeholder="Enter Name">
                    </div>
                   
                     
                    <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Submit</button>
                </form>
           
     
        </div>
        <?php
        $conn=mysqli_connect("localhost","root","","class") or die("Connection Failed");
            if(isset($_GET['Submit']))
            {
                $name=mysqli_real_escape_string($conn,$_GET['Name']);
                $last=mysqli_real_escape_string($conn,$_GET['last']);
                $email=mysqli_real_escape_string($conn,$_GET['email']);
                $phone=mysqli_real_escape_string($conn,$_GET['phone']);
                $pass=mysqli_real_escape_string($conn,$_GET['pass']);
                $IDM=mysqli_real_escape_string($conn,$_GET['id2']);
                $query="update admindata SET First_Name='$name',Last_Name='$last',Email='$email',Phone='$phone',Password='$pass' where ID='$IDM'";
                $data=mysqli_query($conn,$query);
               if($data)
          {
              echo "<script>alert('Records Update Successfully');</script>";
              echo "<script>location.href='adminprofile.php'</script>";
          }
          else
          {
              echo "<script>alert('Record Not Updated');</script>";
          }
            }
        ?>
    </body>

</html>