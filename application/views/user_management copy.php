<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Music - User Management</title>
    <?php include 'link/links.php'?>
</head>

<body class="dark-only">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Header -->
        <?php include 'common_files/header.php'?>
        <div class="page-body-wrapper">
            <!-- Sidebar -->
            <?php include 'common_files/sidebar.php'?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3> User Management</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active"> User Management</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                            <div class="card social-profile b-l-primary b-b-primary">
                                <div class="card-body ">
                                    <div class="social-img-wrap">
                                    <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
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
                                                <h5 class="mb-0 f-light">1,908</h5><span class="f-light">Posts</span>
                                            </li>
                                            <li>
                                                <h5 class="mb-0 f-light">34.0k</h5><span class="f-light">Followers</span>
                                            </li>
                                            <li>
                                                <h5 class="mb-0 f-light">897</h5><span class="f-light">Following</span>
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Mark Jecno</a>
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Dev John</a>
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Johan Deo</a>
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Douglas
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>
                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Lisa
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Olivia
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
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Sarah
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
                        <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                            <div class="card social-profile">
                                <div class="card-body">
                                    <div class="social-img-wrap">
                                        <div class="social-img"><img class="img-fluid" src="assets/images/profile.jpg"
                                                alt="profile"></div>

                                    </div>
                                    <div class="social-details">
                                        <h5 class="mb-1"><a
                                                 >Sarah
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
                </div>
            </div>
            <?php include 'common_files/footer.php'?>
        </div>
    </div>
    <?php include 'link/script.php'?>
    <script>
    var edit = function() {
        $('.click2edit').summernote({
            focus: true
        });
    };
    var save = function() {
        var markup = $('.click2edit').summernote('code');
        $('.click2edit').summernote('destroy');
    };
    </script>
</body>

</html>