    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/beranda.css?v=<?php echo time(); ?>">

    <title>Beranda | TolongDesa</title>
    </head>

    <body>
        <!-- Section Isi -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 d-none d-md-block"></div>
                <div id="kolomcard" class="col-lg-6 col-md-8 col-12">
                    <h1 class="fw-bold text-center d-md-none d-block mt-5">Tolong<span class="fw-normal">Desa</span></h1>
                    <h1 class="mt-5 fw-bold">Desa Beurawe</h1>
                    <br>
                    <a class="btn btn-success shadow-sm py-1 px-4 fw-bold text-white" style="float: right;" href="<?= BASEURL; ?>/home/mintatolong">Minta Tolong</a>
                    <br>
                    <?php for ($i = 0; $i <= count($data) - 2; $i++) : ?>
                        <div class="card my-5 shadow ms-1" style="background: #F9F9FB; border: #F9F9FB; border-radius: 8px;">
                            <div class="card-body m-3">
                                <h5 class="card-title d-inline"><?= $data[$i]['judul']; ?></h5>
                                <?php if ($data[$i]['nama'] == $_SESSION['nama']) : ?>
                                    <span class="badge bg-danger fw-light" style="float: right;">Milik anda</span>
                                <?php endif; ?>
                                <h6 class="card-subtitle mt-2 text-muted">Deskripsi :</h6>
                                <p class="card-text"><?= $data[$i]['deskripsi']; ?></p>
                                <h6 class="card-subtitle mt-2 text-muted">Alamat :</h6>
                                <p class="card-text"><?= $data[$i]['alamat']; ?></p>
                                <span class="badge bg-secondary"><?= $data[$i]['tags'][0]; ?></span>
                                <span class="badge bg-secondary"><?= $data[$i]['tags'][1]; ?></span>
                                <span class="badge bg-secondary"><?= $data[$i]['tags'][2]; ?></span>
                                <div class="mt-4">
                                    <img class="position-absolute img-fluid" src="<?= BASEURL; ?>/assets/foto1.png" alt="foto1" width="50" height="50" />
                                    <div style="margin-left: 3.8em; padding-top: 0.4em">
                                        <p class="m-0 fw-normal"><?= $data[$i]['nama']; ?></p>
                                        <p class="d-inline fw-light mb-0"><?= $data[$i]['peran']; ?></p>
                                        <?php if ($data[$i]['nama'] != $_SESSION['nama']) : ?>
                                            <a data-id_mintatolong="<?= $data[$i]['id_mintatolong']; ?>" class=" btn btn-success shadow-sm py-1 px-4 fw-bold text-white me-0 me-lg-3 popup-tolong" style="float: right;">Tolong</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="col-lg-2">
                    <div class="ms-xxl-5" id="kolomperingkat">
                        <div class="container text-white peringkat py-4 px-xl-4 mt-5">
                            <p>&emsp;Penolong Terbanyak</p>
                            <table class="table table-borderless text-white">
                                <tr>
                                    <td>1 </td>
                                    <td>Sulthan Zaidan Fauzi</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sultan Faris</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ibnu Ratma</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Amirah Fatin</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Azizi Shafa</td>
                                    <td>22</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Section Isi -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="<?= BASEURL; ?>/js/pop-up.js"></script>
    </body>

    </html>