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
                $category=$_POST['category'];
                
                $sql = "INSERT INTO vendor (VendorName,Email,Address,Phone,Category) VALUES('$name','$email','$address','$phone','$category')";
                $fire=mysqli_query($conn,$sql);


                header("location: vendor-view.php");
               
           
             
            ?>

    </body>
</html>