<?php
	include('../config.php');
	const ADD = 'them';
	const EDIT = 'sua';
	const DELETE= 'delete';
	$tensp = $_POST['tensp'] ?? null;
	$masp = $_POST['masp'] ?? null;
	$hinhanh = $_FILES['hinhanh']['name'] ?? null;
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'] ?? null;
	move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
	$giadexuat = $_POST['giadexuat'] ?? null;
	$giagiam = $_POST['giagiam'] ?? null;
	$soluong = $_POST['soluong'] ?? null;
	$noidung = $_POST['noidung'] ?? null;
	$loaisp = $_POST['loaisp'] ?? null;
	$nhasx = $_POST['nhasx'] ?? null;
	$tinhtrang = $_POST['tinhtrang'] ?? null;
	// $trang = $_GET['trang'];
	$action = $_GET['action'];
	switch($action) {
		case ADD:
			$sql_add_product = ("
				insert into sanpham (tensp,masp,hinhanh,giadexuat,giagiam,soluong,noidung,loaisp,nhasx,tinhtrang) 
				value('$tensp','$masp','$hinhanh','$giadexuat','$giagiam','$soluong','$noidung','$loaisp','$nhasx','$tinhtrang')"
			);
			mysqli_query($conn, $sql_add_product);
			header('location:../../index.php?quanly=sanpham&ac=lietke');
			break;
		case EDIT:
			if ($hinhanh != '') {
				$sql_update = "
					update sanpham set tensp='$tensp',masp='$masp',hinhanh='$hinhanh',giadexuat='$giadexuat',giagiam='$giagiam',soluong='$soluong',noidung='$noidung',loaisp='$loaisp',nhasx='$nhasx',tinhtrang='$tinhtrang' 
					where idsanpham='$_GET[id]'";
			} else {
				$sql_update = "
					update sanpham set tensp='$tensp',masp='$masp',giadexuat='$giadexuat',giagiam='$giagiam',soluong='$soluong',noidung='$noidung',loaisp='$loaisp',nhasx='$nhasx',tinhtrang='$tinhtrang' 
					where idsanpham='$_GET[id]'";
			}
			mysqli_query($conn, $sql_update);
			header('location:../../index.php?quanly=sanpham&ac=lietke');
			break;
		case DELETE:
			$sql_delete = "delete from sanpham where idsanpham = $_GET[id]";
			mysqli_query($conn, $sql_delete);
			header('location:../../index.php?quanly=sanpham&ac=lietke');
			break;
		default:
			throw new Exception("Lỗi hệ thống");
	}
