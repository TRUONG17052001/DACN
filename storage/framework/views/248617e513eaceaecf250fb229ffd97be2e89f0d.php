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
                                <h1>Danh sách danh mục</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Danh sách danh mục</li>
                                </ol>
                            </div>
                            <?php if(session()->has("OK")): ?>
                            <p class="alert alert-success"><?php echo e(session()->get('OK')); ?></p>
                            <?php elseif(session()->has("Fail")): ?>
                            <p class="alert alert-danger"><?php echo e(session()->get('Fail')); ?></p>
                            <?php endif; ?>
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
                                    <form action="/formDM" method="get">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i
                                            class="ti-plus"></i>Thêm danh mục</button>
                                    </form>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã danh mục</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Số lượng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $DSCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($items->madm); ?></td>
                                                    <td><?php echo e($items->tendm); ?></td>
                                                    <td><?php echo e($items->soluong); ?> Cái</td>
                                                    <td>
                                                        <form action="/tableDM/delete/<?php echo e($items->madm); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button type="submit"
                                                                class="btn btn-danger btn-rounded m-b-10 m-l-5">Xóa</button>
                                                        </form>
                                                        <form action="/formD/edit/<?php echo e($items->madm); ?>" method="get">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit"
                                                                class="btn btn-info btn-rounded m-b-10 m-l-5">Sửa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Mã danh mục</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Số lượng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </tfoot>
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

</html><?php /**PATH D:\Đại học\HK1_ Năm 4\Đồ án chuyên ngành\Lavarel\lavarel-app\resources\views/Admin/tableDM.blade.php ENDPATH**/ ?>