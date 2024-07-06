<?php 

  include_once('path.php');
  include_once(ROOT_PATH . "/app/controllers/users.php");

?>

<div id="id02" class="modal"> 
  
      <form class="modal-content animate" action="index.php" method="post">
    
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="assets/media/avatar1.png" alt="Avatar" class="avatar">
        </div>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
    
        <div class="low-container">
          <h1>Sign Up</h1>
          <p class="text">Please fill in this form to create an account.</p>
          <hr>
          <label for="username"><b>Username</b></label>
          <input type="text" value="<?php echo $username; ?>" placeholder="Enter Username" name="username" required class="contact__input input_field">
<br>
          <label for="email"><b>Email</b></label><br>
          <input type="text" value="<?php echo $email; ?>" placeholder="Enter Email" name="email" required class="contact__input input_field">

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" value="<?php echo $password; ?>" required class="contact__input input_field">
          <br>
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" value="<?php echo $psw; ?>" placeholder="Repeat Password" name="psw-repeat" required class="contact__input input_field">
          
    
          <div class="clearfix">
            <button type="submit" class="signupbtn btn" name="register-btn">Sign Up</button>
          </div>
          
    
          <p class="text">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        </div>
      </form>
</div>