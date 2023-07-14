<?php 
include 'db.php';
$id=$_GET['id'];
$sql= "DELETE FROM userinfo where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:index.php');
}

?>