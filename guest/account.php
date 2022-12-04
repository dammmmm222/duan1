if ($hinh != "") {
        // Update thêm cả hình ảnh
        $sql = "UPDATE khach_hang SET ho = '$ho', ten = '$ten', hinh = '$hinh', email = '$email' WHERE ma_kh = '$ma_kh'";
    } else {
        // Ngược lại thì không update hình ảnh
        $sql = "UPDATE khach_hang SET ho = '$ho', ten = '$ten', email = '$email' WHERE ma_kh = '$ma_kh'";
    }
    pdo_execute($sql);
}

// Cập nhật tài khoản phía admin
function cap_nhat_tai_khoan_admin($id, $user_name, $full_name, $email, $phone, $address, $password, $role)
{
    $sql = "UPDATE `user` SET `user_name`='$user_name',`full_name`='$full_name',`email`='$email',`phone`='$phone',`address`='$address',`password`='$password',`role`='$role' WHERE `id` = '$id'";
    pdo_execute($sql);
}

// Xóa tài khoản theo mã khách hàng
function xoa_tai_khoan($id)
{
    $sql = "DELETE FROM user WHERE id = '$id'";
    pdo_execute($sql);
}

// Kiểm tra email
function ktra_email($email)
{
    // Truy vấn đến tài khoản mà email trùng với tham số email truyền vào
    $sql = "SELECT * FROM khach_hang WHERE email = '$email'";
    $tai_khoan_email = pdo_query_one($sql);
    return $tai_khoan_email;
}

// Kiểm tài khoản có tồn tại trong database ko

// Cập nhật mật khẩu theo mã khách hàng
function doi_mat_khau_tai_khoan($ma_kh, $mat_khau_moi)
{
    $sql = "UPDATE khach_hang SET mat_khau = '$mat_khau_moi' WHERE ma_kh = '$ma_kh'";
    pdo_execute($sql);
}
