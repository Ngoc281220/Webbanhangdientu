<?php
  if (isset($_POST['gui'])) {
      $tenkh = $_POST['hoten'];
      $email = $_POST['email'];
      $diachi = $_POST['diachi'];
      $pass = $_POST['pass'];
      $dienthoai = $_POST['dienthoai'];
      $sql_dangky = mysqli_query($conn, "insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkh','$email','$pass','$dienthoai','$diachi')");

      if ($sql_dangky) {
        echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
        echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
      }
  }
?>


<div class="bg-dark p-2 text-light">
  Đăng ký tài khoản
</div>
<div class="thongbao px-2">
  <p><img src="imgs/chu-y-mua-hang.gif" width="100" height="50"></p>
  <p>- Vui lòng không đặt số lượng 1 sản phẩm</p>
  <p>- Không đặt đơn hàng có tổng giá trị dưới 200.000đ</p>
  <p>- Đơn hàng nhiều sản phẩm. Vui lòng liệt kê danh sách + số lượng qua Email, Zalo</p>
</div>
<div class="px-2">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
  <!-- <form action="" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" style="border-collapse:collapse;">
      <tr>
        <td width="40%">Họ tên người mua <strong style="color:red;"> (*)</strong></td>
        <td width="60%"><input type="text" name="hoten" size="50"></td>
      </tr>
      <tr>
        <td>Địa chỉ Email <strong style="color:red;"> (*)</strong></td>
        <td width="60%"><input type="text" name="email" size="50"></td>
      </tr>
      <tr>
        <td>Mật khẩu <strong style="color:red;"> (*)</strong></td>
        <td width="60%"><input type="password" name="pass" size="50"></td>
      </tr>
      <tr>
        <td>Điện thoại <strong style="color:red;"> (*)</strong></td>
        <td width="60%"><input type="text" name="dienthoai" size="50"></td>
      </tr>
      <tr>
        <td>Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
        <td width="60%"><input type="text" name="diachi" size="50"></td>
      </tr>
      <tr>
        <td colspan="2">

          <p><input type="submit" name="gui" value="Gửi thông tin" /></p>

        </td>
      </tr>
    </table>
  </form> -->
  <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Họ tên người mua hàng <strong style="color:red;"> (*)</strong></label>
      <input type="text" class="form-control" name="hoten">
    </div>
    <div class="mb-3">
      <label class="form-label">Địa chỉ Email <strong style="color:red;"> (*)</strong></label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label class="form-label">Mật khẩu <strong style="color:red;"> (*)</strong></label>
      <input type="password" class="form-control" name="pass">
    </div>
    <div class="mb-3">
      <label class="form-label">Điện thoại <strong style="color:red;"> (*)</strong></label>
      <input type="text" class="form-control" name="dienthoai">
    </div>
    <div class="mb-3">
      <label class="form-label">Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></label>
      <input type="text" class="form-control" name="diachi">
    </div>
    <div class="mb-3">
      <label class="form-label">Ghi chú nếu có :</label>
      <textarea name="ghichu" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" name="gui" value="Gửi thông tin" />
    </div>
  </form>
</div>