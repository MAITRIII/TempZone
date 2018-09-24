// JavaScript Document
function validateForm() {
	flag = true;
	
	var code = document.getElementById('code').value.trim();
	var name = document.getElementById('name').value.trim();
	
	if(code==null || code==""){
		//alert('The Project Code field is required.');
		document.getElementById('code_div').className="control-group error";
		document.getElementById('code_msg').innerHTML="The Project Code field is required.";
		document.getElementById('code').value = "";
		flag = false;
	}else if(code.length!=5){
		//alert('The Project Code field must be exactly 5 characters in length.');
		document.getElementById('code_div').className="control-group error";
		document.getElementById('code_msg').innerHTML="The Project Code field must be exactly 5 characters in length.";
		document.getElementById('code').value = "";
		flag = false;
	}else{
		document.getElementById('code_div').className="control-group";
		document.getElementById('code_msg').innerHTML="";
	}
	
	if(name==null || name==""){
		//alert('The Project Name field is required.');
		document.getElementById('name_div').className="control-group error";
		document.getElementById('name_msg').innerHTML="The Project Code field is required.";
		document.getElementById('name').value = "";
		flag = false;
	}else if(name.length>20){
		//alert('The Project Name field can not exceed 20 characters in length.');
		document.getElementById('name_div').className="control-group error";
		document.getElementById('name_msg').innerHTML="The Project Name field can not exceed 20 characters in length.";
		document.getElementById('name').value = "";
		flag = false;
	}else{
		document.getElementById('name_div').className="control-group";
		document.getElementById('name_msg').innerHTML="";
	}
	
	return flag;
}