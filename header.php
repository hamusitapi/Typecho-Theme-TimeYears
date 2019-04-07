<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<!-- url -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
</head>
<header class="mdui-container">
	<!-- sitename & description -->
	<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<span><?php $this->options->description() ?></span>
	<!-- searcher -->
	<div>
	<form method="post" action="">
		<div class="mdui-row"><input class="mdui-col-xs-9 mdui-col-xs-9" type="text" class="mdui-textfield-input" placeholder="找点什么？" name="s" class="text" size="32" /> 
		<input type="submit" class="mdui-col-xs-3 mdui-btn mdui-btn-raised mdui-ripple" class="submit" value="Search" /></div>
	</form>
	</div>
</header>
<body>