
<?php
  $sql = "select * from sanpham where idsanpham='$_GET[id]' ";
  $row = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($row);
?>
<div class="py-4 text-end mb-4">
  <a class="btn btn-primary" href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a>
</div>
<form action="modules/quanlysanpham/xuly.php?id=<?php echo $data['idsanpham'] ?>&action=sua" method="post" enctype="multipart/form-data">
  <div class="col-9 mx-auto">
    <div class="text-center">
      <h3>Sửa sản phẩm</h3>
    </div>
    <div class="mb-3">
      <label class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control" name="tensp" value="<?php echo $data['tensp'] ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Mã sản phẩm</label>
      <input type="text" class="form-control" name="masp" value="<?php echo $data['masp'] ?>">
    </div>
    <div class="mb-3">
      <label class="form-label d-block">Hình ảnh</label>
      <input type="file" name="hinhanh" class="form-control-lg" />
      <img src="modules/quanlysanpham/uploads/<?php echo $data['hinhanh'] ?>" width="80" height="80">
    </div>
    <div class="mb-3">
      <label class="form-label">Giá đề xuất</label>
      <input type="text" class="form-control" name="giadexuat" value="<?php echo $data['giadexuat'] ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Giá giảm</label>
      <input type="text" class="form-control" name="giagiam" value="<?php echo $data['giagiam'] ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Nội dung</label>
      <textarea name="noidung" class="form-control" cols="40" rows="10"><?php echo $data['noidung'] ?></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Số lượng</label>
      <input  type="text" name="soluong" class="form-control" value="<?php echo $data['soluong'] ?>">
    </div>
    <div class="mb-3">
      <?php
        $sql_type_product = "select * from loaisp";
        $row_type_product = mysqli_query($conn, $sql_type_product);
      ?>
      <label class="form-label">Loại sản phẩm</label>
      <select name="loaisp" class="form-control">
        <?php
        while ($result_type_product = mysqli_fetch_array($row_type_product)) {
          if ($data['loaisp'] == $result_type_product['idloaisp']) {
        ?>
            <option selected="selected" value="<?php echo $result_type_product['idloaisp'] ?>"><?php echo $result_type_product['tenloaisp'] ?></option>
          <?php
          } else {
          ?>
            <option value="<?php echo $result_type_product['idloaisp'] ?>"><?php echo $result_type_product['tenloaisp'] ?></option>
        <?php
          }
        }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <?php
        $sql_brands = "select * from hieusp";
        $row_brands = mysqli_query($conn, $sql_brands);
      ?>
      <label class="form-label">Tên nhà sản xuất</label>
      <select name="nhasx" class="form-control">
        <?php
        while ($result_brands = mysqli_fetch_array($row_brands)) {
          if ($data['nhasx'] == $result_brands['idhieusp']) {
        ?>
            <option selected="selected" value="<?php echo $result_brands['idhieusp'] ?>"><?php echo $result_brands['tenhieusp'] ?></option>
          <?php
          } else {
          ?>
            <option value="<?php echo $result_brands['idhieusp'] ?>"><?php echo $result_brands['tenhieusp'] ?></option>
        <?php
          }
        }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Trạng thái</label>
      <select name="tinhtrang" class="form-control">
        <option value="1" <?php echo ($data['tinhtrang'] == 1) ? 'selected' : ''; ?>>Kích hoạt</option>
        <option value="2" <?php echo ($data['tinhtrang'] == 2) ? 'selected' : ''; ?>>Không kích hoạt</option>
      </select>
    </div>
    <div class="mb-3 text-center">
      <input type="submit" name="sua" class="btn btn-primary" value="Sửa sản phẩm">
    </div>
  <div>
</form>