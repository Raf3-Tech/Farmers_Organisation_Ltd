<?php
        include('path.php');
        //include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="<?php echo BASE_URL . 'assets/media/icons/favicon.jpg' ?>" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/master.css">
      <link rel="stylesheet" href="assets/css/shop.css">
      <link rel="stylesheet" href="assets/css/blog.css">

      <title>Brown Corporation Limited</title>

      <script src="https://kit.fontawesome.com/5a1e8410a4.js" crossorigin="anonymous"></script>
   </head>
   <body>
    <!--==================== HEADER ====================-->
    <?php
        include(ROOT_PATH . "/assets/php/app/includes/homeHeader.php");
    ?>
    
   <!-- cart-button -->
   <?php include(ROOT_PATH . "/assets/php/app/includes/cart-button.php"); ?>
   
   <!--==================== MAIN ====================-->

   <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content">
                    <div class="home__data">
                        <h3 class="home__subtitle">
                        <span>welcome</span>,
                        </h3>

                        <h1 class="home__title">BCL</h1>

                        <h3 class="home__education">Brown Corporation Limited,</h3>

                        <p class="home__description">
                        is a leading financial institution.
Our mission is simple yet profound: to empower our clients to achieve their financial goals and realize their dreams.
                        </p>

                        <a href="#shop" class="button">Fill Application</a>
                    </div>

                </div>

                <div class="home__image">
                    <svg class="home__blob" viewBox="0 0 550 591" xmlns="http://www.w3.org/2000/svg">
                        <mask id="maskBlob" mask-type="alpha">
                           <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
                           170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
                           447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
                           587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
                           438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
                        </mask>
                        <g mask="url(#maskBlob)">
                           <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
                           170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
                           447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
                           587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
                           438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
                     
                           <rect x="37" width="476" height="630" fill="url(#pattern0)"/>
                        </g>
                     
                        <rect x="37" width="476" height="300" fill="url(#pattern1)"/>
                     
                        <defs>
                           <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                              <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)"/>
                           </pattern>
                     
                           <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                              <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)"/>
                           </pattern>
                     
                           <!-- Insert your profile (recommended size: 640 x 940) -->
                           <image class="home__img" id="imageBlob" width="640" height="925" href="<?php echo BASE_URL . 'assets/media/icons/logo.jpg' ?>"/>
                        </defs>
                     </svg>
                </div>
            </div>
        </section>


         <!--==================== SHOP ====================-->
         <section class="shop section" id="shop">
         <h3 class="section__subtitle">Shop <span>Now</span></h3>

         <h2 class="section__title">
            Browse Our Catalogue
         </h2>

         <?php include(ROOT_PATH . "/assets/php/app/includes/shopPage.php") ?>

         <?php include(ROOT_PATH . "/assets/php/app/includes/cart.php") ?>
         </section>

        

         <!--==================== SPRAY FORM ====================-->
         <?php include(ROOT_PATH . "/assets/php/app/includes/servicesPage.php") ?>

         <!--==================== BLOG ====================-->
         <?php include(ROOT_PATH . "/assets/php/app/includes/blogPage.php") ?>

         <!--==================== ABOUT ====================-->
         <?php include(ROOT_PATH . "/assets/php/app/includes/aboutPage.php") ?>

         <!--==================== CONTACT ====================-->
         <?php include(ROOT_PATH . "/assets/php/app/includes/contactPage.php") ?>
      </main>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-circle-line"></i>
      </a>
      
      <!--=============== EMAIL JS ===============-->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
      

      <!--=============== MAIN JS ===============-->
      <script src="assets/scripts/master.js"></script>
   </body>
   <!--==================== FOOTER ====================-->
   <?php include(ROOT_PATH . "/assets/php/app/includes/footer.php") ?>
</html>