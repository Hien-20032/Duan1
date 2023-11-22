
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đăng ký</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!-- customer login start -->
    <div class="customer_login mt-32">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Cập nhật tài khoản</h2>
                        <?php
                            if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);
                            }
                        ?>
                        <form action="index.php?act=edit_taikhoan" method="post">
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="email" name="email" value="<?=$email?>">
                            </p>
                            <p>
                                <label>User <span>*</span></label>
                                <input type="text" name="user" value="<?=$user?>">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="pass" value="<?=$pass?>">
                            </p>
                            <p>
                                <label>Địa chỉ <span>*</span></label>
                                <input type="text" name="address" value="<?=$address?>">
                            </p>
                            <p>
                                <label>Điện thoại <span>*</span></label>
                                <input type="text" name="tel" value="<?=$tel?>">
                            </p>
                            <div class="login_submit">
                                <a href="#">Quyên mật khẩu ?</a>
                                <input type="hidden" name="id" value="<?=$id?>">
                                <button type="reset" value="Nhập lại">Nhập lại</button>
                                <button type="submit" value="Cập nhật" name="capnhat">Cập nhật</button>
                            </div>

                        </form>
                        <h4>
                            <?php
                                if (isset($thongbao)&&($thongbao!="")) {
                                    echo $thongbao;
                                }
                            ?>
                        </h4>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
