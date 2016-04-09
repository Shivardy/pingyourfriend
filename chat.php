<?php
include('dd.php');

$msg=$_POST['msg'];
$table=$_POST['pingcode'];
$name=$_POST['uname'];
date_default_timezone_set("Asia/Kolkata");
$date=date('g:i A');
if(!empty($_POST['msg'])){
$query="INSERT INTO ".$table." (name, msg, date) values ('$name','$msg','$date')";
$run=$con->query($query);
}
$query="SELECT * FROM ".$table." ORDER BY id DESC ";
$run=mysqli_query($con,$query);
?>

