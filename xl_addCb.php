<?php
	$mcb1=$_POST["MaChuyenbay"];
	$di=$_POST["NgayGioDi"];
	$den=$_POST["ThoiGianDen"];
	$h1=$_POST["SoLuongGheHang1"];
	$h2=$_POST["SoLuongGheHang2"];
	$mtb=$_POST["MaTuyenBay"];
	$mmb=$_POST["MaMayBay"];

	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql_insertCb="insert into chuyenbay(MaChuyenBay,NgayGioDi,ThoiGianDen,SoLuongGheHang1,SoLuongGheHang2,MaTuyenBay,MaMayBay) 
	    values('$mcb1','$di','$den','$h1','$h2','$mtb','$mmb')"; 
	 $qr_addCb=mysqli_query($conn,$sql_insertCb) or die("looix truy vaans ");
	 if($qr_addCb){
 		header("location: /DoAn/admin.php");
	 }

  ?>
  