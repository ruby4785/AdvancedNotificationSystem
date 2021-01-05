<?php
  session_start();
  if(!isset($_SESSION['User']))
  {
    header("location: ../index.php");
  }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    
    <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/New.css">
    <title>Advanced Notification System</title>
  </head>
  <body>
  <section class="register">
      <div class= "long">
        <div class="icon">
          <img src="../images/35.jpg">
          <p>Client Registration Form</p>
</div>
      
      
      <div class="mg">
      <form action="client-add-match.php" method="post">
                       Client-Name:<br>
                        <input type="text" name="name" placeholder="Enter your name" >
                       <br><br>Client-Email:<br>
                       <input type="text" name="email" placeholder="Enter your email">
                       <br><br>Client-Phone:<br>
                       <input type="text" name="phone" placeholder="Enter your number">
                       <br><br>Age:<br>
                       <input type="text" name="age" placeholder="Enter your age">
                       <br><br>Address:<br>
                       <input type="text" name="address" placeholder="Enter your address"><br><br><br>
                       
                       
                    <input style="margin-left:130px" type="submit" name="save" value="ADD">
                  </form>
                  </div>
</html>       
    
            
                
                  