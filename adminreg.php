<?php
session_start();
$F=$_POST['first_name'];
$L=$_POST["last_name"];
$E=$_POST["email"];
$Ph=$_POST["phone"];
$Ps=$_POST["password"];
$user_image=$_FILES['image']['name'];
$user_image_tmp=$_FILES['image']['tmp_name'];
// Create connection
$conn =  mysqli_connect("localhost", "root", "", "class") or die("Connection Failed");

// Check connection

if(isset($_POST['submit']))
{
    $folder="images/".$user_image;
    move_uploaded_file($user_image_tmp,$folder);
    
    $reg="INSERT INTO admindata(First_Name,Last_Name,Email,Phone,Image,Password) VALUES ('$F','$L','$E','$Ph','$folder','$Ps')";
    $query=mysqli_query($conn,$reg);
    if($query)
    {
        echo "<script>alert('Your data is inerted successfully');</script>";
  echo "<script>location.href='adminprofile.php';</script>";

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
    echo"<script>location.href='adminprofile.php';</script>";
}
  
}
  
?>