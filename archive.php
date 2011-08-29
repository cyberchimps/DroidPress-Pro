<?php 

/*
	Archive
	Creates the iFeature archive pages.
	Copyright (C) 2011 CyberChimps
	Version 2.0
*/

/* Header call. */

	get_header(); 
	
/* End header. */

?>

<div id="content_wrap">

	<div id="content_left">
		
		<div class="content_padding">
		
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<div class="archive-title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</div><br />

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<div class="archive-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;:</div><br />

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<div class="archive-title">Archive for <?php the_time('F jS, Y'); ?>:</div><br />

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<div class="archive-title">Archive for <?php the_time('F, Y'); ?>:</div><br />

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<div class="archive-title">Archive for <?php the_time('Y'); ?>:</div><br />

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<div class="archive-title"><Author Archive:</div><br />

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<div class="archive-title">Blog Archives:</div><br />

			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post_container">

				<div <?php post_class() ?>>
				
						<h2 class="archive_posts_title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						<?php get_template_part('meta', 'archive'); ?>

						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
				<div class="tags">
								<?php the_tags('Tags: ', ', ', '<br />'); ?>
							</div><!--end tags-->

							<div class="postmetadata">
										<?php get_template_part('share', 'index' ); ?>
															</div><!--end postmetadata-->
							
				</div><!--end post-->
			</div><!--end post_container-->

			<?php endwhile; ?>


			<?php get_template_part('pagination', 'archive' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
		</div><!--end content_padding-->
		
	</div><!--end content_left-->

	<div id="sidebar_right">
		<?php get_sidebar(); ?>
	</div>
	
</div><!--end content_wrap-->

<div style=clear:both;></div>

<?php get_footer(); ?>