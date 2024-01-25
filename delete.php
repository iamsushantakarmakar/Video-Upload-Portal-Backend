<?php
session_start();
include('db.php');
if(isset($_POST['delete_button']))
{
    echo $id=$_POST['delete_id'];
    $image=$_POST['delete_image'];
    $video=$_POST['delete_video'];
    $query="delete from video where id='$id'";
    $query_run=mysqli_query($sql,$query);
    if($query_run)
    {
        unlink("images/".$image);
        unlink("videos/".$video);
        $_SESSION['status']="Data Deleted Successfully.";
        header('location:manage_video.php');
    }
    else
    {
        $_SESSION['status']="Data Not Deleted.";
        header('location:manage_video.php');
    }
}
?>