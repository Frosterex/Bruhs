<?php 
	
	include "test.php";
	
	$sql = "SELECT * from tbltable";
	
	$result = mysqli_query($cnn, $sql);
	
	if(!$result){
		die("Error retrieving data:".mysqli_error($cnn));
	}
	while($row=mysqli_fetch_array($result)){
		$courses[]=$row;
	}
	?>

<!DOCTYPE html>
<html lang="en">

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

<body>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <table class="table-table-stripped">

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
                    <form method="POST" action="register.php">
                        <input type="hidden" name="Cid" value="<?php echo $course[0];?>">
                        <input type="hidden" name="opttype" value="Register">
                        <input type="submit" name="submit" value="Register">
                    </form>

                </td>

                </tr>
                <?php endforeach ?>
              </table>
        </div>

      </div>
    </section><!-- End Courses Section -->

  <!-- End #main -->

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
        </footer><!-- End Footer -->

<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

</body>

</html>