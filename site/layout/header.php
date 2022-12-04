<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

    html,
    body {
        height: 100%;
        min-height: 100%;

        font-family: 'Noto Sans', sans-serif;

    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }


    .page-wrapper button .cart-item:before {
        content: "1";
        display: block;
        line-height: 24px;
        height: 24px;
        width: 24px;
        font-family: 'Noto Sans', sans-serif;
        font-size: 10px;
        font-weight: 600;
        background: #242424;
        color: white;
        border-radius: 20px;
        text-align: center;
    }


    .cart {

        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

    }



    .cart:before {
        content: attr(data-totalitems);
        font-family: 'Noto Sans', sans-serif;
        font-size: 10px;
        font-weight: 600;
        position: absolute;
        top: -5px;
        right: -5px;
        background: #242424;
        line-height: 24px;
        padding: 0 5px;
        height: 24px;
        min-width: 24px;
        color: white;
        text-align: center;
        border-radius: 24px;
    }

    .page-wrapper button.sendtocart .cart-item {
        display: block;
        animation: xAxis 1s forwards cubic-bezier(1, 0.44, 0.84, 0.165);
    }

    .page-wrapper button.sendtocart .cart-item:before {
        animation: yAxis 1s alternate forwards cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    @keyframes xAxis {
        100% {
            transform: translateX(calc(50vw - 105px));
        }
    }

    @keyframes yAxis {
        100% {
            transform: translateY(calc(-50vh + 75px));
        }
    }

    .cart.shake {
        animation: shakeCart 0.4s ease-in-out forwards;
    }

    @keyframes shakeCart {
        25% {
            transform: translateX(6px);
        }

        50% {
            transform: translateX(-4px);
        }

        75% {
            transform: translateX(2px);
        }

        100% {
            transform: translateX(0);
        }
    }

    .login {
        position: fixed;
        width: 500px;
        right: -500px;
        height: 100%;
        background-color: white;
        animation-name: mymove;
        animation-duration: 1.5s;
        overflow: auto;
    }




    .login {

        right: 0px;
        position: fixed;
        z-index: 1;
    }

    .videomain {

        left: 0;
        right: 0;


    }




    @keyframes mymove {
        from {
            right: -500px;
        }

        to {
            right: 0px;
        }
    }
</style>

<body>
    <div class="mx-auto max-w-screen-2xl">

        <div class="login hidden px-12" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
        'Open Sans', 'Helvetica Neue', sans-serif" id="content">
            <div class="my-4">
                <?php 
                if (!isset($_SESSION['dangky'])) {
                    echo '
                    <div class="flex justify-between items-center">
                    <h1 class="font-bold text-2xl">ĐĂNG NHẬP</h1>

                    <button class="border-[1px] border-gray-200 text-3xl px-4 py-2" id="btn1">X</button>
                </div>
                <hr>
                <form method="post" action="index.php?act=signin">
                    <h3 class="font-semibold mt-4"> TÔI ĐÃ CÓ TÀI KHOẢN</h3>
                    <div class="py-6 space-y-4">
                        <label for="">Tên tài khoản *</label><br>
                        <input type="text" name="name"  placeholder="" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class=" py-4 space-y-4">
                        <label for="">Mật khẩu *</label><br>
                        <input type="password" name="password"  placeholder="*******" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <li class="list-none"><a href=""><u>Quên mật khẩu ?</u></a></li>
                    <input type="submit" value="Đăng Nhập" name="signin" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">
                </form>
                <hr>
                <div class="space-y-10 my-10">
                    <h3 class="font-semibold my-4">TÔI KHÔNG CÓ TÀI KHOẢN ?</h3>
                    <span>Tận hưởng các lợi ích bổ sung và trải nghiệm phong phú hơn bằng cách tạo tài khoản cá
                        nhân</span>
                    <button type="submit" class="hover:bg-[#EAE8E4] hover:text-black  bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]"><a href="user.php">Tạo
                        tài khoản</a></button>
                </div>'
                    ;
                }
                else {
                    echo '
                    <div class="flex justify-between items-center">
                    <h1 class="font-bold text-2xl">ĐĂNG XUẤT</h1>

                    <button class="border-[1px] border-gray-200 text-3xl px-4 py-2" id="btn1">X</button>
                </div>
                <hr>
                <form method="post" action="index.php?act=signout">
                 
                    <input type="submit" value="Đăng xuất" name="signout" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">
                </form>
                ';
                }
                ?>
                
            </div>
        </div>
    </div>

    <div class="videomain" id="videomain">
        <div class="" style="font-family: 'Courier New', Courier, monospace;">
            <div class="logo 	position: relative max-w-[1080px] mx-auto grid justify-between items-center grid-cols-3 my-5 mb-10">

                <div class="flex items-center gap-10">

                    <button id="button"><img src="../upload/menu.svg" alt="" class="w-6"></button>
                <button id="tim_kiem">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 19" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
                <div class="items-center text-center text-[30px] ">
                    <a href="index.php">Royal Center</a>
                </div>
                <div class="flex gap-10 justify-end items-center">
                    <button id="btn2" class="font-black text-center text-[16px]"> <?php echo isset($_SESSION['dangky']) ? 'Chào: ' . $_SESSION['dangky'] :  'ACCOUNT' ?></button>
                    <a href="index.php?act=viewcart">

                        <div id="cart" class="cart" data-totalitems="0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 3 24 20" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-right">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="list-none hidden flex justify-center space-x-8 my-10 " id="menu">
            <li><a class="hover:underline" href="index.php">Trang chủ</a></li>
            <li><a class="hover:underline" href="index.php?act=san_pham">Sản phẩm</a></li>
            <li><a class="hover:underline" href="">Giới Thiệu</a></li>
            <li><a class="hover:underline" href="">Liên hệ</a></li>
            <li><a class="hover:underline" href="">Tin Tức</a></li>

        </div>
        <div class="list-none hidden flex justify-center space-x-8 my-10 " id="tk">
        <form action="index.php?act=san_pham" method="post">
        <input type="text" placeholder="Tìm kiếm sản phẩm" name="kw">
        <button type="submit" name="timkiem">Tìm Kiếm</button>
       
        </form>
    </div>
    <script>
        const tk = document.getElementById("tk");
        const tim_kiem = document.getElementById("tim_kiem");

        tim_kiem.addEventListener("click", function() {
            tk.classList.toggle("hidden");
        });
    </script>
        <script>
            const menu = document.getElementById("menu");
            const button = document.getElementById("button");

            button.addEventListener("click", function() {
                menu.classList.toggle("hidden");
            });
        </script>