<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
<<<<<<< HEAD
<?php
    if(isset($bill)&&(is_array($bill))){
        extract($bill);
    }
?>
=======

>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
    
    <!--Checkout page section-->
    <div class="Checkout_section mt-32">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    
                </div>
            </div>
<<<<<<< HEAD
            <li>MÃ ĐƠN HÀNG :<?php=$bill['id']?></li>
            <li>NGÀY ĐẶT HÀNG :<?php=$bill['ngaydathang']?></li>
            <li>TỔNG ĐƠN HÀNG :<?php=$bill['total']?></li>

=======
            <!-- <h3>MÃ ĐƠN HÀNG :</h3> -->
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
            <!-- Thông tin khách hàng -->
            <div class="checkout_form">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
<<<<<<< HEAD
=======
                        <?php
                        if(isset($_SESSION['user'])){
                            $user=$_SESSION['user']['user'];
                            $address=$_SESSION['user']['address'];
                            $email=$_SESSION['user']['email'];
                            $tel=$_SESSION['user']['tel'];
                        }else{
                            $user="";
                            $address="";
                            $email="";
                            $tel="";
                        }
                        ?>
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
                            <h3>Thông tin khách hàng</h3>
                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <label>Người đặt hàng <span>*</span></label><?=$bill['bill_user']?>
                                </div>
                                
                                <div class="col-12 mb-20">
                                    <label for="country">Quốc gia <span>*</span></label>
                                    <select class="niceselect_option" name="cuntry" id="country">
                                        <option value="2">Việt Nam</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>

                                    </select>
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Địa chỉ <span>*</span></label><?=$bill['bill_address']?>
                                    <!-- <input placeholder="House number and street name" type="text" name="address" value=""> -->
                                </div>
                               
                                <div class="col-lg-6 mb-20">
                                    <label>Điện thoại<span>*</span></label><?=$bill['bill_tel']?>
                                    <!-- <input type="text" name="tel" value=""> -->

                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label> Email <span>*</span></label><?=$bill['bill_email']?>
                                    <!-- <input type="text" name="email" value=""> -->

                                </div>
                                <div class="col-lg-6 mb-20">
<<<<<<< HEAD
                                    <label>Phương thức thanh toán <span>*</span></label><?=$bill['bill_pttt']?>
=======
                                    <label>Phương thức thanh toán <span>*</span></label><?php=$pttt?>
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
                                    
                                </div>
                                <div class="col-12 mb-20">
                                    
                                </div>
                                <div class="col-12 mb-20">
                                    <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                        <div class="row">
                                            <div class="col-lg-6 mb-20">
                                                <label>Người đặt hàng<span>*</span></label>
                                                <input type="text">
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <div class="select_form_select">
                                                    <label for="countru_name">Quốc Gia <span>*</span></label>
                                                    <select class="niceselect_option" name="cuntry" id="countru_name">
                                                        <option value="2">Việt Nam</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">Afghanistan</option>
                                                        <option value="5">Ghana</option>
                                                        <option value="6">Albania</option>
                                                        <option value="7">Bahrain</option>
                                                        <option value="8">Colombia</option>
                                                        <option value="9">Dominican Republic</option>

                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="col-lg-6 mb-20">
                                                <label>Điện thoại<span>*</span></label>
                                                <input type="text">

                                            </div>
                                            <div class="col-lg-6">
                                                <label> Email <span>*</span></label>
                                                <input type="text">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>


                    <!-- Đơn hàng -->
                    <div class="col-lg-6 col-md-6">
                            <form action="#">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                    <?php
<<<<<<< HEAD
                        bill_chi_tiet($billct);
=======
                        $tong=0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            echo '<tbody>
                                        <tr>
                                            <td>'.$cart[1].'<strong> × '.$cart[4].'</strong></td>
                                            <td>$'.$ttien.'</td>
                                        </tr>
                                    </tbody>';
                        } 
                        echo'
                        <tfoot>
                                        <tr class="order_total">
                                            <th>Tổng đơn hàng</th>
                                            <td><strong>$'.$tong.'</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                        </div>';
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
                    ?>
                            <!-- Phương thức thanh toán -->
                            
                        </form>
                    </div>
                    <H2 class="d">ĐẶT HÀNG THÀNH CÔNG</H2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->