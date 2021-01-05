<!doctype html>
<html>
    <head>
        <title>Auth Failed</title>
    </head>
    <body>
    <?php
        session_start();
    
       include_once 'database.php' ;
       if(isset($_POST['login'])){
        $username=$_POST['email'];
        $password=$_POST['pass'];

        $sql = "select * from usermaster where Email='$username' and Password='$password' and Deleted=0";
        $fire=mysqli_query($conn,$sql);

        if(mysqli_num_rows($fire)==1 and $username!='admin')
        {
            $row=mysqli_fetch_array($fire);
            $_SESSION['name']=$row['Name'];
            $_SESSION['VendorID']=$row['VendorID'];
            $_SESSION['VendorName']=$row['VendorName'];
            $_SESSION['UserID']=$row['UserID'];
            $_SESSION['User']=$row['Email'];
             header("Location: http://localhost/AdvancedNotificationSystem/user/logged-on.php");   
        }  
        elseif(mysqli_num_rows($fire)==1 and $username=='admin')  
        {
            $row=mysqli_fetch_array($fire);
            $_SESSION['name']=$row['Name'];
            $_SESSION['VendorID']=$row['VendorID'];
            $_SESSION['VendorName']=$row['VendorName'];
            $_SESSION['UserID']=$row['UserID'];
            $_SESSION['User']=$row['Email'];
             header("Location: http://localhost/AdvancedNotificationSystem/admin/admin-view.php");   
        }
        else
        {
            header("Location: http://localhost/AdvancedNotificationSystem/index.php?password=wrong");       
        }

       }
        
                  
    ?>
    </body>
</html>


