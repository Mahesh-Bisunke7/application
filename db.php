<?php 
$host="localhost";
$user="root";
$pass="";
$dbname="newprojects";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn){
    echo "Database Connected Successfully!";
}else{
    echo "Database Connection Failed!";
}

?>