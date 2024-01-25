<?php
session_start();
include('db.php');
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $info=$_POST['info'];
    $desc=$_POST['desc'];
    $thumbnail=$_FILES['thumbnail']['name'];
    $thumbnail_temp=$_FILES['thumbnail']['tmp_name'];
    $image_folder="images/".$thumbnail;
    $video=$_FILES['video']['name'];
    $video_temp=$_FILES['video']['tmp_name'];
    $video_folder="videos/".$video;

    move_uploaded_file($thumbnail_temp, $image_folder);
    move_uploaded_file($video_temp, $video_folder);

    $query=mysqli_query($sql, "INSERT INTO video(id, title, info, description, image, video) VALUES('','$title','$info','$desc','$thumbnail','$video')");
    
    if($query){
        ?>
        <script>
            alert("Video Uploaded.");
            window.location.href = "manage_video.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script>
            alert("Video not Uploaded.");
            window.location.href = "add_video.php";
        </script> 
    <?php
    }
}
?>

