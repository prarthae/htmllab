<?php
echo"<html>
<head><link rel='stylesheet' href='style.css'></head>";
include 'conn.php';
$q="SELECT * FROM books";
$pq=mysqli_query($conn,$q);

if($pq){
    if(mysqli_num_rows($pq)){
        echo "<table class='book' border='2' cellpadding='10%'>
   <tr class='color'><th>BOOK ID</th>
        <th>BOOK NAME</th>
        <th>AUTHOR</th>
        <th>NO COPY</th>
        <th>PRICE</th></tr>";
        while($row=mysqli_fetch_assoc($pq)){
            echo "<tr><td>".$row['id_book']."</td>";
            echo "<td>".$row['name_book']."</td>";
            echo "<td>".$row['author_book']."</td>";
            echo "<td>".$row['copy_book']."</td>";
            echo "<td>".$row['price_book']."</td></tr>";
        }
        echo "<tr><th colspan='2'><a href='update.php'>UPDATE</a><th colspan='3'><a href='new_book.php'>ADD NEW BOOK</a></th></tr>";
        echo "</table>";
    }
}
echo "</html>";
?>