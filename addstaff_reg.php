<?php
session_start();
$C=$_POST['cnic'];
$N=$_POST["name"];
$D=$_POST["department"];
$V=$_POST["vehicle"];
$M=$_POST["mobile"];
$user_image=$_FILES['image']['name'];
$user_image_tmp=$_FILES['image']['tmp_name'];
// Create connection
$conn =  mysqli_connect("localhost", "root", "", "class") or die("Connection Failed");

// Check connection

if(isset($_POST['submit']))
{
    $folder="images/".$user_image;
    move_uploaded_file($user_image_tmp,$folder);
    
    $reg="INSERT INTO staffdata(staff_cnic,staff_name,staff_department,staff_vehicle,staff_picture,staff_mobile) VALUES ('$C','$N','$D','$V','$folder','$M')";
    $query=mysqli_query($conn,$reg);
    if($query)
    {
        echo "<script>alert('Your data is inerted successfully');</script>";
  echo "<script>location.href='user.php';</script>";

    }
       
    /*$filename=addslashes($_FILES["img"]["name"]);
    $tempname=addslashes(file_get_contents($_FILES["img"]["name"]));
    $filetype=addslashes($_FILES["img"]["type"]);
    $array=array('jpg', 'png');
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if(!empty($filename))
    {
        if(in_array($ext,$array))
        {
            $reg="INSERT INTO product(Name, Details,Image(name,image))  VALUES ('$N', '$E', '$filename','$tempname')";
        }
        else
        {
            echo "<script>alert('Unsported format');</script>";
        }
    }
    else
    {
        echo"<script>alert('Please Select image');</script>";
    }*/
    else
{
    echo"<script>alert('Your data not uploaded');</script>";
    echo"<script>location.href='user.php';</script>";
}
  
}
  
?>