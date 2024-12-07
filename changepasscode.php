<?php
include('connection.php');

session_start();
$email=$_SESSION['anup'];

$a = $_POST['Opass'];
$b = $_POST['npass'];
$c = $_POST['cpass'];
$sel = "select * from signuptbl where Email='$email'";
$p = mysqli_query(mysql: $conn, query: $sel);
$r = mysqli_fetch_array(result: $p, mode: MYSQLI_BOTH);
if ($r['3'] == $a) 
{
    if ($b == $c) {
        $up = "update signuptbl set Password='$b' where Email='$email'";
        if (mysqli_query($conn, $up)) {
            header(header: "location:login.php");
        } else {
            echo "password not change";
        }
    } else {
        echo "new password and confirm password not match";
    }
} else {
    echo "old password not match";
}
?>