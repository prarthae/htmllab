<html>
<body>
    <center>
        <form method='post' action="insertion.php">
                
            <table border='1' cellpadding='20'>
            <tr><th colspan="2">REGISTRATION FORM</th></tr>
                
                <tr><td>KTU ID</td>
                <td><input type='text' name='ktuid' ></td></tr>

                <tr><td>NAME</td>
                <td><input type='text' name='sname' ></td></tr>

                <tr><td>ROLL NO</td>
                <td><input type='text' name='rolno' ></td></tr>

                <tr><td>AGE</td>
                <td><input type='text' name='age' ></td></tr>

                <tr><td>GENDER</td>
                <td><input type='radio' name='gender' value='male'>Male<input type='radio' name='gender' value='female'>Female<input type='radio' name='gender'value='other'>Others</td></tr>

                <tr><td>EMAL ID</td>
                <td><input type='text' name='mail' ></td></tr>

                <tr><td>PHONE NO</td>
                <td><input type='text' name='phn' ></td></tr>

            </table><BR>

            <input type="submit" name="submit" value="REGISTER" >
        </form>
    </center>

</body>
</html>