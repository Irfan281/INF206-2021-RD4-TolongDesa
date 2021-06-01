    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/LandingPage.css?v=<?php echo time(); ?>" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>TolongDesa</title>
    </head>

    <body>
      <!-- NavBar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link px-md-4 fw-light" href="#Tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-md-4 fw-light" href="#Kontak">Kontak</a>
              </li>
            </ul>
            <a class="navbar-brand fw-bolder fs-2 mx-auto" href="<?= BASEURL; ?>">Tolong<span class="fw-normal">Desa</span> </a>
            <div class="d-flex">
              <a class="btn shadow-sm border-3 py-1 px-4 fw-bold text-white btn-orange" href="<?= BASEURL; ?>/masyarakat/login">Login</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->

      <!-- Hero Text -->
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mt-lg-0 mt-5 ms-4">
            <div class="hero-text">
              <h1 class="fw-bold animate__animated animate__fadeInUp" style="font-size: 5rem">Butuh Pertolongan ?</h1>
              <p class="mt-3 mb-5 animate__animated animate__fadeInUp" style="color: rgb(134, 134, 134); font-size: 1.2rem">
                TolongDesa merupakan website untuk memudahkan kamu meminta pertolongan apapun kepada Masyarakat, petugas, ataupun kepala desa di desamu. Yuk, saling tolong menolong. Dari kita untuk kita.
              </p>
              <a href="<?= BASEURL; ?>/masyarakat/registrasi" class="btn shadow-sm border-3 py-2 px-3 fw-bold text-white btn-orange animate__animated animate__fadeInUp">Daftar Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Hero Text -->

      <!-- Section About -->
      <section id="Tentang" class="py-5">
        <div class="container">
          <h2 class="fw-bold mt-2 text-white" style="font-size: 5rem;">Tentang</h2>
          <h5 class="fw-normal ms-2 mt-4 mb-5 text-white">TolongDesa dikembangkan oleh RD4, yang beranggotakan 5 orang sebagai berikut.</h5>

          <div class="container d-flex justify-content-center">
            <div class="card" data-aos="fade-up">
              <div class="content">
                <div class="imgBx">
                  <img src="<?= BASEURL; ?>/assets/irfan.jpeg" alt="jidan">
                </div>
                <div class="contentBx">
                  <h4>Muhammad Irfan</h4>
                </div>
              </div>
            </div>

            <div class="card" data-aos="fade-up">
              <div class="content">
                <div class="imgBx">
                  <img src="<?= BASEURL; ?>/assets/zaidan.jpeg" alt="jidan">
                </div>
                <div class="contentBx">
                  <h4>Sulthan Zaidan Fauzi</h4>
                </div>
              </div>
            </div>

            <div class="card" data-aos="fade-up">
              <div class="content">
                <div class="imgBx">
                  <img src="<?= BASEURL; ?>/assets/faris.jpeg" alt="jidan">
                </div>
                <div class="contentBx">
                  <h4>M. Faris Adzkia</h4>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="container d-flex justify-content-center">
          <div class="card" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <div class="imgBx">
                <img src="<?= BASEURL; ?>/assets/bayu.jpg" alt="jidan">
              </div>
              <div class="contentBx">
                <h4>Bayu Ramadhan</h4>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <div class="imgBx">
                <img src="<?= BASEURL; ?>/assets/mufid.jpeg" alt="jidan">
              </div>
              <div class="contentBx">
                <h4>Mufid Akhbar</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Section About -->

      <!-- Section Kontak -->
      <section id="Kontak">


        <div class="container">
          <h2 class="fw-bold mt-2" style="font-size: 5rem;">Kontak</h2>
          <h5 class="fw-normal ms-2 mt-4 mb-5">Hubungin kami bila anda memiliki kebutuhan dan informasi lebih lanjut mengenai TolongDesa.</h5>

          <div class="row">
            <div class="col-md-auto">
              <a href="https://wa.link/alvyyt" target="_blank" style="text-decoration: none;">
                <div class="card" data-aos="fade-up" style="height: 300px;">
                  <div class="content">
                    <h1 class="text-success fw-bold" style="font-size: 7rem;"><i class="bi bi-whatsapp"></i></h1>
                    <div class="contentBx">
                      <h4 class="text-muted">Whatsapp</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-auto">
              <a href="mailto:tolongdesa@gmail.com?body=Halo%20TolongDesa%20Team%20%F0%9F%91%8B" style="text-decoration: none;">
              <div class="card" data-aos="fade-up" style="height: 300px;">
                <div class="content">
                  <h1 class="text-primary fw-bold" style="font-size: 7rem;"><i class="bi bi-envelope"></i></i></h1>
                  <div class="contentBx">
                    <h4 class="text-muted">Email</h4>
                  </div>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>




      </section>
      <!-- Akhir Section Kontak -->

      <!-- Footer -->
      <footer>
        <div>
          <p class="text-center text-white p-2 m-0 fw-light" style="background-color: rgb(0, 0, 0)">
            Made with <i class="bi bi-heart-fill text-danger"></i> by RD4 <br />
            <i class="bi bi-info-circle text-white"></i> 2021
          </p>
        </div>
      </footer>
      <!-- Akhir Footer -->

      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

    </html>