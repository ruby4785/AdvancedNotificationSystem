<?php
    
    session_start();
    if(!isset($_SESSION['User']))
    {
      header("location: ../index.php");
    }
    include_once '../database.php';
    if(isset($_POST['submit']))
    {
        $msg = $_POST['text'];
        $subject=$_POST['subject'];
        $vendor=$_POST['vendor'];
        $sql="select * from vendor where VendorName='$vendor'";
        $fire=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($fire);
        $vendorid=$row['VendorID'];
        $vendorEmail=$row['Email'];

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);
        $user=$_SESSION['UserID'];
        $sql1="select * from clients";
        $fire1=mysqli_query($conn,$sql1);
        $sql2 = "INSERT INTO notifications (UserID,VendorID,Message) VALUES('$user','$vendorid','$msg')";
        $fire2=mysqli_query($conn,$sql2);
        
        $result="";
       

        while($rows=mysqli_fetch_array($fire1))
        {
            $result=$rows['Email'].",".$result;

        }
        
        $final = substr($result, 0, -1); 
        
        mail($final,$subject,$msg,'From: '.$vendor.' <'.$vendorEmail.'>');

        $vendorid=$_SESSION['VendorID'];
        $message=$_POST['text'];
        $sql="select Phone from clients";
        $fire1=mysqli_query($conn,$sql);
        $result="";
       

    while($rows=mysqli_fetch_array($fire1))
    {
        $result=$rows['Phone'].",".$result;

    }
    
    $final = substr($result, 0, -1); 
                //<---PHone--->

                    $fields = array(
                        "sender_id" => "FSTSMS",
                        "message" => $_POST['text'],
                        "language" => "english",
                        "route" => "p",
                        "numbers" => $final,
                    );

                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode($fields),
                    CURLOPT_HTTPHEADER => array(
                        "authorization: xhbIueRoOZ9X6MwNCBptQvgd1fmUr4AFV3jcn28zqsDE70ikl5EBfC6ibNyPO1uxzdjeLYs8mM4cW9S5",
                        "accept: */*",
                        "cache-control: no-cache",
                        "content-type: application/json"
                    ),
                    ));

                    $response = curl_exec($curl);
                    $err = curl_error($curl);

                    curl_close($curl);

                    if ($err) {
                    echo "cURL Error #:" . $err;
                    } else {
                    
                    }

             //<---Whatsapp--->
             $sql="select Phone from clients";
             $fire3=mysqli_query($conn,$sql);
               while($row=mysqli_fetch_array($fire3))
               {
                   
                   $mobile="91".$row['Phone'];
                
                     $message=$_POST['text'];
                $data = [
                'phone' => $mobile, // Receivers phone
                'body' => $message, // Message
            ];
            $json = json_encode($data); // Encode data to JSON
            // URL for request POST /message
            $url = 'https://eu138.chat-api.com/instance208918/message?token=wg8t4yac6mak2lwu';
            // Make a POST request
            $options = stream_context_create(['http' => [
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $json
                ]
            ]);
            // Send a request
            $result = file_get_contents($url, false, $options);
            
               }
                    
               
                 


    }

    else
    {
        echo "failed!";
    }    
    

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
                                    
                                    <button style="margin-left:170px;margin-top:30px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="admin-view.php" style="text-decoration:none; color:#FFFFFF"><-Back</a></button>
                                  </div>
                                </div>
                              </div>
    </body>
    

</html>
 

