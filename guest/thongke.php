<?php
function loadall_thongke()
{
    $sql = "select categories.id as madm, categories.categories_name as tendm, count(product.id)";
    $sql .=" as countsp from product left join categories on categories.id = product.id_categories";
    $sql .= " JOIN detail_order on product.id = detail_order.id_product group by categories.id order by categories.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke_2()
{
    $sql = "select categories.id as madm, categories.categories_name as tendm, count(product.id) as countsp, min(product.product_price) as minprice, max(product.product_price) as maxprice, avg(product.product_price) as avgprice";
    $sql .= " from product left join categories on categories.id=product.id_categories";
    $sql .= " group by categories.id order by categories.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>
