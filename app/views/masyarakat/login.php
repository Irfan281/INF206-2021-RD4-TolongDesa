    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login-daftar.css">

    <title>Login | TolongDesa</title>
    </head>

    <body>
      <!-- cek session popup -->
      <div class="popup" data-popup_registrasi="<?= isset($_SESSION['registrasi']) ? $_SESSION['registrasi'] : "null"; ?>"><?php unset($_SESSION['registrasi']); ?></div>

      <div class="d-flex align-items-center min-vh-100">
        <div class="container card-login">
          <div class="text-center">
            <a href="<?= BASEURL; ?>/landingpage" style="text-decoration: none; color: inherit;">
              <h2 class="fw-bold mb-5 pb-2">Tolong<span class="fw-normal">Desa</span></h2>
            </a>

            <form class="px-5" method="POST" action="<?= BASEURL; ?>/masyarakat/masuk">
              <div class="mb-5">
                <h6 class="fw-bold text-muted mb-3">Silakan Login</h6>
                <input type="email" class="form-control style-form" name="email" placeholder="Email" />
              </div>
              <div class="mb-5">
                <input type="password" class="form-control style-form" name="password" placeholder="Password" />
              </div>
              <button type="submit" class="btn btn-orange shadow-sm border-3 py-1 px-4 mb-5 fw-bold text-white">Login</button>
              <p>Belum punya akun? <a href="<?= BASEURL; ?>/masyarakat/registrasi">Daftar disini</a></p>
            </form>
          </div>
        </div>
      </div>

      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="<?= BASEURL; ?>/js/pop-up.js"></script>
    </body>

    </html>