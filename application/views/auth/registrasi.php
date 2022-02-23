<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $judul ?> | Pendeteksi Mata Rabun</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.jpeg') ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/vendor/animate/animate.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/vendor/css-hamburgers/hamburgers.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/vendor/animsition/css/animsition.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/vendor/select2/select2.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/vendor/daterangepicker/daterangepicker.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/css/main.css') ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url('assets_login/images/bg-01.jpg') ?>')">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form method="POST" class="login100-form validate-form" action="<?= base_url('auth/registrasi') ?>">
                    <span class="login100-form-title p-b-49">
                        Pendaftaran
                    </span>
                    <?= $this->session->flashdata('pesan'); ?>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Nama Lengkap</span>
                        <input class="input100" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        <small class="text-danger"><?= form_error('nama'); ?></small>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" id="username" placeholder="Masukkan Username Anda">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        <small class="text-danger"><?= form_error('username'); ?></small>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="password" placeholder="Masukkan Password Anda">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        <small class="text-danger"><?= form_error('password'); ?></small>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Ulangi Password</span>
                        <input class="input100" type="password" name="password2" id="password" placeholder="Masukkan Ulangi Password Anda">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">

                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button name="logins" type="submit" class="login100-form-btn">
                                Buat Akun
                            </button>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-70">
                        <span class="txt1 p-b-17">
                            Or Sign In Using
                        </span>

                        <a href="<?= base_url('auth') ?>" class="txt2">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!-- Javascript -->
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/vendor/animsition/js/animsition.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/vendor/bootstrap/js/popper.js') ?>"></script>
    <script src="<?= base_url('assets_login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/vendor/select2/select2.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/vendor/daterangepicker/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets_login/vendor/daterangepicker/daterangepicker.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/vendor/countdowntime/countdowntime.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets_login/js/main.js') ?>"></script>
</body>

</html>