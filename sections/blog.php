<?php

  include('../path.php');
  include(ROOT_PATH . "/assets/php/app/controllers/users.php");

  $posts = array();
  $postsTitle = 'Recent Posts';

  if (isset($_POST['search-term'])) {
    $postsTitle = "You Searched For ' ". $_POST['search-term'] . " '";
    $posts = searchPosts($_POST['search-term']);
  }

  $posts = getPublishedPosts();



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="<?php echo BASE_URL . 'assets/media/icons/favicon.jpg' ?>" type="image/x-icon">

    <title>FOL - Blog</title>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <!-- link to css -->
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/master.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/blog.css'; ?>">
  </head>
  <body>
    <!-- header -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/blogHeader.php"); ?>

    <!-- sidenav -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/sidenav.php"); ?>



    <!-- log in modal -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/loginModal.php"); ?>

    <!-- sign up modal -->
    <?php include(ROOT_PATH . "/assets/php/app/includes/signupModal.php"); ?>
    
    <!--==================== BLOG ====================-->
    <?php include(ROOT_PATH . "/assets/php/app/includes/blogPage.php") ?>

  </body>

    <script src="../assets/scripts/blog.js">   </script>

  <script>
    // Get the modal
    var modal = document.getElementById('id02');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <!--========== SCROLL UP ==========-->
  <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-circle-line"></i>
  </a>

  <!--=============== EMAIL JS ===============-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
      

      <!--=============== MAIN JS ===============-->
      <script src="../assets/scripts/master.js"></script>

      <!-- --- shop js -->
      <script src="../assets/scripts/shop.js"></script>

  </body>

  <!--==================== FOOTER ====================-->
  <?php include(ROOT_PATH . "/assets/php/app/includes/footer.php") ?>
</html>
