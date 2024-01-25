<!doctype html>
<html lang="en">
  <head>
    <title>Add Video</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
  <body>
  <?php
        include('db.php');
        session_start();
        if($_SESSION['uname']=="")
        {
            header ('location:index.php');
        }
      ?>
  <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-1 col-md-2 col-sm-12">
                    <div class="sidebar bg-dark" >
                    <h3 class="text-white text-center pt-3 " style="font-family: roboto;">Company Name</h3>
                    <hr class="rounded">
                    <a  href="dashboard.php"><i class="bi bi-house-door-fill"></i> <span class="ml-1">Home</span></a>
                    <a class="active" href="add_video.php"> <i class="bi bi-plus-square-fill"></i> <span class="ml-1">Add Video</span> </a>
                    <a href="manage_video.php"><i class="bi bi-ui-checks"></i> <span class="ml-1">Manage Video</span></a>
                    <a href="#about"><i class="bi bi-credit-card-2-back-fill"></i> <span class="ml-1">Payment</span> </a>
                    <a href="logout.php"><i class="bi bi-box-arrow-left"></i> <span class="ml-1">Log out</span> </a>
                </div>
            </div>
            <div class=" col-lg-11 col-md-10 col-sm-12">
                <div class="content">
                <div class="container">
                        <div class="row mt-5">
                          <div class="col-lg-12 col-sm-12">
                             
                              <form action="video.php" class="shadow-lg p-5" method="POST" enctype="multipart/form-data">
                              <h3 class="text-center text-muted mb-3">Add Video</h3>
                                  <div class="form-group">
                                      <label for="" class="form-label text-info">Title</label>
                                      <input type="text" class="form-control" name="title" placeholder="Video Title" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="" class="form-label text-info">Info</label>
                                      <input type="text" class="form-control" name="info" placeholder="Video Author" required>
                                  </div>
                                  <div class="form-group">
                                  <label for="" class="form-label text-info">Description</label>
                                  <textarea id="desc" cols="10" rows="5" class="form-control" name="desc" placeholder="Video Description" required></textarea>
                                  </div>
                                  <div class="form-group">
                                  <label for="" class="form-label text-info">Thumbnail</label>
                                    <input type="file" class="form-control" name="thumbnail" required>
                                  </div>
                                  <div class="form-group">
                                  <label for="" class="form-label text-info">Upload Video</label>
                                    <input type="file" class="form-control" name="video" required>
                                  </div>
                                  <input type="submit"  class="btn btn-info px-5 py-2" name="submit" value="ADD">
                              </form>
                          </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script>
      function myFunction() {
        
        alert(document.getElementById("desc").value;);
}
</script> -->
  </body>
</html>