<div class="home mt-5 mr-8 bg-[#F4F6FA] h-auto rounded px-10">
    <h1 class="text-center text-cyan-500 py-6  text-4xl " style="font-family: 'Courier New', Courier, monospace">List SẢN PHẨM</h1>
    <div class="justify-between grid grid-cols-3 items-center px-7 mx-auto">
        <h1 class="text-[20px] font-semibold text-sky-600 my-5">Danh sách Products</h1>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search " viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            <input type="text" placeholder="Search..." class="px-4 py-2 ml-2 rounded-lg">

        </div>
        <a href="index.php?act=them_san_pham" class=" bg-yellow-300 text-center  py-2 px-2 rounded-md hover:bg-[#BAAACE] hover:text-white mx-4 font-semibold text-[#551AA9] my-5">ADD
            Products</a>
    </div>

    <table class="table shadow-2xl shadow-cyan-500/50 mx-auto border-2 border-cyan-500/50mx-auto my-5">
        <tr class="border-2 border-cyan-500/50  text-[#551AA9] ">
            <th class="border-2 border-cyan-500/50  px-6 py-2">Product_ID</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">Product_NAME</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">Image</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">Price</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">Price_Sale</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">Description</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">Cate_ID</th>
            <th class="border-2 border-cyan-500/50 px-6 py-2">
                Action
            </th>
        </tr>

        <?php
        foreach ($danh_sach_sp as $dssp) {
            extract($dssp);

            $suasp = "index.php?act=sua_san_pham&id=" . $id;
            $xoasp = "index.php?act=xoa_san_pham&id=" . $id;
            $image2 = "../upload/" . $image2;
            $cate = lay_danh_muc_theo_ma($id_categories);

        ?>
            <tr class="text-[#551AA9] ">
                <td class="border-2 border-cyan-500/50 py-4 px-2 text-center">
                    <?= $id ?>
                </td>

                <td class="border-2 hover:underline border-cyan-500/50 py-4 px-2 text-center"><a href="chitietsp.php">
                        <?= $product_name ?>
                    </a></td>

                <td class="border-2 border-cyan-500/50 py-2 px-2 text-center ">
                    <img src="<?= $image2 ?>" alt="" width="50px" class="text-center inline-block">
                </td>
                <td class="border-2 border-cyan-500/50 py-4 px-2 text-center">
                    <?= $product_price ?>
                </td>
                <td class="border-2 border-cyan-500/50 py-4 px-2 text-center">
                    <?= $product_price_sale ?>
                </td>
                <td class="border-2 border-cyan-500/50 py-4 px-2 text-center">
                    <?= $description ?>
                </td>
                <td class="border-2 border-cyan-500/50 py-4 px-2 text-center">
                    <?= $cate['categories_name'] ?>
                </td>
                <td class="border-2 border-cyan-500/50 py-4 px-2 text-center">
                    <a class="py-1 px-4 bg-[#1E74A4] hover:bg-[#BAAACE] hover:text-white text-white rounded-md mx-2" href="<?= $suasp ?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa không')" class="text-white hover:bg-[#BAAACE] hover:text-white bg-[#AC3131] py-1 px-4 rounded-md mx-2" href="<?= $xoasp ?>">Xóa</a>
                </td>
            </tr>

        <?php

        }
        ?>
    </table>
</div>
</div>

</body>

</html>