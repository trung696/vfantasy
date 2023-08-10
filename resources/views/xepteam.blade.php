<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/xepteam.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="menu">
      <header class="d-flex justify-content-between header pt-3">
        <div class="col-3"></div>
        <div class="col-6 club-logo d-none d-sm-block ">
          <img src="/images/club-logo.png" />
        </div>
        <div class="col-3 sign">
          <div class="" style="float: right; margin-right: 10%; margin-top: 3%; color:#FFB72D">
            <div class="d-sm-inline-block d-none "> Xin chào , <a href="" style="color: #FFB72D; text-decoration: none;">&nbsp; Bách Nguyễn</a></div>
            <img src="/images/avatar.png" />
          </div>
        </div>
      </header>
      <div class="text-center v-league">
        <p class="top-banner-text"> Official V.league 1 Fantasy Football Application </p>
        <img src="./images/vleague1.png" alt="" class="fanta-mb" />
      </div>
        <div class="ds-small">
            <div style="margin-left: 20%; margin-top: 5%" >
                <p class="d-md-none sm-fonts">Official V.league 1</p>
                <p class="d-md-none sm-fonts"> Fantasy Football Application</p>
              </div>
          </div>
      <div class="partner">
        <div class="d-flex justify-content-between ">
            <img src="/images/partner.png" style="margin-left: -10%"/>
            <div >
                <p class="sm-fonts"> ĐỐI TÁC </p>
                <p class="sm-fonts" > VẬN HÀNH </p>
            </div>
        </div>
      </div>
        <div class="vfatasy">
          <img src="/images/vfantasy.png" class="d-inline "/>
          <p class="fanta d-none d-sm-block mb-3">VFANTASY</p>
          <select class="form-select form-rounded" id="team-select">
            <option value="">GoonerBBB</option>
          </select>
        </div>

    <div class="flex justify-content-evenly vfatasy-menu pill">
        <div class="my-auto navb-content d-none d-md-block">
            <a href="">Giới thiệu</a>
        </div>
        <div class="my-auto navb-content d-none d-md-block">
            <a href="">Hướng dẫn</a>
        </div>
        <div class="my-auto navb-content">
            <a href="">Điểm số</a>
        </div>
        <div class="my-auto navb-content d-none d-md-block">
            <a href="">Thiết lập đội hình</a>
        </div>
        <div class=" navb-content active-navb" style="margin-top:17.5px  ">
            <a href="" class="">Chuyển nhượng</a>
        </div>
        <div class="my-auto navb-content d-none d-md-block">
            <a href="">Giải đấu</a>
        </div>
        <div class="my-auto navb-content d-none d-md-block">
            <a href="">Thống kê</a>
        </div>
        <div class="my-auto navb-content d-block d-md-none" style="content:'\2807'">
            <a href="">Thêm &#10247;</a>
        </div>
    </div>




    <div class="container" style="margin-left: auto; margin-right: auto">
      <div class="row">
        <div class="col-md-9 ">
          <!-- start course 1 -->
            <div class=" main-box w-100 pt-4 mt-4">
                    <div class="header-info mx-auto mb-4 text-center" >
                        <strong>Vòng đấu 17</strong> thời điểm bắt đầu <strong>24/03/2023 - 17:00</strong>
                    </div>
                    <div class="d-flex justify-content-md-evenly px-3">
                      <div class=" wi-100s form-select form-rounded mt-1 h-50 d-none d-md-block " >
                        <ul class="navbar-nav ">
                          <li class="nav-item dropdown ">
                            <a class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0"> Đội hình <strong style="padding-left: 10%;"> 4-5-1</strong>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Another action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="wi-100s" style="margin-right: 5px">
                        <p class="text-center d-block d-md-none">Đội hình</p>
                      <div class="  form-select form-rounded mt-1 h-50 d-block d-md-none " >

                        <ul class="navbar-nav ">
                          <li class="nav-item dropdown ">

                            <a class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0">  <strong style="padding-left: 10%;"> 4-5-1</strong>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Another action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      </div>

                      <div class="score-count mb-2 border border-1 text-center" style="border-radius: 16px;">
                        <p style="font-weight: 700; font-size: 32px; margin-bottom: 0;">0</p>
                        <p class="mx-4 ">điểm</p>
                      </div>
                      <div class="wi-100s" style="margin-left: 5px">
                        <p class="text-center d-block d-md-none">Hiển thị</p>
                      <div class="  form-select form-rounded mt-1 h-50 d-block d-md-none " >

                        <ul class="navbar-nav ">
                          <li class="nav-item dropdown ">

                            <a class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0">  <strong style="padding-left: 10%;"> TÊN ĐỘI</strong>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Another action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      </div>
                      <div class=" wi-100s form-select form-rounded mt-1 h-50 d-none d-md-block " >
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0"> Hiển thị <strong style="padding-left: 10%;"> TÊN ĐỘI</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Another action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                    </div>
                    <div class="s-field  mx-auto ">

                        <div class="h-100" >
                          <div class="ads container d-flex justify-content-between " >
                            <img src="./images/ad_type1.png" alt="" class="d-inline-block">
                            <!-- <div class="line-cf position-absolute" style="margin-top: 2%; margin-left: 25%;">Tiền đạo</div> -->
                            <img src="images/ads.png" alt="" class="d-inline-block">
                          </div>
                        </div>
                      <div class="container mb-2">
                        <div class="row">
                          <div class="col-md-5 col row mx-auto">
                            <div class="col-md-4 col-30 mx-auto">
                              <img src="images/CAHN.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button type="button" class="select-player rounded-top w-100 mx-auto d-block lh-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <!-- <div class="line-cf mx-auto mt-2">Tiền vệ</div> -->
                      <div class=" player-6s container mt-5 mb-2">
                        <div class="row">
                          <div class=" col-md-5 col row mx-auto justify-content-center">

                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/change.png" alt="" class="position-absolute" style="margin-left:3.7%; margin-top: -0.2%;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block" style="font-size: 12px; line-height: 18px;">
                                André Vieira
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <!-- <div class="line-cf mx-auto mt-3">Hậu vệ</div> -->
                      <div class=" player-6s container mt-5 mb-2 ">
                        <div class="row">
                          <div class=" col-md-5 col row mx-auto justify-content-center">
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            <div class="col-md-2 col-20" style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block " style="font-size: 12px; line-height: 18px;">
                                Tiến Dũng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center " style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <!-- <div class="line-cf mx-auto mt-3">Thủ môn</div> -->
                      <div class=" player-6s container mt-5 mb-2 ">
                        <div class="row" style="padding-bottom: 30px;">
                          <div class=" col-md-5 col row mx-auto justify-content-center">
                            <div class="col-md-2 col-20 " style="padding-left: 0;">
                              <img src="images/BinhDuong.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block  " style="font-size: 12px; line-height: 18px;">
                                Juy Hoàng
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center" style="font-size: 10px; line-height: 18px;">VTFC (A)</p>
                              </div>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4 pb-3">
                      <div class="row col-md-8">
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Thủ môn</p>
                          <div >
                            <img src="images/BinhDinh.png" alt="" >
                          </div>
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p>
                        </div>
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Thủ môn</p>
                          <img src="images/HaTinh.png" alt="">
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p></div>
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Hậu vệ</p>
                          <img src="images/BinhDinh.png" alt="">
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p></div>
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Hậu vệ</p>
                          <img src="images/HaiPhong.png" alt="">
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p></div>
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Tiền vệ</p>
                          <img src="images/BinhDinh.png" alt="">
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p></div>
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Tiền vệ</p>
                          <img src="images/HaiPhong.png" alt="">
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p></div>
                        <div class="col-md col-25" style="text-align: center;">
                          <p style="font-size: 9px; opacity: 50%; margin-bottom: 5px">Tiền đạo</p>
                          <img src="images/BinhDinh.png" alt="">
                          <p style="font-size: 12px; margin-bottom:0">Gia Việt</p>
                          <p style="font-size: 12px;"> VTFC (A)</p></div>
                      </div>
                    </div>
                  </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class=" d-flex justify-content-end" id="exampleModalLabel">
                  <div>
                    <img src="images/avapopup.png" alt="" class="w-100">
                  </div>
                  <div class=" w-100" style="margin-left: 10%;">
                    <p style="font-size: 12px;font-weight: 400; margin-bottom: 0;">Hậu vệ</p>
                    <p style="font-size: 20px;font-weight: 600; margin-bottom: 0;">Andres Vieina</p>
                    <p style="font-size: 12px;font-weight: 600; margin-bottom: 0;">CLB SHB Đà Nẵng</p>
                    <p style="font-size: 12px;font-weight: 400; margin-bottom: 0;">vs HNFC (A)</p>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Tổng điểm</th>
                      <th>Điểm vòng 16</th>
                      <th>Giá</th>
                      <th>Sẵn sàng thi đấu</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1.225</th>
                      <th>300</th>
                      <th>7tr</th>
                      <th>Có</th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary">HỒ SƠ CẦU THỦ</button> -->
                <button type="button" class="py-3 modal-btn w-100">Hồ sơ cầu thủ</button>
                <button type="button" class="py-3 modal-btn w-100">Thay thế cầu thủ khác</button>

              </div>
            </div>
          </div>
        </div>
        <!-- End Modal -->
        <div class="col-md-3 mt-3">
          <div class="round" style="background-color: #F6F7FB; border-radius: 24px;">
            <div class="coach d-flex pt-3" style="margin-left: 10px;">
              <div>
                <img src="images/hlv.png" alt="" class=" rounded-circle " style="">
              </div>
              <div class="d-inline " style="margin-left: 5%;" >
                HLV
                <p class="mt-0" style="font-size: 18px; font-weight: 900;">Donald Trun</p>
              </div>
              <div class="d-flex align-items-center mb-2 " style=" margin-left: 25%; ">
                <img src="images/flag-vn.png" class="rounded" alt="" >
              </div>
            </div>
            <hr class="m-2">
            <table class=" coach-info table table-borderless mx-auto" style="width: 90%; ">
              <tbody>
                <tr>
                  <th>Tổng điểm</th>
                  <td><p class="text-end">12.410</p></td>
                </tr>
                <tr>
                  <th>Tổng điểm</th>
                  <td><p class="text-end">12.41</p></td>
                </tr>
                <tr>
                  <th>Tổng điểm</th>
                  <td><p class="text-end">12.41220</p></td>
                </tr>
                <tr>
                  <th>Tổng điểm</th>
                  <td><p class="text-end">12.410</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="round" style="background-color: #F6F7FB; border-radius: 24px; padding-top: 15px; padding-left: 15px;">
            <div style="font-weight: 400; font-size: 14px;">CLB YÊU THÍCH</div>
            <div style="font-weight: 900; font-size: 18px;">HANOI FC</div>
            <div class="text-center my-2">
              <img src="images/HnFC.png" alt="">
              <img src="images/HanoiAo.png" alt="">
            </div>
            <div class="text-center pb-3"><a href="#" style="text-decoration: none; color:black">Trang chủ <img src="images/arrow.png" alt="" class="ml-2"></a></div>
          </div>
          <div class="round mt-3" style="background-color: #F6F7FB; border-radius: 24px;">
          <table class="table cup">
            <thead>
              <tr>
                <th colspan="2" style="font-size: 14px; font-weight: 600;">Giải đấu đang tham gia</th>
                <th><button class="complete">Thêm giải</button></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="cup-content" >Hạng</th>
                <th class="cup-content" >Tên giải</th>
                <th></th>
              </tr>
              <tr>
                <th>5</th>
                <th class="cup-name">Hà Nội (CLB yêu thích)</th>
                <th class="text-center" style="float: right; margin-right: 10px;"><img src="images/arrow.png" alt=""></th>
              </tr>
              <tr>
                <th>1</th>
                <th class="cup-name">VFantasy - Datsan247</th>
                <th class="text-center" style="float: right; margin-right: 10px;"><img src="images/arrow.png" alt=""></th>
              </tr>
            </tbody>
          </table>

          <table class="table cup mt-3" >
            <thead>
              <tr>
                <th colspan="2" style="font-size: 14px; font-weight: 600;">Bảng xếp hạng chung</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="cup-content" >Hạng</th>
                <th class="cup-content" >Tên giải</th>
                <th></th>
              </tr>
              <tr>
                <th>5</th>
                <th class="cup-name" >Toàn Cầu</th>
                <th class="text-center" style="float: right; margin-right: 10px;" ><img src="images/arrow.png" alt=""></th>
              </tr>
              <tr>
                <th>1</th>
                <th class="cup-name">Việt Nam</th>
                <th class="text-center" ><img src="images/arrow.png" alt=""></th>
              </tr>
              <tr style="border-style:none;">
                <th>1</th>
                <th class="cup-name">Hà Nội (CLB yêu thích)</th>
                <th class="text-center"><img src="images/arrow.png" alt=""></th>
              </tr>
            </tbody>
          </table>
          </div>


        </div>
      </div>
    </div>
  </body>
</html>
