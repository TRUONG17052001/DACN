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
        <form method="post" action="/profile/{{$TK['username']}}">
            @csrf
            <div class="row px-xl-5">
                <div class="col-lg-12 mb-5">
                    <div class="bg-light p-30">
                        <div id="success">
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Họ và tên" required="required"
                                value="{{$TK['tenht']}}" name="tenht" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" placeholder="Địa chỉ email" required="required"
                                value="{{$TK['email']}}" name="email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Số điện thoại" required="required"
                                value="{{$TK['sdt']}}" name="sdt" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Địa chỉ" required="required"
                                value="{{$TK['diachi']}}" name="diachi" />
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
                        @foreach($DS as $items)
                        @if($items->username==$TK->username)
                        <tr>
                            <td class="align-middle">{{$items->mahd}}</td>
                            <td class="align-middle">{{$items->tongtien}} VND</td>
                            <td class="align-middle">{{$items->soluong}}</td>
                            <td class="align-middle">{{$items->thanhtoan}}</td>
                            <td class="align-middle">
                                @if($items->tinhtrang==null)
                                Chưa xác nhận
                                @else
                                {{$items->tinhtrang}}
                                @endif
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Profile End -->


    <!-- Footer -->
    @include('User/Layout/footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- Libraries -->
    @include('User/Layout/libraries')
</body>

</html>