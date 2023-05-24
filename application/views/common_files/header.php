<!-- <div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="https://codeigniter.pixelstrap.com/cuba/public"><img class="img-fluid"
                        src="assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>

        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">

                <li> <span class="header-search">
                    </span></li>

                <li>
                    <div class="mode">
                    <i class="icon-light-bulb fs-5 swing animated"></i>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box animated bounceIn">
                        <i class="icon-bell fs-5 swing animated"></i>
                        <span class="badge rounded-pill badge-secondary">4 </span>
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
                        <ul>
                            <li class="b-l-primary border-4">
                                <p>Delivery processing <span class="font-danger">10 min.</span></p>
                            </li>
                            <li class="b-l-success border-4">
                                <p>Order Complete<span class="font-success">1 hr</span></p>
                            </li>
                            <li class="b-l-secondary border-4">
                                <p>Tickets Generated<span class="font-secondary">3 hr</span></p>
                            </li>
                            <li class="b-l-warning border-4">
                                <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                            </li>
                            <li><a class="f-w-700" href="#">Check all</a></li>
                        </ul>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="media profile-media"><img class="b-r-10" src="assets/images/dashboard/profile.png"
                            alt="">
                        <div class="media-body"><span>Emay Walter</span>
                            <p class="mb-0 font-roboto">Admin<i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="<?php echo base_url('admin_profile') ?>"><i data-feather="user"></i><span>Account </span></a></li>
                        <li><a href="#" class="sweet-1" onclick="logout_fun()"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
function logout_fun() {
    Swal.fire({
        position: 'top-end',
        text: "Are you sure ? you want to logout.",
        showCancelButton: false,
         confirmButtonColor: '#d33',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Log Out!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "index";
        }
    })
};
</script> -->
<header class="top-header">
    <nav class="navbar navbar-expand gap-3 align-items-center">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <img src="assets/image/admin_profile.jpg" class="user-img" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="assets/image/admin_profile.jpg" alt="" class="rounded-circle"
                                        width="54" height="54">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('admin_profile') ?>">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="logout_fun()">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<script>
function logout_fun() {
    // var id = idd.id;
    // console.log("id", id);
    Swal.fire({
        position: 'top-end',
        // title: 'Are you sure?',
        text: "Are you sure ? you want to logout.",
        // icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#b424f7',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Log Out!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "index";
        }
    })
};
</script>