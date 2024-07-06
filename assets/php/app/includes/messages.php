
<?php if(isset($_SESSION['message'])): ?>
      <div id="msg-success <?php echo $_SESSION['type']; ?> ">
        <p><?php echo $_SESSION['message']; ?></p>
        <?php 
          unset($_SESSION['message']);
          unset($_SESSION['type']);
        ?>
      </div>
<?php endif; ?>