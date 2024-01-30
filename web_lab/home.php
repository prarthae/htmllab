<html>

<body>
    <center><b>
            <h2>LOGIN</h2>
        </b></center>
    <center>
        <table>
            <form action='' method='POST'>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="pass"></td>
                <tr>
                    <td colspan="2"><center><input type="submit" value="Login" name="login"></center></td>
                </tr>
            </form>
        </table>
    </center>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'library');
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sq = "SELECT * FROM login WHERE user='$user' AND pass='$pass'";
    $result = mysqli_query($conn, $sq);

    if (mysqli_num_rows($result)) {
        header('location:detail.php');
    }
    else{
        echo "<script>alert('invalid user name or password')</script>";
    }
}

?>