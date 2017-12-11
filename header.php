<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name=“robots” content=“noindex,nofollow”>
		<meta name="viewport" content="width=device-width">
		<title>MANEZH Personal Profile</title>
		<!--styles-->
		<link rel="stylesheet" href="fonts/fonts.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/mediaqueries.css">
		<!--specific styles-->
		<?php
			$currentpage = $_SERVER['REQUEST_URI'];
			if ( strpos( $currentpage, 'page-register-dealers.php' ) == true || strpos( $currentpage, 'page-register-agency.php' ) == true ) { ?>
				<!-- PAGE - REGISTER -->
				<link rel="stylesheet" href="css/nice-select.css">
				<!-- PAGE - REGISTER (END) -->
			<?php }
		?>
		<?php
			$currentpage = $_SERVER['REQUEST_URI'];
			if ( strpos( $currentpage, 'page-edit-profile.php' ) == true || strpos( $currentpage, 'page-edit-profile.php' ) == true ) { ?>
				<!-- PAGE - EDIT - PROFILE -->
				<link rel="stylesheet" href="css/nice-select.css">
				<!-- PAGE - EDIT - PROFILE (END) -->
			<?php }
		?>
	</head>
	<body class="manezh-account-page">