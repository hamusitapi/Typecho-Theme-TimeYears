<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
 ?>

<!-- post main -->
<div class="mdui-center">
  <div class="mdui-m-a-1 mdui-p-a-1 mdui-hoverable">
    <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
  </div>
  <div class="mdui-m-a-1 mdui-p-a-1 mdui-hoverable">
    <?php $this -> content(); ?>
  </div>
</div>
<!-- end post main -->

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>