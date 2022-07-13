<?php

$msg="";
if(isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST['password'])){
if($_POST['username']=='HOWEL'&& 
$_POST['password']=='123456'){
  $_SESSION['Vaild']=true;
  $_SESSION['timeout']=time();
  $_SESSION['username']='yourname';
  header("Location:coursesforadmin.php");
}else{
  $msg="Wrong username or password";
}
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Mentor Bootstrap Template</title>
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
            </nav><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Admin login</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    
    <!-- ======= registration ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
   
      <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
            <form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

              <div class="row">
                <div class="col-md-6 mb-4">

                  
                  <div class="form-outline">
                    <label for='Username'>Username</label>
                    <input type="text" class="form-control form-control-lg" name="username"  require autofocus>
                    
                    
                    <label class="form-label" for="Password">Password</label>
                    <input type="text" class="form-control form-control-lg" name="password" require autofocus>


                  </div>

               
                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit"  name="submit" value="Login" />
                  </div>

                  

                </div>
              </div>

              

              

            </form>
          </div>
        </div>
      </div>
    </div>

             
        

              

              

            
        </div>
      </div>
  </div>
</section>
        
        

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

</body>

</html>