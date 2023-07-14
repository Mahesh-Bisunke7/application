<?php 
include 'db.php';
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$sql= "UPDATE userinfo SET name='$name',phone='$phone','address'=$address WHERE id= $id ";

$result=mysqli_query($conn, $sql);

if($result){
    header('location:index.php');
}

?>