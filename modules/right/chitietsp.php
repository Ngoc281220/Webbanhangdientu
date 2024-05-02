<?php
$sql = "select * from sanpham where idsanpham='$_GET[id]'";
$num = mysqli_query($conn, $sql);
$products = mysqli_fetch_array($num);
?>
<div class="bg-dark p-2 text-light">Chi tiết sản phẩm</div>

<div class="card">
	<div class="row g-0">
		<div class="col-5">
			<div class="box_hinhanh">
				<img class="img-fluid rounded-start" src="admincp/modules/quanlysanpham/uploads/<?php echo $products['hinhanh'] ?>"/>
				<?php
				$sql_gallery = mysqli_query($conn, 'select * from gallery where id_sp="$_GET[id]" limit 3');
				$row_gallery = mysqli_num_rows($sql_gallery);

				?>
				<ul class="hinhanhphongto">
					<?php
					if ($row_gallery > 0) {
						while ($dong_gallery = mysqli_fetch_array($sql_gallery)) {
					?>
							<li><img src="admincp/modules/gallery/uploads/<?php echo $dong_gallery['hinhanhsp'] ?>" id="zoom_01" width="70" height="70" /></li>
					<?php
						}
					} else {
						echo '<li><img src="admincp/modules/quanlysanpham/uploads/' . $products['hinhanh'] . '" id="zoom_01"  width="70" height="70" /></li>';
					}
					?>
				</ul>
			</div>
		</div>
		<div class="col-7">
			<div class="card-body">
				<form action="update_cart.php?id=<?php echo $products['idsanpham'] ?>" method="post" enctype="multipart/form-data">
					<p>
						<strong>Tên sản phẫm: </strong><em style="color:red"><?php echo $products['tensp'] ?></em>
					</p>

					<p><strong>Mã sản phẩm:</strong> <?php echo $products['masp'] ?> </p>
					<p><strong>Giá bán:</strong><span style="color:red;"> <?php echo number_format($products['giadexuat']) . ' ' . 'VNĐ' ?></span></p>
					<p style="text-decoration:underline;color:blue;"><strong> Tình trạng:</strong> Còn hàng </p>

					<p><strong>Số lượng:</strong><input type="text" name="soluong" size="3" value="1" /></p>
					<input type="submit" class="btn btn-primary" name="add_to_cart" value="Mua hàng" />

				</form>


			</div>
		</div>
	</div>
	<!-- Ket thuc box box_info -->

</div><!-- Ket thuc box chitiet sp -->

<div class="tabs_panel my-4">
	<ul class="tabs">
		<li rel="panel1" class="active">Thông tin sản phẩm</li>
		<li rel="panel2">Hình ảnh sản phẫm</li>
		<li rel="panel3">Khách hàng đánh giá</li>
	</ul>
	<?php
	$sql_thongtinsp = mysqli_query($conn, "select * from sanpham where idsanpham='$_GET[id]'");
	$count_thongtinsp = mysqli_num_rows($sql_thongtinsp);
	if ($count_thongtinsp > 0) {
		$dong_thongtinsp = mysqli_fetch_array($sql_thongtinsp);

	?>
		<div id="panel1" class="panel active">
			<p><?php echo $dong_thongtinsp['noidung'] ?></p>

		</div>
	<?php
	} else {
		echo '<p style="padding:30px;">Hiện chưa có thông tin chính thức</p>';
	}
	?>
	<div id="panel2" class="panel">
		<?php
		$sql_hinhanhsp = mysqli_query($conn, "select * from gallery where id_sp='$_GET[id]'");
		$count = mysqli_num_rows($sql_hinhanhsp);
		if ($count > 0) {
			while ($dong_hinhanhsp = mysqli_fetch_array($sql_hinhanhsp)) {

		?>
				<p style="text-align:center;"><img src="admincp/modules/gallery/uploads/<?php echo $dong_hinhanhsp['hinhanhsp'] ?>" width="600" height="600" /></p>
		<?php
			}
		} else {
			echo '<p>Chưa có hình ảnh</p>';
		}
		?>
	</div>

	<div id="panel3" class="panel">
		<p>Hàng chính hãng tốt đẹp</p>

	</div>

</div>
<?php
$sql_lienquan = "select * from sanpham where loaisp='$_GET[idloaisp]' and sanpham.idsanpham<>$_GET[id] ";
$row_lienquan = mysqli_query($conn, $sql_lienquan);
$count_lienquan = mysqli_num_rows($row_lienquan);
if ($count_lienquan > 0) {
?>
	<div class="sanphamlienquan">
		<div class="tieude">Sản phẩm liên quan</div>
		<ul>
			<?php

			while ($dong_lienquan = mysqli_fetch_array($row_lienquan)) {
			?>
				<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_lienquan['loaisp'] ?>&id=<?php echo $dong_lienquan['idsanpham'] ?>">
						<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_lienquan['hinhanh'] ?>" width="150" height="150" />
						<p>Tên sp : <?php echo $dong_lienquan['tensp'] ?></p>
						<p style="color:red;">Giá : <?php echo number_format($dong_lienquan['giadexuat']) . ' ' . 'VNĐ' ?></p>


					</a></li>
			<?php
			}
			?>
		</ul>
	</div><!-- Ket thuc box sp liên quan -->
<?php
} else {
	echo '<div class="tieude">Sản phẩm liên quan</div>';
	echo '<p style="padding:30px;">Hiện chưa có thêm sản phẩm nào</p>';
}
?>
<div class="clear"></div>