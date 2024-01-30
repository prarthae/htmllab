<html>

<head>
    <link rel='stylesheet' href="style.css">
</head>

<body>
    <center>
        <div class="login">
            <form method="post" action="">
                <h1>STUDENT LOGIN</h1>
                <input type="label" value="Enter student ID  ">
                <input type="text" name="student_id"><br><br>
                <input type="label" value="Enter student Name  ">
                <input type="text" name="student_name"><br><br>
                <input type="label" value="Enter Password  ">
                <input type="password" name="pass"><br><br>
                <input type="submit" name="submit" value="Submit">
                <a href="new_reg.php">NEW REGISTRATON</a>
            </form>
        </div>
    </center>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    include 'conn.php';
    $student_id = $_POST['student_id'];
    $pass = $_POST['pass'];

    $q = "SELECT * FROM stud_login WHERE student_id='$student_id' AND pass='$pass'";
    $pq = mysqli_query($conn, $q);
    if (mysqli_num_rows($pq)) {
        header('location:search.php');
    } else {
        echo "<script>alert('invalid user name or password')</script>";
    }
}

?>