<?php 

  include('path.php');
  include(ROOT_PATH . "/app/controllers/users.php");

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
    <title>FOL - Blog</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/modal.css">
  </head>
  <body>
    <!-- header section -->
    <?php 
      include_once(ROOT_PATH . "/app/includes/header.php");
      include(ROOT_PATH . "/app/includes/messages.php");
    ?>

    <!-- log in modal -->
    <?php include(ROOT_PATH . "/login.php"); ?>

    <!-- sign up modal -->
    <?php include(ROOT_PATH . "/signup.php"); ?>

    <div class="container">
      <div class="col main-col">
        <?php foreach ($posts as $post): ?>

          <div class="featured-post">
            <img src="<?php echo BASE_URL . '/assets/media/' .$post['image']; ?>" alt="art">
            <p class="post-dits">
              <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
              <img src="<?php echo BASE_URL . '/assets/media/user.png'?>" alt="user" id="drop-img">
              <?php echo $post['username']; ?>
            </p>
            <p class="post-title"><?php echo $post['title']; ?></p>
            <p class="post"><?php echo substr($post['body'], 0, 150) . '...'; ?></p>
                <span class="button"><a href="#">continue reading</a></span>
          </div>

        <?php endforeach; ?>
       
      </div>
      <div class="col side-col">
        <div class="about-me">
          <p class="side-title"><?php echo $postsTitle; ?></p>
          <form action="" method="post">
            <input type="text" name="search-term" placeholder="Search..." id="">
          </form>
        </div>

        <div class="recent-posts">
          <p class="side-title">recent posts</p>
          <img src="assets/media/img (1).webp" alt="">
          <p class="post-title">artistic composer materialised</p>
          <img src="assets/media/img (1).webp" alt="">
          <p class="post-title">artistic composer materialised</p>
          <img src="assets/media/img (1).webp" alt="">
          <p class="post-title">artistic composer materialised</p>
          <img src="assets/media/img (1).webp" alt="">
          <p class="post-title">artistic composer materialised</p>
        </div>
      </div>
    </div>

    <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>

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

  </body>
  <footer>
    <div class="foot">
      <p>copyright @2023 | Designed & Developed By <span>Raf3</span></p>
    </div>
  </footer>
</html>
