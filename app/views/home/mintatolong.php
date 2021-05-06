<!-- CSS -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/mintatolong.css">

<title>Minta Tolong | TolongDesa</title>
</head>

<body>
    <div class="container">
        <div class="row mx-md-0 mx-3">
            <div class="col-md-2"></div>
            <div class="col-md-10 col-12">
                <h1 class="fw-bold ms-md-5 ms-0 mt-5">Desa Beurawe</h1>

                <div class="mt-5">
                    <a href="<?= BASEURL; ?>/home" class="fs-1 ms-md-5 ms-0" style="color : #70e0ae;"><i class="bi bi-arrow-left-circle-fill"></i></a>
                    <h2 class="fw-normal d-inline ms-3">Form Minta Tolong</h2>
                </div>

                <div class="container card-form-style ms-md-5 ms-0 mt-2">
                    <form method="POST" action="<?= BASEURL; ?>/home/tambahform" class="p-md-5 p-3">
                        <div class="mb-4">
                            <label for="inputjudul" class="form-label">Judul Pertolongan</label>
                            <input name="judul" type="judul" id="inputjudul" class="form-control" placeholder="Judul pertolongan yang diinginkan" required />
                        </div>
                        <div class="mb-4">
                            <label for="inputdeskripsi" class="form-label">Deskripsi Pertolongan</label>
                            <input name="deskripsi" type="deskripsi" id="inputdeskripsi" class="form-control" placeholder="Deskripsi pertolongan yang diinginkan" required />
                        </div>
                        <div class="mb-4">
                            <label for="inputalamat" class="form-label">Alamat Pertolongan</label>
                            <input name="alamat" type="alamat" id="inputalamat" class="form-control" placeholder="Alamat dimana pertolongan dibutuhkan" required />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Tags</label>
                            <div class="row g-3" style="width: 300px;">
                                <div class="col">
                                    <input name="tag1" type="tag1" id="inputtag1" class="form-control" placeholder="Tag 1" />
                                </div>
                                <div class="col">
                                    <input name="tag2" type="tag2" id="inputtag2" class="form-control" placeholder="Tag 2" />
                                </div>
                                <div class="col">
                                    <input name="tag3" type="tag3" id="inputtag3" class="form-control" placeholder="Tag 3" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success shadow-sm border-3 py-1 px-4 fw-bold text-white" style="float : right;">Minta Tolong</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>