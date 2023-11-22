<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autima - Car Accessories Shop HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .form-group{
        margin: 10px 0px;
        }
        .form-button1{
            padding: 8px 30px;
            outline: none;
            border: none;
            border-radius: 20px;
            font-weight: bold;
            background-color: white;
            color: orangered;
            /* box-shadow: 0 0 20px blue; */
        }
       .form-button1:hover{
            box-shadow: 0  0 20px orangered;
            color: blue;
        } .form-button1:disabled{
            color: darkgray;
            box-shadow: inset 0 0 20px gray;
        }
        .form-button{
            padding: 8px 30px;
            /* outline: none; */
            /* border: none; */
            border-radius: 10px;
            font-weight: bold;
            background-color: white;
            color: orangered;
            /* box-shadow: 0 0 20px blue; */
        } .form-button:hover{
            box-shadow: 0  0 20px red;
            color: blue;
        } .form-button:disabled{
            color: darkgray;
            box-shadow: inset 0 0 20px gray;
        }
        .a{
            color: black;
        }
        .b{
            width: 500px;
            height: 600px;
        }
        .c{
            display:flex;
        }
        .d{
            color: red;
        }
        .box_items{
            border:1px solid #EEEE;
            border-radius:5px;
            text-align:center;
            height:480px;
            position:relative;
            overflow:hidden;
        }
        .box_items img{
            width:100%;
            height:250px;
            border-radius:10px;
        }
        .box_items a{
            text-decoration:none;
            color:black;
        
        }
        .box_items .item_name{
            margin-top:10px;
            font-size:20px;
            font-weight:bold;

        }
        .box_items .price{
            margin:10px 0;
            color:red;
            font-weight:500;

        }
        .box_items_img:hover .add{
            width:92%;
            bottom:30.66%;
        }
        .box_items_img .add{
        
            position:absolute;
            bottom:-100%;

            padding:10px;
            background-color:aqua;
            border-radius:6px;
            margin-top:20px;

        }
        .items{
            width:95%;
            margin:0 auto;
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            gap:20px;
        }
    </style>
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>
<body>
    <header class="header_area">
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_links">      
                                            <li><a href="index.php?act=dangky">Đăng ký</a></li>
                                            <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                        </ul>
                                    </li>
                                    <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                            <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#">$ VNĐ<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#">$ JPY</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="index.php"><h1 class="a" >CICI</h1></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                                <div class="header_wishlist">
                                    <a href=""><span class="lnr lnr-heart"></span>Danh sách yêu thích </a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="index.php?act=viewcart"><span class="lnr lnr-cart"></span>Giỏ hàng </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="index.php?act=sanpham">Sản Phẩm</a></li>
                                    <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                                    <li><a href="index.php?act=uudai">Ưu Đãi</a></li>
                                    <li><a href="index.php?act=baiviet">Bài Viết</a></li>
                                    <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>