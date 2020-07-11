<?php
session_start();

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $uid=mysqli_real_escape_string($conn , $_POST['uid']);
    $pwd=mysqli_real_escape_string($conn , $_POST['pwd']);

    // error hanlder
    // check if input empty

    if(empty($uid) || empty($pwd)){
        header("Location: ../main.php?login=empty");
        exit();
    }
    else{
        $sql= "SELECT * FROM users WHERE uname='$uid' OR email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck= mysqli_num_rows($result);

        if($resultCheck < 1){
            header("Location: ../main.php?login=error1");
        exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                // dehash ing the pwd
                $hashPwdCheck = password_verify($pwd,$row['pwd']);
                if($hashPwdCheck == false){
                    header("Location: ../main.php?login=error2");
                    exit(); 
                }
                elseif($hashPwdCheck ==true){
                //    login the user here //
                 $_SESSION['u_id'] = $row['uname']; 
                 $_SESSION['u_city'] = $row['city']; 
                 $_SESSION['u_email'] = $row['email']; 
                //  $message = "wrong answer";
                //  echo "<script type='text/javascript'>alert('$message');</script>";
                 header("Location: ../main.php?login=success");
                    exit(); 
                }
            }
        }
    }
    
}

else{
    header("Location: ../index.php?login=error3");
    exit();
}