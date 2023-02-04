<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('Admin/Layout/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
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
                                <h1>Thêm sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Danh sách sản phẩm</a></li>
                                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="/formSP" method="post"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php if(session()->has('TM')): ?>
                                            <p class="alert alert-danger"><?php echo e(session()->get('TM')); ?></p>
                                            <?php else: ?>
                                            <?php endif; ?>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Mã sản phẩm
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="masp" placeholder="Nhập mã sản phẩm" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-select2">Mã danh
                                                    mục<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="val-select2" name="madm"
                                                        style="width: 100%;" data-placeholder="Choose one..">
                                                        <?php $__currentLoopData = $DSCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($items->madm); ?>"><?php echo e($items->tendm); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Tên sản phẩm
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="tensp" placeholder="Nhập tên sản phẩm"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Đơn vị tính
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="donvitinh" placeholder="Cái" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-digits">Giá sản
                                                    phẩm<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-digits" name="giasp"
                                                        placeholder="500,000" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Ảnh sản
                                                    phẩm</label>
                                                <div class="col-lg-8">
                                                    <img id="img" src="#" alt="Ảnh sản phẩm" size="100">
                                                    <input type='file' name="anhsp" onchange="readURL(this);">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-suggestions">Mô tả sản
                                                    phẩm <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="val-suggestions" name="motasp"
                                                        rows="5" placeholder="Thông tin chi tiết sản phẩm"></textarea>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-select2-multiple">Select2 Multiple <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                                                        <option></option>
                                                        <option value="html">HTML</option>
                                                        <option value="css">CSS</option>
                                                        <option value="javascript">JavaScript</option>
                                                        <option value="angular">Angular</option>
                                                        <option value="angular">React</option>
                                                        <option value="vuejs">Vue.js</option>
                                                        <option value="ruby">Ruby</option>
                                                        <option value="php">PHP</option>
                                                        <option value="asp">ASP.NET</option>
                                                        <option value="python">Python</option>
                                                        <option value="mysql">MySQL</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="val-skill">
                                                        <option value="">Please select</option>
                                                        <option value="html">HTML</option>
                                                        <option value="css">CSS</option>
                                                        <option value="javascript">JavaScript</option>
                                                        <option value="angular">Angular</option>
                                                        <option value="angular">React</option>
                                                        <option value="vuejs">Vue.js</option>
                                                        <option value="ruby">Ruby</option>
                                                        <option value="php">PHP</option>
                                                        <option value="asp">ASP.NET</option>
                                                        <option value="python">Python</option>
                                                        <option value="mysql">MySQL</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-website">Website <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (US) <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-number">Number <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                        <span class="css-control-indicator"></span> I agree to the terms
                                                    </label>
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!-- Select2 -->
    <script src="/AdminV/js/lib/select2/select2.full.min.js"></script>
    <script src="/AdminV/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="/AdminV/js/lib/form-validation/jquery.validate-init.js"></script>
    <script src="/AdminV/js/lib/bootstrap.min.js"></script>
    <script src="/AdminV/js/scripts.js"></script>
    <!-- scripit init-->
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</body>

</html><?php /**PATH D:\Đại học\HK1_ Năm 4\Đồ án chuyên ngành\Lavarel\lavarel-app\resources\views/Admin/formSP.blade.php ENDPATH**/ ?>