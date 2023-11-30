<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="../css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="../css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="../css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="../css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/vendor/modernizr-3.7.1.min.js"></script>
    <style>
        .binhluan table{
            width: 100%;
        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>

<div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                                <div class="reviews_wrapper">
                                    <h2>Bình luận</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2023</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    
                                    <div class="product_review_form">
                                    <div class="row">
                                                <div class="col-12 binhluan">
                                                    <table border=1>
                                                        <?php
                                                            foreach ($dsbl as $bl) {
                                                                extract($bl);
                                                                echo '<tr><td>'.$noidung.'</td>';
                                                                echo '<td>'.$iduser.'</td>';
                                                                echo '<td>'.$ngaybinhluan.'</td></tr>';
                                                            }
                                                        ?>
                                                    </table>
                                                </div>
                                            </div>
                                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" >
                                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                                            <input type="text" name="noidung">
                                            <!-- <input type="submit" name="guibinhluan" value="Gửi bình luận"> -->
                                            <!-- <button type="text" name="noidung">1</button> -->
                                            <button type="submit" name="guibinhluan" value="Gửi bình luận">Gửi</button>
                                        </form>
                                    </div>
                                    <?php
                                        if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                                            $noidung=$_POST['noidung'];
                                            $idpro=$_POST['idpro'];
                                            $iduser=$_SESSION['user']['id'];
                                            $ngaybinhluan=date('h:i:sa d/m/Y');
                                            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                                            //header("Location: ".$_SERVER['HTTP_REFERER']);
                                            //echo ("<script>location.href='index.php?act=sanphamct&idsp=28#'</script>");
                                            
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>