<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Push Notification</title>
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
                <div class="breadcrumb-title pe-3">Push Notification</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Push Notification</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center mt-5">
                <div class="col-sm-9">
                    <div class="card ">
                        <div class="card-header b-l-primary card_header_bg">
                            <h5>Send Notification</h5>
                        </div>
                        <form class="needs-validation" novalidate="" method="post">
                            <div class="card-body b-l-primary ">
                                <!-- Send To  -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="send_user">Send To
                                        <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <select class="form-select js-example-placeholder-single" name="" id="send_user"
                                            required="">
                                            <option></option>
                                            <option value="1">Send To All</option>
                                            <option value="2">Send To Specific User</option>
                                            <option value="3">Send To Specific Host</option>
                                        </select>
                                        <div class="invalid-feedback">Please provide a valid user .</div>
                                        <div id="send_to_list" class="mt-2"></div>
                                    </div>
                                </div>
                                <!-- Notification Type -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="not_type">Notification
                                        Type<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="js-example-placeholder-multiple col-sm-12" name="" id="not_type"
                                            multiple="multiple" required="">
                                            <option value="AL">Email Notification</option>
                                            <option value="WY">SMS Notification</option>
                                            <option value="WY">Push Notification</option>
                                        </select>
                                        <div class="invalid-feedback">Please provide a valid Notification
                                            Type.</div>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="title">Title<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="" type="text" placeholder="Title" id="title"
                                            required="">
                                        <div class="invalid-feedback">Please provide a valid title.</div>
                                    </div>
                                </div>
                                <!-- Message  -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="massage">Message<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control summernote" id="massage" name=""
                                            placeholder="Required example textarea" required=""></textarea>
                                        <div class="invalid-feedback">Please provide a valid Message.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center b-l-primary b-b-primary">
                                <button class="btn btn_default text-center" type="submit" id="form_sub"><i
                                        class="bi bi-send"></i>&nbsp;&nbsp;Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card ">
                        <div class="card-header b-l-primary">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">Sended Notification List</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body b-l-primary b-b-primary">
                            <div class="row justify-content-end">
                                <div class="col-md-3">
                                    <div
                                        class="d-flex align-items-center position-relative my-1 justify-content-end search-box">
                                        <span class="search-icon svg-icon-1 position-absolute ms-6 m-r-10">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <input type="text" id="myInput" class="form-control form-control-solid  ps-14"
                                            placeholder="Search user">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-border text-center table-hover " id="myTable">
                                    <thead>
                                        <tr class="border-bottom-primary">
                                            <th> <span>Sr. No </span></th>
                                            <th> <span>Send Date & Time</span></th>
                                            <th> <span>Send To</span></th>
                                            <th> <span>Notification Type</span></th>
                                            <th> <span>Title</span></th>
                                            <th> <span>Message</span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-nowrap">12 May 2020 , 2:10 PM</td>
                                            <td class="default_color">Lisa lillian</td>
                                            <td><span class="badge bg-primary">Push</span></td>
                                            <td>Notification Title</td>
                                            <td>

                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-envelope"></i></button>
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
                                            <td>
                                                <span class="badge bg-primary">Push</span>
                                                <span class="badge bg-success">Email</span>
                                            </td>
                                            <td>Notification Title</td>
                                            <td>
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-envelope"></i></button>
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
                                            <td><span class="badge bg-secondary">SMS</span>
                                                <span class="badge bg-success">Email</span>
                                            </td>
                                            <td>Notification Title</td>
                                            <td>
                                                <button class="btn btn-outline-success" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-envelope"></i></button>
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
                                            <td>
                                                <span class="badge bg-primary">Push</span>
                                                <span class="badge bg-success">Email</span>
                                                <span class="badge bg-secondary">SMS</span>
                                            </td>
                                            <td>Notification Title</td>
                                            <td>
                                                <button class="btn btn-outline-success " type="button"
                                                    data-bs-toggle="modal" data-bs-target="#view_model">
                                                    <i class="bi bi-envelope"></i></button>
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
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary justify-content-end">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                            aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link " href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                            aria-label="Next"><span aria-hidden="true">»</span></a></li>
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
    <!-- View Message Modal -->
    <div class="modal fade" id="view_model" tabindex="-1" role="dialog" aria-labelledby="view_modelLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header card_header_bg_2">
                    <h5 class="modal-title" id="view_modelLabel">Message</h5>
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
    <?php include 'link/script.php'?>
    <script>
    $('#form_sub').click(function() {
        $(".notf_box").slideToggle("slow").delay(2000).slideToggle("slow");
    });
    </script>
    <script>
    // Send To append script
    $('#send_user').on('change', function() {
        if (this.value == 1) {
            $('#send_to_list').empty();
        }
        if (this.value == 2) {
            $('#send_to_list').empty().append(
                '<select class="form-select js-example-placeholder-multiple mt-2" id="select_user" required="" multiple="multiple">' +
                '<option>Sneha Misal</option>' +
                '<option>Snehal Phutane</option>' +
                '<option>Raviraj Katkar</option>' +
                '<option>Sneha Misal</option>' +
                '<option>Snehal Phutane</option>' +
                '<option>Raviraj Katkar</option>' +
                '</select>' +
                '<div class="invalid-feedback">Please provide a valid user .</div>');
            $("#select_user").select2({
                placeholder: "Select  one or more Users"
            });
        }
        if (this.value == 3) {
            $('#send_to_list').empty().append(
                '<select class="form-select js-example-placeholder-multiple " id="select_area" required="" multiple="multiple">' +
                '<option>Viman Nager</option>' +
                '<option>Kharadi</option>' +
                '<option>Chandan Nager</option>' +
                '<option>Deghi</option>' +
                '</select>' +
                '<div class="invalid-feedback">Please provide a valid user .</div>');
            $("#select_area").select2({
                placeholder: "Select  one or more Area"
            });
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        //  Summernote Script
        $('.summernote').summernote({
            height: 100,
            disableResizeEditor: true
        });
        // $("#summernote").summernote("disable");

        // Send To  select2
        $("#send_user").select2({
            placeholder: "Select Send To"
        });

        // Notification Type  select2
        $("#not_type").select2({
            placeholder: "Select Notification Type"
        });

    });
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