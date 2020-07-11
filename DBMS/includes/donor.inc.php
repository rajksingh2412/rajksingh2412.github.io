<?php
session_start();
if(isset($_POST['submit'])) {
   
    include_once 'dbh.inc.php';
    
    $uname  =mysqli_real_escape_string($conn,$_POST['d_name']);
    $uaddress=mysqli_real_escape_string($conn,$_POST['d_add']);
    $city =mysqli_real_escape_string($conn,$_POST['d_city']);
    $bloodgrp=mysqli_real_escape_string($conn,$_POST['d_bloodgrp']);
    $age=mysqli_real_escape_string($conn,$_POST['d_age']);
    $gender =mysqli_real_escape_string($conn,$_POST['d_gen']);
    $mbl =mysqli_real_escape_string($conn,$_POST['d_mob']);
   
   //generating donar id
    $username =$_SESSION['u_id']; 
	$st1= substr($uname, 0,2) ;
    $st2 = rand(10,100); 
    $id = $st1."".$st2 ; 

    // blood unit generation
    $blood=rand(2,10);

    // error handler
    // check for empty field

    if(  empty($uname) || empty($city) || empty($uaddress) ||  empty($age) ||  empty($bloodgrp) ||  empty($gender) ||  empty($mbl) ){

        header("Location: ../donor.php?signup=empty1");
        exit();
    }
    else{
    
                    // INSERT THE USER INTO THE DATABASE
                    $sql = "INSERT INTO donor (donorid,dname,daddress,city,bloodgrp,age,gender,mobile,username) VALUES ( '$id','$uname','$uaddress','$city','$bloodgrp','$age','$gender','$mbl','$username');";
                    mysqli_query($conn,$sql);
                    
                    $sql = "INSERT INTO recievedblood (donorid,bloodunit,bloodgrp ,city) VALUES ( '$id','$blood','$bloodgrp','$city');";
                    mysqli_query($conn,$sql);
                    header("Location: ../donor.php?signup=success");
                    exit();
    }             
}
else {
    header("Location: ../.php");
    exit();
}