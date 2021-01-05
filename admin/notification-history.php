<?php
    include_once '../database.php' ;
    $sql="select * from notifications";
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
                    <div class="col-lg-5 mx-auto">
                    <table class="content-table">
            <thead class="thead-dark">
            <tr>
                <th>NotificationID</th>
                <th>UserID</th>
                <th>VendorID</th>
                <th>Message</th>
                <th>Date</th>
                <tr>
            </thead>
            <?php
                while($rows=mysqli_fetch_assoc($fire))
                {
            ?>        
                    <tr>
                    <td><?php echo $rows['NotificationID'];?></td>
                    <td><?php echo $rows['UserID'];?></td>
                    <td><?php echo $rows['VendorID'];?></td>
                    <td><?php echo $rows['Message'];?></td>
                    <td><?php echo $rows['Date'];?></td>
                    
                    </tr>
            <?php        
                }
            ?>    
            </tbody>  
        </table>

        <button style="margin-left:200px;" class="btn btn-lg btn-block btn-danger btn2" type="button"><a href="admin-view.php" style="text-decoration:none; color:black">&lt;&nbsp;Back</a></button>

                    </div>
                </div>
            </div>
        </section>
        

    </body>
</html>

