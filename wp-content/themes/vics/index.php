<!DOCTYPE html>
<html ng-app="app">
<head>
	<base href="/vics/">
	<title></title>
	<?php wp_head(); ?>
</head>
<body>
	<header><h1><a href="<?php echo site_url(); ?>">AngularJS Demo Theme</a></header>

	<div ng-view></div>

	<footer>&copy; <?php echo date("Y"); ?> VICS</footer>
</body>
</html>
