<?php
$sql_type_product = "select * from loaisp order by idloaisp desc ";
$row_type_product = mysqli_query($conn, $sql_type_product);

?>
<div class="col-9 mx-auto">
  <div class="py-4 text-end mb-4">
    <a class="btn btn-primary" href="index.php?quanly=loaisp&ac=them">Thêm Mới</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên loại sản phẩm</th>
        <th>Tình trạng</th>
        <th colspan="2">Quản lý</th>
      </tr>
    <thead>
    <?php
    $i = 1;
    while ($data = mysqli_fetch_array($row_type_product)) {

    ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['tenloaisp'] ?></td>
        <td><?php
            if ($data['tinhtrang'] == 1) {
              echo 'Kích hoạt';
            } else {
              echo 'Không kích hoạt';
            }
            ?></td>
        <td><a href="index.php?quanly=loaisp&ac=sua&id=<?php echo $data['idloaisp'] ?>">
            <center><img src="../imgs/edit.png" width="30" height="30" /></center>
          </a></td>
        <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $data['idloaisp'] ?>" class="delete_link">
            <center><img src="../imgs/delete.png" width="30" height="30" /></center>
          </a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
</div>