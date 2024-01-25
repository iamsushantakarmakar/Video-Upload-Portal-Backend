<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Update</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>
    <?php
    include('db.php');
    session_start();
    if($_SESSION['uname']=="")
    {
        header('location:index.php');
    }
    $id=$_GET['id'];
    $query="select * from video where id='$id'";
    $query_run=mysqli_query($sql,$query);
    ?>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Update</h2>
                </div>
                <div class="card-body">
                    <?php
                        if(mysqli_num_rows($query_run)>0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                    <form action="updatecode.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="<?php echo $row['title']; ?>" name="title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Info</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" value="<?php echo $row['info']; ?>" name="info" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="desc" placeholder="Message sent to the employer"><?php echo $row['description']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Thumbnail</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="image" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                    <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Video</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="video" id="file_2">
                                    <label class="label--file" for="file_2">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                    <input type="hidden" name="old_video" value="<?php echo $row['video']; ?>">
                                </div>
                            </div>
                        </div>
                    
                    <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found.";
                    }
                    ?>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="submit">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->