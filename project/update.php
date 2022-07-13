<?php
include "databaseforadmin.php";
if(isset($_POST['submit']) && $_POST ['submit'] =="Cancel"){
  header("Location:coursesforadmin.php");
}
if(isset($_POST['optype']) && $_POST['optype']=="Edit"){
  $id=$_POST['Cid'];
  $sql="SELECT * FROM tbltable WHERE id=$id";
  $result=mysqli_query($cnn,$sql);
  if(!$result){
    die("Error retriving data:".mysqli_error($cnn));
  }
  $fdata=mysqli_fetch_row($result);
}
if(isset($_POST["submit"]) && $_POST["submit"]=="Submit"){
  $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
  $courseid=$_POST["id"];
  $coursename=$_POST["coursename"];
  $price=$_POST["price"];
  $description=$_POST["description"];
  $availseat=$_POST["availseat"];
  $courseduration=$_POST["courseduration"];
  if($courseid!=""){
    $sql="UPDATE tbltable SET coursename='$coursename',price='$price',description='$description',availseat='$availseat',courseduration='$courseduration' WHERE id='$courseid'";
  }else{
    $sql="INSERT INTO tbltable VALUE(NULL,'$coursename','$price','$description','$availseat','$courseduration')";

  }
  $result=mysqli_query($cnn,$sql);
  if(!$result){
    die("Error Saving data:".mysqli_error($cnn));
  }
  header("Location:coursesforadmin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<style>
.gradient-custom-3 {
  /* fallback for old browsers */
  background: #0B0C10;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(11, 12, 16, 0.5), rgba(37, 56, 60, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(11, 12, 16, 1), rgba(37, 56, 60, 0.5))
}
.gradient-custom-4 {
  /* fallback for old browsers */
  background: #0B0C10;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(11, 12, 16, 0.5), rgba(37, 56, 60, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(11, 12, 16, 0.5), rgba(37, 56, 60, 0.5))
}	
</style>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insert new course</title>
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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
            </nav>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
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

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Insert</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
      <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
     <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Form</h3>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <input type="hidden" name="id" value="<?php echo isset($fdata)? $fdata[0]:''?>">

              <div class="row">
                <div class="col-md-6 mb-4">

                  
                  <div class="form-outline">
                    <label for='coursename'>Course name:</label>
                    <input type="text" class="form-control form-control-lg" name="coursename" value="<?php echo isset($fdata)? $fdata[1]:''?>">
                    
                    <label class="form-label" for="price">Price:</label>
                    <input type="text" name="price"id="price" class="form-control form-control-lg" value="<?php echo isset($fdata)? $fdata[2]:''?>" />
                    
                    <label class="form-label" for="description">Course description:</label>
                    <input type="text" name="description" id="description" class="form-control form-control-lg" value="<?php echo isset($fdata)? $fdata[3]:''?>"/>

                    <label class="form-label" for="availseat">Availseats:</label>
                    <input type="text" name="availseat" id="Availseat" class="form-control form-control-lg" value="<?php echo isset($fdata)? $fdata[4]:''?>">

                    <label class="form-label" for="courseduration">Course durations:</label>
                    <input type="text" name="courseduration" id="courseduration" class="form-control form-control-lg"  value="<?php echo isset($fdata)? $fdata[5]:''?>">
                  </div>

                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit"  name="submit" value="Submit" />
                    <input class="btn btn-primary btn-lg" type="submit"  name="submit" value="Cancel" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</section>
		  
		</div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
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
</body>

</html>