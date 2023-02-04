<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <!-- <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link"></a>
                </div>
            </nav>
        </div> -->

        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <div class="col-lg-4">
                    <a href="/" class="text-decoration-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">Men's</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                    </a>
                </div>
                <!-- <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link">Trang chủ</a>
                        <a href="/shop" class="nav-item nav-link">Cửa hàng</a>
                        <!-- <a href="#" class="nav-item nav-link">Tin tức</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tin tức <i
                                    class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="cart.html" class="dropdown-item active">Khuyến mãi</a>
                                <a href="checkout.html" class="dropdown-item">Hướng dẫn</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link">Liên hệ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 text-left">
                    <form action="/search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keywords"
                                placeholder="Bạn muốn mua gì hôm nay?">
                            <div class="input-group-append">
                                <button class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="navbar-nav ml-auto py-0 d-none d-lg-block"">
                    <a href=" #" class="btn px-0">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge text-secondary border border-secondary rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="/cart" class="btn px-0 ml-3">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge text-secondary border border-secondary rounded-circle"
                            style="padding-bottom: 2px;">
                            <?php if(Cart::count()>0): ?>
                            <?php echo e(Cart::count()); ?>

                            <?php else: ?>
                            0
                            <?php endif; ?>
                        </span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End --><?php /**PATH D:\Đại học\HK1_ Năm 4\Đồ án chuyên ngành\Lavarel\lavarel-app\resources\views/User/Layout/navbar.blade.php ENDPATH**/ ?>