
<?php
// Khởi tạo session bằng session_start()
session_start();
ob_start();

// include "model/pdo.php";
include "../global.php";
include "../guest/category.php";
include "../guest/product.php";
include "../site/layout/header.php";

// Kiểm tra biến chuyển trang ?act
if (isset($_GET['act'])) {
  // Nếu tồn tại giá trị biến ?act thì gán $_GET['act'] cho biến $act
  $act = $_GET['act'];

  // Kiểm tra các trường hợp chuyển trang
  switch ($act) {
      // Trang sản phẩm
    case "san_pham":
      $ds_san_pham = lay_tat_ca_san_pham();
      include "san-pham/products.php";
      break;
    case 'addtocart':
      if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
      if (isset($_POST['addtocart'])) {
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $image = $_POST['image'];
        $product_price = $_POST['product_price'];
        $sl = 1;
        $i = 0;
        $arr = [$id, $product_name, $image, $product_price, $sl];
        $check = 0;
        foreach ($_SESSION['cart'] as $product) {
          if ($product[0] == $id) {
            //cập nhật mới số lượng
            $sl += $product[4];
            $tm = 1;
            //cập nhật số lượng mới vào giỏ hàng
            $_SESSION['cart'][$i][4] = $sl;
            $check = 1;
            break;
          }
          $i++;
        }
        if ($check == 0) {
          array_push($_SESSION['cart'], $arr);
        }
        $tm = 0;
        // tìm và so sánh sp trong giỏ hàng
        include "cart/viewcart.php";
      }
      break;
    case 'delcart':
      // if(isset($_GET['idcart'])){
      //      array_splice($_SESSION['mycart'],$_GET['idcart'],1);
      // }else{
      //  $_SESSION['mycart']=[];
      // }
      //  header('Location: index.php?act=viewcart');

      if (isset($_SESSION['cart'])) {
        if (isset($_GET['id'])) {
          array_splice($_SESSION['cart'], $_GET['id'], 1);
        } else {
          unset($_SESSION['cart']);
        }
        if (count($_SESSION['cart']) > 0) header('location: viewcart.php');
        else header('location: index.php');
      }
      break;
    case 'viewcart':
      include "cart/viewcart.php";
      break;

    case "productdetail":
      $pro = [];
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $pro = showspdetail($_GET['id']);
      }

      include "san-pham/productdetail.php";
      break;

    default:
      include "../site/layout/home.php";
      break;
  }
} else {
  include "../site/layout/home.php";
}
include "../site/layout/footer.php";

?>