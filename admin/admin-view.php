<?php
  include_once "../database.php";
  session_start();
  $vendorid=$_SESSION['VendorID'];
  $sql="select * from clients where Deleted=0;";
  $fire=mysqli_query($conn,$sql);
  
  $sql="select * from notifications;";
  $fire2=mysqli_query($conn,$sql);
  $sql="select * from usermaster where Deleted=0;";
  $fire3=mysqli_query($conn,$sql);
  $sql="select * from vendor where Deleted=0;";
  $fire4=mysqli_query($conn,$sql);
  
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
    <link rel="stylesheet" href="../css/logged-on.css">
    <title>Advanced Notification System</title>
  </head>
<body> 
     <!-- Image and text -->
     <nav style="border-bottom:solid 0.5px black;"class="navbar navbar-lightbg-light">
            <a class="navbar-brand" href="admin-view.php">
            &nbsp;&nbsp;<img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                &nbsp;&nbsp;Advanced Notification System
            </a>
            <div style="margin-right:20px;">
            <button class="btn btn-lg btn-block btn-danger" type="button"><a href="logout.php?logout" style="text-decoration:none; color:#FFFFFF">Logout</a></button>        
                </div>
            </nav>
     
      <section class="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                 <?php
                      
                      if(isset($_SESSION['User']))
                      {
                        echo '<h1 style="color:white;">Hello, '.$_SESSION['name'].'</h1>';
                      }
                      else{
                        header("location: ../index.php");
                      }
                      

                 ?>
                 
                </div>
                <div class="col-lg-2">
                    <button  class="btn btn-lg btn-block btn-primary" type="button"><a href="../user/change-password.php" style="text-decoration:none; color:#FFFFFF">Change Password</a></button>
                
            </div>
        </div>
     </section>
    
    <!--Options-->

    <section class="options">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-white mb-3" style="max-width: 30rem;">
                      <div class="card-header">
                        <h3>Clients</h3>
                      </div>
                      <div class="card-body">
                        
                        <h1 style="margin-left:180px;font-size: 100px;" ><?php echo mysqli_num_rows($fire)?></h1>
                        
                        
                        <button style="margin-left:150px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="client-view.php" style="text-decoration:none; color:#FFFFFF">View</a></button>
                      </div>
                    </div>
                  </div>
            
                  <div class="col-lg-4">
                    <div class="card text-white mb-3" style="max-width: 30rem;">
                      <div class="card-header">
                        <h3>History</h3>
                      </div>
                      <div class="card-body">
                        
                        <h1 style="margin-left:180px;font-size: 100px;" ><?php echo mysqli_num_rows($fire2)?></h1>
                        
                        
                        <button style="margin-left:150px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="notification-history.php" style="text-decoration:none; color:#FFFFFF">View</a></button>
                      </div>
                    </div>
                  </div>
            
            
                  <div class="col-lg-4">
                    <div class="card text-white mb-3" style="max-width: 30rem;">
                      <div class="card-header">
                        <h3>Vendors</h3>
                      </div>
                      <div class="card-body">
                        
                      <h1 style="margin-left:180px;font-size: 100px;" ><?php echo mysqli_num_rows($fire4)?></h1>
                        
                        
                        <button style="margin-left:150px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="vendor-view.php" style="text-decoration:none; color:#FFFFFF">View</a></button>
                      </div>
                    </div>
                  </div>
    </section>

    <section class="second-row">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                <div class="col-lg-4">
                    <div class="card text-white mb-3" style="max-width: 30rem;">
                      <div class="card-header">
                        <h3>Users</h3>
                      </div>
                      <div class="card-body">
                        
                        <h1 style="margin-left:180px;font-size: 100px;" ><?php echo mysqli_num_rows($fire3)?></h1>
                        
                        
                        <button style="margin-left:150px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="view-users.php" style="text-decoration:none; color:#FFFFFF">View</a></button>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-lg-4">
                    <div class="card text-white mb-3" style="max-width: 30rem;">
                      <div class="card-header">
                        <h3>Send Notification</h3>
                      </div>
                      <div class="card-body">
                        
                        
                        
                        
                        <button style="margin-left:150px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="create-message.php" style="text-decoration:none; color:#FFFFFF">Create</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card text-white mb-3" style="max-width: 30rem;">
                      <div class="card-header">
                        <h3>Send Template</h3>
                      </div>
                      <div class="card-body">
                        
                        
                        
                        
                        <button style="margin-left:150px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="template-upload.php" style="text-decoration:none; color:#FFFFFF">Create</a></button>
                      </div>
                    </div>
                  </div>
                  

                    </div>
          
    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
  
</body>
</html>
