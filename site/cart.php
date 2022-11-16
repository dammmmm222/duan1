<?php 
if(isset($_SESSION['id_user'])){
    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $soluong = 1;
        $thanhtien = $soluong * $price;
        $spadd = [$id, $name, $img, $price, $soluong, $thanhtien];
        array_push($_SESSION['myCart'], $spadd);
        include "../site/cart.php";
    }
    else{

    }
}
else{
    echo "Vui lòng đăng nhập tài khoản";
    include "./client/views/taikhoan/dangky.php";


}
?>