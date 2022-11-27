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
</style>

<body>
    <div class="" style="font-family: 'Courier New', Courier, monospace;">
        <div class="logo max-w-[1080px] mx-auto grid justify-between items-center grid-cols-3 my-5 mb-10">
            <div class="flex items-center gap-10">
                <div class="list-none" id="menu">
                    <li><a href="index.php?act=san_pham">ProDucts</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Recommend</a></li>
                </div>
                <button id="button"><img src="upload/menu.svg" alt="" class="w-6"></button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 19" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <script>
                    const menu = document.getElementById("menu");
                    const button = document.getElementById("button");

                    button.addEventListener("click", function() {
                        menu.classList.toggle("hidden");
                    });
                </script>
            </div>

            <div class="items-center text-center text-[30px] ">
                Royal Center
            </div>
            <div class="flex gap-10 justify-end items-center">
            <?php
            if(isset($_SESSION['id_user'])){

                 echo '<h3 class="font-black text-center text-[24px]">'.$_SESSION['dangky'].'</h3>';
                 } 
                else{
                 echo '<a class="font-black text-center text-[24px]" href="user.php">Sign up</a>';
                 } ?> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 3 24 20" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-right">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </div>
        </div>