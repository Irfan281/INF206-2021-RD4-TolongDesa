  <link rel="stylesheet" href="<?= BASEURL; ?>/css/sidebar.css">
  </head>

  <body>
    <!-- Sidebar -->
    <div class="sidebar d-none d-md-block">
      <h4 class="fw-bold text-white text-center my-4">
        <a href="<?= BASEURL; ?>/home" style="text-decoration: none; color: inherit;">Tolong<span class="fw-normal">Desa</span></a>
      </h4>
      <div class="ms-4 mb-4">
        <a class="btn shadow-sm text-white mt-4 btn-pd" style="background-color: #FF7133;" href="<?= BASEURL; ?>/home"><i class="bx bxs-home-circle"></i>&emsp;&emsp;Beranda</a>
        <a class="btn btn-grey-hover text-white mt-4 btn-pd" href="<?= BASEURL; ?>/home/riwayat"><i class="bx bx-history"></i>&emsp;&emsp;Riwayat</a>
        <a href="<?= BASEURL; ?>/masyarakat/profil" style="text-decoration : none;">
          <div class="btn-grey-hover p-2 rounded-2" style="margin-top: 17em; margin-right: 1em;">
            <img class="position-absolute img-fluid" src="<?= BASEURL; ?>/assets/foto1.png" alt="foto1" width="50" height="50" />
            <div class="text-white" style="margin-left: 3.8em; padding-top: 0.4em">
              <p class="m-0 fw-normal"><?= $data[0]; ?></p>
              <p class="fw-light mb-0"><?= $data[1]; ?></p>
            </div>
          </div>
        </a>
      </div>
    </div>
    </div>
    <!-- Akhir Sidebar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>

  </html>