<div  class="container">
     <div>
      <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
     </div>
     <div>
      <form action="index.php?act=adddm" method="POST">
       <div>
       <label> Mã loại </label> <br>
        <input class="question" type="text" name="maloai" placeholder="nhập vào mã loại">
       </div>
       <div">
        <label>Tên loại </label> <br>
        <input class="question" type="text" name="tenloai" placeholder="nhập vào tên">
       </div>
       <div class="form-group">
     <input class="form-button" type="submit" name="themmoi" value="THÊM MỚI">
     <input class="form-button"  type="reset" value="NHẬP LẠI">

     <a href="index.php?act=listdm"><input  class="form-button" type="button" value="DANH SÁCH"></a>
       </div>

       <?php
       if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
       ?>

      </form>
     </div>
</div>