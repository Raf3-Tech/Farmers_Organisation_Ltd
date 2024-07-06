
<div id="id01" class="modal">
    
      <form class="modal-content animate" action="loginModal.php<?php //echo BASE_URL . 'sections/blog.php' ?>" method="post">
  
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="<?php echo BASE_URL . '/assets/media/icons/avatar.png'; ?>" alt="Avatar" class="avatar">
        </div>

        <?php include(ROOT_PATH . "/assets/php/app/helpers/formErrors.php"); ?>
    
        <div class="low-container inputs">
          <label for="username"><b>Username</b></label>
          <input type="text" value="<?php echo $username ?>" placeholder="Enter Username" name="username" required class="contact__input input_field">
    
          <label for="password"><b>Password</b></label>
          <input type="password" value="<?php echo $password ?>" placeholder="Enter Password" name="password" required class="contact__input input_field">
            
          <button type="submit" class="btn" name="login-btn">Login</button>
        </div>  
      </form>
</div>