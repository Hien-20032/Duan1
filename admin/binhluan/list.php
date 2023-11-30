<div class="container">
<div class="row2">
         <div >
          <h1>DANH SÁCH BINH LUAN</h1>
         </div>
         <div >
          
           <div >
           <table class="space">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Noi dung</th>
                <th>Iduser</th>
                <th>Idpro</th>
                <th>Ngay binh luan</th>
                <th></th>
            </tr>

            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl="index.php?act=suabl&id=".$id;
                $xoabl="index.php?act=xoabl&id=".$id;
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href= "'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                      </tr>';
            }
            ?>
           </table>
        </div>
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
         </div>
</div>
</div>