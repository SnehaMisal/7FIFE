<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&FIFE - Forgot Password</title>
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
                        <div class="login_card">
                            <div class="card shadow rounded-5 overflow-hidden">
                            <div class="card-header border-0 text-center">
                                    <img src="<?php echo base_url('') ?>assets/image/favicon_1.png" class="user-img"
                                        alt="">
                                </div>
                                <div class="card-body p-4 p-sm-5" style="padding-top:0 !important">
                                    <h5 class="card-title text-center">Reset Your Password</h5>
                                    <hr>
                                    <form class="form-body" method="post" action="<?php echo base_url() ?>">
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
                                                <div class="d-grid">
                                                    <button type="submit"
                                                        class="btn btn_default radius-30">Done</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-0">Already have an password?<a
                                                        href="<?php echo base_url() ?>">&nbsp; Sign in</a></p>
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

</html>