<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
 ?>

<!-- post main -->
<section class="mdui-center mdui-shadow-8" >
  <div class="mdui-m-a-1 mdui-p-a-1">
    <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
  </div>
  <div class="mdui-m-a-1 mdui-p-a-1">
    <?php $this -> content(); ?>
  </div>
</section>
<!-- end post main -->

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>