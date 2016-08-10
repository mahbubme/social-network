<?php 

	session_start(); 
	include ( "includes/connection.php" );
	include ( "functions/functions.php" );

	if ( !isset( $_SESSION['user_email'] ) ) {
		header( "location: index.php" );
	}else {

		include ( "header.php" );
		include ( "user_sidebar.php" );
?>
		<div class="col-sm-9">
			<div id="posts">
				<?php single_post(); ?>
			</div>
		</div>


<?php 

	include( "footer.php" );

} ?>