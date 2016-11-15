<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Валидация формы</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

	<div class="container content">
<form class="form-horizontal" method="post" id="signUpForm" action="">
	<div class="form-group btn btn-success col-xs-8 col-sm-8 col-md-8 col-lg-8">Sign Up</div>
	<br>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<span class="input-group-addon" id="name">First Name</span>
			<input type="text" class="form-control" aria-describedby="name" min="3" max="60" name="name" placeholder="firstname" pattern="[a-zA-Zа-яА-ЯёЁ ]+" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>	
	</div>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<span class="input-group-addon" id="secondname">Second Name</span>
			<input type="text" class="form-control" aria-describedby="secondname" min="5" max="11" name="secondname" placeholder="secondname" pattern="[a-zA-Zа-яА-ЯёЁ ]+" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<span class="input-group-addon" id="email">E-mail</span>
			<input type="email" class="form-control" aria-describedby="email" id="email" name="email" placeholder="E-mail" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<select class="form-control" id="gender" name="gender" required>
		<option value="">Select Gender</option>
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>
	</div>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<span class="input-group-addon" id="pass">Password</span>
		<input type="text" class="form-control" aria-describedby="password" name="pass" placeholder="Password" required>
		<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<label>
			<input type="checkbox" value="check1" required>
			Conditions of Agreement
		</label>
	</div>
	<div class="form-group input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<button type="submit" id="submit" class="btn btn-primary">Отправить</button>
	</div>
</form>
<div id="result"></div>
	</div>
	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="validator.min.js"></script>

	<script>
$(function(){
	$('#signUpForm').validator({
		feedback: {
			success: 'glyphicon-thumbs-up',
			error: 'glyphicon-thumbs-down'
		}
	});
});
$('#signUpform').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
	} else {
		flag: 1;
	}	
});
if(flag==1){
$.post('http://codeit.pro/frontTestTask/user/registration', $("#signUpForm").serialize(),
    function(data) {
    //$('#result').html(data);
		$.getJSON('http://codeit.pro/frontTestTask/user/registration?callback=?', function(data) {
		});
	});
}
</script>
</body>
</html>