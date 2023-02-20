<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Tài Khoản Shopee_DQC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
    <link rel="icon" href="{{asset('frontend/assets/brand.png')}}">
</head>


<header>
    <div class="container">
        <div class="row p-4">
            <div class="col">
                
                <div class="d-inline mt-3">
        
          <img class="brand-img mr-2 img-fluid" src="{{asset('frontend/assets/brand.png')}}" style="width: 50px; height: 50px; border-radius: 5px;"   alt="" />
          <span class="text-brand"><a href="{{URL::TO('/trang-chu')}}" class="text-brand text-decoration-none fs-4" style="color: #ee4d2d; font-weight: bold;">Shopee</a></span>
       
                    <p class="d-inline fs-4 fw-bold p-4 mt-3">Đăng Nhập</p>
                </div>

            </div>
            <div class="col">
                <p class="text-end mt-3" style="color: #ee4d2d;;">Bạn cần giúp đỡ ?</p>
            </div>
        </div>
    </div>
</header>

<body>

    <div id="background-login">
        <div class="form-container container-fluid">
            <div class="text-start fs-3 ms-5 mt-3">Đăng Nhập</div>
            <form id="login-form" action="{{url('/trang-chu/kiem-tra-dang-nhap')}}" method="POST" >
              @csrf
                <div class="form-group">

                    <input type="text" name="username" id="username" placeholder="Email/Số điện thoại/Tên Đăng Nhập">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Mật Khẩu">

                    <?php 
                    use Illuminate\Support\Facades\Session;
                    
                     $message=Session::get('message');
                     if($message){
                      echo "<p id='canhbao'>$message</p>";
                       Session::put("message",null); //chỉ cho message hiển thị một lần thôi
                     }
                     ?> 
                </div>
                <input type="submit" value="Đăng Nhập">
                <div class="row">
                    <div class="col">
                        <small class="mx-5 text-primary">Quên mật khẩu</small>
                        <small class="mx-5 text-primary">Đăng nhập bằng SMS</small>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <hr style="flex-grow: 1;">
                        <small style="padding: 0 10px;">HOẶC</small>
                        <hr style="flex-grow: 1;">
                    </div>
                   

                </div>
            </form>
            <p class="d-inline">Bạn mới biết đến Shopee?</p><a href="dang-ki-tai-khoan" class="text-decoration-none">Đăng kí</a>
        </div>
    </div>
    <footer style="background-color: #fbfbfb;">
        <div class="container pt-5">
          <div class="d-flex justify-content-between" >
            <div class="d-flex flex-column">
              <strong class=" font-weight-bold">CHĂM SÓC KHÁCH HÀNG</strong>
              <p class="mb-1 mt-2 desc">Trung Tâm Trợ Giúp</p>
              <p class="mb-1 desc">Shopee Blog</p>
              <p class="mb-1 desc">Shopee Mall</p>
              <p class="mb-1 desc">Hướng Dẫn Mua Hàng</p>
            </div>
            <div class="d-flex flex-column ml-5">
              <strong class=" font-weight-bold">VỀ SHOPEE</strong>
              <p class="mb-1 mt-2 desc ">Giới Thiệu Về Shopee Việt Nam</p>
              <p class="mb-1 desc">Tuyển Dụng</p>
              <p class="mb-1 desc">Điều Khoản Shopee</p>
              <p class="mb-1 desc">Chính Sách Bảo Mật</p>
            </div>
            <div class="d-flex flex-column ml-5">
              <strong class=" font-weight-bold">THANH TOÁN</strong>
    
              <div class="d-flex align-items-center">
                <img src="assets/thanhtoan.png" alt="" width="240px" height="120px" class="mt-3"/>
              </div>
              <strong class=" font-weight-bold mt-4">ĐƠN VỊ VẬN CHUYỂN</strong>
    
              <div class="d-flex align-items-center">
                <img src="assets/vanchuyen.png" alt="" width="240px" height="120px" class="mt-3"/>
              </div>
            </div>
            <div class="d-flex flex-column ml-5">
              <strong class=" font-weight-bold">THEO DÕI CHÚNG TÔI TRÊN</strong>
              <div class="d-flex flex-column">
                <div class="d-flex align-items-center mt-3 ">
                  <img src="assets/facec.png" width="20" height="20" alt="" />
                  <span class="desc ml-3">Facebook</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <img src="assets/instagram.png" width="20" height="20" alt=""  class="bi bi"/>
                  <span class="desc ml-3">Instagram</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <img src="assets/facec.png" width="20" height="20" alt="" />
                  <span class="desc ml-3">Facebook</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column ml-5">
              <strong class=" font-weight-bold">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</strong>
              <div class="d-flex align-items-center mt-3">
                <img src="assets/barcode.png" alt="" />
                <div class="d-flex flex-column">
                  <img src="assets/goggle.png" alt="" />
                  <img src="assets/app.png" alt="" />
                </div>
              </div>
            </div>
          </div>

          <hr />

      <div class="d-flex justify-content-between mt-5 pb-3" style="color: #888">
        <span class="fs-6"> &copy; 2023 Shopee. Tất cả các quyền được bảo lưu. </span>
        <span class="fs-6">Quốc gia & Khu vực: Singapore | Indonesia | Đài Loan | Thái Lan | Malaysia |
          Việt Nam | Philipines |</span>
      </div>
        </div>
      </footer>
</body>
</html>