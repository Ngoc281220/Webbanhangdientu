<?php
  $sql = "select * from hieusp where idhieusp = '$_GET[id]'";
  $row = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($row);
?>
<div class="col-7 mx-auto">
  <div class="py-4 text-end mb-4">
    <a class="btn btn-primary" href="index.php?quanly=hieusp&ac=lietke">Liệt kê sp</a>
  </div>
  <form action="modules/quanlyhieusp/xuly.php?id=<?php echo $result['idhieusp'] ?>" method="post" enctype="multipart/form-data">
      <h3 class="text-center">Sửa hiệu sản phẩm</h3>
      <div class="mb-3">
        <label class="form-label">Tên loại sản phẩm</label>
        <input type="text" class="form-control" name="hieusp" value="<?php echo $result['tenhieusp'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Trạng thái</label>
        <select name="tinhtrang" class="form-control">
          <option value="1" <?php ($result['tinhtrang'] == 1 ? 'selected' : '') ?>>Kích hoạt</option>
          <option value="2" <?php ($result['tinhtrang'] == 2 ? 'selected' : '') ?>>Không kích hoạt</option>
        </select>
      </div>
      <div class="mb-3 text-center">
        <input type="submit" name="sua" class="btn btn-primary" value="Sửa">
      </div>
  </form>
</div>