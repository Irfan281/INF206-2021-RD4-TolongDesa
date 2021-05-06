<link rel="stylesheet" href="<?= BASEURL; ?>/css/profil.css">

<style>
    td {
        vertical-align: top;
    }
</style>

<title>Profil | TolongDesa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 col-12 pb-5 mb-5">
                <h1 class="fw-bold mt-5 ms-md-5 ms-0">Desa Beurawe</h1>
                <br>
                <h2 class="fw-normal ms-md-5 ms-0">Profil</h2>

                <div class="container py-4 card-profil me-5 ms-md-5 ms-0">
                    <div class="row">
                        <div class="col-sm d-flex justify-content-center my-4">
                            <img src="<?= BASEURL; ?>/assets/foto1.png" alt="foto1" width="140" height="140" />
                        </div>
                        <div class="col-sm d-flex justify-content-center my-4">
                            <div>
                                <h3 class="d-inline"><?= $data['nama'] ?></h3>
                                <button type="button" class="btn fw-light text-white btn-sm px-3 py-0 mb-4" style="background-color: #ff4d00;" disabled><?= $data['peran']; ?></button>
                                <table>
                                    <tr>
                                        <td>Email</td>
                                        <td>:&emsp;</td>
                                        <td><?= $data['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. HP</td>
                                        <td>:</td>
                                        <td><?= $data['no_hp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= $data['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Domisili</td>
                                        <td>:</td>
                                        <td><?= $data['domisili']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm justify-content-center my-4">
                            <div class="poin text-center text-white p-3 mx-5">
                                <h6>Pertolongan Kamu</h6>
                                <p class="fw-bolder" style="font-size: 50px;"><?= $data['poin']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="<?= BASEURL; ?>/masyarakat/logout" class="btn shadow-sm border-3 py-1 px-4 fw-bold text-white btn-danger" style="float : right; margin-top : 4rem;">Logout</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>