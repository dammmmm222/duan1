
<?php 
if (isset($_GET['id']) && ($_GET['id'] > 0)) {
   $id = $_GET['id'];
   $onesp = loadone_product($id);
   extract($onesp);
   $sp_cung_loai = load_product_cungloai($id, $id_categories);
} else {
   include "..site/trang-chu.php";
}
?>

