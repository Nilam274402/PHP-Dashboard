<?php
include("connection.php");

if(isset($_GET['idd']))
{
    $id=$_GET['idd'];
    $sql="delete from user where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:userlistshow.php");

    }
    else
    {
        die(mysqli_error($conn));
    }
}
else
{
    die(mysqli_error($conn));
}



?>