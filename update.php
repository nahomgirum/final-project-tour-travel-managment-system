<?php

use LDAP\Result;

error_reporting(0);
$id=$_GET['id'];
 $conn= mysqli_connect('localhost','root','','user_db');

        if(isset($_POST['submit'])){
            $name =  $_POST['name'];
            $email =  $_POST['email'];
            $pass = ($_POST['password']);
            $user_type = $_POST['user_type'];


            $sql="UPDATE `user_form` SET `name`='$name',`email`='$email',`password`='$pass',`user_type`='$user_type' WHERE id=$id";
            $result=mysqli_query($conn,$sql);

            header('location:db_control.php');
        }
        

 ?>  


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update form</title>


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>update now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php   
error_reporting(0);

 $conn= mysqli_connect('localhost','root','','user_db');
 $result=mysqli_query($conn,"SELECT * FROM user_form  WHERE  id=$id ");
 $row= mysqli_fetch_assoc($result);

 ?>  

      <input type="text" name="name"  value="<?php echo $row['name'] ?>" required placeholder="enter your name">
      <input type="email" name="email" value="<?php echo $row['email']?>" required placeholder="enter your email">
      <input type="password" name="password" value="<?php echo $row['password'] ?>"  required placeholder="enter your password">
      <select name="user_type" value="<?php echo $row['user_type'] ?>"?>">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="update now" class="form-btn">
      <a href="db_control.php"><input type="button"  value="cancel" class="form-btn" ></a>
    
   </form>

</div>

</body>
</html>