<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Slabo+13px' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jssor.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jssor.slider.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="container-fluid">

		<div class="headerLogo col-xs-12">
			<a href="<?php bloginfo('url'); ?>/index">
				<img class="alignnone size-medium wp-image-18" src="/lambent/lambent/wp-content/uploads/2015/03/lambent_home_logo1.png" alt="lambent_home_logo" width="232" height="240" />
			</a>
		</div>

		<div class="navigationBar col-xs-12">
			<ul class="navigationList">
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'index')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/index ">Home</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'about')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/about">About</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'shine')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/shine">Shine On</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'editor')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/editor">Editor's Picks</a></li>
				<li><input type="text" width="200" class="form-control" placeholder="Search"><button type="submit" class="btn btn-default searchButton">Go</button></li>
			</ul>
		</div>
		