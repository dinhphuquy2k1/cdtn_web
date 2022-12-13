<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách ipad</title>
    <link rel="stylesheet" href="{{ asset('css/users/ipadpage.css') }}">
</head>

<body>
    @extends('users.Home')
    @section('content')
        <div class="ipad-wrapper d-flex justify-content-center">
            <div class="ipad-container">
                {{-- <div class="ipad-header">
                    <div class="ipad-header-item">
                        Tất cả
                    </div>
                    <div class="ipad-header-item">
                        Iphone 14
                    </div>
                    <div class="ipad-header-item">
                        Iphone 14
                    </div>
                    <div class="ipad-header-item">
                        Iphone 14
                    </div>
                    <div class="ipad-header-item">
                        Iphone 14
                    </div>
                    <div class="ipad-header-item">
                        Iphone 14
                    </div>
                </div> --}}
                <div class="ipad-main-box pt-5">
                    <div class="ipad-main">
                        <div class="ipad-list-box">
                            <div class="ipad-list row">
                                @isset($products)
                                    @foreach ($products as $product)
                                        <a href="{{ route('get_by_id', $product->id) }}">
                                            <div class=" phone-item-box">
                                                <div class="phone-item">
                                                    <div class="wrapper-item-image">
                                                        <div class="phone-item-image">
                                                            <img src="{{ asset('assets/products/' . $product->image) }}"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-item-name">{{ $product->product_name }}</div>
                                                    <div class="wrapper-item-price">
                                                        Giá từ: {{ number_format($product->price, 0, ',', '.') }}đ
                                                    </div>
                                                    <div class="wrapper-item-attach"></div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                    {{ $products }}
                                @endisset
                            </div>


                        </div>
                    </div>
                </div>



                <div class="phone-footer"></div>
            </div>
        </div>
    @endsection
</body>

</html>
