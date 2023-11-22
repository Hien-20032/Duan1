
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li>Đăng nhập</li>
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
                        <h2>Đăng nhập</h2>
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                        ?>
                            <p>
                                <label>Xin chào</label>
                                <?=$user?>
                            </p>
                            <p>
                            <p>
                                <span>*</span><label><a href="admin/index.php">Đăng nhập ADMIN</a></label>
                            </p>
                            <p>
                                <span>*</span><label><a href="index.php?act=quenmk">Quên mật khẩu</a></label>
                            </p>
                            <p>
                                <span>*</span><label><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></label>
                            </p>
                            <p>
                                <span>*</span><label><a href="index.php?act=thoat">Thoát</a></label>
                            </p>                         
                            </p>
                        <?php 
                            }else{
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <p>
                                <label>Tên đăng nhập <span>*</span></label>
                                <input type="text" name="user">
                            </p>
                            <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="pass">
                            </p>
                            <div class="login_submit">
                                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                                <label for="remember">
                                    <input type="checkbox" name="">
                                    Ghi nhớ tài khoản
                                </label>
                                <button type="submit" value="Đăng nhập" name="dangnhap">Đăng nhập</button>
                            </div>
                        </form>
                            <?php } ?>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
