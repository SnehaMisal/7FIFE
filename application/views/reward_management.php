<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Reward Managment</title>
    <?php include 'link/links.php'?>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css"> -->
    <style>
    #myTable {
        table-layout: fixed;
    }

    input[type='number'] {
        border: 1px solid #7e21aa;
    }
    </style>
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
                <div class="breadcrumb-title pe-3">Reward Managment</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Reward Managment</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="" class="">
                                <label class="form-label">This Amount is set for 1 reward coin.</label>
                                <div class="input-group">
                                    <input class="form-control form-control-solid  ps-14" value="10" type="text" id=""
                                        name="" placeholder="This Amount is set for 1 reward coin" required>
                                    <button class="btn btn-md btn-outline-default" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card ">
                        <div class="card-header b-l-primary">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">Reward List</h5>
                                </div>
                            </div>
                        </div>
                        <div class="p-l-0 card-body  pr-0 b-l-primary b-b-primary">
                            <div class="row">
                                <form action="" method="post">
                                    <table class="table table-border text-center table-hover " id="myTable">
                                        <thead>
                                            <tr class="border-bottom-primary">
                                                <th> <span>Sr. No. </span></th>
                                                <th> <span>Score</span></th>
                                                <th> <span>Reward Coin</span></th>
                                                <th> <span>Action </span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="default_color">A+</td>
                                                <td>
                                                    <span id="dis_1">25</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_1">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="25">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_1" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" id="edit_1" type="button"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_1"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="default_color">A</td>
                                                <td>
                                                    <span id="dis_2">20</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_2">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="20">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_2" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" type="button" id="edit_2"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_2"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="default_color">B+</td>
                                                <td>
                                                    <span id="dis_3">16</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_3">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="16">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_3" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" type="button" id="edit_3"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_3"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="default_color">B</td>
                                                <td>
                                                    <span id="dis_4">12</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_4">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="12">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_4" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" type="button" id="edit_4"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_4"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td class="default_color">C+</td>
                                                <td>
                                                    <span id="dis_5">8</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_5">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="8">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_5" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" type="button" id="edit_5"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_5"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td class="default_color">C</td>
                                                <td>
                                                    <span id="dis_6">4</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_6">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="4">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_6" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" type="button" id="edit_6"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_6"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td class="default_color">F</td>
                                                <td>
                                                    <span id="dis_7">0</span>
                                                    <div class="input-group mb-3 d-none" id="edit_dis_7">
                                                        <input type="number" class="form-control text-center" name=""
                                                            id="" value="0">
                                                        <button class="btn btn-outline-default" type="button"
                                                            id="save_7" onclick="save_fun(this)">Update</button>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-outline-primary" type="button" id="edit_7"
                                                        onclick="edit_fun(this)">
                                                        <i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger" type="button" id="delete_7"
                                                        onclick=delete_fun(this)><i class="bi bi-trash3"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script> -->
    <script>
    function edit_fun(data) {
        var idd = data.id;
        var split_id = idd.split("_");
        var id = split_id[1]
        console.log("id", id)
        document.getElementById("edit_dis_" + id).classList.remove("d-none");
        document.getElementById("dis_" + id).classList.add("d-none");
    }

    function save_fun(data) {
        var idd = data.id;
        var split_id = idd.split("_");
        var id = split_id[1]
        console.log("id", id)
        document.getElementById("dis_" + id).classList.remove("d-none");
        document.getElementById("edit_dis_" + id).classList.add("d-none");
    }
    </script>
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
    <!-- <script>
    $(function() {

        $("#grid").jsGrid({
            width: "100%",
            // height: "400px",

            filtering: false,
            editing: true,
            sorting: true,
            paging: true,
            data: friends,
            fields: [{
                    name: "score",
                    type: "text",
                    width: 100
                },
                {
                    name: "Reward",
                    type: "number",
                    width: 50
                },
                {
                    name: "Action",
                    type: "control",
                    width: 40,
                    deleteButton: false
                }
            ]
        })
    })

    var friends = [{
            score: "Ada Lovelace",
            Reward: 36,
        },
        {
            score: "Grace Hopper",
            Reward: 85,
        },
        {
            score: "Alan Turing",
            Reward: 41,
        },
        {
            score: "Miguel Alcubierre",
            Reward: 53,
        }
    ];
    </script> -->

</body>

</html>