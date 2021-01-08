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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile page</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else {
                            echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign-up</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log in</a></li>";
                        }
                    ?>

                
            </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">