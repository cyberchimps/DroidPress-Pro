<?php

/*
	Section: Meta
	Authors: Trent Lapinski, Tyler Cunningham 
	Description: Creates post meta content.
	Version: 2.0	
*/

/* Call globals. */	

	global $themename, $themeslug, $options;

/* End globals. */		 

?>

<?php 
		$author = $options[$themeslug.'_hide_author'];
		$category = $options[$themeslug.'_hide_categories'];
		$date = $options[$themeslug.'_hide_date'];
		$comments = $options[$themeslug.'_hide_comments'];
?>


<div class="meta">
	<div class="meta-category"><?php if ($category != '1'):?><?php the_category(' ') ?></div><div class="meta-rest"> on <?php endif;?><?php if ($date != '1'):?> <a href="<?php the_permalink() ?>"><?php the_time('F jS, Y') ?></a><?php endif;?> by <?php if ($author != '1'):?> <?php the_author_posts_link(); ?> <?php endif;?> - <?php if ($comments != '1'):?> <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments '); ?><?php endif;?> 
	</div>	
	<div style="clear:both;"></div>
</div>
