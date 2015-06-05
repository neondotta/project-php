$(document).ready(function(){
	
	$('#form-contato').validate({
		regras:{
			nome:{
				minlength: 	2,
				required: 	true
			},
			email{
				required: 	true,
				email: 		true
			},
			assunto{
				minlength: 	2,
				required: 	true
			}
			mensagem:{
				minlength: 	10,
				required: 	true
			}
		},
		highlight: function(element){
			$(element).closest('.control-group').removeClass('success').addClass('error');
		},
		success: function(element){
			element.text('OK!').addClass('valid')
			.closest('.control-group').removeClass('error').addClass('success');
		}
	
	});

});