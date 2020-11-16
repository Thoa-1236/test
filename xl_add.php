<?php
	$mtb=$_POST['MaTuyenBay'];
	$sbd=$_POST['MaSanBayDi'];
	$sbt=$_POST['MaSanBayDen'];
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql_insert="insert into tuyenbay(MaTuyenBay,MaSanBayDi,MaSanBayDen) values('$mtb','$sbd','$sbt')"; 
	$qr_add=mysqli_query($conn,$sql_insert) or die("Tuyến bay đã tồn tại!");
	if($qr_add){
		header("location: /DoAn/admin.php");
	}

  ?>