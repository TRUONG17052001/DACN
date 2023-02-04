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
                                <h1>Danh sách người dùng</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Danh sách người dùng</li>
                                </ol>
                            </div>
                            @if(session()->has("OK"))
                            <p class="alert alert-success">{{session()->get('OK')}}</p>
                            @elseif(session()->has("Fail"))
                            <p class="alert alert-danger">{{session()->get('Fail')}}</p>
                            @endif
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Tài khoản</th>
                                                    <th>Tên hiển thị</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Email</th>
                                                    <th>Quyền</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($DSUser as $items)
                                                <tr>
                                                    <td>{{$items->username}}</td>
                                                    <td>{{$items->tenht}}</td>
                                                    <td>{{$items->diachi}}</td>
                                                    <td>{{$items->email}}</td>
                                                    <td>{{$items->quyen}}</td>
                                                    <td>
                                                        <form action="/tableND/delete/{{$items->username}}" method="post">
                                                            @csrf
                                                            @if($items->quyen=="QL")
                                                            @else
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button type="submit"
                                                                class="btn btn-danger btn-rounded m-b-10 m-l-5">Xóa</button>
                                                            @endif
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
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

    <!-- bootstrap -->

    <script src="/AdminV/js/lib/bootstrap.min.js"></script>
    <script src="/AdminV/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="/AdminV/js/lib/data-table/datatables.min.js"></script>
    <script src="/AdminV/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/AdminV/js/lib/data-table/jszip.min.js"></script>
    <script src="/AdminV/js/lib/data-table/pdfmake.min.js"></script>
    <script src="/AdminV/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/AdminV/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/AdminV/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/AdminV/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/AdminV/js/lib/data-table/datatables-init.js"></script>
</body>

</html>