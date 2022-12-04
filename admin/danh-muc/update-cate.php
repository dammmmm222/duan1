<div class="home mt-5 px-40 py-10 mr-8 bg-[#F4F6FA] h-auto rounded">
    <div class="ad-r">


        <!-- Lưu lại id dể update -->

        <div class="">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #1884C7;">
                                <path
                                    d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">
                                </path>
                            </svg>
                <h1 class="text-[20px] mx-4 font-semibold text-sky-600 my-5">Update - Cate</h1>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5fe6c2;">
                                <path
                                    d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z">
                                </path>
                            </svg>
                <a href="show-cate.php" class="text-[20px] mx-4 font-semibold text-sky-600 ">Danh sách</a>
            </div>

        </div>
        <form action="" method="post" enctype="multipart/form-data" class="">
            <input type="hidden" name="cate_id" value="<?= $cate['cate_id'] ?>">
            <p class="text-[#551AA9] text-[20px] my-4" for="">Cate_NAME</p> <input type="text" value="<?= $cate['cate_name'] ?>" name="cate_name" placeholder="catename....." class="px-10 py-2 rounded-md">
            <?php if (isset($cate_name_err)) : ?>
            <span style="color:red" ;>
                            <?= $cate_name_err ?>
                        </span>
            <?php endif ?>
            <p class="text-[#551AA9] text-[20px] my-4" for="">Image</p>
            <input type="hidden" name="image" value="<?= $cate['image'] ?>">

            <img src="upload/<?= $cate['image'] ?>" style="width: 100px; height: 100px;" alt=""><br>

            <p class="text-[#551AA9] text-[20px] my-4" for="">Image</p>
            <input type="file" name="image" class="text-[#551AA9] text-[20px] my-2 rounded-lg">
            <?php if (isset($file_err)) : ?>
            <span style="color:red" ;>
                            <?= $file_err ?>
                        </span>
            <?php endif ?>


            <br>
            <button type="submit" name="btn_luu" class="bg-[#ff523b] my-10 py-2 px-8 hover:bg-[#BAAACE] hover:text-white rounded-lg">Update
                            Cate</button>
        </form>
        </form>
    </div>
</div>
</div>
</div>
</body>

</html>