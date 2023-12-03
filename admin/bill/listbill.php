<div class="container">
<div class="row2">
         <div >
          <h1>DANH SÁCH ĐƠN HÀNG</h1>
         </div>
         <div class="space">
         <form action="index.php?act=listsp" method="post">
          <input type="text" name="kyw">
          <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
          </select>
          <input type="submit" name="listok" value="FINISH">
         </form>
         </div>

         <div >
           <div >
           <table class="space">
            <tr>
                <th></th>
                <th>MÃ ĐƠN HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>THAO TÁC</th>
                <th></th>
            </tr>

            <?php
            foreach ($list as $bill) {
                extract($bill);
                $kh=$bill["name"].'
                <br> '.$bill["email"].'
                <br> '.$bill["address"].'
                <br> '.$bill["tel"];
                $countsp=loadall_cart_count($bill["id"]);
                $ttdh=get_ttdh($bill["bill_status"])
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>DAM-'.$bill['id'].'</td>
                <td>'.$kh.'</td>
                <td>'.$countsp.'</td>
                <td>'.$bill['total'].'</td>
                <td>'.$ttdh.'</td>
                <td><a href="'.$suasp.'"><input type="button" class="form-button1" value="Sửa"></a> <a href= "'.$xoasp.'"><input type="button" class="form-button1" value="Xóa"></a></td>
                </tr>';
            }
            ?>

            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                  $hinh="<img src='".$hinhpath."' height='80'>";
                }else{
                  $hinh="no photo";
                }
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$price.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="button" class="form-button1" value="Sửa"></a> <a href= "'.$xoasp.'"><input type="button" class="form-button1" value="Xóa"></a></td>
                      </tr>';
            }
            ?>
           </table>
        </div class="form-form">
         <input class="form-button" type="button" value="CHỌN TẤT CẢ">
         <input  class="form-button" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="form-button" type="button" value="XÓA CÁC DANH MỤC ĐÃ CHỌN">
        <a href="index.php?act=addsp"> <input  class="form-button" type="button" value="NHẬP THÊM"></a>
        </div>
</div>
</div>