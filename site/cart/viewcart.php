<?php
    
    if(isset($_SESSION['cart'])){
        //echo var_dump($_SESSION['cart']); 
  if(isset($_SESSION['id_user'])){
?> 
        <div class="items-center text-center text-[50px] font-bold ">
            Giỏ hàng
        </div>
        <div class="logo max-w-[1080px] mx-auto grid justify-between items-center  my-5 mb-10">
          
            <table class=" text-center border-collapse border border-slate-300  ...">
                <tr>
                    <th class=" px-11 border border-slate-300 ..." >STT</th>
                    <th class=" px-11 border border-slate-300 ...">Hình</th>
                    <th class=" px-11 border border-slate-300 ...">Tên Sản Phẩm</th>
                    <th class=" px-11 border border-slate-300 ...">GIá</th>
                    <th class=" px-11 border border-slate-300 ...">Số lượng</th>
                    <th class=" px-11 border border-slate-300 ...">Thành Tiền</th>
                    <th class=" px-11 border border-slate-300 ...">Xóa</th>
                </tr>
                <?php
                $tong=0;
                $i=0;

                foreach ($_SESSION['cart'] as $product) {
                    $ttien=$product[3]*$product[4];
                    $tong+=$ttien;

                    $xoasp='<a href="index.php?act=delcart&idcart='.$id.'"><input type="button" value="Xóa"></a>';
                    echo '<tr>
                            <td class=" px-11 border border-slate-300 ..." >'.($i+1).'</td>
                            <td class=" px-11 border border-slate-300 ..."><img src="'.$product[2].'" width="100"></td>
                            <td class=" px-11 border border-slate-300 ...">'.$product[1].'</td>
                            <td class=" px-11 border border-slate-300 ...">'.$product[3].'</td>
                            <td class=" px-11 border border-slate-300 ...">'.$product[4].'</td>
                            <td class=" px-11 border border-slate-300 ...">'.$ttien.'</td>
                            <td style="text-align:center"><a href="index.php?act=delcart&idcart='.$id.'">Xóa</a></td>
                        </tr>';
                    $i++;
                }
            ?>
            <tr>
                <td colspan="5" class=" px-11 border border-slate-300 ...">Tổng đơn hàng</td>
                <td style="background-color: #CCC;"><?= $tong; ?></td>
                <td style="background-color: #CCC;">Xóa tất cả</td>
            </tr>
            
              </table>
              <p><a href="../index.php" class=" pt-10 font-bold ">Tiếp tục đặt hàng?</a></p>
              <div class="items-center text-stast rounded-lg   text-[30px] font-bold mt-10 ">
             <a href="index.php?act=thanhtoan&tong=<?= $tong ?>" class=""> <button type="submit" class="text-black hover:bg-gray-300 hover:rounded-lg " >THANH TOÁN</button> </a>
              </div>  
        </div>
        </div>

</body>
</html>
<?php
    }
    }
?>
