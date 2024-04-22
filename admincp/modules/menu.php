
<?php
    if (isset($_POST['logout'])) {
        unset($_SESSION['dangnhap']);
        // header('location:login.php');
    }
?>
<div>
    <ul>
        <li class="list-item py-2"><a href="index.php?quanly=loaisp&ac=them">Quản lý loại sản phẩm</a></li>
        <li class="list-item py-2"><a href="index.php?quanly=hieusp&ac=them">Quản lý hiệu sản phẩm</a></li>
        <li class="list-item py-2"><a href="index.php?quanly=sanpham&ac=them">Quản lý sản phẩm</a></li>
        <li class="list-item py-2"><a href="index.php?quanly=tintuc&ac=them">Quản lý tin tức</a></li>
        <li class="list-item py-2"><a href="#">Quản lý hóa đơn</a></li>
        <li class="list-item py-2" onclick="logout()">
            <img src="./modules/image/logout.svg" class="me-2" alt="">
            Logout
        </li>
    </ul>

</div>
<script>
    function logout() {
        $.ajax({
            url: './modules/menu.php',
            type: 'post',
            success: function(response) {
                console.log(response);
            }
        });
    }
</script>
<style>
    ul {
        list-style: none;
        width: 100%;
    }
    li {
        cursor: pointer;
    }
    a {
        text-decoration: none;
        color: #000;
        font-size: 16px;
    }
</style>