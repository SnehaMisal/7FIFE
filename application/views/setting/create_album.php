<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Create Album</title>
    <?php $this->load->view('link/links'); ?>
</head>

<body>

    <div class="wrapper">
        <!--start top header-->
        <?php $this->load->view('common_files/header'); ?>

        <!--start sidebar -->
        <?php $this->load->view('common_files/sidebar'); ?>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 justify-content-between">
                <div class="breadcrumb-title pe-3">Create Album</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Album</li>
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
                                <h6 class="mb-0">Album List</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#add_model">
                                        <i class="bi bi-plus-lg"></i> Add New Album</button>
                                </div>
                            </div>
                        </div>
                        <div class="p-l-0 card-body  pr-0 b-l-primary b-b-primary">
                            <div class="row justify-content-end my-1">
                                <div class="col-md-3">
                                    <form action="" class="d-flex">
                                        <div class="input-group">
                                            <input class="form-control form-control-solid  ps-14" type="text" name=""
                                                value="" placeholder="Search Sub-Categories">
                                            <button class="btn btn-md btn-outline-primary" type="submit"> <i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                                    <!-- <div
                                        class="d-flex align-items-center position-relative my-1 justify-content-end search-box">
                                        <input type="text" id="myInput" class="form-control form-control-solid  ps-14"
                                            placeholder="Search user">
                                    </div> -->
                                </div>
                            </div>

                            <div class="table-responsive custom-scrollbar ">
                                <table class="table table-border text-center table-hover " id="myTable">
                                    <thead>
                                        <tr class="border-bottom-primary">
                                            <th> <span>Sr. No </span></th>
                                            <th> <span>Categories Name</span></th>
                                            <th> <span>Sub-Categories Name</span></th>
                                            <th> <span>Album Name</span></th>
                                            <th> <span>Image</span></th>
                                            <th> <span>Short Description</span></th>
                                            <th> <span>Status </span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Devotional</td>
                                            <td>Popular Devotional Playlists</td>
                                            <td class="default_color">Mahashivratri</td>
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
                                            <td>Stay blessed with these divine tunes in reverence to Lord Shiva.</td>
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
                                            <td>Podcasts</td>
                                            <td>Punjabi Bhakti</td>
                                            <td class="default_color">Satnam Sri Waheguru Ji</td>
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
                                            <td>Baani hai guru, sarvan karo shabad gurbani.</td>
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
                                            <td>Party</td>
                                            <td>Hindustani Classical</td>
                                            <td class="default_color">Hindustani Classical</td>
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
                                            <td>Selection of North Indian classical music.</td>
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
                                            <td>Indian Classical</td>
                                            <td>Carnatic Music</td>
                                            <td class="default_color">Sad Songs</td>
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
                                            <td>When everything around you is falling apart.</td>
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
        <?php $this->load->view('common_files/footer'); ?>
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->
    </div>

    <!--Add Plan Modal -->
    <div class="modal fade" id="add_model" tabindex="-1" role="dialog" aria-labelledby="add_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="add_modelLabel">Add Album</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Select Categories Name<span class="text-danger">*</span></label>
                                <select class="form-select" id="img_video" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">Devotional</option>
                                    <option value="2">Podcasts</option>
                                    <option value="3">Party</option>
                                    <option value="4">Indian Classical</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Categories Name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Select Sub-Categories Name<span class="text-danger">*</span></label>
                                <select class="form-select" id="img_video" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">Popular Devotional Playlists</option>
                                    <option value="2">Punjabi Bhakti</option>
                                    <option value="3">Hindustani Classical</option>
                                    <option value="4">Carnatic Music</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Sub-Categories Name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Album Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter Album Name"
                                    value="" required="">
                                <div class="invalid-feedback">Please Enter Album Name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Short Description<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter Description" maxlength="70"
                                    value="" required="">
                                <div class="invalid-feedback">Please Enter Short Description.</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Album  Image<span class="text-danger">*</span></label>
                                <input name="" type="file" id="adv_img" class="dropify" data-default-file="" data-height="200" data-allowed-file-extensions="png jpg" />
                                <div class="invalid-feedback">Please Enter Album Image.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn_default" type="submit" id="form_sub">Save
                        Album</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Plan Edit Modal -->
    <div class="modal fade" id="edit_model" tabindex="-1" role="dialog" aria-labelledby="edit_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="add_modelLabel">Edit Album</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                    <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Select Categories Name<span class="text-danger">*</span></label>
                                <select class="form-select" id="img_video" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1" selected>Devotional</option>
                                    <option value="2">Podcasts</option>
                                    <option value="3">Party</option>
                                    <option value="4">Indian Classical</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Categories Name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Select Sub-Categories Name<span class="text-danger">*</span></label>
                                <select class="form-select" id="img_video" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1" selected>Popular Devotional Playlists</option>
                                    <option value="2">Punjabi Bhakti</option>
                                    <option value="3">Hindustani Classical</option>
                                    <option value="4">Carnatic Music</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Sub-Categories Name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Album Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter Album Name"
                                    value="Mahashivratri" required="">
                                <div class="invalid-feedback">Please Enter Album Name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Short Description<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter Description" maxlength="70"
                                    value="Stay blessed with these divine tunes in reverence to Lord Shiva." required="">
                                <div class="invalid-feedback">Please Enter Short Description.</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Album  Image<span class="text-danger">*</span></label>
                                <div class="control-group file-upload" id="file-upload1">
                                    <div class="image-box text-center">
                                        <img src="<?php echo base_url(''); ?>assets/image/demo_img.jpg" alt="img">
                                    </div>
                                    <div class="controls" style="display: none;">
                                        <input type="file" name="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please Enter Album Image.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn_default" type="submit" id="form_sub">Save
                            Album</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('link/script'); ?>
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