// JavaScript Document
$(document).ready(function(){
 //* validation
		$('#reg_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						username: { required: true, minlength: 4 },
						reg_password: { required: true, minlength: 4 },
						con_password: {equalTo:"#reg_password"},
						email_address: {required: true, email:true
										},
						organisation: {required: true, minlength: 3}
					},
					highlight: function(element) {
						$(element).closest('div').addClass("f_error");
					},
					unhighlight: function(element) {
						$(element).closest('div').removeClass("f_error");
					},
					errorPlacement: function(error, element) {
						$(element).closest('div').append(error);
					}
				});
});