<?php include "assets/php/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pariwisata | Artikel</title>
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
          <li><a href="artikel.php" class="active">Artikel</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="tentang.php">Tentang</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">


    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/won.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Artikel</h2>

      </div>
    </div>

    
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow p-3 mb-4 bg-body rounded" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Tambah Artikel</h5>
            <a href="tmb_artikel.php" title=""><button type="button" class="btn btn-outline-success">Tambah</button></a>
          </div>
        </div>
        <div class="row gy-4 posts-list">
          <?php 
            $dta = "SELECT * FROM artikel";
            $kueri = mysqli_query($db, $dta);

            while ($art = mysqli_fetch_array($kueri)) {
                  
          ?>
          <div class="col-xl-4 col-md-6">
            <a class="btn btn-outline-primary mb-2" href="edt_artikel.php?id=<?php echo $art['id']; ?>">Edit</a>
            <a class="btn btn-outline-danger mb-2" href="assets/php/delart.php?id=<?php echo $art['id']; ?>">Hapus</a>
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <?php echo "<img src='file/$art[gambar]' class='img-fluid'>"; ?>
                <span class="post-date"><?php echo date('M Y', strtotime($art['waktu']));  ?></span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"><?php echo $art['nama']; ?></h3>

                <p>
                  <?php echo $art['keterangan']; ?>
                </p>

                <hr>

                <a class="readmore stretched-link" href="detail.php?id=<?php echo $art['id'];  ?>"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>

          </div><?php } ?>

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