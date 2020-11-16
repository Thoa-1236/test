<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin hành khách</title>
	<link rel="stylesheet" type="text/css" href="DACSS.css">


</head>
<body>
	<?php 
		
		include('C:\xampp\htdocs\DoAn\Headermenu.html');
		
	?>

		
	
	<br>
	<ol id="ol-groups">
		<li class="li">Chuyến bay</li>
		<li class="li" >Thông tin hành khách</li>
		<li class="li" >Dịch vụ bổ sung</li>
		<li class="li">Thanh toán</li>
	</ol>
	<br>
	<div id="info-gr">
		<div class="info">
		<form action="ThongTinHanhKhach_submit" method="get" accept-charset="utf-8">
			<h2 class="h2">
			<span>🙋‍♀️</span>
			<span>Ai sẽ bay</span>
		    <p>Thông tin hành khách của bạn</p>
			</h2>
			<table>
				    <caption>Hành khách</caption>
					<tr>
						<td><label forname="Danhxung">Danh xưng</label></td>
						<td><label forname="Tendemvaten">Tên đệm và tên</label></td>
						<td><label forname="Ho">Họ</label></td>
					</tr>
					<tr>
						<td><input type="text" name="Danhxung" placeholder="Danh xưng"></td>
						<td><input type="text" name="Tendemvaten" placeholder="Tên đệm và họ"></td>
						<td><input type="text" name="Ho" placeholder="Họ"></td>
					</tr>
					<tr>
						<td><p>Vui lòng điền đầy đủ giấy tờ tùy thân</p></td>
					</tr>
					<tr>
						<td><label forname="Ngaysinh">Ngày sinh</label></td>
						<td><label forname="Quoctich">Quốc tịch</label></td>
					</tr>
					<tr>
						<td><input type="date" name="Ngaysinh" placeholder="Ngày sinh"></td>
						<td><input type="text" name="Quoctich" placeholder="Quốc tịch"></td>
					</tr>
				
			</table>
			<br><br><br>
		<h2 class="h2">
			<span>🙋‍♀️</span>
			<span>Ai đặt vé</span>
		    <p>Thông tin liên hệ với bạn</p>
		</h2>
			<table>
				    <caption>Thông tin liên hệ</caption>
					<tr>
						<td><label forname="Danhxung">Danh xưng</label></td>
						<td><label forname="Tendemvaten">Tên đệm và tên</label></td>
						<td><label forname="Ho">Họ</label></td>
					</tr>
					<tr>
						<td><input type="text" name="Danhxung" placeholder="Danh xưng"></td>
						<td><input type="text" name="Tendemvaten" placeholder="Tên đệm và họ"></td>
						<td><input type="text" name="Ho" placeholder="Họ"></td>
					</tr>
					<tr>
						<td colspan="3"><p>Vui lòng điền đầy đủ giấy tờ tùy thân</p></td>
					</tr>
					<tr>
						<td><label forname="Email">Email</label></td>
						<td><label forname="Sodienthoai">Số điện thoại</label></td>
					</tr>
					<tr>
						<td><input type="email" name="Email" placeholder="Email"></td>
						<td><input type="number" name="Sodienthoai" placeholder="Số điện thoại"></td>
					</tr>
					<tr>
						<td colspan="3"><p><b>Lưu ý:</b> Vui lòng thông tin chính xác, TSFly sẽ sử dụng để liên lạc với Quý khách trong trường hợp cần thiết </p></td>
					</tr>
					<tr>
						<td><label forname="Tenduong">Tên đường</label></td>
						<td><label forname="Thanhpho">Thành phố</label></td>
					</tr>
					<tr>
						<td><input type="text" name="Tenduong" placeholder="Tên đường"></td>
						<td><input type="text" name="Thanhpho" placeholder="Thành phố"></td>
					</tr>
				
			</table>


		</form>
		</div>

		<div class="info">
			
			<table id="table-p">
					<tr>
						<td colspan="2"> <img src="./image/TPHCM.jpg"  alt="" width="300px"></td>
					</tr>
					<tr>
						<td>Tổng tiền</td>
						<td>1111 vnđ</td>
					</tr>
					<tr>
						<td>Tổng tiền</td>
						<td>1111 vnđ</td>
					</tr>
					<tr>
						<td>Tổng tiền</td>
						<td>1111 vnđ</td>
					</tr>
					<tr>
						<td>Tổng tiền</td>
						<td>1111 vnđ</td>
					</tr>
			</table>

		</div>
	</div>

</div>


<?php 
	include('C:\xampp\htdocs\DoAn\footer.html');
?>



</body>
</html>