<?php
$inc = include('connection.php');
session_start();

$a = $_POST['email'];
$b = $_POST['pass'];

$sel = "select * from  signuptbl where email='$a'";
$r = mysqli_query(mysql: $conn, query: $sel);
$k = mysqli_fetch_array(result: $r, mode: MYSQLI_BOTH);
if ($k['2'] == $a) {
    if ($k['3'] == $b) {
        $_SESSION['nilam'] = "Login Successfully ! Welcome Admin,$a.";

       $_SESSION['anup']=$a;

        header(header: "location:dashboard2.php");
    } else {
        $_SESSION['nilam'] = "Invalid email and password";
        // echo "<script>alert('password not matched')</script>";
        header(header: "location:login.php");
    }
} else {
    $_SESSION['nilam'] = "Invalid email and password";
    // echo "<script>alert('email not matched')</script>";
    header(header: "location:login.php");
}
