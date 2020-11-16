<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="DACSS.css">
</head>
<body>
	<div>
	<header>
	<a href="#" title="Fly"><img src=".\image\Logo.png" alt="Logo"></a> 
	<div>
	<div class="menu">
	<ul>
		<li><a href="#">Quản lý tuyến bay</a>
			
			<ul class="sub-menu" >
					<div id="menu1">

					<li><a href='add.php'>Thêm tuyến bay</a></li>
						
					<li><a href='admin.php'>Xóa tuyến bay</a></li>

					<li><a href="#">Chỉnh sửa tuyến bay</a></li>
				<div>
			</ul>
		</li>	
		

		<li><a href="#">Quản lý chuyến bay</a>
			
			<ul class="sub-menu" > 
				<div id="menu1">

					<li><a href="addCb.php">Thêm chuyến bay</a></li>
						
					<li><a href="admin.php">Xóa chuyến bay</a></li>

					<li><a onClick= dangXuat()>Chỉnh sửa chuyến bay</a></li>
				<div>
			</ul>
		</li>		
		<li><a >Đăng xuất</a></li>	
	</ul>		
	</div>z
	</div>	
	</header><!-- /header -->
	
	
</body>
<script>
	function dangXuat(){
	if (!defined('IN_SITE')) die('The request not found'); 
 
// Xóa session login
set_logout();
 
// Chuyển hướng sang trang login
redirect(base_url('/DoAn/DangNhap.php'));
}
</script>
</html>