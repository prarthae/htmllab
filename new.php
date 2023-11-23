<?php
include 'conn.php';
$s="select * from stud";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
    echo "<table border=1>";
    echo "<th>Roll no</th><th>name</th><th>mark</th>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr><td>".$row["roll_no"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mark"]."</td></tr>";

    }
    echo"</table>";
}


?>