<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;600&display=swap" rel="stylesheet">
    <!-- My css sheet -->
    <link rel="stylesheet" href="homepage.css">

    <title>Welcome to RMP</title>
  </head>
  <style>
    
    a{
      text-decoration: none;
      color: white;
    }
    a:hover{
      color: coral;
    }
  </style>
<div class="container">
          <header>
              <a href="index.php">
                <h3>Railway Reservation System</h3>
              </a>
          </header>
      </div>

      <!-- navbar -->

      <div class="mynav">
          <ul class="nav justify-content-center">
            <li class="nav-item item1">
              <a class="nav-link active" aria-current="page" href="#">Book now</a>
            </li>
            <li class="nav-item item2">
              <a class="nav-link" href="trainschedule.php">Schedule</a>
            </li>
            <li class="nav-item item3">
              <a class="nav-link" href="#offers">Travel Ideas</a>
            </li>
            <li class="nav-item item4">
              <a class="nav-link" href="#">Offers</a>
            </li>
            
            <?php
            if(isset($_SESSION['useruid'])){
              echo "<li class=\"nav-item item5\"><a class=\"nav-link\" href=\"Profile page.php\">Profile Page</a></li>";
              echo "<li class=\"nav-item item6\"><a class=\"nav-link\" href=\"include/logout.inc.php\">Logout</a></li>";
            }
            else{
              echo"<li class=\"nav-item item7\"><a class=\"nav-link\" href=\"signup.php\">Sign In</a></li>";
              echo " <li class=\"nav-item item8\"><a class=\"nav-link\" href=\"login.php\">Login</a></li>";

            }
            ?>
            

            <!-- <li class="nav-item">
              <a class="nav-link" href="adminlogin.html">Admin</a>
            </li> -->
          </ul>
      </div>