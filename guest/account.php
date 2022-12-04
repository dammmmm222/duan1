<?php
function loadall_taikhoan()
{
    $sql = "select * from user order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function getaddress($id)
{
    $sql = "SELECT `full_name`, `phone`, `address` FROM `user` WHERE id =". $id;
    $address = pdo_query_one($sql);
    return $address;
}
function search_id()
{
    $sql = "select id from user order by id desc LIMIT 0,1";
    $listtaikhoan = pdo_query_one($sql);
    $iduser = $listtaikhoan['id'];
    return $iduser;
}
function insert_taikhoan($user, $pass, $email)
{
    $sql = "insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function check_user($user, $pass)
{
    $sql = "select * from user where user_name='" . $user . "' AND password='" . $pass . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "', pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "'where id=" . $id;
    pdo_execute($sql);
}
