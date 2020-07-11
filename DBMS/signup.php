<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="login.css">
     
    <title>Blood</title>
</head>
<body>
<section class="main-container">
        
    <div id="content">
     <form action="includes/signup.inc.php" class="registration" method="POST">
            
              <legend>Personal information:</legend>
              <!-- <span>username:&nbsp;&nbsp; </span> -->
              <input type="text" name="uname" placeholder="enter the username">
              <br>
              <!-- <span>city:&nbsp;&nbsp; &nbsp; &nbsp;</span> -->
              <input type="text" name="city" placeholder="enter the city">
              <br>
              <!-- <span>Email:&nbsp; &nbsp; &nbsp; &nbsp;</span> -->
              <input type="email" name="email" placeholder="enter the email">
              <br>
              <!-- <span>Password:</span> -->
              <input type="password" name="pwd" placeholder="enter the password">
              <br>
            
              <button type="submit" class="button" name="submit">submit</button>
              <button  class="button " ><a href="main.php">login</a></button>
            
          </form>

    </div>
<?php
    include_once 'footer.php'
?> 