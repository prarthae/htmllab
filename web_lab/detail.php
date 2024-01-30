<html>

<body>
    <center>
        <table border="2">
            <form action='' method='post'>
                <th colspan="2"><b>BOOK DETAILS</b></th>
                <tr>
                    <td><b>BOOK ID</b></td>
                    <td><input type="text" name="book_id"></td>
                </tr>
                <tr>
                    <td><b>BOOK NAME</b></td>
                    <td><input type="text" name="book_name"></td>
                </tr>
                <tr>
                    <td><b>AUTHOR</b></td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td><b>NUMBER OF COPIES</b></td>
                    <td><select name="no_copy">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="sub" value="SUBMIT"> --<a href="show.php"> show --</a></td>
                </tr>
            </form>

        </table>
    </center>
</body>

</html>
<?php
if (isset($_POST['sub'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'library');
    // if($conn){
    //     echo "connect";
    // }
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $author = $_POST['author'];
    $no_copy = $_POST['no_copy'];

    $sq = "INSERT INTO book VALUES('$book_id','$book_name','$author',$no_copy)";
    $reslt = mysqli_query($conn, $sq);
    if ($reslt) {
        echo "inserted";
    }
}

?>