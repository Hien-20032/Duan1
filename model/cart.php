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
?>