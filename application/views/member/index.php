<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
                                    <!--Brand--><a class="brand" href="<?= base_url('/member') ?>"><img class="brand-logo-dark" src="assets/images/logo-default-294x44.png" alt="" width="147" height="22" /><img class="brand-logo-light" src="assets/images/logo-inverse-294x44.png" alt="" width="147" height="22" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('/member') ?>">Dashboard</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#"><?= $user['nama_user']; ?></a>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Edit Profile</a>
                                                </li>
                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?= base_url('/auth/logout') ?>">Logout</a>
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
        <section class="breadcrumbs-custom bg-image context-dark custom-mode-1" style="background-image: url(assets/images/breadcrumbs-1.png)" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <div class="row flex-column-reverse">
                    <div class="col-12">
                        <div class="breadcrumbs-custom-title">Welcome, <strong><?= $user['nama_user']; ?></strong> in Pendeteksi Mata Rabun</div>

                    </div>
                </div>
            </div>
        </section>
        <section class="section section-sm bg-primary single-post-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="single-post-caption">
                            <div class="single-post-caption__user"><img src="assets/images/user-profile-140x140.png" alt="" width="140" height="140" /><?= $user['nama_user']; ?></span>
                            </div>
                            <h2 class="text-center">Application Pendeteksi Mata</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-10">
                    <div class="col-lg-8">
                        <div class="single-post-layout">
                            <div class="row row-10">
                                <div class="col-12">
                                    <div class="article-comment">
                                        <h4 class="mb-3">Please do a diagnosis of eye disease</h4>
                                        <div class="form-button text-lg-left">
                                            <form action="<?= base_url('member/diagnosa') ?>" method="post">
                                                <button class="button button button-primary" type="submit"><i class="fas fa-stethoscope"></i> Click Here For Diagnosis</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-aside-classic">
                            <div class="row row-xl-50">
                                <div class="col-12">
                                    <div class="blog-aside-classic__item">
                                        <div class="booking-calendar booking-calendar-aside" id="chapters-select">
                                            <div class="rdc-panel"><span class="rdc-month"></span> <span class="rdc-fullyear"></span>
                                                <div class="rdc-panel-nav"><a class="rdc-prev"></a><a class="rdc-next"></a></div>
                                            </div>
                                            <div class="rdc-table"></div>
                                            <div class="rdc-events"><a class="rdc-events_close"></a>
                                                <ul class="list-unstyled">
                                                    <li class="rdc-event" data-date="01/15/2019">
                                                        <table class="table rdc-event-booking-table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p class="heading-6">Available Appointments on <span>January 14, 2019</span></p>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">8:00am - 9:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">10:30am - 11:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li class="rdc-event" data-date="12/16/2019">
                                                        <table class="table rdc-event-booking-table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p class="heading-6">Available Appointments on <span>February 14, 2019</span></p>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">8:00am - 9:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">10:30am - 11:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li class="rdc-event" data-date="12/12/2019">
                                                        <table class="table rdc-event-booking-table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p class="heading-6">Available Appointments on <span>March 14, 2019</span></p>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">8:00am - 9:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">10:30am - 11:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li class="rdc-event" data-date="12/14/2019">
                                                        <table class="table rdc-event-booking-table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p class="heading-6">Available Appointments on <span>April 14, 2019</span></p>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">8:00am - 9:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">10:30am - 11:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li class="rdc-event" data-date="01/10/2020">
                                                        <table class="table rdc-event-booking-table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p class="heading-6">Available Appointments on <span>May 14, 2019</span></p>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">8:00am - 9:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">10:30am - 11:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li class="rdc-event" data-date="01/12/2020">
                                                        <table class="table rdc-event-booking-table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p class="heading-6">Available Appointments on <span>June 14, 2019</span></p>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">8:00am - 9:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <dl class="dl-horizontal-mod-1">
                                                                            <dt><span class="icon icon-md icon-primary fa fa-clock-o"></span></dt>
                                                                            <dd>
                                                                                <time datetime="2019">10:30am - 11:00am</time>
                                                                            </dd>
                                                                        </dl>
                                                                    </td>
                                                                    <td><span>2 time slots available</span></td>
                                                                    <td>
                                                                        <button class="button button-primary" data-toggle="modal" data-target="#appointment">Book Appointment</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade text-left" id="appointment" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal"><span class="icon novi-icon icon-md fa fa-times"></span></button>
                        <h5 class="modal-title">Request Appointment</h5>
                    </div>
                    <div class="modal-body">
                        <div class="group-xl d-flex"><span class="d-inline-flex align-items-center"><span class="icon novi-icon icon-md icon-primary fa fa-calendar-check-o"></span>August 11, 2019</span><span class="d-inline-flex align-items-center"><span class="icon novi-icon icon-md icon-primary fa fa-clock-o"></span>10:00 am – 12:00 am</span></div>
                        <div class="offset-top-10 label-group">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" value="login" checked="checked">I am a new customer
                            </label>
                        </div>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" value="register">I am a current customer
                            </label>
                        </div>
                        <hr>
                        <div class="register-form">
                            <h5>Registration: <span class="text-accent">*</span></h5>
                            <p>Your first name and an email address are required.</p>
                            <!-- Login form-->
                            <form class="modal-form">
                                <div class="rd-mailform-inline-flex">
                                    <div class="form-wrap">
                                        <label class="form-label" for="name-2">First Name</label>
                                        <input class="form-input" id="name-2" type="text" name="name" data-constraints="@Required">
                                    </div>
                                    <div class="form-wrap">
                                        <label class="form-label" for="email">E-mail</label>
                                        <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="form-wrap">
                                    <label class="form-label" for="password-2">Password</label>
                                    <input class="form-input" id="password-2" type="password" name="password" data-constraints="@Required">
                                </div>
                                <div class="group">
                                    <button class="button button-primary" type="submit">Book Appointment</button>
                                    <button class="button button-secondary-outline" type="button" data-dismiss="modal">close</button>
                                </div>
                            </form>
                        </div>
                        <div class="login-form">
                            <h5>Login</h5>
                            <!-- Login form-->
                            <form>
                                <div class="form-wrap">
                                    <label class="form-label" for="name">Username or e-mail</label>
                                    <input class="form-input" id="name" type="text" name="name" data-constraints="@Required">
                                </div>
                                <div class="form-wrap">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
                                </div>
                                <div class="group">
                                    <button class="button button-primary" type="submit">Book Appointment</button>
                                    <button class="button button-secondary-outline" type="button" data-dismiss="modal">close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="section footer-classic context-dark">

            <!-- Footer 1 -->
            <div class="footer-classic__body">
                <div class="container">
                    <div class="row row-30">
                        <div class="col-xl-12 order-1 wow fadeInLeft">
                            <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="assets/images/logo-default-294x44.png" alt="" width="147" height="22" /><img class="brand-logo-light" src="assets/images/logo-inverse-294x44.png" alt="" width="147" height="22" /></a>
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
    <!-- Js -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!--coded by Drel-->
</body>

</html>