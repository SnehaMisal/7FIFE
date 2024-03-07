<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - View Advertisement</title>
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
                <div class="breadcrumb-title pe-3"> View Advertisement</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> View Advertisement</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <div class="card ">
                        <div class="card-header b-l-primary">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">Advertisement List</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#add_model">
                                        <i class="bi bi-plus-lg"></i> Add Advertisement </button>
                                </div>
                            </div>
                            <!-- <div class="media media-dashboard">
                                <div class="media-body">
                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#add_model">
                                        <i class="icon-plus"></i> Add Subscription Plan</button>
                                </div>
                            </div> -->
                        </div>
                        <div class="p-l-0 card-body  pr-0 b-l-primary b-b-primary">
                            <div class="row justify-content-between">
                                <div class="col-md-3">
                                    <form action="" class="d-flex">
                                        <div class="input-group">
                                            <input class="form-control form-control-solid  ps-14" type="text"
                                                id="reportrange" name="daterange" value="">
                                            <button class="btn btn-md btn-outline-primary" type="submit"> <i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <div
                                        class="d-flex align-items-center position-relative my-1 justify-content-end search-box">
                                        <input type="text" id="myInput" class="form-control form-control-solid  ps-14"
                                            placeholder="Search user">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive custom-scrollbar ">
                                <table class="table table-border text-center table-hover " id="myTable">
                                    <thead>
                                        <tr class="border-bottom-primary">
                                            <th> <span>Sr. No </span></th>
                                            <th> <span>Title</span></th>
                                            <th> <span>Link</span></th>
                                            <th> <span>Advertise</span></th>
                                            <th> <span>Status </span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="default_color">Lowest plan</td>
                                            <td><a href="www.google.com" target="_blank">www.google.com</a></td>
                                            <td>
                                                <div class="lightgallery">
                                                    <a href="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        data-exthumbimage="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        data-src="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        class=" mb-4">
                                                        <img src="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                            class="img-thumbnail" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#edit_model">
                                                    <i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="default_color">Premium Individual</td>
                                            <td><a href="www.google.com" target="_blank">www.google.com</a></td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#video_model">
                                                    <i class="bi bi-play-btn"></i></button>
                                            </td>
                                            <td>
                                                <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-primary" type="button"><i
                                                        class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger" type="button" id="delete_2"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="default_color">Premium Duo</td>
                                            <td><a href="www.google.com" target="_blank">www.google.com</a></td>
                                            <td>
                                                <div class="lightgallery">
                                                    <a href="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        data-exthumbimage="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        data-src="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        class=" mb-4">
                                                        <img src="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                            class="img-thumbnail" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-primary" type="button"><i
                                                        class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger" type="button" id="delete_3"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="default_color">Premium Family</td>
                                            <td><a href="www.google.com" target="_blank">www.google.com</a></td>

                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#video_model">
                                                    <i class="bi bi-play-btn"></i></button>
                                            </td>
                                            <td>
                                                <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-primary" type="button">
                                                    <i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger" type="button" id="delete_4"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="default_color">Premium Student</td>
                                            <td><a href="www.google.com" target="_blank">www.google.com</a></td>
                                            <td>
                                                <div class="lightgallery">
                                                    <a href="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        data-exthumbimage="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        data-src="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                        class=" mb-4">
                                                        <img src="<?php echo base_url(''); ?>assets/image/demo_img.jpg"
                                                            class="img-thumbnail" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-primary" type="button"><i
                                                        class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger" type="button" id="delete_4"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p id="founder" class="text-danger">No Matching Records Found</p>
                            </div>
                            <!-- Table Pagination -->
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="javascript:;">«</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;javascript:;">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">»</a>
                                    </li>
                                </ul>
                            </nav>
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
    <!-- View Description Modal -->
    <div class="modal fade" id="view_model" tabindex="-1" role="dialog" aria-labelledby="view_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="view_modelLabel">Description</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut laborum nisi eligendi illo aut
                        cumque iusto vero ullam inventore beatae sunt, ratione veritatis, temporibus veniam similique
                        quam? Molestiae, reiciendis impedit!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Advertisement Modal -->
    <div class="modal fade" id="add_model" tabindex="-1" role="dialog" aria-labelledby="add_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="add_modelLabel"> New Advertisement</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                        <div class="row g-3">
                            <!--  Title -->
                            <div class="col-md-12" ]>
                                <label class="form-label"> Title<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter  Title" value=""
                                    required="">
                                <div class="invalid-feedback">Please Enter Title.</div>
                            </div>

                            <!-- Redirect Link -->
                            <div class="col-md-6">
                                <label class="form-label"> Redirect Link<span class="text-danger">*</span></label>
                                <input class="form-control" name="" type="url" placeholder="Enter  Price" value=""
                                    required="">
                                <div class="invalid-feedback">Please Enter Redirect Link.</div>
                            </div>
                            <!-- Advertise  -->
                            <div class="col-md-6">
                                <label class="form-label" for="img_vdo">Advertise as<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="img_vdo" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">Image</option>
                                    <option value="2">Video</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Advertise </div>
                            </div>
                            <div class="col-md-12" id="adv_img_vdo"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn_default" type="submit" id="form_sub">Save
                            Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Advertise Video Modal -->
    <div class="modal fade" id="video_model" tabindex="-1" role="dialog" aria-labelledby="video_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="video_modelLabel">Post Video</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <video class="w-100" controls autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- Plan Edit Modal -->
    <div class="modal fade" id="edit_model" tabindex="-1" role="dialog" aria-labelledby="edit_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="add_modelLabel">Add Plan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                        <div class="row g-3">
                            <!--  Title -->
                            <div class="col-md-12" ]>
                                <label class="form-label"> Title<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter  Title" value=""
                                    required="">
                                <div class="invalid-feedback">Please Enter Title.</div>
                            </div>

                            <!-- Redirect Link -->
                            <div class="col-md-6">
                                <label class="form-label"> Redirect Link<span class="text-danger">*</span></label>
                                <input class="form-control" name="" type="url" placeholder="Enter  Price" value=""
                                    required="">
                                <div class="invalid-feedback">Please Enter Redirect Link.</div>
                            </div>
                            <!-- Advertise  -->
                            <div class="col-md-6">
                                <label class="form-label" for="img_vdo_edit">Advertise as<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="img_vdo_edit" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">Image</option>
                                    <option value="2">Video</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Advertise </div>
                            </div>
                            <div class="col-md-12" id="adv_img_vdo_edit"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn_default" type="submit" id="form_sub">Save
                            Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'link/script.php'?>
    <script>
    $('#img_vdo').on('change', function() {
        if (this.value == 1) {
            $('#adv_img_vdo').empty().append(
                '<div class="col-md-12">' +
                '<label class="form-label" for="adv_img">Advertise Image</label><span class="text-danger">*</span>' +
                '<input name="" type="file" id="adv_img" class="dropify "' +
                'data-default-file="" data-height="200" data-allowed-file-extensions="png jpg" />' +
                '<div class="invalid-feedback">Please Enter Advertise Image.</div></div>');
            $('.dropify').dropify();
        }
        if (this.value == 2) {
            $('#adv_img_vdo').empty().append(
                '<div class="col-md-12">' +
                '<label class="form-label" for="adv_vdo">Advertise Video</label><span class="text-danger">*</span>' +
                '<input name="" type="file" id="adv_vdo" class="dropify "' +
                'data-default-file="" data-height="200"  data-allowed-file-extensions="mp4"/>' +
                '<div class="invalid-feedback">Please Enter Advertise Video.</div></div>');
            $('.dropify').dropify();
        }
    })
    </script>
    <script>
    $('#img_vdo_edit').on('change', function() {
        if (this.value == 1) {
            $('#adv_img_vdo_edit').empty().append(
                '<label class="form-label" for="adv_img">Advertise Image</label><span class="text-danger">*</span>' +
                '<div class="control-group file-upload" id="file-upload1">' +
                '<div class="image-box text-center">' +
                '<img src="<?php echo base_url(''); ?>assets/image/demo_img.jpg" alt="img">' +
                '</div><div class="controls" style="display: none;">' +
                '<input type="file" name="image" accept="image/*" /></div></div>' +
                '<div class="invalid-feedback">Please Enter Advertise Image.</div>');
            $(".image-box").click(function(event) {
                var previewImg = $(this).children("img");

                $(this)
                    .siblings()
                    .children("input")
                    .trigger("click");

                $(this)
                    .siblings()
                    .children("input")
                    .change(function() {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            var urll = e.target.result;
                            $(previewImg).attr("src", urll);
                            previewImg.parent().css("background", "#efefef");
                            previewImg.show();
                            previewImg.siblings("p").hide();
                        };
                        reader.readAsDataURL(this.files[0]);
                    });
            });
        }
        if (this.value == 2) {
            $('#adv_img_vdo_edit').empty().append(
                '<label class="form-label" for="adv_img">Advertise Video</label><span class="text-danger">*</span>' +
                '<div class="control-group file-upload" id="file-upload1">' +
                '<div class="video-box text-center">' +
                '<video controls="" class="videosize">' +
                '<source src="<?php echo base_url(''); ?>assets/video/video-1.mp4" type="video/mp4">' +
                '</video></div>' +
                '<div class="controls" style="display: none;">' +
                '<input type="file" name="image" accept="video/*" /></div></div>' +
                '<div class="invalid-feedback">Please Enter Advertise Video.</div>');
            $(".video-box").click(function(event) {
                var previewImg = $(this).children("video");

                $(this)
                    .siblings()
                    .children("input")
                    .trigger("click");

                $(this)
                    .siblings()
                    .children("input")
                    .change(function() {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            var urll = e.target.result;
                            $(previewImg).attr("src", urll);
                            previewImg.parent().css("background", "#efefef");
                            previewImg.show();
                            previewImg.siblings("p").hide();
                        };
                        reader.readAsDataURL(this.files[0]);
                    });
            });
        }
    })
    </script>
    <script>
    $(document).ready(function() {
        //  Summernote Script
        $('.summernote').summernote({
            height: 100,
            disableResizeEditor: true
        });
    });
    </script>
    <script>
    $(document).ready(function() {

        // Date Range filter
        $(function() {

            var start = moment();
            var end = moment();
            var max_date = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                maxDate: max_date,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                        .subtract(1, 'month').endOf('month')
                    ]
                }
            }, cb);

            cb(start, end);

        });
    })
    </script>
    <script>
    // Delete Script 
    function delete_fun(idd) {
        var id = idd.id;
        console.log("id", id);
        Swal.fire({
            title: 'Are you sure?',
            text: "Once deleted, you will not be able to recover this  file!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    };
    </script>

</body>

</html>