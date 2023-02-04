<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('Admin/Layout/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('Admin/Layout/slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Admin/Layout/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Danh sách hóa đơn</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Danh sách hóa đơn</li>
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
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã hóa đơn</th>
                                                    <th>Tài khoản</th>
                                                    <th>Số lượng</th>
                                                    <th>Hình thức thanh toán</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Tình trạng đơn hàng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $DSBill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($items->mahd); ?></td>
                                                    <td><?php echo e($items->username); ?></td>
                                                    <td><?php echo e($items->soluong); ?></td>
                                                    <td><?php echo e($items->thanhtoan); ?></td>
                                                    <td><?php echo e($items->tongtien); ?> VND</td>
                                                    <td>
                                                        <?php if($items->tinhtrang=="Chờ xác nhận"): ?>
                                                        <form action="/tableHD/<?php echo e($items->mahd); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-rounded m-b-10 m-l-5">Xác nhận đơn hàng</button>
                                                        </form>
                                                        <?php elseif($items->tinhtrang=="Đang giao"): ?>
                                                        <form action="/tableHD/<?php echo e($items->mahd); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit"
                                                                class="btn btn-info btn-rounded m-b-10 m-l-5">Đang giao</button>
                                                        </form>
                                                        <?php elseif($items->tinhtrang=="Đã giao"): ?>
                                                            <button
                                                                class="btn btn-success btn-rounded m-b-10 m-l-5">Đã giao</button>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <form action="/tableCTHD/<?php echo e($items->mahd); ?>" method="get">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit"
                                                                class="btn btn-info btn-rounded m-b-10 m-l-5">Xem</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

</html><?php /**PATH D:\Đại học\HK1_ Năm 4\Đồ án chuyên ngành\Lavarel\lavarel-app\resources\views/Admin/tableHD.blade.php ENDPATH**/ ?>