<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php'); 
$this->need('header.php');
 ?>

<!-- main -->
<div class="post-main">
  <div class="post-title">
    <div class="mdui-typo-display-1"><?php $this->title() ?></div>
    <div class="post-wenz">
    <div class="mdui-typo-subheading">
      <p><?php $this -> content(); ?></p>
    </div>
    </div>
  </div>
</div>
<!-- end main -->

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>