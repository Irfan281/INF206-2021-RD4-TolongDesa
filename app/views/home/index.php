    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/beranda.css">

    <title>Beranda | TolongDesa</title>
    </head>

    <body>
        <!-- Section Isi -->
        <div class="row">
            <div class="col-md-2 d-none d-md-block"></div>
            <div class="col-md-7 col-12 ms-md-5 ms-0">
                <h1 class="fw-bold text-center d-md-none d-block mt-5">Tolong<span class="fw-normal">Desa</span></h1>
                <h1 class="mt-5 ms-5 ps-4 fw-bold">Desa Beurawe</h1>
                <br>
                <a class="btn btn-success shadow-sm py-1 px-4 fw-bold text-white" style="float: right; margin-right: 5rem;" href="<?= BASEURL; ?>/home/mintatolong">Minta Tolong</a>
                <br>
                <?php foreach (array_reverse($data) as $card) : ?>
                    <div class="container">
                        <div class="card m-5 shadow" style="background: #F9F9FB; border: #F9F9FB; border-radius: 8px;">
                            <div class="card-body m-3">
                                <h5 class="card-title"><?= $card['judul']; ?></h5>
                                <h6 class="card-subtitle mt-2 text-muted">Deskripsi :</h6>
                                <p class="card-text"><?= $card['deskripsi']; ?></p>
                                <h6 class="card-subtitle mt-2 text-muted">Alamat :</h6>
                                <p class="card-text"><?= $card['alamat']; ?></p>
                                <span class="badge bg-secondary"><?= $card['tags'][0]; ?></span>
                                <span class="badge bg-secondary"><?= $card['tags'][1]; ?></span>
                                <span class="badge bg-secondary"><?= $card['tags'][2]; ?></span>
                                <div class="mt-4">
                                    <img class="position-absolute img-fluid" src="<?= BASEURL; ?>/assets/foto1.png" alt="foto1" width="50" height="50" />
                                    <div style="margin-left: 3.8em; padding-top: 0.4em">
                                        <p class="m-0 fw-normal"><?= $card['nama']; ?></p>
                                        <p class="d-inline fw-light mb-0"><?= $card['peran']; ?></p>
                                        <a class="btn btn-success shadow-sm py-1 px-4 fw-bold text-white me-0 me-lg-5" href="<?= BASEURL; ?>/home/menolong" style="float: right;">Tolong</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-2">
                <div style="display : table; margin : auto; padding-bottom: 8rem;">
                    <div class="container text-white peringkat py-4 px-4 mt-5">
                        <p>Penolong Terbanyak</p>
                        <table>
                            <tr>
                                <td>1 </td>
                                <td>Mustafa Ariadi</td>
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
        <!-- Akhir Section Isi -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

    </html>