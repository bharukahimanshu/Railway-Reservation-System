<?php

if(isset($_POST["submit"])){
    $name=$_POST["Fullname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $pwd=$_POST["mypass"];
    $Uname=$_POST["Username"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name,$age,$email,$pwd,$Uname) !== false){
        header("location:../signup.php?error= Please fill all the boxes");
        exit();
    }
    if(invalidUname($Uname) !== false){
        header("location:../signup.php?error= Invalid Username");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location:../signup.php?error= Invalid email");
        exit();
    }
    
    if(uniqueUname($conn,$Uname,$email) !== false){
        header("location:../signup.php?error= Username already taken. Choose another one");
        exit();
    }

    createuser($conn,$name,$age,$email,$pwd,$Uname);


}
else{
    header("location: ../signup.php");
}
