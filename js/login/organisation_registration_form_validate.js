// JavaScript Document
$(document).ready(function(){
           $('#org_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						org_code: { required: true, minlength: 3, maxlength: 3 },
						org_name: { required: true, minlength: 3 },
						org_email: { required: true, email:true},
						org_address: { required: true, minlength: 4 },
						org_no: { required: true, minlength: 8  },
						web_domain: { required: true, url: true }
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