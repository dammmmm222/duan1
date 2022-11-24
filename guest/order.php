<?php
function total()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $key => $mycart) {
        $ttien = $mycart[3] * $mycart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $user, $address, $tel, $pttt, $time, $total)
{
    $sql = "insert into order (iduser,ship_name_user,ship_address,ship_phone_user,pttt,time,total) values('$iduser', '$user', '$address', '$tel','$pttt','$time', '$total')";
    return pdo_execute_lastinsertid($sql);
}
function insert_detail_order($idorder, $idpro, $quanlity, $total)
{
    $sql = "insert into detail_order(idorder,idpro,quanlity, total) values('$idorder', '$idpro','$quanlity', '$total')";
    return pdo_execute($sql);
}

function loadone_order($id)
{
    $sql = "SELECT * FROM `detail_order`,`product` WHERE `detail_order`.id_product = `product`.id ";
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_order($id)
{
    $sql = "SELECT * FROM `order` where id_user = " .$id;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_order_count($id)
{
    $sql = "select * from order where id=" .$id;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_pttt($n)
{
    switch ($n) {
        case '1':
            $pt = 'Thanh toán khi nhận hàng';
            break;
        case '2':
            $pt = 'Đã thanh toán';
            break;
        default:
            $pt = 'Thanh toán khi nhận hàng';
            break;
    }
    return $pt;
}
function order_detail($listorder_detail,$order){
     $img_path  = "../site/image/";
    $tong = 0;
    $i = 0;
    foreach($order as $order){
        $pttt =get_pttt($order['pttt']);
        echo '  <div class="flex justify-between items-center text-xl my-6">
        <div class="">
            <label for="">Mã Đơn Hàng : '.$order['id'].'</label>
        </div>
            <div class="">
                <label for="">Trạng Thái:</label>
                <label for="">'.$pttt.'</label>
            </div>
        </div>';
      foreach($listorder_detail as $listorder){
          $price = $listorder['quanlity']*$listorder['product_price'];
          $tong += $price;
          $hinh = $img_path . $listorder['image'];
          echo '  
        
          <hr>
          <div class="flex my-10 grid grid-cols-4">
              <div class="bg-[#F3F3F5]"><img src=" '.$hinh.'" alt=""></div>
              <div class="mx-10 flex justify-between items-center col-span-3">
                  <div class="">
                      <h3 class="font-semibold"> '.$listorder['product_name'].'</h3>
                      <label class="my-10">Số Lượng : '.$listorder['quanlity'].' </label><br>
                      <label class="my-10">Phân loại hàng : ###</label>
                  </div>
                  <div class="">
                      <span><del class="text-gray-400 mx-4">$test</del></span>
                      <span>$'.$listorder['product_price'].'</span>
                  </div>
              </div>
          </div>
          <hr>
          ';
      }
      echo '<div class="flex items-center text-xl space-x-2 justify-end my-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
          class="bi bi-basket2-fill" viewBox="0 0 16 16">
          <path
              d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z" />
      </svg>
      <label for="" class="text-xl font-semibold">Tổng Tiền : '.$tong.' </label>
  </div>
</div>';
    }}
function loadall_bill($iduser = 0)
{
    $sql = "select * from bill WHERE 1 ";
    if ($iduser > 0) $sql .= "AND `iduser`=" . $iduser;
    $sql .= " listorder_detail BY `id` DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id)
{
    $sql = "delete from `bill` where id=" . $id;
    pdo_execute($sql);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = 'Đơn hàng mới';
            break;
        case '1':
            $tt = 'Đang xử lý';
            break;
        case '2':
            $tt = 'Đang giao hàng';
            break;
        case '3':
            $tt = 'Đã giao hàng';
            break;
        default:
            $tt = 'Đơn hàng mới';
            break;
    }
    return $tt;
}