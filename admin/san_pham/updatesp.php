    
            <div class="home mt-5 px-40 py-10 mr-8 bg-[#F4F6FA] h-auto rounded">
                <div class="ad-r">
                    <div class="grid grid-cols-2 justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #1884C7;">
                                <path
                                    d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">
                                </path>
                            </svg>
                            <h1 class="text-[20px] mx-4 font-semibold text-sky-600 my-5">Update Products</h1>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5fe6c2;">
                                <path
                                    d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z">
                                </path>
                            </svg>
                            <a href="show-product.php" class="text-[20px] mx-4 font-semibold text-sky-600 ">Danh
                                sách</a>
                        </div>

                    </div>
                    <form action="" method="post" enctype="multipart/form-data" class="">

                        <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>"><br>
                        <p class="text-[#551AA9] text-[20px] my-4" for="">Tên Sản Phẩm</p><input type="text"
                            value="<?= $product['product_name'] ?>" name="product_name" placeholder="LV ...."
                            class="border w-full px-10 rounded-lg py-2 mt-2">
                        <?php if (isset($product_name_err)) : ?>
                        <span style="color:red" ;>
                            <?= $product_name_err ?>
                        </span>
                        <?php endif ?>
                        <p class="text-[#551AA9] text-[20px] my-4" for="">PRICE</p><input type="text"
                            value="<?= $product['price'] ?>" name=" price" placeholder="999$ ...."
                            class="border w-full px-10 rounded-lg py-2 mt-2">
                        <?php if (isset($price_err)) : ?>
                        <span style="color:red" ;>
                            <?= $price_err ?>
                        </span>
                        <?php endif ?>
                        <p class="text-[#551AA9] text-[20px] my-4" for="">PRICE SALE</p><input type="text"
                            value="<?= $product['price_sale'] ?>" name=" price_sale" placeholder="899$ ...."
                            class="border w-full px-10 rounded-lg py-2 mt-2">
                        <?php if (isset($price_sale_err)) : ?>
                        <span style="color:red" ;>
                            <?= $price_sale_err ?>
                        </span>
                        <?php endif ?>
                        <input type="hidden" name="image" value="<?= $product['image'] ?>">
                        <p class="text-[#551AA9] text-[20px] my-4" for="">Image</p>
                        <img src="upload/<?= $product['image'] ?>" style="width: 100px; height: 100px;" alt=""><br>
                        <input type="file" name="image" class=" text-[#551AA9] text-[20px] my-2">

                        <?php if (isset($file_err)) : ?>
                        <span style="color:red" ;>
                            <?= $file_err ?>
                        </span>
                        <?php endif ?>
                        <br>
                        <label class="uppercase font-1xl text-[#551AA9] text-[20px] my-4">Description</label>
                        <br>
                        <textarea cols="30" rows="10" placeholder="Expensive ..." value="<?= $product['description'] ?>"
                            name=" description"
                            class="border w-full rounded-lg px-10 py-2 h-48 mt-2"><?= $product['description'] ?></textarea>
                        <?php if (isset($description_err)) : ?>
                        <span style="color:red" ;>
                            <?= $description_err ?>
                        </span>
                        <?php endif ?>
                        <p class="text-[#551AA9] text-[20px] my-4" for="">Cate_Id</p><select name="cate_id" id=""
                            class="w-full border rounded-lg px-10 py-2">
                            <?php foreach ($categories as $categori) : ?>
                            <option value="<?= $categori['cate_id'] ?>">
                                <?= $categori['cate_name'] ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                        <?php if (isset($cate_id_err)) : ?>
                        <span style="color:red" ;>
                            <?= $cate_id_err ?>
                        </span>
                        <?php endif ?>
                        <button type="submit" name="btn_luu"
                            class="bg-[#ff523b] my-10 py-2 px-8 hover:bg-[#BAAACE] hover:text-white rounded-lg">Add
                            Cate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>