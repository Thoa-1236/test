<?php
	$MaChuyenBay=$_GET['MaChuyenBay'];
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	
	$sql_deleteCb=" delete from vechuyenbay where MaChuyenBay='$MaChuyenBay';
					delete from chuyenbay where MaChuyenBay='$MaChuyenBay'";
				   
	$qr_deleteCb=mysqli_multi_query($conn,$sql_deleteCb) or die("Lỗi truy vấn");
	 if($qr_deleteCb){
	 	header("location: /DoAn/admin.php");
	  }

  ?>


