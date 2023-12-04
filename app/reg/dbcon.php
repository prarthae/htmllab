<?php
include '../common/conn.php';
if(isset($_POST['SUBMIT']))
{
$_name=$_POST["student_name"];
$ktuid=$_POST["STUDENT_ID"];
$ROLLNO=$_POST["ROLL_NO"];
$SEM=$_POST["SEMESTER"];
$GENDER=$_POST["GENDER"];
$dw= "insert into ktu_registration values('$ktuid','$ROLLNO','$_name','$GENDER','$SEM')";
if($dw)
$p=mysqli_query($con,$dw);
if($p)
{
    echo "row inserted";
}
else
{
    echo "not inserted";

}
}
/*if($con)
{
    echo "connected";
}*/
?>