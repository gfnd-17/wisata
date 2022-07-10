<?php 
  include "assets/php/koneksi.php";
  $edt = $_GET['id'];

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pariwisata | Edit Galeri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body>


  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        
        <h1>Pariwisata<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="artikel.php" >Artikel</a></li>
          <li><a href="galeri.php" class="active">Galeri</a></li>
          <li><a href="tentang.php">Tentang</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">

   
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/won.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Edit Galeri</h2>

      </div>
    </div>
    <section id="blog" class="blog">
      <div class="container w-50" data-aos="fade-up" data-aos-delay="100">
        <div class="comments">
              <div class="reply-form">
                <?php 
                  $dtgal = "SELECT * FROM gambar WHERE id='$edt'";
                  $kueri = mysqli_query($db, $dtgal);

                  $eagal = mysqli_fetch_array($kueri);

                 ?>
                <form action="assets/php/ubah_galeri.php" method="POST" enctype="multipart/form-data" >
                  <div class="row">
                    <div class="col form-group">
                      <input name="id" type="hidden" class="form-control" value="<?php echo $edt; ?>" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="formFile" class="form-label">File Lama</label>
                      <a href="file/<?php echo $eagal['gambar']; ?>"><?php echo $eagal['gambar']; ?></a>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="formFile" class="form-label">Masukkan Gambar</label>
                      <input class="form-control" type="file" id="formFile" accept="image/png, image/jpeg" name="upload">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

                </form>

              </div>

            </div>

      </div>
    </section>

  </main>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>