    <?php

include "databaseforadmin.php";

if(isset($_POST["submit"]) && $_POST['optype']=='Delete'){

$courseid=$_POST['Cid'];
$sql="DELETE FROM tbltable WHERE id=$courseid";

$result=mysqli_query($cnn,$sql);

if(!$result){

die("Error deleting data:".mysqli_error($cnn));

}

}




$sql="SELECT * FROM tbltable";

$result=mysqli_query($cnn,$sql);

if(!$result){

die("Error retreving data:".mysqli_error($cnn));

}

while($row =mysqli_fetch_array($result)){

$courses[]=$row;

}



?>    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bruh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>



<!-- ======= Header ======= -->

   <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">Admin</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                             <li class="nav-item"><a class="nav-link" href="registerlist.php">Registered</a>    
                             <li class="nav-item"><a class="nav-link" href="coursesforadmin.php">Courses</a></li>
                             <li class="nav-item"><a class="nav-link" href="update.php">Insert</a>
                            <li class="nav-item"><a class="nav-link" href="index.php">Admin logout</a></li>
                        </ul>aa
                    </div>
                </div>
            </nav><!-- End Header -->



  <main id="main" data-aos="fade-in">



    <!-- ======= Breadcrumbs ======= -->

    <div class="breadcrumbs">

      <div class="container">

        <h2>Courses</h2>

        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>

      </div>

    </div>

    <!-- ======= Courses Section ======= -->

    <section id="courses" class="courses">

      <div class="container" data-aos="fade-up">



        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <table class="table table-sm table-table-stripped">

             

          <tr>

            <th scope="col">Course name</th>

            <th scope="col">Price</th>

            <th scope="col">Description</th>

            <th scope="col">Course durations(days)</th>

            <th scope="col">Avail seats</th>

            <th scope="col" colspan="2">Actions</th>

          </tr>

          <?php foreach($courses as $course): ?>

              

                <tr>

      

                  <td><?php echo $course[1];?></td>

                  <td><?php echo $course[2];?></td>

                  <td><?php echo $course[3];?></td>

                  <td><?php echo $course[5];?></td>

                  <td><?php echo $course[4];?></td>

                  <td>

                    <form method="POST" action="update.php">

                        <input type="hidden" name="Cid" value="<?php echo $course[0];?>">

                        <input type="hidden" name="optype" value="Edit">

                        <input type="submit" name="submit" value="Edit">

                    </form>

                </td>

                <td>

                  <form method="POST" action="coursesforadmin.php">

                      <input type="hidden" name="Cid" value="<?php echo $course[0];?>">

                      <input type="hidden" name="optype" value="Delete">

                      <input type="submit" name="submit" value="Delete">

                  </form>

                </td>

                

                </tr>

                <?php endforeach ?>

              </table>

          

        </div>



      </div>

    </section><!-- End Courses Section -->



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

   <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2021</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>



</html>