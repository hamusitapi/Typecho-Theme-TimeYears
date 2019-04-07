<header class="mdui-container">
	<!-- 站点名称和描述 -->
	<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<span><?php $this->options->description() ?></span>
	<!-- 站内搜索 -->
	<form method="post" action="">
		<div><input type="text" class="mdui-textfield-input" placeholder="找点什么？" name="s" class="text" size="32" /> <input type="submit" class="mdui-btn mdui-btn-raised mdui-ripple" class="submit" value="Search" /></div>
	</form>
</header>