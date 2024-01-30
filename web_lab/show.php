<?php 
  $conn=mysqli_connect('localhost','root','','library');
    $sq="SELECT * FROM book";
    $result=mysqli_query($conn,$sq);

    if($result){

        if(mysqli_num_rows($result)){
            echo "<table border='1'>
                        <tr>
                           <th>BOOK ID</th>
                           <th>BOOK NAME</th>
                           <th>AUTHOR</th>
                           <th>COPIES</th>
                        </tr>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                         <td>".$row['book_id']."</td>
                         <td>".$row['book_name']."</td>
                         <td>".$row['author']."</td>
                         <td>".$row['no_copy']."</td></tr>";
  
            }
            echo "</table>";

        }
    }
    echo "<a href='update.php'>UPDATE</a>";

?>