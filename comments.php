<section id="content" class="mdui-center mdui-shadow-8">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?><!--如果有评论的才会输出-->
     <!--显示评论总条数-->
  <h3 class="mdui-p-a-2"><a href=""><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></a></h3>
      <!--输出评论列表-->
  <?php $comments->listComments(); ?>
      <!--评论分页-->
  <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  <?php endif; ?>

  <!--  -->
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
</section>
