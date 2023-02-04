<!DOCTYPE html>
<html lang="en">

<head>
@include('User/Layout/head')
</head>

<body>
@include('User/Layout/topbar')

@include('User/Layout/navbar')
    


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Giỏ hàng của bạn</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Màu sắc</th>
                            <th>Kích thước</th>
                            <th>Tổng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach(Cart::content() as $items)
                        <tr>
                            <td class="align-middle"><img src="/User/img/{{$items->options['img']}}" alt="" style="width: 50px;">{{$items->name}}</td>
                            <td class="align-middle">{{number_format($items->price)}} VND</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <!-- <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div> -->
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="{{$items->qty}}">
                                    <!-- <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div> -->
                                </div>
                            </td>
                            <td class="align-middle">{{$items->options['color']}}</td>
                            <td class="align-middle">{{$items->options['size']}}</td>
                            <td class="align-middle">{{number_format($items->price*$items->qty)}} VND</td>
                            <td class="align-middle"><a class="btn btn-sm btn-danger" href="/cart/remove/{{$items->rowId}}"><i class="fa fa-times"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <!-- <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Mã khuyến mãi">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Áp dụng khuyến mãi</button>
                        </div>
                    </div>
                </form> -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Tổng thanh toán</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Tạm tính</h6>
                            <h6>{{cart::subtotal(0)}} VND</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phụ phí</h6>
                            <h6 class="font-weight-medium">0 VND</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng</h5>
                            <h5>{{cart::subtotal(0)}} VND</h5>
                        </div>
                        @if(session()->has('user'))
                        @if(Cart::count()!=0)
                        <a class="btn btn-block btn-primary font-weight-bold my-3 py-3" href="/checkout">Thanh toán giỏ hàng</a>
                        @else
                        <a class="btn btn-block btn-primary font-weight-bold my-3 py-3" href="/cart">Thanh toán giỏ hàng</a>
                        <p class="alert alert-danger">Không có sản phẩm trong giỏ hàng</p>
                        @endif
                        @else
                        <a class="btn btn-block btn-primary font-weight-bold my-3 py-3" href="/cart">Thanh toán giỏ hàng</a>
                        <p class="alert alert-danger">Vui lòng đăng nhập</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer -->
    @include('User/Layout/footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    
    <!-- Libraries -->
    @include('User/Layout/libraries')

</body>

</html>