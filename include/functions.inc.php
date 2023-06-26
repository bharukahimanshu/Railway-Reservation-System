<?php

function emptyInputSignup($name,$age,$email,$pwd,$Uname){
    $result;
    if(empty($name) || empty($age) || empty($email) || empty($pwd) || empty($Uname)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUname($Uname){
    $result;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $Uname)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uniqueUname($conn, $Uname,$email){
   $sql = 'SELECT * FROM users WHERE usersUiD=? OR usersEmail=?;';
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location:../signup.php?error= STMT Failed");
    exit();
   
   }
   mysqli_stmt_bind_param($stmt,"ss", $Uname, $email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row=mysqli_fetch_assoc($resultData)){
       return $row;

   }
   else{
       $result= false;
       return $result;
   }

   mysqli_stmt_close($stmt);
}

function createuser($conn, $name,$age,$email,$pwd,$Uname){
    $sql = 'INSERT INTO USERS (usersName,usersAge,usersEmail,usersPassword,usersUiD) VALUES (?,?,?,?,?);';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location:../signup.php?error= STMT Failed");
     exit();
    
    }

    $hashed_pwd = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$name,$age,$email,$hashed_pwd,$Uname );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../login.php?error= ACCOUNT CREATED !!!");
    exit();
 
}

function emptyInputlogin($Uname,$pwd){
    $result;
    if(empty($Uname) || empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginuser($conn, $Uname, $pwd){
    $uidexists= uniqueUname($conn, $Uname,$Uname);

    if($uidexists === false){
        header("location:../login.php?erorr=wronglogin");
        exit();

    }

    $pwdhashed=$uidexists["usersPassword"];
    $checkpwd=password_verify($pwd,$pwdhashed);

    if($checkpwd===false){
        header("location:../login.php?erorr=wronglogin");
        exit();

    }
    else if($checkpwd===true){
        session_start();
        $_SESSION["userid"]=$uidexists["usersID"];
        $_SESSION["useruid"]=$uidexists["usersUiD"];
        header("location:../index.php");
        exit();

    }


}

