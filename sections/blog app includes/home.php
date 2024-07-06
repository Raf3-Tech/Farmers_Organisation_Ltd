<!DOCTYPE HTML>
<?php
	require_once 'session.php';
	require_once 'account_name.php';
	require '../../path.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/master.css'; ?>">
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Farmers Organisation Ltd - Blog Dashboard</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Membership System</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class = "glyphicon glyphicon-user"></span> <?php echo $acc_name?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
		</div>
	</nav>
	<div class = "container-fluid">
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Blog Overview</a></li>
			<li><a href="account.php">Users</a></li>
			<li><a href="member.php">Posts</a></li>
			<li><a href="club.php">Topics</a></li>
		</ul>
		
	</div>
	<?php include(ROOT_PATH . "/assets/php/app/includes/blogPage.php") ?>
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
		<label class = "pull-right">&copy; <?php echo date('Y', strtotime('+8 HOURS'))?> Developed By: <b>Raf3</b></label>
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
</html>