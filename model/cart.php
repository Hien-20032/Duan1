<?php
function viewcart(){
    global $img_path;
    $tong=0;
    $i=0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien; 
        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><i class="fa fa-trash-o"></i></a>';
        echo '
        <tbody>  
                    <tr>
                        <td class="product_remove">'.$xoasp.'</td>
                        <td class="product_thumb"><a href="#"><img src="'.$hinh.'" alt=""></a></td>
                        <td class="product_name"><a href="#">'.$cart[1].'</a></td>
                        <td class="product-price">$'.$cart[3].'</td>
                        <td class="product_quantity"><input type="number" value="'.$cart[4].'"></td>
                        <td class="product_total">$'.$ttien.'</td>
                    </tr>
        </tbody>
        <table>
</div>
</div>
</div>
</div>';
$i++;
    } 
    echo '<div class="coupon_area">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code">
                            <h3>Tổng đơn hàng</h3>
                            <div class="coupon_inner">                                                                
                                <div class="cart_subtotal">                                                       
                                    <p class="cart_amount">$'.$tong.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}

// function bill_chi_tiet($listbill){
//     $tong=0;
//     foreach ($listbill as $cart) {
//         $tong+=$cart['thanhtien'];
//         echo '<tbody>
//                     <tr>
//                         <td>'.$cart['name'].'<strong> × '.$cart['soluong'].'</strong></td>
//                         <td>$'.$cart['thanhtien'].'</td>
//                     </tr>
//                 </tbody>';
//     } 
//     echo'
//     <tfoot>
//                     <tr class="order_total">
//                         <th>Tổng đơn hàng</th>
//                         <td><strong>$'.$tong.'</strong></td>
//                     </tr>
//                 </tfoot>
//             </table>
//     </div>';
// }

function tongdonhang(){
$tong=0;
foreach ($_SESSION['mycart'] as $cart) {
    $ttien=$cart[3]*$cart[4];
    $tong+=$ttien;
}
return $tong;
}

function insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $conn=connectdb();
    $sql="INSERT INTO bill (bill_user,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values ('".$name."','".$email."','".$address."','".$tel."','".$pttt."','".$ngaydathang."','".$tongdonhang."')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}

function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $conn=connectdb();
    $sql="INSERT INTO cart (iduser,idpro,img,name,price,soluong,thanhtien,idbill) values ('".$iduser."','".$idpro."','".$img."','".$name."','".$price."','".$soluong."','".$thanhtien."','".$idbill."')";
    // return pdo_execute($sql);
    $conn->exec($sql);
}

// function loadone_bill($id){
//     $sql="select * from bill where id= ".$id;
//     $bill=pdo_query_one($sql);
//     return $bill;
// }

// function loadall_cart($idbill){
//     $sql="select * from cart where idbill= ".$idbill;
//     $bill=pdo_query($sql);
//     return $bill;
// }

// function loadall_cart_count($idbill){
//     $sql="select * from cart where idbill= ".$idbill;
//     $bill=pdo_query($sql);
//     return sizeof($bill);
// }

// function loadall_bill($iduser){
//     $sql="select * from bill where 1";
//     if($idsuer>0) $sql.=" AND idser=".$iduser;
//     $sql.=" order by id desc";
//     $listbill=pdo_query($sql);
//     return $listbill;
// }
 ?>