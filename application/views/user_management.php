<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - User Management</title>
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
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 justify-content-between">
                <div class="breadcrumb-title pe-3">User Management</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile b-l-primary b-b-primary">
                        <div class="card-body ">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>


                            </div>
                            <div class="social-details">
                                <h5 class="mb-1 text-light"><a href="#">Brooklyn Simmons</a>
                                </h5><span class="f-light">@brookly.simmons</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">1,908</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">34.0k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">897</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>

                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Mark Jecno</a>
                                </h5><span class="f-light">@mark.jeco</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">875</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">12.0k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">1400</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>

                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Dev John</a>
                                </h5><span class="f-light">@john.dev</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">1,274</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">15.0k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">1874</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>

                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Johan Deo</a>
                                </h5><span class="f-light">@deo.johan</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">500</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">8.0k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">570</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>

                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Douglas
                                        Reichel</a></h5><span class="f-light">@reichel.douglas</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">460</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">2k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">350</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>
                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Lisa
                                        lillian</a></h5><span class="f-light">@lisa.lillian</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">547</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">3.5k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">822</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>

                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Olivia
                                        rose</a></h5><span class="f-light">@rose.olivia</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">868</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">1k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">742</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img"><img class="img-fluid" src="assets/image/admin_profile.jpg"
                                        alt="profile"></div>

                            </div>
                            <div class="social-details">
                                <h5 class="mb-1"><a>Sarah
                                        Karen</a></h5><span class="f-light">@karen.sarah</span>
                                <!-- <ul class="card-social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://accounts.google.com/" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul> -->
                                <ul class="social-follow">
                                    <li>
                                        <h5 class="mb-0">972</h5><span class="f-light">Posts</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">2.5k</h5><span class="f-light">Followers</span>
                                    </li>
                                    <li>
                                        <h5 class="mb-0">864</h5><span class="f-light">Following</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!--end page main-->
        <?php include 'common_files/footer.php'?>
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->
    </div>
    <?php include 'link/script.php'?>
    <script>
    $(document).ready(function() {
        // summernote Script
        $('.summernote').summernote({
            height: 350,
            minHeight: 350,
            maxHeight: 350,
        });
    });
    </script>


</body>

</html>