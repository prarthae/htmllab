<?php
include '../common/conn.php';
if (isset($_POST['SUBMIT'])) {

    $KTUID = $_POST["ktuid"];

    $SUB = $_POST["sub"];
    $S1 = $_POST["S1"];
    $S2 = $_POST["S2"];
    $AS1 = $_POST["AS1"];
    $AS2 = $_POST["AS2"];
    $sq = "insert into mark values('$KTUID','$SUB','$AS1','$AS2','$S1','$S2')";

    $p = mysqli_query($con, $sq);
    if ($p) {
        echo "row inserted";
    } else
        echo "Not inserted";
}
