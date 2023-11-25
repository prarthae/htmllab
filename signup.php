<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SignUp Form </h2>
    <form method="post">
        <input type="text" name="name" placeholder="Enter Name:" required><br><br>
        <input type="text" name="email" placeholder="Enter Email:" required><br><br>
        <input type="password" name="pass" placeholder="Create Password:" required><br><br>
        <input type="password" name="password" placeholder="Retype Passward:" required><br><br>
        <input type="submit" name="submit" value="SignUp">

     </form>
    
</body>
</html>



<?php
if($_POST)
{
include 'conn.php';
if($_POST["pass"]==$_POST["password"])
{
    $username=$_POST["name"];
    $email=$_POST["email"];
    $pas=$_POST["pass"];

    $sq="insert into signup values('$username','$email','$pas')";

    $result=mysqli_query($con,$sq);
    if($result)
    {
        echo "Inserted";
    } 

}

}
?>