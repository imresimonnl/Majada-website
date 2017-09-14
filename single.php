


<?php
	/*
	 * The Template for displaying all single posts
	 */

	get_header(); 
?>

<?php
	$post = $wp_query->post;

	if ( in_category( 'projecten' ) ) {
	  include( TEMPLATEPATH.'/content-project.php' );
	} 
	else {
	  include( TEMPLATEPATH.'/content.php' );
	}
?>

<?php get_footer(); ?>