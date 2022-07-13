<?php
include 'databaseforadmin.php';



$sql="SELECT * FROM tblregistration";
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
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IAD_Project</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
    
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
                        </ul>
                    </div>
                </div>
            </nav><!-- .navbar -->


<!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Register</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <table class="table table-sm table-dark">
             
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Course applied for </th>
            <th scope="col">Email</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Registerd date</th>
          </tr>
          <?php foreach($courses as $course): ?>

<tr>

  <td><?php echo $course[1];?></td>
  <td><?php echo $course[2];?></td>
  <td><?php echo $course[3];?></td>
  <td><?php echo $course[4];?></td>
  <td><?php echo $course[5];?></td>

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