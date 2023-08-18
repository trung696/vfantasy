<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('asset/login.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="menu">
        <header class="d-flex justify-content-between header pt-3" id="vtop">
          <div class="col-3"></div>
          <div class="col-6 club-logo d-none d-xxl-block ">
            <img src="/images/club-logo.png"/>
          </div>
          <div class="col-3 sign">
            <div class="" style="float: right; margin-right: 10%; margin-top: 3%; color:#FFB72D">
              <div class="d-sm-inline-block d-none "><a href="/dangnhap" style="color: #FFB72D; text-decoration: none;"> Đăng nhập ,</a> <a href="/dangky" style="color: #FFB72D; text-decoration: none;">&nbsp; Đăng ký</a></div>
              <img src="/images/avatar.png" />
            </div>
          </div>
        </header>
        <div class="text-center v-league">
          <p class="top-banner-text "> Official V.league 1 Fantasy Football Application </p>
          <img src="./images/vleague1.png" alt="" class="fanta-mb" />
        </div>

        <div class="partner">
              <img src="/images/ons.png"/>
        </div>
          <div class="vfatasy" id="vfatasy">
            <img src="/images/vfantasy.png" class="d-inline d-none d-md-inline"/>
            <img src="/images/vfantasy_mobile.png" class="small-vfantasy d-inline d-md-none"/>

            <p class="fanta d-none d-xl-block mb-3">VFANTASY</p>

          </div>

      <div class=" d-flex vfatasy-menu pill">
            <div class="d-flex flex-grow-1 justify-content-center align-items-center">
                <p >Chào mừng đến với VFantasy</p>
            </div>

      </div>
    </div>
    <div class="container d-flex justify-content-center ">
        <div class="login-form d-block">
            <div class="email-form">
                <div class="login-label mb-3">TÊN ĐĂNG NHẬP</div>
                <input type="email" class="form-control-lg rounded-pill w-100 ip-form" id="exampleFormControlInput1" placeholder="Email hoặc số điện thoại của bạn">

            </div>
            <div class="email-form mt-3">
                <div class="login-label mb-3">MẬT KHẨU</div>
                <input type="password" class="form-control-lg rounded-pill w-100 ip-form" id="exampleFormControlInput1" placeholder="Mật khẩu ít nhất 8 kí tự">

            </div>
            <button type="button" class="bt-signin mt-4 w-100">ĐĂNG NHẬP</button>
            <div class="forget mt-4">
                <a href="#">Quên mật khẩu</a>
            </div>
            <p class="mt-5 mb-3 text-center">Hoặc</p>
            {{-- <a href="" class=" ons-sign d-inline-block w-100 " style="padding-left: 85px">
                <img src="images/partner.png" alt="" class="mx-auto d-inline-block align-middle">
                <div class="d-inline-block align-middle">
                <p class="ons-plus">Đăng nhập bằng</p>
                <p class="ons-plus">tài khoản onplus</p>
                </div>
            </a> --}}
            <button class="w-100 bt-8px">
                <img src="images/partner.png" alt="" class="mx-auto d-inline-block align-middle">
                <div class="d-inline-block align-middle">
                <p class="ons-plus">Đăng nhập bằng</p>
                <p class="ons-plus">tài khoản onplus</p>
                </div>
            </button>
            <div class="d-flex gap-2 mt-2 mb-3">
                <button class="w-50 p-2 w-signin bt-8px">
                    <img src="images/gg.png" alt="" class="d-inline-block align-middle" style="margin-right: 10px">
                    Google</button>
                <button class="w-50 p-2 w-signin bt-8px">
                    <img src="images/fb.png" alt="" class=" d-inline-block align-middle" style="margin-right: 10px">
                    Facebook</button>
            </div>


        </div>

    </div>
    <hr>
    <footer class="container" style="gap: 31px">
        <div class="d-flex">
            <p class="me-auto align-self-center" style="font-size: 14px;font-weight: 400;">© 2023 All Rights Reserved.</p>
            <a href="#vtop" class="align-self-center m-3" style="color: black; text-decoration: none;font-size: 14px;font-weight: 400;">BACK TO TOP</a>
            <img src="/images/vfantasy.png" alt="" class="" style="height: 57px">
        </div>
    </footer>
</body>
</html>
