    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/LandingPage.css" />

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
                <a class="nav-link px-md-4 fw-light" href="#">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-md-4 fw-light" href="#">Kontak</a>
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
              <h1 class="fw-bold" style="font-size: 5rem">Butuh Pertolongan ?</h1>
              <p class="mt-3 mb-5" style="color: rgb(134, 134, 134); font-size: 1.2rem">
                TolongDesa merupakan website untuk memudahkan kamu meminta pertolongan apapun kepada Masyarakat, petugas, ataupun kepala desa di desamu. Yuk, saling tolong menolong. Dari kita untuk kita.
              </p>
              <a href="<?= BASEURL; ?>/masyarakat/registrasi" class="btn shadow-sm border-3 py-2 px-3 fw-bold text-white btn-orange">Daftar Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Hero Text -->

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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

    </html>