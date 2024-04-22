<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="stylesheet" type="text/css" href="style/css.css" />
<link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang quản lý website</title>

</head>
	<?php
		session_start();
		if(!isset($_SESSION['dangnhap'])){
			header('location:login.php');
		}
	?>
	<body>
		<div class="container-fluid">
			<?php
				include('modules/config.php');
				include('modules/header.php');
			?>
			<main class="main">
				<div class="main-left">
					<?php
						include('modules/menu.php');
					?>
				</div>
				<div class="main-content">
					<?php
						include('modules/content.php');
					?>
				</div>
			</main>
			<footer>
				<?php
					include('modules/footer.php');
				?>
			</footer>
			<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
			<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
			<script type="text/javascript" src="js/delete.js"></script>
			<script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
			<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
			<script type="text/javascript" src="../js/bootstrap.min.js"></script>
			<script>tinymce.init({ selector:'textarea' });</script>
		</div>
	</body>
</html>
<style>
	main {
		margin-top: 60px;
	}
	main>.main-left {
		position: fixed !important;
		top: 60px !important;
		left: 12px !important;
		bottom: 0 !important;
		width: 300px !important;
		z-index: 996 !important;
		transition: all 0.3s;
		padding: 20px;
		overflow-y: auto;
		scrollbar-width: thin;
		scrollbar-color: #aab7cf transparent;
		box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
		background-color: #fff;
	}
	main>.main-content {
		margin-left: 320px;
	}
</style>