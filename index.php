/**
 * 小哈的第一个typecho主题
 *
 * @package TypechoTimeYears Theme 
 * @author hamusita
 * @version 1.0.0
 * @link http://timeyears.cn
 */
<?php while($this->next()): ?>//循环输出文章
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