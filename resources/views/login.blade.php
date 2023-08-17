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
              <div class="d-sm-inline-block d-none "> Xin chào , <a href="" style="color: #FFB72D; text-decoration: none;">&nbsp; Bách Nguyễn</a></div>
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
            <select class="form-select form-rounded" id="team-select">
              <option value="">GoonerBBB</option>
            </select>
          </div>

      <div class=" d-flex vfatasy-menu pill">
            <div class="d-flex flex-grow-1 justify-content-center align-items-center">
                <p >Chào mừng đến với VFantasy</p>
            </div>

      </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="login-form d-block">
            <div class="email-form">
                <div class="login-label">Tên đăng nhập</div>
                <input type="email" class="form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">

            </div>
            <div class="email-form">
                <div class="login-label">Mật khẩu</div>
                <input type="password" class="form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">

            </div>
            {{-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">
              </div> --}}

        </div>

    </div>
</body>
</html>
