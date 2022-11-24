<img src="upload/banner3.jpg" alt="" class="max-w-screen-2xl rounded-lg mx-auto">
<div class="max-w-6xl mx-auto grid grid-cols-4 gap-8 mt-24 ">
    <div class="">
        <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Product
            Categories</h2>
        <div class="space-y-4">
            <label for="">Clothes</label><select name="" id="" class="">
            </select><br>
            <label for="">Shoes</label><select name="" id=""></select><br>
            <label for="">Bags</label><select name="" id=""></select><br>
            <label for="">Wallets</label><select name="" id=""></select><br>
            <label for="">Dress</label><select name="" id=""></select><br>
        </div>
        <div class="space-x-4">
            <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Any Size
            </h2>
            <span>S</span>
            <span>M</span>
            <span>L</span>
            <span>XL</span>
            <span>XXL</span>
        </div>
        <div class="">
            <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Choose
                Color</h2>
            <div class="">

            </div>
        </div>
        <div class="space-y-4">
            <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Brand</h2>
            <li class="list-none"><a href="">Louis Vuitton</a></li>
            <li class="list-none"><a href="">Gucci</a></li>
            <li class="list-none"><a href="">Chanel</a></li>
            <li class="list-none"><a href="">Adidas</a></li>
            <li class="list-none"><a href="">Dior</a></li>
        </div>
        <div class="">
            <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Featured
                Products
            </h2>
            <div class="flex items-center">
                <img srcset="upload/LV4.webp 6x" alt="">
                <div class="">
                    <h3 class=" text-gray-600">Bolsa De Transporte</h3>
                    <div class="flex">
                        <span class="mx-4 my-2">$499</span>
                        <del class="mx-4 my-2 text-gray-600">$999</del>
                    </div>
                </div>
            </div>
            <div class="flex items-center my-4">
                <img srcset="upload/chanel.jpg 4x" alt="" class="ml-6">
                <div class="mx-4">
                    <h3 class="ml-2 text-gray-600">Bolsa De Transporte</h3>
                    <div class="flex">
                        <span class="mx-4 my-2">$499</span>
                        <del class="mx-4 my-2">$999</del>
                    </div>
                </div>
            </div>
            <div class="flex items-center my-4">
                <img srcset="upload/LV15.webp 9x" alt="">
                <div class="">
                    <h3 class="text-gray-600">VIVIENNE BANDEAU</h3>
                    <div class="flex">
                        <span class="mx-4 my-2">$499</span>
                        <del class="mx-4 my-2">$999</del>
                    </div>
                </div>
            </div>
            <div class="flex items-center ml-2">
                <img srcset="upload/gucci.jpg 8x" alt="">
                <div class="">
                    <h3 class="ml-4 text-gray-600">Bolsa De Transporte</h3>
                    <div class="flex">
                        <span class="mx-4 my-2">$499</span>
                        <del class="mx-4 my-2">$999</del>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-4">
        <span class="text-gray-600 ">Showing 1-12 of 38 results</span>
        <?php

        foreach ($ds_san_pham as $dssp) {
            extract($dssp);
            $pr_image2 = "./upload/" . $pr_image2;


        ?>

            <div class="my-10">
                <div class="bg-[#F3F3F3]">
                    <img src=" <?= $pr_image2 ?> " alt="">
                </div>
                <h3 class="text-gray-600"> <?= $pr_name  ?></h3>
                <div class="flex">
                    <span><?= $pr_price ?></span>
                    <button class="mx-4 hover:border-2 border-gray-200">+ Add To Cart </button>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<hr class="max-w-6xl mx-auto ">
<div class="max-w-6xl mx-auto flex justify-between my-10 " style="font-family: 'Courier New', Courier, monospace" ;>
    <div class="">
        <span class="border-gray-200 border-2 px-2 py-1 text-gray-600">1</span>
        <span class="border-gray-200 border-2 px-2 py-1 text-gray-600">2</span>
        <span class="border-gray-200 border-2 px-2 py-1 text-gray-600">3</span>
        <span class="border-gray-200 border-2 px-2 py-1 text-gray-600">></span>
    </div>
    <span class="text-gray-600">Showing 1-12 of 38 results</span>
</div>
<div class="text-center bg-gray-100 py-10 mt-10 mb-20" style="font-family: 'Courier New', Courier, monospace" ;>
    <h2 class="font-bold text-3xl">
        Get Discount Info
    </h2>
    <p class=" mt-5 mb-6">
        Subscribe to order Royal to receive attractive offers, register to receive more attractive discount
        information
    </p>
    <div class=" font-bold my-5">
        <button class="border-2 text-black border-black px-3 py-3">
            Learn More
        </button>
        <button class="border-2 text-black border-black px-5 py-3 bg-white-900">
            Subscribe
        </button>
    </div>
</div>