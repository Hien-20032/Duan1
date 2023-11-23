<div class="container">
<div class="row2">
         <div >
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" value="Tìm kiếm">
         </form>
         <div >
          
           <div >
           <table class="space">
            <tr>
                <th></th>
                <th>MÃ ĐƠN HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>THAO TÁC</th>
            </tr>

            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $kh=$bill["bill_name"].'
                <br> '.$bill["bill_email"].'
                <br> '.$bill["bill_address"].'
                <br> '.$bill["bill_tel"];
                $ttdh=get_ttdh($bill["bill_status"]);
                $countsp=loadall_cart_count($bill["id"]);
                echo'<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>DA1-'.$bill['id'].'</td>
                        <td>'.$kh.'</td>
                        <td>'.$countsp.'</td>
                        <td><strong>'.$bill["total"].'</strong>VND</td>
                        <td>'.$ttdh.'</td>
                        <td>'.$bill["ngaydathang"].'</td>
                        <td>
                            <input type="button" value="Sửa" name="" id="">
                            <input type="button" value="Xoá" name="" id="">
                    
                        </td>
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