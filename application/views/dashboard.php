<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Dashboard</title>
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
            <!-- <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4 "> -->
            <div class="row  ">
                <div class="col">
                    <div class="card rounded-4 top_box">
                        <a href="<?php echo base_url('user_management'); ?>">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1">Total User</p>
                                        <h4 class="mb-0">875</h4>
                                        <!-- <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>12.3% from last
                                                week</span></p> -->
                                    </div>
                                    <img src="<?php echo base_url(''); ?>assets/image/user.png" alt="" srcset=""
                                        width="100">
                                    <!-- <div class="ms-auto widget-icon bg-orange text-white">
                                        <i class="bi bi-emoji-heart-eyes"></i>
                                    </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="card rounded-4 top_box">
                        <a href="<?php echo base_url('revenue_management'); ?>">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1">Total Revenue</p>
                                        <h4 class="mb-0"><i class="bi bi-currency-rupee"></i>9,786</h4>
                                        <!-- <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>13.2% from last
                                            week</span></p> -->
                                    </div>
                                    <img src="<?php echo base_url(''); ?>assets/image/increase.png" alt="" srcset=""
                                        width="100">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="card rounded-4 top_box">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <p class="mb-1">Number Of Songs</p>
                                    <h4 class="mb-0">5.8K</h4>
                                </div>
                                <img src="<?php echo base_url(''); ?>assets/image/musical-notes.png" alt="" srcset=""
                                    width="100">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col">
                    <div class="card rounded-4 top_box">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <p class="mb-1">Number Of Karaoke</p>
                                    <h4 class="mb-0">9853</h4>
                                    <!-- <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>32.7% from last
                                            week</span></p> -->
                                </div>
                                <img src="<?php echo base_url(''); ?>assets/image/music.png" alt="" srcset=""
                                    width="100">
                                <!-- <div class="ms-auto widget-icon bg-info text-white">
                                    <i class="bi bi-people-fill"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
            <div class="row ">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card w-100 rounded-4 revenue_tab">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">Total Revenue</h6>
                                <div class=" ms-auto dropdown">
                                    <ul class="nav nav-pills nav-pills-danger" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#today" role="tab"
                                                aria-selected="true">
                                                <div class="d-flex align-items-center ">
                                                    <!-- <div class="tab-icon">
                                                        <i class='bx bx-home font-18 me-1'></i>
                                                    </div> -->
                                                    <div class="tab-title">Today</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="pill" href="#weekly" role="tab"
                                                aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <!-- <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                                    </div> -->
                                                    <div class="tab-title">Weekly</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="pill" href="#monthly" role="tab"
                                                aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <!-- <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                                                    </div> -->
                                                    <div class="tab-title">Monthly</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="danger-pills-tabContent">
                                <div class="tab-pane fade show active" id="today" role="tabpanel">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="text-default mb-0 ">
                                            <script>
                                            document.write(new Date().toDateString())
                                            </script>
                                        </h4>
                                        <div class="vr"></div>
                                        <h5 class="text-default-1 mb-0 "><i class="bi bi-currency-rupee"></i>9,279</h5>
                                    </div>
                                    <div id="today_chart"></div>
                                </div>
                                <div class="tab-pane fade" id="weekly" role="tabpanel">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="text-default mb-0 " id="pay_last_week">
                                        </h4>
                                        <div class="vr"></div>
                                        <h5 class="text-default-1 mb-0 "><i class="bi bi-currency-rupee"></i>9,279</h5>
                                    </div>
                                    <div id="weekly_chart"></div>
                                    <!-- <p>2</p> -->
                                </div>
                                <div class="tab-pane fade" id="monthly" role="tabpanel">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="text-default mb-0 " id="pay_this_month">
                                        </h4>
                                        <div class="vr"></div>
                                        <h5 class="text-default-1 mb-0 "><i class="bi bi-currency-rupee"></i>9,279</h5>
                                    </div>
                                    <div id="monthly_chart"></div>
                                    <!-- <p>3</p> -->
                                </div>
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

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    <?php include 'link/script.php'?>
    <!-- Graph Payout last week date -->
    <script>
    $(function() {
        var start = moment().subtract(6, 'days');
        var end = moment();

        function cb_week(start, end) {
            $("#pay_last_week").html(start.format('D MMMM YYYY') + ' &nbsp - &nbsp ' + end.format(
                'D MMMM YYYY'));
        }
        cb_week(start, end);
    });
    </script>
    <!-- Graph this month -->
    <script>
    $(function() {
        var start = moment();
        var end = moment();

        function cb_month(start, end) {
            $('#pay_this_month').html(start.format(' MMMM'));
        }
        cb_month(start, end);
    });
    </script>
    <script>
    var options = {
        series: [{
            name: 'Revenue',
            data: [14, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 14, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5]
        }],
        chart: {
            foreColor: '#E80ca1',
            height: 360,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.10,
            }
        },
        stroke: {
            width: 5,
            curve: 'smooth'
        },
        xaxis: {
            //type: 'datetime',
            categories: ['1 AM', '2 AM', '3 AM', '4 AM', '5 AM', '6 AM', '7 AM', '8 AM', '9 AM', '10 AM', '11 AM',
                '12 PM', '13 PM', '14 PM', '15 PM', '16 PM', '17 PM', '18 PM', '19 PM', '20 PM', '21 PM',
                '22 PM', '23 PM', '24 PM'
            ],
            tickAmount: 5,
        },

        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                gradientToColors: ['#E80ca1'],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100, 100, 100]
            },
        },
        markers: {
            size: 4,
            colors: ["#E80ca1"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        colors: ["#E80ca1"],
    };
    var chart = new ApexCharts(document.querySelector("#today_chart"), options);
    chart.render();
    </script>
    <script>
    var options = {
        series: [{
            name: 'Revenue',
            data: [0, 80, 80, 60, 60, 45, 0, 80]
        }],
        chart: {
            foreColor: '#af23ef',
            height: 360,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.10,
            }
        },
        stroke: {
            width: 5,
            curve: 'smooth'
        },
        xaxis: {
            //type: 'datetime',
            categories: ["", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },

        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                gradientToColors: ['#af23ef'],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100, 100, 100]
            },
        },
        markers: {
            size: 4,
            colors: ["#af23ef"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        colors: ["#af23ef"],
    };
    var chart = new ApexCharts(document.querySelector("#weekly_chart"), options);
    chart.render();
    </script>
    <script>
    var options = {
        series: [{
            name: 'Revenue',
            data: [0, 80, 80, 60, 60, 45, 0, 80, 0, 80, 70, 90, 90, 80, 80, 1, 60, 60, 50, 60, 45, 90, 80,
                0, 0, 80, 0, 80, 70, 90, 90, 80
            ]
        }],
        chart: {
            foreColor: '#E80ca1',
            height: 360,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.10,
            }
        },
        stroke: {
            width: 5,
            curve: 'smooth'
        },
        xaxis: {
            //type: 'datetime',
            categories: ["", "1 ", "2 ", "3 ", "4 ", "5 ", "6 ", "7 ", "8 ", "9 ", "10 ",
                "11 ", "12 ", "13 ", "14 ", "15 ", "16 ",
                "17 ", "18 ", "19 ", "20 ", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"
            ],
            tickAmount: 6,
        },

        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                gradientToColors: ['#E80ca1'],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100, 100, 100]
            },
        },
        markers: {
            size: 4,
            colors: ["#E80ca1"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        colors: ["#E80ca1"],
    };
    var chart = new ApexCharts(document.querySelector("#monthly_chart"), options);
    chart.render();
    </script>
    <!-- <script>
    var element = document.getElementById('monthly_chart');
    var options = {
        series: [{
            name: "Earning Amount",
            data: [0, 80, 80, 60, 60, 45, 0, 80, 0, 80, 70, 90, 90, 80, 80, 1, 60, 60, 50, 60, 45, 90, 80,
                0, 0, 80, 0, 80, 70, 90, 90, 80
            ]
        }, ],
        chart: {
            fontFamily: "inherit",
            type: "area",
            height: '350px',
            toolbar: {
                show: !1
            }
        },
        plotOptions: {},
        legend: {
            show: !1
        },
        dataLabels: {
            enabled: !1
        },
        fill: {
            type: "gradient",
            colors: ['#7239ea'],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.2,
                stops: [15, 120, 100]
            }
        },
        stroke: {
            curve: "smooth",
            show: !0,
            width: 3,
            colors: ['#7239ea']
        },
        xaxis: {
            categories: ["", "1 ", "2 ", "3 ", "4 ", "5 ", "6 ", "7 ", "8 ", "9 ", "10 ",
                "11 ", "12 ", "13 ", "14 ", "15 ", "16 ",
                "17 ", "18 ", "19 ", "20 ", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"
            ],
            axisBorder: {
                show: !1
            },
            axisTicks: {
                show: !1
            },
            tickAmount: 6,
            labels: {
                rotate: 0,
                rotateAlways: !0,
                style: {
                    colors: '#A1A5B7',
                    fontSize: "12px"
                }
            },
            crosshairs: {
                position: "front",
                stroke: {
                    colors: '#7239ea',
                    width: 0,
                    dashArray: 3
                }
            },
            tooltip: {
                enabled: !0,
                formatter: void 0,
                offsetY: 0,
                style: {
                    colors: '#7239ea',
                    fontSize: "12px"
                }
            },
        },
        yaxis: {
            max: 120,
            min: 0,
            tickAmount: 6,
            labels: {
                style: {
                    colors: '#565674',
                    fontSize: "12px"
                }
            }
        },
        states: {
            normal: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: !1,
                filter: {
                    type: "none",
                    value: 0
                }
            }
        },
        tooltip: {
            // fillSeriesColor: true,
            style: {
                fontSize: "12px"
            }
        },
        // colors: [KTUtil.getCssVariableValue("#7239ea")],
        colors: ['#7239ea'],
        grid: {
            borderColor: '#E4E6EF',
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: !0
                }
            }
        },
        markers: {
            strokeColor: '#7239ea',
            strokeWidth: 3
        },
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script> -->
</body>

</html>