<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<!-- 调用 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
<!-- <script src="https://apps.bdimg.com/libs/jquery/1.6.4/jquery.js"></script> -->
</head>
<body class="mdui-loaded mdui-theme-accent-deep-purple mdui-color-white">
<div class="mdui-typo mdui-container">
<header class="mdui-center mdui-valign mdui-row mdui-m-y-3">
	<div class="mdui-center mdui-m-y-2">
		<div id="logo" class="mdui-center" ><?php echo $this->author->gravatar(100);?></div>
		<h1 class="mdui-m-y-1" style="width:100%;text-align:center;"><a href="<?php $this->options->siteUrl(); ?>" title="首页"><?php $this->options->title() ?></a></h1>
		<span class=""><?php $this->options->description() ?></span>
	</div>
	
	<!-- 面包屑 -->
	
	<!-- 搜索框 -->
	<!-- <div class="mdui-p-a-2">
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
	</div> -->
</header>


