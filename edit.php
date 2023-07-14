<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset class="container">
        <h2>Update Contact</h2>
        <?php 
        include 'db.php';
        $id = $_GET['id'];
        $sql="SELECT * FROM userinfo WHERE id=".$id;
        $result=mysqli_query($conn, $sql);
        if($result){
            $row=mysqli_fetch_assoc($result);
            $contactname=$row['name'];
            $contactphone=$row['phone'];
            $contactaddress=$row['address'];
}
         ?>
        <div>
            <form action="update.php" method="post">
                <input type="text" name="name" id="username" value="<?php global $contactname; echo $contactname ?>"required> <br> <br>
                <input type="number" name="phone" id="phone" value="<?php global $contactphone; echo $contactphone ?>"required> <br> <br>
                <input type="text" name="address" id="address" value="<?php global $contactaddress; echo $contactaddress ?>" required> 
                <input type="hidden" name="id" id="id" value="<?php global $id; echo $id ?>"  required> 
                <input type="submit" value="Update">
            </form>
        </div>
    </fieldset>
    <hr>
   </body>
</html>