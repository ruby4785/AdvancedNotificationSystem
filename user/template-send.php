<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        header("location: ../index.php");
    }
    if(isset($_GET['filename']))
    {
        include_once '../database.php';
        $vendor=$_SESSION['VendorID'];
        $user=$_SESSION['UserID'];
        $vendorName=$_SESSION['VendorName'];


        $sql1="select * from clients where VendorID='$vendor'";
        $fire1=mysqli_query($conn,$sql1);
        $sql2 = "INSERT INTO notifications (UserID,VendorID,Message) VALUES('$user','$vendor','Template')";
        $fire2=mysqli_query($conn,$sql2);
        $sql3="select * from vendor where VendorID='{$_SESSION['VendorID']}';";
        $fire3=mysqli_query($conn,$sql3);
        $fetch=mysqli_fetch_array($fire3);


        $result="";


        while($rows=mysqli_fetch_array($fire1))
        {
            $result=$rows['Email'].",".$result;

        }

        $final = substr($result, 0, -1); 
        $headers="From: ".$vendorName.' '.'<'.$fetch['Email'].'>';
         //Location of file
        $template_file= "../templates/".$_GET['filename'];
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if(file_exists($template_file))
        {
            $message=file_get_contents($template_file);
            $subject=$_GET['subject'];

        }
        else
        {
            echo"failed";
        }

        if(mail($final,$subject,$message,$headers))
        {
            ?>
            <html>
    <head>
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body style="background-color:#433d3c;">
    <div class="container-fluid">
                        <div class="row">
                            <div style="margin-top:200px;"class="col-lg-4 mx-auto">
                                <div class="card">
                                  <div class="card-header" style="background-color: #70af85;">
                                    <h3>Success</h3>
                                  </div>
                                  <div style="background-color:#c6ebc9" class="card-body">
                                    
                                    <h2 style="text-align:center;">Notification Successfully Sent!</h2>
                                    
                                    <button style="margin-left:170px;margin-top:30px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="logged-on.php" style="text-decoration:none; color:#FFFFFF"><-Back</a></button>
                                  </div>
                                </div>
                              </div>
    </body>
    

</html>
 <?php

        }


    }
   





?>