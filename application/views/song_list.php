<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Song List</title>
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
                <div class="breadcrumb-title pe-3">Song List</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Song List</li>
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
                                <h6 class="mb-0">Song List</h6>
                            </div>
                        </div>
                        <div class="p-l-0 card-body  pr-0 b-l-primary b-b-primary">
                            <div class="row justify-content-end my-1">
                                <div class="col-md-3">
                                    <form action="" class="d-flex">
                                        <div class="input-group">
                                            <input class="form-control form-control-solid  ps-14" type="text" name=""
                                                value="" placeholder="Search Artist">
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
                                            <th> <span>Song Title</span></th>
                                            <th> <span>Status </span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Devotional</td>
                                            <td>Popular Devotional Playlists</td>
                                            <td>Mahashivratri</td>
                                            <td class="default_color">Mere Bhole Nath</td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-eye"></i></button>
                                                <a href="<?php echo base_url('edit_song'); ?>"
                                                    class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Devotional </td>
                                            <td>Punjabi Bhakti</td>
                                            <td>Satnam Sri Waheguru Ji</td>
                                            <td class="default_color">So Dukh Kaisa Paave</td>
                                            <td>
                                                <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-eye"></i></button>
                                                <a href="<?php echo base_url('edit_song'); ?>"
                                                    class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Indian Classical</td>
                                            <td>Hindustani Classical</td>
                                            <td>Hindustani Classical </td>
                                            <td class="default_color">Shiva Shankara</td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-eye"></i></button>
                                                <a href="<?php echo base_url('edit_song'); ?>"
                                                    class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mood</td>
                                            <td>The Saddest Playlist</td>
                                            <td>Sad Songs</td>
                                            <td class="default_color">Kahani Suno</td>
                                            <td>
                                                <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                    data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-eye"></i></button>
                                                <a href="<?php echo base_url('edit_song'); ?>"
                                                    class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
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
    <div class="modal fade" id="view_model" tabindex="-1" role="dialog" aria-labelledby="view_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="add_modelLabel">Song Details</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="song_img">
                                <img src="<?php echo base_url(''); ?>assets/image/song_img.jpg" class="" alt=""
                                    width="100%" />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Music Link</h6>
                                </div>
                                <div class="col-md-9">
                                    <p>:- <a href="https://anavicente.me/resources/bensound-jazz.ogg" target="_blank">Go
                                            To Song <i class="bi bi-box-arrow-up-right"></i></a> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Tracker ID </h6>
                                </div>
                                <div class="col-md-9">
                                    <p>:- #875489</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Language </h6>
                                </div>
                                <div class="col-md-9">
                                    <p>:- Hindi</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Artist Name</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <p class="mb-0 fs-6">
                                        <i class="bi bi-record-fill"></i>Shankar Mahadevan
                                    </p>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <p class="mb-0 fs-6"><i class="bi bi-record-fill"></i>Shankar Mahadevan</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Song Lyrics</h6>
                                </div>
                                <div class="col-md-12">
                                    
                                    <textarea class="form-control" rows="5">
                                        Koi mannat mange 
                                            Koi maala phere 
                                            Sish nawaye phirta 
                                            koi dere dere 
                                            Koi mannat mange 
                                            Koi maala phere 
                                            Sish nawaye phirta 
                                            koi dere dere 
                                            Mere sar pe aasman sa 
                                            Baba tera haath 
                                            Mere liye to sabse pehle 
                                            Mere bhole naath
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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