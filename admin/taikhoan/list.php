<div class="container">
<div class="row2">
         <div >
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div >
          
           <div >
           <table class="space">
            <tr>
                <th></th>
                <th>MÃ TK</th>
                <th>TÊN ĐĂNG NHAP</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>ĐIỆN THOẠI</th>
                <th>VAI TRÒ</th>
                <th></th>
            </tr>

            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href= "'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                      </tr>';
            }
            ?>
           </table>
        </div>
           
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="XÓA CÁC DANH MỤC ĐÃ CHỌN">
        <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
         </div>
</div>
</div>