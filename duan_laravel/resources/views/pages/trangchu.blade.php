
@extends('layouts.user_layout')
@section('content')

      <!-- Bắt Đầu Danh Mục Sản Phẩm -->
      <div class="row mx-0 mt-5 kategory ">
        <h5 class="p-4">DANH MỤC</h5>
        <div class="d-flex">
          @foreach($nganhhang as $danhmuc)
          @if($danhmuc->NH_CON==NULL)
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <a href="{{url('trang-chu/danhmuc/'.$danhmuc->MA_NH)}}">

                <img class="w-100 h-100" src="{{asset($danhmuc->ANH_NH)}}" alt="{{$danhmuc->TEN_NH}}" />
              </a>
             
            </div>
            <a href="{{url('trang-chu/danhmuc/'.$danhmuc->MA_NH)}}" class="text-decoration-none text-black"> <p class="mb-0 flex-column mt-2">{{$danhmuc->TEN_NH}}</p></a>
           
          </div>
       @endif
          @endforeach
         
        </div>

     
      </div>

      <!--  Kết Thúc Danh Mục Sản Phẩm -->

    

      <!-- Bắt Đầu Sản Phẩm Nổi Bật -->

      <div class="row mx-0 mt-4" style="background-color: #ffffff">
        <div class="d-flex flex-column w-100 pt-4 pb-2">
          <div class="d-flex justify-content-between w-100 px-4 pb-2">
            <h4 style="color: #888">SẢN PHẨM NỔI BẬT</h4>
            <div class="d-flex align-items-center" style="color: #f53d2d">
              <span> Lihat Semua </span>
              <span class="h4 mb-0 ml-2">></span>
            </div>
          </div>
          <div class="home-product" >
            <div class="row sm-gutter">

              <div class="col l-2-4 m-4 c-6">
                <a href="#" class="home-product-item">
                  <div class="home-product-item__img" style="background-image: url(https://placeimg.com/320/320/tech);">
                  </div>
                  <h4 class="home-product-item__name">
                    Bộ kem đặc trị vùng mắt Ohui Age Recovery Wrinkle Cut
                    Serum.
                  </h4>
                  <div class="home-product-item__price">
                    <span class="home-product-item__price-old">2.300.000đ</span>
                    <span class="home-product-item__price-current">2.070.000đ</span>
                  </div>
                  <div class="home-product-item__action">
                    <span class="home-product-item__like home-product-item__like--liked">
                      <i class="home-product-item__like-icon-empty far fa-heart"></i>
                      <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                    </span>
                    <div class="home-product-item__rating">
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="home-product-item__sold">88 Đã bán</div>
                  </div>
                  <div class="home-product-item__origin">
                    <span class="home-product-item__brand">Whoo</span>
                    <span class="home-product-item__origin-name">Hàn Quắc</span>
                  </div>
                  <div class="home-product-item__favourite">
                    <i class="fas fa-check "></i>
                    <span>Yêu thích</span>
                  </div>
                  <div class="home-product-item__sale-off">
                    <span class="home-product-item__sale-off-percent">43%</span>
                    <span class="home-product-item__sale-off-label">GIẢM</span>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Kết Thúc Sản Phẩm Nổi Bật -->

      <!-- Sản Phẩm Mới -->

      <div class="row mx-0 mt-4" style="background-color: #ffffff">
        <div class="d-flex flex-column w-100 pt-4 pb-2">
          <div class="d-flex justify-content-between w-100 px-4 pb-2">
            <h4 style="color: #888">SẢN PHẨM MỚI</h4>
            <div class="d-flex align-items-center" style="color: #f53d2d">
              <span> Lihat Semua </span>
              <span class="h4 mb-0 ml-2">></span>
            </div>
          </div>
          <div class="home-product" >
            <div class="row sm-gutter">

              <div class="col l-2-4 m-4 c-6">
                <a href="#" class="home-product-item">
                  <div class="home-product-item__img" style="background-image: url(https://placeimg.com/320/320/tech);">
                  </div>
                  <h4 class="home-product-item__name">
                    Bộ kem đặc trị vùng mắt Ohui Age Recovery Wrinkle Cut
                    Serum.
                  </h4>
                  <div class="home-product-item__price">
                    <span class="home-product-item__price-old">2.300.000đ</span>
                    <span class="home-product-item__price-current">2.070.000đ</span>
                  </div>
                  <div class="home-product-item__action">
                    <span class="home-product-item__like home-product-item__like--liked">
                      <i class="home-product-item__like-icon-empty far fa-heart"></i>
                      <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                    </span>
                    <div class="home-product-item__rating">
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="home-product-item__sold">88 Đã bán</div>
                  </div>
                  <div class="home-product-item__origin">
                    <span class="home-product-item__brand">Whoo</span>
                    <span class="home-product-item__origin-name">Hàn Quắc</span>
                  </div>
                  <div class="home-product-item__favourite">
                    <i class="fas fa-check "></i>
                    <span>Yêu thích</span>
                  </div>
                  <div class="home-product-item__sale-off">
                    <span class="home-product-item__sale-off-percent">43%</span>
                    <span class="home-product-item__sale-off-label">GIẢM</span>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Kết Thúc Sản Phẩm Mới -->


@endsection