<?php


if (isset($_SESSION['cart']) && ($_SESSION['cart'] != [])) {
    //echo var_dump($_SESSION['cart']); 

?>

 <div class="items-center text-center text-[50px] font-bold ">
        Giỏ hàng
    </div>
    <div class="logo max-w-[1080px] mx-auto grid justify-between items-center  my-5 mb-10">

        <table class=" text-center border-collapse border border-slate-300  ...">
            <tr>
                <th class=" px-11 border border-slate-300 ...">STT</th>
                <th class=" px-11 border border-slate-300 ...">Hình</th>
                <th class=" px-11 border border-slate-300 ...">Tên Sản Phẩm</th>
                <th class=" px-11 border border-slate-300 ...">GIá</th>
                <th class=" px-11 border border-slate-300 ...">Số lượng</th>
                <th class=" px-11 border border-slate-300 ...">Thành Tiền</th>
                <th class=" px-11 border border-slate-300 ...">Xóa</th>
            </tr>
            <?php
            $tong = 0;
            $i = 0;
            foreach ($_SESSION['cart'] as $product) {
                $ttien = $product[3] * $product[4];
                $tong += $ttien;
                echo '<tr>
                            <td class=" px-11 border border-slate-300 ..." >' . ($i + 1) . '</td>
                            <td class=" px-11 border border-slate-300 ..."><img src="' . $product[2] . '" width="100"></td>
                            <td class=" px-11 border border-slate-300 ...">' . $product[1] . '</td>
                            <td class=" px-11 border border-slate-300 ...">' . $product[3] . '</td>
                            <td class=" px-11 border border-slate-300 ...">' . $product[4] . '</td>
                            <td class=" px-11 border border-slate-300 ...">' . $ttien . '</td>
                            <td style="text-align:center"><a href="index.php?act=delcart&idcart='.$i .'">Xóa</a></td>
             </tr>';
                $i++;
            }
            ?>
            <tr>
                <td colspan="5" class=" px-11 border border-slate-300 ...">Tổng đơn hàng</td>
                <td style="background-color: #CCC;"><?= $tong; ?></td>
                <td style="background-color: #CCC;"> <a href="index.php?act=delcart">Xóa tất cả</a></td>
            </tr>


        </table>
        <p><a href="index.php?act=san_pham" class=" pt-10 font-bold ">Tiếp tục đặt hàng?</a></p>
        <div class="items-center text-stast rounded-lg   text-[30px] font-bold mt-10 ">
            <a href="index.php?act=thanhtoan&tong=<?= $tong ?>" class=""> <button type="submit" class="text-black hover:bg-gray-300 hover:rounded-lg ">THANH TOÁN MOMO</button> </a>
        </div>
    </div>



    </body>

    </html>
<?php

    }
 else {
    echo '<h1 class=" text-center text-[32px] border border-slate-300 ...">Bạn chưa thêm gì vào giỏ hàng :<

    <a class="text-center text-[32px] border border-slate-300 ..." href="index.php?act=san_pham" >Quay lại trang sản phẩm</a>
    </h1>';
}
?>