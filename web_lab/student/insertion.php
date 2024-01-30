<?php
//if(isset($_POST['submit'])){
include 'dbcon.php';

$ktuid=$_POST["ktuid"];
$rolno=$_POST["rolno"];
$name=$_POST["sname"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$email=$_POST["mail"];
$phn=intval($_POST["phn"]);


$q="insert into registration values('$rolno','$ktuid','$name',$gender,'$age','$email',$phn)";
$result=mysqli_query($con,$q);

if($result){
   //echo "<script> alert('row inserted')</script>";
   echo "row inserted";
}
//}
?>