<!-- <div class="my-3 pt-3 text-end">
  <a class="btn btn-primary stretched-link" href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a>
</div> -->
<form class="my-5 pt-3" action="modules/quanlysanpham/xuly.php?action=them" method="post" enctype="multipart/form-data">
  <div class="col-9 mx-auto">
      <h3 class="text-center">Thêm mới sản phẩm</h3>
      <div class="mb-3">
        <label class="form-label">Tên sản phẫm</label>
        <input type="text" class="form-control" name="tensp">
      </div>
      <div class="mb-3">
        <label class="form-label">Mã SP</label>
        <input type="text" class="form-control" name="masp">
      </div>
      <div class="mb-3">
        <label class="form-label d-block">Hình ảnh</label>
        <input type="file" class="form-control-lg" name="hinhanh" />
      </div>
      <div class="mb-3">
        <label class="form-label">Giá đề xuất</label>
        <input type="text" class="form-control" name="giadexuat">
      </div>
      <div class="mb-3">
        <label class="form-label">Giá giảm</label>
        <input type="text" class="form-control" name="giagiam">
      </div>
      <div class="mb-3">
        <label class="form-label">Nội dung</label>
        <textarea name="noidung" cols="40" rows="10"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="text" class="form-control" name="soluong">
      </div>
      <div class="mb-3">
        <?php
          $sql_type_product = "select idloaisp,tenloaisp from loaisp";
          $row = mysqli_query($conn, $sql_type_product);
        ?>
        <label class="form-label">Loại sản phẩm</label>
        <select name="loaisp" class="form-control">
          <option>Lựa chon ---</option>
          <?php
            while ($row_type_product = mysqli_fetch_array($row )) {
          ?>
            <option value="<?php echo $row_type_product['idloaisp'] ?>"><?php echo $row_type_product['tenloaisp'] ?></option>
          <?php
            }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <?php
          $sql_brands = "select * from hieusp";
          $result_brands = mysqli_query($conn, $sql_brands);
        ?>
        <label class="form-label">Tên nhà sản xuất</label>
        <select name="nhasx" class="form-control">
          <option>Lựa chon ---</option>
          <?php
            while ($row_brands = mysqli_fetch_array($result_brands)) {
          ?>
           <option value="<?php echo $row_brands['idhieusp'] ?>"><?php echo $row_brands['tenhieusp'] ?></option>
          <?php
            }
          ?>
        </select>
      </div>
      <div class="mb-3">
          <label for="">Tình trạng</label>
          <select name="tinhtrang" class="form-control">
            <option value="1">Kích hoạt</option>
            <option value="2">Không kích hoạt</option>
          </select>
      </div>
      <div class="mb-3 text-center">
        <input type="submit" name="them" class="btn btn-primary" value="Thêm sản phẩm">
      </div>
  </div>
</form>