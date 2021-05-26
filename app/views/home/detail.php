<link rel="stylesheet" href="<?= BASEURL; ?>/css/profil.css">
<link rel="stylesheet" href="<?= BASEURL; ?>/css/beranda.css?v=<?php echo time(); ?>">

<style>
    td {
        vertical-align: top;
    }
</style>

<title>Detail Pertolongan | TolongDesa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 col-12 pb-5 mb-5">

                <div class="mt-5">
                    <a href="<?= BASEURL; ?>/home" class="fs-1 ms-md-5 ms-0" style="color : #70e0ae;"><i class="bi bi-arrow-left-circle-fill"></i></a>
                    <h1 class="fw-bold d-inline ms-3">Detail Pertolongan</h1>
                </div>

                <div class="card my-5 shadow ms-md-5 ms-0" style="background: #F9F9FB; border: #F9F9FB; border-radius: 8px;">
                    <div class="card-body m-3">
                        <h5 class="card-title d-inline">Judul Pertolongan</h5>
                        <h6 class="card-subtitle mt-2 text-muted">Deskripsi :</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus commodi hic vero eos facere debitis. Architecto, veritatis nisi sed neque alias, eaque similique sequi facere quisquam unde rem tempore iste.</p>
                        <h6 class="card-subtitle mt-2 text-muted">Alamat :</h6>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quis ad doloribus sint dolor cum accusantium odio recusandae vero id dolores magni, aut iusto laborum ea, labore magnam voluptas quaerat.</p>
                        <span class="badge bg-secondary">tags 1</span>
                        <span class="badge bg-secondary">tags 2</span>
                        <span class="badge bg-secondary">tags 3</span>
                        <div class="mt-4">
                            <img class="position-absolute img-fluid" src="<?= BASEURL; ?>/assets/foto1.png" alt="foto1" width="50" height="50" />
                            <div style="margin-left: 3.8em; padding-top: 0.4em">
                                <p class="m-0 fw-normal">nama</p>
                                <p class="d-inline fw-light mb-0">masyarakat</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 ms-md-5 ms-0">
                    <h3 class="fw-bold">Penolong</h3>
                    <button type="button" class="btn btn-outline-success rounded-pill mt-md-3 fw-bold" disabled>Nama Penolongg</button>
                </div>

            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?= BASEURL; ?>/js/pop-up.js"></script>
</body>

</html>