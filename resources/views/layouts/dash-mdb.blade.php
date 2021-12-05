<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <base target="_parent">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap">
    {{-- <link rel="stylesheet"
        href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb5/3.10.1/compiled.min.css"> --}}
    <link rel="stylesheet" href="@asset('css/app.css')">
    <style>
        body {
            scroll-behavior: smooth;
        }

        /* Permite o menu rolar em modo mobile */
        #sidebarMenu {
            min-width: 240px;
            max-width: 240px;
        }

        #sidebarMenu .position-sticky {
            /* overflow: scroll; */
            height: 100vh;
            overflow-y: scroll;
        }

        #sidebarMenu .position-sticky::-webkit-scrollbar {
            width: 0.6rem;
            display: none;
        }

        #sidebarMenu .position-sticky::-webkit-scrollbar-track {
            border-radius: 5px;
            background: #ffffff;
        }

        #sidebarMenu .position-sticky::-webkit-scrollbar-track:hover {
            background: #ffffff;
        }

        #sidebarMenu .position-sticky::-webkit-scrollbar-thumb {
            background: #ffffff;
            border-radius: 10px;
        }

        #sidebarMenu .position-sticky::-webkit-scrollbar-thumb:hover {
            background: #01143b;
        }

        /* Body scrollbar */
        body::-webkit-scrollbar {
            width: 0.8rem;
        }

        body::-webkit-scrollbar-track {
            border-radius: 5 px;
            background: #fff;
        }

        body::-webkit-scrollbar-track:hover {
            background: #fff;
        }

        body::-webkit-scrollbar-thumb {
            background: #1669f1ba;
            border-radius: 10px;
        }

        body::-webkit-scrollbar-thumb:hover {
            background: #1669f1;
        }

        [logo-part="logo-main"][dark="true"]
        {
            background-color: rgb(41, 41, 41);
        }
    </style>
    <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style>
    <style>
        INPUT:-webkit-autofill,
        SELECT:-webkit-autofill,
        TEXTAREA:-webkit-autofill {
            animation-name: onautofillstart
        }

        INPUT:not(:-webkit-autofill),
        SELECT:not(:-webkit-autofill),
        TEXTAREA:not(:-webkit-autofill) {
            animation-name: onautofillcancel
        }

        @keyframes onautofillstart {}

        @keyframes onautofillcancel {}
    </style>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body>
    <x-mdb-main-navigation-bar />

    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <section class="mb-3">
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Posts</h4>
                                            <p class="mb-0">Monthly blog posts</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">18,000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" style="display: block;"
                            width="648" height="380"></canvas>
                    </div>
                </div>
            </section>
            <!-- Section: Main chart -->

            <!--Section: Sales Performance KPIs-->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header text-center py-3">
                        <h5 class="mb-0 text-center">
                            <strong>Sales Performance KPIs</strong>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Product Detail Views</th>
                                        <th scope="col">Unique Purchases</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Product Revenue</th>
                                        <th scope="col">Avg. Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Value</th>
                                        <td>18,492</td>
                                        <td>228</td>
                                        <td>350</td>
                                        <td>$4,787.64</td>
                                        <td>$13.68</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Percentage change</th>
                                        <td>
                                            <span class="text-danger">
                                                <i class="fas fa-caret-down me-1"></i><span>-48.8%%</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-danger">
                                                <i class="fas fa-caret-down me-1"></i><span>-11.5%</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Absolute change</th>
                                        <td>
                                            <span class="text-danger">
                                                <i class="fas fa-caret-down me-1"></i><span>-17,654</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <i class="fas fa-caret-up me-1"></i><span>28</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <i class="fas fa-caret-up me-1"></i><span>111</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <i class="fas fa-caret-up me-1"></i><span>$1,092.72</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-danger">
                                                <i class="fas fa-caret-down me-1"></i><span>$-1.78</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Sales Performance KPIs-->

            <!--Section: Minimal statistics cards-->
            <section class="mb-4">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-pencil-alt text-info fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>278</h3>
                                        <p class="mb-0">New Posts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="far fa-comment-alt text-warning fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>156</h3>
                                        <p class="mb-0">New Comments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-chart-line text-success fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>64.89 %</h3>
                                        <p class="mb-0">Bounce Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>423</h3>
                                        <p class="mb-0">Total Visits</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-danger">278</h3>
                                        <p class="mb-0">New Projects</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-rocket text-danger fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-success">156</h3>
                                        <p class="mb-0">New Clients</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="far fa-user text-success fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-warning">64.89 %</h3>
                                        <p class="mb-0">Conversion Rate</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-chart-pie text-warning fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-info">423</h3>
                                        <p class="mb-0">Support Tickets</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="far fa-life-ring text-info fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-info">278</h3>
                                        <p class="mb-0">New Posts</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-book-open text-info fa-3x"></i>
                                    </div>
                                </div>
                                <div class="px-md-1">
                                    <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-warning">156</h3>
                                        <p class="mb-0">New Comments</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="far fa-comments text-warning fa-3x"></i>
                                    </div>
                                </div>
                                <div class="px-md-1">
                                    <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-success">64.89 %</h3>
                                        <p class="mb-0">Bounce Rate</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-mug-hot text-success fa-3x"></i>
                                    </div>
                                </div>
                                <div class="px-md-1">
                                    <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-danger">423</h3>
                                        <p class="mb-0">Total Visits</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-map-signs text-danger fa-3x"></i>
                                    </div>
                                </div>
                                <div class="px-md-1">
                                    <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Minimal statistics cards-->

            <!--Section: Statistics with subtitles-->
            <section class="mb-4">
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Posts</h4>
                                            <p class="mb-0">Monthly blog posts</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">18,000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Comments</h4>
                                            <p class="mb-0">Monthly blog posts</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">84,695</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                                        </div>
                                        <div>
                                            <h4>Total Sales</h4>
                                            <p class="mb-0">Monthly Sales Amount</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="far fa-heart text-danger fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                                        </div>
                                        <div>
                                            <h4>Total Cost</h4>
                                            <p class="mb-0">Monthly Cost</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-wallet text-success fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->

            <!--Section: Statistics with subtitles-->
            <section>
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Posts</h4>
                                            <p class="mb-0">Monthly blog posts</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">18,000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->
        </div>
    </main>
    <!--Main layout-->
    <script type="text/javascript" src="@asset('js/app.js')"></script>
    <script type="text/javascript" src="@asset('vendor/chart.js/2.9.4/dist/Chart.min.js')"></script>
    <script type="text/javascript">
        {// Graph
        var ctx = document.getElementById("myChart");

        var myChart = new Chart(ctx, {
            type: "line",
            data: {
            labels: [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
            ],
            datasets: [
                {
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: "transparent",
                borderColor: "#007bff",
                borderWidth: 4,
                pointBackgroundColor: "#007bff",
                },
            ],
            },
            options: {
            scales: {
                yAxes: [
                {
                    ticks: {
                    beginAtZero: false,
                    },
                },
                ],
            },
            legend: {
                display: false,
            },
            },
        });
        }
    </script>
</body>

</html>
