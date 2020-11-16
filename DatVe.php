<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt vé máy bay</title>
	<link rel="stylesheet" type="text/css" href="DACSS.CSS">
</head>
<body>

	<?php 
		
		include('C:\xampp\htdocs\DoAn\Headermenu.html');
		
	 ?>
 <?php
	 try{
	$conn=new pdo('mysql:host=127.0.0.1;dbname=banvemaybay;charset=utf8','root','') ;
	}
	catch (PDOException $pe) {
		echo "khong dc";
    die;
}

	 ?>
 
	<a href="file:///E:/sub/BT1/DatVe.html"><img src="./image./BG3.png" width="100%" ></a>

	<br>
	<div class="container">
	<form  method="post" action="Chuyenbay.php">
		<table>
				<tr>
					<th>Nơi đi</th>
					<th>Nơi đến </th>
				</tr>
				<tr>				
					<td><input type="text" list="NoiDi" placeholder="Khởi hành" name="datadi" ></td>
					<td><input type="text" list="NoiDen"  placeholder="Tất cả các điểm đến" name="dataden"></td>	
				</tr>

				<tr>
					
					<td>
						<datalist  id="NoiDi"  >
						<?php
							$text="select distinct sanbay.TenSanBay from sanbay, tuyenbay where sanbay.MaSanBay=tuyenbay.MaSanBayDi";
							$cmd=$conn->prepare($text);
							$cmd->execute();
							$NoiDi_sbd=$cmd->fetchAll(PDO::FETCH_ASSOC);
								
						    foreach($NoiDi_sbd as $rows){
						 			echo '<option  value="'. $rows['TenSanBay'].  '">' ;
						 		}

						 		
						 ?>
							
						</datalist>
						
					</td>	
				
					<td>
						<datalist id="NoiDen" >
							<?php
							$textt="select distinct sanbay.TenSanBay from sanbay, tuyenbay where sanbay.MaSanBay=tuyenbay.MaSanBayDen";
							$cmdd=$conn->prepare($textt);
							$cmdd->execute();
							$NoiDen_sbd=$cmdd->fetchAll(PDO::FETCH_ASSOC);
						  foreach($NoiDen_sbd as $rowss){
						 			echo '<option  value="'. $rowss['TenSanBay'].  '">' ;
						 		}
						 	?>
							
						</datalist>
					</td>	
				</tr>

		</table>
	
	
 <br><br><br>
 <div id="btn-group" onclick="loaiChuyenBay()">
		<input type="button" class="btn active" onclick="KhuHoi()" value="Khứ hồi"/>
		<input type="button" class="btn" onclick="MotChieu()" value="Một chiều"/>
		
</div>
<br><br><br>
		<table>
			
		    <tr>
				<th >Ngày đi</th>
				<th id="LichVeth" >Ngày về </th>
			</tr>
			<tr>
				<td><input type="date" name="NgDi" ></td>
				<td id="LichVe"><input type="date" name="NgVe"  ></td>
			</tr>
		</table>
	<br>
	<input class="Timcb" type="submit"  value="Tìm chuyến bay"/>
	</form>
</div>
<?php 
	include('C:\xampp\htdocs\DoAn\footer.html');
	?>


</body>
<script>
	function loaiChuyenBay(){
	var btnContainer=document.getElementById("btn-group");
	var button=btnContainer.getElementsByClassName("btn");

	for(var i=0;i<button.length;i++){

	        button[i].addEventListener("click", function(){
	 		var current=document.getElementsByClassName("active");

	 		current[0].className=current[0].className.replace(" active","");
			
	 		this.className+=" active";
	 	});
	
		}
	}
	function MotChieu(){
		
		document.getElementById("LichVe").style.display="none";
		document.getElementById("LichVeth").style.display="none";
	}

	function KhuHoi(){
		document.getElementById("LichVe").style.display="block";
		document.getElemetById("LichVeth").style.display="block";
	}

		
</script>
</html>