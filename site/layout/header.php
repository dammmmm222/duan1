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
</style>

<body>
    <div class="" style="font-family: 'Courier New', Courier, monospace;">
        <div class="logo 	position: relative max-w-[1080px] mx-auto grid justify-between items-center grid-cols-3 my-5 mb-10">

            <div class="flex items-center gap-10">

                <button id="button"><img src="../upload/menu.svg" alt="" class="w-6"></button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 19" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

            </div>

            <div class="items-center text-center text-[30px] ">
                <a href="../index.php">Royal Center</a>
            </div>
            <div class="flex gap-10 justify-end items-center">
    <?php
                   if(isset($_SESSION['id_user'])){

                 echo '<h3 class="font-black text-center text-[24px]">'.$_SESSION['dangky'].'</h3>';
                 } 
                else{
                 echo '<a class="font-black text-center text-[24px]" href="user.php">Sign up</a>';
                 } ?> 
                <a href="index.php?act=viewcart">

                    <div id="cart" class="cart" data-totalitems="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 3 24 20" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                </a>
            
    
            </div>

        </div>
        <div class="list-none hidden flex justify-center space-x-8 my-10 " id="menu">
            <li><a href="index.php?act=san_pham">ProDucts</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Recommend</a></li>
        </div>
        <script>
            const menu = document.getElementById("menu");
            const button = document.getElementById("button");

            button.addEventListener("click", function() {
                menu.classList.toggle("hidden");
            });
        </script>