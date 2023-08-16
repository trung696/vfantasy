<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chuyển Nhượng</title>
    <link rel="stylesheet" href="{{ asset('asset/chuyennhuong.css') }}" />
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

      <div class="flex justify-content-evenly vfatasy-menu pill">
          <div class="my-auto navb-content d-none d-xl-block">
              <a href="">Giới thiệu</a>
          </div>
          <div class="my-auto navb-content d-none d-xxl-block">
              <a href="">Hướng dẫn</a>
          </div>
          <div class="my-auto navb-content">
              <a href="">Điểm số</a>
          </div>
          <div class="my-auto navb-content d-none d-xxl-block">
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

 <!-- start modal  -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header d-none d-md-block">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-none d-md-block">
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
      <div class="modal-body d-none d-md-block">
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
      <div class="modal-footer d-none d-md-block">

        <table class="table" style=" border-collapse: separate;border-spacing: 0 10px;">
          <thead>
            <tr>
              <td style="font-size: 11px;font-weight: 400;">Vòng</td>
              <td></td>
              <td></td>
              <td class="text-center" style="font-size: 11px;font-weight: 400;">Kết quả</td>
              <td></td>
              <td></td>
              <td style="font-size: 11px;font-weight: 400;">Tổng điểm</td>
            </tr>
          </thead>
          <tbody>
            <tr id="tab-1" class="table-gr-background" onclick = "fun(this.id)" >
              <th>18</th>
              <th colspan="2" class="win-team text-end align-middle">Nam Định</th>
              <th><div class="rounded text-center" style="background-color: #10003F; color: white;">1-0</div></th>
              <th colspan="2" class="lose-team text-start align-middle">Sông Lam Nghệ An</th>
              <th >100</th>
            </tr>
            <tr class="info-tab-1 info-table" style="display: none;">
                <th colspan="5" class="tab-name">Tiêu chí</th>
                <th class="tab-count">Giá trị</th>
                <th class="tab-point">Điểm</th>
            </tr>
            <tr class="info-tab-1" style="display: none;">
                <th colspan="5" class="tab-name" >Xuất hiện trong trận (số phút)</th>
                <th class="tab-count">70</th>
                <th class="tab-point">40</th>
            </tr>
            <tr class="info-tab-1" style="display: none;">
                <th colspan="5" class="tab-name">Bàn thắng</th>
                <th class="tab-count">2</th>
                <th class="tab-point">200</th>
            </tr>
            <tr class="info-tab-1" style="display: none;">
                <th colspan="5" class="tab-name">Thẻ vàng</th>
                <th class="tab-count">1</th>
                <th class="tab-point">-20</th>
            </tr>
            <tr class="info-tab-1" style="display: none;">
                <th colspan="5" class="tab-name">Cầu thủ xuất sắc</th>
                <th class="tab-count">1</th>
                <th class="tab-point">100</th>
            </tr>
            <tr id="tab-2" class="table-gr-background " onclick = "fun(this.id)">
                <th>18</th>
                <th colspan="2" class="lose-team text-end align-middle">Nam Định</th>
                <th><div class="rounded text-center" style="background-color: #10003F; color: white;">1-2</div></th>
                <th colspan="2" class="win-team text-start align-middle">Hà Nội FC</th>
                <th>100</th>

            </tr>
            <tr class="info-tab-2 info-table" style="display: none;">
                <th colspan="5" class="tab-name">Tiêu chí</th>
                <th class="tab-count">Giá trị</th>
                <th class="tab-point">Điểm</th>
            </tr>
            <tr class="info-tab-2" style="display: none;">
                <th colspan="5" class="tab-name" >Xuất hiện trong trận (số phút)</th>
                <th class="tab-count">70</th>
                <th class="tab-point">40</th>
            </tr>
            <tr class="info-tab-2" style="display: none;">
                <th colspan="5" class="tab-name">Bàn thắng</th>
                <th class="tab-count">2</th>
                <th class="tab-point">200</th>
            </tr>
            <tr class="info-tab-2" style="display: none;">
                <th colspan="5" class="tab-name">Thẻ vàng</th>
                <th class="tab-count">1</th>
                <th class="tab-point">-20</th>
            </tr>
            <tr class="info-tab-2" style="display: none;">
                <th colspan="5" class="tab-name">Cầu thủ xuất sắc</th>
                <th class="tab-count">1</th>
                <th class="tab-point">100</th>
            </tr>
            <tr id="tab-3" class="table-gr-background " onclick = "fun(this.id)" >
              <th>18</th>
              <th colspan="2" class="win-team text-end align-middle">Nam Định</th>
              <th><div class="rounded text-center" style="background-color: #10003F; color: white;">1-0</div></th>
              <th colspan="2" class="lose-team text-start align-middle">Sông Lam Nghệ An</th>
              <th>100</th>
            </tr>
            <tr class="info-tab-3 info-table" style="display: none;">
                <th colspan="5" class="tab-name">Tiêu chí</th>
                <th class="tab-count">Giá trị</th>
                <th class="tab-point">Điểm</th>
            </tr>
            <tr class="info-tab-3" style="display: none;">
                <th colspan="5" class="tab-name" >Xuất hiện trong trận (số phút)</th>
                <th class="tab-count">70</th>
                <th class="tab-point">40</th>
            </tr>
            <tr class="info-tab-3" style="display: none;">
                <th colspan="5" class="tab-name">Bàn thắng</th>
                <th class="tab-count">2</th>
                <th class="tab-point">200</th>
            </tr>
            <tr class="info-tab-3" style="display: none;">
                <th colspan="5" class="tab-name">Thẻ vàng</th>
                <th class="tab-count">1</th>
                <th class="tab-point">-20</th>
            </tr>
            <tr class="info-tab-3" style="display: none;">
                <th colspan="5" class="tab-name">Cầu thủ xuất sắc</th>
                <th class="tab-count">1</th>
                <th class="tab-point">100</th>
            </tr>
            <tr id="tab-4" class="table-gr-background" onclick = "fun(this.id)" >
              <th>18</th>
              <th colspan="2" class="win-team text-end align-middle">Nam Định</th>
              <th><div class="rounded text-center" style="background-color: #10003F; color: white;">1-0</div></th>
              <th colspan="2" class="lose-team text-start align-middle">Sông Lam Nghệ An</th>
              <th>100</th>
            </tr>
            <tr class="info-tab-4 info-table" style="display: none;">
                <th colspan="5" class="tab-name">Tiêu chí</th>
                <th class="tab-count">Giá trị</th>
                <th class="tab-point">Điểm</th>
            </tr>
            <tr class="info-tab-4" style="display: none;">
                <th colspan="5" class="tab-name" >Xuất hiện trong trận (số phút)</th>
                <th class="tab-count">70</th>
                <th class="tab-point">40</th>
            </tr>
            <tr class="info-tab-4" style="display: none;">
                <th colspan="5" class="tab-name">Bàn thắng</th>
                <th class="tab-count">2</th>
                <th class="tab-point">200</th>
            </tr>
            <tr class="info-tab-4" style="display: none;">
                <th colspan="5" class="tab-name">Thẻ vàng</th>
                <th class="tab-count">1</th>
                <th class="tab-point">-20</th>
            </tr>
            <tr class="info-tab-4" style="display: none;">
                <th colspan="5" class="tab-name">Cầu thủ xuất sắc</th>
                <th class="tab-count">1</th>
                <th class="tab-point">100</th>
            </tr>
            <tr id="tab-5" class="table-gr-background" onclick = "fun(this.id)" >
              <th>18</th>
              <th colspan="2" class="win-team text-end align-middle">Nam Định</th>
              <th><div class="rounded text-center" style="background-color: #10003F; color: white;">1-0</div></th>
              <th colspan="2" class="lose-team text-start align-middle">Sông Lam Nghệ An</th>
              <th>100</th>
            </tr>
            <tr class="info-tab-5 info-table" style="display: none;">
                <th colspan="5" class="tab-name">Tiêu chí</th>
                <th class="tab-count">Giá trị</th>
                <th class="tab-point">Điểm</th>
            </tr>
            <tr class="info-tab-5" style="display: none;">
                <th colspan="5" class="tab-name" >Xuất hiện trong trận (số phút)</th>
                <th class="tab-count">70</th>
                <th class="tab-point">40</th>
            </tr>
            <tr class="info-tab-5" style="display: none;">
                <th colspan="5" class="tab-name">Bàn thắng</th>
                <th class="tab-count">2</th>
                <th class="tab-point">200</th>
            </tr>
            <tr class="info-tab-5" style="display: none;">
                <th colspan="5" class="tab-name">Thẻ vàng</th>
                <th class="tab-count">5</th>
                <th class="tab-point">-20</th>
            </tr>
            <tr class="info-tab-5" style="display: none;">
                <th colspan="5" class="tab-name">Cầu thủ xuất sắc</th>
                <th class="tab-count">5</th>
                <th class="tab-point">100</th>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="d-block d-md-none">
        <h3>Lựa chọn cầu thủ</h3>
        <select name="" id="" class="form-control form-select form-rounded mt-1" value="">
          <option value="" selected>Tất cả cầu thủ</option>
        </select>
        <div class="form-control form-select form-rounded mt-1" style="line-height: 32px">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0"> Sắp xếp theo <strong>Tổng điểm</strong>
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
        <div class="form-control form-select form-rounded mt-1 mb-1" style="line-height: 32px">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0"> Giá <strong>trên 8tr</strong>
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
        <form action="form-control">
          <input type="search" placeholder="Search..." />
          <button type="submit"> Search </button>
        </form>
        <p class="search-detail mt-2">Kết quả 329 cầu thủ</p>
        <div class="bench">
          <div class="d-flex justify-content-center">
            <button class="rounded border-0 w-50 mb-2">Tiền đạo</button>
          </div>
          <table class="table border">
            <tbody>
              <tr class="info-block">
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bench">
          <div class="d-flex justify-content-center">
            <button class="rounded border-0 w-50 mb-2">Tiền vệ</button>
          </div>
          <table class="table border">
            <tbody>
              <tr class="info-block">
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bench">
          <div class="d-flex justify-content-center">
            <button class="rounded border-0 w-50 mb-2">Hậu vệ</button>
          </div>
          <table class="table border">
            <tbody>
              <tr class="info-block">
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bench">
          <div class="d-flex justify-content-center">
            <button class="rounded border-0 w-50 mb-2">Thủ môn</button>
          </div>
          <table class="table border">
            <tbody>
              <tr class="info-block">
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="btn rounded-circle border border-1 mt-3">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
                </th>
                <td class="player-img">
                  <img src="images/player1.png" alt="" class="rounded-circle pt-3" />
                </td>
                <td class="player-info">
                  <div class="player-name">Almada Monteiro Elton</div>
                  <div class="place-price">CAHN &#x2022; 10tr</div>
                </td>
                <td>
                  <p class="mt-4">1.225</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="pagination">
          <a href="#">Đầu</a>
          <a href="#">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">...</a>
          <a href="#">8</a>
          <a href="#">Cuối</a>
        </div>
