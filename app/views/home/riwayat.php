<link rel="stylesheet" href="<?= BASEURL; ?>/css/profil.css">

<style>
    /* * {
        border: 2px solid red;
    } */

    .btn-orange {
        background-color: #ff7133;
    }

    .btn-outline-orange {
        border: 1px solid #ff7133;
        color: #ff7133;
    }

    .btn-outline-orange:hover {
        transition: 0.4s;
        background-color: rgba(128, 128, 128, 0.548);
        border: 1px solid rgba(128, 128, 128, 0.548);
        opacity: 0.8;
        color: #FFFFFF;
    }

    .btn-orange:hover {
        transition: 0.4s;
        background-color: #c95d2e;
    }

    .card-style {
        background: #FFFFFF;
        box-shadow: 2px 6px 29px rgba(0, 0, 0, 0.16);
        border-radius: 16px;
    }
</style>

<title>Riwayat | TolongDesa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 col-12 pb-5 mb-5">

                <h1 class="fw-bold mt-5 ms-md-5 ms-0">Desa Beurawe</h1>
                <br>
                
                <h2 class="fw-normal ms-md-5 ms-0">Daftar kamu minta tolong</h2>
                <!-- 
                    Kombinasi tampilannya :
                       - judul, belum ada penolong
                       - judul, nama penolong, tombol tidak selesai & selesai
                       - judul, nama penolong, tidak selesai
                       - - judul, nama penolong, selesai
                 -->
                <div class="container card-style ms-md-5 ms-0 mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="card-title mt-4 ms-3">Judul Minta Tolong</h5>
                        </div>
                        <div class="col-md-4">
                            <h6 class="card-title text-muted mt-4 mb-4 text-center">belum ada penolong</h6>

                            <!-- <button type="button" class="btn btn-outline-success rounded-pill mt-md-3" disabled>Nama Penolongg</button> -->
                        </div>
                        <div class="col-md-4">
                            <!-- <h6 class="card-title text-muted mt-4 text-center mb-4">Selesai</h6> -->

                            <!-- <div class="mt-3 text-end mb-3">
                                <button type="button" class="btn btn-orange text-white px-4 mb-1">Selesai</button>
                                <button type="button" class="btn btn-outline-orange px-4 mb-1">Tidak Selesai</button>
                            </div> -->

                            <h6 class="card-title mt-md-4 mt-0 mb-4 text-center text-danger">Tidak Selesai</h6>
                        </div>
                    </div>
                </div>
     
                <h2 class="fw-normal ms-md-5 ms-0 mt-5">Daftar kamu memberi pertolongan</h2>
                <!-- 
                    Kombinasi tampilannya :
                      - Judul, Selesai
                      - Judul, Tidak Selesai
                      - Judul, Dalam proses
                 -->
                <div class="container card-style ms-md-5 ms-0 mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title mt-1">Judul Minta Tolong</h5>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <!-- <h6 class="card-title text-muted mt-md-4 mt-0 mb-4 text-center">Selesai</h6> -->

                            <!-- <h6 class="card-title text-muted mt-md-4 mt-0 mb-4 text-center">Dalam Proses</h6> -->

                            <h6 class="card-title mt-md-4 mt-0 mb-4 text-center text-danger">Tidak Selesai</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?= BASEURL; ?>/js/pop-up.js"></script>
</body>

</html>