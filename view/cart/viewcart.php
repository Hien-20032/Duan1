
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Giỏ hàng</li>
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
            <form action="index.php?act=addtocart">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xóa</th>
                                            <th class="product_thumb">Ảnh</th>
                                            <th class="product_name">Tên</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    viewcart();
                                    ?>
                <div class="form-group">
<<<<<<< HEAD
                    <a href="index.php?act=delcart" ><input class="form-button" type="button" value="XÓA GIỎ HÀNG"></a> 
                    <a href="index.php?act=sanpham"><input class="form-button" type="button" value="TIẾP TỤC MUA HÀNG"></a>
                    <a href="index.php?act=bill"><input class="form-button" type="button" value="ĐẶT HÀNG"></a> 
                    <!-- <a href="index.php?act=addtocart"><input class="form-button" type="submit" value="CẬP NHẬT"></a>  -->
=======
                    <!-- <a href="index.php?act=capnhat"><input class="form-button" type="button" value="CẬP NHẬT"></a>  -->
                    <a href="index.php?act=delcart" ><input class="form-button" type="button" value="XÓA GIỎ HÀNG"></a> 
                    <a href="index.php?act=sanpham"><input class="form-button" type="button" value="TIẾP TỤC MUA HÀNG"></a>
                    <a href="index.php?act=bill"><input class="form-button" type="button" value="ĐẶT HÀNG"></a> 
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->