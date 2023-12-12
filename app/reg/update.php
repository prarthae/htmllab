<html>

<?php
include '../common/conn.php';
$q = "select distinct KTU_ID from ktu_registration";
$r = mysqli_query($con, $q);
echo "<form method='post' action=''>";
echo "KTUID";
echo "<select name='ktuid'>";
while ($row = mysqli_fetch_assoc($r))
    echo "<option value=" . $row['KTU_ID'] . ">" . $row['KTU_ID'] . "</option>";
echo "</select><br<br><BR>";

echo "<br><br>SUBJECT : ";
$q2 = "select distinct SUBJECT from mark";
$r2 = mysqli_query($con, $q2);
echo "<select name='sub'>";
while ($row = mysqli_fetch_assoc($r2))
    echo "<option value=" . $row['SUBJECT'] . ">" . $row['SUBJECT'] . "</option>";
echo "</select><br>";


echo "<BR><BR><input type='submit' value='search' name='search'>";
echo "</form>";

if (isset($_POST['search'])) {
    $ktuid = $_POST['ktuid'];
    $sub = $_POST['sub'];
    $sq = "select * from mark where KTUID='$ktuid' and subject='$sub'";
    $r3 = mysqli_query($con, $sq);
    echo "<form method='post' action=''>";
    if (mysqli_num_rows($r3)) {
        while ($row = mysqli_fetch_assoc($r3)) {

            echo "<br><br>SEREIS 1 MARK : <input type='text' value=" . $row["series1"] . ">" . "<br><br>";
            echo "<br><br>SEREIS 2 MARK : <input type='text' value=" . $row["series2"] . ">" . "<br><br>";
            echo "<br><br>ASSIGNMENT 1 MARK : <input type='text' value=" . $row["ASS1"] . ">" . "<br><br>";
            echo "<br><br>ASSIGNMENT 2 MARK : <input type='text' value=" . $row["ASS1"] . ">" . "<br><br>";
        }
        echo "<input type='submit' name='update' value='SUBMIT'><br><br";
    }
    echo "</form>";
}
?>

</html>