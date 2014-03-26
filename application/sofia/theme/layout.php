<!doctype html>
<html lang="fr">

	<head>
		
		<!-- TITLE -->
		<title><?php echo $second_part_title . $title; ?></title>

		<!-- META --> 
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" >

		<!-- FAVICON -->
		<link rel="icon" type="image/png" href="<?php echo img_url('panda/afineday-64x.png'); ?>">

		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo css_url('style'); ?>">

		<?php foreach($css as $url): ?>

			<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" >
			
		<?php endforeach; ?>

	</head>

	<body>

		<?php echo $output; ?>
		
		<!-- JAVASCRIPT -->
		<?php foreach($js as $url): ?>
			<script type="text/javascript" src="<?php echo $url; ?>"></script>
		<?php endforeach; ?>

	</body>
</html>