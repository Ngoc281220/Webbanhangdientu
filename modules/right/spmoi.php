	<?php
		// Lấy ra danh sách sản phẩm mới nhât
		$sql_product_new = "select * from sanpham order by idsanpham desc limit 0,6";
		$result = mysqli_query($conn, $sql_product_new);
	?>
	<div class="tieude">Sản phẩm mới nhất</div>
	<ul class="product">
		<?php
			while ($row_product_new = $result->fetch_assoc()) {
		?>
			<li>
				<a 
					href="?quanly=chitietsp&idloaisp=<?php echo $row_product_new['loaisp'] ?>&id=<?php echo $row_product_new['idsanpham'] ?>"
				>
					<img 
						src="admincp/modules/quanlysanpham/uploads/<?php echo $row_product_new['hinhanh'] ?>" 
						width="150" 
						height="150" 
					/>
					<p style="color:skyblue"><?php echo $row_product_new['tensp'] ?></p>
					<p 
						style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                        height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;">
						<?php echo number_format($row_product_new['giadexuat']) . ' ' . 'VNĐ' ?>
					</p>
				</a>
			</li>
		<?php
			}
		?>
	</ul>
	<div class="clear"></div>

	<?php
		$sql_product_type = mysqli_query($conn, "select * from loaisp ");
		while ($row_product_type = $sql_product_type->fetch_assoc()) {
			echo '<div class="tieude">' . $row_product_type['tenloaisp'] . '</div>';
			$sql_type_product = "select * from loaisp inner join sanpham on sanpham.loaisp=loaisp.idloaisp where sanpham.loaisp='" . $row_product_type['idloaisp'] . "'";
			$row = mysqli_query($conn, $sql_type_product);
			$count = mysqli_num_rows($row);
			if ($count > 0) {
	?>
		<ul class="product">
			<?php
				while ($row_type_product = mysqli_fetch_array($row)) {

			?>
				<li>
					<a href="?quanly=chitietsp&idloaisp=<?php echo $row_type_product['loaisp'] ?>&id=<?php echo $row_type_product['idsanpham'] ?>">
						<img src="admincp/modules/quanlysanpham/uploads/<?php echo $row_type_product['hinhanh'] ?>" width="150" height="150" />
						<p style="color:skyblue"><?php echo $row_type_product['tensp'] ?></p>
						<p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
						height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($row_type_product['giadexuat']) . ' ' . 'VNĐ' ?></p>
					</a>
				</li>
			<?php
			}
			} else {
				echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
			}
		?>
		</ul>
		<div class="clear"></div>
	<?php
		}
	?>