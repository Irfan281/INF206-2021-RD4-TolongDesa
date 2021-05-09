    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login-daftar.css?v=<?php echo time(); ?>">

    <title>Daftar | TolongDesa</title>
    </head>

    <body>
      <!-- cek session popup -->
      <div class="popup-registrasi" data-popup_registrasi="<?= isset($_SESSION['popup']['registrasi']) ? $_SESSION['popup']['registrasi'] : "null"; ?>"><?php unset($_SESSION['popup']['registrasi']); ?></div>

      <div class="d-flex align-items-center min-vh-100 my-4">
        <div class="container card-login">
          <div class="text-center">
            <h2 class="fw-bold mb-5 pb-2 logo">
              <a href="<?= BASEURL; ?>/landingpage" style="text-decoration: none; color: inherit;">Tolong<span class="fw-normal">Desa</span></a>
            </h2>
            <form class="px-5" method="POST" action="<?= BASEURL; ?>/masyarakat/tambah">
              <div class="mb-4">
                <h6 class="fw-bold text-muted mb-3">Silakan Buat Akun Anda</h6>
                <input type="nama" class="form-control style-form" placeholder="Nama" name="nama" required />
              </div>
              <div class="mb-4">
                <input type="email" class="form-control style-form" placeholder="Email" name="email" required />
              </div>
              <div class="mb-4">
                <input type="password" class="form-control style-form" placeholder="Password" name="password" required />
              </div>
              <div class="mb-4">
                <input type="alamat" class="form-control style-form" placeholder="Alamat" name="alamat" required />
              </div>
              <div class="mb-4">
                <input type="nohp" class="form-control style-form" placeholder="No. HP" name="no_hp" required />
              </div>
              <div class="mb-4">
                <select class="form-select style-form text-muted" aria-label="Default select example" name="peran" required>
                  <option selected>Status</option>
                  <option value="Masyarakat">Masyarakat</option>
                  <option value="Petugas Desa">Petugas Desa</option>
                  <option value="Kepala Desa">Kepala Desa</option>
                </select>
              </div>
              <div class="mb-5">
                <select class="form-select style-form text-muted popup-domisili" aria-label="Default select example" name="domisili" required>
                  <option selected>Domisili</option>
                  <option value="Desa Beurawe">Desa Beurawe</option>

                </select>
              </div>
              <button type="submit" class="btn btn-orange shadow-sm border-3 py-1 px-4 mb-5 fw-bold text-white">Daftar</button>
              <p>Sudah punya akun? <a href="<?= BASEURL; ?>/masyarakat/login">Login disini</a></p>
            </form>
          </div>
        </div>
      </div>

      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="<?= BASEURL; ?>/js/pop-up.js"></script>
    </body>

    </html>