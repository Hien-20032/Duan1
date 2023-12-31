<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/cart.php";
    include "view/header.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home(); 
    $dsdm=loadall_danhmuc();
    $spbanchay=loadall_sanpham_top10();

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch($act){
            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    // $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                    
                    include "view/sanphamct.php";
                }else {
                    include "view/home.php";
                }
                break;
            case 'dangky':
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đã đăng ký thành công";
                    echo ("<script>location.href='index.php?act=dangnhap'</script>");           
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':               
                    if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser= checkuser($user,$pass);
                        if (is_array($checkuser)) {
                        $_SESSION['user']=$checkuser;
                        $thongbao="Đã đăng nhập thành công";
                        // header('Location: index.php');
                        // echo ("<script>location.href='index.php'</script>");
                        }else{
                        $thongbao="Tài khoản không tồn tại";
                    }}
                    include "view/taikhoan/dangnhap.php";
                break;  
            case 'edit_taikhoan':               
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    //header('Location: index.php?act=edit_taikhoan');
                    echo ("<script>location.href='index.php?act=edit_taikhoan'</script>");
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':               
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao="Mật khẩu của bạn là:".$checkemail['pass'];
                    }else {
                        $thongbao="Email này ko tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                // header('Location:index.php?act=dangnhap');
                include "view/taikhoan/dangnhap.php";
                break;

            case 'guibinhluan':
                if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['id'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                    // header("Location: ".$_SERVER['HTTP_REFERER']);
                    //echo ("<script>location.href='index.php?act=sanphamct&idsp=28#'</script>");
                }
                echo ("<script>location.href='index.php?act=sanphamct'</script>");
                break; 
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    // $oldprice=$_POST['oldprice'];
                    $soluong=1;
                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    // array_push($_SESSION['mycart'],$spadd);
                    if (isset($_POST['sl']) && ($_POST['sl']) > 0) {
                        $soluong = $_POST['sl'];
                     }
         
                     // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không, nếu có thì cập nhật số lượng
                     $found = false;
                     foreach ($_SESSION['mycart'] as &$item) {
                        if ($item[1] == $name) {
                           // Tăng số lượng
                           $item[4] += $soluong;
                           // Cập nhật tổng tiền
                           $item[5] = $item[4] * $item[3]; // Số lượng * Giá mới
                           $found = true;
                           break;
                        }
                     }
         
                     // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào giỏ hàng
                     if (!$found) {
                        $spadd[4] = $soluong; // Số lượng
                        $spadd[5] = $soluong * $price; // Tổng tiền
                        $_SESSION['mycart'][] = $spadd;
                     }
                  }
                  include "view/cart/viewcart.php";
                  break;

            case 'capnhat' :
                // if(isset($_POST['update_cart'])){}
                // echo ("<script>location.href='index.php?act=viewcart'</script>");
                // if(isset($_POST['capnhat'])){
                //     $spnew=
                // }
                include "view/cart/viewcart.php";
                break;

            case 'delcart':
                if(isset($_GET['idcart'])&&($_GET['idcart'])>=0){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1); // Mảng xóa từng phần tử array_slice(mảng cần xóa,vị trí cần xóa,xóa bao nhiêu phần tử)
                }else{
                    $_SESSION['mycart']=[];
                }
                echo ("<script>location.href='index.php?act=viewcart'</script>");
                break;

            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billconfirm':
<<<<<<< HEAD
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])>0){
=======
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
                    $name=$_POST['user'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=tongdonhang();
                    // tạo bill
                    $idbill=insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
<<<<<<< HEAD
            
                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }

                    $_SESSION['cart']=[];
                }
                $idbill = isset($idbill) ? $idbill : null;
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);

                // $bill=loadone_bill($idbill);
                // $billct=loadall_cart($idbill);
                include "view/cart/billconfirm.php";
                break;
            case "success":
                if (isset($_SESSION['success'])) {
                    include 'view/success.php';
                } else {
                    header("Location: index.php");
                }
                break;
                
=======
                    
                    // insert into cart : $_SESSION['mycart'] & idbill
                    if(isset($_SESSION['mycart'])&&(count($_SESSION['mycart'])>0)){
                        foreach ($_SESSION['mycart'] as $cart) {
                            addtocart($idbill,$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5]);
                        }
                    }   

                    // $_SESSION['cart']=[];
                }
                // $bill=loadone_bill($idbill);
                // $billct=loadall_cart($idbill);

                // if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                //     $ngaydathang=date('h:i:sa d/m/Y');
                //     $tongdonhang=tongdonhang();

                //     $spadd=[$ngaydathang,$tongdonhang];
                //     array_push($_SESSION['mybill'],$spadd);
                    
                // }
                include "view/cart/billconfirm.php";
                break;
>>>>>>> ac5af3d0e548df32ea2f736aaef77981a01deea9
            case 'mybill':
                include "view/cart/mybill.php";
                break;

            case 'sanpham':
                include "view/sanpham.php";
                break;  
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'baiviet':
                include "view/gioithieu.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>