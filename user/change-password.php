<?php
session_start();
if(!isset($_SESSION['User']))
    {
        header("location: ../index.php");
    }
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>
            Change Password
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body style="background-color:#ffd66b;">
    <?php
        include_once '../database.php';
    if(isset($_POST['new-pass'])){
        $userid=$_SESSION['UserID'];
        $newpass=$_POST['new-pass'];
        $sql="update usermaster set Password='$newpass' where UserID='$userid'";
        if($fire=mysqli_query($conn,$sql))
        {
            session_destroy();
            header("location: ../index.php");
        }
    }

    else{
        ?> 
        <div class="container-fluid">
            <div class="row">
                <div style="margin-top:200px;" class="col-lg-3 mx-auto">
                <form action="" method="POST">
                        <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Change Password</div>
            <div class="card-body">
            <h5>Old Password:</h5><input type="text" name="old-pass">
                    <h5>New Password:</h5><input type="text" name="new-pass">
                    <button style="margin: 20px 0 0 50px;" class="btn btn-primary btn-lg" type="submit" name="change">Change</button>
            </div>
        
    </form>

                </div>
            </div>
        </div>
        
    <?php
    }

    ?>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   
    </body>
</html>