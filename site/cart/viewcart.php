<?php
if (isset($_SESSION['cart']) && ($_SESSION['cart'] != [])) {
    //echo var_dump($_SESSION['cart']); 
    if (isset($_POST['update_quantity'])){
    $quantity = array();
    $idproduct = array();
    $quantity = $_POST['quantity'];
    $idproduct = $_POST['product_id'];
    echo print_r($quantity);
    echo print_r($idproduct);
    die();
    }
?>

 <div class="items-center text-center text-[50px] font-bold ">
        Giỏ hàng
    </div>
    <div class="logo max-w-[1080px] mx-auto grid justify-between items-center  my-5 mb-10">
        <form action="" method="POST">
        <table class=" text-center border-collapse border border-slate-300  ...">
            <tr>
                <th class=" px-11 border border-slate-300 ...">STT</th>
                <th class=" px-11 border border-slate-300 ...">Hình</th>
                <th class=" px-11 border border-slate-300 ...">Tên Sản Phẩm</th>
                <th class=" px-11 border border-slate-300 ...">GIá</th>
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
                            <td class=" px-11 border border-slate-300 ...">' . $product[1] . '</td>
                            <td class=" px-11 border border-slate-300 ...">' . $product[3] . '</td>
                            <td class=" px-11 border border-slate-300 ..."> 
                            <input class="w-9 h-12"  type="hidden" name="product_id[]" value="' . $product[0] . '">
                            <input class="w-9 h-12"  type="number" name="quantity[]" value="' . $product[4] . '">
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
        <input type="submit" class="mt-10 font-bold hover:bg-gray-300 rounded-lg mb-10" name='update_quantity'value="cập nhật lại giỏ hàng">  </p>
        </form>
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