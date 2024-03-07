<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Review Management</title>
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
                <div class="breadcrumb-title pe-3">Review Management</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Review Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <div class="card ">
                        <div class="card-header b-l-primary">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">Report List</h5>
                                </div>
                            </div>
                        </div>
                        <div class="p-l-0 card-body  pr-0 b-l-primary b-b-primary">
                            <div class="row justify-content-between my-1">
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
                                <form action="" class="d-flex">
                                        <div class="input-group">
                                            <input class="form-control form-control-solid  ps-14" type="text"
                                             name="" value="" placeholder="Search user">
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
                                            <th> <span> Date & Time</span></th>
                                            <th> <span>User Name</span></th>
                                            <!-- <th> <span>Subject</span></th> -->
                                            <th> <span>Review </span></th>
                                            <th> <span>Reply </span></th>
                                            <th> <span>Status </span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-nowrap">12 May 2020 , 2:10 PM</td>
                                            <td class="default_color">Lisa lillian</td>
                                            <!-- <td>Notification Title</td> -->
                                            <td>
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
                                            </td>
                                            <td>
                                            <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#reply_model">
                                                    <i class="bi bi-send-fill"></i></button>
                                            </td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Publish"
                                                    data-off="Unpublish" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-nowrap">06 May 2020 , 4:50 PM</td>
                                            <td class="default_color">Johan Deo</td>
                                            <!-- <td>Notification Title</td> -->
                                            <td>
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
                                            </td>
                                            <td>
                                            <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#reply_model">
                                                    <i class="bi bi-send-fill"></i></button>
                                            </td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Publish"
                                                    data-off="Unpublish" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-danger" type="button" id="delete_2"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-nowrap">28 Sep 2020 , 10:29 AM</td>
                                            <td class="default_color">Dev John</td>
                                            <!-- <td>Notification Title</td> -->
                                            <td>
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
                                            </td>
                                            <td>
                                            <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#reply_model">
                                                    <i class="bi bi-send-fill"></i></button>
                                            </td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Publish"
                                                    data-off="Unpublish" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-danger" type="button" id="delete_3"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-nowrap">12 May 2020 , 9:04 AM</td>
                                            <td class="default_color">Mark Jecno</td>
                                            <!-- <td>Notification Title</td> -->
                                            <td>
                                                <button class="btn btn-outline-success " type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
                                            </td>
                                            <td>
                                            <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#reply_model">
                                                    <i class="bi bi-send-fill"></i></button>
                                            </td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Publish"
                                                    data-off="Unpublish" data-onstyle="success" data-offstyle="danger"
                                                    data-size="sm">
                                            </td>
                                            <td>
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
    <!-- View Review management Modal -->
    <div class="modal fade" id="view_model" tabindex="-1" role="dialog" aria-labelledby="view_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="view_modelLabel">Review </h5>
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
    <!-- feedback Edit Modal -->
    <div class="modal fade" id="reply_model" tabindex="-1" role="dialog" aria-labelledby="edit_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="edit_modelLabel">Reply Massage </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                        <div class="row g-3">
                            <!-- Reply massage -->
                            <div class="col-md-12">
                                <label class="form-label">Description<span class="text-danger">*</span></label>
                                <textarea class="summernote mb-0 " name="example" required="required">
        
                                </textarea>
                                <div class="invalid-feedback">Please Enter Description.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit" id="form_sub">Reply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('link/script'); ?>
    <script>
    $(document).ready(function() {
        // summernote Script
        $('.summernote').summernote({
            height: 200,
            minHeight: 200,
            maxHeight: 200,
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