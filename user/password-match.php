<!doctype html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body style="background-color:#433d3c;">
        <?php
            include_once '../database.php';
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
            	 
                $email=$_POST['email'];
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                $VendorName=$_POST['VendorName'];
                $category=$_POST['category'];
                $phone=$_POST['phone'];
                
                $query1="select VendorName from vendor where VendorName='$VendorName'";
                $fire=mysqli_query($conn,$query1);
                               
                if(mysqli_num_rows($fire)==0)
                {
                    $sql="insert into vendor (VendorName,Email,Address,Phone,Category,Deleted) values ('$VendorName','$email','$address','$phone','$category',0)";
                    if($fire=mysqli_query($conn,$sql))
                    {
                        $getvendorid="select VendorID from vendor where VendorName='$VendorName'";
                        $fire=mysqli_query($conn,$getvendorid);
                        $row=mysqli_fetch_array($fire);
                        $vendorid=$row['VendorID'];
                        $password=randomPassword();
                        $sql="insert into usermaster (VendorName,VendorID,Email,Password,Name,Deleted,Phone) values ('$VendorName','$vendorid','$email','$password','$name',0,'$phone')";
                        $fire=mysqli_query($conn,$sql);
                        $msg="Your Default Password is:".$password;
                        

                        mail($email,"Advanced Notification Password",$msg,'From: Advanced Notication Manager <egamer4785@gmail.com>');
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
  
                      ?>    
                        <div class="container-fluid">
                        <div class="row">
                            <div style="margin-top:200px;"class="col-lg-4 mx-auto">
                                <div class="card">
                                  <div class="card-header" style="background-color: #70af85;">
                                    <h3>Success</h3>
                                  </div>
                                  <div style="background-color:#c6ebc9" class="card-body">
                                    
                                    <h2 style="text-align:center;">Check Email For Default Password</h2>
                                    
                                    <button style="margin-left:170px;margin-top:30px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="../index.php" style="text-decoration:none; color:#FFFFFF"><-Back</a></button>
                                  </div>
                                </div>
                              </div>
                          <?php          
                          }
                          else{
                              echo "failed";
                          }

                }
                else
                {
                    ?>

                    <div class="container-fluid">
                        <div class="row">
                            <div style="margin-top:200px;"class="col-lg-4 mx-auto">
                                <div class="card">
                                  <div class="card-header" style="background-color: #ff4646;">
                                    <h3>Failed</h3>
                                  </div>
                                  <div style="background-color:#ff8585" class="card-body">
                                    
                                    <h2 style="text-align:center;">Account Already Exists!</h2>
                                    
                                    <button style="margin-left:170px;margin-top:30px;"class="btn btn-lg btn-block btn-dark" type="button"><a href="../index.php" style="text-decoration:none; color:#FFFFFF"><-Back</a></button>
                                  </div>
                                </div>
                              </div>
                     <?php         
                }
                
            
             
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>