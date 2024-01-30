<html>

<body>
    <form method="post" action="">
        <input type="label" value="AVAILABLE BOOK ID">
        <?php
        include 'conn.php';
        echo "<select name='id_book'><option>SELECT</option>";
        $q="SELECT id_book FROM books";
        $pq=mysqli_query($conn,$q);
        if($pq){
            if(mysqli_num_rows($pq)){
                while($row=mysqli_fetch_assoc($pq)){
                    echo"<option>".$row['id_book']."</option>";
                }
                echo "<br>";
            }
        }
        echo "</select><br>";
        ?>
        <input type="submit" name="update" value="UPDATE">
    </form>
</body>

</html>
<?php
if(isset($_POST['update'])){
    include 'conn.php';
    $id_book=$_POST['id_book'];

    $q="SELECT * FROM books WHERE id_book='$id_book'";
    $pq=mysqli_query($conn,$q);
    if($pq){
        if(mysqli_num_rows($pq)){
            echo "<form method='post' action=''><table cellpadding='10%'>";
            while($row=mysqli_fetch_assoc($pq)){
                echo "<tr><th>BOOK ID</th><td><input type='text' name='id_book' value=".$row['id_book']." readonly></td></tr>";
                echo "<tr><th>BOOK NAME</th><td><input type='text' name='name_book' value=".$row['name_book']."></td></tr>";
                echo "<tr><th>AUTHOR</th><td><input type='text' name='author_book' value=".$row['author_book']."></td></tr>";
                echo "<tr><th>COPY</th><td><input type='text' name='copy_book' value=".$row['copy_book']."></td></tr>";
                echo "<tr><th>PRICE</th><td><input type='text' name='price_book' value=".$row['price_book']."></td></tr>";
                
            }
            echo "<tr><td colspan='2'><input type='submit' name='submit2' value='GO'>";
            echo "</form>";
        }
    }
}
if(isset($_POST['submit2'])){
    include 'conn.php';
    $id_book=$_POST['id_book'];
    $name_book=$_POST['name_book'];
    $author_book=$_POST['author_book'];
    $copy_book=$_POST['copy_book'];
    $price_book=$_POST['price_book'];

    $q="UPDATE books SET name_book='$name_book',author_book='$author_book',copy_book=$copy_book,price_book=$price_book WHERE id_book='$id_book'";
    $pq=mysqli_query($conn,$q);
    if($pq){
        echo "<script>alert('updated')</script>";
    }
    else{
        echo "<script>alert('updation failed')</script>";
    }
    
}
?>