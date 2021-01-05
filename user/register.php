
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    
    <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Rnew.css">
    <title>Advanced Notification System</title>
  </head>
  <body>
    <section class="register">
        <div class=" long">
        <div class="icon">
          <img src="../images/35.jpg">
          <p> Registration Form</p>
</div>
            <div class="mg">
            
                    
                    <form action="password-match.php" method="post">
                       Company Name:<br> 
                       <input type="text" name="VendorName" placeholder="Enter your Company Name">
                       <br><br>Name:<br>
                       <input type="text" name="name" placeholder="Enter your Name">
                       <br><br>Email:<br>
                       <input type="email" name="email" placeholder="Enter your Email"> 
                       <br><br>Contact No:<br>
                       <input type="text" name="phone" placeholder="Enter your Number">
                       <br><br>Address:<br>
                       <input type="text" name="address" placeholder="Enter your Address">
                       <br><br>Category:<br>
                       <select name="category">
    <option>Select</option>
    <option>Music</option>
    <option>Software</option>
    <option>Restaraunt</option>
    <option>Business</option>
    <option>Other</option>

  </select><br><br>
                    
                       <input style="margin-left:130px;" type="submit" name="save" value="Sign up"><br><br><br>
                  </form>
                
            </div>
        </div>
    </section>

  </body>
</html>