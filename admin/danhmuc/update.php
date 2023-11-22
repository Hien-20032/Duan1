<?php
   if(is_array($dm)) {
    extract($dm);
   }
?>

<div  class="container">
     <div>
      <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
     </div>
     <div>
      <form action="index.php?act=updatedm" method="POST">
       <div>
       <label> Mã loại </label> <br>
        <input class="question" type="text" name="maloai" placeholder="nhập vào mã loại">
       </div>
       <div>
        <label>Tên loại </label> <br>
        <input class="question" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>" placeholder="nhập vào tên">
       </div>
       <div class="form-group">
     <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id?>">
     <input class="form-button" type="submit" name="capnhat" value="CẬP NHẬT">
     <input class="form-button"  type="reset" value="NHẬP LẠI">

     <a href="index.php?act=listdm"><input  class="form-button" type="button" value="DANH SÁCH"></a>
       </div>

       <?php
       if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
       ?>

      </form>
     </div>
</div>