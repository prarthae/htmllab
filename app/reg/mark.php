<html>

<body>
    <center>
        <h1><b><i>MARK LIST</H1></b></i>
        <form method="POST" action="markcon.php">
            KTU ID :<?php
                    include '../common/conn.php';
                    $q = "select distinct KTU_ID from ktu_registration";
                    $r = mysqli_query($con, $q);
                    echo "<select name='ktuid'>";
                    while ($row = mysqli_fetch_assoc($r))
                        echo "<option value=" . $row['KTU_ID'] . ">" . $row['KTU_ID'] . "</option>";
                    echo "</select><br>";
                    ?>
            <br><br><br>

            SUBJECT :<select name='sub'>
                <option>ADS</option>
                <option>DFCA</option>
                <option>ASE</option>
            </select><br><BR><BR>



            ASSIGNMENT 1 : <INPUT TYPE="text" name="AS1"><BR><br><br>
            ASSIGNMENT 2 : <INPUT TYPE="text" name="AS2"><br><br><br>
            SERIES 1 : <INPUT TYPE="text" name="S1"><br><BR><BR>
            SERIES 2 : <INPUT TYPE="text" name="S2"><br><br><br>

            <input type="SUBMIT" value="SUBMIT" name='SUBMIT'>
        </form>


    </center>

</body>

</html>