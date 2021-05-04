    <!-- CSS -->
    <link rel="stylesheet" href="css/beranda.css">

    <title>Beranda | TolongDesa</title>
</head>
<body>
<!-- SideBar -->
<?php include "sidebar-beranda.php"; ?>
<!-- Akhir SideBar -->

<!-- Navbar untuk Mobile -->
<?php include "navbar-beranda.php"; ?>
<!-- Akhir Navbar untuk Mobile -->

<!-- Section Isi -->
<div class="row">
    <div class ="col-md-2 d-none d-md-block"></div>
    <div class="col-md-7 col-12 ms-md-5 ms-0">
        <h1 class="fw-bold text-center d-md-none d-block mt-5">Tolong<span class="fw-normal">Desa</span></h1>
        <h1 class="mt-5 ms-5 ps-4 fw-bold">Desa Beurawe</h1>
        <br>
        <a class="btn btn-success shadow-sm py-1 px-4 fw-bold text-white" style="float: right; margin-right: 5rem;" href="#">Minta Tolong</a>
        <br>
        <?php include "cardtolong.php" ?>
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