<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @hasSection ('title')
        <title>@yield('title') | {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <base target="_parent">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap">
    {{-- <link rel="stylesheet"
        href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb5/3.10.1/compiled.min.css"> --}}
    <link rel="stylesheet" href="@asset('css/app.css')">
    <link rel="stylesheet" href="@asset('vendor/toastr/toastr.min.css')">
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


    @yield('app-head-content')
</head>

<body>

    @yield('base-content')

    <script type="text/javascript" src="@asset('js/app.js')"></script>
    <script type="text/javascript" src="@asset('vendor/toastr/toastr.min.js')"></script>
    <script type="text/javascript" src="@asset('vendor/chart.js/2.9.4/dist/Chart.min.js')"></script>
    <script type="text/javascript">
        {// Graph
            var ctx = document.getElementById("myChart");

            var myChart = ctx ? new Chart(ctx, {
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
            }) : '';
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "7000",
                "extendedTimeOut": "3000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            @if(\Session::has('error'))
            toastr["error"]("{{ \Session::get('error') }}")
            @endif

            @if(\Session::has('info'))
            toastr["info"]("{{ \Session::get('info') }}")
            @endif

            @if(\Session::has('success'))
            toastr["success"]("{{ \Session::get('success') }}")
            @endif

            @if(\Session::has('warning'))
            toastr["warning"]("{{ \Session::get('warning') }}")
            @endif
        });
    </script>

@yield('app-body-content')
</body>

</html>
