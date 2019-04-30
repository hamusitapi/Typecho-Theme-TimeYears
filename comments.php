<section id="content" class="mdui-center mdui-shadow-8">
<h4><?php $this->commentsNum('暂无评论', '只有一个评论"' . $this->title . '"', '已有 %d 个评论'); ?></h4>
<ol id="comment_list">
    <?php $this->comments()->to($comments); ?>
    <?php while($comments->next()): ?>
        <div class="mdui-center mdui-shadow-2">
        第<?php echo $comments->sequence(); ?>楼
            <div class="comment_data">
                    <strong><?php $comments->author(); ?></strong>
                    <a><?php $comments->date('Y-m-d'); ?> <?php $comments->date('H:i'); ?></a>
                </div>
            <div class="comment_body"><?php $comments->content(); ?></div>
        </div>
    <?php endwhile; ?>
</ol>
</section>
<!-- 判断设置是否允许对当前文章进行评论 -->
<?php if($this->allow('comment')): ?>

    <h4 id="response">Leave a Reply</h4>

    <!-- 输入表单开始 -->
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">

        <!-- 如果当前用户已经登录 -->
        <?php if($this->user->hasLogin()): ?>
            <!-- 显示当前登录用户的用户名以及登出连接 -->
            <p>Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>.
            <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">Logout &raquo;</a></p>

        <!-- 若当前用户未登录 -->
        <?php else: ?>
            <!-- 要求输入名字、邮箱、网址 -->
        <p><input type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" /><label>Name (Required)</label></p>
        <p><input type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" /><label>E-mail (Required *will not be published)</label></p>
        <p><input type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" /><label>Website</label></p>
        <?php endif; ?>

        <!-- 输入要回复的内容 -->
     <p><textarea rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea></p>
     <p><input type="submit" value="Submit Comment" class="submit" /></p>
    </form>
<?php endif; ?>