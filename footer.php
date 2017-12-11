		<!-- main js -->
		<script type="text/javascript" src="js/libs/jquery-3.2.1.min.js"></script>
		<!-- <script src="js/libs/jquery-migrate-3.0.0.min.js"></script> -->
		<script type="text/javascript" src="js/main.js"></script>
		<!-- SPECIFIC JS -->
		<?php
			$currentpage = $_SERVER['REQUEST_URI'];
			if ( $currentpage == '/' || $currentpage == '/manezh-account/' || strpos( $currentpage, 'index.php' ) == true ) { ?>
				<!-- PAGE - LOGIN MAIN-->
				<script src="js/specific/login.js"></script>
				<!-- PAGE - LOGIN MAIN (END) -->
			<?php }
			if ( strpos( $currentpage, 'page-register.php' ) == true ) { ?>
				<!-- PAGE - REGISTER -->
				<script src="js/specific/page-register.js"></script>
				<!-- PAGE - REGISTER (END) -->
			<?php }
			if ( strpos( $currentpage, 'page-register-dealers.php' ) == true ) { ?>
				<!-- PAGE - REGISTER DEALERS -->
				<script src="js/libs/jquery.nice-select.min.js"></script>
				<script src="js/specific/page-register-dealers.js"></script>
				<!-- PAGE - REGISTER DEALERS (END) -->
			<?php }
			if ( strpos( $currentpage, 'page-register-agency.php' ) == true ) { ?>
				<!-- PAGE - REGISTER AGENCY -->
				<script src="js/libs/jquery.nice-select.min.js"></script>
				<script src="js/specific/page-register-agency.js"></script>
				<!-- PAGE - REGISTER AGENCY (END) -->
			<?php }
			if ( strpos( $currentpage, 'page-password-restore.php' ) == true ) { ?>
				<!-- PAGE - PASSWORD RESTORE -->
				<script src="js/specific/page-password-restore.js"></script>
				<!-- PAGE - PASSWORD RESTORE (END) -->
			<?php }
			if ( strpos( $currentpage, 'page-account.php' ) == true ) { ?>
				<!-- PAGE - ACCOUNT -->
				<script src="js/specific/page-account.js"></script>
				<!-- PAGE - ACCOUNT (END) -->
			<?php }
			if ( strpos( $currentpage, 'page-edit-profile.php' ) == true ) { ?>
				<!-- PAGE - EDIT PROFILE -->
				<script src="js/libs/jquery.nice-select.min.js"></script>
				<script src="js/specific/page-edit-profile.js"></script>
				<!-- PAGE - EDIT PROFILE (END) -->
			<?php }							
		?>
	</body>
</html>