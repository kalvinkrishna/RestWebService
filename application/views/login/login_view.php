<!DOCTYPE html>
<html>
<?php
	if(isset($this->session->userdata['username'])){
		header("location: http://localhost/Admin");
	}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!--view/login/login_view
	<br>
	label username -> user_name untuk post
	<br>
	label password -> password untuk post
	<br>
	label button submit -> btn_login -->
	<div class='login'>
		

	<?php echo form_open('Admin/Login');?>
		<input type="text" name="user_name" placeholder="username">
		<br>
		<input type="password" name="password" placeholder="password">
		<br>
		<button type="submit" value="submit" name="btn_login">
			submit
		</button>
	<?php echo form_close();?>
	

	</div>
</body>
</html>