<?php
include('../config.php');
	$tenhieusp = $_POST['hieusp'];
	$tinhtrang = $_POST['tinhtrang'];

	if (isset($_POST['them'])) {
		//them
		$sql_add = ("insert into hieusp (tenhieusp,tinhtrang) value('$tenhieusp','$tinhtrang')");
		mysqli_query($conn, $sql_add);
		header('location:../../index.php?quanly=hieusp&ac=lietke');
	} elseif (isset($_POST['sua'])) {
		//sua
		$sql_edit = "update hieusp set tenhieusp='$tenhieusp',tinhtrang='$tinhtrang' where idhieusp='$_GET[id]'";
		mysqli_query($conn, $sql_edit);
		header('location:../../index.php?quanly=hieusp&ac=lietke');
	} else {
		$sql_delete = "delete from hieusp where idhieusp = $_GET[id]";
		mysqli_query($conn, $sql_delete);
		header('location:../../index.php?quanly=hieusp&ac=lietke');
	}
