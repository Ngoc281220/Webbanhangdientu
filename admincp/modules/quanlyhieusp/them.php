<div class="col-7 mx-auto">
  <div class="py-4 text-end mb-4">
    <a class="btn btn-primary" href="index.php?quanly=hieusp&ac=lietke">Liệt kê sản phẩm</a>
  </div>
  <form action="modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
    <div class="col-7 mx-auto">
      <h3 class="text-center">Thêm hiệu sản phẩm</h3>
      <div class="mb-3">
        <label class="form-label">Tên hiệu sản phẩn </label>
        <input type="text" class="form-control" name="hieusp">
      </div>
      <div class="mb-3">
        <label class="form-label">Trạng thái</label>
        <select name="tinhtrang" class="form-control">
          <option value="1">Kích hoạt</option>
          <option value="2">Không kích hoạt</option>
        </select>
      </div>
      <div class="mb-3 text-center">
        <input type="submit" name="them" class="btn btn-primary" value="Thêm">
      </div>
    </div>
  </form>
</div>