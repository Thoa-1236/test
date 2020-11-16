
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh sửa tuyến bay</title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
	<?php
	$mcb=$_GET['MaChuyenBay'];
	
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql_updateCb="select * from chuyenbay where MaChuyenBay='$mcb'"; 
	$qr_updateCb=mysqli_query($conn,$sql_updateCb) or die("sai");
	$rs=mysqli_fetch_array($qr_updateCb);


    ?>



	<h1>Cập nhật chuyến bay</h1>
<form  method="post" action="xl_updateCbphp.php">
		<table>
				<tr>		
					<td><input type="text" placeholder="Mã chuyến bay" name="MaChuyenbay" value="<?php echo $rs['MaChuyenBay']?>" ></td>	
				<tr>	
					<td><input type="text" placeholder="Thời gian đi" name="NgayGioDi"value="<?php echo $rs['NgayGioDi']?>" ></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Thời gian đến" name="ThoiGianDen"value="	<?php echo $rs['ThoiGianDen']?>"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Số lượng ghế hạng 1" name="SoLuongGheHang1"value="	<?php echo $rs['SoLuongGheHang1']?>"
	></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Số lượng ghế hạng 2" name="SoLuongGheHang2"value="	<?php echo $rs['SoLuongGheHang2']?>"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Mã tuyến bay" name="MaTuyenBay"	value="	<?php echo $rs['MaTuyenBay']?>"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Mã máy bay" name="MaMayBay"	value="	<?php echo $rs['MaMayBay']?>"
></td> 
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Cập nhật tuyến bay "></td>
				</tr>
		</table>
</body>
</html>

	
	
	
	

