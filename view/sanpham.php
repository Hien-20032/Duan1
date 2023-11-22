<div class="shop_area shop_reverse">
    <div class="container">
        <div class="row">
    <!--breadcrumbs area start-->
    
    <!--shop  area start-->
             <div class="col-lg-3 col-md-12">
                    <aside class="sidebar_widget">
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
                    </aside>
            </div>

                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div >
                        <div class="shop_title">
                        <h1>shop</h1>
                        </div>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9</p>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                
<div class="items">
<?php
    $i=0;
    foreach ($spnew as $sp) {
        extract($sp);
        $linksp="index.php?act=sanphamct&idsp=".$id;
        $hinh=$img_path.$img;
        if (($i==2)||($i==5)||($i==8)) {
            $mr="";
        }else {
            $mr="mr";
        }
    echo '
    <div class="box_items '.$mr.'">
    <div class="product_thumb">
            <div class="box_items_img"><a href="'.$linksp.'"><img  src="'.$hinh.'" alt=""></div></a>
            <div class="product_name grid_name">
                <h3><a href="'.$linksp.'">'.$name.'</a></h3>
            </div>

            <div class="product_content grid_content">
                <div class="content_inner">
                    <div class="product_ratings">
                        <ul>
                            <li><a href="#"><i class="ion-star"></i></a></li>
                            <li><a href="#"><i class="ion-star"></i></a></li>
                            <li><a href="#"><i class="ion-star"></i></a></li>
                            <li><a href="#"><i class="ion-star"></i></a></li>
                            <li><a href="#"><i class="ion-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="product_footer d-flex align-items-center">
                        <div class="price_box">
                            <span class="current_price" >'.$price.'đ</span>
                            <span class="old_price">$3200.00</span>
                        </div>
                        <div class="add_to_cart">
                            <a href="viewcart.php" title="add to cart"><span class="lnr lnr-cart"></span></a>
                        </div>
                    </div>                  
                </div>
            </div>

            <div>
            <form action="index.php?act=addtocart" method="post">
             <input type="hidden" name="id" value="'.$id.'" >
            <input type="hidden" name="name" value="'.$name.'" >
            <input type="hidden" name="img" value="'.$img.'" >
             <input type="hidden" name="price" value="'.$price.'" >
            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
            </form>
            </div>

    </div>
    </div>';
            $i+=1;    
    }?>
    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->