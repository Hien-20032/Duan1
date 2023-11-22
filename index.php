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

            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                    
                }
                include "view/cart/viewcart.php";
                break; 
            case 'delcart':
                // $yourURL="index.php?act=viewcart";
                if(isset($_GET['idcart'])){
                    array_slice($_SESSION['mycart'],$_GET['idcart'],1); // Mảng xóa từng phần tử array_slice(mảng cần xóa,vị trí cần xóa,xóa bao nhiêu phần tử)
                }else{
                    $_SESSION['mycart']=[];
                }
                // header("Location: index.php?act=viewcart");
                echo ("<script>location.href='index.php?act=viewcart'</script>");
                break;

            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billconfirm':
                include "view/cart/billconfirm.php";
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