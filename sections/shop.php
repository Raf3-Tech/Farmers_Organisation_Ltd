<?php
  include('../path.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="<?php echo BASE_URL . 'assets/media/icons/favicon.jpg' ?>" type="image/x-icon">
    
    <title>FOL - Shop</title>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

    <!-- link to css -->
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/master.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/shop.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/blog.css'; ?>">

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="body">
    <!-- --- header section  -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/shopHeader.php"); ?>

      <!-- --- cart-button  -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/cart-button.php"); ?>
  

    <!-- -- shop section  -->
    <section class="shop section" id="shop">
         <h3 class="section__subtitle">Shop <span>Now</span></h3>


         <h2 class="section__title">
            Browse Our Catalogue
         </h2>
        
         <?php include(ROOT_PATH . "/assets/php/app/includes/shopPage.php") ?>
         
    </section>


    <!-- --- scroll-up button js  -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-circle-line"></i>
    </a>

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
      

      <!--=============== MAIN JS ===============-->
      <script src="../assets/scripts/master.js"></script>

      <!-- --- shop js -->
      <script src="<?php echo BASE_URL . '/assets/scripts/shop.js' ?>"></script>
    
</body>

<!--==================== FOOTER ====================-->
<?php include(ROOT_PATH . "/assets/php/app/includes/footer.php") ?>
</html>

