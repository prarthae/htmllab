<?php
include 'conn.php';
$rno=$_POST["rol"];
$name=$_POST["sname"];
$mark=$_POST["mrk"];
$sq="insert into stud values('$rno','$name','$mark')";
if($sq)
$p=mysqli_query($con,$sq);
if($p)
{
    echo "row inserted";
}
else
{
    echo "not inserted";

}

?>