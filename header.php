<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<!-- 调用 -->

<link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
</head>
<body class="mdui-loaded mdui-theme-accent-deep-purple mdui-color-white">
<div class="mdui-typo mdui-container">
<header class="mdui-center mdui-shadow-8  " >
	<!-- 站点名称及描述 -->
	<h1 class="mdui-p-a-2"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<p class="mdui-p-a-2"><?php $this->options->description() ?></p>
	<!-- 面包屑 -->
	<div class="mdui-p-a-2">
		<div class="crumbs_patch">
			<a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</li>
			<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
				你好!
			<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
				<?php $this->category(); ?> &raquo; <?php $this->title() ?>
			<?php else: ?><!-- 页面为其他页时 -->
				<?php $this->archiveTitle(' &raquo; ','',''); ?>
			<?php endif; ?>
	</div>
	<!-- 搜索框 -->
	<div class="mdui-p-a-2">
		<form method="post" action="">
			<div class="mdui-row">
				<div class="mdui-col-xs-8">
					<input type="text" class="mdui-textfield-input mdui-ripple" placeholder="找点什么？" name="s" class="text" size="32" /> 
				</div>
				<div class="mdui-col-xs-2">
					<input type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" class="submit" value="Search" />
				</div>
			</div>
		</form>
	</div>
</header>

