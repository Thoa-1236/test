<!DOCTYPE html>
<html lang="en">
<head>
	<meta  http-equiv="Content-Type" content="text/html; charset=UTF-8" name="viewport" content="width=device-width, initial-scale=1" >
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="bt1.css">

</head>
<body>
	<div class="tt">
	    <table>	
	    	
			<form id="form-login" method="POST" accept-charset="utf-8">
				<tr>
					<td colspan="2" id="p"><p>Đăng nhập hệ thống</p></td>
				</tr>
				<tr>
					<td><label for="Tên">Tên đăng nhập</label></td>
					<td><input type="text" id="Tên" placeholder="nhập tên"></td>
				</tr>
				<tr>
					<td><label for="MK">Mật khẩu</label></td>
					<td><input type="password" id="MK" placeholder="nhập mã số"></td>
				</tr>
				<tr>
					<td  colspan="2" ><button type="submit" id="submit" onclick="onFormSubmit()" >Đăng nhập</button>
				</tr>
				<tr>
					<td colspan="2">
						<a href="#">Quên đăng nhập | Đăng ký</a>
					</td>
				</tr>

			</form>
		</table>
	</div>
</body>
<script src="bt1.js"></script>
</html>