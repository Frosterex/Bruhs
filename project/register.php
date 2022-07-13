<?php 
include 'test.php';
if(isset($_POST["submit"]) && $_POST["submit"]== "cancel"){
	header("location:courses.php");
}

if(isset($_POST["submit"]) && $_POST["submit"]== "Register"){
	$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$name=$_POST["name"]; 
	$courseappliedfor=$_POST["courseappliedfor"];
	$email=$_POST["email"];
	$contactnumber=$_POST["contactnumber"];
	$registrationdate=$_POST["registrationdate"];
  $sql ="INSERT INTO tblregistration VALUE (NULL,'$name','$courseappliedfor','$email','$contactnumber',current_timestamp())";
  $result=mysqli_query($cnn,$sql);
  if(!$result){
    die("Error retrieving data".mysqli_error($cnn));

  }
}
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

         <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-lol">
                <div class="container px-5">     
                    <a class="navbar-brand" href="index.php">Adobe</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin.php">Admin login</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                   <li><a class="dropdown-item" href="blog-home.php">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="blog-post.php">Blog Post</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="portfolio-overview.php">Portfolio Overview</a></li>
                                    <li><a class="dropdown-item" href="portfolio-item.php">Portfolio Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<body background-color:#33475b>

  <main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2 class="text-dark-50">Register</h2>
        <p class="text-dark-25">Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>
  <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
      <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Your Name:</label>
                <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Course applied for:</label>
                <input type="text" name="courseappliedfor" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email:</label>     
                <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Contact Number:</label>
                <input type="text" name="contactnumber" id="form3Example4cdg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Registration date:</label>
                <input type="date" name="registrationdate" id="form3Example4cdg" class="form-control form-control-lg" />
                </div>
                <div class="d-flex justify-content-center">
                <input type="submit" name="submit" class="btn btn-success" value="Register">&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" class="btn btn-warning" value="Cancel">
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
      </section>
    </main>
            </body>
<!-- End Courses Section -->

<!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
            Keas 69 Str <br>
             15234, Chalandri<br>
              Greece<br><br>
              <strong>Phone:</strong> +30 239219322<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
<!-- End Footer -->
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
        </footer><!-- End Footer -->

<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


</html>