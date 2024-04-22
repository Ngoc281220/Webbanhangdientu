<?php
	include('../config.php');
	$tenloaisp = $_POST['loaisp'];
	$tinhtrang = $_POST['tinhtrang'];
	if (isset($_POST['them'])) {
		//them
		$sql_add = ("insert into loaisp (tenloaisp,tinhtrang) value('$tenloaisp','$tinhtrang')");
		mysqli_query($conn, $sql_add);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	} elseif (isset($_POST['sua'])) {
		//sua
		$sql_edit = "update loaisp set tenloaisp='$tenloaisp',tinhtrang='$tinhtrang' where idloaisp='$_GET[id]'";
		mysqli_query($conn, $sql_edit);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	} else {
		$sql_delete = "delete from loaisp where idloaisp = $_GET[id]";
		mysqli_query($conn, $sql_delete);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}
