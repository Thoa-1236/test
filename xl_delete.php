	<?php
	$MaTuyenBay=$_GET['MaTuyenBay'];
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	
	$sql_delete="
				  delete from chuyenbay where MaTuyenBay='$MaTuyenBay';
				  delete from tuyenbay where MaTuyenBay='$MaTuyenBay'"; 
	$qr_delete=mysqli_multi_query($conn,$sql_delete) or die("Hãy xóa các chuyến bay có trong tuyến mà bạn cần xóa");
	 if($qr_delete){
	 	header("location: /DoAn/admin.php");
	  }

  ?>


