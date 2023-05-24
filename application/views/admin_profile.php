<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Admin Profile</title>
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
                <div class="breadcrumb-title pe-3">Admin Profile</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center mt-5">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header card_header_bg">
                            <h5 class="card-title mb-0">My Profile</h5>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation " novalidate="" method="post">
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="">
                                            <div class="profile-img-wrrap text-center contest_banner">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><i class="bi bi-pen-fill"></i></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                            style="background-image: url('assets/image/admin_profile.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body mt-3 ">
                                                    <h3 class="mb-1 f-20 text-primary">Emay Walter</h3>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current Password <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="password" placeholder="Current Password"
                                            name="" value="1234" required>
                                        <div class="invalid-feedback">Please provide a valid Current Password .
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">New Password <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="password" placeholder="New Password" name=""
                                            value="1234" required>
                                        <div class="invalid-feedback">Please provide a New Password .</div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm New Password <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="password" placeholder="Confirm New Password"
                                            name="" value="1234" required>
                                        <div class="invalid-feedback">Please provide a Confirm New Password .
                                        </div>
                                    </div>
                                    <div class="form-footer text-center">
                                        <button class="btn btn_default btn-block">Update <i
                                                class="icon-reload fs-7"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form class="needs-validation " novalidate="" method="post">
                        <div class="card">
                            <div class="card-header card_header_bg_2">
                                <h5 class="card-title mb-0">Edit Profile</h5>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="First Name" name=""
                                                value="Emay" required>
                                            <div class="invalid-feedback">Please provide a valid First Name .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Last Name" name=""
                                                value="Walter" required>
                                            <div class="invalid-feedback">Please provide a valid Last Name .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="email" placeholder="Email" name=""
                                                value="info@gmail.com" required>
                                            <div class="invalid-feedback">Please provide a valid Email Address .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Mobile No. <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Mobile No." name=""
                                                value="9876543210" pattern="^[789]\d{9}$"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                maxlength="10" required>
                                            <div class="invalid-feedback">Please provide a valid Mobile No.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="" id="" rows="3"
                                                placeholder="Permanent Address"
                                                required>123, Lorem Ipsum, Florida, USA</textarea>
                                            <div class="invalid-feedback">Please provide a valid Address.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn_default" type="submit" id="form_sub">Update Profile <i
                                        class="icon-reload fs-7"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- Container-fluid Ends-->
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