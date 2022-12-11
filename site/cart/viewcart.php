
<?php 
       if (isset($_SESSION['cart']) && ($_SESSION['cart'] != [])) {
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
                <th class=" px-11 border border-slate-300 ...">Giá (VND)</th>
                <th class=" px-11 border border-slate-300 ...">Số lượng</th>
                <th class=" px-11 border border-slate-300 ...">Phân loại</th>
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
                            <td class=" px-13 border border-slate-300 ...">' . $product[1] . '</td>
                            <td class=" px-11 border border-slate-300 ...">' . $product[3] . '</td>
                           <form action="index.php?act=change_quantity" method="POST">

                            <td class=" px-11 pt-2 border flex justify-between"> 
                            <input type=submit name="sub" value="-">
                            <input type="hidden" name="pr_id" value="' . $product[0] . '">
                            <input type="hidden" name="pr_colors" value="' . $product[5] . '">
                            <input type="hidden" name="pr_size" value="' . $product[6] . '">
                            <input type="hidden" name="quantity" value="' . $product[4] . '">
                            <p class="w-9 h-12 pt-3" >' . $product[4] . '</p>
                            <input type=submit name="add" value="+">
                            </td>
                            <p class="text-[red] text-[16px] my-4" for="">'.( isset($_SESSION['thong_bao_sl']) ? $_SESSION['thong_bao_sl'] : "").'</p>

                         </form>
                            <td class=" px-11 border border-slate-300 ...">' . $product[5] . ',' . $product[6] . '</td>
                            <td class=" px-11 border border-slate-300 ...">' . $ttien . '</td>
                            <td style="text-align:center"><a href="index.php?act=delcart&idcart='.$i .'">Xóa</a></td>
             </tr>';
                $i++;
            }
            ?>  
            <tr>
                <td colspan="6" class=" px-11 border border-slate-300 ...">Tổng đơn hàng</td>
                <td style="background-color: #CCC;"><?= $tong; ?></td>
                <td style="background-color: #CCC;"> <a href="index.php?act=delcart">Xóa tất cả</a></td>
            </tr>
        </table>

        <p class="flex justify-between"><a href="index.php?act=san_pham" class=" pt-10 font-bold ">Tiếp tục đặt hàng?</a> 
        <div class="items-center text-stast rounded-lg   text-[30px] font-bold mt-10 ">
            <a href="index.php?act=thanhtoan&tong=<?= $tong ?>" class=""> <button type="submit" class="text-black hover:bg-gray-300 hover:rounded-lg mb-10 ">THANH TOÁN MOMO</button> </a>
            <br>
            <a href="index.php?act=thanhtoan_COD&tong=<?= $tong ?>&COD" class=""> <button type="submit" class="text-black hover:bg-gray-300 hover:rounded-lg ">THANH TOÁN KHI NHẬN HÀNG</button> </a>
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