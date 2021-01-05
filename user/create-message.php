<!DOCTYPE html>
<html>
  <head>
    <title>
      Create Message
    </title>
    <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
<body style="background-color:black;color:white;">
  <div class="container-fluid">
    <div class="row">

    <div class="col-lg-5 mx-auto mt-4">
    <h1>Create Message</h1><br>
<form action="email-send.php"  method="POST">
  <div class="form-group">
      <label for="subject">Subject:</label><br><br>
      <input name="subject" class="form-control" type="text"><br><br>
      <label for="exampleFormControlTextarea1">Enter Your Message:</label><br><br>
      <textarea  name="text" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
      <button style="margin-top:40px;margin-left:220px;" class="btn btn-primary" type="submit" name="submit">Submit</button>&nbsp;
        
    </div>
</form>
<br>
    </div>
    </div>
  </div>


</body>
</html>
