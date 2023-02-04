<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">Giới thiệu</a>
                <a class="text-body mr-3" href="">Trợ giúp</a>
                <a class="text-body mr-3" href="">Câu hỏi thường gặp</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="btn-group">
                    <a type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                        @if(session()->has('user'))
                        {{session()->get('user')['name']==null?session()->get('user')['username']:session()->get('user')['name']}}
                        @else
                        Tài khoản
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @if(session()->has('user'))
                        <a class="dropdown-item" href="/profile/{{session()->get('user')['username']}}" type="button">Hồ sơ</a>
                        <a class="dropdown-item" href="/login" type="button">Đăng xuất</a>
                        @else
                        <a class="dropdown-item" href="/login" type="button">Đăng nhập</a>
                        <a class="dropdown-item" href="/register" type="button">Đăng ký</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->