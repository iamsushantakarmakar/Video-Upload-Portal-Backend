<!doctype html>
<html lang="en">
  <head>
    <title>Manage Video</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
  <body>
      <?php
        if(isset($_SESSION['status']) && $_SESSION != '')
        {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button> 
                </div>
            <?php
            unset($_SESSION['status']);
        }
      ?>
  <?php
        include('db.php');
        session_start();
        if($_SESSION['uname']=="")
        {
            header ('location:index.php');
        }
        $query= "select * from video";
        $query_run=mysqli_query($sql,$query);
      ?>
  <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-1 col-md-2 col-sm-12">
                    <div class="sidebar bg-dark" >
                    <h3 class="text-white text-center pt-3 " style="font-family: roboto;">Company Name</h3>
                    <hr class="rounded">
                    <a  href="dashboard.php"><i class="bi bi-house-door-fill"></i> <span class="ml-1">Home</span></a>
                    <a  href="add_video.php"> <i class="bi bi-plus-square-fill"></i> <span class="ml-1">Add Video</span> </a>
                    <a class="active" href="manage_video.php"><i class="bi bi-ui-checks"></i> <span class="ml-1">Manage Video</span></a>
                    <a href="#about"><i class="bi bi-credit-card-2-back-fill"></i> <span class="ml-1">Payment</span> </a>
                    <a href="logout.php"><i class="bi bi-box-arrow-left"></i> <span class="ml-1">Log out</span> </a>
                </div>
            </div>
            <div class=" col-lg-11 col-md-10 col-sm-12">
                <div class="content">
                    <div class="container">
                        <h3 class="text-center text-muted mt-4">Manage Video</h3>
                        <div class="row mt-5">
                            <!-- <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12"></div>
                                    <div class="col-lg-4 col-sm-12"></div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="form group">
                                            <input type="search" class="form-control mb-4 search_bar" placeholder="Search Here">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                       
                            <table id="datatableid" class="table table-striped" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" >Title</th>
                                    <th scope="col" style="width: 10%;">Info</th>
                                    <th scope="col" style="width: 40%;">Video Description</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['info']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td>
                                                        <img src="<?php echo "images/". $row['image']; ?>" width="110px" height="70px" alt="Thumbnail">
                                                    </td>
                                                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-info"><span class="bi bi-pencil-square"></span></a></td>
                                                    <td>
                                                        <form action="delete.php" method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                            <input type="hidden" name="delete_image" value="<?php echo $row['image']; ?>">
                                                            <input type="hidden" name="delete_video" value="<?php echo $row['video']; ?>">
                                                            <button type="submit" name="delete_button" class="btn btn-danger"><span class="bi bi-trash-fill"></span></button>
                                                        <!-- <a href="delete.php" class="btn btn-danger"><span class="bi bi-trash-fill"></span></a></td> -->
                                            </form>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td>No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
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
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#datatableid').DataTable();
} );
    </script>
  </body>
</html>