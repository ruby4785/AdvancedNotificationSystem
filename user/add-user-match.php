<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        header("location: ../index.php");
    }
    
        include '../database.php';
       function randomPassword() {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); //turn the array into a string
            }
        $password=randomPassword();
        $vendorID=$_SESSION['VendorID'];
        $vendorName=$_SESSION['VendorName'];
        $email=$_POST['email'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $sql="insert into usermaster(VendorID,VendorName,Name,Email,Password,Phone) values ('$vendorID','$vendorName','$name','$email','$password','$phone')";
        if($fire=mysqli_query($conn,$sql))
        {
            mail($_POST['email'],'Default Password','Your Default Password is:'.$password,'From: Advanced Notification System <egamer4785@gmail.com>');
            $fields = array(
                "sender_id" => "FSTSMS",
                "message" => "Your Default Password is:".$password,
                "language" => "english",
                "route" => "p",
                "numbers" => $_POST['phone'],
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


            header("location: view-users.php");
        }
        else
        {
            echo"Failed";
        }


?>

