
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="./client/views/assets/css/style.css" />
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid">
        <!-- HEADER -->
        <header class="wrap-header">
            <!-- logo -->
            <div class="logo-main text-center p-4 bg-logo">
                <a>
                    <img src="./client/views/assets/images/logo.png" alt="" width="300px" />
                </a>
            </div>
            <!-- menu main -->
            <div class="menu-top">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php?act=viewcart">
                            <img src="./client/views/assets/images/avt.png" alt="" width="40px;" class="rounded-pill" />
                        </a>
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active" href="javascript:void(0)">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=gioithieu" class="nav-link" href="javascript:void(0)">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=lienhe" class="nav-link" href="javascript:void(0)">Liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=gopy" class="nav-link" href="javascript:void(0)">Góp ý</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=hoidap" class="nav-link" href="javascript:void(0)">Hỏi đáp</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="text" placeholder="Nhập nội dung tìm kiếm" />
                                <button class="btn btn-primary" type="button">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
     <!-- container-row -->
     <div class="row">
   <!-- ARTICLE -->

   <article class="col-sm-9">
     <!-- slideshow -->

     <div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">CHI TIẾT GIỎ HÀNG</div>
<div class="card-body">
    <table class="table table-bordered">
        <tr class="table-dark ">
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Phân loại</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php 
    include "../guest/pdo.php";
    include "../guest/order.php";
    $id = $_GET['id'];
    $listorder_detail = loadone_order($id);
    order_detail($listorder_detail);
 ?>
    </table>
</div>
    </div>
    </article>
 <!-- FOOTER -->
 <footer class="bg-dark text-center text-white mt-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Form -->
          <section class="">
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Đăng ký nhận bản tin của chúng tôi</strong>
                  </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 col-12">
                  <!-- Email input -->
                  <div class="form-outline form-white mb-4">
                    <input
                      type="email"
                      id="form5Example29"
                      class="form-control"
                      placeholder="Địa chỉ email của bạn"
                    />
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-auto">
                  <!-- Submit button -->
                  <button
                    type="submit"
                    class="btn btn-outline-light mb-4 trans-04"
                  >
                    Đăng ký
                  </button>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>
          <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          © 2022 Copyright:
          <a class="trans-04 text-none txt-f hov-red" href="home.html"
            >X-Shop.com</a
          >
        </div>
        <!-- Copyright -->
      </footer>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
