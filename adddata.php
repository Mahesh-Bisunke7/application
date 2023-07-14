<?php 
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];


echo $name, $phone ,$address;
include 'db.php';

$sql= "INSERT INTO userinfo(name,phone,address)VALUES('$name','$phone','$address')";

$result=mysqli_query($conn,$sql);

if($result){
    header('location:index.php');
}


?>