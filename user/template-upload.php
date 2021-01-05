
<!DOCTYPE html>
<html>
  <head>
    <title>
      Upload template
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
<body style="background-color:black;color:white;">

<form action="template-upload.php" method="post" enctype="multipart/form-data">
    <div style="margin-top:100px;"class="row">
      <div class="col-lg-5 mx-auto">
      <h1>Select Template to Send</h1><br><br>
       <label>Subject:&nbsp;&nbsp;</label><input type="text" name="subject"><br><br>
      
      <input class="form-control form-control-lg" id="formFileLg fileToUpload" type="file" name="fileToUpload" ><br><br>
      
      <button style="margin-left:200px;"type="submit" class="btn btn-lg btn-primary" name="submit">Upload</button><br><br>
      <?php

if(isset($_POST['submit']))
{
    $target_dir = "../templates/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h3>The file </h3>". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "<h3> has been uploaded.</h3>";
    ?> <button class="btn btn-primary"><a href="template-send.php?filename=<?php echo $_FILES['fileToUpload']['name'] ;?>&subject=<?php echo $_POST['subject'];?>" style="text-decoration:none;color:white;">SEND</a></button><?php
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
    
}

?>
    </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>