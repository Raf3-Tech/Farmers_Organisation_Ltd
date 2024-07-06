<!DOCTYPE HTML>
<?php
	require 'conn.php';
	require '../../path.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/master.css'; ?>">
		<title>Farmers Organisation Ltd - Blog Dashboard.</title>
	</head>
<body class = "alert-warning row1">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Farmers Organisation Ltd - Blog Dashboard.</a>
			</div>
		</div>
	</nav>
	<div class = "row row2">	
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 alert alert-info">
			<h4 class="admin_login">Administrator Login</h4>
			<hr  style = "clear:both;"/>
			<form class="modal-content" enctype = "multipart/form-data" method = "POST" >
				<div class = "form-group">
					<label class="username_input">Username</label>
					<input type = "text" id = "username" class = "form-control contact__input input_field" placeholder="Enter Username" />
				</div>
				<div class = "form-group">
					<label class="password_input">Password</label>
					<input type = "password" id = "password" class = "form-control contact__input input_field" placeholder="Enter Password" />
				</div>
				<div id = "loading">
				</div>
				<br />
				<div class  = "form-group">
					<button type = "button" class = "form-control" id = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
			</form>
		</div>
		<div class = "col-md-4">
		</div>
	</div>	
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
	<label class = "pull-right">&copy; <?php echo date('Y', strtotime('+8 HOURS'))?> CREATED BY: <b>RAF3</b></label>
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
</html>