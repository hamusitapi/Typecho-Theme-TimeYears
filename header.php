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
<script src="https://apps.bdimg.com/libs/jquery/2.1.2/jquery.js"></script>
</head>
<body class="mdui-loaded mdui-theme-accent-indigo mdui-color-white">
<header>
<div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
  <button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>
  <input class="mdui-textfield-input" type="text" placeholder="Search"/>
  <button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
</div>

</header>
<main class="mdui-typo">
<section class="mdui-center mdui-valign mdui-row " style="margin-top: 90px;">
	<div class="mdui-center mdui-m-y-2">
		<div id="logo" class="mdui-center" ><?php echo $this->author->gravatar(100);?></div>
			<h1 class="mdui-m-y-1" style="width:100%;text-align:center;"><a href="<?php $this->options->siteUrl(); ?>" title="首页"><?php $this->options->title() ?></a></h1>
			<span class=""><?php $this->options->description() ?></span>
		</div>
</section>


	<!-- 面包屑 -->
<!-- <form method="post" action="">
		<div class="mdui-textfield-expandable">
			<button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>
			<input type="text" class="mdui-textfield-input mdui-ripple" placeholder="找点什么？" name="s" class="text" size="32" /> 
			<input type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" class="submit" value="Search" />
			<button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
		</div>
	</form> -->
	<!-- 搜索框 -->
	