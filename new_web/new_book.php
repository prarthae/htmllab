<html>

<body>
    <center>
        <form method="post" action="">
            <table cellpadding='10%'>
                <tr>
                    <th colspan='2'>ADD NEW BOOK</th>
                </tr>
                <tr>
                    <th>BOOK ID</th>
                    <TD><input type="text" name="id_book"></TD>
                </tr>
                <tr>
                    <th>BOOK NAME</th>
                    <TD><input type="text" name="name_book"></TD>
                </tr>
                <tr>
                    <th>AUTHOR</th>
                    <TD><input type="text" name="author_book"></TD>
                </tr>
                <tr>
                    <th>NUMBER OF COPY</th>
                    <TD>
                        <?php
                        include 'conn.php';
                        echo "<select name='copy_book'><option>SELECT</option>";
                        for ($i = 1; $i < 10; ++$i) {
                            echo "<option>" . $i . "</option>";
                        }
                        ?></TD>
                </tr>
                <tr>
                    <th>PRICE</th>
                    <TD><input type="text" name="price_book"></TD>
                </tr>
                <tr><th colspan='2'><input type="submit" name="add" value="INSERT"></th></tr>

            </table>
            <a href="books.php">BACK</a>
        </form>
    </center>
</body>

</html>
<?php
if(isset($_POST['add'])){
include 'conn.php';
$id_book=$_POST['id_book'];
$name_book=$_POST['name_book'];
$author_book=$_POST['author_book'];
$copy_book=$_POST['copy_book'];
$price_book=$_POST['price_book'];

$q="INSERT INTO books VALUES('$id_book','$name_book','$author_book',$copy_book,$price_book)";
$pq=mysqli_query($conn,$q);

if($pq){
    echo "<script>alert('row inserted')</script>";
}
else{
    echo "<script>alert('cant insert')</script>";
}


}

?>