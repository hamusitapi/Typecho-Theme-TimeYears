<?php
/**
 * 小哈的第一个typecho主题
 *
 * @package TypechoTimeYears Theme 
 * @author hamusita
 * @version 1.0.0
 * @link http://timeyears.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');//引入head
?>
<!-- 引用资源 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" /> -->
</head>
<body>
<?php $this->need('header.php');//引入header?>
<section class="mdui-container">
	<!-- 显示文章 -->
	<?php while($this->next()): ?>
		<div class="post">
		<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<div class="entry_data">
			Published by <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> on <?php $this->date('F j, Y'); ?> in <?php $this->category(','); ?>.
			<?php $this->commentsNum('%d Comments'); ?>.
		</div>
		<div class="entry_text">
			<?php $this->content('Continue Reading...'); ?>
		</div>
		</div>
	<?php endwhile; ?>
	<!-- 文章分页 -->
	<?php $this->pageNav(); ?>
</section>
<?php $this->need('footer.php');//引入footer?>
</body>
</html>
