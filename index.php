<?php
/**
 * 小哈的第一个typecho主题
 *
 * @package TypechoTimeYears Theme 
 * @author hamusita
 * @version 1.0.0
 * @link http://timeyears.cn
 */
?>
<?php $this->need('header.php');//引入页头?>
<section class="mdui-center mdui-hoverable mdui-shadow-8 " >
	
	<!-- 文章输出 -->
	<?php $index=0;  ?>
	<?php if ($this->have()): ?>
	<?php while($this->next()): ?>
	<?php $index++;?>
	<div class="mdui-m-a-1 mdui-p-a-1" style="animation-delay:<?php echo 0.2*$index; ?>s">
	<hr/>
		<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<span><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?>-</a></span>
		<span><?php $this->date(); ?>-</span>
		<span><?php $this->category(','); ?>-</span>
		<span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '评论 1', '评论 %d'); ?></a></span>
		<span><?php $this->tags(','); ?>
		<div class="mdui-text-truncate" style="width=0px;"><?php $this -> excerpt(30); ?>
		<a class="mdui-float-right mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" href="<?php $this->permalink() ?>">阅读全文</a></div>
	</div>
	<?php endwhile; ?>
	<?php else: ?>暂无文章<?php endif; ?>
	<!-- 文章分页 -->
	<?php $this->pageNav(); ?>
</section>
<?php $this->need('footer.php');//引入页脚?>