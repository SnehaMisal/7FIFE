<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Subscription Plan</title>
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
                <div class="breadcrumb-title pe-3">Subscription Plan</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Subscription Plan</li>
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
                                <h6 class="mb-0">Plan List</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#add_model">
                                        <i class="bi bi-plus-lg"></i> Add Subscription Plan</button>
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
                                            <th> <span>Plan Title</span></th>
                                            <th> <span>Validity</span></th>
                                            <th> <span> Amount</span></th>
                                            <!-- <th> <span>Feature</span></th> -->
                                            <th> <span>Description</span></th>
                                            <th> <span>Status </span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="default_color">Lowest plan</td>
                                            <td>1 Month</td>
                                            <td>100</td>
                                            <!-- <td class="text-danger">Upload Audition, Monologue Script, Manual
                                                        Banner</td> -->
                                            <td>
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
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
                                            <td>3 Month</td>
                                            <td>500</td>
                                            <!-- <td class="text-danger">Upload Audition</td> -->
                                            <td>
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
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
                                            <td>1 Year</td>
                                            <td>1300</td>
                                            <!-- <td class="text-danger">Upload Audition, Monologue Script, Tongue
                                                        Twister</td> -->
                                            <td>
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
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
                                            <td>9 Month</td>
                                            <td>1000</td>
                                            <!-- <td class="text-danger">Tongue Twister, Facebook Banner</td> -->
                                            <td>
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
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
                                            <td>9 Month</td>
                                            <td>1000</td>
                                            <!-- <td class="text-danger">Tongue Twister, Facebook Banner</td> -->
                                            <td>
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-text-center"></i></button>
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
    <!--Add Plan Modal -->
    <div class="modal fade" id="add_model" tabindex="-1" role="dialog" aria-labelledby="add_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="add_modelLabel">Add Plan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                        <div class="row g-3">
                            <!-- Subscription Title -->
                            <div class="col-md-12">
                                <label class="form-label">Subscription Title<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter Subscription Title"
                                    value="" required="">
                                <div class="invalid-feedback">Please Enter Subscription Title.</div>
                            </div>
                            <!-- Validity -->
                            <div class="col-md-12">
                                <label class="form-label">Validity<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input class="form-control" name="" type="number" placeholder="Enter Validity"
                                        value="" required="" min="0" step="1">
                                    <select class="form-select" id="validationCustom04" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>Day</option>
                                        <option>Month</option>
                                        <option>Year</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please Enter Base Price.</div>
                            </div>
                            <!-- Price -->
                            <div class="col-md-6">
                                <label class="form-label"> Price<span class="text-danger">*</span></label>
                                <input class="form-control" name="" type="text" placeholder="Enter  Price" value=""
                                    required="">
                                <div class="invalid-feedback">Please Enter Price.</div>
                            </div>
                            <!-- Offer -->
                            <div class="col-md-6">
                                <label class="form-label">Offer %<span class="text-danger">*</span></label>
                                <input class="form-control" name="" type="text" placeholder="Enter Offer in %" value=""
                                    required="">
                                <div class="invalid-feedback">Please Enter Offer in %.</div>
                            </div>
                            <!-- Description -->
                            <div class="col-md-12">
                                <label class="form-label">Description<span class="text-danger">*</span></label>
                                <textarea class="summernote mb-0" name="example" required="required"></textarea>
                                <div class="invalid-feedback">Please Enter Description.</div>
                            </div>
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
    <!-- Plan Edit Modal -->
    <div class="modal fade" id="edit_model" tabindex="-1" role="dialog" aria-labelledby="edit_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="edit_modelLabel">Edit Plan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="modal-body">
                        <div class="row g-3">
                            <!-- Subscription Title -->
                            <div class="col-md-12">
                                <label class="form-label">Subscription Title<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="Enter Subscription Title"
                                    value="Premium Individual" required="">
                                <div class="invalid-feedback">Please Enter Subscription Title.</div>
                            </div>
                            <!-- Validity -->
                            <div class="col-md-12">
                                <label class="form-label">Validity<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input class="form-control" name="" type="number" placeholder="Enter Validity"
                                        value="3" required="" min="0" step="1">
                                    <select class="form-select" id="validationCustom04" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option value="1">Day</option>
                                        <option value="2" selected>Month</option>
                                        <option value="3">Year</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please Enter Base Price.</div>
                            </div>
                            <!-- Price -->
                            <div class="col-md-6">
                                <label class="form-label"> Price<span class="text-danger">*</span></label>
                                <input class="form-control" name="" type="text" placeholder="Enter  Price" value="100"
                                    required="">
                                <div class="invalid-feedback">Please Enter Price.</div>
                            </div>
                            <!-- Offer -->
                            <div class="col-md-6">
                                <label class="form-label">Offer %<span class="text-danger">*</span></label>
                                <input class="form-control" name="" type="text" placeholder="Enter Offer in %"
                                    value="10" required="">
                                <div class="invalid-feedback">Please Enter Offer in %.</div>
                            </div>
                            <!-- Description -->
                            <div class="col-md-12">
                                <label class="form-label">Description<span class="text-danger">*</span></label>
                                <textarea class="summernote mb-0 " name="example" required="required">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit doloribus quibusdam excepturi? Accusamus eum quas, doloribus fugiat explicabo minima corrupti nisi sapiente unde nam fuga voluptatum eius beatae nulla at!
                                </textarea>
                                <div class="invalid-feedback">Please Enter Description.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn_default" type="submit" id="form_sub">Save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'link/script.php'?>
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