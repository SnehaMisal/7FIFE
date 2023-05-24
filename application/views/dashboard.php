<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Dashboard</title>
    <?php include 'link/links.php'?>
</head>
<body>
    <div class="wrapper">
        <!--start top header-->
        <?php include 'common_files/header.php'?>
        <!--start sidebar -->
        <?php include 'common_files/sidebar.php'?>
        <!--end sidebar -->
        <!--start content-->
        <main class="page-content">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Orders</p>
                                    <h4 class="mb-0">5.8K</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>22.5% from last
                                            week</span></p>
                                </div>
                                <div class="ms-auto widget-icon bg-primary text-white">
                                    <i class="bi bi-basket2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Income</p>
                                    <h4 class="mb-0">$9,786</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>13.2% from last
                                            week</span></p>
                                </div>
                                <div class="ms-auto widget-icon bg-success text-white">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Views</p>
                                    <h4 class="mb-0">875</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>12.3% from last
                                            week</span></p>
                                </div>
                                <div class="ms-auto widget-icon bg-orange text-white">
                                    <i class="bi bi-emoji-heart-eyes"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">New Clients</p>
                                    <h4 class="mb-0">9853</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>32.7% from last
                                            week</span></p>
                                </div>
                                <div class="ms-auto widget-icon bg-info text-white">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->


            <div class="row">
                <div class="col-12 col-lg-8 col-xl-8 d-flex">
                    <div class="card w-100 rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h6 class="mb-0">Revenue History</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="">
                                    <h4 class="text-success mb-0">$9,279</h4>
                                    <p class="mb-0">Revenue</p>
                                </div>
                                <div class="vr"></div>
                                <div class="">
                                    <h4 class="text-pink mb-0">$5,629</h4>
                                    <p class="mb-0">Investment</p>
                                </div>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 d-flex">
                    <div class="card w-100 rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h6 class="mb-0">Task Overview</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="chart2"></div>
                        </div>
                        <ul class="list-group list-group-flush mb-0 shadow-none">
                            <li class="list-group-item bg-transparent border-top"><i
                                    class="bi bi-circle-fill me-2 font-weight-bold text-primary"></i> Complete <span
                                    class="float-end">120</span></li>
                            <li class="list-group-item bg-transparent"><i
                                    class="bi bi-circle-fill me-2 font-weight-bold text-orange"></i> In Progress <span
                                    class="float-end">110</span></li>
                            <li class="list-group-item bg-transparent"><i
                                    class="bi bi-circle-fill me-2 font-weight-bold text-info"></i> Started <span
                                    class="float-end">70</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--end row-->

            <div class="row row-cols-1 row-cols-lg-4 radial-charts g-4">
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="mb-1">Orders</p>
                                <h4 class="">9,254</h4>
                            </div>
                            <div class="">
                                <div id="chart3"></div>
                            </div>
                            <div class="text-center">
                                <p class="mb-1">Completed</p>
                                <h4 class="">5632</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="mb-1">Unique Visitors</p>
                                <h4 class="">5,2684</h4>
                            </div>
                            <div class="">
                                <div id="chart4"></div>
                            </div>
                            <div class="text-center">
                                <p class="mb-1">Increased since Last Week</p>
                                <h4 class="">25%</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="mb-1">Impressions</p>
                                <h4 class="">7,362</h4>
                            </div>
                            <div class="">
                                <div id="chart5"></div>
                            </div>
                            <div class="text-center">
                                <p class="mb-1">Increased since Last Week</p>
                                <h4 class="">45%</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="mb-1">Followers</p>
                                <h4 class="">4278K</h4>
                            </div>
                            <div class="">
                                <div id="chart6"></div>
                            </div>
                            <div class="text-center">
                                <p class="mb-1">Increased since Last Week</p>
                                <h4 class="">55%</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
        </main>
        <!--end page main-->
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    <?php include 'link/script.php'?>
    <script>
    new PerfectScrollbar(".review-list")
    new PerfectScrollbar(".chat-talk")
    </script>


</body>


<!-- Mirrored from www.codervent.com/snacked/demo/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 06:13:29 GMT -->

</html>