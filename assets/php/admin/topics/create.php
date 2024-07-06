</<?php 

include('../../../../path.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo BASE_URL . 'assets/media/icons/favicon.jpg' ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/master.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/blog.css'; ?>">
	<title></title>
</head>
<body>

	<!-- header -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/blogHeader.php"); ?>



    <!-- sidenav -->
    <?php //include(ROOT_PATH . "/assets/php/app/includes/sidenav.php"); ?>

    <!-- log in modal -->
    <?php //include(ROOT_PATH . "/assets/php/app/includes/loginModal.php"); ?>

    <!-- sign up modal -->
    <?php //include(ROOT_PATH . "/assets/php/app/includes/signupModal.php"); ?>

</body>
<?php include(ROOT_PATH . "/assets/php/app/includes/adminSideMenu.php"); ?>
</html>