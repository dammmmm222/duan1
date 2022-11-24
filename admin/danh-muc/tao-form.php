<div class="admin bg-[#E9EAEB]  px-8 my-10 mx-8 rounded-md">
    <div class="search2 text-center">

        <input type="text" placeholder="Thêm Users" class="mt-5 text-center rounded-md  px-24 py-1">

    </div>
    <div class="grid grid-cols-2  items-center">
        <div class="ad-l">
            <div class="flex py-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: #5fe6c2;">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path d="M13 6c0-.712.153-1.387.422-2H6c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7.422A4.962 4.962 0 0 1 18 11a5 5 0 0 1-5-5z"></path>
                </svg>
                <a href="" class="hover:text-[#551AA9]">Quản Lý sản phẩm</a>
            </div>
            <div class="flex py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: #3e4a87;">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path d="M13 6c0-.712.153-1.387.422-2H6c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7.422A4.962 4.962 0 0 1 18 11a5 5 0 0 1-5-5z"></path>
                </svg>
                <a href="" class="hover:text-[#551AA9]">Quản Lý Users</a>
            </div>
            <div class="flex py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: #34fafe;">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path d="M13 6c0-.712.153-1.387.422-2H6c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7.422A4.962 4.962 0 0 1 18 11a5 5 0 0 1-5-5z"></path>
                </svg>
                <a href="" class="hover:text-[#551AA9]">Quản Lý Danh Mục</a>
            </div>
            <div class="flex py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: black;">
                    <path d="M5 3H3v18h18v-2H5z"></path>
                    <path d="M13 12.586 8.707 8.293 7.293 9.707 13 15.414l3-3 4.293 4.293 1.414-1.414L16 9.586z"></path>
                </svg>
                <a href="" class="hover:text-[#551AA9]">Thống kê</a>
            </div>
        </div>
        <div class="ad-r">
            <div class="">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #1884C7;">
                        <path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z"></path>
                    </svg>
                    <h1 class="text-[20px] mx-4 font-semibold text-sky-600 my-5">Thêm người dùng</h1>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5fe6c2;">
                        <path d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z"></path>
                    </svg>
                    <a href="" class="text-[20px] mx-4 font-semibold text-sky-600 ">Danh sách</a>
                </div>

            </div>
            <form action="index.php?act=them_dm" method="post" enctype="multipart/form-data" class="" id="add_loai">


                <p class="text-[#551AA9] text-[20px] my-4" for="">Cate_Name</p><input type="text" name="cate_name" placeholder="Túi ...." class="px-10 py-2 rounded-md">
                <?php if (isset($cate_name_err)) : ?>
                    <span style="color:red" ;>
                        <?= $cate_name_err ?>
                    </span>
                <?php endif ?>
                <p class="text-[#551AA9] text-[20px] my-4" for="">Image</p>
                <input type="file" name="cate_img" class="text-[#551AA9] text-[20px] my-2">
                <?php if (isset($file_err)) : ?>
                    <span style="color:red" ;>
                        <?= $file_err ?>
                    </span>
                <?php endif ?>
                <br>
                <button type="submit" name="btn_luu" class="bg-[#ff523b] my-10 py-2 px-8 hover:bg-[#BAAACE] hover:text-white rounded-lg">Add Cate</button>
            </form>
        </div>
    </div>
</div>