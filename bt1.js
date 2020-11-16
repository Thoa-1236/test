var name=["T"];
var pass=["T"];


var inputUser=document.getElementById('Tên'); 
var inputPass=document.getElementById('MK');
 


var formLogin=document.getElementById('form-login');

if(formLogin.attachEvent){
	formLogin.attachEvent('submit', onFormSubmit);
} else{
	fromLogin.addEventListener('submit', onFormSubmit);
}

function onFormSubmit(e){
	var username=inputUser.value;
	var password=inputPass.value;
	

	if(username==name[0] && password==pass[0]){
		window.open("file:///E:/sub/BT1/TrangChu.html");
		//alert('Đăng nhập thành công!');
	} else {
		alert('Đăng nhập thât bai!')
	}
}

//$(document).ready(function(){
	//var username=$('#Tên');
	//var password=$('#MK');
	//$('#submit').click(function(){
		//if(username==name[0] && password==pass[0]){
		//window.open("file:///E:/sub/BT1/TrangChu.html");
		//alert('Đăng nhập thành công!');
		//} else {
			//alert('Đăng nhập thât bai!');
			//}
	//});
//});



 