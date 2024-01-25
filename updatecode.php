<?php
session_start();
include('db.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $title=$_POST['title'];
    $info=$_POST['info'];
    $desc=$_POST['desc'];
    $new_image=$_FILES['image']['name'];
    $image_temp=$_FILES['image']['tmp_name'];
    $old_image=$_POST['old_image'];
    $image_folder="images/".$new_image;
    $new_video=$_FILES['video']['name'];
    $video_temp=$_FILES['video']['tmp_name'];
    $old_video=$_POST['old_video'];
    $video_folder="videos/".$new_video;
    if($new_image != '')
    {
        $update_image=$_FILES['image']['name'];
    }
    else
    {
        $update_image=$old_image;
    }

    if($new_video != '')
    {
        $update_video=$_FILES['video']['name'];
    }
    else
    {
        $update_video=$old_video;
    }

  
        $image_file=$_FILES['image']['name'];
        $video_file=$_FILES['video']['name'];
        $_SESSION['status']="Image already Exists".$image_file;
        $_SESSION['status']="Video already Exists".$video_file;
       // header('location:manage_video.php');
    
   
        $query="update video set title='$title',info='$info',description='$desc',image='$update_image',video='$update_video' where id='$id'";
        $query_run=mysqli_query($sql,$query);
        if($query_run)
        {
            if($image_file !='')
            {
                echo $image_temp;
                move_uploaded_file($image_temp,$image_folder);
                unlink("images/".$old_image);
            }
            if($video_file !='')
            {
                move_uploaded_file($video_temp,$video_folder);
                unlink("videos/".$old_video);
            }
            $_SESSION['status']="Updated Successfully.";
           header('location:manage_video.php');
        }
        else
        {
            $_SESSION['status']="Update Failed.";
            header('location:manage_video.php');
        }
    

}
?>