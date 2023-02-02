<?php   
error_reporting(0);
 include 'config.php';  
 $conn= mysqli_connect('localhost','root','','user_db');
 $res=mysqli_query($conn,"SELECT * FROM user_form ORDER by id ")
  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>db_control page</title></title>  
      <link rel="stylesheet" type="text/css" href="css/stydb_control.css">  
 </head>  
 <body>  
 <header></header>  
 <div>
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
            
           <th>ID</th>  
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>User_type</th>
            <th>Delete</th>
            <th>Update</th>
            <th>new user</th>
           
      </tr>  
      <?php   
    
           if ($result = mysqli_num_rows($res)>0) {  
                while ($result = mysqli_fetch_assoc($res)) {  
                     echo "  
                          <tr class='data'>  
                         
                               <td>".$result['id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['password']."</td>  
                               <td>".$result['user_type']."</td> 
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>
                               <td><a href='update.php?id=".$result['id']."' id='btn'>Update</a></td>
                               <td><a href='new_user.php?id=".$result['id']."' id='btn'>add</a></td>
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table> 
 </div>
 </body>  
 </html> 

 <!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/5a14263cad.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="sidenav">
	<header class="h1"><a href="admin_panel.php"> <i class="fa-solid fa-home">  </i>WELCOME ADMIN</i></a></i></header>
    
    <ul class="ul1">
        <li><a href="db_control.php"> <i class="fa-solid fa-user">check users</i></i></a></li>
        <li><a href="n.html"> <i class="fa-solid fa-box">Pacakges</i></i></i></a></li>
        <li><a href="#.html"> <i class="fa-solid fa-book">Books</i></i></a></li>
        <li><a href="search.php"> <i class="fa-solid fa-search">search user</i></i></a></li>
        <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket">Logout</i></i></i></a></li>
    </ul>



</div>

<div class="main">
</div>
</body>
</html>