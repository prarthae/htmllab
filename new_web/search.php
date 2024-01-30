<html>

<body>
    <form method="post" action="">
        <?php
        include 'conn.php';
        echo " BOOK ID :  <input type='text' name='id_book'><br><br>";
        echo " BOOK NAME : <input type='text' name='name_book'><br><br>";
        echo "<input type='submit' name='search' value='SEARCH'><br><br>";


        if (isset($_POST['search'])) {
            $id_book = $_POST['id_book'];
            $name_book = $_POST['name_book'];
            $q = "SELECT * FROM books WHERE id_book='$id_book'";
            $pq = mysqli_query($conn, $q);

            if ($pq) {
                if (mysqli_num_rows($pq)) {
                    while ($rows = mysqli_fetch_assoc($pq)) {
                        echo "<table border='1' cellpadding='10%'>
                        <tr><th>BOOK ID </th><td>" . $rows['id_book'] . "</td>";
                        echo "<tr><th>BOOK NAME </th><td>" . $rows['name_book'] . "</td>";
                        echo "<tr><th>BOOK AUTHOR </th><td>" . $rows['author_book'] . "</td>";
                        echo "<tr><th>BOOK COPY </th><td>" . $rows['copy_book'] . "</td>";
                        echo "<tr><th>BOOK PRAICE </th><td>" . $rows['price_book'] . "</td>";
                    }
                    echo "</table>";
                } else {
                    echo "<SCRIPT> alert('NO BOOK IS FOUND')</SCRIPT>";
                }
            }
        }
        ?>
    </form>
</body>

</html>