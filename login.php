<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LogIn </h2>
    <form method="post">
        <input type="text" name="name" placeholder="Enter username" required><br><br>
        <input type="password" name="pass" placeholder="Password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>

</body>
</html>



<?php
if($_POST)
{
    $con=mysqli_connect('localhost','root','','student');
    if($con)
    {
       $name=$_POST['name'];
       $password=$_POST['pass'];
       $sq="select * from signup where username='$name' and password='$password'";
       $result=mysqli_query($con,$sq);
       if($result)
       {
        echo "login successfulllll";
       }
    }
}

?>