<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        header("location: ../index.php");
    }
    if(isset($_GET['delete']))
    {
        include_once '../database.php';
        $sql1="update vendor set Deleted=1 where VendorID='{$_GET['delete']}';";
        $sql2="update usermaster set Deleted=1 where VendorID='{$_GET['delete']}';";
        $fire1=mysqli_query($conn,$sql1);
        $fire2=mysqli_query($conn,$sql2);
        header("location: vendor-view.php");
        
       
    }
    include_once '../database.php' ;
    $sql="select * from vendor";
    $fire=mysqli_query($conn,$sql);
?>
<!doctype html>
<html>
    <head>
        <title>Vendor-View</title>
        <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/tables.css">

    </head>
    <body>
                    <!-- Image and text -->
            <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="admin-view.php">
                <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                &nbsp&nbspAdvanced Notification System
            </a>
            </nav>
        
        <section class="tab">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                    <table class="content-table">
            <thead class="thead-dark">
                <tr>
                <th>Vendor ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Category</th>
                <th>Delete</th>
                <tr>
            </thead>
            <tbody>
            <?php
                while($rows=mysqli_fetch_assoc($fire))
                {
                    if($rows['Deleted']==0){
            ?>       
                    <tr>
                    <td><?php echo $rows['VendorID'];?></td>
                    <td><?php echo $rows['VendorName'];?></td>
                    <td><?php echo $rows['Email'];?></td>
                    <td><?php echo $rows['Address'];?></td>
                    <td><?php echo $rows['Phone'];?></td>
                    <td><?php echo $rows['Category'];?></td>
                    <td><button class="btn btn-danger btn-sm" type="button"><a href="vendor-view.php?delete=<?php echo $rows['VendorID'];?>" style="text-decoration:none; color:white;">Delete</a></button></td>
                    </tr>
            <?php 
                    }       
                }
            ?>  
            </tbody>  
        </table>

        <button class="btn btn-lg btn-block btn-primary btn1" type="button"><a href="vendor-register.php" style="text-decoration:none; color:black">+ Add</a></button>
        <button class="btn btn-lg btn-block btn-danger btn2" type="button"><a href="admin-view.php" style="text-decoration:none; color:black">&lt;&nbsp;Back</a></button>

                    </div>
                </div>
            </div>
        </section>
        

    </body>
</html>