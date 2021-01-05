<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "advanced notification system";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   echo "Could not Connect My Sql";
}
?>

