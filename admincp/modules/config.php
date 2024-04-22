<?php
	// Khai báo kết nôi
	const SERVER_NAME = 'localhost';
	const USER_NAME = 'root';
	const PASS = '';
	const DB_NAME = 'webbanhangdientu';

	// Kết nối database

	$conn = mysqli_connect(SERVER_NAME, USER_NAME, PASS, DB_NAME);

	if (!$conn) {
		die("Unable to connect :" . mysqli_connect_error());
		exit();
	}

	// echo "Connection successful";
