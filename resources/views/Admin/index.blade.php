<!DOCTYPE html>
<html lang="en">

<head>
@include('Admin/Layout/head')
</head>

<body>
@include('Admin/Layout/slidebar')
@include('Admin/Layout/header')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                @if(session()->has('admin'))
                                <h1>Xin chào! {{session()->get('admin')['name']}}</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Trang chủ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="/AdminV/js/lib/jquery.min.js"></script>
    <script src="/AdminV/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/AdminV/js/lib/menubar/sidebar.js"></script>
    <script src="/AdminV/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="/AdminV/js/lib/bootstrap.min.js"></script>
    <script src="/AdminV/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="/AdminV/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="/AdminV/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="/AdminV/js/lib/calendar-2/pignose.init.js"></script>


    <script src="/AdminV/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="/AdminV/js/lib/weather/weather-init.js"></script>
    <script src="/AdminV/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="/AdminV/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="/AdminV/js/lib/chartist/chartist.min.js"></script>
    <script src="/AdminV/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="/AdminV/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="/AdminV/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="/AdminV/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="/AdminV/js/dashboard2.js"></script>
</body>

</html>
