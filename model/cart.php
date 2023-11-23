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
                        <td class="product-price">'.$cart[3].'đ</td>
                        <td class="product_quantity"><input type="number" value="'.$cart[4].'"></td>
                        <td class="product_total">'.$ttien.'đ</td>
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
                        <div class="coupon_code left">
                            <h3>Phiếu mua hàng</h3>
                            <div class="coupon_inner">
                                <p>Nhập mã phiếu giảm giá nếu bạn có.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Áp dụng phiếu giảm giá</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Tổng đơn hàng</h3>
                            <div class="coupon_inner">                                                                
                                <div class="cart_subtotal">                                                       
                                    <p class="cart_amount">'.$tong.' VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}

function tongdonhang(){
$tong=0;
foreach ($_SESSION['mycart'] as $cart) {
    $ttien=$cart[3]*$cart[4];
    $tong+=$ttien;
}
return $tong;
}

function insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql="insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql="select * from bill where id= ".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
?>