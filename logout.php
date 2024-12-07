<?php
session_start();

if(isset($_SESSION['nilam']))
{
    session_destroy();
    header(header:"location:login.php");
}
?>