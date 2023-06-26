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

</style>

<body>
   <form action="include/signup.inc.php" method="POST">
        <!-- Name -->
        <div class="mb-3 mt-3">
          <label for="Name" class="form-label">Full Name</label>
          <input type="text" name="Fullname" class="form-control" id="Name" aria-describedby="emailHelp" required>
        </div>  

        <!-- Age -->
        <div class="mb-3 mt-3">
          <label for="Age" class="form-label">Age</label>
          <input type="number" name="age" class="form-control" id="Age" aria-describedby="emailHelp" required>
        </div>  
        <!-- State -->
        <!-- <div class="mb-3 mt-3">
          <label for="State" class="form-label">State</label>
          <input type="text" name="state" class="form-control" id="State" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Your resident state</div>
        </div> -->
        <!-- Email -->
        <div class="mb-3 mt-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!-- password -->
        <div class="mb-3 mt-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="mypass" class="form-control" id="exampleInputPassword1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
          <div id="pwdHelp" class="form-text">At least one number,one uppercase and lowercase letter, at least 8 or more characters</div>
        </div>
        
        
        <!-- Username -->

        <div class="mb-3 mt-3">
          <label for="Username" class="form-label">User Name</label>
          <input type="text" name="Username" class="form-control" id="Username" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Your prefered username</div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        
    

    
    </form>

    <!-- < <?php
    
    //  if(isset($_GET["error"])){
    //   if($_GET["error"] == "Please fill all the boxes"){
    //     echo"<p class='myerror'>Please fill in all the data</p>";
    //   }
    //    else if($_GET["error"] == 'Invalid Username'){
    //      echo"<p class='myerror'>Please only use lowercase, uppercase english alphabets and digits from 0-9 !</p>";
    //    }
    //    else if($_GET["error"] == 'Invalid email'){
    //      echo"<p class='myerror'>Please input proper email !</p>";
    //    }
    //    else if($_GET["error"] == 'Username already taken. Choose another one'){
    //      echo"<p class='myerror'>Username already taken !!</p>";
    //    }
    //    else if($_GET["error"] == 'STMT Failed'){
    //      echo"<p class='myerror'>Something went wrong :(</p>";
    //    }
    //    else if($_GET["error"] == ' ACCOUNT CREATED !!!'){
    //      echo"<p class='myerror'>New Account Created !!</p>";
    //    }
    //  }

    ?>  -->

    



</body>
