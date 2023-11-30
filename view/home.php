<!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
   
    <!--Offcanvas menu area end-->

    <!--slider area start-->
    <section class="slider_section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">Danh mục</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>
                                <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linksp="index.php?act=sanpham&iddm".$id;
                                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                                }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="slider_area owl-carousel">
                        <div class="single_slider d-flex align-items-center" >
                            <img src="view/img/slider/banner3.jpg" alt="">
                            <div class="slider_content">                               
                            </div>
                        </div>

                        <div class="single_slider d-flex align-items-center">
                            <img src="view/img/slider/banner2.jpg" alt="">
                            <div class="slider_content">                                
                            </div>
                        </div>
                        
                        <div class="single_slider d-flex align-items-center">
                            <img src="view/img/slider/banner1.jpg" alt="">
                            <div class="slider_content">                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--slider area end-->

    <!--shipping area start-->
    <section class="shipping_area mb-50">
        <div class="container">
            <div class=" row">
                <div class="col-12">
                    <div class="shipping_inner">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping1.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Free Shipping</h2>
                                <p>Free shipping on all US order</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping2.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Support 24/7</h2>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping3.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>100% Money Back</h2>
                                <p>You have 30 days to Return</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping4.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Payment Secure</h2>
                                <p>We ensure secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping area end-->
    
    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Sản Phẩm</strong>Mới</span></h2>
                        <ul class="product_tab_button nav" role="tablist" id="nav-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#brake" role="tab" aria-controls="brake" aria-selected="true">Brake Parts</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#wheels" role="tab" aria-controls="wheels" aria-selected="false">Wheels & Tires</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#turbo" role="tab" aria-controls="turbo" aria-selected="false">Turbo System</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="brake" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        <!-- <div class="single_product"> -->
                            <!-- <div class="product_name"> -->
                                <?php
                                foreach ($spnew as $sp) {
                                    extract($sp);
                                    $linksp="index.php?act=sanphamct&idsp=".$id;
                                    $hinh=$img_path.$img;
                                    echo '  <div class="product_thumb">
                                                <a class="primary_img" href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                            </div>

                                            <div class="single_product">
                                            <div class="product_name">
                                                <a href="'.$linksp.'">'.$name.'</a>
                                                <div class="product_footer d-flex align-items-center">
                                                <div class="price_box">
                                                    <span class="current_price">$'.$price.'</span>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                                </div>
                                                </div>
                                                <a href="'.$linksp.'">'.$mota.'</a>
                                                <div class="product_content">
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                </ul>
                                            </div>
                                            </div>
                                            </div>
                                            </div>';}
                                ?>
                                <!-- <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p> -->
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                            
    
    <!--custom product end-->
    