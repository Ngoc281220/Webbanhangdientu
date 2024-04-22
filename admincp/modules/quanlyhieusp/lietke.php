<div class="col-8 mx-auto">
  <?php
  $sql_brands = "select * from hieusp order by idhieusp desc ";
  $row_brands  = mysqli_query($conn, $sql_brands);

  ?>
  <div class="py-4 text-end mb-4">
    <a class="btn btn-primary" href="index.php?quanly=hieusp&ac=them">Thêm Mới</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên hiệu sản phẩm</th>
        <th>Tình trạng</th>
        <th colspan="2">Quản lý</th>
      </tr>
    </thead>
    <?php
    $i = 1;
    while ($row = mysqli_fetch_array($row_brands)) {

    ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['tenhieusp'] ?></td>
        <td><?php
            if ($row['tinhtrang'] == 1) {
              echo 'Kích hoạt';
            } else {
              echo 'Không kích hoạt';
            }
            ?></td>
        <td><a href="index.php?quanly=hieusp&ac=sua&id=<?php echo $row['idhieusp'] ?>">
            <center><img src="../imgs/edit.png" width="30" height="30" /></center>
          </a></td>
        <td><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $row['idhieusp'] ?>" class="delete_link">
            <center><img src="../imgs/delete.png" width="30" height="30" /></center>
          </a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
</div>