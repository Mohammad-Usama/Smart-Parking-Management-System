<?php

session_start();

$id=$_GET['pn'];
$conn = mysqli_connect("localhost","root","","class") or die("Connection Failed");
// Check connection

$query="DELETE FROM staffdata WHERE staff_cnic='$id';";
$data=mysqli_query ($conn,$query);
if($data)
{
       echo "<script>alert('Data has been deleted')</script>";
       echo "<script>location.href='user.php'</script>";
}

?>