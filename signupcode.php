<?php
$inc=include('connection.php');
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$ins="insert into signuptbl(Name,Email,Password)values('$a', '$b', '$c')";
if(mysqli_query($conn,$ins))
{
    header(header:"location:login.php");
}
else{
    echo "signup failed";
}

?>