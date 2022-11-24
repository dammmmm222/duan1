<div class="admin bg-[#E9EAEB]  px-8 my-10 mx-8 rounded-md">
    <div class="search2 text-center">

        <input type="text" placeholder="Quản Lý Cates" class="mt-5 text-center rounded-md  px-24 py-1">

    </div>
    <div class="grid grid-cols-3 my-5 items-center">
        <div class="ad-l col-span-1">
            <div class="flex py-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: #5fe6c2;">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path d="M13 6c0-.712.153-1.387.422-2H6c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7.422A4.962 4.962 0 0 1 18 11a5 5 0 0 1-5-5z"></path>
                </svg>
                <a href="show-product.php" class="hover:text-[#551AA9]">Quản Lý sản phẩm</a>
            </div>
            <div class="flex py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: #3e4a87;">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path d="M13 6c0-.712.153-1.387.422-2H6c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7.422A4.962 4.962 0 0 1 18 11a5 5 0 0 1-5-5z"></path>
                </svg>
                <a href="show-user.php" class="hover:text-[#551AA9]">Quản Lý Users</a>
            </div>
            <div class="flex py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: #34fafe;">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path d="M13 6c0-.712.153-1.387.422-2H6c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7.422A4.962 4.962 0 0 1 18 11a5 5 0 0 1-5-5z"></path>
                </svg>
                <a href="show-cate.php" class="hover:text-[#551AA9]">Quản Lý Danh Mục</a>
            </div>
            <div class="flex py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="fill: black;">
                    <path d="M5 3H3v18h18v-2H5z"></path>
                    <path d="M13 12.586 8.707 8.293 7.293 9.707 13 15.414l3-3 4.293 4.293 1.414-1.414L16 9.586z"></path>
                </svg>
                <a href="" class="hover:text-[#551AA9]">Thống kê</a>
            </div>
        </div>
        <div class="ad-r col-span-2">
            <div class="justify-between grid grid-cols-3 items-center">
                <h1 class="text-[20px] font-semibold text-sky-600 my-5">Danh sách Cates</h1>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search " viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    <input type="text" placeholder="Search..." class="px-4 py-2 ml-2 rounded-lg">

                </div>
                <a href="index.php?act=them_dm" class=" bg-yellow-300 text-center  py-2 px-2 rounded-md hover:bg-[#BAAACE] hover:text-white mx-4 font-semibold text-[#551AA9] my-5">ADD Cate</a>
            </div>
            <?php if (isset($_GET['msg'])) : ?>
                <div class="alert alert-success">
                    <?= $_GET['msg'] ?>
                </div>
            <?php endif ?>
            <table class="table border-2 border-[#BAAACE]">
                <tr class="border-2 border-[#BAAACE]  text-[#551AA9] ">
                    <th class="border-2 border-[#BAAACE]  px-14 py-2">CATE_ID</th>
                    <th class="border-2 border-[#BAAACE] px-14 py-2">Cate_NAME</th>
                    <th class="border-2 border-[#BAAACE] px-40 py-2">Image</th>
                    <th class="border-2 border-[#BAAACE] px-14 py-2">
                        Action
                    </th>
                </tr>

                <?php foreach ($ds_danh_muc as $cate) :
                    extract($cate);
                    $sua_dm = "index.php?act=sua_dm&cate_id=" . $cate_id;
                    $xoa_dm = "index.php?act=xoa_dm&cate_id=" . $cate_id;
                ?>
                    <tr class="text-[#551AA9] ">
                        <td class="border-2 border-[#BAAACE] py-4 px-2 text-center"><?= $cate['cate_id'] ?></td>
                        <td class="border-2 border-[#BAAACE] py-4 px-2 text-center"><?= $cate['cate_name'] ?></td>
                        <td class="border-2 border-[#BAAACE] py-2 px-2 text-center ">
                            <img srcset="../upload/<?= $cate['cate_img'] ?> " alt="" width="50px" class="text-center inline-block">
                        </td>

                        <td class="border-2 border-[#BAAACE] py-4 px-2 text-center">
                            <a class="py-1 px-4 bg-[#1E74A4] hover:bg-[#BAAACE] hover:text-white text-white rounded-md mx-2" href="<?= $sua_dm ?>">Sửa</a>
                            <a onclick="return confirm('Bạn có muốn xóa không')" class="text-white hover:bg-[#BAAACE] hover:text-white bg-[#AC3131] py-1 px-4 rounded-md mx-2" href="<?= $xoa_dm ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>