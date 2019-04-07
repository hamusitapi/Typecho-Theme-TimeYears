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
<body class="mdui-loaded mdui-theme-accent-deep-purple mdui-color-white">
<div class="mdui-container">
<header class="mdui-center">
	<!-- sitename & description -->
	<h1 class="mdui-hoverable mdui-ripple mdui-p-y-2"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<p><?php $this->options->description() ?></p>
</header>
