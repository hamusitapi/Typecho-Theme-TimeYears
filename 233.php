<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
 

 
<?php } ?>
 


<section id="content" class="mdui-center mdui-m-y-3">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?><!--如果有评论的才会输出-->
    <!--显示评论总条数-->
    <h3 class="mdui-p-a-2"><a href=""><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></a></h3><hr>
    <!--输出评论列表-->
    <ul id="comment_list" class="mdui-p-a-0"style="list-style:none">
    
        <?php while($comments->next()): ?>
            <li class="mdui-m-a-1 <?php 
                if ($comments->_levels > 0) {
                    echo ' comment-child';
                    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
            } else {
                    echo ' comment-parent';}
                    $comments->alt(' comment-odd', ' comment-even');
                     ?>" id="<?php $comments->theId(); ?>" style="border: 1px solid rgb(152, 152, 152);">
            <span class="mdui-float-right mdui-m-a-1"><?php echo $comments->sequence(); ?>楼</span><br>
            <div class="">
                <div class="o comments-gravatar" style="" onclick="window.open('<?php $comments->permalink(); ?>');"><?php $comments->gravatar(40);?></div>
                <span class="mdui-m-x-1" class=""><?php $comments->author(); ?></span>
                <?php $comments->dateWord(); ?>
            </div>
            <div class="mdui-typo mdui-m-a-1">
                <?php $comments->content(); ?>
            </div>  
                <li>
                <?php if ($comments->children) { ?> 
                    <div class="comment-children">
                        <?php $comments->threadedComments($options); ?> 
                    </div>
                        <?php } ?> 
                </li>
            </li>
    <?php endwhile; ?>
    </ul>





    
    <!-- 判断设置是否允许对当前文章进行评论 -->
    <?php if($this->allow('comment')): ?>
        <h4 id="response">来一发？</h4>
        <!-- 输入表单开始 -->
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
        <!-- 如果当前用户已经登录 -->
        <?php if($this->user->hasLogin()): ?>
            <!-- 显示当前登录用户的用户名以及登出连接 -->
            <p>已登录- <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>.
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
        <p><input type="submit" value="发送" class="submit" /></p>
        </form>
    <?php endif; ?>
</section>
