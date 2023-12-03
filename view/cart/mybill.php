
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đơn hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-32">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            
                                            <th class="product_thumb">Mã đơn hàng</th>
                                            <th class="product_name">Tên</th>                                            
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng</th>
                                            <th class="product-price">Tình trạng đơn hàng</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $ttien=$cart[3]*$cart[4];
                                      
                                        echo '
                                        <tbody>  
                                            <tr>
                                                
                                                <td class="product_thumb"><a href="#">DAM-001</td>
                                                <td class="product_name"><a href="#">'.$cart[1].'</a></td>
                                                <td class="product_quantity"><input type="number" value="'.$cart[4].'"></td>
                                                <td class="product_total">'.$ttien.'đ</td>
                                                <td class="">Đã thanh toán</td>
                                            </tr>
                                        </tbody>
                                        <table>
                                </div>
                                </div>
                                </div>
                                </div>';
                              
                                    }                                                                    
                                    ?>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->