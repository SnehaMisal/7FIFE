<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Revenue Management</title>
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
                <div class="breadcrumb-title pe-3">Revenue Management</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Revenue Management</li>
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
                                    <h5 class="mb-0">Revenue List</h5>
                                </div>
                            </div>
                        </div>
                        <div class="p-l-0 card-body  pr-0 b-l-primary b-b-primary">
                            <div class="row justify-content-between">
                                <div class="col-md-3">
                                    <form action="" class="d-flex">
                                        <button type="button" class="btn btn-md btn-primary mb-0" onclick="exportexcel()">
                                            Export </button>
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
                                <table class="table table-border text-center table-hover table-striped" id="myTable">
                                    <thead>
                                        <tr class="border-bottom-primary">
                                            <th> <span>Sr. No </span></th>
                                            <th> <span>Payment Date & Time</span></th>
                                            <th> <span>User Name</span></th>
                                            <th> <span>Plan Name</span></th>
                                            <th> <span>Main Amount</span></th>
                                            <th> <span>Offer %</span></th>
                                            <th> <span>Final Amount</span></th>
                                            <th> <span>Transaction ID</span></th>
                                            <th> <span>Payment Mode </span></th>
                                            <th> <span>Action </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-nowrap">12 May 2020 , 2:10 PM</td>
                                            <td class="default_color">Mark Jecno</td>
                                            <td>Standard Plan</td>
                                            <td>100</td>
                                            <td>10%</td>
                                            <td>90</td>
                                            <td>#76543</td>
                                            <td><span class="badge bg-success ">Net Banking</span></td>
                                            <td>
                                                <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-nowrap">06 May 2020 , 4:50 PM</td>
                                            <td class="default_color">Dev John</td>
                                            <td>Standard Plan</td>
                                            <td>100</td>
                                            <td>10%</td>
                                            <td>90</td>
                                            <td>#76543</td>
                                            <td><span class="badge bg-success ">Card</span></td>
                                            <td>
                                                <button class="btn btn-outline-danger" type="button" id="delete_2"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-nowrap">28 Sep 2020 , 10:29 AM</td>
                                            <td class="default_color">Johan Deo</td>
                                            <td>Standard Plan</td>
                                            <td>100</td>
                                            <td>10%</td>
                                            <td>90</td>
                                            <td>#76543</td>
                                            <td><span class="badge bg-success">UPI</span></td>
                                            <td>
                                                <button class="btn btn-outline-danger" type="button" id="delete_3"
                                                    onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-nowrap">12 May 2020 , 9:04 AM</td>
                                            <td class="default_color">Lisa lillian</td>
                                            <td>Standard Plan</td>
                                            <td>100</td>
                                            <td>10%</td>
                                            <td>90</td>
                                            <td>#76543</td>
                                            <td><span class="badge bg-success">Card</span></td>
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

    function exportexcel() {
        $("#myTable").table2excel({
            name: "Table2Excel",
            filename: "Revenue",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true,
        });
    }
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