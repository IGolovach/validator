$("form>div").addClass("form-group input-group col-sm-offset-2 col-xs-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-8 col-sm-8 col-md-8 col-lg-8");
$("span[aria-hidden='true']").addClass("glyphicon form-control-feedback");

$(function(){
	$('#signUpForm').validator({
		feedback: {
			success: 'glyphicon-thumbs-up',
			error: 'glyphicon-thumbs-down'
		}
	});
});
/*
//
//(in progress)Code to check fields
//
flag = 0;
function button(){	
    if(messageStat == 0){	
        $("#submit").hide("slow");
		if(!flag)
		{flag = 1;
		$('#result').append('<p color="red">* You need to fill all the fields</p>');}					 	
    }
}
$("input").change(function(){
	checkedCheckbox = $("#agree").prop("checked");
	if( name.length == 1 && secondname.length == 1 && pass.length == 1 && email.length == 1 && gender == 1){
		if(checkedCheckbox){
		$("#submit").show("slow");}
	}
	if(name.length == 0 || secondname.length == 0 || pass.length == 0 || email.length == 0 || gender == 0){ 
            messageStat = 0;  button();              
    }
});
*/
function get_result() {
 	var msg = $('#signUpForm').serialize();	
	/*var name= $('input[name="name"]').val();   
	var secondname= $('input[name="secondname"]').val();
	var email= $('input[name="email"]').val();;  
	var pass = $('input[name="pass"]').val();
	var gender = $('select[name="gender"]').val();*/	
        $.ajax({
          type: 'POST',
          url: 'http://codeit.pro/frontTestTask/user/registration',
          data: msg,         
		  success: function(data) {
			alert(data.message);
			if(data.status == "OK"){window.location.replace("company.html");}
			$.getJSON('http://codeit.pro/frontTestTask/user/registration', function(data) {
				//$('#result').append('<p>' + data.message +'; ' + data.status + '</p>');					
		  });
          },
          error:  function(){
			alert('Возникла ошибка');
          }
        });
}