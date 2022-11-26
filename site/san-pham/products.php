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
    $new_product= loadall_product_trangchu();
           $i=0;
            foreach ($new_product as $product){
                extract($product);
                $image=$img_path.$product['image'];
                echo'
                <a href="index.php?act=productdetail&pr_id='.$product['id'].'">
                <div class="colums text-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:border-2 hover:border-violet-900 duration-300 group px-4 py-4">
                   
                <img src="'.$image.'";" alt="" class="text-center" />
                        <h3 class="my-2 inline-block">
                            <a href="" class="text-3xl font-bold">'.$product_name.'</a>
                        </h3>
                <div class="text-3xl my-2">
                        <span class="text-violet-900 font-bold">$'.$product_price.'</span>
                </div>
                <button class="border-2 border-violet-900 px-4 py-3 my-8 text-violet-900 font-bold text-3xl group-hover:bg-violet-900 group-hover:text-white transition delay-300 duration-300 ease-in-out">
            <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="product_name" value="'.$product_name.'">
                <input type="hidden" name="image" value="'.$image.'">
                <input type="hidden" name="product_price" value="'.$product_price.'">
                <input type="submit" name="addtocart"  value="ADD TO CART">
            </form>
            
                </button>
                </div>
                </a>
                ';
                $i+=1;
            }
           ?>

         
        

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