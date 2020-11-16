<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chuyến bay</title>
	<link rel="stylesheet" type="text/css" href="DACSS.css">
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

	
	<ol id="ol-groups">
		<li class="li">Chuyến bay</li>
		<li class="li" >Thông tin hành khách</li>
		<li class="li" >Dịch vụ bổ sung</li>
		<li class="li">Thanh toán</li>
	</ol>

	<h2 class="h2">
	<span>&#9992;</span>
		<span>Chuyến bay </span><br>
		<strong><?php echo $_POST["datadi"];  ?></strong>
		tới
		<strong><?php echo $_POST["dataden"];  ?></strong>
    </h2>
    <br><br>
	
	<div class="Lichbaycb"> <?php
		
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$ND=strtotime($_POST['NgDi']);
				echo date('D\,\ d \t\h\á\n\g\ m \n\ă\m\ Y',$ND); 
				?>
					
	</div>
	

	
	<!--  <?
    $sql_chuyenbay="select * from chuyenbay where NgayGioDi like '%$ND%' ";
	$cmd2=$conn->prepare($sql_chuyenbay);
	$cmd2->execute();
	$ND_sbd=$cmd2->fetchAll(PDO::FETCH_ASSOC);						
	// foreach($ND_sbd as $row){
	// 	echo '<option  value="'. $row['NgayGioDi'].  '">' ;
	//}
	echo $ND_sbd;
	?>  -->



				<br><br><br>
	<div id="div-group" s>
		<form >
	
		<div class="div1"><p>giodi    gioden</p>  </div>
		<div class="div2">
			<input type="radio" name="radios" id="TS-eco" value="TS-eco"/> <br>
			<span>LoaiVe1</span>  <br>
			<span>GiaVe</span>
		</div>
		<div class="div3">
			<input type="radio" name="radios" id="TS-plus" value="TS-plus" /> <br>
			<span>LoaiVe2</span> <br>
			<span>GiaVe</span>
		</div>
		</form>
	</div>
		
<br><br><br><br>

	<?php 
	include('C:\xampp\htdocs\DoAn\footer.html');
	?>
</body>

</html>