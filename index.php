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
        <h2>Contact Application</h2>
        <div>
            <form action="adddata.php" method="post">
                <input type="text" name="name" id="username" placeholder="Enter name" required> <br> <br>
                <input type="number" name="phone" id="phone" placeholder="Enter phone" required> <br> <br>
                <input type="text" name="address" id="address" placeholder="Enter address" required> <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </fieldset>
    <hr>
    <h3>List of Users</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
            </tr>
        <?php
    include 'db.php';
    $sql= "SELECT * FROM userinfo";
    $result=mysqli_query($conn,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $phone=$row['phone'];
            $address=$row['address'];
            ?>
             <tr>
                
                <td><?php echo $name?></td>
                <td><?php echo $phone?></td>
                <td><?php echo $address?></td>
                <td>
                <a href="edit.php?id=<?php echo $id?>">Update</a>
                <a href="delete.php?id=<?php echo $id?>">Delete</a>
            </td>
                </tr>

            <?php
        }
    }
    ?>
    </table>

</body>
</html>