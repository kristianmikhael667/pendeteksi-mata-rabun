<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="assets/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>

                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="../assets/images/logo-default-294x44. png" alt="" width="147" height="22" /><img class="brand-logo-light" src="../assets/images/logo-inverse-294x44.png" alt="" width="147" height="22" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('member') ?>">Beranda</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#"><?= $user['nama_user']; ?></a>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="doctors.html">Edit Profile</a>
                                                </li> -->
                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="logout.php">Logout</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image context-dark custom-mode-1" style="background-image: url(../assets/images/breadcrumbs-1.png)" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <div class="row flex-column-reverse">
                    <div class="col-12">
                        <div class="breadcrumbs-custom-title">Silakan pilih gejala yang Anda rasakan</div>
                    </div>
                </div>
            </div>
        </section>

        <!--Tabs-->
        <section class="section section-md bg-default text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <h4>Pilih Gejala</h4>
                        <!--Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                            <!--Nav tabs-->

                            <ul class="nav nav-tabs">
                                <?php

                                $no = 1;
                                $sn = 1;
                                foreach ($gejala as $gejal) : ?>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-<?= $no++ ?>" data-toggle="tab">Pertanyaan <?= $sn++ ?></a></li>
                                <?php endforeach ?>

                            </ul>

                            <!--Tab panes-->
                            <form action="<?= base_url('diagnosa/hasil') ?>" method="POST">
                                <div class="tab-content">
                                    <?php
                                    $no = 1;
                                    $nu = 1;
                                    foreach ($gejala as $g) : ?>
                                        <div class="tab-pane fade" id="tabs-1-<?= $no++ ?>">

                                            <h4 class="mb-2"><?= $nu++ ?>.) <?= $g["kode_gejala"] ?> ~ Apakah <?= $g["nama_gejala"] ?> ?</h4>
                                            <input type="checkbox" id="<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>"> Ya
                                            <input type="checkbox" id="<?= $g['id_gejala']; ?>" class="ml-4" name="id_gejala[]" value=""> Tidak
                                            <select name="id_gejala_cf[]" class="form-select ml-5" aria-label="Default select example" multiple>
                                                <option>Pilih Jawaban Pasien</option>
                                                <option value="<?= $g['id_gejala'] ?>">Yakin</option>
                                                <option>Tidak Yakin</option>
                                            </select>
                                        </div>

                                    <?php endforeach ?>
                                    <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-stethoscope"></i> Diagnosa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <footer class="section footer-classic context-dark">
            <!-- Footer 1 -->
            <div class="footer-classic__body">
                <div class="container">
                    <div class="row row-30">
                        <div class="col-xl-12 order-1 wow fadeInLeft">
                            <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="../assets/images/logo-default-294x44.png" alt="" width="147" height="22" /><img class="brand-logo-light" src="../assets/images/logo-inverse-294x44.png" alt="" width="147" height="22" /></a>
                            <p class="text-style-1">Sistem Pakar Pendeteksi Mata Rabun merupakan Teknologi kecerdasan buatan dalam bidang kesehatan yang memacu untuk pengembangan aplikasi sistem pakar untuk layanan kesehatan, salah satunya adalah proses diagnosa
                                penyakit. Sistem pakar merupakan bidang studi pada Kecerdasan Buatan yang sudah ada dalam beberapa decade..</p>
                        </div>

                    </div>
                </div>
            </div> <!-- Footer 2 -->
            <div class="footer-classic__aside">
                <div class="container">
                    <div class="row row-10 flex-column-reverse flex-sm-row">
                        <div class="col-sm-6 text-center text-md-left wow fadeInLeft">
                            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Pendeteksi Mata Rabun</span><span>.&nbsp;</span><span>&nbsp;</span><span>All rights reserved.</span></p>
                        </div>
                        <!-- <div class="col-sm-6 text-center text-md-right wow fadeInRight"><a class="privacy-link" href="privacy-policy.html">Privacy Policy</a></div> -->
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <!--coded by Drel-->
</body>

</html>