<?php require 'lang.php'; ?><!DOCTYPE html>
<html>
	<head>
		<title><?php _e('title');?></title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css" />
		<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="b" id="jqm-home"> 
			<div data-role="header"> 
				<h1><?php _e('title'); ?></h1>
			</div> 
			
			<div data-role="content"> 
				<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b"> 
					<li data-role="list-divider">Data</li> 
					<li><a href="<?php make_link('data'); ?>">Data</a></li> 
					<li><a href="<?php make_link('add.php'); ?>" rel="external"><?php _e('add-record'); ?></a></li> 
				</ul> 
			</div> 
		</div>		
	</body>
</html>