<?php
require_once "pdo.php";

// Thêm loại hàng
function them_danh_muc($cate_name, $cate_img)
{
    $sql = " INSERT INTO `categories`(`name`) VALUES ('$cate_name')";

    pdo_execute($sql);
}

// Xóa loại hàng theo mã loại
function xoa_danh_muc($cate_id)
{
    $sql = "DELETE FROM categories WHERE id = $cate_id";
    pdo_execute($sql);
}

// Truy vấn tất cả dữ liệu của bảng loại hàng
function lay_tat_ca_danh_muc($order = "DESC") // Tham số order nhận giá trị mặc định DESC sắp xếp theo giảm dần
{
    $sql = "SELECT * FROM categories ORDER BY id $order";
    $ds_danh_muc = pdo_query($sql);
    return $ds_danh_muc;
}

// Truy vấn một loại hàng theo mã loại
function lay_danh_muc_theo_ma($cate_id)
{
    $sql = "SELECT * FROM categories WHERE id = $cate_id";
    $danh_muc = pdo_query_one($sql);
    return $danh_muc;
}

// Lấy ra tên loại hàng theo mã loại
function lay_ten_danh_muc($cate_id)
{
    // Nếu mã loại truyền vào lớn hơn 0
    if ($cate_id > 0) {
        $sql = "SELECT * FROM categories WHERE id = $cate_id";
        $categories = pdo_query_one($sql);
        // Biến các cột(thuộc tính) trong bảng loại hàng thành các biến
        extract($categories);
        return $cate_name; // Trả về biến(ten_loai) tên loại hàng
    } else {
        // Nếu $ma_loại nhỏ hơn 0 trả về chuỗi rỗng
        return "";
    }
}

// Cập nhật loại hàng theo mã loại
function cap_nhat_danh_muc($cate_id, $cate_name, $cate_img)
{

    $sql = "UPDATE categories SET id ='$cate_id', name = '$cate_name' WHERE id = $cate_id";
    pdo_execute($sql);
}
