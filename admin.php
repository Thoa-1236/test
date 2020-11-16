<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
	<?php
		include('C:\Xampp\htdocs\DoAn\headerAd.php');
	?>
 <?php
	
	$conn=mysqli_connect("127.0.0.1","root","","BanVeMayBay");
	$sql="select * from tuyenbay"; 
	$qr=mysqli_query($conn,$sql) or die("Lỗi truy vấn");

	$sql_cb="select * from chuyenbay";
	$qr_cb=mysqli_query($conn,$sql_cb) or die ("lỗi truy vấn");
	?>
	<div>
	<table >
		<tr>
			<th>STT</th>
			<th>Mã tuyến bay</th>
			<th>Mã sân bay đi</th>
			<th>Mã sân bay đến</th>
			<th>   </th>
		</tr>
	
	<br>
<?php
	$i=1;
	while($rs=mysqli_fetch_array($qr)){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$rs["MaTuyenBay"]."</td>";
		echo "<td>".$rs["MaSanBayDi"]."</td>";
		echo "<td>".$rs["MaSanBayDen"]."</td>";
		echo "<td> <a  href='xl_delete.php?MaTuyenBay=".$rs['MaTuyenBay']."'>Xóa</a> | <a href='xl_update.php?MaTuyenBay=".$rs['MaTuyenBay']."'>Sửa</a></td>";
		echo "</tr>";
		$i++;
	}
?>	
</table>
</div>
	
	<div>
	<table >
		<tr>
			<th>STT</th>
			<th>Mã chuyến bay</th>
			<th>Thời gian đi</th>
			<th>Thời gian đến</th>
			<th>Số lượng ghế hạng 1</th>
			<th>Số lượng ghế hạng 2</th>
			<th>Mã tuyến bay</th>
			<th>Mã máy bay</th>
		</tr>
	
	<br>
<?php
	$ii=1;
	while($rss=mysqli_fetch_array($qr_cb)){
		echo "<tr>";
		echo "<td>".$ii."</td>";
		echo "<td>".$rss["MaChuyenBay"]."</td>";
		echo "<td>".$rss["NgayGioDi"]."</td>";
		echo "<td>".$rss["ThoiGianDen"]."</td>";
		echo "<td>".$rss["SoLuongGheHang1"]."</td>";
		echo "<td>".$rss["SoLuongGheHang2"]."</td>";
		echo "<td>".$rss["MaTuyenBay"]."</td>";
		echo "<td>".$rss["MaMayBay"]."</td>";

		echo "<td> <a  href='xl_deleteCb.php?MaChuyenBay=".$rss['MaChuyenBay']."'>Xóa</a> | <a href='xl_updateCb.php?MaChuyenBay=".$rss['MaChuyenBay']."'>Sửa</a></td>";
		echo "</tr>";
		$ii++;
	}
?>	
</table>
</div>

	
</body>
</html>