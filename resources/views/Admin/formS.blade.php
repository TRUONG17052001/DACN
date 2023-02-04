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
                                <h1>Sửa sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Danh sách sản phẩm</a></li>
                                    <li class="breadcrumb-item active">Sửa sản phẩm</li>
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
                                        <form class="form-valide" action="/formS/edit/{id}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Mã sản phẩm
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="masp" placeholder="Nhập mã sản phẩm"
                                                        value="{{$Product->masp}}" required="required" readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-select2">Mã danh
                                                    mục<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="val-select2" name="madm"
                                                        style="width: 100%;" data-placeholder="Choose one..">
                                                        @foreach($DSCate as $items)
                                                        <option value="{{$items->madm}}">{{$items->tendm}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Tên sản phẩm
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="tensp" value="{{$Product->tensp}}"
                                                        placeholder="Nhập tên sản phẩm" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Đơn vị tính
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="donvitinh" value="{{$Product->donvitinh}}"
                                                        placeholder="Cái" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-digits">Giá sản
                                                    phẩm<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-digits" name="giasp"
                                                        value="{{$Product->giasp}}" placeholder="500,000" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-suggestions">Mô tả sản
                                                    phẩm <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="val-suggestions" name="motasp"
                                                        rows="5" value="1"
                                                        placeholder="{{$Product->motasp}}"></textarea>
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
                                                    <input type="hidden" value="put" name="_method">
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
</body>

</html>