
<?php
// Khởi tạo session bằng session_start()
session_start();
ob_start();

// include "model/pdo.php";
include "global.php";

include "guest/category.php";
include "guest/product.php";

include "site/layout/header.php";

// Kiểm tra biến chuyển trang ?act
if (isset($_GET['act'])) {
  // Nếu tồn tại giá trị biến ?act thì gán $_GET['act'] cho biến $act
  $act = $_GET['act'];

  // Kiểm tra các trường hợp chuyển trang
  switch ($act) {
      // Trang sản phẩm
    case "san_pham":

      $ds_san_pham = lay_tat_ca_san_pham();
      include "site/san-pham/products.php";
      break;
    default:
      include "site/layout/home.php";
      break;
  }
} else {
  include "site/layout/home.php";
}
include "site/layout/footer.php";

?>