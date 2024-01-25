<?php
session_start();
include('db.php');
$uname=$_POST['uname'];
$password=$_POST['password'];
$sql1=mysqli_query($sql, "select * from admin where name='$uname' && password='$password'");
$row=mysqli_num_rows($sql1);
if ($row==1)
{
    $_SESSION['uname']=$uname;
    header ('location:dashboard.php');
}
else
{
    header ('location:index.php');
}
?>
