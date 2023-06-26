<?php
include_once 'navbar.php'
?>
<head>
    <link rel="stylesheet" href="login.css">
</head>
<style>
  html{
    height: 100%;
  }
  .item1,.item2,.item3,.item4,.item5,.item6,.item7,.item8{
        display: none;
    }
    .jadeja{
      margin-top: 20px;
      text-decoration: underline;
    }



</style>

<body>
        <form action="include/login.inc.php" method="POST">
            <div class="mb-3 mt-3">
              <label for="Username" class="form-label">User Name/Email ID</label>
              <input type="text" name="Username" class="form-control" id="Username" aria-describedby="emailHelp">
              
            <div class="mb-3 mt-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="mypass" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="jadeja"><a href="signup.php"><h5>Create new account</h5></a></div>

      <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "Pleasefillalltheboxes"){
            echo"<p class='myerror'>Fill all boxes</p>";
          }
          else if($_GET["error"] == "wronglogin"){
            echo"<p class='myerror'>Incorrect credentials</p>";
          }

             

           
       }
      ?>
</body>
