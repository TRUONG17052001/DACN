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
                                <h1>Danh sách sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <form action="/formSP" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i
                                                class="ti-plus"></i>Thêm sản phẩm</button>
                                    </form>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã sản phẩm</th>
                                                    <th>Mã danh mục</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Đơn vị tính</th>
                                                    <th>Giá sản phẩm</th>
                                                    <th>Mô tả sản phẩm</th>
                                                    <th>Ảnh sản phẩm</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($DSProduct as $items)
                                                <tr>
                                                    <td>{{$items->masp}}</td>
                                                    <td>{{$items->madm}}</td>
                                                    <td>{{$items->tensp}}</td>
                                                    <td>{{$items->donvitinh}}</td>
                                                    <td>{{number_format($items->giasp)}} VND</td>
                                                    <td>{{$items->motasp}}</td>
                                                    <td><img src="/storage/{{$items->anhsp}}" width="100" alt=""
                                                            srcset=""></td>
                                                    <td>
                                                        <form action="/tableSP/delete/{{$items->masp}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button type="submit"
                                                                class="btn btn-danger btn-rounded m-b-10 m-l-5">Xóa</button>
                                                        </form>
                                                        <form action="/formS/edit/{{$items->masp}}" method="get">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-info btn-rounded m-b-10 m-l-5">Sửa</button>
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