
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh sửa tuyến bay</title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
	<?php
	$mtb=$_GET['MaTuyenBay'];
	
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql_update="select * from tuyenbay where MaTuyenBay='$mtb'"; 
	$qr_update=mysqli_query($conn,$sql_update) or die("Tuyến bay đã tồn tại!");
	$rs=mysqli_fetch_array($qr_update);


    ?>



	<h1>Cập nhật tuyến bay</h1>
	
<form  method="post" action="xl_updatephp.php">
		<table>
				<tr>		
					<td><input type="text" placeholder="Mã tuyến bay" name="MaTuyenBay"value="<?php echo $rs['MaTuyenBay']?>" ></td>	
				<tr>	
					<td><input type="text" placeholder="Mã sân bay đi" name="MaSanBayDi" value="<?php echo $rs['MaSanBayDi']?>" ></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Mã sân bay đến" name="MaSanBayDen" value="<?php echo $rs['MaSanBayDen']?>"></td> 
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Cập nhật tuuyến bay "></td>
				</tr>
		</table>
</body>
</html>
