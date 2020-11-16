<?php 
	$mcb=$_POST["MaChuyenBay"];
	$di=$_POST["NgayGioDi"];
	$den=$_POST["ThoiGianDen"];
	$h1=$_POST["SoLuongGheHang1"];
	$h2=$_POST["SoLuongGheHang2"];
	$mtb=$_POST["MaTuyenBay"];
	$mmb=$_POST["MaMayBay"];

	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql_updateCb="update chuyenbay 
				   set  NgayGioDi='$di', ThoiGianDen='$den', SoLuongGheHang1='$h1', SoLuongGheHang2='$h2',MaTuyenBay='$mtb',MaMayBay='$mmb' 
				   where MaChuyenBay='$mcb'"; 
	$qr_updateCb=mysqli_query($conn,$sql_updateCb) or die("Chuyến bay đã tồn tại!");
	if($qr_updateCb){
		header("location: /DoAn/admin.php");
	}

  ?>
  