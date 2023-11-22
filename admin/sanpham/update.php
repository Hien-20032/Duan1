<?php
   if(is_array($sanpham)){
    extract($sanpham);
   }
   $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
      $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
      $hinh="no photo";
    }
?>

<div  class="container">
     <div>
      <h1>CẬP NHẬT LOẠI SẢN PHẨM</h1>
     </div>
     <div >
     <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">

       <div>
       <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                  if ($iddm==$danhmuc['id']) $s="selected"; else $s="";
                  echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                }
            ?>
          </select>
       </div>

       <div>
        <label>Tên sản phẩm </label> <br>
        <input class="question" type="text" name="tensp" value="<?=$name?>" >
       </div>

       <div>
        <label>Giá </label> <br>
        <input class="question" type="text" name="giasp" value="<?=$price?>" >
       </div>
       
       <div>
        <label>Hình </label> <br>
        <input class="question" type="file" name="hinh" >
        <?=$hinh?>
       </div>

       <div>
        <label>Mô tả  </label> <br>
        <textarea class="question" name="mota" cols="30" rows="10"><?=$mota?></textarea>
       </div>
       
       <div class="form-group ">
       <input type="hidden" name="id" value="<?=$sanpham['id']?>">
       <input class="form-button" type="submit" name="capnhat" value="CẬP NHẬT">
       <input class="form-button"  type="reset" value="NHẬP LẠI">
       <a href="index.php?act=listsp"><input  class="form-button" type="button" value="DANH SÁCH"></a>
       </div>

       <?php
       if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
       ?>

      </form>
     </div>
</div>