</div>
    </div>

  </div>
</div>
 <!-- end modal -->
    <div class="container" style="margin-left: auto; margin-right: auto">
      <div class="row">
        <div class="col-md-9" >
            <div class="err-message d-none">
                <img src="./images/caution.png" alt="">
                Đội hình có nhiều hơn 3 cầu thủ đội Viettel
            </div>
          <!-- start course 1 -->
            <div class=" main-box w-100 pt-4 mt-4" style="position: sticky;  top: 0;" >
                    <table class="header-info mx-auto mb-4" >
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Thời điểm vòng 17 bắt đầu</th>
                                <th class="text-center" scope="col">Giá trị đội hình</th>
                                <th class="text-center" scope="col">Ngân quỹ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center">24/03/2023 - 17:00</th>
                                <th class="text-center">10tr</th>
                                <th class="text-center">110tr</th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="s-field  mx-auto ">
                      <div class="">
                        <div class="h-100 position-relative"  >
                          <div class="ads mx-auto d-flex justify-content-between"  >
                            <img src="./images/ad_type1.png" alt="" class="d-inline-block">
                            <div class="line-cf line-small position-absolute" >Tiền đạo</div>
                            <img src="images/ads.png" alt="" class="d-inline-block">
                          </div>
                        </div>
                      <div class="container mt-3 ">
                        <div class="row">
                          <div class="col-xxl-5 col-xl-5 col-md-8 row col mx-auto justify-content-center">
                            <div class="col-md col-30 ">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-30">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-30">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="line-cf mx-auto mt-2">Tiền vệ</div>
                      <div class=" player-6s container mt-2 ">
                        <div class="row">
                          <div class="col-xl-6 col row mx-auto justify-content-center">
                            <div class="col-md col-25 ">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25 mtm-1">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25 mtm-1">
                              <img src="images/close.png" alt="" class="position-absolute close-icon">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="selected-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="line-cf mx-auto mt-3">Hậu vệ</div>
                      <div class=" player-6s container mt-2 ">
                        <div class="row">
                          <div class="col-xl-6 col row mx-auto justify-content-center ">
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25 mtm-1">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md col-25 mtm-1">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="line-cf mx-auto mt-3">Thủ môn</div>
                      <div class=" player-6s container mt-2 ">
                        <div class="row">
                          <div class="col-md-5 col-xl-2 col row mx-auto justify-content-center my-1">

                            <div class="col-md-4 col-xl-2 col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                            <div class="col-md-4 col-xl-2 col-25">
                              <img src="images/anomus.png" alt="" class=" field-img rounded-circle mx-auto d-block mb-1">
                              <button class="select-player rounded-top w-100 mx-auto d-block lh-sm">
                                Chọn
                              </button>
                              <div class="field-info rounded-bottom">
                                <p class="mb-0 text-center lh-sm">-</p>
                                <p class="mb-0 text-center lh-sm">-</p>
                              </div>
                            </div>
                        </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4 pb-3">
                      <button class="complete ">
                        Hoàn thành đội hình
                      </button>
                    </div>
                  </div>


        </div>
        <div class="col-md-3 mt-3 d-none d-md-block container">
          <h3>Lựa chọn cầu thủ</h3>
          <select name="" id="" class="form-control form-select form-rounded mt-1" value="">
            <option value="" selected>Tất cả cầu thủ</option>
          </select>
          <div class="form-control form-select form-rounded mt-1" style="line-height: 32px">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0"> Sắp xếp theo <strong>Tổng điểm</strong>
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
          <div class="form-control form-select form-rounded mt-1 mb-1" style="line-height: 32px">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0"> Giá <strong>trên 8tr</strong>
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
          <form action="form-control">
            <input type="search" placeholder="Search..." />
            <button type="submit"> Search </button>
          </form>
          <p class="search-detail mt-2">Kết quả 329 cầu thủ</p>


          <div class="tien-dao row border mt-1 mx-auto ">
            <div class="col-2 mt-3">
                <div class="btn rounded-circle border border-1 ">
                    <i class="fa-solid fa-plus" style="color: orange"></i>
                  </div>
            </div>
            <div class="col-8 d-xxl-flex left-m">
                <div class="col-xxl-3 d-block mt-3">
                    <img src="images/player1.png" alt="" class="rounded-circle"/>
                </div>
                <div class="col-xxl d-none"></div>
                <div class="col-xxl-8 col-sm-8 d-xl-inline d-block ">
                    <div class="player-name">Almada Monteiro Elton</div>
                    <div class="place-price">CAHN &#x2022; 10tr</div>
                </div>
            </div>
            <div class="col-2 mt-4" style="padding-left: 0"> 1.225 </div>
          </div>
          <div class="pagination">
            <a href="#">Đầu</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">...</a>
            <a href="#">8</a>
            <a href="#">Cuối</a>
          </div>
        </div>
      </div>
    </div>

    <script>

        function fun(clicked_id) {
         let res_id = "info-" +clicked_id;
         const lops = document.getElementsByClassName(res_id);
         console.log(lops[0].style.display);
         for(let i =0; i<lops.length;i++){
            if (lops[i].style.display === "none") {
          lops[i].style.display = "table-row";
          document.getElementById(clicked_id).className = "table-og-background";

        } else {
          lops[i].style.display = "none";
          document.getElementById(clicked_id).className = "table-gr-background";

        }
         }
        }
    </script>
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
