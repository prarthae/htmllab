<?php
$conn=mysqli_connect('localhost','root','','library');
?>
<html>
    <body>
        <table border="2">
            <form action="" method="post">
                <tr>
                    <th>book id</th>
                    <td><select name='book_id'>
                        <option>SELECT OPTION</option>
                        <?php
                        $q="SELECT book_id FROM book";
                        $sq=mysqli_query($conn,$q);
                        if($sq){
                            if(mysqli_num_rows($sq)){
                                while($row=mysqli_fetch_assoc($sq)){
                                    echo "<option>".$row['book_id']."</option>";
                                }
                            }
                        }
                        ?>
                    </select></td>
                </tr>
                <tr><td colspan="2"><center><input type="submit" name="update" value="SELECT"></center></td></tr>
            </form>
        </table>
    </body>
</html>


<?php

if(isset($_POST['update'])){

    $book_id=$_POST['book_id'];
    
    $q="SELECT * FROM book WHERE book_id='$book_id'";
    $rslt=mysqli_query($conn,$q);

    if($rslt){
        if(mysqli_num_rows($rslt)){
            echo "<form method ='post' action=''>";
            while($row=mysqli_fetch_assoc($rslt)){
                
                echo "BOOK ID = <input type='text' value=".$row['book_id']."readonly><br><br>";
                echo "BOOK NAME = <input type='text' value=".$row['book_name']."readonly><br><br>";
                echo "AUTHOR = <input type='text' value=".$row['author']."readonly><br><br>";
                echo "NUMBER OF COPIES = <input type='text' value=".$row['no_copy']."><br><br>";

            }
            echo "</form>";
        }
    }
}
?>


