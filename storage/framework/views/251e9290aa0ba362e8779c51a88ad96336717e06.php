<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('User/Layout/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('User/Layout/topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('User/Layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Hồ sơ</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Profile Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Thông
                tin tài khoản</span></h2>
        <form method="post" action="/profile/<?php echo e($TK['username']); ?>">
            <?php echo csrf_field(); ?>
            <div class="row px-xl-5">
                <div class="col-lg-12 mb-5">
                    <div class="bg-light p-30">
                        <div id="success">
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Họ và tên" required="required"
                                value="<?php echo e($TK['tenht']); ?>" name="tenht" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" placeholder="Địa chỉ email" required="required"
                                value="<?php echo e($TK['email']); ?>" name="email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Số điện thoại" required="required"
                                value="<?php echo e($TK['sdt']); ?>" name="sdt" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Địa chỉ" required="required"
                                value="<?php echo e($TK['diachi']); ?>" name="diachi" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Lưu</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-5 mb-5">
                    <div class="bg-light p-30 mb-3">
                        <img src="/User/img/cat-1.jpg" alt="" width="100%">
                        <input type="file" name="anhsp" id="img">
                    </div>
                </div> -->
            </div>
        </form>
        <div class="row px-xl-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Danh sách đơn đặt hàng</span></h2>
        <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Tổng tiền</th>
                            <th>Số lượng</th>
                            <th>Hình thức thanh toán</th>
                            <th>Tình trạng đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $__currentLoopData = $DS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($items->username==$TK->username): ?>
                        <tr>
                            <td class="align-middle"><?php echo e($items->mahd); ?></td>
                            <td class="align-middle"><?php echo e($items->tongtien); ?> VND</td>
                            <td class="align-middle"><?php echo e($items->soluong); ?></td>
                            <td class="align-middle"><?php echo e($items->thanhtoan); ?></td>
                            <td class="align-middle">
                                <?php if($items->tinhtrang==null): ?>
                                Chưa xác nhận
                                <?php else: ?>
                                <?php echo e($items->tinhtrang); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Profile End -->


    <!-- Footer -->
    <?php echo $__env->make('User/Layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- Libraries -->
    <?php echo $__env->make('User/Layout/libraries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\Đại học\HK1_ Năm 4\Đồ án chuyên ngành\Lavarel\lavarel-app\resources\views/User/profile.blade.php ENDPATH**/ ?>