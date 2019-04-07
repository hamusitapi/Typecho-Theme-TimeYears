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
<section class="mdui-center">
	<!-- 搜索框 -->
	<div>
		<form method="post" action="">
			<div class="mdui-row">
				<div class="mdui-col-xs-9">
					<input type="text" class="mdui-textfield-input mdui-ripple" placeholder="找点什么？" name="s" class="text" size="32" /> 
				</div>
				<div class="mdui-col-xs-3">
					<input type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" class="submit" value="Search" />
				</div>
			</div>
		</form>
	</div>
	<!-- 文章输出 -->
	<?php if ($this->have()): ?>
	<?php while($this->next()): ?>
	<div class="mdui-hoverable mdui-m-a-1 mdui-p-a-1">
		<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<span><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
		<span><?php $this->date(); ?></span>
		<span><?php $this->category(','); ?></span>
		<span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '评论 1', '评论 %d'); ?></a></span>
		<span><?php $this->tags(','); ?></span>
		<div class="mdui-text-truncate" ><?php $this->content("<span class='mdui-float-right mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent'>全文阅读</span>"); ?></div>
	</div>
	<?php endwhile; ?>
	<?php else: ?>暂无文章<?php endif; ?>
	<!-- 文章分页 -->
	<?php $this->pageNav(); ?>
</section>
<?php $this->need('footer.php');//引入页脚?>