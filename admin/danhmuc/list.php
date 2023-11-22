<div class="container">
<div class="row2">
         <div >
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div >
          
           <div >
           <table class="space">
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>

            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$suadm.'"><input type="button" class="form-button1" value="Sửa"></a> <a href= "'.$xoadm.'"><input type="button" class="form-button1" value="Xóa"></a></td>
                      </tr>';
            }
            ?>
           </table>
        </div class="form-group">
         <input class="form-button" type="button" value="CHỌN TẤT CẢ">
         <input  class="form-button" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="form-button" type="button" value="XÓA CÁC DANH MỤC ĐÃ CHỌN">
        <a href="index.php?act=adddm"> <input  class="form-button" type="button" value="NHẬP THÊM"></a>
         </div>
</div>
</div>