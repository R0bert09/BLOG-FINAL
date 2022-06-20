<?php if(isset($_SESSION['mensaje'])):?>
    <div class="alert alert-<?php echo $_SESSION['type'];?>">
        <span class="p-font"><?php echo $_SESSION['mensaje'];?></span>
        <?php
            unset($_SESSION['mensaje']);
            unset($_SESSION['type']);
        ?>
    </div>   
<?php endif;?>

<?php if(isset($_SESSION['message'])): ?>
  <div class="msg <?php echo $_SESSION['type']; ?>">
    <li><?php echo $_SESSION['message']; ?></li>
    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
    ?>
  </div>
<?php endif; ?>