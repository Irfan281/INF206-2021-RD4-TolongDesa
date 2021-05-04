    <!-- My CSS -->
    <link rel="stylesheet" href="css/login-daftar.css">

    <title>Login | TolongDesa</title>
  </head>
  <body>
    <div class="d-flex align-items-center min-vh-100">
      <div class="container card-login">
        <div class="text-center">
          <h2 class="fw-bold mb-5 pb-2">Tolong<span class="fw-normal">Desa</span></h2>

          <form class="px-5" method="POST" action="beranda.php">
            <div class="mb-5">
              <h6 class="fw-bold text-muted mb-3">Silakan Login</h6>
              <input type="email" class="form-control style-form" name="email" placeholder="Email" />
            </div>
            <div class="mb-5">
              <input type="password" class="form-control style-form" name="password" placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-orange shadow-sm border-3 py-1 px-4 mb-5 fw-bold text-white">Login</button>
            <p>Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
