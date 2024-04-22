<?php
	// Lây ra danh sách loại sản phẩm
	$sql_product_type = "select * from loaisp order by idloaisp asc";
	$result = mysqli_query($conn, $sql_product_type);
?>
<div class="box_list">
	<div class="tieude">
		<h3>Loại phụ kiện</h3>
	</div>
	<ul class="list">
		<?php
			while ($row = $result->fetch_assoc()) {
		?>
			<li><a href="index.php?quanly=loaisp&id=<?php echo $row['idloaisp'] ?>"><?php echo $row['tenloaisp'] ?></a></li>
		<?php
			}
		?>
	</ul>
</div>
<?php
	// Lấy danh sách thương hiệu sản phẩm
	$sql_brands = "select * from hieusp order by idhieusp asc";
	$result_brands = mysqli_query($conn, $sql_brands);
?>
<div class="box_list">
	<div class="tieude">
		<h3>Thương hiệu</h3>
	</div>
	<ul class="list">
		<?php
			while ($row_brands = $result_brands->fetch_assoc()) {
		?>
			<li><a href="index.php?quanly=hieusp&id=<?php echo $row_brands['idhieusp'] ?>"><?php echo $row_brands['tenhieusp'] ?></a></li>
		<?php
			}
		?>
	</ul>
</div><!--Ket thuc div box thuong hieu -->
<div class="box_list">

	<div class="tieude">
		<h3>Hàng bán chạy</h3>
	</div>
	<?php
		// Lấy ra sản phẩm bán chạy nhất 
		$sql_hottest_product = mysqli_query($conn, "select * from sanpham order by idsanpham desc limit 8");
	?>
	<ul class="hangbanchay">
		<?php
			while ($row_hottest_product = $sql_hottest_product->fetch_assoc()) {
		?>
			<li>
				<a href="?quanly=chitietsp&idloaisp=<?php echo $row_hottest_product['loaisp'] ?>&id=<?php echo $row_hottest_product['idsanpham'] ?>">
					<img src="admincp/modules/quanlysanpham/uploads/<?php echo $row_hottest_product['hinhanh'] ?>" width="150" height="150" />
					<p><?php echo $row_hottest_product['tensp'] ?></p>
					<p style="color:red;"><?php echo number_format($row_hottest_product['giadexuat']) . ' ' . 'VNĐ' ?></p>
				</a>
			</li>
		<?php
			}
		?>
	</ul>
</div><!--Ket thuc div box hang ban chay -->
<div class="box_list">
	<?php
		$sql_new = mysqli_query($conn, "select * from tintuc");
	?>
	<div class="tieude">
		<h3>Tin tức sản phẩm</h3>
	</div>
	<ul class="tintucsp">
		<?php
			while ($row_new = $sql_new->fetch_assoc()) {
		?>
			<li>
				<a href="#">
					<p style="float:left;"><img src="admincp/modules/quanlytintuc/uploads/<?php echo $row_new['hinhanh'] ?>" width="40" height="30" /></p>
					<p style="overflow:hidden;padding-left:5px;"><?php echo $row_new['tentintuc'] ?></p>
				</a>
			</li>
		<?php
			}
		?>
	</ul>
</div><!--Ket thuc div box tin tức -->