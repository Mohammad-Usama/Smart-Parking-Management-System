
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
                    <input type="hidden" name="id2" id="IDM" value="<?php echo $_GET['cn'];?>">
                    </div>
                     <div class="form-group">
                    <label class="control-label">Enter Staff_Name</label>
                <input class="form-control" name="Name" type="text" id="textName" value="<?php echo $_GET['na'];?>" placeholder="Enter Name">
                    </div>
                     <div class="form-group">
                    <label class="control-label">Enter Staff_Department</label>
                <input class="form-control" name="depart" type="text" id="textName" value="<?php echo $_GET['de'];?>" placeholder="Enter Name">
                    </div>
                <div class="form-group">
                    <label class="control-label">Enter Staff_Vehicle</label>
                <input class="form-control" name="vehicle" type="text" id="textName" value="<?php echo $_GET['vhi'];?>" placeholder="Enter Name">
                    </div>
                   
                     
                    <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Submit</button>
                </form>
           
     
        </div>
        <?php
        $conn=mysqli_connect("localhost","root","","parking") or die("Connection Failed");
            if(isset($_GET['Submit']))
            {
                $name=mysqli_real_escape_string($conn,$_GET['Name']);
                $depart=mysqli_real_escape_string($conn,$_GET['depart']);
                $vehicle=mysqli_real_escape_string($conn,$_GET['vehicle']);
                $IDM=mysqli_real_escape_string($conn,$_GET['id2']);
                $query="update add_staff SET staff_name='$name',staff_department='$depart',staff_vehicle='$vehicle' where staff_cnic='$IDM'";
                $data=mysqli_query($conn,$query);
               if($data)
          {
              echo "<script>alert('Records Update Successfully');</script>";
              echo "<script>location.href='showstaff.php'</script>";
          }
          else
          {
              echo "<script>alert('Record Not Updated');</script>";
          }
            }
        ?>
    </body>

</html>