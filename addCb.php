
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm chuyến bay</title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
	<h1>Thêm chuyến bay</h1>
<form  method="post" action="xl_addCb.php">
		<table>
				<tr>		
					<td><input type="text" placeholder="Mã chuyến bay" name="MaChuyenbay" ></td>	
				<tr>	
					<td><input type="text" placeholder="Thời gian đi" name="NgayGioDi" ></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Thời gian đến" name="ThoiGianDen"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Số lượng ghế hạng 1" name="SoLuongGheHang1"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Số lượng ghế hạng 2" name="SoLuongGheHang2"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Mã tuyến bay" name="MaTuyenBay"></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Mã máy bay" name="MaMayBay"></td> 
				</tr>



				<tr>
					<td><input type="submit" name="submit" value="Thêm tuyến bay "></td>
				</tr>
		</table>
</body>
</html>

