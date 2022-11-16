<?php
<?php
function insert_product($product_name, $product_price, $image, $view, $id_categories)
{
    $sql = "insert into product (name,product_price,img,view,id_categories) values('$product_name','$product_price','$image','$view','$id_categories')";
    pdo_execute($sql);
}

function delete_product($id)
{
    $sql = "delete from product where id=" . $id;
    pdo_execute($sql);
}

function loadall_product_home()
{
    $sql = "select * from product where 1 order by id desc limit 0,9";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product($kyw = "", $id_categories = 0)
{
    $sql = "select * from product where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($id_categories > 0) {
        $sql .= " and id_categories ='" . $id_categories . "'";
    }
    $sql .= " order by id desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function load_name_categories($id_categories)
{
    if ($id_categories > 0) {
        $sql = "select * from danhmuc where id=" . $id_categories;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}

function loadone_product($id)
{
    $sql = "select * from product where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_product_cungloai($id, $id_categories)
{
    $sql = "select * from product where id_categories=" . $id_categories . " AND id <>" . $id;
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function update_product($id, $id_categories, $product_name, $product_price, $view, $image)
{
    if ($image != "") {
        $sql = "update product set id_categories='" . $id_categories . "', name='" . $product_name . "',product_price='" . $product_price . "',view='" . $view . "',img='" . $image . "'where id=" . $id;
    } else {
        $sql = "update product set id_categories='" . $id_categories . "', name='" . $product_name . "',product_price='" . $product_price . "',view='" . $view . "'where id=" . $id;
    }
    pdo_execute($sql);
}

?>