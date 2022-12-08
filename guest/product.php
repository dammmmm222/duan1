<?php
require_once "pdo.php";

// Thêm hàng hóa
function them_san_pham($product_name, $product_price, $product_price_sale, $description, $image, $image2, $image3, $origin, $id_categories)
{

    $sql = "INSERT INTO `product`(`product_name`, `product_price`, `product_price_sale`, `description`, `image`, `image2`, `image3`, `origin`, `id_categories`) VALUES ('$product_name','$product_price','$product_price_sale','$description','$image','$image2','$image3','$origin','$id_categories')";
    pdo_execute($sql);
}

function update_view($id)
{
    $sql = "UPDATE product SET view = view + 1 WHERE id = $id";
    pdo_execute($sql);
}

// Xóa hàng hóa theo mã hàng hóa
function showspdetail($id)
{
    $sql = "select * from product where 1";
    if ($id > 0) $sql .= " AND id=" . $id;
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function xoa_san_pham($id)
{
    $sql = "DELETE FROM product WHERE id = $id";
    pdo_execute($sql);
}

function loadall_product_trangchu()
{
    $sql = "SELECT * FROM `product` where 1";
    $list_product = pdo_query($sql);
    return $list_product;
}
function loadall_ALL_product()
{
    $sql = "SELECT * FROM `product`";
    $list_product = pdo_query($sql);
    return $list_product;
}
function lay_tat_ca_san_pham_admin()
{
    $sql = "SELECT * FROM product ORDER BY id DESC";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}
// Truy vấn tất cả hàng hóa
function lay_tat_ca_san_pham($kw="",$iddm)
{
    // $sql = "SELECT * FROM product ORDER BY id DESC";
    // $ds_san_pham = pdo_query($sql);
    // return $ds_san_pham;
    $sql="select * from product where 1";
        if($kw!=""){
            $sql.=" and product_name like '%".$kw."%'";
        }
        if($iddm>0){
            $sql.= " and id_categories = '".$iddm."'";
        }
        
        $ds_san_pham=pdo_query($sql);
        return $ds_san_pham;
}

// Truy vấn tất cả hàng hóa theo sắp xếp theo số lượt xem giới hạn là 5 hàng hóa bắt đầu từ vị trí index = 0(đầu tiên)
function lay_san_pham_noi_bat()
{
    $sql = "SELECT * FROM product WHERE 1 ORDER BY view DESC LIMIT 0,5";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}

// Truy vấn tất cả hàng hóa có thuộc tính đặc biệt là 1 sắp xếp theo mã hàng hóa giảm dần giới hạn là 5 hàng hóa bắt đầu từ vị trí index = 0(đầu tiên)
function lay_san_pham_dac_biet()
{
    $sql = "SELECT * FROM product WHERE dac_biet = 1 ORDER BY id DESC LIMIT 0,5";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}

// Truy vấn tất cả hàng hóa sắp xếp theo mã hàng hóa giảm dần
function lay_san_pham_moi()
{
    $sql = "SELECT * FROM product WHERE 1 ORDER BY id DESC";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}

// Truy vấn một hàng hóa theo mã hàng hóa
function lay_san_pham_theo_ma($id)
{
    $sql = "SELECT * FROM product WHERE id = $id";
    $san_pham = pdo_query_one($sql);
    return $san_pham;
}


// Truy vấn tất cả hàng hóa theo mã loại(có cùng mã loại) và phải khác mã hàng hóa sắp xếp theo mã hàng hóa giảm giá giới hạn là 3 hàng hóa bắt đầu từ vị trí index = 0(đầu tiên)
function lay_san_pham_lien_quan($id, $id_categories)
{
    $sql = "SELECT * FROM product WHERE id_categories = $id_categories AND id <> $id ORDER BY id DESC LIMIT 0,3";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}

// Truy vấn tất cả hàng hóa theo loại hàng
function lay_san_pham_theo_dm($id_categories)
{
    $sql = "SELECT * FROM product WHERE 1";
    // Nếu tham số mã loại truyền vào lớn hơn 0
    if ($id_categories > 0) {
        // Nối chuỗi biến $sql
        // Truy vấn hàng hóa theo mã loại 
        $sql .= " AND id_categories = $id_categories";
    }
    // Default nối chuỗi sắp xếp theo mã hàng hóa giảm dần
    $sql .= " ORDER BY id DESC";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}

// Truy vấn hàng hóa theo từ khóa
function lay_san_pham_theo_kw($kw)
{
    // Truy vấn hàng hóa theo tên hàng hóa so sánh với từ khóa
    // Sử dụng câu lệnh LIKE để so sánh tham số $kw truyền vào với tên hàng hóa
    $sql = "SELECT * FROM hang_hoa WHERE ten_hang_hoa LIKE '%" . $kw . "%'";
    $ds_san_pham = pdo_query($sql);
    return $ds_san_pham;
}

// Cập nhật hàng hóa theo mã hàng hóa
function cap_nhat_san_pham($id, $product_name, $product_price, $product_price_sale, $description, $origin, $image2, $id_categories)
{
    // Nếu tham số hình khác rỗng(ở đây là người dùng có đăng tải hình ảnh lên)
    if ($image2 != "") {
        // Sẽ update tất cả bao gồm cả hình ảnh 

        $sql = "UPDATE `product` SET `product_name`='$product_name',`product_price`='$product_price',`product_price_sale`='$product_price_sale',`description`='$description',`origin`='$origin',`image2`='$image2',`id_categories`='$id_categories' WHERE id = $id";
    } else {
        // Nếu tham số hình là rỗng(người dùng giữ nguyên) thì sẽ cập nhật tất cả trừ hình ảnh
        $sql = "UPDATE `product` SET `product_name`='$product_name',`product_price`='$product_price',`product_price_sale`='$product_price_sale',`description`='$description',`origin`='$origin',`id_categories`='$id_categories' WHERE id = $id";

    }
    pdo_execute($sql);
}
