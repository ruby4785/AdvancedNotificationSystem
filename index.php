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
    <link rel="stylesheet" href="css/index.css">
    <title>Advanced Notification System</title>
  </head>
  <body>
    <!--Banner-->
    <section class="colored-section" id="title">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <h1>
            <span class="span1">Advanced</span><br><span class="span2">Notification</span><br><span class="span3">System</span>
            </h1>
          </div>
          <div class="col-lg-6">
            <form class="login" action="authenticate.php" method="POST">
              <label for="username">Email:</label><br>
              <input type="text" name="email" style="border: solid 1px #080808;"><br>
              <label for="Password">Password:</label><br>
              <input name="pass" type="password"><br><br>
            <button type="submit" class="btn btn-primary" name="login">Login</button><br><br> 
          </form>
          <button  class="btn btn-primary" id='register'><a href="user/register.php" style="text-decoration:none; color:#FFFFFF">Register</a></button><br><br>  
          <?php
            if(isset($_GET['password']))
            {
              ?><h5 style="margin-left:320px;color:red"><?php echo"Wrong Password"?></h5> 
             <?php 

            }
          ?>
          </div>
        </div>
      </div>
    </section>

    <!--Features-->
    <section class="white-section" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <i class="fas fa-check-circle fa-3x "></i>
            <h3>Fast</h3>
          </div>
          <div class="col-lg-4">
            <i class="fas fa-tachometer-alt fa-3x"></i>
            <h3>Effective</h3>
          </div>
          <div class="col-lg-4">
            <i class="fas fa-truck fa-3x"></i>
            <h3>100% Guarentee</h3>
          </div>
        </div>

      </div>
    </section>

    <!--Peak-->

    <section  id="peak" style="background-color: #03506f;">
      <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active container-fluid">
            <h2 class="sneak-a-peak">Interactive UI</h2>
            <img class="peak-image" src="images/Inside.PNG">
            
          </div>
        <div class="carousel-item container-fluid">
          <h2 class="sneak-a-peak">Create Notification Easily</h2>
          <img class="peak-image" src="images/Create.PNG">
          
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="sneak-a-peak">View And Manage</h2>
          <img class="peak-image" src="images/tables.PNG">
          
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>
</div>
        
      
    </section>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>