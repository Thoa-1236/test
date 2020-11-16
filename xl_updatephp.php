<?php
	$mtb=$_POST['MaTuyenBay'];
	$sbd=$_POST['MaSanBayDi'];
	$sbt=$_POST['MaSanBayDen'];
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql_updatephp="update tuyenbay set MaSanBayDi='$sbd',MaSanBayDen='$sbt' where MaTuyenBay='$mtb'"; 
	$qr_updatephp=mysqli_query($conn,$sql_updatephp) or die("Không được thay đổi mã tuyến!");
	if($qr_updatephp){
		header("location: /DoAn/admin.php");
	}

  ?>