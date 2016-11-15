$(function(){
	$('#signUpForm').validator({
		feedback: {
			success: 'glyphicon-thumbs-up',
			error: 'glyphicon-thumbs-down'
		}
	});
});

$("form>div").addClass("form-group input-group col-sm-offset-2 col-xs-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-8 col-sm-8 col-md-8 col-lg-8");

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
          data: msg,/*здесь возможна неверная передача данных*/          
		  success: function(data) {
			alert('Data has been recieved');
			alert(data.message);
			$.getJSON('http://codeit.pro/frontTestTask/user/registration', function(data) {
				//$('#result').append('<p>' + data.message +'; ' + data.status + '</p>');					
        });
          },
          error:  function(){
			alert('Возникла ошибка');
          }
        });

}