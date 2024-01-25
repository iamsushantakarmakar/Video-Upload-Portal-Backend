<!doctype html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
  <body>
      <?php
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
                    <h3 class="text-white text-center pt-3" style="font-family: roboto;">Company Name</h3>
                    <hr class="rounded">
                    <a class="active" href="dashboard.php"><i class="bi bi-house-door-fill"></i> <span class="ml-1">Home</span></a>
                    <a href="add_video.php"> <i class="bi bi-plus-square-fill"></i> <span class="ml-1">Add Video</span> </a>
                    <a href="manage_video.php"><i class="bi bi-ui-checks"></i> <span class="ml-1">Manage Video</span></a>
                    <a href="#about"><i class="bi bi-credit-card-2-back-fill"></i> <span class="ml-1">Payment</span> </a>
                    <a href="logout.php"><i class="bi bi-box-arrow-left"></i> <span class="ml-1">Log out</span> </a>
                </div>
            </div>
            <div class=" col-lg-11 col-md-10 col-sm-12">
                <div class="content">
                <div class="container">
                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                     <div style="height: 10rem; width: 11 rem; background-color: #34ace0;" class="text-center py-3" data-aos="fade-right">
                                     <span class="bi bi-play-btn-fill" style="font-size: 3rem; color: #f5f6fa"></span>
                                        <h4 class="text-center text-white">Total Videos : <span>100</span> </h4>
                                        
                                        
                                     </div>   
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div style="height: 10rem; width: 11 rem; background-color: #20bf6b;" class="py-3 text-center" data-aos="flip-left">
                            <span class="bi bi-people-fill" style="font-size: 3rem; color: #f5f6fa"></span>
                             <h4 class="text-center text-white">Total Users : <span>3000</span> </h4>
                            </div>      
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div style="height: 10rem; width: 11 rem; background-color: #ff5252;" class="py-3 text-center" data-aos="fade-left">
                            <span class="bi bi-currency-exchange" style="font-size: 3rem; color: #f5f6fa"></span>
                             <h4 class="text-center text-white">Income : <span>$20000</span> </h4>
                            </div> 
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>