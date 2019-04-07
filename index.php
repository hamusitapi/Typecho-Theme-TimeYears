/**
 * 小哈的第一个typecho主题
 *
 * @package TypechoTimeYears Theme 
 * @author hamusita
 * @version 1.0.0
 * @link http://timeyears.cn
 */

//引入head
<?php $this->header(); ?>
//站点名称和描述
<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
<span><?php $this->options->description() ?></span>
//站内搜索
<form method="post" action="">
    <div><input type="text" name="s" class="text" size="32" /> <input type="submit" class="submit" value="Search" /></div>
</form>
//显示文章
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
<?php $this->pageNav(); ?>//文章分页