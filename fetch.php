<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">

<input type="text" value="search">
<input type="text" name="val"><br>

<input type="submit" value="submit">


</form>
</body>
</html>








<?php
include 'conn.php';

if($_POST)
{

    $value=$_POST["val"];
    $s="select * from stud where roll_no=$value";
    $q=mysqli_query($con,$s);
    if(mysqli_num_rows($q))
{
    echo "<table border='1'>";
    echo "<th>Roll no</th><th>name</th><th>mark</th>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr><td>".$row["roll_no"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mark"]."</td></tr>";

    }
    echo"</table>";
}
else
{
    echo "not found";
}
}








?>
