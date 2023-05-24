<!doctype html>
<html lang="en" class="semi-dark">


<!-- Mirrored from www.codervent.com/snacked/demo/ltr/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 06:17:04 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Sign In</title>
    <?php include 'link/links.php'?>


</head>

<body class="bg_login">

    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">

                        <div class="login_card ">
                            <div class="card shadow rounded-5 overflow-hidden">
                                <div class="card-header border-0 text-center">
                                    <img src="<?php echo base_url('') ?>assets/image/favicon_1.png" class="user-img"
                                        alt="">
                                </div>
                                <div class="card-body pt-0 p-4 p-sm-5" style="padding-top:0 !important">
                                    <h5 class="card-title text-center">
                                        Sign In
                                    </h5>
                                    <p class="card-text mb-3 text-center">Welcome back! Log in to your account...!</p>
                                    <hr>
                                    <form class="form-body" method="post" action="<?php echo base_url('dashboard') ?>">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="email" class="form-control radius-30 ps-5"
                                                        id="inputEmailAddress" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter
                                                    Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" class="form-control radius-30 ps-5"
                                                        id="inputChoosePassword" placeholder="Enter Password">
                                                </div>
                                            </div>
                                            <div class="col-12 text-end"> <a
                                                    href="<?php echo base_url('forgot_password') ?>">Forgot Password
                                                    ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn_default radius-30">Sign
                                                        In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->


    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>


</body>


<!-- Mirrored from www.codervent.com/snacked/demo/ltr/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 06:17:04 GMT -->

</html>