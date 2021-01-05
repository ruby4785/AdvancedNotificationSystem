<?php
    session_start();
    if(!isset($_SESSION['User'])){
      header("location: ../index.php");
    }
?> 
<!doctype html>
<html>
    <head>

    </head>
    <body>
        <?php
            include_once '../database.php';      	 
                $email=$_POST['email'];
                $name=$_POST['name'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $vendor=$_SESSION['VendorID'];
                $age=$_POST['age'];
                
                $sql = "INSERT INTO clients (Name,Email,Address,Phone,VendorID,age) VALUES('$name','$email','$address','$phone','$vendor','$age')";
                if($fire=mysqli_query($conn,$sql))
                {
                    echo "New record created successfully !";
                    header("location: client-view.php");
                }
                else{
                    echo "Failed!";
                }

               
               
           
             
            ?>

    </body>
</html>