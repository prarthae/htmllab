<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<center>
    <div class="admin">
    <form method="post" action="">
        <table cellpadding='15%'>
            <tr>
                <th colspan='2'>ADMIN LOGIN</th>
            </tr>
            <tr>
                <th>USER ID</th>
                <td><input type="text" name='user_id'></td>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <td><input type="password" name='pass'></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="LOGIN" style="background-color: lavender;">
    </form>
    </div>
</center>

</html>

<?php
if (isset($_POST['submit'])) {
    include 'conn.php';
    $user_id = $_POST['user_id'];
    $pass = $_POST['pass'];
    $q = "SELECT * FROM admin WHERE user_id='$user_id' AND pass='$pass'";
    $pq = mysqli_query($conn, $q);
    if (mysqli_num_rows($pq)) {
        header('location:books.php');
    } else {
        echo "<script>alert('invalid user name or password')</script>";
    }
}
?>