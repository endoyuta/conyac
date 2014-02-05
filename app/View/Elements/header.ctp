<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php echo (isset($title) ? $title . ' - ' : '') . h($setting['Setting']['site_name'])?></title>
	<link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
	<meta name="Description" content="<?php echo isset($description) ?  $description: '' ?>" />
	<meta name="Keywords" content="<?php echo isset($keywords) ? $keywords : '' ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="">
	<link rel="canonical" href="<?php echo $this->Html->url(null, true)?>" />

	<!-- Le styles -->
	<?php echo $this->Html->css('/bootstrap/css/bootstrap')?>
	<style type="text/css">
	.navbar-static-top {margin-bottom: 0px;}
	</style>
	<?php echo $this->Html->css('style')?>
	<?php echo $this->fetch('css')?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>