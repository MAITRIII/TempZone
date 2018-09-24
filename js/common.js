//-----------------Start of Smart Search function Using Autocomplete----------------------//
function ajaxLive(key,elemnt_nam,path){

	if(key){//if there is a key pressed and has a value
		$.ajax({
			url: path +'/' +key +'/' +elemnt_nam,
			success:function(searchArray){
				
				$("#"+elemnt_nam).autocomplete ({
					source: searchArray,
					select: function(event,ui){
							
						event.preventDefault();
						$(this).val(ui.item.label);  //Gives Label to Text Field
						$("#"+elemnt_nam+"_ID").val(ui.item.value); //Assigns ID to hidden field
					},
						
					focus: function( event, ui ) {
						event.preventDefault(); //Disables showing values onFocus	
					}
				});
			}
		});
	}//if ends
}
//-----------------End of Smart Search function Using Autocomplete----------------------//

//-----------Start of AJAX to change enable disable status of module dynamically----------------------
function changeEnableDisable(RelDtlID,CheckStatus,path) {
	if(CheckStatus==1){
		var EnaDisChangeConfirm = confirm("Are you sure you want to Enable this module?");
	}else{
		var EnaDisChangeConfirm = confirm("Are you sure you want to Disable this module?");
	}

	if(EnaDisChangeConfirm){
		$.post(path+"index.php/hrchyMngt/manager/ajaxChangeEnableDisable/"+RelDtlID+'/'+CheckStatus);
	}else{
		//=======If user clicks cancel on confirmation, checkbox checked status should not be changed=======
		var checkbox = $('input.module[value="' + RelDtlID + '"]');
		checkbox.prop("checked", !checkbox.prop("checked"));
	}
}
//-----------End of AJAX to change enable disable status of module dynamically----------------------