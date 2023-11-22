
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
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
                        <h2>Đăng ký</h2>
                        <form action="index.php?act=dangky" method="post">
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="email" name="email">
                            </p>
                            <p>
                                <label>User <span>*</span></label>
                                <input type="text" name="user">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="pass">
                            </p>
                            <div class="login_submit">
                                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                                <button type="reset" value="Nhập lại">Nhập lại</button>
                                <button type="submit" value="Đăng ký" name="dangky">Đăng ký</button>
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
