<?php
$inc=include('connection.php');
$delid=$_REQUEST['idd'];
$sel="select * from signuptbl where id=$delid";
$p=mysqli_query($conn,$sel);
$res=mysqli_fetch_array($p,MYSQLI_BOTH);
$loc="img/".$res['1'];
$del="delete from signuptbl where id=$delid";
if(mysqli_query($conn,$del))
{
    echo "data is deleted";
}
else{
    echo "data is not deleted";
}
?>