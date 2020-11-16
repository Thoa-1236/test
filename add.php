
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm tuyến bay</title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
	<h1>Thêm tuyến bay</h1>
<form  method="post" action="xl_add.php">
		<table>
				<tr>		
					<td><input type="text" placeholder="Mã tuyến bay" name="MaTuyenBay" ></td>	
				<tr>	
					<td><input type="text" placeholder="Mã sân bay đi" name="MaSanBayDi" ></td> 
				</tr>
				<tr>
					<td><input type="text"  placeholder="Mã sân bay đến" name="MaSanBayDen"></td> 
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Thêm tuyến bay "></td>
				</tr>
		</table>
</body>
</html>
