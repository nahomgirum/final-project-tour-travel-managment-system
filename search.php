
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>serching page</title>

   <link rel="stylesheet" href="css/ser.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" class="editor">
      <h3>search now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name"   required placeholder="enter your name"  >
      <input type="submit" name="submit" value="search Now" class="form-btn">
      <a href="db_control.php"><input type="button" value="back" class="form-btn"></a>
   </form>

</div>



<?php 
                                    $con = mysqli_connect("localhost","root","","user_db");
                                    $name="";
                                    if(isset($_POST['submit']))
                                    {
                                        $name = $_POST['name'];

                                        $query = "SELECT * FROM user_form WHERE name='$name' ";
                                        $query_run = mysqli_query($con, $query);

                                        if($row=mysqli_fetch_array($query_run))
                                        {
                                            ?>
                                            
                                            <div class="form-container">
                                            <form action="" method="post" class="edit">
    
     
      NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"   value="<?php echo $row['name']?>"  ><br>
      EMAIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $row['email']?>" ><br>
      PASSWORD:<input type="password" name="password" value="<?php echo $row['password']?>" ><br>
      USER_TYPE:<input name="user_type" value="<?php echo $row['user_type']?>"><br>
   </form>
                                            </div>
                                       

   <?php
                                        }

                                        
                                    }
?>
</body>
</html>