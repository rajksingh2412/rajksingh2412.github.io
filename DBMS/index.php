
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="login.css">
     
    <title>Blood</title>
</head>

<body background="./image/login.jpg" style=" background-size: cover; " >
    <h1 style=" color:white;" >BLOOD BANK MANAGEMENT SYSTEM</h1>
    <h3 class="user"><a href="signup.php">create user</a></h3>


<?php
if(isset($_SESSION['u_id'])){
    echo'<form action="includes/logout.inc.php" method="POST">                
         <button type="submit" name="submit" id="logout" class="button">logout </button>
         </form>';
}
else{
   echo '<div class="login">
             <form action="includes/login.inc.php" method="post">
                <h4>username : <input type="text" placeholder="enter ur username" name="uid" class="login-input"></h4>
                <h4>password:<input type="password" placeholder="enter ur password" name="pwd" class="login-input"></h4> </br>
                <button type="submit" name="submit" class="button button3">login</button>
             </form>
         </div>';
}
?>




   
    
</body>
</html>