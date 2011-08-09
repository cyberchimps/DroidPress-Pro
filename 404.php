<?php 

/*
	404
	Creates the iFeature 404 page.
	Copyright (C) 2011 CyberChimps
*/

/* Header call. */

	get_header(); 
	
/* End header. */

?>

<div id="content_wrap">

	<div id="content_left">
	
		<div class="content_padding">

			<div class="error">Error 404<br />
				<center></center><img src="<?php echo get_template_directory_uri() ;?>/images/confusedchimp.png" height="400" width="400" /></center>
			</div>
		
		</div><!--end content_padding-->
		
	</div><!--end content_left-->

	<div id="sidebar_right">
		<?php get_sidebar(); ?>
	</div>
	
</div><!--end content_wrap-->

<div style=clear:both;></div><!--clear-->

<?php get_footer(); ?>