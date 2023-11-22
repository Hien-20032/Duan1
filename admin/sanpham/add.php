<div  class="container">
     <div>
      <h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
     </div>
     <div>
      <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
       <div>
       <label> Danh mục</label> <br> 
       <select name="iddm">
              <?php
                foreach ($listdanhmuc as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
              ?>
        </select>
       </div>
       <div>
        <label>Tên sản phẩm </label> <br>
        <input class="question" type="text" name="tensp" placeholder="nhập vào tênsp">
       </div>
       <div>
        <label>Giá </label> <br>
        <input class="question" type="text" name="giasp" placeholder="nhập vào giasp">
       </div>
       <div>
        <label>Hình </label> <br>
        <input class="question" type="file" name="hinh">
       </div>
       <div>
        <label>Mô tả  </label> <br>
        <textarea name="mota" cols="30" rows="10"></textarea>
       </div>
       
       <div class="form-form">
     <input class="form-button" type="submit" name="themmoi" value="THÊM MỚI">
     <input class="form-button"  type="reset" value="NHẬP LẠI">

     <a href="index.php?act=listsp"><input  class="form-button" type="button" value="DANH SÁCH"></a>
       </div>

       <?php
       if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
       ?>

      </form>
     </div>
</div>