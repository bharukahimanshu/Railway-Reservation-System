<?php

if(isset($_POST["submit"])){
  $Uname=$_POST["Username"];
  $pwd=$_POST["mypass"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputlogin($pwd,$Uname) !== false){
    header("location:../login.php?error= Pleasefillalltheboxes");
    exit();
  }

  loginuser($conn, $Uname, $pwd);

}
else{
    header("location:../login.php");
    exit();
}

