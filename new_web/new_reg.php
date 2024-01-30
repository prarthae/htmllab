<html>

<body>
    <form method='post' action=''>
        <center>
            <table border='2' cellpadding='10%'>
                <tr>
                    <th colspan="2">REGISTRATION FO STUDENTS</TH>
                </tr>
                <tr>
                    <th>STUDENT ID :</th>
                    <td><input type="text" name="student_id"></td>
                </tr>
                <tr>
                    <th>STUDENT NAME :</th>
                    <td><input type="text" name="student_name"></td>
                </tr>
                <tr>
                    <th>STUDENT DEPARTMENT :</th>
                    <td><input type="text" name="department"></td>
                </tr>
                <tr>
                    <th>PASSWORD :</th>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <th>RETYPE PASSWORD :</th>
                    <td><input type="password" name="rpass"></td>
                </tr>
                <tr>
                    <th>REGISTER :</th>
                    <td><input type="submit" name="register"></td>
                </tr>
            </table>
            <a href="stud.php">GO BACK</a>
        </center>
    </form>
</body>

</html>

<?php 
if(isset($_POST['register'])){
    include 'conn.php';
    $student_id=$_POST['student_id'];
    $student_name=$_POST['student_name'];
    $department=$_POST['department'];
    $pass=$_POST['pass'];
    $rpass=$_POST['rpass'];

    if($pass==$rpass){
        $q="INSERT INTO stud_login VALUES('','$student_id','$student_name','$department','$pass','$rpass')";
        $pq=mysqli_query($conn,$q);
        if($pq){
            echo "<script>alert('ROW INSERTED')</script>";
        }
    }
    else{
        echo "<script>alert('PASSWORD MISMATCH')</script>";
    }
    
}
?>