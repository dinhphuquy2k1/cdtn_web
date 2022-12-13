<div class="header d-flex align-items-center
        justify-content-between">
    <a class="m-logo" href="{{ route('index') }}">
        <img src="" alt="">
    </a>
    <div class="m-header-menu">
        <ul class="header-menu d-flex">
            <li class="header-item"><a href="{{ route('getPhone') }}">Iphone</a></li>
            <li class="header-item ipad-page"><a href="{{ route('getIpad') }}">Ipad</a></li>
            <li class="header-item"><a href="{{ route('getAirpods') }}">Airpords</a></li>
            <li class="header-item"><a href="{{ route('new_feed') }}">Tin tức</a></li>
            <li class="header-item"><a href="{{ route('accessory') }}">Phụ kiện</a></li>
            <li class="header-item"><a href="{{ route('installment') }}">Trả góp</a></li>
        </ul>
    </div>
    <div class="m-header-right h-100 d-flex align-items-center ">

        @auth
            <span></span>
        @else
            <div class="me-4 mb-3 login-text font-size-18 btn-login"> Đăng nhập</div>
        @endauth
        <a href="{{ route('getShopping_Cart') }}" class="position-relative">
            <div class=" mi-24 icon-cart me-4 mb-3">

            </div>
            @isset($total_shopping)
                <div class="number_shopping_cart"><span>{{ $total_shopping[0]->total }}</span></div>
            @endisset

        </a>
        <div class="mi-24 icon-search me-4 mb-3"></div>

        @auth
            <div class="me-4 mb-3  font-size-18 login-text user-header pointer" id="user-header">
                {{ auth()->user()->username }}
                <img class="ms-2 mi-32" src="{{ asset('assets/icons/person.jpg') }}" alt="">
                <div class="mi-chervon-down mi-ce mi-16 mt-2 ms-1"></div>
                <div class="dropdown-user">
                    <a href="{{ route('profile') }}">
                        <div class="item-dropdown-user profile_user">
                            <div class="mi mi-24 mi-user me-2"></div>Hồ sơ của tôi
                        </div>
                    </a>

                    <form id="logoutForm" method="get">
                        @csrf
                        <div class="item-dropdown-user" id="btnLogout">
                            <div class="mi mi-24 mi-logout me-2"></div>Đăng xuất
                        </div>
                    </form>
                </div>
                <div class="dropdown-user-box">
                </div>
            </div>
        @endauth

    </div>
</div>
