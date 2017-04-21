/*FORM CONTATTI*/
$(document).ready(function() {
  
  $("#button").click(function(){
    var nome = $("#nome").val();
    var email = $("#email").val();
	var tel = $("#tel").val();
    var oggetto = $("#oggetto").val();
    var message = $("#message").val();
    var privacy = $("#privacy");
    var datastring ='nome=' + nome + '&email=' + email +'&tel=' + tel +  '&oggetto=' + oggetto +'&message=' + encodeURIComponent(message)+'&privacy=' + privacy;
    
    if(nome.length<1){
    	valid += '<p class="alert">*Name is required';
    }
    if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {

		valid += '<p class="alert">*Please enter a valid e-mail address';

	}
	
	if(message.length<1){
    	valid += '<p class="alert">*Name is required';
    }
    

	if ((privacy).is(":not(:checked)")){ 
		valid += '<p class="alert">*Please enter a valid e-mail address';
		
	}

	$(".load").fadeIn("slow");
		
	$.ajax({	

		type: "POST",

		url: "mail.php",

		data: datastring,

		cache: false,
		
		success: function(html){
		
		$("#responde").fadeIn("slow");
		
		$("#responde").html("<p class='success'><i class='fa fa-check'></i> Message sent successfully!</p>");

		//$("#risposta").css("background-color","#40f732");

		setTimeout('$("#responde").fadeOut("slow")',2500);
		
		setTimeout('$(".load").fadeOut("slow")');
		
		$('#contact-form')[0].reset();
			
		}

	});
	
    return false;
  });
});