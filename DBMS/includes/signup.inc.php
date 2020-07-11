<?php

if(isset($_POST['submit'])) {
   
    include_once 'dbh.inc.php';

    $uname =mysqli_real_escape_string($conn,$_POST['uname']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $pwd =mysqli_real_escape_string($conn,$_POST['pwd']);

    // error handler
    // check for empty field

    if(empty($uname) || empty($city) || empty($email) ||  empty($pwd)){

        header("Location: ../signup.php?signup=empty");
        exit();
    }
    else{
    //  check if character is valid

        if(!preg_match("/^[a-zA-Z]*$/", $uname) || !preg_match("/^[a-zA-Z]*$/", $city)){ 

        header("Location: ../signup.php?signup=invalid");
        exit();
        }
        else{
            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=email");
                exit();
            }
            else{
                $sql = "SELECT * FROM users WHERE name='$uname'";
                $result = mysqli_query($conn,$sql);
                $resultCheck=mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../signup.php?signup=Usertaken");
                    exit(); 
                }
                else{
                    // hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    // INSERT THE USER INTO THE DATABASE
                    $sql = "INSERT INTO users (uname,city,email,pwd) VALUES ( '$uname','$city','$email','$hashedPwd');";
                    mysqli_query($conn,$sql);
                    echo "confirm('user created');";
                    header("Location: ../index.php?signup=success");
                    exit();
               }
            }   
        }
    }
}
else {
    header("Location: ../.php");
    exit();
}